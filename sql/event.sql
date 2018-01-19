-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2018 at 02:35 AM
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
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` text NOT NULL,
  `event_content` mediumtext NOT NULL,
  `event_start_date` date NOT NULL,
  `event_end_date` date NOT NULL,
  `event_start_time` varchar(7) NOT NULL,
  `event_longitude` double NOT NULL,
  `event_latitude` double NOT NULL,
  `location` varchar(200) NOT NULL,
  `event_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `event_author` varchar(100) NOT NULL,
  `event_meta_title` text NOT NULL,
  `event_meta_description` text NOT NULL,
  `event_featured_img` text NOT NULL,
  `participant` int(11) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_content`, `event_start_date`, `event_end_date`, `event_start_time`, `event_longitude`, `event_latitude`, `location`, `event_created_date`, `event_author`, `event_meta_title`, `event_meta_description`, `event_featured_img`, `participant`) VALUES
(1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdasd', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">For those who would like to attend these training classes, simply register here and we will confirm your registration by email.&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">These classes are open&nbsp;for&nbsp;public and we are conducted in English, Bahasa Melayu and Mandarin.&nbsp;</span></p>', '2018-01-11', '2018-01-11', '09:00AM', 101.6421, 2.9276, '', '2018-01-11 03:24:52', 'chinann6213@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdasd', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">For those who would like to attend these training classes, simply register here and we will confirm your registration by email.&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">These classes are open&nbsp;for&nbsp;public and we are conducted in English, Bahasa Melayu and Mandarin.&nbsp;</span></p>', 'images/chinann6213/sea-2361247_1280.jpg', 0),
(2, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdasd', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">For those who would like to attend these training classes, simply register here and we will confirm your registration by email.&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">These classes are open&nbsp;for&nbsp;public and we are conducted in English, Bahasa Melayu and Mandarin.&nbsp;</span></p>', '2018-01-11', '2018-01-11', '09:00AM', 101.6421, 2.9276, '', '2018-01-11 03:45:02', 'chinann6213@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdasd', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">For those who would like to attend these training classes, simply register here and we will confirm your registration by email.&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">These classes are open&nbsp;for&nbsp;public and we are conducted in English, Bahasa Melayu and Mandarin.&nbsp;</span></p>', 'images/chinann6213/sea-2361247_1280.jpg', 0),
(3, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdasd', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">For those who would like to attend these training classes, simply register here and we will confirm your registration by email.&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">These classes are open&nbsp;for&nbsp;public and we are conducted in English, Bahasa Melayu and Mandarin.&nbsp;</span></p>', '2018-01-11', '2018-01-11', '09:00AM', 101.6421, 2.9276, '', '2018-01-11 03:45:33', 'chinann6213@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdasd', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">For those who would like to attend these training classes, simply register here and we will confirm your registration by email.&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">These classes are open&nbsp;for&nbsp;public and we are conducted in English, Bahasa Melayu and Mandarin.&nbsp;</span></p>', 'images/chinann6213/sea-2361247_1280.jpg', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
