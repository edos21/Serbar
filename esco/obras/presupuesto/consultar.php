<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Consultas - Tabulador de Precios</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/> 
	</head>
	<body>
		<form method="post" action="cons_presupuesto.php">
			<label>Consultar Presupuesto </label><br />
			<label>N&deg; de Presupuesto:</label>
			<input type="text" name="presupuesto" />
			<input type="submit" value="Consultar" />
		</form>
		
		<form method="post" action="cons_filial.php">
			<label>Consultar por ciudad </label><br />
			<label>Ciudad: </label>
			<input type="text" name="ciudad" />
			<input type="submit" value="Consultar" />
		</form>

		<form method="post" action="cons_empresa.php">
			<label>Consultar por empresa </label><br />
			<label>Rif de empresa: </label>
			<input type="text" name="rif" />
			<input type="submit" value="Consultar" />
		</form>

		<form method="post" action="cons_general.php">
			<label>Consultar general</label> <br />
			<input type="submit" value="Consultar" />
		</form>
		
		<form method="post" action="cons_anulado.php">
			<label>Consultar Anulados </label><br />
			<input type="submit" value="Consultar" />
		</form>
	</body>
</html>