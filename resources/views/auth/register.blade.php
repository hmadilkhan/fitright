@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('public/css/select2.min.css')}}">

    <section>
        <div class="gap no-gap signin whitish medium-opacity register">
            <div class="bg-image" style="background-image:url({{asset('public/images/resources/theme-bg.jpg')}})"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="big-ad">
                            <figure><img src="{{asset('public/images/logo2.png')}}" alt=""></figure>
                            <h1>Welcome to the Pitnik</h1>
                            <p>
                                Pitnik is a social network template that can be used to connect people. use this template for multipurpose social activities like job, dating, posting, bloging and much more. Now join & Make Cool Friends around the world !!!
                            </p>
                            <div class="barcode">
                                <figure><img src=""{{asset('public/images/resources/Barcode.jpg')}}" alt=""></figure>
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
                            <div class="form-title">
                                <i class="fa fa-key"></i>Sign Up
                                <span>Sign Up now and meet the awesome friends around the world.</span>
                            </div>
                            <form class="we-form" method="post" action="{{ url('register') }}">
                                @csrf

                                <input type="fullname" id="fullname" name="fullname" placeholder="Full Name">
                                <input type="email" id="email" name="email" placeholder="Email">
                                <input type="text" id="username" name="username" placeholder="Username">
                                <input type="date" id="birthday" name="birthday"  placeholder="Birthday">
                                <input type="password" id="password" name="password" placeholder="Password">
                                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                                <select id="country" name="country" >
                                    <option value="" disabled selected>Select Country</option>
                                    @foreach(\App\Country::all() as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                                <br/><br/>
                                <div id="citySelect">
                                    <select id="city" name="city"  class="selectpicker" data-style="btn-primary">


                                     </select>
                                </div>
                                <br/>
                                <select multiple id="interests" name="interests[]">
                                    <option value="" disabled selected>Choose Your Interests</option>
                                    @foreach(\App\Interest::all() as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>

                                <button type="submit" data-ripple="">Register</button>
                                <a class="forgot underline" href="#" title="">forgot password?</a>
                            </form>
                            <a class="with-smedia facebook" href="#" title="" data-ripple=""><i class="fa fa-facebook"></i></a>
                            <a class="with-smedia twitter" href="#" title="" data-ripple=""><i class="fa fa-twitter"></i></a>
                            <a class="with-smedia instagram" href="#" title="" data-ripple=""><i class="fa fa-instagram"></i></a>
                            <a class="with-smedia google" href="#" title="" data-ripple=""><i class="fa fa-google-plus"></i></a>
                            <span>already have an account? <a class="we-account underline" href="{{url('/login')}}" title="">Sign in</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')

    <script type="text/javascript">
        $(document).ready(function(){

            $('#country').change(function () {

                $("#city").empty();
                $.ajax({
                    url : '{{url('/cities')}}',
                    type : "GET",
                    data : {country:$('#country').val()},
                    dataType:'json',
                    success: function (result) {
                        console.log(result);

                        // $('#citySelect').html('');
                        // $('#citySelect').html(result);

                        if(result != ""){
                            $.each(result, function (index,value) {
                                console.log(value)
                                $("#city").append(new Option(value.city_name, value.id));
                            });

                        }else{
                            $("#city").append(new Option("No result found", ""));
                        }
                    }
                });
            });
        });

    </script>


@endsection



