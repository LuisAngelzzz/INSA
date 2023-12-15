-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2023 a las 18:47:46
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `nombre_ciudad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL,
  `propiedad1` int(11) DEFAULT NULL,
  `propiedad2` int(11) DEFAULT NULL,
  `propiedad3` int(11) DEFAULT NULL,
  `propiedad4` int(11) DEFAULT NULL,
  `propiedad5` int(11) DEFAULT NULL,
  `propiedad6` int(11) DEFAULT NULL,
  `oficina_central` varchar(400) DEFAULT NULL,
  `telefono1` varchar(100) DEFAULT NULL,
  `telefono2` varchar(100) DEFAULT NULL,
  `email_contacto` varchar(100) DEFAULT NULL,
  `horarios` varchar(200) DEFAULT NULL,
  `mapa` varchar(300) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `tipo_visualizacion_propiedades` varchar(1) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email_administrador` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `propiedad1`, `propiedad2`, `propiedad3`, `propiedad4`, `propiedad5`, `propiedad6`, `oficina_central`, `telefono1`, `telefono2`, `email_contacto`, `horarios`, `mapa`, `facebook`, `twitter`, `tipo_visualizacion_propiedades`, `user`, `password`, `email_administrador`) VALUES
(1, 1, 3, 1, 1, 3, 3, 'Direccion', '5578758354', '3333 333333', 'yadziro7682@gmail.com', 'Angel Rodriguez Leyva 2', 'mapa', 'Angel Rodriguez Leyva 2', 'Angel Rodriguez Leyva 2', 'p', 'admin', '1234', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `id_propiedad` int(11) NOT NULL,
  `nombre_foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(19, 17, '813b563af72307dc60d91c797759f48cc98337f7.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` int(11) NOT NULL,
  `nombre_pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `nombre_pais`) VALUES
(1, 'MEXICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id` int(11) NOT NULL,
  `fecha_alta` date NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `tipo` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `ubicacion` varchar(200) NOT NULL,
  `habitaciones` varchar(2) NOT NULL,
  `banios` varchar(2) NOT NULL,
  `pisos` varchar(1) NOT NULL,
  `garage` varchar(2) NOT NULL,
  `dimensiones` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `moneda` varchar(5) NOT NULL,
  `url_foto_principal` varchar(200) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `ciudad` int(11) NOT NULL,
  `propietario` varchar(100) NOT NULL,
  `telefono_propietario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id`, `fecha_alta`, `titulo`, `descripcion`, `tipo`, `estado`, `ubicacion`, `habitaciones`, `banios`, `pisos`, `garage`, `dimensiones`, `precio`, `moneda`, `url_foto_principal`, `pais`, `ciudad`, `propietario`, `telefono_propietario`) VALUES
(6, '2023-12-12', 'nueva casaA', 'esta es una casa nueva', 0, 'Alquiler', 'Cuatro Vientos', '2', '1', '4', 'Si', '123X1245', 160008, '$MEX', 'fotos/6/FIRMA.jfif', '0', 0, 'paulinadosdos', '55787583545'),
(10, '2023-12-12', 'CASA EN MORELOS', 'Bonita casa en estado de morelos', 0, 'Alquiler', 'PAALMAS 1', '1', '2', '2', 'Si', '123x24', 1300, '$MEX', 'fotos/10/new.jpg', '0', 0, 'RAY', '5578758354'),
(12, '2023-12-12', 'Paulina prueba', 'qwqwqwq', 0, 'Venta', 'PAALMAS 1', '4', '1', '1', 'Si', '123X124', 130000, '$MEX', 'fotos/12/new.jpg', '0', 0, 'paulinados', '5578758354'),
(13, '2023-12-12', 'gdffg', 'oiji', 0, 'Alquiler', 'PAALMAS 1', '4', '1', '4', 'Si', '123X124', 1200, '$MEX', 'fotos/13/new.jpg', '0', 0, 'paulina', '5578758354'),
(14, '2023-12-12', 'Paulina prueba', 'wwq', 0, 'Venta', 'PAALMAS 1', '2', '2', '1', 'No', '123x24', 300, '$MEX', 'fotos/14/new.jpg', '0', 0, 'loolo', '5578758354'),
(15, '2023-12-12', 'Paulina prueba', 'qwqwqw', 0, 'Venta', 'PAALMAS 1', '2', '2', '1', 'No', '123X124', 1200, '$MEX', 'fotos/15/new.jpg', '0', 0, 'RAY', '5578758354'),
(16, '2023-12-12', 'gdffg', '12121', 0, 'venta', 'PAALMAS 1', '2', '2', '1', 'No', '123X345', 130000, '$MEX', 'fotos/16/new.jpg', 'Michoacán', 0, 'VICTOR', '5578758354'),
(17, '2023-12-12', 'Paulina prueba', 'qwqwqw', 0, 'venta', 'PAALMAS 1', '2', '2', '1', 'No', '123X1245', 1300, '$MEX', 'fotos/17/new.jpg', 'Morelos', 0, 'pau', '5578758354');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id` int(11) NOT NULL,
  `nombre_tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
