<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="{{config('app.author')}}" name="author" />
    <meta content="{{config('app.author_description')}}" name="description"/>
    
    <title>{{ config('app.name', 'Unknown-Site') }}</title>    

    <!-- GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('assets/fonts/fonts-customs.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/simple-line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/swiper/css/swiper.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- THEME STYLES -->
    <link href="{{ asset('assets/css/layout.css')}}" rel="stylesheet" type="text/css"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon_web.ico')}}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
