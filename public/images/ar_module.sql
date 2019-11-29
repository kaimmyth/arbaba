-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 10:26 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arbaba`
--

-- --------------------------------------------------------

--
-- Table structure for table `ar_module`
--

CREATE TABLE `ar_module` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `module_name` varchar(50) DEFAULT NULL,
  `is_admin` varchar(10) DEFAULT NULL,
  `is_company` varchar(10) DEFAULT NULL,
  `is_user` varchar(10) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ar_module`
--

INSERT INTO `ar_module` (`id`, `org_id`, `module_name`, `is_admin`, `is_company`, `is_user`, `status`, `created_at`, `updated_at`, `modified_at`) VALUES
(1, 1, 'FGBFDfvbdfbhf', 'yes', 'yes', 'yes', NULL, '2019-11-28 07:04:02', '2019-11-28 09:22:23', '2019-11-28 12:34:02'),
(2, NULL, 'SDFSD', NULL, NULL, NULL, NULL, '2019-11-28 07:04:33', '2019-11-28 07:04:33', '2019-11-28 12:34:33'),
(3, NULL, 'dsfsdfgsff', NULL, NULL, NULL, NULL, '2019-11-28 07:10:09', '2019-11-28 07:29:58', '2019-11-28 12:40:09'),
(4, NULL, 'dcfdcf', 'yes', 'yes', NULL, NULL, '2019-11-28 07:49:38', '2019-11-28 07:49:38', '2019-11-28 13:19:38'),
(5, NULL, 'sdgfrg', 'yes', 'yes', NULL, NULL, '2019-11-28 07:59:15', '2019-11-28 09:00:07', '2019-11-28 13:29:15'),
(6, NULL, 'dsfdsfguyfgy', NULL, NULL, NULL, NULL, '2019-11-28 08:01:14', '2019-11-28 08:02:00', '2019-11-28 13:31:14'),
(7, NULL, 'amit', 'yes', NULL, NULL, NULL, '2019-11-28 08:43:50', '2019-11-28 09:03:28', '2019-11-28 14:13:50'),
(8, 1, 'sfrg', 'yes', NULL, NULL, NULL, '2019-11-28 09:13:55', '2019-11-28 09:13:55', '2019-11-28 14:43:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ar_module`
--
ALTER TABLE `ar_module`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ar_module`
--
ALTER TABLE `ar_module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
