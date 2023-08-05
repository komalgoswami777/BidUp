-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 01:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bidup`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_master`
--

CREATE TABLE `contact_master` (
  `name` varchar(30) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `mobile_no` int(12) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_master`
--

INSERT INTO `contact_master` (`name`, `email_id`, `mobile_no`, `message`) VALUES
('GAUSWAMI KOMAL', 'komalgoswami@gmail.com', 2147483647, 'i want to join python course.'),
('Denil Jobanputra', 'denil@gmail.com', 1234567890, 'i want to join java course.'),
('Piyush Rathod ', 'piyush@gmail.com', 987654321, 'i want to join Designing course.'),
('jay parmar', 'jayygroup@gmail.com', 1234567890, 'aasdghabsdjjqieojasxm'),
('jay parmar', 'jayygroup@gmail.com', 1234567890, 'i want to join pds course.'),
('jay parmar', 'jayygroup@gmail.com', 1234567890, 'i want to join java course.'),
('kelin pitroda', 'kelinpitroda@gmail.com', 1234567890, 'i want to join java course.... .'),
('GAUSWAMI KOMAL', 'komalgoswami@gmail.com', 1234567890, ''),
('GAUSWAMI KOMAL', 'komalgoswami@gmail.com', 1234567890, ''),
('GAUSWAMI KOMAL', 'komalgoswami@gmail.com', 1234567890, ''),
('GAUSWAMI KOMAL', 'komalgoswami@gmail.com', 1234567890, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `login_master`
--

CREATE TABLE `login_master` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_master`
--

INSERT INTO `login_master` (`username`, `password`) VALUES
('admin', 'admin'),
('denil@gmail.com', 'denil@1234');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `category` varchar(40) NOT NULL,
  `minbid` int(12) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `pic_name` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `detail`, `category`, `minbid`, `date`, `time`, `pic_name`) VALUES
(3, 'buddha pottery', 'unique', 'Furniture', 1200, '2023-08-11', '00:20:23.000000', 'pottery.jpg'),
(5, 'Thai Pot', 'beautiful thai pot', 'Furniture', 1300, '2023-06-30', '16:10:00.000000', 'images/thai.jpg'),
(6, 'Thai Pot', 'designer', 'jewellery', 1210, '2023-08-04', '20:30:00.000000', 'images/thai.jpg'),
(7, 'natural Painting', 'rear nature painting', 'Painting', 1240, '2023-07-27', '13:58:00.000000', 'images/mini_panda.jpg'),
(9, 'Pottery', 'Beautiful Budhha potery', 'Furniture', 1600, '2023-09-07', '20:58:00.000000', 'images/pottery.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration_master`
--

CREATE TABLE `registration_master` (
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile_no` int(12) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_master`
--

INSERT INTO `registration_master` (`f_name`, `l_name`, `email_id`, `mobile_no`, `password`) VALUES
('komal', 'Gauswami', 'komalgoswami@gmail.com', 2147483647, 'abcd@1234'),
('lakhan', 'Gauswami', 'lakhan@gmail.com', 2147483647, 'xyz@123'),
('denil', 'Jobanputra', 'denil@gmail.com', 0, 'denil@1234'),
('piyush', 'Rathod', 'piyush@gmail.com', 0, 'piyush@1234'),
('piyush', 'Rathod', 'piyush@gmail.com', 1234567890, 'piyush@1234'),
('abhay', 'vaghasiya', 'abhay@gmail.com', 987654321, 'abhay@1234'),
('punyaj', 'Gotecha', 'punyaj@gmail.com', 1234567890, 'punyaj@1234'),
('punyaj', 'Trivedi', 'punyaj@gmail.com', 1234567890, 'punyaj@1234'),
('admin', 'admin', 'admin@gmail.com', 1234567890, 'admin'),
('Bansi', 'Vaghela', 'bansivaghela@gmail.com', 987654321, 'bansi@1234'),
('payal', 'kasundra', 'payal@gmail.com', 2147483647, 'payal@1234'),
('kelin', 'pitroda', 'kelinpitroda@gmail.com', 1234567890, 'kelin@1234'),
('', '', '', 0, ''),
('denil', 'jobanputra', 'denil888@gamail.com', 1211212, '123456'),
('Parmar', 'Prakash', 'pnparmar888@gmail.com', 2147483647, 'parmarpn888'),
('piyush', 'gohil', 'pgh@gmail.com', 123456789, 'Pgh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
