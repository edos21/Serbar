<?php
// se modifican los datos previamente cambiados, para diferenciarlos de los datos original se coloco el nombre + la letra n esto quedaria en el caso de fecha - fechan
    include ("../conexion.php");
	$registro=mysql_query("update solicitud set fecha='$_REQUEST[fechan]', cedula='$_REQUEST[cedulan]', nombre='$_REQUEST[nombren]', c_operador='$_REQUEST[costo_opern]', c_servicio='$_REQUEST[costo_sern]', utilidad='$_REQUEST[utilidadn]', viaje='$_REQUEST[viajen]', cviaje='$_REQUEST[cviajen]', ldiurna='$_REQUEST[ldiurnan]', cldiurna='$_REQUEST[cldiurnan]', lnocturna='$_REQUEST[lnocturnan]', clnocturna='$_REQUEST[clnocturnan]', lldiurna='$_REQUEST[lldiurnan]', clldiurna='$_REQUEST[clldiurnan]', llnocturna='$_REQUEST[llnocturnan]', cllnocturna='$_REQUEST[cllnocturnan]', hdiurna='$_REQUEST[hdiurnan]', chdiurna='$_REQUEST[chdiurnan]', hnocturna='$_REQUEST[hnocturnan]', chnocturna='$_REQUEST[chnocturnan]', bonon='$_REQUEST[bononn]', cbonon='$_REQUEST[cbononn]', bonof='$_REQUEST[bonofn]', cbonof='$_REQUEST[cbonofn]' where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
	die("error en el select".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Modificar - Tabulador de Precios</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css" /> 
	</head>
	<body>
		<label>Datos Modificados</label><br />
		<a href="/serbar/servicios">Volver</a>
	</body>
</html>