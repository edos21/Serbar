<?php
	include ("../../conexion.php");
	$registro=mysql_query("select * from jjpresupuesto where rif='$_REQUEST[rif]'",$conexion) or
	die("error en select: ".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Consulta por empresa - Presupuesto JJCORDERO</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<table summary='presupuesto empresa' border='1px'>
			<caption>Lista de presupuestos por empresa</caption>
			<thead>
				<tr>
					<th scope='col'>N&deg; de Presupuesto</th>
					<th scope='col'>Ciudad</th>
					<th scope='col'>Fecha</th>
					<th scope='col'>Rif</th>
					<th scope='col'>Nombre de la empresa</th>
					<th scope='col'>Telefono</th>
					<th scope="col">N&deg; de orden</th>
					<th scope='col'>Nombre</th>
					<th scope='col'>Status</th>
				</tr>
			</thead>
			<?php
			while($reg=mysql_fetch_array($registro)){
			?>
			<tbody>
				<tr>
					<td><?php echo $reg['n_presupuesto']?></td>
					<td><?php echo $reg['ciudad']?></td>
					<td><?php echo $reg['fecha']?></td>
					<td><?php echo $reg['rif']?></td>
					<td><?php echo $reg['nombre_emp']?></td>
					<td><?php echo $reg['telefono']?></td>
					<td><?php echo $reg['orden']?></td>
					<td><?php echo $reg['nombre']?></td>
					<td><?php echo $reg['status']?></td>
				</tr>
		<?php
		}?>		
			</tbody>
		</table>
	</body>
</html>