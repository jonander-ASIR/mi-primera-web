
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grupo5_f1bilbao`
--
CREATE DATABASE IF NOT EXISTS `grupo5_f1bilbao` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grupo5_f1bilbao`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE IF NOT EXISTS `carreras` (
  `codigo_carrera` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_circuito` int(11) DEFAULT NULL,
  `nombre_gran_premio` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `condiciones_climaticas` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`codigo_carrera`),
  KEY `codigo_circuito` (`codigo_circuito`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`codigo_carrera`, `codigo_circuito`, `nombre_gran_premio`, `fecha`, `condiciones_climaticas`) VALUES
(1, 1, 'Gran Premio de Bahréin', '2025-03-14', 'Soleado'),
(2, 2, 'Gran Premio de Arabia Saudita', '2025-03-23', 'Soleado'),
(3, 3, 'Gran Premio de Australia', '2025-04-06', 'Soleado'),
(4, 4, 'Gran Premio de Japón', '2025-04-13', 'Nublado'),
(5, 5, 'Gran Premio de Bilbao', '2025-04-27', 'Soleado'),
(6, 6, 'Gran Premio de Miami', '2025-05-04', 'Soleado'),
(7, 7, 'Gran Premio de Emilia-Romaña', '2025-05-18', 'Soleado'),
(8, 8, 'Gran Premio de Mónaco', '2025-05-25', 'Nublado'),
(9, 9, 'Gran Premio de Canadá', '2025-06-08', 'Soleado'),
(10, 10, 'Gran Premio de Austria', '2025-06-29', 'Soleado'),
(11, 11, 'Gran Premio de Gran Bretaña', '2025-07-06', 'Nublado'),
(12, 12, 'Gran Premio de Hungría', '2025-07-20', 'Soleado'),
(13, 13, 'Gran Premio de Bélgica', '2025-08-03', 'Lluvioso'),
(14, 14, 'Gran Premio de Países Bajos', '2025-08-31', 'Soleado'),
(15, 15, 'Gran Premio de Italia', '2025-09-07', 'Soleado'),
(16, 16, 'Gran Premio de Azerbaiyán', '2025-09-21', 'Soleado'),
(17, 17, 'Gran Premio de Singapur', '2025-10-05', 'Lluvioso'),
(18, 18, 'Gran Premio de Estados Unidos', '2025-10-19', 'Soleado'),
(19, 19, 'Gran Premio de México', '2025-10-26', 'Soleado'),
(20, 20, 'Gran Premio de Brasil', '2025-11-09', 'Nublado'),
(21, 21, 'Gran Premio de Las Vegas', '2025-11-22', 'Soleado'),
(22, 22, 'Gran Premio de Catar', '2025-11-30', 'Soleado'),
(23, 23, 'Gran Premio de Abu Dabi', '2025-12-07', 'Soleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `circuitos`
--

CREATE TABLE IF NOT EXISTS `circuitos` (
  `codigo_circuito` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_circuito` varchar(50) NOT NULL,
  `ubicacion` varchar(50) DEFAULT NULL,
  `longitud_km` float(6,3) DEFAULT NULL,
  `num_vueltas` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo_circuito`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `circuitos`
--

INSERT INTO `circuitos` (`codigo_circuito`, `nombre_circuito`, `ubicacion`, `longitud_km`, `num_vueltas`) VALUES
(1, 'Bahrain International Circuit', 'Sakhir, Bahréin', 5.412, 57),
(2, 'Jeddah Corniche Circuit', 'Yeda, Arabia Saudita', 6.174, 50),
(3, 'Albert Park Circuit', 'Melbourne, Australia', 5.278, 58),
(4, 'Suzuka Circuit', 'Suzuka, Japón', 5.807, 53),
(5, 'Bilbao International Circuit', 'Bilbao, España', 5.451, 56),
(6, 'Miami International Autodrome', 'Miami, EE.UU.', 5.412, 57),
(7, 'Imola Circuit', 'Imola, Italia', 4.909, 63),
(8, 'Circuit de Monaco', 'Montecarlo, Mónaco', 3.337, 78),
(9, 'Circuit Gilles Villeneuve', 'Montreal, Canadá', 4.361, 70),
(10, 'Red Bull Ring', 'Spielberg, Austria', 4.318, 71),
(11, 'Silverstone Circuit', 'Silverstone, Reino Unido', 5.891, 52),
(12, 'Hungaroring', 'Budapest, Hungría', 4.381, 70),
(13, 'Spa-Francorchamps', 'Stavelot, Bélgica', 7.004, 44),
(14, 'Zandvoort Circuit', 'Zandvoort, Países Bajos', 4.259, 72),
(15, 'Monza Circuit', 'Monza, Italia', 5.793, 53),
(16, 'Baku City Circuit', 'Bakú, Azerbaiyán', 6.003, 51),
(17, 'Marina Bay Street Circuit', 'Singapur', 4.940, 62),
(18, 'Circuit of the Americas', 'Austin, EE.UU.', 5.513, 56),
(19, 'Autódromo Hermanos Rodríguez', 'Ciudad de México, México', 4.304, 71),
(20, 'Interlagos', 'São Paulo, Brasil', 4.309, 71),
(21, 'Las Vegas Strip Circuit', 'Las Vegas, EE.UU.', 6.201, 50),
(22, 'Lusail International Circuit', 'Doha, Catar', 5.419, 57),
(23, 'Yas Marina Circuit', 'Abu Dabi, EAU', 5.281, 58);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificaciones`
--

CREATE TABLE IF NOT EXISTS `clasificaciones` (
  `id_clasificacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_piloto` int(11) DEFAULT NULL,
  `codigo_carrera` int(11) DEFAULT NULL,
  `posicion_final` int(11) DEFAULT NULL,
  `puntos_obtenidos` decimal(4,2) DEFAULT NULL,
  `vuelta_rapida` tinyint(1) DEFAULT 0,
  `abandono` tinyint(1) DEFAULT 0,
  `tiempo` time NOT NULL,
  PRIMARY KEY (`id_clasificacion`),
  KEY `id_piloto` (`id_piloto`),
  KEY `codigo_carrera` (`codigo_carrera`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `clasificaciones`
--

INSERT INTO `clasificaciones` (`id_clasificacion`, `id_piloto`, `codigo_carrera`, `posicion_final`, `puntos_obtenidos`, `vuelta_rapida`, `abandono`, `tiempo`) VALUES
(1, 1, 5, 1, 25.00, 1, 0, '01:40:00'),
(2, 7, 5, 2, 18.00, 0, 0, '01:42:25'),
(3, 16, 5, 10, 3.00, 0, 0, '02:23:00'),
(4, 4, 5, 4, 12.00, 0, 0, '01:55:00'),
(5, 9, 5, 11, 2.00, 0, 0, '02:23:55'),
(6, 1, 2, 1, 25.00, 0, 0, '00:00:00'),
(7, 7, 2, 2, 18.00, 1, 0, '00:00:00'),
(8, 3, 2, 3, 15.00, 0, 0, '00:00:00'),
(9, 4, 2, 4, 12.00, 0, 0, '00:00:00'),
(10, 5, 2, 5, 10.00, 0, 0, '00:00:00'),
(11, 7, 3, 1, 25.00, 1, 0, '00:00:00'),
(12, 1, 3, 2, 18.00, 0, 0, '00:00:00'),
(13, 8, 5, 9, 4.00, 0, 0, '02:20:00'),
(14, 3, 3, 4, 12.00, 0, 0, '00:00:00'),
(15, 9, 3, 5, 10.00, 0, 0, '00:00:00'),
(16, 1, 4, 1, 25.00, 0, 0, '00:00:00'),
(17, 7, 4, 2, 18.00, 1, 0, '00:00:00'),
(18, 3, 4, 3, 15.00, 0, 0, '00:00:00'),
(19, 5, 4, 4, 12.00, 0, 0, '00:00:00'),
(20, 4, 4, 5, 10.00, 0, 0, '00:00:00'),
(21, 20, 5, 6, 8.00, 1, 0, '02:05:00'),
(22, 14, 5, 7, 6.00, 0, 0, '02:10:00'),
(23, 3, 5, 3, 15.00, 0, 0, '01:45:00'),
(24, 10, 5, 8, 5.00, 0, 0, '02:15:00'),
(25, 6, 5, 5, 10.00, 0, 0, '02:00:00'),
(26, 7, 6, 1, 25.00, 1, 0, '00:00:00'),
(27, 1, 6, 2, 18.00, 0, 0, '00:00:00'),
(28, 3, 6, 3, 15.00, 0, 0, '00:00:00'),
(29, 9, 6, 4, 12.00, 0, 0, '00:00:00'),
(30, 4, 6, 5, 10.00, 0, 0, '00:00:00'),
(31, 3, 8, 1, 25.00, 0, 0, '00:00:00'),
(32, 7, 8, 2, 18.00, 1, 0, '00:00:00'),
(33, 1, 8, 3, 15.00, 0, 0, '00:00:00'),
(34, 4, 8, 4, 12.00, 0, 0, '00:00:00'),
(35, 9, 8, 5, 10.00, 0, 0, '00:00:00'),
(36, 7, 11, 1, 25.00, 1, 0, '00:00:00'),
(37, 1, 11, 2, 18.00, 0, 0, '00:00:00'),
(38, 3, 11, 3, 15.00, 0, 0, '00:00:00'),
(39, 4, 11, 4, 12.00, 0, 0, '00:00:00'),
(40, 5, 11, 5, 10.00, 0, 0, '00:00:00'),
(41, 1, 15, 1, 25.00, 0, 0, '00:00:00'),
(42, 3, 15, 2, 18.00, 1, 0, '00:00:00'),
(43, 7, 15, 3, 15.00, 0, 0, '00:00:00'),
(44, 4, 15, 4, 12.00, 0, 0, '00:00:00'),
(45, 9, 15, 5, 10.00, 0, 0, '00:00:00'),
(46, 7, 23, 1, 25.00, 1, 0, '00:00:00'),
(47, 1, 23, 2, 18.00, 0, 0, '00:00:00'),
(48, 3, 23, 3, 15.00, 0, 0, '00:00:00'),
(49, 4, 23, 4, 12.00, 0, 0, '00:00:00'),
(50, 9, 23, 5, 10.00, 0, 0, '00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE IF NOT EXISTS `entradas` (
  `dni` char(9) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `contrasena` varchar(255) NOT NULL,
  `tipo_entrada` enum('Adulto','Infantil') NOT NULL,
  `zona` enum('zona1','zona2') NOT NULL,
  `edad` int(11) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `num_entradas` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `codigo_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_equipo` varchar(50) NOT NULL,
  `pais` varchar(30) DEFAULT NULL,
  `director` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codigo_equipo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`codigo_equipo`, `nombre_equipo`, `pais`, `director`) VALUES
(1, 'Red Bull Racing', 'Austria', 'Christian Horner'),
(2, 'Ferrari', 'Italia', 'Frédéric Vasseur'),
(3, 'Mercedes AMG', 'Alemania', 'Toto Wolff'),
(4, 'McLaren', 'Reino Unido', 'Andrea Stella'),
(5, 'Aston Martin', 'Reino Unido', 'Mike Krack'),
(6, 'Williams Racing', 'Reino Unido', 'James Vowles'),
(7, 'Racing Bulls', 'Italia', 'Laurent Mekies'),
(8, 'Haas F1 Team', 'Estados Unidos', 'Ayao Komatsu'),
(9, 'Kick Sauber', 'Suiza', 'Alessandro Alunni Bravi'),
(10, 'Alpine F1 Team', 'Francia', 'Bruno Famin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pilotos`
--

CREATE TABLE IF NOT EXISTS `pilotos` (
  `id_piloto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(50) NOT NULL,
  `nacionalidad` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `dorsal` int(11) DEFAULT NULL,
  `codigo_equipo` int(11) DEFAULT NULL,
  `puntos_totales` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id_piloto`),
  KEY `codigo_equipo` (`codigo_equipo`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `pilotos`
--

INSERT INTO `pilotos` (`id_piloto`, `nombre_completo`, `nacionalidad`, `fecha_nacimiento`, `dorsal`, `codigo_equipo`, `puntos_totales`) VALUES
(1, 'Max Verstappen', 'Países Bajos', '1997-09-30', 1, 1, 10.00),
(2, 'Yuki Tsunoda', 'Japón', '2000-05-11', 22, 1, 20.00),
(3, 'Charles Leclerc', 'Mónaco', '1997-10-16', 16, 2, 15.00),
(4, 'Lewis Hamilton', 'Reino Unido', '1985-01-07', 44, 2, 0.00),
(5, 'George Russell', 'Reino Unido', '1998-02-15', 63, 3, 0.00),
(6, 'Kimi Antonelli', 'Italia', '2006-08-25', 12, 3, 0.00),
(7, 'Lando Norris', 'Reino Unido', '1999-11-13', 4, 4, 0.00),
(8, 'Oscar Piastri', 'Australia', '2001-04-06', 81, 4, 0.00),
(9, 'Fernando Alonso', 'España', '1981-07-29', 14, 5, 0.00),
(10, 'Lance Stroll', 'Canadá', '1998-10-29', 18, 5, 0.00),
(11, 'Carlos Sainz', 'España', '1994-09-01', 55, 6, 0.00),
(12, 'Alexander Albon', 'Tailandia', '1996-03-23', 23, 6, 0.00),
(13, 'Liam Lawson', 'Nueva Zelanda', '2002-02-11', 30, 7, 0.00),
(14, 'Isack Hadjar', 'Francia', '2004-09-28', 21, 7, 0.00),
(15, 'Esteban Ocon', 'Francia', '1996-09-17', 31, 8, 0.00),
(16, 'Oliver Bearman', 'Reino Unido', '2005-05-08', 87, 8, 0.00),
(17, 'Nico Hülkenberg', 'Alemania', '1987-08-19', 27, 9, 0.00),
(18, 'Gabriel Bortoleto', 'Brasil', '2004-10-14', 5, 9, 0.00),
(19, 'Pierre Gasly', 'Francia', '1996-02-07', 10, 10, 0.00),
(20, 'Franco Colapinto', 'Argentina', '2003-05-27', 43, 10, 0.00);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `carreras_ibfk_1` FOREIGN KEY (`codigo_circuito`) REFERENCES `circuitos` (`codigo_circuito`);

--
-- Filtros para la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
  ADD CONSTRAINT `clasificaciones_ibfk_1` FOREIGN KEY (`id_piloto`) REFERENCES `pilotos` (`id_piloto`),
  ADD CONSTRAINT `clasificaciones_ibfk_2` FOREIGN KEY (`codigo_carrera`) REFERENCES `carreras` (`codigo_carrera`);

--
-- Filtros para la tabla `pilotos`
--
ALTER TABLE `pilotos`
  ADD CONSTRAINT `pilotos_ibfk_1` FOREIGN KEY (`codigo_equipo`) REFERENCES `equipos` (`codigo_equipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
