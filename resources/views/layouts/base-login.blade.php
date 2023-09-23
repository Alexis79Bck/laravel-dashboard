@include('commons.head')

<body class="authentication-bg authentication-bg-pattern">

    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
            
                    @yield('login-card')

                    <!-- Bloque Opcional, puede ser removido o comentado -->
                    <div class="row ">
                        <div class="col-12 text-center">
                            @yield('forget-password-link')
                        </div> 
                    </div>
                    <div class="row ">
                        <div class="col-12 text-center">
                            @yield('create-account-link')
                        </div> 
                    </div>

                </div> 
            </div>
            
        </div>

    </div>

    @yield('footer')    

    @yield('scripts')


</body>
