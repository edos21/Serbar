<?php
	include ("../../conexion.php");
	$registro=mysql_query("insert into presupuesto(n_presupuesto,filial,fecha,rif,nombre_emp,telefono,direccion,mail,cedula,nombre,status,impuesto)
	values('$_REQUEST[presupuesto]','$_REQUEST[filial]','$_REQUEST[fecha]','$_REQUEST[rif]','$_REQUEST[nombre_emp]','$_REQUEST[telefono]','$_REQUEST[direccion]','$_REQUEST[mail]','$_REQUEST[cedula]','$_REQUEST[nombre]','$_REQUEST[status]','$_REQUEST[impuesto]')",$conexion) or die(mysql_error());
	mysql_close($conexion);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Guardar - Presupuesto</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/> 
	</head>
	<body>
		<label>Datos Guardados</label><br />
		<a href="/serbar/facturacion/presupuesto">Volver</a>
	</body>
</html>