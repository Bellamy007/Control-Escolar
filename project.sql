/*
SQLyog Community v11.31 (64 bit)
MySQL - 5.5.16 : Database - project
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`project` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `project`;

/*Table structure for table `alumno` */

DROP TABLE IF EXISTS `alumno`;

CREATE TABLE `alumno` (
  `idalumno` int(11) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idalumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `alumno` */

/*Table structure for table `maestro` */

DROP TABLE IF EXISTS `maestro`;

CREATE TABLE `maestro` (
  `idmaestro` int(11) NOT NULL AUTO_INCREMENT,
  `materia` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idmaestro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `maestro` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `street` varchar(250) DEFAULT NULL,
  `num1` int(11) DEFAULT NULL,
  `num2` int(11) DEFAULT NULL,
  `col` varchar(250) DEFAULT NULL,
  `mun` varchar(250) DEFAULT NULL,
  `est` varchar(250) DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `cor` varchar(250) DEFAULT NULL,
  `user` varchar(250) DEFAULT NULL,
  `cont` varchar(250) DEFAULT NULL,
  `lvl` varchar(10) DEFAULT NULL,
  `estatus` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`iduser`,`name`,`fname`,`lname`,`phone`,`street`,`num1`,`num2`,`col`,`mun`,`est`,`cp`,`cor`,`user`,`cont`,`lvl`,`estatus`) values (1,'moni','mendez','gutierrez','7225859911','Camino Real',1,2,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1'),(2,'daniel','martinez','rojas','7225859977','Veracruz',1,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
