-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2020 a las 06:03:30
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
  `id_alumno` int(1) NOT NULL,
  `nombre` varchar(7) DEFAULT NULL,
  `a_paterno` varchar(5) DEFAULT NULL,
  `a_materno` varchar(7) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `lugar_nac` varchar(9) DEFAULT NULL,
  `curp` varchar(18) DEFAULT NULL,
  `domicilio` varchar(15) DEFAULT NULL,
  `telefono` int(8) DEFAULT NULL,
  `id_grupo` int(1) DEFAULT NULL,
  `id_profesor` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nombre`, `a_paterno`, `a_materno`, `sexo`, `fecha_nac`, `lugar_nac`, `curp`, `domicilio`, `telefono`, `id_grupo`, `id_profesor`) VALUES
(0, '', '', '', '', '0000-00-00', '', '', '', 0, NULL, NULL),
(1, 'Eduardo', 'Reyna', 'Villela', 'M', '0000-00-00', 'Monterrey', 'REVE001019HNLYLDA2', 'Paraje San José', 81243469, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_asignatura`
--

CREATE TABLE `alumno_asignatura` (
  `Id_Alumno` int(1) DEFAULT NULL,
  `Id_Asignatura` int(3) DEFAULT NULL,
  `Calificacion` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno_asignatura`
--

INSERT INTO `alumno_asignatura` (`Id_Alumno`, `Id_Asignatura`, `Calificacion`) VALUES
(1, 100, 90),
(1, 101, 80),
(1, 102, 98),
(1, 103, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `Id_Asignatura` int(3) NOT NULL,
  `Nombre` varchar(18) DEFAULT NULL,
  `Id_profesor` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`Id_Asignatura`, `Nombre`, `Id_profesor`) VALUES
(100, 'Español', NULL),
(101, 'Matemáticas', NULL),
(102, 'Ciencias Naturales', NULL),
(103, 'Civica y Ética', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `Id_Grupo` int(1) NOT NULL,
  `Nombre_Gpo` varchar(2) DEFAULT NULL,
  `Aula` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`Id_Grupo`, `Nombre_Gpo`, `Aula`) VALUES
(1, '1A', 1),
(2, '1B', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `Id_profesor` int(1) NOT NULL,
  `Nombre` varchar(6) DEFAULT NULL,
  `A_Paterno` varchar(7) DEFAULT NULL,
  `A_Materno` varchar(6) DEFAULT NULL,
  `Domicilio` varchar(10) DEFAULT NULL,
  `CP` varchar(10) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `Celular` varchar(10) DEFAULT NULL,
  `Correo` varchar(10) DEFAULT NULL,
  `Fecha_Ingreso_SEP` varchar(10) DEFAULT NULL,
  `Fecha_Ingreso_Zona` varchar(10) DEFAULT NULL,
  `Fecha_Ingreso_Escuela` varchar(10) DEFAULT NULL,
  `Clave` varchar(10) DEFAULT NULL,
  `CURP` varchar(10) DEFAULT NULL,
  `RFC` varchar(10) DEFAULT NULL,
  `Grado_Estudios` varchar(10) DEFAULT NULL,
  `Id_Grupo` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`Id_profesor`, `Nombre`, `A_Paterno`, `A_Materno`, `Domicilio`, `CP`, `Telefono`, `Celular`, `Correo`, `Fecha_Ingreso_SEP`, `Fecha_Ingreso_Zona`, `Fecha_Ingreso_Escuela`, `Clave`, `CURP`, `RFC`, `Grado_Estudios`, `Id_Grupo`) VALUES
(1, 'Héctor', 'Treviño', 'Castro', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '', 1),
(2, 'Pedro', 'Guerra', 'Leal', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '', 2);

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
  ADD KEY `Id_Alumno` (`Id_Alumno`),
  ADD KEY `Id_Asignatura` (`Id_Asignatura`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`Id_Asignatura`),
  ADD KEY `Id_profesor` (`Id_profesor`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`Id_Grupo`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`Id_profesor`),
  ADD KEY `Id_Grupo` (`Id_Grupo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`Id_Grupo`) REFERENCES `grupo` (`Id_Grupo`);

--
-- Filtros para la tabla `alumno_asignatura`
--
ALTER TABLE `alumno_asignatura`
  ADD CONSTRAINT `alumno_asignatura_ibfk_1` FOREIGN KEY (`Id_Alumno`) REFERENCES `alumno` (`Id_Alumno`),
  ADD CONSTRAINT `alumno_asignatura_ibfk_2` FOREIGN KEY (`Id_Asignatura`) REFERENCES `asignatura` (`Id_Asignatura`);

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`Id_profesor`) REFERENCES `profesor` (`Id_profesor`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`Id_Grupo`) REFERENCES `profesor` (`Id_Grupo`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`Id_Grupo`) REFERENCES `grupo` (`Id_Grupo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
