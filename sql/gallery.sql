-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2018 at 07:03 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_src` text NOT NULL,
  `img_alt` text NOT NULL,
  `img_cap` text NOT NULL,
  `img_owner` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img_src`, `img_alt`, `img_cap`, `img_owner`) VALUES
(1, 'images/chinann6213/sea-2361247_1280.jpg', '', '', 'chinann6213@gmail.com'),
(2, 'images/chinann6213/sunset-1331088_1920.jpg', '', '', 'chinann6213@gmail.com'),
(3, 'images/chinann6213/thor_ragnarok-wallpaper-1920x1080.jpg', '', '', 'chinann6213@gmail.com'),
(4, 'images/chinann6213/woman-945815_1920.jpg', '', '', 'chinann6213@gmail.com'),
(5, 'images/chinann6213/23112926_10210619797552550_602459781_o.png', '', '', 'chinann6213@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
