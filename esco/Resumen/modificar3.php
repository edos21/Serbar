<?php
include ("../../conexion.php");
$registro=mysql_query("update escoresumen set factura='$_REQUEST[facturan]', fecha='$_REQUEST[fechan]', cedula='$_REQUEST[cedulan]', nombre='$_REQUEST[nombren]', origen='$_REQUEST[origenn]', destino='$_REQUEST[destinon]', producto='$_REQUEST[producton]', cantidad='$_REQUEST[cantidadn]', sector='$_REQUEST[sectorn]', coordinador='$_REQUEST[coordinadorn]', observacion='$_REQUEST[observacionn]' where nota='$_REQUEST[nota]'",$conexion) or
die("error en el select".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Modificar - Ficha Resumen</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/> 
	</head>
	<body>
		<label>Datos Modificados</label><br />
		<a href="/serbar/esco/resumen">Volver</a>
	</body>
</html>