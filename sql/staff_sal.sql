-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 14, 2020 at 12:52 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ican3`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff_sal`
--

CREATE TABLE `staff_sal` (
  `sal_id` int(11) NOT NULL,
  `loginid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_sal`
--

INSERT INTO `staff_sal` (`sal_id`, `loginid`, `year`, `month`, `salary`, `status`) VALUES
(1, 7, 2020, 0, 2000, 1),
(2, 8, 2020, 0, 3000, 0),
(3, 181, 2019, 1, 1000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff_sal`
--
ALTER TABLE `staff_sal`
  ADD PRIMARY KEY (`sal_id`),
  ADD KEY `loginid` (`loginid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_sal`
--
ALTER TABLE `staff_sal`
  MODIFY `sal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
