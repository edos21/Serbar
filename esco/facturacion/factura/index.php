<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<title>Facturacion</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<!--formulario para convertir un presupuesto ya creado y que este
			sea tomado como una factura-->
		<form method="post" action="facturar.php">
			<label>Facturar</label><br />
			<label>Numero de presupuesto a facturar:</label>
			<input type="text" name="presupuesto" />
			<input type="submit" value="Facturar" />
		</form>
		<!--formulario para pagar facturas, es decir al momento de recibir un pago de un cliente
			en esta area se puede llevar el control de lo que ha pagado sea solo una parte
			o de contado-->
		<form method="post" action="pagar.php">
			<label>Pago recibido</label><br />
			<label>Numero de factura:</label>
			<input type="text" name="factura" />
			<input type="submit" value="Pagar" />
		</form>
			<input type="button" value="Anular" onclick="location.href='anular.php'"/>
			<input type="button" value="Eliminar" onclick="location.href='eliminar.php'"/>
			<input type="button" value="Consultar" onclick="location.href='consultar.php'"/>
	</body>
</html>