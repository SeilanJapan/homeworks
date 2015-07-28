-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2015 at 10:47 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `br_rich`
--

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `level` int(2) NOT NULL,
  `money` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`level`, `money`) VALUES
(1, 50),
(2, 100),
(3, 150),
(4, 200),
(5, 250),
(6, 500),
(7, 1000),
(8, 1500),
(9, 2000),
(10, 2500),
(11, 5000),
(12, 10000),
(13, 25000),
(14, 50000),
(15, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `questions_1`
--

CREATE TABLE IF NOT EXISTS `questions_1` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `a1` varchar(100) NOT NULL,
  `a2` varchar(100) NOT NULL,
  `a3` varchar(100) NOT NULL,
  `a4` varchar(100) NOT NULL,
  `positive` varchar(2) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions_1`
--

INSERT INTO `questions_1` (`id`, `question`, `a1`, `a2`, `a3`, `a4`, `positive`, `level`) VALUES
(2, 'Who is made the tltphone?', 'Bell', 'Ring', 'Dong', 'Stereo phones', 'a1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `questions_1`
--
ALTER TABLE `questions_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions_1`
--
ALTER TABLE `questions_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
