-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 01:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `macial2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_type` enum('admin','super_admin') NOT NULL DEFAULT 'admin',
  `admin_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_type`, `admin_created_at`) VALUES
(2, 'BASEL', 'basel@ahmed.com', '1234', 'admin', '2021-11-08 11:53:17'),
(8, 'Admin', 'Admin@gmail.com', '1234', 'admin', '2022-01-24 13:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `city_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `city_created_at`) VALUES
(1, 'Aden', '2021-11-08 14:32:50'),
(2, 'Aban', '2021-11-08 16:06:09'),
(3, 'Sanna', '2021-11-08 16:07:01'),
(4, 'Tize', '2021-11-09 11:26:39'),
(9, 'ADEN', '2021-11-27 17:53:21'),
(10, 'ADEN', '2021-11-27 17:53:28'),
(11, 'ADEN1', '2021-11-27 17:53:36'),
(12, 'ADEN2', '2021-11-27 17:53:42'),
(13, 'ADEN3', '2021-11-27 17:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(20) NOT NULL,
  `order_mobile` varchar(20) NOT NULL,
  `order_email` varchar(50) NOT NULL,
  `order_notes` text NOT NULL,
  `order_serv_id` int(11) NOT NULL,
  `order_city_id` int(11) NOT NULL,
  `order_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_name`, `order_mobile`, `order_email`, `order_notes`, `order_serv_id`, `order_city_id`, `order_created_at`) VALUES
(1, 'BASEL AHMED', 'BASEL@AHMED.COM', '773216193', ' NEW SERVICE\r\n\r\n', 1, 1, '2021-11-14 03:50:53'),
(2, 'AHMED', 'AHMED@SD.COM', '773228783', ' NOW PLEASE\r\n', 2, 3, '2021-11-12 14:34:53'),
(3, 'Ali', 'akl@ss.ddd', '55543344', 'any thing', 1, 3, '2021-11-12 18:36:24'),
(9, 'baased', 'baswl@sd.dd', '3333', 'ddddd', 1, 1, '2021-11-15 10:24:39'),
(10, 'TFDTR', 'bdzA@nhbv.buvy', '55445345', 'rsrezaewae', 2, 2, '2021-11-17 16:30:44'),
(11, 'basel ahmed ', 'basel@sh.com', '746837637', 'any thing', 1, 1, '2022-02-24 12:05:57'),
(12, 'basel', 'basel@gmail.com', '22', 'any thing', 1, 1, '2022-02-24 12:13:09'),
(13, 'Basel ', 'basel@ahmedgamil.com', '773216193', 'any thing for test ', 1, 1, '2022-02-24 12:14:36'),
(14, 'basel', 'base@gaml.com', '73527', 'any thing', 1, 1, '2022-02-24 12:19:26'),
(15, 'basel', 'basel@ahmed.com', '773216193', 'any note', 2, 2, '2022-02-24 12:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ser_id` int(11) NOT NULL,
  `serv_name` varchar(100) NOT NULL,
  `serv_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ser_id`, `serv_name`, `serv_created_at`) VALUES
(1, 'Treaement', '2021-11-11 16:50:48'),
(2, 'Meaical Care', '2021-11-14 20:12:59'),
(5, 'Labe2', '2022-02-24 12:24:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_serv_id` (`order_serv_id`),
  ADD KEY `order_city_id` (`order_city_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ser_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_city_id`) REFERENCES `cities` (`city_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`order_serv_id`) REFERENCES `services` (`ser_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
