<?php
    $conexion=mysql_connect("localhost","root","") or
    die("error al conectar");
	mysql_select_db("bdserbar",$conexion) or 
	die("error en base de datos");
	$registro=mysql_query("update solicitud set fecha='$_REQUEST[fechan]', cedula='$_REQUEST[cedulan]', nombre='$_REQUEST[nombren]', c_operador='$_REQUEST[costo_opern]', c_servicio='$_REQUEST[costo_sern]', utilidad='$_REQUEST[utilidadn]', viaje='$_REQUEST[viajen]', cviaje='$_REQUEST[cviajen]', ldiurna='$_REQUEST[ldiurnan]', cldiurna='$_REQUEST[cldiurnan]', lnocturna='$_REQUEST[lnocturnan]', clnocturna='$_REQUEST[clnocturnan]', lldiurna='$_REQUEST[lldiurnan]', clldiurna='$_REQUEST[clldiurnan]', llnocturna='$_REQUEST[llnocturnan]', cllnocturna='$_REQUEST[cllnocturnan]', hdiurna='$_REQUEST[hdiurnan]', chdiurna='$_REQUEST[chdiurnan]', hnocturna='$_REQUEST[hnocturnan]', chnocturna='$_REQUEST[chnocturnan]', bonon='$_REQUEST[bononn]', cbonon='$_REQUEST[cbononn]', bonof='$_REQUEST[bonofn]', cbonof='$_REQUEST[cbonofn]' where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
	die("error en el select".mysql_error());
	echo "datos modificados <a href='/serbar/servicios'>volver</a>";
?>