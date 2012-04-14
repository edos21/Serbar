<?php
//guarda en la base de datos, si la cantidad es menor de 1 entonces la marca como pagado
//en caso contrario la deja como pendiente
    include ("../../conexion.php");
	$resto=$_REQUEST['total'] - $_REQUEST['pago'];
	$stat="pendiente";
	if ($resto < 1) {
		$stat="pagado";
	}
	$registro=mysql_query("update factura set total='$resto', status='$stat' where n_factura='$_REQUEST[factura]'",$conexion) or
	die("error en el select".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Pagar - Factura</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<caption>Pago Recibido</caption>
		<caption>Restante: <?php echo $resto ?></caption>
		<a href="/serbar/facturacion/factura">Volver</a>
	</body>
</html>