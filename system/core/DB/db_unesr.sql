-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2024 a las 23:17:03
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_unesr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_evento`
--

CREATE TABLE `table_evento` (
  `id_evento` int(5) NOT NULL,
  `nombre_evento` varchar(20) NOT NULL,
  `cuerpo_evento` text NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` varchar(20) NOT NULL,
  `ponente_evento` varchar(20) NOT NULL,
  `id_instituto` int(11) NOT NULL,
  `status_evento` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `table_evento`
--

INSERT INTO `table_evento` (`id_evento`, `nombre_evento`, `cuerpo_evento`, `fecha_evento`, `hora_evento`, `ponente_evento`, `id_instituto`, `status_evento`) VALUES
(1, 'conferencia marketin', 'El marketing es un conjunto de técnicas, estrategias y procesos que una marca o empresa implementa para crear, comunicar, intercambiar y entregar ofertas o mensajes que dan valor e interesan a clientes, audiencias, socios, proveedores y personas en general.29 may 2023', '2024-04-17', '5:00 - 8:00', 'Carlos luis', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_instituto`
--

CREATE TABLE `table_instituto` (
  `id_instituto` int(5) NOT NULL,
  `nombre_instituto` varchar(50) NOT NULL,
  `tlf_instituto` varchar(50) NOT NULL,
  `email_instituto` varchar(50) NOT NULL,
  `direccion_instituto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `table_instituto`
--

INSERT INTO `table_instituto` (`id_instituto`, `nombre_instituto`, `tlf_instituto`, `email_instituto`, `direccion_instituto`) VALUES
(1, 'Universidad Nacional Experimental Simon Rodriguez', '+58 1234567', 'uners.ext.sanfelipe@gmail.com', 'Zona industrial Agustín Rivero, Edif. CIEPE, Piso 1, San Felipe 3201, Yaracuy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_testimonio`
--

CREATE TABLE `table_testimonio` (
  `id_testimonio` int(11) NOT NULL,
  `persona_testimonio` varchar(20) NOT NULL,
  `testimonio` text NOT NULL,
  `puesto_persona_testimonio` varchar(20) NOT NULL,
  `status_testimonio` int(1) NOT NULL,
  `id_instituto` int(11) NOT NULL,
  `fecha_testimonio` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `table_testimonio`
--

INSERT INTO `table_testimonio` (`id_testimonio`, `persona_testimonio`, `testimonio`, `puesto_persona_testimonio`, `status_testimonio`, `id_instituto`, `fecha_testimonio`) VALUES
(1, 'william enrique', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, fuga. Cum repellat quis temporibus esse expedita placeat animi dolorum veniam!', 'Estudiante', 1, 1, '2024-04-30'),
(2, 'jose luis', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, fuga. Cum repellat quis temporibus esse expedita placeat animi dolorum veniam!', 'estudiante ing', 1, 1, '2024-04-30'),
(3, 'karla perez', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, fuga. Cum repellat quis temporibus esse expedita placeat animi dolorum veniam!', 'Estudiante', 1, 1, '2024-04-30'),
(4, 'alejandro ortega', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, fuga. Cum repellat quis temporibus esse expedita placeat animi dolorum veniam!', 'estudiante ing', 1, 1, '2024-04-30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `table_evento`
--
ALTER TABLE `table_evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `table_instituto`
--
ALTER TABLE `table_instituto`
  ADD PRIMARY KEY (`id_instituto`);

--
-- Indices de la tabla `table_testimonio`
--
ALTER TABLE `table_testimonio`
  ADD PRIMARY KEY (`id_testimonio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `table_evento`
--
ALTER TABLE `table_evento`
  MODIFY `id_evento` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `table_instituto`
--
ALTER TABLE `table_instituto`
  MODIFY `id_instituto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `table_testimonio`
--
ALTER TABLE `table_testimonio`
  MODIFY `id_testimonio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
