-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 05:25 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- Table structure for table `addpdrive`
--

CREATE TABLE `addpdrive` (
  `CompanyName` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `C/P` tinyint(1) NOT NULL DEFAULT 0,
  `PVenue` varchar(255) NOT NULL,
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

INSERT INTO `addpdrive` (`CompanyName`, `Date`, `C/P`, `PVenue`, `10th`, `12th`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `ODetails`) VALUES
('Android', '2015-06-26', 1, 'GIT', 60, 65, 65, 0, 0, 0, '0'),
('Apple', '2015-08-21', 0, 'GIT', 98, 98, 90, 0, 0, 0, '0'),
('DELL', '2015-07-04', 0, 'GIT', 0, 55, 55, 0, 0, 0, '0'),
('HP', '2013-08-19', 1, 'GIT', 70, 75, 75, 0, 0, 0, '0'),
('IBM', '2015-05-12', 0, 'GIT', 60, 65, 65, 0, 0, 0, '0'),
('Infosys', '2015-01-10', 0, 'GIT', 60, 60, 60, 0, 0, 0, '0'),
('Intel', '2013-09-08', 0, 'GIT', 60, 65, 65, 0, 0, 0, '0'),
('LENOVO', '2014-09-30', 1, 'GIT', 65, 65, 65, 0, 0, 0, '0'),
('MI', '2013-03-24', 0, 'GIT', 60, 60, 65, 0, 0, 0, '0'),
('Microsoft company', '2020-01-01', 0, 'GIT', 60, 65, 65, 0, 0, 0, '0'),
('Skype', '2020-01-01', 1, 'GIT', 75, 75, 75, 0, 0, 0, '0'),
('Tata Consultency Services', '2020-01-01', 1, 'GIT', 65, 70, 75, 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `basicdetails`
--

CREATE TABLE `basicdetails` (
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
-- Dumping data for table `basicdetails`
--

INSERT INTO `basicdetails` (`Id`, `FirstName`, `LastName`, `USN`, `Mobile`, `Email`, `DOB`, `Sem`, `Branch`, `10th`, `12th`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `Approve`, `ApprovalDate`) VALUES
(1, 'kishan', 'patel', '1cg13is400', 11111, 'kishan@gmail.com', '2000-01-01', 8, 'CE', 70, 70, 70, 0, 0, 0, 1, '2015-06-26'),
(2, 'karan', 'shah', '1cg13cs400', 22222, 'karan@gmail.com', '2000-01-01', 8, 'CE', 70, 70, 70, 0, 0, 0, 1, '2013-08-19'),
(3, 'khantil', 'khokhani', '1cg12cs002', 33333, 'khantil@gmail.com', '2000-01-01', 8, 'CE', 70, 70, 70, 0, 0, 0, 0, '2015-05-12'),
(4, 'jahnavi', 'makwana', '1cg12cv001', 44444, 'jahnavi@gmail.com', '2000-01-01', 8, 'CE', 70, 70, 70, 0, 0, 0, 0, '2015-01-10'),
(5, 'bharti', 'malvi', '1cg12is000', 55555, 'bharti@gmail.com', '2000-01-01', 8, 'CE', 70, 70, 70, 0, 0, 0, 1, '2015-01-01'),
(6, 'jayasudha', 'mudaliar', '1cg12is011', 66666, 'jayasudha@gmail.com', '2000-01-01', 8, 'CE', 70, 70, 70, 0, 0, 0, 0, '2015-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `hlogin`
--

CREATE TABLE `hlogin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  `Branch` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hlogin`
--

INSERT INTO `hlogin` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`, `Branch`) VALUES
(1, 'HOD', 'HOD', '123456', 'HOD@gmail.com', 'What is your fav spot?', 'Bangalore', 'CE');

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
(1, 'khantil', 'khantil', 'khantil', 'khantil@gmail.com', 'What is your fav spot?', 'dubai');

-- --------------------------------------------------------

--
-- Table structure for table `prilogin`
--

CREATE TABLE `prilogin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prilogin`
--

INSERT INTO `prilogin` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`) VALUES
(1, 'khantil', 'khantil', '123456', 'khantil@gmail.com', 'What is your fav spot?', 'dubai');

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE `slogin` (
  `id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`id`, `Name`, `USN`, `PASSWORD`, `Email`, `Question`, `Answer`) VALUES
(1, 'kishan', '1cg13is400', '123', 'kishan@gmail.com', 'What is your fav spot?', 'antartica'),
(2, 'karan', '1cg13cs400', '123', 'karan@gmail.com', 'what is your fav spot?', 'austria'),
(3, 'khantil', '1cg12cs002', '123', 'khantil@gmail.com', 'What is your fav dish?', 'maggie'),
(4, 'jahnavi', '1cg12cv001', '123', 'jahnavi@gmail.com', 'What is your nickname?', 'juhi'),
(5, 'bharti', '1cg12is000', '123', 'bharti@gmail.com', 'What is your fav dish?', 'pasta'),
(6, 'jayasudha', '1cg12is011', '123', 'jayasudha@gmail.com', 'What is your fav spot?', 'manali');

-- --------------------------------------------------------

--
-- Table structure for table `updatedrive`
--

CREATE TABLE `updatedrive` (
  `USN` varchar(10) NOT NULL,
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

INSERT INTO `updatedrive` (`USN`, `Name`, `CompanyName`, `Date`, `Attendence`, `WT`, `GD`, `Techical`, `Placed`) VALUES
('1cg13is400', 'kishan', 'Android', '2015-06-26', 1, 1, 1, 1, 1),
('1cg13cs400', 'karan', 'HP', '2013-08-19', 1, 1, 1, 1, 1),
('1cg12cs002', 'khantil', 'IBM', '2015-05-12', 1, 1, 1, 1, 1),
('1cg12cv001', 'jahnavi', 'Infosys', '2015-01-10', 1, 1, 1, 1, 1),
('1cg12is011', 'jayasudha', 'Apple', '2015-08-21', 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpdrive`
--
ALTER TABLE `addpdrive`
  ADD PRIMARY KEY (`CompanyName`,`Date`);

--
-- Indexes for table `basicdetails`
--
ALTER TABLE `basicdetails`
  ADD PRIMARY KEY (`Id`,`USN`),
  ADD UNIQUE KEY `USN` (`USN`,`Mobile`,`Email`);

--
-- Indexes for table `hlogin`
--
ALTER TABLE `hlogin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `plogin`
--
ALTER TABLE `plogin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `prilogin`
--
ALTER TABLE `prilogin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `USN` (`USN`,`Email`);

--
-- Indexes for table `updatedrive`
--
ALTER TABLE `updatedrive`
  ADD KEY `USN` (`USN`),
  ADD KEY `CompanyName` (`CompanyName`,`Date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basicdetails`
--
ALTER TABLE `basicdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hlogin`
--
ALTER TABLE `hlogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plogin`
--
ALTER TABLE `plogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prilogin`
--
ALTER TABLE `prilogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slogin`
--
ALTER TABLE `slogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `updatedrive`
--
ALTER TABLE `updatedrive`
  ADD CONSTRAINT `updatedrive_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `basicdetails` (`USN`) ON DELETE CASCADE,
  ADD CONSTRAINT `updatedrive_ibfk_2` FOREIGN KEY (`CompanyName`,`Date`) REFERENCES `addpdrive` (`CompanyName`, `Date`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
