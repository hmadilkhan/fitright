@extends('layouts.app')

@section('content')
    <section>
        <div class="gap2 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            <div class="user-profile">
                                <figure>
                                    <!-- COVER -->
                                    <form class="change-cover-form" action="{{ url('change-cover') }}" method="post" id="coverForm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="edit-pp">
                                            <label class="fileContainer">
                                                <i class="fa fa-camera"></i>
                                                <input type="file" class="change-cover-input" id="cover" name="cover">
                                            </label>
                                        </div>
                                    </form>
                                    <img src="{{asset("public/avatar/image-1596650822.2019-lamborghini-huracan-evo-spyder-5k-p6-1920x1080.jpg")}}" alt="" style="width:100%;height: 340px;">
                                    <ul class="profile-controls">
                                        <li><a href="#" title="Add friend" data-toggle="tooltip"><i class="fa fa-user-plus"></i></a></li>
                                        <li><a href="#" title="Follow" data-toggle="tooltip"><i class="fa fa-star"></i></a></li>
                                        <li><a class="send-mesg" href="#" title="Send Message" data-toggle="tooltip"><i class="fa fa-comment"></i></a></li>
                                        <li>
                                            <div class="edit-seting" title="Edit Profile image"><i class="fa fa-sliders"></i>
                                                <ul class="more-dropdown">
                                                    <li><a href="setting.html" title="">Update Profile Photo</a></li>
                                                    <li><a href="setting.html" title="">Update Header Photo</a></li>
                                                    <li><a href="setting.html" title="">Account Settings</a></li>
                                                    <li><a href="support-and-help.html" title="">Find Support</a></li>
                                                    <li><a class="bad-report" href="#" title="">Report Profile</a></li>
                                                    <li><a href="#" title="">Block Profile</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>

                                </figure>

                                <div class="profile-section">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3">
                                            <div class="profile-author">
                                                <div class="profile-author-thumb">
                                                    <img alt="author" src="{{asset("public/avatar/image-1596650822.2019-lamborghini-huracan-evo-spyder-5k-p6-1920x1080.jpg")}}">
                                                    <!-- AVATAR -->
                                                    <form class="change-avatar-form" action="{{ url('change-avatar') }}" method="post" enctype="multipart/form-data" id="avatarForm">
                                                        @csrf
                                                    <div class="edit-dp">
                                                        <label class="fileContainer">
                                                            <i class="fa fa-camera"></i>
                                                            <input type="file" class="change-avatar-input" id="avatar" name="avatar">
                                                        </label>
                                                    </div>
                                                    </form>
                                                </div>

                                                <div class="author-content">
                                                    <a class="h5 author-name" href="about.html">{{session('name')}}</a>
                                                    <div class="country">Pakistan, Karachi</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-9">
                                            <ul class="profile-menu">
                                                <li>
                                                    <a class="active" href="timeline.html">Timeline</a>
                                                </li>
                                                <li>
                                                    <a class="" href="about.html">About</a>
                                                </li>
                                                <li>
                                                    <a class="" href="timeline-friends.html">Friends</a>
                                                </li>
                                                <li>
                                                    <a class="" href="timeline-photos.html">Photos</a>
                                                </li>
                                                <li>
                                                    <a class="" href="timeline-videos.html">Videos</a>
                                                </li>
                                                <li>
                                                    <div class="more">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                        <ul class="more-dropdown">
                                                            <li>
                                                                <a href="timeline-groups.html">Profile Groups</a>
                                                            </li>
                                                            <li>
                                                                <a href="statistics.html">Profile Analytics</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ol class="folw-detail">
                                                <li><span>Posts</span><ins>101</ins></li>
                                                <li><span>Followers</span><ins>1.3K</ins></li>
                                                <li><span>Following</span><ins>22</ins></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- user profile banner  -->
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
                                                    <a href="#notifi" class="nav-link" data-toggle="tab" ><i class="fa fa-bell"></i> Notification</a>
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
                                                        <form method="post">
                                                            <div class="setting-row">
                                                                <span>Sub users</span>
                                                                <p>Enable this if you want people to follow you</p>
                                                                <input type="checkbox" id="switch00" />
                                                                <label for="switch00" data-on-label="ON" data-off-label="OFF"></label>
                                                            </div>
                                                            <div class="setting-row">
                                                                <span>Enable follow me</span>
                                                                <p>Enable this if you want people to follow you</p>
                                                                <input type="checkbox" id="switch01" />
                                                                <label for="switch01" data-on-label="ON" data-off-label="OFF"></label>
                                                            </div>
                                                            <div class="setting-row">
                                                                <span>Send me notifications</span>
                                                                <p>Send me notification emails my friends like, share or message me</p>
                                                                <input type="checkbox" id="switch02" />
                                                                <label for="switch02" data-on-label="ON" data-off-label="OFF"></label>
                                                            </div>
                                                            <div class="setting-row">
                                                                <span>Text messages</span>
                                                                <p>Send me messages to my cell phone</p>
                                                                <input type="checkbox" id="switch03" />
                                                                <label for="switch03" data-on-label="ON" data-off-label="OFF"></label>
                                                            </div>
                                                            <div class="setting-row">
                                                                <span>Enable tagging</span>
                                                                <p>Enable my friends to tag me on their posts</p>
                                                                <input type="checkbox" id="switch04" />
                                                                <label for="switch04" data-on-label="ON" data-off-label="OFF"></label>
                                                            </div>
                                                            <div class="setting-row">
                                                                <span>Enable sound Notification</span>
                                                                <p>You'll hear notification sound when someone sends you a private message</p>
                                                                <input type="checkbox" id="switch05" checked=""/>
                                                                <label for="switch05" data-on-label="ON" data-off-label="OFF"></label>
                                                            </div>

                                                            <div class="submit-btns">
                                                                <button type="button" class="main-btn" data-ripple=""><span>Save</span></button>
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
                                                        <form method="post" class="c-form" action="{{url('update-profile')}}">
                                                            @csrf
                                                            <div>
                                                                <label>Display Name</label>
                                                                <input type="text" id="name" name="name" placeholder="Jack Carter" value="{{$user[0]->name}}">
                                                            </div>

                                                            <div class="uzer-nam">
                                                                <label>User Name</label>
                                                                <span>www.pitnik.com/</span><input id="username" name="username" type="text" placeholder="jackcarter4023" value="{{$user[0]->username}}">
                                                            </div>
                                                            <div>
                                                                <label>Email Address</label>
                                                                <input type="text" placeholder="abc@pitnikmail.com" id="email" name="email" value="{{$user[0]->email}}">
                                                            </div>
                                                            <div>
                                                                <label>Gender</label>
                                                                <div class="form-radio">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" {{$user[0]->gender == "male" ? 'checked="checked"' : '' }}  name="radio"><i class="check-box"></i>Male
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" {{$user[0]->gender == "female" ? 'checked="checked"' : '' }} name="radio"><i class="check-box"></i>Female
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div>
                                                                <label>about your profile</label>
                                                                <textarea rows="3" id="about" name="about" placeholder="write someting about yourself">{{$user[0]->about}}</textarea>
                                                            </div>
                                                            <div>
                                                                <label>Country</label>
                                                                <select id="country" name="country" >
                                                                    <option value="" disabled selected>Select Country</option>
                                                                    @foreach(\App\Country::all() as $value)
                                                                        <option {{$user[0]->country == $value->id ? 'selected' : ''}} value="{{$value->id}}">{{$value->name}}</option>
                                                                    @endforeach
                                                                </select>



                                                            </div>
                                                            <div>
                                                                <label>City</label>
                                                                <select id="city" name="city"  class="selectpicker" data-style="btn-primary">
                                                                    <option value="" disabled selected>Select City</option>
                                                                    @foreach(\App\City::all() as $value)
                                                                        <option {{$user[0]->city == $value->id ? 'selected' : ''}} value="{{$value->id}}">{{$value->city_name}}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                            <div>
                                                                <button type="submit" data-ripple="">Cancel</button>
                                                                <button type="submit" data-ripple="">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div><!-- edit profile -->
                                                <div class="tab-pane fade" id="notifi" role="tabpanel">
                                                    <div class="set-title">
                                                        <h5>Notification Setting</h5>
                                                        <span>Select push and email notifications you'd like to receive.</span>
                                                    </div>
                                                    <div class="notifi-seting">
                                                        <div class="form-radio">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" checked="checked" name="radio"><i class="check-box"></i>
                                                                    Send Me emails about my activity except emails i have unsubscribe from
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="radio"><i class="check-box"></i>
                                                                    Only send me required services announcements.
                                                                </label>
                                                            </div>
                                                        </div>
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
                                                            <h6>Other Notifications</h6>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" checked="checked"><i class="check-box"></i>
                                                                Recommended videos.
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" checked="checked"><i class="check-box"></i>
                                                                activity on my page or channel.
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" checked="checked"><i class="check-box"></i>
                                                                Activity on my comments.
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
                                                            <span>Select your email language</span>
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
                                                <a title="" href="#"><img alt="" src="images/resources/friend-avatar9.jpg"></a>
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
                                                                <img alt="" src="images/resources/userlist-1.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                                                <img alt="" src="images/resources/userlist-2.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                                                <img alt="" src="images/resources/userlist-3.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                                                <img alt="" src="images/resources/userlist-4.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                                                <img alt="" src="images/resources/userlist-5.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
                                                                <img alt="" src="images/resources/userlist-6.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
                                                                <img alt="" src="images/resources/userlist-7.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="link2" class="tab-pane fade">
                                                        <span><i class="ti-eye"></i>445</span>
                                                        <a title="weekly-likes" href="#">440 new views this week</a>
                                                        <div class="users-thumb-list">
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                                                <img alt="" src="images/resources/userlist-1.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                                                <img alt="" src="images/resources/userlist-2.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                                                <img alt="" src="images/resources/userlist-3.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                                                <img alt="" src="images/resources/userlist-4.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                                                <img alt="" src="images/resources/userlist-5.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
                                                                <img alt="" src="images/resources/userlist-6.jpg">
                                                            </a>
                                                            <a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
                                                                <img alt="" src="images/resources/userlist-7.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div><!-- sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script type="text/javascript">
        $(document).on('change','.change-cover-input',function(e){
            e.preventDefault();
            $("#coverForm").trigger('submit');

        });

        $('#coverForm').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url:"{{ url('/change-cover') }}",
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
                    console.log(data)
                }
            });
        });

        $(document).on('change','.change-avatar-input',function(e){
            e.preventDefault();
            $("#avatarForm").trigger('submit');
        });

        $('#avatarForm').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url:"{{ url('/change-avatar') }}",
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
                    console.log(data)
                }
            });
        });


    </script>
@endsection
