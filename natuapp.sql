-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2017 a las 03:31:53
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `idchat` int(11) NOT NULL,
  `idpregunta` int(11) NOT NULL,
  `idrespuesta` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`idchat`, `idpregunta`, `idrespuesta`, `date`) VALUES
(1, 1, 1, '2017-11-25 21:30:55');

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
  `date` datetime NOT NULL,
  `message2` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `content`
--

INSERT INTO `content` (`idcontent`, `iduser`, `item`, `foto`, `video`, `message`, `location`, `idaccion`, `date`, `message2`) VALUES
(1, 1, 0, '', '', 'en riesgo.', '', 0, '2017-11-25 09:41:16', 'Estoy en riesgo!'),
(2, 8, 0, 'terremoto_italia.jpg', '', 'terremoto', '', 0, '2017-11-25 09:48:33', ''),
(3, 1, 0, '', '', 'en riesgo.', '', 0, '2017-11-25 10:09:29', 'Estoy en riesgo!'),
(4, 1, 0, '', '', 'en riesgo.', '', 0, '2017-11-25 10:11:09', 'Estoy en riesgo!'),
(5, 2, 0, '', '', 'a notificado.', '', 0, '2017-11-25 10:11:21', 'Estoy bien.'),
(6, 1, 0, '', '', 'en riesgo.', '', 0, '2017-11-25 11:02:59', 'Estoy en riesgo!'),
(7, 1, 0, '', '', 'en riesgo.', '', 0, '2017-11-25 11:03:26', 'Estoy en riesgo!'),
(8, 8, 0, 'logo.png', '', 'terremoto', '', 0, '2017-11-25 11:05:40', ''),
(9, 2, 0, '', '', 'a notificado.', '', 0, '2017-11-25 11:07:55', 'Estoy bien.'),
(10, 1, 0, '', '', 'en riesgo.', '', 0, '2017-11-25 21:31:22', 'Estoy en riesgo!'),
(11, 2, 0, '', '', 'a notificado.', '', 0, '2017-11-25 21:31:31', 'Estoy bien.');

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
(5, 2, 2, '2017-11-25 02:39:11'),
(8, 2, 8, '2017-11-25 06:30:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `idpregunta` int(11) NOT NULL,
  `pregunta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`idpregunta`, `pregunta`) VALUES
(1, 'Estoy atrapado!'),
(2, 'Estoy sangrando!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `idrespuesta` int(11) NOT NULL,
  `respuesta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`idrespuesta`, `respuesta`) VALUES
(1, 'Respuesta 1'),
(2, 'Respuesta 2');

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
(1, '', '', '', 'Usuario', '', 0, '', 0),
(2, '', '', '', 'Usuario', '', 0, '', 0),
(8, 'enma@gmail.com', '123', '123', 'Innova', 'Grupy', 0, '', 1),
(9, 'j@gmail.com', '123', '123', 'Jorge', 'Sifuentes', 0, '', 1),
(15, 'a@gmail.com', '123', '123', 'Axel', 'Sifuentes', 0, '', 1),
(16, 'noe@gmail.com', '321', '321', 'Noe', 'Mariano', 0, '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`idaction`);

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`idchat`);

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
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`idpregunta`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`idrespuesta`);

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
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `idchat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `idcontent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `friend`
--
ALTER TABLE `friend`
  MODIFY `idfriend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `idpregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idrespuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
