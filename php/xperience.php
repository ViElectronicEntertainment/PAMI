<!--Blinter Xperience Core-->
<?php
include "conexion.php";
// Selección del a base de datos a utilizar
$consulta = "SELECT * FROM user";
$resultado = mysqli_query( $con, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$columna = mysqli_fetch_array( $resultado );

//Declaracion de variables:
$Nombre = $columna['firtsname'];
$Apellido = $columna['lastname'];
$username = $columna['username'];
$email = $columna['email'];
$Leadership = $columna['Leadership'];
$Innovation = $columna['Innovation']; 
$Teamwork = $columna['Teamwork'];
$Management = $columna['Management'];
$Design = $columna['Design'];
$Development = $columna['Development'];
$ProblemResolution = $columna['ProblemResolution'];
$Sales = $columna['Sales'];
$Communication = $columna['Communication'];
$Community = $columna['Community'];
$level = $columna['level'];

//Variables Xperience
$Stats_total = $Leadership+$Innovation+$Teamwork+$Management+$Design+$Development+$ProblemResolution+$Sales+$Communication+$Community;
$Stats_Prom = $Stats_total/10;
mysqli_close( $con );
?>