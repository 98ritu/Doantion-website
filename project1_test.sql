-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 10:10 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phoneno` bigint(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `phoneno`, `email`, `amount`) VALUES
(40, 'ritu verma', 1234567890, 'verma98ritu@gmaill.com', 100),
(41, 'jumbo', 9839122527, 'verma98ritu@gmail.com', 123),
(42, 'ritu1234', 9839122527, 'verma98ritu@gmail.com', 400),
(43, 'ritu1234', 9839122527, 'verma98ritu@gmail.com', 400),
(44, 'voldemort', 9998887776, 'tomriddle@voldemort.com', 1),
(45, 'voldemort', 9839122527, 'tomriddle@voldemort.com', 1),
(46, 'voldemort', 9839122527, 'verma98ritu@gmail.com', 1),
(47, 'blogit', 9839122527, 'verma98ritu@gmail.com', 400),
(48, 'ritu1234', 9839122527, 'verma98ritu@gmail.com', 400),
(49, 'blogit', 9839122527, 'verma98ritu@gmail.com', 400),
(50, 'hello', 1234, 'verma', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
