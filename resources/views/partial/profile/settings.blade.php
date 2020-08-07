<div class="col-lg-9">
    <div class="central-meta">
        <div class="about">
            <div class="d-flex flex-row mt-2">
                <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" >
                    <li class="nav-item">
                        <a href="#gen-setting" class="nav-link active" data-toggle="tab" ><i class="fa fa-gear"></i> General Setting</a>
                    </li>
                    <li class="nav-item">
                        <a href="#edit-profile" class="nav-link" data-toggle="tab" ><i class="fa fa-pencil"></i> Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="#notifi" class="nav-link" data-toggle="tab" ><i class="fa fa-bell"></i> Email Notification</a>
                    </li>
                    <li class="nav-item">
                        <a href="#messages" class="nav-link" data-toggle="tab" ><i class="fa fa-comment"></i> Messages</a>
                    </li>
                    <li class="nav-item">
                        <a href="#weather" class="nav-link" data-toggle="tab" ><i class="fa fa-cloud"></i> Weather Setting</a>
                    </li>
                    <li class="nav-item">
                        <a href="#page-manage" class="nav-link" data-toggle="tab" ><i class="fa fa-pencil-square-o"></i>Widgets Setting</a>
                    </li>
                    <li class="nav-item">
                        <a href="#privacy" class="nav-link" data-toggle="tab"  ><i class="fa fa-shield"></i> Privacy & Data</a>
                    </li>
                    <li class="nav-item">
                        <a href="#security" class="nav-link" data-toggle="tab" ><i class="fa fa-lock"></i> Security</a>
                    </li>
                    <li class="nav-item">
                        <a href="#apps" class="nav-link" data-toggle="tab" ><i class="fa fa-th"></i> Apps</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="gen-setting" >
                        <div class="set-title">
                            <h5>General Setting</h5>
                            <span>Set your login preference, help us personalize your experience and make big account change here.</span>
                        </div>
                        <div class="onoff-options ">
                            <form method="post" id="settings">
                                @csrf
                                <div class="row">
                                    <div class="col-md-9">
                                        <span class="text-dark font-weight-bold">Request</span>
                                        <p>Confirm request when someone follows you</p>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="confirm" name="confirm"  class="selectpicker" data-style="btn-primary">
                                            <option {{($user_settings->confirm_follow == 'yes') ? 'selected' : ''}} value="yes">Yes</option>
                                            <option {{($user_settings->confirm_follow == 'no') ? 'selected' : ''}} value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="color: #e1e8ed;"/>
                                <div class="row">
                                    <div class="col-md-9">
                                        <span class="text-dark font-weight-bold">Follow me</span>
                                        <p>Who can follow you</p>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="follow" name="follow"  class="selectpicker" data-style="btn-primary">
                                            <option {{($user_settings->follow_privacy == 'everyone') ? 'selected' : ''}} value="everyone">Everyone</option>
                                            <option {{($user_settings->follow_privacy == 'friends') ? 'selected' : ''}} value="friends">Friends</option>

                                        </select>
                                    </div>
                                </div>
                                <hr style="color: #e1e8ed;"/>
                                <div class="row">
                                    <div class="col-md-9">
                                        <span class="text-dark font-weight-bold">Comments</span>
                                        <p>Who can comment on your posts</p>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="comments" name="comments"  class="selectpicker" data-style="btn-primary">
                                            <option {{($user_settings->comment_privacy == 'everyone') ? 'selected' : ''}} value="everyone">Everyone</option>
                                            <option {{($user_settings->comment_privacy == 'friends') ? 'selected' : ''}} value="friends">Friends</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="color: #e1e8ed;"/>
                                <div class="row">
                                    <div class="col-md-9">
                                        <span class="text-dark font-weight-bold">Posts Timeline</span>
                                        <p>Who can post on your timeline</p>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="post_timeline" name="post_timeline"  class="selectpicker" data-style="btn-primary">
                                            <option {{($user_settings->timeline_post_privacy == 'everyone') ? 'selected' : ''}} value="everyone">Everyone</option>
                                            <option {{($user_settings->timeline_post_privacy == 'friends') ? 'selected' : ''}} value="friends">Friends</option>
                                            <option {{($user_settings->timeline_post_privacy == 'no') ? 'selected' : ''}} value="no">No One</option>

                                        </select>
                                    </div>
                                </div>
                                <hr style="color: #e1e8ed;"/>
                                <div class="row">
                                    <div class="col-md-9">
                                        <span class="text-dark font-weight-bold">Post Privacy</span>
                                        <p>Who can see your posts</p>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="post_privacy" name="post_privacy"  class="selectpicker" data-style="btn-primary">
                                            <option {{($user_settings->post_privacy == 'everyone') ? 'selected' : ''}} value="everyone">Everyone</option>
                                            <option {{($user_settings->post_privacy == 'friends') ? 'selected' : ''}} value="friends">Friends</option>

                                        </select>
                                    </div>

                                </div>
                                <hr style="color: #e1e8ed;"/>
                                <div class="row">
                                    <div class="col-md-9">
                                        <span class="text-dark font-weight-bold">Message</span>
                                        <p>Who can message you</p>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="message" name="message"  class="selectpicker" data-style="btn-primary">
                                            <option {{($user_settings->message_privacy == 'everyone') ? 'selected' : ''}} value="everyone">Everyone</option>
                                            <option {{($user_settings->message_privacy == 'friends') ? 'selected' : ''}} value="friends">Friends</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="submit-btns">
                                    <button type="submit" class="main-btn" data-ripple=""><span>Save</span></button>
                                    <button type="button" class="main-btn3" data-ripple=""><span>Cancel</span></button>
                                </div>
                            </form>
                        </div>
                        <div class="account-delete">
                            <h5>Account Changes</h5>
                            <div>
                                <span>Hide Your Posts and profile </span>
                                <button type="button" class=""><span>Deactivate account</span></button>
                            </div>
                            <div>
                                <span>Delete your account and data </span>
                                <button type="button" class=""><span>close account</span></button>
                            </div>
                        </div>
                    </div><!-- general setting -->
                    <div class="tab-pane fade" id="edit-profile" >
                        <div class="set-title">
                            <h5>Edit Profile</h5>
                            <span>People on Pitnik will get to know you with the info below</span>
                        </div>
                        <div class="setting-meta">

                        </div>
                        <div class="stg-form-area">
                            <form method="post" class="c-form" action="{{url('update-profile')}}" id="EditProfile">
                                @csrf
                                <div>
                                    <label>Display Name</label>
                                    <input type="text" id="name" name="name" placeholder="Jack Carter" value="{{$user->timeline->name}}">
                                </div>

                                <div class="uzer-nam">
                                    <label>User Name</label>
                                    <span>www.pitnik.com/</span><input id="username" name="username" type="text" placeholder="jackcarter4023" value="{{$user->timeline->username}}">
                                </div>
                                <div>
                                    <label>Email Address</label>
                                    <input type="text" placeholder="abc@pitnikmail.com" id="email" name="email" value="{{$user->email}}">
                                </div>
                                <div>
                                    <label>Gender</label>
                                    <div class="form-radio">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" {{$user->gender == "male" ? 'checked="checked"' : '' }} value="male"  name="gender"><i class="check-box"></i>Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" {{$user->gender == "female" ? 'checked="checked"' : '' }} value="female" name="gender"><i class="check-box"></i>Female
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div>
                                    <label>about your profile</label>
                                    <textarea rows="3" id="about" name="about" placeholder="write someting about yourself">{{$user->timeline->about}}</textarea>
                                </div>
                                <div>
                                    <label>Country</label>
                                    <select id="country" name="country" >
                                        <option value="" disabled selected>Select Country</option>
                                        @foreach(\App\Country::all() as $value)
                                            <option {{$user->country == $value->id ? 'selected' : ''}} value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label>City</label>
                                    <select id="city" name="city"  class="selectpicker" data-style="btn-primary">
                                        <option value="" disabled selected>Select City</option>
                                        @foreach(\App\City::all() as $value)
                                            <option {{$user->city == $value->id ? 'selected' : ''}} value="{{$value->id}}">{{$value->city_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div>
                                    <label>Interests</label>
                                    <select multiple id="interests" name="interests[]">
                                        <?php $var = explode(',',$user->interests); ?>
                                        <option value="" disabled selected>Choose Your Interests</option>
                                        @foreach(\App\Interest::all() as $value)
                                            @foreach($var as $row)

                                                <option {{$row == $value->id ? 'selected' : ''}} value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <button type="button" id="profileCancel" data-ripple="">Cancel</button>
                                    <button type="submit" data-ripple="">Save</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- edit profile -->
                    <div class="tab-pane fade" id="notifi" role="tabpanel">
                        <div class="set-title">
                            <h5>Email Notification Setting</h5>
                            <span>Select push and email notifications you'd like to receive.</span>
                        </div>
                        <div class="onoff-options ">
                            <form method="post" id="notification">
                                @csrf
                                <div class="setting-row">
                                    <span>Follow Me</span>
                                    <p>When someone follows me</p>
                                    <input type="checkbox" id="switch00" name="email_follow" {{$user_settings->email_follow == 'on' ? 'checked' : ''}} />
                                    <label for="switch00" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Like post</span>
                                    <p>When someone likes my post</p>
                                    <input type="checkbox" id="switch01" name="email_like_post" {{$user_settings->email_like_post == 'on' ? 'checked' : ''}} />
                                    <label for="switch01" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Share</span>
                                    <p>When someone share my post</p>
                                    <input type="checkbox" id="switch02" name="email_post_share" {{$user_settings->email_post_share == 'on' ? 'checked' : ''}} />
                                    <label for="switch02" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Comment</span>
                                    <p>When someone comments my post</p>
                                    <input type="checkbox" id="switch03" name="email_comment_post" {{$user_settings->email_comment_post == 'on' ? 'checked' : ''}} />
                                    <label for="switch03" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Like Comment</span>
                                    <p>When someone likes my comment</p>
                                    <input type="checkbox" id="switch04" name="email_like_comment" {{$user_settings->email_like_comment == 'on' ? 'checked' : ''}} />
                                    <label for="switch04" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Reply Comment</span>
                                    <p>When someone replies to my comment</p>
                                    <input type="checkbox" id="switch05" name="email_reply_comment" {{$user_settings->email_join_group == 'on' ? 'checked' : ''}} />
                                    <label for="switch05" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Join Group</span>
                                    <p>When someone joins my group</p>
                                    <input type="checkbox" id="switch06" name="email_join_group" {{$user_settings->email_join_group == 'on' ? 'checked' : ''}} />
                                    <label for="switch06" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Like Page</span>
                                    <p>When someone likes my page</p>
                                    <input type="checkbox" id="switch07" name="email_like_page" {{$user_settings->email_like_page == 'on' ? 'checked' : ''}}/>
                                    <label for="switch07" data-on-label="ON" data-off-label="OFF"></label>
                                </div>

                                <div class="submit-btns">
                                    <button type="submit" class="main-btn" data-ripple=""><span>Save</span></button>
                                    <button type="button" class="main-btn3" data-ripple=""><span>Cancel</span></button>
                                </div>
                            </form>
                        </div>
                    </div><!-- notification -->
                    <div class="tab-pane fade" id="messages" role="tabpanel">
                        <div class="set-title">
                            <h5>Messages Setting</h5>
                            <span>Set your login preference, help us personalize your experience and make big account change here.</span>
                            <div class="mesg-seting">

                                <div class="set-title">
                                    <h6>i'd like to receive emails and updates from Pitnik about</h6>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked"><i class="check-box"></i>
                                        Always General announcement, updates, posts, and videos.
                                    </label>
                                    <label>
                                        <input type="checkbox" checked="checked"><i class="check-box"></i>
                                        Personalise tips for my page.
                                    </label>
                                    <label>
                                        <input type="checkbox" checked="checked"><i class="check-box"></i>
                                        Announcements and recommendations.
                                    </label>
                                    <p><a href="#" title="">learn more</a> about emails from pitnik</p>
                                </div>
                                <div class="set-title">
                                    <h6>Other Messages</h6>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked"><i class="check-box"></i>
                                        From Recommended videos.
                                    </label>
                                    <label>
                                        <input type="checkbox" checked="checked"><i class="check-box"></i>
                                        Messages from activity on my page or channel.
                                    </label>
                                    <label>
                                        <input type="checkbox" checked="checked"><i class="check-box"></i>
                                        Message me the replyer Activity on my comments.
                                    </label>
                                    <label>
                                        <input type="checkbox" checked="checked"><i class="check-box"></i>
                                        Reply to comments.
                                    </label>
                                    <label>
                                        <input type="checkbox" checked="checked"><i class="check-box"></i>
                                        Mentions.
                                    </label>

                                </div>
                                <div class="set-title">
                                    <h6>Language Preference</h6>
                                    <span>Select your Messages language</span>
                                </div>
                                <select class="select">
                                    <option value="">Eglish US</option>
                                    <option value="">Eglish UK</option>
                                    <option value="">Russia</option>
                                </select>
                                <p>
                                    you will always get notifications you have turned on for individual <a href="#" title="">Manage All Subscriptions</a>
                                </p>
                            </div>
                        </div>
                    </div><!-- messages -->
                    <div class="tab-pane fade" id="weather" role="tabpanel">
                        <div class="set-title">
                            <h5>Weather Widget Setting</h5>
                            <span>Set your weather widget or page setting.</span>
                            <div class="mesg-seting">
                                <div class="set-title">
                                    <h6>Country & Timezone</h6>
                                    <span>Select your Country Time Zone</span>
                                </div>
                                <select class="select">
                                    <option value="">US (UTC-8)</option>
                                    <option value="">Ontario(UTC-7)</option>
                                    <option value="">Nova Scotia(UTC-5)</option>
                                </select>
                                <div class="set-title">
                                    <h6>Temperature Unit</h6>
                                </div>
                                <select class="select">
                                    <option value="">F° (Farenheit)</option>
                                    <option value="">C° (Celsius)</option>
                                </select>
                                <div class="set-title">
                                    <h6>Show Extended forecast</h6>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked"><i class="check-box"></i>
                                        Show Extended Forecast on Widget.
                                    </label>
                                    <p><a href="#" title="">learn more</a></p>
                                </div>
                                <div class="set-title">
                                    <h6>Forecast Days</h6>
                                </div>
                                <select class="select">
                                    <option value="">Next Day</option>
                                    <option value="">Next week</option>
                                    <option value="">Next Month</option>
                                    <option value="">Next Year</option>
                                </select>
                                <p>
                                    you will always get Daily notifications you have turned on for individual.
                                </p>
                                <div>
                                    <form>
                                        <button class="main-btn" data-ripple="" type="submit">Save</button>
                                        <button class="main-btn3" data-ripple="" type="submit">Cancel</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- weather widget setting -->
                    <div class="tab-pane fade" id="page-manage" role="tabpanel">
                        <div class="set-title">
                            <h5>Page & sidebar</h5>
                            <span>Deceide whether your profile will be hidden from search engine and what kind of data you want to use to imporve the recommendation and ads you see <a href="#" title="">Learn more</a></span>
                        </div>
                        <p class="p-info"><a href="manage-page.html">Click here</a> to go widget and page setting area</p>
                    </div><!-- privacy -->
                    <div class="tab-pane fade" id="privacy" role="tabpanel">
                        <div class="set-title">
                            <h5>Privacy & data</h5>
                            <span>Deceide whether your profile will be hidden from search engine and what kind of data you want to use to imporve the recommendation and ads you see <a href="#" title="">Learn more</a></span>
                        </div>
                        <div class="onoff-options ">
                            <form method="post">
                                <div class="setting-row">
                                    <span>Search Privacy</span>
                                    <p>Hide your profile from search engine (Ex.google) <a href="#" title="">Learn more</a>
                                    </p>
                                    <input type="checkbox" id="switch0001" />
                                    <label for="switch0001" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="set-title">
                                    <h5>Personalization</h5>
                                </div>
                                <div class="setting-row">
                                    <span>Search Privacy</span>
                                    <p>use sites you visit to improve which recommendation and ads you see. <a href="#" title="">Learn more</a>
                                    </p>
                                    <input type="checkbox" id="switch0002" />
                                    <label for="switch0002" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Search Privacy</span>
                                    <p>use information from our partners to improve which ads you see<a href="#" title="">Learn more</a>
                                    </p>
                                    <input type="checkbox" id="switch0003" />
                                    <label for="switch0003" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                            </form>
                        </div>
                    </div><!-- privacy -->
                    <div class="tab-pane fade" id="security" role="tabpanel">
                        <div class="set-title">
                            <h5>Security Setting</h5>
                            <span>trun on two factor authentication and check your list of connected device to keep your account posts safe <a href="#" title="">Learn More</a>.</span>
                        </div>
                        <div class="seting-box">
                            <p>to turn on two-factor authentication, you must <a href="#" title=""> confirm Your Email </a> and <a href="#" title="">Set Password</a></p>
                            <div class="set-title">
                                <h5>Connected Devicese</h5>
                            </div>
                            <p>This is a list of devices that have logged into your account, Revok any session that you do not recognize. <a href="#" title="">Hide Sessions</a></p>
                            <span>Last Accessed</span>
                            <p>August 30, 2020 12:25AM</p>
                            <span>Location</span>
                            <p>Berlin, Germany (based on IP = 103.233.24.5)</p>
                            <span>Device Type</span>
                            <p>Chrome on windows 10</p>
                        </div>
                    </div><!-- security -->
                    <div class="tab-pane fade" id="apps" role="tabpanel">
                        <div class="set-title">
                            <h5>Apps</h5>
                            <span>Keep track of everywhere you have login with your pintik profile and remove access from apps you are no longer using with pitnik <a href="#" title="">Learn more</a></span>
                        </div>
                        <p class="p-info">You have not approved any app</p>
                    </div><!-- apps -->
                </div>
            </div>
        </div>
    </div>
</div><!-- centerl meta -->

<div class="col-lg-3">
    <aside class="sidebar static">
        <div class="widget">
            <h4 class="widget-title">Your page</h4>
            <div class="your-page">
                <figure>
                    <a title="" href="#"><img alt="" src="{{asset('public/images/resources/friend-avatar9.jpg')}}"></a>
                </figure>
                <div class="page-meta">
                    <a class="underline" title="" href="#">My page</a>
                    <span><i class="ti-comment"></i>Messages <em class="bg-blue">9</em></span>
                    <span><i class="ti-bell"></i>Notifications <em class="bg-purple">2</em></span>
                </div>
                <div class="page-likes">
                    <ul class="nav nav-tabs likes-btn">
                        <li class="nav-item"><a data-toggle="tab" href="#link1" class="active">likes</a></li>
                        <li class="nav-item"><a data-toggle="tab" href="#link2" class="">views</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="link1" class="tab-pane active fade show">
                            <span><i class="ti-heart"></i>884</span>
                            <a title="weekly-likes" href="#">35 new likes this week</a>
                            <div class="users-thumb-list">
                                <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                    <img alt="" src="{{asset('public/images/resources/userlist-1.jpg')}}">
                                </a>
                                <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                    <img alt="" src="{{asset('public/images/resources/userlist-2.jpg')}}">
                                </a>
                                <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                    <img alt="" src="{{asset('public/images/resources/userlist-3.jpg')}}">
                                </a>
                                <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                    <img alt="" src="{{asset('public/images/resources/userlist-4.jpg')}}">
                                </a>
                                <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                    <img alt="" src="{{asset('public/images/resources/userlist-5.jpg')}}">
                                </a>
                                <a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
                                    <img alt="" src="{{asset('public/images/resources/userlist-6.jpg')}}">
                                </a>
                                <a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
                                    <img alt="" src="{{asset('public/images/resources/userlist-7.jpg')}}">
                                </a>
                            </div>
                        </div>
                        <div id="link2" class="tab-pane fade">
                            <span><i class="ti-eye"></i>445</span>
                            <a title="weekly-likes" href="#">440 new views this week</a>
                            <div class="users-thumb-list">
                                <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                    <img alt="" src="{{asset('images/resources/userlist-1.jpg')}}">
                                </a>
                                <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                    <img alt="" src="{{asset('images/resources/userlist-2.jpg')}}">
                                </a>
                                <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                    <img alt="" src="{{asset('images/resources/userlist-3.jpg')}}">
                                </a>
                                <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                    <img alt="" src="{{asset('images/resources/userlist-4.jpg')}}">
                                </a>
                                <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                    <img alt="" src="{{asset('images/resources/userlist-5.jpg')}}">
                                </a>
                                <a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
                                    <img alt="" src="{{asset('images/resources/userlist-6.jpg')}}">
                                </a>
                                <a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
                                    <img alt="" src="{{asset('images/resources/userlist-7.jpg')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div><!-- sidebar -->
<script>
    $('#EditProfile').submit(function (e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url:"{{url('update-profile')}}",
            method:"POST",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                // setting a timeout
            },
            success:function(data)
            {
                if (data.status == 200){
                    notify(data.message);
                }else{
                    error(data.message);
                }

            }
        });
    });

    $('#settings').submit(function (e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url:"{{url('update-settings')}}",
            method:"POST",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                // setting a timeout
            },
            success:function(data)
            {
                if (data.status == 200){
                    notify(data.message);
                }else{
                    error(data.message);
                }

            }
        });
    });

    $('#notification').submit(function (e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url:"{{url('update-notification')}}",
            method:"POST",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                // setting a timeout
            },
            success:function(data)
            {
                if (data.status == 200){
                    notify(data.message);
                }else{
                    error(data.message);
                }

            }
        });
    });
</script>
