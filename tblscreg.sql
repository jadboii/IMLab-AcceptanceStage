-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 04:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seniorcitizens`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblscreg`
--

CREATE TABLE `tblscreg` (
  `ResidentID` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `BirthDate` text NOT NULL,
  `IdType` varchar(255) NOT NULL,
  `IdNum` int(11) NOT NULL,
  `IssuedName` varchar(255) NOT NULL,
  `IssuedState` varchar(255) NOT NULL,
  `IssuedDate` text NOT NULL,
  `ExpiryDate` text NOT NULL,
  `AddressType` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `HouseNum` int(11) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `MotherName` varchar(255) NOT NULL,
  `EmergencyContNum` int(11) NOT NULL,
  `ContactName` varchar(255) NOT NULL,
  `Relationship` varchar(255) NOT NULL,
  `BloodType` varchar(255) NOT NULL,
  `ScNum` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblscreg`
--

INSERT INTO `tblscreg` (`ResidentID`, `LastName`, `FirstName`, `MiddleName`, `Age`, `Gender`, `BirthDate`, `IdType`, `IdNum`, `IssuedName`, `IssuedState`, `IssuedDate`, `ExpiryDate`, `AddressType`, `Nationality`, `Province`, `City`, `Street`, `HouseNum`, `FatherName`, `MotherName`, `EmergencyContNum`, `ContactName`, `Relationship`, `BloodType`, `ScNum`, `Status`) VALUES
(2, 'asdasd', 'asdasd', 'asdasd', 19, 'Male', '2023-06-01', 'Drivers License', 1231231, 'asa', 'asfasf', '2023-05-04', '2023-05-06', 'asdas', 'asdas', 'asda', 'sadasda', '12451', 123, 'zxcz', 'zxcz', 0, 'qwrgq', 'asdas', 'zxc', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblscreg`
--
ALTER TABLE `tblscreg`
  ADD PRIMARY KEY (`ResidentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblscreg`
--
ALTER TABLE `tblscreg`
  MODIFY `ResidentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
