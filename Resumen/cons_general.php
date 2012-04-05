<?php
	$conexion=mysql_connect("localhost","root","");
	mysql_select_db("bdserbar",$conexion);
	$registro=mysql_query("select * from resumen",$conexion) or
	die("error en select: ".mysql_error());
	echo "<table summary='resumen general' border='1px'>
			<caption>Ficha resumen recepcion de servicio (General)</caption>
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
			<tbody>";
			$num=0;
			$tot=0;
			while($reg=mysql_fetch_array($registro)){
				$num++;
				$tot=$tot+$reg['cantidad'];
			echo"
				<tr>
					<td>".$num."</td>
					<td>".$reg['fecha']."</td>
					<td>".$reg['nota']."</td>
					<td>".$reg['factura']."</td>
					<td>".$reg['nombre']."</td>
					<td>".$reg['origen']."</td>
					<td>".$reg['destino']."</td>
					<td>".$reg['producto']."</td>
					<td>".$reg['cantidad']."</td>
					<td>".$reg['sector']."</td>
					<td>".$reg['coordinador']."</td>
					<td>".$reg['observacion']."</td>
				</tr>";
	}
			echo"<tr>
					<td colspan='8'>total</td>
					<td>".$tot."</td>
			</tr>
			</tbody>
</table>";
			echo "Coordinador:<br/>
			Municipio: <br/>
			<br />
			Nombre: <br />
			CI: <br />
			Telefono: <br />
			<br />
			Firma: <br />
			Fecha: <br /> <br />";
			echo "Proveedor:<br/>
			Nombre Asociacion: <br/>
			RIF: <br />
			Representante: <br />
			CI: <br />
			Telefono: <br />
			<br />
			Firma: <br />
			Fecha: ";
?>