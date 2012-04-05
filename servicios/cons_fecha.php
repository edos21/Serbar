<?php
	$conexion=mysql_connect("localhost","root","");
	mysql_select_db("bdserbar",$conexion);
	$registro=mysql_query("select * from solicitud where fecha='$_REQUEST[fecha]'",$conexion) or
	die("error en select: ".mysql_error());
	if ($re=mysql_fetch_array($registro)){
	echo "<table summary='consulta de servicio por fecha' border='1px'>
			<caption>Fecha: ".$re['fecha']."</caption>
			<thead>
				<tr>
					<th scope='col'>Solicitud</th>
					<th scope='col'>Operador</th>
					<th scope='col'>Costo Operador</th>
					<th scope='col'>Costo Servicio</th>
					<th scope='col'>Utilidad</th>
					<th scope='col'>Viaje</th>
					<th scope='col'>Costo</th>
					<th scope='col'>Local Diurna</th>
					<th scope='col'>Costo</th>
					<th scope='col'>Locarl Nocturna</th>
					<th scope='col'>Costo</th>
					<th scope='col'>Larga Local Diurna</th>
					<th scope='col'>Costo</th>
					<th scope='col'>Larga Local Nocturna</th>
					<th scope='col'>Costo</th>
					<th scope='col'>Hora de espera Diurna</th>
					<th scope='col'>Costo</th>
					<th scope='col'>Hora de espera Nocturna</th>
					<th scope='col'>Costo</th>
					<th scope='col'>Bono Nocturno</th>
					<th scope='col'>Costo</th>
					<th scope='col'>Bono Feriado</th>
					<th scope='col'>Costo</th>
				</tr>
			</thead>
			<tbody>";}
			$registro2=mysql_query("select * from solicitud where fecha='$_REQUEST[fecha]'",$conexion) or
			die("error en select: ".mysql_error());
			while($reg=mysql_fetch_array($registro2)){
			echo"
				<tr>
					<td>".$reg['n_solicitud']."</td>
					<td>".$reg['nombre']."</td>
					<td>".$reg['c_operador']."</td>
					<td>".$reg['c_servicio']."</td>
					<td>".$reg['utilidad']."</td>
					<td>".$reg['viaje']."</td>
					<td>".$reg['cviaje']."</td>
					<td>".$reg['ldiurna']."</td>
					<td>".$reg['cldiurna']."</td>
					<td>".$reg['lnocturna']."</td>
					<td>".$reg['clnocturna']."</td>
					<td>".$reg['lldiurna']."</td>
					<td>".$reg['clldiurna']."</td>
					<td>".$reg['llnocturna']."</td>
					<td>".$reg['cllnocturna']."</td>
					<td>".$reg['hdiurna']."</td>
					<td>".$reg['chdiurna']."</td>
					<td>".$reg['hnocturna']."</td>
					<td>".$reg['chnocturna']."</td>
					<td>".$reg['bonon']."</td>
					<td>".$reg['cbonon']."</td>
					<td>".$reg['bonof']."</td>
					<td>".$reg['cbonof']."</td>
				</tr>";
	}
?>
</tbody>
</table>