<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="description" content="Sona Template"> -->
    <!-- <meta name="keywords" content="Sona, unica, creative, html"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hostels</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



     <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
</head>

<body class="hold-transition">
    @include ('layouts.front.header')
    @yield ('content')
    @include ('layouts.front.footer')
    
    

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>



</body>
