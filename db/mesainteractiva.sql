-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-02-2019 a las 21:49:43
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

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

DROP TABLE IF EXISTS `celular`;
CREATE TABLE IF NOT EXISTS `celular` (
  `idCelular` int(11) NOT NULL,
  `Marca` varchar(100) NOT NULL,
  `Modelo` varchar(100) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Descripcion` varchar(300) NOT NULL,
  `Camara` varchar(100) NOT NULL,
  `Memoria_Ram` varchar(100) NOT NULL,
  `Almacenamiento` varchar(50) NOT NULL,
  `SistemaOperativo` varchar(100) NOT NULL,
  `Extras` varchar(150) NOT NULL,
  `rutaImagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `celular`
--

INSERT INTO `celular` (`idCelular`, `Marca`, `Modelo`, `Precio`, `Descripcion`, `Camara`, `Memoria_Ram`, `Almacenamiento`, `SistemaOperativo`, `Extras`, `rutaImagen`) VALUES
(765893477, 'Motorola', 'Moto E4', 2500, 'Pantalla 5 Pulgadas\r\nColor Negro\r\n', '8 Mpx', '2GB', '316GB', 'Android', 'Lector de huellas\r\nAudifonos', 'motoroloa.jpg'),
(794322444, 'Apple', 'iphone8(T4)', 17000, 'Color oro,plata,gris especial', '12 MP', '256 GB', '64 GB', 'iOS', 'Chip A11 Bionic\r\nsensor de huellas digitales ', 'iphone.jpg'),
(847456033, 'Huawei', 'Huawei Y7', 40000, 'Pantalla 5,99 pulgadas\r\nProcesador octa-core 1.4 GHZ', '13 MP', '2 GB', '16B+MicroSD', 'Android', 'Lector de huellas\r\ncamara frontal 8 MP', 'huawei.jpg'),
(765452424, 'LG', 'LG G7', 3500, 'Pantalla IPS 6 pulgadas\r\nProcesador Snapdragon 845\r\n', '8 MP', '4 GB', '64 GB', 'Android', 'Sensor de huellas\r\nSonido Boombox\r\n', 'lg.jpg'),
(673645067, 'Samsung ', 'Galaxy S9', 11499, 'Pantalla 5.8 pulgadas', '12 MP', '4GB', '64GB', 'Android Oreo', 'Camara frontal 8MP', 'sam.jpg'),
(846408332, 'Huawei', 'Huawei P20', 7000, 'Pantalla 5,84 pulgadas\r\nProcesador Huawei Kirin 970', '20 MPX', '4 GB', '128 GB', 'Android Oreo 8.1', 'Camara frontal 24 MPX', 'And.jpg'),
(568923354, 'Motorola', 'One', 6700, 'Pantalla HD 5.86', '12 MPX', '4 GB', '64 GB', 'Android', 'Lector de huellas \r\nAudifonos ', 'motoOne.jpg'),
(234394848, 'Apple', 'iPhone XS', 28000, 'OLED 5,8 pulga', '12+12 MPX', '4GB', '64/256/512 GB', 'iOS12', 'Face ID\r\nResistencia al agua\r\n3D Touch\r\n', 'xs.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
