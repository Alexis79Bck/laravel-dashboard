@include('commons.web.head')

<body>
    <div id="wrapper">

        <!-- Topbar Start -->

        @include('commons.topbar')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->

        @include('commons.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                @yield('content')

                <!-- Footer Start -->

                {{-- @include('commons.footer') --}}
                <!-- end Footer -->
            </div> <!-- content -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    @include('commons.web.footer')
    @include('commons.web.scripts')
    @yield('scripts')

</body>

</html>
