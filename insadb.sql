-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-12-2023 a las 02:24:10
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `insadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infousuario`
--

DROP TABLE IF EXISTS `infousuario`;
CREATE TABLE IF NOT EXISTS `infousuario` (
  `NombreUsuario` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `privilegio` int NOT NULL,
  `contraseña` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `activo` tinyint NOT NULL,
  PRIMARY KEY (`NombreUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `infousuario`
--

INSERT INTO `infousuario` (`NombreUsuario`, `email`, `privilegio`, `contraseña`, `activo`) VALUES
('Carlos', 'prueba@gmail.com', 0, '1234', 0),
('fer', 'fer7w7@gmail.com', 1, '1234', 0),
('fer4', 'sdffd', 2, '1234', 0),
('fer5', 'sdffds', 3, '1234', 0),
('feradmin', '', 1, '1234', 1),
('ferprueba', '', 1, '1234', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tipoperacion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `habitacion_piso` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ubicacion` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `caracteristicas` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Opinion` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Localizacion` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `Ejecucion_Equipamiento` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `Solucion_Disenio` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `tipoperacion`, `habitacion_piso`, `ubicacion`, `precio`, `imagen`, `caracteristicas`, `Opinion`, `Localizacion`, `Ejecucion_Equipamiento`, `Solucion_Disenio`) VALUES
(1, 'amplio departamento', 'venta', 'hab 1', 'cancun', '12345.00', 'img/ejemplo.jpg', NULL, '', '', '', ''),
(2, 'Ejemplo de propiedad', 'renta', '3 habitaciones - Piso 2', 'Ciudad', '200000.00', 'img/ejemplo2.jpg', NULL, '', '', '', ''),
(3, 'Gran apartamento con diseño', 'venta', 'hab 4', 'tulum', '25000.00', 'img/ejemplo3.jpg', '=> número de habitaciones: 5\r\n=> 2do piso de 5\r\n=> área del departamento: 223.92 m2\r\n=> superficie de terraza: 27,09 m2\r\n=> área del balcón: 6,63 m2\r\n=> superficie del jardín japonés: 35 m2', 'Este hermoso apartamento ofrece un ambiente increíble. La superficie superior al estándar crea la impresión de una casa familiar, que se ve aún más realzada por la vista al río Danubio y a los bosques de su cuenca. El apartamento está amueblado con mucho ', 'La propiedad se encuentra encima de Devínská cesta y hay una excelente conexión de transporte. La urbanización cercana ofrece servicios cívicos completos, que incluyen tiendas, cafeterías, restaurantes, escuelas, guarderías y muchos otros beneficios', 'The apartment has intelligent control via a mobile application. Premium natural materials - wood, stone tiles, cast concrete - are found in many places in the living space.\r\n\r\n\r\nThe kitchen of the LEICHT brand with SIEMENS appliances has been made to measure, bathrooms and toilets are equipped with sanitary ware from the manufacturers VILLEROY BOCH and HANSGROHE. In the master bathroom you will find the design edition of the AXOR MASSAUD brand, the master bedroom is dominated by the RUF BETTEN b', 'Informacion de la casa'),
(4, 'magnifico duplex en villa', 'renta', 'hab 4', 'cancun', '1500.00', 'img/ejemplo4.jpg', NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

DROP TABLE IF EXISTS `ubicacion`;
CREATE TABLE IF NOT EXISTS `ubicacion` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `estado` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `municipio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `CP` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
