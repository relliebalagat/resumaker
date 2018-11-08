-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2017 at 08:14 PM
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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(5) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `uploader` varchar(10) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `picture`, `uploader`, `datetime`) VALUES
(0, 'img/2.jpg', '2', '2017-06-13 14:48:43'),
(0, 'img/3.jpg', '2', '2017-06-13 14:49:03'),
(0, 'img/2.jpg', '2', '2017-06-13 15:10:57'),
(0, 'img/2.jpg', '2', '2017-06-13 15:12:08'),
(0, 'img/2.jpg', '2', '2017-06-13 15:15:03'),
(0, 'img/2.jpg', '2', '2017-06-13 15:16:54'),
(0, 'img/2.jpg', '2', '2017-06-13 15:18:20'),
(0, 'img/1.jpg', '6', '2017-06-15 13:10:31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
