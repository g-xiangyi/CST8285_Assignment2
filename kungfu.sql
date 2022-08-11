-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 02:12 AM
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
-- Database: `kungfu`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ATT_ID` varchar(100) NOT NULL,
  `STU_ID` int(50) NOT NULL,
  `CLASS_NUM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `CLASS_NUM` varchar(50) NOT NULL,
  `CLASS_LEVEL` int(100) NOT NULL,
  `CLASS_PRICE` int(20) NOT NULL,
  `CLASS_INSTRUCTOR` int(50) NOT NULL,
  `CLASS_DESCRIPTION` varchar(100) NOT NULL,
  `CLASS_DAY` varchar(3) NOT NULL,
  `CLASS_TIME` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `STU_ID` int(50) NOT NULL,
  `STU_FNAME` varchar(30) NOT NULL,
  `STU_LNAME` varchar(30) NOT NULL,
  `STU_BIRTHDAY` date NOT NULL,
  `STU_PHONE` int(10) NOT NULL,
  `STU_EMAIL` int(30) NOT NULL,
  `STU_MOMPHONE` int(10) NOT NULL,
  `STU_DADPHONE` int(10) NOT NULL,
  `STU_ADDRESS` varchar(50) NOT NULL,
  `STU_JOINDATE` date NOT NULL DEFAULT current_timestamp(),
  `STU_RANK` int(11) NOT NULL,
  `STU_PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`CLASS_NUM`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`STU_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `STU_ID` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
