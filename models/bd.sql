-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-08-2024 a las 10:46:53
-- Versión del servidor: 8.3.0
-- Versión de PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tubagua`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_clientes`
--

DROP TABLE IF EXISTS `form_clientes`;
CREATE TABLE IF NOT EXISTS `form_clientes` (
  `idform` int NOT NULL AUTO_INCREMENT COMMENT 'Correlativo de Formulario',
  `idCliente` int NOT NULL,
  `montoSolicitado` decimal(12,2) NOT NULL,
  `fechaSolicitud` date NOT NULL,
  `tipoFact` varchar(1) NOT NULL COMMENT 'N= Natural, J= Juridico',
  `nitCliente` varchar(15) NOT NULL,
  `dpiRepresentanteLegal` varchar(13) NOT NULL,
  `razonSocialCliente` varchar(100) NOT NULL,
  `nombreComercial` varchar(100) NOT NULL,
  `direccionCliente` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telefonoCliente` varchar(20) NOT NULL,
  `nombreRepre` varchar(100) NOT NULL,
  `direccionRepre` varchar(150) NOT NULL,
  `ciudadRepre` varchar(100) NOT NULL,
  `telefonoRepre` varchar(30) NOT NULL,
  `celularRepre` varchar(30) NOT NULL,
  `emailRepre` varchar(50) NOT NULL,
  `nombrePagos` varchar(100) NOT NULL,
  `telOficinaPagos` varchar(30) NOT NULL,
  `telParticularPagos` varchar(30) NOT NULL,
  `telCelularPagos` varchar(30) NOT NULL,
  `emailPagos` varchar(50) NOT NULL,
  `horarios` json NOT NULL,
  `localExterior` varchar(1) NOT NULL,
  `localSucursales` varchar(1) NOT NULL,
  `localCuantos` int NOT NULL,
  `ubicacionSucursales` varchar(256) NOT NULL,
  `noEmpleados` int NOT NULL,
  `referencias` json NOT NULL,
  `lugarAutorizacion` varchar(100) NOT NULL,
  `fechaAutorizacion` date NOT NULL,
  `Autorizado` varchar(1) NOT NULL,
  `firma` longtext NOT NULL,
  `ultimousuarioEdit` varchar(15) NOT NULL,
  `usuario_created` varchar(10) NOT NULL,
  `fecha_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idform`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `form_clientes`
--

INSERT INTO `form_clientes` (`idform`, `idCliente`, `montoSolicitado`, `fechaSolicitud`, `tipoFact`, `nitCliente`, `dpiRepresentanteLegal`, `razonSocialCliente`, `nombreComercial`, `direccionCliente`, `telefonoCliente`, `nombreRepre`, `direccionRepre`, `ciudadRepre`, `telefonoRepre`, `celularRepre`, `emailRepre`, `nombrePagos`, `telOficinaPagos`, `telParticularPagos`, `telCelularPagos`, `emailPagos`, `horarios`, `localExterior`, `localSucursales`, `localCuantos`, `ubicacionSucursales`, `noEmpleados`, `referencias`, `lugarAutorizacion`, `fechaAutorizacion`, `Autorizado`, `firma`, `ultimousuarioEdit`, `usuario_created`, `fecha_created`) VALUES
(1, 100, 100000.00, '0000-00-00', 'J', '789456-k', '1212 12451 23', 'GUATEVENTAS', 'GUATEVENTAS', 'GUATEMALA', '123', 'JUAN PEREZ', 'GUATEMALLA', 'CIUDAD GT', '7895464', '123123', 'correo@gmail.com', 'jaime po', '789', '456', '46', 'correo2@gmail.com', '{\"lunesa\": \"17:00\", \"juevesa\": \"17:00\", \"lunesde\": \"08:00\", \"martesa\": \"17:00\", \"sabadoa\": \"17:00\", \"domingoa\": \"17:00\", \"juevesde\": \"08:00\", \"martesde\": \"08:00\", \"sabadode\": \"08:00\", \"viernesa\": \"17:00\", \"domingode\": \"08:00\", \"viernesde\": \"08:00\", \"miercolesa\": \"17:00\", \"miercolesde\": \"08:00\"}', 'S', 'S', 10, '                   Guatemala', 100, '{\"cnt1\": \"NELSON\", \"cnt2\": \"Omar\", \"cnt3\": \"DSFA\", \"dir1\": \"TEMALA\", \"dir2\": \"ASDFA\", \"dir3\": \"12324\", \"emp1\": \"GYT\", \"emp2\": \"BAN\", \"emp3\": \"DSFAD\", \"tel1\": \"123\", \"tel2\": \"DSAFA\", \"tel3\": \"SFG15\", \"city1\": \"GUATE\", \"city2\": \"SDFA\", \"city3\": \"SS21\", \"email1\": \"556\", \"email2\": \"DSFMA\", \"email3\": \"1231\"}', '', '0000-00-00', '', '', '', 'nelson', '2024-08-13 00:57:19'),
(2, 100, 0.00, '0000-00-00', '', '28699068', '2757942610208', 'NELSON', 'BOCHE', 'GAUTEMALA', '56335908', '', '', '', '', '', '', '', '', '', '', '', 'null', '', '', 0, '', 0, 'null', '', '0000-00-00', '', '', '', 'nelson', '2024-08-13 01:13:00'),
(3, 9743, 0.00, '0000-00-00', '', '12345', 'JUAN PEREZ', 'COLOMBA', 'COMBA2', 'GUATEMALA', '0123123', '', '', '', '', '', '', '', '', '', '', '', 'null', '', '', 0, '', 0, 'null', '', '0000-00-00', '', '', '', '25', '2024-08-13 01:54:32'),
(4, 9743, 0.00, '0000-00-00', '', '1245-5', '78965212', 'COMERCIOS S.A.', 'COMERCIANTES', 'GUATEMALA', '45454545', '', '', '', '', '', '', '', '', '', '', '', 'null', '', '', 0, '', 0, 'null', '', '0000-00-00', '', '', '', '25', '2024-08-13 02:04:15'),
(5, 9743, 0.00, '0000-00-00', '', '1245-5', '78965212', 'COMERCIOS S.A.', 'COMERCIANTES', 'GUATEMALA', '45454545', '', '', '', '', '', '', '', '', '', '', '', 'null', '', '', 0, '', 0, 'null', '', '0000-00-00', '', '', '', '25', '2024-08-13 02:05:04'),
(6, 9743, 0.00, '0000-00-00', '', '1245-5', '78965212', 'COMERCIOS S.A.', 'COMERCIANTES', 'GUATEMALA', '45454545', '', '', '', '', '', '', '', '', '', '', '', 'null', '', '', 0, '', 0, 'null', '', '0000-00-00', '', '', '', '25', '2024-08-13 02:05:05'),
(7, 9743, 0.00, '0000-00-00', '', '45784-5', '5145121212', 'COMERCIOS, S.A.', 'COMERCIANTES ', 'GUATEMALA', '54545454', '', '', '', '', '', '', '', '', '', '', '', 'null', '', '', 0, '', 0, 'null', '', '0000-00-00', '', '', '', '25', '2024-08-13 02:05:38'),
(8, 9743, 0.00, '0000-00-00', '', '7845-8', '545454', 'NELSON ', 'BOHCE', 'SA', 'AAAA123', '', '', '', '', '', '', '', '', '', '', '', 'null', '', '', 0, '', 0, 'null', '', '0000-00-00', '', '', '', '25', '2024-08-13 02:08:38'),
(9, 9743, 1000000.00, '2024-08-01', 'J', '7878-8', '89898989', '9898989', '98989', '898', '77', '', '', '', '', '', '', '', '', '', '', '', 'null', '', '', 0, '', 0, 'null', '', '0000-00-00', '', '', '', '25', '2024-08-13 02:16:20'),
(10, 9743, 15.00, '2024-08-01', '', '1', '2', 'nueva', 'vuela', 'guate', 'aaa', '', '', '', '', '', '', '', '', '', '', '', 'null', '', '', 0, '', 0, 'null', '', '0000-00-00', '', '', '', '25', '2024-08-13 12:43:48'),
(11, 9743, 600.00, '2020-08-30', 'N', '78451-5', '6532 324512 ', 'COMPRAS DE GUATEMALA', 'COMGUA', 'GUATEMALA', '12356', '', '', '', '', '', '', '', '', '', '', '', 'null', '', '', 0, '', 0, 'null', '', '0000-00-00', '', '', '', '25', '2024-08-13 21:28:11'),
(12, 9743, 150000.00, '2024-08-01', 'J', '124525-k', '456101234502', 'EMPRESA SOCIEDAD ANONIMA', 'EMPRESA X', 'GUATEMAL', '45784512', '', '', '', '', '', '', '', '', '', '', '', 'null', '', '', 0, '', 0, 'null', '', '0000-00-00', '', '', '', '25', '2024-08-14 19:25:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
