-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3310
-- Tiempo de generación: 23-01-2020 a las 16:00:14
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdamortizacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblamortizacion`
--

CREATE TABLE `tblamortizacion` (
  `id_Amortizacion` int(11) NOT NULL,
  `Precio` double NOT NULL,
  `Interes` double NOT NULL,
  `Plazo` double NOT NULL,
  `id_Cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblamortizacion`
--

INSERT INTO `tblamortizacion` (`id_Amortizacion`, `Precio`, `Interes`, `Plazo`, `id_Cliente`) VALUES
(1, 700000, 0.5, 12, 2),
(2, 400000, 0.1, 12, 3),
(3, 400000, 0.1, 12, 3),
(4, 400000, 0.1, 12, 3),
(5, 700000, 0.5, 12, 1),
(6, 400000, 0.6, 24, 1),
(7, 400000, 0.6, 24, 1),
(8, 400000, 0.6, 24, 1),
(9, 400000, 0.6, 24, 1),
(10, 400000, 1.4, 12, 2),
(11, -0.00000000072759576141834, 0.5, 12, 2),
(12, 3.6732059679925, 0.5, 48, 1),
(13, 88888888, 2, 36, 1),
(14, 55555555, 1.5, 48, 1),
(15, 12000, 0.5, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcliente`
--

CREATE TABLE `tblcliente` (
  `id_Cliente` int(11) NOT NULL,
  `Nombre` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblcliente`
--

INSERT INTO `tblcliente` (`id_Cliente`, `Nombre`) VALUES
(1, 'Carlos Daniel Lorenzo'),
(2, 'Luis Sanchez Martinez'),
(3, 'Jairo Medina Vite'),
(4, 'Uriel Lara Ruano'),
(5, 'Ricardo Garcia Hernandez'),
(6, 'Lazaro Ruano Camargo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblamortizacion`
--
ALTER TABLE `tblamortizacion`
  ADD PRIMARY KEY (`id_Amortizacion`),
  ADD KEY `id_Cliente` (`id_Cliente`);

--
-- Indices de la tabla `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD PRIMARY KEY (`id_Cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblamortizacion`
--
ALTER TABLE `tblamortizacion`
  MODIFY `id_Amortizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tblcliente`
--
ALTER TABLE `tblcliente`
  MODIFY `id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblamortizacion`
--
ALTER TABLE `tblamortizacion`
  ADD CONSTRAINT `tblamortizacion_ibfk_1` FOREIGN KEY (`id_Cliente`) REFERENCES `tblcliente` (`id_Cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
