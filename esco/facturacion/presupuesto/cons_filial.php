<?php
//consulta los presupuestos filtrando por la filial
	include ("../../../conexion.php");
	$registro=mysql_query("select * from escopresupuesto where filial='$_REQUEST[filial]'",$conexion) or
	die("error en select: ".mysql_error());
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Consulta Filial - Presupuesto</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
	<table summary='presupuesto filial' border='1px'>
			<caption>Lista de presupuestos por filial</caption>
			<thead>
				<tr>
					<th scope='col'>N&deg; de Presupuesto</th>
					<th scope='col'>Filial</th>
					<th scope='col'>Fecha</th>
					<th scope='col'>Rif</th>
					<th scope='col'>Nombre de la empresa</th>
					<th scope='col'>Telefono</th>
					<th scope='col'>Nombre del operador</th>
					<th scope='col'>Status</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($reg=mysql_fetch_array($registro)){
			?>
				<tr>
					<td><?php echo $reg['n_presupuesto']?></td>
					<td><?php echo $reg['filial']?></td>
					<td><?php echo $reg['fecha']?></td>
					<td><?php echo $reg['rif']?></td>
					<td><?php echo $reg['nombre_emp']?></td>
					<td><?php echo $reg['telefono']?></td>
					<td><?php echo $reg['nombre']?></td>
					<td><?php echo $reg['status']?></td>
				</tr>
		<?php
		}?>		
			</tbody>
		</table>
	</body>
</html>