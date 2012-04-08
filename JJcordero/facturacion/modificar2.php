<?php
$conexion=mysql_connect("localhost","root","") or
die ("error al conectar");
mysql_select_db("bdserbar",$conexion) or
die ("error en la base de datos");
$registro=mysql_query("select * from jjfactura where factura='$_REQUEST[factura]'",$conexion)or
die ("error en select".mysql_error());
if($reg=mysql_fetch_array($registro)){
?>
<form method="post" action="modificar3.php">
	ingrese datos nuevos:<br>
			Codigo de la empresa:
			<input type="text" name="codigo" value="<?php echo $reg['codigo'] ?>"/>
			Nombre de la empresa: 
			<input type="text" name="nombre_emp" value="<?php echo $reg['nombre_emp'] ?>"/> <br />	
			Correo:
			<input type="email" name="mail"/ value="<?php echo $reg['mail'] ?>"> <br />		
			Datos de Mano de obra:<br />
			Nombre: 
			<input type="text" name="nombre" value="<?php echo $reg['nombre'] ?>"/>
			Tipo:
			<input type="text" name="tipo" value="<?php echo $reg['tipo'] ?>"/>
			Costo:
			<input type="text" name="costo_m" value="<?php echo $reg['costo_m'] ?>"/><br />
			Materiales:
			<input type="text" name="materiales" value="<?php echo $reg['materiales'] ?>" />
			Costo:
			<input type="text" name="costo_mat" value="<?php echo $reg['costo_mat'] ?>"/>
			N&deg; orden de compra: 
			<input type="text" name="orden" value="<?php echo $reg['orden'] ?>"/>
			Precio: 
			<input type="text" name="precio" value="<?php echo $reg['precio'] ?>"/>
			Status de factura: 
			<select name="status">
				<option value="evaluacion">Evaluacion</option>
				<option value="aprobada">Aprobado</option>
				<option value="rechazado">Rechazado</option>
				<option value="pendiente">Pendiente</option>
				<option value="pagado">Pagado</option>
			</select>
<input type="hidden" name="factura" value="<?php echo $reg['factura'] ?>" />
<input type="submit" value="Modificar" />
</form>
<?php
}
?>