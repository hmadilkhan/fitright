@extends('layouts.app')

@section('content')



        <section>
            <div class="gap2 gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row merged20" id="page-contents">
                                <div class="col-lg-3">
                                    <aside class="sidebar static left">


                                        <!-- Menu -->
                                        @include('partial.leftSidebar.menu')
                                        <div class="advertisment-box">
                                            <h4 class="">advertisment</h4>
                                            <figure>
                                                <a href="#" title="Advertisment"><img src="{{asset('public/images/resources/ad-widget.gif')}}" alt=""></a>
                                            </figure>
                                        </div><!-- advertisment box -->

                                        <div class="widget">
                                            <h4 class="widget-title">Recent Activity</h4>
                                            <ul class="activitiez">
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>10 hours Ago</i>
                                                        <span><a href="#" title="">Commented on Video posted </a></span>
                                                        <h6>by <a href="time-line.html">black demon.</a></h6>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>30 Days Ago</i>
                                                        <span><a href="#" title="">Posted your status. “Hello guys, how are you?”</a></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>2 Years Ago</i>
                                                        <span><a href="#" title="">Share a video on her timeline.</a></span>
                                                        <h6>"<a href="#">you are so funny mr.been.</a>"</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- recent activites -->
                                        <div class="widget stick-widget">
                                            <h4 class="widget-title">Who's follownig</h4>
                                            <ul class="followers">
                                                <li>
                                                    <figure><img src="{{asset('public/images/resources/friend-avatar2.jpg')}}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Kelly Bill</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="{{asset('public/images/resources/friend-avatar4.jpg')}}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Issabel</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="{{asset('public/images/resources/friend-avatar6.jpg')}}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Andrew</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="{{asset('public/images/resources/friend-avatar8.jpg')}}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Sophia</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="{{asset('public/images/resources/friend-avatar3.jpg')}}" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Allen</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- who's following -->
                                    </aside>
                                </div><!-- sidebar -->
                                <div class="col-lg-6">
                                    <!-- NEW POST -->
                                    @include('partial.create_post')

                                    <div class="loadMore">

                                        <div id="newposts"></div>


                                        @foreach($posts as $post)
                                            <div class="central-meta item">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img width="60" height="60" src="{{($post->getAvatar($post->user_id) != "" ? asset('storage/app/images/avatar/'.$post->getAvatar($post->user_id))  : asset('public/images/resources/nearly1.jpg'))}}" alt="">
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
                                                        <span><i class="fa fa-globe"></i> published:{{Carbon\Carbon::parse($post->created_at)->diffForHumans() }} </span>
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
                                                            <li class="reply{{$post->id}}">
                                                                <div class="comet-avatar">
                                                                    <img src="{{($post->getAvatar($commentData->user_id) ? asset('storage/app/images/avatar/'.$post->getAvatar($commentData->user_id)) : asset('public/images/resources/nearly3.jpg'))}}" alt="">
                                                                </div>
                                                                <div class="we-comment">
                                                                    <h5><a href="time-line.html" title="">{{ $commentData->user->name }}</a></h5>
                                                                    <p>{{$commentData->description}}</p>
                                                                    <div class="inline-itms">
                                                                        <span>{{Carbon\Carbon::parse($commentData->created_at)->diffForHumans() }}</span>
                                                                        <a class="we-reply" id="reply{{$commentData->id}}" onclick="showCommentBoxForReply('{{$commentData->id}}')" title="Reply"><i class="fa fa-reply"></i></a>

                                                                        <a  onclick="like('{{$commentData->id}}')" title=""><i id="iconColor{{$commentData->id}}" class="fa fa-heart {{$commentData->comments_liked->contains(Auth::user()->id) ? 'text-danger' : ''}}"></i><span id="likeCount{{$commentData->id}}">{{$commentData->comments_liked()->count()}}</span></a>
                                                                    </div>
                                                                    <!-- SECTION START FOR REPLY -->
                                                                    <div id="commentArea{{$commentData->id}}" class="coment-area" style="display: none;">

                                                                        <ul class="we-comet" id="replyul{{$commentData->id}}" >
                                                                            @if($commentData->replies()->count() > 0)
                                                                            @foreach($commentData->replies as $reply)
                                                                            <li>
                                                                                <div class="row">
                                                                                    <div class="col-sm-1">
                                                                                        <div class="comet-avatar">
                                                                                            <img src="{{($post->getAvatar($commentData->user_id) ? asset('storage/app/images/avatar/'.$post->getAvatar($commentData->user_id)) : asset('public/images/resources/nearly3.jpg'))}}" alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-11">
                                                                                        <div class="we-comment">
                                                                                            <h5><a href="time-line.html" title="">{{ $reply->user->name }}</a></h5>
                                                                                            <p>{{$reply->description}}</p>
                                                                                            <div class="inline-itms">
                                                                                                <span>{{Carbon\Carbon::parse($reply->created_at)->diffForHumans() }}</span>
                                                                                                <a class="we-reply" id="reply{{$commentData->id}}" onclick="showCommentBoxForReply('{{$commentData->parent_id}}')" title="Reply"><i class="fa fa-reply"></i></a>
                                                                                                <a  onclick="like('{{$reply->id}}')" title=""><i id="iconColor{{$reply->id}}" class="fa fa-heart {{$reply->comments_liked->contains(Auth::user()->id) ? 'text-danger' : ''}}"></i><span id="likeCount{{$reply->id}}">{{$reply->comments_liked()->count()}}</span></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </li>
                                                                            @endforeach
                                                                            @endif

                                                                        </ul>


                                                                        <!-- COMMENT BOX FOR REPLY -->
                                                                            <div id="replyCommentBox{{$commentData->id}}" class="post-comt-box " style="margin-top:10px; display: none;">
                                                                                <form method="post" action="">
                                                                                    <textarea id="replybox{{$commentData->id}}" placeholder="Post your comment" onkeypress="postReply(event,'{{$post->id}}',this.id,'{{$commentData->id}}','reply')" ></textarea>
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
                                                                <a  href="#" title="" class="showmore{{$post->id}} underline"></a>
                                                            </li>

                                                            <li class="post-comment">
                                                                <div class="comet-avatar">
                                                                    <img src="{{($post->getAvatar($commentData->user_id) ? asset('storage/app/images/avatar/'.$post->getAvatar($commentData->user_id)) : asset('public/images/resources/nearly3.jpg'))}}" alt="">
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
                                        @endforeach


                                    </div>
                                </div><!-- centerl meta -->
                                <div class="col-lg-3">
                                    <aside class="sidebar static right">
                                        <div class="widget">
                                            <h4 class="widget-title">Your page</h4>
                                            <div class="your-page">
                                                <figure>
                                                    <a href="#" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
                                                </figure>
                                                <div class="page-meta">
                                                    <a href="#" title="" class="underline">My Creative Page</a>
                                                    <span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em>9</em></a></span>
                                                    <span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em>2</em></a></span>
                                                </div>
                                                <ul class="page-publishes">
                                                    <li>
                                                        <span><i class="ti-pencil-alt"></i>Publish</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="ti-camera"></i>Photo</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="ti-video-camera"></i>Live</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fa fa-user-plus"></i>Invite</span>
                                                    </li>
                                                </ul>
                                                <div class="page-likes">
                                                    <ul class="nav nav-tabs likes-btn">
                                                        <li class="nav-item"><a class="active" href="#link1" data-toggle="tab" data-ripple="">likes</a></li>
                                                        <li class="nav-item"><a class="" href="#link2" data-toggle="tab" data-ripple="">views</a></li>
                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div class="tab-pane active fade show " id="link1" >
                                                            <span><i class="ti-heart"></i>884</span>
                                                            <a href="#" title="weekly-likes">35 new likes this week</a>
                                                            <div class="users-thumb-list">
                                                                <a href="#" title="Anderw" data-toggle="tooltip">
                                                                    <img src="images/resources/userlist-1.jpg" alt="">
                                                                </a>
                                                                <a href="#" title="frank" data-toggle="tooltip">
                                                                    <img src="images/resources/userlist-2.jpg" alt="">
                                                                </a>
                                                                <a href="#" title="Sara" data-toggle="tooltip">
                                                                    <img src="images/resources/userlist-3.jpg" alt="">
                                                                </a>
                                                                <a href="#" title="Amy" data-toggle="tooltip">
                                                                    <img src="images/resources/userlist-4.jpg" alt="">
                                                                </a>
                                                                <a href="#" title="Ema" data-toggle="tooltip">
                                                                    <img src="images/resources/userlist-5.jpg" alt="">
                                                                </a>
                                                                <a href="#" title="Sophie" data-toggle="tooltip">
                                                                    <img src="images/resources/userlist-6.jpg" alt="">
                                                                </a>
                                                                <a href="#" title="Maria" data-toggle="tooltip">
                                                                    <img src="images/resources/userlist-7.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="link2" >
                                                            <span><i class="fa fa-eye"></i>440</span>
                                                            <a href="#" title="weekly-likes">440 new views this week</a>
                                                            <div class="users-thumb-list">
                                                                <a href="#" title="Anderw" data-toggle="tooltip">
                                                                    <img src="images/resources/userlist-1.jpg" alt="">
                                                                </a>
                                                                <a href="#" title="frank" data-toggle="tooltip">
                                                                    <img src="images/resources/userlist-2.jpg" alt="">
                                                                </a>
                                                                <a href="#" title="Sara" data-toggle="tooltip">
                                                                    <img src="images/resources/userlist-3.jpg" alt="">
                                                                </a>
                                                                <a href="#" title="Amy" data-toggle="tooltip">
                                                                    <img src="images/resources/userlist-4.jpg" alt="">
                                                                </a>
                                                                <a href="#" title="Ema" data-toggle="tooltip">
                                                                    <img src="images/resources/userlist-5.jpg" alt="">
                                                                </a>
                                                                <a href="#" title="Sophie" data-toggle="tooltip">
                                                                    <img src="images/resources/userlist-6.jpg" alt="">
                                                                </a>
                                                                <a href="#" title="Maria" data-toggle="tooltip">
                                                                    <img src="images/resources/userlist-7.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- page like widget -->
                                        <div class="widget">
                                            <h4 class="widget-title">Explor Events <a title="" href="#" class="see-all">See All</a></h4>
                                            <div class="rec-events bg-purple">
                                                <i class="ti-gift"></i>
                                                <h6><a href="" title="">Ocean Motel good night event in columbia</a></h6>
                                                <img src="images/clock.png" alt="">
                                            </div>
                                            <div class="rec-events bg-blue">
                                                <i class="ti-microphone"></i>
                                                <h6><a href="" title="">2016 The 3rd International Conference</a></h6>
                                                <img src="images/clock.png" alt="">
                                            </div>
                                        </div><!-- explore events -->
                                        <div class="widget">
                                            <h4 class="widget-title">Profile intro</h4>
                                            <ul class="short-profile">
                                                <li>
                                                    <span>about</span>
                                                    <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft </p>
                                                </li>
                                                <li>
                                                    <span>fav tv show</span>
                                                    <p>Sacred Games, Spartcus Blood, Games of Theron </p>
                                                </li>
                                                <li>
                                                    <span>favourit music</span>
                                                    <p>Justin Biber, Shakira, Nati Natasah</p>
                                                </li>
                                            </ul>
                                        </div><!-- profile intro widget -->
                                        <div class="widget stick-widget">
                                            <h4 class="widget-title">Recent Links <a title="" href="#" class="see-all">See All</a></h4>
                                            <ul class="recent-links">
                                                <li>
                                                    <figure><img src="images/resources/recentlink-1.jpg" alt=""></figure>
                                                    <div class="re-links-meta">
                                                        <h6><a href="#" title="">moira's fade reaches much farther than you think.</a></h6>
                                                        <span>2 weeks ago </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="images/resources/recentlink-2.jpg" alt=""></figure>
                                                    <div class="re-links-meta">
                                                        <h6><a href="#" title="">daniel asks if we want him to do the voice of doomfist</a></h6>
                                                        <span>3 months ago </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="images/resources/recentlink-3.jpg" alt=""></figure>
                                                    <div class="re-links-meta">
                                                        <h6><a href="#" title="">the pitnik overwatch scandals.</a></h6>
                                                        <span>1 day before</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- recent links -->
                                    </aside>
                                </div><!-- sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




<script>



 function postComment(e,post,description,comment_id,mode) {
     if (e.key === 'Enter' || e.keyCode === 13) {

         $.ajax({
            url:"{{url('/post-comment')}}",
             method:"POST",
             data:{"_token": "{{ csrf_token() }}",post_id:post,description:$('#'+description).val(),comment_id:comment_id},
             success:function(data)
             {
                 if(data){
                     var comment = $('#'+description).val();
                     var parent = jQuery(".showmore"+post).parent("li");
                     $(data).insertBefore(parent);
                     $('#'+description).val('');
                 }else{
                     console.log("Error");
                 }
            }
        });
     }
 }

    function postReply(e,post,description,comment_id,mode) {
    if (e.key === 'Enter' || e.keyCode === 13) {

        $.ajax({
            url:"{{url('/post-comment')}}",
            method:"POST",
            data:{"_token": "{{ csrf_token() }}",post_id:post,description:$('#'+description).val(),comment_id:comment_id},
            success:function(data)
            {
                if(data){
                    var comment = $('#'+description).val();
                    var parent = jQuery(".showmore").parent("li");
                    $('#replyul'+comment_id).append(data);
                    $('#replyCommentBox'+comment_id).css('display','none');
                    $('#replybox'+comment_id).val('');
                }else{
                    console.log("Error");
                }
            }
        });
    }
    }



 function like(comment_id)
 {
     $.ajax({
         url:"{{url('/like-comment')}}",
         method:"POST",
         data:{"_token": "{{ csrf_token() }}",comment_id:comment_id},
         success:function(data)
         {
             console.log("Count "+data.likecount)
             if(data.liked){
                 //Likes the comment
                 $('#iconColor'+comment_id).addClass('text-danger');
             }else{
                 //Unlikes the comment
                 $('#iconColor'+comment_id).removeClass('text-danger');
             }

             $('#likeCount'+comment_id).html(data.likecount);
                //#fb5b5b

         }
     });
 }

 function showCommentBoxForReply(id)
 {

     $('#replyCommentBox'+id).css('display','block');
     $("#commentArea"+id).css('display','block');

 }

 function emojiCall(id,post)
 {
     $('#commentbox'+post).val($('#commentbox'+post).val() + id);
 }

 function emojiCallReply(id,comment)
 {
     $('#replybox'+comment).val($('#replybox'+comment).val() + id);
 }

 function likePost(post)
 {
     $.ajax({
         url:"{{url('/like-post')}}",
         method:"POST",
         data:{"_token": "{{ csrf_token() }}",post_id:post},
         success:function(data)
         {
             if(data.liked){
                 //Likes the comment
                $('#likesDiv').removeClass('broken');
                $('#likesDiv').addClass('happy');


             }else{
                 //Unlikes the comment
                 $('#likesDiv').removeClass('happy');
                 $('#likesDiv').addClass('broken');
             }

             $('#likePostCount'+post).html(data.likecount);
             //#fb5b5b

         }
     });
 }

    </script>
@endsection

