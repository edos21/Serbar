<?php
include ("../../conexion.php");
$registro=mysql_query("select * from partida where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion)or
die ("error en select".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Datos a modificar - Obra de partidas</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css" 
	</head>
	<body>
		<?php
		if($reg=mysql_fetch_array($registro)){
		?>
		<form method="post" action="modificar3.php">
			<label>Ingrese datos nuevos: </label><br>
			<label>Obra: </label>
			<input type="text" name="obran" value="<?php echo $reg['obra'] ?>"/>
			<label>Partida: </label>
			<input type="text" name="partidan" value="<?php echo $reg['partida'] ?>"/>
			<label>Viajes: </label>
			<input type="text" name="viajen" value="<?php echo $reg['viaje'] ?>"/>
			<label>Cantidad: </label>
			<input type="text" name="cantidadn" value="<?php echo $reg['cantidad'] ?>"/>
			<label>Precio unitario: </label>
			<input type="text" name="precion" value="<?php echo $reg['precio'] ?>"/>
			<input type="hidden" name="n_obra" value="<?php echo $reg['n_obra'] ?>" />
			<input type="hidden" name="n_partida" value="<?php echo $reg['n_partida'] ?>" />
			<input type="submit" value="Guardar" />
		</form>
		<?php
		}
		?>
	</body>
</html>