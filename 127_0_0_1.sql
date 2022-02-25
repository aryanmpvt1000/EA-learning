-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 05:24 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ea learning`
--
CREATE DATABASE IF NOT EXISTS `ea learning` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ea learning`;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `message`) VALUES
('', '', ' '),
('aryan', 'aryan@gmail.com', 'simple and clean website 👌');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` text DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `s.no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `contact`, `password`, `s.no`) VALUES
('aryan', 'aryan@g.com', 1234567890, '1234', 1),
('aman', 'aman@b.com', 231457437, '123457', 2),
('dsvsd', 'vsgv@grdfb.fgdx', 2147483647, 'gdf', 3),
('raj', 'raj@ju.com', 1230975468, 'raju2345', 4),
('ekansh', 'ekansh@b.com', 1234567894, '12345', 5),
('paras', 'paras@b.com', 1234543676, '1234', 27),
('naksh', 'naksh@g.com', 1234534563, '1234', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`email`);
ALTER TABLE `contact_us` ADD FULLTEXT KEY `name` (`name`);
ALTER TABLE `contact_us` ADD FULLTEXT KEY `message` (`message`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`s.no`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `s.no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
