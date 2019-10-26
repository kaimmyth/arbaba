-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 06:50 AM
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
-- Table structure for table `ats_sales_customers`
--

CREATE TABLE `ats_sales_customers` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `phone_no` varchar(500) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `display_name_as` varchar(50) NOT NULL,
  `other` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `gst_reg_type` varchar(50) DEFAULT NULL,
  `gst_in` varchar(50) NOT NULL,
  `bill_with_partner` varchar(50) NOT NULL,
  `billing_address` varchar(50) NOT NULL,
  `city_town` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `shipping_address` varchar(50) NOT NULL,
  `city_town_shipping` text NOT NULL,
  `state_shipping` text NOT NULL,
  `pin_code_shipping` varchar(50) NOT NULL,
  `country_shipping` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `tax_reg_no` varchar(50) NOT NULL,
  `cst_reg_no` varchar(50) NOT NULL,
  `pan_no` varchar(50) NOT NULL,
  `preferred_payment_method` varchar(50) NOT NULL,
  `preferred_delivery_method` varchar(50) NOT NULL,
  `terms` text NOT NULL,
  `opening_balance` varchar(50) NOT NULL,
  `as_of` varchar(50) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ats_sales_customers`
--

INSERT INTO `ats_sales_customers` (`id`, `title`, `first_name`, `last_name`, `email_id`, `company`, `mobile_no`, `phone_no`, `fax`, `display_name_as`, `other`, `website`, `gst_reg_type`, `gst_in`, `bill_with_partner`, `billing_address`, `city_town`, `state`, `pin_code`, `country`, `shipping_address`, `city_town_shipping`, `state_shipping`, `pin_code_shipping`, `country_shipping`, `notes`, `tax_reg_no`, `cst_reg_no`, `pan_no`, `preferred_payment_method`, `preferred_delivery_method`, `terms`, `opening_balance`, `as_of`, `attachment`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'rudyktd', 'rf7yf', 'fuy', 'cahahgmhgmg@GMAIL.COM', '1982', 45345353, '4535335453', '453543dfv', 'dsdgv', 'mn,j', 'jhbh', NULL, '35AABCS1429B1ZX', 'Bill With Customer', 'WWEFCERVE VERVE DB', 'al-Ayn', 'Abu Dhabi', 'sddgsdg', 'United Arab Emirates', 'WWEFCERVE VERVE DB', 'al-Ayn', 'Abu Dhabi', 'sddgsdg', 'United Arab Emirates', 'cvnfx', 'v bv', 'vxnvxb', 'vxv', 'Cash', 'Print Later', 'Add New +', '52202h', '22-10-2019', 'NA', '2019-10-25 09:08:34', '2019-10-25 09:08:34', '2019-10-25 09:08:34', '2019-10-25 09:08:34'),
(2, 'rudyktd', 'rf7yf', 'fuy', 'cahahgmhgmg@GMAIL.COM', '1982', 45345353, '4535335453', '453543dfv', 'dsdgv', 'mn,j', 'jhbh', NULL, '35AABCS1429B1ZX', 'Bill With Customer', 'WWEFCERVE VERVE DB', 'al-Ayn', 'Abu Dhabi', 'sddgsdg', 'United Arab Emirates', 'WWEFCERVE VERVE DB', 'al-Ayn', 'Abu Dhabi', 'sddgsdg', 'United Arab Emirates', 'cvnfx', 'v bv', 'vxnvxb', 'vxv', 'Cash', 'Print Later', 'Add New +', '52202h', '22-10-2019', 'NA', '2019-10-25 09:10:01', '2019-10-25 09:10:01', '2019-10-25 09:10:01', '2019-10-25 09:10:01'),
(3, 'svsd', 'Abhinav', 'roy', 'cahahgmhgmg@GMAIL.COM', '1982', 45345353, '4535335453', '453543dfv', 'dsdgv', 'sg', 'jhbh', NULL, '35AABCS1429B1ZX', 'Bill With Customer', 'WWEFCERVE VERVE DB', 'al-Ayn', 'Abu Dhabi', 'sddgsdg', 'United Arab Emirates', 'WWEFCERVE VERVE DB', 'al-Ayn', 'Abu Dhabi', 'sddgsdg', 'United Arab Emirates', 'xcc', '\\xb\\fxb', 'cbvb', 'cbnvb', 'Cheque', 'Send Later', 'Due on receipt', 'vxnvn', '16-10-2019', 'NA', '2019-10-25 09:10:41', '2019-10-25 09:10:41', '2019-10-25 09:10:41', '2019-10-25 09:10:41'),
(4, 'erhgf', 'Abhinav', 'dsvsd', 'cahahgmhgmg@GMAIL.COM', '1982', 45345353, '4535335453', '453543dfv', 'dfgdf', 'dfgdfg', 'zxz€zx', 'GST unregistered', '35AABCS1429B1ZX', 'Bill With Customer', 'WWEFCERVE VERVE DB', 'al-Ayn', 'Abu Dhabi', 'sddgsdg', 'United Arab Emirates', 'WWEFCERVE VERVE DB', 'al-Ayn', 'Abu Dhabi', 'sddgsdg', 'United Arab Emirates', 'xvzvzxv', 'xcvcxv', 'cvxcv', 'xcvxcv', 'Cheque', 'Send Later', 'Net 15', '873573', '16-10-2019', 'NA', '2019-10-25 09:21:46', '2019-10-25 09:21:46', '2019-10-25 09:21:46', '2019-10-25 09:21:46'),
(5, 'nik', 'Abhinav', 'roy', 'cahahgmhgmg@GMAIL.COM', '1982', 45345353, '4535335453', '453543dfv', 'Abhinav roy', 'VSSDV', 'zv cv', 'GST registered- Regular', '35AABCS1429B1ZX', 'Bill With Customer', 'WWEFCERVE VERVE DB', 'al-Ayn', 'Abu Dhabi', 'sddgsdg', 'United Arab Emirates', 'WWEFCERVE VERVE DB', 'al-Ayn', 'Abu Dhabi', 'sddgsdg', 'United Arab Emirates', 'BCDSFC  SDBVDSFB', 'FBDBFD', 'FDBDFB', 'FBDFB', 'Cash', 'Print Later', 'Net 30', '873573', '23-10-2019', 'NA', '2019-10-25 12:30:59', '2019-10-25 12:30:59', '2019-10-25 12:30:59', '2019-10-25 12:30:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ats_sales_customers`
--
ALTER TABLE `ats_sales_customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ats_sales_customers`
--
ALTER TABLE `ats_sales_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
