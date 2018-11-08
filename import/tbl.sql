-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2017 at 08:15 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soldier`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl`
--

CREATE TABLE `tbl` (
  `user_id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_num` varchar(11) NOT NULL,
  `bday` date NOT NULL,
  `gender` char(1) NOT NULL,
  `prof_pic` varchar(100) NOT NULL DEFAULT '/img/d.jpg',
  `status` int(1) NOT NULL DEFAULT '1',
  `user_type` int(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl`
--

INSERT INTO `tbl` (`user_id`, `fname`, `lname`, `mname`, `password`, `email`, `contact_num`, `bday`, `gender`, `prof_pic`, `status`, `user_type`, `timestamp`) VALUES
(2, 'jay', 'jay', 'jay', 'e4af90461e9c88bdb569c7423191e79f', 'jay@c', '123', '2017-06-28', 'F', 'img/1.jpg', 1, 1, '2017-06-13 06:48:31'),
(3, 'a', 'a', 'a', 'd7afde3e7059cd0a0fe09eec4b0008cd', 'a@a', '09', '2017-06-23', 'M', '/img/d.jpg', 1, 1, '2017-06-19 16:16:53'),
(4, 'gen', 'gen', 'gen', '8187dbb02ef790f59e68c6820cb52e27', 'gen@c', '932', '2017-06-24', 'F', 'img/4.jpg', 1, 1, '2017-06-19 16:51:29'),
(5, 'siti', 'siti', 'siti', 'b5f65933867e962a4d87fd1f273ffcfd', 'siti@c', '32', '2017-06-23', 'F', 'img/', 1, 2, '2017-06-20 01:22:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl`
--
ALTER TABLE `tbl`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl`
--
ALTER TABLE `tbl`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
