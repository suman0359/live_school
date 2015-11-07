-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2015 at 06:01 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `life_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(200) NOT NULL,
  `student_father_name` varchar(200) NOT NULL,
  `student_mother_name` varchar(200) NOT NULL,
  `student_gender` varchar(50) NOT NULL,
  `student_unique_code` bigint(50) NOT NULL,
  `student_date_of_birth` date NOT NULL,
  `student_email` text NOT NULL,
  `student_mobile` text NOT NULL,
  `student_academic_year` text NOT NULL,
  `student_class` varchar(100) NOT NULL,
  `student_group` varchar(200) NOT NULL,
  `student_class_position` varchar(100) NOT NULL,
  `student_shift` varchar(100) NOT NULL,
  `student_section` varchar(100) NOT NULL,
  `student_version` varchar(100) NOT NULL,
  `student_religion` varchar(50) NOT NULL,
  `student_nationality` varchar(50) NOT NULL,
  `student_photo` text NOT NULL,
  `student_hostel` text NOT NULL,
  `student_address` text NOT NULL,
  `student_active` varchar(50) NOT NULL,
  `student_transport` varchar(50) NOT NULL,
  `student_resident` varchar(50) NOT NULL,
  `student_day_care` varchar(50) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
