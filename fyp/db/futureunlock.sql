-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 09:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futureunlock`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `idnum` bigint(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `phone` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adminphoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `surname`, `name`, `idnum`, `gender`, `phone`, `email`, `address`, `password`, `adminphoto`) VALUES
(3, 'Surname', 'Name', 1234567890123, 'Male', 1234567890, '', 'RSA', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(4, 'MySurname', 'MyName', 1234567890121, 'Female', 9876543210, '', 'ZA', '827ccb0eea8a706c4c34a16891f84e7b', '');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `idnum` bigint(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stream` enum('SCIENCE','COMMERCE','GENERAL') NOT NULL,
  `hl` int(100) NOT NULL,
  `al` int(100) NOT NULL,
  `maths` int(100) NOT NULL,
  `lo` int(100) NOT NULL,
  `ns` int(100) NOT NULL,
  `ss` int(100) NOT NULL,
  `ems` int(100) NOT NULL,
  `tech` int(100) NOT NULL,
  `ca` int(100) NOT NULL,
  `fname` text NOT NULL,
  `iname` varchar(255) NOT NULL,
  `status` enum('WAITING FOR DECISION','SUCCESSFUL','UNSUCCESSFUL') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `idnum`, `surname`, `name`, `stream`, `hl`, `al`, `maths`, `lo`, `ns`, `ss`, `ems`, `tech`, `ca`, `status`) VALUES
(36, 1234567890125, 'Surname', 'Name', 'SCIENCE', 7, 7, 7, 7, 7, 7, 7, 7, 7, '20211130210832_ResidenceRules.pdf', 'ResidenceRules.pdf', 'WAITING FOR DECISION');

-- --------------------------------------------------------

--
-- Table structure for table `learner`
--

CREATE TABLE `learner` (
  `id` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `idnum` bigint(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `phone` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `fname` text NOT NULL,
  `iname` varchar(255) NOT NULL,
  `gsurname` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `gidnum` bigint(255) NOT NULL,
  `ggender` enum('Male','Female') NOT NULL,
  `gphone` bigint(255) NOT NULL,
  `gemail` varchar(255) NOT NULL,
  `gaddress` varchar(255) NOT NULL,
  `relationship` enum('Father','Mother','Uncle','Aunt','Grand Father','Grand Mother') NOT NULL,
  `password` varchar(255) NOT NULL,
  `learnerphoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `webname` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `webname`, `website`) VALUES
(5, 'University of Zululand', 'www.unizulu.ac.za'),
(13, 'University of KwaZulu-Natal', 'www.ukzn.ac.za'),
(14, 'cao', 'www.cao.ac.za');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learner`
--
ALTER TABLE `learner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `learner`
--
ALTER TABLE `learner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
