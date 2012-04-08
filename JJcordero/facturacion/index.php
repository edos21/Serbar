<!DOCTYPE html>
<html>
	<head>
		<title>Facturacion JJCORDERO</title>
	</head>
	<body>
		<form method="post" action="guardar.php">
			N&deg; de factura:
			<input type="text" name="factura" />
			Codigo de la empresa:
			<input type="text" name="codigo"/>
			Nombre de la empresa: 
			<input type="text" name="nombre_emp"/> <br />	
			Correo:
			<input type="email" name="mail"/> <br />		
			Datos de Mano de obra:<br />
			Nombre: 
			<input type="text" name="nombre" />
			Tipo:
			<input type="text" name="tipo" />
			Costo:
			<input type="text" name="costo_m" /><br />
			Materiales:
			<input type="text" name="materiales" />
			Costo:
			<input type="text" name="costo_mat" />
			N&deg; orden de compra: 
			<input type="text" name="orden" />
			Precio: 
			<input type="text" name="precio" />
			Status de factura: 
			<select name="status">
				<option value="evaluacion">Evaluacion</option>
				<option value="aprobada">Aprobado</option>
				<option value="rechazado">Rechazado</option>
				<option value="pendiente">Pendiente</option>
				<option value="pagado">Pagado</option>
			</select>
			<input type="submit" value="Guardar" />
			<input type="reset" value="Cancelar" />
			<input type="button" value="Consultar" onclick="location.href='consultar.php'"/>
			<input type="button" value="Eliminar" onclick="location.href='eliminar.php'" />
			<input type="button" value="Modificar" onclick="location.href='modificar.php'" />
		</form>
	</body>
</html>