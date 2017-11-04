<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PAMI Plataforma de Administracion de Medios Inteligente ">
    <meta name="author" content="Vi Electronic Entertainment">
    <link rel="icon" href="favicon.ico">
	<title>PAMI | Login</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Cover Bootstrap Template -->
    <link href="css/cover.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md">
			<h2>Login</h2>
			<!--Formulario-->
			<form role="form" name="login" action="php/login.php" method="post">
				<div class="form-group">
					<label for="username">Nombre de usuario o email</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
				</div>
				<div class="form-group">
					<label for="password">Contrase&ntilde;a</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
				</div>
				<!--Caja de Botones-->
				<div class="btn-group">
					<button type="submit" class="btn btn-outline-primary">Acceder</button>
					<a href="registro.php" class="btn btn-outline-info" role="button" aria-pressed="true">Registro</a>
				</div>
			</form>
		</div>
	</div>
</div>
<script src="js/valida_login.js"></script>
</body>
</html>