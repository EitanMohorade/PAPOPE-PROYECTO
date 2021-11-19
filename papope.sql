-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2021 a las 17:56:03
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
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id_cuenta` int(11) NOT NULL,
  `tipo_id_cuenta` int(11) NOT NULL,
  `id_club` int(11) DEFAULT NULL,
  `nombre_cuenta` varchar(50) NOT NULL,
  `apellido_cuenta` varchar(50) NOT NULL,
  `contacto_cuenta` text NOT NULL,
  `password_cuenta` text NOT NULL,
  `telefono_cuenta` varchar(30) NOT NULL,
  `deleted_at_cuenta` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Estructura de tabla para la tabla `pedir_turno`
--

CREATE TABLE `pedir_turno` (
  `id_club` int(255) NOT NULL,
  `nombre_cuenta` varchar(255) NOT NULL,
  `dia_disponible` varchar(9) NOT NULL,
  `hora_entrada` time NOT NULL,
  `hora_salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedir_turno`
--

INSERT INTO `pedir_turno` (`id_club`, `nombre_cuenta`, `dia_disponible`, `hora_entrada`, `hora_salida`) VALUES
(1, 'papirulo', 'jueves', '01:00:00', '02:00:00'),
(1, 'papirulo', 'jueves', '15:00:00', '16:00:00'),
(1, 'papirulo', 'miercoles', '18:00:00', '19:00:00'),
(1, 'papirulo', 'miercoles', '03:00:00', '04:00:00'),
(2, 'ernesti', 'martes', '02:00:00', '03:00:00'),
(2, 'ernesti', 'martes', '13:00:00', '14:00:00'),
(2, 'ernesti', 'sabado', '17:00:00', '18:00:00'),
(2, 'ernesti', 'sabado', '06:00:00', '07:00:00');

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
-- Estructura de tabla para la tabla `tipo_cuentas`
--

CREATE TABLE `tipo_cuentas` (
  `tipo_id_cuenta` int(11) NOT NULL,
  `tipo_cuenta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_cuentas`
--

INSERT INTO `tipo_cuentas` (`tipo_id_cuenta`, `tipo_cuenta`) VALUES
(1, 'Usuario'),
(2, 'Club'),
(3, 'Admin');

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
  `turno_deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`turno_id`, `usuario_id`, `dia_turno`, `hora_turno`, `club_id`, `turno_deleted_at`) VALUES
(1, 2, '2021-11-17', '2021-11-15', 1, '0000-00-00'),
(2, 1, '2021-11-25', '2021-11-16', 2, '0000-00-00'),
(3, 1, '0000-00-00', '0000-00-00', 2, '0000-00-00'),
(4, 1, '0000-00-00', '0000-00-00', 2, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id_cuenta`);

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
-- Indices de la tabla `tipo_cuentas`
--
ALTER TABLE `tipo_cuentas`
  ADD PRIMARY KEY (`tipo_id_cuenta`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`turno_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id_cuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT de la tabla `tipo_cuentas`
--
ALTER TABLE `tipo_cuentas`
  MODIFY `tipo_id_cuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `turno_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
