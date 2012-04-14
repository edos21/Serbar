<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Consultas - Tabulador de Precios</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/> 
	</head>
	<body>
		<!--formulario para consultar el tabulador de precios 
			dependiendo de la cedula del operador-->
		<form method="post" action="cons_operador.php">
			<label>Consultar por operador</label> <br />
			<label>Cedula: </label>
			<input type="text" name="cedula" />
			<input type="submit" value="Consultar" />
		</form>
		<!--formulario para consultar el tabulador de precios 
			dependiendo de la fecha en que se realizo el viaje-->
		<form method="post" action="cons_fecha.php">
			<label>Consultar por fecha</label> <br />
			<label>Fecha: </label>
			<input type="text" name="fecha" />
			<input type="submit" value="Consultar" />
		</form>
		<!--formulario para consultar el tabulador de precios 
			dependiendo de el numero de la solicitud en el tabulador-->
		<form method="post" action="cons_solicitud.php">
			<label>Consultar por solicitud</label> <br />
			<label>Numero de solicitud: </label>
			<input type="text" name="solicitud"/>
			<input type="submit" value="Consultar" />
		</form>
	</body>
</html>