-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 09:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `Id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Mobile` int(13) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Std` varchar(50) DEFAULT NULL,
  `Subject` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`Id`, `FullName`, `Address`, `Mobile`, `Email`, `Std`, `Subject`, `DOB`, `Gender`) VALUES
(1, 'MULLA ASIF AKBAR', 'SAMBHAJI NAGAR, TALANDAGE -416236', 2147483647, NULL, NULL, NULL, NULL, '0'),
(2, 'Sohel Mulla', 'SAMBHAJI NAGAR, TALANDAGE -416236', 2147483647, 'sohelmulla@123.com', 'SY', 'Java', '2023-12-28', '0'),
(3, 'MULLA ASIF AKBAR', 'SAMBHAJI NAGAR, TALANDAGE -416236', 1111111111, 'vdrddgd', 'TY', 'C#', '2023-12-29', '0'),
(4, 'MULLA ASIF AKBAR', 'SAMBHAJI NAGAR, TALANDAGE -416236', 2147483647, 'waewwerew', 'SY', 'Java', '2023-12-27', '0'),
(5, 'asdf', 'dffvgfd', 2147483647, 'ewer', 'FY', 'Python', '2023-12-28', '0'),
(6, 'adwdwa', 'dfser', 2147483647, 'sdas', 'SY', 'C++', '2023-12-28', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdetails`
--

CREATE TABLE `teacherdetails` (
  `Id` int(100) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `JoinDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Qualification` varchar(50) DEFAULT NULL,
  `Experience` varchar(50) DEFAULT NULL,
  `DateOB` date DEFAULT NULL,
  `Mobile` int(13) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherdetails`
--

INSERT INTO `teacherdetails` (`Id`, `FullName`, `Address`, `JoinDate`, `EndDate`, `Qualification`, `Experience`, `DateOB`, `Mobile`, `Gender`) VALUES
(1, 'MULLA ASIF AKBAR', 'SAMBHAJI NAGAR, TALANDAGE -416236', '2023-12-19', '2024-04-10', 'BCS', '1', '2023-12-28', 2147483647, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
