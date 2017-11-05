<?php
use vendor\Rollbar\Rollbar;
use vendor\Rollbar\Payload\Level;
Rollbar::init(
  array(
    'access_token' => '0b4b0ebd6fe6477b8c61e4b322b68ee1',
    'environment' => 'development'
  )
);

Rollbar::log(Level::info(), 'Test info message');
throw new Exception('Test exception');

session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PAMI Plataforma de Administracion de Medios Inteligente ">
    <meta name="author" content="Vi Electronic Entertainment">
    <link rel="icon" href="favicon.ico">
	<title>PAMI</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Cover Bootstrap Template -->
    <link href="css/cover.css" rel="stylesheet">
</head>

<body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">PAMI</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="index.php">Home</a>
                <a class="nav-link" href="login.php">Inicio</a>
                <a class="nav-link" href="registro.php">Registro</a>
              </nav>
            </div>
          </header>
          <main role="main" class="inner cover">
            <h1 class="cover-heading">PAMI</h1>
            <p class="lead">PAMI es la plataforma de administracion de medios inteligente de Vi Electronic Entertanment al servicio de su grupo de empresas, si usted hace parte del programa de experiencia Alpha puede iniciar sesion o registrarse acontinuacion.</p>
            <p class="lead">
              <a href="login.php" class="btn btn-lg btn-secondary">Inicio</a>
            </p>
          </main>
          <footer class="mastfoot">
            <div class="inner">
              <p>Vi Electronic Entertainment - 2017</p>
            </div>
          </footer>
        </div>
      </div>
    </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>