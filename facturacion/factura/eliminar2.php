<?php
include ("../../conexion.php");
$registro=mysql_query("select * from factura where n_factura='$_REQUEST[factura]'",$conexion) or
die ("error en select: ".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Eliminar - Factura</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<?php
		if ($reg=mysql_fetch_array($registro)){
			mysql_query("delete from factura where n_factura='$_REQUEST[factura]'",$conexion) or
			die("error en select: ".mysql_error());
		mysql_close($conexion);
 		?>
 		<label>Borrado exitoso!</label>
		<a href='/serbar/facturacion/factura/'>Volver</a>
		<?php
		}
		else {
		?>
			<label>factura inexistente, verifique</label>
			<a href='eliminar.php'>volver</a>
		<?php
		}
		?>
	</body>
</html>