@include('commons.head')

<body id="intro" class="bg-image shadow-2-strong vh-100">
    
        <div  class="container-fluid">
            <div class="row  justify-content-center">
                <div class="col-sm-8 col-md-6 col-lg-4 col-xl-4 mt-3 p-3">
            
                    @yield('login-card')

                    <!-- Bloque Opcional, puede ser removido o comentado -->
                    {{-- <div class="row ">
                        <div class="col-12 text-center">
                            @yield('forget-password-link')
                        </div> 
                    </div>
                    <div class="row ">
                        <div class="col-12 text-center">
                            @yield('create-account-link')
                        </div> 
                    </div> --}}

                </div> 
            </div>
            <div class="row  justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-4">
            
                    @yield('footer')  

                    <!-- Bloque Opcional, puede ser removido o comentado -->
                    {{-- <div class="row ">
                        <div class="col-12 text-center">
                            @yield('forget-password-link')
                        </div> 
                    </div>
                    <div class="row ">
                        <div class="col-12 text-center">
                            @yield('create-account-link')
                        </div> 
                    </div> --}}

                </div> 
            </div>

                 
        </div>

   



    @yield('scripts')


</body>
