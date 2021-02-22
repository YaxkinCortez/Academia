-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2021 a las 05:09:20
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `num_control` varchar(100) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `contra` varchar(200) DEFAULT NULL,
  `telefono` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `semestre` varchar(10) NOT NULL,
  `carrera` int(11) NOT NULL,
  `grupo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`num_control`, `nombre`, `apellidos`, `contra`, `telefono`, `correo`, `semestre`, `carrera`, `grupo`) VALUES
('156P0398', 'YAXKIN MANUEL', 'CORTEZ VILLEGAS', '123', '', '', '11', 1, 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anteproyecto`
--

CREATE TABLE `anteproyecto` (
  `id_antp` int(10) NOT NULL,
  `alumno` varchar(200) DEFAULT NULL,
  `n_asesor` int(11) NOT NULL,
  `nombreA` varchar(200) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `ruta` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `peso` varchar(10) DEFAULT NULL,
  `empresa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `anteproyecto`
--

INSERT INTO `anteproyecto` (`id_antp`, `alumno`, `n_asesor`, `nombreA`, `descripcion`, `ruta`, `tipo`, `peso`, `empresa`) VALUES
(0, '156P0398', 1, 'Investigacion2_YaxkinManuelCortezVillegas.pdf', 'PRUEBA', '../upload/Investigac', 'application/pdf', '296888', 'IBM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `nombre_carrera`) VALUES
(1, 'ING. SISTEMAS COMPUTACIONALES'),
(2, 'ING. INDUSTRIAL'),
(3, 'ING. PETROLERA'),
(4, 'ING. MECATRONICA'),
(5, 'ING. ELECTROMECANICA'),
(6, 'ING. GESTION EMPRESARIAL'),
(7, 'ING. ELECTRONICA'),
(8, 'ING. NANOTECNOLOGIA'),
(9, 'ING. ENERGIAS RENOVABLES'),
(10, 'ING. GEOCIENCIAS'),
(11, 'LIC. CONTADOR PUBLICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_carrera`
--

CREATE TABLE `jefe_carrera` (
  `num_control` varchar(100) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `contra` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefe_carrera`
--

INSERT INTO `jefe_carrera` (`num_control`, `nombre`, `apellidos`, `contra`, `telefono`, `correo`) VALUES
('jefe', 'jefe', 'jefe', '123', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `justificantes`
--

CREATE TABLE `justificantes` (
  `id_justificante` int(10) NOT NULL,
  `alumno` varchar(100) NOT NULL,
  `fecha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `justificantes`
--

INSERT INTO `justificantes` (`id_justificante`, `alumno`, `fecha`) VALUES
(16, '156P0398', '11-01-2021');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `id_maestro` int(11) NOT NULL,
  `num_control` varchar(100) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `contra` varchar(200) DEFAULT NULL,
  `telefono` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id_maestro`, `num_control`, `nombre`, `apellidos`, `contra`, `telefono`, `correo`) VALUES
(1, 'ALMA', 'ALMA LILIA', 'GARCIA ALARCON', '123', '', ''),
(2, 'NANCY ', 'NANCY ADRIANA', 'SANTES BERNABé', '123', '', ''),
(3, 'JORGE', 'JORGE EDUARDO', 'CASTELLANOS GOMEZ', '123', '', ''),
(4, 'JUAN', 'JUAN DE DIOS ', 'PADRON HINOJOSA', '123', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`num_control`),
  ADD KEY `carrera` (`carrera`);

--
-- Indices de la tabla `anteproyecto`
--
ALTER TABLE `anteproyecto`
  ADD PRIMARY KEY (`id_antp`),
  ADD KEY `alumno` (`alumno`),
  ADD KEY `id_asesores` (`n_asesor`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `jefe_carrera`
--
ALTER TABLE `jefe_carrera`
  ADD PRIMARY KEY (`num_control`);

--
-- Indices de la tabla `justificantes`
--
ALTER TABLE `justificantes`
  ADD PRIMARY KEY (`id_justificante`),
  ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`id_maestro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `justificantes`
--
ALTER TABLE `justificantes`
  MODIFY `id_justificante` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`carrera`) REFERENCES `carrera` (`id_carrera`);

--
-- Filtros para la tabla `anteproyecto`
--
ALTER TABLE `anteproyecto`
  ADD CONSTRAINT `anteproyecto_ibfk_2` FOREIGN KEY (`alumno`) REFERENCES `alumnos` (`num_control`),
  ADD CONSTRAINT `anteproyecto_ibfk_3` FOREIGN KEY (`n_asesor`) REFERENCES `maestros` (`id_maestro`);

--
-- Filtros para la tabla `justificantes`
--
ALTER TABLE `justificantes`
  ADD CONSTRAINT `justificantes_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumnos` (`num_control`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
