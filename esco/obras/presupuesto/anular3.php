<?php
    include ("../../../conexion.php");
	$registro=mysql_query("update escojjpresupuesto set status='anulado', observacion='$_REQUEST[observacion]' where n_presupuesto='$_REQUEST[presupuesto]'",$conexion) or
	die("error en el select".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Anular - Presupuesto</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css" /> 
	</head>
	<body>
		<label>Presupuesto Anulado</label><br />
		<a href="/serbar/esco/obras/presupuesto">Volver</a>
	</body>
</html>