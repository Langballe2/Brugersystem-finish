-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: kuppet.dk.mysql:3306
-- Generation Time: Jul 09, 2016 at 04:28 PM
-- Server version: 5.5.47-MariaDB-1~wheezy
-- PHP Version: 5.3.3-7+squeeze15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kuppet_dk`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`) VALUES
(4, 'MBrow', 'test', 'mikelangballejensen@gmail.com', 'Mike', 'Langballe Jensen'),
(6, 'LOL', 'LOL', '', '', ''),
(10, '', 'jensen', 'mikelangballejensen@gmail.com', '', ''),
(11, '', 'hejsa', 'mikelangballejensen@gmail.com', '', ''),
(32, 'asdg', '426ddc4bfffe4e3bad36a6f97bafb4a8', 'asdgadg@a', 'ga', 'dsgdsag'),
(31, 'a', '541c57960bb997942655d14e3b9607f9', 'hej@hej.dk', 'a', 'a'),
(30, 'MBrow', '1234', 'mikelangballejensen@gmail.com', 'Mike', 'Langballe Jensen');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
