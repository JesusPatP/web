-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 04-12-2023 a las 15:03:56
-- Versión del servidor: 8.1.0
-- Versión de PHP: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `department`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `element`
--

CREATE TABLE `element` (
  `id` int NOT NULL,
  `user_name` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `identifier` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `session_id` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `session_key` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `users_id` int NOT NULL,
  `encryption_key` varchar(70) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `element`
--

INSERT INTO `element` (`id`, `user_name`, `identifier`, `session_id`, `session_key`, `users_id`, `encryption_key`) VALUES
(4, 'peter1', 'peter', 'asd', 'asd', 22, 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emails`
--

CREATE TABLE `emails` (
  `id` int NOT NULL,
  `email` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `emails`
--

INSERT INTO `emails` (`id`, `email`, `password`) VALUES
(4, 'tech_department_01@proton.me', '66cT944E9gfygI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laptops`
--

CREATE TABLE `laptops` (
  `id` int NOT NULL,
  `serial_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `brand` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `users_id` int NOT NULL,
  `veracrypt_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nextcloud`
--

CREATE TABLE `nextcloud` (
  `id` int NOT NULL,
  `user_name` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `users_id` int NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nextcloud`
--

INSERT INTO `nextcloud` (`id`, `user_name`, `password`, `users_id`, `email`) VALUES
(2, 'peter1', 'Hello#1', 22, 'peter.home.lab@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tech_department`
--

CREATE TABLE `tech_department` (
  `id` int NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` char(102) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tech_department`
--

INSERT INTO `tech_department` (`id`, `email`, `password`) VALUES
(5, 'peter.home.lab@gmail.com', 'sK)2398Kzzik'),
(6, 'tech_department_01@proton.me', '12ajntLZ9jqtpT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_email`
--

CREATE TABLE `type_email` (
  `id` int NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_zoho`
--

CREATE TABLE `type_zoho` (
  `id` int NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `type_zoho`
--

INSERT INTO `type_zoho` (`id`, `name`, `description`) VALUES
(1, 'Core', NULL),
(2, 'Sweetgrass ', NULL),
(3, 'Pizzeria', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`) VALUES
(22, 'Peter', 'peter.home.lab@gmail.com', '9841323090');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_vpn`
--

CREATE TABLE `user_vpn` (
  `vpn_id` int NOT NULL,
  `users_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user_vpn`
--

INSERT INTO `user_vpn` (`vpn_id`, `users_id`) VALUES
(6, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veracrypt`
--

CREATE TABLE `veracrypt` (
  `id` int NOT NULL,
  `header_key` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `master_key` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vpn`
--

CREATE TABLE `vpn` (
  `id` int NOT NULL,
  `expiry_date` date NOT NULL,
  `key` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vpn`
--

INSERT INTO `vpn` (`id`, `expiry_date`, `key`, `password`, `email`) VALUES
(6, '2023-11-12', '11231213', 'Hello#2', 'peter.home.lab@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zoho`
--

CREATE TABLE `zoho` (
  `id` int NOT NULL,
  `username` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `users_id` int NOT NULL,
  `type_zoho_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `zoho`
--

INSERT INTO `zoho` (`id`, `username`, `email`, `password`, `users_id`, `type_zoho_id`) VALUES
(2, 'Peter', 'peter.home.lab@gmail.com', 'Hello#1', 22, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `element`
--
ALTER TABLE `element`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_element_users1_idx` (`users_id`);

--
-- Indices de la tabla `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`id`,`users_id`,`veracrypt_id`),
  ADD UNIQUE KEY `idlaptops_UNIQUE` (`id`),
  ADD KEY `fk_laptops_users1_idx` (`users_id`),
  ADD KEY `fk_laptops_veracrypt1_idx` (`veracrypt_id`);

--
-- Indices de la tabla `nextcloud`
--
ALTER TABLE `nextcloud`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_nextcloud_users1_idx` (`users_id`);

--
-- Indices de la tabla `tech_department`
--
ALTER TABLE `tech_department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `type_email`
--
ALTER TABLE `type_email`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `type_zoho`
--
ALTER TABLE `type_zoho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `user_vpn`
--
ALTER TABLE `user_vpn`
  ADD PRIMARY KEY (`vpn_id`,`users_id`),
  ADD KEY `fk_user_vpn_vpn1_idx` (`vpn_id`),
  ADD KEY `fk_user_vpn_users1_idx` (`users_id`);

--
-- Indices de la tabla `veracrypt`
--
ALTER TABLE `veracrypt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `vpn`
--
ALTER TABLE `vpn`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `zoho`
--
ALTER TABLE `zoho`
  ADD PRIMARY KEY (`id`,`users_id`,`type_zoho_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_zoho_users1_idx` (`users_id`),
  ADD KEY `fk_zoho_type_zoho1_idx` (`type_zoho_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `element`
--
ALTER TABLE `element`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `laptops`
--
ALTER TABLE `laptops`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nextcloud`
--
ALTER TABLE `nextcloud`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tech_department`
--
ALTER TABLE `tech_department`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `type_email`
--
ALTER TABLE `type_email`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `type_zoho`
--
ALTER TABLE `type_zoho`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `veracrypt`
--
ALTER TABLE `veracrypt`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vpn`
--
ALTER TABLE `vpn`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `zoho`
--
ALTER TABLE `zoho`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `element`
--
ALTER TABLE `element`
  ADD CONSTRAINT `fk_element_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `laptops`
--
ALTER TABLE `laptops`
  ADD CONSTRAINT `fk_laptops_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_laptops_veracrypt1` FOREIGN KEY (`veracrypt_id`) REFERENCES `veracrypt` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `nextcloud`
--
ALTER TABLE `nextcloud`
  ADD CONSTRAINT `fk_nextcloud_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user_vpn`
--
ALTER TABLE `user_vpn`
  ADD CONSTRAINT `fk_user_vpn_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_vpn_ibfk_1` FOREIGN KEY (`vpn_id`) REFERENCES `vpn` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `zoho`
--
ALTER TABLE `zoho`
  ADD CONSTRAINT `fk_zoho_type_zoho1` FOREIGN KEY (`type_zoho_id`) REFERENCES `type_zoho` (`id`),
  ADD CONSTRAINT `fk_zoho_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
