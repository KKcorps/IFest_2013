-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2013 at 03:19 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kkcorps`
--

-- --------------------------------------------------------

--
-- Table structure for table `ifest_register`
--

CREATE TABLE IF NOT EXISTS `ifest_register` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `college` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `event1` varchar(20) DEFAULT NULL,
  `event2` varchar(20) DEFAULT NULL,
  `fbid` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `ifest_register`
--

INSERT INTO `ifest_register` (`user_id`, `first_name`, `last_name`, `username`, `email`, `phone`, `sex`, `college`, `year`, `dob`, `password`, `picture`, `event1`, `event2`, `fbid`) VALUES
(22, 'Namit', 'Ohri', 'namit', 'sandy12_rock@yahoo.co.in', '2989823982', 'male', 'iit roorkee', 2, '1988-07-04', 'a9993e364706816aba3e25717850c26c9cd0d89d', 'namit.ohri.jpg', NULL, NULL, '1110713088'),
(23, 'kartik', 'khare', 'khareuec', 'kharekartik@gmail.com', '2989823982', 'male', 'iit roorkee', 2, '1987-07-07', 'a9993e364706816aba3e25717850c26c9cd0d89d', '', NULL, NULL, ''),
(28, 'abc', 'abc', 'abc', 'akshay.chaudhary@rocketmail.com', '2989823982', 'male', 'iit roorkee', 2, '1990-07-04', 'a9993e364706816aba3e25717850c26c9cd0d89d', '', NULL, NULL, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
