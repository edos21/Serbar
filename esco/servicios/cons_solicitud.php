<?php
	$conexion=mysql_connect("localhost","root","");
	mysql_select_db("bdserbar",$conexion);
	$registro=mysql_query("select * from escosolicitud where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
	die("error en select: ".mysql_error());
	if ($re=mysql_fetch_array($registro)){
	echo "Solicitud numero: ".$re['n_solicitud']." <br />
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
			<tbody>";}
			$registro2=mysql_query("select * from escosol_viaje where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
			die("error en select: ".mysql_error());
			$n=0;
			while($reg=mysql_fetch_array($registro2)){
				$n=$reg['precio']+$n;
			echo"
				<tr>
					<td>".$reg['origen']."</td>
					<td>".$reg['destino']."</td>
					<td>".$reg['precio']."</td>
				</tr>";
	}
			echo "
				<tr>
					<td colspan='2'>Total</td>
					<td>".$total=$n."</td> <br />
			</tbody>
			</table> <br />";
			echo "recepcion de Servicios (Favor Conformar el servicio recibido)<br />
			Firma del usuario: ____________________ Fecha: ".$re['fecha']."<br />
			Observacion: _________________________________________________<br />
			____________________________________________________________<br />
			Operador: ".$re['nombre']." <br />";
			echo "<table summary='consulta de servicios extra' border='1px'>
			<thead>
				<tr>
					<th scope='col' width='300px'>Tipo</th>
					<th scope='col' width='300px'>Descripcion</th>
					<th scope='col' width='100px'>Costo</th>
				</tr>
			</thead>
			<tbody>";
			$registro3=mysql_query("select * from escosolicitud where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
			die("error en select: ".mysql_error());
			while($reg3=mysql_fetch_array($registro3)){
			echo"
				<tr>
					<td>Viaje</td>
					<td>".$reg3['viaje']."</td>
					<td>".$reg3['cviaje']."</td>
				</tr>
				<tr>
					<td>Carrera Local Diurna</td>
					<td>".$reg3['ldiurna']."</td>
					<td>".$reg3['cldiurna']."</td>
				</tr>
				<tr>
					<td>Carrera Local Nocturna</td>
					<td>".$reg3['lnocturna']."</td>
					<td>".$reg3['clnocturna']."</td>
				</tr>
				<tr>
					<td>Carrera Local Larga Diurna</td>
					<td>".$reg3['lldiurna']."</td>
					<td>".$reg3['clldiurna']."</td>
				</tr>
				<tr>
					<td>Carrera Local Larga Nocturna</td>
					<td>".$reg3['llnocturna']."</td>
					<td>".$reg3['cllnocturna']."</td>
				</tr>
				<tr>
					<td>Hora de espera Diurna</td>
					<td>".$reg3['hdiurna']."</td>
					<td>".$reg3['chdiurna']."</td>
				</tr>
				<tr>
					<td>Hora de espera Nocturna</td>
					<td>".$reg3['hnocturna']."</td>
					<td>".$reg3['chnocturna']."</td>
				</tr>
				<tr>
					<td>Bono Nocturno Lunes a Viernes</td>
					<td>".$reg3['bonon']."</td>
					<td>".$reg3['cbonon']."</td>
				</tr>
				<tr>
					<td>Bono Feriado / Fin de Semana</td>
					<td>".$reg3['bonof']."</td>
					<td>".$reg3['cbonof']."</td>
				</tr>";
				$tot_ser= $reg3['cviaje']+$reg3['cldiurna']+$reg3['clnocturna']+$reg3['clldiurna']+$reg3['cllnocturna']+$reg3['chdiurna']+$reg3['chnocturna']+$reg3['cbonon']+$reg3['cbonof'];
				echo"<tr>
					<td colspan='2'>Total</td>
					<td>".$tot_ser."</td>
				</tr>
				</tbody>
				</table>";
	}
	echo "<table summary='consulta de servicios extra otros' border='1px'>
			<thead>
				<tr>
					<th scope='col' width='300px'>Otros</th>
					<th scope='col' width='300px'>Descripcion</th>
					<th scope='col' width='100px'>Costo</th>
				</tr>
			</thead>
			<tbody>";
			$registro4=mysql_query("select * from escosol_otro where n_solicitud='$_REQUEST[solicitud]'",$conexion) or
			die("error en select: ".mysql_error());
			$f=0;
			while($reg4=mysql_fetch_array($registro4)){
				$f=$reg4['precio']+$f;
			echo"
				<tr>
					<td></td>
					<td>".$reg4['otro']."</td>
					<td>".$reg4['precio']."</td>
				</tr>";
	}
			echo "
				<tr>
					<td colspan='2'>Total</td>
					<td>".$total1=$f."</td> <br />
			";
?>
</tbody>
</table>