<?php
$conexion=mysql_connect("localhost","root","") or
die ("error al conectar");
mysql_select_db("bdserbar",$conexion) or
die ("error en la base de datos");
$registro=mysql_query("select * from escopresupuesto where n_presupuesto='$_REQUEST[presupuesto]'",$conexion)or
die ("error en select".mysql_error());
if($reg=mysql_fetch_array($registro)){
?>
<form method="post" action="guardar.php">
			N&deg; de Factura:
			<input type="text" name="factura" />
			Fecha: 
			<input type="text" name="fecha" />
			N&deg; de presupuesto:
			<input type="text" name="presupuesto" value="<?php echo $reg['n_presupuesto'] ?>" />
			N&deg; de Filial:
			<input type="text" name="filial" value="<?php echo $reg['filial'] ?>"/>
			Codigo de la empresa:
			<input type="text" name="codigo" value="<?php echo $reg['codigo'] ?>"/>
			Nombre de la empresa: 
			<input type="text" name="nombre_emp" value="<?php echo $reg['nombre_emp'] ?>"/>
			Correo de la empresa:
			<input type="email" name="mail" value="<?php echo $reg['mail'] ?>"/>
			Cedula operador:
			<input type="text" name="cedula" value="<?php echo $reg['cedula'] ?>" />
			Nombre operador:
			<input type="text" name="nombre" value="<?php echo $reg['nombre'] ?>"/>
			Status de la factura: 
			<select name="status">
				<option value="pendiente">Pendiente</option>
				<option value="pagado">Pagada</option>
			</select>
			Precio: 
			<input type="text" name="precio" value="<?php echo $reg['precio'] ?>" />
<input type="submit" value="Guardar" />
<input type="reset" value="Cancelar" />
</form>
<?php
}
?>