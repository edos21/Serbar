<?php
$conexion=mysql_connect("localhost","root","") or
die ("error al conectar");
mysql_select_db("bdserbar",$conexion) or
die ("error en la tabla");
$registro=mysql_query("select * from escovaluacion where n_obra='$_REQUEST[n_obra]'and n_partida='$_REQUEST[n_partida]' and valuacion='$_REQUEST[valuacion]'",$conexion) or
die ("error en select: ".mysql_error());
if ($reg=mysql_fetch_array($registro)){
	mysql_query("delete from escovaluacion where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]' and valuacion='$_REQUEST[valuacion]'",$conexion) or
	die("error en delete: ".mysql_error());
	echo "borrado exitoso! <a href='/serbar/esco/partidas/valuacion'>volver</a>";
}
else {
	echo "valuacion inexistente, verifique <a href='/serbar/esco/partidas/valuacion'>volver</a>";
}
mysql_close($conexion);
 ?>