<?php
//busca en la base de datos la deuda total de la factura y permite indicar la cantidad q se pagara
include ("../../../conexion.php");
$registro=mysql_query("select * from escofactura where n_factura='$_REQUEST[factura]'",$conexion)or
die ("error en select".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Pagar - Factura</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<?php
		if($reg=mysql_fetch_array($registro)){
		?>
		<form method="post" action="pagor.php">
			<label>Factura: <?php echo $reg['n_factura'] ?></label>
			<label>Empresa: <?php echo $reg['nombre_emp'] ?></label>
			<label>Fecha: <?php echo $reg['fecha'] ?></label>
			<label>Pago:</label>
			<input type="text" name="pago" value="<?php echo $reg['total'] ?>" />
			<input type="hidden" name="factura" value="<?php echo $reg['n_factura'] ?>" />
			<input type="hidden" name="total" value="<?php echo $reg['total'] ?>" />
			<input type="submit" value="Pagar" />
			<input type="reset" value="Cancelar" />
			</form>
		<?php
		}
		?>
	</body>
</html>