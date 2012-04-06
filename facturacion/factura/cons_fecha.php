<?php
	$conexion=mysql_connect("localhost","root","");
	mysql_select_db("bdserbar",$conexion);
	$registro=mysql_query("select * from factura where fecha='$_REQUEST[fecha]'",$conexion) or
	die("error en select: ".mysql_error());
	echo "<table summary='factura fecha' border='1px'>
			<caption>Lista de facturas por fecha</caption>
			<thead>
				<tr>
					<th scope='col'>N&deg; de factura</th>
					<th scope='col'>Filial</th>
					<th scope='col'>Nombre de la empresa</th>
					<th scope='col'>Correo</th>
					<th scope='col'>Nombre del operador</th>
					<th scope='col'>Fecha</th>
					<th scope='col'>Status</th>
					<th scope='col'>Total</th>
				</tr>
			</thead>
			<tbody>";
			while($reg=mysql_fetch_array($registro)){
			echo"
				<tr>
					<td>".$reg['n_factura']."</td>
					<td>".$reg['filial']."</td>
					<td>".$reg['nombre_emp']."</td>
					<td>".$reg['mail']."</td>
					<td>".$reg['nombre']."</td>
					<td>".$reg['fecha']."</td>
					<td>".$reg['status']."</td>
					<td>".$reg['precio']."</td>
				</tr>";
		}?>		
			</tbody>
</table>