-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2015 at 07:55 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `git`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `komentars` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL,
  `vards` varchar(15) NOT NULL,
  `uzvards` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dzd` date NOT NULL,
  `dzimums` varchar(8) NOT NULL,
  `parole` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `vards`, `uzvards`, `email`, `dzd`, `dzimums`, `parole`) VALUES
(1, 'sindija', 'bankovska', 'pranjiiiks@inbox.lv', '2015-03-03', 'sieviete', '1234'),
(2, 'sindija', 'bankovska', 'pranjiiiks@inbox.lv', '2016-02-01', 'siev', '1234'),
(3, 'fgsdfg', 'dsgfdfggdf', 'gsdfgsd', '0000-00-00', 'sdfsdfg', 'fgsdfgsdfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
