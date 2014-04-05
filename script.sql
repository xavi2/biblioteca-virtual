/*
Navicat MySQL Data Transfer

Source Server         : coneccioin_1
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : SISII

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2014-04-05 15:28:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for Administrador
-- ----------------------------
DROP TABLE IF EXISTS `Administrador`;
CREATE TABLE `Administrador` (
  `ci` int(255) NOT NULL,
  `nombre_Usuario` varchar(30) NOT NULL,
  `contrasenia` varchar(30) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_Pat` varchar(20) NOT NULL,
  `apellido_Mat` varchar(20) NOT NULL,
  `fecha_Registro` date NOT NULL,
  PRIMARY KEY (`ci`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for Libro
-- ----------------------------
DROP TABLE IF EXISTS `Libro`;
CREATE TABLE `Libro` (
  `isbn` int(11) NOT NULL,
  `nombre_Archivo` varchar(30) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `genero` varchar(30) DEFAULT NULL,
  `version` varchar(20) DEFAULT NULL,
  `anio_Edicion` int(11) DEFAULT NULL,
  PRIMARY KEY (`isbn`,`nombre_Archivo`),
  KEY `isbn` (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for Pago
-- ----------------------------
DROP TABLE IF EXISTS `Pago`;
CREATE TABLE `Pago` (
  `nro_Pago` int(11) NOT NULL,
  `fecha_De_Pago` date NOT NULL DEFAULT '0000-00-00',
  `usuario` int(255) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `valor` int(255) DEFAULT NULL,
  PRIMARY KEY (`nro_Pago`,`fecha_De_Pago`),
  KEY `nro_Pago` (`nro_Pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for Prestamo
-- ----------------------------
DROP TABLE IF EXISTS `Prestamo`;
CREATE TABLE `Prestamo` (
  `libro` int(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `usuario` int(255) NOT NULL,
  PRIMARY KEY (`libro`,`fecha`),
  KEY `realiza_un` (`usuario`),
  CONSTRAINT `de` FOREIGN KEY (`libro`) REFERENCES `Libro` (`isbn`),
  CONSTRAINT `realiza_un` FOREIGN KEY (`usuario`) REFERENCES `Usuario` (`ci`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for Usuario
-- ----------------------------
DROP TABLE IF EXISTS `Usuario`;
CREATE TABLE `Usuario` (
  `ci` int(11) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `contrasenia` varchar(30) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido_Mat` varchar(30) DEFAULT NULL,
  `apellido_Pat` varchar(30) DEFAULT NULL,
  `fecha_Registro` date NOT NULL,
  `nro_Pago` int(11) NOT NULL,
  ` estado` varchar(30) NOT NULL,
  PRIMARY KEY (`ci`),
  KEY `registra` (`nro_Pago`),
  CONSTRAINT `registra` FOREIGN KEY (`nro_Pago`) REFERENCES `Pago` (`nro_Pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
