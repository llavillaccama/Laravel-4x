-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2014 a las 17:46:26
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `auth`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `password_temp` varchar(60) NOT NULL,
  `code` varchar(60) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `remember_token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `password_temp`, `code`, `active`, `created_at`, `updated_at`, `remember_token`) VALUES
(0, 'llavillaccama@gmail.com', 'llavillaccama', '$2y$10$nm/H/OlD/pfKB3EcatpbGOyWdG7fIOGtWAcJScLirKPn5LRLpwCpK', '', '', 1, '2014-12-04 21:07:49', '2014-12-05 14:31:07', 'MHQRoZWACzeqJcLZIkRSMG8lTkMQ71SBgCDx260SpF5Cu2MVje7A39aQwGMi'),
(0, 'pilar.romero07@yahoo.com', 'pilar', '$2y$10$ezb4YSyL/FA7UcFsHZ/pueNLKQ0IgweMWl59TUhBK4wwVTI/X9ELS', '', '', 1, '2014-12-04 23:06:12', '2014-12-05 14:31:07', 'MHQRoZWACzeqJcLZIkRSMG8lTkMQ71SBgCDx260SpF5Cu2MVje7A39aQwGMi'),
(0, 'pilar@pimientadigital.com', 'pilar07', '$2y$10$6PHEDcUIeg51Aelmubc.kuUEhW7BTbYW/ae2tASK6DTEZJPnrHhqW', '', '', 1, '2014-12-04 23:08:50', '2014-12-05 14:31:07', 'MHQRoZWACzeqJcLZIkRSMG8lTkMQ71SBgCDx260SpF5Cu2MVje7A39aQwGMi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
