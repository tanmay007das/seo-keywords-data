-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 01:50 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seo-keywords`
--

-- --------------------------------------------------------

--
-- Table structure for table `seo-data`
--

CREATE TABLE `seo-data` (
  `id` int(4) NOT NULL,
  `domainname` varchar(50) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `ranking` int(4) NOT NULL,
  `keywordvolume` int(10) NOT NULL,
  `keywordcompetition` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo-data`
--

INSERT INTO `seo-data` (`id`, `domainname`, `keyword`, `ranking`, `keywordvolume`, `keywordcompetition`) VALUES
(5, 'jandu.com', 'tu intelligent hain', 3, 32, 'high'),
(6, 'jandu.com', 'tu bahut intelligent hain', 2, 35, 'med'),
(7, 'mybiodata.com', 'tanmay best biodata', 2, 89, 'high'),
(15, 'mysirgi.uk', 'best developer in usa', 3, 38, 'high'),
(16, 'mysirgi.uk', 'my best video channel', 7, 89, 'med'),
(18, 'jhdd.com', 'best designer firm in kolkata', 5, 87, 'high'),
(25, 'jhdd.com', 'web design in US', 8, 21, 'low'),
(26, 'jhdd.com', 'web design in United States', 7, 81, 'Med'),
(27, 'jhdd.com', 'web design in LA, United States', 2, 231, 'High');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seo-data`
--
ALTER TABLE `seo-data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seo-data`
--
ALTER TABLE `seo-data`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
