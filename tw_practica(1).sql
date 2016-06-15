-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-06-2016 a las 17:21:20
-- Versión del servidor: 5.7.11-log
-- Versión de PHP: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tw_practica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aa`
--

CREATE TABLE `aa` (
  `nombre` varchar(30) DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aaaa00m`
--

CREATE TABLE `aaaa00m` (
  `nombre` varchar(30) DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aaaa00q`
--

CREATE TABLE `aaaa00q` (
  `nombre` varchar(30) DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aaaa00q`
--

INSERT INTO `aaaa00q` (`nombre`, `dni`) VALUES
('Gines', '26501500A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombre`
--

CREATE TABLE `nombre` (
  `nombre` varchar(30) DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pijo`
--

CREATE TABLE `pijo` (
  `nombre` varchar(30) DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL,
  `cod` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pijo`
--

INSERT INTO `pijo` (`nombre`, `dni`, `cod`) VALUES
('Gines', '26501500A', ''),
('a', '26501500B', '648d5745'),
('Gines', 'sda', '67c5'),
('alf', 'alfffff', 'a8ab'),
('prueba', 'aa56', '6d6a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ppooll`
--

CREATE TABLE `ppooll` (
  `nombre` varchar(30) DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ppooll`
--

INSERT INTO `ppooll` (`nombre`, `dni`) VALUES
('pep', '26501500A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `nombre` varchar(30) DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL,
  `codigo` varchar(4) DEFAULT NULL,
  `OrderDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `OrderId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos_activos`
--

CREATE TABLE `recursos_activos` (
  `nombre` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `id` varchar(10) NOT NULL,
  `despacho` varchar(20) NOT NULL,
  `id_prof` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recursos_activos`
--

INSERT INTO `recursos_activos` (`nombre`, `fecha`, `hora_inicio`, `hora_fin`, `id`, `despacho`, `id_prof`) VALUES
('prueba', '2016-06-23', '15:00:00', '00:00:00', '', '', ''),
('nombre', '2016-06-16', '17:00:00', '21:00:00', 'AAAA', 'A49-4', ''),
('hola', '2016-06-15', '17:00:00', '21:00:00', 'AAAA00M', 'A49-4', ''),
('hola', '2016-06-15', '12:50:00', '04:00:00', 'AAAA00Q', 'B47-3', 'ADMIN'),
('nombre', '2016-06-15', '17:00:00', '21:00:00', 'BBB', 'A49-4', ''),
('hola', '2016-06-16', '12:00:00', '00:00:00', 'PIJO', 'A49-4', 'ADMIN'),
('ppppp', '2016-06-18', '08:15:00', '15:10:00', 'PPOOLL', 'P78-1', 'PPLL38E'),
('qwerty', '2016-06-15', '17:00:00', '00:00:00', 'prueba', 'B47-3', 'ADMIN'),
('prueba', '2016-06-23', '15:00:00', '00:00:00', 'qwerty', '', ''),
('ejemplo de tw', '2016-06-15', '12:00:00', '19:00:00', 'twex', 'A49-4', 'ADMIN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tw`
--

CREATE TABLE `tw` (
  `nombre` varchar(30) DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `twex`
--

CREATE TABLE `twex` (
  `nombre` varchar(30) DEFAULT NULL,
  `dni` varchar(9) DEFAULT NULL,
  `codigo` varchar(4) DEFAULT NULL,
  `OrderDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `twex`
--

INSERT INTO `twex` (`nombre`, `dni`, `codigo`, `OrderDate`) VALUES
('Gines', '26501500A', '901c', '2016-06-15 09:22:11'),
('aa', 'asdfsfd', 'b6b3', '2016-06-15 09:25:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `priv_admin` tinyint(1) NOT NULL,
  `user` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellidos`, `dni`, `correo`, `priv_admin`, `user`, `passwd`, `id`) VALUES
('admin', 'admin', '', '', 1, 'admin', 'admin', 'ADMIN'),
('prueba', 'prueba', '26477438E', 'a@a.com', 0, 'PPLL38E', '123456OLAa', 'PPLL38E'),
('Gines', 'Navarrete Campos', '26501500A', 'gines13310@gmail.com', 1, 'GNCA00A', '1667aa41', 'GNCA00A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `recursos_activos`
--
ALTER TABLE `recursos_activos`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `id` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
