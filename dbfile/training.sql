-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 10:30 AM
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
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(34) NOT NULL,
  `password` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'sacadmin', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `manager` varchar(25) NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `manager`, `contactno`, `username`, `password`, `flag`) VALUES
(3, 'force', 'Aneesh', 1131313131, 'aneesh@123', 'aneesh123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_desc` varchar(500) NOT NULL,
  `criteria` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `short_list`
--

CREATE TABLE `short_list` (
  `id` int(11) NOT NULL,
  `stud_id` bigint(11) NOT NULL,
  `company_id` bigint(11) NOT NULL,
  `placement_id` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `admno` bigint(11) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneno` bigint(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `admno`, `dept`, `address`, `phoneno`, `username`, `password`, `flag`) VALUES
(1, 'Ganasyam', 32018135013, 'Computer Science', 'Palakkad', 6282370251, 'india17august', 'Ganasyam@12', 0),
(2, 'Arunraj R', 32018135008, 'Computer Science', 'Vallikunnam', 6238822323, 'Arunrajvkm', 'Arun@123', 0),
(3, 'Anandu M kurup', 32018135005, 'Computer Science', 'Budhanoor', 6282180742, 'Anandu123', 'Anandu@123', 0),
(4, 'Gokul Raj', 32018135014, 'Computer Science', 'Kollam', 7356304022, 'Gokul Raj', 'gkr2000kpza', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stud_marks`
--

CREATE TABLE `stud_marks` (
  `id` int(11) NOT NULL,
  `stud_id` bigint(11) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `cgpa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placement`
--
ALTER TABLE `placement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_marks`
--
ALTER TABLE `stud_marks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `placement`
--
ALTER TABLE `placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stud_marks`
--
ALTER TABLE `stud_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
