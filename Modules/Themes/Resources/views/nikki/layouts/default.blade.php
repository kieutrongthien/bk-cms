<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="title" content="{{$page ? ($page->meta_title ?? $page->name) : ''}}">
    <meta name="description" content="{{$page ? ($page->meta_description ?? '') : ''}}">
    <!-- Title -->
    <title>{{$page ? $page->name : 'Empty'}}</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('themes/nikki/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/nikki/assets/css/classy-nav.css')}}">
    <link rel="stylesheet" href="{{asset('themes/nikki/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/nikki/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('themes/nikki/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('themes/nikki/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/nikki/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('themes/nikki/assets/css/style.css')}}">
</head>

<body>
    @include('themes::nikki.components.header')

    {!! $page ? $page->content : '' !!}

    @include('themes::nikki.components.footer')

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('/themes/nikki/assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('/themes/nikki/assets/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('/themes/nikki/assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('/themes/nikki/assets/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('/themes/nikki/assets/js/active.js') }}"></script>
</body>

</html>