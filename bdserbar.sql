-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-04-2012 a las 03:58:14
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdserbar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escofactura`
--

CREATE TABLE IF NOT EXISTS `escofactura` (
  `n_factura` int(10) NOT NULL AUTO_INCREMENT,
  `filial` varchar(20) DEFAULT NULL,
  `rif` varchar(10) DEFAULT NULL,
  `nombre_emp` varchar(35) DEFAULT NULL,
  `direccion` text,
  `telefono` varchar(15) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `cedula` varchar(12) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `n_presupuesto` int(10) DEFAULT NULL,
  `observacion` text,
  PRIMARY KEY (`n_factura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `escofactura`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escojjfactura`
--

CREATE TABLE IF NOT EXISTS `escojjfactura` (
  `n_factura` int(10) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(20) DEFAULT NULL,
  `rif` varchar(10) DEFAULT NULL,
  `nombre_emp` varchar(35) DEFAULT NULL,
  `direccion` text,
  `telefono` varchar(15) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `cedula` varchar(12) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `orden` varchar(20) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `n_presupuesto` int(10) DEFAULT NULL,
  `observacion` text,
  PRIMARY KEY (`n_factura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `escojjfactura`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escojjpresupuesto`
--

CREATE TABLE IF NOT EXISTS `escojjpresupuesto` (
  `n_presupuesto` int(10) NOT NULL DEFAULT '0',
  `ciudad` varchar(20) DEFAULT NULL,
  `fecha` varchar(12) DEFAULT NULL,
  `rif` varchar(15) DEFAULT NULL,
  `nombre_emp` varchar(35) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` text,
  `mail` varchar(50) DEFAULT NULL,
  `cedula` varchar(12) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `orden` varchar(20) DEFAULT NULL,
  `impuesto` float DEFAULT NULL,
  `observacion` text,
  PRIMARY KEY (`n_presupuesto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `escojjpresupuesto`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escojjservicios`
--

CREATE TABLE IF NOT EXISTS `escojjservicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_presupuesto` int(10) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `descripcion` text,
  `precio` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `escojjservicios`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escopartida`
--

CREATE TABLE IF NOT EXISTS `escopartida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_obra` int(11) DEFAULT NULL,
  `obra` text,
  `n_partida` int(11) DEFAULT NULL,
  `partida` text,
  `viaje` varchar(25) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `cejecutada` int(11) DEFAULT NULL,
  `cdisponible` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `escopartida`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escopresupuesto`
--

CREATE TABLE IF NOT EXISTS `escopresupuesto` (
  `n_presupuesto` int(10) NOT NULL DEFAULT '0',
  `filial` varchar(20) DEFAULT NULL,
  `fecha` varchar(12) DEFAULT NULL,
  `rif` varchar(15) DEFAULT NULL,
  `nombre_emp` varchar(35) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` text,
  `mail` varchar(50) DEFAULT NULL,
  `cedula` varchar(12) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `impuesto` float DEFAULT NULL,
  `observacion` text,
  PRIMARY KEY (`n_presupuesto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `escopresupuesto`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escoresumen`
--

CREATE TABLE IF NOT EXISTS `escoresumen` (
  `nota` varchar(10) NOT NULL,
  `factura` varchar(10) DEFAULT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `cedula` varchar(12) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `origen` varchar(30) DEFAULT NULL,
  `destino` varchar(30) DEFAULT NULL,
  `producto` varchar(30) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `coordinador` varchar(50) DEFAULT NULL,
  `observacion` text,
  PRIMARY KEY (`nota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `escoresumen`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escoservicios`
--

CREATE TABLE IF NOT EXISTS `escoservicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_presupuesto` int(10) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `descripcion` text,
  `precio` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `escoservicios`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escosolicitud`
--

CREATE TABLE IF NOT EXISTS `escosolicitud` (
  `n_solicitud` int(10) NOT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `cedula` varchar(12) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `c_operador` float DEFAULT NULL,
  `c_servicio` float DEFAULT NULL,
  `utilidad` float DEFAULT NULL,
  `viaje` varchar(30) DEFAULT NULL,
  `cviaje` float DEFAULT NULL,
  `ldiurna` varchar(30) DEFAULT NULL,
  `cldiurna` float DEFAULT NULL,
  `lnocturna` varchar(30) DEFAULT NULL,
  `clnocturna` float DEFAULT NULL,
  `lldiurna` varchar(30) DEFAULT NULL,
  `clldiurna` float DEFAULT NULL,
  `llnocturna` varchar(30) DEFAULT NULL,
  `cllnocturna` float DEFAULT NULL,
  `hdiurna` varchar(30) DEFAULT NULL,
  `chdiurna` float DEFAULT NULL,
  `hnocturna` varchar(30) DEFAULT NULL,
  `chnocturna` float DEFAULT NULL,
  `bonon` varchar(30) DEFAULT NULL,
  `cbonon` float DEFAULT NULL,
  `bonof` varchar(30) DEFAULT NULL,
  `cbonof` float DEFAULT NULL,
  PRIMARY KEY (`n_solicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `escosolicitud`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escosol_otro`
--

CREATE TABLE IF NOT EXISTS `escosol_otro` (
  `codigo` int(10) NOT NULL AUTO_INCREMENT,
  `otro` varchar(25) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `n_solicitud` int(10) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `escosol_otro`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escosol_viaje`
--

CREATE TABLE IF NOT EXISTS `escosol_viaje` (
  `codigo` int(10) NOT NULL AUTO_INCREMENT,
  `origen` varchar(25) DEFAULT NULL,
  `destino` varchar(25) DEFAULT NULL,
  `tipo` varchar(25) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `n_solicitud` int(10) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `escosol_viaje`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escovaluacion`
--

CREATE TABLE IF NOT EXISTS `escovaluacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_obra` int(11) DEFAULT NULL,
  `n_partida` int(11) DEFAULT NULL,
  `valuacion` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `escovaluacion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `n_factura` int(10) NOT NULL AUTO_INCREMENT,
  `filial` varchar(20) DEFAULT NULL,
  `rif` varchar(10) DEFAULT NULL,
  `nombre_emp` varchar(35) DEFAULT NULL,
  `direccion` text,
  `telefono` varchar(15) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `cedula` varchar(12) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `n_presupuesto` int(10) DEFAULT NULL,
  `observacion` text,
  PRIMARY KEY (`n_factura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `factura`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jjfactura`
--

CREATE TABLE IF NOT EXISTS `jjfactura` (
  `n_factura` int(10) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(20) DEFAULT NULL,
  `rif` varchar(10) DEFAULT NULL,
  `nombre_emp` varchar(35) DEFAULT NULL,
  `direccion` text,
  `telefono` varchar(15) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `cedula` varchar(12) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `orden` varchar(20) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `n_presupuesto` int(10) DEFAULT NULL,
  `observacion` text,
  PRIMARY KEY (`n_factura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `jjfactura`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jjpresupuesto`
--

CREATE TABLE IF NOT EXISTS `jjpresupuesto` (
  `n_presupuesto` int(10) NOT NULL DEFAULT '0',
  `ciudad` varchar(20) DEFAULT NULL,
  `fecha` varchar(12) DEFAULT NULL,
  `rif` varchar(15) DEFAULT NULL,
  `nombre_emp` varchar(35) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` text,
  `mail` varchar(50) DEFAULT NULL,
  `cedula` varchar(12) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `orden` varchar(20) DEFAULT NULL,
  `impuesto` float DEFAULT NULL,
  `observacion` text,
  PRIMARY KEY (`n_presupuesto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `jjpresupuesto`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jjservicios`
--

CREATE TABLE IF NOT EXISTS `jjservicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_presupuesto` int(10) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `descripcion` text,
  `precio` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `jjservicios`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partida`
--

CREATE TABLE IF NOT EXISTS `partida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_obra` int(11) DEFAULT NULL,
  `obra` text,
  `n_partida` int(11) DEFAULT NULL,
  `partida` text,
  `viaje` varchar(25) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `cejecutada` int(11) DEFAULT NULL,
  `cdisponible` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `partida`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

CREATE TABLE IF NOT EXISTS `presupuesto` (
  `n_presupuesto` int(10) NOT NULL DEFAULT '0',
  `filial` varchar(20) DEFAULT NULL,
  `fecha` varchar(12) DEFAULT NULL,
  `rif` varchar(15) DEFAULT NULL,
  `nombre_emp` varchar(35) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` text,
  `mail` varchar(50) DEFAULT NULL,
  `cedula` varchar(12) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `impuesto` float DEFAULT NULL,
  `observacion` text,
  PRIMARY KEY (`n_presupuesto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `presupuesto`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resumen`
--

CREATE TABLE IF NOT EXISTS `resumen` (
  `nota` varchar(10) NOT NULL,
  `factura` varchar(10) DEFAULT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `cedula` varchar(12) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `origen` varchar(30) DEFAULT NULL,
  `destino` varchar(30) DEFAULT NULL,
  `producto` varchar(30) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `coordinador` varchar(50) DEFAULT NULL,
  `observacion` text,
  PRIMARY KEY (`nota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `resumen`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_presupuesto` int(10) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `descripcion` text,
  `precio` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `servicios`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE IF NOT EXISTS `solicitud` (
  `n_solicitud` int(10) NOT NULL,
  `fecha` varchar(10) DEFAULT NULL,
  `cedula` varchar(12) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `c_operador` float DEFAULT NULL,
  `c_servicio` float DEFAULT NULL,
  `utilidad` float DEFAULT NULL,
  `viaje` varchar(30) DEFAULT NULL,
  `cviaje` float DEFAULT NULL,
  `ldiurna` varchar(30) DEFAULT NULL,
  `cldiurna` float DEFAULT NULL,
  `lnocturna` varchar(30) DEFAULT NULL,
  `clnocturna` float DEFAULT NULL,
  `lldiurna` varchar(30) DEFAULT NULL,
  `clldiurna` float DEFAULT NULL,
  `llnocturna` varchar(30) DEFAULT NULL,
  `cllnocturna` float DEFAULT NULL,
  `hdiurna` varchar(30) DEFAULT NULL,
  `chdiurna` float DEFAULT NULL,
  `hnocturna` varchar(30) DEFAULT NULL,
  `chnocturna` float DEFAULT NULL,
  `bonon` varchar(30) DEFAULT NULL,
  `cbonon` float DEFAULT NULL,
  `bonof` varchar(30) DEFAULT NULL,
  `cbonof` float DEFAULT NULL,
  PRIMARY KEY (`n_solicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `solicitud`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sol_otro`
--

CREATE TABLE IF NOT EXISTS `sol_otro` (
  `codigo` int(10) NOT NULL AUTO_INCREMENT,
  `otro` varchar(25) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `n_solicitud` int(10) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `sol_otro`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sol_viaje`
--

CREATE TABLE IF NOT EXISTS `sol_viaje` (
  `codigo` int(10) NOT NULL AUTO_INCREMENT,
  `origen` varchar(25) DEFAULT NULL,
  `destino` varchar(25) DEFAULT NULL,
  `tipo` varchar(25) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `n_solicitud` int(10) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `sol_viaje`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valuacion`
--

CREATE TABLE IF NOT EXISTS `valuacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_obra` int(11) DEFAULT NULL,
  `n_partida` int(11) DEFAULT NULL,
  `valuacion` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `valuacion`
--

