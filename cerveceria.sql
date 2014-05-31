-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2014 a las 18:02:17
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cerveceria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `pregunta` int(11) NOT NULL,
  `respuesta` int(11) NOT NULL,
  `correcta` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `usuario`, `pregunta`, `respuesta`, `correcta`, `created`, `updated`) VALUES
(1, 1, 11, 4, 0, '2014-05-19 16:31:14', '2014-05-19 16:31:14'),
(2, 1, 11, 5, 0, '2014-05-19 16:31:14', '2014-05-19 16:31:14'),
(3, 1, 11, 4, 0, '2014-05-19 16:31:22', '2014-05-19 16:31:22'),
(4, 1, 11, 3, 0, '2014-05-19 16:31:23', '2014-05-19 16:31:23'),
(5, 1, 11, 1, 0, '2014-05-19 16:31:29', '2014-05-19 16:31:29'),
(6, 1, 11, 2, 1, '2014-05-19 16:31:33', '2014-05-19 16:31:33'),
(7, 1, 12, 10, 0, '2014-05-19 16:31:35', '2014-05-19 16:31:35'),
(8, 1, 12, 11, 0, '2014-05-19 16:31:39', '2014-05-19 16:31:39'),
(9, 1, 12, 6, 1, '2014-05-19 16:31:43', '2014-05-19 16:31:43'),
(10, 1, 13, 7, 0, '2014-05-19 16:31:45', '2014-05-19 16:31:45'),
(11, 1, 13, 12, 0, '2014-05-19 16:31:46', '2014-05-19 16:31:46'),
(12, 1, 13, 13, 1, '2014-05-19 16:31:50', '2014-05-19 16:31:50'),
(13, 1, 14, 16, 1, '2014-05-19 16:31:51', '2014-05-19 16:31:51'),
(14, 1, 15, 21, 1, '2014-05-19 16:31:52', '2014-05-19 16:31:52'),
(15, 1, 11, 4, 0, '2014-05-19 16:56:50', '2014-05-19 16:56:50'),
(16, 1, 11, 4, 0, '2014-05-19 17:15:55', '2014-05-19 17:15:55'),
(17, 1, 11, 3, 0, '2014-05-19 17:15:58', '2014-05-19 17:15:58'),
(18, 1, 11, 3, 0, '2014-05-19 17:18:25', '2014-05-19 17:18:25'),
(19, 1, 11, 4, 0, '2014-05-19 17:18:30', '2014-05-19 17:18:30'),
(20, 1, 11, 2, 1, '2014-05-19 17:18:41', '2014-05-19 17:18:41'),
(21, 1, 12, 8, 0, '2014-05-19 17:20:41', '2014-05-19 17:20:41'),
(22, 1, 12, 6, 1, '2014-05-19 17:20:47', '2014-05-19 17:20:47'),
(23, 1, 13, 13, 1, '2014-05-19 17:25:09', '2014-05-19 17:25:09'),
(24, 1, 14, 19, 0, '2014-05-19 17:25:11', '2014-05-19 17:25:11'),
(25, 1, 14, 17, 0, '2014-05-19 17:27:19', '2014-05-19 17:27:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `foto`, `nombre`) VALUES
(1, 'magallanes.png', 'Arturo Magallanes'),
(2, 'galvez.png', 'Carlos Galvez'),
(3, 'cornejo.png', 'Patricio Cornejo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE IF NOT EXISTS `pregunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trivia_id` int(11) DEFAULT NULL,
  `pregunta` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AEE0E1F7E8DE6E08` (`trivia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id`, `trivia_id`, `pregunta`, `created`, `updated`, `orden`, `estado`) VALUES
(11, 6, '¿Primera pregunta de ejemplo de la Trivia del dia del 2014?', '2014-05-09 18:54:37', '2014-05-14 22:35:21', 1, 1),
(12, 6, '¿Segunda pregunta de ejemplo de la Trivia del dia del 2014?', '2014-05-09 18:54:37', '2014-05-14 22:35:35', 2, 1),
(13, 6, '¿Tercera pregunta de ejemplo de la Trivia del dia del 2014?', '2014-05-09 18:54:37', '2014-05-14 22:35:45', 3, 1),
(14, 6, '¿Cuarta pregunta de ejemplo de la Trivia del dia del 2014?', '2014-05-09 18:54:37', '2014-05-14 22:35:54', 4, 1),
(15, 6, '¿Quinta pregunta de ejemplo de la Trivia del dia del 2014?', '2014-05-09 18:54:37', '2014-05-14 22:36:03', 5, 1),
(16, 7, 'Preuba', '2014-05-12 18:13:59', '2014-05-12 18:13:59', 1, 0),
(17, 7, 'Prueba 2', '2014-05-12 18:13:59', '2014-05-12 18:13:59', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE IF NOT EXISTS `respuesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta_id` int(11) DEFAULT NULL,
  `respuesta` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6C6EC5EE31A5801E` (`pregunta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`id`, `pregunta_id`, `respuesta`, `valor`, `created`, `updated`) VALUES
(1, 11, 'Respuesta de ejemplo numero 1 respuesta de prueba texto largo.', 5, '2014-05-09 18:55:44', '2014-05-15 23:22:04'),
(2, 11, 'Respuesta de ejemplo numero 2', 10, '2014-05-09 18:55:54', '2014-05-14 21:47:31'),
(3, 11, 'Respuesta de ejemplo numero 3', 15, '2014-05-12 19:03:20', '2014-05-14 21:47:46'),
(4, 11, 'Respuesta eejemplo numero 111', 20, '2014-05-12 19:03:35', '2014-05-12 19:03:35'),
(5, 11, 'Respuesta de la pregunta trivia 1', 25, '2014-05-12 19:03:52', '2014-05-12 19:03:52'),
(6, 12, 'Otra respuesta en el ejemplo 1', 5, '2014-05-12 19:38:45', '2014-05-12 19:38:45'),
(7, 13, 'respuesta 3 ejemplo 1', 10, '2014-05-13 22:34:59', '2014-05-13 22:34:59'),
(8, 12, 'Respuesta ejemplo 2', 20, '2014-05-13 22:37:09', '2014-05-13 22:37:09'),
(9, 12, 'Respuesta 3 ejemplo 2', 10, '2014-05-13 22:37:22', '2014-05-13 22:37:22'),
(10, 12, 'Respuesta ejemplo 2 fff', 25, '2014-05-13 22:37:51', '2014-05-13 22:37:51'),
(11, 12, 'ejemplo 2', 15, '2014-05-13 22:38:13', '2014-05-13 22:38:13'),
(12, 13, 'repsuesta 3 pregunta 3', 20, '2014-05-13 22:38:40', '2014-05-13 22:38:40'),
(13, 13, 'respuestaaaaaaaaa 3', 5, '2014-05-13 22:38:51', '2014-05-13 22:38:51'),
(14, 13, 'ejemplo 33333333333333', 15, '2014-05-13 22:39:03', '2014-05-13 22:39:03'),
(15, 13, 'ejemplo de la preugnta numero', 25, '2014-05-13 22:39:56', '2014-05-13 22:40:09'),
(16, 14, 'ejemploo 4444', 10, '2014-05-13 22:40:48', '2014-05-13 22:40:48'),
(17, 14, 'jeejejejeje ejemplo cuatro', 5, '2014-05-13 22:41:04', '2014-05-13 22:41:04'),
(18, 14, 'ejemplo 4 repsuesta 3', 20, '2014-05-13 22:41:17', '2014-05-13 22:41:17'),
(19, 14, 'respuesta cuarta', 15, '2014-05-13 22:41:29', '2014-05-13 22:41:29'),
(20, 14, 'respuesta numero cuatro de la pregunta cuatro', 25, '2014-05-13 22:42:14', '2014-05-13 22:42:14'),
(21, 15, 'ULtima respuetsa', 20, '2014-05-13 22:42:27', '2014-05-13 22:42:27'),
(22, 15, 'ejemplo 5', 25, '2014-05-13 22:42:37', '2014-05-13 22:42:37'),
(23, 15, 'respuesta umero cinco', 15, '2014-05-13 22:42:49', '2014-05-13 22:42:49'),
(24, 15, 'respuesta cuarta de 5', 10, '2014-05-13 22:43:01', '2014-05-13 22:43:01'),
(25, 15, 'pruebaaaa', 5, '2014-05-13 22:43:10', '2014-05-13 22:43:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trivia`
--

CREATE TABLE IF NOT EXISTS `trivia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `trivia`
--

INSERT INTO `trivia` (`id`, `nombre`, `autor`, `estado`, `created`, `updated`) VALUES
(6, 'Trivia 1', 'Magallanes', 1, '2014-05-09 18:54:37', '2014-05-09 21:23:48'),
(7, 'Trivia 2', 'Galvez', 0, '2014-05-12 18:13:59', '2014-05-12 18:13:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_access_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_access_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verificado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2265B05D92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2265B05DA0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `facebook_id`, `facebook_access_token`, `first_name`, `last_name`, `gender`, `link`, `name`, `twitter_id`, `twitter_access_token`, `verificado`) VALUES
(1, 'xinita_cm', 'xinita_cm', 'xinita_cm@twitter.com', 'xinita_cm@twitter.com', 1, 'caaztx5cjzksow4c8s48sg8sccko04k', '207204333', '2014-05-19 17:15:35', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yuri Elizabeth', '207204333', '207204333-rH8gNh8UIQZzZZsRxHiKEX86kf2ODmnZQAukDOn2', 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `FK_AEE0E1F7E8DE6E08` FOREIGN KEY (`trivia_id`) REFERENCES `trivia` (`id`);

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `FK_6C6EC5EE31A5801E` FOREIGN KEY (`pregunta_id`) REFERENCES `pregunta` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
