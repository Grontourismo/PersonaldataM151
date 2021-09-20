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

--
-- Exportiere Datenbank Struktur für personaldatam151
DROP DATABASE IF EXISTS `personaldatam151`;
CREATE DATABASE IF NOT EXISTS `personaldatam151` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `personaldatam151`;

-- Exportiere Struktur von Prozedur personaldatam151.sps.SelectSinglePerson
DROP PROCEDURE IF EXISTS `sps.SelectSinglePerson`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sps.SelectSinglePerson`(
	IN `Id_var` INT


)
BEGIN

	SELECT p.Id, p.Lastname, p.Firstname, p.Birth_Date, p.EMail, p.AHV_Number, p.Personal_Number, p.Tel, c.Company_Name, d.Department_Name, p.Job_Title, p.Job_Description from Persons p
   inner join Companies c on c.Id = p.Company_fk
   inner join Departments d on d.Id = p.Department_fk
   where p.Id = Id_var;

END//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
