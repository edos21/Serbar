<?php
$conexion=mysql_connect("localhost","root","") or
die ("error al conectar");
mysql_select_db("bdserbar",$conexion) or
die ("error en la tabla");
$registro=mysql_query("select * from escosolicitud where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
die ("error en select: ".mysql_error());
if ($reg=mysql_fetch_array($registro)){
	mysql_query("delete from escosolicitud where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
	die("error en select: ".mysql_error());
	echo "borrado exitoso! <a href='/serbar/esco/servicios/'>volver</a>";
}
else {
	echo "tarifa inexistente, verifique <a href='eliminar.php'>volver</a>";
}
$registrootro=mysql_query("select * from escosol_otro where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
die ("error en select: ".mysql_error());
if ($reg2=mysql_fetch_array($registrootro)){
	mysql_query("delete from escosol_otro where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
	die("error en select: ".mysql_error());
}
$registroviaje=mysql_query("select * from escosol_viaje where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
die ("error en select: ".mysql_error());
if ($reg3=mysql_fetch_array($registroviaje)){
	mysql_query("delete from escosol_viaje where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
	die("error en select: ".mysql_error());
}
mysql_close($conexion);
 ?>