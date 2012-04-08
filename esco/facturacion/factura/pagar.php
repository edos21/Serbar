<?php
$conexion=mysql_connect("localhost","root","") or
die ("error al conectar");
mysql_select_db("bdserbar",$conexion) or
die ("error en la base de datos");
$registro=mysql_query("select * from escofactura where n_factura='$_REQUEST[factura]'",$conexion)or
die ("error en select".mysql_error());
if($reg=mysql_fetch_array($registro)){
?>
<form method="post" action="pagor.php">
			Factura: <caption><?php echo $reg['n_factura'] ?></caption><br />
			Empresa: <caption><?php echo $reg['nombre_emp'] ?></caption><br />
			Fecha: <caption><?php echo $reg['fecha'] ?></caption> <br />
			Pago:
			<input type="text" name="pago" value="<?php echo $reg['precio'] ?>" />
			<input type="hidden" name="factura" value="<?php echo $reg['n_factura'] ?>" />
			<input type="hidden" name="total" value="<?php echo $reg['precio'] ?>" />
<input type="submit" value="Pagar" />
<input type="reset" value="Cancelar" />
</form>
<?php
}
?>