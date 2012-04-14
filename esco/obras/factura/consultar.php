<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Consultas - Factura</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/> 
	</head>
	<body>
		<form method="post" action="cons_factura.php">
			<label>Consultar factura </label><br />
			<label>Factura:</label>
			<input type="text" name="factura" />
			<input type="submit" value="Consultar" />
		</form>
		
		<form method="post" action="cons_anulado.php">
			<label>Consultar anuladas </label><br />
			<input type="submit" value="Consultar" />
		</form>
		
		<form method="post" action="cons_pendiente.php">
			<label>Consultar pendiente </label><br />
			<input type="submit" value="Consultar" />
		</form>

		<form method="post" action="cons_empresa.php">
			<label>Consultar por empresa </label><br />
			<label>Rif de empresa:</label>
			<input type="text" name="rif" />
			<input type="submit" value="Consultar" />
		</form>

		<form method="post" action="cons_fecha.php">
			<label>Consultar por fecha </label> <br />
			<label>Fecha: </label>
			<input type="text" name="fecha" />
			<input type="submit" value="Consultar" />
		</form>
	</body>
</html>