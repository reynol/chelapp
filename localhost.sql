-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-12-2016 a las 23:33:36
-- Versión del servidor: 5.5.52-cll-lve
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `chelapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(11) DEFAULT NULL,
  `tipo` char(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `board`
--

INSERT INTO `board` (`id`, `nombre`, `total`, `tipo`) VALUES
(1, 'Reynol', 0, 'cheve'),
(2, 'Sarahi', 0, 'cheve'),
(3, 'Poncho', 0, 'cheve'),
(4, 'Joaco', 0, 'cheve'),
(5, 'Saul', 0, 'cheve'),
(6, 'Ben', 0, 'cheve'),
(7, 'Ismael', 0, 'cheve'),
(8, 'Diego', 0, 'cheve'),
(9, 'Rene', 0, 'cheve');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
