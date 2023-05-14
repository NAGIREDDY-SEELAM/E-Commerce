-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 03:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(256) NOT NULL,
  `phoneNo` varchar(256) NOT NULL,
  `cropname` varchar(256) NOT NULL,
  `cropquantity` varchar(256) NOT NULL,
  `mbp` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `name`, `phoneNo`, `cropname`, `cropquantity`, `mbp`, `address`) VALUES
(10, 'god', '7023698656', 'wheat', '56', '55', 'udsgfliugdsilfgyldsf'),
(11, 'god', '7023698656', 'wheat', '56', '55', 'udsgfliugdsilfgyldsf'),
(12, 'god', '7023698656', 'wheat', '56', '55', 'udsgfliugdsilfgyldsf');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(256) NOT NULL,
  `phoneNo` varchar(256) NOT NULL,
  `cropname` varchar(256) NOT NULL,
  `cropquantity` varchar(256) NOT NULL,
  `MSP` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `phoneNo`, `cropname`, `cropquantity`, `MSP`, `address`) VALUES
(6, 'rahul', '7023698656', 'wheat', '56', '200', 'sdufgdisgdidfdfsdf'),
(7, 'rahul', '7023698656', 'wheat', '56', '200', 'sdufgdisgdidfdfsdf'),
(8, 'rahul', '7023698656', 'wheat', '56', '200', 'sdufgdisgdidfdfsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
