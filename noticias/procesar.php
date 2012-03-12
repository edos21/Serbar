<?php
	$conexion=mysql_connect("localhost","root","") or 
	die("error al conectar");
	mysql_select_db("Bdserbar",$conexion) or 
	die("error al seleccionar base de datos");
	$registro=mysql_query("insert into noticias(autor,titulo,tipo,noticia,fecha)
	values('$_REQUEST[autor]','$_REQUEST[titulo]','$_REQUEST[tipo]','$_REQUEST[noticia]',Now())",$conexion) or 
	die ("error en select: ".mysql_error());
	header("location: noticia.php");
?>