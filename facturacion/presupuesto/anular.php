<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Anular - Presupuesto</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
		<!--proceso semejante a eliminar, pero no elimina fisicamente el registro
			al contrario este solo cambia su status a anulado y se le agrega una observacion
			para saber q ya no esta activo el presupuesto-->
	</head>
	<body>
		<form method="post" action="anular2.php">
			<label>Numero de presupuesto:</label>
			<input type="text" name="presupuesto" />
			<input type="submit" value="enviar" />
		</form>
	</body>
</html>