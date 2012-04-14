<?php
//consulta que muestra 1 servicio completo q se haya realizado, basandose en la hoja de detalles de servicios, en esta ademas de los datos
//aparecen los distintos viajes almacenados en la tabla sol_viaje(solicitud viaj) y sol_otro (solicitud otro)
	include ("../conexion.php");
	$registro=mysql_query("select * from solicitud where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
	die("error en select: ".mysql_error());
	$registro2=mysql_query("select * from sol_viaje where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
	die("error en select: ".mysql_error());
	$n=0;
	$registro3=mysql_query("select * from solicitud where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
	die("error en select: ".mysql_error());
	$registro4=mysql_query("select * from sol_otro where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
	die("error en select: ".mysql_error());
	$f=0;
	?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Tabulador de Precios</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
	<?php
	if ($re=mysql_fetch_array($registro)){
	?>
		<label>Solicitud numero: <?php echo $re['n_solicitud'] ?> </label> <br />
		<table summary='consulta de servicio por solicitud' border='1px'>
			<thead>
				<tr>
					<th scope='col' width='300px'>Origen</th>
					<th scope='col' width='300px'>Destino</th>
					<th scope='col' rowspan='2' width='100px'>Bs.F</th>
				</tr>
				<tr>
					<th scope='col'>Lugar</th>
					<th scope='col'>Lugar</th>
				</tr>
			</thead>
	<?php
	while($reg=mysql_fetch_array($registro2)){
	$n=$reg['precio']+$n;
	?>
			<tbody>
				<tr>
					<td><?php echo $reg['origen']?></td>
					<td><?php echo $reg['destino']?></td>
					<td><?php echo $reg['precio']?></td>
				</tr>
	<?php
	}
	?>
				<tr>
					<th colspan='2'>Total</th>
					<td><?php echo $total=$n ?></td> <br />
				</tr>
			</tbody>
			</table> <br />
			<label>recepcion de Servicios (Favor Conformar el servicio recibido)</label><br />
			<label>Firma del usuario: ____________________ Fecha: <?php echo $re['fecha'] ?></label><br />
			<p>Observacion: _________________________________________________<br />
			____________________________________________________________</p><br />
			<label>Operador: <?php echo $re['nombre'] ?></label> <br />
			<table summary='consulta de servicios extra' border='1px'>
			<thead>
				<tr>
					<th scope='col' width='300px'>Tipo</th>
					<th scope='col' width='300px'>Descripcion</th>
					<th scope='col' width='100px'>Costo</th>
				</tr>
			</thead>
			<tbody>
	<?php
	while($reg3=mysql_fetch_array($registro3)){
	?>		
				<tr>
					<th>Viaje</th>
					<td><?php echo $reg3['viaje']?></td>
					<td><?php echo $reg3['cviaje']?></td>
				</tr>
				<tr>
					<th>Carrera Local Diurna</th>
					<td><?php echo $reg3['ldiurna']?></td>
					<td><?php echo $reg3['cldiurna']?></td>
				</tr>
				<tr>
					<th>Carrera Local Nocturna</th>
					<td><?php echo $reg3['lnocturna']?></td>
					<td><?php echo $reg3['clnocturna']?></td>
				</tr>
				<tr>
					<th>Carrera Local Larga Diurna</th>
					<td><?php echo $reg3['lldiurna']?></td>
					<td><?php echo $reg3['clldiurna']?></td>
				</tr>
				<tr>
					<th>Carrera Local Larga Nocturna</th>
					<td><?php echo $reg3['llnocturna']?></td>
					<td><?php echo $reg3['cllnocturna']?></td>
				</tr>
				<tr>
					<th>Hora de espera Diurna</th>
					<td><?php echo $reg3['hdiurna']?></td>
					<td><?php echo $reg3['chdiurna']?></td>
				</tr>
				<tr>
					<th>Hora de espera Nocturna</th>
					<td><?php echo $reg3['hnocturna']?></td>
					<td><?php echo $reg3['chnocturna']?></td>
				</tr>
				<tr>
					<th>Bono Nocturno Lunes a Viernes</th>
					<td><?php echo $reg3['bonon']?></td>
					<td><?php echo $reg3['cbonon']?></td>
				</tr>
				<tr>
					<th>Bono Feriado / Fin de Semana</th>
					<td><?php echo $reg3['bonof']?></td>
					<td><?php echo $reg3['cbonof']?></td>
				</tr>
				<?php
				$tot_ser= $reg3['cviaje']+$reg3['cldiurna']+$reg3['clnocturna']+$reg3['clldiurna']+$reg3['cllnocturna']+$reg3['chdiurna']+$reg3['chnocturna']+$reg3['cbonon']+$reg3['cbonof'];
				?>
				<tr>
					<th colspan='2'>Total</th>
					<td><?php echo $tot_ser ?></td>
				</tr>
			</tbody>
			</table>
	<?php
	}
	?>
			<table summary='consulta de servicios extra otros' border='1px'>
			<thead>
				<tr>
					<th scope='col' width='300px'>Otros</th>
					<th scope='col' width='300px'>Descripcion</th>
					<th scope='col' width='100px'>Costo</th>
				</tr>
			</thead>
			<tbody>
	<?php
		while($reg4=mysql_fetch_array($registro4)){
		$f=$reg4['precio']+$f;
	?>
				<tr>
					<td></td>
					<td><?php echo $reg4['otro']?></td>
					<td><?php echo $reg4['precio']?></td>
				</tr>
	<?php 
		}
	?>
				<tr>
					<th colspan='2'>Total</th>
					<td><?php echo $total1=$f ?></td> <br />
				</tr>
			</tbody>
			</table>
	<?php 
	} else {
	?>
		<label>Registro Inexistente</label>
		<a href="consultar.php">Volver</a>	
	<?php
	}
	?>
	</body>
</html>