<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PAMI Plataforma de Administracion de Medios Inteligentes">
    <meta name="author" content="Vi Electronic Entertainment">
    <link rel="icon" href="favicon.ico">
    <title>PAMI</title>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--Style-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet"/>
    <!-- Custom Style -->
        <style>
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
</head>
<body>
    <div class="flex-center position-ref">
        @if (Route::has('login'))
            <div class="links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif
    </div>
<!-- Wrapper -->
    <div id="wrapper" class="divided">
        <!-- One -->
        <section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
            <div class="content">
                <h1>PAMI</h1>
                <p class="major">Plataforma de Adminsitracion de Medios Inteligente. es un proyecto de <a href="https://www.facebook.com/ViElectronicEntertainment">Vi Electronic Entertainment</a> al servicio de <a href="https://www.blinteruniverse.com">Blinter Universe</a>.</p>
                <p><strong>Desarollado Por: </strong>Andres Gonzalez y Sergio Veloza.</p>
                </p>
                <ul class="actions vertical">
                    <li><a href="{{ url('/home') }}" class="button big wide smooth-scroll-middle">Inicio</a></li>
                </ul>
            </div>
            <div class="image">
                <img src="images/PAMI3.png" class="img-fluid" alt="PAMI"/>
            </div>
        </section>
    </div>
    <!-- Footer -->
    <footer class="wrapper style1 align-center">
        <div class="inner">
            <ul class="icons">
                <li><a href="https://www.twitter.com/BlinterUniverse" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="https://www.facebook.com/BlinterUniverse" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="https://www.instagram.com/BlinterUniverse" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="https://www.linkedin.com/company/10026362" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                <li><a href="mailto:blinteruniverse@gmail.com" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <p>&copy; 2017. Blitner Universe y PAMI son Marcas Registradas por Vi Electronic Entertainment todos los derechos son reservados.</p>
        </div>
    </footer>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>