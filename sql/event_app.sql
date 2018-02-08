-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2018 at 05:44 PM
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
  `organizer_id` int(11) DEFAULT NULL,
  `category` text NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_content`, `event_start_date`, `event_end_date`, `event_start_time`, `event_longitude`, `event_latitude`, `location`, `event_created_date`, `event_author`, `event_meta_title`, `event_meta_description`, `event_featured_img`, `participant`, `organizer_id`, `category`) VALUES
(39, 'asdsad', '<p>asdasdasd</p>', '2018-02-09', '2018-02-09', '09:00AM', 101.6421, 2.9276, 'MMU, Cyberjaya, Selangor, Malaysia', '2018-02-08 17:42:56', 'chinann6213@gmail.com', 'asdsad', '<p>asdasdasd</p>', '', 30, 1, ','),
(37, 'asdasd', '<p>adasd</p>', '2018-01-21', '2018-01-21', '09:00AM', 101.6421, 2.9276, 'MMU Cyberjaya Selangor Malaysia', '2018-01-20 20:16:24', 'chinann6213@gmail.com', 'asdasd', '<p>adasd</p>', '', 30, 1, '1234,'),
(38, 'Lelong.my: Class 101 - Now Everybody Can Sell Online! (English)', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-weight: 700; font-size: medium;\">Title:</span><span style=\"font-size: medium;\">&nbsp;Class 101 - Now Everybody Can Sell Online!&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\"><span style=\"font-weight: 700;\">Course Fee:</span>&nbsp;FREE</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\"><span style=\"font-weight: 700;\">Attendee:&nbsp;</span>Age 18 years old above, with business interest.&nbsp;(Strictly no children allowed) &nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\"><span style=\"font-weight: 700;\">Duration:</span>&nbsp;3 Hours</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\">&nbsp;</p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">For those who would like to attend these training classes, simply register here and we will confirm your registration by email.&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">These classes are open&nbsp;for&nbsp;public and we are conducted in English, Bahasa Melayu and Mandarin.&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\"><br></span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\"><span style=\"font-weight: 700;\">WHO SHOULD ATTEND?&nbsp;</span></span><br><span style=\"font-size: medium;\">1.&nbsp; New Seller\'s (Part Time or Full Time)&nbsp;</span><br><span style=\"font-size: medium;\">2.&nbsp; Online Store (Owner or Person in Charge)&nbsp;</span><br><span style=\"font-size: medium;\">3.&nbsp; Blog or Forum Seller\'s&nbsp;</span><br><span style=\"font-size: medium;\">4.&nbsp; Facebook Seller\'s&nbsp;</span><br><span style=\"font-size: medium;\">5.&nbsp; Retail Store (Owner or Person in Charge)&nbsp;</span><br><span style=\"font-size: medium;\">6.&nbsp; Sellers who want to increase their Online Sales Revenue</span><br><br></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\"><span style=\"font-weight: 700;\">TOPICS COVERED&nbsp;</span></span><br><span style=\"font-size: medium;\">1.&nbsp; E-Commerce special tips for&nbsp;sellers&nbsp;</span><br><span style=\"font-size: medium;\">&nbsp; &nbsp; &nbsp; - Seller\'s challenge and obstacle&nbsp;</span><br><span style=\"font-size: medium;\">&nbsp; &nbsp; &nbsp; - Common mistakes&nbsp;(We will guide you how to solve them)&nbsp;</span><br><span style=\"font-size: medium;\">2.&nbsp; Product Photo Taking&nbsp;</span><br><span style=\"font-size: medium;\">3.&nbsp; Product sourcing for new seller</span><br><span style=\"font-size: medium;\">4. &nbsp;Lelong.my platform and service</span><br><span style=\"font-size: medium;\">5. &nbsp;Payment gateway</span><br><span style=\"font-size: medium;\">6. &nbsp;Courier service for shipping</span><br><span style=\"font-size: medium;\">7. &nbsp;Real case studies</span><br><span style=\"font-size: medium;\">8. &nbsp;Questions and Answers&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><br></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\">Grab your free seat now @ www.lelong.my/edu&nbsp;</span><span style=\"font-size: medium;\"><br></span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\">If you have any questions, kindly contact us:</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\">Hotlineï¼š 017-686 4568 / 017-686 1522&nbsp;</span><br><span style=\"font-size: medium;\">Email:&nbsp;<a href=\"mailto:edu@lelong.com.my?subject=Lelong.my%20Training%20Class\" target=\"_blank\" rel=\"noopener noreferrer nofollow\" style=\"color: rgb(0, 168, 242); background-color: transparent;\">edu@lelong.com.my</a></span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\">Seats are limited!&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\">See you there!&nbsp;</span></p>', '2018-01-23', '2018-01-27', '09:00AM', 101.6421, 2.9276, 'MMU Cyberjaya Selangor Malaysia', '2018-01-22 16:20:09', 'chinann6213@gmail.com', 'Lelong.my: Class 101 - Now Everybody Can Sell Online! (English)', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-weight: 700; font-size: medium;\">Title:</span><span style=\"font-size: medium;\">&nbsp;Class 101 - Now Everybody Can Sell Online!&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\"><span style=\"font-weight: 700;\">Course Fee:</span>&nbsp;FREE</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\"><span style=\"font-weight: 700;\">Attendee:&nbsp;</span>Age 18 years old above, with business interest.&nbsp;(Strictly no children allowed) &nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\"><span style=\"font-weight: 700;\">Duration:</span>&nbsp;3 Hours</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\">&nbsp;</p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">For those who would like to attend these training classes, simply register here and we will confirm your registration by email.&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">These classes are open&nbsp;for&nbsp;public and we are conducted in English, Bahasa Melayu and Mandarin.&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\"><br></span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\"><span style=\"font-weight: 700;\">WHO SHOULD ATTEND?&nbsp;</span></span><br><span style=\"font-size: medium;\">1.&nbsp; New Seller\'s (Part Time or Full Time)&nbsp;</span><br><span style=\"font-size: medium;\">2.&nbsp; Online Store (Owner or Person in Charge)&nbsp;</span><br><span style=\"font-size: medium;\">3.&nbsp; Blog or Forum Seller\'s&nbsp;</span><br><span style=\"font-size: medium;\">4.&nbsp; Facebook Seller\'s&nbsp;</span><br><span style=\"font-size: medium;\">5.&nbsp; Retail Store (Owner or Person in Charge)&nbsp;</span><br><span style=\"font-size: medium;\">6.&nbsp; Sellers who want to increase their Online Sales Revenue</span><br><br></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\"><span style=\"font-weight: 700;\">TOPICS COVERED&nbsp;</span></span><br><span style=\"font-size: medium;\">1.&nbsp; E-Commerce special tips for&nbsp;sellers&nbsp;</span><br><span style=\"font-size: medium;\">&nbsp; &nbsp; &nbsp; - Seller\'s challenge and obstacle&nbsp;</span><br><span style=\"font-size: medium;\">&nbsp; &nbsp; &nbsp; - Common mistakes&nbsp;(We will guide you how to solve them)&nbsp;</span><br><span style=\"font-size: medium;\">2.&nbsp; Product Photo Taking&nbsp;</span><br><span style=\"font-size: medium;\">3.&nbsp; Product sourcing for new seller</span><br><span style=\"font-size: medium;\">4. &nbsp;Lelong.my platform and service</span><br><span style=\"font-size: medium;\">5. &nbsp;Payment gateway</span><br><span style=\"font-size: medium;\">6. &nbsp;Courier service for shipping</span><br><span style=\"font-size: medium;\">7. &nbsp;Real case studies</span><br><span style=\"font-size: medium;\">8. &nbsp;Questions and Answers&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><br></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\">Grab your free seat now @ www.lelong.my/edu&nbsp;</span><span style=\"font-size: medium;\"><br></span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\">If you have any questions, kindly contact us:</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\">Hotlineï¼š 017-686 4568 / 017-686 1522&nbsp;</span><br><span style=\"font-size: medium;\">Email:&nbsp;<a href=\"mailto:edu@lelong.com.my?subject=Lelong.my%20Training%20Class\" target=\"_blank\" rel=\"noopener noreferrer nofollow\" style=\"color: rgb(0, 168, 242); background-color: transparent;\">edu@lelong.com.my</a></span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\">Seats are limited!&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: normal; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: medium;\">See you there!&nbsp;</span></p>', 'images/chinann6213/53a678b9c852047baeec25dbc1cb9bbabird-3053554_1920.jpg', 99, 1, 'lelong,sales,');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_src` text NOT NULL,
  `img_alt` text NOT NULL,
  `img_cap` text NOT NULL,
  `img_owner` varchar(100) NOT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`img_id`, `img_src`, `img_alt`, `img_cap`, `img_owner`, `event_id`) VALUES
(28, 'images/chinann6213/980104d8d121920c2dba74c2778d70d9nature-2396002_1920.jpg', '', '', 'chinann6213@gmail.com', 38),
(27, 'images/chinann6213/796d25b98a0ac35b20ae667b620943e3nature-3053623_640.jpg', '', '', 'chinann6213@gmail.com', 38),
(25, 'images/chinann6213/53a678b9c852047baeec25dbc1cb9bbabird-3053554_1920.jpg', 'a bird in the nest', 'a yellow bird in the nest', 'chinann6213@gmail.com', 38),
(26, 'images/chinann6213/dd2f6f3ce686955d92f698b66f639d73sea-2361247_1280.jpg', '', '', 'chinann6213@gmail.com', 38);

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

DROP TABLE IF EXISTS `organizer`;
CREATE TABLE IF NOT EXISTS `organizer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `account` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`id`, `logo`, `name`, `contact`, `email`, `account`) VALUES
(1, '', 'EventApp', '01155050055', 'chinann6123@gmail.com', 'chinann6213@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

DROP TABLE IF EXISTS `registered_user`;
CREATE TABLE IF NOT EXISTS `registered_user` (
  `ticket_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`ticket_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`ticket_id`, `name`, `email`, `contact`, `event_id`) VALUES
(1, 'NG CHIN ANN', 'chinann6213@gmail.com', '0123456789', 38),
(2, 'GAN QI TZE', 'qitzegan@gmail.com', '0123456789', 38);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `hashed_cookie` text,
  `email` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `tel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `pwd`, `hashed_cookie`, `email`, `birthdate`, `tel`) VALUES
(1, 'py', 'chiaw', 'pychiaw', '$2y$10$KALBjdeD5ycW0I7ggil0/uf/CYr4KgN/o0xSP9p2ZcS/53j3u0BZG', NULL, 'pychiaw97@hotmail.com', '2018-01-11', '+60165047447'),
(2, 'CHIN ANN', 'NG', 'chinann6213', '$2y$10$3kxZLp61CHXarS8VCjuAQOKEZti/2AQwXLTi5fHDpCF9iqgV5lRaG', NULL, 'chinann6213@gmail.com', '1996-01-10', '+6 011 5507 5740');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
