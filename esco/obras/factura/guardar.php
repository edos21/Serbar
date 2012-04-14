<?php
	include ("../../../conexion.php");
	$registro=mysql_query("insert into escojjfactura(n_factura,ciudad,rif,nombre_emp,direccion,telefono,mail,cedula,nombre,status,orden,total,fecha,n_presupuesto)
	values('$_REQUEST[factura]','$_REQUEST[filial]','$_REQUEST[rif]','$_REQUEST[nombre_emp]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[mail]','$_REQUEST[cedula]','$_REQUEST[nombre]','$_REQUEST[status]','$_REQUEST[orden]','$_REQUEST[total]','$_REQUEST[fecha]',$_REQUEST[presupuesto])",$conexion)or 
	die ("error en select".mysql_error());;
	mysql_close($conexion);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Guardar - Factura</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/> 
	</head>
	<body>
		<label>Datos Guardados</label><br />
		<a href="/serbar/jjcordero/factura">Volver</a>
	</body>
</html>