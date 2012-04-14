<?php
//consulta que ordena los servicios y sus precios tomando como filtro la fecha en que se elaboro
	include ("../../conexion.php");
	$registro=mysql_query("select * from escosolicitud where fecha='$_REQUEST[fecha]'",$conexion) or
	die("error en select: ".mysql_error());
	$registro2=mysql_query("select * from escosolicitud where fecha='$_REQUEST[fecha]'",$conexion) or
	die("error en select: ".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Consulta por fecha - Tabulador de Precios</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
<?php
	if ($re=mysql_fetch_array($registro)){
?>
	<table summary='consulta de servicio por fecha' border='1px'>
			<label>Fecha: <?php echo $re['fecha']?></label>
			<thead>
				<tr>
					<th scope="col">Solicitud</th>
					<th scope="col">Operador</th>
					<th scope="col">Costo Operador</th>
					<th scope="col">Costo Servicio</th>
					<th scope="col">Utilidad</th>
					<th scope="col">Viaje</th>
					<th scope="col">Costo</th>
					<th scope="col">Local Diurna</th>
					<th scope="col">Costo</th>
					<th scope="col">Locarl Nocturna</th>
					<th scope="col">Costo</th>
					<th scope="col">Larga Local Diurna</th>
					<th scope="col">Costo</th>
					<th scope="col">Larga Local Nocturna</th>
					<th scope="col">Costo</th>
					<th scope="col">Hora de espera Diurna</th>
					<th scope="col">Costo</th>
					<th scope="col">Hora de espera Nocturna</th>
					<th scope="col">Costo</th>
					<th scope="col">Bono Nocturno</th>
					<th scope="col">Costo</th>
					<th scope="col">Bono Feriado</th>
					<th scope="col">Costo</th>
				</tr>
			</thead>			
<?php
while($reg=mysql_fetch_array($registro2)){
?>			
			<tbody>
				<tr>
					<td><?php echo $reg['n_solicitud']?></td>
					<td><?php echo $reg['nombre']?></td>
					<td><?php echo $reg['c_operador']?></td>
					<td><?php echo $reg['c_servicio']?></td>
					<td><?php echo $reg['utilidad']?></td>
					<td><?php echo $reg['viaje']?></td>
					<td><?php echo $reg['cviaje']?></td>
					<td><?php echo $reg['ldiurna']?></td>
					<td><?php echo $reg['cldiurna']?></td>
					<td><?php echo $reg['lnocturna']?></td>
					<td><?php echo $reg['clnocturna']?></td>
					<td><?php echo $reg['lldiurna']?></td>
					<td><?php echo $reg['clldiurna']?></td>
					<td><?php echo $reg['llnocturna']?></td>
					<td><?php echo $reg['cllnocturna']?></td>
					<td><?php echo $reg['hdiurna']?></td>
					<td><?php echo $reg['chdiurna']?></td>
					<td><?php echo $reg['hnocturna']?></td>
					<td><?php echo $reg['chnocturna']?></td>
					<td><?php echo $reg['bonon']?></td>
					<td><?php echo $reg['cbonon']?></td>
					<td><?php echo $reg['bonof']?></td>
					<td><?php echo $reg['cbonof']?></td>
				</tr>
<?php
}
?>
			</tbody>
			</table>
<?php
}else {
?>
	<label>Registro Inexistente</label>
		<a href="consultar.php">Volver</a>	
<?php
}
?>
	</body>
</html>