<?php
	$conexion=mysql_connect("localhost","root","");
	mysql_select_db("bdserbar",$conexion);
	$registro=mysql_query("select * from escojjfactura",$conexion) or
	die("error en select: ".mysql_error());
	echo "<table summary='factura empresa' border='1px'>
			<caption>Lista de facturas por empresa</caption>
			<thead>
				<tr>
					<th scope='col' rowspan='2'>N&deg; de factura</th>
					<th scope='col' rowspan='2'>Nombre de la empresa</th>
					<th scope='col' rowspan='2'>Correo</th>
					<th scope='col' colspan='3'>Mano de obra</th>
					<th scope='col' colspan='3'>Materiales</th>
					<th scope='col' rowspan='2'>Precio</th>
					<th scope='col' rowspan='2'>Gasto</th>
					<th scope='col' rowspan='2'>Utilidad</th>
					<th scope='col' rowspan='2'>Status</th>
				</tr>
				<tr>
					<th scope='col'>Nombre</th>
					<th scope='col'>Tipo</th>
					<th scope='col'>Costo</th>
					<th scope='col'>Materiales</th>
					<th scope='col'>Costo</th>
					<th scope='col'>N&deg; Orden</th>
				</tr>
			</thead>
			<tbody>";
			$totcostom=0;
			$totcostomat=0;
			$totprecio=0;
			$totgasto=0;
			$totutil=0;
			while($reg=mysql_fetch_array($registro)){
				$gasto=$reg['costo_m'] + $reg['costo_mat'];
				$utilidad=$reg['precio']- $gasto;
				$totcostom=$totcostom+$reg['costo_m'];
				$totcostomat=$totcostomat+$reg['costo_mat'];
				$totprecio=$totprecio+$reg['precio'];
				$totgasto=$totgasto+$gasto;
				$totutil=$totutil+$utilidad;
			echo"
				<tr>
					<td>".$reg['factura']."</td>
					<td>".$reg['nombre_emp']."</td>
					<td>".$reg['mail']."</td>
					<td>".$reg['nombre']."</td>
					<td>".$reg['tipo']."</td>
					<td>".$reg['costo_m']."</td>
					<td>".$reg['materiales']."</td>
					<td>".$reg['costo_mat']."</td>
					<td>".$reg['orden']."</td>
					<td>".$reg['precio']."</td>
					<td>".$gasto."</td>
					<td>".$utilidad."</td>
					<td>".$reg['status']."</td>
				</tr>";
		}
		echo"
				<tr>
					<td colspan='5'>Total</td>
					<td>".$totcostom."</td>
					<td></td>
					<td>".$totcostomat."</td>
					<td></td>
					<td>".$totprecio."</td>
					<td>".$totgasto."</td>
					<td>".$totutil."</td>
				</tr>
		";
		?>		
			</tbody>
</table>