<?php
	$conexion=mysql_connect("localhost","root","") or
	die ("error al conectar");
	mysql_select_db("bdserbar",$conexion)or
	die ("error en la base de datos");
	$registro=mysql_query("insert into escopartida(n_obra, obra, n_partida, partida, viaje, cantidad, precio, cejecutada, cdisponible)
	values('$_REQUEST[n_obra]','$_REQUEST[obra]','$_REQUEST[n_partida]','$_REQUEST[partida]','$_REQUEST[viaje]','$_REQUEST[cantidad]','$_REQUEST[precio]','0','$_REQUEST[cantidad]')",$conexion)or
	die ("error en select ".mysql_error());
	echo "Datos guardados<br />";
	echo "<a href='/serbar/esco/partidas/obra'>volver</a>";
?>