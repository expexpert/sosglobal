<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="shortcut icon" href="{{ asset('public/favicon.png') }}">
    <!-- Page Title  -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- StyleSheets  -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> -->


    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/dashlite.css?ver=3.0.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('public/backend/assets/css/theme.css?ver=3.0.0') }}">

    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>


<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">

         @include('layouts.backend.sidebar')

         <div class="nk-wrap ">

             @include('layouts.backend.header')

             @yield('content')

             @include('layouts.backend.footer')

         </div>
         <!-- wrap @e -->
     </div>
     <!-- main @e -->
 </div>

<!-- JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('public/backend/assets/js/scripts.js?ver=3.0.0') }}"></script>
<script src="{{ asset('public/backend/assets/js/libs/datatable-btns.js?ver=3.0.0') }}"></script>


<script src="{{ asset('public/backend/assets/js/bundle.js?ver=3.0.0') }}"></script>
<script src="{{ asset('public/backend/assets/js/scripts.js?ver=3.0.0') }}"></script>
<script src="{{ asset('public/backend/assets/js/charts/chart-ecommerce.js?ver=3.0.0') }}"></script>
<script src="{{ asset('public/backend/assets/js/apps/messages.js?ver=3.0.0') }}"></script>
</body>

</html>