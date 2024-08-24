-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2019 at 08:19 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11730172_code4ubudgetvacation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(20) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_photo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_username`, `admin_password`, `admin_photo`) VALUES
(1, 'yb hadzariah ismail', 'admin', 'admin', 0x61646d696e2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` bigint(20) NOT NULL,
  `state_id` int(255) NOT NULL,
  `state_from` varchar(50) NOT NULL,
  `date_from` date NOT NULL,
  `budget` int(255) NOT NULL,
  `optional_place` varchar(255) NOT NULL,
  `state_to` varchar(255) NOT NULL,
  `tax_current` int(255) NOT NULL,
  `date_book` timestamp NOT NULL DEFAULT current_timestamp(),
  `package_price` int(50) DEFAULT NULL,
  `bill` int(255) DEFAULT NULL,
  `revanue` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_phone`, `state_id`, `state_from`, `date_from`, `budget`, `optional_place`, `state_to`, `tax_current`, `date_book`, `package_price`, `bill`, `revanue`) VALUES
(78, 'cc', 123456, 2, 'Kedah', '2019-11-30', 600, 'ikan bakar', 'Melaka ', 5, '2019-11-29 07:26:54', 600, 630, 30),
(79, 'cc', 123456, 2, 'Kedah', '2019-11-30', 600, 'ikan bakar', 'Melaka ', 5, '2019-11-29 09:32:33', NULL, NULL, NULL),
(80, 'cc', 123456, 2, 'Kelantan', '2019-11-30', 600, 'ikan bakar', 'Melaka ', 5, '2019-11-29 14:40:39', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_planner`
--

CREATE TABLE `customer_planner` (
  `customer_planner_id` int(11) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `state_to` varchar(255) NOT NULL,
  `a0800_0900` varchar(100) DEFAULT NULL,
  `a0930_1130` varchar(100) DEFAULT NULL,
  `a1200_1300` varchar(100) DEFAULT NULL,
  `a1330_1530` varchar(100) DEFAULT NULL,
  `a1600_1800` varchar(100) DEFAULT NULL,
  `a1830_2030` varchar(100) DEFAULT NULL,
  `a2100_2200` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_planner`
--

INSERT INTO `customer_planner` (`customer_planner_id`, `customer_id`, `state_to`, `a0800_0900`, `a0930_1130`, `a1200_1300`, `a1330_1530`, `a1600_1800`, `a1830_2030`, `a2100_2200`) VALUES
(46, 78, 'Melaka', 'Toast N Toast', 'ikan bakar', 'Chung Wah Restaurant', 'Windmill Dutch Square Melaka', 'St. Peter Church', 'Capitol Satay Celup', 'Malacca Heritage Centre'),
(47, 78, 'Melaka', 'Toast N Toast', 'ikan bakar', 'Chung Wah Restaurant', 'Windmill Dutch Square Melaka', 'St. Peter Church', 'Capitol Satay Celup', 'Malacca Heritage Centre'),
(48, 78, 'Melaka', 'Toast N Toast', 'ikan bakar', 'Chung Wah Restaurant', 'Windmill Dutch Square Melaka', 'St. Peter Church', 'Capitol Satay Celup', 'Malacca Heritage Centre');

-- --------------------------------------------------------

--
-- Table structure for table `customer_planner2`
--

CREATE TABLE `customer_planner2` (
  `customer_planner2_id` int(11) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `state_to` varchar(255) NOT NULL,
  `b0800_0900` varchar(255) DEFAULT NULL,
  `b0930_1130` varchar(255) DEFAULT NULL,
  `b1200_1300` varchar(255) DEFAULT NULL,
  `b1330_1530` varchar(255) DEFAULT NULL,
  `b1600_1800` varchar(255) DEFAULT NULL,
  `b1830_2030` varchar(255) DEFAULT NULL,
  `b2100_2200` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_planner2`
--

INSERT INTO `customer_planner2` (`customer_planner2_id`, `customer_id`, `state_to`, `b0800_0900`, `b0930_1130`, `b1200_1300`, `b1330_1530`, `b1600_1800`, `b1830_2030`, `b2100_2200`) VALUES
(41, 78, 'Melaka', 'Loh Yong Moh Restaurant', 'Melaka Batik House', 'Seeds Garaden Bistro', 'Cheng Ho Cultural Museum', 'Magic Art 3D Musuem', 'Nancy’s kitchen', 'River Walk, Melaka'),
(42, 78, 'Melaka', 'Loh Yong Moh Restaurant', 'Melaka Batik House', 'Seeds Garaden Bistro', 'Cheng Ho Cultural Museum', 'Magic Art 3D Musuem', 'Nancy’s kitchen', 'River Walk, Melaka'),
(43, 78, 'Melaka', 'Loh Yong Moh Restaurant', 'Melaka Batik House', 'Seeds Garaden Bistro', 'Cheng Ho Cultural Museum', 'Magic Art 3D Musuem', 'Nancy’s kitchen', 'River Walk, Melaka');

-- --------------------------------------------------------

--
-- Table structure for table `customer_planner3`
--

CREATE TABLE `customer_planner3` (
  `customer_planner3_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `state_to` varchar(255) NOT NULL,
  `c0800_0900` varchar(255) DEFAULT NULL,
  `c0930_1130` varchar(255) DEFAULT NULL,
  `c1200_1300` varchar(255) DEFAULT NULL,
  `c1330_1530` varchar(255) DEFAULT NULL,
  `c1600_1800` varchar(255) DEFAULT NULL,
  `c1830_2030` varchar(255) DEFAULT NULL,
  `c2100_2200` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_planner3`
--

INSERT INTO `customer_planner3` (`customer_planner3_id`, `customer_id`, `state_to`, `c0800_0900`, `c0930_1130`, `c1200_1300`, `c1330_1530`, `c1600_1800`, `c1830_2030`, `c2100_2200`) VALUES
(40, 78, 'Melaka', 'East & West Rendezvous', 'Encore, Melaka', 'Wa Zen Japanese Restaurant', 'House of Museum Malacca', 'The Shore Oceanarium', 'Bert’s Garden Seafood', 'The Shore Sky Tower, Melaka'),
(41, 78, 'Melaka', 'East & West Rendezvous', 'Encore, Melaka', 'Wa Zen Japanese Restaurant', 'House of Museum Malacca', 'The Shore Oceanarium', 'Bert’s Garden Seafood', 'The Shore Sky Tower, Melaka'),
(42, 78, 'Melaka', 'East & West Rendezvous', 'Encore, Melaka', 'Wa Zen Japanese Restaurant', 'House of Museum Malacca', 'The Shore Oceanarium', 'Bert’s Garden Seafood', 'The Shore Sky Tower, Melaka');

-- --------------------------------------------------------

--
-- Table structure for table `customer_planner4`
--

CREATE TABLE `customer_planner4` (
  `customer_planner4_id` int(11) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `state_to` varchar(255) NOT NULL,
  `d0800_0900` varchar(255) DEFAULT NULL,
  `d0930_1130` varchar(255) DEFAULT NULL,
  `d1200_1300` varchar(255) DEFAULT NULL,
  `d1330_1530` varchar(255) DEFAULT NULL,
  `d1600_1800` varchar(255) DEFAULT NULL,
  `d1830_2030` varchar(255) DEFAULT NULL,
  `d2100_2200` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_planner4`
--

INSERT INTO `customer_planner4` (`customer_planner4_id`, `customer_id`, `state_to`, `d0800_0900`, `d0930_1130`, `d1200_1300`, `d1330_1530`, `d1600_1800`, `d1830_2030`, `d2100_2200`) VALUES
(40, 78, 'Melaka', 'Limau-limau Café', 'Putra Mosque', 'The Huskitory, Melaka', 'The library,Melaka', 'Jonker Street Night Market, Melaka', 'Hard Rock Café', 'Melaka Thousand Tales of Adventure'),
(41, 78, 'Melaka', 'Limau-limau Café', 'Putra Mosque', 'The Huskitory, Melaka', 'The library,Melaka', 'Jonker Street Night Market, Melaka', 'Hard Rock Café', 'Melaka Thousand Tales of Adventure'),
(42, 78, 'Melaka', 'Limau-limau Café', 'Putra Mosque', 'The Huskitory, Melaka', 'The library,Melaka', 'Jonker Street Night Market, Melaka', 'Hard Rock Café', 'Melaka Thousand Tales of Adventure');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(255) NOT NULL,
  `feedback_name` varchar(50) NOT NULL,
  `feedback_email` varchar(50) NOT NULL,
  `feedback_phone` int(50) NOT NULL,
  `feedback_country` varchar(50) NOT NULL,
  `feedback_message` varchar(100) NOT NULL,
  `feedback_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_name`, `feedback_email`, `feedback_phone`, `feedback_country`, `feedback_message`, `feedback_datetime`) VALUES
(3, 'daimler benz', 'daimlerbenx@gmail.com', 1138485656, 'Hong Kong', 'hello world!', '2019-11-25 16:24:29'),
(4, 'aaa', 'aa@gmail.com', 123, 'Belarus', 'aaa', '2019-11-26 03:28:53'),
(5, 'a', 'agma@da.com', 123, 'Angola', 'ad', '2019-11-26 12:18:58'),
(6, 'adad', 'ada@gg.bo', 442, 'Angola', 'qv', '2019-11-26 14:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `state_id` int(255) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `state_id`, `package_name`, `package_price`) VALUES
(1, 1, 'KL Package A', 100),
(3, 1, 'KL Package B', 300),
(4, 1, 'KL Package C', 600),
(5, 1, 'KL Package D', 900),
(6, 1, 'KL Package E', 1000),
(7, 2, 'Melaka Package A', 100),
(8, 2, 'Melaka Package B', 300),
(9, 2, 'Melaka Package C', 600),
(10, 2, 'Melaka Package D', 900),
(11, 2, 'Melaka Package E', 1000),
(13, 3, 'Pulau Pinang Package A', 100),
(14, 3, 'Pulau Pinang Package B', 300),
(15, 3, 'Pulau Pinang Package C', 600),
(16, 3, 'Pulau Pinang Package D', 900),
(17, 3, 'Pulau Pinang Package E', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(11) NOT NULL,
  `state_id` int(255) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `place_desc` longtext NOT NULL,
  `place_time` varchar(50) NOT NULL,
  `place_day` int(50) NOT NULL,
  `place_type` varchar(50) NOT NULL,
  `place_photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'Kuala Lumpur'),
(2, 'Melaka'),
(3, 'Pulau Pinang');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `tax_id` int(50) NOT NULL,
  `tax` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`tax_id`, `tax`) VALUES
(1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_planner`
--
ALTER TABLE `customer_planner`
  ADD PRIMARY KEY (`customer_planner_id`);

--
-- Indexes for table `customer_planner2`
--
ALTER TABLE `customer_planner2`
  ADD PRIMARY KEY (`customer_planner2_id`);

--
-- Indexes for table `customer_planner3`
--
ALTER TABLE `customer_planner3`
  ADD PRIMARY KEY (`customer_planner3_id`);

--
-- Indexes for table `customer_planner4`
--
ALTER TABLE `customer_planner4`
  ADD PRIMARY KEY (`customer_planner4_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`tax_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `customer_planner`
--
ALTER TABLE `customer_planner`
  MODIFY `customer_planner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `customer_planner2`
--
ALTER TABLE `customer_planner2`
  MODIFY `customer_planner2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `customer_planner3`
--
ALTER TABLE `customer_planner3`
  MODIFY `customer_planner3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `customer_planner4`
--
ALTER TABLE `customer_planner4`
  MODIFY `customer_planner4_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `tax_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
