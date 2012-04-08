<?php
	$conexion=mysql_connect("localhost","root","") or
	die ("error al conectar");
	mysql_select_db("bdserbar",$conexion)or
	die ("error en la base de datos");
	$registro=mysql_query("select * from escopartida where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion) or
	die("error en select: ".mysql_error());
	if($reg=mysql_fetch_array($registro)){
		$total=$reg['precio']*$_REQUEST['cantidad'];
		$ejecutada=$reg['cejecutada']+$_REQUEST['cantidad'];
		$disponible=$reg['cdisponible']-$_REQUEST['cantidad'];
	$registro3=mysql_query("update escopartida set cejecutada='$ejecutada', cdisponible='$disponible' where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion) or
	die("error en el select".mysql_error());
	}
	$registro2=mysql_query("insert into escovaluacion(n_obra, n_partida, valuacion, cantidad, total)
	values('$_REQUEST[n_obra]','$_REQUEST[n_partida]','$_REQUEST[valuacion]','$_REQUEST[cantidad]','$total')",$conexion)or
	die ("error en select ".mysql_error());
	echo "Datos guardados<br />";
	echo "<a href='/serbar/esco/partidas/valuacion'>volver</a>";
?>