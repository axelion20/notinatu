-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2017 a las 00:06:25
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `natuapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `action`
--

CREATE TABLE `action` (
  `idaction` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `ip` varchar(20) NOT NULL,
  `typeaction` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `city`
--

CREATE TABLE `city` (
  `idcity` int(11) NOT NULL,
  `city` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `city`
--

INSERT INTO `city` (`idcity`, `city`) VALUES
(1, 'Lima'),
(2, 'Arequipa'),
(3, 'Cuzco'),
(4, 'Trujillo'),
(5, 'Chiclayo'),
(6, 'Piura'),
(7, 'Iquitos'),
(8, 'Huancayo'),
(9, 'Tacna'),
(10, 'Chimbote'),
(11, 'Cajamarca'),
(12, 'Puno'),
(13, 'Tumbes'),
(14, 'Tarapoto'),
(15, 'Huánuco'),
(16, 'Ayacucho'),
(17, 'Huaraz'),
(18, 'Pucallpa'),
(19, 'Ica'),
(20, 'Puerto Maldonado'),
(21, 'Juliaca'),
(22, 'Abancay'),
(23, 'Cerro de Pasco'),
(24, 'Mouobamba'),
(25, 'Huacho'),
(26, 'Chachapoyas'),
(27, 'Pisco'),
(28, 'Callao'),
(29, 'Chincha Alta'),
(30, 'Tingo Maria'),
(31, 'Moquegua'),
(32, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `idcontact` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `phone1` varchar(45) NOT NULL,
  `phone2` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content`
--

CREATE TABLE `content` (
  `idcontent` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `foto` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `video` varchar(100) NOT NULL,
  `message` varchar(800) NOT NULL,
  `location` varchar(100) NOT NULL,
  `idaccion` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `content`
--

INSERT INTO `content` (`idcontent`, `iduser`, `item`, `foto`, `video`, `message`, `location`, `idaccion`, `date`) VALUES
(12, 8, 0, 'desastres3.jpg', '', 'Terromoto', '', 0, '2017-11-24 16:02:25'),
(15, 1, 0, '1472225923_727879_1472226798_noticia_normal.jpg', '', 'Terromo por Lima', '', 0, '2017-11-24 16:48:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `friend`
--

CREATE TABLE `friend` (
  `idfriend` int(11) NOT NULL,
  `iduser1` int(11) NOT NULL,
  `iduser2` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `friend`
--

INSERT INTO `friend` (`idfriend`, `iduser1`, `iduser2`, `date`) VALUES
(1, 1, 9, '2017-11-24 17:42:25'),
(4, 1, 8, '2017-11-24 17:52:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `IdUser` int(11) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Phone` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `IdAccion` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `idcity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`IdUser`, `Email`, `Phone`, `Password`, `Name`, `LastName`, `IdAccion`, `photo`, `idcity`) VALUES
(1, 'a@gmail.com', '123', '123', 'Axel', 'Sifuentes', 1, '', 1),
(5, '321@gmail.com', '321', '321', 'Usuario', 'Prueba', 0, '', 1),
(6, 'informaxtec16@gmail.com', '993209571', '123', 'Axel Miguel', 'Mena', 0, '', 0),
(7, 'informaxtec16@gmail.com', '993209571', '321', 'Axel Miguel', 'Mena', 0, '', 1),
(8, 'enma@gmail.com', '123', '123', 'Enma', 'Mena', 0, '', 1),
(9, 'j@gmail.com', '123', '123', 'Jorge', 'Sifuentes', 0, '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`idaction`);

--
-- Indices de la tabla `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`idcity`);

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idcontact`);

--
-- Indices de la tabla `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`idcontent`);

--
-- Indices de la tabla `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`idfriend`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `action`
--
ALTER TABLE `action`
  MODIFY `idaction` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `city`
--
ALTER TABLE `city`
  MODIFY `idcity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `idcontact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `content`
--
ALTER TABLE `content`
  MODIFY `idcontent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `friend`
--
ALTER TABLE `friend`
  MODIFY `idfriend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
