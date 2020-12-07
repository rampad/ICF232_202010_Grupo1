-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-11-2020 a las 22:20:57
-- Versión del servidor: 8.0.22-0ubuntu0.20.10.2
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiket_demo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attachments`
--

CREATE TABLE `attachments` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `path` varchar(1000) DEFAULT NULL,
  `uploaded_by` varchar(100) DEFAULT NULL,
  `ref` int DEFAULT NULL,
  `ext` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `attachments`
--

INSERT INTO `attachments` (`id`, `name`, `path`, `uploaded_by`, `ref`, `ext`) VALUES
(40, 'nokia-logo-white-clipart-5 - copia.png', 'uploads/06112020105140-nokia-logo-white-clipart-5_-_copia.png', 'benjamin.a', 0, NULL),
(41, 'nokia-logo-white-clipart-5 - copia.png', 'uploads/06112020234450-nokia-logo-white-clipart-5_-_copia.png', 'barbara.f', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `ticket` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `data` text,
  `owner` varchar(100) NOT NULL,
  `ref` int NOT NULL,
  `created` int NOT NULL,
  `type` int DEFAULT '0',
  `to` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `ticket`, `message`, `data`, `owner`, `ref`, `created`, `type`, `to`) VALUES
(285, 'TIK-TIKAJ-000120', 'Changed assignee to <span class=\"user-label\" data-username=\"roberto.m\"></span>', NULL, 'benjamin.a', 0, 1604644285, 8, NULL),
(286, 'TIK-TIKAJ-000120', 'Changed priority to <span class=\'tik-priority\' data-value=5></span>', NULL, 'benjamin.a', 0, 1604644502, 6, NULL),
(287, 'TIK-TIKAJ-000121', 'Cambio la asigancion a <span class=\"user-label\" data-username=\"roberto.m\"></span>', NULL, 'benjamin.a', 0, 1604651325, 8, NULL),
(288, 'TIK-TIKAJ-000122', 'Closed the ticket', NULL, 'benjamin.a', 0, 1604676781, 3, NULL),
(289, 'TIK-TIKAJ-000123', 'Changed category to <span class=\'tik-category\' data-value=8></span>', NULL, 'benjamin.a', 0, 1604677505, 7, NULL),
(290, 'TIK-TIKAJ-000123', 'Changed category to <span class=\'tik-category\' data-value=7></span>', NULL, 'benjamin.a', 0, 1604677519, 7, NULL),
(291, 'TIK-TIKAJ-000123', 'Changed priority to <span class=\'tik-priority\' data-value=0></span>', NULL, 'benjamin.a', 0, 1604678050, 6, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `id` int NOT NULL,
  `ticket_no` varchar(50) DEFAULT NULL,
  `owner` varchar(100) NOT NULL,
  `purpose` varchar(500) DEFAULT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(3000) NOT NULL,
  `assign_to` varchar(100) DEFAULT NULL,
  `assign_on` varchar(100) DEFAULT NULL,
  `progress` int NOT NULL,
  `updated` int NOT NULL,
  `created` int NOT NULL,
  `status` int NOT NULL,
  `severity` int DEFAULT '0',
  `priority` int DEFAULT '0',
  `cc` text,
  `data` text,
  `category` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`id`, `ticket_no`, `owner`, `purpose`, `subject`, `message`, `assign_to`, `assign_on`, `progress`, `updated`, `created`, `status`, `severity`, `priority`, `cc`, `data`, `category`) VALUES
(119, 'TIK-TIKAJ-000119', 'benjamin.a', 'ping', 'Latencia', '<p>problema VTR</p>', NULL, NULL, 0, 0, 1604640101, 0, 10, NULL, 'roberto.m', '{\"attachments\":[{\"file_name\":\"nokia-logo-white-clipart-5 - copia.png\",\"path\":\"uploads\\/06112020105140-nokia-logo-white-clipart-5_-_copia.png\"}]}', 5),
(121, 'TIK-TIKAJ-000121', 'benjamin.a', 'no se ve la panyalla', 'pantalla no prende', '<p>no se ve nada</p>', 'roberto.m', '1604651323912', 0, 0, 1604646207, 50, 10, NULL, 'roberto.m', 'null', 6),
(122, 'TIK-TIKAJ-000122', 'benjamin.a', 'prueba', 'prueba', '<p>Prueba</p>', NULL, NULL, 0, 0, 1604676516, 100, 0, NULL, 'benjamin.a', 'null', 8),
(123, 'TIK-TIKAJ-000123', 'benjamin.a', 'prueba 22', 'prueba 2', '<p>sss</p>', NULL, NULL, 0, 0, 1604676893, 0, 0, 0, 'barbara.f', 'null', 7),
(124, 'TIK-TIKAJ-000124', 'barbara.f', 'prueb', 'Prueba', '<p><br></p>', NULL, NULL, 0, 0, 1604686493, 0, 5, NULL, 'roberto.m', '{\"attachments\":[{\"file_name\":\"nokia-logo-white-clipart-5 - copia.png\",\"path\":\"uploads\\/06112020234450-nokia-logo-white-clipart-5_-_copia.png\"}]}', 3),
(125, 'TIK-TIKAJ-000125', 'benjamin.a', 'd', 'prueba', '<p>d</p>', NULL, NULL, 0, 0, 1604962960, 0, 0, NULL, 'barbara.f', 'null', 0),
(126, 'TIK-TIKAJ-000126', 'benjamin.a', 'ww', 'rueba 2', '<p>ww</p>', NULL, NULL, 0, 0, 1604965674, 0, 5, NULL, '', 'null', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int NOT NULL,
  `status` int NOT NULL,
  `created` int NOT NULL,
  `updated` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `username`, `password`, `type`, `status`, `created`, `updated`) VALUES
(1, 'Benjamina Acosta', 'benjamin.a@mail.com', '9999999999', 'benjamin.a', 'fe01ce2a7fbac8fafaed7c982a04e229', 80, 1, 1568270653, 1568270653),
(2, 'Barbara Farias', 'barbara.f@mail.com', '9999999999', 'barbara.f', 'fe01ce2a7fbac8fafaed7c982a04e229', 10, 1, 1569649164, 1569649164),
(3, 'Roberto Merino', 'roberto.m@mail.com', '9999999999', 'roberto.m', 'fe01ce2a7fbac8fafaed7c982a04e229', 60, 1, 1569649194, 1569649194),
(4, 'Francisca Nuñez', 'francisca.n@mail.com', '99999999', 'francisca.n', '825812b73b16b4d55919fcffcf53160f', 10, 1, 1604626094, 1604626094);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
