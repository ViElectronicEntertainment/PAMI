<?php
if(!empty($_POST))
{
	//Comprobar que los campos no esten vacios
	if(isset($_POST["username"]) &&isset($_POST["firtsname"]) &&isset($_POST["lastname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){if($_POST["username"]!=""&&$_POST["firtsname"]!=""&&$_POST["lastname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";

			$found=false;
			$sql1= "select * from user where username=\"$_POST[username]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.php';</script>";
			}
			$sql = "insert into user(username,firtsname,lastname,email,password,Leadership,Innovation,Teamwork,Management,Design, Development,ProblemResolution,Sales,Communication,Community,level,experience,created_at) value (\"$_POST[username]\",\"$_POST[firtsname]\",\"$_POST[lastname]\",\"$_POST[email]\",\"$_POST[password]\",'1','1','1','1','1','1','1','1','1','1','1','0',NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../login.php';</script>";
			}
		}
	}
}
?>