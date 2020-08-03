@extends('layouts.app')

@section('content')

        <section>
            <div class="gap no-gap signin whitish medium-opacity">
                <div class="bg-image" style="background-image:url({{asset('public/images/resources/theme-bg.jpg')}})"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="big-ad">
                                <figure><img src="{{asset('public/images/logo2.png')}}" alt=""></figure>
                                <h1>Welcome to the Fitrights</h1>
                                <p>
                                    Pitnik is a social network template that can be used to connect people. use this template for multipurpose social activities like job, dating, posting, bloging and much more. Now join & Make Cool Friends around the world !!!
                                </p>
                                <div class="fun-fact">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4">
                                            <div class="fun-box">
                                                <i class="ti-check-box"></i>
                                                <h6>Registered People</h6>
                                                <span>1,01,242</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-4">
                                            <div class="fun-box">
                                                <i class="ti-layout-media-overlay-alt-2"></i>
                                                <h6>Posts Published</h6>
                                                <span>21,03,245</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-4">
                                            <div class="fun-box">
                                                <i class="ti-user"></i>
                                                <h6>Online Users</h6>
                                                <span>40,145</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="barcode">
                                    <figure><img src="{{asset('public/images/resources/Barcode.jpg')}}" alt=""></figure>
                                    <div class="app-download">
                                        <span>Download Mobile App and Scan QR Code to login</span>
                                        <ul class="colla-apps">
                                            <li><a title="" href="https://play.google.com/store?hl=en"><img src="{{asset('public/images/android.png')}}" alt="">android</a></li>
                                            <li><a title="" href="https://www.apple.com/lae/ios/app-store/"><img src="{{asset('public/images/apple.png')}}" alt="">iPhone</a></li>
                                            <li><a title="" href="https://www.microsoft.com/store/apps"><img src="{{asset('public/images/windows.png')}}" alt="">Windows</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="we-login-register">
                                @if ($errors->any())
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="form-title">
                                    <i class="fa fa-key"></i>login
                                    <span>sign in now and meet the awesome Friends around the world.</span>
                                </div>
                                <form class="we-form" method="post" action="{{ route('login') }}">
                                    @csrf
                                    <input type="email" id="email" name="email" placeholder="Email">
                                    <input type="password" id="password" name="password" placeholder="Password">
                                    <input type="checkbox"><label>remember me</label>
                                    <button type="submit" data-ripple="">sign in</button>
                                    <a class="forgot underline" href="#" title="">forgot password?</a>
                                </form>
                                <a class="with-smedia facebook" href="#" title="" data-ripple=""><i class="fa fa-facebook"></i></a>
                                <a class="with-smedia twitter" href="#" title="" data-ripple=""><i class="fa fa-twitter"></i></a>
                                <a class="with-smedia instagram" href="#" title="" data-ripple=""><i class="fa fa-instagram"></i></a>
                                <a class="with-smedia google" href="#" title="" data-ripple=""><i class="fa fa-google-plus"></i></a>
                                <span>don't have an account? <a class="we-account underline" href="{{url('register')}}" title="">register now</a></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



@endsection
