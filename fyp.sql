-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 11:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notificationID` int(11) NOT NULL,
  `sendDate` datetime NOT NULL,
  `notificationStatus` text NOT NULL,
  `parcelID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notificationID`, `sendDate`, `notificationStatus`, `parcelID`) VALUES
(11, '2024-02-10 23:03:40', 'successful', 43),
(12, '2024-02-11 11:53:31', 'successful', 1),
(13, '2024-02-11 11:53:31', 'successful', 6),
(14, '2024-02-12 15:20:55', 'successful', 43),
(15, '2024-02-13 12:15:39', 'successful', 44),
(16, '2024-02-13 12:16:05', 'successful', 45),
(17, '2024-02-13 12:40:32', 'successful', 46),
(18, '2024-02-13 12:41:45', 'successful', 47),
(19, '2024-02-13 12:43:58', 'successful', 44),
(20, '2024-02-13 13:07:29', 'successful', 45),
(21, '2024-02-13 13:54:06', 'successful', 44),
(22, '2024-02-13 14:33:21', 'successful', 44),
(23, '2024-02-13 14:56:28', 'successful', 44),
(24, '2024-02-13 14:57:18', 'successful', 46),
(25, '2024-02-13 14:59:13', 'successful', 47),
(27, '2024-02-13 15:23:12', 'successful', 49),
(28, '2024-02-13 15:27:54', 'successful', 49),
(29, '2024-02-13 15:51:01', 'successful', 1),
(30, '2024-02-13 16:00:43', 'successful', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `parcelID` int(11) NOT NULL,
  `parcelNumber` int(11) NOT NULL,
  `trackNum` text NOT NULL,
  `receiveDate` date NOT NULL,
  `phoneNum` text NOT NULL,
  `recipientName` text NOT NULL,
  `collectionDate` datetime DEFAULT NULL,
  `parcelStatus` int(11) NOT NULL,
  `reminderStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`parcelID`, `parcelNumber`, `trackNum`, `receiveDate`, `phoneNum`, `recipientName`, `collectionDate`, `parcelStatus`, `reminderStatus`) VALUES
(1, 1, 'SPXMY03783590750B', '2023-09-05', '0176929827', '', NULL, 0, 1),
(6, 1, 'MY01281219210A', '2023-10-01', '0176929827', '', NULL, 1, 0),
(7, 1, 'notification3', '2023-12-28', '0176929827', '', NULL, 1, 0),
(8, 2, 'test', '2023-12-28', '12234', '', NULL, 0, 0),
(10, 4, '123', '2023-12-28', '0176929827', '', NULL, 1, 0),
(13, 2, 'tryparcelnumber1', '2023-12-31', '0123123', '', NULL, 1, 0),
(25, 4, 'null ke', '2023-12-31', '231', 'Syazan', '2023-12-31 14:49:33', 1, 0),
(27, 2, 'collection Test', '2024-01-01', '0176929827', 'syazan', '2023-12-31 15:35:48', 2, 0),
(28, 3, 'collection test 2', '2024-01-01', '0176929827', 'Syazan', '2023-12-31 15:38:24', 2, 0),
(29, 1, 'SPX001', '2024-01-02', '0176929827', 'Syazan', '2024-01-02 11:05:11', 0, 0),
(30, 2, 'SPX002', '2024-01-02', '0176929827', 'Khairul', '2024-02-10 22:41:45', 1, 0),
(31, 1, 'SPX100', '2024-01-10', '0176929827', '', NULL, 0, 0),
(32, 2, 'SPX200', '2024-01-10', '0176929827', '', NULL, 0, 0),
(33, 1, 'MY7781000121', '2024-01-11', '0123131241', '', NULL, 0, 0),
(34, 2, 'SPX129300001931', '2024-01-11', '0176929827', '', NULL, 0, 0),
(35, 3, 'SPX0011', '2024-01-10', '0176929827', 'ali', '2024-01-11 16:39:57', 0, 0),
(42, 1, 'SPX 0012', '2024-02-10', '0176929827', 'Khairul', '2024-02-10 23:02:30', 1, 0),
(43, 2, 'SPX 0013', '2024-02-10', '0123131241', 'ahmad', '2024-02-12 15:20:44', 1, 0),
(44, 1, 'SPX0014', '2024-02-13', '0176929827', 'syazann', '2024-02-13 14:56:08', 1, 0),
(45, 2, 'SPX0015', '2024-02-13', '0176929827', 'Khairul', '2024-02-13 13:07:25', 1, 0),
(46, 3, 'SPX 0016', '2024-02-13', '0176929827', 'syazann', '2024-02-13 14:57:04', 1, 0),
(47, 4, 'SPX 0017', '2024-02-13', '0176929827', 'Frieren', '2024-02-13 14:58:49', 1, 0),
(49, 5, 'Unit testing', '2024-02-13', '0176929827', 'Syazan', '2024-02-13 15:27:45', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleID` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `roleDescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleID`, `position`, `roleDescription`) VALUES
(1, 'Manager', 'Maintains staff by recruiting, selecting, orienting, and training employees.'),
(2, 'Operation Supervisor', 'Supervise and train employees. Provide administrative support');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `userEmail` text NOT NULL,
  `userPhoneNum` text NOT NULL,
  `registerDate` date DEFAULT NULL,
  `roleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `userEmail`, `userPhoneNum`, `registerDate`, `roleID`) VALUES
(1, 'user', 'user', 'user@gmail.com', '0143313930', '2023-12-01', 2),
(999, 'admin', 'admin', '', '', NULL, 1),
(1002, 'staff', 'staff', 'staff@gmail.com', '01769298272', '2024-02-11', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notificationID`),
  ADD KEY `parcelID` (`parcelID`);

--
-- Indexes for table `parcel`
--
ALTER TABLE `parcel`
  ADD PRIMARY KEY (`parcelID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `roleID` (`roleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notificationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `parcel`
--
ALTER TABLE `parcel`
  MODIFY `parcelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1018;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `parcelID` FOREIGN KEY (`parcelID`) REFERENCES `parcel` (`parcelID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `roleID` FOREIGN KEY (`roleID`) REFERENCES `role` (`roleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
