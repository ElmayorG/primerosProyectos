-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2015 a las 21:05:43
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `andrea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletin`
--

CREATE TABLE IF NOT EXISTS `boletin` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `apellido_m` text NOT NULL,
  `correo` text NOT NULL,
  `fecha_nac` text NOT NULL,
  `sexo` text NOT NULL,
  `estado_civ` text NOT NULL,
  `ocupacion` text NOT NULL,
  `lugar_reciden` text NOT NULL,
  `CP` text NOT NULL,
  `colonia` text NOT NULL,
  `art` text NOT NULL,
  `pap` text NOT NULL,
  `esc` text NOT NULL,
  `adh` text NOT NULL,
  `esco` text NOT NULL,
  `did` text NOT NULL,
  `env` text NOT NULL,
  `man` text NOT NULL,
  `acp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sesion` text NOT NULL,
  `id_prod` text NOT NULL,
  `precio` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `id_sesion`, `id_prod`, `precio`) VALUES
(1, '285', '912', 8.5),
(2, '63', '912', 8.5),
(3, '63', '818', 2),
(4, '63', '177', 22),
(5, '63', '534', 20.5),
(6, '63', '534', 20.5),
(7, '63', '812', 4.5),
(8, '63', '812', 4.5),
(9, '63', '960', 8),
(10, '63', '960', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `id_p` text NOT NULL,
  `foto` text NOT NULL,
  `precio` float NOT NULL,
  `cat` text NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `id_p`, `foto`, `precio`, `cat`) VALUES
(8, 'Diurex Grande', '912', 'img_pro/912_506_diurex grande.jpg', 8.5, 'Adhesivos'),
(13, 'Diurex Chico', '818', 'img_pro/818_922_diurex chico.jpg', 2, 'Adhesivos'),
(14, 'Gises de colores', '960', 'img_pro/960_7030_gises de colores.jpg', 8, 'Escolar'),
(15, 'Abatelenguas', '566', 'img_pro/566_1785_abatelenguas.jpg', 20, 'Didacticos'),
(16, 'Abaco', '680', 'img_pro/680_2023_acabo.jpg', 12.5, 'Escolar'),
(17, 'Bicolor', '812', 'img_pro/812_5519_bicolor.jpg', 4.5, 'Escolar'),
(18, 'Block Esquela', '534', 'img_pro/534_3277_bloc esquela.jpg', 20.5, 'Escolar'),
(19, 'Block tama&ntilde;o carta', '177', 'img_pro/177_9465_bloc tamaÃ±o carta.jpg', 22, 'Escolar'),
(20, 'Cascabeles', '536', 'img_pro/536_8930_cascabeles.jpg', 0.5, 'Didacticos'),
(21, 'Fichas', '858', 'img_pro/858_9913_chichas.jpg', 1, 'Didacticos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `idusu` varchar(200) NOT NULL,
  `tip` varchar(200) NOT NULL,
  `correo` text NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `contra` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `idusu`, `tip`, `correo`, `usuario`, `contra`) VALUES
(1, '285', 'admin', 'beatlemannia_21@hotmail.com', 'Andrea', '12345678'),
(5, '181', 'norm', 'semplet3@hotmail.com', 'Jhonny', '7788'),
(6, '816', 'norm', 'semplet3@hotmail.com', 'Andrei', '9654');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
