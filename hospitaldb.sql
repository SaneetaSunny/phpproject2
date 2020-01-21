-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 10:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `Did` int(11) NOT NULL,
  `Dname` varchar(20) NOT NULL,
  `Uname` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Slot` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `Did`, `Dname`, `Uname`, `Date`, `Slot`, `Status`) VALUES
(1, 2, '', '', '2020-01-16', '10 AM', ''),
(2, 2, 'Jasmine', '', '2020-01-31', '4 PM', 'Rejected'),
(5, 5, 'Maya', 'fathima', '2020-01-22', '10 AM', 'Approved'),
(8, 7, 'Girija', 'sharon', '2020-01-22', '11 PM', 'Pending'),
(9, 1, 'Mary', 'saneeta', '2020-01-23', '10 AM', 'Approved'),
(10, 2, 'Jasmine', 'sanit', '0000-00-00', '10 AM', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Did` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `MobileNo` bigint(20) NOT NULL,
  `Emailid` varchar(20) NOT NULL,
  `Nationalid` varchar(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Experience` varchar(50) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `ClinicAddress` varchar(50) NOT NULL,
  `ClinicTiming` varchar(30) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Did`, `Name`, `MobileNo`, `Emailid`, `Nationalid`, `Qualification`, `Experience`, `Department`, `ClinicAddress`, `ClinicTiming`, `Username`, `Password`, `Status`) VALUES
(1, 'Mary', 9876543210, 'mary@gmail.com', '4566', 'MBBS,MD', '5 year', 'Gynaecology', 'HolyCross kottoiyam', '11 AM to 3 PM', 'mary', 'mary456', 'Approved'),
(2, 'Jasmine', 9786553742, 'j@gmail.com', '56789', 'MBBS,MD', '5 Year', 'Paediatry', 'HolyCross, Kottiyam', '24hrs', 'jasmine', 'jasmine', 'Approved'),
(5, 'Maya', 9876543210, 'maya@gmail.com', '9876', 'MBBS,MD', '7 years', 'Cardiology', 'NSS ,Ayathil', '10 to 5', 'maya', 'maya@123', 'Approved'),
(6, 'Remya', 9865432170, 'remya@gmail.com', '675894', 'MBBS,MD', '6 years', 'ENT', 'abc,Kollam', '8 to 4', 'remya', 'remya1234', 'Approved'),
(7, 'Girija', 9867543210, 'giri@gmail.com', '3456789', 'MBBS,MD', '4 years', 'Neurology', 'medical colage', '12 to 3', 'giri', 'giri1234567', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Uid` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Emailid` varchar(215) NOT NULL,
  `MobileNo` bigint(20) NOT NULL,
  `NationalId` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Uid`, `Name`, `Gender`, `Age`, `Emailid`, `MobileNo`, `NationalId`, `Username`, `Password`) VALUES
(111, 'Saneeta', 'Female', 24, 'saneeta@gmail.com', 7034677960, 23456, 'saneeta', 'saneeta'),
(112, 'Fathima', 'Female', 23, 'fathima@gmail.com', 8086872890, 12345678, 'fathima', 'fathima'),
(113, 'Sharon', 'Female', 23, 'sharon@gmail.com', 9847382147, 56432, 'sharon', 'sharon123'),
(114, 'Sanit sunny', 'Male', 22, 'sanitsunny@gmail.com', 8086015708, 452190, 'sanit', 'sanit123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
