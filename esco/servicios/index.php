<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Tabulador de Precios</title>
		<link rel="stylesheet" href="../css/administracion.css" type="text/css"/> 
	</head>
	<body>
		<form action="guardar.php" method="post">
			<label>Solicitud #: </label>
			<input type="text" name="solicitud" />
			<label>Fecha: </label>
			<input type="text" name="fecha" />
			<br />
			<br />
			<label>Origen: </label>
			<input type="text" name="origen" />
			<label>Destino: </label>
			<input type="text" name="destino" />
			<label>Tipo: </label>
			<input type="text" name="tipo" />
			<label>Precio: </label>
			<input type="text" name="precio" />
			<!--los elementos origen, destino, tipo, precio y solicitud van en
				la tabla llamada sol_otro esto es lo que guardaras usando ajax
				adicional origen, destino, tipo y precio deberian borrar su contenido
				del type="text" mas el contenido de solicitud no debe borrarse ya que
				se usara mas adelante-->
			<input type="button" value="Guardar"/>
			<br />
			<br />
			<label>Datos del Operador</label><br />
			<label>Cedula: </label>
			<input type="text" name="cedula" />
			<label>Nombre: </label>
			<input type="text" name="nombre" />
			<label>Costo Operador: </label>
			<input type="text" name="costo_oper" />
			<label>Costo Servicio: </label>
			<input type="text" name="costo_ser" />
			<label>Utilidad: </label>
			<input type="text" name="utilidad" />
			<br />
			<label>Viaje: </label>
			<input type="text" name="viaje" />
			<label>Costo: </label>
			<input type="text" name="cviaje" />
			<br />
			<label>Carrera local diurna: </label>
			<input type="text" name="ldiurna" />
			<label>Costo: </label>
			<input type="text" name="cldiurna" />
			<br />
			<label>Carrera local nocturna: </label>
			<input type="text" name="lnocturna" />
			<label>Costo: </label>
			<input type="text" name="clnocturna" />
			<br />
			<label>Carrera local larga diurna: </label>
			<input type="text" name="lldiurna" />
			<label>Costo: </label>
			<input type="text" name="clldiurna" />
			<br />
			<label>Carrera local larga nocturna: </label>
			<input type="text" name="llnocturna" />
			<label>Costo: </label>
			<input type="text" name="cllnocturna" />
			<br />
			<label>Hora de espera diurna:</label>
			<input type="text" name="hdiurna" />
			<label>Costo: </label>
			<input type="text" name="chdiurna" />
			<br />
			<label>Hora de espera nocturna: </label>
			<input type="text" name="hnocturna" />
			<label>Costo: </label>
			<input type="text" name="chnocturna" />
			<br />
			<label>Bono nocturno lunes a viernes: </label>
			<input type="text" name="bonon" />
			<label>Costo: </label>
			<input type="text" name="cbonon" />
			<br />
			<label>Bono feriado / Fin de semana: </label>
			<input type="text" name="bonof" />
			<label>Costo: </label>
			<input type="text" name="cbonof" />
			<br />
			<label>Otros: </label>
			<input type="text" name="otro" />
			<label>Costo: </label>
			<input type="text" name="cotro" />
			<!-- aqui tambien se usara ajax, los elementos otro, cotro y solicitud se
				almacenan en la tabla sol_otro y adicional se borra solo otro y cotro
				ya que la solicitud se usa mas adelante-->
			<input type="button" value="Guardar" />
			<br />
			<input type="submit" value="Guardar" />
			<input type="reset" value="Cancelar" />
			<input type="button" value="Consultar" onclick="location.href='consultar.php'"/>
			<input type="button" value="Eliminar" onclick="location.href='eliminar.php'" />
			<input type="button" value="Modificar" onclick="location.href='modificar.php'" />
		</form>
	</body>
</html>