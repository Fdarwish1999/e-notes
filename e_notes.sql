-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 08:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Abdullah alqasmi', 'abdullah@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `contact_to_teacher`
--

CREATE TABLE `contact_to_teacher` (
  `cont_id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_to_teacher`
--

INSERT INTO `contact_to_teacher` (`cont_id`, `name`, `email`, `msg`) VALUES
(1, 'Brijesh D Mehta', 'bm123@gmail.com', 'hello'),
(2, 'ff D Mehta', 'bm123@gmail.com', 'ssds'),
(3, 'Dr Keyur Mehta', 'lata@gmail.com', 'no its not good');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_Id` int(11) NOT NULL,
  `st_name` char(30) NOT NULL,
  `st_contact` varchar(15) DEFAULT NULL,
  `st_mail` char(50) DEFAULT NULL,
  `st_pswd` char(30) NOT NULL,
  `st_uname` char(30) NOT NULL,
  `st_add` char(100) NOT NULL,
  `st_lvl` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_Id`, `st_name`, `st_contact`, `st_mail`, `st_pswd`, `st_uname`, `st_add`, `st_lvl`) VALUES
(1, 'pinu', '9601319197', 'bm@gmail.com', '1234', 'pinu', 'vapi', '');

-- --------------------------------------------------------

--
-- Table structure for table `upld_notes`
--

CREATE TABLE `upld_notes` (
  `note_id` int(3) NOT NULL,
  `note_title` varchar(100) NOT NULL,
  `note_file_name` varchar(50) NOT NULL,
  `upld_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upld_notes`
--

INSERT INTO `upld_notes` (`note_id`, `note_title`, `note_file_name`, `upld_date`) VALUES
(8, 'artic', '7d4e7.docx', ''),
(9, 'software Eng', 'fd175.docx', '05/24/2021');

-- --------------------------------------------------------

--
-- Table structure for table `upld_test`
--

CREATE TABLE `upld_test` (
  `test_id` int(3) NOT NULL,
  `test_title` varchar(100) NOT NULL,
  `test_file_name` varchar(50) NOT NULL,
  `upld_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upld_test`
--

INSERT INTO `upld_test` (`test_id`, `test_title`, `test_file_name`, `upld_date`) VALUES
(1, 'WD Test MCQ', '4c2b7.docx', '05/24/2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_to_teacher`
--
ALTER TABLE `contact_to_teacher`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_Id`);

--
-- Indexes for table `upld_notes`
--
ALTER TABLE `upld_notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `upld_test`
--
ALTER TABLE `upld_test`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_to_teacher`
--
ALTER TABLE `contact_to_teacher`
  MODIFY `cont_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `st_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upld_notes`
--
ALTER TABLE `upld_notes`
  MODIFY `note_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `upld_test`
--
ALTER TABLE `upld_test`
  MODIFY `test_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
