<?php
//elimina 1 solicitud totalmente es decir los datos de la solicitud y los datos de los viajes
//realizados en la solicitud estando estos en la tabla sol_viaje y sol_otro
include ("../../conexion.php");
$registro=mysql_query("select * from escosolicitud where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
die ("error en select: ".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Eliminar - Tabulador de Precios</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
<?php
if ($reg=mysql_fetch_array($registro)){
	mysql_query("delete from escosolicitud where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
	die("error en select: ".mysql_error());
$registrootro=mysql_query("select * from escosol_otro where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
die ("error en select: ".mysql_error());
if ($reg2=mysql_fetch_array($registrootro)){
	mysql_query("delete from sol_otro where escon_solicitud='$_REQUEST[solicitud]'",$conexion) or
	die("error en select: ".mysql_error());
}
$registroviaje=mysql_query("select * from escosol_viaje where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
die ("error en select: ".mysql_error());
if ($reg3=mysql_fetch_array($registroviaje)){
	mysql_query("delete from sol_viaje where escon_solicitud='$_REQUEST[solicitud]'",$conexion) or
	die("error en select: ".mysql_error());
}
mysql_close($conexion);
?>
	<label>Borrado exitoso!</label>
	<a href='/serbar/esco/servicios/'>Volver</a>
<?php
}
else {
?>
	<label>Tarifa inexistente, verifique</label>
	<a href='eliminar.php'>volver</a>
<?php
}
?>
	</body>
</html>