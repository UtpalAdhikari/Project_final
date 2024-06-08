-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 09:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `session` varchar(30) NOT NULL,
  `year` varchar(10) NOT NULL,
  `phone` int(20) NOT NULL,
  `hall` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `name`, `roll`, `department`, `session`, `year`, `phone`, `hall`) VALUES
(12, 'Din Mf', '22 mf 45', 'Management Studies', '21- 22', '3rd', 13145, 'Bangabandu Hall');

-- --------------------------------------------------------

--
-- Table structure for table `cancel`
--

CREATE TABLE `cancel` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cancel`
--

INSERT INTO `cancel` (`id`, `name`, `email`, `password`) VALUES
(1, 'Utpal Adhikari', 'utpal@gmail.com', '12345'),
(2, '', '', ''),
(3, 'Utpal Adhikari', 'utpaladhikari70@gmail.com', '122'),
(4, 'Utpal Adhikari', 'utpaladhikari70@gmail.com', '78676'),
(5, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `description`) VALUES
(1, '100 rooms and 2 daining'),
(2, '20 Bathroom'),
(3, 'There are a big Pond.'),
(4, 'Every room contain 4 bed with 8 students.');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `id` int(11) NOT NULL,
  `name_of_hall` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hall_designation` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id`, `name_of_hall`, `name`, `hall_designation`, `department`) VALUES
(1, 'Bangabandu', 'Md Arif Hossain', 'Provost', 'Soiology'),
(2, 'Shere Bangla', 'Abdul Al Bathen Chowdury', 'Provost', 'History'),
(3, 'Shere Bangla', 'Din Mohammad', 'Assistant Provost', 'Management Studies'),
(4, 'Bangabandu', 'Md Arif Hossain', 'Assistant Provost', 'Marketing'),
(5, 'Bangabandu', 'Kingkar Paul', 'House Tutor', 'Accounting'),
(6, 'Shere Bangla', 'Badhon Sharma', 'House Tutor', 'Finance and Banking'),
(7, 'Shere Bangla', 'Limon Paul', 'House Tutor', 'Physics');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(1, 'Utpal Adhikari', 'utpal@gmail.com', '12345'),
(2, 'Kingkar Paul', 'king@gmail.com', '01927823'),
(3, 'Emon', 'emon@gmail.com', '01839383'),
(4, 'Emon', 'emon@gmail.com', '4646'),
(5, 'Badhon Sarma', 'badhon@gmail.com', '033784584'),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, 'fgf', 'rtr@gmail,com', '6544'),
(10, 'uwioeyoyoi', 'hihioyhnkljpou', 'iujodhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancel`
--
ALTER TABLE `cancel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cancel`
--
ALTER TABLE `cancel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
