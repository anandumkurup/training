-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 23, 2020 at 06:57 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

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
-- Table structure for table `basic_Marks`
--

CREATE TABLE `basic_Marks` (
  `Id` int(11) NOT NULL,
  `StudId` int(11) NOT NULL,
  `SSLC` double NOT NULL,
  `PlusTwo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_Marks`
--

INSERT INTO `basic_Marks` (`Id`, `StudId`, `SSLC`, `PlusTwo`) VALUES
(1, 8, 95, 90.3),
(2, 1, 90.6, 67.3);

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
(3, 'Tata Consultancy Services', 'Aneesh', 949671683, 'aneesh@123', 'aneesh123', 1),
(4, 'InfoSys', 'Athul', 952665556, 'cds', 'tyy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `message`, `date`) VALUES
(1, 'Test Notifications', '2020-02-23'),
(2, 'Test msg', '2020-02-16'),
(3, 'test helloooo', '2020-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_desc` varchar(5000) NOT NULL,
  `sslc_per` int(11) NOT NULL,
  `plus two_per` int(11) NOT NULL,
  `degree_cgpa` int(11) NOT NULL,
  `backlog` int(11) NOT NULL,
  `jobvenue` varchar(345) NOT NULL,
  `jobdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placement`
--

INSERT INTO `placement` (`id`, `company_id`, `job_title`, `job_desc`, `sslc_per`, `plus two_per`, `degree_cgpa`, `backlog`, `jobvenue`, `jobdate`) VALUES
(1, 3, 'JAVA DEVELOPER', '1-3 years of experience in web applications development using Node JS and Angular.\r\nMaintain, update and add new features to existing products\r\n \r\nDesign and Develop new projects with clean and excellent quality code.\r\n \r\nAbility to easily and quickly read and modify existing code.\r\n \r\n Willingness to learn and master new technologies\r\n \r\nStrong interpersonal and written communication skills\r\n \r\nExperience in working NodeJS.\r\n \r\nunderstanding of React.js/React Native and its core principles\r\n \r\n', 90, 80, 7, 3, 'Thiruvananthapuram', '2020-03-10'),
(2, 4, 'PHP DEVELOPER', 'Development & Maintenance of Websites & Applications \r\nBuild efficient, testable, and reusable PHP modules \r\nContribute in all phases of the development lifecycle \r\nWrite clean, bug-free code, ensure coding quality meets industry standards. \r\nUnderstanding client requirements & functional specifications \r\nAnalyse and develop new features for existing websites\r\nEnsuring foolproof performance of the deliverable \r\nDevelop and deploy new features to facilitate related procedures and tools if necessary \r\nFollow industry best practices \r\nResponsible for Timely delivery', 80, 75, 8, 0, 'Kochi', '2020-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `placement_filter`
--

CREATE TABLE `placement_filter` (
  `Id` int(11) NOT NULL,
  `PlacementId` int(11) NOT NULL,
  `StudId` int(11) NOT NULL,
  `FilteredDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placement_filter`
--

INSERT INTO `placement_filter` (`Id`, `PlacementId`, `StudId`, `FilteredDate`) VALUES
(6, 2, 1, '2020-02-23'),
(12, 1, 8, '2020-02-23');

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
  `prof_pic_link` varchar(700) NOT NULL,
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

INSERT INTO `student` (`id`, `prof_pic_link`, `name`, `admno`, `dept`, `address`, `phoneno`, `username`, `password`, `flag`) VALUES
(1, '', 'Ganasyam', 32018135013, 'Computer Science', 'Palakkad', 6282370251, 'india17august', 'Ganasyam@12', 1),
(2, '', 'Arunraj R', 32018135008, 'Computer Science', 'Vallikunnam', 6238822323, 'Arunrajvkm', 'Arun@123', 1),
(3, '', 'Anandu M kurup', 32018135005, 'Computer Science', 'Budhanoor', 6282180742, 'Anandu123', 'Anandu@123', 1),
(4, '', 'Gokul Raj', 32018135014, 'Computer Science', 'Kollam', 7356304022, 'Gokul Raj', 'gkr2000kpza', 1),
(7, 'photos/ANISH1.jpg', 'ANISH', 90709, 'Computer Science', 'hfjhg', 9544424361, 'anish12', 'anish12', 1),
(8, 'photos/1926016_699513063434059_6870258237621746269_o.jpg', 'ARUN', 12345, 'Mathematics', 'hfjhg', 9544424361, 'abcd2', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stud_marks`
--

CREATE TABLE `stud_marks` (
  `id` int(11) NOT NULL,
  `stud_id` bigint(11) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `cgpa` double NOT NULL,
  `back_logs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_marks`
--

INSERT INTO `stud_marks` (`id`, `stud_id`, `sem`, `cgpa`, `back_logs`) VALUES
(2, 1, 's2', 10, 0),
(3, 2, 'S1', 0, 0),
(4, 8, 'S1', 8.9, 2),
(5, 8, 'S2', 7.3, 0),
(6, 8, 'S5', 10, 0),
(8, 8, 'S6', 9, 0),
(9, 1, 'S1', 3.4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `training_data`
--

CREATE TABLE `training_data` (
  `Id` int(11) NOT NULL,
  `Title` varchar(300) NOT NULL,
  `Description` varchar(700) NOT NULL,
  `Link` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_data`
--

INSERT INTO `training_data` (`Id`, `Title`, `Description`, `Link`) VALUES
(1, 'W3 Schools', 'Best website to learn new things', 'https://www.w3schools.com/default.asp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_Marks`
--
ALTER TABLE `basic_Marks`
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `placement_filter`
--
ALTER TABLE `placement_filter`
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `training_data`
--
ALTER TABLE `training_data`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basic_Marks`
--
ALTER TABLE `basic_Marks`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `placement`
--
ALTER TABLE `placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `placement_filter`
--
ALTER TABLE `placement_filter`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stud_marks`
--
ALTER TABLE `stud_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `training_data`
--
ALTER TABLE `training_data`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
