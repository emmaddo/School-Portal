-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2022 at 08:55 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `urn` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `joining_date` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `admission_no` varchar(50) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `admission_year` varchar(50) DEFAULT NULL,
  `admission_term` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `father_occupation` varchar(50) DEFAULT NULL,
  `father_phone` varchar(50) DEFAULT NULL,
  `father_address` varchar(50) DEFAULT NULL,
  `mother_name` varchar(50) DEFAULT NULL,
  `mother_occupation` varchar(50) DEFAULT NULL,
  `mother_phone` varchar(50) DEFAULT NULL,
  `mother_address` varchar(50) DEFAULT NULL,
  `student_image` varchar(50) DEFAULT NULL,
  `parent_image` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `verify` varchar(40) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  `reg_date` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `urn`, `pass`, `email`, `type`, `fname`, `mname`, `lname`, `joining_date`, `class`, `admission_no`, `section`, `admission_year`, `admission_term`, `phone`, `father_name`, `father_occupation`, `father_phone`, `father_address`, `mother_name`, `mother_occupation`, `mother_phone`, `mother_address`, `student_image`, `parent_image`, `religion`, `gender`, `dob`, `verify`, `status`, `reg_date`) VALUES
(41, 'admin@admin.com', 'password', 'admin@admin.com', 'student', 'Ado', 'Emmanuel', 'Ibrahim', '06-05-2022', 'Year Four', '7897987', '2022', '2022', 'Lent', '331809', 'Salawu', 'Farmer', '08036909804', '12, Oguntoyinbo Street, Oke Ijebu, Akure', 'Seun', 'Trader', '08036909804', '12, Oguntoyinbo Street, Oke Ijebu, Akure', '', '', 'Christian', 'Male', '25-04-2022', '1', 1, NULL),
(42, 'owowumi4all@yahoo.com', 'password', 'owowumi4all@yahoo.com', 'student', 'Ado', 'Adewunmi', 'Ibrahim', '07-05-2022', 'Year Three', '90876867', '2022', '2022', 'Lent', 'JSA059003', 'Salawu', 'Farmer', '08036909804', '12, Oguntoyinbo Street, Oke Ijebu, Akure', 'Seun', 'Trader', '08036909804', '12, Oguntoyinbo Street, Oke Ijebu, Akure', '', '', 'Christian', 'Female', '10-05-2022', '1', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) NOT NULL,
  `upass` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `verified_count` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `upass`, `email`, `verified_count`) VALUES
(1, 'The admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin@admin.com', 'Y');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
