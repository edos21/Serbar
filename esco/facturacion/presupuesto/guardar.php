<?php
	$conexion=mysql_connect("localhost","root","");
	mysql_select_db("bdserbar",$conexion);
	$registro=mysql_query("insert into escopresupuesto(n_presupuesto,filial,codigo,nombre_emp,mail,cedula,nombre,status,precio)
	values('$_REQUEST[presupuesto]','$_REQUEST[filial]','$_REQUEST[codigo]','$_REQUEST[nombre_emp]','$_REQUEST[mail]','$_REQUEST[cedula]','$_REQUEST[nombre]','$_REQUEST[status]',$_REQUEST[precio])",$conexion);
	mysql_close($conexion);
	echo "presupuesto guardado<br />";
	echo "<a href='/serbar/esco/facturacion/presupuesto'>volver</a>";
?>