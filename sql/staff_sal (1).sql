-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 09:09 PM
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
-- Table structure for table `staff_sal`
--

CREATE TABLE `staff_sal` (
  `sal_id` int(11) NOT NULL,
  `loginid` int(11) NOT NULL,
  `month` date NOT NULL,
  `salary` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_sal`
--

INSERT INTO `staff_sal` (`sal_id`, `loginid`, `month`, `salary`, `status`) VALUES
(1, 7, '2020-05-05', 2000, 1),
(2, 8, '2020-05-11', 3000, 0);

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
  MODIFY `sal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `staff_sal`
--
ALTER TABLE `staff_sal`
  ADD CONSTRAINT `staff_sal_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `logintbl` (`loginid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
