-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2023 a las 11:56:08
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdpanaderia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `cedula` int(10) NOT NULL,
  `password` varchar(70) NOT NULL,
  `isAdmin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `Nombre`, `cedula`, `password`, `isAdmin`) VALUES
(1, 'Jose', 12345678, '$2y$10$9kPesVOXwMrMkoOhzYNXmeE/1l1v08RSJZt6/f3v5E5jaQXuKjyOa', 1),
(2, 'Juan', 28135117, '$2y$10$9kPesVOXwMrMkoOhzYNXmeE/1l1v08RSJZt6/f3v5E5jaQXuKjyOa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula` int(10) NOT NULL,
  `password` varchar(70) NOT NULL,
  `isAdmin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `cedula`, `password`, `isAdmin`) VALUES
(1, 'Juan', 11223344, '$2y$10$eAdQ1IRpf7iOxpGHJuOU9ukYEcUg.4XfYkFaH8f/.hDRrMqCpvrHe', 0),
(2, 'perro', 2356892, '$2y$10$RSpz5eQqUmUvcAedKAZ8JOZBJQzp.VzLs44y9dh5CD8/uUVOaM0mC', 0),
(3, 'stuart', 4561230, '$2y$10$6n7MjmS1qccCK95MBIa2GOpA4ZMnptk3HqXXRnqV8WupVxA2kKRUC', 0),
(4, 'stuart', 4561230, '$2y$10$VFjJxlcEA6MUW9Qr7c6rw.BEzifbKfearmBU5gqqKm496aR9A0Lcy', 0),
(5, 'stuart', 4561230, '$2y$10$HR3uz9V9OP8Itv8dizZBj.PUHdGzniHHcKNn7JTdOLZGn3NCjaeMu', 0),
(6, 'stuart', 4561230, '$2y$10$2VjpkFoJb87ovhLE6VYolOrmtVihH49vz8IAw3qzzPy2kZd2lxgk6', 0),
(7, 'stuart', 4561230, '$2y$10$sIUHOsptplHBd6QChBgBXuGHc5M9ZqgS02SpVTmHfWB3N/ytNXlTa', 0),
(8, 'stuart', 4561230, '$2y$10$3iijQYnm51plAnrm2iush.1pqhxFeYmRq7SU6aMGWoxMz1XNusTba', 0),
(9, 'stuart', 4561230, '$2y$10$fJx4/Yr74kxIEOfFoKWUZO3QZyoraGfOcqUd/qqbjw/Y17/6dnfHK', 0),
(10, 'stuart', 4561230, '$2y$10$obSg0PccaWuXcO9sn2OIDO.eo1Rg04Hb9U6BC3StGEc9gW3L4DSNa', 0),
(11, 'Adrian ', 4567893, '$2y$10$OdpcumE6mtAhoo1.12cla.KFv//7HwAkj3bBAJONEYwf2Q2vKNLrq', 0),
(12, 'adiassndd', 12453, '$2y$10$vD23U9Q0upEhW5c3qOLNQuoigkfhrP1bVx0xTLzPOdiqh2Ch79JlO', 0),
(13, 'adiassndd', 12453, '$2y$10$D0JjS/2nv/4jiIUNZWo3HetfAVdm9ORoBeQ/i3qrXYbqC5WKGw2mS', 0),
(14, 'adiassndd', 12453, '$2y$10$ndNwX/C0I4evJ.vbdXwLXOGsahLRAD4CfeterEuUrOpw5XdroX6jq', 0),
(15, 'adiassndd', 12453, '$2y$10$UjNnr9pnRkrzsUCam9r1iu2.JkRsZsBoo.VDZejC2upYQxrzTG0mG', 0),
(16, 'adiassndd', 12453, '$2y$10$6toB.UrcA4jMToSC9aBzG.QOXHvVvN0c0klnaQ61.Um7QVE8jFWqW', 0),
(17, 'adiassndd', 12453, '$2y$10$UTDfmYEPvrI3xAFz63RN/OjRFcqjKefBn2or.6AnPyClc.WqZhEW.', 0),
(18, 'adiassndd', 12453, '$2y$10$zafZT8oJyUpEwTNOqY.rzenMJnVHMB6mGxui4F42xFOwEPK6.4o7m', 0),
(19, 'adiassndd', 12453, '$2y$10$nfzbo6PRhGpTrLq6NBIiae1eKo0izk7gmKb102xdHrEXUHgzCxKeW', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
