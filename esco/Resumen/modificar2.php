<?php
$conexion=mysql_connect("localhost","root","") or
die ("error al conectar");
mysql_select_db("bdserbar",$conexion) or
die ("error en la base de datos");
$registro=mysql_query("select * from escoresumen where nota='$_REQUEST[nota]'",$conexion)or
die ("error en select".mysql_error());
if($reg=mysql_fetch_array($registro)){
?>
<form method="post" action="modificar3.php">
	ingrese datos nuevos:<br>
	Numero de Factura:
			<input type="text" name="facturan" value="<?php echo $reg['factura'] ?>"/>
			Fecha: 
			<input type="text" name="fechan" value="<?php echo $reg['fecha'] ?>"/>
			Cedula operador:
			<input type="text" name="cedulan" value="<?php echo $reg['cedula'] ?>"/>
			Nombre operador:
			<input type="text" name="nombren" value="<?php echo $reg['nombre'] ?>"/>
			Origen: 
			<input type="text" name="origenn" value="<?php echo $reg['origen'] ?>"/>
			Destino: 
			<input type="text" name="destinon" value="<?php echo $reg['destino'] ?>"/>
			Producto: 
			<input type="text" name="producton" value="<?php echo $reg['producto'] ?>"/>
			Cantidad: 
			<input type="text" name="cantidadn" value="<?php echo $reg['cantidad'] ?>"/>
			Sector:
			<input type="text" name="sectorn" value="<?php echo $reg['sector'] ?>"/>
			Coordinador:
			<input type="text" name="coordinadorn" value="<?php echo $reg['coordinador'] ?>"/>
			Observacion:
			<textarea name="observacionn" cols="30" rows="5" ><?php echo $reg['observacion']?></textarea>
<br />
<input type="hidden" name="nota" value="<?php echo $reg['nota'] ?>" />
<input type="submit" value="Modificar" />
</form>
<?php
}
?>