<?php
//pagina q muestra los datos actuales con respecto a una solicitud y permite modificarlos
//se cambia el nombre de los campos agregandoles una n para evitar confusion con los datos previos
include ("../../conexion.php");
$registro=mysql_query("select * from escosolicitud where n_solicitud='$_REQUEST[solicitud]'",$conexion)or
die ("error en select".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Datos a modificar - Tabulador de Precios</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<?php
		if($reg=mysql_fetch_array($registro)){
		?>
		<form method="post" action="modificar3.php">
			<label>Datos nuevos: </label><br>
			<label>Fecha: </label>
			<input type="text" name="fechan" value="<?php echo $reg['fecha'] ?>" />
			<label>Cedula: </label>
			<input type="text" name="cedulan" value="<?php echo $reg['cedula'] ?>" />
			<label>Nombre: </label>
			<input type="text" name="nombren" value="<?php echo $reg['nombre'] ?>" />
			<label>Costo Operador: </label>
			<input type="text" name="costo_opern" value="<?php echo $reg['c_operador'] ?>" />
			<label>Costo Servicio: </label>
			<input type="text" name="costo_sern" value="<?php echo $reg['c_servicio'] ?>" />
			<label>Utilidad: </label>
			<input type="text" name="utilidadn" value="<?php echo $reg['utilidad'] ?>" />
			<br />
			<label>Viaje: </label>
			<input type="text" name="viajen" value="<?php echo $reg['viaje'] ?>" />
			<label>Costo: </label>
			<input type="text" name="cviajen" value="<?php echo $reg['cviaje'] ?>" />
			<br />
			<label>Carrera local diurna: </label>
			<input type="text" name="ldiurnan" value="<?php echo $reg['ldiurna'] ?>" />
			<label>Costo: </label>
			<input type="text" name="cldiurnan" value="<?php echo $reg['cldiurna'] ?>" />
			<br />
			<label>Carrera local nocturna: </label>
			<input type="text" name="lnocturnan" value="<?php echo $reg['lnocturna'] ?>" />
			<label>Costo: </label>
			<input type="text" name="clnocturnan" value="<?php echo $reg['clnocturna'] ?>"/>
			<br />
			<label>Carrera local larga diurna: </label>
			<input type="text" name="lldiurnan" value="<?php echo $reg['lldiurna'] ?>"/>
			<label>Costo: </label>
			<input type="text" name="clldiurnan" value="<?php echo $reg['clldiurna'] ?>"/>
			<br />
			<label>Carrera local larga nocturna: </label>
			<input type="text" name="llnocturnan" value="<?php echo $reg['llnocturna'] ?>"/>
			<label>Costo: </label>
			<input type="text" name="cllnocturnan" value="<?php echo $reg['cllnocturna'] ?>"/>
			<br />
			<label>Hora de espera diurna: </label>
			<input type="text" name="hdiurnan" value="<?php echo $reg['hdiurna'] ?>"/>
			<label>Costo: </label>
			<input type="text" name="chdiurnan" value="<?php echo $reg['chdiurna'] ?>"/>
			<br />
			<label>Hora de espera nocturna: </label>
			<input type="text" name="hnocturnan" value="<?php echo $reg['hnocturna'] ?>"/>
			<label>Costo: </label>
			<input type="text" name="chnocturnan" value="<?php echo $reg['chnocturna'] ?>"/>
			<br />
			<label>Bono nocturno lunes a viernes: </label>
			<input type="text" name="bononn" value="<?php echo $reg['bonon'] ?>"/>
			<label>Costo: </label>
			<input type="text" name="cbononn" value="<?php echo $reg['cbonon'] ?>"/>
			<br />
			<label>Bono feriado / fin de semana: </label>
			<input type="text" name="bonofn" value="<?php echo $reg['bonof'] ?>"/>
			<label>Costo: </label>
			<input type="text" name="cbonofn" value="<?php echo $reg['cbonof'] ?>"/>
			<br />
			<input type="hidden" name="solicitud" value="<?php echo $reg['n_solicitud'] ?>" />
			<input type="submit" value="Modificar" />
		</form>
		<?php
		}
		?>
	</body>
</html>