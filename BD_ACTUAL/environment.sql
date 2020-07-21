-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2020 a las 22:48:29
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
-- Estructura de tabla para la tabla `compromiso`
--

CREATE TABLE `compromiso` (
  `id_com` int(11) NOT NULL,
  `de` int(15) NOT NULL,
  `para` int(15) NOT NULL,
  `version` varchar(3500) NOT NULL,
  `compromiso` varchar(3500) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compromiso`
--

INSERT INTO `compromiso` (`id_com`, `de`, `para`, `version`, `compromiso`, `fecha`) VALUES
(1, 1007557777, 123456800, 'no me porte mal', 'no lo vuelvo hacer', '2020-07-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compromiso_familiar`
--

CREATE TABLE `compromiso_familiar` (
  `id_comfa` int(11) NOT NULL,
  `de` int(15) NOT NULL,
  `para` int(15) NOT NULL,
  `compromiso` varchar(3500) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compromiso_familiar`
--

INSERT INTO `compromiso_familiar` (`id_comfa`, `de`, `para`, `compromiso`, `fecha`) VALUES
(1, 52275209, 123456800, 'no lo volvera hacer', '2020-07-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones`
--

CREATE TABLE `observaciones` (
  `id_obser` int(11) NOT NULL,
  `de` int(15) NOT NULL,
  `para` int(15) NOT NULL,
  `curso` int(4) NOT NULL,
  `observacion` varchar(3000) NOT NULL,
  `tipo` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `observaciones`
--

INSERT INTO `observaciones` (`id_obser`, `de`, `para`, `curso`, `observacion`, `tipo`, `fecha`) VALUES
(1, 123456800, 1007557777, 1103, 'se porto mal en clase', 'disciplina', '2020-07-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id_respuesta` int(11) NOT NULL,
  `id_obser` int(11) NOT NULL,
  `id_com` int(11) NOT NULL,
  `id_comfa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(37) NOT NULL,
  `institucion` varchar(17) NOT NULL,
  `sede` varchar(9) NOT NULL,
  `documento` int(11) NOT NULL,
  `docu_acu` int(15) NOT NULL,
  `curso` int(11) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `institucion`, `sede`, `documento`, `docu_acu`, `curso`, `rol`) VALUES
('RENE ALEJANDRO VAZQUES', 'juan luis londoño', 'principal', 22222235, 0, 0, 'docente'),
('DUARTE MORENO DIANA MARCELA', 'juan luis londoño', 'Principal', 52275209, 0, 0, 'acudiente'),
('ABAD CASTRILLO FRANCENIS', 'Juan Luis Londoño', 'Principal', 111111111, 0, 1103, 'Estudiante'),
('ACERO TOVAR JULIAN DAVID', 'Juan Luis Londoño', 'Principal', 111111112, 0, 1103, 'Estudiante'),
('ACUÑA GARCIA KAROL DAYANA', 'Juan Luis Londoño', 'Principal', 111111113, 0, 1103, 'Estudiante'),
('ALDANA VALDERRAMA SONIA', 'Juan Luis Londoño', 'Principal', 111111114, 0, 1103, 'Estudiante'),
('ASPRILLA PEREA DAILYS YISETH', 'Juan Luis Londoño', 'Principal', 111111115, 0, 1103, 'Estudiante'),
('AVILA MATIZ MIGUEL ANGEL', 'Juan Luis Londoño', 'Principal', 111111117, 0, 1103, 'Estudiante'),
('CARRASCAL JIMENEZ ELIANA E MARCELA', 'Juan Luis Londoño', 'Principal', 111111118, 0, 1103, 'Estudiante'),
('CARVAJAL RICO DANIEL ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111119, 0, 1103, 'Estudiante'),
('CASTAÑEDA RIOS EIMY KATERIN', 'Juan Luis Londoño', 'Principal', 111111120, 0, 1103, 'Estudiante'),
('CASTRO AVILA HEIDY TATIANA', 'Juan Luis Londoño', 'Principal', 111111121, 0, 1103, 'Estudiante'),
('CHINGATE RODRIGUEZ SANDRA JULIETH', 'Juan Luis Londoño', 'Principal', 111111122, 0, 1103, 'Estudiante'),
('DELGADO RUDA INGRID TATIANA', 'Juan Luis Londoño', 'Principal', 111111123, 0, 1103, 'Estudiante'),
('FRAILE CAMACHO KEVIN ANDRES', 'Juan Luis Londoño', 'Principal', 111111126, 0, 1103, 'Estudiante'),
('GOMEZ MONTIEL YERIMAR MARGARITA', 'Juan Luis Londoño', 'Principal', 111111127, 0, 1103, 'Estudiante'),
('GOMEZ RAMIREZ EDWIN SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111128, 0, 1103, 'Estudiante'),
('GONZALES MORENO ANGEL DAVID', 'Juan Luis Londoño', 'Principal', 111111129, 0, 1103, 'Estudiante'),
('JURADO GOMEZ MAIDY ALEXANDRA', 'Juan Luis Londoño', 'Principal', 111111131, 0, 1103, 'Estudiante'),
('MENDOZA VALBUENA YEISON RICARDO', 'Juan Luis Londoño', 'Principal', 111111132, 0, 1103, 'Estudiante'),
('NUÑEZ PIMENTEL ROBINSON', 'Juan Luis Londoño', 'Principal', 111111133, 0, 1103, 'Estudiante'),
('OCHOA SANTANA OSCAR DANIEL', 'Juan Luis Londoño', 'Principal', 111111134, 0, 1103, 'Estudiante'),
('PATIÑO OSORIO CRISTIAN CAMILO', 'Juan Luis Londoño', 'Principal', 111111135, 0, 1103, 'Estudiante'),
('PEREZ RAMIREZ JENNY ALEXANDRA', 'Juan Luis Londoño', 'Principal', 111111136, 0, 1103, 'Estudiante'),
('PULIDO PIMIENTA JUAN NICOLAS', 'Juan Luis Londoño', 'Principal', 111111137, 0, 1103, 'Estudiante'),
('RAMIREZ PARRA MARIA ESPERANZA', 'Juan Luis Londoño', 'Principal', 111111138, 0, 1103, 'Estudiante'),
('RAMOS GARCIA CARLOS ANDRES', 'Juan Luis Londoño', 'Principal', 111111139, 0, 1103, 'Estudiante'),
('REYES CASTAÑO JAIDER STEV', 'Juan Luis Londoño', 'Principal', 111111140, 0, 1103, 'Estudiante'),
('RIVERA SANCHEZ JUAN PABLO', 'Juan Luis Londoño', 'Principal', 111111141, 0, 1103, 'Estudiante'),
('RODRIGUEZ AGUIRRE DIEGO ANDRES', 'Juan Luis Londoño', 'Principal', 111111142, 0, 1103, 'Estudiante'),
('SANTAMARIA KEVIN ANDRES', 'Juan Luis Londoño', 'Principal', 111111143, 0, 1103, 'Estudiante'),
('TACHE PADILLA ADRIANA DELPILAR', 'Juan Luis Londoño', 'Principal', 111111144, 0, 1103, 'Estudiante'),
('TORRES TORRES LUNA SOFIA', 'Juan Luis Londoño', 'Principal', 111111145, 0, 1103, 'Estudiante'),
('VALDERRAMA ALEMAN DAYANA ALEXANDRA', 'Juan Luis Londoño', 'Principal', 111111146, 0, 1103, 'Estudiante'),
('VELANDIA CHAPARRO JUAN CAMILO', 'Juan Luis Londoño', 'Principal', 111111148, 0, 1103, 'Estudiante'),
('ACOSTA ACOSTA LUISA FERNANDA', 'Juan Luis Londoño', 'Principal', 111111149, 0, 1102, 'Estudiante'),
('AMEZQUITA MALLUNGO LAURA VALENTINA', 'Juan Luis Londoño', 'Principal', 111111150, 0, 1102, 'Estudiante'),
('ARIAS CUBIDES MARIA PAULA', 'Juan Luis Londoño', 'Principal', 111111151, 0, 1102, 'Estudiante'),
('AVELLA RICO NICOL DAHIANA', 'Juan Luis Londoño', 'Principal', 111111152, 0, 1102, 'Estudiante'),
('BARBOSA GOMEZ NICOLAS DAVID', 'Juan Luis Londoño', 'Principal', 111111153, 0, 1102, 'Estudiante'),
('BELLO MUÑOZ LAHURA XIMENA', 'Juan Luis Londoño', 'Principal', 111111154, 0, 1102, 'Estudiante'),
('BELTRAN CASTELLLANOS DAVID SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111155, 0, 1102, 'Estudiante'),
('BELTRAN GUTIERREZ SANTIAGO JOSE', 'Juan Luis Londoño', 'Principal', 111111156, 0, 1102, 'Estudiante'),
('BOTIA CASTRO LEONARDO ANTONIO', 'Juan Luis Londoño', 'Principal', 111111157, 0, 1102, 'Estudiante'),
('BURGOS SARMIENTO JULIO ESTEBAN', 'Juan Luis Londoño', 'Principal', 111111158, 0, 1102, 'Estudiante'),
('CADENA POSADA ESTEBAN ANDRES', 'Juan Luis Londoño', 'Principal', 111111159, 0, 1102, 'Estudiante'),
('CARDENAS HERRERA HAROL YESSID', 'Juan Luis Londoño', 'Principal', 111111160, 0, 1102, 'Estudiante'),
('CARVAJAL CORTES VALERIA', 'Juan Luis Londoño', 'Principal', 111111161, 0, 1102, 'Estudiante'),
('CASTILLO CARRANZA ESTIVEN LEONARDO', 'Juan Luis Londoño', 'Principal', 111111162, 0, 1102, 'Estudiante'),
('CORTES POLANIA ARNOLD CAMILO', 'Juan Luis Londoño', 'Principal', 111111163, 0, 1102, 'Estudiante'),
('DURAN GARCIA NICOLE TATIANA', 'Juan Luis Londoño', 'Principal', 111111164, 0, 1102, 'Estudiante'),
('FERRO ARIZA KAREN YOLITH', 'Juan Luis Londoño', 'Principal', 111111165, 0, 1102, 'Estudiante'),
('FIGUEIRA SANCHEZ DANIEL ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111166, 0, 1102, 'Estudiante'),
('GIRATA ARANGO JUAN CAMILO', 'Juan Luis Londoño', 'Principal', 111111167, 0, 1102, 'Estudiante'),
('GONZALEZ RODRIGUEZ LUISA MARIA', 'Juan Luis Londoño', 'Principal', 111111168, 0, 1102, 'Estudiante'),
('GUACANEME FORERO NICOLAS', 'Juan Luis Londoño', 'Principal', 111111169, 0, 1102, 'Estudiante'),
('HERNANDEZ RIVERA LEYDY DAYANA', 'Juan Luis Londoño', 'Principal', 111111170, 0, 1102, 'Estudiante'),
('LUNA LOPEZ SERGIO ALEXANDER', 'Juan Luis Londoño', 'Principal', 111111171, 0, 1102, 'Estudiante'),
('MONTOYA RODRIGUEZ KAREN TATIANA', 'Juan Luis Londoño', 'Principal', 111111172, 0, 1102, 'Estudiante'),
('MORA VERGARA ALEXANDER', 'Juan Luis Londoño', 'Principal', 111111173, 0, 1102, 'Estudiante'),
('NAJAS CALDERON MIGUEL ANGEL', 'Juan Luis Londoño', 'Principal', 111111174, 0, 1102, 'Estudiante'),
('OJEDA AVILA YURLEY VANESSA', 'Juan Luis Londoño', 'Principal', 111111175, 0, 1102, 'Estudiante'),
('OSORIO VALBUENA YESSELY LORIETH', 'Juan Luis Londoño', 'Principal', 111111176, 0, 1102, 'Estudiante'),
('PATIÑO GARCIA PAULA NATALIA', 'Juan Luis Londoño', 'Principal', 111111177, 0, 1102, 'Estudiante'),
('POVEDA SANCHEZ JUAN ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111178, 0, 1102, 'Estudiante'),
('QUINTERO RIVEROS DAVID ESTEBAN', 'Juan Luis Londoño', 'Principal', 111111179, 0, 1102, 'Estudiante'),
('REYES GUALTEROS LAURA VALENTINA', 'Juan Luis Londoño', 'Principal', 111111180, 0, 1102, 'Estudiante'),
('RINCON BARRIOS KEVIN MARIO', 'Juan Luis Londoño', 'Principal', 111111181, 0, 1102, 'Estudiante'),
('ROA GUTIERREZ JUAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111182, 0, 1102, 'Estudiante'),
('SALDARRIAGA MORALES MAYERLY ALEXANDRA', 'Juan Luis Londoño', 'Principal', 111111183, 0, 1102, 'Estudiante'),
('SANCHEZ CUELLA NICOLLE JULIETH', 'Juan Luis Londoño', 'Principal', 111111184, 0, 1102, 'Estudiante'),
('SIERRA ESTARITA ANDREA', 'Juan Luis Londoño', 'Principal', 111111185, 0, 1102, 'Estudiante'),
('SUAREZ JARAMILLO TATIANA VALERIA', 'Juan Luis Londoño', 'Principal', 111111186, 0, 1102, 'Estudiante'),
('VENEGAS ESCORCIA SEBASTIAN FELIPE', 'Juan Luis Londoño', 'Principal', 111111187, 0, 1102, 'Estudiante'),
('YASNO SOSA CAMILA ANDREA', 'Juan Luis Londoño', 'Principal', 111111188, 0, 1102, 'Estudiante'),
('AGUDELO PEREZ MIGUEL ANGEL', 'Juan Luis Londoño', 'Principal', 111111189, 0, 1002, 'Estudiante'),
('AGUIRRE RESTREPO DAVID LEONARDO', 'Juan Luis Londoño', 'Principal', 111111190, 0, 1002, 'Estudiante'),
('AREVALO ROZO ALEXIS MAURICIO', 'Juan Luis Londoño', 'Principal', 111111191, 0, 1002, 'Estudiante'),
('BARRIOS SOSA ANDRES FELIPE', 'Juan Luis Londoño', 'Principal', 111111192, 0, 1002, 'Estudiante'),
('BAUTISTA CASTILLO NURY VALENTINA', 'Juan Luis Londoño', 'Principal', 111111193, 0, 1002, 'Estudiante'),
('BONILLA LEIVA JUAN GUILLERMO', 'Juan Luis Londoño', 'Principal', 111111194, 0, 1002, 'Estudiante'),
('BRIÑEZ MONTES MIGUEL ANGEL', 'Juan Luis Londoño', 'Principal', 111111195, 0, 1002, 'Estudiante'),
('CALDERON JOSEPH SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111196, 0, 1002, 'Estudiante'),
('CAMELO HERNANDEZ KENNY DUVAN', 'Juan Luis Londoño', 'Principal', 111111197, 0, 1002, 'Estudiante'),
('CAÑON PEÑUELA NATALIA', 'Juan Luis Londoño', 'Principal', 111111198, 0, 1002, 'Estudiante'),
('CARDENAS VILLAMIL ANDRES STEVEN', 'Juan Luis Londoño', 'Principal', 111111199, 0, 1002, 'Estudiante'),
('CARRASQUILLA HERNANDEZ ANGIE TATIANA', 'Juan Luis Londoño', 'Principal', 111111200, 0, 1002, 'Estudiante'),
('CHUQUIMARCA BARRIOS LINA PAOLA', 'Juan Luis Londoño', 'Principal', 111111201, 0, 1002, 'Estudiante'),
('CIFUENTES TOBAR SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111202, 0, 1002, 'Estudiante'),
('DAZA SANCHEZ JUAN ESTEBAN', 'Juan Luis Londoño', 'Principal', 111111203, 0, 1002, 'Estudiante'),
('ESTEVEZ ACEVEDO JUAN PABLO', 'Juan Luis Londoño', 'Principal', 111111204, 0, 1002, 'Estudiante'),
('FRANCO VIVAS KAREN VANESSA', 'Juan Luis Londoño', 'Principal', 111111205, 0, 1002, 'Estudiante'),
('GALINDO ROMERO YESID SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111206, 0, 1002, 'Estudiante'),
('GARCES VALENZUELA JOHAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111207, 0, 1002, 'Estudiante'),
('GARCIA MANCIPE SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111208, 0, 1002, 'Estudiante'),
('GARCIA PEREZ YEIMY YURANI', 'Juan Luis Londoño', 'Principal', 111111209, 0, 1002, 'Estudiante'),
('GONZALEZ AREVALO RUTH YOHANA', 'Juan Luis Londoño', 'Principal', 111111210, 0, 1002, 'Estudiante'),
('GONZALEZ MORA MICHELL VALENTINA', 'Juan Luis Londoño', 'Principal', 111111211, 0, 1002, 'Estudiante'),
('GRANDA GARCIA ENMANUEL', 'Juan Luis Londoño', 'Principal', 111111212, 0, 1002, 'Estudiante'),
('LINARES MORENO CAMILO ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111213, 0, 1002, 'Estudiante'),
('LOPEZ TOLOZA LUISA FERNANDA', 'Juan Luis Londoño', 'Principal', 111111214, 0, 1002, 'Estudiante'),
('MENDOZA MELO ANDRES DAVID', 'Juan Luis Londoño', 'Principal', 111111215, 0, 1002, 'Estudiante'),
('MORA DANNA KATHERINNE', 'Juan Luis Londoño', 'Principal', 111111216, 0, 1002, 'Estudiante'),
('MOSQUERA RODRIGUEZ DIEGO ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111217, 0, 1002, 'Estudiante'),
('OROBAJO MARTINEZ ANA MARIA', 'Juan Luis Londoño', 'Principal', 111111218, 0, 1002, 'Estudiante'),
('PABÓN CASTAÑEDA CRISTIAN FELIPE', 'Juan Luis Londoño', 'Principal', 111111219, 0, 1002, 'Estudiante'),
('ROCHA ZAMUDIO IVON DANIELA', 'Juan Luis Londoño', 'Principal', 111111220, 0, 1002, 'Estudiante'),
('RODRIGUEZ RINCON KAROL BRIGITH', 'Juan Luis Londoño', 'Principal', 111111221, 0, 1002, 'Estudiante'),
('RODRIGUEZ RODRIGUEZ ANGIE MIREYA', 'Juan Luis Londoño', 'Principal', 111111222, 0, 1002, 'Estudiante'),
('RUEDA CALDERON MAIKOL ANDRES', 'Juan Luis Londoño', 'Principal', 111111223, 0, 1002, 'Estudiante'),
('SANCHEZ RODRIGUEZ JEFERSON ALEXIS', 'Juan Luis Londoño', 'Principal', 111111224, 0, 1002, 'Estudiante'),
('TRIANA GALARZAA JORGE SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111225, 0, 1002, 'Estudiante'),
('URREGO YATE JOHANN ALEXANDER', 'Juan Luis Londoño', 'Principal', 111111226, 0, 1002, 'Estudiante'),
('VALDERRAMA ARIAS JOHAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111227, 0, 1002, 'Estudiante'),
('VARGAS MONTEJO JESUS DAVID', 'Juan Luis Londoño', 'Principal', 111111228, 0, 1002, 'Estudiante'),
('ZAMUDIO LOPEZ VALENTINA', 'Juan Luis Londoño', 'Principal', 111111229, 0, 1002, 'Estudiante'),
('ZULUAGA BONILLA VALENTINA', 'Juan Luis Londoño', 'Principal', 111111230, 0, 1002, 'Estudiante'),
('ABRIL ALARCON YEIMY JOHANNA', 'Juan Luis Londoño', 'Principal', 111111231, 0, 1001, 'Estudiante'),
('ACOSTA PATERNINA JHONATAN ALBRET', 'Juan Luis Londoño', 'Principal', 111111232, 0, 1001, 'Estudiante'),
('ALARCON SANCHEZ JOSHUA', 'Juan Luis Londoño', 'Principal', 111111233, 0, 1001, 'Estudiante'),
('ALDANA RINCON MANUEL ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111234, 0, 1001, 'Estudiante'),
('ANZOLA CORDOBA DANIEL ARTURO', 'Juan Luis Londoño', 'Principal', 111111235, 0, 1001, 'Estudiante'),
('ARERO YEISON JAIR', 'Juan Luis Londoño', 'Principal', 111111236, 0, 1001, 'Estudiante'),
('BELTRAN ACOSTA YULIANA PATRICIA', 'Juan Luis Londoño', 'Principal', 111111237, 0, 1001, 'Estudiante'),
('BOTON SARMIENTO ADRIANA LIZETH', 'Juan Luis Londoño', 'Principal', 111111238, 0, 1001, 'Estudiante'),
('CAÑON PEÑA JEISON EDUARDO', 'Juan Luis Londoño', 'Principal', 111111239, 0, 1001, 'Estudiante'),
('CASTAÑEDA PEÑUELA SHARON DANIELA', 'Juan Luis Londoño', 'Principal', 111111240, 0, 1001, 'Estudiante'),
('CHIQUITO CRUZ ANGIE NATALIA', 'Juan Luis Londoño', 'Principal', 111111241, 0, 1001, 'Estudiante'),
('CONDIZA GONZALEZ JENNIFER ALEXANDRA', 'Juan Luis Londoño', 'Principal', 111111242, 0, 1001, 'Estudiante'),
('FINO TORRES JULIAN DAVID', 'Juan Luis Londoño', 'Principal', 111111243, 0, 1001, 'Estudiante'),
('GARCIA SAAVEDRA JUAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111244, 0, 1001, 'Estudiante'),
('GOMEZ BENITEZ YENNY ALEJANDRA', 'Juan Luis Londoño', 'Principal', 111111245, 0, 1001, 'Estudiante'),
('GOMEZ PATIÑO LAURA PAOLA', 'Juan Luis Londoño', 'Principal', 111111246, 0, 1001, 'Estudiante'),
('GRANADA QUINTANA BRAYAN ESTEBAN', 'Juan Luis Londoño', 'Principal', 111111247, 0, 1001, 'Estudiante'),
('GUERRERO PAEZ JEFERSON STIVEN', 'Juan Luis Londoño', 'Principal', 111111248, 0, 1001, 'Estudiante'),
('GUERRERO PAEZ LIZ DAYAN', 'Juan Luis Londoño', 'Principal', 111111249, 0, 1001, 'Estudiante'),
('GUEVARA FLOREZ JUAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111250, 0, 1001, 'Estudiante'),
('LARA ARIAS IVAN JESUS', 'Juan Luis Londoño', 'Principal', 111111251, 0, 1001, 'Estudiante'),
('LUENGAS ACERO JULIAN DAVID', 'Juan Luis Londoño', 'Principal', 111111252, 0, 1001, 'Estudiante'),
('MONCADA FORERO CRISTIAN CAMILO', 'Juan Luis Londoño', 'Principal', 111111253, 0, 1001, 'Estudiante'),
('MONTAÑA BONILLA CAROLINA', 'Juan Luis Londoño', 'Principal', 111111254, 0, 1001, 'Estudiante'),
('MORENO SANCHEZ DILAN ALEXIS', 'Juan Luis Londoño', 'Principal', 111111255, 0, 1001, 'Estudiante'),
('MUÑOZ HERNANDEZ KAREN ANDREA', 'Juan Luis Londoño', 'Principal', 111111256, 0, 1001, 'Estudiante'),
('ORTIZ COCA CAROL YASMIN', 'Juan Luis Londoño', 'Principal', 111111257, 0, 1001, 'Estudiante'),
('OSORIO CORTES MATEO', 'Juan Luis Londoño', 'Principal', 111111258, 0, 1001, 'Estudiante'),
('QUINTERO BALLESTEROS EDITH YINETH', 'Juan Luis Londoño', 'Principal', 111111259, 0, 1001, 'Estudiante'),
('QUINTO BLANCO SERGIO ANDRES', 'Juan Luis Londoño', 'Principal', 111111260, 0, 1001, 'Estudiante'),
('RINCON BERNAL DAVID MATEO', 'Juan Luis Londoño', 'Principal', 111111261, 0, 1001, 'Estudiante'),
('RODRIGUEZ DUQUE JOSE DAVID', 'Juan Luis Londoño', 'Principal', 111111262, 0, 1001, 'Estudiante'),
('RODRIGUEZ RODRIGUEZ WILSON MAURICIO', 'Juan Luis Londoño', 'Principal', 111111263, 0, 1001, 'Estudiante'),
('ROMERO TORRES MELANIE VANESSA', 'Juan Luis Londoño', 'Principal', 111111264, 0, 1001, 'Estudiante'),
('SANCHEZ BARRIOS JUAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111265, 0, 1001, 'Estudiante'),
('SANCHEZ GONZALEZ MICHEL CAROLINA', 'Juan Luis Londoño', 'Principal', 111111266, 0, 1001, 'Estudiante'),
('SANCHEZ NIETO DILAN MAURICIO', 'Juan Luis Londoño', 'Principal', 111111267, 0, 1001, 'Estudiante'),
('SUAREZ RUBIANO JAVIER ESTEBAN', 'Juan Luis Londoño', 'Principal', 111111268, 0, 1001, 'Estudiante'),
('TRIBALDOS OTALVARO LAURA ALEJANDRA', 'Juan Luis Londoño', 'Principal', 111111269, 0, 1001, 'Estudiante'),
('VARGAS ARANDA OSCAR SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111270, 0, 1001, 'Estudiante'),
('AGUIRRE GARCIA JUAN DIEGO', 'Juan Luis Londoño', 'Principal', 111111271, 0, 802, 'Estudiante'),
('ANZOLA LOPEZ LAURA FERNANDA', 'Juan Luis Londoño', 'Principal', 111111272, 0, 802, 'Estudiante'),
('BARRAGAN ARIZA JOHAN ARLEY', 'Juan Luis Londoño', 'Principal', 111111273, 0, 802, 'Estudiante'),
('CABALLERO ALVARADO JULIAN DAVID', 'Juan Luis Londoño', 'Principal', 111111274, 0, 802, 'Estudiante'),
('CARDENAS LOZADA MIGUEL ANGEL', 'Juan Luis Londoño', 'Principal', 111111275, 0, 802, 'Estudiante'),
('CASTILLO VANEGAS JUAN MANUEL', 'Juan Luis Londoño', 'Principal', 111111276, 0, 802, 'Estudiante'),
('CAYCEDO GONZALEZ ANGIE ALEXANDRA', 'Juan Luis Londoño', 'Principal', 111111277, 0, 802, 'Estudiante'),
('CHAVARRO CAMACHO MARIA FERNANDA', 'Juan Luis Londoño', 'Principal', 111111278, 0, 802, 'Estudiante'),
('CHAVARRO VARON AMOR SOFIA', 'Juan Luis Londoño', 'Principal', 111111279, 0, 802, 'Estudiante'),
('CONTRERAS AVELLA SARA VALENTINA', 'Juan Luis Londoño', 'Principal', 111111280, 0, 802, 'Estudiante'),
('CORTES CABRA DAVID SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111281, 0, 802, 'Estudiante'),
('CUBIDES HERRERA DANIEL ANDRES', 'Juan Luis Londoño', 'Principal', 111111282, 0, 802, 'Estudiante'),
('DUQUE CAMACHO DANNA SOFIA', 'Juan Luis Londoño', 'Principal', 111111283, 0, 802, 'Estudiante'),
('GARZON SIERRA SANTIAGO DANIEL', 'Juan Luis Londoño', 'Principal', 111111284, 0, 802, 'Estudiante'),
('GUARIN CARVAJAL JUAN DAVID', 'Juan Luis Londoño', 'Principal', 111111285, 0, 802, 'Estudiante'),
('GUATIVA CAMARGO CARLOS ANDRES', 'Juan Luis Londoño', 'Principal', 111111286, 0, 802, 'Estudiante'),
('GUERRERO BERNAL NICOLAS SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111287, 0, 802, 'Estudiante'),
('HUERTAS MIRANDA ADRIANA VANESSA', 'Juan Luis Londoño', 'Principal', 111111288, 0, 802, 'Estudiante'),
('LEON JUYO CAMILO ANDRES', 'Juan Luis Londoño', 'Principal', 111111289, 0, 802, 'Estudiante'),
('MALAGON JARA LAURA CATALINA', 'Juan Luis Londoño', 'Principal', 111111290, 0, 802, 'Estudiante'),
('MANCERA PEREZ HUGO ANDRES', 'Juan Luis Londoño', 'Principal', 111111291, 0, 802, 'Estudiante'),
('MEDELLIN GARZON JULIETH MARITZA', 'Juan Luis Londoño', 'Principal', 111111292, 0, 802, 'Estudiante'),
('MENDEZ GONZALEZ ISIS SAMARA', 'Juan Luis Londoño', 'Principal', 111111293, 0, 802, 'Estudiante'),
('MORALES DUSSAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111294, 0, 802, 'Estudiante'),
('MORENO LIBERATO JEFFERSON STYVEN', 'Juan Luis Londoño', 'Principal', 111111295, 0, 802, 'Estudiante'),
('OCHOA REINA JUAN MANUEL', 'Juan Luis Londoño', 'Principal', 111111296, 0, 802, 'Estudiante'),
('ORTIZ CHIQUILLO SARA ALEJANDRA', 'Juan Luis Londoño', 'Principal', 111111297, 0, 802, 'Estudiante'),
('PATIÑO HIGUERA JOSE ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111298, 0, 802, 'Estudiante'),
('PATIÑO SANTAMARIA JULIO ANDRES', 'Juan Luis Londoño', 'Principal', 111111299, 0, 802, 'Estudiante'),
('PEREZ FORERO MARTIN ANDRES', 'Juan Luis Londoño', 'Principal', 111111300, 0, 802, 'Estudiante'),
('PRIETO POMAR LAURA VALENTINA', 'Juan Luis Londoño', 'Principal', 111111301, 0, 802, 'Estudiante'),
('PUENTES ESPINOSA MARIA PAULA', 'Juan Luis Londoño', 'Principal', 111111302, 0, 802, 'Estudiante'),
('PUERTAS LOPEZ DUVAN STIVE', 'Juan Luis Londoño', 'Principal', 111111303, 0, 802, 'Estudiante'),
('QUINTERO PRECIADO JUAN ESTEBAN', 'Juan Luis Londoño', 'Principal', 111111304, 0, 802, 'Estudiante'),
('RODRIGUEZ GOMEZ MATEO ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111305, 0, 802, 'Estudiante'),
('ROMERO GARCIA VALERY JOHANA', 'Juan Luis Londoño', 'Principal', 111111306, 0, 802, 'Estudiante'),
('SALDARRIAGA BERMUDEZ GABRIELA', 'Juan Luis Londoño', 'Principal', 111111307, 0, 802, 'Estudiante'),
('SIERRA QUINTANA PAULA VALENTINA', 'Juan Luis Londoño', 'Principal', 111111308, 0, 802, 'Estudiante'),
('TELLEZ GONZALEZ SARA CATALINA', 'Juan Luis Londoño', 'Principal', 111111309, 0, 802, 'Estudiante'),
('VALERIANO MARTINEZ ANDRES FELIPE', 'Juan Luis Londoño', 'Principal', 111111310, 0, 802, 'Estudiante'),
('VASQUEZ CAICEDO MARTIN', 'Juan Luis Londoño', 'Principal', 111111311, 0, 802, 'Estudiante'),
('AMAYA LAVERDE KARLA FERNANDA', 'Juan Luis Londoño', 'Principal', 111111312, 0, 704, 'Estudiante'),
('ANGEL PANCHE JUAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111313, 0, 704, 'Estudiante'),
('ARIAS ALFONSO MARIA FERNANDA', 'Juan Luis Londoño', 'Principal', 111111314, 0, 704, 'Estudiante'),
('BALCERO SIERRA CRISTIAN SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111315, 0, 704, 'Estudiante'),
('BARRERA RANGEL SOPHYE', 'Juan Luis Londoño', 'Principal', 111111316, 0, 704, 'Estudiante'),
('BARRIOS MALAMBO ANGELA ALEJANDRA', 'Juan Luis Londoño', 'Principal', 111111317, 0, 704, 'Estudiante'),
('BETANCOURT MORENO NICOL JAZMIN', 'Juan Luis Londoño', 'Principal', 111111318, 0, 704, 'Estudiante'),
('CARDENAS DIAZ JOHAN SEBASTIAN', 'Juan Luis Londoño', 'Principal', 111111319, 0, 704, 'Estudiante'),
('CETINA ARERO HAROLD DUVAN', 'Juan Luis Londoño', 'Principal', 111111320, 0, 704, 'Estudiante'),
('CHIVATA AREVALO JUAN DAVID', 'Juan Luis Londoño', 'Principal', 111111321, 0, 704, 'Estudiante'),
('COGOLLO PAZ YINADIS', 'Juan Luis Londoño', 'Principal', 111111322, 0, 704, 'Estudiante'),
('CORREA TORRES WILMARIS CAROLAY', 'Juan Luis Londoño', 'Principal', 111111323, 0, 704, 'Estudiante'),
('CORREDOR ORTIZ DANNA YARLEY', 'Juan Luis Londoño', 'Principal', 111111324, 0, 704, 'Estudiante'),
('CRUZ ARCINIEGAS VALERIE LORENA', 'Juan Luis Londoño', 'Principal', 111111325, 0, 704, 'Estudiante'),
('ECHETO CASTILLO JESUS DANIEL', 'Juan Luis Londoño', 'Principal', 111111326, 0, 704, 'Estudiante'),
('ESPINOSA APERADOR JADER FABIAN', 'Juan Luis Londoño', 'Principal', 111111327, 0, 704, 'Estudiante'),
('FAJARDO GARCIA GABRIEL DUVAN', 'Juan Luis Londoño', 'Principal', 111111328, 0, 704, 'Estudiante'),
('FRANCO PEÑA HASBLEIDY YULIET', 'Juan Luis Londoño', 'Principal', 111111329, 0, 704, 'Estudiante'),
('GARZON RAMIREZ VALERIA', 'Juan Luis Londoño', 'Principal', 111111330, 0, 704, 'Estudiante'),
('GIL TRIANA EVELIN FERNANDA', 'Juan Luis Londoño', 'Principal', 111111331, 0, 704, 'Estudiante'),
('GIRATA ARANGO DANA GABRIELA', 'Juan Luis Londoño', 'Principal', 111111332, 0, 704, 'Estudiante'),
('KLINGER AGUIRRE CRISTHIAN CAMILO', 'Juan Luis Londoño', 'Principal', 111111333, 0, 704, 'Estudiante'),
('LOPEZ MORALES DAVID ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111334, 0, 704, 'Estudiante'),
('LUGO TAFUR JUAN ESTEBAN', 'Juan Luis Londoño', 'Principal', 111111335, 0, 704, 'Estudiante'),
('MANTILLA RODRIGUEZ HOLMAN SANTIAGO', 'Juan Luis Londoño', 'Principal', 111111336, 0, 704, 'Estudiante'),
('MARROQUIN CORRALES DANNA SOFIA', 'Juan Luis Londoño', 'Principal', 111111337, 0, 704, 'Estudiante'),
('MERCADO PULGARIN SARA YULIZA', 'Juan Luis Londoño', 'Principal', 111111338, 0, 704, 'Estudiante'),
('PARRA PERDOMO BRIYETH TATIANA', 'Juan Luis Londoño', 'Principal', 111111339, 0, 704, 'Estudiante'),
('PASTRANA ESPINOSA KAROL LISETH', 'Juan Luis Londoño', 'Principal', 111111340, 0, 704, 'Estudiante'),
('PATIÑO AREVALO JENIFFER ESTRELLA', 'Juan Luis Londoño', 'Principal', 111111341, 0, 704, 'Estudiante'),
('PEREZ CARREÑO LISED XIOMARA', 'Juan Luis Londoño', 'Principal', 111111342, 0, 704, 'Estudiante'),
('PINZON MORALES NICOL DANIELA', 'Juan Luis Londoño', 'Principal', 111111343, 0, 704, 'Estudiante'),
('PULIDO RODRIGUEZ OMAR ALEJANDRO', 'Juan Luis Londoño', 'Principal', 111111344, 0, 704, 'Estudiante'),
('QUINTERO PINILLA MIGUEL ANGEL', 'Juan Luis Londoño', 'Principal', 111111345, 0, 704, 'Estudiante'),
('RAMOS ULLOA JONNY ALEXANDER', 'Juan Luis Londoño', 'Principal', 111111346, 0, 704, 'Estudiante'),
('SUA MENDIVELSO MIGUEL ANGEL', 'Juan Luis Londoño', 'Principal', 111111347, 0, 704, 'Estudiante'),
('SUA PACANCHIQUE DIEGO ALEXANDER', 'Juan Luis Londoño', 'Principal', 111111348, 0, 704, 'Estudiante'),
('TORRES RIOS HELEN ZHARAY', 'Juan Luis Londoño', 'Principal', 111111349, 0, 704, 'Estudiante'),
('VARGAS CAÑON PAULA TATIANA', 'Juan Luis Londoño', 'Principal', 111111350, 0, 704, 'Estudiante'),
('VILLALBA HORTUA FRANKYN STIVEN', 'Juan Luis Londoño', 'Principal', 111111351, 0, 704, 'Estudiante'),
('ZUÑIGA ARIZA MATEO', 'Juan Luis Londoño', 'Principal', 111111352, 0, 704, 'Estudiante'),
('ABAUNZA GALVIS ANDREA', 'Juan Luis Londoño', 'Principal', 123456789, 0, 0, 'Docente'),
('ACUÑA GARZON BIBIANA KATHERIN', 'Juan Luis Londoño', 'Principal', 123456790, 0, 0, 'Docente'),
('ALVARADO MORA YANIRA', 'Juan Luis Londoño', 'Principal', 123456791, 0, 0, 'Docente'),
('ARISTIZABAL TRIANA WILLIAM', 'Juan Luis Londoño', 'Principal', 123456792, 0, 0, 'Docente'),
('CHAVEZ VELOZA MARIA ENGRACIA', 'Juan Luis Londoño', 'Principal', 123456793, 0, 0, 'Docente'),
('CRUZ MARTINEZ ANA YANIRA', 'Juan Luis Londoño', 'Principal', 123456794, 0, 0, 'Docente'),
('CUITIVA BARACALDO MARIA VICTORIA', 'Juan Luis Londoño', 'Principal', 123456795, 0, 0, 'Docente'),
('DAZA LIZCANO CAMILO', 'Juan Luis Londoño', 'Principal', 123456796, 0, 0, 'Docente'),
('DIAZ BONILLA WILLIAM FERNANDO', 'Juan Luis Londoño', 'Principal', 123456797, 0, 0, 'Docente'),
('DIAZ MESA NELIDA', 'Juan Luis Londoño', 'Principal', 123456798, 0, 0, 'Docente'),
('DURAN SANDOVAL FLOR ANGELA', 'Juan Luis Londoño', 'Principal', 123456799, 0, 0, 'Docente'),
('GALINDO GUERRA JOSE ALEJANDRO', 'Juan Luis Londoño', 'Principal', 123456800, 0, 0, 'Docente'),
('GARCIA CENDALES CINDY JULIETH', 'Juan Luis Londoño', 'Principal', 123456801, 0, 0, 'Docente'),
('GARCIA GOMEZ BLANCA FLOR', 'Juan Luis Londoño', 'Unidad', 123456802, 0, 0, 'Docente'),
('GARCIA GUAYARA LUIS FERNANDO', 'Juan Luis Londoño', 'Principal', 123456803, 0, 0, 'Docente'),
('GRANADOS CELY JOSE ARMANDO', 'Juan Luis Londoño', 'Principal', 123456804, 0, 0, 'Docente'),
('GONZALEZ SERRANO LUCENA ROSARIO', 'Juan Luis Londoño', 'Principal', 123456805, 0, 0, 'Docente'),
('GUTIERREZ PARRADO GLORIA', 'Juan Luis Londoño', 'Principal', 123456806, 0, 0, 'Docente'),
('MARTINEZ SALAZAR SONIA JAZMIN', 'Juan Luis Londoño', 'Principal', 123456807, 0, 0, 'Docente'),
('MONROY OCHOA JOSELITO', 'Juan Luis Londoño', 'unidad', 123456808, 0, 0, 'Docente'),
('ORDOÑEZ SANGREGORIO ORLANDO', 'Juan Luis Londoño', 'Principal', 123456809, 0, 0, 'Docente'),
('OSPINA RODRIGUEZ BENJAMIN', 'Juan Luis Londoño', 'Principal', 123456810, 0, 0, 'Docente'),
('PEÑA NAVARRO JUDY MARITZA', 'Juan Luis Londoño', 'Unidad', 123456811, 0, 0, 'Docente'),
('PIERNAGORDA LEGUIZAMON DORIS', 'Juan Luis Londoño', 'Principal', 123456812, 0, 0, 'Docente'),
('POVEDA ALVAREZ MARTHA JANETH', 'Juan Luis Londoño', 'Principal', 123456813, 0, 0, 'Docente'),
('RIAÑO LEMUS YUDY MARCELA', 'Juan Luis Londoño', 'Principal', 123456814, 0, 0, 'Docente'),
('ROJAS BARBOSA CLARA JISED', 'Juan Luis Londoño', 'Principal', 123456815, 0, 0, 'Docente'),
('SANDOVAL BUSTOS CESAR AUGUSTO', 'Juan Luis Londoño', 'Principal', 123456816, 0, 0, 'Docente'),
('TORRES ESPITIA OLGA YASMIN', 'Juan Luis Londoño', 'Principal', 123456817, 0, 0, 'Docente'),
('UMBARILA CHACON LUZ MERY', 'Juan Luis Londoño', 'Principal', 123456818, 0, 0, 'Docente'),
('CONTRERAS VALENZUELA CARLOS ALBERTO', 'Juan Luis Londoño', 'principal', 123456819, 0, 0, 'Docente'),
('VIDAL MORA JESUS ERNESTO', 'Juan Luis Londoño', 'Principal', 123456820, 0, 0, 'Docente'),
('OSCAR DANIEL PULIDO GOMEZ', 'Juan Luis Londoño', 'Unidad', 123456821, 0, 100, 'Estudiante'),
('AGULAR GOMEZ MARIO ALEJANDRO', 'Juan Luis Londoño', 'Unidad', 123456822, 0, 100, 'Estudiante'),
('CASTRO PENICHE ARTURO', 'Juan Luis Londoño', 'Unidad', 123456823, 0, 100, 'Estudiante'),
('VARGAS SOTELO KAREN', 'Juan Luis Londoño', 'Unidad', 123456824, 0, 100, 'Estudiante'),
('CASAS AVENDAÑO CLAUDIA MARCELA', 'Juan Luis Londoño', 'Unidad', 123456825, 0, 100, 'Estudiante'),
('ORDOÑEZ GERMAN DAVID', 'Juan Luis Londoño', 'Unidad', 123456826, 0, 100, 'Estudiante'),
('GARCIA PEREZ FABIAN DAVID', 'Juan Luis Londoño', 'Unidad', 123456827, 0, 100, 'Estudiante'),
('ESPRADO PAOLA ANDREA', 'Juan Luis Londoño', 'Unidad', 123456828, 0, 100, 'Estudiante'),
('GALICIA PULIDO YEISON FERNANDO', 'Juan Luis Londoño', 'Unidad', 123456829, 0, 100, 'Estudiante'),
('GARZON MAURA LORENA', 'Juan Luis Londoño', 'Unidad', 123456830, 0, 100, 'Estudiante'),
('MONTEALEGRE DIAZ BRAYAN JAIR', 'Juan Luis Londoño', 'Unidad', 123456831, 0, 100, 'Estudiante'),
('DIAZ SAAVEDRA YUDY ROCIO', 'Juan Luis Londoño', 'Unidad', 123456832, 0, 100, 'Estudiante'),
('GARCIA MENDEZ LAURA DANIELA', 'Juan Luis Londoño', 'Unidad', 123456833, 0, 100, 'Estudiante'),
('MARIA JOSE RAMIREZ PARRA', 'Juan Luis Londoño', 'Unidad', 123456834, 0, 100, 'Estudiante'),
('BOHORQUEZ LIZETH PAMELA', 'Juan Luis Londoño', 'Unidad', 123456835, 0, 200, 'Estudiante'),
('MAICOL STEVEN GARCES GOMEZ', 'Juan Luis Londoño', 'Unidad', 123456836, 0, 200, 'Estudiante'),
('YEIMY LORENA GARCES VALENZUELA', 'Juan Luis Londoño', 'Unidad', 123456837, 0, 200, 'Estudiante'),
('MUÑOS ESPITIA JOSE HUMBERTO', 'Juan Luis Londoño', 'Unidad', 123456838, 0, 200, 'Estudiante'),
('ARIZA ACEVEDO YEIMY CAROLINA', 'Juan Luis Londoño', 'Unidad', 123456839, 0, 200, 'Estudiante'),
('ACOSTA AGUDELO STEFANY', 'Juan Luis Londoño', 'Unidad', 123456840, 0, 200, 'Estudiante'),
('BARBOSA AQUILES DAMON ALCIDES', 'Juan Luis Londoño', 'Unidad', 123456841, 0, 200, 'Estudiante'),
('BARBOSA PARDO NELCY MILENA', 'Juan Luis Londoño', 'Unidad', 123456842, 0, 200, 'Estudiante'),
('JURADO BENITES MAIKOL JOSE', 'Juan Luis Londoño', 'Unidad', 123456843, 0, 200, 'Estudiante'),
('SUSA MUÑOZ LUIS ALFREDO', 'Juan Luis Londoño', 'Unidad', 123456844, 0, 200, 'Estudiante'),
('MONTEALEGRE DIAZ OSMAN SANTIAGO', 'Juan Luis Londoño', 'Unidad', 123456845, 0, 200, 'Estudiante'),
('ACUÑA CASTRO CATALINA', 'Juan Luis Londoño', 'Unidad', 123456846, 0, 200, 'Estudiante'),
('BAZZANI JARAMILLO JUAN JOSE', 'Juan Luis Londoño', 'Unidad', 123456847, 0, 200, 'Estudiante'),
('HERRERA CRUZ CAMILA', 'Juan Luis Londoño', 'Unidad', 123456848, 0, 200, 'Estudiante'),
('BETANCOURT GOMEZ KAREN LORENA', 'Juan Luis Londoño', 'Unidad', 123456849, 0, 200, 'Estudiante'),
('CRISPIN SONIA KATERINE', 'Juan Luis Londoño', 'Unidad', 123456850, 0, 200, 'Estudiante'),
('AVENDAÑO SUAREZ MARTA PATRICIA', 'Juan Luis Londoño', 'Unidad', 123456851, 0, 200, 'Estudiante'),
('ZAPATA QUEVEDO LUISA CAMILA', 'Juan Luis Londoño', 'Unidad', 123456852, 0, 200, 'Estudiante'),
('PEREZ MARIA ESMERALDA', 'Juan Luis Londoño', 'Unidad', 123456853, 0, 200, 'Estudiante'),
('LOPEZ LOPEZ CLAUDIA SOFIA', 'Juan Luis Londoño', 'Unidad', 123456854, 0, 300, 'Estudiante'),
('ARAQUE CASTAÑEDA LEIDY CAROLINA', 'Juan Luis Londoño', 'Unidad', 123456855, 0, 300, 'Estudiante'),
('GUTIERREZ ESPINDOLA LUZ PAOLA', 'Juan Luis Londoño', 'Unidad', 123456856, 0, 300, 'Estudiante'),
('URUEÑA RUIZ JENNIFER ALEXANDRA', 'Juan Luis Londoño', 'Unidad', 123456857, 0, 300, 'Estudiante'),
('ROLDAN MEJIA JENNY TATIANA', 'Juan Luis Londoño', 'Unidad', 123456858, 0, 300, 'Estudiante'),
('DIAZ SAAVEDRA YUDY ROCIO', 'Juan Luis Londoño', 'Unidad', 123456859, 0, 300, 'Estudiante'),
('SAAVEDRA MARIA EDITH', 'Juan Luis Londoño', 'Unidad', 123456860, 0, 300, 'Estudiante'),
('DIMATE CASTIBLANCO ROCIO', 'Juan Luis Londoño', 'Unidad', 123456861, 0, 300, 'Estudiante'),
('REYES GUALTEROS LAURA VALENTINA', 'Juan Luis Londoño', 'Unidad', 123456862, 0, 300, 'Estudiante'),
('MERCHAN LOPEZ JUAN MARIO', 'Juan Luis Londoño', 'Unidad', 123456863, 0, 300, 'Estudiante'),
('BOUYANESHE CHAVARRO ALEXANDER', 'Juan Luis Londoño', 'Unidad', 123456864, 0, 300, 'Estudiante'),
('CHAVARRO PABON JUAN CAMILO', 'Juan Luis Londoño', 'Unidad', 123456865, 0, 300, 'Estudiante'),
('ANAYANCY DEL VALLE FLORES', 'Juan Luis Londoño', 'Unidad', 123456866, 0, 300, 'Estudiante'),
('NANCY CAROLINA MONTEALEGRE TRUJILLO', 'Juan Luis Londoño', 'Unidad', 123456867, 0, 300, 'Estudiante'),
('MONTEALEGRE DIAZ LYAN VANESSA', 'Juan Luis Londoño', 'Unidad', 123456868, 0, 300, 'Estudiante'),
('SANTAMARIA VELEZ JESSICA', 'Juan Luis Londoño', 'Unidad', 123456869, 0, 300, 'Estudiante'),
('URBIÑEZ OTEGA JUAN DAVID', 'Juan Luis Londoño', 'Unidad', 123456870, 0, 300, 'Estudiante'),
('BRAVO VAZQUEZ JUAN ESTEBAN', 'Juan Luis Londoño', 'Unidad', 123456871, 0, 300, 'Estudiante'),
('ARIAS VALLONA NICOLE DAYANA', 'Juan Luis Londoño', 'Unidad', 123456872, 0, 300, 'Estudiante'),
('SANTOS GONGORA GERMAN ERNESTO', 'Juan Luis Londoño', 'Unidad', 123456873, 0, 400, 'Estudiante'),
('BARRAGAN BARON JUAN JOSE', 'Juan Luis Londoño', 'Unidad', 123456874, 0, 400, 'Estudiante'),
('ROMERO SANTOS MARIA TERESA', 'Juan Luis Londoño', 'Unidad', 123456875, 0, 400, 'Estudiante'),
('ACOSTA PEREZ JAZMIN CAMILA', 'Juan Luis Londoño', 'Unidad', 123456876, 0, 400, 'Estudiante'),
('GARCIA PEREZ YEIMY YURANY', 'Juan Luis Londoño', 'Unidad', 123456877, 0, 400, 'Estudiante'),
('BELTRAN ARIZA JULIAN CAMILO', 'Juan Luis Londoño', 'Unidad', 123456878, 0, 400, 'Estudiante'),
('TRUJILLO PERDOMO LUCY DELMIRA', 'Juan Luis Londoño', 'Unidad', 123456879, 0, 400, 'Estudiante'),
('COTRINA FUENTES FLOR ELIZA', 'Juan Luis Londoño', 'Unidad', 123456880, 0, 400, 'Estudiante'),
('VANEGAS PERALTA JUAN FERNANDO', 'Juan Luis Londoño', 'Principal', 1000522274, 0, 1103, 'Estudiante'),
('HERRERA CALDERON MARIA FERNANDA', 'Juan Luis Londoño', 'Principal', 1003534274, 0, 1103, 'Estudiante'),
('DIAZ SAAVEDRA MABEL TATIANA', 'Juan Luis Londoño', 'Principal', 1003690778, 0, 1103, 'Estudiante'),
('DUARTE MORENO NICOLAS', 'Juan Luis Londoño', 'Principal', 1007557777, 52275209, 1103, 'Estudiante'),
('AVELLA RICO YESICA DANIELA', 'Juan Luis Londoño', 'Principal', 1022323085, 0, 1103, 'Estudiante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compromiso`
--
ALTER TABLE `compromiso`
  ADD PRIMARY KEY (`id_com`);

--
-- Indices de la tabla `compromiso_familiar`
--
ALTER TABLE `compromiso_familiar`
  ADD PRIMARY KEY (`id_comfa`);

--
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD PRIMARY KEY (`id_obser`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD UNIQUE KEY `id_obser` (`id_obser`,`id_com`),
  ADD UNIQUE KEY `id_comfa` (`id_comfa`),
  ADD KEY `id_com` (`id_com`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `documento` (`documento`),
  ADD UNIQUE KEY `documento_2` (`documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compromiso`
--
ALTER TABLE `compromiso`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compromiso_familiar`
--
ALTER TABLE `compromiso_familiar`
  MODIFY `id_comfa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `id_obser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`id_obser`) REFERENCES `observaciones` (`id_obser`),
  ADD CONSTRAINT `respuesta_ibfk_2` FOREIGN KEY (`id_com`) REFERENCES `compromiso` (`id_com`),
  ADD CONSTRAINT `respuesta_ibfk_3` FOREIGN KEY (`id_comfa`) REFERENCES `compromiso_familiar` (`id_comfa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
