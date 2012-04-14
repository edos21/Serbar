<?php
	include ("../conexion.php");
	$registro=mysql_query("insert into resumen(nota, factura, fecha, cedula, nombre, origen, destino, producto, cantidad, sector, coordinador, observacion)
	values('$_REQUEST[nota]','$_REQUEST[factura]','$_REQUEST[fecha]','$_REQUEST[cedula]','$_REQUEST[nombre]','$_REQUEST[origen]','$_REQUEST[destino]','$_REQUEST[producto]','$_REQUEST[cantidad]','$_REQUEST[sector]','$_REQUEST[coordinador]','$_REQUEST[observacion]')",$conexion)or
	die ("error en select ".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Guardar - Ficha Resumen</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/> 
	</head>
	<body>
		<label>Datos Guardados</label><br />
		<a href="/serbar/resumen">Volver</a>
	</body>
</html>