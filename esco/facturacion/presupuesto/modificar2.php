<?php
include ("../../../conexion.php");
$registro=mysql_query("select * from escopresupuesto where n_presupuesto='$_REQUEST[presupuesto]'",$conexion)or
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
		<form method="post" action="modificar3.php">
			<label>Ingrese datos nuevos </label><br>
			<label>Filial: </label>
			<input type="text" name="filialn" value="<?php echo $reg['filial'] ?>"/>
			<label>Fecha</label>
			<input type="text" name="fechan" value="<?php echo $reg['fecha']?> "/>
			<label>Rif &oacute; CI:</label>
			<input type="text" name="rifn" value="<?php echo $reg['rif'] ?>"/>
			<label>Nombre / Razon Social: </label>
			<input type="text" name="nombre_empn" value="<?php echo $reg['nombre_emp'] ?>"/>
			<label>Telefono de la empresa: </label>
			<input type="tel" name="telefonon" value="<?php echo $reg['telefono']?>"/>
			<label>Direccion de la empresa: </label>
			<textarea name="direccionn" cols="30" rows="5"><?php echo $reg['direccion']?></textarea>
			<label>Correo de la empresa: </label>
			<input type="email" name="mailn" value="<?php echo $reg['mail'] ?>"/>
			<label>Cedula operador: </label>
			<input type="text" name="cedulan" value="<?php echo $reg['cedula'] ?>" />
			<label>Nombre operador: </label>
			<input type="text" name="nombren" value="<?php echo $reg['nombre'] ?>"/>
			<label>Status del presupuesto: </label> 
			<select name="statusn">
				<option value="evaluacion">Evaluacion</option>
				<option value="aprobada">Aprobado</option>
				<option value="rechazado">Rechazado</option>
				<option value="pendiente">Pendiente</option>
				<option value="pagado">Pagado</option>
			</select>
			Impuesto: 
			<input type="text" name="impueston" value="<?php echo $reg['impuesto'] ?>" />
			<label>%</label>
			<br />
			<input type="hidden" name="presupuesto" value="<?php echo $reg['n_presupuesto'] ?>" />
			<input type="submit" value="Modificar" />
		</form>
		<?php
		} else{
			?>
			<label>Presupuesto no encontrado, verifique</label>
			<a href="modificar.php">volver</a>
		<?php
		}
		?>
	</body>
</html>