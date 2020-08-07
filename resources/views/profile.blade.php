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
                                    <img id="imgCover" src="{{asset('storage/app/images/cover/'.$user->cover)}}" alt="" style="width:100%;height: 340px;">
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
                                                    <img alt="author" id="imgAvatar" src="{{asset('storage/app/images/avatar/'.$user->avatar)}}">
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
                                            <ul id="menu" class="profile-menu">
                                                <li>
                                                    <a id="timeline" class="" onclick="callView('timeline')" >Timeline</a>
                                                </li>
                                                <li>
                                                    <a id="about" class="" onclick="callView('about')" >About</a>
                                                </li>
                                                <li>
                                                    <a id="friends" class="" onclick="callView('friends')" >Friends</a>
                                                </li>
                                                <li>
                                                    <a id="photos" class="" onclick="callView('photos')">Photos</a>
                                                </li>
                                                <li>
                                                    <a id="videos" class="" onclick="callView('videos')">Videos</a>
                                                </li>
                                                <li>
                                                    <a id="setting" class="" onclick="callView('setting')">Settings</a>
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
                            <!-- Partial Views Start  -->
                                <div id="partialViews" class="row"></div>
                            <!-- Partial Views End  -->
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
                    $('#imgCover').attr('src','{{asset('storage/app/images/cover/')}}'+"/"+data.cover);
                    notify("Cover Successfully Uploaded");
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
                    $('#imgAvatar').attr('src','{{asset('storage/app/images/avatar/')}}'+"/"+data.avatar);
                    notify("Avatar Successfully Uploaded");
                }
            });
        });



        function callView(partial)
        {
            // alert(view);
            clearClass();
            $('#'+partial).addClass('active');
            var url = setUrl(partial);
            console.log(url);

            $.ajax({
                url:url,
                method:"GET",
                beforeSend: function() {
                    // setting a timeout
                },
                success:function(data)
                {
                    $('#partialViews').html('');
                    $('#partialViews').html(data);
                }
            });

        }

        function notify(msg)
        {
            $.toast({
                heading: msg,
                text: '',
                showHideTransition: 'slide',
                icon: 'success',
                loaderBg: '#fa6342',
                position: 'bottom-right',
                hideAfter: 3000,
            });
        }

        function error(msg)
        {
            $.toast({
            	heading: 'Error',
            	text: msg,
            	showHideTransition: 'fade',
            	icon: 'error',
            	hideAfter: 7000,
            	loaderBg: '#fa6342',
            	position: 'bottom-right',
            });
        }

        function clearClass()
        {
            $('#timeline').removeClass('active');
            $('#about').removeClass('active');
            $('#friends').removeClass('active');
            $('#photos').removeClass('active');
            $('#videos').removeClass('active');
            $('#setting').removeClass('active');

        }
        function setUrl(value)
        {
            if(value == "timeline")
            {
                return "{{url('timeline')}}";
            }
            else if(value == "about")
            {
                return "{{url('about')}}";
            }
            else if(value == "friends")
            {
                return "{{url('friends')}}";
            }
            else if(value == "photos")
            {
                return "{{url('photos')}}";
            }
            else if(value == "videos")
            {
                return "{{url('videos')}}";
            }
            else if(value == "setting")
            {
                return "{{url('setting')}}";
            }
        }


    </script>
@endsection
