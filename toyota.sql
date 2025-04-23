-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2025 a las 06:03:31
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `toyota`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `Nombre` text NOT NULL,
  `Direccion` text NOT NULL,
  `Telefono` varchar(11) NOT NULL,
  `Email` text NOT NULL,
  `NIT` varchar(15) NOT NULL,
  `Propietario` text NOT NULL,
  `Horarios` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregas`
--

CREATE TABLE `entregas` (
  `Producto` text NOT NULL,
  `Cantidad` int(4) NOT NULL,
  `Fecha_Entrega` varchar(20) NOT NULL,
  `Direccion` text NOT NULL,
  `Condicion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `Marca` text NOT NULL,
  `Modelo` text NOT NULL,
  `Fecha` varchar(20) NOT NULL,
  `Precio` varchar(15) NOT NULL,
  `Codigo` varchar(15) NOT NULL,
  `Cantidad` int(4) NOT NULL,
  `Proveedor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `Producto` text NOT NULL,
  `Cantidad` int(4) NOT NULL,
  `Fecha_Pedido` varchar(20) NOT NULL,
  `Fecha_Entrega` varchar(20) NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Nombre` text NOT NULL,
  `Direccion` text NOT NULL,
  `Telefono` varchar(11) NOT NULL,
  `NIT` varchar(15) NOT NULL,
  `Email` text NOT NULL,
  `Producto` text NOT NULL,
  `Calificacion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
