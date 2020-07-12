-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2020 a las 22:11:08
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `environment`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones`
--

CREATE TABLE `observaciones` (
  `id_mensaje` int(11) NOT NULL,
  `de` varchar(100) NOT NULL,
  `para` varchar(100) NOT NULL,
  `curso` int(4) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `observacion` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id_mensaje` int(11) NOT NULL,
  `de` varchar(100) NOT NULL,
  `para` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `version` varchar(2500) NOT NULL,
  `compromiso` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(37) NOT NULL,
  `institucion` varchar(17) NOT NULL,
  `sede` varchar(9) NOT NULL,
  `documento` int(15) NOT NULL,
  `grado` varchar(4) NOT NULL,
  `curso` int(4) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `institucion`, `sede`, `documento`, `grado`, `curso`, `password`, `rol`) VALUES
('ABAD CASTRILLO FRANCENIS', 'Juan Luis Londoño', 'Principal', 111111111, '11mo', 1103, 'abc100', 'Estudiante'),
('ACERO TOVAR JULIAN DAVID', 'Juan Luis Londoño', 'Principal', 111111112, '11mo', 1103, 'abc101', 'Estudiante'),
('ACUÑA GARCIA KAROL DAYANA', 'Juan Luis Londoño', 'Principal', 111111113, '11mo', 1103, 'abc102', 'Estudiante'),
('ALDANA VALDERRAMA SONIA', 'Juan Luis Londoño', 'Principal', 111111114, '11mo', 1103, 'abc103', 'Estudiante'),
('ASPRILLA PEREA DAILYS YISETH', 'Juan Luis Londoño', 'Principal', 111111115, '11mo', 1103, 'abc104', 'Estudiante'),
('AVILA MATIZ MIGUEL ANGEL', 'Juan Luis Londoño', 'Principal', 111111117, '11mo', 1103, 'abc106', 'Estudiante'),
('CARRASCAL JIMENEZ ELIANA E MARCELA', 'Juan Luis Londoño', 'Principal', 111111118, '11mo', 1103, 'abc107', 'Estudiante'),
('CARVAJAL RICO DANIEL ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111119, '11mo', 1103, 'abc108', 'Estudiante'),
('CASTAÑEDA RIOS EIMY KATERIN', 'Juan Luis Londoño', 'Principal', 111111120, '11mo', 1103, 'abc109', 'Estudiante'),
('CASTRO AVILA HEIDY TATIANA', 'Juan Luis Londoño', 'Principal', 111111121, '11mo', 1103, 'abc110', 'Estudiante'),
('CHINGATE RODRIGUEZ SANDRA JULIETH', 'Juan Luis Londoño', 'Principal', 111111122, '11mo', 1103, 'abc111', 'Estudiante'),
('DELGADO RUDA INGRID TATIANA', 'Juan Luis Londoño', 'Principal', 111111123, '11mo', 1103, 'abc112', 'Estudiante'),
('FRAILE CAMACHO KEVIN ANDRES', 'Juan Luis Londoño', 'Principal', 111111126, '11mo', 1103, 'abc115', 'Estudiante'),
('GOMEZ MONTIEL YERIMAR MARGARITA', 'Juan Luis Londoño', 'Principal', 111111127, '11mo', 1103, 'abc116', 'Estudiante'),
('GOMEZ RAMIREZ EDWIN SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111128, '11mo', 1103, 'abc117', 'Estudiante'),
('GONZALES MORENO ANGEL DAVID', 'Juan Luis Londoño', 'Principal', 111111129, '11mo', 1103, 'abc118', 'Estudiante'),
('JURADO GOMEZ MAIDY ALEXANDRA', 'Juan Luis Londoño', 'Principal', 111111131, '11mo', 1103, 'abc120', 'Estudiante'),
('MENDOZA VALBUENA YEISON RICARDO', 'Juan Luis Londoño', 'Principal', 111111132, '11mo', 1103, 'abc121', 'Estudiante'),
('NUÑEZ PIMENTEL ROBINSON', 'Juan Luis Londoño', 'Principal', 111111133, '11mo', 1103, 'abc122', 'Estudiante'),
('OCHOA SANTANA OSCAR DANIEL', 'Juan Luis Londoño', 'Principal', 111111134, '11mo', 1103, 'abc123', 'Estudiante'),
('PATIÑO OSORIO CRISTIAN CAMILO', 'Juan Luis Londoño', 'Principal', 111111135, '11mo', 1103, 'abc124', 'Estudiante'),
('PEREZ RAMIREZ JENNY ALEXANDRA', 'Juan Luis Londoño', 'Principal', 111111136, '11mo', 1103, 'abc125', 'Estudiante'),
('PULIDO PIMIENTA JUAN NICOLAS', 'Juan Luis Londoño', 'Principal', 111111137, '11mo', 1103, 'abc126', 'Estudiante'),
('RAMIREZ PARRA MARIA ESPERANZA', 'Juan Luis Londoño', 'Principal', 111111138, '11mo', 1103, 'abc127', 'Estudiante'),
('RAMOS GARCIA CARLOS ANDRES', 'Juan Luis Londoño', 'Principal', 111111139, '11mo', 1103, 'abc128', 'Estudiante'),
('REYES CASTAÑO JAIDER STEV', 'Juan Luis Londoño', 'Principal', 111111140, '11mo', 1103, 'abc129', 'Estudiante'),
('RIVERA SANCHEZ JUAN PABLO', 'Juan Luis Londoño', 'Principal', 111111141, '11mo', 1103, 'abc130', 'Estudiante'),
('RODRIGUEZ AGUIRRE DIEGO ANDRES', 'Juan Luis Londoño', 'Principal', 111111142, '11mo', 1103, 'abc131', 'Estudiante'),
('SANTAMARIA KEVIN ANDRES', 'Juan Luis Londoño', 'Principal', 111111143, '11mo', 1103, 'abc132', 'Estudiante'),
('TACHE PADILLA ADRIANA DELPILAR', 'Juan Luis Londoño', 'Principal', 111111144, '11mo', 1103, 'abc133', 'Estudiante'),
('TORRES TORRES LUNA SOFIA', 'Juan Luis Londoño', 'Principal', 111111145, '11mo', 1103, 'abc134', 'Estudiante'),
('VALDERRAMA ALEMAN DAYANA ALEXANDRA', 'Juan Luis Londoño', 'Principal', 111111146, '11mo', 1103, 'abc135', 'Estudiante'),
('VELANDIA CHAPARRO JUAN CAMILO', 'Juan Luis Londoño', 'Principal', 111111148, '11mo', 1103, 'abc137', 'Estudiante'),
('ACOSTA ACOSTA LUISA FERNANDA', 'Juan Luis Londoño', 'Principal', 111111149, '11mo', 1102, 'abc138', 'Estudiante'),
('AMEZQUITA MALLUNGO LAURA VALENTINA', 'Juan Luis Londoño', 'Principal', 111111150, '11mo', 1102, 'abc139', 'Estudiante'),
('ARIAS CUBIDES MARIA PAULA', 'Juan Luis Londoño', 'Principal', 111111151, '11mo', 1102, 'abc140', 'Estudiante'),
('AVELLA RICO NICOL DAHIANA', 'Juan Luis Londoño', 'Principal', 111111152, '11mo', 1102, 'abc141', 'Estudiante'),
('BARBOSA GOMEZ NICOLAS DAVID', 'Juan Luis Londoño', 'Principal', 111111153, '11mo', 1102, 'abc142', 'Estudiante'),
('BELLO MUÑOZ LAHURA XIMENA', 'Juan Luis Londoño', 'Principal', 111111154, '11mo', 1102, 'abc143', 'Estudiante'),
('BELTRAN CASTELLLANOS DAVID SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111155, '11mo', 1102, 'abc144', 'Estudiante'),
('BELTRAN GUTIERREZ SANTIAGO JOSE', 'Juan Luis Londoño', 'Principal', 111111156, '11mo', 1102, 'abc145', 'Estudiante'),
('BOTIA CASTRO LEONARDO ANTONIO', 'Juan Luis Londoño', 'Principal', 111111157, '11mo', 1102, 'abc146', 'Estudiante'),
('BURGOS SARMIENTO JULIO ESTEBAN', 'Juan Luis Londoño', 'Principal', 111111158, '11mo', 1102, 'abc147', 'Estudiante'),
('CADENA POSADA ESTEBAN ANDRES', 'Juan Luis Londoño', 'Principal', 111111159, '11mo', 1102, 'abc148', 'Estudiante'),
('CARDENAS HERRERA HAROL YESSID', 'Juan Luis Londoño', 'Principal', 111111160, '11mo', 1102, 'abc149', 'Estudiante'),
('CARVAJAL CORTES VALERIA', 'Juan Luis Londoño', 'Principal', 111111161, '11mo', 1102, 'abc150', 'Estudiante'),
('CASTILLO CARRANZA ESTIVEN LEONARDO', 'Juan Luis Londoño', 'Principal', 111111162, '11mo', 1102, 'abc151', 'Estudiante'),
('CORTES POLANIA ARNOLD CAMILO', 'Juan Luis Londoño', 'Principal', 111111163, '11mo', 1102, 'abc152', 'Estudiante'),
('DURAN GARCIA NICOLE TATIANA', 'Juan Luis Londoño', 'Principal', 111111164, '11mo', 1102, 'abc153', 'Estudiante'),
('FERRO ARIZA KAREN YOLITH', 'Juan Luis Londoño', 'Principal', 111111165, '11mo', 1102, 'abc154', 'Estudiante'),
('FIGUEIRA SANCHEZ DANIEL ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111166, '11mo', 1102, 'abc155', 'Estudiante'),
('GIRATA ARANGO JUAN CAMILO', 'Juan Luis Londoño', 'Principal', 111111167, '11mo', 1102, 'abc156', 'Estudiante'),
('GONZALEZ RODRIGUEZ LUISA MARIA', 'Juan Luis Londoño', 'Principal', 111111168, '11mo', 1102, 'abc157', 'Estudiante'),
('GUACANEME FORERO NICOLAS', 'Juan Luis Londoño', 'Principal', 111111169, '11mo', 1102, 'abc158', 'Estudiante'),
('HERNANDEZ RIVERA LEYDY DAYANA', 'Juan Luis Londoño', 'Principal', 111111170, '11mo', 1102, 'abc159', 'Estudiante'),
('LUNA LOPEZ SERGIO ALEXANDER', 'Juan Luis Londoño', 'Principal', 111111171, '11mo', 1102, 'abc160', 'Estudiante'),
('MONTOYA RODRIGUEZ KAREN TATIANA', 'Juan Luis Londoño', 'Principal', 111111172, '11mo', 1102, 'abc161', 'Estudiante'),
('MORA VERGARA ALEXANDER', 'Juan Luis Londoño', 'Principal', 111111173, '11mo', 1102, 'abc162', 'Estudiante'),
('NAJAS CALDERON MIGUEL ANGEL', 'Juan Luis Londoño', 'Principal', 111111174, '11mo', 1102, 'abc163', 'Estudiante'),
('OJEDA AVILA YURLEY VANESSA', 'Juan Luis Londoño', 'Principal', 111111175, '11mo', 1102, 'abc164', 'Estudiante'),
('OSORIO VALBUENA YESSELY LORIETH', 'Juan Luis Londoño', 'Principal', 111111176, '11mo', 1102, 'abc165', 'Estudiante'),
('PATIÑO GARCIA PAULA NATALIA', 'Juan Luis Londoño', 'Principal', 111111177, '11mo', 1102, 'abc166', 'Estudiante'),
('POVEDA SANCHEZ JUAN ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111178, '11mo', 1102, 'abc167', 'Estudiante'),
('QUINTERO RIVEROS DAVID ESTEBAN', 'Juan Luis Londoño', 'Principal', 111111179, '11mo', 1102, 'abc168', 'Estudiante'),
('REYES GUALTEROS LAURA VALENTINA', 'Juan Luis Londoño', 'Principal', 111111180, '11mo', 1102, 'abc169', 'Estudiante'),
('RINCON BARRIOS KEVIN MARIO', 'Juan Luis Londoño', 'Principal', 111111181, '11mo', 1102, 'abc170', 'Estudiante'),
('ROA GUTIERREZ JUAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111182, '11mo', 1102, 'abc171', 'Estudiante'),
('SALDARRIAGA MORALES MAYERLY ALEXANDRA', 'Juan Luis Londoño', 'Principal', 111111183, '11mo', 1102, 'abc172', 'Estudiante'),
('SANCHEZ CUELLA NICOLLE JULIETH', 'Juan Luis Londoño', 'Principal', 111111184, '11mo', 1102, 'abc173', 'Estudiante'),
('SIERRA ESTARITA ANDREA', 'Juan Luis Londoño', 'Principal', 111111185, '11mo', 1102, 'abc174', 'Estudiante'),
('SUAREZ JARAMILLO TATIANA VALERIA', 'Juan Luis Londoño', 'Principal', 111111186, '11mo', 1102, 'abc175', 'Estudiante'),
('VENEGAS ESCORCIA SEBASTIAN FELIPE', 'Juan Luis Londoño', 'Principal', 111111187, '11mo', 1102, 'abc176', 'Estudiante'),
('YASNO SOSA CAMILA ANDREA', 'Juan Luis Londoño', 'Principal', 111111188, '11mo', 1102, 'abc177', 'Estudiante'),
('AGUDELO PEREZ MIGUEL ANGEL', 'Juan Luis Londoño', 'Principal', 111111189, '10mo', 1002, 'abc178', 'Estudiante'),
('AGUIRRE RESTREPO DAVID LEONARDO', 'Juan Luis Londoño', 'Principal', 111111190, '10mo', 1002, 'abc179', 'Estudiante'),
('AREVALO ROZO ALEXIS MAURICIO', 'Juan Luis Londoño', 'Principal', 111111191, '10mo', 1002, 'abc180', 'Estudiante'),
('BARRIOS SOSA ANDRES FELIPE', 'Juan Luis Londoño', 'Principal', 111111192, '10mo', 1002, 'abc181', 'Estudiante'),
('BAUTISTA CASTILLO NURY VALENTINA', 'Juan Luis Londoño', 'Principal', 111111193, '10mo', 1002, 'abc182', 'Estudiante'),
('BONILLA LEIVA JUAN GUILLERMO', 'Juan Luis Londoño', 'Principal', 111111194, '10mo', 1002, 'abc183', 'Estudiante'),
('BRIÑEZ MONTES MIGUEL ANGEL', 'Juan Luis Londoño', 'Principal', 111111195, '10mo', 1002, 'abc184', 'Estudiante'),
('CALDERON JOSEPH SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111196, '10mo', 1002, 'abc185', 'Estudiante'),
('CAMELO HERNANDEZ KENNY DUVAN', 'Juan Luis Londoño', 'Principal', 111111197, '10mo', 1002, 'abc186', 'Estudiante'),
('CAÑON PEÑUELA NATALIA', 'Juan Luis Londoño', 'Principal', 111111198, '10mo', 1002, 'abc187', 'Estudiante'),
('CARDENAS VILLAMIL ANDRES STEVEN', 'Juan Luis Londoño', 'Principal', 111111199, '10mo', 1002, 'abc188', 'Estudiante'),
('CARRASQUILLA HERNANDEZ ANGIE TATIANA', 'Juan Luis Londoño', 'Principal', 111111200, '10mo', 1002, 'abc189', 'Estudiante'),
('CHUQUIMARCA BARRIOS LINA PAOLA', 'Juan Luis Londoño', 'Principal', 111111201, '10mo', 1002, 'abc190', 'Estudiante'),
('CIFUENTES TOBAR SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111202, '10mo', 1002, 'abc191', 'Estudiante'),
('DAZA SANCHEZ JUAN ESTEBAN', 'Juan Luis Londoño', 'Principal', 111111203, '10mo', 1002, 'abc192', 'Estudiante'),
('ESTEVEZ ACEVEDO JUAN PABLO', 'Juan Luis Londoño', 'Principal', 111111204, '10mo', 1002, 'abc193', 'Estudiante'),
('FRANCO VIVAS KAREN VANESSA', 'Juan Luis Londoño', 'Principal', 111111205, '10mo', 1002, 'abc194', 'Estudiante'),
('GALINDO ROMERO YESID SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111206, '10mo', 1002, 'abc195', 'Estudiante'),
('GARCES VALENZUELA JOHAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111207, '10mo', 1002, 'abc196', 'Estudiante'),
('GARCIA MANCIPE SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111208, '10mo', 1002, 'abc197', 'Estudiante'),
('GARCIA PEREZ YEIMY YURANI', 'Juan Luis Londoño', 'Principal', 111111209, '10mo', 1002, 'abc198', 'Estudiante'),
('GONZALEZ AREVALO RUTH YOHANA', 'Juan Luis Londoño', 'Principal', 111111210, '10mo', 1002, 'abc199', 'Estudiante'),
('GONZALEZ MORA MICHELL VALENTINA', 'Juan Luis Londoño', 'Principal', 111111211, '10mo', 1002, 'abc200', 'Estudiante'),
('GRANDA GARCIA ENMANUEL', 'Juan Luis Londoño', 'Principal', 111111212, '10mo', 1002, 'abc201', 'Estudiante'),
('LINARES MORENO CAMILO ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111213, '10mo', 1002, 'abc202', 'Estudiante'),
('LOPEZ TOLOZA LUISA FERNANDA', 'Juan Luis Londoño', 'Principal', 111111214, '10mo', 1002, 'abc203', 'Estudiante'),
('MENDOZA MELO ANDRES DAVID', 'Juan Luis Londoño', 'Principal', 111111215, '10mo', 1002, 'abc204', 'Estudiante'),
('MORA DANNA KATHERINNE', 'Juan Luis Londoño', 'Principal', 111111216, '10mo', 1002, 'abc205', 'Estudiante'),
('MOSQUERA RODRIGUEZ DIEGO ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111217, '10mo', 1002, 'abc206', 'Estudiante'),
('OROBAJO MARTINEZ ANA MARIA', 'Juan Luis Londoño', 'Principal', 111111218, '10mo', 1002, 'abc207', 'Estudiante'),
('PABÓN CASTAÑEDA CRISTIAN FELIPE', 'Juan Luis Londoño', 'Principal', 111111219, '10mo', 1002, 'abc208', 'Estudiante'),
('ROCHA ZAMUDIO IVON DANIELA', 'Juan Luis Londoño', 'Principal', 111111220, '10mo', 1002, 'abc209', 'Estudiante'),
('RODRIGUEZ RINCON KAROL BRIGITH', 'Juan Luis Londoño', 'Principal', 111111221, '10mo', 1002, 'abc210', 'Estudiante'),
('RODRIGUEZ RODRIGUEZ ANGIE MIREYA', 'Juan Luis Londoño', 'Principal', 111111222, '10mo', 1002, 'abc211', 'Estudiante'),
('RUEDA CALDERON MAIKOL ANDRES', 'Juan Luis Londoño', 'Principal', 111111223, '10mo', 1002, 'abc212', 'Estudiante'),
('SANCHEZ RODRIGUEZ JEFERSON ALEXIS', 'Juan Luis Londoño', 'Principal', 111111224, '10mo', 1002, 'abc213', 'Estudiante'),
('TRIANA GALARZAA JORGE SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111225, '10mo', 1002, 'abc214', 'Estudiante'),
('URREGO YATE JOHANN ALEXANDER', 'Juan Luis Londoño', 'Principal', 111111226, '10mo', 1002, 'abc215', 'Estudiante'),
('VALDERRAMA ARIAS JOHAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111227, '10mo', 1002, 'abc216', 'Estudiante'),
('VARGAS MONTEJO JESUS DAVID', 'Juan Luis Londoño', 'Principal', 111111228, '10mo', 1002, 'abc217', 'Estudiante'),
('ZAMUDIO LOPEZ VALENTINA', 'Juan Luis Londoño', 'Principal', 111111229, '10mo', 1002, 'abc218', 'Estudiante'),
('ZULUAGA BONILLA VALENTINA', 'Juan Luis Londoño', 'Principal', 111111230, '10mo', 1002, 'abc219', 'Estudiante'),
('ABRIL ALARCON YEIMY JOHANNA', 'Juan Luis Londoño', 'Principal', 111111231, '10mo', 1001, 'abc220', 'Estudiante'),
('ACOSTA PATERNINA JHONATAN ALBRET', 'Juan Luis Londoño', 'Principal', 111111232, '10mo', 1001, 'abc221', 'Estudiante'),
('ALARCON SANCHEZ JOSHUA', 'Juan Luis Londoño', 'Principal', 111111233, '10mo', 1001, 'abc222', 'Estudiante'),
('ALDANA RINCON MANUEL ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111234, '10mo', 1001, 'abc223', 'Estudiante'),
('ANZOLA CORDOBA DANIEL ARTURO', 'Juan Luis Londoño', 'Principal', 111111235, '10mo', 1001, 'abc224', 'Estudiante'),
('ARERO YEISON JAIR', 'Juan Luis Londoño', 'Principal', 111111236, '10mo', 1001, 'abc225', 'Estudiante'),
('BELTRAN ACOSTA YULIANA PATRICIA', 'Juan Luis Londoño', 'Principal', 111111237, '10mo', 1001, 'abc226', 'Estudiante'),
('BOTON SARMIENTO ADRIANA LIZETH', 'Juan Luis Londoño', 'Principal', 111111238, '10mo', 1001, 'abc227', 'Estudiante'),
('CAÑON PEÑA JEISON EDUARDO', 'Juan Luis Londoño', 'Principal', 111111239, '10mo', 1001, 'abc228', 'Estudiante'),
('CASTAÑEDA PEÑUELA SHARON DANIELA', 'Juan Luis Londoño', 'Principal', 111111240, '10mo', 1001, 'abc229', 'Estudiante'),
('CHIQUITO CRUZ ANGIE NATALIA', 'Juan Luis Londoño', 'Principal', 111111241, '10mo', 1001, 'abc230', 'Estudiante'),
('CONDIZA GONZALEZ JENNIFER ALEXANDRA', 'Juan Luis Londoño', 'Principal', 111111242, '10mo', 1001, 'abc231', 'Estudiante'),
('FINO TORRES JULIAN DAVID', 'Juan Luis Londoño', 'Principal', 111111243, '10mo', 1001, 'abc232', 'Estudiante'),
('GARCIA SAAVEDRA JUAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111244, '10mo', 1001, 'abc233', 'Estudiante'),
('GOMEZ BENITEZ YENNY ALEJANDRA', 'Juan Luis Londoño', 'Principal', 111111245, '10mo', 1001, 'abc234', 'Estudiante'),
('GOMEZ PATIÑO LAURA PAOLA', 'Juan Luis Londoño', 'Principal', 111111246, '10mo', 1001, 'abc235', 'Estudiante'),
('GRANADA QUINTANA BRAYAN ESTEBAN', 'Juan Luis Londoño', 'Principal', 111111247, '10mo', 1001, 'abc236', 'Estudiante'),
('GUERRERO PAEZ JEFERSON STIVEN', 'Juan Luis Londoño', 'Principal', 111111248, '10mo', 1001, 'abc237', 'Estudiante'),
('GUERRERO PAEZ LIZ DAYAN', 'Juan Luis Londoño', 'Principal', 111111249, '10mo', 1001, 'abc238', 'Estudiante'),
('GUEVARA FLOREZ JUAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111250, '10mo', 1001, 'abc239', 'Estudiante'),
('LARA ARIAS IVAN JESUS', 'Juan Luis Londoño', 'Principal', 111111251, '10mo', 1001, 'abc240', 'Estudiante'),
('LUENGAS ACERO JULIAN DAVID', 'Juan Luis Londoño', 'Principal', 111111252, '10mo', 1001, 'abc241', 'Estudiante'),
('MONCADA FORERO CRISTIAN CAMILO', 'Juan Luis Londoño', 'Principal', 111111253, '10mo', 1001, 'abc242', 'Estudiante'),
('MONTAÑA BONILLA CAROLINA', 'Juan Luis Londoño', 'Principal', 111111254, '10mo', 1001, 'abc243', 'Estudiante'),
('MORENO SANCHEZ DILAN ALEXIS', 'Juan Luis Londoño', 'Principal', 111111255, '10mo', 1001, 'abc244', 'Estudiante'),
('MUÑOZ HERNANDEZ KAREN ANDREA', 'Juan Luis Londoño', 'Principal', 111111256, '10mo', 1001, 'abc245', 'Estudiante'),
('ORTIZ COCA CAROL YASMIN', 'Juan Luis Londoño', 'Principal', 111111257, '10mo', 1001, 'abc246', 'Estudiante'),
('OSORIO CORTES MATEO', 'Juan Luis Londoño', 'Principal', 111111258, '10mo', 1001, 'abc247', 'Estudiante'),
('QUINTERO BALLESTEROS EDITH YINETH', 'Juan Luis Londoño', 'Principal', 111111259, '10mo', 1001, 'abc248', 'Estudiante'),
('QUINTO BLANCO SERGIO ANDRES', 'Juan Luis Londoño', 'Principal', 111111260, '10mo', 1001, 'abc249', 'Estudiante'),
('RINCON BERNAL DAVID MATEO', 'Juan Luis Londoño', 'Principal', 111111261, '10mo', 1001, 'abc250', 'Estudiante'),
('RODRIGUEZ DUQUE JOSE DAVID', 'Juan Luis Londoño', 'Principal', 111111262, '10mo', 1001, 'abc251', 'Estudiante'),
('RODRIGUEZ RODRIGUEZ WILSON MAURICIO', 'Juan Luis Londoño', 'Principal', 111111263, '10mo', 1001, 'abc252', 'Estudiante'),
('ROMERO TORRES MELANIE VANESSA', 'Juan Luis Londoño', 'Principal', 111111264, '10mo', 1001, 'abc253', 'Estudiante'),
('SANCHEZ BARRIOS JUAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111265, '10mo', 1001, 'abc254', 'Estudiante'),
('SANCHEZ GONZALEZ MICHEL CAROLINA', 'Juan Luis Londoño', 'Principal', 111111266, '10mo', 1001, 'abc255', 'Estudiante'),
('SANCHEZ NIETO DILAN MAURICIO', 'Juan Luis Londoño', 'Principal', 111111267, '10mo', 1001, 'abc256', 'Estudiante'),
('SUAREZ RUBIANO JAVIER ESTEBAN', 'Juan Luis Londoño', 'Principal', 111111268, '10mo', 1001, 'abc257', 'Estudiante'),
('TRIBALDOS OTALVARO LAURA ALEJANDRA', 'Juan Luis Londoño', 'Principal', 111111269, '10mo', 1001, 'abc258', 'Estudiante'),
('VARGAS ARANDA OSCAR SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111270, '10mo', 1001, 'abc259', 'Estudiante'),
('AGUIRRE GARCIA JUAN DIEGO', 'Juan Luis Londoño', 'Principal', 111111271, '8vo', 802, 'abc260', 'Estudiante'),
('ANZOLA LOPEZ LAURA FERNANDA', 'Juan Luis Londoño', 'Principal', 111111272, '8vo', 802, 'abc261', 'Estudiante'),
('BARRAGAN ARIZA JOHAN ARLEY', 'Juan Luis Londoño', 'Principal', 111111273, '8vo', 802, 'abc262', 'Estudiante'),
('CABALLERO ALVARADO JULIAN DAVID', 'Juan Luis Londoño', 'Principal', 111111274, '8vo', 802, 'abc263', 'Estudiante'),
('CARDENAS LOZADA MIGUEL ANGEL', 'Juan Luis Londoño', 'Principal', 111111275, '8vo', 802, 'abc264', 'Estudiante'),
('CASTILLO VANEGAS JUAN MANUEL', 'Juan Luis Londoño', 'Principal', 111111276, '8vo', 802, 'abc265', 'Estudiante'),
('CAYCEDO GONZALEZ ANGIE ALEXANDRA', 'Juan Luis Londoño', 'Principal', 111111277, '8vo', 802, 'abc266', 'Estudiante'),
('CHAVARRO CAMACHO MARIA FERNANDA', 'Juan Luis Londoño', 'Principal', 111111278, '8vo', 802, 'abc267', 'Estudiante'),
('CHAVARRO VARON AMOR SOFIA', 'Juan Luis Londoño', 'Principal', 111111279, '8vo', 802, 'abc268', 'Estudiante'),
('CONTRERAS AVELLA SARA VALENTINA', 'Juan Luis Londoño', 'Principal', 111111280, '8vo', 802, 'abc269', 'Estudiante'),
('CORTES CABRA DAVID SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111281, '8vo', 802, 'abc270', 'Estudiante'),
('CUBIDES HERRERA DANIEL ANDRES', 'Juan Luis Londoño', 'Principal', 111111282, '8vo', 802, 'abc271', 'Estudiante'),
('DUQUE CAMACHO DANNA SOFIA', 'Juan Luis Londoño', 'Principal', 111111283, '8vo', 802, 'abc272', 'Estudiante'),
('GARZON SIERRA SANTIAGO DANIEL', 'Juan Luis Londoño', 'Principal', 111111284, '8vo', 802, 'abc273', 'Estudiante'),
('GUARIN CARVAJAL JUAN DAVID', 'Juan Luis Londoño', 'Principal', 111111285, '8vo', 802, 'abc274', 'Estudiante'),
('GUATIVA CAMARGO CARLOS ANDRES', 'Juan Luis Londoño', 'Principal', 111111286, '8vo', 802, 'abc275', 'Estudiante'),
('GUERRERO BERNAL NICOLAS SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111287, '8vo', 802, 'abc276', 'Estudiante'),
('HUERTAS MIRANDA ADRIANA VANESSA', 'Juan Luis Londoño', 'Principal', 111111288, '8vo', 802, 'abc277', 'Estudiante'),
('LEON JUYO CAMILO ANDRES', 'Juan Luis Londoño', 'Principal', 111111289, '8vo', 802, 'abc278', 'Estudiante'),
('MALAGON JARA LAURA CATALINA', 'Juan Luis Londoño', 'Principal', 111111290, '8vo', 802, 'abc279', 'Estudiante'),
('MANCERA PEREZ HUGO ANDRES', 'Juan Luis Londoño', 'Principal', 111111291, '8vo', 802, 'abc280', 'Estudiante'),
('MEDELLIN GARZON JULIETH MARITZA', 'Juan Luis Londoño', 'Principal', 111111292, '8vo', 802, 'abc281', 'Estudiante'),
('MENDEZ GONZALEZ ISIS SAMARA', 'Juan Luis Londoño', 'Principal', 111111293, '8vo', 802, 'abc282', 'Estudiante'),
('MORALES DUSSAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111294, '8vo', 802, 'abc283', 'Estudiante'),
('MORENO LIBERATO JEFFERSON STYVEN', 'Juan Luis Londoño', 'Principal', 111111295, '8vo', 802, 'abc284', 'Estudiante'),
('OCHOA REINA JUAN MANUEL', 'Juan Luis Londoño', 'Principal', 111111296, '8vo', 802, 'abc285', 'Estudiante'),
('ORTIZ CHIQUILLO SARA ALEJANDRA', 'Juan Luis Londoño', 'Principal', 111111297, '8vo', 802, 'abc286', 'Estudiante'),
('PATIÑO HIGUERA JOSE ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111298, '8vo', 802, 'abc287', 'Estudiante'),
('PATIÑO SANTAMARIA JULIO ANDRES', 'Juan Luis Londoño', 'Principal', 111111299, '8vo', 802, 'abc288', 'Estudiante'),
('PEREZ FORERO MARTIN ANDRES', 'Juan Luis Londoño', 'Principal', 111111300, '8vo', 802, 'abc289', 'Estudiante'),
('PRIETO POMAR LAURA VALENTINA', 'Juan Luis Londoño', 'Principal', 111111301, '8vo', 802, 'abc290', 'Estudiante'),
('PUENTES ESPINOSA MARIA PAULA', 'Juan Luis Londoño', 'Principal', 111111302, '8vo', 802, 'abc291', 'Estudiante'),
('PUERTAS LOPEZ DUVAN STIVE', 'Juan Luis Londoño', 'Principal', 111111303, '8vo', 802, 'abc292', 'Estudiante'),
('QUINTERO PRECIADO JUAN ESTEBAN', 'Juan Luis Londoño', 'Principal', 111111304, '8vo', 802, 'abc293', 'Estudiante'),
('RODRIGUEZ GOMEZ MATEO ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111305, '8vo', 802, 'abc294', 'Estudiante'),
('ROMERO GARCIA VALERY JOHANA', 'Juan Luis Londoño', 'Principal', 111111306, '8vo', 802, 'abc295', 'Estudiante'),
('SALDARRIAGA BERMUDEZ GABRIELA', 'Juan Luis Londoño', 'Principal', 111111307, '8vo', 802, 'abc296', 'Estudiante'),
('SIERRA QUINTANA PAULA VALENTINA', 'Juan Luis Londoño', 'Principal', 111111308, '8vo', 802, 'abc297', 'Estudiante'),
('TELLEZ GONZALEZ SARA CATALINA', 'Juan Luis Londoño', 'Principal', 111111309, '8vo', 802, 'abc298', 'Estudiante'),
('VALERIANO MARTINEZ ANDRES FELIPE', 'Juan Luis Londoño', 'Principal', 111111310, '8vo', 802, 'abc299', 'Estudiante'),
('VASQUEZ CAICEDO MARTIN', 'Juan Luis Londoño', 'Principal', 111111311, '8vo', 802, 'abc300', 'Estudiante'),
('AMAYA LAVERDE KARLA FERNANDA', 'Juan Luis Londoño', 'Principal', 111111312, '7mo', 704, 'abc301', 'Estudiante'),
('ANGEL PANCHE JUAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111313, '7mo', 704, 'abc302', 'Estudiante'),
('ARIAS ALFONSO MARIA FERNANDA', 'Juan Luis Londoño', 'Principal', 111111314, '7mo', 704, 'abc303', 'Estudiante'),
('BALCERO SIERRA CRISTIAN SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111315, '7mo', 704, 'abc304', 'Estudiante'),
('BARRERA RANGEL SOPHYE', 'Juan Luis Londoño', 'Principal', 111111316, '7mo', 704, 'abc305', 'Estudiante'),
('BARRIOS MALAMBO ANGELA ALEJANDRA', 'Juan Luis Londoño', 'Principal', 111111317, '7mo', 704, 'abc306', 'Estudiante'),
('BETANCOURT MORENO NICOL JAZMIN', 'Juan Luis Londoño', 'Principal', 111111318, '7mo', 704, 'abc307', 'Estudiante'),
('CARDENAS DIAZ JOHAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111319, '7mo', 704, 'abc308', 'Estudiante'),
('CETINA ARERO HAROLD DUVAN', 'Juan Luis Londoño', 'Principal', 111111320, '7mo', 704, 'abc309', 'Estudiante'),
('CHIVATA AREVALO JUAN DAVID', 'Juan Luis Londoño', 'Principal', 111111321, '7mo', 704, 'abc310', 'Estudiante'),
('COGOLLO PAZ YINADIS', 'Juan Luis Londoño', 'Principal', 111111322, '7mo', 704, 'abc311', 'Estudiante'),
('CORREA TORRES WILMARIS CAROLAY', 'Juan Luis Londoño', 'Principal', 111111323, '7mo', 704, 'abc312', 'Estudiante'),
('CORREDOR ORTIZ DANNA YARLEY', 'Juan Luis Londoño', 'Principal', 111111324, '7mo', 704, 'abc313', 'Estudiante'),
('CRUZ ARCINIEGAS VALERIE LORENA', 'Juan Luis Londoño', 'Principal', 111111325, '7mo', 704, 'abc314', 'Estudiante'),
('ECHETO CASTILLO JESUS DANIEL', 'Juan Luis Londoño', 'Principal', 111111326, '7mo', 704, 'abc315', 'Estudiante'),
('ESPINOSA APERADOR JADER FABIAN', 'Juan Luis Londoño', 'Principal', 111111327, '7mo', 704, 'abc316', 'Estudiante'),
('FAJARDO GARCIA GABRIEL DUVAN', 'Juan Luis Londoño', 'Principal', 111111328, '7mo', 704, 'abc317', 'Estudiante'),
('FRANCO PEÑA HASBLEIDY YULIET', 'Juan Luis Londoño', 'Principal', 111111329, '7mo', 704, 'abc318', 'Estudiante'),
('GARZON RAMIREZ VALERIA', 'Juan Luis Londoño', 'Principal', 111111330, '7mo', 704, 'abc319', 'Estudiante'),
('GIL TRIANA EVELIN FERNANDA', 'Juan Luis Londoño', 'Principal', 111111331, '7mo', 704, 'abc320', 'Estudiante'),
('GIRATA ARANGO DANA GABRIELA', 'Juan Luis Londoño', 'Principal', 111111332, '7mo', 704, 'abc321', 'Estudiante'),
('KLINGER AGUIRRE CRISTHIAN CAMILO', 'Juan Luis Londoño', 'Principal', 111111333, '7mo', 704, 'abc322', 'Estudiante'),
('LOPEZ MORALES DAVID ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111334, '7mo', 704, 'abc323', 'Estudiante'),
('LUGO TAFUR JUAN ESTEBAN', 'Juan Luis Londoño', 'Principal', 111111335, '7mo', 704, 'abc324', 'Estudiante'),
('MANTILLA RODRIGUEZ HOLMAN SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111336, '7mo', 704, 'abc325', 'Estudiante'),
('MARROQUIN CORRALES DANNA SOFIA', 'Juan Luis Londoño', 'Principal', 111111337, '7mo', 704, 'abc326', 'Estudiante'),
('MERCADO PULGARIN SARA YULIZA', 'Juan Luis Londoño', 'Principal', 111111338, '7mo', 704, 'abc327', 'Estudiante'),
('PARRA PERDOMO BRIYETH TATIANA', 'Juan Luis Londoño', 'Principal', 111111339, '7mo', 704, 'abc328', 'Estudiante'),
('PASTRANA ESPINOSA KAROL LISETH', 'Juan Luis Londoño', 'Principal', 111111340, '7mo', 704, 'abc329', 'Estudiante'),
('PATIÑO AREVALO JENIFFER ESTRELLA', 'Juan Luis Londoño', 'Principal', 111111341, '7mo', 704, 'abc330', 'Estudiante'),
('PEREZ CARREÑO LISED XIOMARA', 'Juan Luis Londoño', 'Principal', 111111342, '7mo', 704, 'abc331', 'Estudiante'),
('PINZON MORALES NICOL DANIELA', 'Juan Luis Londoño', 'Principal', 111111343, '7mo', 704, 'abc332', 'Estudiante'),
('PULIDO RODRIGUEZ OMAR ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111344, '7mo', 704, 'abc333', 'Estudiante'),
('QUINTERO PINILLA MIGUEL ANGEL', 'Juan Luis Londoño', 'Principal', 111111345, '7mo', 704, 'abc334', 'Estudiante'),
('RAMOS ULLOA JONNY ALEXANDER', 'Juan Luis Londoño', 'Principal', 111111346, '7mo', 704, 'abc335', 'Estudiante'),
('SUA MENDIVELSO MIGUEL ANGEL', 'Juan Luis Londoño', 'Principal', 111111347, '7mo', 704, 'abc336', 'Estudiante'),
('SUA PACANCHIQUE DIEGO ALEXANDER', 'Juan Luis Londoño', 'Principal', 111111348, '7mo', 704, 'abc337', 'Estudiante'),
('TORRES RIOS HELEN ZHARAY', 'Juan Luis Londoño', 'Principal', 111111349, '7mo', 704, 'abc338', 'Estudiante'),
('VARGAS CAÑON PAULA TATIANA', 'Juan Luis Londoño', 'Principal', 111111350, '7mo', 704, 'abc339', 'Estudiante'),
('VILLALBA HORTUA FRANKYN STIVEN', 'Juan Luis Londoño', 'Principal', 111111351, '7mo', 704, 'abc340', 'Estudiante'),
('ZUÑIGA ARIZA MATEO', 'Juan Luis Londoño', 'Principal', 111111352, '7mo', 704, 'abc341', 'Estudiante'),
('ABAUNZA GALVIS ANDREA', 'Juan Luis Londoño', 'Principal', 123456789, '', 0, 'abc342', 'Docente'),
('ACUÑA GARZON BIBIANA KATHERIN', 'Juan Luis Londoño', 'Principal', 123456790, '', 0, 'abc343', 'Docente'),
('ALVARADO MORA YANIRA', 'Juan Luis Londoño', 'Principal', 123456791, '', 0, 'abc344', 'Docente'),
('ARISTIZABAL TRIANA WILLIAM', 'Juan Luis Londoño', 'Principal', 123456792, '', 0, 'abc345', 'Docente'),
('CHAVEZ VELOZA MARIA ENGRACIA', 'Juan Luis Londoño', 'Principal', 123456793, '', 0, 'abc346', 'Docente'),
('CRUZ MARTINEZ ANA YANIRA', 'Juan Luis Londoño', 'Principal', 123456794, '', 0, 'abc347', 'Docente'),
('CUITIVA BARACALDO MARIA VICTORIA', 'Juan Luis Londoño', 'Principal', 123456795, '', 0, 'abc348', 'Docente'),
('DAZA LIZCANO CAMILO', 'Juan Luis Londoño', 'unidad', 123456796, '', 0, 'abc349', 'Docente'),
('DIAZ BONILLA WILLIAM FERNANDO', 'Juan Luis Londoño', 'Principal', 123456797, '', 0, 'abc350', 'Docente'),
('DIAZ MESA NELIDA', 'Juan Luis Londoño', 'Principal', 123456798, '', 0, 'abc351', 'Docente'),
('DURAN SANDOVAL FLOR ANGELA', 'Juan Luis Londoño', 'Principal', 123456799, '', 0, 'abc352', 'Docente'),
('GALINDO GUERRA JOSE ALEJANDRO', 'Juan Luis Londoño', 'Principal', 123456800, '', 0, 'abc353', 'Docente'),
('GARCIA CENDALES CINDY JULIETH', 'Juan Luis Londoño', 'Principal', 123456801, '', 0, 'abc354', 'Docente'),
('GARCIA GOMEZ BLANCA FLOR', 'Juan Luis Londoño', 'Principal', 123456802, '', 0, 'abc355', 'Docente'),
('GARCIA GUAYARA LUIS FERNANDO', 'Juan Luis Londoño', 'Principal', 123456803, '', 0, 'abc356', 'Docente'),
('GRANADOS CELY JOSE ARMANDO', 'Juan Luis Londoño', 'Principal', 123456804, '', 0, 'abc357', 'Docente'),
('GONZALEZ SERRANO LUCENA ROSARIO', 'Juan Luis Londoño', 'Principal', 123456805, '', 0, 'abc358', 'Docente'),
('GUTIERREZ PARRADO GLORIA', 'Juan Luis Londoño', 'Principal', 123456806, '', 0, 'abc359', 'Docente'),
('MARTINEZ SALAZAR SONIA JAZMIN', 'Juan Luis Londoño', 'Principal', 123456807, '', 0, 'abc360', 'Docente'),
('MONROY OCHOA JOSELITO', 'Juan Luis Londoño', 'Principal', 123456808, '', 0, 'abc361', 'Docente'),
('ORDOÑEZ SANGREGORIO ORLANDO', 'Juan Luis Londoño', 'Principal', 123456809, '', 0, 'abc362', 'Docente'),
('OSPINA RODRIGUEZ BENJAMIN', 'Juan Luis Londoño', 'Principal', 123456810, '', 0, 'abc363', 'Docente'),
('PEÑA NAVARRO JUDY MARITZA', 'Juan Luis Londoño', 'Principal', 123456811, '', 0, 'abc364', 'Docente'),
('PIERNAGORDA LEGUIZAMON DORIS', 'Juan Luis Londoño', 'Principal', 123456812, '', 0, 'abc365', 'Docente'),
('POVEDA ALVAREZ MARTHA JANETH', 'Juan Luis Londoño', 'Principal', 123456813, '', 0, 'abc366', 'Docente'),
('RIAÑO LEMUS YUDY MARCELA', 'Juan Luis Londoño', 'Principal', 123456814, '', 0, 'abc367', 'Docente'),
('ROJAS BARBOSA CLARA JISED', 'Juan Luis Londoño', 'Principal', 123456815, '', 0, 'abc368', 'Docente'),
('SANDOVAL BUSTOS CESAR AUGUSTO', 'Juan Luis Londoño', 'Principal', 123456816, '', 0, 'abc369', 'Docente'),
('TORRES ESPITIA OLGA YASMIN', 'Juan Luis Londoño', 'Principal', 123456817, '', 0, 'abc370', 'Docente'),
('UMBARILA CHACON LUZ MERY', 'Juan Luis Londoño', 'Principal', 123456818, '', 0, 'abc371', 'Docente'),
('CONTRERAS VALENZUELA CARLOS ALBERTO', 'Juan Luis Londoño', 'Principal', 123456819, '', 0, 'abc372', 'Docente'),
('VIDAL MORA JESUS ERNESTO', 'Juan Luis Londoño', 'Principal', 123456820, '', 0, 'abc373', 'Docente'),
('OSCAR DANIEL PULIDO GOMEZ', 'Juan Luis Londoño', 'Unidad', 123456821, '1ro', 100, 'abc374', 'Estudiante'),
('AGULAR GOMEZ MARIO ALEJANDRO', 'Juan Luis Londoño', 'Unidad', 123456822, '1ro', 100, 'abc375', 'Estudiante'),
('CASTRO PENICHE ARTURO', 'Juan Luis Londoño', 'Unidad', 123456823, '1ro', 100, 'abc376', 'Estudiante'),
('VARGAS SOTELO KAREN', 'Juan Luis Londoño', 'Unidad', 123456824, '1ro', 100, 'abc377', 'Estudiante'),
('CASAS AVENDAÑO CLAUDIA MARCELA', 'Juan Luis Londoño', 'Unidad', 123456825, '1ro', 100, 'abc378', 'Estudiante'),
('ORDOÑEZ GERMAN DAVID', 'Juan Luis Londoño', 'Unidad', 123456826, '1ro', 100, 'abc379', 'Estudiante'),
('GARCIA PEREZ FABIAN DAVID', 'Juan Luis Londoño', 'Unidad', 123456827, '1ro', 100, 'abc380', 'Estudiante'),
('ESPRADO PAOLA ANDREA', 'Juan Luis Londoño', 'Unidad', 123456828, '1ro', 100, 'abc381', 'Estudiante'),
('GALICIA PULIDO YEISON FERNANDO', 'Juan Luis Londoño', 'Unidad', 123456829, '1ro', 100, 'abc382', 'Estudiante'),
('GARZON MAURA LORENA', 'Juan Luis Londoño', 'Unidad', 123456830, '1ro', 100, 'abc383', 'Estudiante'),
('MONTEALEGRE DIAZ BRAYAN JAIR', 'Juan Luis Londoño', 'Unidad', 123456831, '1ro', 100, 'abc384', 'Estudiante'),
('DIAZ SAAVEDRA YUDY ROCIO', 'Juan Luis Londoño', 'Unidad', 123456832, '1ro', 100, 'abc385', 'Estudiante'),
('GARCIA MENDEZ LAURA DANIELA', 'Juan Luis Londoño', 'Unidad', 123456833, '1ro', 100, 'abc386', 'Estudiante'),
('MARIA JOSE RAMIREZ PARRA', 'Juan Luis Londoño', 'Unidad', 123456834, '1ro', 100, 'abc387', 'Estudiante'),
('BOHORQUEZ LIZETH PAMELA', 'Juan Luis Londoño', 'Unidad', 123456835, '2do', 200, 'abc388', 'Estudiante'),
('MAICOL STEVEN GARCES GOMEZ', 'Juan Luis Londoño', 'Unidad', 123456836, '2do', 200, 'abc389', 'Estudiante'),
('YEIMY LORENA GARCES VALENZUELA', 'Juan Luis Londoño', 'Unidad', 123456837, '2do', 200, 'abc390', 'Estudiante'),
('MUÑOS ESPITIA JOSE HUMBERTO', 'Juan Luis Londoño', 'Unidad', 123456838, '2do', 200, 'abc391', 'Estudiante'),
('ARIZA ACEVEDO YEIMY CAROLINA', 'Juan Luis Londoño', 'Unidad', 123456839, '2do', 200, 'abc392', 'Estudiante'),
('ACOSTA AGUDELO STEFANY', 'Juan Luis Londoño', 'Unidad', 123456840, '2do', 200, 'abc393', 'Estudiante'),
('BARBOSA AQUILES DAMON ALCIDES', 'Juan Luis Londoño', 'Unidad', 123456841, '2do', 200, 'abc394', 'Estudiante'),
('BARBOSA PARDO NELCY MILENA', 'Juan Luis Londoño', 'Unidad', 123456842, '2do', 200, 'abc395', 'Estudiante'),
('JURADO BENITES MAIKOL JOSE', 'Juan Luis Londoño', 'Unidad', 123456843, '2do', 200, 'abc396', 'Estudiante'),
('SUSA MUÑOZ LUIS ALFREDO', 'Juan Luis Londoño', 'Unidad', 123456844, '2do', 200, 'abc397', 'Estudiante'),
('MONTEALEGRE DIAZ OSMAN SANTIAGO', 'Juan Luis Londoño', 'Unidad', 123456845, '2do', 200, 'abc398', 'Estudiante'),
('ACUÑA CASTRO CATALINA', 'Juan Luis Londoño', 'Unidad', 123456846, '2do', 200, 'abc399', 'Estudiante'),
('BAZZANI JARAMILLO JUAN JOSE', 'Juan Luis Londoño', 'Unidad', 123456847, '2do', 200, 'abc400', 'Estudiante'),
('HERRERA CRUZ CAMILA', 'Juan Luis Londoño', 'Unidad', 123456848, '2do', 200, 'abc401', 'Estudiante'),
('BETANCOURT GOMEZ KAREN LORENA', 'Juan Luis Londoño', 'Unidad', 123456849, '2do', 200, 'abc402', 'Estudiante'),
('CRISPIN SONIA KATERINE', 'Juan Luis Londoño', 'Unidad', 123456850, '2do', 200, 'abc403', 'Estudiante'),
('AVENDAÑO SUAREZ MARTA PATRICIA', 'Juan Luis Londoño', 'Unidad', 123456851, '2do', 200, 'abc404', 'Estudiante'),
('ZAPATA QUEVEDO LUISA CAMILA', 'Juan Luis Londoño', 'Unidad', 123456852, '2do', 200, 'abc405', 'Estudiante'),
('PEREZ MARIA ESMERALDA', 'Juan Luis Londoño', 'Unidad', 123456853, '2do', 200, 'abc406', 'Estudiante'),
('LOPEZ LOPEZ CLAUDIA SOFIA', 'Juan Luis Londoño', 'Unidad', 123456854, '3ro', 300, 'abc407', 'Estudiante'),
('ARAQUE CASTAÑEDA LEIDY CAROLINA', 'Juan Luis Londoño', 'Unidad', 123456855, '3ro', 300, 'abc408', 'Estudiante'),
('GUTIERREZ ESPINDOLA LUZ PAOLA', 'Juan Luis Londoño', 'Unidad', 123456856, '3ro', 300, 'abc409', 'Estudiante'),
('URUEÑA RUIZ JENNIFER ALEXANDRA', 'Juan Luis Londoño', 'Unidad', 123456857, '3ro', 300, 'abc410', 'Estudiante'),
('ROLDAN MEJIA JENNY TATIANA', 'Juan Luis Londoño', 'Unidad', 123456858, '3ro', 300, 'abc411', 'Estudiante'),
('DIAZ SAAVEDRA YUDY ROCIO', 'Juan Luis Londoño', 'Unidad', 123456859, '3ro', 300, 'abc412', 'Estudiante'),
('SAAVEDRA MARIA EDITH', 'Juan Luis Londoño', 'Unidad', 123456860, '3ro', 300, 'abc413', 'Estudiante'),
('DIMATE CASTIBLANCO ROCIO', 'Juan Luis Londoño', 'Unidad', 123456861, '3ro', 300, 'abc414', 'Estudiante'),
('REYES GUALTEROS LAURA VALENTINA', 'Juan Luis Londoño', 'Unidad', 123456862, '3ro', 300, 'abc415', 'Estudiante'),
('MERCHAN LOPEZ JUAN MARIO', 'Juan Luis Londoño', 'Unidad', 123456863, '3ro', 300, 'abc416', 'Estudiante'),
('BOUYANESHE CHAVARRO ALEXANDER', 'Juan Luis Londoño', 'Unidad', 123456864, '3ro', 300, 'abc417', 'Estudiante'),
('CHAVARRO PABON JUAN CAMILO', 'Juan Luis Londoño', 'Unidad', 123456865, '3ro', 300, 'abc418', 'Estudiante'),
('ANAYANCY DEL VALLE FLORES', 'Juan Luis Londoño', 'Unidad', 123456866, '3ro', 300, 'abc419', 'Estudiante'),
('NANCY CAROLINA MONTEALEGRE TRUJILLO', 'Juan Luis Londoño', 'Unidad', 123456867, '3ro', 300, 'abc420', 'Estudiante'),
('MONTEALEGRE DIAZ LYAN VANESSA', 'Juan Luis Londoño', 'Unidad', 123456868, '3ro', 300, 'abc421', 'Estudiante'),
('SANTAMARIA VELEZ JESSICA', 'Juan Luis Londoño', 'Unidad', 123456869, '3ro', 300, 'abc422', 'Estudiante'),
('URBIÑEZ OTEGA JUAN DAVID', 'Juan Luis Londoño', 'Unidad', 123456870, '3ro', 300, 'abc423', 'Estudiante'),
('BRAVO VAZQUEZ JUAN ESTEBAN', 'Juan Luis Londoño', 'Unidad', 123456871, '3ro', 300, 'abc424', 'Estudiante'),
('ARIAS VALLONA NICOLE DAYANA', 'Juan Luis Londoño', 'Unidad', 123456872, '3ro', 300, 'abc425', 'Estudiante'),
('SANTOS GONGORA GERMAN ERNESTO', 'Juan Luis Londoño', 'Unidad', 123456873, '4to', 400, 'abc426', 'Estudiante'),
('BARRAGAN BARON JUAN JOSE', 'Juan Luis Londoño', 'Unidad', 123456874, '4to', 400, 'abc427', 'Estudiante'),
('ROMERO SANTOS MARIA TERESA', 'Juan Luis Londoño', 'Unidad', 123456875, '4to', 400, 'abc428', 'Estudiante'),
('ACOSTA PEREZ JAZMIN CAMILA', 'Juan Luis Londoño', 'Unidad', 123456876, '4to', 400, 'abc429', 'Estudiante'),
('GARCIA PEREZ YEIMY YURANY', 'Juan Luis Londoño', 'Unidad', 123456877, '4to', 400, 'abc430', 'Estudiante'),
('BELTRAN ARIZA JULIAN CAMILO', 'Juan Luis Londoño', 'Unidad', 123456878, '4to', 400, 'abc431', 'Estudiante'),
('TRUJILLO PERDOMO LUCY DELMIRA', 'Juan Luis Londoño', 'Unidad', 123456879, '4to', 400, 'abc432', 'Estudiante'),
('COTRINA FUENTES FLOR ELIZA', 'Juan Luis Londoño', 'Unidad', 123456880, '4to', 400, 'abc433', 'Estudiante'),
('VANEGAS PERALTA JUAN FERNANDO', 'Juan Luis Londoño', 'Principal', 1000522274, '11mo', 1103, 'abc136', 'Estudiante'),
('HERRERA CALDERON MARIA FERNANDA', 'Juan Luis Londoño', 'Principal', 1003534274, '11mo', 1103, 'abc119', 'Estudiante'),
('DIAZ SAAVEDRA MABEL TATIANA', 'Juan Luis Londoño', 'Principal', 1003690778, '11mo', 1103, 'abc113', 'Estudiante'),
('DUARTE MORENO NICOLAS', 'Juan Luis Londoño', 'Principal', 1007557777, '11mo', 1103, 'abc114', 'Estudiante'),
('AVELLA RICO YESICA DANIELA', 'Juan Luis Londoño', 'Principal', 1022323085, '11mo', 1103, 'abc105', 'Estudiante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `documento` (`documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
