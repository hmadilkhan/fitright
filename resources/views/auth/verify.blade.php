

@extends('layouts.app')

@section('content')
    <div class="gap no-gap signin whitish medium-opacity">
        <div class="bg-image" style="background-image:url({{asset('public/images/resources/theme-bg.jpg')}})"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    <div class="big-ad">
                        <figure><img src="{{asset('public/images/logo2.png')}}" alt=""></figure>
                        <h1>{{session('message')}}</h1>

                        <h2>Before proceeding, please check your email for a verification link</h2>

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

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection


