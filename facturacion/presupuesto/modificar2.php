<?php
$conexion=mysql_connect("localhost","root","") or
die ("error al conectar");
mysql_select_db("bdserbar",$conexion) or
die ("error en la base de datos");
$registro=mysql_query("select * from presupuesto where n_presupuesto='$_REQUEST[presupuesto]'",$conexion)or
die ("error en select".mysql_error());
if($reg=mysql_fetch_array($registro)){
?>
<form method="post" action="modificar3.php">
	ingrese datos nuevos:<br>
			N&deg; de Filial:
			<input type="text" name="filialn" value="<?php echo $reg['filial'] ?>"/>
			Codigo de la empresa:
			<input type="text" name="codigon" value="<?php echo $reg['codigo'] ?>"/>
			Nombre de la empresa: 
			<input type="text" name="nombre_empn" value="<?php echo $reg['nombre_emp'] ?>"/>
			Correo de la empresa:
			<input type="email" name="mailn" value="<?php echo $reg['mail'] ?>"/>
			Cedula operador:
			<input type="text" name="cedulan" value="<?php echo $reg['cedula'] ?>" />
			Nombre operador:
			<input type="text" name="nombren" value="<?php echo $reg['nombre'] ?>"/>
			Status del presupuesto: 
			<select name="statusn">
				<option value="evaluacion">Evaluacion</option>
				<option value="aprobada">Aprobado</option>
				<option value="rechazado">Rechazado</option>
				<option value="pendiente">Pendiente</option>
				<option value="pagado">Pagado</option>
			</select>
			Precio: 
			<input type="text" name="precion" value="<?php echo $reg['precio'] ?>" />
<br />
<input type="hidden" name="presupuesto" value="<?php echo $reg['n_presupuesto'] ?>" />
<input type="submit" value="Modificar" />
</form>
<?php
}
?>