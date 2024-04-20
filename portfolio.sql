-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2024 at 12:38 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `username`, `password`) VALUES
(1, 'pawan', '58b0f3360fdbf04f3cc998a48cebade1');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE IF NOT EXISTS `contact_tbl` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`id`, `name`, `email`, `msg`) VALUES
(31, 'pawan', 'pawan@gmail.com', 'jklasf'),
(32, 'pawan', 'pawan@gmail.com', 'nice'),
(33, 'pawan', 'pawan@gmail.com', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `projects_tbl`
--

CREATE TABLE IF NOT EXISTS `projects_tbl` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `projects_tbl`
--

INSERT INTO `projects_tbl` (`img_id`, `image`) VALUES
(1, 'p4.jpg'),
(2, 'p2.jpg'),
(4, 'p3.jpg'),
(5, 'p1.jpg'),
(6, 'p1.jpg'),
(7, 'p5.jpg'),
(8, 'p3.jpg');
