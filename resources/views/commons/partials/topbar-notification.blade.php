<li class="dropdown notification-list" >
    <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" >
        <i class="fe-bell noti-icon"></i>
        <!-- Numero de Mensajes Nuevos Recibidos -->
        <span class="badge badge-danger rounded-circle noti-icon-badge">{{rand(1,8)}}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-lg" >

        <!-- Encabezado -->
        <div class="noti-title" >
            <h5 class="text-dark" >
                <span class="float-right" >
                    <a href="" class="text-link-dark">
                        <small>Limpiar Todo</small>
                    </a>
                </span>Notificaciones
            </h5>
        </div>
        

        <div class="slimscroll noti-scroll">

            <!--
                TODO:
                - Funcion dinamica para obtener notificaciones.
                - Usuario / Detalle de notificacion.
                - Mensaje 
                - Tiempo de creacion
            -->
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                <div class="notify-icon">
                    <img src="assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                <p class="notify-details">Cristina Pride</p>
                <p class="text-muted mb-0 user-msg">
                    <small>Hola, Como estas?</small>
                </p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-primary">
                    <i class="mdi mdi-comment-account-outline"></i>
                </div>
                <p class="notify-details">Comentario de Administrador
                    <small class="text-muted">Hace {{ rand(1, 12)}} minutos</small>
                </p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon">
                    <img src="assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                <p class="notify-details">Karen Robinson</p>
                <p class="text-muted mb-0 user-msg">
                    <small>Wow ! this admin looks good and awesome design</small>
                </p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-warning">
                    <i class="mdi mdi-account-plus"></i>
                </div>
                <p class="notify-details">New user registered.
                    <small class="text-muted">5 hours ago</small>
                </p>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="notify-icon bg-info">
                    <i class="mdi mdi-comment-account-outline"></i>
                </div>
                <p class="notify-details">Caleb Flakelar commented on Admin
                    <small class="text-muted">4 days ago</small>
                </p>
            </a>

        </div>

        <!-- All-->
        <div class="noti-title text-center" >
            <h5 class="text-dark" >
                
                    <a href="javascript:void(0);" class="text-link-dark">
                        {{__('Mostrar Todo')}}
                    </a>
                
            </h5>
            
        </div>
        

    </div>
</li>