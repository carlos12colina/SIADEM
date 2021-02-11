<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>SIADEM</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <div class="wrapper">
                    <div class="sidebar" data-color="green" data-image="assets/img/sidebar-5.jpg">

                        <div class="sidebar-wrapper">
                            <div class="logo">
                                <a class="simple-text">
                                    SIADEM
                                </a>
                            </div>

                            <ul class="nav">
                                <li class="active">
                                    <a href="{{ route('home') }}">
                                        <i class="pe-7s-graph"></i>
                                        <p>Inicio</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('tiendaVensuca') }}">
                                        <p style="margin-left: 0px;"> <img class="avatar border-gray" src="assets/images/iconosEmpresas/fevicon.png" width="30%" height="30%" alt="..."/>Tienda vensuca</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="main-panel">
                        <nav class="navbar navbar-default navbar-fixed">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav navbar-left">
                                        <li>
                                           <a href="">
                                                <i class="fa fa-search"></i>
                                                <p class="hidden-lg hidden-md">Buscar</p>
                                            </a>
                                        </li>
                                    </ul>

                                    <ul class="nav navbar-nav navbar-right">
                                        <li>
                                           <a href="">
                                               <p>Cuenta</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Salir
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                        <li class="separator hidden-lg"></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                        <main class="py-4">
                            @yield('content')
                        </main>

                        <footer class="footer">
                            <div class="container-fluid">
                                <p class="copyright pull-right">
                                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">GCG</a>, todos los derechos reservados
                                </p>
                            </div>
                        </footer>

                    </div>
                </div>
        </div>
    </nav>    
    </div>
</body>


<!--   Core JS Files   -->
<script src="{{ asset('assets/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{{ asset('assets/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{ asset('assets/js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/demo.js') }}"></script>

<script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "Bienvenido "

            },{
                type: 'info',
                timer: 4000
            });

        });
</script>


</html>
