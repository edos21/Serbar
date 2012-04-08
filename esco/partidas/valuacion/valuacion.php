<!DOCTYPE html>
<html>
	<head>
		<title>Registro de valuacion de partida</title>
		<?php
		$conexion=mysql_connect("localhost","root","") or
		die ("error al conectar");
		mysql_select_db("bdserbar",$conexion) or
		die ("error en la base de datos");
		$registro=mysql_query("select * from escopartida where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion)or
		die ("error en select".mysql_error());
		if($reg=mysql_fetch_array($registro)){
		?>
	</head>
	<body>
		<form method="post" action="guardar.php">
			Obra: <caption><?php echo $reg['obra']?></caption><br />
			Partida: <caption><?php echo $reg['partida']?></caption> <br />
			Valuacion:
			<input type="text" name="valuacion" />
			Cantidad:
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