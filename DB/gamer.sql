-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2021 at 07:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamer`
--

-- --------------------------------------------------------

--
-- Table structure for table `cod`
--

CREATE TABLE `cod` (
  `leaderID` int(50) NOT NULL COMMENT 'primary key',
  `teamLeaderusrID` int(50) NOT NULL,
  `teamate1usrID` int(50) NOT NULL,
  `teamate2usrID` int(50) NOT NULL,
  `teamate3usrID` int(50) NOT NULL,
  `teamate4usrID` int(50) NOT NULL,
  `TeamName` varchar(60) NOT NULL,
  `eMail` varchar(60) NOT NULL,
  `whatsappno` int(50) NOT NULL,
  `gamerID` int(6) NOT NULL COMMENT 'foreign key'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cod`
--

INSERT INTO `cod` (`leaderID`, `teamLeaderusrID`, `teamate1usrID`, `teamate2usrID`, `teamate3usrID`, `teamate4usrID`, `TeamName`, `eMail`, `whatsappno`, `gamerID`) VALUES
(2, 4535, 2545, 231, 4536, 874326, 'hello', 'hdj@gmail.com', 957389, 9),
(3, 8, 2, 3, 4, 5, 'hella', 'bla@gmail.com', 6, 16),
(4, 2587875, 54464, 25525225, 25525225, 252525, 'wkjwt', 'gwen@gmail.com', 242445, 21);

-- --------------------------------------------------------

--
-- Table structure for table `gamer`
--

CREATE TABLE `gamer` (
  `gamerID` int(6) NOT NULL,
  `gamerName` varchar(60) NOT NULL,
  `eMail` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(2) NOT NULL COMMENT 'fk of role',
  `status` enum('active','innactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gamer`
--

INSERT INTO `gamer` (`gamerID`, `gamerName`, `eMail`, `password`, `role`, `status`) VALUES
(9, 'shan', 'bla@gmail.cbm', '123456', 2, 'innactive'),
(13, 'Gwen', 'Gwen@gmail.com', '12345', 1, 'active'),
(14, 'Super Admin', 'superadmin@gmail.com', '12345', 3, 'active'),
(16, 'Warner', 'warner@gmail.com', '12345', 2, 'active'),
(21, 'shane', 'fegrg@gmail.com', '12345', 1, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `rolename` varchar(10) NOT NULL,
  `rid` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`rolename`, `rid`) VALUES
('root', 1),
('admin', 2),
('supadmin', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cod`
--
ALTER TABLE `cod`
  ADD PRIMARY KEY (`leaderID`),
  ADD KEY `gamerID` (`gamerID`);

--
-- Indexes for table `gamer`
--
ALTER TABLE `gamer`
  ADD PRIMARY KEY (`gamerID`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cod`
--
ALTER TABLE `cod`
  MODIFY `leaderID` int(50) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gamer`
--
ALTER TABLE `gamer`
  MODIFY `gamerID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `rid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cod`
--
ALTER TABLE `cod`
  ADD CONSTRAINT `cod_ibfk_1` FOREIGN KEY (`gamerID`) REFERENCES `gamer` (`gamerID`);

--
-- Constraints for table `gamer`
--
ALTER TABLE `gamer`
  ADD CONSTRAINT `gamer_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`rid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
