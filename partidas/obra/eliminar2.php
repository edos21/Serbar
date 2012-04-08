<?php
$conexion=mysql_connect("localhost","root","") or
die ("error al conectar");
mysql_select_db("bdserbar",$conexion) or
die ("error en la tabla");
$registro=mysql_query("select * from partida where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion) or
die ("error en select: ".mysql_error());
if ($reg=mysql_fetch_array($registro)){
	mysql_query("delete from partida where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion) or
	die("error en select: ".mysql_error());
	$registro2=mysql_query("select * from valuacion where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion) or
	die ("error en select: ".mysql_error());
	while ($reg2=mysql_fetch_array($registro2)){
		mysql_query("delete from valuacion where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion) or
		die("error en select: ".mysql_error());
	}
	echo "borrado exitoso! <a href='/serbar/partidas/obra'>volver</a>";
}
else {
	echo "tarifa inexistente, verifique <a href='eliminar.php'>volver</a>";
}
mysql_close($conexion);
 ?>