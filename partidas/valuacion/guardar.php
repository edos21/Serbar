<?php
	include ("../../conexion.php");
	$registro=mysql_query("select * from partida where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion) or
	die("error en select: ".mysql_error());
	if($reg=mysql_fetch_array($registro)){
		$total=$reg['precio']*$_REQUEST['cantidad'];
		$ejecutada=$reg['cejecutada']+$_REQUEST['cantidad'];
		$disponible=$reg['cdisponible']-$_REQUEST['cantidad'];
	$registro3=mysql_query("update partida set cejecutada='$ejecutada', cdisponible='$disponible' where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion) or
	die("error en el select".mysql_error());
	}
	$registro2=mysql_query("insert into valuacion(n_obra, n_partida, valuacion, cantidad, total)
	values('$_REQUEST[n_obra]','$_REQUEST[n_partida]','$_REQUEST[valuacion]','$_REQUEST[cantidad]','$total')",$conexion)or
	die ("error en select ".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Guardar - Valuacion de partidas</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/> 
	</head>
	<body>
		<label>Datos Guardados</label><br />
		<a href="/serbar/partidas/valuacion">Volver</a>
	</body>
</html>