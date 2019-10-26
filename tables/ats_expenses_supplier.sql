-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 09:59 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

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
-- Table structure for table `ats_expenses_supplier`
--

CREATE TABLE `ats_expenses_supplier` (
  `id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile_no` int(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `other` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `display_name_as` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `billing_rate` varchar(50) NOT NULL,
  `adddress` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin_code` int(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pan_no` varchar(50) NOT NULL,
  `terms` varchar(50) NOT NULL,
  `opening_balance` varchar(50) NOT NULL,
  `as_of` date NOT NULL,
  `account_no` varchar(50) NOT NULL,
  `gst_reg_type` varchar(50) NOT NULL,
  `gstin` varchar(50) NOT NULL,
  `tax_reg_no` varchar(50) NOT NULL,
  `effective_date` date NOT NULL,
  `notes` varchar(50) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ats_expenses_supplier`
--
ALTER TABLE `ats_expenses_supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ats_expenses_supplier`
--
ALTER TABLE `ats_expenses_supplier`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
