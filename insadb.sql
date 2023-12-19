-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-12-2023 a las 17:06:35
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
-- Estructura de tabla para la tabla `ciudades`
--

DROP TABLE IF EXISTS `ciudades`;
CREATE TABLE IF NOT EXISTS `ciudades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_pais` int NOT NULL,
  `nombre_ciudad` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

DROP TABLE IF EXISTS `configuracion`;
CREATE TABLE IF NOT EXISTS `configuracion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `propiedad1` int DEFAULT NULL,
  `propiedad2` int DEFAULT NULL,
  `propiedad3` int DEFAULT NULL,
  `propiedad4` int DEFAULT NULL,
  `propiedad5` int DEFAULT NULL,
  `propiedad6` int DEFAULT NULL,
  `oficina_central` varchar(400) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefono1` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefono2` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_contacto` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `horarios` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mapa` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twitter` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipo_visualizacion_propiedades` varchar(1) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_administrador` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `propiedad1`, `propiedad2`, `propiedad3`, `propiedad4`, `propiedad5`, `propiedad6`, `oficina_central`, `telefono1`, `telefono2`, `email_contacto`, `horarios`, `mapa`, `facebook`, `twitter`, `tipo_visualizacion_propiedades`, `user`, `password`, `email_administrador`) VALUES
(1, 1, 3, 1, 1, 3, 3, 'Direccion', '5578758354', '3333 333333', 'yadziro7682@gmail.com', 'Angel Rodriguez Leyva 2', 'mapa', 'Angel Rodriguez Leyva 2', 'Angel Rodriguez Leyva 2', 'p', 'admin', '1234', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `nombre_completo` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `numero_telefono` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo_electronico` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `titulo_producto` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombre_completo`, `numero_telefono`, `correo_electronico`, `titulo_producto`) VALUES
('edna', '245478', 'edna@gmail.com', 'prueba fernandof'),
('pedro', '245478', 'ALE@gmail.com', 'prueba fernandof');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

DROP TABLE IF EXISTS `fotos`;
CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_propiedad` int NOT NULL,
  `nombre_foto` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `id_propiedad`, `nombre_foto`) VALUES
(8, 6, '0b9e95712cbcd180494598de2a33f3e0de3544b9.jpg'),
(12, 10, '813b563af72307dc60d91c797759f48cc98337f7.jpg'),
(14, 12, '813b563af72307dc60d91c797759f48cc98337f7.jpg'),
(15, 13, '813b563af72307dc60d91c797759f48cc98337f7.jpg'),
(16, 14, '813b563af72307dc60d91c797759f48cc98337f7.jpg'),
(17, 15, '813b563af72307dc60d91c797759f48cc98337f7.jpg'),
(18, 16, '813b563af72307dc60d91c797759f48cc98337f7.jpg'),
(19, 17, '813b563af72307dc60d91c797759f48cc98337f7.jpg'),
(20, 18, '93bd4ddd4c6c9ebebd307c2ded293ca8dc659852.jpg'),
(21, 18, 'e34adfe1014659df9456e5c2717e5cccb5e43f1f.jpg'),
(22, 18, '9e6460a897d3f93921c4c0a5244e5985b24151fd.jpg');

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
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `infousuario`
--

INSERT INTO `infousuario` (`NombreUsuario`, `email`, `privilegio`, `contraseña`, `activo`, `id`) VALUES
('Carlos', 'carlos@gmail.com', 0, '1234', 1, 1),
('fer', 'fer@gmail.com', 1, '1234', 1, 2),
('fer4', 'fer4@gmail.com', 2, '1234', 1, 3),
('fer5', 'fer5@gmail.com', 3, '1234', 1, 4),
('feradmin', 'feradmin@gmail.com', 1, '1234', 0, 5),
('ferprueba', 'ferprueba@gmail.com', 1, '1234', 0, 6),
('ferprueba1', 'ferprueba1@gmail.com', 1, '1234', 0, 7),
('ferprueba2', 'ferprueba2@gmail.com', 1, '1234', 1, 8),
('issac', 'issac@gmail.com', 1, '1234', 1, 9),
('prueba', 'prueba@gmail.com', 3, '1234', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

DROP TABLE IF EXISTS `paises`;
CREATE TABLE IF NOT EXISTS `paises` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_pais` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `nombre_pais`) VALUES
(1, 'MEXICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tipoperacion` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
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
-- Estructura de tabla para la tabla `propiedades`
--

DROP TABLE IF EXISTS `propiedades`;
CREATE TABLE IF NOT EXISTS `propiedades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha_alta` date NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_general_ci NOT NULL,
  `tipo` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `ubicacion` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `habitaciones` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `banios` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `pisos` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `garage` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `dimensiones` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `precio` int NOT NULL,
  `url_foto_principal` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `ciudad` int NOT NULL,
  `propietario` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `telefono_propietario` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `activo` tinyint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id`, `fecha_alta`, `titulo`, `descripcion`, `tipo`, `ubicacion`, `habitaciones`, `banios`, `pisos`, `garage`, `dimensiones`, `precio`, `url_foto_principal`, `estado`, `ciudad`, `propietario`, `telefono_propietario`, `activo`) VALUES
(6, '2023-12-12', 'nueva casaA', 'esta es una casa nueva', 'Alquiler', 'Cuatro Vientos', '2', '1', '4', 'Si', '123X1245', 160008, 'fotos/6/FIRMA.jfif', '0', 0, 'paulinadosdos', '55787583545', 0),
(10, '2023-12-12', 'CASA EN MORELOS', 'Bonita casa en estado de morelos', 'Alquiler', 'PAALMAS 1', '1', '2', '2', 'Si', '123x24', 1300, 'fotos/10/new.jpg', '0', 0, 'RAY', '5578758354', 0),
(12, '2023-12-12', 'Paulina prueba', 'qwqwqwq', 'Venta', 'PAALMAS 1', '4', '1', '1', 'Si', '123X124', 130000, 'fotos/12/new.jpg', '0', 0, 'paulinados', '5578758354', 0),
(13, '2023-12-12', 'gdffg', 'oiji', 'Alquiler', 'PAALMAS 1', '4', '1', '4', 'Si', '123X124', 1200, 'fotos/13/new.jpg', '0', 0, 'paulina', '5578758354', 0),
(14, '2023-12-12', 'Paulina prueba', 'wwq', 'Venta', 'PAALMAS 1', '2', '2', '1', 'No', '123x24', 300, 'fotos/14/new.jpg', '0', 0, 'loolo', '5578758354', 0),
(15, '2023-12-12', 'Paulina prueba', 'qwqwqw', 'Venta', 'PAALMAS 1', '2', '2', '1', 'No', '123X124', 1200, 'fotos/15/new.jpg', '0', 0, 'RAY', '5578758354', 0),
(16, '2023-12-12', 'gdffg', '12121', 'venta', 'PAALMAS 1', '2', '2', '1', 'No', '123X345', 130000, 'fotos/16/new.jpg', 'Michoacán', 0, 'VICTOR', '5578758354', 0),
(17, '2023-12-12', 'Paulina prueba', 'qwqwqw', 'venta', 'PAALMAS 1', '2', '2', '1', 'No', '123X1245', 1300, 'fotos/17/new.jpg', 'Morelos', 0, 'pau', '5578758354', 0),
(18, '2023-12-16', 'prueba fernandof', 'fddsfsdffds', 'venta', 'ixtapaluca', '1', '1', '1', 'No', '21221', 123223, 'fotos/18/foto.jpeg', 'Estado de México', 0, 'fer', '42344323', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

DROP TABLE IF EXISTS `tipos`;
CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_tipo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
