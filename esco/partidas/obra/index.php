<!DOCTYPE html>
<html>
	<head>
		<title>Registro de obra de partida</title>
	</head>
	<body>
		<form method="post" action="guardar.php">
			N&deg; de obra:
			<input type="text" name="n_obra" />
			Obra:
			<input type="text" name="obra" />
			ID partida:
			<input type="text" name="n_partida" />
			Partida:
			<input type="text" name="partida" />
			Viajes:
			<input type="text" name="viaje" />
			Cantidad:
			<input type="text" name="cantidad" />
			Precio unitario:
			<input type="text" name="precio" />
			<input type="submit" value="Guardar" />
			<input type="reset" value="Cancelar" />
			<input type="button" value="Consultar" onclick="location.href='consultar.php'"/>
			<input type="button" value="Eliminar" onclick="location.href='eliminar.php'" />
			<input type="button" value="Modificar" onclick="location.href='modificar.php'" />
		</form>
	</body>
</html>