<?php
	include ("../../../conexion.php");
	$registro=mysql_query("select * from escojjfactura where fecha='$_REQUEST[fecha]'",$conexion) or
	die("error en select: ".mysql_error());
	$total=0
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Consulta por fecha - Factura</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<table summary='factura empresa' border='1px'>
			<caption>Lista de facturas por fecha</caption>
			<thead>
				<tr>
					<th scope='col'>N&deg; de factura</th>
					<th scope='col'>Ciudad</th>
					<th scope='col'>Fecha</th>
					<th scope='col'>Rif</th>
					<th scope='col'>Nombre de la empresa</th>
					<th scope='col'>Telefono</th>
					<th scope='col'>Nombre</th>
					<th scope='col'>Status</th>
					<th scope="col">Total</th>
				</tr>
			</thead>
			<?php
			while($reg=mysql_fetch_array($registro)){
				$total=$total+$reg['total']
			?>
			<tbody>
				<tr>
					<td><?php echo $reg['n_factura']?></td>
					<td><?php echo $reg['ciudad']?></td>
					<td><?php echo $reg['fecha']?></td>
					<td><?php echo $reg['rif']?></td>
					<td><?php echo $reg['nombre_emp']?></td>
					<td><?php echo $reg['telefono']?></td>
					<td><?php echo $reg['nombre']?></td>
					<td><?php echo $reg['status']?></td>
					<td><?php echo $reg['total']?></td>
				</tr>
		<?php
		}?>		
				<tr>
					<th colspan="8">Total</th>
					<td><?php echo $total ?> </td>
				</tr>
			</tbody>
		</table>
	</body>
</html>