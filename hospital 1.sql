-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2016 at 07:05 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--
CREATE DATABASE IF NOT EXISTS `hospital` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hospital`;

-- --------------------------------------------------------

--
-- Table structure for table `appt`
--

CREATE TABLE `appt` (
`ano` int(11) NOT NULL,
  `adoctor` varchar(30) NOT NULL,
  `apatient` varchar(11) NOT NULL,
  `atime` varchar(11) NOT NULL,
  `ashow` varchar(1) NOT NULL,
  `adate` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT AUTO_INCREMENT=15 ;

--
-- Dumping data for table `appt`
--

INSERT INTO `appt` (`ano`, `adoctor`, `apatient`, `atime`, `ashow`, `adate`) VALUES
(14, 'ggg', 'faruk', '2.00pm', '', 'Monday'),
(13, 'dd', 'faruk', '2.00pm', '', 'Monday'),
(12, 'ggg', 'faruk', '2.00pm', '', 'Monday');

-- --------------------------------------------------------

--
-- Table structure for table `doct`
--

CREATE TABLE `doct` (
`dno` int(11) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `dspec` varchar(30) NOT NULL,
  `dshow` varchar(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `doct`
--

INSERT INTO `doct` (`dno`, `dname`, `dspec`, `dshow`) VALUES
(6, 'ggg', 'ddd', ''),
(7, 'dd', 'kkk', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
`pno` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `padd` varchar(30) NOT NULL,
  `psex` varchar(1) NOT NULL,
  `pshow` varchar(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pno`, `pname`, `padd`, `psex`, `pshow`) VALUES
(3, 'faruk', 'dhaka', 'm', ''),
(4, 'farukg', 'dhakag', 'm', '');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
`sno` int(11) NOT NULL,
  `stime` varchar(15) NOT NULL,
  `sday` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`sno`, `stime`, `sday`) VALUES
(1, '2.00pm', 'Monday'),
(2, '1.00pm', 'Sunday'),
(3, '3.00pm', 'Tuesday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appt`
--
ALTER TABLE `appt`
 ADD PRIMARY KEY (`ano`);

--
-- Indexes for table `doct`
--
ALTER TABLE `doct`
 ADD PRIMARY KEY (`dno`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
 ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
 ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appt`
--
ALTER TABLE `appt`
MODIFY `ano` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `doct`
--
ALTER TABLE `doct`
MODIFY `dno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
