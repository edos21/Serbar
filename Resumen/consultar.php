<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Consultas - Ficha Resumen</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
	<!--formulario para consultar la ficha de resumen 
	dependiendo de la cedula del operador-->
	<form method="post" action="cons_operador.php">
		<label>Consultar por operador</label> <br />
		<label>Cedula: </label>
		<input type="text" name="cedula" />
		<input type="submit" value="Consultar" />
	</form>
	<!--formulario para consultar la ficha de resumen 
	dependiendo de la fecha que se realizo-->
	<form method="post" action="cons_fecha.php">
		<label>Consultar por fecha</label> <br />
		<label>Fecha: </label>
		<input type="text" name="fecha" />
		<input type="submit" value="Consultar" />
	</form>
	<!--formulario para consultar la ficha de resumen 
	en su totalidad-->
	<form method="post" action="cons_general.php">
		<label>Consultar general </label> <br />
		<input type="submit" value="Consultar" />
	</form>
	</body>
</html>