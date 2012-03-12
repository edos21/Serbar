<html>
	<head>
		<?php
			$conexion=mysql_connect("localhost","root","") or
			die ("error en base de datos");
			mysql_select_db("Bdserbar",$conexion) or
			die ("error al seleccionar base de datos");
			$registro=mysql_query("select * from noticias order by fecha desc",$conexion) or
			die ("error en select: ".mysql_error());
			$total=mysql_num_rows($registro);
		?>
	</head>
	<a href=""></a>
	<body>
		<?php
			while ($reg=mysql_fetch_array($registro)) {
				echo "<div id='noticia'>
				<h2>".$reg['titulo']."</h2>
				<br><p>".$reg['noticia']."</p><br>"
				.$reg['autor']." | ".$reg['fecha']." | ".$reg['tipo']." | ";
		?>  
				<a href="ver.php?id=<?php.$reg['id_noticia']?>">Ver mas</a>
		<?php
			}
		mysql_free_result($registro);
		?>
	</body>
</html>