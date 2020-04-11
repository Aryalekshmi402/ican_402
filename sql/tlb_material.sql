-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 06:08 PM
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
-- Table structure for table `tlb_material`
--

CREATE TABLE `tlb_material` (
  `mat_id` int(11) NOT NULL,
  `syid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `loginid` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `docs` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tlb_material`
--

INSERT INTO `tlb_material` (`mat_id`, `syid`, `classid`, `loginid`, `staffid`, `docname`, `docs`) VALUES
(1, 1, 4, 123, 4, 'gh', 0x66696c65202831292e706466),
(2, 2, 3, 123, 4, 'gvgh', 0x632e6a7067),
(3, 3, 7, 123, 4, 'vgv', 0x646f63756d656e745f75706c6f61642e706870),
(4, 3, 7, 123, 4, 'okl', 0x642e6a7067),
(5, 3, 7, 123, 4, 'fgxg', 0x622e6a7067);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tlb_material`
--
ALTER TABLE `tlb_material`
  MODIFY `mat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

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
