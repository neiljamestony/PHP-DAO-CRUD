-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 11:14 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smurf`
--

-- --------------------------------------------------------

--
-- Table structure for table `smurf_tbl`
--

CREATE TABLE `smurf_tbl` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `status` enum('Active','Inactive') NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smurf_tbl`
--

INSERT INTO `smurf_tbl` (`id`, `first_name`, `last_name`, `created_at`, `deleted_at`, `updated_at`, `status`) VALUES
(48, 'S', 'L', '0000-00-00 00:00:00', '2019-07-01 08:40:27', '2019-07-01 08:37:50', 'Inactive'),
(49, 'meqilwmdk', 'mldimakldim', '2019-07-01 07:17:48', '2019-07-01 08:40:25', '0000-00-00 00:00:00', 'Inactive'),
(50, 'DWQEEEEEE', 'sampleEE', '0000-00-00 00:00:00', '2019-07-01 08:40:29', '2019-07-01 08:00:36', 'Inactive'),
(51, 'sample', 'sample', '2019-07-01 07:20:00', '2019-07-01 08:40:32', '0000-00-00 00:00:00', 'Inactive'),
(52, 'qweqweqew', 'ssssss', '0000-00-00 00:00:00', '2019-07-01 08:40:34', '2019-07-01 08:35:39', 'Inactive'),
(53, 'www', 'www', '2019-07-01 07:20:41', '2019-07-01 08:34:11', '0000-00-00 00:00:00', 'Inactive'),
(54, 'www', 'www', '2019-07-01 07:21:14', '2019-07-01 08:34:08', '0000-00-00 00:00:00', 'Inactive'),
(55, 'eeee', 'eeee', '2019-07-01 07:21:43', '2019-07-01 08:33:18', '0000-00-00 00:00:00', 'Inactive'),
(56, 'wqewewqe', 'qweqwe', '2019-07-01 07:23:25', '2019-07-01 08:33:13', '0000-00-00 00:00:00', 'Inactive'),
(57, 'ssss', 'ssss', '2019-07-01 07:23:48', '2019-07-01 08:33:10', '0000-00-00 00:00:00', 'Inactive'),
(58, 'ddd', 'dddd', '2019-07-01 07:25:08', '2019-07-01 08:32:37', '0000-00-00 00:00:00', 'Inactive'),
(59, 'ssssssssssssssssssssssssss', 'ssssssssssssssssssssssssssssssssssssssss', '0000-00-00 00:00:00', '2019-07-01 08:32:27', '2019-07-01 08:06:37', 'Inactive'),
(60, 'NEIL', 'Tony', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-07-01 08:57:18', 'Active'),
(61, 'SSSSSS', 'SSSSS', '2019-07-01 08:38:37', '2019-07-01 08:38:43', '0000-00-00 00:00:00', 'Inactive'),
(62, 'SAMPLE', 'SAMPLE', '2019-07-01 08:40:10', '2019-07-01 08:40:22', '0000-00-00 00:00:00', 'Inactive'),
(63, 'sample data', 'good', '2019-07-01 08:57:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `smurf_tbl`
--
ALTER TABLE `smurf_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `smurf_tbl`
--
ALTER TABLE `smurf_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
