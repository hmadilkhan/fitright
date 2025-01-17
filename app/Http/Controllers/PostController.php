<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            $user = User::find(session('userid'));//User::where('id',session('userid'))->get();
            $user_settings = $user->getUserSettings(session('userid'));
            return view('profile',compact('user','user_settings'));
        }

        public function changeCover(Request $request)
        {

            if ($files = $request->file('cover')) {

                $ImageName =  "image-".time().'.'.$request->file('cover')->getClientOriginalExtension();
                $request->file('cover')->storeAs('images/cover/', $ImageName);


//                list($width, $height) = getimagesize($request->file('cover')->getRealPath());
//
//                $avatar = Image::make($request->file('cover')->getRealPath());
//
//                if ($width > $height) {
//                    $avatar->crop($height, $height);
//                } else {
//                    $avatar->crop($width, $width);
//                }

//                $avatar->save(storage_path('app/images/cover/'.$ImageName), 60);

                $media = Media::create([
                    'title'  => $ImageName,
                    'type'   => 'image',
                    'source' => $ImageName,
                ]);

                $timeline = Timeline::where('id', session('timelineID'))->first();
                $timeline->cover_id = $media->id;

                if ($timeline->save()) {
                    return response()->json(['status' => '200', 'cover' => $ImageName, 'message' => trans('messages.update_cover_success')]);
                }

            }
            else{
                return response()->json(['status' => '201', 'message' => trans('messages.update_cover_failed')]);
            }
        }

        public function changeAvatar(Request $request)
        {
            if ($files = $request->file('avatar')) {

                $ImageName =  "image-".time().'.'.$request->file('avatar')->getClientOriginalExtension();

                list($width, $height) = getimagesize($request->file('avatar')->getRealPath());

                $avatar = Image::make($request->file('avatar')->getRealPath());

                if ($width > $height) {
                    $avatar->crop($height, $height);
                } else {
                    $avatar->crop($width, $width);
                }

                $avatar->save(storage_path('app/images/avatar/'.$ImageName), 60);

                $media = Media::create([
                    'title'  => $ImageName,
                    'type'   => 'image',
                    'source' => $ImageName,
                ]);

                $timeline = Timeline::where('id', session('timelineID'))->first();
                $timeline->avatar_id = $media->id;

                if ($timeline->save()) {
                    return response()->json(['status' => '200', 'avatar' => $ImageName, 'message' => trans('messages.update_cover_success')]);
                }

            }
            else{
                return response()->json(['status' => '201', 'message' => trans('messages.update_cover_failed')]);
            }
        }

        public function editProfile(Request $request)
        {
            $user = User::where('id',session('userid'))->first();

            $user->gender = $request->gender;
            $user->country = $request->country;
            $user->city = $request->city;
            $user->interests = implode(",",$request->interests);

            if($user->save()){
                $timeline = Timeline::where('id', session('timelineID'))->first();
                $timeline->name = $request->name;
                $timeline->username = $request->username;
                $timeline->about = $request->about;
                $timeline->save();
                return response()->json(['status' => '200','message' => 'Profile Updated Successfully']);
            }else{
                return response()->json(['status' => '201','message' => 'Profile Updated Failed']);
            }
        }

        public function editSettings(Request $request)
        {
            $user_settings = DB::table('user_settings')->where('user_id',session('userid'))->get();
            if(count($user_settings)){
                $fields = [
                    'comment_privacy' =>$request->comments,
                    'follow_privacy' =>$request->follow,
                    'post_privacy' =>$request->post_privacy,
                    'confirm_follow' =>$request->confirm,
                    'timeline_post_privacy' =>$request->post_timeline,
                    'message_privacy' =>$request->message,
                ];
                if(DB::table('user_settings')->where('user_id',session('userid'))->update($fields))
                {
                    return response()->json(['status' => '200','message' => 'Settings Updated Successfully']);
                }
                else
                {
                    return response()->json(['status' => '201','message' => 'Settings Updation Failed']);
                }
            }
        }

    public function editNotification(Request $request)
    {
        $user_settings = DB::table('user_settings')->where('user_id',session('userid'))->get();
        if(count($user_settings)){
            $fields = [
                'email_follow' =>($request->email_follow == "" ? 'off' : $request->email_follow),
                'email_like_post' =>($request->email_like_post == "" ? 'off' : $request->email_like_post),
                'email_post_share' =>($request->email_post_share == "" ? 'off' : $request->email_post_share),
                'email_comment_post' =>($request->email_comment_post == "" ? 'off' : $request->email_comment_post),
                'email_like_comment' =>($request->email_like_comment == "" ? 'off' : $request->email_like_comment),
                'email_reply_comment' =>($request->email_reply_comment == "" ? 'off' : $request->email_reply_comment),
                'email_join_group' =>($request->email_join_group == "" ? 'off' : $request->email_join_group),
                'email_like_page' =>($request->email_like_page == "" ? 'off' : $request->email_like_page),
            ];
            if(DB::table('user_settings')->where('user_id',session('userid'))->update($fields))
            {
                return response()->json(['status' => '200','message' => 'Email Notifications Updated Successfully']);
            }
            else
            {
                return response()->json(['status' => '201','message' => 'Email Notifications Updation Failed']);
            }
        }
    }

    public function getTimeline()
    {
        return view('partial.profile.timeline');
    }

    public function getAbout()
    {
        return view('partial.profile.about');
    }

    public function getFriends()
    {
        return view('partial.profile.friends');
    }

    public function getPhotos()
    {
        return view('partial.profile.photos');
    }

    public function getVideos()
    {
        return view('partial.profile.videos');
    }

    public function getSettings()
    {
        $user = User::find(session('userid'));//User::where('id',session('userid'))->get();
        $user_settings = $user->getUserSettings(session('userid'));
        return view('partial.profile.settings',compact('user','user_settings'));
    }

}
