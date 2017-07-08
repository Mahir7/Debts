-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2017 at 09:34 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `al khayam`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
`TypeID` int(25) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` int(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`TypeID`, `type`, `amount`) VALUES
(1, 'Emirates ID 1 Year', 170),
(2, 'Emirates ID 2 Years', 270),
(3, 'Emirates ID 3 Years', 370),
(4, 'Emirates ID 5 Years Local', 170),
(5, 'Emirates ID 10 Years Local', 270),
(6, 'Servant Visa for Work', 190),
(7, 'Servant Iqama for Work', 450),
(8, 'Family Iqama for 2 Years', 360);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
`NameID` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `sheikh_office` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`NameID`, `name`, `mobile`, `sheikh_office`) VALUES
(1, 'Mohammed', '0500505050', 'Sheikh Dhiyaab '),
(2, 'Saeed', '050546456', 'Sheikh Tahnoon'),
(3, 'Nawaf', '0504564564', 'Sheikha Rawdha'),
(4, 'Sameer', '0505564065', 'Sheikh Dhiyab');

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

CREATE TABLE IF NOT EXISTS `transection` (
`ID` int(255) NOT NULL,
  `NameID` int(25) NOT NULL,
  `date` date NOT NULL,
  `TypeID` int(25) NOT NULL,
  `amount` int(25) NOT NULL,
  `quantity` int(25) NOT NULL,
  `total` int(46) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transection`
--

INSERT INTO `transection` (`ID`, `NameID`, `date`, `TypeID`, `amount`, `quantity`, `total`, `status`) VALUES
(11, 2, '2017-12-12', 4, 170, 7, 1190, 1),
(12, 3, '2017-06-21', 3, 370, 2, 740, 1),
(13, 4, '2017-06-06', 1, 170, 9, 1530, 1),
(14, 3, '2017-06-07', 2, 270, 8, 2160, 0),
(15, 3, '2017-06-07', 2, 270, 8, 2160, 1),
(16, 3, '2017-06-07', 2, 270, 8, 2160, 1),
(17, 1, '2017-06-14', 1, 170, 472, 80240, 0),
(18, 1, '2017-06-14', 1, 170, 472, 80240, 1),
(19, 2, '2017-06-06', 3, 370, 125, 46250, 0),
(20, 2, '2017-06-06', 2, 270, 24, 6480, 0),
(21, 1, '2017-06-08', 2, 270, 7, 1890, 1),
(22, 1, '2017-05-07', 1, 170, 8, 1360, 1),
(23, 3, '2017-06-28', 5, 270, 2, 540, 0),
(24, 3, '2017-06-23', 7, 450, 3, 1350, 0),
(25, 2, '2017-06-26', 8, 360, 4, 1440, 0),
(26, 3, '2017-06-27', 6, 190, 5, 950, 0),
(27, 2, '2017-06-07', 7, 450, 2, 900, 0),
(28, 2, '2017-06-23', 3, 370, 23, 8510, 0),
(29, 3, '2017-06-23', 7, 450, 6, 2700, 1),
(30, 3, '2017-06-21', 4, 170, 3, 510, 1),
(31, 3, '2017-06-24', 7, 450, 4, 1800, 1),
(32, 4, '0000-00-00', 7, 450, 4, 1800, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
 ADD PRIMARY KEY (`TypeID`), ADD KEY `TypeID` (`TypeID`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
 ADD PRIMARY KEY (`NameID`);

--
-- Indexes for table `transection`
--
ALTER TABLE `transection`
 ADD PRIMARY KEY (`ID`), ADD KEY `TypeID` (`TypeID`), ADD KEY `NameID` (`NameID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
MODIFY `TypeID` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
MODIFY `NameID` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transection`
--
ALTER TABLE `transection`
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `transection`
--
ALTER TABLE `transection`
ADD CONSTRAINT `transection_ibfk_1` FOREIGN KEY (`NameID`) REFERENCES `person` (`NameID`),
ADD CONSTRAINT `transection_ibfk_2` FOREIGN KEY (`TypeID`) REFERENCES `application` (`TypeID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
