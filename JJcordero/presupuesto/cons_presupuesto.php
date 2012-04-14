<?php
	include ("../../conexion.php");
	$registro=mysql_query("select * from jjpresupuesto where n_presupuesto='$_REQUEST[presupuesto]'",$conexion) or
	die("error en select: ".mysql_error());
	$regisservicio=mysql_query("select * from jjservicios where n_presupuesto='$_REQUEST[presupuesto]'",$conexion) or
	die("error en select: ".mysql_error());
	$subtotal=0;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Consulta presupuesto - Presupuesto JJCORDERO</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<?php
		if ($reg=mysql_fetch_array($registro)) {
		?>
		<div>
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
			<caption><?php echo $regser['descripcion']?></caption>
			<caption><?php echo $regser['cantidad']?></caption>
			<caption><?php echo $regser['precio']?></caption>
			<caption><?php echo $regser['cantidad']*$regser['precio']?></caption>
		<?php
		}
		?>
			<caption><?php echo $subtotal?></caption>
			<caption><?php echo $reg['impuesto']?></caption>
			<caption><?php echo ($subtotal*$reg['impuesto'])/100?></caption>
			<caption><?php echo (($subtotal*$reg['impuesto'])/100)+$subtotal?></caption> 
		</div>
		<?php
		}
		?>
	</body>
</html>
	