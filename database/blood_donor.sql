-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 06:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`, `email`) VALUES
(1, '123', '123', 'mahibur.business@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(6) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobilenumber` int(25) NOT NULL,
  `lastdonationdate` date NOT NULL,
  `joindate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `age`, `bloodgroup`, `address`, `mobilenumber`, `lastdonationdate`, `joindate`) VALUES
(13, 'Mahibur', 25, 'B+', '65/D, West Razabazar', 1303531282, '2019-12-08', '2020-12-12'),
(14, 'Mahibur Rahman', 65, 'b-', '65/D, West Razabazar', 1303531282, '2020-05-04', '2020-12-12'),
(15, 'Mahibur Rahman', 25, 'b-', '65/D, West Razabazar', 1303531282, '2020-11-11', '2020-12-13'),
(16, 'Mahibur Rahman', 25, 'b-', '65/D, West Razabazar', 1303531282, '2020-12-12', '2020-12-13'),
(17, 'khalek', 21, 'k', 'asdasd', 1303531282, '2020-12-03', '2020-12-13'),
(18, 'niloy', 45, 'u', 'ajshdjah', 2147483647, '2020-11-23', '2020-12-13'),
(19, 'sajkjkas', 45, 'h', 'askdjkaj', 1546446464, '2020-11-11', '2020-12-13'),
(20, 'Rakib', 45, 'g', 'sfsjdsnf', 155555545, '2020-12-11', '2020-12-13'),
(21, 'isdfjis', 78, 'i', 'asdad', 66666, '2020-12-12', '2020-12-13'),
(22, 'qwq', 12, 'd', 'afkfsd', 554545, '2020-01-12', '2020-12-13'),
(23, 'Mahibur Rahman', 25, 'b-', '65/D, West Razabazar', 1303531282, '2020-12-22', '2020-12-13'),
(24, 'Mahibur Rahman', 25, 'b-', '65/D, West Razabazar', 1303531282, '2020-12-12', '2020-12-13'),
(25, 'Mahibur Rahman', 25, 'b-', '65/D, West Razabazar', 1303531282, '2020-12-12', '2020-12-13'),
(26, 'Mahibur Rahman', 25, 'b-', '65/D, West Razabazar', 1303531282, '2020-11-11', '2020-12-13'),
(27, 'Mahibur Rahman', 25, 'b-', '65/D, West Razabazar', 1303531282, '2020-12-12', '2020-12-13'),
(28, 'Mahibur Rahman', 25, 'b-', '65/D, West Razabazar', 1303531282, '2020-12-12', '2020-12-13'),
(29, 'Mahibur Rahman', 22, 'B+', '65/D, West Razabazar', 1303531282, '2020-12-12', '2020-12-13'),
(30, 'Mahibur Rahman', 22, 'B+', '65/D, West Razabazar', 1303531282, '2020-12-12', '2020-12-13'),
(31, 'Mahibur Rahman', 22, 'B+', '65/D, West Razabazar', 1303531282, '2020-12-12', '2020-12-13'),
(32, 'Mahibur Rahman', 32, 'b-', '65/D, West Razabazar', 1303531282, '2020-12-12', '2020-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `bloodgroup` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `mobilenumber` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `massage` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `age`, `bloodgroup`, `address`, `mobilenumber`, `email`, `date`, `time`, `massage`) VALUES
(1, 0, 23, 0, 'lfmsdlf', 90534950, 'networkpoint0@gmail.com', '0000-00-00', '00:00:00.000000', 'fdsfds'),
(2, 0, 23, 0, 'lfmsdlf', 90534950, 'networkpoint0@gmail.com', '0000-00-00', '00:00:00.000000', 'fdsfds'),
(3, 0, 32, 0, 'sqaure hospital', 1303531282, 'networkpoint0@gmail.com', '0000-00-00', '00:00:00.000000', 'sdfasf'),
(4, 0, 32, 0, 'sqaure hospital', 1303531282, 'networkpoint0@gmail.com', '0000-00-00', '00:00:00.000000', 'sdfasf'),
(5, 0, 21, 0, 'sqaure hospital', 2121211, 'networkpoint0@gmail.com', '0000-00-00', '00:00:00.000000', 'sdgfsdg'),
(6, 0, 12, 12, 'jshdjfhs', 12123, 'networkpoint0@gmail.com', '0000-00-00', '00:00:00.000000', 'sdfsdfsd'),
(7, 0, 23, 0, 'vfsdfs', 1303531282, 'networkpoint0@gmail.com', '0000-00-00', '00:00:00.000000', 'asjfjad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
