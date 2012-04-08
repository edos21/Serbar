<?php
	$conexion=mysql_connect("localhost","root","");
	mysql_select_db("bdserbar",$conexion);
	$registro=mysql_query("select * from partida where n_obra='$_REQUEST[n_obra]'",$conexion) or
	die("error en select: ".mysql_error());
	if($reg=mysql_fetch_array($registro)){
	echo "Obra: ".$reg['obra']."
	<table summary='partida por numero de orden' border='1px'>
			<caption>Cuadro de control de partidas</caption>
			<thead>
				<tr>
					<th scope='col' rowspan='2'>ID</th>
					<th scope='col' rowspan='2'>Partida</th>
					<th scope='col' rowspan='2'>Viajes</th>
					<th scope='col' rowspan='2'>Cantidad Original</th>
					<th scope='col' rowspan='2'>Precio Unitario</th>
					<th scope='col' rowspan='2'>Total</th>
					<th scope='col' colspan='3'>Total Ejecutado</th>
					<th scope='col' colspan='2'>Disponible</th>
				</tr>
				<tr>
					<th scope='col'>Cant</th>
					<th scope='col'>%</th>
					<th scope='col'>Total</th>	
					<th scope='col'>Cant</th>
					<th scope='col'>Total</th>
				</tr>
			</thead>
			<tbody>
				<tr>";
				$totcantidad=0;
				$totprecio=0;
				$tottot=0;
				$totcej=0;
				$tottotej=0;
				$totdis=0;
				$tottotdis=0;
	$registro4=mysql_query("select * from partida where n_obra='$_REQUEST[n_obra]'",$conexion) or
	die("error en select: ".mysql_error());
	while ($reg4=mysql_fetch_array($registro4)){
		$totcantidad=$totcantidad+$reg4['cantidad'];
		$totprecio=$totprecio+$reg4['precio'];
		$tottot=$tottot+($reg4['cantidad']*$reg4['precio']);
		$totcej=$totcej+$reg4['cejecutada'];
		$tottotej=$tottotej+($reg4['cejecutada']*$reg4['precio']);
		$totdis=$totdis+$reg4['cdisponible'];
		$tottotdis=$tottotdis+($reg4['cdisponible']*$reg4['precio']);
	echo "			<td>".$reg4['n_partida']."</td>
					<td>".$reg4['partida']."</td>
					<td>".$reg4['viaje']."</td>
					<td>".$reg4['cantidad']."</td>
					<td>".$reg4['precio']."</td>
					<td>".$reg4['cantidad']*$reg4['precio']."</td>
					<td>".$reg4['cejecutada']."</td>
					<td>".($reg4['cejecutada']* 100)/$reg4['cantidad']."</td>
					<td>".$reg4['cejecutada']*$reg4['precio']."</td>
					<td>".$reg4['cdisponible']."</td>
					<td>".$reg4['cdisponible']*$reg4['precio']."</td>
				</tr>";	
}	echo "		<tr>
					<td colspan='3'>Total</td>
					<td>".$totcantidad."</td>
					<td>".$totprecio."</td>
					<td>".$tottot."</td>
					<td>".$totcej."</td>
					<td></td>
					<td>".$tottotej."</td>
					<td>".$totdis."</td>
					<td>".$tottotdis."</td>
				</tr>
			</tbody>
		</table>";
	
	$registro2=mysql_query("select distinct valuacion from valuacion where n_obra='$_REQUEST[n_obra]'",$conexion) or
	die("error en select: ".mysql_error());
	while ($reg2=mysql_fetch_array($registro2)){
	echo "<table summary='partida por numero de orden' border='1px'>
				<thead>
				<tr>
					<th scope='col' colspan='3'>Valuacion ".$reg2['valuacion']."</th>
				</tr>
				<tr>
					<th scope='col'>ID</th>
					<th scope='col'>Cantidad</th>	
					<th scope='col'>Total</th>
				</tr>
				</thead>";
		$valcant=0;
		$valtot=0;
	$registro5=mysql_query("select * from valuacion where n_obra='$_REQUEST[n_obra]' and valuacion='$reg2[valuacion]'",$conexion) or
	die("error en select: ".mysql_error());
	while ($reg5=mysql_fetch_array($registro5)){
		$valcant=$valcant+$reg5['cantidad'];
		$valtot=$valtot+$reg5['total'];
	echo "		<tbody>
				<tr>
					<td>".$reg5['n_partida']."</td>
					<td>".$reg5['cantidad']."</td>
					<td>".$reg5['total']."</td>
				</tr>
				";
	}
					
	echo "		<tr>
					<td>Total</td>
					<td>".$valcant."</td>
					<td>".$valtot."</td>
				</tr>
				</tbody>
			</table>";
	}}
?>