/*
Navicat MySQL Data Transfer

Source Server         : marcelo
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : biblioteca_virtual

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2014-04-09 11:19:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `administrador`
-- ----------------------------
DROP TABLE IF EXISTS `administrador`;
CREATE TABLE `administrador` (
  `ci` int(8) NOT NULL,
  `nombre_Usuario` varchar(30) NOT NULL,
  `contrasenia` varchar(30) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_Pat` varchar(20) NOT NULL,
  `apellido_Mat` varchar(20) NOT NULL,
  `fecha_Registro` date NOT NULL,
  PRIMARY KEY (`ci`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of administrador
-- ----------------------------
INSERT INTO `administrador` VALUES ('8782848', 'marceloAdm', 'marcelo123', 'marcelo', 'ramos', 'valdez', '2014-04-09');
INSERT INTO `administrador` VALUES ('12468945', 'isrraelAdm', 'isrrael123', 'isrrael', 'nnn', 'nnn', '2014-04-09');

-- ----------------------------
-- Table structure for `libro`
-- ----------------------------
DROP TABLE IF EXISTS `libro`;
CREATE TABLE `libro` (
  `id_Libro` int(30) NOT NULL DEFAULT '0',
  `nombre_Archivo` varchar(30) NOT NULL,
  `ci_adm` int(8) DEFAULT NULL,
  `titulo` varchar(30) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `genero` varchar(30) DEFAULT NULL,
  `version` double(10,0) DEFAULT NULL,
  `anio_Edicion` date NOT NULL,
  PRIMARY KEY (`id_Libro`),
  KEY `re` (`ci_adm`),
  CONSTRAINT `re` FOREIGN KEY (`ci_adm`) REFERENCES `administrador` (`ci`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of libro
-- ----------------------------
INSERT INTO `libro` VALUES ('123', 'doc123', '12468945', 'Cien años de soledad', 'Gabriel Garcia Marquez', null, '1', '2013-12-02');
INSERT INTO `libro` VALUES ('124', 'doc124', '8782848', 'El Codigo Da Vinci', 'Dan brown', '', '1', '2003-07-17');
INSERT INTO `libro` VALUES ('125', 'doc125', '12468945', 'el Alquimista', 'Paulo Cohelo', null, '1', '1998-03-04');

-- ----------------------------
-- Table structure for `pago`
-- ----------------------------
DROP TABLE IF EXISTS `pago`;
CREATE TABLE `pago` (
  `nro_Pago` int(11) NOT NULL,
  `fecha_De_Pago` date NOT NULL DEFAULT '0000-00-00',
  `ci_Usuario` int(8) DEFAULT NULL,
  `ci_Administrador` int(8) DEFAULT NULL,
  PRIMARY KEY (`nro_Pago`,`fecha_De_Pago`),
  KEY `pago_ibfk_1` (`ci_Administrador`),
  CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`ci_Administrador`) REFERENCES `administrador` (`ci`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pago
-- ----------------------------
INSERT INTO `pago` VALUES ('12432', '2014-04-09', '8782848', '12468945');
INSERT INTO `pago` VALUES ('54356', '2014-04-10', '98657678', '8782848');

-- ----------------------------
-- Table structure for `prestamo`
-- ----------------------------
DROP TABLE IF EXISTS `prestamo`;
CREATE TABLE `prestamo` (
  `libro` int(255) NOT NULL,
  `fecha` date NOT NULL,
  `usuario` int(255) NOT NULL,
  KEY `prestamo_ibfk_1` (`libro`),
  KEY `prestamo_ibfk_2` (`usuario`),
  CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`ci`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`libro`) REFERENCES `libro` (`id_Libro`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of prestamo
-- ----------------------------

-- ----------------------------
-- Table structure for `usuario`
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `ci` int(11) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `contrasenia` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_Pat` varchar(30) DEFAULT NULL,
  `apellido_Mat` varchar(30) DEFAULT NULL,
  `fecha_Registro` date NOT NULL,
  `nro_Pago` int(11) NOT NULL,
  ` estado` varchar(30) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  PRIMARY KEY (`ci`),
  KEY `registra` (`nro_Pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('145654', 'juanUser', 'juan123', 'juan', null, null, '2014-04-09', '344324', 'habilitado', 'juan_03@hotmail.com');
INSERT INTO `usuario` VALUES ('8782848', 'marceloUser', 'marcelo123', 'marcelo', 'ramos', 'valdez', '2014-04-09', '12345', 'inhabilitado', 'jhosmar_ramo@hotmail.com');
INSERT INTO `usuario` VALUES ('97856345', 'isrraelUser', 'isrrael123', 'isrrael', null, null, '2014-04-09', '13577', 'inhabilitado', 'isrrael_2@hotmail.com');
