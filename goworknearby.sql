-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2017 at 11:44 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goworknearby`
--

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `field` varchar(30) NOT NULL,
  `no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`field`, `no`) VALUES
('education', 1),
('home and garden', 0),
('technical/mechanical', 3),
('other', 4);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` int(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `hometown` varchar(30) NOT NULL,
  `interested` varchar(20) NOT NULL,
  `lati` decimal(9,6) NOT NULL,
  `longi` decimal(9,6) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`fname`, `lname`, `email`, `tel`, `country`, `hometown`, `interested`, `lati`, `longi`, `description`) VALUES
('lanka', 'rathnayake', 'rmllbrathnayaka@gmail.com', 712980826, '0', '0', 'home and garden', '0.000000', '0.000000', 'i need a driver'),
('ayesh', 'nipun', 'nipun.yesh@gmail.com', 773269713, 'mathara', 'sri lanka', 'home and garden', '5.945265', '80.532081', 'i need to dig a pit');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` int(10) NOT NULL,
  `hometown` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `interested` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`fname`, `lname`, `email`, `tel`, `hometown`, `country`, `interested`) VALUES
('ewwer', 'r', 'r@gmail.com', 25, 'dd', 'sri', 'education');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` int(15) NOT NULL,
  `hometown` varchar(20) NOT NULL,
  `country` varchar(15) NOT NULL,
  `field` varchar(15) NOT NULL,
  `lati` decimal(9,6) NOT NULL,
  `longi` decimal(9,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`fname`, `lname`, `email`, `telephone`, `hometown`, `country`, `field`, `lati`, `longi`) VALUES
('malindu', 'ruwantha', 'malinduruwantha@gmail.com', 769346108, 'colombo 08', '', 'education', '0.000000', '0.000000'),
('gayath', 'chandira', 'gayath.chandira94@gmail.com', 711666846, 'maharagama', 'sri lanka', 'home and garden', '6.918247', '79.917297');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
