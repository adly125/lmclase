<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos recibidos</title>
</head>
<body>
	<h1>Datos recibidos:</h1>
	<?php
	$varnom=$_GET{"nome"}??"";
	$varape=$_GET{"apelidos"}??"";
	$varclave=$_GET{"clave"}??"";
	$varsexo=$_GET{"sexo"}??"";
	$varxornada=$_GET{"xornada"}??"";
	$varfutbol=$_GET{"futbol"}??"";
	$vartenis=$_GET{"tenis"}??"";
	$varref=$_GET{"ref"}??"";
	echo "<p>nome: $varnom</p>";
	echo "<p>apelidos: $varape</p>";
	echo "<p>Contrasinal: $varclave</p>";
	echo "<p>Sexo: $varsexo</p>";
	echo "<p>Futbol $varfutbol</p>";
	echo "<p>Tenis $vartenis</p>";
	echo "<p>Referencia (oculta): $varref</p>";
	?>
</body>
</html>