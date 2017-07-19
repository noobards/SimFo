-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 02:01 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forums`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `title` varchar(50) NOT NULL,
  `gender` int(11) NOT NULL DEFAULT '3',
  `dob` date NOT NULL,
  `location` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `homepage` varchar(150) NOT NULL,
  `aka` varchar(30) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '3',
  `vcash` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='members of the site' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `password`, `email`, `avatar`, `title`, `gender`, `dob`, `location`, `occupation`, `homepage`, `aka`, `role`, `vcash`, `created`) VALUES
(1, 'asprin', '8e6ccfd410e4401a0a78324483d16bbc60c8c9ee', 'asprin@online.com', '', 'Staff Member', 1, '1986-05-04', 'Hyderabad', 'Software Developer', 'http://localhost/forums', 'Noobards', 1, 500000000, '2017-07-18 14:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
  `gender_id` int(11) NOT NULL AUTO_INCREMENT,
  `gender_name` varchar(15) NOT NULL,
  PRIMARY KEY (`gender_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_name`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'Unspecified');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(15) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Administrator'),
(2, 'Staff Member'),
(3, 'Member');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
