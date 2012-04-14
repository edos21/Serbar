<?php
//elimina los datos de 1 obra con todas sus partidas y sus valuaciones
include ("../../../conexion.php");
$registro=mysql_query("select * from escopartida where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion) or
die ("error en select: ".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Eliminar - Obra de partidas</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
	<?php
	if ($reg=mysql_fetch_array($registro)){
	mysql_query("delete from escopartida where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion) or
	die("error en select: ".mysql_error());
	$registro2=mysql_query("select * from escovaluacion where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion) or
	die ("error en select: ".mysql_error());
	while ($reg2=mysql_fetch_array($registro2)){
		mysql_query("delete from escovaluacion where n_obra='$_REQUEST[n_obra]' and n_partida='$_REQUEST[n_partida]'",$conexion) or
		die("error en select: ".mysql_error());
	}
	?>
	<label>Borrado exitoso!</label>
	<a href='/serbar/esco/partidas/obra'>Volver</a>
<?php
}
else {
?>
	<label>Obra inexistente, verifique</label>
	<a href='eliminar.php'>volver</a>
<?php
}
mysql_close($conexion);
?>
	</body>
</html>