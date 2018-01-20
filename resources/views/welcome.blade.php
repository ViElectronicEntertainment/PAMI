<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="description" content="PAMI Plataforma de Administracion de Medios Inteligentes">
    <meta name="author" content="Vi Electronic Entertainment">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-icon.png') }}">
    <link rel="icon" href="favicon.ico">
    <title>PAMI</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/now-ui-kit.css?v=1.1.0') }}" rel="stylesheet" />
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ url('/home') }}" rel="tooltip" title="Tablero PAMI" data-placement="bottom">
                    PAMI - Scarlet Edition
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{ asset('images/blurred-image-1.jpg') }}">
                <ul class="navbar-nav">
                    @if (Route::has('login')) @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}" rel="tooltip" title="Tablero PAMI" data-placement="bottom">
                            <i class="fa fa-tachometer" aria-hidden="true"></i>
                            <p>Tablero</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" rel="tooltip" title="Salir de PAMI" data-placement="bottom" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off mr-1" aria-hidden="true"></i>
                            <p>Salir</p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" rel="tooltip" title="Inicia en PAMI" data-placement="bottom">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}" rel="tooltip" title="Registrate a PAMI" data-placement="bottom">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                            <p>Registro</p>
                        </a>
                    </li>
                    @endauth @endif
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Programa PAMI en Github" data-placement="bottom" href="https://github.com/ViElectronicEntertainment/PAMI" target="_blank">
                            <i class="fa fa-github"></i>
                            <p class="d-lg-none d-xl-none">GitHub</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Siguenos en Twitter" data-placement="bottom" href="https://twitter.com/BlinterUniverse" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Me Gusta en Facebook" data-placement="bottom" href="https://www.facebook.com/BlinterUniverse" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Siguenos en Instagram" data-placement="bottom" href="https://www.instagram.com/BlinterUniverse" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Banner -->
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset('images/header.jpg') }}');">
            </div>
            <div class="container">
                <div class="content-center brand">
                    <img class="n-logo" src="{{ asset('images/PAMI3.png') }}" alt="">
                    <h1 class="h1-seo">PAMI</h1>
                    <h3>Plataforma de Administracion de Medios Inteligentes</h3>
                </div>
                <h6 class="category category-absolute">Diseñado por
                    <a href="http://blinteruniverse.com" target="_blank">Vi Electronic Entertainment - Blinter</a>
                </h6>
            </div>
        </div>
        <div class="section section-basic">
            <div class="section section-tabs">
                <div class="container">
                    <div class="row">
                        <div class="container-fluid">
                            <p class="category">Caracteristicas de PAMI Scarlet</p>
                            <!-- Tabs with Background on Card -->
                            <div class="card">
                                <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Blinter Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#security" role="tab">Modulo de Seguridad</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#projects" role="tab">Sistema de Proyectos y Tareas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#adwards" role="tab">Sistema de Recompensa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#pool" role="tab">Piscina de Tareas</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <!-- Tab panes -->
                                <div class="tab-content text-center">
                                    <div class="tab-pane active" id="profile" role="tabpanel">
                                        <p>La tecnologia Blinter Profile es uno de los pilares mas importantes de PAMI, pretende gamificar la experiencia mediante Skills o habilidades que se usaran en el transcurso de desarrollo de PAMI.</p>
                                    </div>
                                    <div class="tab-pane" id="security" role="tabpanel">
                                        <p>PAMI esta pensado para administrar volumenes de datos importantes, es por ello que hemos implementado una serie de mejoras en la seguridad de nuestro software.</p>
                                    </div>
                                    <div class="tab-pane" id="projects" role="tabpanel">
                                        <p>PAMI en su primera version Scarlet podra crear editar, actualizar proyectos y tareas.</p>
                                    </div>
                                    <div class="tab-pane" id="adwards" role="tabpanel">
                                        <p>Los Sistemas de recompensas son parte fundamental de la experiencia PAMI, permiten compensar y estimular el desarrollo</p>
                                    </div>
                                    <div class="tab-pane" id="pool" role="tabpanel">
                                        <p>La piscina de tareas permite a los usuarios registrarse a proyectos y tareas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" data-background-color="black">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="text-center col-md-12 col-lg-8">
                        <h3 class="title">Te gusta el proyecto PAMI?</h3>
                        <h5 class="description">Ayudanos a crecer es importante para nosotros saber que piensas.</h5>
                    </div>
                    <div class="text-center col-md-12 col-lg-8">
                        <a href="#" class="btn btn-primary btn-lg btn-round" role="button">Descargar PAMI</a>
                        <a href="#" target="_blank" class="btn btn-primary btn-lg btn-simple btn-round" role="button">Documentacion PAMI</a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer" data-background-color="black">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="https://blinteruniverse.com">Vi Electronic Entertainment</a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                    document.write(new Date().getFullYear())
                    </script>, Diseñado y Programado con
                    <i class="fa fa-heart" style="color:red;"></i> por
                    <a href="http://www.blinteruniverse.com" target="_blank">Blinter Universe</a>
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('js/now-ui-kit.js?v=1.1.0') }}" type="text/javascript"></script>

</html>