<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";}
include "conexion.php";
include "xperience.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PAMI Plataforma de Administracion de Medios Inteligentes">
    <meta name="author" content="Vi Electronic Entertainment">
    <link rel="icon" href="../favicon.ico">
	<title>PAMI | CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="../css/styles.css" rel="stylesheet">
</head>
<body>
<div>
	<h1>PAMI CRUD</h1>
	<div class="container-fluid" id="Registro">
		<form role="form" name="registro" action="registro.php" method="post">
		<div class="panel-heading">Registro</div>
		<div class="form-group">
			<label for="username">Nick ó Nombre de usuario</label>
			<input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		</div>
		<div class="form-group">
			<label for="fullname">Nombres</label>
			<input type="text" class="form-control" id="firtsname" name="firtsname" placeholder="Nombre">
		</div>
		<div class="form-group">
			<label for="fullname">Apellidos</label>
			<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellidos">
		</div>
		<div class="form-group">
			<label for="email">Correo Electronico</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
		</div>
		<div class="form-group">
			<label for="password">Contrase&ntilde;a</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		</div>
		<div class="form-group">
			<label for="confirm_password">Confirmar Contrase&ntilde;a</label>
			<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
		</div>
		<div class="btn-group">
			<button type="submit" class="btn btn-outline-primary">Registro</button>
		</div>
	</form>
	</div><!--Registro de Usuarios-->
	<div class="container-fluid" id="Consulta">
	<div class="panel-heading">Consulta de Usuarios</div>
	<table class="table">
	<thead>
		<tr>
      	<th scope="col">ID</th>
      	<th scope="col">Nivel</th>
      	<th scope="col">Exp</th>
      	<th scope="col">Nombre</th>
      	<th scope="col">Apellido</th>
      	<th scope="col">Username</th>
      	<th scope="col">eMail</th>
      	<th scope="col">Password</th>
      	<th scope="col">LIDE</th>
      	<th scope="col">INNO</th>
      	<th scope="col">TEAM</th>
      	<th scope="col">GEST</th>
      	<th scope="col">DISE</th>
      	<th scope="col">DEV</th>
      	<th scope="col">R.PRO</th>
      	<th scope="col">SALE</th>
      	<th scope="col">COMU</th>
      	<th scope="col">COMM</th>
      	<th scope="col">Registro</th>
      	<th scope="col">Editar</th>
    	<th scope="col">Borrar</th>
    	</tr>
  </thead>
<?php
// creación de la conexión a la base de datos con mysql_connect()
$conexion = mysqli_connect( $host, $user, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
// Selección del a base de datos a utilizar
$bd = mysqli_select_db( $conexion, $db ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
// establecer y realizar consulta. guardamos en variable.
$consulta = "SELECT * FROM user";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$i = 0;
while ($fila = mysqli_fetch_array($resultado)) {
	$id = $fila['id'];
	$level = $fila['level'];
	$experience = $fila['experience'];
	$Nombre = $fila['firtsname'];
	$Apellido = $fila['lastname'];
	$username = $fila['username'];
	$email = $fila['email'];
	$password = $fila['password'];
	$Leadership = $fila['Leadership'];
	$Innovation = $fila['Innovation']; 
	$Teamwork = $fila['Teamwork'];
	$Management = $fila['Management'];
	$Design = $fila['Design'];
	$Development = $fila['Development'];
	$ProblemResolution = $fila['ProblemResolution'];
	$Sales = $fila['Sales'];
	$Communication = $fila['Communication'];
	$Community = $fila['Community'];
	$Alta = $fila['created_at'];
	$i++;
?>
<tr>
	<td><?php echo $id ?></td>
	<td><?php echo $level ?></td>
	<td><?php echo $experience ?></td>
	<td><?php echo $Nombre ?></td>
	<td><?php echo $Apellido ?></td>
	<td><?php echo $username ?></td>
	<td><?php echo $email ?></td>
	<td><?php echo $password ?></td>
	<td><?php echo $Leadership ?></td>
	<td><?php echo $Innovation ?></td>
	<td><?php echo $Teamwork ?></td>
	<td><?php echo $Management ?></td>
	<td><?php echo $Design ?></td>
	<td><?php echo $Development ?></td>
	<td><?php echo $ProblemResolution ?></td>
	<td><?php echo $Sales ?></td>
	<td><?php echo $Communication ?></td>
	<td><?php echo $Community ?></td>
	<td><?php echo $Alta ?></td>
	<td><a href="usuarios.php?editar=<?php echo $id; ?>">Editar</a></td>
	<td><a href="usuarios.php?borrar=<?php echo $id; ?>">Borrar</a></td>
</tr>
<?php }mysqli_close( $conexion ); ?>
</table>
</div><!--Consulta de Usuarios-->
<div class="container-fluid" id="Consulta">
<div class="panel-heading">Consulta de Usuarios</div>
<?php
if (isset($_GET['editar'])) {
	include("editar.php");
}
?>
</div>
</body>
</html>