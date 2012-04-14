<?php
    include ("../../conexion.php");
	$registro=mysql_query("update jjpresupuesto set ciudad='$_REQUEST[ciudadn]', fecha='$_REQUEST[fechan]', rif='$_REQUEST[rifn]', nombre_emp='$_REQUEST[nombre_empn]', telefono='$_REQUEST[telefonon]', direccion='$_REQUEST[direccionn]', mail='$_REQUEST[mailn]', cedula='$_REQUEST[cedulan]', nombre='$_REQUEST[nombren]', status='$_REQUEST[statusn]', orden='$_REQUEST[ordenn]', impuesto='$_REQUEST[impueston]' where n_presupuesto='$_REQUEST[presupuesto]'",$conexion) or
	die("error en el select".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Modificar - Presupuesto JJCORDERO</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css" /> 
	</head>
	<body>
		<label>Datos Modificados</label><br />
		<a href="/serbar/JJcordero/presupuesto">Volver</a>
	</body>
</html>