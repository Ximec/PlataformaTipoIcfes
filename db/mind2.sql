-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2021 a las 21:14:55
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mind2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `tipoUsuario` varchar(5) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `fechaDeRegistro` datetime DEFAULT NULL,
  `fechaDeActualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `usuario`, `nombre`, `apellido`, `password`, `tipoUsuario`, `estado`, `fechaDeRegistro`, `fechaDeActualizacion`) VALUES
(3, 'xime', 'ximena', 'campo', '$2y$10$QkERtEGRJvjxg8DHQpUtQ.ueolf6bYkitSyxtpdW5D59KtV2Ym52a', 'alumn', '1', '2021-11-19 00:00:00', NULL),
(4, 'prueba1', 'prueba', 'pruebaape', '$2y$09$uC4xm6JasSjFyX1Uq4jMIujiZZy6FYY5Yf6Co0TT4DDDPvgWpZDuq', 'alumn', '1', '2021-11-19 00:00:00', NULL),
(5, 'prueba22', 'pepito', 'perez', '$2y$09$dJb.frLDcAl/krImBCGAEOj9ehFUt7mKQR93PLYIQf4Q68ZJ8a.vW', 'alumn', '1', '2021-11-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion_de_examen`
--

CREATE TABLE `configuracion_de_examen` (
  `configEx_id` int(11) NOT NULL,
  `configEx_examen` int(11) DEFAULT NULL,
  `configEx_horaDeAplicacion` time DEFAULT NULL,
  `configEx_fechaDeAplicacion` date DEFAULT NULL,
  `configEx_horaDeExpiracion` time DEFAULT NULL,
  `configEx_fechaDeExpiracion` date DEFAULT NULL,
  `configEx_tiempoLimite` time DEFAULT NULL,
  `configEx_promMin` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `configuracion_de_examen`
--

INSERT INTO `configuracion_de_examen` (`configEx_id`, `configEx_examen`, `configEx_horaDeAplicacion`, `configEx_fechaDeAplicacion`, `configEx_horaDeExpiracion`, `configEx_fechaDeExpiracion`, `configEx_tiempoLimite`, `configEx_promMin`) VALUES
(14, 69, '16:44:00', '2021-11-19', '16:46:00', '2021-11-20', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenes`
--

CREATE TABLE `examenes` (
  `exam_id` int(11) NOT NULL,
  `exam_nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `exam_instrucciones` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `exam_status` int(11) DEFAULT NULL,
  `exam_fechaRegistro` datetime DEFAULT NULL,
  `exam_fechaActualizar` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `examenes`
--

INSERT INTO `examenes` (`exam_id`, `exam_nombre`, `exam_instrucciones`, `exam_status`, `exam_fechaRegistro`, `exam_fechaActualizar`) VALUES
(69, 'examen matematicas', 'la prueba tendra un tiempo de duración de 1 dia', 1, '2021-11-19 00:00:00', '2021-11-19 00:00:00'),
(70, '', NULL, 1, '2021-11-20 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenes_realizados`
--

CREATE TABLE `examenes_realizados` (
  `er_id` int(11) NOT NULL,
  `er_examen` int(11) DEFAULT NULL,
  `er_alumno` int(11) DEFAULT NULL,
  `er_correctas` int(11) DEFAULT NULL,
  `er_incorrectas` int(11) DEFAULT NULL,
  `er_promedio` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `examenes_realizados`
--

INSERT INTO `examenes_realizados` (`er_id`, `er_examen`, `er_alumno`, `er_correctas`, `er_incorrectas`, `er_promedio`) VALUES
(94, 69, 5, 1, 0, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `preg_id` int(11) NOT NULL,
  `preg_pregunta` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `preg_examen` int(11) DEFAULT NULL,
  `preg_fechaRegistro` datetime DEFAULT NULL,
  `preg_fechaActualizacion` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`preg_id`, `preg_pregunta`, `preg_examen`, `preg_fechaRegistro`, `preg_fechaActualizacion`) VALUES
(125, 'cuanto es 2+2', 69, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `resp_id` int(11) NOT NULL,
  `resp_texto` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `resp_pregunta` int(11) DEFAULT NULL,
  `resp_examen` int(11) DEFAULT NULL,
  `resp_correcta` int(11) DEFAULT NULL,
  `resp_fechaRegistro` datetime DEFAULT NULL,
  `resp_fechaActualizacion` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`resp_id`, `resp_texto`, `resp_pregunta`, `resp_examen`, `resp_correcta`, `resp_fechaRegistro`, `resp_fechaActualizacion`) VALUES
(207, '1', 125, 69, 0, '2021-11-19 22:46:31', NULL),
(208, '2', 125, 69, 0, '2021-11-19 22:46:35', NULL),
(209, '3', 125, 69, 0, '2021-11-19 22:46:39', NULL),
(210, '4', 125, 69, 1, '2021-11-19 22:46:41', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipoUsuario` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechaDeRegistro` datetime DEFAULT NULL,
  `fechaDeActualizacion` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `estado`, `tipoUsuario`, `fechaDeRegistro`, `fechaDeActualizacion`) VALUES
(4, 'administrador de sistema', 'admin', '$2y$09$RpQ.xiT9oJjN38o90mWIq.NAvDGus4llxhJXpFA9kqrXFMhWad/se', '1', 'admin', '2019-03-28 19:08:48', '2019-10-07 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracion_de_examen`
--
ALTER TABLE `configuracion_de_examen`
  ADD PRIMARY KEY (`configEx_id`);

--
-- Indices de la tabla `examenes`
--
ALTER TABLE `examenes`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indices de la tabla `examenes_realizados`
--
ALTER TABLE `examenes_realizados`
  ADD PRIMARY KEY (`er_id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`preg_id`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`resp_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `configuracion_de_examen`
--
ALTER TABLE `configuracion_de_examen`
  MODIFY `configEx_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `examenes`
--
ALTER TABLE `examenes`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `examenes_realizados`
--
ALTER TABLE `examenes_realizados`
  MODIFY `er_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `preg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `resp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
