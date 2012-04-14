<?php
    include ("../../conexion.php");
	$registro=mysql_query("update factura set status='anulado', observacion='$_REQUEST[observacion]' where n_factura='$_REQUEST[factura]'",$conexion) or
	die("error en el select".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Anular - Factura</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css" /> 
	</head>
	<body>
		<label>Presupuesto Anulado</label><br />
		<a href="/serbar/facturacion/factura">Volver</a>
	</body>
</html>