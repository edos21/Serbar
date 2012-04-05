<!DOCTYPE html>
<html>
	<head>
		<title>Tabulador de Precios</title>
	</head>
	<body>
		<form action="guardar.php" method="post">
			Solicitud #:
			<input type="text" name="solicitud" />
			Fecha:
			<input type="text" name="fecha" />
			<br />
			<br />
			Origen:
			<input type="text" name="origen" />
			Destino:
			<input type="text" name="destino" />
			Tipo:
			<input type="text" name="tipo" />
			Precio:
			<input type="text" name="precio" />
			<!--los elementos origen, destino, tipo, precio y solicitud van en
				la tabla llamada sol_otro esto es lo que guardaras usando ajax
				adicional origen, destino, tipo y precio deberian borrar su contenido
				del type="text" mas el contenido de solicitud no debe borrarse ya que
				se usara mas adelante-->
			<input type="button" value="Guardar"/>
			<br />
			<br />
			Datos del Operador<br />
			Cedula:
			<input type="text" name="cedula" />
			Nombre:
			<input type="text" name="nombre" />
			Costo Operador:
			<input type="text" name="costo_oper" />
			Costo Servicio:
			<input type="text" name="costo_ser" />
			Utilidad:
			<input type="text" name="utilidad" />
			<br />
			viaje:
			<input type="text" name="viaje" />
			costo:
			<input type="text" name="cviaje" />
			<br />
			Carrerla local diurna:
			<input type="text" name="ldiurna" />
			costo:
			<input type="text" name="cldiurna" />
			<br />
			Carrera local nocturna:
			<input type="text" name="lnocturna" />
			costo:
			<input type="text" name="clnocturna" />
			<br />
			Carrerla local larga diurna:
			<input type="text" name="lldiurna" />
			costo:
			<input type="text" name="clldiurna" />
			<br />
			Carrera local larga nocturna:
			<input type="text" name="llnocturna" />
			costo:
			<input type="text" name="cllnocturna" />
			<br />
			Hora de espera diurna:
			<input type="text" name="hdiurna" />
			costo:
			<input type="text" name="chdiurna" />
			<br />
			Hora de espera nocturna:
			<input type="text" name="hnocturna" />
			costo:
			<input type="text" name="chnocturna" />
			<br />
			Bono nocturno lunes a viernes:
			<input type="text" name="bonon" />
			costo:
			<input type="text" name="cbonon" />
			<br />
			Bono feriado / fin de semana:
			<input type="text" name="bonof" />
			costo:
			<input type="text" name="cbonof" />
			<br />
			otros:
			<input type="text" name="otro" />
			costo:
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