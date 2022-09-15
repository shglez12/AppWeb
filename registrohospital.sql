-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2022 a las 19:27:02
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registrohospital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_pacientes`
--

DROP TABLE IF EXISTS `datos_pacientes`;

CREATE TABLE `datos_pacientes` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `edad` int(2) NOT NULL,
  `especialidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_pacientes`
--

INSERT INTO `datos_pacientes` (`id`, `nombre`, `apellidos`, `sexo`, `edad`, `especialidad`) VALUES
(9, 'Mariel', 'Camacho', 'Femenino', 8, 'Pediatría'),
(11, 'Daniel', 'Arzate', 'Masculino', 24, 'Neurología'),
(13, 'Ximena', 'Camacho', 'Femenino', 7, 'Pediatría'),
(14, 'Fernanda', 'Torres', 'Femenino', 26, 'Obstetricia'),
(15, 'Gerardo', 'Gómez', 'Masculino', 19, 'Medicina Preventiva'),
(16, 'Liliana', 'Castro', 'Femenino', 45, 'Endocrinología'),
(17, 'Janeth', 'Pedroza', 'Femenino', 47, 'Oftalmología'),
(18, 'Miguel', 'Hernández', 'Masculino', 50, 'Medicina Preventiva');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_pacientes`
--
ALTER TABLE `datos_pacientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_pacientes`
--
ALTER TABLE `datos_pacientes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
