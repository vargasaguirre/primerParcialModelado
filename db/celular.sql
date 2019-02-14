-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2019 a las 19:22:43
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `MesaInteractiva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celular`
--

CREATE TABLE `celular` (
  `idCelular` int(11) NOT NULL,
  `Marca` varchar(100) NOT NULL,
  `Modelo` varchar(100) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Descripcion` varchar(300) NOT NULL,
  `Camara` varchar(100) NOT NULL,
  `Memoria_Ram` varchar(100) NOT NULL,
  `Almacenamiento` int(11) NOT NULL,
  `SistemaOperativo` varchar(100) NOT NULL,
  `Extras` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `celular`
--
ALTER TABLE `celular`
  ADD PRIMARY KEY (`idCelular`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
