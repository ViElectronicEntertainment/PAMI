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
	<!-- CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <h2>Login</h2>
		<div class="login-panel panel panel-default">
			<div class="panel-heading">Log in</div>
			<div class="panel-body">
		<!--Formulario-->
			<form role="form" name="login" action="php/login.php" method="post">
				<fieldset>
				<div class="form-group">
					<label for="username">Nombre de usuario o email</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
				</div>
				<div class="form-group">
					<label for="password">Contrase&ntilde;a</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
				</div>
				<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Recuerdame
								</label>
							</div>
				<!--Caja de Botones-->
				<div class="btn-group">
					<button type="submit" class="btn btn-outline-primary">Acceder</button>
					<a href="registro.php" class="btn btn-outline-info" role="button" aria-pressed="true">Registro</a>
                </div>
                </fieldset>
			</form>
		</div><!--Panel Body-->
	</div><!--Login Panel-->
</div><!--Col-->
</div><!--Row-->
<!--Scripts-->
<script src="js/valida_login.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.js" integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>