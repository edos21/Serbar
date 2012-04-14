<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Ficha Resumen</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/> 
	</head>
	<body>
		<form method="post" action="guardar.php">
			<label>Numero de nota: </label>
			<input type="text" name="nota" />
			<label>Numero de Factura: </label>
			<input type="text" name="factura"/>
			<label>Fecha: </label>
			<input type="text" name="fecha"/>
			<label>Cedula operador: </label>
			<input type="text" name="cedula" />
			<label>Nombre operador: </label>
			<input type="text" name="nombre" />
			<label>Origen: </label>
			<input type="text" name="origen" />
			<label>Destino: </label>
			<input type="text" name="destino" />
			<label>Producto: </label>
			<input type="text" name="producto" />
			<label>Cantidad: </label>
			<input type="text" name="cantidad" />
			<label>Sector: </label>
			<input type="text" name="sector" />
			<label>Coordinador: </label>
			<input type="text" name="coordinador" />
			<label>Observacion: </label>
			<textarea name="observacion" cols="30" rows="5"></textarea>
			<input type="submit" value="Guardar" />
			<input type="reset" value="Cancelar" />
			<input type="button" value="Consultar" onclick="location.href='consultar.php'"/>
			<input type="button" value="Eliminar" onclick="location.href='eliminar.php'" />
			<input type="button" value="Modificar" onclick="location.href='modificar.php'" />
		</form>
	</body>
</html>