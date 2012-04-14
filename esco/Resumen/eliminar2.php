<?php
include ("../../conexion.php");
$registro=mysql_query("select * from escoresumen where nota='$_REQUEST[nota]'",$conexion) or
die ("error en select: ".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Eliminar - Ficha Resumen</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
	<?php
	if ($reg=mysql_fetch_array($registro)){
		mysql_query("delete from escoresumen where nota='$_REQUEST[nota]'",$conexion) or
		die("error en select: ".mysql_error());
	?>
		<label>Borrado exitoso!</label>
		<a href='/serbar/esco/resumen/'>Volver</a>
	<?php
	}
	else {
	?>
		<label>Nota inexistente, verifique</label>
		<a href='eliminar.php'>volver</a>
	<?php
	}
	mysql_close($conexion);
	?>
	</body>
</html>