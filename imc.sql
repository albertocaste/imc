-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 03-07-2017 a las 21:39:39
-- Versión del servidor: 5.6.34
-- Versión de PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `imc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `ID` int(11) NOT NULL,
  `MIN` text COLLATE utf8_spanish_ci NOT NULL,
  `MAX` text COLLATE utf8_spanish_ci NOT NULL,
  `RESULTADO` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`ID`, `MIN`, `MAX`, `RESULTADO`) VALUES
(1, '0.00', '18.50', 'Infrapeso'),
(2, '18.50', '25.00', 'Peso Normal'),
(3, '25.00', '30.00', 'Sobrepeso'),
(4, '30.00', '35.00', 'Obesidad Leve'),
(5, '35.00', '40.00', 'Obesidad Media'),
(6, '40.00', '100.00', 'Obesidad Mórbida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `FECHA` text COLLATE utf8_spanish_ci NOT NULL,
  `SEXO` text COLLATE utf8_spanish_ci NOT NULL,
  `EDAD` text COLLATE utf8_spanish_ci NOT NULL,
  `ALTURA` text COLLATE utf8_spanish_ci NOT NULL,
  `IMC` text COLLATE utf8_spanish_ci NOT NULL,
  `RESULTADO` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `FECHA`, `SEXO`, `EDAD`, `ALTURA`, `IMC`, `RESULTADO`) VALUES
(1, '22:14:45 02/07/2017', 'hombre', '20', '150', '26.67', 'Sobrepeso'),
(2, '22:24:51 02/07/2017', 'hombre', '25', '160', '27.34', 'Sobrepeso'),
(3, '23:19:44 02/07/2017', 'mujer', '35', '150', '20.44', 'Peso Normal'),
(4, '00:15:55 03/07/2017', 'mujer', '26', '196', '13.8', 'Infrapeso'),
(5, '00:16:27 03/07/2017', 'mujer', '26', '196', '13.8', 'Infrapeso'),
(6, '00:17:24 03/07/2017', 'mujer', '26', '196', '13.8', 'Infrapeso'),
(7, '00:19:52 03/07/2017', 'mujer', '26', '196', '13.8', 'Infrapeso'),
(8, '00:21:10 03/07/2017', 'mujer', '26', '196', '13.8', 'Infrapeso'),
(9, '00:22:25 03/07/2017', 'mujer', '26', '196', '13.8', 'Infrapeso'),
(10, '00:22:52 03/07/2017', 'mujer', '26', '196', '13.8', 'Infrapeso'),
(11, '00:23:24 03/07/2017', 'mujer', '26', '196', '13.8', 'Infrapeso'),
(12, '00:23:37 03/07/2017', 'mujer', '26', '196', '13.8', 'Infrapeso'),
(13, '00:24:11 03/07/2017', 'mujer', '26', '196', '13.8', 'Infrapeso'),
(14, '19:25:25 03/07/2017', 'hombre', '56', '160', '39.06', 'Obesidad Media'),
(15, '19:26:20 03/07/2017', 'hombre', '89', '150', '26.67', 'Sobrepeso'),
(16, '20:08:21 03/07/2017', 'hombre', '52', '180', '15.43', 'Infrapeso'),
(17, '20:09:02 03/07/2017', 'hombre', '40', '150', '8.89', 'Infrapeso'),
(18, '20:27:18 03/07/2017', 'hombre', '30', '184', '22.15', 'Peso Normal'),
(19, '20:34:20 03/07/2017', 'hombre', '68', '160', '34.77', 'Obesidad Leve'),
(20, '20:34:41 03/07/2017', 'hombre', '56', '150', '28.89', 'Sobrepeso'),
(21, '20:35:02 03/07/2017', 'mujer', '45', '167', '23.31', 'Peso Normal'),
(22, '20:35:54 03/07/2017', 'hombre', '14', '180', '20.68', 'Peso Normal'),
(23, '20:36:04 03/07/2017', 'mujer', '55', '190', '22.16', 'Peso Normal'),
(26, '20:37:41 03/07/2017', 'mujer', '26', '170', '23.88', 'Peso Normal'),
(27, '20:37:54 03/07/2017', 'hombre', '60', '175', '27.76', 'Sobrepeso'),
(28, '20:38:09 03/07/2017', 'hombre', '19', '150', '37.78', 'Obesidad Media'),
(29, '20:38:22 03/07/2017', 'mujer', '64', '168', '35.43', 'Obesidad Media'),
(30, '20:38:34 03/07/2017', 'mujer', '42', '165', '55.1', 'Obesidad Mórbida'),
(31, '20:38:48 03/07/2017', 'hombre', '65', '180', '29.94', 'Sobrepeso'),
(32, '20:39:10 03/07/2017', 'hombre', '101', '178', '50.5', 'Obesidad Mórbida'),
(33, '20:39:23 03/07/2017', 'hombre', '26', '180', '13.89', 'Infrapeso'),
(34, '20:39:47 03/07/2017', 'mujer', '45', '199', '5.05', 'Infrapeso'),
(35, '20:40:04 03/07/2017', 'hombre', '200', '198', '17.09', 'Infrapeso'),
(36, '20:40:19 03/07/2017', 'hombre', '17', '158', '35.25', 'Obesidad Media'),
(37, '20:40:34 03/07/2017', 'mujer', '67', '182', '32', 'Obesidad Leve'),
(38, '20:40:53 03/07/2017', 'mujer', '78', '197', '30.92', 'Obesidad Leve'),
(39, '20:41:11 03/07/2017', 'hombre', '38', '167', '61.67', 'Obesidad Mórbida'),
(40, '20:41:27 03/07/2017', 'mujer', '22', '189', '21', 'Peso Normal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;