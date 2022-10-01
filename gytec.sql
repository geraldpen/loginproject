-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 05:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gytec`
--

-- --------------------------------------------------------

--
-- Table structure for table `adduser`
--

CREATE TABLE `adduser` (
  `id` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adduser`
--

INSERT INTO `adduser` (`id`, `name`, `email`, `password`) VALUES
(1, 'regrf', 'geraldopenn@gmail.com', 'edwedqw'),
(2, 'regrf', 'geraldopenn@gmail.com', 'wefwqe'),
(3, 'regrf', 'geraldopenn@gmail.com', '34535354r4'),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, 'regrf', 'geraldopenn@gmail.com', 'sdrfvsdvd'),
(13, '', '', ''),
(14, 'mokom gerald penn', 'mokompenn@gmail.com', '242342dd'),
(15, 'regrf', 'geraldopenn@gmail.com', '5245t234t'),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, 'menka', 'menka@gmail.com', '2344t'),
(21, 'menka', 'menka@gmail.com', '23421433244134e23'),
(22, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adduser`
--
ALTER TABLE `adduser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adduser`
--
ALTER TABLE `adduser`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
