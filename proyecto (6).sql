-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2022 a las 06:08:14
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "-05:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosusuario`
--

CREATE TABLE `datosusuario` (
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `correo` text NOT NULL,
  `imagen` text NOT NULL,
  `id_u` int(11) NOT NULL,
  `Nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosusuario`
--

INSERT INTO `datosusuario` (`nombre`, `apellido`, `correo`, `imagen`, `id_u`, `Nacimiento`) VALUES
('antony', 'rodas', 'atonya67@gmail.com', '////', 18, '2022-02-16'),
('antony', 'rodas', 'dqs@gmail.com', '////', 33, '2022-02-14'),
('antony', 'rodas', 'jjj@gmail.com', '////', 34, '2022-02-03'),
('andrea', 'prado llacchua', '@gmail.com', '////', 35, '2022-02-02'),
('antony', '', '123@gmail.com', '////', 36, '2000-06-22'),
('leydi', 'leydi', 'leydi_1_2_1_1@hotmail', '////', 37, '2022-02-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `Titulo` varchar(32) NOT NULL,
  `Contenido` text NOT NULL,
  `f_registro` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL,
  `id_tarea` smallint(32) NOT NULL,
  `Prioridad` text NOT NULL,
  `id_t` smallint(32) NOT NULL,
  `estado` text NOT NULL,
  `privatarea` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`Titulo`, `Contenido`, `f_registro`, `f_vencimiento`, `id_tarea`, `Prioridad`, `id_t`, `estado`, `privatarea`) VALUES
('dasda', 'dasdasd', '2021-12-01 22:13:00', '2021-12-03 22:13:00', 13, '1', 47, 'Pendiente', 'Publico'),
('asdasd', 'fasfasfas', '2021-12-07 23:01:00', '2021-12-31 23:01:00', 18, '3', 51, 'Pendiente', 'Privado'),
('123', '123', '2022-02-20 15:23:00', '2022-02-13 15:23:00', 18, '2', 53, 'Pendiente', 'Privado'),
('registrar tarea', 'tiene que registrara', '2022-02-01 22:51:00', '2022-02-28 22:51:00', 18, '2', 54, 'Entregado', 'Publico'),
('tarea de andrea', 'solo vera andrea', '2022-02-16 13:40:00', '2022-02-21 13:40:00', 35, '2', 55, 'Pendiente', 'Privado'),
('tarea guardada', '123123123', '2022-02-25 14:09:00', '2022-02-22 14:09:00', 18, '2', 56, 'Pendiente', 'Publico'),
('tarea con privacidad', 'esta tarea  contiene privacidad de usuario', '2022-02-10 14:38:00', '2022-02-16 14:38:00', 18, '1', 57, 'Pendiente', 'Publico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `password` varchar(255) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `id_u` smallint(32) NOT NULL,
  `codigo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`password`, `username`, `id_u`, `codigo`) VALUES
('$2y$10$wqUXGmyKUJuAMz7JQ8GYqeMT8jjX6CP1HXFspTanlEREcw.TJj652', 'antony', 17, 4540),
('$2y$10$NBOa4aNWIIDe8UoKsrR6K.BBW5.RyGaW0K0DwN1Zv6Rl5uuAqxSxu', '1234', 18, 4540),
('$2y$10$Y2TVsopSOl3O9ClLFEOEQeQCuV4DqnLQxbISecv3l97/IaTsqgSke', 'admin', 19, 4540),
('$2y$10$62SgtC.lcFdp8HNyPq5pr.tn2OHTwAYm2lOX07231fLdAN.g.Dtri', '123456', 20, 4540),
('$2y$10$vdmZnh8jaBBNcxVL77BgVOWZHR.Yr1khi3GBaEPC98D2MUDPQhrje', '1345', 22, 4540),
('$2y$10$qeEPjq0p8gU4SWuMIoasMehuQjzxgJSL/lkiXGFll3PhgiZAQwRGa', 'hola', 24, 4540),
('$2y$10$Cae9NhMKQo8cs2NolGa2L.UhtuEIR.FAuEy.jFwK6xiNZjBeioKce', 'ubnt', 30, 4540),
('$2y$10$Tt1Ybkq8oVIFkLiklq8/Ae4KrwB4H8RPzPUZasEB3GLTZT4rBJShG', 'aaaa', 32, 4540),
('$2y$10$cJb0Fyo9BjN5fHRd0ubYOu//X/nXbG5KD.Q01Cl6Zw3d0MsZGJQ02', 'qqqq', 33, 4540),
('$2y$10$KPXM6/d/uxdgSIGfx.L2HeQ7QCvJGrMdssXb98cmwF/IOm0mLzWae', 'aron', 34, 4540),
('$2y$10$lkROwvfGe06QXtZKGa50V.1XfMxZnkCwkZv8zZLOXr/VOp5zlnsbi', 'andrea', 35, 4540),
('$2y$10$pTZAcbDGUXV6gwf1DGSJS.cY.19ZKFja8ySaLmzTZF2O1.xzqHjUi', 'juan', 36, 4540),
('$2y$10$1sIX8Eb5cMceluD3q5cauu8hN79v2o5/y.OZfCw4XussRxZiQfXBK', 'leydi', 37, 6216);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosusuario`
--
ALTER TABLE `datosusuario`
  ADD PRIMARY KEY (`id_u`),
  ADD UNIQUE KEY `correo` (`correo`) USING HASH;

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`id_t`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_u`),
  ADD UNIQUE KEY `UQ_username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `id_t` smallint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_u` smallint(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
