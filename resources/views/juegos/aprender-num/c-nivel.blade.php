<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo3.png">
    <title>Kaanbal</title>
    <!-- Custom CSS -->
    <link href="assets/vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="assets/vendors/calendar/calendar.css" rel="stylesheet" />
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <div id="main-wrapper">
        
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            
                            <img src="assets/img/favicon.png" alt="homepage" class="light-logo" />
                           
                        </b>
              
                        <span class="logo-text">
                             
                             <img src="assets/img/logo4.png" alt="homepage" class="light-logo" />
                            
                        </span>
                        
                    </a>
                    
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                   
                    <ul class="navbar-nav float-right">
                        
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ route('user.avatar', ['filename'=>Auth::user()->image]) }}" class="avatar" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> Perfil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('config') }}"><i class="ti-settings m-r-5 m-l-5"></i> Configuración</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar sesión</a>
                                <div class="dropdown-divider"></div>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> 
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        
        <div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title" >Aprende los números</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/aprender-num">Volver</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cuarto Nivel</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
               
                 <div class="card">
                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="p-20">
                                        <audio id="15" src="assets/img/figuras/numbers/jolajun.m4a"></audio>
                                        <audio id="18" src="assets/img/figuras/numbers/waxaklajun.m4a"></audio>
                                        <h1>Iniciamos nuestro aprendizaje de la cultura Maya</h1>
                                        <p>Iniciamos identificando los números maya, selecciona la opción que creas correcta según el número mostrado</p>
                                        <img src="assets/img/figuras/numbers/num11.png" class="img-fluid">
                                        <button type="button" class="btn btn-warning btn-lg pull-right" style="margin-left: 9.9%" onclick="document.getElementById('18').play()">Waxak lajun</button><br>
                                        <button type="button" class="btn btn-warning btn-lg pull-right" style="margin-left: 20%" onclick="document.getElementById('15').play()">Jo' lajun</button><br>
                                        <button onclick='alert("¡¡¡CORRECTO!!!")' type="button" class="btn btn-warning btn-lg pull-right" style="margin-left: 20%; margin-top: 1% ">Buluk</button><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="pull-left"><a href="/num-t-nivel" class="flip-link btn btn-danger" >Anterior</a></span>
                        <span class="pull-right"><a href="/num-q-nivel" class="flip-link btn btn-success" >Siguiente</a></span>
               
           
        </div>
        
    </div>
    
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="js/jquery.ui.touch-punch-improved.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/vendors/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/vendors/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- this page js -->
    <script src="assets/vendors/moment/min/moment.min.js"></script>
    <script src="assets/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="js/pages/calendar/cal-init.js"></script>

</body>

</html>