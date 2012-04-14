<?php
include ("../conexion.php");
$registro=mysql_query("select * from resumen where nota='$_REQUEST[nota]'",$conexion)or
die ("error en select".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Modificar - Ficha Resumen</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<?php
		if($reg=mysql_fetch_array($registro)){
		?>
		<form method="post" action="modificar3.php">
			<label>Ingrese datos nuevos:</label><br>
			<label>Numero de Factura: </label>
			<input type="text" name="facturan" value="<?php echo $reg['factura'] ?>"/>
			<label>Fecha: </label>
			<input type="text" name="fechan" value="<?php echo $reg['fecha'] ?>"/>
			<label>Cedula operador: </label>
			<input type="text" name="cedulan" value="<?php echo $reg['cedula'] ?>"/>
			<label>Nombre operador: </label>
			<input type="text" name="nombren" value="<?php echo $reg['nombre'] ?>"/>
			<label>Origen: </label>
			<input type="text" name="origenn" value="<?php echo $reg['origen'] ?>"/>
			<label>Destino: </label>
			<input type="text" name="destinon" value="<?php echo $reg['destino'] ?>"/>
			<label>Producto: </label>
			<input type="text" name="producton" value="<?php echo $reg['producto'] ?>"/>
			<label>Cantidad: </label>
			<input type="text" name="cantidadn" value="<?php echo $reg['cantidad'] ?>"/>
			<label>Sector: </label>
			<input type="text" name="sectorn" value="<?php echo $reg['sector'] ?>"/>
			<label>Coordinador: </label>
			<input type="text" name="coordinadorn" value="<?php echo $reg['coordinador'] ?>"/>
			<label>Observacion: </label>
			<textarea name="observacionn" cols="30" rows="5" ><?php echo $reg['observacion']?></textarea>
			<br />
			<input type="hidden" name="nota" value="<?php echo $reg['nota'] ?>" />
			<input type="submit" value="Modificar" />
		</form>
	<?php
	}
	?>
	</body>
</html>