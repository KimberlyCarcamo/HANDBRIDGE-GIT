-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2025 a las 03:42:23
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
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Hogares de niños'),
(2, 'Asilos'),
(3, 'Hogares de mascotas'),
(4, 'Limpieza de playas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_personas`
--

CREATE TABLE `login_personas` (
  `id` int(11) NOT NULL,
  `cuenta` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login_personas`
--

INSERT INTO `login_personas` (`id`, `cuenta`, `contraseña`) VALUES
(1, 'Mariasibira308@gmail.com', '12345'),
(2, '3564501@clases.edu.sv', '8O7XL8S'),
(3, 'Carloshernan123@gmail.com', 'kg2Eyvq2'),
(4, '3564501@clases.edu.sv', 'lSrzy0Fi'),
(5, '3564501@clases.edu.sv', 'rqOexnWYcVS'),
(6, '3564501@clases.edu.sv', 'gvjhklh'),
(7, 'Asley_tobar@gmail.com', 'jJK2\'234'),
(8, 'Soniaargeta_512@gmail.com', 'Knocking'),
(9, 'Carlosponce@gmail.com', '$2y$10$2RAbITVrjj477xHCzIxKiekkadcWgm01S07g6gTIXfHHNsxq1UU7m'),
(10, 'Emily.34@gmal.com', '$2y$10$RVDbZpVotPIEOEGaihXIVOFMTqb08Lb5BEcet9D2J1DKLP.HDUetC'),
(11, 'Alonso@gmail.com', '$2y$10$lqfb5SyfxMMRnQL.cC.qfOKqnBCguVYLBzwBH/48AKdK8z3rgd0EW'),
(12, 'CarolMendoza@gmail.com', '$2y$10$T2UwbrRzNGOhhxM0xLI7IeLuKlEF8Fg1ga4xyI2rkSw31gbXjOC1G'),
(13, 'IsraelMendoza@gmail.com', '$2y$10$uKnWqwSzihhO8vRH4H4jsubZfc8bUOzOwm4pboOlYTVbU8NVCT3be');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dui` varchar(20) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `apellido`, `dui`, `correo`, `contraseña`, `fecha_registro`) VALUES
(1, 'blanca', 'Gutierres', '1234567-8', 'Soniaargeta_512@gmail.com', '$2y$10$fdWUDNmKqeM/DG0ogTZ/7uu6cDC7cduzyDo95re8v/p6oMqRd7SOe', '2025-07-11 01:51:08'),
(5, 'Kimberly de los Angeles', 'Gutierres', '4356736-8', '3564501@clases.edu.sv', '$2y$10$I7Cxbh9rMkTjNttq658iI.sIyPy/aWru2czvprTymoCmX..JHuhc.', '2025-07-11 01:57:16'),
(7, 'Carmen Danile', 'Hernández', '4356745-9', 'marcois_@gmail.com', '$2y$10$ZqCUYPAYnSPyRhVpJhz5POhNI9WYdI7Hh2PCxJTEsfg6kYEOm4qv.', '2025-07-11 01:59:34'),
(8, 'fernando Camilo', 'chipagua Monje', '43543434-8', 'Carmen@gmail.com', '$2y$10$iMkKyYcAsJfVfTTFPfpOf.3urrtW.p.kirMNM.Y8If8l6AZWlsZmq', '2025-07-11 02:01:21'),
(9, 'Maria AngelA', 'Sibrian', '9734563-8', 'Marisibran721_@gmail.com', '$2y$10$UAjbOIPIQiB3Iv4/c.ABXe0f4pKDetVNR97b9WtEITjutfL1d6Cpe', '2025-07-11 02:03:44'),
(10, 'Sonia Lucia', 'Garcia Galindo', '9734563-7', 'sonia@gmail.com', '$2y$10$fzUCicp7GOn9xi.QpihST.KxrJXJpsinGvq8ITh9Xi3aVxMwjH472', '2025-07-11 02:05:44'),
(11, 'Asley Raquel', 'Melchor Ortiz', '5463728-8', 'YuselyAlvarado@gmail.com', '$2y$10$.vSjM2K07hYVk8TZ2ov.gu4Z0CuOQG.yw6b3gXVr9lldb1fAiVLFK', '2025-07-11 02:13:48'),
(12, 'Alejandra Albvarado', 'perez Mendoza', '233785-8', 'YuselyGby@gmail.com', '$2y$10$oMdF.nXdINoRwUkRmBQhC.3M9qvrmgTUKQL4GIWhUuw89cBzHp7eq', '2025-07-11 02:21:04'),
(13, 'Carlos Antonio', 'Ponce Granados', '12874986-8', 'Carlosponce@gmail.com', '$2y$10$B5uWa8QbbUmk5MkVxFqtdONl/sWKdoyA8aFU0Scri7nQ1fIp7DEAW', '2025-07-19 01:04:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntariados`
--

CREATE TABLE `voluntariados` (
  `id_voluntariado` int(11) NOT NULL,
  `nombre_voluntariado` varchar(100) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `informacion` varchar(2000) DEFAULT NULL,
  `dias` varchar(100) DEFAULT NULL,
  `hora` varchar(60) DEFAULT NULL,
  `costo` varchar(60) DEFAULT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `redes` varchar(100) DEFAULT NULL,
  `direccion` varchar(500) DEFAULT NULL,
  `web` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `voluntariados`
--

INSERT INTO `voluntariados` (`id_voluntariado`, `nombre_voluntariado`, `id_categoria`, `informacion`, `dias`, `hora`, `costo`, `telefono`, `redes`, `direccion`, `web`) VALUES
(1, 'Hogar del niño San Vicente de Paul, ', 1, 'Acoger a niños/niñas en situación de riesgo o abandono que necesitan vivir y crecer en un ambiente de afecto con formación en valores.', 'Sabado, 12 de Julio del 2025', '9 am', '$5 USD', '02-2955355', 'Hsanvip@andinanet.net', NULL, NULL),
(2, 'Hogar Padre Vito Guarato', 1, 'Proveer un desarrollo integral para las personas con discapacidades en estado de abandono, potencializando las habilidades individuales para su inserción en la sociedad, procurándoles una vida digna.', 'Sabado, 12 de Julio del 2025', '9 am', '$5 USD', '(503) 2264-6162, FAX. (503) 2263-3855', 'info@hpvg.org.sv', NULL, NULL),
(3, 'Hogar Esperanza Contigo', 1, 'Transformamos la vida de la niñez en situación de abandono, mejorando su presente y potencializando su futuro.', 'Sabado, 12 de Julio del 2025', '9 am', '$5 USD', 'info@esperanzacontigo.org', NULL, NULL, NULL),
(5, 'Aldeas Infantiles SOS', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Latidos de Esperanza', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Sonrisas sin Fronteras', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Fundación NPH', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Hogar infantil Jesús Nazareno', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Hogar María Luisa', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Hechame Una Pata', 3, 'se dedica al rescate de perros en condición de calle, pero que fue en 2018 que decidió formalizar un refugio para el cuido personalizado de estos animales. Actualmente, este refugio alberga a 122 caninos, entre cachorros, jóvenes y en etapa adulta, quienes son cuidados y alimentados a diario para que se mantengan en las mejores condiciones.', 'Sabado, 12 de Julio del 2025', '9 am', '$5 USD', '7929-1589', 'Instagram: Échame una pata SV', NULL, NULL),
(12, 'FUNZEL', 3, 'Contribuir a la conservación de la vida silvestre en El Salvador a través de la implementación permanente de programas y proyectos, Sabemos y entendemos que cada especie tiene un papel importante en la preservación de los ecosistemas donde el ser humanos es parte integral de todas las acciones.', 'Sabado, 12 de Julio del 2025', '9 am', '$5 USD', '(503) 2566 6148', NULL, 'Calle Cumbres de Cuscatlán, Res. Altos de la Cima,\r\ncalle #2, #21, Antiguo Cuscatlán, La Libertad, El Salvador, C.A.', NULL),
(13, 'Mi Jardín de Peludos', 3, 'En Mi Jardín de Peludos, transformamos abandono en esperanza y dolor en amor.\r\nTu apoyo no solo alimenta, abriga y cuida, también regala segundas oportunidades.En Mi Jardín de Peludos, cada vida cuenta.\r\nÚnete a nosotros y marca la diferencia: cada perrito merece amor, refugio y una segunda oportunidad.', 'Sabado, 12 de Julio del 2025', '9 am', '$5 USD', '(503) 7396-1857', 'delacalleamijardin@gmail.com', 'Urbanizacion San Francisco 2, lote #4, Calle a, Zapotitan 1504', NULL),
(14, 'Adopte.org', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Fundación Huellitas de El Salvador', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Refugio Felino Cat Shelter El Salvador', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Asociación Milagros y Amor', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'FHMD CatDog El Salvador', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Proyecto Esperanza 503', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Fundación Hogar Felino', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'FUNZEL', 4, 'Contribuir a la conservación de la vida silvestre en El Salvador a través de la implementación permanente de programas y proyectos, Sabemos y entendemos que cada especie tiene un papel importante en la preservación de los ecosistemas donde el ser humanos es parte integral de todas las acciones.', 'Sabado, 12 de Julio del 2025', '9 am', '$5 USD', '(503)25666148', NULL, 'Calle Cumbres de Cuscatlán, Res. Altos de la Cima,\r\ncalle #2, #21, Antiguo Cuscatlán, La Libertad, El Salvador, C.A.', NULL),
(22, 'Limpiemos El Salvador', 4, 'El programa “Limpiemos El Salvador” tiene la convicción y el esfuerzo de excelencia hacia el desarrollo sostenible y los territorios ambientalmente resilientes. Este reto implica promover y gestionar acciones multi-niveles y multi-escalas en los diversos territorios en materia económica, social y ambiental.\r\nDía: Sabado, 25 de octubre del 2025', 'Domingos y Dias de semana', '7 am', '$2.50 USD', '(503) 2212-1799', NULL, NULL, NULL),
(23, 'MARN', 4, 'El programa “Limpiemos El Salvador” tiene la convicción y el esfuerzo de excelencia hacia el desarrollo sostenible y los territorios ambientalmente resilientes. Este reto implica promover y gestionar acciones multi-niveles y multi-escalas en los diversos territorios en materia económica, social y ambiental.', 'Sabado, 5 de agosto del 2025', '9 am', '$5 USD', '(503) 2212-1799', NULL, NULL, NULL),
(24, 'FUSATE', 2, 'Contribuir a mejorar la calidad de vida de las personas adultas mayores salvadoreñas, a través de brindar programas de beneficio y atención integral, mediante la red de Centros Integrales de Día, Filiales y Sub-Filiales en toda la República, en coordinación con la red social de cada localidad.', 'Domingo, 21 de septiembre del 2025', '7 am', '$5 USD', '(503) 7601-1262', NULL, 'Oficina Central: 37 Av. Sur No.531, Col. Flor Blanca, San Salvador', NULL),
(25, 'Asociacion de señoras de la caridad de San Vicente de Paúl', 2, 'La Asociación de Señoras de la Caridad de San Vicente de Paúl con siglas – ASCASVIP- es una asociación sin fines de lucro, con personalidad jurídica plena para ejercer los derechos y contraer las obligaciones que sean indispensables para la realización de sus fines. Creada bajo los principios de San Vicente de Paúl, orientada al servicio social que facilita y promueve el desarrollo integral de niños, adultos mayores y familias en situación de pobreza.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Hogar de ancianos Santa Tecla', 2, 'La Asociación de Señoras de la Caridad de San Vicente de Paúl con siglas – ASCASVIP- es una asociación sin fines de lucro, con personalidad jurídica plena para ejercer los derechos y contraer las obligaciones que sean indispensables para la realización de sus fines. Creada bajo los principios de San Vicente de Paúl, orientada al servicio social que facilita y promueve el desarrollo integral de niños, adultos mayores y familias en situación de pobreza.', 'Domingo, 4 de noviembre del 2025', '9 am', '$5 USD', '+502 2332-9951', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `login_personas`
--
ALTER TABLE `login_personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dui` (`dui`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `voluntariados`
--
ALTER TABLE `voluntariados`
  ADD PRIMARY KEY (`id_voluntariado`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `login_personas`
--
ALTER TABLE `login_personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `voluntariados`
--
ALTER TABLE `voluntariados`
  MODIFY `id_voluntariado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `voluntariados`
--
ALTER TABLE `voluntariados`
  ADD CONSTRAINT `voluntariados_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
