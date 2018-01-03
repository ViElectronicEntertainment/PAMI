<?php
use Illuminate\Support\Facades\Auth;
$name = Auth::user()->name;
$email = Auth::user()->email;
$pass = Auth::user()->password;
$liderazgo = Auth::user()->leadership;
$innovacion = Auth::user()->innovation;
$equipo = Auth::user()->teamwork;
$gestion = Auth::user()->management;
$diseno = Auth::user()->design;
$desarrollo = Auth::user()->development;
$problemas = Auth::user()->problemresolution;
$ventas = Auth::user()->sales;
$comunicacion = Auth::user()->communication;
$comunidad = Auth::user()->community;
$nivel = Auth::user()->level;
$exp = Auth::user()->experience;
$total = $liderazgo + $innovacion + $equipo + $gestion + $diseno + $desarrollo + $problemas + $ventas + $comunicacion + $comunidad;
?>
    @extends('layouts.app')
    <title>PAMI |
        <?php echo "$name" ?>
    </title>
    @section('content')

    <body class="profile-page sidebar-collapse">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" href="{{ url('/home') }}" rel="tooltip" title="Tablero PAMI" data-placement="bottom">
                    PAMI - Scarlett Edition
                </a>
                    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{ asset('images/blurred-image-1.jpg') }}">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <div class="dropdown">
                                <a href="" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="navbarDropdownMenuLink1"><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo "$name" ?></a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                    <a class="dropdown-item" href="{{ url('/home') }}" rel="tooltip" title="Tablero PAMI" data-placement="bottom">
                                    <i class="fa fa-tachometer" aria-hidden="true"></i> Tablero
                                </a>
                                    <a class="dropdown-item" href="{{ url('/profile') }}" rel="tooltip" title="Ir a mi Perfil PAMI" data-placement="bottom">
                                    <i class="fa fa-user" aria-hidden="true"></i> Mi Perfil
                                </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}" rel="tooltip" title="Salir de PAMI" data-placement="bottom" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off mr-1" aria-hidden="true"></i>Salir
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></a>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="wrapper">
            <div class="page-header page-header-small" filter-color="orange">
                <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset('images/full.jpg') }}');">
                </div>
                <div class="container">
                    <div class="content-center">
                        <div class="photo-container">
                            <img src="{{ asset('images/sergioveloza.jpg') }}" alt="">
                        </div>
                        <h3 class="title"><?php echo "$name" ?></h3>
                        <p class="category">Jefe de Guerra</p>
                        <div class="content">
                            <div class="social-description">
                                <h2><?php echo "$nivel" ?></h2>
                                <p>Nivel</p>
                            </div>
                            <div class="social-description">
                                <h2><?php echo "$total" ?></h2>
                                <p>Puntos de Habilidad</p>
                            </div>
                            <div class="social-description">
                                <h2>Blinter</h2>
                                <p>Division Favorita</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <div class="button-container">
                    </div>
                    <div class="progress-container progress-primary">
                        <span class="progress-badge">Progreso del Nivel</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="progress-value">60%</span>
                            </div>
                        </div>
                    </div>
                    <h3 class="title">Biografia</h3>
                    <h5 class="description">Hola! mi nombre es Sergio Veloza naci el 28 de diciembre de 1995 y desde que tengo memoria amo las tecnologias y los juegos, asi que dedico mi vida a usar las tecnologias de los juegos para cambiar vidas, quiero ayudarte a trabajar, vivir, entretenerte y aprender mas facil, divertido y sobre todo Mejor! :)</h5>
                    <div class="container">
                        <h3 class="title">Blinter Profile</h3>
                        <h5 class="description">Puntos de Habilidad:</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Liderazgo
                                <span class="badge badge-primary badge-pill"><?php echo "$liderazgo" ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Innovacion
                                <span class="badge badge-primary badge-pill"><?php echo "$innovacion" ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Trabajo en Equipo
                                <span class="badge badge-primary badge-pill"><?php echo "$equipo" ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Gestion
                                <span class="badge badge-primary badge-pill"><?php echo "$gestion" ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Diseño
                                <span class="badge badge-primary badge-pill"><?php echo "$diseno" ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Desarrollo
                                <span class="badge badge-primary badge-pill"><?php echo "$desarrollo" ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Resolucion de Problemas
                                <span class="badge badge-primary badge-pill"><?php echo "$problemas" ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Ventas
                                <span class="badge badge-primary badge-pill"><?php echo "$ventas" ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Comunicacion
                                <span class="badge badge-primary badge-pill"><?php echo "$comunicacion" ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Comunidad
                                <span class="badge badge-primary badge-pill"><?php echo "$comunidad" ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <h4 class="title text-center">Divisiones Favoritas</h4>
                            <div class="nav-align-center">
                                <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="" role="tablist">
                                        <img src="{{ asset('images/PAMI3.png') }}"></img>
                                    </a>
                                        <h6>PAMI</h6>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="" role="tablist">
                                        <img src="{{ asset('images/PAMI3.png') }}"></img>
                                    </a>
                                        <h6>Blinter</h6>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="" role="tablist">
                                        <img src="{{ asset('images/PAMI3.png') }}"></img>
                                    </a>
                                        <h6>Vie2</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer footer-default">
                <div class="container">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://github.com/ViElectronicEntertainment/PAMI">PAMI 0.0.1</a>
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
    @endsection