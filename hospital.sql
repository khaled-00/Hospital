-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2015 at 03:26 �
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('b43570f8df30a04c37877b4295b5078c', '::1', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36', 1427717054, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:10:"abdelrahim";s:8:"password";s:2:"00";}');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `patients_name` varchar(150) NOT NULL,
  `Notes` text NOT NULL,
  `Case` varchar(50) NOT NULL,
  `sc_id` int(11) NOT NULL,
  `room` varchar(100) NOT NULL,
  `Expenses` varchar(150) NOT NULL,
  `gender` varchar(30) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`p_id`, `patients_name`, `Notes`, `Case`, `sc_id`, `room`, `Expenses`, `gender`) VALUES
(39, 'kokoko', '000111000111000', 'Express', 1, '00', '00', 'male'),
(12, 'habeba ', 'jklh', 'Advice', 8, 'jhkl', 'hkl', 'female'),
(37, '55', '55', 'Advice', 8, '55', '55', 'male'),
(13, 'koko', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'Hazardous', 7, '5', '2005', 'female'),
(29, 'Gzra', 'Gzra', 'Advice', 6, '5', '10', 'female'),
(28, 'ibrahem1000', 'نادو على عرسنا الامور ', 'Advice', 1, '4', '555', 'female'),
(36, '12345', '00', 'Express', 7, '00', '00', 'male'),
(18, '555555', '555555555555555555555555555555', 'Express', 6, '55', '55555', 'male'),
(27, 'Khaled Abd Elrhem', '54545', 'Normal', 8, '2', '4545', 'male'),
(26, 'bebo', '222222222222222222222222222222', 'Advice', 6, '2', '222', 'female'),
(38, '0000000000000000000', '00', 'Advice', 8, '0000', '000', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `sc_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_name` varchar(100) NOT NULL,
  `Doctor` varchar(250) NOT NULL,
  `Floor` varchar(100) NOT NULL,
  `num_patients` int(11) NOT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`sc_id`, `section_name`, `Doctor`, `Floor`, `num_patients`) VALUES
(1, 'Eyes', 'khaled', '1', 0),
(7, 'Heart', 'khlil', '3', 9),
(6, 'Teeth', 'ikrame', '2', 4),
(8, 'intimal', 'ahmed', '4', 12);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(50) NOT NULL,
  `sc_id` int(11) NOT NULL,
  `Degree` varchar(200) NOT NULL,
  `Times` varchar(200) NOT NULL,
  `Salary` varchar(500) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `file` text NOT NULL,
  `Notes` text NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`e_id`, `employee_name`, `sc_id`, `Degree`, `Times`, `Salary`, `gender`, `file`, `Notes`) VALUES
(1, 'khaled', 1, 'Doctor', '0000', '0000', '', '', ''),
(12, '12345', 1, 'Administrative', 'From 12345 to 12345', '12345', 'female', '29415.jpg', '12345'),
(4, '5555', 1, 'Administrative', '', '0', 'female', '64065551.jpg', '555555'),
(9, 'bebo', 1, 'Doctor', 'From 02:30pm to 08:00pm ', '3000', 'female', '10988542_871077052933673_4154060275041672654_n.png', '00000000000000000000000000'),
(7, 'Khaled Abd Elrhem', 1, 'Administrative', 'From05:00 AMto02:00 PM', '0', '0', '87850952', 'abdelrahem'),
(8, 'khaled', 7, 'Administrative', 'From 00 to 00', '5000000', 'male', '62500000.jpg', '00000'),
(11, 'ibrahem0', 1, 'Administrative', 'From 55 to 55', '55', 'male', 'صورة', '///'),
(14, '1223334444', 0, 'Administrative', 'From 00 to 00', '0', 'female', '64212036.jpg', '00'),
(15, 'beboooo', 0, 'Administrative', 'From 99 to ', '0', 'male', '45220947.jpg', '999999999'),
(16, 'test', 7, 'reception', 'From 00 to 00', '00', 'male', '18383789.jpg', 'test'),
(17, 'test', 6, 'Nurses', 'From 00 to 00', '00', 'female', '81506347.jpg', 'test'),
(18, '000000000', 1, 'reception', 'From 00 to 00', '0000', 'male', '7635498.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`) VALUES
(1, 'abdelrahim', '00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
