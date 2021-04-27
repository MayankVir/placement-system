-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 12:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpdrive`
--

CREATE TABLE `addpdrive` (
  `CompanyName` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `10th` float NOT NULL,
  `12th` float NOT NULL,
  `BE` float NOT NULL,
  `Backlogs` int(11) NOT NULL,
  `HofBacklogs` tinyint(1) NOT NULL,
  `DetainYears` int(11) NOT NULL,
  `ODetails` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addpdrive`
--

INSERT INTO `addpdrive` (`CompanyName`, `Date`, `10th`, `12th`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `ODetails`) VALUES
('Accolite Pvt Ltd', '2021-04-28', 70, 70, 70, 0, 0, 0, 'https://eduthrill.com/accolite-campus-hiring/'),
('Adobe', '2021-04-01', 70, 70, 70, 0, 0, 0, 'Apply Here'),
('Amazon', '2020-04-01', 80, 80, 80, 0, 0, 0, 'Apply Here'),
('Google', '2020-05-01', 75, 75, 75, 0, 0, 0, 'Apply Here'),
('Microsoft', '2021-01-04', 75, 75, 75, 0, 0, 0, 'Apply Here');

-- --------------------------------------------------------

--
-- Table structure for table `basicdetails`
--

CREATE TABLE `basicdetails` (
  `Id` int(11) NOT NULL,
  `First Name` varchar(25) NOT NULL,
  `Last Name` varchar(25) NOT NULL,
  `UID` varchar(9) NOT NULL,
  `Mobile` bigint(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `DOB` date NOT NULL,
  `Sem` int(11) NOT NULL,
  `Branch` varchar(5) NOT NULL,
  `10th` float NOT NULL,
  `12th` float NOT NULL,
  `BE` float NOT NULL,
  `Backlogs` int(11) NOT NULL,
  `HofBacklogs` tinyint(1) NOT NULL,
  `DetainYears` int(11) NOT NULL,
  `Approve` tinyint(1) NOT NULL,
  `ApprovalDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basicdetails`
--

INSERT INTO `basicdetails` (`Id`, `First Name`, `Last Name`, `UID`, `Mobile`, `Email`, `DOB`, `Sem`, `Branch`, `10th`, `12th`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `Approve`, `ApprovalDate`) VALUES
(1, 'Mayank', 'Virmani', '18BCS6001', 9999955555, '18bcs6001@gmail.com', '2000-04-01', 6, 'CSE', 70, 70, 70, 0, 0, 0, 1, '2021-04-01'),
(2, 'Shaurya', 'Gulati', '18BCS6002', 9999977777, '18bcs6002@gmail.com', '2000-04-01', 6, 'CSE', 75, 75, 80, 0, 0, 0, 1, '2021-04-01'),
(3, 'Arghadip', 'Ghosh', '18BCS6003', 7777755555, '18bcs6003@gmail.com', '2000-04-01', 6, 'IT', 70, 70, 70, 0, 0, 0, 1, '2021-04-01'),
(4, 'Shrey', 'Nagpal', '18BCS6004', 7777788888, '18bcs6004@gmail.com', '2000-04-01', 6, 'IT', 75, 75, 75, 0, 0, 0, 1, '2021-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `basicdetails1`
--

CREATE TABLE `basicdetails1` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `Mobile` bigint(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Sem` int(11) NOT NULL,
  `Branch` varchar(15) NOT NULL,
  `10th` float NOT NULL,
  `12th` float NOT NULL,
  `BE` float NOT NULL,
  `Backlogs` int(11) NOT NULL,
  `HofBacklogs` tinyint(1) NOT NULL,
  `DetainYears` int(11) NOT NULL,
  `Approve` tinyint(1) NOT NULL DEFAULT 0,
  `ApprovalDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basicdetails1`
--

INSERT INTO `basicdetails1` (`Id`, `FirstName`, `LastName`, `USN`, `Mobile`, `Email`, `DOB`, `Sem`, `Branch`, `10th`, `12th`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `Approve`, `ApprovalDate`) VALUES
(1, 'veda', 'kumar', '1cg13is400', 11111, 'v@gmil.comk', '2015-06-09', 1, 'ME', 70, 70, 70, 0, 0, 0, 1, '2020-04-01'),
(2, 'vastala', 'hs', '1cg13cs400', 22222, 'vhs@gmil.com', '1996-03-08', 2, 'CSE', 75, 75, 70, 0, 0, 0, 1, '2020-04-01'),
(3, 'ragini', 'mn', '1cg12is001', 33333, 'r@gmail.com', '1991-01-28', 6, 'CVL', 55, 55, 55, 0, 0, 0, 1, '2020-04-01'),
(4, 'Punith', 'raj kumar', '1cg12cs002', 66666, 'p@gmail.com', '1991-02-13', 8, 'CSE', 85, 85, 85, 0, 0, 0, 1, '0000-00-00'),
(5, 'Manvith', 'kumar', '1cg12cv001', 7777, 'mk@gmail.com', '1998-05-31', 7, 'IT', 99, 99, 99, 0, 0, 0, 0, '0000-00-00'),
(6, 'Harsha', 'M S', '1cg12ee001', 88888, 'h@gmail.com', '1999-01-04', 8, 'EEE', 99, 99, 99, 0, 0, 0, 0, '0000-00-00'),
(7, 'Tejaswini', 'T L', '1cg12cv002', 99999, 't@gmil.com', '1997-08-13', 4, 'IT', 65, 65, 65, 0, 0, 0, 0, '0000-00-00'),
(8, 'Ashraf', 'Unissa', '1cg12ee005', 10000, 'au@gmail.com', '1992-10-23', 4, 'EEE', 55, 55, 55, 0, 0, 0, 0, '0000-00-00'),
(9, 'Roja', 'Bai', '1cg12is009', 20000, 'rb@gmail.com', '1997-04-28', 4, 'ME', 66, 63, 62, 0, 0, 0, 1, '2020-04-01'),
(10, 'Mayank', 'Virmani', '1cg12cs031', 40000, 'y@gmail.com', '2000-06-13', 5, 'CSE', 41, 45, 45, 0, 0, 0, 1, '0000-00-00'),
(11, 'rahul', 'khanna', '1cg13is401', 2147483647, 'rr@gmail.com', '2015-07-02', 4, 'ME', 77, 66, 77, 0, 0, 0, 1, '2020-04-01'),
(12, 'Vishruth', 'Harithsa', '1cg12is094', 9880796862, 'harithsa@aol.com', '1994-10-22', 6, 'ECE', 91, 70, 50, 5, 0, 1, 1, '2020-04-01'),
(13, 'Neil', 'Armstrong', '1cg12is000', 2147483647, 'armstrong@neil.com', '2015-07-23', 7, 'ECE', 100, 100, 100, 0, 0, 0, 1, '2020-04-01'),
(14, 'Vishruth', 'Harithsa', '1cg12is011', 9880796862, 'harithsa@aol.com', '2015-08-21', 6, 'CVL', 40, 70, 50, 5, 0, 1, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `Subject` varchar(1000) NOT NULL,
  `Message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`Subject`, `Message`) VALUES
('Hey Peeps', 'Work Hard');

-- --------------------------------------------------------

--
-- Table structure for table `plogin`
--

CREATE TABLE `plogin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plogin`
--

INSERT INTO `plogin` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`) VALUES
(1, 'Anurag', 'anurag', '12345', 'anurag@gmail.com', 'What is your nickname?', 'anurag');

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE `slogin` (
  `id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `UID` varchar(10) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`id`, `Name`, `UID`, `PASSWORD`, `Email`, `Question`, `Answer`) VALUES
(1, 'Mayank', '18BCS6001', '6001', '18bcs6001@gmail.com', 'What is your fav sport?', 'cricket'),
(2, 'Shaurya', '18BCS6002', '6002', '18bcs6002@gmail.com', 'What is your fav sport?', 'cricket'),
(3, 'Arghadip', '18BCS6003', '6003', '18bcs6003@gmail.com', 'What is your fav sport?', 'cricket'),
(4, 'Shrey', '18BCS6004', '6004', '18bcs6004@gmail.com', 'What is your fav sport?', 'cricket'),
(5, 'Raghav', '18BCS6005', '6005', '18bcs6005@gmail.com', 'What is your fav sport?', 'cricket');

-- --------------------------------------------------------

--
-- Table structure for table `updatedrive`
--

CREATE TABLE `updatedrive` (
  `Id` int(11) NOT NULL,
  `UID` varchar(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Attendence` tinyint(1) NOT NULL DEFAULT 0,
  `WT` tinyint(1) NOT NULL DEFAULT 0,
  `GD` tinyint(1) NOT NULL DEFAULT 0,
  `Techical` tinyint(1) NOT NULL DEFAULT 0,
  `Placed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updatedrive`
--

INSERT INTO `updatedrive` (`Id`, `UID`, `Name`, `CompanyName`, `Date`, `Attendence`, `WT`, `GD`, `Techical`, `Placed`) VALUES
(1, '18BCS6001', 'Mayank', 'Adobe', '2021-04-01', 1, 1, 1, 1, 1),
(2, '18BCS6002', 'Shaurya', 'Google', '2020-05-01', 1, 1, 1, 1, 1),
(3, '18BCS6003', 'Arghadip', 'Microsoft', '2021-01-04', 1, 1, 1, 1, 1),
(4, '18BCS6004', 'Shrey', 'Amazon', '2020-04-01', 1, 1, 1, 1, 1),
(5, '18BCS6005', 'Raghav', 'Apple', '2021-01-10', 1, 1, 1, 1, 1),
(6, '18BCS6006', 'Amit', 'Facebook', '2021-01-05', 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpdrive`
--
ALTER TABLE `addpdrive`
  ADD PRIMARY KEY (`CompanyName`);

--
-- Indexes for table `basicdetails`
--
ALTER TABLE `basicdetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `basicdetails1`
--
ALTER TABLE `basicdetails1`
  ADD PRIMARY KEY (`Id`,`USN`),
  ADD UNIQUE KEY `USN` (`USN`,`Mobile`,`Email`);

--
-- Indexes for table `plogin`
--
ALTER TABLE `plogin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `USN` (`UID`,`Email`);

--
-- Indexes for table `updatedrive`
--
ALTER TABLE `updatedrive`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basicdetails`
--
ALTER TABLE `basicdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `basicdetails1`
--
ALTER TABLE `basicdetails1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `plogin`
--
ALTER TABLE `plogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slogin`
--
ALTER TABLE `slogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `updatedrive`
--
ALTER TABLE `updatedrive`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `updatedrive`
--
ALTER TABLE `updatedrive`
  ADD CONSTRAINT `updatedrive_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `basicdetails1` (`USN`) ON DELETE CASCADE,
  ADD CONSTRAINT `updatedrive_ibfk_2` FOREIGN KEY (`CompanyName`,`Date`) REFERENCES `addpdrive` (`CompanyName`, `Date`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
