-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2018 at 01:43 PM
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
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_content`, `event_start_date`, `event_end_date`, `event_start_time`, `event_longitude`, `event_latitude`, `location`, `event_created_date`, `event_author`, `event_meta_title`, `event_meta_description`, `event_featured_img`, `participant`, `organizer_id`) VALUES
(1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdasd', '', '2018-01-19', '2018-01-19', '09:00AM', 101.6421, 2.9276, 'MMU Melaka', '2018-01-11 03:24:52', 'chinann6213@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdasd', '', '', 0, 0),
(2, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdasd', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">For those who would like to attend these training classes, simply register here and we will confirm your registration by email.&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">These classes are open&nbsp;for&nbsp;public and we are conducted in English, Bahasa Melayu and Mandarin.&nbsp;</span></p>', '2018-01-11', '2018-01-11', '09:00AM', 101.6421, 2.9276, 'MMU Melaka', '2018-01-11 03:45:02', 'chinann6213@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdasd', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">For those who would like to attend these training classes, simply register here and we will confirm your registration by email.&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">These classes are open&nbsp;for&nbsp;public and we are conducted in English, Bahasa Melayu and Mandarin.&nbsp;</span></p>', 'images/chinann6213/sea-2361247_1280.jpg', 0, 0),
(3, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdasd', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">For those who would like to attend these training classes, simply register here and we will confirm your registration by email.&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">These classes are open&nbsp;for&nbsp;public and we are conducted in English, Bahasa Melayu and Mandarin.&nbsp;</span></p>', '2018-01-11', '2018-01-11', '09:00AM', 101.6421, 2.9276, 'MMU Melaka', '2018-01-11 03:45:33', 'chinann6213@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdasd', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">For those who would like to attend these training classes, simply register here and we will confirm your registration by email.&nbsp;</span></p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 19.2pt; color: rgb(69, 73, 78); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 13.2px; letter-spacing: 0.5px;\"><span style=\"font-size: large; font-family: arial, helvetica, sans-serif;\">These classes are open&nbsp;for&nbsp;public and we are conducted in English, Bahasa Melayu and Mandarin.&nbsp;</span></p>', 'images/chinann6213/sea-2361247_1280.jpg', 0, 0),
(4, 'How to catch a Bull Run Stock in 2018!!', '<p style=\"margin-bottom: 0px; padding: 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">How to catch a Bull Run Stock in 2018!!<br style=\"padding-top: 0px;\">To make your investment more than 100% return!!</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Topic: How to catch a Bull Run Stock in 2018!!<br style=\"padding-top: 0px;\">Date: 21/1/2018 (Sunday)<br>Time: 2 PM - 5 PM</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">You will learn:&nbsp;<br style=\"padding-top: 0px;\">-How to getting started in the Bursa Malaysia Stock Market<br>-3 Steps to make profits from Stock Market&nbsp;<br>-Secrets of Selecting Winning Stocks<br>-How to catch the Market Direction (Uptrend Stock)<br>-How to catch the best timing to BUY or SELL</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">The Legend stock in 2017!!<br style=\"padding-top: 0px;\">-HENGYUAN: From RM2.4 to RM19 = more than 650%<br>-PENTA: From RM0.66 to RM3.1 = more than 350%<br>-VITROX: From RM1.8 to RM6.5 = more than 250%<br>-LIONIND: From RM0.45 to RM1.66 = more than 230%<br>-PMETAL: From RM1.6 to RM5.5 = more than 200%<br>-MASTEEL: From RM0.64 to RM1.8 = more than 180%<br>-HIBISCS: From RM0.41 to RM1.12 = more than 160%</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">In 2017 more than 100 companies price increase more than 50%.<br style=\"padding-top: 0px;\">You invested RM10,000 will profit you 50% or MORE!!</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">did you catch one of it in 2017?? Not yet??</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">It is time to prepare for your 2018 investing &amp; trading journey!</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">=============================================</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">You will learn amazing technique on that day- (FREE Admission)</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Grab your seat now! (Limited Seat)</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><span style=\"font-weight: 700; padding-top: 0px;\">Drop us a message now!!</span></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><span style=\"font-weight: 700; padding-top: 0px;\">or contact us at;</span></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><span style=\"font-weight: 700; padding-top: 0px;\">Tayler Loh â€“ 016-4520419</span><br><span style=\"font-weight: 700;\">Peter Ting â€“ 016-2227358</span></p>', '2018-01-19', '2018-01-19', '09:00AM', 101.6421, 2.9276, 'Multimedia University - MMU Cyberjaya Cyberjaya Selangor Malaysia', '2018-01-19 07:21:17', 'chinann6213@gmail.com', 'How to catch a Bull Run Stock in 2018!!', '<p style=\"margin-bottom: 0px; padding: 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">How to catch a Bull Run Stock in 2018!!<br style=\"padding-top: 0px;\">To make your investment more than 100% return!!</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Topic: How to catch a Bull Run Stock in 2018!!<br style=\"padding-top: 0px;\">Date: 21/1/2018 (Sunday)<br>Time: 2 PM - 5 PM</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">You will learn:&nbsp;<br style=\"padding-top: 0px;\">-How to getting started in the Bursa Malaysia Stock Market<br>-3 Steps to make profits from Stock Market&nbsp;<br>-Secrets of Selecting Winning Stocks<br>-How to catch the Market Direction (Uptrend Stock)<br>-How to catch the best timing to BUY or SELL</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">The Legend stock in 2017!!<br style=\"padding-top: 0px;\">-HENGYUAN: From RM2.4 to RM19 = more than 650%<br>-PENTA: From RM0.66 to RM3.1 = more than 350%<br>-VITROX: From RM1.8 to RM6.5 = more than 250%<br>-LIONIND: From RM0.45 to RM1.66 = more than 230%<br>-PMETAL: From RM1.6 to RM5.5 = more than 200%<br>-MASTEEL: From RM0.64 to RM1.8 = more than 180%<br>-HIBISCS: From RM0.41 to RM1.12 = more than 160%</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">In 2017 more than 100 companies price increase more than 50%.<br style=\"padding-top: 0px;\">You invested RM10,000 will profit you 50% or MORE!!</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">did you catch one of it in 2017?? Not yet??</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">It is time to prepare for your 2018 investing &amp; trading journey!</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">=============================================</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">You will learn amazing technique on that day- (FREE Admission)</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Grab your seat now! (Limited Seat)</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><span style=\"font-weight: 700; padding-top: 0px;\">Drop us a message now!!</span></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><span style=\"font-weight: 700; padding-top: 0px;\">or contact us at;</span></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><span style=\"font-weight: 700; padding-top: 0px;\">Tayler Loh â€“ 016-4520419</span><br><span style=\"font-weight: 700;\">Peter Ting â€“ 016-2227358</span></p>', 'http://localhost:8080/webdev/EventApp/images/chinann6213/Sheet%204.png', 30, 0),
(5, '123123123123123123', '<p>qweqweqwe</p>', '2018-01-19', '2018-01-19', '09:00AM', 101.6421, 2.9276, 'Multimedia University - MMU Cyberjaya Cyberjaya Selangor Malaysia', '2018-01-19 10:02:30', 'chinann6213@gmail.com', '123123123123123123', '<p>qweqweqwe</p>', '', 30, NULL),
(6, '123123123123123123', '<p>qweqweqwe</p>', '2018-01-19', '2018-01-19', '09:00AM', 101.6421, 2.9276, 'Multimedia University - MMU Cyberjaya Cyberjaya Selangor Malaysia', '2018-01-19 10:04:40', 'chinann6213@gmail.com', '123123123123123123', '<p>qweqweqwe</p>', '', 30, NULL),
(7, 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '2018-01-19', '2018-01-19', '09:00AM', 101.6421, 2.9276, 'Multimedia University - MMU Cyberjaya Cyberjaya Selangor Malaysia', '2018-01-19 10:04:57', 'chinann6213@gmail.com', 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '', 30, NULL),
(8, 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '2018-01-19', '2018-01-19', '09:00AM', 101.6421, 2.9276, 'Multimedia University - MMU Cyberjaya Cyberjaya Selangor Malaysia', '2018-01-19 10:06:40', 'chinann6213@gmail.com', 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '', 30, NULL),
(9, 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '2018-01-19', '2018-01-19', '09:00AM', 101.6421, 2.9276, 'Multimedia University - MMU Cyberjaya Cyberjaya Selangor Malaysia', '2018-01-19 10:07:22', 'chinann6213@gmail.com', 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '', 30, NULL),
(10, 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '2018-01-19', '2018-01-19', '09:00AM', 101.6421, 2.9276, 'Multimedia University - MMU Cyberjaya Cyberjaya Selangor Malaysia', '2018-01-19 10:08:01', 'chinann6213@gmail.com', 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '', 30, NULL),
(11, 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '2018-01-19', '2018-01-19', '09:00AM', 101.6421, 2.9276, 'Multimedia University - MMU Cyberjaya Cyberjaya Selangor Malaysia', '2018-01-19 10:08:10', 'chinann6213@gmail.com', 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '', 30, NULL),
(12, 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '2018-01-19', '2018-01-19', '09:00AM', 101.6421, 2.9276, 'Multimedia University - MMU Cyberjaya Cyberjaya Selangor Malaysia', '2018-01-19 10:09:03', 'chinann6213@gmail.com', 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '', 30, NULL),
(13, 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '2018-01-19', '2018-01-19', '09:00AM', 101.6421, 2.9276, '', '2018-01-19 10:13:04', 'chinann6213@gmail.com', 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '', 30, NULL),
(14, 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '2018-01-19', '2018-01-19', '09:00AM', 101.6421, 2.9276, '', '2018-01-19 10:14:35', 'chinann6213@gmail.com', 'adasdasdsadasdadas', '<p>qweqweqwe</p>', '', 30, NULL),
(15, 'asdasdasd', 'asdasdsadsad', '2018-01-19', '2018-01-19', '09:00AM', 101.6421, 2.9276, 'Multimedia University - MMU Cyberjaya Cyberjaya Selangor Malaysia', '2018-01-19 10:22:03', 'chinann6213@gmail.com', 'asdasdasd', 'asdasdsadsad', '', 30, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`img_id`, `img_src`, `img_alt`, `img_cap`, `img_owner`, `event_id`) VALUES
(6, 'images/chinann6213/Sheet 4.png', '', '', 'chinann6213@gmail.com', 4),
(7, 'images/chinann6213/Sheet 3.png', '', '', 'chinann6213@gmail.com', 4),
(8, 'images/chinann6213/Sheet 2.png', '', '', 'chinann6213@gmail.com', 4),
(9, 'images/chinann6213/Sheet 1.png', '', '', 'chinann6213@gmail.com', 4);

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
