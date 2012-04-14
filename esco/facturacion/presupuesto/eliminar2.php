<?php
include ("../../../conexion.php");
$registro=mysql_query("select * from escopresupuesto where n_presupuesto='$_REQUEST[presupuesto]'",$conexion) or
die ("error en select: ".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Eliminar - Presupuesto</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<?php
		if ($reg=mysql_fetch_array($registro)){
			mysql_query("delete from presupuesto where n_presupuesto='$_REQUEST[presupuesto]'",$conexion) or
			die("error en select: ".mysql_error());
			$registroservicio=mysql_query("select * from servicios where n_presupuesto='$_REQUEST[presupuesto]'",$conexion) or
			die ("error en select: ".mysql_error());
			if ($reg2=mysql_fetch_array($registroservicio)){
				mysql_query("delete from servicios where n_presupuesto='$_REQUEST[presupuesto]'",$conexion) or
				die("error en select: ".mysql_error());
			}
		mysql_close($conexion);
		?>
		<label>Borrado exitoso!</label>
		<a href='/serbar/esco/facturacion/presupuesto/'>Volver</a>
		<?php
		}
		else {
		?>
			<label>presupuesto inexistente, verifique</label>
			<a href='eliminar.php'>volver</a>
		<?php
		}
		?>
	</body>
</html>