<?php
	$conexion=mysql_connect("localhost","root","");
	mysql_select_db("bdserbar",$conexion);
	$registro=mysql_query("insert into escojjfactura(factura, codigo, nombre_emp, mail, nombre, tipo, costo_m, materiales, costo_mat, orden, precio, status)
	values('$_REQUEST[factura]','$_REQUEST[codigo]','$_REQUEST[nombre_emp]','$_REQUEST[mail]','$_REQUEST[nombre]','$_REQUEST[tipo]','$_REQUEST[costo_m]','$_REQUEST[materiales]','$_REQUEST[costo_mat]','$_REQUEST[orden]','$_REQUEST[precio]','$_REQUEST[status]')",$conexion)or 
	die ("error en select".mysql_error());;
	mysql_close($conexion);
	echo "Factura guardada<br />";
	echo "<a href='/serbar/esco/obras/facturacion'>volver</a>";
?>