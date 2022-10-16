-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2022 a las 04:13:05
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
-- Base de datos: `db_dragones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dragones`
--

CREATE TABLE `dragones` (
  `id` int(11) NOT NULL,
  `nombre_raza` varchar(50) NOT NULL COMMENT 'tipo de dragon',
  `origen_mitologico` varchar(100) NOT NULL COMMENT 'mitologia de dragon',
  `descrip` text NOT NULL COMMENT 'describir raza',
  `representaciones` text NOT NULL,
  `id_mitologia_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dragones`
--

INSERT INTO `dragones` (`id`, `nombre_raza`, `origen_mitologico`, `descrip`, `representaciones`, `id_mitologia_fk`) VALUES
(1, 'Dragón ', '1', 'una de las razas más conocidas de dragón, posee dos pares de piernas y un par de alas,su tamaño suele variar puede ser de unos pocos centímetros hasta más de 300 metros. Normalmente se los representa con colores cálidos, rojizos en su mayoría, aunque sus colores pueden variar según su representación.', 'Smaug el señor de los anillos, chimuelo como entrenar a tu dragón', 1),
(2, 'Guiverno', '2', 'otra raza muy conocida, son un tipo de dragón que carece de un par de piernas delanteras, algunas razas son bípedas, aunque otras caminan apoyándose sobre sus alas, poseen un aguijón al final de su cola y también pueden poseer una mordida venenosa en lugar de su clásico aliento.Sus colores pueden variar, pero suelen ser tonos grisáceos.', 'Bestias aladas el señor de los anillos, Colacuerno húngaro harry pottrer', 2),
(3, 'Amphithere/Anfitero', '2', 'Dragones carentes de piernas, fueron utilizados como símbolos de los heraldos europeos, sus alas suelen ser emplumadas o de murciélago, y comúnmente son amarrillas con tonos verdosos, sus cuerpos son alargados como los de una serpiente, y no suelen tener un aliento ', 'Reptil alado como entrenar a tu dragon', 2),
(4, 'Pyrausta', 'griego, romano', 'Es la combinación de un dragón y un insecto, son de tamaño reducido, su forma puede variar según el insecto, como una abeja, sus alas son como de hada, mariposa o algún otro insecto.\r\ntambién existe las “Fae” que son un dragón combinado un hada y estas son coloridas.\r\n', 'son Nombradas en el Inventorum Naturum ', 3),
(5, 'Hydra', 'griego/romano', 'Un dragón clásico de la mitología griega, es un dragón carente de alas, de gran tamaño, aunque por fuera de su contra parte griega no necesariamente regenera sus cabezas.\r\nsuele ser venenoso y no tiene un aliento de dragón.\r\n', 'Hydra de lerna', 3),
(6, 'Serpiente marina', '4', 'la primera raza existente, son dragones que carecen de alas y son normalmente representados como los antiguos monstruos marinos, sus colores son tonos azules y verdes. uno de sus mayores representantes puede ser el leviatán.', 'Leviatán biblia judía', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mitologias`
--

CREATE TABLE `mitologias` (
  `id` int(11) NOT NULL,
  `mitologia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mitologias`
--

INSERT INTO `mitologias` (`id`, `mitologia`) VALUES
(1, 'babilonico'),
(2, 'europeo'),
(3, 'grecoromano'),
(4, 'prehistorico\r\n'),
(5, 'egipcio'),
(6, 'asiatico'),
(7, 'hindú'),
(8, 'latino americano'),
(9, 'nordico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `mail`, `password`) VALUES
(1, 'admin@gmail.com', '$2y$10$Kz4YYD9lv29JBL9pxI6Fj.p8W/07sMxn0x5ajAhWggOLPxWHX8WY6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dragones`
--
ALTER TABLE `dragones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mitologia_fk` (`id_mitologia_fk`);

--
-- Indices de la tabla `mitologias`
--
ALTER TABLE `mitologias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dragones`
--
ALTER TABLE `dragones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `mitologias`
--
ALTER TABLE `mitologias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dragones`
--
ALTER TABLE `dragones`
  ADD CONSTRAINT `fk_dragones_mitologia` FOREIGN KEY (`id_mitologia_fk`) REFERENCES `mitologias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
