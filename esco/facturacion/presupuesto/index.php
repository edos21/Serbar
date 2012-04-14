<?php
//pantalla para crear presupuesto a diferencia de las demas aparece un query en donde
//busca el maximo valor en n_presupuesto y le suma 1 para que se incremente el numero de presupuesto
//de forma automatica
include ("../../../conexion.php");
$registro=mysql_query("select max(n_presupuesto) from escopresupuesto",$conexion)or
die ("error en select".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Presupuesto</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<?php
		if($reg=mysql_fetch_array($registro)){
		$pre= $reg[0] + 1;
		?>
		<form method="post" action="guardar.php">
			<label>N&deg; de Presupuesto: </label>
			<input type="text" name="presupuesto" value="<?php echo $pre; } ?>"/>
			<label>Filial: </label>
			<input type="text" name="filial" />
			<label>Fecha: </label>
			<input type="text" name="fecha" />
			<label>Rif &oacute; CI:</label>
			<input type="text" name="rif"/>
			<label>Nombre / Razon Social: </label>
			<input type="text" name="nombre_emp"/>
			<label>Telefono de la empresa: </label>
			<input type="tel" name="telefono" />
			<label>Direccion de la empresa: </label>
			<textarea name="direccion" cols="30" rows="5"></textarea>
			<label>Correo de la empresa: </label>
			<input type="email" name="mail" />
			<label>Cedula operador: </label>
			<input type="text" name="cedula" />
			<label>Nombre operador: </label>
			<input type="text" name="nombre" />
			<label>Status del presupuesto: </label>
			<select name="status">
				<option value="evaluacion">Evaluacion</option>
				<option value="aprobada">Aprobado</option>
				<option value="pendiente">Pendiente</option>
				<option value="pagado">Pagado</option>
			</select>
			<div> <!--esta parte va con ajax, son los productos dentro de la factura
				se guardan en la tabla servicios y los campos son (presupuesto, cantidad, descripcion, precio)-->
			<label>Servicios:</label><br />
			<label>Cantidad</label>
			<input type="text" name="cantidad" />
			<label>Descripci&oacute;n</label>
			<input type="text" name="descripcion" />
			<label>Unitario:</label> 
			<input type="text" name="precio" />
			<input type="button" value="Guardar" />
			</div>
			<label>Impuesto:</label>
			<input type="text" name="impuesto" /><label>%</label>
			<input type="submit" value="Guardar" />
			<input type="reset" value="Cancelar" />
			<input type="button" value="Consultar" onclick="location.href='consultar.php'"/>
			<input type="button" value="Anular" onclick="location.href='anular.php'"/>
			<input type="button" value="Eliminar" onclick="location.href='eliminar.php'" />
			<input type="button" value="Modificar" onclick="location.href='modificar.php'" />
		</form>
	</body>
</html>