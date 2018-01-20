<?php
use Illuminate\Support\Facades\Auth;

// Obtiene el nombre del Usuario Autenticado
$user_name = Auth::user()->name; ?>

@extends('layouts.app')
@section('content')
<body class="template-page sidebar-collapse">
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ url('/home') }}" rel="tooltip" title="Tablero PAMI" data-placement="bottom">
                    PAMI - {{$post->name}}
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
                            <a href="" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="navbarDropdownMenuLink1"><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo "$user_name" ?></a>
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
    <div class="wrapper">
        <div class="page-header">
            @if($post->file)
            <div class="page-header-image" data-parallax="true" style="background-image: url('../{{ $post->file }}');">
            </div>
            @else
            <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset('images/scarlettpami.jpg') }}');">
            </div>
            @endif
            <div class="container">
                <div class="content-center">
                    <h1 class="title">{{ $post->name }}</h1>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <br>
                <hr>
                {!! $post->body !!}
                <hr>
                <h6>Categoria:<a href="{{route('category', $post->category->slug)}}"> {{ $post->category->slug }}</a></h6>
            </div>
        </div>
        <footer class="footer">
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