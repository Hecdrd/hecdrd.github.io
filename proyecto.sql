-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-08-2024 a las 22:58:49
-- Versión del servidor: 8.3.0
-- Versión de PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hecdd`
--

DROP TABLE IF EXISTS `hecdd`;
CREATE TABLE IF NOT EXISTS `hecdd` (
  `Codigo` varchar(3) COLLATE utf8mb4_0900_as_ci NOT NULL,
  `Nombre` varchar(30) COLLATE utf8mb4_0900_as_ci DEFAULT NULL,
  `Precio_Unitario` int DEFAULT NULL,
  `Vendidos` int DEFAULT NULL,
  `En_Bodega` int DEFAULT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_as_ci;

--
-- Volcado de datos para la tabla `hecdd`
--

INSERT INTO `hecdd` (`Codigo`, `Nombre`, `Precio_Unitario`, `Vendidos`, `En_Bodega`) VALUES
('A01', 'Pepsi', 20, 0, 5),
('A02', 'Coca', 200, 0, 1),
('A03', 'Fanta', 20, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrar`
--

DROP TABLE IF EXISTS `registrar`;
CREATE TABLE IF NOT EXISTS `registrar` (
  `nombre` varchar(20) COLLATE utf8mb4_0900_as_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_0900_as_ci NOT NULL,
  `contraseña` varchar(30) COLLATE utf8mb4_0900_as_ci NOT NULL,
  `Reescribir` varchar(30) COLLATE utf8mb4_0900_as_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_as_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(20) COLLATE utf8mb4_0900_as_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_0900_as_ci NOT NULL,
  `contraseña` varchar(50) COLLATE utf8mb4_0900_as_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_as_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `nombre`, `contraseña`) VALUES
('Hecdd', 'Hector', 'LALALA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
