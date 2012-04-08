<?php
$conexion=mysql_connect("localhost","root","") or
die ("error al conectar");
mysql_select_db("bdserbar",$conexion) or
die ("error en la base de datos");
$registro=mysql_query("select * from partida where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion)or
die ("error en select".mysql_error());
if($reg=mysql_fetch_array($registro)){
?>
<form method="post" action="modificar3.php">
	ingrese datos nuevos:<br>
	Obra:
	<input type="text" name="obran" value="<?php echo $reg['obra'] ?>"/>
	Partida:
	<input type="text" name="partidan" value="<?php echo $reg['partida'] ?>"/>
	Viajes:
	<input type="text" name="viajen" value="<?php echo $reg['viaje'] ?>"/>
	Cantidad:
	<input type="text" name="cantidadn" value="<?php echo $reg['cantidad'] ?>"/>
	Precio unitario:
	<input type="text" name="precion" value="<?php echo $reg['precio'] ?>"/>
	<input type="hidden" name="n_obra" value="<?php echo $reg['n_obra'] ?>" />
	<input type="hidden" name="n_partida" value="<?php echo $reg['n_partida'] ?>" />
	<input type="submit" value="Guardar" />
<?php
}
?>