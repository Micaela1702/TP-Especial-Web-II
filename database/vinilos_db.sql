-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2023 a las 21:18:51
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vinilos_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discos`
--

CREATE TABLE `discos` (
  `id_disco` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `artista` varchar(20) NOT NULL,
  `sello_discografico` varchar(20) NOT NULL,
  `anio_lanzamiento` date DEFAULT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `discos`
--

INSERT INTO `discos` (`id_disco`, `nombre`, `artista`, `sello_discografico`, `año_lanzamiento`, `id_genero`) VALUES
(3, 'Atonement', 'Evan Baggs', 'Time Passages', NULL, 1),
(4, 'Tour De France', 'Kraftwerk ', 'EMI Electrola', '0000-00-00', 1),
(5, 'Electric Cafe', 'Kraftwerk ', 'EMI ', '0000-00-00', 1),
(6, 'Thriller', 'Michael Jackson ', 'Epic', NULL, 2),
(7, 'Like A Virgin', 'Madonna ', 'Sire ', NULL, 2),
(8, 'ABBA', 'ABBA', 'Polar ', NULL, 2),
(9, 'Magical Mystery Tour', 'The Beatles ', 'Capitol Records ', NULL, 2),
(11, 'The Dark Side Of The', 'Pink Floyd', 'Harvest', NULL, 3),
(12, 'The Wall', 'Pink Floyd', 'Columbia', NULL, 3),
(13, 'Animals', 'Pink Floyd', 'Columbia', NULL, 3),
(14, 'The Cars', 'The Cars ', 'Elektra', NULL, 3),
(15, ' All Eyez On Me', '2Pac', 'Interscope Records', NULL, 4),
(16, ' Straight Outta Comp', 'N.W.A', 'Ruthless Records', NULL, 4),
(17, 'The Low End Theory', 'A Tribe Called Quest', 'Jive ', NULL, 4),
(18, 'Paid Tha Cost To Be ', 'Snoop Dogg', 'Capitol Records', NULL, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombre`, `descripcion`) VALUES
(1, 'Electronica', 'Electronic music is music that employs electronic musical instruments and electronic music technology in its production, an electronic musician being a musician who composes and/or performs such music. In general a distinction can be made between sound produced using electromechanical means and that produced using electronic technology. Examples of electromechanical sound producing devices include the telharmonium, Hammond organ, and the electric guitar. Purely electronic sound production can be achieved using devices such as the theremin, sound synthesizer, and computer.'),
(2, 'Pop', 'Pop music (a term that originally derives from an abbreviation of \"popular\") is a genre of popular music, which originated in its modern form in the 1950s, deriving from rock and roll. The terms \"popular music\" and \"pop music\" are often used interchangeably, even though the former is a description of music which is popular (and can include any style).'),
(3, 'Rock', 'Rock music or rock and roll in full name is a genre of popular music that originated as \"rock and roll\" in the United States in the early 1950s, and developed into a range of different styles in the late 1950s, 1960s and later, particularly in the United Kingdom and the United States. Its roots are in 1950s\' American rock and roll when and where it first started, itself heavily influenced by rhythm and blues and country music. Rock music also drew strongly on a number of other genres such as blues and folk, and incorporated influences from jazz, classical and other musical sources.\r\n\r\nIn its p'),
(4, 'Hip_Hop', 'Hip hop music, also called hip-hop, rap music, or hip-hop music, is a music genre consisting of a stylized rhythmic music that commonly accompanies rapping, a rhythmic and rhyming speech that is chanted. It developed as part of hip hop culture, a subculture defined by four key stylistic elements: MCing/rapping, DJing/scratching, break dancing, and graffiti writing. Other elements include sampling (or synthesis), and beatboxing. While often used to refer to rapping, \"hip hop\" more properly denotes the practice of the entire subculture. The term hip hop music is sometimes used synonymously with ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `discos`
--
ALTER TABLE `discos`
  ADD PRIMARY KEY (`id_disco`),
  ADD KEY `id_disco` (`id_disco`,`id_genero`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`),
  ADD KEY `id_genero` (`id_genero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `discos`
--
ALTER TABLE `discos`
  MODIFY `id_disco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `discos`
--
ALTER TABLE `discos`
  ADD CONSTRAINT `discos_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
