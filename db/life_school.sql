-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2015 at 06:45 AM
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
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(30) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`) VALUES
(1, 'One'),
(2, 'Two'),
(3, 'Three'),
(4, 'Four'),
(5, 'Five'),
(6, 'Six'),
(7, 'Seven'),
(8, 'Eight'),
(9, 'Nine'),
(10, 'Ten'),
(11, 'Eleven'),
(12, 'Twelve');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
  `designation_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation_name` varchar(30) NOT NULL,
  PRIMARY KEY (`designation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_name`) VALUES
(8, 'Headmaster'),
(9, 'Asistance Headmaster'),
(10, 'Teacher'),
(11, 'Lecturer'),
(12, 'Principal');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_user_id` int(5) NOT NULL COMMENT 'user table primary key',
  `employee_first_name` varchar(100) NOT NULL,
  `employee_last_name` varchar(100) NOT NULL,
  `employee_code` varchar(50) NOT NULL,
  `employee_gender` tinyint(1) NOT NULL,
  `employee_maritial_status` tinyint(1) NOT NULL,
  `religion` tinyint(1) NOT NULL COMMENT '1 for ''Islam''; 2 for ''Hindu''; 3 for ''Christian''; 4 for ''Buddha'', 5 for ''Others''',
  `employee_nationality` varchar(30) NOT NULL,
  `employee_national_id_no` varchar(100) NOT NULL,
  `employee_dob` date NOT NULL,
  `employee_address` text NOT NULL,
  `employee_city` varchar(30) NOT NULL,
  `employee_postal_code` varchar(10) NOT NULL,
  `employee_country_code` smallint(3) NOT NULL,
  `employee_home_telephone` varchar(50) NOT NULL,
  `employee_work_telephone` varchar(50) NOT NULL,
  `employee_mobile` varchar(50) NOT NULL,
  `employee_work_email` varchar(50) NOT NULL,
  `employee_other_email` varchar(50) NOT NULL,
  `employee_profile_picture` text NOT NULL,
  `employee_status` tinyint(1) NOT NULL DEFAULT '1',
  `employee_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 for permanent, 2 for contructual',
  `joining_date` date NOT NULL DEFAULT '2015-01-01',
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_user_id`, `employee_first_name`, `employee_last_name`, `employee_code`, `employee_gender`, `employee_maritial_status`, `religion`, `employee_nationality`, `employee_national_id_no`, `employee_dob`, `employee_address`, `employee_city`, `employee_postal_code`, `employee_country_code`, `employee_home_telephone`, `employee_work_telephone`, `employee_mobile`, `employee_work_email`, `employee_other_email`, `employee_profile_picture`, `employee_status`, `employee_type`, `joining_date`) VALUES
(1, 2, 'Shah', 'Alam', 'BFL-101', 1, 1, 1, 'Bangladeshi', '2694259591944', '1981-01-11', 'C/O.160,New palton Line,(4th floor)', 'Dhaka', '1234', 1, '', '', '01926680803', 'Shahalam321@yahoo.com', '', 'upload/employee_pic/1429087264.jpg', 1, 1, '2015-01-01'),
(2, 3, 'Md. Golam', 'Mostafa', 'BFL-102', 1, 2, 1, 'Bangladeshi', '6115247555884', '1982-02-01', 'Rebeka nir,1118/7,khibarirtak,Badda,\nDhaka-1212', 'Dhaka', '1234', 1, '', '', '01740910945', 'mostafabfl@gmail.com', '', 'upload/employee_pic/1429088039.jpg', 0, 1, '2015-01-01'),
(3, 4, 'Md. Kawsar', 'Alam', 'BFL-103', 1, 2, 1, 'Bangladeshi', '1324907418225', '1982-02-01', '461/1,dIsha villa, East kafrul, Dhaka cant,Dhaka-1206', 'Dhaka', '1234', 1, '', '', '01710567383', 'Kawsar_alam007@yahoo.com', '', 'upload/employee_pic/1429088695.jpg', 0, 1, '2015-01-01'),
(4, 5, 'Goutam Kumar', 'Dhar', 'BFL-104', 1, 1, 2, 'Bangladeshi', '6125215284896', '1984-12-11', '53/A Jasmin,maskada zaban sahaben msjid,Mymenshingh', 'Dhaka', '1234', 1, '', '', '01926680816', '', '', 'upload/employee_pic/1429089445.jpg', 0, 1, '2015-01-01'),
(5, 6, 'Md.', 'Omar Chisty', 'BFL-901', 1, 2, 1, 'Bangladeshi', '2613660272472', '1977-04-03', '1587,East Nandipara,P.O-Bashaboo,P.S-Shabujbag', 'Dhaka', '1200', 1, '01825896000', '01919828385', '01919828385', 'Omar.chisty@yahoo.com', '', 'upload/employee_pic/1429098220.jpg', 0, 1, '2015-01-01'),
(6, 7, 'Jannatul', 'Ferdous', 'BFL-920', 2, 2, 1, 'Bangladeshi', '', '1988-08-11', 'House-06,Road-02,block D,2nd Floor Rampura mohanagore project,Dhaka-1219', 'Dhaka', '1219', 1, '01924130545', '01924130545', '01924130545', 'Sat_hkl10@yahoo.com', '', 'upload/employee_pic/1429098563.jpg', 0, 1, '2015-01-01'),
(7, 8, 'Ahmed', 'Murtaza Amin', 'BFL-926', 1, 1, 1, 'Bangladeshi', '', '2013-06-02', 'Dhaka', 'Dhaka', '1200', 1, '01920901885', '', '01920901885', '', '', 'upload/employee_pic/1429098770.png', 0, 1, '2015-01-01'),
(8, 9, 'Md.', 'Rifat Rahman', 'BFL-1406', 1, 1, 1, 'Bangladeshi', '2694813877156', '1989-01-01', '942,east Monipur,mirpur-2', 'Dhaka', '1200', 1, '', '', '01730995312', '', '', 'upload/employee_pic/1429098930.jpg', 0, 1, '2015-01-01'),
(9, 10, 'Jannat', 'Ara Anne', 'BFL-1201', 1, 1, 1, 'Bangladeshi', '3918563082199', '2015-04-15', '385/A,Katashur,Mohammodpur,Dhaka-1207', 'Dhaka', '1200', 1, '', '', '01718584262', 'Jannatara.anne@gmail.com', '', 'upload/employee_pic/1429099131.jpg', 0, 1, '2015-01-01'),
(10, 11, 'Rakibur', 'Rahman', 'BFL-1202', 1, 1, 1, 'Bangladeshi', '9329517323452', '1985-04-01', 'Shahadatpur,Gulshan,Dhaka-1212', 'Dhaka', '1212', 1, '', '', '01914128021', '', '', 'upload/employee_pic/1429099493.jpg', 0, 1, '2015-01-01'),
(11, 13, 'Farzana', 'Rashid Luna', 'BFL-1204', 2, 1, 1, 'Bangladeshi', '', '1985-01-01', 'Plot:53/4,lane:10/2,block:A,section:13,Mirpur,Dhaka', 'Dhaka', '1200', 1, '', '', '01671492848', '', '', 'upload/employee_pic/1429100201.jpg', 1, 1, '2015-01-01'),
(12, 14, 'Md.', 'Shahadat Hossain', 'BFL-1205', 1, 1, 1, 'Bangladeshi', '1314577967412', '1988-01-01', 'Vill:Gabdargon,Post:RupshaBazar,PS:Faridgong,Dist:Chandpur', 'Dhaka', '1200', 1, '', '', '01814217347', 'Sagadat27@yahoo.com', '', 'upload/employee_pic/1429100364.jpg', 0, 1, '2015-01-01'),
(13, 15, 'Md.', 'Rafiqul Islam', 'BFL-1208', 1, 1, 1, 'Bangladeshi', '8819429632583', '1987-02-01', 'Vill:Mosha kola,Post:Kyrabazar,PS:Uiiapara,Dist:Sirajgong', 'Dhaka', '1200', 1, '', '', '017848690780', '', '', 'upload/employee_pic/1429100491.jpg', 0, 1, '2015-01-01'),
(14, 16, 'Md.', 'Sakil Ahmed', 'BFL-1209', 1, 1, 1, 'Bangladeshi', '3313497666755', '1987-02-14', 'Vill:UttaraSom.PO:SomNatunBazar,PS:Kaligong,Gazipur', 'Dhaka', '1200', 1, '', '', '01911499124', '', '', 'upload/employee_pic/1429100595.jpg', 0, 1, '2015-01-01'),
(15, 17, 'Mojibur', 'Rahman Rana', 'BFL-107', 1, 2, 1, 'Bangladeshi', '', '1977-03-01', 'Vill:chokman.Post:Moshang,PS:Uzirpur,Dist:Borisal', 'Dhaka', '1200', 1, '', '', '0123456789', '', '', 'upload/employee_pic/', 0, 1, '2015-01-01'),
(16, 18, 'Md.', 'Mominul Islam', 'BFL-1104', 1, 2, 1, 'Bangladeshi', '1987271259155942', '1987-07-05', 'Vill:Horihorpur,P.O:Binnakury,PS:Chirirbandar,Dist:Dinajpir', 'Dhaka', '1200', 1, '', '', '01737110049', 'Momin_mone@yahoo.com', '', 'upload/employee_pic/1429100935.jpg', 0, 1, '2015-01-01'),
(17, 19, 'Md.', 'Solaiman', 'BFL-201', 1, 2, 1, 'Bangladeshi', '', '1956-02-02', 'Vill:Rupkania,P.O:Satkaniya,P.S:Satkaniya,Dist:Chittagong', 'Dhaka', '1000', 1, '', '', '01812855965', '', '', 'upload/employee_pic/1429101980.jpg', 1, 1, '2015-01-01'),
(18, 20, 'Md.', 'Mahfuzur Rahman', 'BFL-202', 1, 1, 1, 'Bangladeshi', '', '1988-02-20', '31/1-Sarker Bari Road,East Arichpur,Munnunagar,Tongi,Gazipur.', 'Dhaka', '1000', 1, '', '', '01916519838', '', '', 'upload/employee_pic/', 1, 1, '0000-00-00'),
(19, 21, 'Bithi', 'Sarkar', 'BFL-203', 2, 1, 2, 'Bangladeshi', '', '1987-12-31', 'Lions eye institute and Hospital,Agargaon,Dhaka-1207,Bangladesh', 'Dhaka', '1200', 1, '', '', '01914649758', '', '', 'upload/employee_pic/1429178822.jpg', 1, 1, '0000-00-00'),
(20, 22, 'Md.', 'Islam Uddin', 'BFL-204', 1, 2, 1, 'Bangladeshi', '', '1969-08-21', 'G.P.K-30,Shahjadpur,Gulshan-2,Dhaka-1212', 'Dhaka', '1000', 1, '', '', '01924856890', '', '', 'upload/employee_pic/1429178952.jpg', 1, 1, '0000-00-00'),
(21, 23, 'Shimi', 'Chakma', 'BFL-205', 2, 1, 1, 'Bangladeshi', '2699039654020', '1984-02-03', 'Zahir Raihan color lab, B.F.D.C Tejgong ,Dhaka-1208', 'Dhaka', '1208', 1, '', '', '01556442274', '', '', 'upload/employee_pic/1429179121.jpg', 1, 1, '0000-00-00'),
(22, 24, 'Mobassera', 'Khatun', 'BFL-206', 2, 1, 1, 'Bangladeshi', '', '1988-03-20', 'Vill-koylug,P.O-Bajitpur,P.S-Bajitpur,Dist-Kishorgonj', 'Dhaka', '1200', 1, '', '', '01916882887', '', '', 'upload/employee_pic/1429179333.jpg', 1, 1, '0000-00-00'),
(23, 25, 'Thashin', 'Ahmed', 'BFL-209', 1, 1, 1, 'Bangladeshi', '2694811041249', '1987-10-12', 'Vill-Fathepur,post-Munshirhat,P.S:Fulgazi,Dist-Feni', 'Dhaka', '1212', 1, '', '', '01918656377', '', '', 'upload/employee_pic/1429179556.jpg', 1, 1, '0000-00-00'),
(24, 26, 'Mahmudul', 'Hassan', 'BFL-210', 1, 1, 1, 'Bangladeshi', '4421905137113', '1989-11-14', '1084 Khilbarirtak,Gulshan,Dhaka-1212', 'Dhaka', '1212', 1, '', '', '01922880856', '', '', 'upload/employee_pic/1429179755.jpg', 1, 1, '0000-00-00'),
(25, 27, 'Yamin', 'Rikhu', 'BFL-211', 1, 1, 1, 'Bangladeshi', '', '1990-10-25', 'c/oAlhaz Abdul Razzak Raja,House-106,flat-1/302,Estern mofizbag,central road,Dhanmondi,Dhaka-1205', 'Dhaka', '1000', 1, '', '', '01717531449', '', '', 'upload/employee_pic/1429179950.jpg', 1, 1, '0000-00-00'),
(26, 28, 'Md.', 'Tawhed Alam', 'BFL-212', 1, 1, 1, '19921216382000064', '', '1992-12-30', 'Vill:Mehary,P.O:Mehary,P.S:Kashba', 'Dhaka', '1212', 1, '', '', '01911641536', 'Tawhed_a@yahoo.com', '', 'upload/employee_pic/1429180070.jpg', 1, 1, '0000-00-00'),
(27, 29, 'Md.', 'Rezaul Karim', 'BFL-213', 1, 1, 1, 'Bangladeshi', '19924217331000007', '1992-01-01', 'T.S.CNG Refueling and Conversion Ltd.,Near to bypal Bridge ,Ashulia,Savar ,Dhaka', 'Dhaka', '1000', 1, '', '', '01723531168', 'Rezaul870986@gmail.com', '', 'upload/employee_pic/1429180907.jpg', 1, 1, '0000-00-00'),
(28, 30, 'Rabeya', 'Siddika', 'BFL-214', 2, 1, 1, 'Bangladeshi', '', '1981-03-15', 'C/O,Md,Golam mostofa Maleka pharmacy,Bilashpur road,joydevpur ,Gazipur', 'Dhaka', '1000', 1, '', '', '01758460160', '', '', 'upload/employee_pic/1429181069.jpg', 1, 1, '0000-00-00'),
(29, 31, 'Md. Fazle', 'Rabbi Khan', 'BFL-218', 1, 1, 1, 'Bangladeshi', '19925824601000034', '1992-10-04', 'Vill:joyra,P.O:Manikgonj,P.S:manikgonj,Dist:Manikgonj', 'Dhaka', '1200', 1, '', '', '01675209600', '', '', 'upload/employee_pic/1429181193.jpg', 1, 1, '0000-00-00'),
(30, 32, 'Md.', 'Torikul Islam', 'BFL-219', 1, 1, 1, 'Bangladeshi', '', '1990-08-23', 'Depara,k-depara,Bagerhat', 'Dhaka', '1000', 1, '', '', '01712515725', '', '', 'upload/employee_pic/1429181350.jpg', 1, 1, '0000-00-00'),
(31, 33, 'Md.', 'Imran Hossain Khan', 'BFL-221', 1, 1, 1, 'Bangladeshi', '', '1991-05-15', 'Holding:1797,DHANGOVANSONA ROAD,24 NO WARD,SAGARDI,BARISAL', 'BARISAL', '1200', 1, '', '', '01724254315', '', '', 'upload/employee_pic/1429181534.jpg', 1, 1, '0000-00-00'),
(32, 34, 'Raihan', 'Sarker', 'BFL-223', 1, 1, 1, 'Bangladeshi', '19903212465000232', '1990-01-03', 'Durgapur,Kuptala,Gaibanda Sadar,Gaibanda', 'Gaibanda', '1200', 1, '', '', '01722774092', 'rayhansarker@gmail.com', '', 'upload/employee_pic/1429181691.jpg', 1, 1, '0000-00-00'),
(33, 35, 'Ali', 'Haider', 'BFL-227', 1, 1, 1, 'Bangladeshi', '', '1991-01-01', 'Purba Chandapur,Bariar hat,Dagonbhuiyan,Feni', 'Feni', '1000', 1, '', '', '01684952710', '', '', 'upload/employee_pic/1429181871.jpg', 1, 1, '0000-00-00'),
(34, 36, 'Md.', 'Natikur Rahman', 'BFL-232', 1, 1, 1, 'Bangladeshi', '', '1991-01-01', 'Vill:Mirjapur,post:Dinajpur-5200,thana:Dinajpur sadar,Dinajpur', 'Dhaka', '1000', 1, '', '', '01841080207', '', '', 'upload/employee_pic/1429182074.jpg', 1, 1, '0000-00-00'),
(35, 37, 'Md.', 'Mofakharul Islam', 'BFL-23', 1, 2, 1, 'Bangladeshi', '', '1982-08-25', 'H-17,R-11,block-D,5Th floor,Pallabi,Mirpur-12,Dhaka', 'Dhaka', '1212', 1, '', '', '01678004254', 'Mofakharul2010@gmail.com', '', 'upload/employee_pic/1429182294.jpg', 1, 1, '0000-00-00'),
(36, 38, 'Mamunuzzaman', 'Masud', 'BFL-236', 1, 2, 1, 'Bangladeshi', '2696402515671', '1981-02-04', 'House378/1,Osman koloni,Boliyapur,savar,Dhaka,Bnagladesh', 'Dhaka', '1000', 1, '', '', '01912007535', '', '', 'upload/employee_pic/1429182449.jpg', 1, 1, '0000-00-00'),
(37, 39, 'Md.', 'Zakir Hossain', 'BFL-237', 1, 2, 1, 'Bangladeshi', '19812617233000031', '1981-01-01', 'Vill:Dilruba Bus stand,Post+P.S:Shazadpur,Dist:Sirazgonj', 'Dhaka', '1000', 1, '', '', '01712434461', 'Rakib_spl.@otobi.com', '', 'upload/employee_pic/1429182582.jpg', 1, 1, '0000-00-00'),
(38, 40, 'Md.', 'Saiful Islam', 'BFL-708', 1, 1, 1, 'Bangladeshi', '1315855611849', '1989-01-27', 'Vill:Monpura,P.O:Monpura,P.S:Kachua,Dist:Chandpur', 'Dhaka', '1000', 1, '', '', '01716342428', '', '', 'upload/employee_pic/1429957668.jpeg', 1, 1, '2015-01-01'),
(39, 41, 'Md.', 'Mahmud Jaman', 'BFL-710', 1, 1, 1, 'Bangladeshi', '', '1992-02-01', 'Vill:Arifpur,P.O:Pabna,P.S:Pabna Sadar,Dist:Pabna', 'Dhaka', '1000', 1, '', '', '01723254642', '', '', 'upload/employee_pic/1429957703.jpeg', 1, 1, '0000-00-00'),
(40, 42, 'Md.', 'Rokon Uddin', 'BFL-712', 1, 1, 1, 'Bangladeshi', '1510875414373', '1989-12-13', 'Banigram,Banshkhali,Chittagong', 'Dhaka', '1200', 1, '', '', '01824420787', '', '', 'upload/employee_pic/1429957740.jpeg', 1, 1, '0000-00-00'),
(41, 43, 'Md.', 'Jahan Miah', 'BFL-713', 1, 1, 1, 'Bangladeshi', '', '1989-11-03', 'H#07,Bagbari,Sylhet-3100', 'Dhaka', '1000', 1, '', '', '01717918518', '786jahanjp8@gmail.com', '', 'upload/employee_pic/1429184156.jpg', 1, 1, '0000-00-00'),
(42, 44, 'Al', 'Imran', 'BFL-718', 1, 1, 1, 'Bangladeshi', '555555', '1989-01-07', '53,ShekhparaMain road,Khulna', 'khulna', '1000', 1, '', '', '01718125965', '', '', 'upload/employee_pic/1429957861.jpeg', 1, 1, '0000-11-30'),
(43, 45, 'Md.', 'Mosiur', 'BFL-726', 1, 2, 1, 'Bangladeshi', '8613659542493', '1983-06-05', '76/2-E/8/7,North jatrabari,Bebeir Bagecha,jatrabari,Dhaka', 'Dhaka', '1000', 1, '', '', '01714873013', 'Mr.mashiur@yahoo.com', '', 'upload/employee_pic/1429184663.jpg', 1, 1, '0000-00-00'),
(44, 46, 'Taj', 'Uddin', 'BFL-730', 1, 1, 1, 'Bangladeshi', '3313047067243', '1989-02-01', '282,Baro Moghbazar,Dhaka', 'Dhaka', '1000', 1, '', '', '01924132804', 'Smtajmahal986@gmail.com', '', 'upload/employee_pic/1429957901.jpeg', 1, 1, '0000-00-00'),
(45, 47, 'Zohirul', 'Islam', 'BFL-731', 1, 1, 1, 'Bangladeshi', '1917482746135', '1983-03-06', 'H#82,B#J,Progoti Sharani,Bharidara,Dhaka-1212', 'Dhaka', '1200', 1, '', '', '01839319802', '', '', 'upload/employee_pic/1429957932.jpeg', 1, 1, '0000-00-00'),
(46, 48, 'MD.', 'Sansuzzaman', 'BFL-732', 1, 1, 1, 'Bangladeshi', '', '1986-09-21', 'East Monipur,Kathal tola,Mirpur,Dhaka-1216', 'Dhaka', '1000', 1, '', '', '01727871120', '', '', 'upload/employee_pic/1429185103.jpg', 1, 1, '0000-00-00'),
(47, 49, 'Md.', 'Millon Khan', 'BFL-733', 1, 1, 1, 'Bangladeshi', '19931322671001240', '1993-12-20', 'H-07,R-2/C,Block-J,Bharidara,Dhaka-1216', 'Dhaka', '1000', 1, '', '', '01798587300', 'Navidkhan@yahoo.com', '', 'upload/employee_pic/1429957963.jpeg', 1, 1, '0000-00-00'),
(48, 50, 'MD.', 'Delwar hussain', 'BFL-734', 1, 1, 1, 'Bangladeshi', '19925816589000095', '1992-01-21', 'Vill:Sonjobpur,P.O:Telibil,P.S:Kulaura,Dist:Moulvibazar', 'Dhaka', '1000', 1, '', '', '01733630129', '', '', 'upload/employee_pic/1429185376.jpg', 1, 1, '0000-00-00'),
(49, 51, 'Anwar', 'Parvej', 'BFL-735', 1, 1, 1, 'Bangladeshi', '2613894273901', '1988-04-04', 'H#14(1st floor),purbabanda Dakpara,,Golambazar road,Zinzira,Keraniganj,Dhaka-1310', 'Dhaka', '1310', 1, '', '', '01912724581', '2005alix@gmail.com', '', 'upload/employee_pic/1429958015.jpeg', 1, 1, '2015-01-01'),
(50, 52, 'Sharif', 'Hossen', 'BFL-736', 1, 1, 1, 'Bangladeshi', '19910916523000182', '1991-03-01', 'Vill:Charjotin,P.O:Hajirhat,P.S:zMonpura,Dist:Bhola', 'Dhaka', '1000', 1, '', '01717923206', '019112183330', '', '', 'upload/employee_pic/1429185672.jpg', 1, 1, '0000-00-00'),
(51, 53, 'Arif', 'Raihan', 'BFL-738', 1, 2, 1, 'Bangladeshi', '', '1991-12-29', 'Vill:Jizkhula,post:patke;ghata,Upazilla:Tala,Dist;satkhira', 'Dhaka', '1000', 1, '', '', '01942127253', '', '', 'upload/employee_pic/1429958049.jpeg', 1, 1, '2015-01-01'),
(52, 54, 'Kazi', 'Sohel Miah', 'BFL-739', 1, 1, 1, 'Bangladeshi', '1219036683999', '1986-06-25', '13/C(5th floor)Kazi abdul rouf road,Kalta bazar,Dhaka', 'Dhaka', '1000', 1, '', '', '01716850523', 'Kazisohel86@gmail.com', '', 'upload/employee_pic/1429186046.jpg', 1, 1, '2015-01-01'),
(53, 55, 'Md.', 'Abul Hasnat', 'BFL-740', 1, 1, 1, 'Bangladeshi', '', '1989-03-28', 'H-28,Raipara,Post:Sopura-6203,Shahmukdum,Rajshahi', 'Dhaka', '1000', 1, '', '', '01913790102', '', '', 'upload/employee_pic/1429186182.jpg', 1, 1, '0000-00-00'),
(54, 56, 'Md.', 'Amit Hasan Saykat', 'BFL-741', 1, 1, 1, 'Bangladeshi', '', '2000-04-16', 'Dhaka', 'Dhaka', '1000', 1, '', '', '0123456789', '', '', 'upload/employee_pic/1429186359.jpg', 1, 1, '2015-01-01'),
(55, 57, 'Md.', 'SALIM AHMED', 'BFL-', 1, 2, 1, 'Bangladeshi', '1022013117355', '1981-03-01', 'Vill:Koygari,Post:bogra,Thana:Bogra sadar,Dist:Bogra', 'Dhaka', '1000', 1, '', '', '01718078840', '', '', 'upload/employee_pic/1429186481.jpg', 1, 1, '2015-01-01'),
(56, 58, 'Razu', 'Ahmed', 'BFL-112', 1, 1, 1, 'Bangladeshi', '3313496680120', '1988-08-11', 'Llma House#39,T.I.C coloni,primary school raod,Uttara, Dhaka-1230', 'Dhaka', '1230', 1, '', '', '01937664867', '', '', 'upload/employee_pic/1429701570.jpg', 1, 1, '2015-01-01'),
(57, 59, 'Md.', 'Mizanur Rahman', 'BFL-501', 1, 2, 1, 'Bangladeshi', '', '1982-12-10', 'Abu taher hazi house*(1st floor),Khilbarirtak shajadpur,gulshan', 'Dhaka', '1000', 1, '', '', '01926680811', '', '', 'upload/employee_pic/1429957336.jpeg', 1, 1, '0000-00-00'),
(58, 60, 'Md.', 'Mamun Khan', 'BFL-502', 1, 1, 1, 'Bangladeshi', '', '1985-08-11', '1084,khilbarirtak shajadpur,Gulshan,Dhaka-1212', 'Dhaka', '1212', 1, '', '', '01926680820', '', '', 'upload/employee_pic/1429957376.jpeg', 1, 1, '2015-01-30'),
(59, 61, 'Md.', 'Imrul Hassan', 'BFL-503', 1, 1, 1, 'Bangladeshi', '', '1995-08-03', 'Pipulia,pubail,Kaligonj,Gajipur\nMirpur 10, Dhaka-1216.', 'Dhaka', '1216', 1, '', '01676811712', '01784353339', 'Imrul.Hasan92@yahoo.com', '', 'upload/employee_pic/1429957424.jpeg', 1, 1, '2015-01-01'),
(60, 62, 'Md.', 'Babul Hasan', 'BFL-519', 1, 1, 1, 'Bangladeshi', '0110851222131', '1988-08-15', 'Vill:Depara,Post:k,Depara,Ps+Dis:Bagerhat', 'Dhaka', '1000', 1, '', '', '01711143916', '', '', 'upload/employee_pic/1429957284.jpeg', 1, 1, '2015-01-01'),
(61, 63, 'Monirul Islam', 'Bokshi', 'BFL-702', 1, 2, 1, 'Bangladeshi', '', '1984-01-01', 'Bokshi Monzil,Housing state road,Hazrat para,Comilla-3500', 'Comilla', '3500', 1, '', '', '01926680812', '', '', 'upload/employee_pic/1429687750.jpg', 1, 1, '2015-01-01'),
(62, 64, 'A.B.M. Sazzad', 'Hossain', 'BFL-703', 1, 2, 1, 'Bangladeshi', '4794509131734', '1975-08-26', 'SHAHANAJ VILLA,1st Floor,Flat-B,Solman central mousque road-2,Word no-2<east bvaridara,Badda,Gulshan-1212', 'Dhaka', '1212', 1, '', '', '01771576697', 'Sazzadhossain771@yahoo.com', '', 'upload/employee_pic/1429688119.jpg', 1, 1, '2015-01-01'),
(63, 65, 'Farzana', 'Sarkar', 'BFL-705', 1, 2, 1, 'Bangladeshi', '2692618491756', '1989-09-16', 'D.C.C.KA-30,South Shahzadpur,Gulshan,Dhaka-1212', 'Dhaka', '1212', 1, '', '', '01835126476', 'Farzanasarkar_19@yahoo.com', '', 'upload/employee_pic/1429688327.jpg', 1, 1, '2015-01-01'),
(64, 66, 'Md. Ruhul', 'Amin', 'BFL-723', 1, 2, 1, 'Bangladeshi', '2697408859462', '1973-05-04', '198/A,(3rd floor)Ulon Bazar,West Rampura,Dhaka', 'Dhaka', '1212', 1, '', '', '01920336044', 'Amin.mr999@gmail.com', '', 'upload/employee_pic/1429688515.jpg', 1, 1, '2015-01-01'),
(65, 67, 'Mohammad', 'Ruhul Amin', 'BFL-724', 1, 2, 1, 'Bangladeshi', '2918415467462', '1982-11-30', 'H#286/C(2nd floor),Latif sarder len,Boro Maghbazar,Dhaka-1217', 'Dhaka', '1217', 1, '', '', '01717843188', 'Masud_ruhul@yahoo.com', '', 'upload/employee_pic/1429688686.jpg', 1, 1, '2015-01-01'),
(66, 68, 'Khalid', 'Shaifullah Murad', 'BFL-729', 1, 2, 1, 'Bangladeshi', '19877511038708167', '1987-01-01', '230,Satarkul road,Abdullahbag,Badda,Dhaka-1212,Bangladesh', 'Dhaka', '1212', 1, '', '01794130722', '01915052877', 'Murad_imran@ymail.com', '', 'upload/employee_pic/1429688838.jpg', 1, 1, '2015-01-01'),
(67, 69, 'Sirajun', 'Nuha', 'BFL-220', 1, 1, 1, 'Bangladeshi', '', '1985-08-23', 'House No,Ovijan151/1,Aouchpara,Tongi College Gate,Gazipur', 'Dhaka', '1000', 1, '', '', '01912109939', 'nohaipe@yahoo.com', '', 'upload/employee_pic/1429689088.jpg', 1, 1, '2015-01-01'),
(68, 70, 'Saiful', 'Alam', 'BFL-226', 1, 1, 1, 'Bangladeshi', '', '1991-01-13', 'BIM Sobhanbag,Dhanmondi 27,Mirpur,Dhaka-1207.', 'Dhaka', '1207', 1, '', '', '01552316812', 'Saiful.alam.ipeo7@gmail.com', '', 'upload/employee_pic/1429689215.jpg', 1, 1, '0000-00-00'),
(69, 71, 'A.S.M.', 'Tanvir Hasan', 'BFL-234', 1, 1, 1, 'Bangladeshi', '19912694809000286', '1991-09-19', '15/5 A Jahanabad.Mirpur-1,Dhaka-1216', 'Dhaka', '1216', 1, '', '01722258182', '01520083280', 'neeltoha@gmail.com', '', 'upload/employee_pic/1429689355.jpg', 1, 1, '2015-01-01'),
(70, 72, 'Rashedul', 'Ahsan Rubel', 'BFL-1502', 1, 2, 1, 'Bangladeshi', '2694811020743', '1976-11-05', 'Vill:Gowripur,Post:Ashulia,PS:Ashulia,Dist:Dhaka', 'Dhaka', '1000', 1, '', '', '01912985641', 'rubelridhi@gmail.com', '', 'upload/employee_pic/1429689941.jpg', 1, 1, '2015-01-01'),
(71, 73, 'Shobnam', 'Mustary', 'BFL-1503', 2, 2, 2, 'Bangladeshi', '', '1975-07-01', 'Matri Chya 118,north Bashabo Khilgoan,Dhaka', 'Dhaka', '1000', 1, '', '', '01625333997', '', '', 'upload/employee_pic/1429690081.jpg', 1, 1, '2015-01-01'),
(72, 74, 'Abu', 'Zafor', 'BFL-1504', 1, 1, 1, 'Bangladeshi', '1813135366304', '1984-01-16', 'Vill:Joyrumpur,P.O:Joyrumpur,PS:Damurhuda,Dist:Chuadanga', 'Chuadanga', '7200', 1, '', '', '01726538879', '', '', 'upload/employee_pic/1429690241.jpg', 1, 1, '0000-00-00'),
(73, 75, 'Md. Jobaer', 'Hossain', 'BFL-2201', 1, 1, 1, 'Bangladeshi', '0012455666666', '2015-04-22', 'dhaka', 'Dhaka', '1000', 1, '', '', '0123456789', '', '', 'upload/employee_pic/1429690370.jpg', 1, 1, '2015-01-01'),
(74, 76, 'Md. Kaikobad', 'Hossain', 'BFL-1505', 1, 1, 1, 'Bangladeshi', '19912650898000367', '1989-02-22', 'House-12,Road-17,Block-C.Pollobe,Mirpur,Dhaka-1216', 'Dhaka', '1216', 1, '', '', '01671696186', 'Kaikobad.Patwary@yahoo.com', '', 'upload/employee_pic/1429695387.jpg', 1, 1, '2015-01-01'),
(75, 77, 'Md.', 'Mahedi Hassan', 'BFL-1901', 1, 2, 1, 'Bangladeshi', '19857918776000013', '1985-11-21', 'Vill+Post:Shohadal,P.S:Nesarbad(swarukathi)Dist:Pirojpur', 'Dhaka', '1000', 1, '', '', '01911212117', 'M85hasan@gmail.com', '', 'upload/employee_pic/1429695607.jpg', 1, 1, '2015-01-01'),
(76, 78, 'Humayun', 'Kabir', 'BFL-2002', 1, 2, 1, 'Bangladeshi', '0919185633472', '1987-02-25', 'Vill:Shombhupur,Post:Khaserhat,PS:Tozumiddin,Dirst:Bhola', 'Dhaka', '1000', 1, '', '', '01191275482', 'Himu nub@yahoo.com', '', 'upload/employee_pic/1429695780.jpg', 1, 1, '2015-01-01'),
(77, 79, 'Anamika', 'Khanom', 'BFL-2003', 2, 1, 1, 'Bangladeshi', '2610413971028', '1982-08-02', 'Vill+Post:Sohagdal,P/S:Nasarbad,Dist:Pirojpur', 'Dhaka', '1000', 1, '', '', '01717988013', '', '', 'upload/employee_pic/1429696121.jpg', 1, 1, '2015-01-01'),
(78, 80, 'Jhumpa', 'Mukherjee', 'BFL-2006', 2, 2, 2, 'Bangladeshi', '6527606116522', '1983-11-01', 'Vill:Ghullia,P.O:Binodpur,P/S:Mohammadpur,DistMagura', 'Dhaka', '1000', 1, '', '01976473160', '01723245612', 'Jhumu001@yahoo.com', '', 'upload/employee_pic/1429696391.jpg', 1, 1, '2015-01-01'),
(79, 81, 'Md. Abdul', 'Hai', 'BFL-1501', 1, 2, 1, 'Bangladeshi', '19852690417511047', '1985-05-18', 'Vill:Najirabad,PO:Najirabad,P.S:Moulovi bazar,Dist:Sylhet', 'Dhaka', '1000', 1, '', '', '01922162222', 'Sajithail805@gamil.com', '', 'upload/employee_pic/1429696607.jpg', 1, 1, '2015-01-01'),
(80, 82, 'Azmayeen', 'Shahadot', 'BFL-1903', 1, 1, 1, 'Bangladeshi', '', '1985-03-02', 'Chowmohoni,Doyaleer More,Naogaon', 'Dhaka', '1000', 1, '', '', '01676345064', '', '', 'upload/employee_pic/1429696974.jpg', 1, 1, '2015-01-01'),
(81, 83, 'Jewel', 'Das', 'BFL-2200', 1, 1, 1, 'Bangladeshi', '', '1989-01-02', 'Vill:Konda Moddha Para,Post:Nagor Konda,Upzilla:Savar,Dist:Dhaka', 'Dhaka', '1000', 1, '', '01711481189', '01912532128', 'Jewel.das.bd88@gmail.com', '', 'upload/employee_pic/1429697108.jpg', 1, 1, '2015-01-01'),
(82, 84, 'Md. Mizanur', 'Rahman', 'BFL-2202', 1, 2, 1, 'Bangladeshi', '', '1988-06-05', 'Vill:Padama,P.O:Koromjatala,P/S:Patharghata,Dist:Borguna', 'Dhaka', '1000', 1, '', '', '01736839993', '', '', 'upload/employee_pic/', 1, 1, '0000-00-00'),
(83, 85, 'Kamrul Islam', 'Babu', 'BFL-1702', 1, 2, 1, 'Bangladeshi', '', '1982-07-06', 'Ga-103,Middle Badda,Badda,Gulshan,Dhaka-1212', 'Dhaka', '1212', 1, '', '', '01712720230', '', '', 'upload/employee_pic/1429697441.jpg', 1, 1, '0000-00-00'),
(84, 86, 'Md.', 'Sayeem', 'BFL-1703', 1, 1, 1, 'Bangladeshi', '2696405631407', '1986-12-01', '11/C,2/6,Avenue5,Mirpur,Dhaka-1216', 'Dhaka', '1216', 1, '', '01829164990', '01674931994', 'Sn_559@yahoo.com', '', 'upload/employee_pic/1429697770.jpg', 1, 1, '2015-01-01'),
(85, 87, 'Md. Emran', 'Hossain', 'BFL-106', 1, 1, 1, 'Bangladeshi', '', '1981-03-12', '195,Fokirapool,1st lane(4th floor),Mothijeel,Dhaka', 'Dhaka', '1200', 1, '', '', '01739859452', '', '', 'upload/employee_pic/1429700056.jpg', 1, 1, '2015-01-01'),
(86, 88, 'Md. Faisal', 'Ahammed', 'BFL-110', 1, 2, 1, 'Bangladeshi', '3313496673815', '1986-01-10', 'Vill:pipulia,Post:Pubail,thana:kaligang,Gazipur', 'Gazipur', '1000', 1, '', '', '01770011180', 'Fisalahamed65@yahoo.com', '', 'upload/employee_pic/1429700730.jpg', 1, 1, '2015-01-01'),
(87, 89, 'Md.', 'Rafiqul Islam', 'BFL-111', 1, 2, 1, 'Bangladeshi', '', '1987-07-01', 'Vill:Notun Fulbari(east), P.O: sirajgang, P.S:Sirajgang', 'Dhaka', '1000', 1, '', '', '01558686268', '', '', 'upload/employee_pic/1429701013.jpg', 1, 1, '0000-00-00'),
(88, 90, 'Amaz', 'Uddin Rana', 'BFL-1407', 1, 1, 1, 'Bangladeshi', '19915117331000016', '1991-11-25', 'House-W/3,Noorjahan road,mohammadpur,Dhaka-1207', 'Dhaka', '1207', 1, '', '', '01685727813', 'Rana8677@gmail.com', '', 'upload/employee_pic/1429704091.jpg', 1, 1, '2015-01-01'),
(89, 91, 'Mahmud', 'Hassan', 'BFL-3734', 1, 1, 1, 'Bangladeshi', '4342435435435', '1989-09-28', 'Rampura, Banasree, Dhaka - 1219', 'Dhaka', '1219', 1, '', '', '01987796644', 'mahmud@and.com.bd', '', 'upload/employee_pic/1431949480.png', 1, 1, '2015-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_code` text NOT NULL,
  `exam_name` varchar(30) NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `school_code`, `exam_name`) VALUES
(1, '', '1st Term Exam'),
(2, '', '2nd Term Exam'),
(3, '', 'Final Exam');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(30) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`group_id`, `group_name`) VALUES
(1, 'Science'),
(2, 'Arts'),
(3, 'Commerce'),
(4, 'General'),
(6, 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE IF NOT EXISTS `hostel` (
  `hostel_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_code` text NOT NULL,
  `hostel_name` varchar(30) NOT NULL,
  PRIMARY KEY (`hostel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostel_id`, `school_code`, `hostel_name`) VALUES
(1, '', 'yy'),
(2, '', 'fdgsd'),
(3, '', 'Final hostel');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_name` varchar(30) NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE IF NOT EXISTS `shift` (
  `shift_id` int(11) NOT NULL AUTO_INCREMENT,
  `shift_name` varchar(30) NOT NULL,
  PRIMARY KEY (`shift_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`shift_id`, `shift_name`) VALUES
(1, 'Morning'),
(2, 'Day'),
(3, 'Night'),
(5, 'pp');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(200) NOT NULL,
  `student_fname` varchar(200) NOT NULL,
  `student_mname` varchar(200) NOT NULL,
  `student_gender` varchar(50) NOT NULL,
  `student_ucode` bigint(50) NOT NULL,
  `student_date_birth` date NOT NULL,
  `student_email` text NOT NULL,
  `student_mobile` text NOT NULL,
  `student_ayear` text NOT NULL,
  `student_class` varchar(100) NOT NULL,
  `student_group` varchar(200) NOT NULL,
  `student_cposition` varchar(100) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_code` text NOT NULL,
  `subject_name` varchar(30) NOT NULL,
  `group_id` int(11) NOT NULL,
  `subject_assign_subjective_marks` text NOT NULL,
  `subject_assign_objective_marks` text NOT NULL,
  `practical_marks` text NOT NULL,
  `subject_assign_ct_marks` text NOT NULL,
  `subject_assign_mt_marks` text NOT NULL,
  `is_optional` int(2) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `school_code`, `subject_name`, `group_id`, `subject_assign_subjective_marks`, `subject_assign_objective_marks`, `practical_marks`, `subject_assign_ct_marks`, `subject_assign_mt_marks`, `is_optional`) VALUES
(1, '123', 'Bangla 1st', 4, '50', '40', '0', '10', '0', 1),
(2, '123', 'Bangla 2nd', 4, '50', '40', '0', '10', '0', 1),
(3, '123', 'English 1st', 4, '50', '40', '0', '10', '0', 0),
(4, '123', 'English 2nd', 4, '50', '40', '0', '10', '0', 0),
(5, '123', 'Religion', 4, '50', '40', '0', '10', '0', 0),
(6, '123', 'Agriculture', 4, '50', '40', '0', '10', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_status` tinyint(1) NOT NULL COMMENT '1 for enable, 2 for disable',
  `user_role` tinyint(1) NOT NULL COMMENT '0 for ''Employee''; 1 for ''Dept Head''; 2 for ''Accounts Head''; 3 for ''Accounts Executive''; 4 for ''HR Executive''; 5 for ''HR Head''; 6 for ''Admin''; 7 for ''Super Admin''',
  `user_profile_image` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_status`, `user_role`, `user_profile_image`) VALUES
(1, 'rajib', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, ''),
(2, '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `version`
--

CREATE TABLE IF NOT EXISTS `version` (
  `version_id` int(11) NOT NULL AUTO_INCREMENT,
  `version_name` varchar(30) NOT NULL,
  PRIMARY KEY (`version_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `version`
--

INSERT INTO `version` (`version_id`, `version_name`) VALUES
(1, 'Bangla'),
(2, 'English'),
(3, 'Bangla & English'),
(6, 'sadfa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
