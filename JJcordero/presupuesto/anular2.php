<?php
include ("../../conexion.php");
$registro=mysql_query("select * from jjpresupuesto where n_presupuesto='$_REQUEST[presupuesto]'",$conexion)or
die ("error en select".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Datos a modificar - Presupuesto </title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<?php
		if($reg=mysql_fetch_array($registro)){
		?>
		<form method="post" action="anular3.php">
			<label>Ciudad: </label>
			<label><?php echo $reg['ciudad'] ?></label>
			<label>Rif &oacute; CI:</label>
			<label><?php echo $reg['rif'] ?></label>
			<label>Nombre / Razon Social: </label>
			<label><?php echo $reg['nombre_emp'] ?></label>
			<label>Telefono de la empresa: </label>
			<label><?php echo $reg['telefono'] ?></label>
			<label>Direccion de la empresa: </label>
			<label><?php echo $reg['direccion'] ?></label>
			<label>Observacion de la anulacion</label>
			<textarea name="observacion" cols="30" rows="5"></textarea>
			<br />
			<input type="hidden" name="presupuesto" value="<?php echo $reg['n_presupuesto'] ?>" />
			<input type="submit" value="Anular" />
		</form>
		<?php }
		else {
		?>
		<caption>Presupuesto inexistente</caption>
		<a href="/serbar/jjcordero/presupuesto">Volver</a>
		<?php
		}
		?>
	</body>
</html>