<?php
$conexion=mysql_connect("localhost","root","") or
die("error al conectar");
mysql_select_db("bdserbar",$conexion) or
die("error en base de datos");
$registro=mysql_query("update escoresumen set factura='$_REQUEST[facturan]', fecha='$_REQUEST[fechan]', cedula='$_REQUEST[cedulan]', nombre='$_REQUEST[nombren]', origen='$_REQUEST[origenn]', destino='$_REQUEST[destinon]', producto='$_REQUEST[producton]', cantidad='$_REQUEST[cantidadn]', sector='$_REQUEST[sectorn]', coordinador='$_REQUEST[coordinadorn]', observacion='$_REQUEST[observacionn]' where nota='$_REQUEST[nota]'",$conexion) or
die("error en el select".mysql_error());
echo "datos modificados <a href='/serbar/esco/resumen'>volver</a>";
?>