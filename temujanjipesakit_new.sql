-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 04:05 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temujanjipesakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appId` int(3) NOT NULL,
  `patientIc` bigint(12) NOT NULL,
  `scheduleId` int(10) NOT NULL,
  `appSymptom` varchar(100) NOT NULL,
  `appComment` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'process'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appId`, `patientIc`, `scheduleId`, `appSymptom`, `appComment`, `status`) VALUES
(103, 991220145472, 66, 'noted', 'with action', 'done'),
(104, 991220145472, 69, 'TRYTRYTRY', 'asdfgh', 'done'),
(105, 991220145472, 70, 'huhuhuhu', 'ghhj', 'done'),
(107, 991220145472, 76, 'qwww', 'jjjjjjjjjjjjjjjjj', 'done'),
(108, 991220145472, 84, 'apa', 'apa', 'process'),
(109, 991220145472, 85, 'SAKIT', 'OKKKKKKK', 'done'),
(110, 991220145472, 86, 'sakit', 'ok', 'process'),
(111, 991220145472, 88, 'Sakit sendi', 'tolong doktor.', 'process'),
(112, 991220145472, 94, 'Sakit Tulang Belakang', 'tolong saya doktor', 'process');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `icDoctor` bigint(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `doctorId` int(10) NOT NULL,
  `doctorFirstName` varchar(50) NOT NULL,
  `doctorLastName` varchar(50) NOT NULL,
  `doctorAddress` varchar(100) NOT NULL,
  `doctorPhone` varchar(15) NOT NULL,
  `doctorEmail` varchar(20) NOT NULL,
  `doctorDOB` date NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`icDoctor`, `password`, `doctorId`, `doctorFirstName`, `doctorLastName`, `doctorAddress`, `doctorPhone`, `doctorEmail`, `doctorDOB`, `type`) VALUES
(981909145472, 'admin', 98, 'Nurul', 'Fatihah', 'Salak Tinggi, Sepang Selangor', '0176606119', 'ftiya@gmail.com', '1998-09-19', 1),
(991220145472, 'natasha123', 17, 'Nurul ', 'Natasha', 'Lot 153, Salak Tinggi', '0172970504', 'tasha@gmail.com', '1999-12-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctorschedule`
--

CREATE TABLE `doctorschedule` (
  `doctorname` varchar(100) NOT NULL,
  `scheduleId` int(11) NOT NULL,
  `scheduleDate` date NOT NULL,
  `scheduleDay` varchar(15) NOT NULL,
  `startTime` time NOT NULL,
  `bookAvail` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorschedule`
--

INSERT INTO `doctorschedule` (`doctorname`, `scheduleId`, `scheduleDate`, `scheduleDay`, `startTime`, `bookAvail`) VALUES
('Nurul Fatihah', 66, '2018-09-06', 'Thursday', '10:00:00', 'notavail'),
('Nurul Fatihah', 67, '2018-09-06', 'Thursday', '10:00:00', 'available'),
('Nurul Fatihah', 68, '0000-00-00', 'Saturday', '10:00:00', 'available'),
('Nurul Natasha', 69, '2018-09-23', 'Sunday', '10:00:00', 'notavail'),
('Nurul Natasha', 70, '2018-09-27', 'Thursday', '10:00:00', 'notavail'),
('Nurul Natasha', 74, '2018-09-24', 'Monday', '10:00:00', 'notavail'),
('Nurul Natasha', 75, '2018-09-24', 'Monday', '10:00:00', 'available'),
('Nurul Natasha', 76, '2018-09-24', 'Monday', '02:00:00', 'notavail'),
('Nurul Natasha', 78, '2018-09-26', 'Wednesday', '10:00:00', 'available'),
('Nurul Natasha', 79, '2018-09-26', 'Wednesday', '10:00:00', 'available'),
('Nurul Natasha', 80, '2018-09-26', 'Wednesday', '10:00:00', 'available'),
('Nurul Natasha', 81, '2018-09-26', 'Wednesday', '10:00:00', 'available'),
('Nurul Natasha', 82, '2018-09-26', 'Wednesday', '10:00:00', 'available'),
('Nurul Natasha', 83, '2018-09-26', 'Wednesday', '10:00:00', 'available'),
('Nurul Natasha', 84, '2018-11-16', 'Friday', '09:00:00', 'notavail'),
('Nurul Natasha', 85, '2018-11-16', 'Friday', '11:00:00', 'notavail'),
('Nurul Natasha', 86, '2018-11-20', 'Monday', '10:00:00', 'notavail'),
('Nurul Fatihah', 87, '2018-11-16', 'Friday', '09:15:00', 'available'),
('Nurul Natasha', 88, '2018-11-19', 'Monday', '10:00:00', 'notavail'),
('Nurul Fatihah', 89, '2018-11-16', 'Monday', '10:00:00', 'available'),
('Nurul Natasha', 90, '2018-11-16', 'Monday', '10:45:00', 'available'),
('Nurul Natasha', 91, '2018-11-16', 'Monday', '12:00:00', 'notavail'),
('Nurul Fatihah', 92, '2018-11-16', 'Monday', '12:00:00', 'available'),
('Nurul Natasha', 93, '2018-11-19', 'Monday', '12:00:00', 'notavail'),
('Nurul Fatihah', 94, '2018-11-19', 'Monday', '11:15:00', 'notavail'),
('Nurul Fatihah', 95, '2018-11-19', 'Monday', '02:30:00', 'available'),
('Nurul Natasha', 96, '2018-11-19', 'Monday', '02:30:00', 'available'),
('Nurul Natasha', 97, '2018-11-20', 'Tuesday', '09:00:00', 'available'),
('Nurul Fatihah', 98, '2018-11-20', 'Tuesday', '09:00:00', 'available'),
('Nurul Natasha', 99, '2018-11-29', 'Friday', '02:10:00', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `icPatient` bigint(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `patientFirstName` varchar(20) NOT NULL,
  `patientLastName` varchar(20) NOT NULL,
  `patientMaritialStatus` varchar(10) NOT NULL,
  `patientDOB` date NOT NULL,
  `patientGender` varchar(10) NOT NULL,
  `patientAddress` varchar(100) NOT NULL,
  `patientPhone` varchar(15) NOT NULL,
  `patientEmail` varchar(100) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`icPatient`, `password`, `patientFirstName`, `patientLastName`, `patientMaritialStatus`, `patientDOB`, `patientGender`, `patientAddress`, `patientPhone`, `patientEmail`, `type`) VALUES
(13, 'natasha123', 'Nurul', 'Aqilah', '', '1999-09-13', 'female', '', '', 'aqilah@yahoo.com', 0),
(17, 'natasha123', 'Nurul ', 'Natasha', '', '1996-05-13', 'female', '', '', 'nurulnatashamohdjais@yahoo.com', 0),
(980919145472, 'natasha123', 'Nurul ', 'Fafafa', '', '1999-12-19', 'female', '', '', 'nurulnatashamohdjais@rr.com', 0),
(990915015472, 'natasha123', 'Nurin', 'Jazlina', '', '1999-09-15', 'female', '', '', 'ozzy@gmail.com', 0),
(991220145472, 'natasha123', 'NURUL NATASHA', 'JAIS', 'married', '1999-12-20', 'female', 'LOT 153, ', '172970504', 'nurulnatashamohdjais@yahoo.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appId`),
  ADD UNIQUE KEY `scheduleId_2` (`scheduleId`),
  ADD KEY `patientIc` (`patientIc`),
  ADD KEY `scheduleId` (`scheduleId`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`icDoctor`);

--
-- Indexes for table `doctorschedule`
--
ALTER TABLE `doctorschedule`
  ADD PRIMARY KEY (`scheduleId`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`icPatient`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `doctorschedule`
--
ALTER TABLE `doctorschedule`
  MODIFY `scheduleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_4` FOREIGN KEY (`patientIc`) REFERENCES `patient` (`icPatient`),
  ADD CONSTRAINT `appointment_ibfk_5` FOREIGN KEY (`scheduleId`) REFERENCES `doctorschedule` (`scheduleId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
