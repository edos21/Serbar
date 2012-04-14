<?php
//muestra los datos de la partida a la cual se le realizo la valuacion
//solo es necesario agregar el numero de valuacion y la cantidad de trabajo realizado
include ("../../../conexion.php");
$registro=mysql_query("select * from escopartida where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion)or
die ("error en select".mysql_error());
if($reg=mysql_fetch_array($registro)){
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Registro de valuacion de partida</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<form method="post" action="guardar.php">
			<label>Obra: <?php echo $reg['obra']?></label><br />
			<label>Partida: <?php echo $reg['partida']?></label><br />
			<label>Valuacion:</label>
			<input type="text" name="valuacion" />
			<label>Cantidad:</label>
			<input type="text" name="cantidad" />
			<input type="hidden" name="n_obra" value="<?php echo $reg['n_obra'] ?>" />
			<input type="hidden" name="n_partida" value="<?php echo  $reg['n_partida'] ?>" />
			<input type="submit" value="Guardar" />
			<input type="reset" value="Cancelar" />
		</form>
	<?php  } else {
		echo "Datos inexistentes";
	}?>
	</body>
</html>