<?php
	include ("../../../conexion.php");
	$registro=mysql_query("select * from escojjfactura where n_factura='$_REQUEST[factura]'",$conexion) or
	die("error en select: ".mysql_error());
	$subtotal=0;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Consulta factura - Facturas</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<?php
		if ($reg=mysql_fetch_array($registro)) {
			$regisservicio=mysql_query("select * from escojjservicios where n_presupuesto='$reg[n_presupuesto]'",$conexion) or
			die("error en select: ".mysql_error());
			$regispresupuesto=mysql_query("select * from escojjpresupuesto where n_presupuesto='$reg[n_presupuesto]'",$conexion) or
			die("error en select: ".mysql_error());
		?>
		<div>
			<caption><?php echo $reg['ciudad']?></caption>
			<caption><?php echo $reg['fecha']?></caption>
		</div>
		<div>
			<caption><?php echo $reg['n_presupuesto']?></caption>
			<caption><?php echo $reg['nombre_emp']?></caption>
			<caption><?php echo $reg['direccion']?></caption>
			<caption><?php echo $reg['rif']?></caption>
			<caption><?php echo $reg['telefono']?></caption>
		</div>
		<?php
		while ($regser=mysql_fetch_array($regisservicio)) {
			$subtotal=$subtotal+($regser['cantidad']*$regser['precio'])
		?>
		<div>
			<caption><?php echo $regser['cantidad']?></caption>
			<caption><?php echo $regser['descripcion']?></caption>
			<caption><?php echo $regser['precio']?></caption>
			<caption><?php echo $regser['cantidad']*$regser['precio']?></caption>
		<?php
		}
		?>
			<caption><?php echo $subtotal?></caption>
		<?php
		if ($regpre=mysql_fetch_array($regispresupuesto)) {
		?>	
			<caption><?php echo $regpre['impuesto']?></caption>
			<caption><?php echo ($subtotal*$regpre['impuesto'])/100?></caption>
			<caption><?php echo (($subtotal*$regpre['impuesto'])/100)+$subtotal?></caption> 
		</div>
		<?php
		}
		}
		?>
	</body>
</html>