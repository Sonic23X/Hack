-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2018 a las 20:41:59
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crash`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `img` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `carrera` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `about`
--

INSERT INTO `about` (`id`, `nombre`, `img`, `descripcion`, `carrera`) VALUES
(1, 'Alfredo Ortega Ramírez', 'alfredo.jpg\r\n', 'Amante de la tecnologia, Amo desarrollar soluciones cretivas y rapidas. ¿Mi pasión? El desarrollo Web y los videojuegos. Estudiante de Ingenieria en Software en UPPolvo en 9° Cuatrimestre', 'Ingenieria en Software'),
(3, 'Karen Migdali Islas Solorio', 'Karen.jpg', 'Estudiante del 9º cuatrimestre de la carrera de Ingeniería Financiera en la Universidad Politécnica de Pachuca, recolector de información y programadora de frontend', 'Ingenieria Financiera'),
(4, 'Francisco Javier Acosta Perez', 'Francisco.jpg', 'Analista de datos estadísticos, desarrollador y gestor de proyectos de inversión, aquí andamos pa lo que se ofrezca.', 'Ingenieria Financiera'),
(5, 'Misael Maldonado Roldan', 'Misael.jpg', 'Vocero y presentador oficial de “CRASH BASH”, desarrollador de ideas pro activas y modelo de negocios, para que vayas y cuentes.', 'Ingenieria Financiera'),
(6, 'Jose Antonio Acosta Acosta', 'Jose.jpg', 'Analista y recolector de información externa e interna, identificar la problemática y tomar decisiones concretas, “impresionante”.', 'Ingenieria Financiera'),
(7, 'Rafael Contreras Ascencion', 'Rafael.jpg', 'Desarrollador y procesador de ideas que realmente ayuden a buscar las soluciones necesarias dentro de “CASH BASH”, pa aventar pa arriba.', 'Ingenieria Financiera'),
(9, 'Selena Pérez Flórez', 'Selena.jpg', 'Actualmente estudio la carrera de Ingeniería Financiera en Universidad Politécnica de Pachuca, Apoye en investigación y aportación de ideas para un mejor funcionamiento de la APP.', 'Ingenieria Financiera'),
(10, 'Alondra Vera Lazcano', 'Alondra.jpg', 'Actualmente estudio la carrera de Ingeniería Financiera en Universidad Politécnica de Pachuca, aporte en ideas de imagen y estética para una mejor imagen de la APP.', 'Ingenieria Financiera'),
(11, 'Lárice Citlalli Sánchez Estrada', 'Larice.jpg', 'Actualmente estudio la carrera de Ingeniería Financiera en Universidad Politécnica de Pachuca. En el proyecto desarrollado para una APP, los conocimientos que aporte fueron enfocados para la mejor imagen de la misma y el desarrollo del logotipo.', 'Ingenieria Financiera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro`
--

CREATE TABLE `centro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `lon` double NOT NULL,
  `lat` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `centro`
--

INSERT INTO `centro` (`id`, `nombre`, `lon`, `lat`) VALUES
(1, 'Apepelco', 20.099865, -98.810258),
(2, 'Huixmí', 20.07461, -98.682091);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `idlugar` int(11) NOT NULL,
  `descr` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`idlugar`, `descr`) VALUES
(4, 'Campo de Tiro, San Antonio El Desmonte S/N, 42111 Pachuca de Soto, Hgo'),
(5, 'Fraccionamiento Terranova, Hgo'),
(6, 'Fraccionaiento La Herradura, Hgo'),
(7, 'Fraccionamiento Valle Dorado, Hgo'),
(8, 'Fraccionamiento Valle Del Sol, Hgo'),
(9, 'Privada Gotas De Plata, Hgo'),
(10, 'Zona Plateada, Hgo'),
(11, 'Fraccionamiento Haciendas De Hidalgo, Hgo'),
(12, 'Fraccionamiento Pitayas, Hgo'),
(13, 'Colonia Nopalcalco, Hgo'),
(14, 'Ampliacion Nopalcalco, Hgo'),
(15, 'Santa Cruz, San Carlos, Pachuca de Soto, Hgo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rules`
--

INSERT INTO `rules` (`id`, `numero`, `descripcion`) VALUES
(1, 0, 'Las disposiciones del presente reglamento son de orden público y de interés general, y tienen por objeto regular todas las acciones relacionadas con los problemas y soluciones referentes a la generación, el procesamiento y la disposición final de los desechos sólidos no peligrosos.'),
(2, 1, 'Las disposiciones del presente reglamento son de orden público y de interés general, y tienen por objeto regular todas las acciones relacionadas con los problemas y soluciones referentes a la generación, el procesamiento y la disposición final de los desechos sólidos no peligrosos.'),
(3, 3, 'Para los efectos de este reglamento, se estará a las definiciones de conceptos que se contienen en la Ley de Equilibrio Ecológico y la Protección al Ambiente del Estado de Hidalgo, así como las siguientes:  \r\nPRESIDENCIA. - Presidencia Municipal de Pachuca\r\nBRIGADA DE RECOLECCION. - Conjunto de trabajadores de la Presidencia y/o de los concesionarios autorizados que se encargan de la recolección de los desechos sólidos.\r\nCOLECTOR PÚBLICO. - Recipiente autorizado por la Presidencia, destinado al almacenamiento temporal de los desechos sólidos generados por los peatones durante su tránsito por la vía pública.\r\nCONCESIONARIO. - Persona física o moral a la que se le otorgue el derecho de limpieza, recolección, almacenamiento, transporte, tratamiento, transferencia y disposición final de los desechos sólidos municipales.\r\nDISPOSICION FINAL. - Depósito permanente de los desechos en sitios o condiciones adecuadas para evitar danos a los ecosistemas.\r\nMANEJO DE LOS DESECHOS SÓLIDOS. - Conjunto de actividades relacionadas con la generación, recolección, transporte, almacenamiento, transferencia, procesamiento y disposición final de la basura.\r\nRECOLECCION. - Acción de tomar los residuos sólidos de sus sitios de almacenamiento para depositarlos a los sitios de disposición final.\r\nVIA PÚBLICA. - Áreas de tránsito y convivencia de usa común.\r\nTRANSPORTE. - Acción de trasladar los desechos sólidos a los sitios de disposición final'),
(4, 40, 'La recolección de los desechos sólidos no peligrosos que generen los habitantes del Municipio, consiste en la recepción de estos, por las brigadas de recolección.'),
(5, 41, 'Las brigadas de recolección sólo recibirán para su transporte, los desechos orgánicos e inorgánicos'),
(6, 42, 'La recolección de los desechos sólidos no peligrosos generados en el Municipio, podrá efectuarse única y exclusivamente a través de:  \r\n \r\na. El departamento de Saneamiento\r\nb. Por personas físicas o morales concesionarias del servicio. \r\n Al Departamento de Saneamiento le corresponde la recolección de:   \r\na. Los desechos sólidos no peligrosos generados en áreas públicas, \r\n b. Los desechos sólidos domésticos, \r\nc. Los desechos sólidos no peligrosos de origen no doméstico.\r\nd. Otras que convenga la Presidencia.'),
(7, 43, 'Los desechos sólidos no peligrosos serán recibidos por las unidades recolectoras en: \r\na. Recipiente, que serán devueltos al usuario.  \r\nb. Bolsas, cajas o su equivalente, sin devolución.  \r\nc. Atados de desechos sólidos de podas, cuyas ramas tengan como máximo un metro de longitud'),
(8, 44, 'Los habitantes domiciliados en calles, callejones o cerradas inaccesibles para las brigadas de recolección, podrán beneficiarse con el método de recolección en los días, horas y lugares previamente establecidos, quedando obligados a transportar sus desechos sólidos al sitio señalado para el efecto.'),
(9, 47, 'Los usuarios del servicio de recolección, deberán pagar los derechos que fije la Ley de Hacienda Municipal o la cuota convenida con los concesionarios autorizados.'),
(10, 48, 'El transporte de los desechos sólidos desde su fuente generadora hasta el sitio destinado para su disposición final, se realizará a través del responsable autorizados por la Presidencia.'),
(11, 49, 'El transporte de los desechos sólidos se efectuará mediante:  \r\nA. Carros de mano,  \r\nB. Vehículos automotores con caja integrada,  \r\nC. Vehículos automotores con remolque de contenedores, cuyo diseño haya aprobado la Presidencia por escrito, y  \r\nD. Otros autorizados por el Ayuntamiento.'),
(12, 50, 'Los carros de mana tendrán una capacidad no mayor de 200 litros colocados sobre una estructura con ruedas en la parte inferior'),
(13, 51, 'Los vehículos automotores con caja integrada tendrán las siguientes características:  \r\n A. La caja para el deposito será de metal o madera con tapa, protegida con pintura de aceite o similar y recubierta con lámina en la parte interior, para no permitir el escurrimiento del lixiviados.   \r\nB. Si fueran descubiertas, deberán cubrirlas de tal manera que se evite la dispersión de los desechos sólidos, durante el recorrido y que estos se mojen con la lluvia.  \r\nC. La clave de la empresa o dependencia y el número económico de la unidad, deberá aparecer en los laterales de la caja, de manera clara y legible, así con lo el teléfono para recibir quejas de la empresa concesionaria y del Departamento de Saneamiento.'),
(14, 52, 'Todos los demás vehículos autorizados por la Presidencia no especificados en este Reglamento, deberán contar con las leyendas alusivas en el artículo anterior.'),
(15, 54, 'Todos los transportes recolectores deberán cumplir con los requisitos que señalan los reglamentos vigentes en el Estado de Hidalgo, y en el Municipio.'),
(16, 59, 'Las unidades de recolección, deberán presentar buen aspecto y estar en condiciones óptimas para el servicio.'),
(17, 62, 'Los concesionarios del manejo de desechos sólidos tienen la obligación de utilizar en sus vehículos de recolección, los colores que los identifiquen, previa autorización de la Presidencia, debiendo ser distintos a los utilizados por vehículos propiedad del Municipio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE `ruta` (
  `no_ruta` int(11) NOT NULL,
  `descr` text COLLATE utf8_spanish2_ci NOT NULL,
  `h_inicio` time NOT NULL,
  `h_fin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ruta`
--

INSERT INTO `ruta` (`no_ruta`, `descr`, `h_inicio`, `h_fin`) VALUES
(1, 'Ruta', '00:00:00', '00:00:00'),
(3, 'Ruta', '00:00:00', '00:00:00'),
(5, 'Ruta', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta_lugar`
--

CREATE TABLE `ruta_lugar` (
  `no_ruta` int(11) NOT NULL,
  `idlugar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ruta_lugar`
--

INSERT INTO `ruta_lugar` (`no_ruta`, `idlugar`) VALUES
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(3, 11),
(3, 12),
(5, 13),
(5, 14),
(5, 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `centro`
--
ALTER TABLE `centro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`idlugar`);

--
-- Indices de la tabla `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `centro`
--
ALTER TABLE `centro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `idlugar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
