<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>FITRIGHTS</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{asset('public/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/weather-icon.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/responsive.css')}}">


</head>
<body>
    <div id="app">
        <main >
            @yield('content')
        </main>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="{{asset('public/js/main.min.js')}}"></script>
    <script src="{{asset('public/js/script.js')}}"></script>
    <script src="{{asset('resources/js/app.js')}}"></script>
    @yield('script')
</body>
</html>
