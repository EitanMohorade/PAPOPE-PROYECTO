-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2021 a las 17:39:40
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `papope`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `nombre_adm` varchar(50) NOT NULL,
  `apellido_adm` varchar(50) NOT NULL,
  `email_adm` text NOT NULL,
  `password_adm` text NOT NULL,
  `telefono_adm` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`admin_id`, `nombre_adm`, `apellido_adm`, `email_adm`, `password_adm`, `telefono_adm`) VALUES
(1, 'rodrigo', 'gonzales', 'rodrigonzales@gmail.com', 'rodri123', 1161439168),
(2, 'natalia', 'ameksanova', 'natalita@gmail.com', 'lanatalia', 1178356187);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clubs`
--

CREATE TABLE `clubs` (
  `club_id` int(100) NOT NULL,
  `info_contacto` varchar(100) NOT NULL,
  `nombre_club` varchar(100) NOT NULL,
  `password_club` text NOT NULL,
  `club_deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clubs`
--

INSERT INTO `clubs` (`club_id`, `info_contacto`, `nombre_club`, `password_club`, `club_deleted_at`) VALUES
(1, 'lolazo@gmail.com', 'Lol', '12345', '0000-00-00'),
(2, 'bolivar.master1814@gmail.com', 'HailBolivar', '12333', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportes`
--

CREATE TABLE `deportes` (
  `deporte_id` int(100) NOT NULL,
  `deporte` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `deportes`
--

INSERT INTO `deportes` (`deporte_id`, `deporte`) VALUES
(1, 'voley'),
(2, 'basquet'),
(3, 'futbol'),
(4, 'futsal'),
(5, 'pingpong'),
(6, 'tenis'),
(7, 'golf'),
(8, 'cricket'),
(9, 'boxeo'),
(10, 'natacion'),
(11, 'handball'),
(12, 'hockey');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `sede_id` int(50) NOT NULL,
  `club_id` int(50) NOT NULL,
  `dias_habiles` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `horario` time NOT NULL,
  `sede_telefono` int(100) NOT NULL,
  `deporte_id` int(150) NOT NULL,
  `sede_deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`sede_id`, `club_id`, `dias_habiles`, `localidad`, `horario`, `sede_telefono`, `deporte_id`, `sede_deleted_at`) VALUES
(1, 1, 'viernes lunes', 'caba', '00:00:00', 1176439501, 4, '0000-00-00'),
(2, 1, 'lunes viernes', 'moreno', '10:00:00', 1184635170, 1, '0000-00-00'),
(3, 2, 'jueves sabado', 'matanza', '15:00:00', 1146090193, 8, '0000-00-00'),
(4, 2, 'viernes martes', 'merlo', '20:00:00', 1198140619, 12, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `turno_id` int(100) NOT NULL,
  `usuario_id` int(100) NOT NULL,
  `dia_turno` date NOT NULL,
  `hora_turno` date NOT NULL,
  `club_id` int(100) NOT NULL,
  `turno_deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`turno_id`, `usuario_id`, `dia_turno`, `hora_turno`, `club_id`, `turno_deleted_at`) VALUES
(1, 2, '2021-11-17', '2021-11-15', 1, '0000-00-00'),
(2, 1, '2021-11-25', '2021-11-16', 2, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(100) NOT NULL,
  `nombre_usuario` tinytext NOT NULL,
  `apellido_usuario` tinytext NOT NULL,
  `email_usuario` text NOT NULL,
  `password_usuario` varchar(100) NOT NULL,
  `telefono_usuario` int(11) NOT NULL,
  `usuario_deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nombre_usuario`, `apellido_usuario`, `email_usuario`, `password_usuario`, `telefono_usuario`, `usuario_deleted_at`) VALUES
(1, 'marcelo', 'marcelinal', 'caca@gmail.com', '123', 412142, '0000-00-00'),
(2, 'Fede', 'Delga', 'fedelva8@gmail.com', 'caquita123', 2147483647, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indices de la tabla `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`club_id`);

--
-- Indices de la tabla `deportes`
--
ALTER TABLE `deportes`
  ADD PRIMARY KEY (`deporte_id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`sede_id`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`turno_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clubs`
--
ALTER TABLE `clubs`
  MODIFY `club_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `deportes`
--
ALTER TABLE `deportes`
  MODIFY `deporte_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `sede_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `turno_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
