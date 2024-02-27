-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2024 a las 02:23:37
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
-- Base de datos: `cripto-app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `idMatricula` int(11) NOT NULL,
  `Matricula` varbinary(500) NOT NULL,
  `matriculaReal` varchar(500) NOT NULL,
  `Materia` varchar(60) NOT NULL,
  `Calificacion` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`idMatricula`, `Matricula`, `matriculaReal`, `Materia`, `Calificacion`) VALUES
(1, 0x5c28a48578505d50aecda5818016e734ff71d62f37a2a4f7717acdc6a9f9ea59a367f869679907a095b2d6d983cbfb941f8faaf01c812b6a, '21045179', 'Administracion del tiempo', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `Matricula` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `psw` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUsers`, `Matricula`, `Name`, `psw`) VALUES
(1, 21045132, 'Gael Quintero', '$2y$10$fkRrnHDJ0zNIfSW6sgsDCeTQEdztSQZVNXkCsJb5O5XouNeP6eA7a'),
(2, 21045132, 'Gael Us', '$2y$10$6Oyn3Ub87nXwdGY05ZjFSu31q9/u9BxudVGZKqm6YPwwOhtztVLJq'),
(3, 21045134, 'Gael Us', '$2y$10$SYn6lt4.W5B.Jzo0i46hd.nMbhp19Nid5wkQ/9wweW7EblcL5zQpa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`idMatricula`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `idMatricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
