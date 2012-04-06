<!DOCTYPE html>
<html>
	<head>
		<title>Presupuesto</title>
	</head>
	<body>
		<?php
		$conexion=mysql_connect("localhost","root","") or
die ("error al conectar");
mysql_select_db("bdserbar",$conexion) or
die ("error en la base de datos");
$registro=mysql_query("select max(n_presupuesto) from presupuesto",$conexion)or
die ("error en select".mysql_error());
if($reg=mysql_fetch_array($registro)){
	$pre= $reg[0] + 1;
		?>
		<form method="post" action="guardar.php">
			N&deg; de Presupuesto:
			<input type="text" name="presupuesto" value="<?php echo $pre; } ?>"/>
			N&deg; de Filial:
			<input type="text" name="filial" />
			Codigo de la empresa:
			<input type="text" name="codigo"/>
			Nombre de la empresa: 
			<input type="text" name="nombre_emp"/>
			Correo de la empresa:
			<input type="email" name="mail" />
			Cedula operador:
			<input type="text" name="cedula" />
			Nombre operador:
			<input type="text" name="nombre" />
			Status del presupuesto: 
			<select name="status">
				<option value="evaluacion">Evaluacion</option>
				<option value="aprobada">Aprobado</option>
				<option value="rechazado">Rechazado</option>
				<option value="pendiente">Pendiente</option>
				<option value="pagado">Pagado</option>
			</select>
			Precio: 
			<input type="text" name="precio" />
			<input type="submit" value="Guardar" />
			<input type="reset" value="Cancelar" />
			<input type="button" value="Consultar" onclick="location.href='consultar.php'"/>
			<input type="button" value="Eliminar" onclick="location.href='eliminar.php'" />
			<input type="button" value="Modificar" onclick="location.href='modificar.php'" />
		</form>
	</body>
</html>