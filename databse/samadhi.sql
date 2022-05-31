-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 12:50 PM
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
-- Database: `samadhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `childdetails`
--

CREATE TABLE `childdetails` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `childdetails`
--

INSERT INTO `childdetails` (`id`, `fname`, `lname`, `gender`, `birthdate`) VALUES
(1, 'Kasun Tharanga ', 'Ambawala', 'Male', '1998-12-29'),
(22, 'Ranil', 'Senanayake', 'Male', '2021-08-12'),
(24, 'Tharindu', 'Senanayake', 'Male', '2021-08-13'),
(26, 'Tharindu', 'Senanayake', 'Male', '2021-08-02'),
(28, 'Tharindu', 'Senanayake', 'Male', '2021-08-09'),
(30, 'Tharindu', 'Senanayake', 'Male', '2021-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `donars`
--

CREATE TABLE `donars` (
  `donarId` int(11) NOT NULL,
  `donarName` varchar(50) NOT NULL,
  `contactNo` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `donationType` varchar(50) NOT NULL,
  `cash` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donars`
--

INSERT INTO `donars` (`donarId`, `donarName`, `contactNo`, `Address`, `donationType`, `cash`, `date`) VALUES
(31, 'Apsara Dilashan', '0718529631', 'No.123/2 , Main Street , Alawwa', 'Cash', '8000', '2021-08-12 00:00:00'),
(33, 'Namal', '0784561239', 'No.48 , Madamulana , Hambanthota', 'Cash', '8500', '2021-08-26 00:00:00'),
(36, 'Tharindu Senanayake', ' +94713060057', 'No.48 Janaraja Mawatha,Alawwa', 'Cash', '2500', '2021-08-10 00:00:00'),
(44, 'Tharindu Senanayake', ' +94713060057', 'No.48 Janaraja Mawatha,Alawwa', 'Cash', '2345', '2021-08-13 00:00:00'),
(45, 'Tharindu Senanayake', ' +94713060057', 'No.48 Janaraja Mawatha,Alawwa', 'Cash', '2500', '2021-08-17 00:00:00'),
(46, 'Tharindu Senanayake', ' +94713060057', 'No.48 Janaraja Mawatha,Alawwa', 'Cash', '40000', '2021-08-27 00:00:00'),
(47, 'Kavindra Abeekoon', ' 0718529635', 'No, Gems Street , Kuruwita', 'Cash', '12000', '2021-08-18 00:00:00'),
(48, 'Ksiri', ' Vithnagae', '45/8.Main Street , Gampaha', 'Cash', '78500', '2021-08-16 00:00:00'),
(49, 'Tharindu Senanayake', ' +94713060057', 'No.48 Janaraja Mawatha,Alawwa', 'Cash', '2500', '2021-08-26 00:00:00'),
(50, 'Tharindu Senanayake', ' +94713060057', 'No.48 Janaraja Mawatha,Alawwa', 'Cash', '3444', '2021-08-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

CREATE TABLE `labor` (
  `laborId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL DEFAULT '''0''',
  `contact` varchar(50) NOT NULL DEFAULT '0',
  `address` varchar(50) NOT NULL DEFAULT '0',
  `hiring_company` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labor`
--

INSERT INTO `labor` (`laborId`, `name`, `dob`, `gender`, `contact`, `address`, `hiring_company`) VALUES
(9, 'Tharindu Senanayake', '2021-08-16', 'y', '4444', 'No.48 Janaraja Mawatha,Alawwa', 'yyyy'),
(11, 'Tharindu Senanayake', '', 'y', '', 'No.48 Janaraja Mawatha,Alawwa', 'www'),
(12, 'Tharindu Senanayake', '', 'y', '', 'No.48 Janaraja Mawatha,Alawwa', 'www'),
(14, 'Tharindu Senanayake', '2021-08-23', 'y', '-17', 'No.48 Janaraja Mawatha,Alawwa', '55555'),
(16, 'Tharindu Senanayake', '2021-08-13', '', '123', 'No.48 Janaraja Mawatha,Alawwa', 'awe'),
(18, 'Tharindu Senanayake', '2021-08-10', '', '10000', 'No.48 Janaraja Mawatha,Alawwa', 'www');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffId` int(11) NOT NULL,
  `iname` varchar(50) DEFAULT NULL,
  `dob` varchar(50) NOT NULL,
  `nic` varchar(50) DEFAULT NULL,
  `adrs` varchar(50) DEFAULT NULL,
  `contact` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pw` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `iname`, `dob`, `nic`, `adrs`, `contact`, `username`, `pw`) VALUES
(18, 'Tharindu Senanayake', '', '', 'No.48 Janaraja Mawatha,Alawwa', '+94713060057', 'xxx@gmail.com', '1234'),
(19, 'Tharindu Senanayake', '', '', 'No.48 Janaraja Mawatha,Alawwa', '', 'xxx@gmail.com', '1234'),
(21, 'Tharindu Senanayake', '', '', 'No.48 Janaraja Mawatha,Alawwa', '+94713060057', '', ''),
(22, 'D.S.Kithsiri', '2021-08-16', '985632147v', 'No,123/85,lol street , hasds', '789', 'tharifd', '256'),
(23, 'Tharindu Senanayake', '2021-08-26', '85255', 'No.48 Janaraja Mawatha,Alawwa', '+94713060057', 'thari', '256');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `childdetails`
--
ALTER TABLE `childdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donars`
--
ALTER TABLE `donars`
  ADD PRIMARY KEY (`donarId`);

--
-- Indexes for table `labor`
--
ALTER TABLE `labor`
  ADD PRIMARY KEY (`laborId`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `childdetails`
--
ALTER TABLE `childdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `donars`
--
ALTER TABLE `donars`
  MODIFY `donarId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `labor`
--
ALTER TABLE `labor`
  MODIFY `laborId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
