<?php
	$conexion=mysql_connect("localhost","root","") or
	die ("error al conectar");
	mysql_select_db("bdserbar",$conexion)or
	die ("error en la base de datos");
	$registro=mysql_query("insert into resumen(nota, factura, fecha, cedula, nombre, origen, destino, producto, cantidad, sector, coordinador, observacion)
	values('$_REQUEST[nota]','$_REQUEST[factura]','$_REQUEST[fecha]','$_REQUEST[cedula]','$_REQUEST[nombre]','$_REQUEST[origen]','$_REQUEST[destino]','$_REQUEST[producto]','$_REQUEST[cantidad]','$_REQUEST[sector]','$_REQUEST[coordinador]','$_REQUEST[observacion]')",$conexion)or
	die ("error en select ".mysql_error());
	echo "Datos guardados<br />";
	echo "<a href='/serbar/resumen'>volver</a>";
?>