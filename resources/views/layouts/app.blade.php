@include('commons.head')
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

                <!-- Start Content-->
                <div class="container-fluid">

                    @yield('content')
                    
                    <!-- start page title -->
                    
                    
                </div> <!-- container -->
                
            </div> <!-- content -->

            <!-- Footer Start -->
            
            {{-- @include('commons.footer') --}}
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    
    
    @include('commons.scripts')
    @yield('scripts')

</body>
</html>
