<?php
    include ("../../conexion.php");
	$registro=mysql_query("update partida set obra='$_REQUEST[obran]', partida='$_REQUEST[partidan]', viaje='$_REQUEST[viajen]', cantidad='$_REQUEST[cantidadn]', precio='$_REQUEST[precion]' where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion) or
	die("error en el select".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Modificar - Obra de Partida</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css" 
	</head>
	<body>
		<label>Datos Modificados</label><br />
		<a href="/serbar/partidas/obra">Volver</a>
	</body>
</html>