<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <link id="skin-default" rel="stylesheet" href="{{ asset('public/backend/assets/css/dashlite.css?ver=3.0.0') }}">
        <link id="skin-default" rel="stylesheet" href="{{ asset('public/backend/assets/css/theme.css?ver=3.0.0') }}">
<style type="text/css">
        .btn.btn-lg.btn-primary.btn-block {
        background-color: #00008B;
}
.logotext {
        color: #00008B;
}
    .error {
      color: red !important
    }
    .dash{
      height: 400px;
      justify-content: center;
      align-items: center;
      font-size: 20px;
      font-weight: bold;
      display: flex;
      color:green;
      flex-direction: column;

    }
</style>
</head>

<body class="nk-body npc-default pg-auth">
      <div class="nk-app-root" id="app">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content ">
        @yield('content')
         <div class="nk-footer nk-auth-footer-full">
            <div class="container wide-lg">
                <div class="row g-3">
                    <div class="col-lg-6 order-lg-last">
                        <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms & Condition</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Help</a>
                            </li>
                            <li class="nav-item dropup">
                                <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                    <ul class="language-list">
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/english.png" alt="" class="language-flag">
                                                <span class="language-name">English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                                <span class="language-name">Español</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/french.png" alt="" class="language-flag">
                                                <span class="language-name">Français</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="./images/flags/turkey.png" alt="" class="language-flag">
                                                <span class="language-name">Türkçe</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="nk-block-content text-center text-lg-left">
                            <p class="text-soft">&copy; Copyright {{ date('Y') }} <span> dsd</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wrap @e -->
</div>
<!-- content @e -->
</div>
<!-- main @e -->
</div>
   
</body>

     <script src="{{ asset('public/frontend/assets/js/bundle.js?ver=3.0.0') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/scripts.js?ver=3.0.0') }}"></script>
</html>
