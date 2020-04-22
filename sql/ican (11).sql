-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 05:48 PM
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
(24, 2, 8, 'IT'),
(25, 2, 5, '3');

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
(1, 3, 3, '1'),
(2, 3, 3, '2'),
(3, 3, 3, '3'),
(4, 3, 5, '1'),
(5, 3, 5, '3');

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
(1, 1, 5, '1'),
(2, 1, 5, '3'),
(3, 1, 5, '2');

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
(181, 'lekshmi@gmail.com', '80e064608d4cbb61e4f6e994f33d6c19', 'ostaff', 1),
(182, 'manuz@gmail.com', '4e85fff0da1e8fa90070215c8e74b096', 'student', 1);

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
(6, NULL, NULL, 1, 'STAFF', 'pending works', ''),
(31, NULL, NULL, 1, 'STUDENT', 'check', '');

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
(1, 2000, 2, 182, NULL, NULL, NULL, NULL, 'Completed', '2020-04-20', 'CREDIT_CARD'),
(2, 2000, 3, 182, NULL, NULL, NULL, NULL, 'Completed', '2020-04-20', 'CREDIT_CARD'),
(3, 2000, 1, 182, NULL, NULL, NULL, NULL, 'Completed', '2020-04-20', 'CREDIT_CARD');

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
  `sid` int(11) NOT NULL,
  `loginid` int(11) NOT NULL,
  `syid` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentsub`
--

INSERT INTO `studentsub` (`sid`, `loginid`, `syid`, `subject_id`) VALUES
(8, 169, 1, 1),
(9, 169, 1, 3),
(10, 169, 1, 2),
(11, 179, 1, 3),
(12, 179, 1, 2),
(13, 182, 3, 1),
(14, 182, 3, 3);

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
(1, 182, '2020', 2000, 'Installment 1', 'Payment Completed', '2020-04-20'),
(2, 182, '2020', 2000, 'Installment 2', 'Payment Completed', '2020-04-20'),
(3, 182, '2020', 2000, 'Installment 3', 'Payment Completed', '2020-04-20');

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
  `subject` varchar(50) DEFAULT NULL,
  `total_mark` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`id`, `exam_name`, `student_id`, `syllabus_id`, `class_id`, `teacher_id`, `mark`, `subject`, `total_mark`) VALUES
(1, 'hhj', 1, 3, 5, 181, 56, 'english', 50),
(2, 'aa', 1, 3, 5, 181, 49, 'english', 50);

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
(1, 182, 'manuz', 'manuzz', 'male', '1996-04-26', '9876767876', 5, '1', '13', 989889, 'nhhhh', 'file (6).pdf', 1, 3);

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
(20, 9, '04/15/2020,04/16/2020,04/17/2020', 'Full Day', 'nbnj', '0'),
(21, 1, '04/15/2020', 'choose', 'fever', '0');

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
(23, 9, 2, 2, 1, 1, '2020-04-05'),
(24, 1, 3, 1, 3, 1, '2020-04-21');

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
(11, 'B.com'),
(13, 'dddd');

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
(6, 4, '04/05/2020,04/07/2020', 'FN', 'azasz', 1),
(8, 13, '04/23/2020', 'FN', 'fever', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject_master`
--

CREATE TABLE `tbl_subject_master` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_subject_master`
--

INSERT INTO `tbl_subject_master` (`subject_id`, `subject_name`) VALUES
(1, 'malayalam'),
(2, 'english'),
(3, 'chemistry'),
(4, 'maths');

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
  `subject_id` int(11) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `docs` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tlb_material`
--

INSERT INTO `tlb_material` (`mat_id`, `syid`, `classid`, `loginid`, `staffid`, `subject_id`, `docname`, `docs`) VALUES
(2, 3, 5, 181, 1, 3, 'demo', 'file (7) (1).pdf'),
(4, 3, 5, 181, 1, 3, 'temp', 'file (6).pdf'),
(5, 1, 5, 181, 1, 3, 'sample', 'file (4).pdf');

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
(2, 'check your salary report'),
(3, ''),
(4, 'check mail');

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
  `subject_id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `notification` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tlb_staff`
--

INSERT INTO `tlb_staff` (`loginid`, `staffid`, `name`, `gender`, `designation`, `subject_id`, `phone`, `notification`) VALUES
(181, 1, 'lekshmi', 'female', 'MA English', 2, '9876543212', 6);

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
  ADD PRIMARY KEY (`sid`),
  ADD KEY `loginid` (`loginid`),
  ADD KEY `syid` (`syid`),
  ADD KEY `subject_id` (`subject_id`);

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
-- Indexes for table `tbl_subject_master`
--
ALTER TABLE `tbl_subject_master`
  ADD PRIMARY KEY (`subject_id`);

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
  ADD KEY `staffid` (`staffid`),
  ADD KEY `subject_id` (`subject_id`);

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
  ADD KEY `loginid` (`loginid`),
  ADD KEY `subject_id` (`subject_id`);

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
  MODIFY `cbse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `icse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kerala_tbl`
--
ALTER TABLE `kerala_tbl`
  MODIFY `kerala_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logintbl`
--
ALTER TABLE `logintbl`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `ourstaff`
--
ALTER TABLE `ourstaff`
  MODIFY `osid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stafftbl`
--
ALTER TABLE `stafftbl`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentsub`
--
ALTER TABLE `studentsub`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_dues`
--
ALTER TABLE `student_dues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studtbl`
--
ALTER TABLE `studtbl`
  MODIFY `signid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stud_leave`
--
ALTER TABLE `stud_leave`
  MODIFY `leaveid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `syllabustbl`
--
ALTER TABLE `syllabustbl`
  MODIFY `syid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `classid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `leaveid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_subject_master`
--
ALTER TABLE `tbl_subject_master`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `mat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tlb_office`
--
ALTER TABLE `tlb_office`
  MODIFY `ofc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tlb_staff`
--
ALTER TABLE `tlb_staff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `studentsub`
--
ALTER TABLE `studentsub`
  ADD CONSTRAINT `studentsub_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `tbl_subject_master` (`subject_id`);

--
-- Constraints for table `tlb_material`
--
ALTER TABLE `tlb_material`
  ADD CONSTRAINT `tlb_material_ibfk_1` FOREIGN KEY (`syid`) REFERENCES `syllabustbl` (`syid`),
  ADD CONSTRAINT `tlb_material_ibfk_2` FOREIGN KEY (`classid`) REFERENCES `tbl_class` (`classid`),
  ADD CONSTRAINT `tlb_material_ibfk_3` FOREIGN KEY (`loginid`) REFERENCES `logintbl` (`loginid`),
  ADD CONSTRAINT `tlb_material_ibfk_4` FOREIGN KEY (`staffid`) REFERENCES `tlb_staff` (`staffid`),
  ADD CONSTRAINT `tlb_material_ibfk_5` FOREIGN KEY (`subject_id`) REFERENCES `tbl_subject_master` (`subject_id`);

--
-- Constraints for table `tlb_staff`
--
ALTER TABLE `tlb_staff`
  ADD CONSTRAINT `tlb_staff_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `tbl_subject_master` (`subject_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
