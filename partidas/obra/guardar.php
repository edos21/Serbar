<?php
	include ("../../conexion.php");
	$registro=mysql_query("insert into partida(n_obra, obra, n_partida, partida, viaje, cantidad, precio, cejecutada, cdisponible)
	values('$_REQUEST[n_obra]','$_REQUEST[obra]','$_REQUEST[n_partida]','$_REQUEST[partida]','$_REQUEST[viaje]','$_REQUEST[cantidad]','$_REQUEST[precio]','0','$_REQUEST[cantidad]')",$conexion)or
	die ("error en select ".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Guardar - Obra de partidas</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/> 
	</head>
	<body>
		<label>Datos Guardados</label><br />
		<a href="/serbar/partidas/obra">Volver</a>
	</body>
</html>