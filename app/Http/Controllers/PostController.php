<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;
use Alaouy\Youtube\Facades\Youtube;
use App\Album;
use App\Announcement;
use App\Category;
use App\Comment;
use App\Event;
use App\Group;
use App\Hashtag;
use App\Http\Requests\CreateTimelineRequest;
use App\Http\Requests\UpdateTimelineRequest;
use App\Media;
use App\Notification;
use App\Page;
use App\Post;
use App\Repositories\TimelineRepository;
use App\Role;
use App\Setting;
use App\Timeline;
use App\User;
use App\Wallpaper;
use Carbon\Carbon;
use DB;
use Flash;
use Flavy;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use LinkPreview\LinkPreview;
use Prettus\Repository\Criteria\RequestCriteria;
use Storage;
use Teepluss\Theme\Facades\Theme;
use Validator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;

class PostController extends Controller
{
    //

    public function store(Request $request)
    {

//        request()->validate([
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);

        $input = $request->all();

        $input['user_id'] = session('userid');
        $input['type'] = "post";


        $post = Post::create($input);
        $post->notifications_user()->sync([Auth::user()->id], true);

        if ($files = $request->file('image')) {

            foreach($request->file('image') as $image){
                $ImageName =  "image-".time().'.'.$image->getClientOriginalName();
                $image->storeAs('images/posts/', $ImageName);

                $media = Media::create([
                    'title'  => $ImageName,
                    'type'   => 'image',
                    'source' => $ImageName,
                ]);

                $post->images()->attach($media);
            }


        }
        return  view('partial.post',compact('post'));

    }

    public function postcomment(Request $request)
    {
        $comment = Comment::create([
            'post_id'     => $request->post_id,
            'description' => $request->description,
            'user_id'     => session("userid"),
            'parent_id'   => $request->comment_id,
        ]);
        $post = Post::where('id', $request->post_id)->first();
        $posted_user = $post->user;
        if ($comment) {
            if (session("userid") != $post->user_id) {
                //Notify the user for comment on his/her post
                Notification::create(['user_id' => $post->user_id, 'post_id' => $request->post_id, 'notified_by' => Auth::user()->id, 'description' => Auth::user()->name . ' ' . trans('common.commented_on_your_post'), 'type' => 'comment_post']);
            }
            return view('partial.comment',compact('post','comment'));
//            return response()->json(['status' => '200', 'liked' => true, 'message' => 'post comment successfully ','comment' => $comment->id ]);
        }else{
//            return response()->json(['status' => '500', 'liked' => false, 'message' => 'post comment failed ', 'comment' => $comment->id ]);
        }
    }

    public function likeComment(Request $request)
    {
        $comment = Comment::findOrFail($request->comment_id);
        $comment_user = $comment->user;

        if (!$comment->comments_liked->contains(Auth::user()->id)) {
            $comment->comments_liked()->attach(Auth::user()->id);
            $comment_likes = $comment->comments_liked()->get();
            $like_count = $comment_likes->count();

            //sending email notification
            $user = User::find(Auth::user()->id);
            //$user_settings = $user->getUserSettings($comment_user->id);
//            if ($user_settings && $user_settings->email_like_comment == 'yes') {
//                Mail::send('emails.commentlikemail', ['user' => $user, 'comment_user' => $comment_user], function ($m) use ($user, $comment_user) {
//                    $m->from(Setting::get('noreply_email'), Setting::get('site_name'));
//                    $m->to($comment_user->email, $comment_user->name)->subject($user->name.' '.'likes your comment');
//                });
//            }

            //Notify the user for comment like
            if ($comment->user->id != Auth::user()->id) {
                Notification::create(['user_id' => $comment->user_id, 'post_id' => $comment->post_id, 'notified_by' => Auth::user()->id, 'description' => Auth::user()->name.' '.trans('common.liked_your_comment'), 'type' => $comment->id]);
            }

            return response()->json(['status' => '200', 'liked' => true, 'message' => 'successfully liked', 'likecount' => $like_count,'comment' => $comment->id ]);
        } else {
            $comment->comments_liked()->detach([Auth::user()->id]);
            $comment_likes = $comment->comments_liked()->get();
            $like_count = $comment_likes->count();

            //Notify the user for comment unlike
            if ($comment->user->id != Auth::user()->id) {
                Notification::create(['user_id' => $comment->user_id, 'post_id' => $comment->post_id, 'notified_by' => Auth::user()->id, 'description' => Auth::user()->name.' '.trans('common.unliked_your_comment'), 'type' => 'unlike_comment']);
            }

            return response()->json(['status' => '200', 'unliked' => false, 'message' => 'successfully unliked', 'likecount' => $like_count,'comment' => $comment->id ]);
        }

        }

        function likePost(Request $request)
        {
            $like_count = 0;
            $post = Post::findOrFail($request->post_id);
            $posted_user = $post->user;


            //Like the post
            if (!$post->users_liked->contains(Auth::user()->id)) {
                $post->users_liked()->attach(Auth::user()->id, ['created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
                $post->notifications_user()->attach(Auth::user()->id);

                //Notify the user for post like
                $notify_message = 'liked your post';
                $notify_type = 'like_post';
                $status_message = 'successfully liked';
                $like_count = $post->users_liked()->count();

                if ($post->user->id != Auth::user()->id) {
                    Notification::create(['user_id' => $post->user->id, 'post_id' => $post->id, 'notified_by' => Auth::user()->id, 'description' => Auth::user()->name . ' ' . $notify_message, 'type' => $notify_type]);
                }

                return response()->json(['status' => '200', 'liked' => true, 'message' => $status_message, 'likecount' => $like_count]);
            }else{
                $post->users_liked()->detach([Auth::user()->id]);
                $post->notifications_user()->detach([Auth::user()->id]);

                //Notify the user for post unlike
                $notify_message = 'unliked your post';
                $notify_type = 'unlike_post';
                $status_message = 'successfully unliked';
                $like_count = $post->users_liked()->count();

                if ($post->user->id != Auth::user()->id) {
                    Notification::create(['user_id' => $post->user->id, 'post_id' => $post->id, 'notified_by' => Auth::user()->id, 'description' => Auth::user()->name.' '.$notify_message, 'type' => $notify_type]);
                }

                return response()->json(['status' => '200', 'liked' => false, 'message' => $status_message, 'likecount' => $like_count]);
            }

        }

        public function Profile(Request $request)
        {
            return view('profile');
        }

}
