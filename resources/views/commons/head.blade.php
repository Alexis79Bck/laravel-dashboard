<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{env('APP_AUTHOR')}}" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Unknown-Site') }}</title>    

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

     <!-- MDB -->
     <link rel="stylesheet" href="{{ asset('assets/vendor/mdb/css/mdb.min.css')}}" />
     <!-- Custom styles -->
     <link rel="stylesheet" href="{{ asset('assets/vendor/mdb/css/styles.css')}}" />

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/fonts/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.css')}}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
