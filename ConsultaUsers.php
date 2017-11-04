<?php
//Importar Conexion
include "php/conexion.php";
// Configuracion de la base de datos
$servidor = "127.0.0.1";
$usuario = "root";
$contraseña = "";
$bd = "pami";
// creación de la conexión a la base de datos con mysql_connect()
$conexion = mysqli_connect( $servidor, $usuario, $contraseña ) or die ("No se ha podido conectar al servidor de Base de datos");
// Selección del a base de datos a utilizar
$db = mysqli_select_db( $conexion, $bd ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
// establecer y realizar consulta. guardamos en variable.
$consulta = "SELECT * FROM user";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
// Motrar el resultado de los registro de la base de datos
// Encabezado de la tabla
echo "<table borde='2'";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Primer Nombre</th>";
echo "<th>Segundo Nombre</th>";
echo "<th>Usuario</th>";
echo "<th>eMail</th>";
echo "<th>Contraseña</th>";
echo "<th>Liderazgo</th>";
echo "<th>Innovacion</th>";
echo "<th>Trabajo en equipo</th>";
echo "<th>Gestion</th>";
echo "<th>Diseño</th>";
echo "<th>Desarrollo</th>";
echo "<th>R. de Problemas</th>";
echo "<th>Ventas</th>";
echo "<th>Comunicacion</th>";
echo "<th>Comunidad</th>";
echo "<th>Fecha de Creacion</th>";
echo "</tr>";
// Bucle while que recorre cada registro y muestra cada campo en la tabla.
while ($columna = mysqli_fetch_array( $resultado ))
{
	echo "<tr>";
	echo "</td>";
	echo "<td>".$columna['id']."</td>";
	echo "<td>".$columna['firtsname']."</td>";
	echo "<td>".$columna['lastname']."</td>";
	echo "<td>".$columna['username']."</td>";
	echo "<td>".$columna['email']."</td>";
	echo "<td>".$columna['password']."</td>";
	echo "<td>".$columna['Leadership']."</td>";
	echo "<td>".$columna['Innovation']."</td>";
	echo "<td>".$columna['Teamwork']."</td>";
	echo "<td>".$columna['Management']."</td>";
	echo "<td>".$columna['Design']."</td>";
	echo "<td>".$columna['Development']."</td>";
	echo "<td>".$columna['ProblemResolution']."</td>";
	echo "<td>".$columna['Sales']."</td>";
	echo "<td>".$columna['Communication']."</td>";
	echo "<td>".$columna['Community']."</td>";
	echo "<td>".$columna['created_at']."</td>";
	echo "</tr>";
}
echo "</table>"; // Fin de la tabla
// cerrar conexión de base de datos
mysqli_close( $conexion );
?>