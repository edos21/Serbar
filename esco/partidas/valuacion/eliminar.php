<?php
//elimina solo 1 valuacion de 1 obra
include ("../../../conexion.php");
$registro=mysql_query("select * from escovaluacion where n_obra='$_REQUEST[n_obra]'and n_partida='$_REQUEST[n_partida]' and valuacion='$_REQUEST[valuacion]'",$conexion) or
die ("error en select: ".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Eliminar - Valuacion de partidas</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
	<?php
	if ($reg=mysql_fetch_array($registro)){
		mysql_query("delete from escovaluacion where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]' and valuacion='$_REQUEST[valuacion]'",$conexion) or
		die("error en delete: ".mysql_error());
	?>
		<label>Borrado exitoso!</label>
		<a href='/serbar/esco/partidas/valuacion/'>Volver</a>
	<?php
	}
	else {
	?>
		<label>Valuacion inexistente, verifique</label>
		<a href='eliminar.php'>volver</a>
	<?php
	}
	mysql_close($conexion);
	?>
	</body>
</html>