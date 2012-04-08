<?php
	$conexion=mysql_connect("localhost","root","");
	mysql_select_db("bdserbar",$conexion);
	$registro=mysql_query("select * from escopresupuesto where filial='$_REQUEST[filial]'",$conexion) or
	die("error en select: ".mysql_error());
	echo "<table summary='presupuesto general' border='1px'>
			<caption>Lista de presupuestos por filial</caption>
			<thead>
				<tr>
					<th scope='col'>N&deg; de Presupuesto</th>
					<th scope='col'>Filial</th>
					<th scope='col'>Codigo de la empresa</th>
					<th scope='col'>Nombre de la empresa</th>
					<th scope='col'>Correo</th>
					<th scope='col'>Nombre del operador</th>
					<th scope='col'>Status</th>
					<th scope='col'>Precios</th>
				</tr>
			</thead>
			<tbody>";
			while($reg=mysql_fetch_array($registro)){
			echo"
				<tr>
					<td>".$reg['n_presupuesto']."</td>
					<td>".$reg['filial']."</td>
					<td>".$reg['codigo']."</td>
					<td>".$reg['nombre_emp']."</td>
					<td>".$reg['mail']."</td>
					<td>".$reg['nombre']."</td>
					<td>".$reg['status']."</td>
					<td>".$reg['precio']."</td>
				</tr>";
		}?>		
			</tbody>
</table>