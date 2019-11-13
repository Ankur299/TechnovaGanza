-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 13, 2019 at 03:01 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nits`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
CREATE TABLE IF NOT EXISTS `marks` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `Semester` varchar(20) NOT NULL,
  `Sch_Id` varchar(10) NOT NULL,
  `Subject1` varchar(20) DEFAULT NULL,
  `Grade1` varchar(20) DEFAULT NULL,
  `Mark1` varchar(20) DEFAULT NULL,
  `totalMark` varchar(20) DEFAULT NULL,
  `SPI` varchar(20) DEFAULT NULL,
  `CGPA` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `Semester`, `Sch_Id`, `Subject1`, `Grade1`, `Mark1`, `totalMark`, `SPI`, `CGPA`) VALUES
(26, '3', '222', 'Subject1', 'aa', '11', '11', '11', '11'),
(24, '4', '222', 'Subject1', 'aa', '11', '11', '11', '11'),
(25, '8th', '17-14-065', 'Subject1', 'aaaaa', '11', '11', '11', '12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
