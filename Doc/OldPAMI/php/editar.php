<?php
include "conexion.php";
if (isset($_GET['editar'])) {
	$editar_id = $_GET['editar'];
	$consulta = "SELECT * FROM user WHERE id= '$editar_id'";
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $host, $user, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	// Selección del a base de datos a utilizar
	$bd = mysqli_select_db( $conexion, $db ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	$ejecutar = mysqli_query($conexion, $consulta) or die ( "Algo ha ido mal en la consulta a la base de datos");
	$fila = mysqli_fetch_array($ejecutar);
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
} ?> <br />
<form method="POST" action="">
	<input type="number" name="ID" value="<?php echo $id ?>"><br />
	<input type="number" name="Level" value="<?php echo $level ?>"><br />
	<input type="number" name="Experience" value="<?php echo $experience ?>"><br />
	<input type="text" name="Nombre" value="<?php echo $Nombre ?>"><br />
	<input type="text" name="Apellido" value="<?php echo $Apellido ?>"><br />
	<input type="text" name="Username" value="<?php echo $username ?>"><br />
	<input type="text" name="email" value="<?php echo $email ?>"><br />
	<input type="password" name="password" value="<?php echo $password ?>"><br />
	<input type="number" name="Leadership" value="<?php echo $Leadership ?>"><br />
	<input type="number" name="Innovation" value="<?php echo $Innovation ?>"><br />
	<input type="number" name="Teamwork" value="<?php echo $Teamwork ?>"><br />
	<input type="number" name="Management" value="<?php echo $Management ?>"><br />
	<input type="number" name="Design" value="<?php echo $Design ?>"><br />
	<input type="number" name="Development" value="<?php echo $Development ?>"><br />
	<input type="number" name="ProblemResolution" value="<?php echo $ProblemResolution ?>"><br />
	<input type="number" name="Sales" value="<?php echo $Sales ?>"><br />
	<input type="number" name="Communication" value="<?php echo $Communication ?>"><br />
	<input type="number" name="Community" value="<?php echo $Community ?>"><br />
	<input type="date" name="created_at" value="<?php echo $created_at ?>"><br />
	<input type="submit" name="actualizar" value="Actualizar">
</form>
<?php
if (isset($_POST['actualizar'])) {
$actualizar_id = $_POST['id'];
$actualizar_level = $_POST['level'];
$actualizar_experience = $_POST['experience'];
$actualizar_Nombre = $_POST['firtsname'];
$actualizar_Apellido = $_POST['lastname'];
$actualizar_Username = $_POST['username'];
$actualizar_email = $_POST['email'];
$actualizar_password = $_POST['password'];
$actualizar_Liderazgo = $_POST['Leadership'];
$actualizar_Innovacion = $_POST['Innovation'];
$actualizar_Teamwork = $_POST['Teamwork'];
$actualizar_Managment = $_POST['Management'];
$actualizar_Design = $_POST['Design'];
$actualizar_Desarrollo = $_POST['Development'];
$actualizar_RProblemas = $_POST['ProblemResolution'];
$actualizar_Ventas = $_POST['Sales'];
$actualizar_Comunicacion = $_POST['Communication'];
$actualizar_Comunidad = $_POST['Community'];
$actualizar_Alta = $_POST['created_at'];
$actualizar = "UPDATE user SET ID = '$actualizar_id', Level = '$actualizar_level', Experience = '$actualizar_experience', Nombre = '$actualizar_Nombre', Apellido = '$actualizar_Apellido', username = '$actualizar_Username', email = '$actualizar_email', password = '$actualizar_password', Leadership = '$actualizar_Liderazgo', Innovation = '$actualizar_Innovacion', Teamwork = '$actualizar_Teamwork', Management = '$actualizar_Management', Design = '$actualizar_Design', Development = '$actualizar_Development', ProblemResolution = '$actualizar_RProblemas', Sales = '$actualizar_Ventas', Communication = '$actualizar_Comunicacion', Communication = '$actualizar_Comunidad', created_at = '$actualizar_Alta', WHERE id=$editar_id";
$ejecutar = mysqli_query($con, $actualizar);
if($ejecutar){
	echo "<script>alert('Datos Actualizados')</script>";
	echo "<script>window.open('formulario.php')</script>";
}}mysqli_close($con); ?>