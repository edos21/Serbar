<?php
$conexion=mysql_connect("localhost","root","") or
die ("error al conectar");
mysql_select_db("bdserbar",$conexion) or
die ("error en la base de datos");
$registro=mysql_query("select * from escosolicitud where n_solicitud='$_REQUEST[solicitud]'",$conexion)or
die ("error en select".mysql_error());
if($reg=mysql_fetch_array($registro)){
?>
<form method="post" action="modificar3.php">
	ingrese datos nuevos:<br>
	Fecha:
	<input type="text" name="fechan" value="<?php echo $reg['fecha'] ?>" />
	Cedula:
	<input type="text" name="cedulan" value="<?php echo $reg['cedula'] ?>" />
	Nombre:
	<input type="text" name="nombren" value="<?php echo $reg['nombre'] ?>" />
	Costo Operador:
	<input type="text" name="costo_opern" value="<?php echo $reg['c_operador'] ?>" />
	Costo Servicio:
	<input type="text" name="costo_sern" value="<?php echo $reg['c_servicio'] ?>" />
	Utilidad:
	<input type="text" name="utilidadn" value="<?php echo $reg['utilidad'] ?>" />
	<br />
	viaje:
	<input type="text" name="viajen" value="<?php echo $reg['viaje'] ?>" />
	costo:
	<input type="text" name="cviajen" value="<?php echo $reg['cviaje'] ?>" />
	<br />
	Carrerla local diurna:
	<input type="text" name="ldiurnan" value="<?php echo $reg['ldiurna'] ?>" />
	costo:
	<input type="text" name="cldiurnan" value="<?php echo $reg['cldiurna'] ?>" />
	<br />
	Carrera local nocturna:
	<input type="text" name="lnocturnan" value="<?php echo $reg['lnocturna'] ?>" />
	costo:
	<input type="text" name="clnocturnan" value="<?php echo $reg['clnocturna'] ?>"/>
	<br />
	Carrerla local larga diurna:
	<input type="text" name="lldiurnan" value="<?php echo $reg['lldiurna'] ?>"/>
	costo:
	<input type="text" name="clldiurnan" value="<?php echo $reg['clldiurna'] ?>"/>
	<br />
	Carrera local larga nocturna:
	<input type="text" name="llnocturnan" value="<?php echo $reg['llnocturna'] ?>"/>
	costo:
	<input type="text" name="cllnocturnan" value="<?php echo $reg['cllnocturna'] ?>"/>
	<br />
	Hora de espera diurna:
	<input type="text" name="hdiurnan" value="<?php echo $reg['hdiurna'] ?>"/>
	costo:
	<input type="text" name="chdiurnan" value="<?php echo $reg['chdiurna'] ?>"/>
	<br />
	Hora de espera nocturna:
	<input type="text" name="hnocturnan" value="<?php echo $reg['hnocturna'] ?>"/>
	costo:
	<input type="text" name="chnocturnan" value="<?php echo $reg['chnocturna'] ?>"/>
	<br />
	Bono nocturno lunes a viernes:
	<input type="text" name="bononn" value="<?php echo $reg['bonon'] ?>"/>
	costo:
	<input type="text" name="cbononn" value="<?php echo $reg['cbonon'] ?>"/>
	<br />
	Bono feriado / fin de semana:
	<input type="text" name="bonofn" value="<?php echo $reg['bonof'] ?>"/>
	costo:
	<input type="text" name="cbonofn" value="<?php echo $reg['cbonof'] ?>"/>
<br />
<input type="hidden" name="solicitud" value="<?php echo $reg['n_solicitud'] ?>" />
<input type="submit" value="Modificar" />
</form>
<?php
}
?>