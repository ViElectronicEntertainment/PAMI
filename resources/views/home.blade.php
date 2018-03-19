<?php
use Illuminate\Support\Facades\Auth;

// Obtiene el nombre del Usuario Autenticado
$name = Auth::user()->name; ?>

@extends('layouts.app')
@section('content')

<body class="template-page sidebar-collapse">
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
                                <a class="dropdown-item" href="{{ url('/blog') }}" rel="tooltip" title="Tablero PAMI" data-placement="bottom">
                                    <i class="fa fa-newspaper-o" aria-hidden="true"></i> Blog
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
        <div class="page-header">
            <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset('images/scarlettpami.jpg') }}');">
            </div>
        </div>
        <div class="section">
            <!--Noticias-->
            <div class="container-fluid">
                <h1>Bienvenido a PAMI <?php echo "$name" ?></h1>
                <p class="blockquote blockquote-primary"><strong>Hola!</strong> Gracias por probar PAMI por favor no dudes en comunicar tus ideas, Esta es una version preliminar, las cosas pueden cambiar en su version final.</p>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                        <a href="{{ url('/blog') }}" class="btn btn-primary btn-lg">
                            <i class="fa fa-newspaper-o"></i> Blog de Desarrollo
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="https://github.com/ViElectronicEntertainment/PAMI">PAMI 0.0.2</a>
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