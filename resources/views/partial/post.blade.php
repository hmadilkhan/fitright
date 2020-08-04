<div class="central-meta item">
    <div class="user-post">
        <div class="friend-info">
            <figure>
                <img src="{{asset('public/images/resources/nearly1.jpg')}}" alt="">
            </figure>
            <div class="friend-name">
                <div class="more">
                    <div class="more-post-optns"><i class="ti-more-alt"></i>
                        <ul>
                            <li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
                            <li><i class="fa fa-trash-o"></i>Delete Post</li>
                            <li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
                            <li><i class="fa fa-address-card-o"></i>Boost This Post</li>
                            <li><i class="fa fa-clock-o"></i>Schedule Post</li>
                            <li><i class="fa fa-wpexplorer"></i>Select as featured</li>
                            <li><i class="fa fa-bell-slash-o"></i>Turn off Notifications</li>
                        </ul>
                    </div>
                </div>
                <ins><a href="time-line.html" title="">{{$post->user->name}}</a> Post Album</ins>
                <span><i class="fa fa-globe"></i> published: {{Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
            </div>
            <div class="post-meta">
                <p>
                    {{$post->description}}
                </p>
                <figure>
                    <div class="img-bunch">

                        <div class="col-lg-12 col-md-12 col-sm-12">

                            @foreach($post->images()->get() as $images)
                                <figure>
                                    <a class="strip" href="{{asset('storage/app/images/posts/')."/".$images->source}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                        <img src="{{asset('storage/app/images/posts/')."/".$images->source}}" alt="">
                                    </a>
                                </figure>
                            @endforeach


                        </div>


                    </div>
                    <ul class="like-dislike">
                        <li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
                        <li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
                        <li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
                    </ul>
                </figure>
                <div class="we-video-info">
                    <ul>
                        <li>
                            <span class="views" title="views">
                                <i class="fa fa-eye"></i>
                                <ins>1.2k</ins>
                            </span>
                        </li>
                        <li>
                            <div id="likesDiv" onclick="likePost('{{$post->id}}')" class="likes heart {{$post->users_liked()->count() > 0 ? 'happy' : 'broken'}}" title="Like/Dislike">❤ <span id="likePostCount{{$post->id}}">{{$post->users_liked()->count()}}</span></div>
                        </li>
                        <li>
                            <span class="comment" title="Comments">
                                <i class="fa fa-commenting"></i>
                                <ins>{{count($post->comments()->get())}}</ins>
                            </span>
                        </li>

                        <li>
                            <span>
                                <a class="share-pst" href="#" title="Share">
                                    <i class="fa fa-share-alt"></i>
                                </a>
                                <ins>20</ins>
                            </span>
                        </li>
                    </ul>
                    <div class="users-thumb-list">
                        <a data-toggle="tooltip" title="Anderw" href="#">
                            <img alt="" src="{{asset('public/images/resources/userlist-1.jpg')}}">
                        </a>
                        <a data-toggle="tooltip" title="frank" href="#">
                            <img alt="" src="{{asset('public/images/resources/userlist-2.jpg')}}">
                        </a>
                        <a data-toggle="tooltip" title="Sara" href="#">
                            <img alt="" src="{{asset('public/images/resources/userlist-3.jpg')}}">
                        </a>
                        <a data-toggle="tooltip" title="Amy" href="#">
                            <img alt="" src="{{asset('public/images/resources/userlist-4.jpg')}}">
                        </a>
                        <a data-toggle="tooltip" title="Ema" href="#">
                            <img alt="" src="{{asset('public/images/resources/userlist-5.jpg')}}">
                        </a>
                        <span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
                    </div>
                </div>
            </div>
            <div class="coment-area" style="display: block;">
                <ul class="we-comet" id="replyarea{{$post->id}}">
                    @foreach($post->comments()->get() as $commentData)
                        <li>
                            <div class="comet-avatar">
                                <img src="{{asset('public/images/resources/nearly3.jpg')}}" alt="">
                            </div>
                            <div class="we-comment">
                                <h5><a href="time-line.html" title="">{{ $commentData->user->name }}</a></h5>
                                <p>{{$commentData->description}}</p>
                                <div class="inline-itms">
                                    <span>{{Carbon\Carbon::parse($commentData->created_at)->diffForHumans() }}</span>
                                    <a class="we-reply" id="reply{{$commentData->id}}" onclick="showCommentBoxForReply('{{$commentData->parent_id}}')" title="Reply"><i class="fa fa-reply"></i></a>

                                    <a  onclick="like('{{$commentData->id}}')" title=""><i id="iconColor{{$commentData->id}}" class="fa fa-heart {{$commentData->comments_liked->contains(Auth::user()->id) ? 'text-danger' : ''}}"></i><span id="likeCount{{$commentData->id}}">{{$commentData->comments_liked()->count()}}</span></a>
                                </div>
                                <!-- SECTION START FOR REPLY -->
                                <div id="commentArea{{$commentData->id}}" class="coment-area" style="display: block;">

                                    <ul class="we-comet" id="replyul{{$commentData->id}}" >
                                        @if($commentData->replies()->count() > 0)
                                            @foreach($commentData->replies as $reply)
                                                <li>
                                                    <div class="we-comment">
                                                        <h5><a href="time-line.html" title="">{{ $reply->user->name }}</a></h5>
                                                        <p>{{$reply->description}}</p>
                                                        <div class="inline-itms">
                                                            <span>{{Carbon\Carbon::parse($reply->created_at)->diffForHumans() }}</span>
                                                            <a  onclick="like('{{$reply->id}}')" title=""><i id="iconColor{{$reply->id}}" class="fa fa-heart {{$reply->comments_liked->contains(Auth::user()->id) ? 'text-danger' : ''}}"></i><span id="likeCount{{$reply->id}}">{{$reply->comments_liked()->count()}}</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif

                                    </ul>


                                    <!-- COMMENT BOX FOR REPLY -->
                                    <div id="replyCommentBox{{$post->id}}" class="post-comt-box " style="margin-top:10px; display: none;">
                                        <form method="post" action="" id="commentForm{{$post->id}}" >
                                            <textarea id="replybox{{$post->id}}" placeholder="Post your comment" onkeypress="postComment(event,'{{$post->id}}',this.id,'{{$commentData->id}}','reply')" ></textarea>
                                            <div class="add-smiles">
                                                <div class="uploadimage">
                                                    <i class="fa fa-image"></i>
                                                    <label class="fileContainer">
                                                        <input type="file">
                                                    </label>
                                                </div>
                                                <span class="em em-expressionless" title="add icon"></span>
                                                <div class="smiles-bunch">
                                                    <i onclick="emojiCallReply('{{Spatie\Emoji\Emoji::thumbsUpLightSkinTone()}}','{{$commentData->id}}')" class="em em---1"></i>
                                                    <i onclick="emojiCallReply('{{Spatie\Emoji\Emoji::grinningFaceWithBigEyes()}}','{{$commentData->id}}')" class="em em-smiley"></i>
                                                    <i onclick="emojiCallReply('{{Spatie\Emoji\Emoji::hushedFace()}}','{{$commentData->id}}')" class="em em-anguished"></i>
                                                    <i onclick="emojiCallReply('{{Spatie\Emoji\Emoji::grinningFaceWithSmilingEyes()}}','{{$commentData->id}}')" class="em em-laughing"></i>
                                                    <i onclick="emojiCallReply('{{Spatie\Emoji\Emoji::angryFace()}}','{{$commentData->id}}')" class="em em-angry"></i>
                                                    <i onclick="emojiCallReply('{{Spatie\Emoji\Emoji::astonishedFace()}}','{{$commentData->id}}')" class="em em-astonished"></i>
                                                    <i onclick="emojiCallReply('{{Spatie\Emoji\Emoji::kissingFaceWithClosedEyes()}}','{{$commentData->id}}')" class="em em-blush"></i>
                                                    <i onclick="emojiCallReply('{{Spatie\Emoji\Emoji::disappointedFace()}}','{{$commentData->id}}')" class="em em-disappointed"></i>
                                                    <i onclick="emojiCallReply('{{Spatie\Emoji\Emoji::worriedFace()}}','{{$commentData->id}}')" class="em em-worried"></i>
                                                    <i onclick="emojiCallReply('{{Spatie\Emoji\Emoji::faceBlowingAKiss()}}','{{$commentData->id}}')" class="em em-kissing_heart"></i>
                                                    <i onclick="emojiCallReply('{{Spatie\Emoji\Emoji::poutingFace()}}','{{$commentData->id}}')" class="em em-rage"></i>
                                                    <i onclick="emojiCallReply('{{Spatie\Emoji\Emoji::faceWithTongue()}}','{{$commentData->id}}')" class="em em-stuck_out_tongue"></i>
                                                </div>
                                            </div>

                                            <button type="submit"></button>
                                        </form>
                                    </div>
                                    <!-- COMMENT BOX END HERE -->
                                </div>
                                <!-- SECTION END FOR REPLY -->
                            </div>
                        </li>
                    @endforeach

                    <li>
                        <a href="#" title="" class="showmore{{$post->id}} underline"></a>
                    </li>

                    <li class="post-comment">
                        <div class="comet-avatar">
                            <img src="{{asset('public/images/resources/nearly1.jpg')}}" alt="">
                        </div>
                        <div class="post-comt-box">
                            <form method="post" action="" >
                                <textarea id="commentbox{{$post->id}}" placeholder="Post your comment" onkeypress="postComment(event,'{{$post->id}}',this.id,'','comment')" ></textarea>
                                <div class="add-smiles">
                                    <div class="uploadimage">
                                        <i class="fa fa-image"></i>
                                        <label class="fileContainer">
                                            <input type="file">
                                        </label>
                                    </div>
                                    <span class="em em-expressionless" title="add icon"></span>
                                    <div class="smiles-bunch">
                                        <i onclick="emojiCall('{{Spatie\Emoji\Emoji::thumbsUpLightSkinTone()}}','{{$post->id}}')" class="em em---1"></i>
                                        <i onclick="emojiCall('{{Spatie\Emoji\Emoji::grinningFaceWithBigEyes()}}','{{$post->id}}')" class="em em-smiley"></i>
                                        <i onclick="emojiCall('{{Spatie\Emoji\Emoji::hushedFace()}}','{{$post->id}}')" class="em em-anguished"></i>
                                        <i onclick="emojiCall('{{Spatie\Emoji\Emoji::grinningFaceWithSmilingEyes()}}','{{$post->id}}')" class="em em-laughing"></i>
                                        <i onclick="emojiCall('{{Spatie\Emoji\Emoji::angryFace()}}','{{$post->id}}')" class="em em-angry"></i>
                                        <i onclick="emojiCall('{{Spatie\Emoji\Emoji::astonishedFace()}}','{{$post->id}}')" class="em em-astonished"></i>
                                        <i onclick="emojiCall('{{Spatie\Emoji\Emoji::kissingFaceWithClosedEyes()}}','{{$post->id}}')" class="em em-blush"></i>
                                        <i onclick="emojiCall('{{Spatie\Emoji\Emoji::disappointedFace()}}','{{$post->id}}')" class="em em-disappointed"></i>
                                        <i onclick="emojiCall('{{Spatie\Emoji\Emoji::worriedFace()}}','{{$post->id}}')" class="em em-worried"></i>
                                        <i onclick="emojiCall('{{Spatie\Emoji\Emoji::faceBlowingAKiss()}}','{{$post->id}}')" class="em em-kissing_heart"></i>
                                        <i onclick="emojiCall('{{Spatie\Emoji\Emoji::poutingFace()}}','{{$post->id}}')" class="em em-rage"></i>
                                        <i onclick="emojiCall('{{Spatie\Emoji\Emoji::faceWithTongue()}}','{{$post->id}}')" class="em em-stuck_out_tongue"></i>
                                    </div>
                                </div>

                                <button type="submit"></button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div><!-- album post -->
