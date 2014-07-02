-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2014 at 04:35 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `greenhouse-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `Stats`
--

CREATE TABLE `Stats` (
  `CommitId` int(11) NOT NULL AUTO_INCREMENT,
  `DateAdded` varchar(30) NOT NULL,
  `TimeAdded` varchar(40) NOT NULL,
  `Temperature` int(5) NOT NULL,
  `Humidity` int(5) NOT NULL,
  PRIMARY KEY (`CommitId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `Stats`
--

INSERT INTO `Stats` (`CommitId`, `DateAdded`, `TimeAdded`, `Temperature`, `Humidity`) VALUES
(1, '2014-01-30', '20:28:51', 99, 99),
(2, '2014-06-26', '18:28:51', 18, 8),
(3, '2014-06-27', '17:28:51', 20, 10),
(4, '2014-06-27', '16:28:51', 200, 200),
(5, '2014-06-27', '18:28:51', 121, 121);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
