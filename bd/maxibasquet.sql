-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-11-2022 a las 17:28:24
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `maxibasquet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dat_admin`
--

CREATE TABLE `dat_admin` (
  `id` int(11) NOT NULL,
  `id_registros` int(5) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ap` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `am` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dat_admin`
--

INSERT INTO `dat_admin` (`id`, `id_registros`, `usuario`, `contrasenia`, `ap`, `am`, `nom`, `correo`, `cargo`) VALUES
(1, 0, 'Gordon', '9cf659d7557a42228ec57db166b371c4', 'ORELLANA', 'MEJIA', 'DARWIN JHOEL', 'mankitoporsiempre@gmail.com', 3),
(23, 16, 'Juan', '81dc9bdb52d04dc20036dbd8313ed055', 'Perez', 'ca', 'Juan', '', 2),
(24, 4, 'fulano', 'd93591bdf7860e1e4ee2fca799911215', 'Orellana', 'M', 'fulano', 'azter456@gmail.com', 1),
(25, 5, 'Perito', 'b59c67bf196a4758191e42f76670ceba', 'Paterno', 'Materno', 'Perito', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(11) NOT NULL,
  `nombreE` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `logo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_registros` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fixture`
--

CREATE TABLE `fixture` (
  `id_partido` int(10) NOT NULL,
  `id_equipo` int(10) NOT NULL,
  `id_mesa` int(10) NOT NULL,
  `round` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id_jugador` int(11) NOT NULL,
  `nombJ` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apJ` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `amJ` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `paisJ` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `edadJ` int(3) NOT NULL,
  `id_equipo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `numJ` int(3) NOT NULL,
  `ci` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id_mesa` int(5) NOT NULL,
  `nombreM` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apM` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `amM` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ciM` int(10) NOT NULL,
  `id_registros` int(10) NOT NULL,
  `celM` int(10) NOT NULL,
  `email` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`id_mesa`, `nombreM`, `apM`, `amM`, `ciM`, `id_registros`, `celM`, `email`) VALUES
(16, 'Juan', 'Perez', 'ca', 1234, 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id_registros` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ci` int(15) NOT NULL,
  `nom` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ap` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `am` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cel` int(20) NOT NULL,
  `cargo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id_registros`, `email`, `ci`, `nom`, `ap`, `am`, `pais`, `ciudad`, `provincia`, `cel`, `cargo`) VALUES
(4, 'azter456@gmail.com', 4321, 'fulano', 'Orellana', 'M', 'AR', '', '', 0, 1),
(5, '', 1111, 'Perito', 'Paterno', 'Materno', 'AR', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneo`
--

CREATE TABLE `torneo` (
  `id_torneo` int(11) NOT NULL,
  `nombreC` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `f_inscrip` date NOT NULL,
  `f_fin` date NOT NULL,
  `f_preinsc` date NOT NULL,
  `f_prefin` date NOT NULL,
  `descripT` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dat_admin`
--
ALTER TABLE `dat_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `fixture`
--
ALTER TABLE `fixture`
  ADD PRIMARY KEY (`id_partido`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id_jugador`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id_mesa`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id_registros`);

--
-- Indices de la tabla `torneo`
--
ALTER TABLE `torneo`
  ADD PRIMARY KEY (`id_torneo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dat_admin`
--
ALTER TABLE `dat_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `fixture`
--
ALTER TABLE `fixture`
  MODIFY `id_partido` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id_jugador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id_mesa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id_registros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `torneo`
--
ALTER TABLE `torneo`
  MODIFY `id_torneo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
