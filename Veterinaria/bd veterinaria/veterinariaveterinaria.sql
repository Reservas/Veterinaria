-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-06-2015 a las 19:54:57
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `id_paciente` (`id_paciente`),
  KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `compra`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_hospitalizacion`
--

CREATE TABLE IF NOT EXISTS `detalle_hospitalizacion` (
  `id_detalle_hospitalizacion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_h` date NOT NULL,
  `hora_h` date NOT NULL,
  `te_hos` varchar(200) NOT NULL,
  `fece_hos` varchar(200) NOT NULL,
  `fere_hos` varchar(200) NOT NULL,
  `tera_aplicada` varchar(200) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `id_hospitalizacion` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_hospitalizacion`),
  KEY `id_hospitalizacion` (`id_hospitalizacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `detalle_hospitalizacion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_protocolo_anestesia`
--

CREATE TABLE IF NOT EXISTS `detalle_protocolo_anestesia` (
  `id_detalle_proto_anes` int(11) NOT NULL AUTO_INCREMENT,
  `farma_indu` varchar(100) NOT NULL,
  `hora_indu` date NOT NULL,
  `dosis_indu` varchar(100) NOT NULL,
  `dilucion_indu` varchar(100) NOT NULL,
  `via_apli_indu` varchar(100) NOT NULL,
  `farma_mante` varchar(100) NOT NULL,
  `hora_mante` date NOT NULL,
  `dosis_mante` varchar(100) NOT NULL,
  `via_apli_mante` varchar(100) NOT NULL,
  `tiempo_to_anes` varchar(100) NOT NULL,
  `hora_consta` date NOT NULL,
  `fc_consta` varchar(100) NOT NULL,
  `t_consta` varchar(100) NOT NULL,
  `pulso_consta` varchar(100) NOT NULL,
  `mucosa_consta` varchar(100) NOT NULL,
  `observacion` varchar(300) NOT NULL,
  `id_protocolo_anes` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_proto_anes`),
  KEY `id_protocolo_anes` (`id_protocolo_anes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `detalle_protocolo_anestesia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_protocolo_quirurgico`
--

CREATE TABLE IF NOT EXISTS `detalle_protocolo_quirurgico` (
  `id_detalle_pro_qui` int(11) NOT NULL AUTO_INCREMENT,
  `hora_consta` date NOT NULL,
  `fc_consta` varchar(200) NOT NULL,
  `fr_consta` varchar(200) NOT NULL,
  `t_consta` varchar(200) NOT NULL,
  `pulso_consta` varchar(200) NOT NULL,
  `mucosa_consta` varchar(200) NOT NULL,
  `hora_trans` varchar(200) NOT NULL,
  `farmaco_trans` varchar(200) NOT NULL,
  `dosis_trans` varchar(200) NOT NULL,
  `via_apli_trans` varchar(200) NOT NULL,
  `hora_post` date NOT NULL,
  `farmaco_post` varchar(200) NOT NULL,
  `dosis_post` varchar(200) NOT NULL,
  `via_apli_post` varchar(200) NOT NULL,
  `id_protocolo_qui` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_pro_qui`),
  KEY `id_protocolo_qui` (`id_protocolo_qui`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `detalle_protocolo_quirurgico`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id_doctor` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id_doctor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `doctor`
--

INSERT INTO `doctor` (`id_doctor`, `user`, `pass`) VALUES
(1, 'admin', '12345'),
(2, 'admin2', '54321'),
(3, 'gaby', 'abcde'),
(4, 'nadie', 'fghij');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE IF NOT EXISTS `historial` (
  `id_historial` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `peso` varchar(200) NOT NULL,
  `consulta` varchar(200) NOT NULL,
  `tratamiento` varchar(200) NOT NULL,
  `proxima_cita` date NOT NULL,
  `id_paciente` int(11) NOT NULL,
  PRIMARY KEY (`id_historial`),
  KEY `id_paciente` (`id_paciente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospitalizacion`
--

CREATE TABLE IF NOT EXISTS `hospitalizacion` (
  `id_hospitalizacion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_hos` date NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `motivo_hos` varchar(200) NOT NULL,
  PRIMARY KEY (`id_hospitalizacion`),
  KEY `id_paciente` (`id_paciente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hospitalizacion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_paciente` varchar(50) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `especie` varchar(75) NOT NULL,
  `raza` varchar(75) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `edad` varchar(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `propietario` varchar(75) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `direccion` varchar(75) NOT NULL,
  `correo_electronico` varchar(75) NOT NULL,
  `temperamento` varchar(50) NOT NULL,
  `tatuaje` varchar(50) NOT NULL,
  PRIMARY KEY (`id_paciente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nombre_paciente`, `fecha_ingreso`, `especie`, `raza`, `sexo`, `color`, `edad`, `fecha_nacimiento`, `propietario`, `telefono`, `celular`, `direccion`, `correo_electronico`, `temperamento`, `tatuaje`) VALUES
(1, 'pirata', '2013-09-11', 'perro', 'bull terrier', 'masculino', 'blanco', '3 meses', '2013-06-11', 'Gabriela Bonilla', '2228-1363', '7244-7929', 'colonia tres de mayo calle colon #2143', '00019614@uca.edu.sv', 'normal', 'no tiene'),
(2, 'pirata', '2015-04-01', 'perro', 'bull terrier', 'masculino', 'blanco', '3 meses', '2015-01-01', 'Gabriela Bonilla', '2228-1363', '7244-7929', 'colonia tres de mayo calle colon #2143', '00019614@uca.edu.sv', 'normal', 'no tiene');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(75) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `existencia` varchar(5) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `precio`, `existencia`) VALUES
(7, 'leche', '1.35', '4'),
(9, 'papas', '.50', '7'),
(10, 'carne', '8.90', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `protocolo_anestesia`
--

CREATE TABLE IF NOT EXISTS `protocolo_anestesia` (
  `id_protocolo_anes` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_anes` date NOT NULL,
  `hora_anes` date NOT NULL,
  `peso_anes` varchar(10) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  PRIMARY KEY (`id_protocolo_anes`),
  KEY `id_paciente` (`id_paciente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `protocolo_anestesia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `protocolo_quirurgico`
--

CREATE TABLE IF NOT EXISTS `protocolo_quirurgico` (
  `id_protocolo_qui` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_q` date NOT NULL,
  `hora_q` date NOT NULL,
  `procedimiento_reali` varchar(250) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_protocolo_anes` int(11) NOT NULL,
  PRIMARY KEY (`id_protocolo_qui`),
  KEY `id_paciente` (`id_paciente`),
  KEY `id_protocolo_anes` (`id_protocolo_anes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `protocolo_quirurgico`
--


--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_hospitalizacion`
--
ALTER TABLE `detalle_hospitalizacion`
  ADD CONSTRAINT `detalle_hospitalizacion_ibfk_1` FOREIGN KEY (`id_hospitalizacion`) REFERENCES `hospitalizacion` (`id_hospitalizacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_protocolo_anestesia`
--
ALTER TABLE `detalle_protocolo_anestesia`
  ADD CONSTRAINT `detalle_protocolo_anestesia_ibfk_1` FOREIGN KEY (`id_protocolo_anes`) REFERENCES `protocolo_anestesia` (`id_protocolo_anes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_protocolo_quirurgico`
--
ALTER TABLE `detalle_protocolo_quirurgico`
  ADD CONSTRAINT `detalle_protocolo_quirurgico_ibfk_1` FOREIGN KEY (`id_protocolo_qui`) REFERENCES `protocolo_quirurgico` (`id_protocolo_qui`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `hospitalizacion`
--
ALTER TABLE `hospitalizacion`
  ADD CONSTRAINT `hospitalizacion_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `protocolo_anestesia`
--
ALTER TABLE `protocolo_anestesia`
  ADD CONSTRAINT `protocolo_anestesia_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `protocolo_quirurgico`
--
ALTER TABLE `protocolo_quirurgico`
  ADD CONSTRAINT `protocolo_quirurgico_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `protocolo_quirurgico_ibfk_2` FOREIGN KEY (`id_protocolo_anes`) REFERENCES `protocolo_anestesia` (`id_protocolo_anes`) ON DELETE CASCADE ON UPDATE CASCADE;
