-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 04:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajfarmadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `calllog`
--

CREATE TABLE `calllog` (
  `id` int(50) NOT NULL,
  `CallType` int(10) DEFAULT NULL,
  `Callpname` varchar(20) DEFAULT NULL,
  `EmpName` varchar(20) DEFAULT NULL,
  `Calldate` date DEFAULT NULL,
  `CallReasoanType` varchar(20) DEFAULT NULL,
  `CallTime` time DEFAULT NULL,
  `NextFollowDate` date DEFAULT NULL,
  `CallDescription` varchar(30) DEFAULT NULL,
  `Feedback` varchar(30) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `calllog`
--

INSERT INTO `calllog` (`id`, `CallType`, `Callpname`, `EmpName`, `Calldate`, `CallReasoanType`, `CallTime`, `NextFollowDate`, `CallDescription`, `Feedback`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 1, 'Sample', 'Sample', '2024-09-06', '2', '01:11:00', NULL, NULL, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-06 18:21:23'),
(2, 2, 'second', 'second', '2024-09-06', '1', '02:19:00', NULL, NULL, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-06 18:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `callreasoandropdown`
--

CREATE TABLE `callreasoandropdown` (
  `ID` int(11) NOT NULL,
  `CallResType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `callreasoandropdown`
--

INSERT INTO `callreasoandropdown` (`ID`, `CallResType`) VALUES
(1, 'Mobile'),
(2, 'Phone');

-- --------------------------------------------------------

--
-- Table structure for table `calltypedropdown`
--

CREATE TABLE `calltypedropdown` (
  `ID` int(10) NOT NULL,
  `Calltype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calltypedropdown`
--

INSERT INTO `calltypedropdown` (`ID`, `Calltype`) VALUES
(1, 'Mobile'),
(2, 'Phone');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(50) NOT NULL,
  `ComplainName` varchar(100) DEFAULT NULL,
  `Mobile` int(100) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `ComplainName`, `Mobile`, `Date`, `Description`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'cccc', 987645321, '2024-09-07', '   cccccc                                      ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-06 19:47:04'),
(2, 'asdfccc', 789456231, '2024-09-07', '                                         sdfsdfsccc', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-07 08:39:41'),
(3, 'awer ccc', 987645312, '2024-09-07', '                              sdfg           ', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-07 08:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `ennn`
--

CREATE TABLE `ennn` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ennn`
--

INSERT INTO `ennn` (`ID`, `Name`) VALUES
(1, 'Raj'),
(2, 'Vardhan');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(50) NOT NULL,
  `EnquiryName` varchar(50) DEFAULT NULL,
  `EnquiryTime` time DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `ReferenceType` varchar(100) DEFAULT NULL,
  `ReferenceName` varchar(100) DEFAULT NULL,
  `ReferenceNo` int(100) DEFAULT NULL,
  `EnquiryReason` varchar(100) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `EnquiryName`, `EnquiryTime`, `Date`, `ReferenceType`, `ReferenceName`, `ReferenceNo`, `EnquiryReason`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'c', '09:25:00', '2024-09-04', '2', 'c', 3, 'c', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-10 03:53:34'),
(2, 'sss', '10:29:00', '2024-07-10', '2', 'dd', 11, 'aaa', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-10 03:59:58'),
(3, 'c', '09:43:00', '2024-09-06', '1', 'cc', 336, 'c', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-10 04:12:26'),
(4, 'rrrr', '18:16:00', '2024-09-14', '2', 'kkkk', 0, ' oreiuqwe[or', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-17 12:45:33'),
(5, 'sssz', '09:25:00', '2024-09-04', '1', 'sss', 222, '                                    dsh', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-04 11:46:33'),
(6, 'ssszzz', '09:25:00', '2024-09-04', '1', 'ssszzzz', 222, '                                    zzz', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-04 11:50:36'),
(7, 'sssccc', '09:25:00', '2024-09-04', '1', 'sss', 2226, '                                    cccc', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-04 11:53:18'),
(8, 'ssscvdf', '09:25:00', '2024-09-04', '2', 'sssdf', 222, '                                    df', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-04 11:59:27'),
(9, 'sssvvv', '09:25:00', '2024-09-04', '1', 'sssbfs', 222, '                                    mv', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-04 12:01:16'),
(10, 'sssqqqq', '09:25:00', '2024-09-04', '1', 'sssq', 222, '                                    q', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-04 12:06:29'),
(11, 'c', '09:43:00', '2024-09-04', '2', 'c', 3, '                                    c', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-09-04 12:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int(11) NOT NULL,
  `EquipmentName` varchar(100) NOT NULL,
  `EquipmentCode` varchar(100) NOT NULL,
  `EquipmentCategory` int(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `WareHouseName` int(100) NOT NULL,
  `Maintainace` int(100) NOT NULL,
  `MaintainaceDuration` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `EquipmentName`, `EquipmentCode`, `EquipmentCategory`, `Description`, `WareHouseName`, `Maintainace`, `MaintainaceDuration`) VALUES
(1, 'refrigirator', 'whrfrgtr234123', 0, 'for very low temperature', 3, 1, 2),
(2, 'heater', 'whhtr543423', 0, 'for higher room temperature', 2, 1, 4),
(3, 'ac', 'whaac', 0, ' room temperatur controller', 3, 1, 3),
(4, 'heater', 'whhtr54342343', 0, '  for higher room temperature', 2, 1, 4),
(5, 'heater', 'whhtr555', 0, '    for higher room temperature', 3, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `equipmentsmaintenance`
--

CREATE TABLE `equipmentsmaintenance` (
  `id` int(11) NOT NULL,
  `Equipment` int(100) NOT NULL,
  `MaintenanceDetail` varchar(100) NOT NULL,
  `MaintenanceDate` date NOT NULL,
  `NextMaintenanceDate` date NOT NULL,
  `Remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipmentsmaintenance`
--

INSERT INTO `equipmentsmaintenance` (`id`, `Equipment`, `MaintenanceDetail`, `MaintenanceDate`, `NextMaintenanceDate`, `Remark`) VALUES
(1, 2, '  chage the coil ', '2024-09-10', '2028-07-14', '  not working properly');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE `exp` (
  `Id` int(11) NOT NULL,
  `experience` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`Id`, `experience`) VALUES
(1, '1year'),
(2, '2year'),
(3, '3year'),
(4, '4year'),
(5, '5year');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `CustomerName` varchar(100) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Barcode` varchar(100) DEFAULT NULL,
  `Id` int(11) NOT NULL,
  `ProductName` varchar(111) DEFAULT NULL,
  `Unit` varchar(100) DEFAULT NULL,
  `Batch` varchar(100) DEFAULT NULL,
  `ExpiryDate` date DEFAULT NULL,
  `Rate` varchar(20) DEFAULT NULL,
  `Qty` varchar(20) DEFAULT NULL,
  `FreeQty` varchar(20) DEFAULT NULL,
  `Amount` varchar(20) DEFAULT NULL,
  `TotalAmount` varchar(20) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`CustomerName`, `Date`, `Barcode`, `Id`, `ProductName`, `Unit`, `Batch`, `ExpiryDate`, `Rate`, `Qty`, `FreeQty`, `Amount`, `TotalAmount`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(NULL, NULL, 'qq', 1, 'MP', 'MP', 'PM', '2024-07-06', 'qq', 'qq', 'qq', 'qq', 'qq', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-06 16:26:56'),
(NULL, NULL, 'aaa', 2, 'PM', 'PM', 'PM', '2024-07-06', 'aa', 'aa', 'aa', 'aa', 'aa', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-06 16:27:37');

-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

CREATE TABLE `pass` (
  `id` int(50) NOT NULL,
  `PersonName` varchar(100) DEFAULT NULL,
  `GateInDate` date DEFAULT NULL,
  `GateInTime` time DEFAULT current_timestamp(),
  `Reason` varchar(100) DEFAULT NULL,
  `DriverName` varchar(50) DEFAULT NULL,
  `Mobile` int(10) DEFAULT NULL,
  `VehicleName` varchar(50) DEFAULT NULL,
  `VehicleNo` varchar(10) DEFAULT NULL,
  `GateOutDate` date DEFAULT NULL,
  `GateOutTime` time DEFAULT NULL,
  `FrontPhoto` blob DEFAULT NULL,
  `BackPhoto` blob DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`id`, `PersonName`, `GateInDate`, `GateInTime`, `Reason`, `DriverName`, `Mobile`, `VehicleName`, `VehicleNo`, `GateOutDate`, `GateOutTime`, `FrontPhoto`, `BackPhoto`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'fdfdf', '2024-07-14', '16:29:00', 'eeeee', 'ddddd', 2147483647, 'eeeee', '0', '2024-07-14', '16:30:00', NULL, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-14 10:56:40'),
(2, 'aaaa', '2024-07-14', '16:29:00', 'aaaa', 'aaaa', 1111111111, 'aaaaaa', 'mh06dm1020', '2024-07-14', '16:28:00', NULL, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-14 10:58:55'),
(3, 'fffff', '2024-07-15', '10:15:00', 'fffff', 'ggg', 33, 'mmm', '54fffj', '2024-07-15', '10:18:00', NULL, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-15 04:44:57'),
(4, 'sss', '2024-07-15', '11:29:00', 'www', 'wwww', 222, 'www', '33dd', '2024-07-15', '11:31:00', NULL, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-15 05:57:28'),
(5, 'fgfaryartratgatgrgr', '2024-07-18', '10:50:00', 'tgtrtrra', 'artrta', 4444, 'gar', '4gagrfg', '2024-07-18', '10:54:00', NULL, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-18 05:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `patientdetails`
--

CREATE TABLE `patientdetails` (
  `PatientName` varchar(200) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `PatientHistory` varchar(200) DEFAULT NULL,
  `Remark` varchar(200) DEFAULT NULL,
  `FrameUses` varchar(20) DEFAULT NULL,
  `Type` varchar(200) DEFAULT NULL,
  `Unit` varchar(200) DEFAULT NULL,
  `GlassType` varchar(200) DEFAULT NULL,
  `id` int(50) NOT NULL,
  `BIllAmount` text DEFAULT NULL,
  `firstPaymentMode` varchar(30) DEFAULT NULL,
  `firstAmount` int(30) DEFAULT NULL,
  `secondPaymentMode` varchar(50) DEFAULT NULL,
  `secondAmount` int(11) DEFAULT NULL,
  `thirdPaymentMode` varchar(50) DEFAULT NULL,
  `thirdAmount` int(11) DEFAULT NULL,
  `forthPaymentMode` varchar(50) DEFAULT NULL,
  `forthAmount` int(11) DEFAULT NULL,
  `remainingAmount` int(11) DEFAULT NULL,
  `TotalPaidAmount` int(11) DEFAULT NULL,
  `Note` varchar(200) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `patientdetails`
--

INSERT INTO `patientdetails` (`PatientName`, `Date`, `PatientHistory`, `Remark`, `FrameUses`, `Type`, `Unit`, `GlassType`, `id`, `BIllAmount`, `firstPaymentMode`, `firstAmount`, `secondPaymentMode`, `secondAmount`, `thirdPaymentMode`, `thirdAmount`, `forthPaymentMode`, `forthAmount`, `remainingAmount`, `TotalPaidAmount`, `Note`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
('DCM', '2024-07-06', NULL, 'MP', 'PM', 'MP', 'MP', 'MP', 1, '11', 'Offline', 11, 'MP', 11, 'MP', 11, 'MP', 11, 11, 11, 'www', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-06 18:37:15'),
('PM', '2024-07-07', NULL, 'MP', 'MP', '0', 'PM', 'PM', 2, '11', 'Online', 11, 'PM', 11, 'PM', 11, 'MP', 11, 11, 11, 'qqq', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-07 07:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `postaldispatchdetails`
--

CREATE TABLE `postaldispatchdetails` (
  `Id` int(50) NOT NULL,
  `OutwordNo` int(100) DEFAULT NULL,
  `OutwordLetterNo` int(100) DEFAULT NULL,
  `OutwordDate` date DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Place` varchar(50) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `IncomingNumber` int(50) DEFAULT NULL,
  `IncomingDate` date DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `Remark` varchar(50) DEFAULT NULL,
  `PostalCharges` int(50) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `postaldispatchdetails`
--

INSERT INTO `postaldispatchdetails` (`Id`, `OutwordNo`, `OutwordLetterNo`, `OutwordDate`, `Name`, `Place`, `Address`, `IncomingNumber`, `IncomingDate`, `subject`, `Remark`, `PostalCharges`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 11, 11, '2024-07-07', 'qq', 'Kolhapur', 'qq', 11, '2024-07-18', 'qq                                    ', 'qq                                    ', 11, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-07 08:36:01'),
(2, 22, 22, '2024-07-07', 'ww', 'Mumbai', 'ww', 22, '2024-07-26', 'ww                                    ', 'ww                                    ', 22, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-07 08:36:39'),
(3, NULL, NULL, NULL, 'gesgag', 'Kolhapur', 'asdfdfdafd', 3333, '2024-07-18', '                                    fgfgsfgsgfsgf', '                       gfggfg             ', 444, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-19 06:44:35'),
(4, NULL, NULL, NULL, 'sss', 'Kolhapur', 'sss', 333, '2024-08-01', '                                 qqq   ', '                             aaa       ', 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-19 06:45:40'),
(5, NULL, NULL, NULL, 'sss', 'Kolhapur', 'fff', 333, '2024-07-25', '                                   ddfd ', '                                    fdf', 33, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-19 06:47:59'),
(6, NULL, NULL, NULL, 'ss', 'Kolhapur', 'aa', 22, '2024-07-25', '                         dd           ', '             qq                       ', 11, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-19 06:51:23'),
(7, 11, 22, '2024-07-19', 'aa', 'Kolhapur', 'aa', 11, '2024-07-23', ' aa                                   ', ' aa                                   ', 11, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-19 06:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `postalrecieve`
--

CREATE TABLE `postalrecieve` (
  `Id` int(11) NOT NULL,
  `InwordNo` int(50) DEFAULT NULL,
  `InwordLetterNo` int(50) DEFAULT NULL,
  `InwordDate` date DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Place` varchar(20) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `InNoReference` int(11) DEFAULT NULL,
  `InDateReference` date DEFAULT NULL,
  `SubjectOfCorres` varchar(50) DEFAULT NULL,
  `Remark` varchar(50) DEFAULT NULL,
  `PostalCharges` int(100) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quali`
--

CREATE TABLE `quali` (
  `Id` int(11) NOT NULL,
  `qualification` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quali`
--

INSERT INTO `quali` (`Id`, `qualification`) VALUES
(1, 'BSC'),
(2, 'BCS'),
(3, 'BBA'),
(4, 'BCA'),
(5, 'BSCCS');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Id` bigint(50) NOT NULL,
  `BranchName` varchar(50) DEFAULT NULL,
  `EmployeeName` varchar(50) DEFAULT NULL,
  `Message` varchar(250) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `ReferenceType` varchar(30) DEFAULT NULL,
  `ReferenceName` varchar(50) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Id`, `BranchName`, `EmployeeName`, `Message`, `Date`, `ReferenceType`, `ReferenceName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'qqqq', 'qqq', 'qqqq', '2024-07-06', 'Mla', 'qqqq', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-06 04:48:17'),
(2, '111', '111', '11', '2024-07-06', 'Mla', '111', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-06 16:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Id` int(10) NOT NULL,
  `FullName` varchar(20) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `Mobile` int(10) DEFAULT NULL,
  `Email` varchar(10) DEFAULT NULL,
  `Std` varchar(10) DEFAULT NULL,
  `Subject` varchar(10) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Id`, `FullName`, `Address`, `Mobile`, `Email`, `Std`, `Subject`, `DOB`, `Gender`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'qqqq', 'qqqq', 11111, 'aaaaa', 'FY', 'C', '2024-07-05', 'Male', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-03 06:06:13'),
(2, 'qqqq', 'qqqqq', 1111, 'qqqqq', 'SY', 'Java', '2024-07-11', 'Male', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-06 04:15:09'),
(3, '111', '22', 22, '22', NULL, 'C', '2024-08-01', 'Male', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-10 05:41:12'),
(4, 'ss', 'sss', 22, 'ww', '1', 'C++', '2024-07-04', 'Male', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-10 06:03:49'),
(5, 'qq', 'qqq', 22, 'sss', '2', 'Python', '2024-07-18', 'Male', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-10 06:05:02'),
(6, 'ddd', 'ddd', 33, 'eee', '2', 'Java', '2024-07-17', 'Male', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-10 06:14:13'),
(7, 'aaa', 'aaa', 22, 'aa', '1', '3', '2024-07-19', 'Male', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-10 06:38:28'),
(8, 'Karan', 'Add43ss', 123, 'dfdf', '2', '4', '2024-08-01', 'Male', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-10 10:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `suub`
--

CREATE TABLE `suub` (
  `Id` int(11) NOT NULL,
  `Sub` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suub`
--

INSERT INTO `suub` (`Id`, `Sub`) VALUES
(1, 'Python'),
(2, 'C++'),
(3, 'Java'),
(4, 'Data Structure');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Id` int(20) NOT NULL,
  `FullName` varchar(20) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `JoinDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Qualification` varchar(10) DEFAULT NULL,
  `Experience` varchar(10) DEFAULT NULL,
  `DateOB` date DEFAULT NULL,
  `Mobile` int(10) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Id`, `FullName`, `Address`, `JoinDate`, `EndDate`, `Qualification`, `Experience`, `DateOB`, `Mobile`, `Gender`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'raja', 'qwer', '2024-07-03', '2024-07-17', 'BA', '4', '2024-07-12', 23456, 'Male', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-03 05:05:26'),
(2, 'omya', 'qwerty', '2024-07-03', '2024-07-06', 'BCA', '5', '2024-07-13', 1234, 'Male', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-03 05:06:00'),
(3, 'qqwww', 'qqqq', '2024-07-03', '2024-07-20', 'BSC', '5', '2024-07-13', 222222, 'Male', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-03 05:48:35'),
(4, 'jfdfjdf', 'dfdfd', '2024-07-10', '2024-07-22', '4', '3', '2024-08-07', 333, 'Male', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-10 10:56:50'),
(5, 'karan', 'karan', '2024-07-10', '2024-08-01', '2', '4', '2024-07-25', 9999999, 'Male', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-10 11:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdetails`
--

CREATE TABLE `teacherdetails` (
  `Id` int(11) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `JoinDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Experience` varchar(20) NOT NULL,
  `DateOB` date NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherdetails`
--

INSERT INTO `teacherdetails` (`Id`, `FullName`, `Address`, `JoinDate`, `EndDate`, `Qualification`, `Experience`, `DateOB`, `Mobile`, `Gender`) VALUES
(1, 'User1', 'kolhapur', '2024-06-30', '2024-06-30', 'MCA', '2 years', '2024-06-30', 1010101010, 'Male'),
(2, 'qwert', 'qwert', '2024-06-30', '2024-07-31', 'BCS', '1', '2024-07-31', 1234, 'Male'),
(3, 'qwer', 'qaz', '2024-06-30', '2024-06-25', 'Btech', '3', '2024-06-30', 123, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `id` int(50) NOT NULL,
  `VisitorName` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `TimeIn` time DEFAULT NULL,
  `TimeOut` time DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Reasone` varchar(200) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`id`, `VisitorName`, `date`, `TimeIn`, `TimeOut`, `Address`, `Reasone`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'ddddd', '2024-07-14', '18:05:00', '22:04:00', 'ddd', 'ddd', 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-14 12:34:42');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `WarehouseName` varchar(100) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `ContactPersonName` varchar(100) DEFAULT NULL,
  `Contact1` varchar(15) DEFAULT NULL,
  `Contact2` varchar(15) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `WarehouseName`, `Location`, `ContactPersonName`, `Contact1`, `Contact2`, `Email`) VALUES
(1, 'Vishwajeet', ' Kolhapur Vetal Mal talim', 'Vishwajeet Chavan', '8698956262', '8698951020', 'vishwajeet1020@gmail.com'),
(2, 'Vishwajeet chavan', 'Kolhapur Vetal Mal', 'Vishwajeet Chavan', '8698956262', '8698951020', 'vishwajeet1020@gmail.com'),
(3, 'Rajvardhan Shete', '  A/Padal Tel- Panhala Dist-Kolhapur', 'Rajvardhan Shete', '9607167716', '9767279265', 'rajvardhans2223@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`Id`, `Name`) VALUES
(1, 'fy'),
(2, 'sy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calllog`
--
ALTER TABLE `calllog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `callreasoandropdown`
--
ALTER TABLE `callreasoandropdown`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `calltypedropdown`
--
ALTER TABLE `calltypedropdown`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ennn`
--
ALTER TABLE `ennn`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `WareHouseName` (`WareHouseName`);

--
-- Indexes for table `equipmentsmaintenance`
--
ALTER TABLE `equipmentsmaintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pass`
--
ALTER TABLE `pass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientdetails`
--
ALTER TABLE `patientdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postaldispatchdetails`
--
ALTER TABLE `postaldispatchdetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `postalrecieve`
--
ALTER TABLE `postalrecieve`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `quali`
--
ALTER TABLE `quali`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `suub`
--
ALTER TABLE `suub`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- Indexes for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calllog`
--
ALTER TABLE `calllog`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `callreasoandropdown`
--
ALTER TABLE `callreasoandropdown`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ennn`
--
ALTER TABLE `ennn`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `equipmentsmaintenance`
--
ALTER TABLE `equipmentsmaintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exp`
--
ALTER TABLE `exp`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pass`
--
ALTER TABLE `pass`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patientdetails`
--
ALTER TABLE `patientdetails`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `postaldispatchdetails`
--
ALTER TABLE `postaldispatchdetails`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `postalrecieve`
--
ALTER TABLE `postalrecieve`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quali`
--
ALTER TABLE `quali`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `suub`
--
ALTER TABLE `suub`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `equipments`
--
ALTER TABLE `equipments`
  ADD CONSTRAINT `equipments_ibfk_1` FOREIGN KEY (`WareHouseName`) REFERENCES `warehouse` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
