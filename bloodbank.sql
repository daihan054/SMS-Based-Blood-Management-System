-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 09:40 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `bg_id` int(100) NOT NULL,
  `bg_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`bg_id`, `bg_name`) VALUES
(13, 'O+'),
(14, 'O-'),
(15, 'AB+'),
(16, 'AB-'),
(17, 'A+'),
(18, 'A-'),
(19, 'B+'),
(20, 'B-');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `row_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `subj` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`row_id`, `name`, `email`, `mobile`, `subj`) VALUES
(1, 'CK', 'chk14054@gmail.com', '013587369', 'dsfdfrgr'),
(2, 'alamin', 'daihan14054@gmail.com', '01791456897', 'Hie i am steve lang'),
(4, 'Rahim Molla', 'rahim1973@gmail.com', '01791403768', 'Hello vai . I need to talk to you because i want to join with your team .');

-- --------------------------------------------------------

--
-- Table structure for table `donarregistration`
--

CREATE TABLE `donarregistration` (
  `donar_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `b_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `pic` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `donarregistration`
--

INSERT INTO `donarregistration` (`donar_id`, `name`, `gender`, `age`, `mobile`, `b_id`, `email`, `pwd`, `pic`) VALUES
(7, 'Daihan', 'Male', '24', '01791403768', '15', 'a.m.n.daihan1994@gmail.com', '12345678', 'IMG_20181101_222323.jpg'),
(37, 'Md daihan', 'Male', '24', '01515606739', '15', 'query11@gmail.com', '12345678', 'IMG_20181101_222323 (2).jpg'),
(38, 'Al amin', 'Male', '25', '01521212826', '15', 'query12@gmail.com', '12345678', 'IMG_20181101_222323 (2).jpg'),
(39, 'Shawon', 'Male', '25', '01521447020', '15', 'query13@gmail.com', '87654321', 'IMG_20181101_222323 (2).jpg'),
(41, 'Abir hossain', 'Male', '23', '01791403768', '14', 'abirhossain14054@gmail.com', '123456789', 'IMG_20181101_222323 (2).jpg'),
(43, 'Nadim Hossain', 'Male', '26', '01743931288', '17', 'nadim@gmail.com', '1401414014', '10933802_1524431181169836_315738059650285690_n.jpg'),
(45, 'Sajol', 'Male', '23', '01791456897', '14', 'petuk55@gmail.com', 'asd@123456789', 'Sazal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(100) NOT NULL,
  `camp_id` varchar(100) NOT NULL,
  `ddate` varchar(100) NOT NULL,
  `units` int(100) NOT NULL,
  `detail` varchar(800) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `camp_id`, `ddate`, `units`, `detail`, `email`) VALUES
(1, 'AB+', '6-8-2018', 3, 'fesfrs', 'shawon@gmail.com'),
(2, 'B+', '6-8-2023', 23, 'fef', 'shawon@gmail.com'),
(3, 'AB+', '1-1-2019', 13, '', 'abcr@gmail.com'),
(4, 'B+', '1-1-2019', 45, '', 'abcr@gmail.com'),
(5, '', '2-2-2019', 56, 'vsdgesg', 'shawon@gmail.com'),
(6, '', '1-3-2019', 33, 'sfasaefe', 'shawon@gmail.com'),
(7, 'AB+', '1-10-2019', 3333, 'wdfw', 'shawon@gmail.com'),
(8, 'AB+', '19-3-2019', 66, 'Alhamdulillah first blood donation', 'a.m.n.daihan1994@gmail.com'),
(9, 'AB+', '1-1-2020', 36, 'Second blood donation', 'a.m.n.daihan1994@gmail.com'),
(10, 'AB+', '15-8-2023', 2588, 'Blood donated 3rd time', 'a.m.n.daihan1994@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `requestes`
--

CREATE TABLE `requestes` (
  `req_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bgroup` varchar(100) NOT NULL,
  `reqdate` varchar(30) NOT NULL,
  `detail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `requestes`
--

INSERT INTO `requestes` (`req_id`, `name`, `gender`, `age`, `mobile`, `email`, `bgroup`, `reqdate`, `detail`) VALUES
(27, 'Abdur rahman', 'male', '26', '01791403768', 'abdurrahman14054@gmail.com', 'AB+', '19-11-2019', 'Bangabandhu Hall , MBSTU'),
(28, 'Abir hossain', 'male', '24', '01791456897', 'abirhoassain14034@gmail.com', 'AB+', '1-1-2019', 'Hello , i want blood . Please contact with the following address: Palpara , Santosh'),
(29, 'MD Al Amin', 'male', '23', '01521447020', 'alamin14014@gmail.com', 'O+', '29-12-2019', 'I want blood 2 litres blood . address: Shantikunjo moor , Sadar Tangail .'),
(30, 'Siddikur rahman', 'male', '28', '01515606735', 'siddik@gmail.com', 'AB+', '7-7-2019', 'vai amar blood dorkar . Please help koren .');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `auto_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`auto_id`, `username`, `pwd`, `typeofuser`) VALUES
(1, 'alamin', '12345', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`bg_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `donarregistration`
--
ALTER TABLE `donarregistration`
  ADD PRIMARY KEY (`donar_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `requestes`
--
ALTER TABLE `requestes`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`auto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `bg_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `row_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donarregistration`
--
ALTER TABLE `donarregistration`
  MODIFY `donar_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `requestes`
--
ALTER TABLE `requestes`
  MODIFY `req_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
