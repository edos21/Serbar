<?php
	$conexion=mysql_connect("localhost","root","");
	mysql_select_db("bdserbar",$conexion);
	$registro=mysql_query("insert into factura(n_factura,filial,codigo,nombre_emp,mail,cedula,nombre,status,precio,fecha,n_presupuesto)
	values('$_REQUEST[factura]','$_REQUEST[filial]','$_REQUEST[codigo]','$_REQUEST[nombre_emp]','$_REQUEST[mail]','$_REQUEST[cedula]','$_REQUEST[nombre]','$_REQUEST[status]','$_REQUEST[precio]','$_REQUEST[fecha]',$_REQUEST[presupuesto])",$conexion)or 
	die ("error en select".mysql_error());;
	mysql_close($conexion);
	echo "Factura guardada<br />";
	echo "<a href='/serbar/facturacion/factura'>volver</a>";
?>