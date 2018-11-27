-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 09:46 PM
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
  `trn_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `firstname` varchar(30) CHARACTER SET ascii DEFAULT NULL,
  `lastname` varchar(30) CHARACTER SET ascii DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userID`, `username`, `password`, `email`, `trn_date`, `firstname`, `lastname`) VALUES
(8, 'Phil', 'd14ffd41334ec4b4b3f2c0d55c38be6f', 'asdfsdfsdsd@yahoo.ioe', '2018-11-26 20:27:15', NULL, NULL),
(9, 'mansey7', '1bab52ef390fae4d54d64a4d7ea7cd26', 'c16334863@mydit.ie', '2018-11-27 18:25:34', NULL, NULL),
(10, 'craig', 'e0323a9039add2978bf5b49550572c7c', 'cblakeney@yahoo.com', '2018-11-27 18:22:50', NULL, NULL),
(11, 'paul', '6c63212ab48e8401eaf6b59b95d816a9', 'paul@yahoo.com', '2018-11-27 19:36:20', NULL, NULL),
(12, 'luke', '46ecbec5ec7951ce102670dbd0b2def5', 'luke@yahoo.com', '2018-11-27 19:37:43', NULL, NULL),
(14, 'sj', 'b5bf27b2555de44e3df2230080db5a1d', 'sj@yahoo.com', '2018-11-27 19:38:11', NULL, NULL),
(15, 'q', 'b2ca678b4c936f905fb82f2733f5297f', 'q@yahoo.com', '2018-11-27 19:03:40', NULL, NULL),
(16, 'tester', 'f5d1278e8109edd94e1e4197e04873b9', 'tester@yahoo.com', '2018-11-27 20:10:13', 'Ryan', 'McManus'),
(17, 'luke34', '8466d1fc4dffd36097636ca8ca4983e4', 'luke34@yahoo.com', '2018-11-27 20:10:38', 'luke', '');

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
  MODIFY `userID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
