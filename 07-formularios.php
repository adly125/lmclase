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
	echo "<p>nome: $varnom</p>";
	echo "<p>apelidos: $varape</p>";
	echo "<p>Contrasinal: $varclave</p>";
	?>
</body>
</html>