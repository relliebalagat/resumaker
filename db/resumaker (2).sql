-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 06:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resumaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE IF NOT EXISTS `achievement` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserAccountId` int(11) NOT NULL,
  `Achievement` varchar(1000) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `characterreference`
--

CREATE TABLE IF NOT EXISTS `characterreference` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserAccountId` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Organization` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `ContactNo` int(15) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `companyaccount`
--

CREATE TABLE IF NOT EXISTS `companyaccount` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(255) NOT NULL,
  `CompanyAddress` varchar(255) NOT NULL,
  `ContactNo` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `educationdetail`
--

CREATE TABLE IF NOT EXISTS `educationdetail` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserAccountId` int(11) NOT NULL,
  `EducationLevel` varchar(255) DEFAULT NULL,
  `Duration` varchar(255) DEFAULT NULL,
  `School` varchar(255) DEFAULT NULL,
  `Course` varchar(255) DEFAULT NULL,
  `Awards` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jobposting`
--

CREATE TABLE IF NOT EXISTS `jobposting` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyId` int(11) NOT NULL,
  `JobPosition` varchar(255) NOT NULL,
  `JobDescription` varchar(255) NOT NULL,
  `YearsExperience` varchar(255) NOT NULL,
  `DateCreated` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jobpostingcourse`
--

CREATE TABLE IF NOT EXISTS `jobpostingcourse` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `JobPostingId` int(11) NOT NULL,
  `Course` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jobpostingskill`
--

CREATE TABLE IF NOT EXISTS `jobpostingskill` (
  `Id` int(11) DEFAULT NULL,
  `JobPostingId` int(11) NOT NULL,
  `Skill` varchar(255) NOT NULL,
  `SkillLevel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personaldetail`
--

CREATE TABLE IF NOT EXISTS `personaldetail` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserAccountId` varchar(11) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Address` varchar(1000) DEFAULT NULL,
  `CivilStatus` varchar(15) DEFAULT NULL,
  `Height` varchar(11) DEFAULT NULL,
  `Weight` varchar(11) DEFAULT NULL,
  `Religion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `seminartraining`
--

CREATE TABLE IF NOT EXISTS `seminartraining` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserAccountId` int(11) NOT NULL,
  `SeminarTraining` varchar(1000) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE IF NOT EXISTS `skill` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserAccountId` int(11) NOT NULL,
  `Skill` varchar(1000) DEFAULT NULL,
  `SkillLevel` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE IF NOT EXISTS `useraccount` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) DEFAULT NULL,
  `MIddleName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `ContactNo` varchar(15) DEFAULT NULL,
  `Birthday` date NOT NULL,
  `Gender` varchar(5) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `DateCreated` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`Id`, `FirstName`, `MIddleName`, `LastName`, `ContactNo`, `Birthday`, `Gender`, `Email`, `Password`, `DateCreated`) VALUES
(1, 'jom', 'gustilo', 'ramos', '082384444', '1997-07-08', 'M', 'jomjomramos@gmail.com', 'c5da90eb38a5b6fe983308d1fb3c7bf8', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workdetails`
--

CREATE TABLE IF NOT EXISTS `workdetails` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserAccountId` int(11) NOT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Company` varchar(255) DEFAULT NULL,
  `Duration` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
