-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 06:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `isactive` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintbl`
--

INSERT INTO `admintbl` (`id`, `email`, `password`, `created`, `modified`, `isactive`) VALUES
(1, 'admin@gmail.com', 'admin', '2021-02-21 04:06:16', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `totalquestion` int(2) NOT NULL,
  `mpq` int(2) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `isactive` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `description`, `totalquestion`, `mpq`, `created`, `modified`, `isactive`) VALUES
(1, 'quiz1 Automobile', 'Quiz question on Automobile', 5, 2, '2021-02-23 04:41:19', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questiontbl`
--

CREATE TABLE `questiontbl` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `option1` varchar(500) NOT NULL,
  `option2` varchar(500) NOT NULL,
  `option3` varchar(500) NOT NULL,
  `option4` varchar(500) NOT NULL,
  `correctoption` varchar(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL,
  `isactive` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questiontbl`
--

INSERT INTO `questiontbl` (`id`, `categoryid`, `question`, `option1`, `option2`, `option3`, `option4`, `correctoption`, `created`, `modified`, `isactive`) VALUES
(1, 1, 'Most Selling Vehicle Company in India', 'maruti suzuki', 'tata', 'mahindra', 'honda', 'a', '2021-02-23 04:43:23', NULL, 1),
(2, 1, 'Highest NCAP rating car', 'baleno', 'nexon', 'xuv300', 'spresso', 'c', '2021-02-23 04:44:18', NULL, 1),
(3, 1, 'which one is highest range ev in india', 'kona', 'zs ev', 'nexon', 'e2o+', 'a', '2021-02-23 04:45:12', NULL, 1),
(4, 1, 'which company owns jaguar', 'mahindra', 'tata', 'kia', 'mg', 'b', '2021-02-23 04:46:57', NULL, 1),
(5, 1, 'which one of is this true suv', 'xuv300', 'tuv300', 'kuv100', 'xuv500', 'd', '2021-02-23 04:47:44', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `useranswertbl`
--

CREATE TABLE `useranswertbl` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  `answer` varchar(5) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL,
  `isactive` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useranswertbl`
--

INSERT INTO `useranswertbl` (`id`, `userid`, `categoryid`, `questionid`, `answer`, `created`, `modified`, `isactive`) VALUES
(1, 1, 1, 1, 'a', '2021-02-23 05:10:33', NULL, 1),
(2, 1, 1, 2, 'c', '2021-02-23 05:10:33', NULL, 1),
(3, 1, 1, 3, 'a', '2021-02-23 05:10:33', NULL, 1),
(4, 1, 1, 4, 'b', '2021-02-23 05:10:33', NULL, 1),
(5, 1, 1, 5, 'd', '2021-02-23 05:10:33', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE `usertbl` (
  `id` int(10) NOT NULL,
  `username` varchar(120) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `isactive` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertbl`
--

INSERT INTO `usertbl` (`id`, `username`, `email`, `phone`, `password`, `address`, `created`, `modified`, `isactive`) VALUES
(1, 'Kartik Kumar Saw', 'kartik@gmail.com', '8055148859', 'c8d39cdb56a46ad807969ee04c4e660b', 'Aurangabad Maharashtra\r\n', '2021-02-23 10:09:45', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintbl`
--
ALTER TABLE `admintbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questiontbl`
--
ALTER TABLE `questiontbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useranswertbl`
--
ALTER TABLE `useranswertbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintbl`
--
ALTER TABLE `admintbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questiontbl`
--
ALTER TABLE `questiontbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `useranswertbl`
--
ALTER TABLE `useranswertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
