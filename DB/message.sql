-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 06:16 PM
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
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `uid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`uid`, `name`, `email`, `subject`, `description`) VALUES
(1, 'Anshuman', 'anshu@gmail.com', 'text report', 'yoyo honey singh'),
(2, 'rahul', 'rahul@gmail.com', 'head', 'not working'),
(3, 'ayush', 'ayush@gmail.com', 'techincal glitch', 'not working'),
(4, 'Anshuman Singh', 'jitendra3042.av@gmail.com', 'New project', 'not wokring'),
(5, 'riddhima', 'riddhima@gmail.com', 'Message not send', 'messaging feature is not working'),
(6, 'Anshuman Singh', 'jitendra3042.av@gmail.com', 'New project', 'acsvsvsfvsf'),
(7, 'Divakar', 'lodu@gmail.com', 'Test Subject', 'yoyo honey singh'),
(8, 'Anshuman Singh', 'jitendra3042.av@gmail.com', 'Test Subject', 'acav'),
(9, '', '', '', ''),
(10, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
