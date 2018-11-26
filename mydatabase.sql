-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 09:22 PM
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
-- Database: `mydatabase`
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
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) CHARACTER SET ascii NOT NULL,
  `trn_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userID`, `username`, `password`, `email`, `trn_date`) VALUES
(8, 'Phil', 'd14ffd41334ec4b4b3f2c0d55c38be6f', 'asdfsdfsdsd@yahoo.ioe', '2018-11-26 20:27:15'),
(9, 'mansey7', '3fc0a7acf087f549ac2b266baf94b8b1', 'c16334863@mydit.ie', '2018-11-26 20:29:02'),
(10, 'craig', '14084800449265ee16a75ea7465d01b6', 'cblakeney@yahoo.com', '2018-11-26 20:32:37');

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
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

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
  MODIFY `userID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;