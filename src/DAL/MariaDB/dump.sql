-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server Version:               10.4.12-MariaDB - mariadb.org binary distribution
-- Server Betriebssystem:        Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Exportiere Datenbank Struktur für personaldatam151
DROP DATABASE IF EXISTS `personaldatam151`;
CREATE DATABASE IF NOT EXISTS `personaldatam151` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `personaldatam151`;

-- Exportiere Struktur von Tabelle personaldatam151.companies
DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Company_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle personaldatam151.companies: ~0 rows (ungefähr)
DELETE FROM `companies`;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle personaldatam151.departments
DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Department_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle personaldatam151.departments: ~0 rows (ungefähr)
DELETE FROM `departments`;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle personaldatam151.persons
DROP TABLE IF EXISTS `persons`;
CREATE TABLE IF NOT EXISTS `persons` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Lastname` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Birth_Data` date NOT NULL,
  `EMail` varchar(255) NOT NULL,
  `AHV_Number` varchar(16) NOT NULL,
  `Personal_Number` int(11) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Company_fk` int(11) NOT NULL,
  `Department_fk` int(11) NOT NULL,
  `Job_Title` varchar(255) NOT NULL,
  `Job_Description` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Company_fk` (`Company_fk`),
  KEY `Department_fk` (`Department_fk`),
  CONSTRAINT `Company_fk` FOREIGN KEY (`Company_fk`) REFERENCES `companies` (`Id`),
  CONSTRAINT `Department_fk` FOREIGN KEY (`Department_fk`) REFERENCES `departments` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle personaldatam151.persons: ~0 rows (ungefähr)
DELETE FROM `persons`;
/*!40000 ALTER TABLE `persons` DISABLE KEYS */;
/*!40000 ALTER TABLE `persons` ENABLE KEYS */;

-- Exportiere Struktur von Prozedur personaldatam151.sps.InsertAllData
DROP PROCEDURE IF EXISTS `sps.InsertAllData`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sps.InsertAllData`(
	IN `Lastname` VARCHAR(255),
	IN `Firstname` VARCHAR(255),
	IN `Birth_Date` DATE,
	IN `EMail` VARCHAR(255),
	IN `AHV_Number` VARCHAR(16),
	IN `Personal_Number` INT,
	IN `Tel` VARCHAR(10),
	IN `Company_Name` VARCHAR(255),
	IN `Department_Name` VARCHAR(255),
	IN `Job_Title` VARCHAR(255),
	IN `Job_Description` VARCHAR(255)


)
BEGIN

	if not exists (select 'Company_Name' from companies where Company_Name = @Company_Name)
		then select * from persons;
	end if;
END//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
