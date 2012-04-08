<?php
    $conexion=mysql_connect("localhost","root","") or
    die("error al conectar");
	mysql_select_db("bdserbar",$conexion) or 
	die("error en base de datos");
	$registro=mysql_query("update escopresupuesto set filial='$_REQUEST[filialn]', codigo='$_REQUEST[codigon]', nombre_emp='$_REQUEST[nombre_empn]', mail='$_REQUEST[mailn]', cedula='$_REQUEST[cedulan]', nombre='$_REQUEST[nombren]', status='$_REQUEST[statusn]', precio='$_REQUEST[precion]' where n_presupuesto='$_REQUEST[presupuesto]'",$conexion) or
	die("error en el select".mysql_error());
	echo "datos modificados <a href='/serbar/esco/facturacion/presupuesto'>volver</a>";
?>