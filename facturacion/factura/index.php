<!DOCTYPE html>
<html>
	<head>
		<title>Facturacion</title>
	</head>
	<body>
		<form method="post" action="facturar.php">
			Facturar<br />
			Numero de presupuesto:
			<input type="text" name="presupuesto" />
			<input type="submit" value="Facturar" />
		</form>
		<form method="post" action="pagar.php">
			Pagar<br />
			Numero de factura:
			<input type="text" name="factura" />
			<input type="submit" value="Pagar" />
		</form>
			<input type="button" value="Eliminar" onclick="location.href='eliminar.php'"/>
			<input type="button" value="Consultar" onclick="location.href='consultar.php'"/>
	</body>
</html>