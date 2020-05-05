-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2020 a las 15:44:55
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pde`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(7) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `nombre_tutor` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `fecha_nac` varchar(10) DEFAULT NULL,
  `lugar_nac` varchar(20) DEFAULT NULL,
  `curp` varchar(18) DEFAULT NULL,
  `domicilio` varchar(15) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `contraseña` varchar(8) DEFAULT NULL,
  `id_grupo` int(7) NOT NULL,
  `id_profesor` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_asignatura`
--

CREATE TABLE `alumno_asignatura` (
  `id_alumno` int(1) DEFAULT NULL,
  `id_asignatura` int(3) DEFAULT NULL,
  `calificacion` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno_asignatura`
--

INSERT INTO `alumno_asignatura` (`id_alumno`, `id_asignatura`, `calificacion`) VALUES
(1, 100, 90),
(1, 101, 80),
(1, 102, 98),
(1, 103, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id_asignatura` int(3) NOT NULL,
  `nombre` varchar(18) DEFAULT NULL,
  `id_profesor` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id_asignatura`, `nombre`, `id_profesor`) VALUES
(100, 'Español', NULL),
(101, 'Matemáticas', NULL),
(102, 'Ciencias Naturales', NULL),
(103, 'Civica y Ética', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(1) NOT NULL,
  `nombre_gpo` varchar(2) DEFAULT NULL,
  `aula` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `nombre_gpo`, `aula`) VALUES
(1, '1A', 1),
(2, '1B', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `id_maestro` int(1) NOT NULL,
  `nombre` varchar(6) DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(10) DEFAULT NULL,
  `fecha_ingreso` varchar(10) DEFAULT NULL,
  `clave` varchar(10) DEFAULT NULL,
  `curp` varchar(10) DEFAULT NULL,
  `rfc` varchar(10) DEFAULT NULL,
  `grado_estudios` varchar(10) DEFAULT NULL,
  `id_grupo` int(1) DEFAULT NULL,
  `contraseña` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `Id_Grupo` (`id_grupo`),
  ADD KEY `Id_profesor` (`id_profesor`);

--
-- Indices de la tabla `alumno_asignatura`
--
ALTER TABLE `alumno_asignatura`
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_Asignatura` (`id_asignatura`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id_asignatura`),
  ADD KEY `id_profesor` (`id_profesor`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`id_maestro`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id_asignatura` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id_maestro` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
