-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 05:47 AM
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
-- Table structure for table `ar_expenses_supplier`
--

CREATE TABLE `ar_expenses_supplier` (
  `id` int(50) NOT NULL,
  `title` varchar(50) CHARACTER SET latin1 NOT NULL,
  `first_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `mobile_no` varchar(50) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `middle_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `company_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `other` varchar(50) CHARACTER SET latin1 NOT NULL,
  `company` varchar(50) CHARACTER SET latin1 NOT NULL,
  `display_name_as` varchar(50) CHARACTER SET latin1 NOT NULL,
  `website` varchar(50) CHARACTER SET latin1 NOT NULL,
  `billing_rate` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `city` varchar(50) CHARACTER SET latin1 NOT NULL,
  `state` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pin_code` varchar(10) CHARACTER SET latin1 NOT NULL,
  `country` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pan_no` varchar(50) CHARACTER SET latin1 NOT NULL,
  `terms` varchar(50) CHARACTER SET latin1 NOT NULL,
  `opening_balance` varchar(50) CHARACTER SET latin1 NOT NULL,
  `as_of` date NOT NULL,
  `account_no` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gst_reg_type` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gstin` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tax_reg_no` varchar(50) CHARACTER SET latin1 NOT NULL,
  `effective_date` date NOT NULL,
  `notes` varchar(50) CHARACTER SET latin1 NOT NULL,
  `attachment` varchar(50) CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ar_expenses_supplier`
--

INSERT INTO `ar_expenses_supplier` (`id`, `title`, `first_name`, `email_id`, `mobile_no`, `last_name`, `middle_name`, `company_name`, `other`, `company`, `display_name_as`, `website`, `billing_rate`, `address`, `city`, `state`, `pin_code`, `country`, `pan_no`, `terms`, `opening_balance`, `as_of`, `account_no`, `gst_reg_type`, `gstin`, `tax_reg_no`, `effective_date`, `notes`, `attachment`, `created_at`, `updated_at`) VALUES
(1, 'Mr', 'Sachin', 'sumit.m@itscient.com', '(999) 999-9999', 'Pramanik', 'Kumar', 'ITSCIENT-LLC', '44444', 'ITSCIENT', 'MrSachin', 'gdghfghgghjg', '48', 'My Address', 'jamshedpur', 'Wabash', '5433', 'India', '12345678945', 'Due On receipt', '4882', '2019-10-16', '427845754577', 'GST Registered Composition', '15771ht', 'hfdhdh', '6786-10-26', 'My Notes', 'reminder_mail.PNG', '2019-10-26 10:12:35', '2019-10-26 10:12:35'),
(2, 'dada', 'Rahul', 'sumit.m@itscient.com', '(111) 111-1111', 'Dutta', 'KUMAR', 'ITSCIENT-LLC', 'hgfhdgf', 'gfdgf', 'dadaRahul', 'gfhgfh', 'hgnhgn', 'thrtht', 'hazaribagh', 'kokra', '5433', 'India', 'xdgfdghfdh', 'Due On receipt', '23512', '2019-10-16', '427845754577', 'GST Registered Composition', '15771ht', 'hfdhdh', '6786-10-26', 'notes', 'invoice_link.PNG', '2019-10-26 10:16:12', '2019-10-26 10:16:12'),
(3, 'dada', 'Rahul', 'sumit.m@itscient.com', '(111) 111-1111', 'Dutta', 'KUMAR', 'ITSCIENT-LLC', 'hgfhdgf', 'gfdgf', 'dadaRahul', 'gfhgfh', 'hgnhgn', 'thrtht', 'hazaribagh', 'kokra', '5433', 'India', 'xdgfdghfdh', 'Due On receipt', '23512', '2019-10-16', '427845754577', 'GST Registered Composition', '15771ht', 'hfdhdh', '6786-10-26', 'notes', 'invoice_link.PNG', '2019-10-26 10:20:30', '2019-10-26 10:20:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ar_expenses_supplier`
--
ALTER TABLE `ar_expenses_supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ar_expenses_supplier`
--
ALTER TABLE `ar_expenses_supplier`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
