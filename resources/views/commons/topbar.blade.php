@extends('layouts.app')

@section('topbar-nav')
 <!-- Topbar Start -->
 <div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">
    
        @include('commons.partials.topbar-settings')
        @include('commons.partials.topbar-user')      


    </ul>

    <!-- LOGO -->
    @include('commons.partials.topbar-logo')

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        @include('commons.partials.topbar-menu-mobile')

        @include('commons.partials.topbar-megamenu')
    </ul>
</div>
<!-- end Topbar -->

@endsection