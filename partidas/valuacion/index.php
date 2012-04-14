<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Registro de valuacion de partida</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<!--Formulario para registrar una valuacion dentro de una obra-->
		<form method="post" action="valuacion.php">
			<label>Registrar valuacion: </label><br />
			<label>N&deg; de obra:</label>
			<input type="text" name="n_obra" />
			<label>ID de partida: </label>
			<input type="text" name="n_partida" />
			<input type="submit" value="enviar" />
		</form>
		<!--formulario para eliminar la valuacion-->
		<form method="post" action="eliminar.php">
			<label>Eliminar valuacion: </label><br />
			<label>N&deg; de obra: </label>
			<input type="text" name="n_obra" />
			<label>ID de partida: </label>
			<input type="text" name="n_partida" />
			<label>Valuacion: </label>
			<input type="text" name="valuacion"/>
			<input type="submit" value="eliminar" />
		</form>
	</body>
</html>
