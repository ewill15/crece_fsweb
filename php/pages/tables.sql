-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-11-2021 a las 03:14:02
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `db_chocoval`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_nopad_ci NOT NULL,
  `telefono` int(10) UNSIGNED NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `ciudad` enum('Cochabamba','Sucre','Tarija','Santa Cruz','Beni','Pando','La Paz','Oruro','Potosi') CHARACTER SET utf8mb4 NOT NULL,
  `servicio` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `comentario` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacts`
--

INSERT INTO `contacts` (`id`, `nombre`, `apellido`, `telefono`, `email`, `ciudad`, `servicio`, `comentario`) VALUES
(1, 'mario', 'rioja', 60012151, 'marito@gmail.com', 'Sucre', 'envio', 'prueba'),
(2, 'julio', 'mamani', 66320102, 'julito@hotmail.com', 'Cochabamba', 'catalogo', 'su lista de precios envie a esta direccion por favo r'),
(3, 'julio', 'mamani', 66320102, 'julito@hotmail.com', 'Oruro', 'catalogo', 'su lista de precios envie a esta direccion por favo r'),
(4, 'julio', 'mamani', 66320102, 'julito@hotmail.com', 'Santa Cruz', 'catalogo', 'su lista de precios envie a esta direccion por favo r');
COMMIT;
