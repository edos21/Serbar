<?php
$conexion=mysql_connect("localhost","root","") or
die ("error al conectar");
mysql_select_db("bdserbar",$conexion) or
die ("error en la tabla");
$registro=mysql_query("select * from jjfactura where factura='$_REQUEST[factura]'",$conexion) or
die ("error en select: ".mysql_error());
if ($reg=mysql_fetch_array($registro)){
	mysql_query("delete from jjfactura where factura='$_REQUEST[factura]'",$conexion) or
	die("error en select: ".mysql_error());
	echo "borrado exitoso! <a href='/serbar/jjcordero/facturacion'>volver</a>";
}
else {
	echo "tarifa inexistente, verifique <a href='eliminar.php'>volver</a>";
}
mysql_close($conexion);
 ?>