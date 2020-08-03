@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('public/css/emojionearea.min.css')}}"/>
    <div class="wavy-wraper">
        <div class="wavy">
            <span style="--i:1;">f</span>
            <span style="--i:2;">i</span>
            <span style="--i:3;">t</span>
            <span style="--i:4;">r</span>
            <span style="--i:5;">i</span>
            <span style="--i:6;">g</span>
            <span style="--i:7;">h</span>
            <span style="--i:8;">t</span>
            <span style="--i:9;">s</span>
        </div>
    </div>
    <div class="theme-layout">

        <div id="over" class="postoverlay"></div>

        <div class="responsive-header">
            <div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
                <span class="mh-text">
				<a href="newsfeed.html" title=""><img src="{{asset('public/images/logo2.png')}}" alt=""></a>
			</span>
                <span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
            </div>
            <div class="mh-head second">
                <form class="mh-form">
                    <input placeholder="search" />
                    <a href="#/" class="fa fa-search"></a>
                </form>
            </div>
            <nav id="menu" class="res-menu">
                <ul>
                    <li><span>Home Pages</span>
                        <ul>
                            <li><a href="index.html" title="">Pitnik Default</a></li>
                            <li><a href="company-landing.html" title="">Company Landing</a></li>
                            <li><a href="pitrest.html" title="">Pitrest</a></li>
                            <li><a href="redpit.html" title="">Redpit</a></li>
                            <li><a href="redpit-category.html" title="">Redpit Category</a></li>
                            <li><a href="soundnik.html" title="">Soundnik</a></li>
                            <li><a href="soundnik-detail.html" title="">Soundnik Single</a></li>
                            <li><a href="career.html" title="">Pitjob</a></li>
                            <li><a href="shop.html" title="">Shop</a></li>
                            <li><a href="classified.html" title="">Classified</a></li>
                            <li><a href="pitpoint.html" title="">PitPoint</a></li>
                            <li><a href="pittube.html" title="">Pittube</a></li>
                            <li><a href="chat-messenger.html" title="">Messenger</a></li>
                        </ul>
                    </li>
                    <li><span>Pittube</span>
                        <ul>
                            <li><a href="pittube.html" title="">Pittube</a></li>
                            <li><a href="pittube-detail.html" title="">Pittube single</a></li>
                            <li><a href="pittube-category.html" title="">Pittube Category</a></li>
                            <li><a href="pittube-channel.html" title="">Pittube Channel</a></li>
                            <li><a href="pittube-search-result.html" title="">Pittube Search Result</a></li>
                        </ul>
                    </li>
                    <li><span>PitPoint</span>
                        <ul>
                            <li><a href="pitpoint.html" title="">PitPoint</a></li>
                            <li><a href="pitpoint-detail.html" title="">Pitpoint Detail</a></li>
                            <li><a href="pitpoint-list.html" title="">Pitpoint List style</a></li>
                            <li><a href="pitpoint-without-baner.html" title="">Pitpoint without Banner</a></li>
                            <li><a href="pitpoint-search-result.html" title="">Pitpoint Search</a></li>
                        </ul>
                    </li>
                    <li><span>Pitjob</span>
                        <ul>
                            <li><a href="career.html" title="">Pitjob</a></li>
                            <li><a href="career-detail.html" title="">Pitjob Detail</a></li>
                            <li><a href="career-search-result.html" title="">Job seach page</a></li>
                            <li><a href="social-post-detail.html" title="">Social Post Detail</a></li>
                        </ul>
                    </li>
                    <li><span>Timeline</span>
                        <ul>
                            <li><a href="timeline.html" title="">Timeline</a></li>
                            <li><a href="timeline-photos.html" title="">Timeline Photos</a></li>
                            <li><a href="timeline-videos.html" title="">Timeline Videos</a></li>
                            <li><a href="timeline-groups.html" title="">Timeline Groups</a></li>
                            <li><a href="timeline-friends.html" title="">Timeline Friends</a></li>
                            <li><a href="timeline-friends2.html" title="">Timeline Friends-2</a></li>
                            <li><a href="about.html" title="">Timeline About</a></li>
                            <li><a href="blog-posts.html" title="">Timeline Blog</a></li>
                            <li><a href="friends-birthday.html" title="">Friends' Birthday</a></li>
                            <li><a href="newsfeed.html" title="">Newsfeed</a></li>
                            <li><a href="search-result.html" title="">Search Result</a></li>
                        </ul>
                    </li>
                    <li><span>Favourit Page</span>
                        <ul>
                            <li><a href="fav-page.html" title="">Favourit Page</a></li>
                            <li><a href="fav-favers.html" title="">Fav Page Likers</a></li>
                            <li><a href="fav-events.html" title="">Fav Events</a></li>
                            <li><a href="fav-event-invitations.html" title="">Fav Event Invitations</a></li>
                            <li><a href="event-calendar.html" title="">Event Calendar</a></li>
                            <li><a href="fav-page-create.html" title="">Create New Page</a></li>
                            <li><a href="price-plans.html" title="">Price Plan</a></li>
                        </ul>
                    </li>
                    <li><span>Forum</span>
                        <ul>
                            <li><a href="forum.html" title="">Forum</a></li>
                            <li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
                            <li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
                            <li><a href="forums-category.html" title="">Forum Category</a></li>
                        </ul>
                    </li>
                    <li><span>Featured</span>
                        <ul>
                            <li><a href="chat-messenger.html" title="">Messenger (Chatting)</a></li>
                            <li><a href="notifications.html" title="">Notifications</a></li>
                            <li><a href="badges.html" title="">Badges</a></li>
                            <li><a href="faq.html" title="">Faq's</a></li>
                            <li><a href="contribution.html" title="">Contriburion Page</a></li>
                            <li><a href="manage-page.html" title="">Manage Page</a></li>
                            <li><a href="weather-forecast.html" title="">weather-forecast</a></li>
                            <li><a href="statistics.html" title="">Statics/Analytics</a></li>
                            <li><a href="shop-cart.html" title="">Shop Cart</a></li>
                        </ul>
                    </li>
                    <li><span>Account Setting</span>
                        <ul>
                            <li><a href="setting.html" title="">Setting</a></li>
                            <li><a href="privacy.html" title="">Privacy</a></li>
                            <li><a href="support-and-help.html" title="">Support & Help</a></li>
                            <li><a href="support-and-help-detail.html" title="">Support Detail</a></li>
                            <li><a href="support-and-help-search-result.html" title="">Support Search</a></li>
                        </ul>
                    </li>
                    <li><span>Authentication</span>
                        <ul>
                            <li><a href="login.html" title="">Login Page</a></li>
                            <li><a href="register.html" title="">Register Page</a></li>
                            <li><a href="logout.html" title="">Logout Page</a></li>
                            <li><a href="coming-soon.html" title="">Coming Soon</a></li>
                            <li><a href="error-404.html" title="">Error 404</a></li>
                            <li><a href="error-404-2.html" title="">Error 404-2</a></li>
                            <li><a href="error-500.html" title="">Error 500</a></li>
                        </ul>
                    </li>
                    <li><span>Tools</span>
                        <ul>
                            <li><a href="typography.html" title="">Typography</a></li>
                            <li><a href="popup-modals.html" title="">Popups/Modals</a></li>
                            <li><a href="post-versions.html" title="">Post Versions</a></li>
                            <li><a href="sliders.html" title="">Sliders / Carousel</a></li>
                            <li><a href="google-map.html" title="">Google Maps</a></li>
                            <li><a href="widgets.html" title="">Widgets</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <nav id="shoppingbag">
                <div>
                    <div class="">
                        <form method="post">
                            <div class="setting-row">
                                <span>use night mode</span>
                                <input type="checkbox" id="nightmode"/>
                                <label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notifications</span>
                                <input type="checkbox" id="switch2"/>
                                <label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notification sound</span>
                                <input type="checkbox" id="switch3"/>
                                <label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>My profile</span>
                                <input type="checkbox" id="switch4"/>
                                <label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show profile</span>
                                <input type="checkbox" id="switch5"/>
                                <label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                        <h4 class="panel-title">Account Setting</h4>
                        <form method="post">
                            <div class="setting-row">
                                <span>Sub users</span>
                                <input type="checkbox" id="switch6" />
                                <label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>personal account</span>
                                <input type="checkbox" id="switch7" />
                                <label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Business account</span>
                                <input type="checkbox" id="switch8" />
                                <label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show me online</span>
                                <input type="checkbox" id="switch9" />
                                <label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Delete history</span>
                                <input type="checkbox" id="switch10" />
                                <label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Expose author name</span>
                                <input type="checkbox" id="switch11" />
                                <label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div><!-- responsive header -->

        <!-- Header Start -->
            <x-Header :name="$username[0]->name"/>
        <!-- Header End -->

        <div class="fixed-sidebar right">
            <div class="chat-friendz">
                <ul class="chat-users">
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('public/images/resources/side-friend1.jpg')}}" alt="">
                            <span class="status f-online"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('public/images/resources/side-friend2.jpg')}}" alt="">
                            <span class="status f-away"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('public/images/resources/side-friend3.jpg')}}" alt="">
                            <span class="status f-online"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('public/images/resources/side-friend4.jpg')}}" alt="">
                            <span class="status f-offline"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('public/images/resources/side-friend5.jpg')}}" alt="">
                            <span class="status f-online"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('public/images/resources/side-friend6.jpg')}}" alt="">
                            <span class="status f-online"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('public/images/resources/side-friend7.jpg')}}" alt="">
                            <span class="status f-offline"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('public/images/resources/side-friend8.jpg')}}" alt="">
                            <span class="status f-online"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('public/images/resources/side-friend9.jpg')}}" alt="">
                            <span class="status f-away"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('public/images/resources/side-friend10.jpg')}}" alt="">
                            <span class="status f-away"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('public/images/resources/side-friend8.jpg')}}" alt="">
                            <span class="status f-online"></span>
                        </div>
                    </li>
                </ul>
                <div class="chat-box">
                    <div class="chat-head">
                        <span class="status f-online"></span>
                        <h6>Bucky Barnes</h6>
                        <div class="more">
                            <div class="more-optns"><i class="ti-more-alt"></i>
                                <ul>
                                    <li>block chat</li>
                                    <li>unblock chat</li>
                                    <li>conversation</li>
                                </ul>
                            </div>
                            <span class="close-mesage"><i class="ti-close"></i></span>
                        </div>
                    </div>
                    <div class="chat-list">
                        <ul>
                            <li class="me">
                                <div class="chat-thumb"><img src="{{asset('public/images/resources/chatlist1.jpg')}}" alt=""></div>
                                <div class="notification-event">
								<span class="chat-message-item">
									HI, Jack i have faced a problem with your software. are you available now, when i install this i have to received an error.
								</span>
                                    <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Today at 2:12pm</time></span>
                                </div>
                            </li>
                            <li class="you">
                                <div class="chat-thumb"><img src="{{asset('public/images/resources/chatlist2.jpg')}}" alt=""></div>
                                <div class="notification-event">
								<span class="chat-message-item">
									Hi tina, Please let me know your purchase code, and show me the screnshot of error.
								</span>
                                    <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Today at 2:14pm</time></span>
                                </div>
                            </li>
                            <li class="me">
                                <div class="chat-thumb"><img src="{{asset('public/images/resources/chatlist1.jpg')}}" alt=""></div>
                                <div class="notification-event">
								<span class="chat-message-item">
									Yes, sure please wait a while, i ll show you the complete error list. Thank you.
								</span>
                                    <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Today at 2:15pm</time></span>
                                </div>
                            </li>
                        </ul>
                        <form class="text-box">
                            <textarea placeholder="Post enter to post..."></textarea>
                            <div class="add-smiles">
                                <span title="add icon" class="em em-expressionless"></span>
                                <div class="smiles-bunch">
                                    <i class="em em---1"></i>
                                    <i class="em em-smiley"></i>
                                    <i class="em em-anguished"></i>
                                    <i class="em em-laughing"></i>
                                    <i class="em em-angry"></i>
                                    <i class="em em-astonished"></i>
                                    <i class="em em-blush"></i>
                                    <i class="em em-disappointed"></i>
                                    <i class="em em-worried"></i>
                                    <i class="em em-kissing_heart"></i>
                                    <i class="em em-rage"></i>
                                    <i class="em em-stuck_out_tongue"></i>
                                </div>
                            </div>

                            <button type="submit"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- right sidebar user chat -->

        <div class="fixed-sidebar left">
            <div class="menu-left">
                <ul class="left-menu">
                    <li>
                        <a class="menu-small" href="#" title="">
                            <i class="ti-menu"></i>
                        </a>
                    </li>

                    <li>
                        <a href="newsfeed.html" title="Newsfeed Page" data-toggle="tooltip" data-placement="right">
                            <i class="ti-magnet"></i>
                        </a>
                    </li>
                    <li>
                        <a href="forum.html" title="Forum" data-toggle="tooltip" data-placement="right">
                            <i class="fa fa-forumbee"></i>
                        </a>
                    </li>
                    <li>
                        <a href="timeline-friends.html" title="Friends" data-toggle="tooltip" data-placement="right">
                            <i class="ti-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="fav-page.html" title="Favourit page" data-toggle="tooltip" data-placement="right">
                            <i class="fa fa-star-o"></i>
                        </a>
                    </li>
                    <li>
                        <a href="chat-messenger.html" title="Messages" data-toggle="tooltip" data-placement="right">
                            <i class="ti-comment-alt"></i>
                        </a>
                    </li>
                    <li>
                        <a href="notifications.html" title="Notification" data-toggle="tooltip" data-placement="right">
                            <i class="fa fa-bell-o"></i>
                        </a>
                    </li>

                    <li>
                        <a href="statistics.html" title="Account Stats" data-toggle="tooltip" data-placement="right">
                            <i class="ti-stats-up"></i>
                        </a>
                    </li>

                    <li>
                        <a href="support-and-help.html" title="Help" data-toggle="tooltip" data-placement="right">
                            <i class="fa fa-question-circle-o">
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="faq.html" title="Faq's" data-toggle="tooltip" data-placement="right">
                            <i class="ti-light-bulb"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="left-menu-full">
                <ul class="menu-slide">
                    <li><a class="closd-f-menu" href="#" title=""><i class="ti-close"></i> close Menu</a></li>
                    <li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-home"></i> Home Pages</a>
                        <ul class="submenu">
                            <li><a href="index.html" title="">Pitnik Default</a></li>
                            <li><a href="company-landing.html" title="">Company Landing</a></li>
                            <li><a href="pitrest.html" title="">Pitrest</a></li>
                            <li><a href="redpit.html" title="">Redpit</a></li>
                            <li><a href="redpit-category.html" title="">Redpit Category</a></li>
                            <li><a href="soundnik.html" title="">Soundnik</a></li>
                            <li><a href="soundnik-detail.html" title="">Soundnik Single</a></li>
                            <li><a href="career.html" title="">Pitjob</a></li>
                            <li><a href="shop.html" title="">Shop</a></li>
                            <li><a href="classified.html" title="">Classified</a></li>
                            <li><a href="pitpoint.html" title="">PitPoint</a></li>
                            <li><a href="pittube.html" title="">Pittube</a></li>
                            <li><a href="chat-messenger.html" title="">Messenger</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-film"></i> Pittube</a>
                        <ul class="submenu">
                            <li><a href="pittube.html" title="">Pittube</a></li>
                            <li><a href="pittube-detail.html" title="">Pittube single</a></li>
                            <li><a href="pittube-category.html" title="">Pittube Category</a></li>
                            <li><a href="pittube-channel.html" title="">Pittube Channel</a></li>
                            <li><a href="pittube-search-result.html" title="">Pittube Search Result</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-female"></i>PitPoint</a>
                        <ul class="submenu">
                            <li><a href="pitpoint.html" title="">PitPoint</a></li>
                            <li><a href="pitpoint-detail.html" title="">Pitpoint Detail</a></li>
                            <li><a href="pitpoint-list.html" title="">Pitpoint List style</a></li>
                            <li><a href="pitpoint-without-baner.html" title="">Pitpoint without Banner</a></li>
                            <li><a href="pitpoint-search-result.html" title="">Pitpoint Search</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-graduation-cap"></i>Pitjob</a>
                        <ul class="submenu">
                            <li><a href="career.html" title="">Pitjob</a></li>
                            <li><a href="career-detail.html" title="">Pitjob Detail</a></li>
                            <li><a href="career-search-result.html" title="">Job seach page</a></li>
                            <li><a href="social-post-detail.html" title="">Social Post Detail</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-repeat"></i>Timeline</a>
                        <ul class="submenu">
                            <li><a href="timeline.html" title="">Timeline</a></li>
                            <li><a href="timeline-photos.html" title="">Timeline Photos</a></li>
                            <li><a href="timeline-videos.html" title="">Timeline Videos</a></li>
                            <li><a href="timeline-groups.html" title="">Timeline Groups</a></li>
                            <li><a href="timeline-friends.html" title="">Timeline Friends</a></li>
                            <li><a href="timeline-friends2.html" title="">Timeline Friends-2</a></li>
                            <li><a href="about.html" title="">Timeline About</a></li>
                            <li><a href="blog-posts.html" title="">Timeline Blog</a></li>
                            <li><a href="friends-birthday.html" title="">Friends' Birthday</a></li>
                            <li><a href="newsfeed.html" title="">Newsfeed</a></li>
                            <li><a href="search-result.html" title="">Search Result</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-heart"></i>Favourit Page</a>
                        <ul class="submenu">
                            <li><a href="fav-page.html" title="">Favourit Page</a></li>
                            <li><a href="fav-favers.html" title="">Fav Page Likers</a></li>
                            <li><a href="fav-events.html" title="">Fav Events</a></li>
                            <li><a href="fav-event-invitations.html" title="">Fav Event Invitations</a></li>
                            <li><a href="event-calendar.html" title="">Event Calendar</a></li>
                            <li><a href="fav-page-create.html" title="">Create New Page</a></li>
                            <li><a href="price-plans.html" title="">Price Plan</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-forumbee"></i>Forum</a>
                        <ul class="submenu">
                            <li><a href="forum.html" title="">Forum</a></li>
                            <li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
                            <li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
                            <li><a href="forums-category.html" title="">Forum Category</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-star-o"></i>Featured</a>
                        <ul class="submenu">
                            <li><a href="chat-messenger.html" title="">Messenger (Chatting)</a></li>
                            <li><a href="notifications.html" title="">Notifications</a></li>
                            <li><a href="badges.html" title="">Badges</a></li>
                            <li><a href="faq.html" title="">Faq's</a></li>
                            <li><a href="contribution.html" title="">Contriburion Page</a></li>
                            <li><a href="manage-page.html" title="">Manage Page</a></li>
                            <li><a href="weather-forecast.html" title="">weather-forecast</a></li>
                            <li><a href="statistics.html" title="">Statics/Analytics</a></li>
                            <li><a href="shop-cart.html" title="">Shop Cart</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-gears"></i>Account Setting</a>
                        <ul class="submenu">
                            <li><a href="setting.html" title="">Setting</a></li>
                            <li><a href="privacy.html" title="">Privacy</a></li>
                            <li><a href="support-and-help.html" title="">Support & Help</a></li>
                            <li><a href="support-and-help-detail.html" title="">Support Detail</a></li>
                            <li><a href="support-and-help-search-result.html" title="">Support Search</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-lock"></i>Authentication</a>
                        <ul class="submenu">
                            <li><a href="login.html" title="">Login Page</a></li>
                            <li><a href="register.html" title="">Register Page</a></li>
                            <li><a href="logout.html" title="">Logout Page</a></li>
                            <li><a href="coming-soon.html" title="">Coming Soon</a></li>
                            <li><a href="error-404.html" title="">Error 404</a></li>
                            <li><a href="error-404-2.html" title="">Error 404-2</a></li>
                            <li><a href="error-500.html" title="">Error 500</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a class="" href="#" title=""><i class="fa fa-wrench"></i>Tools</a>
                        <ul class="submenu">
                            <li><a href="typography.html" title="">Typography</a></li>
                            <li><a href="popup-modals.html" title="">Popups/Modals</a></li>
                            <li><a href="post-versions.html" title="">Post Versions</a></li>
                            <li><a href="sliders.html" title="">Sliders</a></li>
                            <li><a href="google-map.html" title="">Google Maps</a></li>
                            <li><a href="widgets.html" title="">Widgets</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- left sidebar menu -->

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
                                                        <ins><a href="time-line.html" title="">{{session('name')}}</a> Post Album</ins>
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
                                                                    <img src="{{asset('public/images/resources/nearly3.jpg')}}" alt="">
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
                                                                                <div class="we-comment">
                                                                                    <h5><a href="time-line.html" title="">{{ $reply->user->name }}</a></h5>
                                                                                    <p>{{$reply->description}}</p>
                                                                                    <div class="inline-itms">
                                                                                        <span>{{Carbon\Carbon::parse($reply->created_at)->diffForHumans() }}</span>
                                                                                        <a class="we-reply" id="reply{{$commentData->id}}" onclick="showCommentBoxForReply('{{$commentData->parent_id}}')" title="Reply"><i class="fa fa-reply"></i></a>
                                                                                        <a  onclick="like('{{$reply->id}}')" title=""><i id="iconColor{{$reply->id}}" class="fa fa-heart {{$reply->comments_liked->contains(Auth::user()->id) ? 'text-danger' : ''}}"></i><span id="likeCount{{$reply->id}}">{{$reply->comments_liked()->count()}}</span></a>
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

        <a title="Your Cart Items" href="shop-cart.html" class="shopping-cart" data-toggle="tooltip">Cart <i class="fa fa-shopping-bag"></i><span>02</span></a>

        <div class="bottombar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="copyright">© Fitright 2020. All rights reserved.</span>
                        <i><img src="images/credit-cards.png" alt=""></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="side-panel">
        <h4 class="panel-title">General Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>use night mode</span>
                <input type="checkbox" id="nightmode1"/>
                <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notifications</span>
                <input type="checkbox" id="switch22" />
                <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notification sound</span>
                <input type="checkbox" id="switch33" />
                <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>My profile</span>
                <input type="checkbox" id="switch44" />
                <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show profile</span>
                <input type="checkbox" id="switch55" />
                <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
        <h4 class="panel-title">Account Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>Sub users</span>
                <input type="checkbox" id="switch66" />
                <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>personal account</span>
                <input type="checkbox" id="switch77" />
                <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Business account</span>
                <input type="checkbox" id="switch88" />
                <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show me online</span>
                <input type="checkbox" id="switch99" />
                <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Delete history</span>
                <input type="checkbox" id="switch101" />
                <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Expose author name</span>
                <input type="checkbox" id="switch111" />
                <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
    </div><!-- side panel -->

    <div class="popup-wraper2">
        <div class="popup post-sharing">
            <span class="popup-closed"><i class="ti-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <select data-placeholder="Share to friends..." multiple class="chosen-select multi">
                        <option>Share in your feed</option>
                        <option>Share in friend feed</option>
                        <option>Share in a page</option>
                        <option>Share in a group</option>
                        <option>Share in message</option>
                    </select>
                    <div class="post-status">
                        <span><i class="fa fa-globe"></i></span>
                        <ul>
                            <li><a href="#" title=""><i class="fa fa-globe"></i> Post Globaly</a></li>
                            <li><a href="#" title=""><i class="fa fa-user"></i> Post Private</a></li>
                            <li><a href="#" title=""><i class="fa fa-user-plus"></i> Post Friends</a></li>
                        </ul>
                    </div>
                </div>
                <div class="postbox">
                    <div class="post-comt-box">
                        <form method="post">
                            <input type="text" placeholder="Search Friends, Pages, Groups, etc....">
                            <textarea placeholder="Say something about this..."></textarea>
                            <div class="add-smiles">
                                <span title="add icon" class="em em-expressionless"></span>
                                <div class="smiles-bunch">
                                    <i class="em em---1"></i>
                                    <i class="em em-smiley"></i>
                                    <i class="em em-anguished"></i>
                                    <i class="em em-laughing"></i>
                                    <i class="em em-angry"></i>
                                    <i class="em em-astonished"></i>
                                    <i class="em em-blush"></i>
                                    <i class="em em-disappointed"></i>
                                    <i class="em em-worried"></i>
                                    <i class="em em-kissing_heart"></i>
                                    <i class="em em-rage"></i>
                                    <i class="em em-stuck_out_tongue"></i>
                                </div>
                            </div>

                            <button type="submit"></button>
                        </form>
                    </div>
                    <figure><img src="images/resources/share-post.jpg" alt=""></figure>
                    <div class="friend-info">
                        <figure>
                            <img alt="" src="images/resources/admin.jpg">
                        </figure>
                        <div class="friend-name">
                            <ins><a title="" href="time-line.html">Jack Carter</a> share <a title="" href="#">link</a></ins>
                            <span>Yesterday with @Jack Piller and @Emily Stone at the concert of # Rock'n'Rolla in Ontario.</span>
                        </div>
                    </div>
                    <div class="share-to-other">
                        <span>Share to other socials</span>
                        <ul>
                            <li><a class="facebook-color" href="#" title=""><i class="fa fa-facebook-square"></i></a></li>
                            <li><a class="twitter-color" href="#" title=""><i class="fa fa-twitter-square"></i></a></li>
                            <li><a class="dribble-color" href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a class="instagram-color" href="#" title=""><i class="fa fa-instagram"></i></a></li>
                            <li><a class="pinterest-color" href="#" title=""><i class="fa fa-pinterest-square"></i></a></li>
                        </ul>
                    </div>
                    <div class="copy-email">
                        <span>Copy & Email</span>
                        <ul>
                            <li><a href="#" title="Copy Post Link"><i class="fa fa-link"></i></a></li>
                            <li><a href="#" title="Email this Post"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="we-video-info">
                        <ul>
                            <li>
								<span title="" data-toggle="tooltip" class="views" data-original-title="views">
									<i class="fa fa-eye"></i>
									<ins>1.2k</ins>
								</span>
                            </li>
                            <li>
								<span title="" data-toggle="tooltip" class="views" data-original-title="views">
									<i class="fa fa-share-alt"></i>
									<ins>20k</ins>
								</span>
                            </li>
                        </ul>
                        <button class="main-btn color" data-ripple="">Submit</button>
                        <button class="main-btn cancel" data-ripple="">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- share popup -->

    <div class="popup-wraper3">
        <div class="popup">
            <span class="popup-closed"><i class="ti-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5>Report Post</h5>
                </div>
                <div class="Rpt-meta">
                    <span>We're sorry something's wrong. How can we help?</span>
                    <form method="post" class="c-form">
                        <div class="form-radio">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="radio" checked="checked"><i class="check-box"></i>It's spam or abuse
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="radio"><i class="check-box"></i>It breaks r/technology's rules
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="radio"><i class="check-box"></i>Not Related
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="radio"><i class="check-box"></i>Other issues
                                </label>
                            </div>
                        </div>
                        <div>
                            <label>Write about Report</label>
                            <textarea placeholder="write someting about Post" rows="2"></textarea>
                        </div>
                        <div>
                            <button data-ripple="" type="submit" class="main-btn">Submit</button>
                            <a href="#" data-ripple="" class="main-btn3 cancel">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- report popup -->

    <div class="popup-wraper1">
        <div class="popup direct-mesg">
            <span class="popup-closed"><i class="ti-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5>Send Message</h5>
                </div>
                <div class="send-message">
                    <form method="post" class="c-form">
                        <input type="text" placeholder="Sophia">
                        <textarea placeholder="Write Message"></textarea>
                        <button type="submit" class="main-btn">Send</button>
                    </form>
                    <div class="add-smiles">
                        <div class="uploadimage">
                            <i class="fa fa-image"></i>
                            <label class="fileContainer">
                                <input type="file">
                            </label>
                        </div>
                        <span title="add icon" class="em em-expressionless"></span>
                        <div class="smiles-bunch">
                            <i class="em em---1"></i>
                            <i class="em em-smiley"></i>
                            <i class="em em-anguished"></i>
                            <i class="em em-laughing"></i>
                            <i class="em em-angry"></i>
                            <i class="em em-astonished"></i>
                            <i class="em em-blush"></i>
                            <i class="em em-disappointed"></i>
                            <i class="em em-worried"></i>
                            <i class="em em-kissing_heart"></i>
                            <i class="em em-rage"></i>
                            <i class="em em-stuck_out_tongue"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- send message popup -->


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

