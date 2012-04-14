<?php
//consulta los datos de 1 obra especifica con todas sus valuaciones los viajes restantes
//y los viajes disponibles
	include ("../../../conexion.php");
	$registro=mysql_query("select * from escopartida where n_obra='$_REQUEST[n_obra]'",$conexion) or
	die("error en select: ".mysql_error());
	$registro4=mysql_query("select * from escopartida where n_obra='$_REQUEST[n_obra]'",$conexion) or
	die("error en select: ".mysql_error());
	$registro2=mysql_query("select distinct escovaluacion from valuacion where n_obra='$_REQUEST[n_obra]'",$conexion) or
	die("error en select: ".mysql_error());
	// inicializacion de acumuladores
	$totcantidad=0;
	$totprecio=0;
	$tottot=0;
	$totcej=0;
	$tottotej=0;
	$totdis=0;
	$tottotdis=0;
	$valcant=0;
	$valtot=0;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Consulta de obra</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
	<?php
	if($reg=mysql_fetch_array($registro)){
	?>
	<caption>Obra: <?php echo $reg['obra']?></caption>
	<table summary='partida por numero de orden' border='1px'>
			<caption>Cuadro de control de partidas</caption>
			<thead>
				<tr>
					<th scope='col' rowspan='2'>ID</th>
					<th scope='col' rowspan='2'>Partida</th>
					<th scope='col' rowspan='2'>Viajes</th>
					<th scope='col' rowspan='2'>Cantidad Original</th>
					<th scope='col' rowspan='2'>Precio Unitario</th>
					<th scope='col' rowspan='2'>Total</th>
					<th scope='col' colspan='3'>Total Ejecutado</th>
					<th scope='col' colspan='2'>Disponible</th>
				</tr>
				<tr>
					<th scope='col'>Cant</th>
					<th scope='col'>%</th>
					<th scope='col'>Total</th>	
					<th scope='col'>Cant</th>
					<th scope='col'>Total</th>
				</tr>
			</thead>
<?php
	while ($reg4=mysql_fetch_array($registro4)){
		$totcantidad=$totcantidad+$reg4['cantidad']; //acumulador para almacenar la cantidad total
		$totprecio=$totprecio+$reg4['precio']; //acumulador para almacenar el precio total unitario
		$tottot=$tottot+($reg4['cantidad']*$reg4['precio']); //acumulador para almacenar el precio total
		$totcej=$totcej+$reg4['cejecutada']; //acumulador para almacenar la cantidad ejecutada
		$tottotej=$tottotej+($reg4['cejecutada']*$reg4['precio']); //acumulador para almacenar el precio de la cantidad ejecutada
		$totdis=$totdis+$reg4['cdisponible']; //acumulador para almacenar la cantidad disponible
		$tottotdis=$tottotdis+($reg4['cdisponible']*$reg4['precio']); //acumulador para almacenar el precio de la cantidad disponible
?>
			<tbody>
				<tr>
					<td><?php echo $reg4['n_partida']?></td>
					<td><?php echo $reg4['partida']?></td>
					<td><?php echo $reg4['viaje']?></td>
					<td><?php echo $reg4['cantidad']?></td>
					<td><?php echo $reg4['precio']?></td>
					<td><?php echo $reg4['cantidad']*$reg4['precio']//precion total por cantidad?></td>
					<td><?php echo $reg4['cejecutada']?></td>
					<td><?php echo ($reg4['cejecutada']* 100)/$reg4['cantidad']//porcentaje ejecutado?></td>
					<td><?php echo $reg4['cejecutada']*$reg4['precio']//precio de cantidad ejecutada?></td>
					<td><?php echo $reg4['cdisponible']?></td>
					<td><?php echo $reg4['cdisponible']*$reg4['precio']//precio de cantidad disponible?></td>
				</tr>
	<?php	
	}	
	?>
				<tr>
					<th colspan='3'>Total</th>
					<td><?php echo $totcantidad ?></td>
					<td><?php echo $totprecio ?></td>
					<td><?php echo $tottot ?></td>
					<td><?php echo $totcej ?></td>
					<td></td>
					<td><?php echo $tottotej ?></td>
					<td><?php echo $totdis ?></td>
					<td><?php echo $tottotdis ?></td>
				</tr>
			</tbody>
		</table>
	<?php
	while ($reg2=mysql_fetch_array($registro2)){
	?>
		<table summary='valuacion' border='1px'>
			<thead>
				<tr>
					<th scope='col' colspan='3'>Valuacion <?php echo $reg2['valuacion']?></th>
				</tr>
				<tr>
					<th scope='col'>ID</th>
					<th scope='col'>Cantidad</th>	
					<th scope='col'>Total</th>
				</tr>
			</thead>
	<?php
	$registro5=mysql_query("select * from escovaluacion where n_obra='$_REQUEST[n_obra]' and valuacion='$reg2[valuacion]'",$conexion) or
	die("error en select: ".mysql_error());
	while ($reg5=mysql_fetch_array($registro5)){
		$valcant=$valcant+$reg5['cantidad']; //acumulador para la cantidad total de la valuacion
		$valtot=$valtot+$reg5['total']; //acumulador para el total del precio de la valuacion
	?>
			<tbody>
				<tr>
					<td><?php echo $reg5['n_partida']?></td>
					<td><?php echo $reg5['cantidad']?></td>
					<td><?php echo $reg5['total']?></td>
				</tr>
		<?php
		}
		?>				
				<tr>
					<th>Total</th>
					<td><?php echo $valcant?></td>
					<td><?php echo $valtot?></td>
				</tr>
				</tbody>
			</table>
	<?php
	}
	?>
	<div><!--Datos de Serbar-->
	<caption>POR LA EMPRESA</caption><br />
	<caption>ADMINISTRADOR DE CONTRATO</caption><br />
	<caption>Nombre:</caption><br />
	<caption>C.I:</caption><br />
	<caption>Fecha:</caption><br />
	<caption>Firma:</caption><br />
			<br />
	<caption>GERENTE</caption><br />
	<caption>Nombre:</caption><br />
	<caption>C.I:</caption><br />
	<caption>Fecha:</caption><br />
	<caption>Firma:</caption><br /><br />
	</div>
	
	<!--ubicar al lado derecho este segundo div-->	
	<div><!--Empresa a la que se le presta servicio-->
	<caption>SUPERVISOR</caption><br />
	<caption>Nombre:</caption><br />
	<caption>C.I:</caption><br />
	<caption>Fecha:</caption><br />
	<caption>Firma:</caption><br /><br />
	<caption>APROBACION</caption><br />
	<caption>Nombre:</caption><br />
	<caption>C.I:</caption><br />
	<caption>Fecha:</caption><br />
	<caption>Firma:</caption><br /><br />
	<caption>CERTIFICACION</caption><br />
	<caption>Nombre:</caption><br />
	<caption>C.I:</caption><br />
	<caption>Fecha:</caption><br />
	<caption>Firma:</caption><br /><br />
	<caption>ADMINISTRACION DE CONTRATOS</caption><br />
	<caption>Nombre:</caption><br />
	<caption>C.I:</caption><br />
	<caption>Fecha:</caption><br />
	<caption>Firma:</caption><br /><br />
	</div>
<?php
}else {
?>
	<caption>Registro Inexistente</caption>
	<a href="consultar.php">Volver</a>	
<?php
}
?>
	</body>
</html>