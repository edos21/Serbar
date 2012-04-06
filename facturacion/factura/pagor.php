<?php
    $conexion=mysql_connect("localhost","root","") or
    die("error al conectar");
	mysql_select_db("bdserbar",$conexion) or 
	die("error en base de datos");
	$resto=$_REQUEST['total'] - $_REQUEST['pago'];
	$stat="pendiente";
	if ($resto < 1) {
		$stat="pagado";
	}
	$registro=mysql_query("update factura set precio='$resto', status='$stat' where n_factura='$_REQUEST[factura]'",$conexion) or
	die("error en el select".mysql_error());
	echo "factura pagada
		  falta por pagar: ".$resto." Bs.F <br /><a href='/serbar/facturacion/factura'>volver</a>";
?>