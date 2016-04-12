# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: StudentsGroup
# Generation Time: 2016-04-05 15:26:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table  Affairs
# ------------------------------------------------------------

DROP TABLE IF EXISTS ` Affairs`;

CREATE TABLE ` Affairs` (
  `AffNo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `PlaNo` char(6) DEFAULT NULL,
  `AffName` char(20) DEFAULT NULL,
  `AffScope` char(8) NOT NULL DEFAULT '',
  `AffDepartment` char(6) DEFAULT NULL,
  `AffScheme` char(50) NOT NULL DEFAULT '',
  `AffQuality` char(4) DEFAULT NULL,
  PRIMARY KEY (`AffNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table Cadres
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Cadres`;

CREATE TABLE `Cadres` (
  `stuNo` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `stuName` char(20) NOT NULL DEFAULT '',
  `stuSex` char(10) DEFAULT '',
  `stuPosition` char(50) NOT NULL DEFAULT '',
  `stuDepartment` char(20) DEFAULT '',
  `stuMajor` char(50) NOT NULL DEFAULT '',
  `stuGrade` char(10) DEFAULT '',
  `stuPhoneNo` char(20) NOT NULL DEFAULT '',
  `stuStaTime` char(30) CHARACTER SET utf8 DEFAULT NULL,
  `stuCase` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`stuNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `Cadres` WRITE;
/*!40000 ALTER TABLE `Cadres` DISABLE KEYS */;

INSERT INTO `Cadres` (`stuNo`, `stuName`, `stuSex`, `stuPosition`, `stuDepartment`, `stuMajor`, `stuGrade`, `stuPhoneNo`, `stuStaTime`, `stuCase`)
VALUES
	(2,'戴','0','12','文艺部','计算机科学与技术','111','1111','null','111'),
	(3,'daijiale','1','daijiale','学习部','电气工程','111','111122',NULL,'11'),
	(4,'33333','1','3333','体育部','通信工程','3333','3333',NULL,'33333'),
	(5,'11111','1','111','体育部','通信工程','111','122222',NULL,'122222'),
	(6,'daijiale222','1','2222','文艺部','电气工程','1111','12009393','20160211','2222');

/*!40000 ALTER TABLE `Cadres` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Department
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Department`;

CREATE TABLE `Department` (
  `DepNo` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `DepName` char(50) NOT NULL DEFAULT '',
  `DepMinName` char(10) NOT NULL DEFAULT '',
  `DepSminSum` int(10) DEFAULT NULL,
  `MinPhoNo` char(20) DEFAULT NULL,
  `DepMemSum` int(20) DEFAULT NULL,
  PRIMARY KEY (`DepNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table Finance
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Finance`;

CREATE TABLE `Finance` (
  `FinNo` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `FinPurpose` char(50) DEFAULT NULL,
  `FinMoney` char(10) NOT NULL DEFAULT '',
  `FinPerson` char(20) NOT NULL DEFAULT '',
  `FinDepartment` char(20) NOT NULL DEFAULT '',
  `FinTime` datetime DEFAULT NULL,
  `FinRemain` char(10) DEFAULT NULL,
  PRIMARY KEY (`FinNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table JoinAffairs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `JoinAffairs`;

CREATE TABLE `JoinAffairs` (
  `AffNo` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `StuNo` char(8) DEFAULT NULL,
  `Present` char(8) DEFAULT NULL,
  PRIMARY KEY (`AffNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table User
# ------------------------------------------------------------

DROP TABLE IF EXISTS `User`;

CREATE TABLE `User` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Password` char(30) NOT NULL DEFAULT '',
  `Username` char(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;

INSERT INTO `User` (`Id`, `Password`, `Username`)
VALUES
	(1,'daijiale','daijiale');

/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
