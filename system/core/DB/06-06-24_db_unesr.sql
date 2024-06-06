-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2024 a las 15:52:30
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
-- Estructura de tabla para la tabla `table_autoridades`
--

CREATE TABLE `table_autoridades` (
  `id_autoridad` int(1) NOT NULL,
  `nombre_autoridad` varchar(60) NOT NULL,
  `cargo_autoridad` varchar(60) NOT NULL,
  `img_autoridad` varchar(60) NOT NULL,
  `status_autoridad` int(1) NOT NULL,
  `id_instituto` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `table_autoridades`
--

INSERT INTO `table_autoridades` (`id_autoridad`, `nombre_autoridad`, `cargo_autoridad`, `img_autoridad`, `status_autoridad`, `id_instituto`) VALUES
(2, 'Ing Msc Cèsar Montoy', 'Coordinador general ', 'team/cesar.jpg', 1, 1),
(3, 'Dra Evelyn Medina', 'Docente Ordinario', 'team/evelyn.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_documentos`
--

CREATE TABLE `table_documentos` (
  `id_documento` int(5) NOT NULL,
  `id_instituto` int(5) NOT NULL,
  `nombre_documento` varchar(100) NOT NULL,
  `ruta_documento` varchar(100) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `status_documento` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `table_documentos`
--

INSERT INTO `table_documentos` (`id_documento`, `id_instituto`, `nombre_documento`, `ruta_documento`, `tipo_documento`, `status_documento`) VALUES
(1, 1, 'PENSUM LCD ADMIN', 'PENSUM ADMINISTRACION MENCION ADMINISTRACION RECURSOS HUMANOS.pdf', 'pensum', 1),
(2, 1, 'PENSUM IDIOMA INGLES', 'PENSUM DOCENCIA IDIOMA INGLES.pdf', 'pensum', 1),
(3, 1, 'PERFIL DEL LICENCIADO EN ADMINISTRACIÓN RMYF', 'PERFIL DEL LICENCIADO EN ADMINISTRACIÓN RMYF.pdf', 'perfil', 1),
(4, 1, 'PERFIL DEL LICENCIADO EN ADMINISTRACIÓN RRHH', 'PERFIL DEL LICENCIADO EN ADMINISTRACIÓN RRHH.pdf', 'perfil', 1),
(5, 1, 'PERFIL INGENIERO DE ALIMENTOS', 'PERFIL INGENIERO DE ALIMENTOS.pdf', 'perfil', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_equipo`
--

CREATE TABLE `table_equipo` (
  `id_equipo` int(1) NOT NULL,
  `nombre_equipo` varchar(20) NOT NULL,
  `cargo_equipo` varchar(60) NOT NULL,
  `img_equipo` varchar(100) NOT NULL,
  `status_equipo` int(1) NOT NULL,
  `id_instituto` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `table_equipo`
--

INSERT INTO `table_equipo` (`id_equipo`, `nombre_equipo`, `cargo_equipo`, `img_equipo`, `status_equipo`, `id_instituto`) VALUES
(1, 'Eguis Duran', 'TSU Seguridad Industrial', 'team/eguis.jpeg', 1, 1),
(2, 'Dorianfer Torrealba', 'Estudiante', 'team/dorianfer.jpeg', 1, 1),
(4, 'Creadores', 'creadores', 'team/grupal.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_evento`
--

CREATE TABLE `table_evento` (
  `id_evento` int(5) NOT NULL,
  `nombre_evento` text NOT NULL,
  `cuerpo_evento` text NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` varchar(20) NOT NULL,
  `ponente_evento` text NOT NULL,
  `img_evento` varchar(60) NOT NULL,
  `id_instituto` int(11) NOT NULL,
  `status_evento` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `table_evento`
--

INSERT INTO `table_evento` (`id_evento`, `nombre_evento`, `cuerpo_evento`, `fecha_evento`, `hora_evento`, `ponente_evento`, `img_evento`, `id_instituto`, `status_evento`) VALUES
(2, 'Planificación con docentes UNESR', 'Se llevó a cabo la reunión informativa y de planificación con los docentes de nuestra casa de estudios', '2024-04-08', '1:30pm', 'Dr Evelyn Medina', '', 1, 1),
(3, 'Reunión entre representantes de la UNESR e INCES Regional', 'Hoy reunidos en la sede del INCES Yaracuy planificando las actividades formativas dirigidas a facilitadores y participantes de la UNESR, Extensión San Felipe', '2024-04-08', '10:00am', 'Lcdos Luis Traviezo y Johana Garcia,Dres Evelyn Medina y Miriam Sanchez y Prof Viky Fuentes', '', 1, 1),
(4, 'Clase magistral.', 'Reclutamiento de personal', '2024-04-12', '2:00pm', 'Lcdo Cruz Maestre', '', 1, 1),
(5, 'Simposio. Paradigmas', 'Conversatorio sobre los diferentes paradigmas en estudio', '2023-12-08', '9:00am', 'Dr. Gabriel Peraza, Dra. Evelyn Medina y Msc. Ana Perez', '', 1, 1),
(6, 'Cursos sobre corriente pedagógico', 'Estrategias ludicas para explicar las corrientes del pensamiento pedagógico', '2024-04-09', '2:00pm', 'Maria Verastegui', '', 1, 1),
(7, 'Visita guiada: Lácteos Valle Verde', 'Recorrido para el conocimiento del proceso productivo para la elaboración de los alimentos que allí se comercializan ', '2024-02-14', '8:00am', 'Prof. Iraida Guerrero', '', 1, 1),
(8, 'Reunión con voceros de las diferentes carreras de la UNESR Ext San Felipe', 'Planificación y estrategias a seguir para mejoras continuas en cuanto a captación de nuevos participantes', '2024-03-05', '2:00pm', 'Dr. Evelyn Medina', '', 1, 1),
(9, 'Curso de higiene y manipulación de alimento', 'Conocer las medidas de seguridad y salubridad en el proceso de elaboración de alimentos', '2024-03-14', '8:00am', 'Ing. Sorangel Manto, Ing Rene Martinez', '', 1, 1),
(10, 'Buenas practicas de fabricación', 'Proceso para la elaboración y fabricación de productos', '2024-03-25', '8:00am', 'Ing Iraidy Aguero y TSU Felix Lopez', '', 1, 1),
(11, 'Asesoria colectiva: Inspección laboral', 'Dar a conocer los aspectos legales de las actuaciones en las entidades de trabajo', '2024-03-30', '9:00am', 'Lcd Msc Jennifer Colmenarez', '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_instituto`
--

CREATE TABLE `table_instituto` (
  `id_instituto` int(5) NOT NULL,
  `nombre_instituto` varchar(50) NOT NULL,
  `tlf_instituto` varchar(50) NOT NULL,
  `email_instituto` varchar(50) NOT NULL,
  `direccion_instituto` text NOT NULL,
  `face_instituto` varchar(100) DEFAULT NULL,
  `insta_instituto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `table_instituto`
--

INSERT INTO `table_instituto` (`id_instituto`, `nombre_instituto`, `tlf_instituto`, `email_instituto`, `direccion_instituto`, `face_instituto`, `insta_instituto`) VALUES
(1, 'Universidad Nacional Experimental Simon Rodriguez', '+58 1234567', 'uners.ext.sanfelipe@gmail.com', 'Zona industrial Agustín Rivero, Edif. CIEPE, Piso 1, San Felipe 3201, Yaracuy', 'https://www.facebook.com/profile.php?id=100077915053263', 'https://www.instagram.com/unesrsanfelipe/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_pensamiento`
--

CREATE TABLE `table_pensamiento` (
  `id_pensamiento` int(11) NOT NULL,
  `id_instituto` int(1) NOT NULL,
  `pensamiento` text NOT NULL,
  `pagina_instituto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `table_pensamiento`
--

INSERT INTO `table_pensamiento` (`id_pensamiento`, `id_instituto`, `pensamiento`, `pagina_instituto`) VALUES
(1, 1, '\"El que no estudia, cualquiera lo engaña, y el que no tiene cualquiera lo compra\"', 'home'),
(2, 1, '\"Sólo la educación impone obligaciones a la voluntad. Estas obligaciones son las que llamamos hábitos.\"', 'captacion'),
(3, 1, '\"Enseñar es hacer comprender; es emplear el entendimiento; no hacer trabajar la memoria\"', 'contacto'),
(4, 1, '\"Enseñen, y tendrán quien sepa; eduquen, y tendrán quien haga.\"', 'pregunta'),
(5, 1, '\"Toca a los maestros hacer conocer a los niños el valor del trabajo, para que sepan apreciar el valor de las cosas.\"', 'nosotros'),
(6, 1, '\"¿Dónde iremos a buscar modelos? La América Española es original. Original han de ser sus instituciones y su Gobierno y originales de fundar unas y otro. O inventamos o erramos.\"', 'carreras'),
(7, 1, '\"El maestro de niños debe ser sabio, ilustrado, filósofo y comunicativo, porque su oficio es formar hombres para la sociedad.\"', 'inscripcion'),
(8, 1, '\"El título de maestro no debe darse sino al que sabe enseñar, esto es, al que enseña a aprender; no al que manda aprender o indica lo que se ha de aprender, ni al que aconseja que se aprenda. El maestro que sabe dar las primeras instrucciones, sigue enseñando virtualmente todo lo que se aprende después, porque enseñó a aprender.\"', 'periodos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_preguntas`
--

CREATE TABLE `table_preguntas` (
  `id_pregunta` int(1) NOT NULL,
  `pregunta_instituto` text NOT NULL,
  `respuesta_instituto` text NOT NULL,
  `id_instituto` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `table_preguntas`
--

INSERT INTO `table_preguntas` (`id_pregunta`, `pregunta_instituto`, `respuesta_instituto`, `id_instituto`) VALUES
(1, '¿Cuáles son las fortalezas de la Unesr?', 'Brinda horizontalidad en el sentido que permite tomar decisiones entre toda la comunidad estudiantil. Carácter Andragógico. Comprende una comunidad de gente adulta capaz de: Formular su propio proyecto de desarrollo estudiantil.', 1),
(2, '¿Cuál es la importancia de la Unesr?', 'La Universidad Nacional Experimental Simón Rodríguez tiene como misión fundamental la búsqueda, generación, aplicación y difusión del conocimiento y el afianzamiento de los valores trascendentales del hombre y la sociedad.', 1),
(3, '¿Cuáles son los principios con los que se rige la universidad Simón Rodríguez?', 'La Universidad Nacional Experimental Simón Rodríguez se suscribe a los principios fundamentales del hombre, la educación liberadora, la andragogía y la herencia de progreso y pensamiento de nuestro epónimo Simón Rodríguez.', 1),
(4, '¿Cuáles son los valores de la universidad Simón Rodríguez?', 'Ser una institución pluralista y democrática, crítica en cuanto al análisis y conclusiones sobre el desenvolvimiento de su entorno, fundamentada en los valores universales de pertinencia, justicia, solidaridad, libertad y respeto a la disidencia.', 1),
(5, '¿Qué importancia tiene la Universidad para la sociedad?', 'La Universidad es el lugar por excelencia para la producción científica y social, la organiza- ción de este sistema está muy vinculada con la enseñanza tanto en licenciatura como en posgrado. Hacia el exterior, tiene vinculación con actividades extramuros como el servicio social universitario.', 1),
(6, '¿Que aporte hizo Simón Rodríguez a la educación?', 'Simón Rodríguez fue un educador de avanzada que preconizaba la educación popular para la formación de republicanos por lo que creía en la importancia de formar a las personas para construir un nuevo orden social, y promovía nuevas orientaciones para la acción educativa social y política.', 1),
(7, '¿Cuál es la filosofía de la UNESR?', 'Está orientada a consolidar una Universidad capaz de formar los promotores y conductores de la nueva realidad nacional, basada en la universalización de la educación y en la colectivización del saber, colocando el saber al servicio de las comunidades.', 1),
(8, '¿Que represento Simón Rodríguez en la educación venezolana?', 'Simón Rodríguez, en 1794 presentó al Cabildo de Venezuela un proyecto de Escuelas Públicas, donde analizaba el sistema educativo para aquel entonces y donde planteaba la necesidad de la participación activa de los alumnos en las cátedras, exponiendo sus ideas y aclarando sus dudas.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_testimonio`
--

CREATE TABLE `table_testimonio` (
  `id_testimonio` int(11) NOT NULL,
  `persona_testimonio` varchar(20) NOT NULL,
  `testimonio` text NOT NULL,
  `puesto_persona_testimonio` varchar(20) NOT NULL,
  `img_persona` varchar(60) NOT NULL,
  `status_testimonio` int(1) NOT NULL,
  `id_instituto` int(11) NOT NULL,
  `fecha_testimonio` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `table_testimonio`
--

INSERT INTO `table_testimonio` (`id_testimonio`, `persona_testimonio`, `testimonio`, `puesto_persona_testimonio`, `img_persona`, `status_testimonio`, `id_instituto`, `fecha_testimonio`) VALUES
(1, 'william enrique', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, fuga. Cum repellat quis temporibus esse expedita placeat animi dolorum veniam!', 'Estudiante', '', 1, 1, '2024-04-30'),
(2, 'jose luis', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, fuga. Cum repellat quis temporibus esse expedita placeat animi dolorum veniam!', 'estudiante ing', '', 1, 1, '2024-04-30'),
(3, 'karla perez', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, fuga. Cum repellat quis temporibus esse expedita placeat animi dolorum veniam!', 'Estudiante', '', 1, 1, '2024-04-30'),
(4, 'alejandro ortega', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, fuga. Cum repellat quis temporibus esse expedita placeat animi dolorum veniam!', 'estudiante ing', '', 1, 1, '2024-04-30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `table_autoridades`
--
ALTER TABLE `table_autoridades`
  ADD PRIMARY KEY (`id_autoridad`);

--
-- Indices de la tabla `table_documentos`
--
ALTER TABLE `table_documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `table_equipo`
--
ALTER TABLE `table_equipo`
  ADD PRIMARY KEY (`id_equipo`);

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
-- Indices de la tabla `table_pensamiento`
--
ALTER TABLE `table_pensamiento`
  ADD PRIMARY KEY (`id_pensamiento`);

--
-- Indices de la tabla `table_preguntas`
--
ALTER TABLE `table_preguntas`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `table_testimonio`
--
ALTER TABLE `table_testimonio`
  ADD PRIMARY KEY (`id_testimonio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `table_autoridades`
--
ALTER TABLE `table_autoridades`
  MODIFY `id_autoridad` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `table_documentos`
--
ALTER TABLE `table_documentos`
  MODIFY `id_documento` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `table_equipo`
--
ALTER TABLE `table_equipo`
  MODIFY `id_equipo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `table_evento`
--
ALTER TABLE `table_evento`
  MODIFY `id_evento` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `table_instituto`
--
ALTER TABLE `table_instituto`
  MODIFY `id_instituto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `table_pensamiento`
--
ALTER TABLE `table_pensamiento`
  MODIFY `id_pensamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `table_testimonio`
--
ALTER TABLE `table_testimonio`
  MODIFY `id_testimonio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
