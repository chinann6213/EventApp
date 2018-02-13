-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 13, 2018 at 03:52 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
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
  `category` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_content`, `event_start_date`, `event_end_date`, `event_start_time`, `event_longitude`, `event_latitude`, `location`, `event_created_date`, `event_author`, `event_meta_title`, `event_meta_description`, `event_featured_img`, `participant`, `organizer_id`, `category`) VALUES
(41, 'Machine Learning with Python Training', '<p class=\"MsoNormal\" style=\"margin-bottom: 0px; padding: 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><span style=\"padding-top: 0px;\">Machine Learning Training with Python â€“ Instructor-Led Live Online Training Classes Modes</span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><span style=\"padding-top: 0px;\"></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><span style=\"padding-top: 0px;\">AI and Machine Learning is a field of computer science that focuses on to building intelligent machines that work and react like humans, whereas Machine Learning is a subfield of artificial intelligence that makes the same machines learn by themselves without being explicitly programmed by programmers</span>.&nbsp;<a href=\"https://nearlearn.com/us/courses/ai-and-machine-learning/machine-learning-with-python-training/\" target=\"_blank\" rel=\"noopener noreferrer nofollow\" style=\"color: rgb(0, 127, 140); background-color: transparent;\">Do you want to be Machine Learning Expert in 5 weeks?</a></p><p class=\"MsoNormal\" style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Artificial and machine learning applications are built to perform the following tasks:</p><ul style=\"margin: 0px; padding: 10px 0px 0px 2em; list-style-position: initial; list-style-image: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><li style=\"margin: 0px; padding: 0px;\"><span style=\"padding-top: 0px;\"></span>Reasoning, problem solving</li><li style=\"margin: 0px; padding: 5px 0px 0px;\"><span style=\"padding-top: 0px;\"></span>Knowledge representation</li><li style=\"margin: 0px; padding: 5px 0px 0px;\"><span style=\"padding-top: 0px;\"></span>Planning, perception, and learning</li><li style=\"margin: 0px; padding: 5px 0px 0px;\"><span style=\"padding-top: 0px;\"></span>Natural language processing</li><li style=\"margin: 0px; padding: 5px 0px 0px;\"><span style=\"padding-top: 0px;\"></span>Motion and manipulation</li><li style=\"margin: 0px; padding: 5px 0px 0px;\"><span style=\"padding-top: 0px;\"></span>Gaining general intelligence</li><li style=\"margin: 0px; padding: 5px 0px 0px;\"><span style=\"padding-top: 0px;\"></span>Gaining social intelligence</li><li style=\"margin: 0px; padding: 5px 0px 0px;\"><span style=\"padding-top: 0px;\"></span>Possessing creativity</li></ul>', '2018-02-26', '2018-02-28', '10:00AM', 101.6421, 2.9276, 'MMU, Cyberjaya, Selangor, Malaysia', '2018-02-13 14:41:31', 'ken_gaming@hotmail.com', 'Machine Learning with Python Training', '<p class=\"MsoNormal\" style=\"margin-bottom: 0px; padding: 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><span style=\"padding-top: 0px;\">Machine Learning Training with Python â€“ Instructor-Led Live Online Training Classes Modes</span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><span style=\"padding-top: 0px;\"></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><span style=\"padding-top: 0px;\">AI and Machine Learning is a field of computer science that focuses on to building intelligent machines that work and react like humans, whereas Machine Learning is a subfield of artificial intelligence that makes the same machines learn by themselves without being explicitly programmed by programmers</span>.&nbsp;<a href=\"https://nearlearn.com/us/courses/ai-and-machine-learning/machine-learning-with-python-training/\" target=\"_blank\" rel=\"noopener noreferrer nofollow\" style=\"color: rgb(0, 127, 140); background-color: transparent;\">Do you want to be Machine Learning Expert in 5 weeks?</a></p><p class=\"MsoNormal\" style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Artificial and machine learning applications are built to perform the following tasks:</p><ul style=\"margin: 0px; padding: 10px 0px 0px 2em; list-style-position: initial; list-style-image: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><li style=\"margin: 0px; padding: 0px;\"><span style=\"padding-top: 0px;\"></span>Reasoning, problem solving</li><li style=\"margin: 0px; padding: 5px 0px 0px;\"><span style=\"padding-top: 0px;\"></span>Knowledge representation</li><li style=\"margin: 0px; padding: 5px 0px 0px;\"><span style=\"padding-top: 0px;\"></span>Planning, perception, and learning</li><li style=\"margin: 0px; padding: 5px 0px 0px;\"><span style=\"padding-top: 0px;\"></span>Natural language processing</li><li style=\"margin: 0px; padding: 5px 0px 0px;\"><span style=\"padding-top: 0px;\"></span>Motion and manipulation</li><li style=\"margin: 0px; padding: 5px 0px 0px;\"><span style=\"padding-top: 0px;\"></span>Gaining general intelligence</li><li style=\"margin: 0px; padding: 5px 0px 0px;\"><span style=\"padding-top: 0px;\"></span>Gaining social intelligence</li><li style=\"margin: 0px; padding: 5px 0px 0px;\"><span style=\"padding-top: 0px;\"></span>Possessing creativity</li></ul>', '', 30, 9, 'machinelearning,computerscience,'),
(42, 'Sacred Feminine Retreat', '<h3 style=\"margin: 0px; padding: 0px; color: rgb(40, 44, 53); font-size: 20px; line-height: 30px; font-weight: 400; font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"><span style=\"padding-top: 0px;\">This retreat is a sacred space of practice that is full of beauty and sisterhood, connection with the feminine heart and silence, dancing, Goddess rituals, devotional singing and meditation.</span></h3><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><br style=\"padding-top: 0px;\">As Sacred women, we discover unique gifts of each divine feminine and witness and hold her as she moves into embodying her true feminine Nature. We go beyond our own limitations by exploring the strength of our femininity. We practice together in unveiling the wisdom and beauty already present in each woman.</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><br style=\"padding-top: 0px;\">We come together to heal any guilt or shame around being a powerful and divine feminine, open &amp; allow and celebrate our unique womanhood. From an empowered place within, we then come together in our sisterhood to bring more light to this world.</p>', '2018-03-21', '2018-03-22', '11:00AM', 101.7333, 3.0797, 'UCSI University, Jalan Menara Gading 1, Taman Connaught, Kuala Lumpur, Selangor, Malaysia', '2018-02-13 14:42:33', 'ken_gaming@hotmail.com', 'Sacred Feminine Retreat', '<h3 style=\"margin: 0px; padding: 0px; color: rgb(40, 44, 53); font-size: 20px; line-height: 30px; font-weight: 400; font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"><span style=\"padding-top: 0px;\">This retreat is a sacred space of practice that is full of beauty and sisterhood, connection with the feminine heart and silence, dancing, Goddess rituals, devotional singing and meditation.</span></h3><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><br style=\"padding-top: 0px;\">As Sacred women, we discover unique gifts of each divine feminine and witness and hold her as she moves into embodying her true feminine Nature. We go beyond our own limitations by exploring the strength of our femininity. We practice together in unveiling the wisdom and beauty already present in each woman.</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><br style=\"padding-top: 0px;\">We come together to heal any guilt or shame around being a powerful and divine feminine, open &amp; allow and celebrate our unique womanhood. From an empowered place within, we then come together in our sisterhood to bring more light to this world.</p>', '', 39, 9, 'retreat,feminine,'),
(43, 'Business Opportunity', '<h3 style=\"margin: 0px; padding: 0px; color: rgb(40, 44, 53); font-size: 20px; line-height: 30px; font-weight: 400; font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\">We are providing information and helping everyone who want to start up a business. We are welcome everyone to join us.</h3>', '2018-03-22', '2018-03-23', '11:00AM', 101.7133, 2.9704, 'IOI City Mall, Ioi Resort, Putrajaya, Malaysia', '2018-02-13 14:43:35', 'ken_gaming@hotmail.com', 'Business Opportunity', '<h3 style=\"margin: 0px; padding: 0px; color: rgb(40, 44, 53); font-size: 20px; line-height: 30px; font-weight: 400; font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\">We are providing information and helping everyone who want to start up a business. We are welcome everyone to join us.</h3>', '', 40, 9, 'business,'),
(47, 'THE OPENING - APRIL 2018', '<p><span style=\"background-color: transparent; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Have you ever wondered â€¦</span></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">What more does this life I am currently living have to offer?</span></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">How can I create more authentic and supportive relationships in my life and my business?</span></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">How can I regain my confidence, self-esteem and abundance I once had?</span></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\">Well, you are not alone. Thousands of people have awakened to a deeper sense of what life has to offer and what role each of us plays in that. Your inner questions and calling to find the answers to those questions is what brought you here today.</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\">Whether it\'s a longing to find inner peace, a desire for more abundance, clarity, meaning and purpose in your life or a realization that you were meant to be more than you are living now, the answers to all these questions lie in the same place. They are all already within you. You just have to know how to access them and have them permanently!</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\">The Opening Intensive offers an opportunity for participants to get real with their true, authentic nature by experiencing that Truth directly.</p><p><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"></span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"></span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"></span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"></span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"></span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"></span></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\">Since the 1960s, intensives such as The Opening have had a proven track record of enabling people to have experiences of their authentic and confident nature within a short timeframe. The reason why our workshops are so successful lies in the fusion of Eastern spiritual contemplative methods with Western psychological tools, which together form the foundation of this work. It is the unusual and innovative combination of a focusing technique with real and honest communication, which offers a genuine possibility of having a direct experience of the Truth in our lives.</p>', '2018-02-28', '2018-03-03', '09:00AM', 101.7133, 2.9704, 'IOI City Mall, Ioi Resort, Putrajaya, Malaysia', '2018-02-13 14:50:34', 'ken_gaming@hotmail.com', 'THE OPENING - APRIL 2018', '<p><span style=\"background-color: transparent; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Have you ever wondered â€¦</span></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">What more does this life I am currently living have to offer?</span></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">How can I create more authentic and supportive relationships in my life and my business?</span></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\">How can I regain my confidence, self-esteem and abundance I once had?</span></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\">Well, you are not alone. Thousands of people have awakened to a deeper sense of what life has to offer and what role each of us plays in that. Your inner questions and calling to find the answers to those questions is what brought you here today.</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\">Whether it\'s a longing to find inner peace, a desire for more abundance, clarity, meaning and purpose in your life or a realization that you were meant to be more than you are living now, the answers to all these questions lie in the same place. They are all already within you. You just have to know how to access them and have them permanently!</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\">The Opening Intensive offers an opportunity for participants to get real with their true, authentic nature by experiencing that Truth directly.</p><p><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"></span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"></span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"></span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"></span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"></span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\"></span></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; border: 0px; outline: 0px; font-size: 15px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; letter-spacing: 0.5px;\">Since the 1960s, intensives such as The Opening have had a proven track record of enabling people to have experiences of their authentic and confident nature within a short timeframe. The reason why our workshops are so successful lies in the fusion of Eastern spiritual contemplative methods with Western psychological tools, which together form the foundation of this work. It is the unusual and innovative combination of a focusing technique with real and honest communication, which offers a genuine possibility of having a direct experience of the Truth in our lives.</p>', '', 30, 9, 'opening,'),
(45, 'Be Productive Everywhere with iWork iOS Workshop', '<h3 style=\"margin: 0px; padding: 0px; color: rgb(40, 44, 53); font-size: 20px; line-height: 30px; font-weight: 400;\"><p style=\"margin-bottom: 0px; padding: 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Pages, Numbers, and Keynote are the&nbsp;<span style=\"font-weight: 700; padding-top: 0px;\">best ways to create amazing work</span>, whether you are on your Mac or on your iOS devices (iPhone &amp; iPad).</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><br style=\"padding-top: 0px;\"></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Imagine you can&nbsp;<span style=\"font-weight: 700; padding-top: 0px;\">create an outstanding presentation or document&nbsp;<span style=\"padding-top: 0px;\">anytime and anywhere you go</span></span>&nbsp;that has its own unique format and attractive outcome that will&nbsp;<span style=\"font-weight: 700;\">easily catch people\'s eye,&nbsp;</span>would that be awesome?</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><br style=\"padding-top: 0px;\"></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">What if we tell you that we can show you exactly&nbsp;<span style=\"font-weight: 700; padding-top: 0px;\">how you can create stunning presentation</span>&nbsp;with the&nbsp;<span style=\"font-weight: 700;\">FREE iWork apps</span>&nbsp;on your iPad/iPhone which is&nbsp;<span style=\"font-weight: 700;\">Keynote</span>,&nbsp;<span style=\"font-weight: 700;\">Numbers</span>&nbsp;and&nbsp;<span style=\"font-weight: 700;\">Pages</span>? From&nbsp;formatting, animation, calculation, transition, all the way to exporting and sharing! Sounds cool?</p></h3>', '2018-03-15', '2018-03-17', '11:00AM', 100.2486, 5.3673, 'Penang Island, Penang, Malaysia', '2018-02-13 14:44:47', 'ken_gaming@hotmail.com', 'Be Productive Everywhere with iWork iOS Workshop', '<h3 style=\"margin: 0px; padding: 0px; color: rgb(40, 44, 53); font-size: 20px; line-height: 30px; font-weight: 400;\"><p style=\"margin-bottom: 0px; padding: 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Pages, Numbers, and Keynote are the&nbsp;<span style=\"font-weight: 700; padding-top: 0px;\">best ways to create amazing work</span>, whether you are on your Mac or on your iOS devices (iPhone &amp; iPad).</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><br style=\"padding-top: 0px;\"></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Imagine you can&nbsp;<span style=\"font-weight: 700; padding-top: 0px;\">create an outstanding presentation or document&nbsp;<span style=\"padding-top: 0px;\">anytime and anywhere you go</span></span>&nbsp;that has its own unique format and attractive outcome that will&nbsp;<span style=\"font-weight: 700;\">easily catch people\'s eye,&nbsp;</span>would that be awesome?</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><br style=\"padding-top: 0px;\"></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">What if we tell you that we can show you exactly&nbsp;<span style=\"font-weight: 700; padding-top: 0px;\">how you can create stunning presentation</span>&nbsp;with the&nbsp;<span style=\"font-weight: 700;\">FREE iWork apps</span>&nbsp;on your iPad/iPhone which is&nbsp;<span style=\"font-weight: 700;\">Keynote</span>,&nbsp;<span style=\"font-weight: 700;\">Numbers</span>&nbsp;and&nbsp;<span style=\"font-weight: 700;\">Pages</span>? From&nbsp;formatting, animation, calculation, transition, all the way to exporting and sharing! Sounds cool?</p></h3>', '', 40, 9, 'productive,'),
(46, 'iPhone Photography Workshop', '<p style=\"margin-bottom: 0px; padding: 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Technology nowadays have&nbsp;<span style=\"font-weight: 700; padding-top: 0px;\">changed the way how we do the things</span>&nbsp;that we were so used to do back then, such as taking photos.</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><br style=\"padding-top: 0px;\"></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Back in the old days, in order for us to shoot a good and high quality photo, we need a&nbsp;<span style=\"font-weight: 700; padding-top: 0px;\">good and high cost camera</span>, or a&nbsp;<span style=\"font-weight: 700;\">good editing software</span>&nbsp;to enhance the outcome of our master piece. Even if we have all these equipments, still we were&nbsp;<span style=\"font-weight: 700;\">not guaranteed that we are able to get the outcome that we expected</span>&nbsp;because there is no guide or simple way for us to get started&nbsp;<span style=\"font-weight: 700;\">after investing in such a big amount</span>.</p>', '2018-02-28', '2018-03-02', '02:00PM', 101.7131, 3.1487, 'Pavilion KL Shopping, Bukit Bintang Street, Bukit Bintang, Kuala Lumpur, Federal Territory of Kuala Lumpur, Malaysia', '2018-02-13 14:45:49', 'ken_gaming@hotmail.com', 'iPhone Photography Workshop', '<p style=\"margin-bottom: 0px; padding: 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Technology nowadays have&nbsp;<span style=\"font-weight: 700; padding-top: 0px;\">changed the way how we do the things</span>&nbsp;that we were so used to do back then, such as taking photos.</p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\"><br style=\"padding-top: 0px;\"></p><p style=\"margin-bottom: 0px; padding: 10px 0px 0px; color: rgb(102, 106, 115); font-family: &quot;Benton Sans&quot;, -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Tahoma, Arial, sans-serif; font-size: 15px; letter-spacing: 0.5px;\">Back in the old days, in order for us to shoot a good and high quality photo, we need a&nbsp;<span style=\"font-weight: 700; padding-top: 0px;\">good and high cost camera</span>, or a&nbsp;<span style=\"font-weight: 700;\">good editing software</span>&nbsp;to enhance the outcome of our master piece. Even if we have all these equipments, still we were&nbsp;<span style=\"font-weight: 700;\">not guaranteed that we are able to get the outcome that we expected</span>&nbsp;because there is no guide or simple way for us to get started&nbsp;<span style=\"font-weight: 700;\">after investing in such a big amount</span>.</p>', '', 29, 9, 'photography,');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `img_id` int(11) NOT NULL,
  `img_src` text NOT NULL,
  `img_alt` text NOT NULL,
  `img_cap` text NOT NULL,
  `img_owner` varchar(100) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `organizer` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `account` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`id`, `logo`, `name`, `contact`, `email`, `account`) VALUES
(1, '', 'EventApp', '01155050055', 'chinann6123@gmail.com', 'chinann6213@gmail.com'),
(9, '', 'Ken Yeow', '012-3021203', 'ken@hotmail.com', 'ken_gaming@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `ticket_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`ticket_id`, `name`, `email`, `contact`, `event_id`) VALUES
(19, 'Lim How', 'lim@hotmail.com', '012-3201023', 42),
(20, 'Pony Tan', 'pony@hotmail.com', '013-1203010', 46);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `hashed_cookie` text,
  `email` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `tel` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `pwd`, `hashed_cookie`, `email`, `birthdate`, `tel`) VALUES
(1, 'py', 'chiaw', 'pychiaw', '$2y$10$KALBjdeD5ycW0I7ggil0/uf/CYr4KgN/o0xSP9p2ZcS/53j3u0BZG', NULL, 'pychiaw97@hotmail.com', '2018-01-11', '+60165047447'),
(2, 'CHIN ANN', 'NG', 'chinann6213', '$2y$10$3kxZLp61CHXarS8VCjuAQOKEZti/2AQwXLTi5fHDpCF9iqgV5lRaG', NULL, 'chinann6213@gmail.com', '1996-01-10', '+6 011 5507 5740'),
(5, 'Ken', 'Yeow', 'kenyeow123', '$2y$10$JWPodAh3zkRC/VrmNEqCQejQPLMqMgL.VJLOjtnHpA5cPpuLqqG/m', NULL, 'ken_gaming@hotmail.com', '1997-11-22', '012-3291929');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
