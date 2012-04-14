<?php 
	$conexion=mysql_connect("localhost","root","") or
	die ("error al conectar");
	mysql_select_db("bdserbar",$conexion)or
	die ("error en la base de datos");
?>