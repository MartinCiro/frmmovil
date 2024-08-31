-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2024 a las 14:17:29
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `movil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `token_expiry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `correo`, `telefono`, `usuario`, `password`, `reset_token`, `token_expiry`) VALUES
(1, 'carlos andres', 'karlichhe@hotmail.com', '123456', 'karlichhe', 'karlichhe', 'a86741014c0b58cd2df48804022d8d5119b31f6f33ab91d02e56562093855bc35775327db1c03ac100b9a50f32b2920bda1c', '2024-08-17 00:09:48'),
(2, 'carlos andres', 'carlos@gmail.com', '1111111111', 'carlos', 'amparo', NULL, NULL),
(3, 'juanito', 'juanito@gmail.com', '3132131212', 'juanito', '$2y$10$IaORXH3M/D/j7i7/Z78lUu2VS8gUsfzWEphw/P9BDyL56Bttdy22W', NULL, NULL),
(4, 'Mark Serna', 'marcoeduarsernalopez@gmail.com', '3044265666', 'markserna', '$2y$10$E9Z/SkdMzTrQ/hHTIrp6Se9yb9SEzje/j04tOKe4yykEiWwVbi7IW', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `telefono`) VALUES
(1, 'carlos andres loaiza', 'karlichhe@hotmail.com', '3006575225'),
(2, 'carlos andres loaiza', 'karlichhe@hotmail.com', '3006575225'),
(3, 'Sebastian Loaiza', 'sebasxloaiza@gmail.com', '305456790'),
(4, 'Luisa F Callejas', 'magola@gmail.com', '300456546'),
(5, 'Luisa F Callejas', 'magola@gmail.com', '1234567890'),
(6, 'Luisa F Callejas', 'magola@gmail.com', '1234567890'),
(7, 'Luisa F Callejas', 'magola@gmail.com', '1234567890'),
(8, 'programacion ome', 'prof@gmail.com', '55555555'),
(9, 'programacion ome', 'prof@gmail.com', '1111111111'),
(10, 'rrtertretre', 'dfgdf@gmail.com', 'cvbvc'),
(11, 'carlos andres loaiza', 'dfgdf@gmail.com', '00000000000'),
(12, 'carlos andres loaiza', 'dfgdf@gmail.com', '777777777777'),
(13, 'carlos andres loaiza', 'dfgdf@gmail.com', '12121212');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
