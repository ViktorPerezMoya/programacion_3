-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-09-2010 a las 00:13:00
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `carro_compras`
--
CREATE DATABASE `carro_compras` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `carro_compras`;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `codigo` int(30) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo`, `producto`, `descripcion`, `precio`) VALUES
(1001, 'Lampara Xenon B54', 'Las lamparas de xenon generan hasta 4 veces mas luz que las lamparas halogenas comunes. El consumo de energia es de 35watt, casi la mitad del consumo de las lamparas halogenas comunes. ', '234.00'),
(1002, 'Lampara Xenon B16', 'El funcionamiento mediante la descarga electrica aumenta la cantidad de horas utiles de la lampara, ya que los golpes y las vibraciones no las da?an, como sucede con las lamparas halogenas.', '254.00'),
(1003, 'Lampara Xenon 300SD', 'El funcionamiento mediante la descarga electrica aumenta la cantidad de horas utiles de la lampara, ya que los golpes y las vibraciones no las da?an, como sucede con las lamparas halogenas.', '344.00'),
(1004, 'Lampara Xenon B45SD', 'No hace falta realizar ninguna modificacion electrica en el auto, tampoco hace falta cortar cables. Hay kits para cada modelo y marca de autos. Los kits consumen casi la mitad de electricidad que las lamparas halogenas comunes.', '256.40'),
(1005, 'Lampara Xenon 28SE', 'Este modelo de lampara genera un ahorro de combustible.', '310.50'),
(1006, 'Lampara Xenon B345', 'En caso de ser necesario se pueden colocar lamparas halogenas de forma inmediata, los kits no modifican la instalacion electrica original del auto. ', '340.00'),
(1007, 'Lampara Xenon 34SE', 'En caso de ser necesario se pueden colocar lamparas halogenas de forma inmediata, los kits no modifican la instalacion electrica original del auto. ', '322.50'),
(1008, 'Lampara Xenon B90', 'Las lamparas de xenon generan menos calor que las lamparas halogenas, todas las opticas soportan las lamparas de xenon.', '349.90'),
(1009, 'Lampara Xenon 43SE', 'Las lamparas de xenon generan menos calor que las lamparas halogenas, todas las opticas soportan las lamparas de xenon.', '230.90'),
(1010, 'Lampara Xenon 98DE', 'Las lamparas de xenon generan menos calor que las lamparas halogenas, todas las opticas soportan las lamparas de xenon.', '110.00'),
(1011, 'Lampara Xenon 65SD', 'Los balastros son de menor tama?o y son digitales. Los balastros no generan ningun tipo de interferencia en las computadoras de los autos ni en las radios. ', '430.00'),
(1012, 'Lampara Xenon B44', 'Los balastros son de menor tama?o y son digitales. Los balastros no generan ningun tipo de interferencia en las computadoras de los autos ni en las radios.', '235.60'),
(1013, 'Lampara Xenon 3D4G', 'Las lamparas de 6000k generan el mismo color que los autos de alta gama que vienen con lamparas de xenon de serie. A medida que aumenta la temperatura de las lamparas la potencia lum?nica disminuye. ', '260.60'),
(1014, 'Lampara Xenon 109FD', 'Las lamparas de 6000k generan el mismo color que los autos de alta gama que vienen con lamparas de xenon de serie. A medida que aumenta la temperatura de las lamparas la potencia lum?nica disminuye. ', '430.00'),
(1015, 'Lampara Xenon 90FT', 'El funcionamiento mediante la descarga electrica aumenta la cantidad de horas utiles de la lampara, ya que los golpes y las vibraciones no las da?an, como sucede con las lamparas halogenas.', '456.60'),
(1016, 'Lampara Xenon FG34', 'El funcionamiento mediante la descarga electrica aumenta la cantidad de horas utiles de la lampara, ya que los golpes y las vibraciones no las da?an, como sucede con las lamparas halogenas.', '190.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
