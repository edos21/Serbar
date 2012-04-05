<?php
	$conexion=mysql_connect("localhost","root","") or
	die ("error al conectar");
	mysql_select_db("bdserbar",$conexion)or
	die ("error en la base de datos");
	$registro=mysql_query("insert into solicitud(n_solicitud, fecha, cedula, nombre, c_operador, c_servicio, utilidad, viaje, cviaje, ldiurna, cldiurna, lnocturna, clnocturna, lldiurna, clldiurna, llnocturna, cllnocturna, hdiurna, chdiurna, hnocturna, chnocturna, bonon, cbonon, bonof, cbonof)
	values('$_REQUEST[solicitud]','$_REQUEST[fecha]','$_REQUEST[cedula]','$_REQUEST[nombre]','$_REQUEST[costo_oper]','$_REQUEST[costo_ser]','$_REQUEST[utilidad]','$_REQUEST[viaje]','$_REQUEST[cviaje]','$_REQUEST[ldiurna]','$_REQUEST[cldiurna]','$_REQUEST[lnocturna]','$_REQUEST[clnocturna]','$_REQUEST[lldiurna]','$_REQUEST[clldiurna]','$_REQUEST[llnocturna]','$_REQUEST[cllnocturna]','$_REQUEST[hdiurna]','$_REQUEST[chdiurna]','$_REQUEST[hnocturna]','$_REQUEST[chnocturna]','$_REQUEST[bonon]','$_REQUEST[cbonon]','$_REQUEST[bonof]','$_REQUEST[cbonof]')",$conexion)or
	die ("error en select ".mysql_error());
	echo "Datos guardados<br />";
	echo "<a href='/serbar/servicios'>volver</a>";
?>