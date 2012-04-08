<!DOCTYPE html>
<html>
	<head>
		<title>Ficha Resumen</title>
	</head>
	<body>
		<form method="post" action="guardar.php">
			Numero de nota: 
			<input type="text" name="nota" />
			Numero de Factura:
			<input type="text" name="factura"/>
			Fecha: 
			<input type="text" name="fecha"/>
			Cedula operador:
			<input type="text" name="cedula" />
			Nombre operador:
			<input type="text" name="nombre" />
			Origen: 
			<input type="text" name="origen" />
			Destino: 
			<input type="text" name="destino" />
			Producto: 
			<input type="text" name="producto" />
			Cantidad: 
			<input type="text" name="cantidad" />
			Sector:
			<input type="text" name="sector" />
			Coordinador:
			<input type="text" name="coordinador" />
			Observacion:
			<textarea name="observacion" cols="30" rows="5"></textarea>
			<input type="submit" value="Guardar" />
			<input type="reset" value="Cancelar" />
			<input type="button" value="Consultar" onclick="location.href='consultar.php'"/>
			<input type="button" value="Eliminar" onclick="location.href='eliminar.php'" />
			<input type="button" value="Modificar" onclick="location.href='modificar.php'" />
		</form>
	</body>
</html>