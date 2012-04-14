<?php
//guarda a la base de datos los datos de la solicitud
	include ("../../conexion.php");
	$registro=mysql_query("insert into escosolicitud(n_solicitud, fecha, cedula, nombre, c_operador, c_servicio, utilidad, viaje, cviaje, ldiurna, cldiurna, lnocturna, clnocturna, lldiurna, clldiurna, llnocturna, cllnocturna, hdiurna, chdiurna, hnocturna, chnocturna, bonon, cbonon, bonof, cbonof)
	values('$_REQUEST[solicitud]','$_REQUEST[fecha]','$_REQUEST[cedula]','$_REQUEST[nombre]','$_REQUEST[costo_oper]','$_REQUEST[costo_ser]','$_REQUEST[utilidad]','$_REQUEST[viaje]','$_REQUEST[cviaje]','$_REQUEST[ldiurna]','$_REQUEST[cldiurna]','$_REQUEST[lnocturna]','$_REQUEST[clnocturna]','$_REQUEST[lldiurna]','$_REQUEST[clldiurna]','$_REQUEST[llnocturna]','$_REQUEST[cllnocturna]','$_REQUEST[hdiurna]','$_REQUEST[chdiurna]','$_REQUEST[hnocturna]','$_REQUEST[chnocturna]','$_REQUEST[bonon]','$_REQUEST[cbonon]','$_REQUEST[bonof]','$_REQUEST[cbonof]')",$conexion)or
	die ("error en select ".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Guardar - Tabulador de Precios</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/> 
	</head>
	<body>
		<label>Datos Guardados</label><br />
		<a href="/serbar/esco/servicios">Volver</a>
	</body>
</html>