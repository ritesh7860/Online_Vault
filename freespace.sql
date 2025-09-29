-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2021 at 09:06 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `freespace`
--

-- --------------------------------------------------------

--
-- Table structure for table `regdata`
--

CREATE TABLE IF NOT EXISTS `regdata` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regdata`
--


-- --------------------------------------------------------

--
-- Table structure for table `updfiles`
--

CREATE TABLE IF NOT EXISTS `updfiles` (
  `email` varchar(30) DEFAULT NULL,
  `uploadfiles` varchar(200) DEFAULT NULL,
  `fsize` varchar(20) DEFAULT NULL,
  `currdate` varchar(100) DEFAULT NULL,
  KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updfiles`
--

