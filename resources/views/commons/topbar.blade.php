<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        {{-- @include('commons.partials.topbar-search') --}}

        @include('commons.partials.topbar-notification')

        @include('commons.partials.topbar-user')

        {{-- @include('commons.partials.topbar-settings') --}}



    </ul>

    <!-- LOGO -->
    @include('commons.partials.topbar-logo')

    
    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        @include('commons.partials.topbar-menu-mobile')

        <!-- Menu Izquierdo de Navegacion (Opcional) puede ser utilizado para opciones adicionales
         dentro de alguna funcionalidad o módulo. -->
         
        {{-- @include('commons.partials.topbar-left-menu') --}}
    </ul>
</div>
<!-- end Topbar -->