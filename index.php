<?php
	 include("prueba.php");
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<title>PRUEBA PHP</title>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' type='text/css' media='screen' href='prueba.css'>
		<script src='main.js'></script>
	</head>
	<body>
		<form method="post">
			<h1>LOGIN</h1>
			<label>Nombres:</label>
			<input type="text" name="nombres" placeholder="Ingresa tu nombre"><br>
			<label>Apellidos:</label>
			<input type="text" name="apellidos" placeholder="Ingresa tus apellidos"><br>
			<label>Edad:</label>
			<input type="text" name="edad" placeholder="Ingresa tu edad"><br>
			<label>Email:</label>
			<input type="email" name="email" placeholder="Ingresa tu correo"><br>
			<input type="submit" name="enviar">	
		</form>
	</body>
</html>