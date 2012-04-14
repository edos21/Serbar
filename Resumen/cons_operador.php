<?php
	include ("../conexion.php");
	//muestra un resumen de los datos de cada operador, filtrando por la cedula
	$registro=mysql_query("select * from resumen where cedula='$_REQUEST[cedula]'",$conexion) or
	die("error en select: ".mysql_error());
	$num=0;
	$tot=0;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Consulta por Operador - Ficha resumen</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/>
	</head>
	<body>
		<table summary='resumen por operador' border='1px'>
			<caption>Ficha resumen recepcion de servicio (operador)</caption>
			<thead>
				<tr>
					<th scope='col'>N&deg; de Servicio</th>
					<th scope='col'>Fecha</th>
					<th scope='col'>N&deg; nota de control serbar</th>
					<th scope='col'>N&deg; factura serbar</th>
					<th scope='col'>Op Serbar</th>
					<th scope='col'>Lugar de Origen</th>
					<th scope='col'>Destino</th>
					<th scope='col'>Producto</th>
					<th scope='col'>Cantidad</th>
					<th scope='col'>Sector</th>
					<th scope='col'>Coordinador</th>
					<th scope='col'>Observacion</th>
				</tr>
			</thead>
			<tbody>
<?php
while($reg=mysql_fetch_array($registro)){
$num++;
$tot=$tot+$reg['cantidad'];
?>
				<tr>
					<td><?php echo $num ?></td>
					<td><?php echo $reg['fecha']?></td>
					<td><?php echo $reg['nota']?></td>
					<td><?php echo $reg['factura']?></td>
					<td><?php echo $reg['nombre']?></td>
					<td><?php echo $reg['origen']?></td>
					<td><?php echo $reg['destino']?></td>
					<td><?php echo $reg['producto']?></td>
					<td><?php echo $reg['cantidad']?></td>
					<td><?php echo $reg['sector']?></td>
					<td><?php echo $reg['coordinador']?></td>
					<td><?php echo $reg['observacion']?></td>
				</tr>
<?php
}
?>
				<tr>
					<th colspan='8'>Total</th>
					<td><?php echo$tot ?></td>
				</tr>
			</tbody>
</table>
			<label>Coordinador: </label><br/>
			<label>Municipio: </label><br/>
			<br />
			<label>Nombre: </label><br />
			<label>CI: </label><br />
			<label>Telefono: </label><br />
			<br />
			<label>Firma: </label><br />
			<label>Fecha: </label><br /> <br />
			<label>Proveedor: </label><br/>
			<label>Nombre Asociacion: </label><br/>
			<label>RIF: </label><br />
			<label>Representante: </label><br />
			<label>CI: </label><br />
			<label>Telefono: </label><br />
			<br />
			<label>Firma: </label><br />
			<label>Fecha: </label>
	</body>
</html>