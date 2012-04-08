<?php
    $conexion=mysql_connect("localhost","root","") or
    die("error al conectar");
	mysql_select_db("bdserbar",$conexion) or 
	die("error en base de datos");
	$registro=mysql_query("update escopartida set obra='$_REQUEST[obran]', partida='$_REQUEST[partidan]', viaje='$_REQUEST[viajen]', cantidad='$_REQUEST[cantidadn]', precio='$_REQUEST[precion]' where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion) or
	die("error en el select".mysql_error());
	echo "datos modificados <a href='/serbar/esco/partidas/obra'>volver</a>";
?>