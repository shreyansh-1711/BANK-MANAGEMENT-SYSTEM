-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 05:08 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `cust_id` varchar(50) NOT NULL,
  `nfirst` varchar(30) NOT NULL,
  `nlast` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `aadhar` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `accno` varchar(50) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `sig` varchar(30) NOT NULL,
  `balance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`cust_id`, `nfirst`, `nlast`, `gender`, `dob`, `aadhar`, `email`, `phone`, `address`, `branch`, `accno`, `pin`, `uname`, `pwd`, `pic`, `sig`, `balance`) VALUES
('1001', 'shrey', 'sharma', 'male', '2021-06-28', '1231231231', 'aaa@gmail.com', '1212121212', '141414', 'Udaipur', '1111000011', '5555', 'mmmm', 'mmmm', 'Screenshot (36).png', 'Screenshot (77).png', ''),
('1002', 'll', 'll', 'female', '2021-07-15', 'llll', 'llll', 'llll', 'llll', 'Bikaner', '1111000012', '1111', 'llll', 'llll', 'Screenshot (71).png', 'Screenshot (96).png', ''),
('1003', 'zz', 'zz', 'male', '2021-07-20', 'zz', 'zz', 'zz', 'zz', 'Udaipur', '1111000013', '0000', 'zz', '0000', 'Screenshot (93).png', 'Screenshot (101).png', '-500'),
('1004', 'aaaaaa', 'aaaaa', 'male', '2021-09-07', '9874563215', 'shre@gmail.vccom', '14141414141', 'sssssssss', 'Kota', '1111000014', '2323', '1234we', 'mmmm', 'Screenshot (36).png', 'Screenshot (37).png', '4000'),
('1005', 'fdff', 'fdfdf', 'male', '0065-05-06', '12345', '3443@', '4565768787', '678vhgj', 'Ajmer', '1111000015', '5858', '5858', '5858', 'Screenshot (66).png', 'Screenshot (97).png', '4000'),
('1006', 'sgfdgh', 'sfdgdh', 'male', '0055-02-25', '8886868', '868686868', '8686867447', 'fgfhhj', 'Udaipur', '1111000016', '0101', '0101', '0101', 'Screenshot (60).png', 'Screenshot (97).png', '4000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `pass`) VALUES
('admin', 'admin'),
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `uid` int(10) NOT NULL,
  `actno` varchar(20) NOT NULL,
  `withdraw` varchar(30) NOT NULL,
  `deposit` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`uid`, `actno`, `withdraw`, `deposit`, `date`) VALUES
(24, '1111000013', '500', 'No Transection', '2021-07-31'),
(25, '1111000013', '100', 'No Transection', '31/07/21'),
(26, '1111000013', '100', 'No Transection', '31/07/21'),
(27, '1111000013', '100', 'No Transection', '31/07/21'),
(28, '1111000013', '100', 'No Transection', '31/07/21'),
(29, '1111000013', '100', 'No Transection', '31/07/21'),
(30, '1111000013', '50', 'No Transaction', '31/07/21'),
(31, '1111000013', 'No Transection', '1000', '2021-08-03'),
(32, '1111000013', 'No Transection', '1000', '2021-08-03'),
(33, '1111000013', 'No Transection', '1000', '2021-08-03'),
(34, '1111000013', 'No Transection', '1000', '2021-08-03'),
(35, '1111000013', '500', 'No Transection', '2021-08-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `aadhar` (`aadhar`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `accno` (`accno`);

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trans`
--
ALTER TABLE `trans`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
