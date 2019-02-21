-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2019 a las 02:44:05
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mesainteractiva`
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
  `Extras` varchar(150) NOT NULL,
  `rutaImagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `celular`
--

INSERT INTO `celular` (`idCelular`, `Marca`, `Modelo`, `Precio`, `Descripcion`, `Camara`, `Memoria_Ram`, `Almacenamiento`, `SistemaOperativo`, `Extras`, `rutaImagen`) VALUES
(0, 'Motorola', 'Moto E4', 2500, 'Pantalla de 5 Pulgadas, Color Negro', '8 Mpx', '2GB', 316, 'Android', 'Lector de huellas,Audifonos', 'motoroloa.jpg'),
(1, 'Apple', 'iphone8(T4)', 17000, 'Color oro,plata,gris especial', '12 MP', '256 GB', 64, 'iOS', 'Chip A11 Bionic, sensor de huellas digitales ', 'iphone.jpg'),
(2, 'Huawei', 'Huawei Y7', 40000, 'Pantalla 5,99 pulgadas, Procesador octa-core 1.4 GHZ', '13 MP', '2 GB', 16, 'Android', 'Lector de huellas, camara frontal 8 MP', 'huawei.jpg'),
(3, 'LG', 'LG G7', 3500, 'Pantalla IPS 6 pulgadas,Procesador Snapdragon 845', '8 MP', '4 GB', 64, 'Android', 'Sensor de huellas, Sonido Boombox', 'lg.jpg'),
(4, 'Samsung ', 'Galaxy S9', 11499, 'Pantalla 5.8 pulgadas', '12 MP', '4GB', 64, 'Android Oreo', 'Camara frontal 8MP', 'sam.jpg'),
(5, 'Huawei', 'Huawei P20', 7000, 'Pantalla 5,84 pulgadas, Procesador Huawei Kirin 970', '20 MPX', '4 GB', 128, 'Android Oreo 8.1', 'Camara frontal 24 MPX', 'And.jpg'),
(6, 'Motorola', 'One', 6700, 'Pantalla HD 5.86', '12 MPX', '4 GB', 64, 'Android', 'Lector de huellas, Audifonos ', 'motoOne.png'),
(7, 'Apple', 'iPhone XS', 28000, 'OLED 5,8 pulga', '12+12 MPX', '4GB', 64, 'iOS12', 'Face ID, Resistencia al agua, 3D Touch', 'xs.png');

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
