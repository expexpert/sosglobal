<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>Broker Service</title>           
    <meta name="description" content="broker desc.">
    <meta name="keywords" content="broker">
        <meta name="theme-color" content="#e9e8f0" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('public/frontend/favicon.ico') }}">   
    <link rel="profile" href="http://gmpg.org/xfn/11" />       
    <link rel="pingback" href="{{ url('/') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="format-detection" content="telephone=no">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('public/frontend/dist/img/in-logo-1.svg') }}">

        <link rel="preload" href="{{ asset('public/frontend/js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('public/frontend/css/vendors/uikit.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('public/frontend/css/style.css') }}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{ asset('public/frontend/fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('public/frontend/fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{ asset('public/frontend/fonts/lato-v16-latin-700.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('public/frontend/fonts/lato-v16-latin-regular.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('public/frontend/fonts/montserrat-v14-latin-600.woff2') }}" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">


    <script type="text/javascript">
      console.log = function () {};
      var APP_URL = {!! json_encode(url('/')) !!}
  </script>
</head>
<body>
       <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>

    @include('layouts.frontend.header')

    @yield('content')

    @include('layouts.frontend.footer')

</body>


<script type="text/javascript" src="{{ asset('public/frontend/js/config-theme.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/vendors/indonez.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/vendors/uikit.min.js') }}"></script>
    <script src="https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" defer></script>

</html>