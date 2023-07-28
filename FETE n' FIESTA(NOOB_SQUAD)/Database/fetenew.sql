-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 09:15 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fete`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `d_birth` varchar(100) NOT NULL,
  `p_num` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `a_pass` varchar(100) NOT NULL,
  `c_pass` varchar(100) NOT NULL,
  `agree` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `f_name`, `l_name`, `a_name`, `gender`, `d_birth`, `p_num`, `email`, `a_pass`, `c_pass`, `agree`) VALUES
(2, 'SK. Rahat', 'Islam', 'Rahat', 'Male', '1998-12-03', '01715427898', 'rahatislamsk7898@gmail.com', '8751614c10cae9dfbeb2766aba1529e6', '8751614c10cae9dfbeb2766aba1529e6', 'checked'),
(3, 'SK. Rahat', 'Islam', 'Rahat', 'Male', '1998-12-03', '01715427898', 'rahatislamsk7898@gmail.com', 'rahat12787', 'rahat12787', 'checked'),
(4, 'Mashraba Peu', 'Peulee', 'Mashraba', 'Female', '1999-08-29', '01961893059', 'mashraba@gmail.com', 'peu12676', 'peu12676', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `birthday`
--

CREATE TABLE `birthday` (
  `id` int(11) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `bamount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `birthday`
--

INSERT INTO `birthday` (`id`, `bname`, `bamount`) VALUES
(1, 'Organization-1', 9000),
(2, 'Organization-2', 11500),
(3, 'Organization-3', 15000),
(4, 'Organization-4', 17300),
(5, 'Organization-5', 19900),
(6, 'Organization-6', 20000),
(7, 'Organization-7', 29690),
(8, 'Organization-8', 32900);

-- --------------------------------------------------------

--
-- Table structure for table `concerts`
--

CREATE TABLE `concerts` (
  `id` int(11) NOT NULL,
  `conname` varchar(100) NOT NULL,
  `conamount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `concerts`
--

INSERT INTO `concerts` (`id`, `conname`, `conamount`) VALUES
(1, 'Organization-1', 19000),
(2, 'Organization-2', 30000),
(3, 'Organization-3', 75000),
(4, 'Organization-4', 80000),
(5, 'Organization-5', 92000),
(6, 'Organization-6', 104000),
(7, 'Organization-7', 101200),
(8, 'Organization-8', 120000);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `num` varchar(11) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `msg` varchar(10000) NOT NULL,
  `conmsg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name1`, `email`, `num`, `sub`, `msg`, `conmsg`) VALUES
(1, 'rahat', 'rahat@gmail.com', '01765432798', 'wedding', 'want to book.', 'Order Accepted '),
(12, 'regone', 'regone@gmail.com', '01765432799', 'birthday', 'Please book this event for me.', 'Done.'),
(13, 'Apurbo', 'apurbo@gmail.com', '01765432799', 'Concert', 'I want to book a concert schedule.', 'Cancelled!!'),
(14, 'Karim', 'karimsheikh@gmail.com', '01715326789', 'wedding', 'I want to book for a wedding.', 'Order Accepted ');

-- --------------------------------------------------------

--
-- Table structure for table `customfood`
--

CREATE TABLE `customfood` (
  `id` int(11) NOT NULL,
  `corgname` varchar(100) NOT NULL,
  `camount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customfood`
--

INSERT INTO `customfood` (`id`, `corgname`, `camount`) VALUES
(1, 'Organization-1', 15000),
(2, 'Organization-2', 16400),
(3, 'Organization-3', 12600),
(4, 'Organization-4', 15000),
(5, 'Organization-5', 16400),
(6, 'Organization-6', 18000),
(7, 'Organization-7', 19300),
(8, 'Organization-8', 20200);

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE `photography` (
  `id` int(11) NOT NULL,
  `ptname` varchar(100) NOT NULL,
  `pamount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photography`
--

INSERT INTO `photography` (`id`, `ptname`, `pamount`) VALUES
(1, 'Photography Team-1', 12000),
(2, 'Photography Team-2', 19500),
(3, 'Photography Team-3', 21000),
(4, 'Photography Team-4', 18000),
(5, 'Photography Team-5', 15500),
(6, 'Photography Team-6', 20500),
(7, 'Photography Team-7', 21200),
(8, 'Photography Team-8', 23400);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id` int(11) NOT NULL,
  `tpname` varchar(100) NOT NULL,
  `tamount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id`, `tpname`, `tamount`) VALUES
(1, 'Transport Provider-1', 13000),
(2, 'Transport Provider-2', 18000),
(3, 'Transport Provider-3', 19500),
(4, 'Transport Provider-4', 17000),
(5, 'Transport Provider-5', 21000),
(6, 'Transport Provider-6', 27000),
(7, 'Transport Provider-7', 26700),
(8, 'Transport Provider-8', 29900);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `d_birth` varchar(100) NOT NULL,
  `p_num` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `c_pass` varchar(100) NOT NULL,
  `agree` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `u_name`, `gender`, `d_birth`, `p_num`, `email`, `pass`, `c_pass`, `agree`) VALUES
(28, 'SK. Rahat', 'Islam', 'Rahat', 'Male', '1998-12-03', '01715427898', 'rahatislamsk7898@gmail.com', 'b8f1987048cb99a1aec914ad03bb7d36', '37a5a52a4944b229b845e61eae585aab', 'checked'),
(40, 'Md Regone', 'Hossain', 'Regone', 'Male', '2023-01-20', '01986717182', 'regone@gmail.com', 'a9b8552ff81c7e1975262530864cfd26', '', ''),
(41, 'Mashraba', 'peu', 'mashraba', 'Female', '2023-01-01', '01743256768', 'peu12@gmail.com', '58b1216b06850385d9a4eadbedc806c4', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `id` int(11) NOT NULL,
  `orgname` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`id`, `orgname`, `amount`) VALUES
(1, 'Organization-1', 99500),
(2, 'Organization-2', 120000),
(3, 'Organization-3', 133000),
(4, 'Organization-4', 150000),
(5, 'Organization-5', 175000),
(6, 'Organization-6', 189000),
(7, 'Organization-7', 245000),
(8, 'Organization-8', 250000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthday`
--
ALTER TABLE `birthday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customfood`
--
ALTER TABLE `customfood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photography`
--
ALTER TABLE `photography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `birthday`
--
ALTER TABLE `birthday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `concerts`
--
ALTER TABLE `concerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customfood`
--
ALTER TABLE `customfood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `photography`
--
ALTER TABLE `photography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
