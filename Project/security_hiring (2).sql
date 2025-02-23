-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2025 at 04:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `security_hiring`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('unblock','block','','') NOT NULL DEFAULT 'unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `status`) VALUES
(1, 'Deepak Prasad', 'deepak@admin.com', 'deepak7093', 'unblock');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `c_id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `gu_id` int(11) DEFAULT NULL,
  `complain` varchar(500) DEFAULT NULL,
  `complain_status` enum('solved','pending','','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`c_id`, `cust_id`, `gu_id`, `complain`, `complain_status`) VALUES
(77, 5, 16, 'Not Working Properly ', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `name`, `email`, `mobile_no`, `comment`) VALUES
(1, 'deepak', 'deepak@gmail.com', '4561237890', 'Hello SGuard'),
(2, 'deepak', 'deepak@gmail.com', '4561237890', 'Hello SGuard'),
(5, 'prasad', 'prasad@gmail.com', '7894561230', 'example');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` int(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(300) NOT NULL,
  `status` enum('unblock','block','','') NOT NULL DEFAULT 'unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `password`, `gender`, `address`, `image`, `status`) VALUES
(5, 'deepak1', 'Deepak', 'Prasad', 'prasaddeepak186@gmail.com', 2147483646, '3b8f9fa2e58b5e835028f1dafc2de1fa', 'male', 'Vatva\r\nAhmadabad', 'स्क्रीनशॉट 2024-02-09 113620.png', 'unblock'),
(37, 'rakesh1', 'Rakesh', 'Singh', 'rakeshsingh@gmail.com', 1234567890, '32da0f5520e7edba6fb80d34db349cc6', 'male', 'Narol', 'Screenshot 2024-08-01 171342.png', 'unblock');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `em_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('block','unblock','','') NOT NULL DEFAULT 'unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`em_id`, `name`, `email`, `password`, `status`) VALUES
(1, 'ramesh', 'ramesh@gmail.com', 'b1471adc34c852d9ca3f03f5f47ff496', 'unblock'),
(5, 'Harsh', 'harsh@gmail.com', 'b0aa651c991deca550252ed6cbba99ba', 'unblock');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `Star` int(10) NOT NULL,
  `feedback` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guards`
--

CREATE TABLE `guards` (
  `gu_id` int(11) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `g_email` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `id_proof` varchar(100) NOT NULL,
  `any disability` varchar(50) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `profile_image` varchar(300) NOT NULL,
  `status` enum('block','available','posted') NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guards`
--

INSERT INTO `guards` (`gu_id`, `full_name`, `g_email`, `mobile_no`, `gender`, `address`, `id_proof`, `any disability`, `disability`, `profile_image`, `status`) VALUES
(16, 'Pawan Singh', 'pawan@gmail.com', '1234567890', 'male', 'Maninagar', 'ACCOUNT QUESTION BANK - Google Docs.pdf', '', 'no', 'स्क्रीनशॉट 2024-02-09 113620.png', 'posted'),
(17, 'Deepak Prasad', 'deepakprasad@gmail.com', '7897894560', 'male', 'Vatva', 'auction.pdf', '', 'no', 'Firefly Caution I have no filter 33850.jpg', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `post_id` int(11) NOT NULL,
  `posting_date` date DEFAULT NULL,
  `gu_id` int(11) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`post_id`, `posting_date`, `gu_id`, `address`, `cust_id`) VALUES
(2, '2024-12-12', NULL, 'Vatva Ahmedabad', 5),
(3, '2024-12-03', NULL, 'Narol', 5),
(4, '2024-12-05', NULL, 'Narol', NULL),
(5, '0000-00-00', NULL, '', 5),
(10, '0000-00-00', NULL, '', 5),
(11, '0000-00-00', NULL, '', 5),
(12, '0000-00-00', 16, '', 5),
(13, '0000-00-00', NULL, '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `number_of_guard` int(11) DEFAULT NULL,
  `for_where` varchar(50) NOT NULL,
  `request_status` enum('approve','pending','reject','') DEFAULT 'pending',
  `address` varchar(500) DEFAULT NULL,
  `remarks` varchar(500) DEFAULT NULL,
  `posting_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_id`, `cust_id`, `number_of_guard`, `for_where`, `request_status`, `address`, `remarks`, `posting_date`) VALUES
(2, 5, 4, 'residency', 'approve', 'Om shanti Vatva Ahmedabad', 'no', '2024-12-19'),
(3, 5, 2, 'Bank Security', 'pending', 'Narol', 'No', '2025-02-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `complain_ibfk_2` (`gu_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`em_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `guards`
--
ALTER TABLE `guards`
  ADD PRIMARY KEY (`gu_id`),
  ADD UNIQUE KEY `email` (`g_email`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `posting_ibfk_1` (`gu_id`),
  ADD KEY `posting_ibfk_2` (`cust_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guards`
--
ALTER TABLE `guards`
  MODIFY `gu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `complain_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`cust_id`),
  ADD CONSTRAINT `complain_ibfk_2` FOREIGN KEY (`gu_id`) REFERENCES `guards` (`gu_id`) ON DELETE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`cust_id`);

--
-- Constraints for table `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `posting_ibfk_1` FOREIGN KEY (`gu_id`) REFERENCES `guards` (`gu_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posting_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`cust_id`) ON DELETE SET NULL;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
