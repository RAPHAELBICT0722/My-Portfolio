-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 07:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raphael`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `mycontacts` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`mycontacts`) VALUES
(' <h3>Phone Number</h3>\r\n    <br>(+265) 99 15 146 64<br><br>\r\n        (+265 88 44 79 870)<br><br>\r\n        Emial: (ralphchiona479870@gmail.com)<br><br>\r\n        <li><a href=\"email.html\">EMAIL</a></li><br>');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `aboutme` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`aboutme`) VALUES
('<h3>NETWORK ADMINISTRATOR | WEB DESIGNER | COMPUTER SYSTEM ADMINISTRATOR</h3>\r\n<P>Raphael is a talented and accomplished computer engineer who has made significant contributions to the field of technology. Born on 07/02/1997 in Zomba,Raphael  developed a passion for computers and technology from a young age. This biography explores Raphael\'s journey, achievements,. and impact as a computer engineer.</P><br>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
