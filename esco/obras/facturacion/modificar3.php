<?php
    $conexion=mysql_connect("localhost","root","") or
    die("error al conectar");
	mysql_select_db("bdserbar",$conexion) or 
	die("error en base de datos");
	$registro=mysql_query("update escojjfactura set codigo='$_REQUEST[codigo]', nombre_emp='$_REQUEST[nombre_emp]', mail='$_REQUEST[mail]', nombre='$_REQUEST[nombre]', tipo='$_REQUEST[tipo]', costo_m='$_REQUEST[costo_m]', materiales='$_REQUEST[materiales]', costo_mat='$_REQUEST[costo_mat]', orden='$_REQUEST[orden]', precio='$_REQUEST[precio]', status='$_REQUEST[status]' where factura='$_REQUEST[factura]'",$conexion) or
	die("error en el select".mysql_error());
	echo "datos modificados <a href='/serbar/esco/obras/facturacion'>volver</a>";
?>