-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2016 a las 15:01:19
-- Versión del servidor: 5.6.11
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `coches`
--
CREATE DATABASE IF NOT EXISTS `coches` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `coches`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `marca`) VALUES
(1, 'Alfa Romeo'),
(2, 'Audi'),
(3, 'BMW'),
(4, 'Chevrolet'),
(5, 'Chrysler'),
(6, 'Citroen'),
(7, 'Daewoo'),
(8, 'Fiat'),
(9, 'Ford'),
(10, 'Honda'),
(11, 'Hyundai'),
(12, 'Jeep'),
(13, 'Kia'),
(14, 'Lancia'),
(15, 'Lexus'),
(16, 'Mazda'),
(17, 'Mercedes-Benz'),
(18, 'Mitsubushi'),
(19, 'Nissan'),
(20, 'Opel'),
(21, 'Peugeot'),
(22, 'Porsche'),
(23, 'Renault'),
(24, 'Rover'),
(25, 'Saab'),
(26, 'Seat'),
(27, 'Skoda'),
(28, 'Toyota'),
(29, 'Volskwagen'),
(30, 'Volvo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocasion`
--

CREATE TABLE IF NOT EXISTS `ocasion` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `idmarca` int(11) NOT NULL,
  `modelo` varchar(20) CHARACTER SET latin1 NOT NULL,
  `combustible` varchar(10) CHARACTER SET latin1 NOT NULL,
  `color` varchar(15) CHARACTER SET latin1 NOT NULL,
  `fecha` int(4) NOT NULL DEFAULT '0',
  `precio` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `ocasion`
--

INSERT INTO `ocasion` (`id`, `idmarca`, `modelo`, `combustible`, `color`, `fecha`, `precio`) VALUES
(2, 21, '206 GTI', 'nafta', 'gris quartz', 2006, 38000),
(3, 8, '147', 'nafta', 'verde militar', 1999, 45000),
(4, 5, 'Neon', 'nafta', 'violeta parra', 1998, 26000),
(5, 4, 'chevy SS', 'nafta', 'naranja', 1975, 18000),
(6, 8, '600', 'nafta', 'azul', 1981, 8000),
(7, 4, 'chevy SS', 'nafta', 'naranja', 1973, 18000),
(8, 4, 'chevy SS', 'nafta', 'naranja', 1973, 18000),
(9, 2, 'TT', 'nafta', 'negro azabache', 2007, 178000),
(10, 9, 'fairlane', 'nafta', 'negro olmedo', 1969, 12300),
(11, 2, 'A4', 'nafta', 'gris', 2014, 300000),
(18, 2, 'A3', 'nafta', 'azul electrico', 2009, 120000),
(19, 1, 'Mito', 'nafta', 'Marfil', 2015, 300000),
(20, 9, 'Ecosport', 'nafta', 'Rojo', 2012, 180000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
