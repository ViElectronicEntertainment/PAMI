<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="PAMI Plataforma de Administracion de Medios Inteligentes">
        <meta name="author" content="Vi Electronic Entertainment">
        <link rel="icon" href="favicon.ico">
        <title>PAMI</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
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

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    PAMI
                </div>
                <div class="links">
                    <p>Plataforma Administrativa de Medios Inteligentes</p>
                    <a href="https://github.com/ViElectronicEntertainment/PAMI">GitHub</a>
                    <a href="https://github.com/ViElectronicEntertainment/PAMI/issues">Reportar Errores</a>
                    <a href="https://facebook.com/BlinterUniverse/">Facebook</a>
                    <a href="https://discord.gg/34DYauN">Discord</a>
                    <a href="https://twitter.com/BlinterUniverse">Twitter</a>
                    <a href="https://www.youtube.com/channel/UCji0rxIuB2g9P6c1xCF9FZQ">YouTube</a>
                </div>
            </div>
        </div>
    </body>
</html>