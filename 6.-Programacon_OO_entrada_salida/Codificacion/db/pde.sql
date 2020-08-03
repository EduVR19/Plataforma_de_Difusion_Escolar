-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2020 a las 03:58:25
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pde`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(7) NOT NULL,
  `usuario` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `usuario`, `contraseña`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `nombre` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_tutor` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nac` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `lugar_nac` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `curp` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `domicilio` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` bigint(150) DEFAULT NULL,
  `contraseña` varchar(8) DEFAULT '',
  `id_grupo` int(150) NOT NULL,
  `id_maestro` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nombre`, `nombre_tutor`, `correo`, `fecha_nac`, `lugar_nac`, `curp`, `domicilio`, `telefono`, `contraseña`, `id_grupo`, `id_maestro`) VALUES
(1, 'EDUARDO VICENTE REYNA VILLELA', 'VICENTE REYNA GARCIA', 'vicente@gmail.com', '19/10/2000', 'Monterrey N.L.', 'reve001019hnlylda2', 'Garcia', 8114971493, 'z1o8l9dy', 1, 1),
(2, 'ROLANDO ADAIR FACIO CAMPOS', 'ADAIA RAMIREZ CONTRERAS', 'adaia@gmail.com', '01/10/2012', 'Monterrey', 'gdfs9664510dvdcptp1', 'Monterrey', 8162168513, 'h3g5r6pa', 1, 1),
(3, 'ADRIAN ARTURO NAPOLES MANRIQUEZ', 'ALEXIS GILBERTO MARTINEZ SERRANO', 'alexis@gmail.com', '01/01/2010', 'Minas del Diente', 'cmzv9651061yqvenri6', 'Minas del Diente', 8196522565, 'x6v8n7ul', 1, 1),
(4, 'MIGUEL VILLANUEVA CASTAÑEDA', 'IRINA LLAMAS TORRES', 'irina@gmail.com', '14/01/2013', 'Las Palmas', 'qcti476322qrulwit8', 'Las Palmas', 8183927323, 'q2u8o8nh', 1, 1),
(5, 'PABLO KALAX OROZCO BARRIGA', 'JUAN CARLOS BELEN LUNA', 'juan@gmail.com', '01/08/2013', 'El Pinito', 'wsca592668xlrrglh10', 'El Pinito', 8118359711, 'z5d8w1ke', 1, 1),
(6, 'MELISSA CARRILLO HERNANDEZ', 'ALEXIS PANTOJA PINEDA', 'alexis@gmail.com', '19/08/2011', 'Carta Blanca', 'jdpp726166jezgkuk1', 'Carta Blanca', 8171229976, 'n5p7d10j', 1, 1),
(7, 'SALVADOR MATEOS RANGEL', 'GUILLERMO ROJAS ALTAMIRANO', 'guillermo@gmail.com', '01/08/2013', 'El Arroyo', 'wmtb6210533ajkzgxy1', 'El Arroyo', 8199383385, 'x6z5v7xd', 1, 1),
(8, 'HAYDEE CARBAJAL LOPEZ', 'KRISTIAN ANTONIO CERINO CORDOVA', 'kristian@gmail.com', '01/08/2012', 'Casa Blanca', 'mlmm8197810dvtggej2', 'Casa Blanca', 8135129877, 's4p3c5ad', 1, 1),
(9, 'HUMBERTO ALEJANDRO MU?IZ COLORADO', 'CLAUDIA IVONNE HERNANDEZ PEREZ', 'claudia@gmail.com', '30/01/2012', 'Los Nogales', 'nlqm8516109ibsspcq10', 'Los Nogales', 8144449611, 'g4d2z2ve', 1, 1),
(10, 'CARLOS ENRIQUE ALVARO MENDOZA', 'GUADALUPE ANISLADA SANTIBA?EZ GARCIA', 'guadalupe@gmail.com', '17/09/2010', 'Las Palmas', 'oczc191191hxloceu8', 'La Herradura (Ex-pedrera)', 8189662471, 'o7i6p10i', 1, 1),
(11, 'RICARDO ISABEL ESCAMILLA GONZALEZ', 'ANDREA PAZ MENDOZA', 'andrea@gmail.com', '20/08/2012', 'Las Palmas', 'rzao1021159zuciwbk1', 'Guadalupe', 8121431849, 'm7p8i4pf', 1, 1),
(12, 'ANGELA NANNI ALVAREZ', 'ADRIANA LUCIA TREJO ALBUERNE', 'adriana@gmail.com', '01/09/2013', 'Santa Cruz', 'secb951524zmnkwds6', 'Santa Cruz', 8173983943, 'b3t7y5xl', 1, 1),
(13, 'VALERY JOSEPH ', 'INGRID MINERO ALFARO', 'ingrid@gmail.com', '01/08/2013', 'Guadalupe', 'nhwl588518ofqnivz10', 'Guadalupe', 8168763758, 'm6t3c5ws', 1, 1),
(14, 'RAFAEL BAHENA PEREZ', 'ERICK DANIEL PADILLA MARTINEZ', 'erick@gmail.com', '01/08/2013', 'Guadalupe', 'vajc4533910aqhinrd7', 'Santa Cruz', 8153649926, 'h4u6n9de', 1, 1),
(15, 'ANGELA YUMIL ROMERO MOZQUEDA', 'JUAN MANUEL GONZALEZ COBOS', 'juan@gmail.com', '01/09/2011', 'La Pachona', 'usma15510610zxugqzx6', 'La Pachona', 8141722698, 'c8w7p10n', 1, 1),
(16, 'DIANA MARCELA SARMIENTO PAEZ', 'LIZBETH SARAI ALVAREZ SANCHEZ', 'lizbeth@gmail.com', '13/08/2012', 'Cumbres Elite', 'knai945357cetrxzj9', 'Cumbres Elite', 8153711598, 'g9a4k10s', 1, 1),
(17, 'JORGE ALBERTO RAMOS HERNANDEZ', 'LEESLIE KARINA RIOS CORZO', 'leeslie@gmail.com', '03/09/2012', 'Cerradas de Cumbres', 'foqh91010344vjgrgtq10', 'Cerradas de Cumbres', 8168856992, 'v2e5y10b', 1, 1),
(18, 'CARMEN MARIA NOVELO DIAZ', 'VIOLETA RANGEL GALVAN', 'violeta@gmail.com', '08/08/2011', 'Santa Cruz', 'rdqp4355110wkcefxx6', 'Santa Cruz', 8157612812, 'x8l1n8mz', 1, 1),
(19, 'PABLO ALFONSO TIRADO CANTU', 'ROGELIO NI?O HERNANDEZ', 'rogelio@gmail.com', '27/08/2012', 'Santa Cruz	', 'rpsp834352fxhvuqx1', 'Santa Cruz	', 8114218146, 'h5a4i9mr', 1, 1),
(20, 'CESAR ERNESTO LOPEZ PEREZ', 'JEAQUELINE FLORES ALVAREZ', 'jeaqueline@gmail.com', '06/08/2012', 'Santa Cruz	', 'uvpa989762thajzoa5', 'Santa Cruz	', 8138789515, 'n7d3w2an', 1, 1),
(21, 'DANIELA ORDAZ PEREZ', 'SERGIO LUIS DEL MAZO ROBLES', 'sergio@gmail.com', '03/09/2012', 'Los Nogales', 'kdof378631lkdxqqh6', 'Los Nogales', 8164287489, 'p9q9t9xc', 2, 2),
(22, 'CARLOS FELIPE LUNA BAUTISTA', 'MARHEC SELENE TRUJILLO PACHECO', 'marhec@gmail.com', '01/08/2011', 'Regiomontano', 'atle853194lsifkoc7', 'Regiomontano', 8137886525, 'x4h3s8xj', 2, 2),
(23, 'PAUL ITAI GOMEZ PALESTINO', 'CESAR EMMANUEL CORONA GONZALEZ', 'cesar@gmail.com', '01/08/2013', 'Brecha Pemex (San Juan)', 'wixe637658wqxsoxg2', 'Brecha Pemex (San Juan)', 8181536989, 'c7s3u6ky', 2, 2),
(24, 'AMALIA KAROLINA GONZALEZ SANCHEZ', 'FREDDY JOSE NAREA JIMENEZ', 'freddy@gmail.com', '16/01/2012', 'Guadalupe', 'btpv953425mmrwowy6', 'Santa Cruz	', 8199367424, 'j8h6a6wd', 2, 2),
(25, 'CARMEN LETICIA CASTREJON BARRON', 'MARIA ALEJANDRA MEJIA CABALLERO', 'maria@gmail.com', '08/08/2011', 'Monclova Primer Sector', 'coqx99101023pikocju8', 'Monclova Primer Sector', 8112262625, 'a9p3f3zv', 2, 2),
(26, 'ELIZABETH REYES DE LA CRUZ', 'NORMA ALICIA POSADAS RAMIRO', 'norma@gmail.com', '03/09/2012', 'San Miguel de los Garza', 'eons1062313keyhrvo3', 'San Miguel de los Garza', 8172635742, 'z7l1r9ve', 2, 2),
(27, 'YESENIA JICEEL LUIS GARCIA', 'NALLELY SARAI BADILLO LARIOS', 'nallely@gmail.com', '04/01/2013', 'Ciudad General Escobedo', 'ldtb6108366pxipouw1', 'Ciudad General Escobedo', 8114578213, 'x1g6s10v', 2, 2),
(28, 'RICARDO CARREON SOSA', 'PABLO LOPEZ GOMEZ', 'pablo@gmail.com', '31/01/2011', 'Santa Cruz	', 'jige449712jrkcccd8', 'Santa Cruz	', 8165148438, 'c8k2c10p', 2, 2),
(29, 'VICTOR MANUEL CANTOR MEXQUITITLA', 'MITZI JOCELYN AMADOR MEJIA', 'mitzi@gmail.com', '06/08/2012', 'Guadalupe', 'yccj3108163kbnjnsz5', 'Guadalupe', 8179863386, 'j3d8m7fy', 2, 2),
(30, 'AURA MARIEL BECERRIL PARRA', 'JULIO CESAR SANCHEZ RODRIGUEZ', 'julio@gmail.com', '31/01/2011', 'La Pachona', 'jfus482634jpezwgt2', 'La Pachona', 8171396947, 'i6k6q6xl', 2, 2),
(31, 'EDNA MARIA LOPEZ CARRION', 'JUAN JOSE UNZUETA MENDOZA', 'juan@gmail.com', '01/02/2010', 'San Juan (Escobedo)', 'jbem5541810qqclptn8', 'San Juan (Escobedo)', 8173856452, 's9q6u8fn', 2, 2),
(32, 'ROLANDO GONZALEZ PADILLA', 'ERIKA FERNANDEZ OJEDA', 'erika@gmail.com', '01/08/2012', 'San Luis', 'esdl491452xftdyuq1', 'San Luis', 8158229549, 'g5p6h1dr', 2, 2),
(33, 'SARAH GUTIERREZ DELGADO', 'IRVING LUNA ORTIZ', 'irving@gmail.com', '01/08/2013', 'San Miguel de los Garza', 'zpiq118237cvfawol9', 'San Miguel de los Garza', 8127162453, 'a8a4z9cr', 2, 2),
(34, 'CAROLINA BUENROSTRO PEREZ', 'ALMA DANISA ROMERO OCA?O', 'alma@gmail.com', '06/08/2012', 'Los Naranjos (Santa Genoveva)', 'muse267281vxsqtsk2', 'Los Naranjos (Santa Genoveva)', 8127245637, 'd2c9o8uw', 2, 2),
(35, 'SAYRA YESENIA MEDINA ORTA', 'VERONICA LIZETH NARANJO MANRIQUEZ', 'veronica@gmail.com', '01/02/2013', 'Sk (Suksa)', 'wodq196756oihlcro7', 'Sk (Suksa)', 8168687534, 'm6r5v7ln', 2, 2),
(36, 'MINERVA GARCIA LANDA', 'ROGELIO HERNANDEZ VERGARA', 'rogelio@gmail.com', '04/03/2013', 'El Sol', 'vgsj6105215yyeyhhh2', 'El Sol', 8144134176, 'y8g3s7rt', 2, 2),
(37, 'LUIS ALBERTO HERRERA SOTOMAYOR', 'ANTONIO ADAME FLORES', 'antonio@gmail.com', '01/09/2013', 'El Diecinueve', 'rrgo591655uiryumb3', 'El Diecinueve', 8182422434, 'c5l2a1dm', 2, 2),
(38, 'MA. DEL ROSARIO TORRES NU?EZ', 'SARAI JOSEFINA AGUIRRE MEDRANO', 'sarai@gmail.com', '05/09/2011', 'El Carmen', 'lfwt453567npuwqis10', 'El Carmen', 8161759636, 'w7x5t3op', 2, 2),
(39, 'LIZBETH VERA ESQUEDA', 'FIDEL PAREDES XOCHIHUA', 'fidel@gmail.com', '01/09/2011', 'El Quince', 'fvoo355846fvlslxt10', 'El Quince', 8199543327, 'r5v7z1gj', 2, 2),
(40, 'LILIANA MONZALVO PEREZ ROJO', 'ROSA IRIS VIERA DIAZ', 'rosa@gmail.com', '04/01/2013', 'Los Cort?s', 'wpco8159810bobrkqb6', 'Los Cortés', 8117536552, 'n7d5j6wq', 2, 2),
(41, 'FRANCISCO JAVIER CERDA NAREZ', 'FRANCISCO GUILLERMO INFANTE SOLIS', 'francisco@gmail.com', '09/08/2010', 'La Angostura', 'sxfv7844310ddyadvl4', 'La Angostura', 8139423348, 'u5d7z7ag', 3, 3),
(42, 'RODRIGO RUBEN HERNANDEZ GONZALEZ', 'RUTH ESKENAZI BETECH', 'ruth@gmail.com', '01/08/2013', 'Muelles Simsa S. A.', 'uxls527329fdqqjxq3', 'Muelles Simsa S. A.', 8186388348, 'i4a8i1ze', 3, 3),
(43, 'VICTOR EDUARDO HERNANDEZ ALVARO', 'DIEGO IVAN OROZCO BALBUENA', 'diego@gmail.com', '01/09/2011', 'San Andrés', 'brep2103179xaotamd4', 'San Andrés', 8147487777, 'a4t9c2sf', 3, 3),
(44, 'LAURA SALAZAR CORONA', 'MICHELINE GUTIERREZ PRIETO', 'micheline@gmail.com', '01/08/2013', 'San Luis', 'yvxt558686mwfezkd10', 'San Luis', 8151565742, 'j9u5h8nr', 3, 3),
(45, 'ALEJANDRO BARRON DUARTE', 'SAMANTHA SINGH ', 'samantha@gmail.com', '01/09/2013', 'El Guante de Oro', 'umdn2491081usjkksl10', 'El Guante de Oro', 8172382864, 'm7z3d1dg', 3, 3),
(46, 'ANA KAREN CRUZ GOMEZ', 'CARLOS MIGUEL VARELA SCHERRER', 'carlos@gmail.com', '01/06/2013', 'La Piedra', 'nqee772874aiptkub10', 'La Piedra', 8147437271, 'b6p9c4el', 3, 3),
(47, 'LUIS JAVIER SANCHEZ FONSECA', 'JONATHAN FREGOSO LOPEZ', 'jonathan@gmail.com', '17/09/2012', 'San Jos?', 'nygc321682zvhoexe9', 'San José', 8196851957, 'i1p2x5yf', 3, 3),
(48, 'ROSA MARIA OLIVEROS SANCHEZ', 'HECTOR MARTINEZ GARCIA', 'hector@gmail.com', '28/01/2013', 'Ninguno', 'xngg9551022rqmngab6', 'Ninguno', 8112678312, 'q5s4b8vv', 3, 3),
(49, 'ADRIAN FRAUSTO MARTIN DEL CAMPO', 'ROBERTO LORENZO GONZALEZ', 'roberto@gmail.com', '01/09/2013', 'El Merendero', 'fjqe576918dpyhcat7', 'El Merendero', 8184931423, 'k7p4d1fi', 3, 3),
(50, 'FRANCO ANTONIO ROCHA DIAZ', 'LAURA GUZMAN CORNEJO', 'laura@gmail.com', '01/08/2013', 'Los Morales', 'mcnf932489rxwtvqa3', 'Los Morales', 8194638499, 't1e3f9jm', 3, 3),
(51, 'EDGAR ISLAS ORTIZ', 'GUILLERMO GUADARRAMA MENDOZA', 'guillermo@gmail.com', '01/08/2011', 'El Rey [Productos Qu?micos]', 'wxpw142144qiifflx9', 'El Rey [Productos Químicos]', 8158382513, 'z6y9j8du', 3, 3),
(52, 'GERARDO ALBERTO LOPEZ LICERIO', 'MIGUEL ANGEL ARREOLA REYES', 'miguel@gmail.com', '01/08/2013', 'Victorino Pérez', 'tmcm339273kgbznfq8', 'Victorino Pérez', 8159546757, 't5c2y1lz', 3, 3),
(53, 'YESICA ROSALINA CRUZ MARTINEZ', 'JOSE RIVERA LOPEZ RAYON', 'jose@gmail.com', '01/08/2011', 'Dolfin Ríos', 'nbrn827741mcwtjhv9', 'Dolfin Ríos', 8128933263, 'z3v3g2rk', 3, 3),
(54, 'BARUC RAFAEL ROSAS FLORES', 'BERTHA ALICIA HERNANDEZ MERCADO', 'bertha@gmail.com', '01/08/2013', 'Oca?as', 'updk393347htohsek2', 'Ocañas', 8117454935, 'r1e9p6dc', 3, 3),
(55, 'BRYAN RIGOBERTO ESCOBAR HERNANDEZ', 'MIRIAM LOPEZ GUZMAN', 'miriam@gmail.com', '01/03/2013', 'Dolores', 'jcex7864109enckzbk10', 'Dolores', 8178176756, 'j2v3g3uo', 3, 3),
(56, 'LUIS OSVALDO MARTINEZ LARA', 'NATALI GALEANO GUZMAN', 'natali@gmail.com', '01/08/2013', 'San Roberto', 'eojs627425yetfjln5', 'San Roberto', 8169877725, 'k8z1x9gh', 3, 3),
(57, 'MANUEL ELEAZAR MARTINEZ GUTIERREZ', 'CELIA ANGELICA PEREZ HERNANDEZ', 'celia@gmail.com', '01/08/2013', 'La Gloria', 'ajpm694961pivrisn5', 'La Gloria', 8121536775, 'b2i9m10r', 3, 3),
(58, 'DIANA VICTORIA NAVARRETE CARRIOLA', 'HAROLD NICHOLAY DIAZ ARDILA', 'harold@gmail.com', '01/03/2012', 'El Chaparral', 'cydq2785110atrhoph10', 'El Chaparral', 8184457194, 'f3s4a8xg', 3, 3),
(59, 'LUIS FELIPE VICENTE VILLEGAS MORENO', 'MARIA DEL CARMEN GRI?AN POZO', 'maria@gmail.com', '08/08/2011', 'Navegante', 'uslh17101081hajnwxu4', 'Navegante', 8145498267, 'k9p4l7nz', 3, 3),
(60, 'ANA VICTORIA GARCIA RODRIGUEZ', 'IRIS JAZMIN RODRIGUEZ GODINA', 'iris@gmail.com', '01/08/2013', 'Mariano Escobedo', 'scaa949855dwhbtfg6', 'Mariano Escobedo', 8112688188, 'a1b1i7ve', 3, 3),
(61, 'ARNOLDO GUTIERREZ BRIZUELA', 'ERIKA ARIAS FRANCO', 'erika@gmail.com', '08/08/2011', 'San Marcos', 'gcuw15231010mptjiyw2', 'San Marcos', 8148655625, 'z3j1z10x', 4, 4),
(62, 'FELIPE FERNANDO GARZA GARCIA', 'JULIO CESAR AGUILA SANCHEZ', 'julio@gmail.com', '15/08/2011', 'Lupita', 'qykl965887aojgnnb1', 'Lupita', 8141141694, 'h9l4t5ng', 4, 4),
(63, 'CRISTINA CHAVEZ HERNANDEZ', 'ANGEL ZU?IGA ROMERO', 'angel@gmail.com', '28/01/2013', 'Turkasa (La Joya)', 'ivoc194684rmustqu4', 'Turkasa (La Joya)', 8179637821, 'u5h4h6oz', 4, 4),
(64, 'ALEXIS MARTINEZ LUGO', 'JOSE SIFUENTES TURRUBIARTES', 'jose@gmail.com', '01/08/2009', 'Bugambilias (El Temporal)', 'pytp452491lzpawih4', 'Bugambilias (El Temporal)', 8188791185, 'd8s4b8cp', 4, 4),
(65, 'SEYEDEHNIOUSHA MOUSAVI ', 'JOSE MARCEL MEJIA HERNANDEZ', 'jose@gmail.com', '01/08/2013', 'La Bola', 'xmmb3810894xheqdnl6', 'La Bola', 8188224636, 'o3n4s6od', 4, 4),
(66, 'MELISSA BLANCA RAMIREZ', 'ANAID ESTRADA VARGAS', 'anaid@gmail.com', '01/02/2010', 'Rincón San Miguel', 'mnfl2528104fniucky3', 'Rincón San Miguel', 8178799849, 'o1g1l6hc', 4, 4),
(67, 'OSCAR LEONARDO SANTIAGO RAMIREZ', 'CESAR COVANTES OSUNA', 'cesar@gmail.com', '06/08/2012', 'Bios (Las Antonias)', 'xqmz3777910yglyjpy3', 'Bios (Las Antonias)', 8191846337, 'p7g5o6hh', 4, 4),
(68, 'JUAN ROGELIO TENA GARCIA', 'DIEGO ALFONSO CRUZ AGUILAR', 'diego@gmail.com', '09/01/2012', 'Ramiro De la Garza', 'wxdw1066995luugahs6', 'Ramiro De la Garza', 8177849816, 'j8e4o7dd', 4, 4),
(69, 'KEILA CRISTINA RAMIREZ SANTILLAN', 'JESSICA JAZMIN MALDONADO RAMOS', 'jessica@gmail.com', '01/03/2010', 'Francisco Sustaita', 'niqu7381082nclluec1', 'Francisco Sustaita', 8121735347, 'e3b7b7rc', 4, 4),
(70, 'LUIS ENRIQUE SOTO CORTES', 'ZABDIEL QUINTANA SALVADOR', 'zabdiel@gmail.com', '01/02/2012', 'Don Manuel', 'tqyg3837102njcygkl5', 'Don Manuel', 8182664228, 'z8s5d9rg', 4, 4),
(71, 'KARLA PERDOMO VELAZQUEZ', 'EVERARDO ARIAS SOLIS', 'everardo@gmail.com', '01/08/2013', 'Real Cumbres', 'wxgi734174ylmncoh7', 'Real Cumbres', 8174197623, 'j5u5m2us', 4, 4),
(72, 'KASSANDRA SALGUERO MARTINEZ', 'DAVID RICARDO POIRE DE LA CRUZ', 'david@gmail.com', '18/01/2012', 'Truz Cora', 'wmcn378689ottqain10', 'Truz Cora', 8172664559, 'r9a4l10x', 4, 4),
(73, 'PAMELA TORRES MARTINEZ', 'SAIDA NALLELI VALENCIA LUGO', 'saida@gmail.com', '01/08/2013', 'Arco Vial', 'kial372414jrocyum7', 'Arco Vial', 8157814852, 'a5i8n5nj', 4, 4),
(74, 'ABENTOFAIL PEREZ ORONA', 'ESTEFANI LARIOS CASTRO', 'estefani@gmail.com', '01/03/2012', 'San Miguel de los Garza (La Luz)', 'bvdl391555cyhpatc9', 'San Miguel de los Garza (La Luz)', 8199961552, 't6g1d4sk', 4, 4),
(75, 'LAURA PATRICIA LONDO?O TRUJILLO', 'RAYZA HERRERA IMPERIAL', 'rayza@gmail.com', '06/08/2012', 'Los Medrano', 'vpbg5778105uefyode2', 'Los Medrano', 8175399171, 'x9a9h8kg', 4, 4),
(76, 'ANA CRISTINA BALDERRAMA ARBALLO', 'CESAR JAVIK DORANTES BARRIOS', 'cesar@gmail.com', '01/02/2013', 'Monclova Segundo Sector', 'csbh19941010toaoubf10', 'Monclova Segundo Sector', 8151299827, 'g7w7j10b', 4, 4),
(77, 'RICARDO NIETO FUENTES', 'ANA MARIA ESTARDANTE ORTIZ', 'ana@gmail.com', '01/02/2011', 'Cerradas de An?huac', 'nxsb414647qptrsdd3', 'Cerradas de Anáhuac', 8157669669, 'f2b2q2ry', 4, 4),
(78, 'GISELLA LIZETTE ROSALES GONZALEZ', 'JUAN SEBASTIAN GRANADA CARDONA', 'juan@gmail.com', '01/08/2013', 'Cumbres Elite', 'sxow142658qqseovv1', 'Cumbres Elite', 8155454366, 'k2h7x5ku', 4, 4),
(79, 'MARIA DEL ROSARIO MAYA REYES', 'ALINA NAVARRETE FERNANDEZ', 'alina@gmail.com', '01/08/2013', 'Hacienda los Cantú', 'ogjs167752lcieiym4', 'Hacienda los Cantú', 8171954292, 'p1z1v8tf', 4, 4),
(80, 'ROSALBA QUINTANA BUSTAMANTE', 'IRIANI RAMOS VELAZQUEZ', 'iriani@gmail.com', '09/01/2012', 'San Antonio', 'abcn4104464amnejfv9', 'San Antonio', 8162889559, 's4s7p9sk', 4, 4),
(81, 'MIRNA AIDEE ROSALES GONZALEZ', 'CIRILO TOLEDO CRUZ', 'cirilo@gmail.com', '06/08/2012', 'El Recuerdo', 'ebsj6421094fffhiwy9', 'El Recuerdo', 8142253225, 'g8r9e4mr', 5, 5),
(82, 'HUGO IVAN MARTINEZ ARAUJO', 'LENNIS BEATRIZ ORDU?A CASTILLO', 'lennis@gmail.com', '06/08/2012', 'Miguel Villarreal', 'twee1893105ohwaceh7', 'Miguel Villarreal', 8138941178, 'k1q6p4mu', 5, 5),
(83, 'MAURICIO DIAZ CABRERA', 'ADRIANA TAPIA HERNANDEZ', 'adriana@gmail.com', '01/08/2011', 'Primo Chávez', 'vhpm988436kxgbzaj8', 'Primo Chávez', 8127113616, 'k8k1m10w', 5, 5),
(84, 'AARON BRITO RABADAN', 'MARCO ANTONIO GARCIA SANTILLAN', 'marco@gmail.com', '06/08/2012', 'El Molcajete', 'etuv9881088fnhzsfq6', 'El Molcajete', 8118175874, 'a7e2r5qk', 5, 5),
(85, 'VICTOR ALFONSO REYES EULALIO', 'XITLALIC CANDIA CORTES', 'xitlalic@gmail.com', '28/01/2013', 'Ninguno', 'cnlj936842zwpiusr6', 'Ninguno', 8192248241, 'r2r7g1vo', 5, 5),
(86, 'ROCIO ALEJANDRINA PARRA CARRILLO', 'KARINA ISIDRO HERNANDEZ', 'karina@gmail.com', '03/09/2012', 'La Loma', 'jjoz846485vldtgsb9', 'La Loma', 8196869551, 'j5u3p4mq', 5, 5),
(87, 'BRUCXEN ENRIQUE NU?EZ RODRIGUEZ', 'MAYRA KARINA ZAMORA GARCIA', 'mayra@gmail.com', '14/01/2013', 'Alianza Real', 'qcgv624121sqxjhos6', 'Alianza Real', 8151597547, 't3l7c3rq', 5, 5),
(88, 'JESUS DARIO BRACAMONTES MURILLO', 'ANDREA TORRES GARCIA', 'andrea@gmail.com', '01/08/2013', 'Praderas de San Francisco', 'nhqq952921drxyira10', 'Praderas de San Francisco', 8153558397, 'd1l5q8di', 5, 5),
(89, 'PABLO EHEKATZIN OROZCO ORTEGA', 'JESSICA ZAMORA GUTIERREZ', 'jessica@gmail.com', '01/08/2013', 'Palmiras', 'yaix682792zrcjkyl4', 'Palmiras', 8126627855, 'f8r7r2om', 5, 5),
(90, 'JUANIBETH GUADALUPE RAMIREZ CALDERON', 'MARIA DEL ROSARIO VILLAVICENCIO GUTIERREZ', 'maria@gmail.com', '01/08/2013', 'El Ranchito N?mero Uno', 'eljt763744tdiitah10', 'Guadalupe', 8132555295, 'a2d6i10k', 5, 5),
(91, 'ANDREA ELIZABETH ROMERO CARMONA', 'ALEJANDRA MONDRAGON FLORES', 'alejandra@gmail.com', '10/09/2012', 'Los Sitios (Las Marraneras)', 'tinj488692vivbttz8', 'Los Sitios (Las Marraneras)', 8127975868, 'z7q6r8cl', 5, 5),
(92, 'JESUS NICOLAS CIENEGA', 'JAIME EDUARDO HERNANDEZ RICO', 'jaime@gmail.com', '28/01/2013', 'Guadalupe', 'gybo213213iritjli7', 'Guadalupe', 8182973844, 'e9x5v4uu', 5, 5),
(93, 'EDER ALONSO GALLEGOS BAZAN', 'DARA KEYLA RUIZ SANCHEZ', 'dara@gmail.com', '16/08/2010', 'Las Escobas', 'zfcu433312otzwalq5', 'Las Escobas', 8149827629, 'n7f4p3cz', 5, 5),
(94, 'SUSANA JAZMIN RODRIGUEZ RENDON', 'LAURA MARIANA CONTRERAS ESPINOSA', 'laura@gmail.com', '01/02/2009', 'Las Escobas', 'wryu3841910zrpmpfg1', 'Las Escobas', 8123219883, 'r2l1q6xv', 5, 5),
(95, 'LUIS ROBERTO HERNANDEZ CHAVEZ', 'MIGUEL ANGEL HERNANDEZ ACUAYTE', 'miguel@gmail.com', '01/08/2013', 'El Refugio', 'zuzs4178610ynlzimx4', 'El Refugio', 8188157978, 'b3n6c10g', 5, 5),
(96, 'JORGE ALFREDO MU?IZ RAMIREZ', 'MANUEL EDUARDO VAQUERA CERVANTES', 'manuel@gmail.com', '04/02/2013', 'Bello Amanecer', 'uakz483668leqnyao9', 'Bello Amanecer', 8181679484, 'u7y9f1ad', 5, 5),
(97, 'CAROL MAYTE ROMO BARRERA', 'LIZETH DOMINGUEZ GOMEZ', 'lizeth@gmail.com', '01/08/2013', 'San Miguel', 'odug593428avhrfmf5', 'San Miguel', 8181157224, 'r2v9l2vy', 5, 5),
(98, 'ANTONIO OROZCO PLANCARTE', 'LIZ ARGELIA CHAVEZ TORRES', 'liz@gmail.com', '01/08/2013', 'Altamira', 'madg622962buqvppa6', 'Altamira', 8126419754, 'v9n6u3oc', 5, 5),
(99, 'IVAN DELGADO DE LA PAZ', 'OMAR YAMIL VIDAL LEON ROMAY', 'omar@gmail.com', '05/09/2011', 'El Gran Chaparral', 'blmz626795guneuxt4', 'El Gran Chaparral', 8136299814, 'j5s3q8ly', 5, 5),
(100, 'KAREN SANCHEZ ANGELES', 'JEAN BRANDON RAMIREZ CHAVEZ', 'jean@gmail.com', '14/01/2013', 'Los Puertos', 'wvue1056196yqdnjls6', 'Los Puertos', 8151378771, 'y5b7a9hd', 5, 5),
(101, 'LUIS CARLOS BALLESTEROS VASQUEZ', 'JULIO CESAR PARRA ACOSTA', 'julio@gmail.com', '21/01/2013', 'Casas Viejas', 'jkeo734438ajwssld9', 'Casas Viejas', 8196468484, 'k8v2f8zi', 6, 6),
(102, 'ROSA MARIA FLORES MARTINEZ', 'GUILLERMO PEREZ VILLARREAL', 'guillermo@gmail.com', '08/08/2011', 'Cortijo las Elisas', 'pffn129237qeafgex2', 'Cortijo las Elisas', 8177968729, 'v5u9x4mx', 6, 6),
(103, 'LUIS ALEJANDRO GARZA SOTO', 'MONSERRAT ANAID SOTO FUENTES', 'monserrat@gmail.com', '08/08/2011', 'Estación Cerro de la Silla', 'qbli143328sxghnaq1', 'Estación Cerro de la Silla', 8169185555, 'l1w5k6qe', 6, 6),
(104, 'JOSE LUIS MENDOZA CALDERON', 'MARIA GUADALUPE GODOY BELTRAN', 'maria@gmail.com', '07/08/2012', 'Miguel Lupita', 'zsmv2697910qwquwaa9', 'Miguel Lupita', 8197125827, 'f7h8n5nu', 6, 6),
(105, 'MARTHA ZAMORA GRANT', 'LIZ XOCHIQUETZAL HERNANDEZ CEREZO', 'liz@gmail.com', '01/09/2013', 'Doble G', 'hxyk668131etkzcsw6', 'Doble G', 8149158296, 'a3t7o5am', 6, 6),
(106, 'MARTIN IVAN WAH SUAREZ', 'JEISON ANDRES CORTES ZU?IGA', 'jeison@gmail.com', '01/03/2012', 'San Pablo', 'raah427154fhnkole2', 'San Pablo', 8187641961, 'j5i8i9aw', 6, 6),
(107, 'AMOR MADAI PE?A RAMOS', 'BRENDA DE JESUS FORTUNA REYNA', 'brenda@gmail.com', '01/08/2013', 'Los Doctores', 'msvo961986ktedxjo10', 'Los Doctores', 8161888647, 'u4x8f10p', 6, 6),
(108, 'VIRIDIANA RODRIGUEZ GONZALEZ', 'LUIS ANGEL ZARATE HERNANDEZ', 'luis@gmail.com', '14/09/2012', 'Receptora de Televisa', 'zrjr3910238ostaipl6', 'Receptora de Televisa', 8135154816, 'l1u7v4pp', 6, 6),
(109, 'JUAN JESUS PI?A LEYTE-VIDAL', 'ZEUS HUITZILOPOCHTLI PINEDO GUERRERO', 'zeus@gmail.com', '17/08/2012', 'Santa Cruz	', 'kbvf4106687xuyfdls10', 'Santa Cruz	', 8141861434, 'e1c9s7uy', 6, 6),
(110, 'DAVID RAFAEL FARIAS SEGOVIA', 'HILARIO MARTINES ARANO', 'hilario@gmail.com', '01/09/2013', 'El Ranchito', 'wahb613777zkyrjru3', 'El Ranchito', 8149123539, 'a6n7l2jl', 6, 6),
(111, 'DANIEL ENRIQUE HERNANDEZ HERNANDEZ', 'DANIELA RODRIGUEZ LUJAN', 'daniela@gmail.com', '01/03/2012', 'Las Escobas', 'gudp1016981csgvfbc8', 'Las Escobas', 8177842678, 'i3v4y7vv', 6, 6),
(112, 'DIDIER ALEJANDRO KU PISTE', 'RODOLFO MACIAS MORENO', 'rodolfo@gmail.com', '01/02/2012', 'El Refugio', 'acvl3124109uoojchp1', 'El Refugio', 8134432553, 'l3d8p6zk', 6, 6),
(113, 'OSCAR ALFONSO OROZCO INOWE', 'SHANNON ROSSLYN ESCOTO NAVARRO', 'shannon@gmail.com', '01/03/2013', 'Los Alamitos', 'nsap4329710eajhqob9', 'Los Alamitos', 8183995885, 'c3y2h10h', 6, 6),
(114, 'JOSE DE JESUS NU?EZ RAMIREZ', 'ANA MARIA ESPINOZA MARTINEZ', 'ana@gmail.com', '01/09/2013', 'Monclova Segundo Sector', 'tepq266542ehtakau10', 'Monclova Segundo Sector', 8144334646, 'e2x3o10f', 6, 6),
(115, 'FRANCISCO DE JESUS GUERRA MARTINEZ', 'EDDER GEOVANNY CASIO PEREZ', 'edder@gmail.com', '03/01/2013', 'Santa Cruz	', 'sxrd739947hxfiqao4', 'Santa Cruz	', 8171462359, 'n6k5z1xf', 6, 6),
(116, 'PABLO JOSE PALMA CANCINO', 'CESAR ITZCOATL GUERRERO MARTINEZ', 'cesar@gmail.com', '22/08/2011', 'Cumbres Elite', 'tzuh778284molpyyj6', 'Cumbres Elite', 8199223959, 'b5e6b5qj', 6, 6),
(117, 'GERARDO TREJO CRUZ', 'LAURA VANESSA RODRIGUEZ GONZALEZ', 'laura@gmail.com', '28/01/2013', 'Santa Cruz	', 'ijpu118561iucdosy6', 'Hacienda los Cantú', 8141561456, 'v9r4u10n', 6, 6),
(118, 'GUADALUPE GENOVEVA ELIZALDE LOPEZ', 'EMILIO CESAR ESLAVA AVILES', 'emilio@gmail.com', '01/08/2013', 'San Antonio', 'mjxy5758106ebhlztb3', 'San Antonio', 8168479978, 'd7g2s3yo', 6, 6),
(119, 'ALICIA LAUREANO FLORES', 'RAUL ALCALDE VAZQUEZ', 'raul@gmail.com', '16/08/2012', 'El Recuerdo', 'vvcm4776310gjhpflt3', 'El Recuerdo', 8161225275, 'm9h5c1lq', 6, 6),
(120, 'JORGE ARTURO GONZALEZ RIOS', 'ALFREDO ZARAGOZA CORDERO', 'alfredo@gmail.com', '16/01/2012', 'Miguel Villarreal', 'tdbj4367710dcvmaab6', 'Miguel Villarreal', 8197748611, 't8n3a9ls', 6, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_asignatura`
--

CREATE TABLE `alumno_asignatura` (
  `id_alumno` int(1) DEFAULT NULL,
  `id_asignatura` int(3) DEFAULT NULL,
  `calificacion` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno_asignatura`
--

INSERT INTO `alumno_asignatura` (`id_alumno`, `id_asignatura`, `calificacion`) VALUES
(4, 100, 98),
(1, 100, 89),
(4, 100, 98),
(6, 100, 87),
(3, 100, 98),
(10, 100, 90);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id_asignatura` int(3) NOT NULL,
  `nombre` varchar(18) DEFAULT NULL,
  `id_maestro` int(10) DEFAULT NULL,
  `id_grupo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id_asignatura`, `nombre`, `id_maestro`, `id_grupo`) VALUES
(100, 'Español 1', 1, 1),
(101, 'Matemáticas 1', 1, 1),
(102, 'Ciencias Naturales', 1, 1),
(103, 'Civica y Ética 1', 1, 1),
(104, 'Español 2', 2, 2),
(105, 'Matemáticas 2', 2, 2),
(106, 'Ciencias Naturales', 2, 2),
(107, 'Civica y Ética 2', 2, 2),
(108, 'Español 3', 3, 3),
(109, 'Matemáticas 3', 3, 3),
(110, 'Ciencias Naturales', 3, 3),
(111, 'Civica y Ética 3', 3, 3),
(112, 'Español 4', 4, 4),
(113, 'Matemáticas 4', 4, 4),
(114, 'Ciencias Naturales', 4, 4),
(115, 'Civica y Ética 4', 4, 4),
(116, 'Español 5', 5, 5),
(117, 'Matemáticas 5', 5, 5),
(118, 'Ciencias Naturales', 5, 5),
(119, 'Civica y Ética 5', 5, 5),
(120, 'Español 6', 6, 6),
(121, 'Matemáticas 6', 6, 6),
(122, 'Ciencias Naturales', 6, 6),
(123, 'Civica y Ética 6', 6, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_maestro` int(11) NOT NULL,
  `id_asignatura` int(11) NOT NULL,
  `id_alumno` int(7) NOT NULL,
  `comentario` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_maestro`, `id_asignatura`, `id_alumno`, `comentario`) VALUES
(44, 0, 0, 1, 'ÉXITO'),
(67, 0, 0, 4, 'Faltó de entregar la tarea 5'),
(70, 0, 0, 5, 'Excelente alumno, trabaja mucho'),
(71, 0, 0, 10, 'Excelente alumno, muy estudioso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(1) NOT NULL,
  `nombre_gpo` varchar(2) DEFAULT NULL,
  `aula` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `nombre_gpo`, `aula`) VALUES
(1, '1A', 1),
(2, '2A', 2),
(3, '3A', 3),
(4, '4A', 4),
(5, '5A', 5),
(6, '6A', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `id_maestro` int(150) NOT NULL,
  `nombre` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `domicilio` varchar(150) DEFAULT NULL,
  `telefono` bigint(150) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `fecha_ingreso` varchar(150) DEFAULT NULL,
  `grado_estudios` varchar(150) DEFAULT NULL,
  `id_grupo` int(150) DEFAULT NULL,
  `contraseña` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`id_maestro`, `nombre`, `domicilio`, `telefono`, `correo`, `fecha_ingreso`, `grado_estudios`, `id_grupo`, `contraseña`) VALUES
(1, 'LEONARDO FERNANDEZ BADILLO', 'Monterrey', 8117986214, 'leonardo@gmail.com', '31/08/2013', 'Licenciatura', 1, 'p8p9o8jx'),
(2, 'SHARON PALAFOX FELIX', 'Guadalupe', 8114987216, 'sharon@gmail.com', '22/12/2015', 'Preparatoria', 2, 'v1s7e10r'),
(3, 'ANDREA GUADALUPE COLIO ALATORRE', 'San Nicolas', 8111649872, 'andrea@gmail.com', '26/12/2014', 'Licenciatura', 3, 't1x3b3sm'),
(4, 'MONICA BEATRIZ HURTADO AYALA', 'Monterrey', 8119872164, 'monica@gmail.com', '31/07/2014', 'Licenciatura', 4, 'y3l9i2cb'),
(5, 'MAURY SOLORZANO VALENCIA', 'Guadalupe', 8121641987, 'maury@gmail.com', '12/12/2014', 'Preparatoria', 5, 'c6j9q8jq'),
(6, 'JOSE ALBERTO MEDINA CASTAÑEDA', 'Monterrey', 8121791486, 'jose@gmail.com', '31/07/2014', 'Licenciatura', 6, 'j9h1g5kj');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `id_grupo` (`id_grupo`),
  ADD KEY `id_profesor` (`id_maestro`);

--
-- Indices de la tabla `alumno_asignatura`
--
ALTER TABLE `alumno_asignatura`
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_Asignatura` (`id_asignatura`),
  ADD KEY `id_alumno_2` (`id_alumno`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id_asignatura`),
  ADD KEY `id_profesor` (`id_maestro`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_comentario` (`id_comentario`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`id_maestro`),
  ADD KEY `id_Grupo` (`id_grupo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id_asignatura` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id_maestro` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
