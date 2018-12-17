-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2018 at 08:14 AM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.2.13-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carinventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `manf_id` int(11) NOT NULL,
  `manf_name` varchar(255) NOT NULL,
  `manf_createdon` date NOT NULL,
  `manf_isactive` enum('yes','no') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`manf_id`, `manf_name`, `manf_createdon`, `manf_isactive`) VALUES
(1, 'Maruti', '2018-12-17', 'yes'),
(2, 'Renault', '2018-12-17', 'yes'),
(3, 'Tata', '2018-12-17', 'yes'),
(4, 'Mahindra', '2018-12-17', 'yes'),
(5, '', '2018-12-17', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `modl_id` int(11) NOT NULL,
  `modl_manufacturer` int(11) NOT NULL,
  `modl_name` varchar(255) NOT NULL,
  `modl_color` varchar(100) NOT NULL,
  `modl_regnum` varchar(100) NOT NULL,
  `modl_year` varchar(50) NOT NULL,
  `modl_notes` text NOT NULL,
  `modl_issold` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`modl_id`, `modl_manufacturer`, `modl_name`, `modl_color`, `modl_regnum`, `modl_year`, `modl_notes`, `modl_issold`) VALUES
(1, 1, 'Wagaon R', 'White', 'DL56-4567', '2018', 'this 2045 Model', 0),
(2, 1, 'Swift', 'Red', 'DL45-RSFG', '2010', 'Dummy Notes', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`manf_id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`modl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `manf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `modl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
