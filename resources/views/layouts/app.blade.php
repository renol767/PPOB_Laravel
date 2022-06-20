<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('template')}}/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="{{asset('template')}}/img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('css/app.css') }}}/img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- style css for this template -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet" id="style">
</head>
<body class="body-scroll d-flex flex-column h-100">

    @yield('content')
    
    
    <!-- Required jquery and libraries -->
    <script src="{{asset('template')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('template')}}/js/popper.min.js"></script>
    <script src="{{asset('template')}}/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- cookie js -->
    <script src="{{asset('template')}}/js/jquery.cookie.js"></script>

    <!-- Customized jquery file  -->
    <script src="{{asset('template')}}/js/main.js"></script>
    <script src="{{asset('template')}}/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <script src="{{asset('template')}}/js/pwa-services.js"></script>

    <!-- page level custom script -->
    <script src="{{asset('template')}}/js/app.js"></script>

</body>
