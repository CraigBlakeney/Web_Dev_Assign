-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 01:47 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `dvd_info`
--

CREATE TABLE `dvd_info` (
  `item_ID` int(11) NOT NULL,
  `m_Title` varchar(40) CHARACTER SET ascii NOT NULL,
  `m_Genre` varchar(20) NOT NULL,
  `m_PG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dvd_info`
--

INSERT INTO `dvd_info` (`item_ID`, `m_Title`, `m_Genre`, `m_PG`) VALUES
(1, 'The Grinch', 'Comedy', 13),
(2, 'The Hangover', 'Comedy', 18),
(3, 'Spiderman', 'Action', 13),
(4, 'Transformers', 'Action', 13),
(5, 'Spongebob', 'Animation', NULL),
(6, 'Peppa Pig', 'Children', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userID` int(4) NOT NULL,
  `password` varchar(30) CHARACTER SET ascii NOT NULL,
  `firstName` varchar(20) CHARACTER SET ascii NOT NULL,
  `lastName` varchar(30) CHARACTER SET ascii NOT NULL,
  `emailAddress` varchar(50) CHARACTER SET ascii NOT NULL,
  `phoneNumber` int(10) DEFAULT NULL,
  `joinDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userID`, `password`, `firstName`, `lastName`, `emailAddress`, `phoneNumber`, `joinDate`) VALUES
(1, 'qwerty123', 'Ryan', 'McManus', 'c16334863@mydit.ie', 871234567, '2018-11-22 14:50:07'),
(2, 'ilovemeath', 'Craig', 'Blakeney', 'cblakeney@yahoo.com', 837568375, '2018-11-22 15:02:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dvd_info`
--
ALTER TABLE `dvd_info`
  ADD PRIMARY KEY (`item_ID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dvd_info`
--
ALTER TABLE `dvd_info`
  MODIFY `item_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
