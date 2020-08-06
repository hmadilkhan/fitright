        @if($comment->parent_id >  0)
            <li>
                <div class="we-comment">
                    <h5><a href="time-line.html" title="">{{ $comment->user->name }}</a></h5>
                    <p>{{$comment->description}}</p>
                    <div class="inline-itms">
                        <span>{{Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span>
                        <a class="we-reply" id="reply{{$comment->id}}" onclick="showCommentBoxForReply('{{$comment->parent_id}}')" title="Reply"><i class="fa fa-reply"></i></a>
                        <a  onclick="like('{{$comment->id}}')" title=""><i id="iconColor{{$comment->id}}" class="fa fa-heart {{$comment->comments_liked->contains(Auth::user()->id) ? 'text-danger' : ''}}"></i><span id="likeCount{{$comment->id}}">{{$comment->comments_liked()->count()}}</span></a>
                    </div>
                </div>
            </li>
        @else
            <li>
                <div class="comet-avatar">
                    <img src="{{($post->getAvatar($comment->user_id) ? asset('storage/app/images/avatar/'.$post->getAvatar($comment->user_id)) : asset('public/images/resources/nearly3.jpg'))}}" alt="">
                </div>
                <div class="we-comment">
                    <h5><a href="time-line.html" title="">{{ $comment->user->name }}</a></h5>
                    <p>{{$comment->description}}</p>
                    <div class="inline-itms">
                        <span>{{Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span>
                        <a class="we-reply" id="reply{{$comment->id}}" onclick="showCommentBoxForReply('{{$comment->id}}')" title="Reply"><i class="fa fa-reply"></i></a>

                        <a  onclick="like('{{$comment->id}}')" title=""><i id="iconColor{{$comment->id}}" class="fa fa-heart {{$comment->comments_liked->contains(Auth::user()->id) ? 'text-danger' : ''}}"></i><span id="likeCount{{$comment->id}}">{{$comment->comments_liked()->count()}}</span></a>
                </div>
                    <!-- SECTION START FOR REPLY -->
                    <div id="commentArea{{$comment->id}}" class="coment-area" style="display: none;">

                        <ul class="we-comet" id="replyul{{$comment->id}}">

                        </ul>
                        <!-- COMMENT BOX FOR REPLY -->
                        <div id="replyCommentBox{{$comment->id}}" class="post-comt-box " style="margin-top:10px; display: none;">
                            <form method="post" action=""  >
                                <textarea id="replybox{{$comment->id}}" placeholder="Post your comment" onkeypress="postReply(event,'{{$post->id}}',this.id,'{{$comment->id}}','reply')" ></textarea>
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
                        <!-- COMMENT BOX END HERE -->
                    </div>
                    <!-- SECTION END FOR REPLY -->
                </div>
            </li>
        @endif
