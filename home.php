<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}
?>
<html>
	<head>
	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PAMI Plataforma de Administracion de Medios Inteligente ">
    <meta name="author" content="Vi Electronic Entertainment">
    <link rel="icon" href="favicon.ico">
	<title>PAMI | Tablero</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Cover Bootstrap Template -->
    <link href="css/cover.css" rel="stylesheet">
</head>
	<body>
<div class="container">
<div class="row">
<div class="col-md">
		<h2>Bienvenido</h2>
</div>
</div>
</div>
	</body>
</html>