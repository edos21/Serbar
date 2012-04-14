<?php
include ("../../../conexion.php");
$registro=mysql_query("select * from escojjpresupuesto where n_presupuesto='$_REQUEST[presupuesto]'",$conexion)or
die ("error en select".mysql_error());
$regisservicio=mysql_query("select * from escojjservicios where n_presupuesto='$_REQUEST[presupuesto]'",$conexion) or
die("error en select: ".mysql_error());
$subtotal=0;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Facturar - Factura</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<?php
		if($reg=mysql_fetch_array($registro)){
		?>
		<form method="post" action="guardar.php">
			<input type="hidden" name="presupuesto" value="<?php echo $reg['n_presupuesto'] ?>" />
			<label>N&deg; de Factura: </label>
			<input type="text" name="factura" />
			<label>Fecha: </label>
			<input type="text" name="fecha" />
			<label>Ciudad: </label>
			<input type="text" name="filial" value="<?php echo $reg['ciudad'] ?>"/>
			<label>Rif</label>
			<input type="text" name="rif" value="<?php echo $reg['rif'] ?>"/>
			<label>Nombre de la empresa:</label>
			<input type="text" name="nombre_emp" value="<?php echo $reg['nombre_emp'] ?>"/>
			<label>Direccion:</label>
			<input type="text" name="direccion" value="<?php echo $reg['direccion']?>"/>
			<label>Telefono:</label>
			<input type="text" name="telefono" value="<?php echo $reg['telefono']?>"/>
			<label>Correo de la empresa:</label>
			<input type="email" name="mail" value="<?php echo $reg['mail'] ?>"/>
			<label>Cedula:</label>
			<input type="text" name="cedula" value="<?php echo $reg['cedula'] ?>" />
			<label>Nombre:</label>
			<input type="text" name="nombre" value="<?php echo $reg['nombre'] ?>"/>
			<label>Status de la factura: </label>
			<select name="status">
				<option value="pendiente">Pendiente</option>
				<option value="pagado">Pagada</option>
			</select>
			<label>Orden</label>
			<input type="text" name="orden" value="<?php echo $reg['orden']?>" />
			<?php
			while ($regser=mysql_fetch_array($regisservicio)) {
			$subtotal=$subtotal+($regser['cantidad']*$regser['precio']);
			}
			?>
			<label>Subtotal: <?php echo $subtotal?></label>
			<label>Impuesto: <?php echo ($subtotal*$reg['impuesto'])/100?></label>
			<label>Total: <?php echo (($subtotal*$reg['impuesto'])/100)+$subtotal?></label>
			<input type="hidden" name="total" value="<?php echo (($subtotal*$reg['impuesto'])/100)+$subtotal?>" />
			<input type="submit" value="Guardar" />
			<input type="reset" value="Cancelar" />
		</form>
		<?php
		}
		?>
	</body>
</html>