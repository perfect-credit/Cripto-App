-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2024 a las 00:14:50
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
  `Materia` varchar(60) NOT NULL,
  `Calificacion` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`idMatricula`, `Matricula`, `Materia`, `Calificacion`) VALUES
(1, 0x9a3308f10dca9bd51de52bcc10071c0d39c1605e8e8bbac62d51a16e75a7b567b4e32d00c1bb6683ef782345abf1919f573597e61100b83c6156e1c7c02061f18177ad7bffae7e923c4a39a85338c3b2e807ea9ad12b04deb80d772d741cd883d4f9e536c96ed3151b42e1482e936d8ce8697f5eab7ea50368d5e95040f0ba6026e905c74d4d8fb8ebb534d40b16eb71f8ebac8a90f6dfc93f45fe2df8d489fbf081d9a0c88e6558285b98dabcb778005c18377caff358f861a3aa834346903a25546bde63a1b29176e069ee850f0bac66513cce7948b5aba92afdf0a170e108d8ab9ded05e870060550d1053f53d762c1333d996648757a7f0c06d95d9e9fc3, 'Seguridad informatica', 8),
(2, 0xd23a75e87f8dc2d279eacd2bb20f51b019f49d93594a16ee850936b048a1c485f92d0fdaeba69d046d43f1a177132a1678f187f967116529c8bfebc4b5258a76e94c00e6a4b1bfc2fec1e31b0d48da2c55bf856a1df7c20cabae2dd22b4366be161556cbf19712ec9da25c2c6f15349441b99e199e05db255f9de594caaf105669e869608de08e09feaaacd5de9b4398979a30589a91e8ec69b1f2a52aef616c64373e454d0af6b067f326f689fe8b6a77a07856869cf81b504bc7fb2b8e700882afa24979cac8df971d303600db0155985943499faa4ca7207c372c8cb5d6813b9d7858957614bc165b78168770cd392d63491ba4f16e11f439022859ffaf76, 'Seguridad informatica', 8),
(3, 0x41381d04d83c23834fd58c70a15149f296d124baee2672344b9c3ea73c7b77597fb9536ae9c5b2b3d705989c583036441128123da696781485954d8761b262d3aa926493af7d8dd8c010929aadd37beadb75229e2c4ca4acdb07748fef66408459aa1b1d07b2eadeb0677f78e5c4cb7394027668b4b373a88cff5a3bb16d6b8a11c4cdabe5e66fe0380eb23f6e0847e5be4cfc52935d847eb1654c6b8d9cd96a549ec1db5c182957df3be512a6d8cb8f1e6b08974f7c5db12cde08858e2cef859afb4e100e83a17b7f1a5e90168b1e35baea9a01678960f6d9343b9f1f777f011fd45fecf659a8b8971f2b0e9a7d667c2080d231a5d6742e3cd8a122cdc1c5c7, 'Matematicas', 9.8),
(4, 0x9617d01150da4e8b67b3b210964dccf48228d4a4756845028c0a6eb9bebfc9ccc8c8cff102b6bab807e298749f45dd05e72ee553692368093d6bb4024e1914861645add5a62fed760f222572c37b50bd3a0c60beff3566ee66eaff428d737ec56e66e31ecdd183e7fb08a2b9c549228cee5213cc34cce7f49bfad4d1ed96827633815bdb46201f7496568c4b8f4b108b8099882970778404a48e825dcb84f60161f045a735961291e7a749693b0e61a4fce8ead77778544daeda2be01f1a9f7cae68fcb720ddcb43d31a2b54791c605b067b7cbfd742b9fd2fae7f3d768717beb4403277a2c384249f4cba875a09c7c95ab2078726d8f33c53d0ae6638452afd, '', 0),
(5, 0x4e8ca1663c56e981aee6de95258a92102e44fa517c85a0bfdc69eca7a813a255d1c4fee87fd7bd3ab9ff22d24df70f93f687b15dba17, 'Info', 8),
(6, 0x09298b5e44874acaf0b9423dd1330c1c1ea0807ea0ab710aa6ba8a60562f5017db8375f9b95668c6e6eca292fdb30eb8, '', 0),
(7, 0x0f9c94b003305f719b5ed5ac0b4702ebac5a87e7f18304336658b5ca7eb9666373ec7f2d51c9294135c169167d4983ff777c69a2567d8273, '', 0),
(8, 0x25f26f9c5ec053e42f19d222ea71435a0d593852f0377918c8fc24b653d8074a712518ee439c01be653e6f559aad0eb9, '', 0),
(9, 0x45b385ec5f40a3a8f4b4a9fad21b3c89da891f0d50858528ae1a6833411a8c5358c37a3bd0df3fc1721b2084ba04b514, '', 0),
(10, 0x227c9c72a74866a336228e2d1543e1501a80f6631a5151abf54dd59abd54d0482bbc07c765c202d7f6e4e9b7fdfc6dda, '', 0),
(11, 0xddc4d252da63ab704cf6508f12cc69a3153ebcb766224a8216a4e126d28ca73176d0a950e3b84f4ef0b7cd8c11097774, '', 0),
(12, 0x0c59f6af8661acd95ba8004d8feb0146e24abe322bff9a666d4714d8a9897e6ed2e922873057fe284efdea15f8d44f3a5a367ddcc7552470, 'Administracion del tiempo', 10),
(13, 0xb3eef1a3d37c31bedf6abc885eb44c732c62834892ba0ac12e079c9e62c8d7467d1ea471de4209108327973bf26041407b180782249d9d27, 'Administracion del tiempo', 10);

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
(1, 21045132, 'Sussy', '$2a$12$gK//xIbq38iA4TFp1/JvA.7TGawfsnEDyH8kGsvUEpT1twofmMK6O'),
(2, 21045179, 'Litzzy Mireles', '$2y$10$tx56vD9koTOpE6nZ/yNCNO326fZTSm9iZQv53dhqDC3NWOR5ec2Tq'),
(3, 21045178, 'Azalia Espinoza', '$2y$10$dkmO25DP3lqhMg4GA8gL5eWldc6.nk..ifIEOOLmk3EtXzo8oXt4y'),
(4, 21045132, 'Roberto Gael', '$2y$10$p1UNEKReDy59EdHmG2sfWOHOEHDj7WcXCd1PcxQkKC0ylkSjhlQza'),
(5, 21045132, 'Gael Us', '$2y$10$CeLg/86/pNbDgMItavMDCex9fQpLxp4rqXFrUHTCWHD7Exl3gKDLu');

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
  MODIFY `idMatricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
