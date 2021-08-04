-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 04:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `again word chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `fan chat`
--

CREATE TABLE `fan chat` (
  `ids` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `room` varchar(1000) NOT NULL,
  `date and time` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fan chat`
--

INSERT INTO `fan chat` (`ids`, `name`, `room`, `date and time`) VALUES
(44, 'kolkata', 'hi all how are you', '2021-06-23 09:28:14.7479'),
(45, 'rajarhat', 'hi i am fine', '2021-06-23 09:28:43.5424'),
(46, 'kolkata', 'oo good', '2021-06-23 09:29:04.6359'),
(47, 'rajarhat', 'hmm', '2021-06-23 09:29:09.5675'),
(48, 'priti paul', 'chat41', '2021-07-01 11:12:59.3497');

-- --------------------------------------------------------

--
-- Table structure for table `nameroom`
--

CREATE TABLE `nameroom` (
  `ida` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date of reply` datetime(4) NOT NULL DEFAULT current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nameroom`
--

INSERT INTO `nameroom` (`ida`, `name`, `date of reply`) VALUES
(58, 'kolkata', '2021-06-23 09:27:48.7867'),
(59, 'rajarhat', '2021-06-23 09:28:29.7554'),
(60, 'Iubi Kumar', '2021-06-24 12:14:17.4643'),
(61, 'priti paul', '2021-06-30 08:12:52.4646'),
(62, 'priti paul', '2021-07-01 11:12:52.8675');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fan chat`
--
ALTER TABLE `fan chat`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `nameroom`
--
ALTER TABLE `nameroom`
  ADD PRIMARY KEY (`ida`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fan chat`
--
ALTER TABLE `fan chat`
  MODIFY `ids` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `nameroom`
--
ALTER TABLE `nameroom`
  MODIFY `ida` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
