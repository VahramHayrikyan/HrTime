<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>{{config('app.name')}} | Recruitment | Jobs | Employees</title>
    <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">

    <link rel="stylesheet" href="{{asset('assets/fonts/flat-icon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    @stack('custom-styles')
    @stack('head-script')
</head>
<body>
<div id="content-wrapper">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="{{asset('assets/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/mixitup.js')}}"></script>

    @stack('footer-script')
</div>
</body>
</html>
