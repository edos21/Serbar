-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-03-2012 a las 15:59:32
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
CREATE DATABASE `bdserbar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdserbar`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(4) NOT NULL AUTO_INCREMENT,
  `autor` varchar(100) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `noticia` text,
  KEY `id_noticia` (`id_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `autor`, `titulo`, `tipo`, `fecha`, `noticia`) VALUES
(1, 'eduardo', 'prueba', 'probando', '2012-03-10 23:55:07', 'TBBT temp 2 - cap 17'),
(2, 'Eduardo', 'La segunda prueba', 'probando', '2012-03-11 13:28:17', '(system). Un sistema es un conjunto de partes o elementos organizadas y relacionadas que interactúan entre sí para lograr un objetivo. Los sistemas reciben (entrada) datos, energía o materia del ambiente y proveen (salida) información, energía o materia.\r\n\r\n Un sistema puede ser físico o concreto (una computadora, un televisor, un humano) o puede ser abstracto o conceptual (un software)\r\n\r\n Cada sistema existe dentro de otro más grande, por lo tanto un sistema puede estar formado por subsistemas y partes, y a la vez puede ser parte de un supersistema.\r\n\r\n Los sistemas tienen límites o fronteras (Ver: frontera de un sistema), que los diferencian del ambiente. Ese límite puede ser físico (el gabinete de una computadora) o conceptual. Si hay algún intercambio entre el sistema y el ambiente a través de ese límite, el sistema es abierto, de lo contrario, el sistema es cerrado.\r\n\r\n El ambiente es el medio en externo que envuelve física o conceptualmente a un sistema. El sistema tiene interacción con el ambiente, del cual recibe entradas y al cual se le devuelven salidas. El ambiente también puede ser una amenaza para el sistema.\r\n\r\n Un grupo de elementos no constituye un sistema si no hay una relación e interacción, que de la idea de un "todo" con un propósito (ver holismo y sinergía).\r\n\r\n En informática existen gran cantidad de sistemas:\r\n • Sistema operativo.\r\n • Sistema experto.\r\n • Sistema informático.\r\n • Aplicación o software.\r\n • Computadora.'),
(3, 'Nancy', '¿La molécula es un sistema?', 'Ciencia', '2012-03-11 13:32:49', 'Pregunta del usuario: \r\n\r\n¿La molécula es un sistema? \r\n\r\nRespuesta de ALEGSA:\r\n\r\nClaro que sí, es un sistema, dado que está formado por partes (átomos determinados) que se interrelacionan (se mantienen unidos). Tienen un límite y objetivo que pueden definirse.');
