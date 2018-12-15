-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 05:39 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `UserName` varchar(30) NOT NULL DEFAULT '',
  `Password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`UserName`, `Password`) VALUES
('Admin', 'asdf'),
('root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE `ans` (
  `ExpertID` int(6) NOT NULL,
  `UserID` int(6) NOT NULL,
  `QueID` int(10) NOT NULL,
  `Question` varchar(300) NOT NULL,
  `Answer` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`ExpertID`, `UserID`, `QueID`, `Question`, `Answer`) VALUES
(1, 13, 1, 'What is HTML?', 'Hypertext Markup Language');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `Subject` varchar(10) NOT NULL,
  `ChapID` int(10) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Info` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expertsugg`
--

CREATE TABLE `expertsugg` (
  `ExpertID` int(5) NOT NULL DEFAULT '0',
  `Name` varchar(50) NOT NULL,
  `Email_id` varchar(500) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expertsugg`
--

INSERT INTO `expertsugg` (`ExpertID`, `Name`, `Email_id`, `Subject`, `Description`) VALUES
(1, 'Parth Varde', 'parthvarde50@gmail.com', 'About Chapter', 'Insert new chapter in CSS course');

-- --------------------------------------------------------

--
-- Table structure for table `expert_info`
--

CREATE TABLE `expert_info` (
  `Expert_id` int(2) NOT NULL,
  `FirstName` varchar(20) NOT NULL DEFAULT '',
  `MiddleName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email_id` varchar(40) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expert_info`
--

INSERT INTO `expert_info` (`Expert_id`, `FirstName`, `MiddleName`, `LastName`, `Email_id`, `Gender`, `UserName`, `Password`) VALUES
(1, 'Parth', 'Rakesh', 'Varde', 'parthvarde50@gmail.com', 'male', 'parth', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Description` varchar(5000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Description`, `name`, `email`) VALUES
('Hello', 'Parth Varde', 'parthvarde50@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `Book` varchar(500) CHARACTER SET utf8 NOT NULL,
  `OrderNo` int(10) NOT NULL,
  `Full` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Addr` varchar(500) CHARACTER SET utf8 NOT NULL,
  `City` varchar(50) CHARACTER SET utf8 NOT NULL,
  `PinCode` int(20) NOT NULL,
  `State` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Mobile` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`Book`, `OrderNo`, `Full`, `Addr`, `City`, `PinCode`, `State`, `Email`, `Mobile`) VALUES
('HTML Complete Reference', 4, 'Parth Varde', 'dshjgjhdsjg					', 'Ahmedabad', 380051, 'Gujarat', 'parthvarde50@gmail.com', '8488061712');

-- --------------------------------------------------------

--
-- Table structure for table `que`
--

CREATE TABLE `que` (
  `QueID` int(10) NOT NULL,
  `UserID` int(10) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `Description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `que`
--

INSERT INTO `que` (`QueID`, `UserID`, `UserName`, `Description`) VALUES
(1, 13, 'parth', 'What is HTML?'),
(3, 13, 'parth', 'What is CSS?');

-- --------------------------------------------------------

--
-- Table structure for table `responsesugg`
--

CREATE TABLE `responsesugg` (
  `ExpertID` int(5) NOT NULL DEFAULT '0',
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Title` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Info` varchar(153) CHARACTER SET utf8 NOT NULL,
  `Dinfo` varchar(850) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `User_id` int(12) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Email_id` varchar(40) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`User_id`, `FirstName`, `LastName`, `Gender`, `Email_id`, `UserName`, `Password`) VALUES
(13, 'Parth', 'Varde', 'male', 'parthvarde50@gmail.com', 'parth', 'asdf'),
(14, 'Dhaval ', 'Dave', 'male', 'dhavaldave055@gmail.com', 'dhaval', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`ChapID`);

--
-- Indexes for table `expertsugg`
--
ALTER TABLE `expertsugg`
  ADD PRIMARY KEY (`ExpertID`);

--
-- Indexes for table `expert_info`
--
ALTER TABLE `expert_info`
  ADD PRIMARY KEY (`Expert_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`OrderNo`);

--
-- Indexes for table `que`
--
ALTER TABLE `que`
  ADD PRIMARY KEY (`QueID`);

--
-- Indexes for table `responsesugg`
--
ALTER TABLE `responsesugg`
  ADD PRIMARY KEY (`ExpertID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD UNIQUE KEY `Title` (`Title`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `ChapID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `expert_info`
--
ALTER TABLE `expert_info`
  MODIFY `Expert_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `OrderNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `que`
--
ALTER TABLE `que`
  MODIFY `QueID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `User_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
