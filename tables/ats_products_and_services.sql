-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 11:03 AM
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
-- Table structure for table `ats_products_and_services`
--

CREATE TABLE `ats_products_and_services` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `hsn_code` varchar(50) NOT NULL,
  `sac_code` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `sale_price` varchar(50) NOT NULL,
  `income_acount` varchar(50) NOT NULL,
  `inclusive_tax` varchar(50) NOT NULL,
  `tax` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `purchasing_information` text NOT NULL,
  `cost` varchar(50) NOT NULL,
  `expense_account` varchar(50) NOT NULL,
  `purchase_tax` varchar(50) NOT NULL,
  `reverse_change` varchar(50) NOT NULL,
  `preferred_supplier` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ats_products_and_services`
--

INSERT INTO `ats_products_and_services` (`id`, `name`, `sku`, `hsn_code`, `sac_code`, `unit`, `category`, `sale_price`, `income_acount`, `inclusive_tax`, `tax`, `description`, `purchasing_information`, `cost`, `expense_account`, `purchase_tax`, `reverse_change`, `preferred_supplier`, `created_at`, `updated_at`) VALUES
(3, 'dgdgd', 'zzcgf', 'dtgdfg', 'ftgrfdg', 'hgdhy', 'gdhtgdh', 'ghjtg', 'cgjngn', 'on', '15.0% GST', 'jfgjfgj', 'ghgh', 'gfjg', 'Rent Expense', '18.0% GST', 'fgjfgj', '-Select-', '2019-10-23 12:24:41', '2019-10-23 12:24:41'),
(5, 'ghmhgmm', 'ghmjm', 'jhmjgm', 'n', 'ghmjgm', 'jhmjhm', 'jgmh', 'fgjnfgn', 'on', '14.5% GST', 'mgdmg', 'gmhmjm', 'gmjm', 'Purchases', '28.0% GST', 'ghmhgm', '-Select-', '2019-10-24 04:24:41', '2019-10-24 04:24:41'),
(6, 'Abhinav', 'zdgd', 'fhgb', 'gfhb', 'qefde', 'hfybjn', 'bfhynyj', 'fgjnfgn', 'on', '28.0% GST', 'wtfgedfgewg', 'sadfvwdgdg', 'dsgv', 'Rent Expense', '28.0% GST', 'thfyjn', '-Select-', '2019-10-24 05:13:08', '2019-10-24 05:13:08'),
(7, 'zdsvs', 'cxc', 'xcbxc', 'xc bxcvb', 'xcbxcvb', 'xcbvxb', '75232', '-Select-', 'on', '28.0% GST', 'kjljk;', 'jkljk;ljk', '453543', 'Purchases', '15.0% GST', 'thfyjn', '-Select-', '2019-10-24 05:58:46', '2019-10-24 05:58:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ats_products_and_services`
--
ALTER TABLE `ats_products_and_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ats_products_and_services`
--
ALTER TABLE `ats_products_and_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
