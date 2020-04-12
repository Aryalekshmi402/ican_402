-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 09:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ican`
--

-- --------------------------------------------------------

--
-- Table structure for table `cbse_tbl`
--

CREATE TABLE `cbse_tbl` (
  `cbse_id` int(11) NOT NULL,
  `syid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cbse_tbl`
--

INSERT INTO `cbse_tbl` (`cbse_id`, `syid`, `classid`, `type`) VALUES
(1, 2, 8, 'civics'),
(2, 2, 8, 'history'),
(3, 2, 8, 'geography'),
(4, 2, 8, 'it'),
(5, 2, 8, 'english'),
(6, 2, 7, 'science'),
(7, 2, 7, 'botony'),
(8, 2, 7, 'chemistry'),
(9, 2, 7, 'physics'),
(10, 2, 9, 'maths'),
(11, 2, 9, 'chemistry'),
(12, 2, 9, 'physics'),
(13, 2, 6, 'biology'),
(14, 2, 4, 'chemistry'),
(15, 2, 3, 'english'),
(16, 2, 3, 'zoology'),
(17, 2, 3, 'zoology'),
(18, 2, 3, 'maths'),
(19, 2, 3, 'geography'),
(20, 2, 8, 'IT'),
(21, 2, 8, 'IT'),
(22, 2, 8, 'IT'),
(23, 2, 8, 'IT'),
(24, 2, 8, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `coursefile`
--

CREATE TABLE `coursefile` (
  `cid` int(11) NOT NULL,
  `course` varchar(15) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `files` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `course_id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`course_id`, `course`, `type`) VALUES
(5, 'KERALA', 'english'),
(6, 'KERALA', 'physics'),
(7, 'KERALA', 'chemistry'),
(8, 'CBSE', 'civics'),
(9, 'ISCE', 'fff');

-- --------------------------------------------------------

--
-- Table structure for table `icse_tbl`
--

CREATE TABLE `icse_tbl` (
  `icse_id` int(11) NOT NULL,
  `syid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icse_tbl`
--

INSERT INTO `icse_tbl` (`icse_id`, `syid`, `classid`, `type`) VALUES
(1, 3, 7, 'malayalam'),
(2, 3, 7, 'maths'),
(3, 3, 7, 'physics'),
(4, 3, 7, 'chemistry'),
(5, 3, 9, 'biology'),
(6, 3, 9, 'chemistry'),
(7, 3, 9, 'geography'),
(8, 3, 9, 'maths'),
(9, 3, 4, 'physics'),
(10, 3, 4, 'chemistry'),
(11, 3, 4, 'maths'),
(12, 3, 4, 'english'),
(13, 3, 4, 'IT'),
(14, 3, 5, 'english'),
(15, 3, 5, 'maths'),
(16, 3, 5, 'biology'),
(17, 3, 5, 'history'),
(18, 3, 6, 'civics'),
(19, 3, 6, 'economics'),
(20, 3, 6, 'botony'),
(21, 3, 2, 'computer science'),
(22, 3, 2, 'malayalam'),
(23, 3, 2, 'maths'),
(24, 3, 2, 'english');

-- --------------------------------------------------------

--
-- Table structure for table `kerala_tbl`
--

CREATE TABLE `kerala_tbl` (
  `kerala_id` int(11) NOT NULL,
  `syid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kerala_tbl`
--

INSERT INTO `kerala_tbl` (`kerala_id`, `syid`, `classid`, `type`) VALUES
(1, 1, 10, 'chemistry'),
(2, 1, 10, 'physics'),
(3, 1, 10, 'maths'),
(4, 1, 10, 'english'),
(5, 1, 9, 'english'),
(6, 1, 9, 'maths'),
(7, 1, 9, 'zoology'),
(8, 1, 9, 'botony'),
(9, 1, 8, 'geography'),
(10, 1, 8, 'maths'),
(11, 1, 8, 'computer'),
(12, 1, 8, 'chemistry'),
(13, 1, 7, 'computer'),
(14, 1, 7, 'english'),
(15, 1, 7, 'biology'),
(16, 1, 7, 'physics'),
(17, 1, 7, 'malayalam'),
(18, 1, 7, 'maths'),
(19, 1, 6, 'maths'),
(20, 1, 6, 'english'),
(21, 1, 6, 'chemistry'),
(22, 1, 6, 'zoology'),
(23, 1, 5, 'english'),
(24, 1, 5, 'biology'),
(25, 1, 5, 'maths'),
(26, 1, 4, 'englsih'),
(27, 1, 4, 'social'),
(28, 1, 3, 'malayalam'),
(29, 1, 3, 'social'),
(30, 1, 3, 'science'),
(31, 1, 2, 'maths'),
(32, 1, 2, 'english'),
(33, 1, 1, 'maths');

-- --------------------------------------------------------

--
-- Table structure for table `logintbl`
--

CREATE TABLE `logintbl` (
  `loginid` int(11) NOT NULL,
  `emailid` varchar(60) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(15) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintbl`
--

INSERT INTO `logintbl` (`loginid`, `emailid`, `password`, `usertype`, `status`) VALUES
(1, 'admin123@gmail.com', '751cb3f4aa17c36186f4856c8982bf27', 'admin', 1),
(118, 'aryalekshmis@mca.ajce.in', 'f1c8d1ab26aac5a0f1dfbc9a61d33b58', 'student', 1),
(119, 'aryasyama402@gmail.com', '73479a9d05b2cfcfb13b25b14bd1dc7f', 'student', 1),
(121, 'rohit@gmail.com', '2ef4ac2d220a25223bf2c8ee82329643', 'ostaff', 1),
(122, 'sandheep@gmail.com', '2ef4ac2d220a25223bf2c8ee82329643', 'ostaff', 1),
(123, 'kiran@gmail.com', 'd64bc53880b945869498f0322b7802b1', 'ostaff', 1),
(129, 'syama@gmail.com', '73479a9d05b2cfcfb13b25b14bd1dc7f', 'student', 1),
(130, 'mm@gmail.com', 'e6c0ca62d154392667ed5f9ecd12a21d', 'ostaff', 1),
(131, 'yy@gmail.com', 'e6c0ca62d154392667ed5f9ecd12a21d', 'ostaff', 1),
(135, 'AKHIL@gmail.com', '68892a47a132b11a38dd1525da4122a7', 'student', 0),
(136, 'kiran11111@gmail.com', '9fe15d55cf3ea9884531f5cacfa13efe', 'student', 0),
(137, 'admi11n123@gmail.com', '8b2da86af05e589a6d262c7334f55a83', 'student', 0),
(138, 'aryal@gmail.com', 'ac4f887c2a4a52fdab35f90e7bf7e296', 'ostaff', 1),
(139, 'xxxxxxx@gmail.com', '1f98809c3d66a1fb9fa68d7da1fd5738', 'student', 0),
(140, 'ccccc@gmail.com', 'da72f85b050e33fdb1c69e386c1da495', 'student', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `type` int(11) NOT NULL,
  `audiance` varchar(11) NOT NULL COMMENT 'student/staff',
  `message` varchar(1000) NOT NULL,
  `seen_by` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `date`, `time`, `type`, `audiance`, `message`, `seen_by`) VALUES
(1, '2020-04-15', '14:13:18', 1, 'STAFF', 'salary may be delayed due to covid 19', ''),
(2, NULL, NULL, 1, 'STAFF', 'Sample notification', ''),
(3, NULL, NULL, 1, 'STAFF', 'sdfsdfs', ''),
(4, NULL, NULL, 1, 'STAFF', 'result published', ''),
(5, NULL, NULL, 1, 'STAFF', 'check', ''),
(6, NULL, NULL, 1, 'STAFF', 'pending works', '');

-- --------------------------------------------------------

--
-- Table structure for table `ourstaff`
--

CREATE TABLE `ourstaff` (
  `osid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ourstaff`
--

INSERT INTO `ourstaff` (`osid`, `name`, `email`, `mob`, `sub`, `dob`, `address`) VALUES
(2, 'sooraj', 'sooraj@gmail.com', '8767656545', 'physics', '', ''),
(3, 'sandheep', 'sandheep345@gmail.co', '9876543212', 'chemistry', '', ''),
(4, 'dona', 'donarose@gmail.com', '9767545654', 'English', '', ''),
(5, 'Syam das', 'syamdas@gmail.com', '9898787678', 'History', '', ''),
(6, 'Binulal Balachandran', 'binulal@gmail.com', '9976545654', 'Physics', '', ''),
(7, 'Surya lekshmi.S', 'suryalekshmi@gmail.c', '9854323456', 'Economics', '', ''),
(8, 'asetr', 'ase@gmail.com', '8767877677', 'hgftg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `amount` double DEFAULT NULL,
  `fees_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `card_no` varchar(100) DEFAULT NULL,
  `expiry` varchar(50) DEFAULT NULL,
  `cvv` varchar(20) DEFAULT NULL,
  `holder_name` varchar(100) DEFAULT NULL,
  `status` enum('Completed','Pending') NOT NULL DEFAULT 'Pending',
  `payment_date` date DEFAULT NULL,
  `payment_mode` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `amount`, `fees_id`, `student_id`, `card_no`, `expiry`, `cvv`, `holder_name`, `status`, `payment_date`, `payment_mode`) VALUES
(1, 3000, 1, 129, '7676788888888', '08 / 21', '489', 'arya', 'Completed', '2020-03-29', NULL),
(2, 3000, 2, 129, '45678987777', '12/28', '987', 'sdcc', 'Completed', '2021-03-29', NULL),
(3, 3000, 3, 129, '8888 8888 8888 8888 888', '07 / 7777', '9999', 'hjg7', 'Pending', '2020-03-29', NULL),
(4, 3000, 7, 129, '9999999999999999', '08 / 7777', '489', 'huhy', 'Pending', '2020-03-29', NULL),
(5, 3000, 8, 129, '5677 6477 7377 7366 677', '12 / 2020', '22', 'frf', 'Pending', '2020-03-29', NULL),
(12, 3000, 9, 129, NULL, NULL, NULL, NULL, 'Completed', '2020-04-12', 'NET_BANKING');

-- --------------------------------------------------------

--
-- Table structure for table `stafftbl`
--

CREATE TABLE `stafftbl` (
  `staffid` int(11) NOT NULL,
  `loginid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `ge` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `mob` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `proof` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentsub`
--

CREATE TABLE `studentsub` (
  `subid` int(11) NOT NULL,
  `loginid` int(11) NOT NULL,
  `syid` int(11) NOT NULL,
  `sub` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentsub`
--

INSERT INTO `studentsub` (`subid`, `loginid`, `syid`, `sub`) VALUES
(1, 83, 1, 'maths'),
(2, 83, 1, 'computer'),
(3, 83, 1, 'chemistry'),
(4, 84, 1, 'maths'),
(5, 84, 1, 'zoology'),
(6, 85, 2, 'maths'),
(7, 85, 2, 'chemistry'),
(8, 85, 2, 'physics'),
(9, 89, 1, 'zoology'),
(10, 90, 2, 'botony'),
(11, 90, 2, 'chemistry'),
(12, 90, 2, 'physics'),
(13, 91, 1, 'maths'),
(14, 91, 1, 'zoology'),
(15, 98, 1, 'biology'),
(16, 98, 1, 'maths'),
(17, 100, 1, 'biology'),
(18, 100, 1, 'maths'),
(19, 102, 1, 'english'),
(20, 102, 1, 'biology'),
(21, 102, 1, 'maths'),
(22, 110, 3, 'chemistry'),
(23, 110, 3, 'maths'),
(24, 110, 3, 'english'),
(25, 112, 2, 'chemistry'),
(26, 113, 1, 'computer'),
(27, 113, 1, 'english'),
(28, 113, 1, 'biology'),
(29, 113, 1, 'malayalam'),
(30, 113, 1, 'maths'),
(31, 114, 2, 'biology'),
(32, 115, 2, 'it'),
(33, 115, 2, 'english'),
(34, 117, 1, 'social'),
(35, 117, 1, 'science'),
(36, 118, 3, 'chemistry'),
(37, 118, 3, 'maths'),
(38, 118, 3, 'english'),
(39, 119, 3, 'english'),
(40, 119, 3, 'maths'),
(41, 127, 1, 'maths'),
(42, 127, 1, 'english'),
(43, 127, 1, 'chemistry'),
(44, 127, 1, 'zoology'),
(45, 128, 2, 'zoology'),
(46, 128, 2, 'zoology'),
(47, 128, 2, 'maths'),
(48, 129, 3, 'maths'),
(49, 129, 3, 'biology'),
(50, 129, 3, 'history'),
(51, 135, 1, 'maths'),
(52, 135, 1, 'english'),
(53, 135, 1, 'chemistry'),
(54, 140, 1, 'english'),
(55, 140, 1, 'biology');

-- --------------------------------------------------------

--
-- Table structure for table `student_dues`
--

CREATE TABLE `student_dues` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `year` varchar(35) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `installment_no` varchar(100) DEFAULT NULL,
  `status` enum('Payment Pending','Payment Completed','') DEFAULT NULL,
  `payment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_dues`
--

INSERT INTO `student_dues` (`id`, `student_id`, `year`, `amount`, `installment_no`, `status`, `payment_date`) VALUES
(1, 129, '2020', 3000, 'Installment 1', 'Payment Pending', NULL),
(2, 129, '2020', 3000, 'Installment 2', 'Payment Pending', NULL),
(3, 129, '2020', 3000, 'Installment 3', 'Payment Pending', NULL),
(4, 118, '2021', 3000, 'Installment 1', 'Payment Pending', NULL),
(5, 118, '2021', 3000, 'Installment 2', 'Payment Pending', NULL),
(6, 118, '2021', 3000, 'Installment 3', 'Payment Pending', NULL),
(7, 129, '2021', 3000, 'Installment 1', 'Payment Pending', NULL),
(8, 129, '2021', 3000, 'Installment 2', 'Payment Completed', '2020-04-12'),
(9, 129, '2021', 3000, 'Installment 3', 'Payment Completed', '2020-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `id` int(11) NOT NULL,
  `exam_name` varchar(100) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `syllabus_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `mark` double DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`id`, `exam_name`, `student_id`, `syllabus_id`, `class_id`, `teacher_id`, `mark`, `subject`) VALUES
(1, 'SSLC', 3, 1, 5, 123, 55, 'computer'),
(2, 'SSLC', 9, 1, 5, 123, 66, 'computer'),
(3, 'SSLC', 10, 1, 5, 123, 77, 'computer'),
(4, 'SSLC', 14, 1, 5, 123, 88, 'computer'),
(5, 'ty', 3, 1, 5, 123, 55, 'computer'),
(6, 'ty', 9, 1, 5, 123, 88, 'computer'),
(7, 'ty', 10, 1, 5, 123, 22, 'computer'),
(8, 'ty', 14, 1, 5, 123, 88, 'computer'),
(9, '', 3, 1, 5, 123, 55, 'computer'),
(10, '', 9, 1, 5, 123, 58, 'computer'),
(11, '', 10, 1, 5, 123, 85, 'computer'),
(12, '', 14, 1, 5, 123, 12, 'computer');

-- --------------------------------------------------------

--
-- Table structure for table `studtbl`
--

CREATE TABLE `studtbl` (
  `signid` int(5) NOT NULL,
  `loginid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `gname` varchar(25) NOT NULL,
  `ge` varchar(8) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `course` int(11) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pin` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `proof` varchar(2000) NOT NULL,
  `notification` int(11) NOT NULL DEFAULT 0,
  `syllabus_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studtbl`
--

INSERT INTO `studtbl` (`signid`, `loginid`, `fname`, `gname`, `ge`, `dob`, `mob`, `course`, `state`, `district`, `pin`, `city`, `proof`, `notification`, `syllabus_id`) VALUES
(2, 118, 'sandhya', 'surendran', 'female', '1990-09-09', '9008987876', 4, '1', '4', 878767, 'hgg', 'sequence (2).pdf', 0, NULL),
(3, 119, 'arjun', 'sreenibvasan', 'male', '1998-06-06', '6765654567', 5, '1', '3', 432333, 'df', 'ACTIVITY.pdf', 0, 1),
(4, 124, 'arya', 'surendran', 'female', '1995-09-08', '7678898787', 7, '1', '2', 690540, 'kunnathoor', 'DEPLOYMENT.pdf', 0, NULL),
(5, 125, 'lekshmi', 'surendran', 'female', '1998-09-08', '9876765656', 7, '1', '2', 987876, 'kkkk', 'sequence (2).pdf', 0, NULL),
(6, 126, 'vv', 'vv', 'male', '2001-08-08', '7877676767', 6, '1', '1', 989898, 'jbhj', 'lechuresume.pdf', 0, 3),
(7, 127, 'j', 'j', 'male', '1999-09-07', '9878787879', 6, '2', '18', 878776, 'jj', 'lechuresume.pdf', 0, 1),
(9, 129, 'syama', 'surendran', 'female', '1990-07-05', '9878767655', 5, '1', '3', 898766, 'kkk', 'sequence (2).pdf', 2, 1),
(10, 135, 'ghggh', 'FGHJKL', 'male', '2020-03-04', '9562530061', 5, '1', '4', 656565, 'fghjkl', 'Screenshot (5).png', 0, 1),
(11, 136, 'dfgh', 'dfghj', 'male', '2020-03-02', '9562547852', 7, '2', '17', 685952, 'fghj', 'Screenshot (7).png', 0, NULL),
(12, 137, 'drftgyhu', 'rftgyhuj', 'male', '2020-03-25', '9867546756', 11, '1', '3', 685524, 'trfghj', 'Screenshot (11).png', 0, NULL),
(13, 139, 'drtfgyhjfgvh', 'rtfyguhifg', 'female', '2019-12-08', '9540003548', 11, '1', '1', 686589, 'Kotm', '476288.jpg', 0, NULL),
(14, 140, 'jhkjhjdfghj', 'dxfgvhjk', 'female', '2020-01-27', '9765645678', 5, '1', '2', 689568, 'ktm', '15112_625.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stud_leave`
--

CREATE TABLE `stud_leave` (
  `leaveid` int(11) NOT NULL,
  `signid` int(11) NOT NULL,
  `ldate` varchar(80) NOT NULL,
  `session` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_leave`
--

INSERT INTO `stud_leave` (`leaveid`, `signid`, `ldate`, `session`, `reason`, `status`) VALUES
(1, 3, '2020-02-04', 'FN', 'xxx', '1'),
(2, 3, '04/14/2020', 'AN', 'bnb', '1'),
(5, 11, '2020-02-18', 'FN', 'funeral', '1'),
(6, 11, '2020-02-17', 'FN', 'sick', '1'),
(7, 16, '2020-03-01', 'AN', 'sick', '-1'),
(8, 3, '2020-03-16', 'AN', 'fever', '1'),
(9, 9, '0000-00-00', 'AN', 'fever', '1'),
(10, 9, '04/15/2020,04/16/2020,04/17/2020', 'FN', 'hbjhb', '1'),
(11, 9, '0000-00-00,04/01/2020', 'Full Day', 'rty', '1'),
(12, 9, '0000-00-00,04/12/2020,04/13/2020', 'AN', 'aaaaaa', '1'),
(13, 9, '0000-00-00,04/16/2020,04/17/2020', 'FN', 'stomach pain', '1'),
(14, 9, '0000-00-00,04/03/2020', 'FN', 'aaaa', '1'),
(15, 9, '04/13/2020,04/15/2020', 'FN', 'blalala', '1'),
(16, 9, '03/20/2020,03/21/2020,03/23/2020', 'AN', 'aqwsed', '1'),
(17, 9, '04/06/2020', 'FN', 'nbhj', '1'),
(18, 9, '04/20/2020', 'FN', 'hbhj', '1'),
(19, 9, '04/19/2020', 'FN', 'mn', '0'),
(20, 9, '04/15/2020,04/16/2020,04/17/2020', 'Full Day', 'nbnj', '0');

-- --------------------------------------------------------

--
-- Table structure for table `syllabustbl`
--

CREATE TABLE `syllabustbl` (
  `syid` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syllabustbl`
--

INSERT INTO `syllabustbl` (`syid`, `Name`) VALUES
(1, 'KERALA'),
(2, 'CBSE'),
(3, 'ICSE'),
(4, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `attendance_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `session_number` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`attendance_id`, `student_id`, `session_number`, `session_id`, `duration`, `status`, `date`) VALUES
(12, 2, 2, 2, 2, 1, '2020-03-23'),
(13, 2, 1, 2, 4, 1, '2020-03-19'),
(14, 3, 2, 2, 5, 1, '2020-03-24'),
(15, 9, 2, 2, 5, 1, '2020-03-24'),
(16, 9, 3, 3, 2, 1, '2020-03-24'),
(17, 3, 3, 1, 0, 0, '2020-04-01'),
(18, 9, 3, 1, 2, 1, '2020-04-01'),
(19, 2, 3, 2, 1, 1, '2020-04-01'),
(20, 3, 4, 3, 0, 0, '2020-04-05'),
(21, 9, 4, 3, 2, 1, '2020-04-05'),
(22, 3, 2, 2, 1, 1, '2020-04-05'),
(23, 9, 2, 2, 1, 1, '2020-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `classid` int(11) NOT NULL,
  `classname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`classid`, `classname`) VALUES
(1, '3'),
(2, '4'),
(3, '5'),
(4, '6'),
(5, '7'),
(6, '8'),
(7, '9'),
(8, '10'),
(9, 'Plus One'),
(10, 'Plus Two'),
(11, 'B.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class_sessions`
--

CREATE TABLE `tbl_class_sessions` (
  `session_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_class_sessions`
--

INSERT INTO `tbl_class_sessions` (`session_id`, `name`) VALUES
(1, 'Morning'),
(2, 'Afternoon'),
(3, 'Evening');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam`
--

CREATE TABLE `tbl_exam` (
  `exid` int(11) NOT NULL,
  `syid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `loginid` int(11) NOT NULL,
  `exam` varchar(50) NOT NULL,
  `mark` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_exam`
--

INSERT INTO `tbl_exam` (`exid`, `syid`, `classid`, `loginid`, `exam`, `mark`, `subject`) VALUES
(1, 1, 7, 91, ' dsf', '5', ''),
(2, 1, 7, 91, ' main', '80', 'hindi'),
(3, 1, 7, 91, ' Annual Exam', '76', 'English'),
(4, 1, 7, 91, ' fd', '3', 't'),
(5, 1, 7, 91, ' main', '9', 'maths'),
(7, 2, 6, 115, ' ad', '12', 'economics'),
(9, 1, 3, 0, ' ', '', ''),
(10, 2, 7, 0, ' ', '', ''),
(11, 1, 1, 0, ' ', '', ''),
(12, 1, 2, 0, ' sedrftgyh', '', 'hhjhjhj'),
(13, 1, 5, 0, ' ', '', 'computer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE `tbl_leave` (
  `leaveid` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `ldate` varchar(90) NOT NULL,
  `session` varchar(50) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_leave`
--

INSERT INTO `tbl_leave` (`leaveid`, `staffid`, `ldate`, `session`, `reason`, `status`) VALUES
(1, 0, '04/07/2020', 'AN', 'aa', 0),
(2, 4, '04/14/2020', 'FN', 'bbb', 1),
(3, 4, '04/13/2020,04/14/2020,04/15/2020', 'Full Day', 'cccc', 1),
(4, 4, '04/08/2020,04/09/2020,04/10/2020', 'AN', 'awer', 1),
(5, 4, '', 'FN', 'asadd', 1),
(6, 4, '04/05/2020,04/07/2020', 'FN', 'azasz', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tlb_district`
--

CREATE TABLE `tlb_district` (
  `districtid` int(11) NOT NULL,
  `district` varchar(80) NOT NULL,
  `stateid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tlb_district`
--

INSERT INTO `tlb_district` (`districtid`, `district`, `stateid`) VALUES
(1, 'Thiruvanathapuram', 1),
(2, 'Kollam', 1),
(3, 'Pathanamthitta', 1),
(4, 'Alappuzha', 1),
(5, 'Kottayam', 1),
(6, 'Idukki', 1),
(7, 'Ernakulam', 1),
(8, 'Thrissur', 1),
(9, 'Palakkad', 1),
(10, 'Malappuram', 1),
(11, 'Kozhikode', 1),
(12, 'Wayanad', 1),
(13, 'Kannur', 1),
(14, 'Kasargode', 1),
(15, 'Madurai', 2),
(16, 'Chennai', 2),
(17, 'Vellore', 2),
(18, 'Salem', 2),
(19, 'Thiruvallur', 2),
(20, 'Kanchipuram', 2),
(21, 'Thirunelveli', 2),
(22, 'Thoothukudi', 2),
(23, 'Erode', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tlb_documents`
--

CREATE TABLE `tlb_documents` (
  `docid` int(11) NOT NULL,
  `docs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tlb_documents`
--

INSERT INTO `tlb_documents` (`docid`, `docs`) VALUES
(3, 'B612_20200330_192747_392.jpg'),
(4, 'budha.jpg'),
(5, 'budha2.jpg'),
(6, 'B612_20200330_192747_392.jpg'),
(7, 'B612_20200330_193013_390.jpg'),
(8, 'B612_20200330_223315_009.jpg'),
(9, 'B612_20200330_223454_165.jpg'),
(10, 'IMG_20200330_193252.jpg'),
(11, 'activity.eddx'),
(12, 'class.eddx'),
(13, 'collaboration.eddx'),
(14, 'object.eddx'),
(15, 'statechart.eddx'),
(16, 'usecase.eddx'),
(17, 'sequence.eddx'),
(18, 'object.eddx'),
(19, 't.jpg'),
(20, 'd.jpg'),
(21, 'c.jpg'),
(22, 'b.jpg'),
(23, 'file (1).pdf'),
(24, 'c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tlb_material`
--

CREATE TABLE `tlb_material` (
  `mat_id` int(11) NOT NULL,
  `syid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `loginid` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `docs` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tlb_material`
--

INSERT INTO `tlb_material` (`mat_id`, `syid`, `classid`, `loginid`, `staffid`, `docname`, `docs`) VALUES
(1, 1, 4, 123, 4, 'gh', 'file (1).pdf'),
(2, 2, 3, 123, 4, 'gvgh', 'c.jpg'),
(3, 3, 7, 123, 4, 'vgv', 'document_upload.php'),
(4, 3, 7, 123, 4, 'okl', 'd.jpg'),
(5, 3, 7, 123, 4, 'fgxg', 'b.jpg'),
(6, 2, 5, 123, 4, 'cs', 'tlb_material.sql'),
(7, 1, 7, 123, 4, 'gthy', 'file (1).pdf'),
(8, 3, 5, 138, 9, 'vjhgv', 'file (1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tlb_office`
--

CREATE TABLE `tlb_office` (
  `ofc_id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tlb_office`
--

INSERT INTO `tlb_office` (`ofc_id`, `message`) VALUES
(1, 'hai hello'),
(2, 'check your salary report');

-- --------------------------------------------------------

--
-- Table structure for table `tlb_staff`
--

CREATE TABLE `tlb_staff` (
  `loginid` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `notification` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tlb_staff`
--

INSERT INTO `tlb_staff` (`loginid`, `staffid`, `name`, `gender`, `designation`, `subject`, `phone`, `notification`) VALUES
(121, 2, 'rohit', 'male', 'Mcom', 'Maths', '9888789878', 0),
(122, 3, 'sandheep', 'male', 'MA English', 'English', '8766756789', 0),
(123, 4, 'kiran', 'male', 'mca', 'computer', '9878767656', 6),
(130, 5, 'mm', 'male', 'mm', 'hjh', '8988878987', 0),
(131, 6, 'nn', 'male', 'bbb', 'nbnb', '7788888888', 0),
(138, 9, 'aryalekshmi', 'female', 'bv vb', 'biology', '9878767654', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tlb_state`
--

CREATE TABLE `tlb_state` (
  `stateid` int(1) NOT NULL,
  `state_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tlb_state`
--

INSERT INTO `tlb_state` (`stateid`, `state_name`) VALUES
(1, 'Kerala'),
(2, 'Tamilnadu\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cbse_tbl`
--
ALTER TABLE `cbse_tbl`
  ADD PRIMARY KEY (`cbse_id`),
  ADD KEY `classid` (`classid`),
  ADD KEY `syid` (`syid`);

--
-- Indexes for table `coursefile`
--
ALTER TABLE `coursefile`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `icse_tbl`
--
ALTER TABLE `icse_tbl`
  ADD PRIMARY KEY (`icse_id`),
  ADD KEY `classid` (`classid`),
  ADD KEY `syid` (`syid`);

--
-- Indexes for table `kerala_tbl`
--
ALTER TABLE `kerala_tbl`
  ADD PRIMARY KEY (`kerala_id`),
  ADD KEY `classid` (`classid`),
  ADD KEY `syid` (`syid`);

--
-- Indexes for table `logintbl`
--
ALTER TABLE `logintbl`
  ADD PRIMARY KEY (`loginid`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `ourstaff`
--
ALTER TABLE `ourstaff`
  ADD PRIMARY KEY (`osid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stafftbl`
--
ALTER TABLE `stafftbl`
  ADD PRIMARY KEY (`staffid`),
  ADD KEY `loginid` (`loginid`),
  ADD KEY `loginid_2` (`loginid`);

--
-- Indexes for table `studentsub`
--
ALTER TABLE `studentsub`
  ADD PRIMARY KEY (`subid`),
  ADD KEY `loginid` (`loginid`),
  ADD KEY `syid` (`syid`);

--
-- Indexes for table `student_dues`
--
ALTER TABLE `student_dues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studtbl`
--
ALTER TABLE `studtbl`
  ADD PRIMARY KEY (`signid`),
  ADD KEY `loginid` (`loginid`),
  ADD KEY `course` (`course`);

--
-- Indexes for table `stud_leave`
--
ALTER TABLE `stud_leave`
  ADD PRIMARY KEY (`leaveid`),
  ADD KEY `signid` (`signid`);

--
-- Indexes for table `syllabustbl`
--
ALTER TABLE `syllabustbl`
  ADD PRIMARY KEY (`syid`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `tbl_class_sessions`
--
ALTER TABLE `tbl_class_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  ADD PRIMARY KEY (`exid`),
  ADD KEY `syid` (`syid`),
  ADD KEY `classid` (`classid`),
  ADD KEY `loginid` (`loginid`);

--
-- Indexes for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  ADD PRIMARY KEY (`leaveid`),
  ADD KEY `staffid` (`staffid`);

--
-- Indexes for table `tlb_district`
--
ALTER TABLE `tlb_district`
  ADD PRIMARY KEY (`districtid`),
  ADD KEY `stateid` (`stateid`);

--
-- Indexes for table `tlb_documents`
--
ALTER TABLE `tlb_documents`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `tlb_material`
--
ALTER TABLE `tlb_material`
  ADD PRIMARY KEY (`mat_id`),
  ADD KEY `syid` (`syid`),
  ADD KEY `classid` (`classid`),
  ADD KEY `loginid` (`loginid`),
  ADD KEY `staffid` (`staffid`);

--
-- Indexes for table `tlb_office`
--
ALTER TABLE `tlb_office`
  ADD PRIMARY KEY (`ofc_id`);

--
-- Indexes for table `tlb_staff`
--
ALTER TABLE `tlb_staff`
  ADD PRIMARY KEY (`staffid`),
  ADD KEY `loginid` (`loginid`);

--
-- Indexes for table `tlb_state`
--
ALTER TABLE `tlb_state`
  ADD PRIMARY KEY (`stateid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cbse_tbl`
--
ALTER TABLE `cbse_tbl`
  MODIFY `cbse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `coursefile`
--
ALTER TABLE `coursefile`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `icse_tbl`
--
ALTER TABLE `icse_tbl`
  MODIFY `icse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kerala_tbl`
--
ALTER TABLE `kerala_tbl`
  MODIFY `kerala_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `logintbl`
--
ALTER TABLE `logintbl`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `ourstaff`
--
ALTER TABLE `ourstaff`
  MODIFY `osid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stafftbl`
--
ALTER TABLE `stafftbl`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentsub`
--
ALTER TABLE `studentsub`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `student_dues`
--
ALTER TABLE `student_dues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `studtbl`
--
ALTER TABLE `studtbl`
  MODIFY `signid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stud_leave`
--
ALTER TABLE `stud_leave`
  MODIFY `leaveid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `syllabustbl`
--
ALTER TABLE `syllabustbl`
  MODIFY `syid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `classid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_class_sessions`
--
ALTER TABLE `tbl_class_sessions`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  MODIFY `exid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_leave`
--
ALTER TABLE `tbl_leave`
  MODIFY `leaveid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tlb_district`
--
ALTER TABLE `tlb_district`
  MODIFY `districtid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tlb_documents`
--
ALTER TABLE `tlb_documents`
  MODIFY `docid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tlb_material`
--
ALTER TABLE `tlb_material`
  MODIFY `mat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tlb_office`
--
ALTER TABLE `tlb_office`
  MODIFY `ofc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tlb_staff`
--
ALTER TABLE `tlb_staff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tlb_state`
--
ALTER TABLE `tlb_state`
  MODIFY `stateid` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cbse_tbl`
--
ALTER TABLE `cbse_tbl`
  ADD CONSTRAINT `cbse_tbl_ibfk_1` FOREIGN KEY (`syid`) REFERENCES `syllabustbl` (`syid`),
  ADD CONSTRAINT `cbse_tbl_ibfk_2` FOREIGN KEY (`classid`) REFERENCES `tbl_class` (`classid`);

--
-- Constraints for table `icse_tbl`
--
ALTER TABLE `icse_tbl`
  ADD CONSTRAINT `icse_tbl_ibfk_1` FOREIGN KEY (`syid`) REFERENCES `syllabustbl` (`syid`),
  ADD CONSTRAINT `icse_tbl_ibfk_2` FOREIGN KEY (`classid`) REFERENCES `tbl_class` (`classid`);

--
-- Constraints for table `kerala_tbl`
--
ALTER TABLE `kerala_tbl`
  ADD CONSTRAINT `kerala_tbl_ibfk_1` FOREIGN KEY (`syid`) REFERENCES `syllabustbl` (`syid`),
  ADD CONSTRAINT `kerala_tbl_ibfk_2` FOREIGN KEY (`classid`) REFERENCES `tbl_class` (`classid`);

--
-- Constraints for table `stafftbl`
--
ALTER TABLE `stafftbl`
  ADD CONSTRAINT `stafftbl_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `logintbl` (`loginid`);

--
-- Constraints for table `tlb_material`
--
ALTER TABLE `tlb_material`
  ADD CONSTRAINT `tlb_material_ibfk_1` FOREIGN KEY (`syid`) REFERENCES `syllabustbl` (`syid`),
  ADD CONSTRAINT `tlb_material_ibfk_2` FOREIGN KEY (`classid`) REFERENCES `tbl_class` (`classid`),
  ADD CONSTRAINT `tlb_material_ibfk_3` FOREIGN KEY (`loginid`) REFERENCES `logintbl` (`loginid`),
  ADD CONSTRAINT `tlb_material_ibfk_4` FOREIGN KEY (`staffid`) REFERENCES `tlb_staff` (`staffid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
