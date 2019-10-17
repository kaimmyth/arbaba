-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2019 at 07:18 AM
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
-- Database: `crmbaba_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `its_address`
--

CREATE TABLE `its_address` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `address_type` varchar(50) NOT NULL,
  `address_1` varchar(50) NOT NULL,
  `adress2` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_address`
--

INSERT INTO `its_address` (`id`, `customer_id`, `customer_name`, `address_type`, `address_1`, `adress2`, `city`, `state`, `postal_code`, `country_name`, `status`) VALUES
(1, '2', 'its_budding', 'Branch', 'bhuiyadih', 'gwalabasti', 'jamshedpur', 'jharkhand', '831009', 'India', 1),
(2, '2', 'its_budding', 'home', 'bhuiyadih', 'gwalabasti', 'jamshedpur', 'jharkhand', '831009', 'India', 1),
(3, '2', 'its_budding', 'HQ', 'bhuiyadih', 'gwalabasti', 'jamshedpur', 'jharkhand', '831009', 'India', 1),
(4, '2', 'its_budding', 'Extention', 'bhuiyadih', 'gwalabasti', 'jamshedpur', 'jharkhand', '831009', 'India', 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_address_custom`
--

CREATE TABLE `its_address_custom` (
  `id` int(11) NOT NULL,
  `label_address_type1` varchar(50) NOT NULL,
  `label_address_type2` varchar(50) NOT NULL,
  `label_address1` varchar(50) NOT NULL,
  `label_address2` varchar(50) NOT NULL,
  `label_city` varchar(50) NOT NULL,
  `label_state` varchar(50) NOT NULL,
  `label_country` varchar(50) NOT NULL,
  `label_postal_code` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_address_custom`
--

INSERT INTO `its_address_custom` (`id`, `label_address_type1`, `label_address_type2`, `label_address1`, `label_address2`, `label_city`, `label_state`, `label_country`, `label_postal_code`, `status`) VALUES
(1, 'Shipping Address', 'Mailing Address ', 'Address 1', 'Address 2', 'CIty', ' State', 'Country', 'Postal Code', 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_city`
--

CREATE TABLE `its_city` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_contact_type`
--

CREATE TABLE `its_contact_type` (
  `id` int(11) NOT NULL,
  `contact_type_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_contact_type`
--

INSERT INTO `its_contact_type` (`id`, `contact_type_name`, `status`) VALUES
(1, 'Home', 1),
(2, 'Office', 1),
(3, 'Personal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_contract`
--

CREATE TABLE `its_contract` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(50) DEFAULT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `phone_no` varchar(50) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `contract_start_date` varchar(50) DEFAULT NULL,
  `contract_end_date` varchar(50) DEFAULT NULL,
  `contract_type` varchar(50) DEFAULT NULL,
  `contract_status` varchar(50) DEFAULT NULL,
  `cont_product_id` varchar(50) DEFAULT NULL,
  `cont_product_name` varchar(50) DEFAULT NULL,
  `lease_type` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `lease_start_date` varchar(50) DEFAULT NULL,
  `lease_end_date` varchar(50) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `total_price` varchar(50) DEFAULT NULL,
  `insurance` varchar(50) DEFAULT NULL,
  `maintenance` varchar(50) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_contract`
--

INSERT INTO `its_contract` (`id`, `customer_id`, `customer_name`, `phone_no`, `email_id`, `contract_start_date`, `contract_end_date`, `contract_type`, `contract_status`, `cont_product_id`, `cont_product_name`, `lease_type`, `price`, `lease_start_date`, `lease_end_date`, `quantity`, `total_price`, `insurance`, `maintenance`, `date`, `created_by`, `modified_by`, `status`) VALUES
(1, NULL, 'phone', '7903609286', 'gudu6753@gmail.com', '10-08-2019', '10-08-2019', NULL, 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'f', 'ff', '2019-08-10 02:34:49', 'amit', 'amit', 1),
(2, NULL, 'phone', '7903609586', 'gudu6753@gmail.com', '10-08-2019', '10-08-2019', NULL, 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'f', 'ff', '2019-08-10 02:41:28', 'amit', 'amit', 1),
(3, NULL, 'rohit', '86665252556', 'rohit@ghdghsdg', '10-08-2019', '10-08-2019', NULL, 'delivered', NULL, 'phone', 'Lease for 10 Year', NULL, '19-08-2019', '20-08-2019', '1', 'dfdfd', 'f', 'ff', '2019-08-10 02:50:25', 'amit', 'amit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_country`
--

CREATE TABLE `its_country` (
  `id` int(11) NOT NULL,
  `country_code` varchar(50) NOT NULL,
  `coutry_phone_code` int(50) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_country`
--

INSERT INTO `its_country` (`id`, `country_code`, `coutry_phone_code`, `country_name`, `status`) VALUES
(1, 'IN', 91, 'India', 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_custom`
--

CREATE TABLE `its_custom` (
  `id` int(11) NOT NULL,
  `label_category` varchar(50) DEFAULT NULL,
  `label_sub_category` varchar(50) NOT NULL,
  `label_condition` varchar(50) NOT NULL,
  `label_name_type` varchar(50) NOT NULL,
  `label_area` varchar(50) NOT NULL,
  `label_name` varchar(50) NOT NULL,
  `label_quantity` varchar(50) NOT NULL,
  `label_cost` varchar(35) NOT NULL,
  `per_address` tinyint(1) NOT NULL,
  `label_quantity_type` varchar(50) NOT NULL,
  `ship_address` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `label_cost_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_custom`
--

INSERT INTO `its_custom` (`id`, `label_category`, `label_sub_category`, `label_condition`, `label_name_type`, `label_area`, `label_name`, `label_quantity`, `label_cost`, `per_address`, `label_quantity_type`, `ship_address`, `status`, `created_by`, `modified_by`, `label_cost_type`) VALUES
(1, 'Category', 'Sub Category', 'product condition', 'Product Type', 'Area sq fit', 'Product/Service Name', 'Unit', 'Per Price', 1, 'Quantity Type', 1, 1, 'jhsdh', 'sdadsad', 'Cost Type');

-- --------------------------------------------------------

--
-- Table structure for table `its_customers`
--

CREATE TABLE `its_customers` (
  `id` int(11) NOT NULL,
  `party_types` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `l_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_types` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_uses` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `party_relationships` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_points` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_address` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_city` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_state` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_country` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_pin` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_landmark` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_phone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_email` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_address` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_city` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_state` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_country` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_pin` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_landmark` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_phone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shiping_email` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `its_customers_details`
--

CREATE TABLE `its_customers_details` (
  `id` int(11) NOT NULL,
  `party_types` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `l_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_contact_type1` varchar(111) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `phone` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone1` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_contact_type2` varchar(111) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `phone2` varchar(111) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `phone_contact_type3` varchar(111) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `phone3` varchar(111) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `email_contact_type1` varchar(111) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `email` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_contact_type2` varchar(111) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `email2` varchar(111) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `email_contact_type3` varchar(111) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `email3` varchar(111) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `fax1` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax2` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax3` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `org_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `org_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_relation_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_billing_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_shipping_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `group_name` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oraganisation_type_data` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_type` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `near_by_location` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ship_address` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bil_address` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `ip_address` varchar(111) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_customers_details`
--

INSERT INTO `its_customers_details` (`id`, `party_types`, `f_name`, `l_name`, `phone_contact_type1`, `phone`, `phone1`, `phone_contact_type2`, `phone2`, `phone_contact_type3`, `phone3`, `email_contact_type1`, `email`, `email_contact_type2`, `email2`, `email_contact_type3`, `email3`, `fax1`, `contact_type`, `fax2`, `fax3`, `org_name`, `org_type`, `customer_type`, `customer_relation_name`, `description`, `is_billing_address`, `is_shipping_address`, `group_name`, `oraganisation_type_data`, `location_type`, `address1`, `address2`, `city`, `near_by_location`, `ship_address`, `bil_address`, `created_at`, `updated_at`, `created_by`, `ip_address`, `status`) VALUES
(1, NULL, 'Amit', 'parajapati', 'NULL', '8092181759', NULL, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'amit@gmail.com', 'NULL', 'NULL', 'NULL', 'NULL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0'),
(2, 'group', NULL, NULL, 'NULL', '919.595.6363', NULL, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', NULL, 'NULL', 'NULL', 'NULL', 'NULL', NULL, NULL, NULL, NULL, NULL, 'IT', NULL, NULL, NULL, NULL, NULL, 'Amit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-10 17:32:11', NULL, NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `its_customer_custom`
--

CREATE TABLE `its_customer_custom` (
  `id` int(11) NOT NULL,
  `label_type` varchar(50) NOT NULL,
  `label_g_name` varchar(50) NOT NULL,
  `label_o_name` varchar(50) NOT NULL,
  `label_model_organition` varchar(50) NOT NULL,
  `label_model_add_o` varchar(50) NOT NULL,
  `label_o_type` varchar(50) NOT NULL,
  `label_p_name` varchar(50) NOT NULL,
  `label_p_f_name` varchar(50) NOT NULL,
  `label_p_l_name` varchar(50) NOT NULL,
  `label_phone` varchar(50) NOT NULL,
  `label_email_id` varchar(50) NOT NULL,
  `label_customer_type` varchar(50) NOT NULL,
  `label_customer_name` varchar(50) NOT NULL,
  `label_contact_point` varchar(50) NOT NULL,
  `label_description` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_customer_custom`
--

INSERT INTO `its_customer_custom` (`id`, `label_type`, `label_g_name`, `label_o_name`, `label_model_organition`, `label_model_add_o`, `label_o_type`, `label_p_name`, `label_p_f_name`, `label_p_l_name`, `label_phone`, `label_email_id`, `label_customer_type`, `label_customer_name`, `label_contact_point`, `label_description`, `status`) VALUES
(1, 'Customer Type', 'Group Name', 'Oraganation Name', 'Oraganition', 'Add Oraganition Type', 'Oraganition Type', 'Person Name', 'First Name', 'last Name', 'Phone Number', 'Email  Id', 'Customer Type', 'Customer Name', 'Contact Point', 'Description', 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_defect`
--

CREATE TABLE `its_defect` (
  `id` int(11) NOT NULL,
  `stock_id` varchar(35) NOT NULL,
  `product_code` varchar(12) NOT NULL,
  `product_name` varchar(35) NOT NULL,
  `model_no` varchar(12) NOT NULL,
  `company_name` varchar(10) NOT NULL,
  `no_of_defect_product` int(10) NOT NULL,
  `per_product_cost` int(25) NOT NULL,
  `defect_cost` int(12) NOT NULL,
  `reason_of_defect` varchar(35) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `modified_by` varchar(10) NOT NULL,
  `created_by` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_defect`
--

INSERT INTO `its_defect` (`id`, `stock_id`, `product_code`, `product_name`, `model_no`, `company_name`, `no_of_defect_product`, `per_product_cost`, `defect_cost`, `reason_of_defect`, `date`, `status`, `modified_by`, `created_by`) VALUES
(1, '2', 'prod002', 'headphone', 'bjhdh4545', 'vicio', 1, 5000, 5000, 'water', '2019-06-12', 0, '4230', '4230'),
(2, '1', 'prod001', 'mobile', 'vivoy21l', 'vivo', 1, 7500, 7500, 'break', '2019-07-18', 0, '4230', '4230');

-- --------------------------------------------------------

--
-- Table structure for table `its_email`
--

CREATE TABLE `its_email` (
  `id` int(11) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `emai_type` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_history`
--

CREATE TABLE `its_history` (
  `id` int(11) NOT NULL,
  `stock_id` varchar(50) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `no_of_product` int(20) NOT NULL,
  `purpose` text NOT NULL,
  `date` date NOT NULL,
  `created_by` varchar(35) NOT NULL,
  `modified_by` varchar(35) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_history`
--

INSERT INTO `its_history` (`id`, `stock_id`, `product_code`, `product_name`, `no_of_product`, `purpose`, `date`, `created_by`, `modified_by`, `status`) VALUES
(1, '1', 'prod001', 'mobile', 2, 'product Is issue', '2019-06-12', '4230', '4230', 3),
(2, '1', 'prod001', 'mobile', 2, 'Product Is Defect', '2019-06-12', '4230', '4230', 4),
(3, '1', 'prod001', 'mobile', 2, 'Quantity Edit ', '2019-06-12', '4230', '4230', 2),
(4, '1', 'prod001', 'mobile', 2, 'Quantity Edit ', '2019-06-12', '4230', '4230', 2),
(5, '1', 'prod001', '', 0, '', '0000-00-00', '', '', 0),
(6, '1', 'prod001', 'mobile', 3, '', '0000-00-00', '', '', 0),
(7, '1', 'prod001', 'mobile', 4, 'Quantity Edit ', '0000-00-00', '', '', 2),
(8, '1', 'prod001', 'mobile', 4, 'Quantity Edit ', '2019-06-12', '4230', '4230', 2),
(9, '1', 'prod001', 'mobile', 2, 'product Is issue', '2019-06-12', '4230', '4230', 3),
(10, '2', 'prod002', 'headphone', 2, 'product Is issue', '2019-06-12', '4230', '4230', 3),
(11, '2', 'prod002', 'headphone', 1, 'Product Is Defect', '2019-06-12', '4230', '4230', 4),
(12, '2', 'prod002', 'headphone', 2, 'product Is issue', '2019-06-27', '4230', '4230', 3),
(13, '1', 'prod001', 'mobile', 5, 'Quantity Edit ', '2019-07-18', '4230', '4230', 2),
(14, '1', 'prod001', 'mobile', 1, 'Product Is Defect', '2019-07-18', '4230', '4230', 4),
(15, '1', 'prod001', 'mobile', 2, 'product Is issue', '2019-07-18', '4230', '4230', 3);

-- --------------------------------------------------------

--
-- Table structure for table `its_issued`
--

CREATE TABLE `its_issued` (
  `id` int(11) NOT NULL,
  `stock_id` varchar(35) NOT NULL,
  `product_code` varchar(35) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `per_product_cost` int(12) NOT NULL,
  `issue_cost` int(12) NOT NULL,
  `no_of_product` int(12) NOT NULL,
  `issue_quantity` int(12) NOT NULL,
  `balanced_no_of_product` int(12) NOT NULL,
  `receiver_id` varchar(35) NOT NULL,
  `receiver_name` varchar(35) NOT NULL,
  `reason` varchar(35) NOT NULL,
  `date` date DEFAULT NULL,
  `created_by` varchar(10) NOT NULL,
  `modified_by` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_issued`
--

INSERT INTO `its_issued` (`id`, `stock_id`, `product_code`, `product_name`, `per_product_cost`, `issue_cost`, `no_of_product`, `issue_quantity`, `balanced_no_of_product`, `receiver_id`, `receiver_name`, `reason`, `date`, `created_by`, `modified_by`, `status`) VALUES
(1, '1', 'prod001', 'mobile', 7500, 15000, 4, 2, 2, '4273', 'Abhay Singh', 'fdgdfgds', '2019-06-12', '4230', '4230', 0),
(2, '2', 'prod002', 'headphone', 5000, 10000, 5, 2, 3, '5211', 'Priya Dey', 'xzc', '2019-06-12', '4230', '4230', 0),
(3, '2', 'prod002', 'headphone', 5000, 10000, 2, 2, 0, '5211', 'Priya Dey', 'rer', '2019-06-27', '4230', '4230', 0),
(4, '1', 'prod001', 'mobile', 7500, 15000, 4, 2, 2, '4231', 'Priyanka Dey', 'Two New Student have Come In The Sc', '2019-07-18', '4230', '4230', 0);

-- --------------------------------------------------------

--
-- Table structure for table `its_lease_type`
--

CREATE TABLE `its_lease_type` (
  `id` int(11) NOT NULL,
  `lease_type` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_lease_type`
--

INSERT INTO `its_lease_type` (`id`, `lease_type`, `status`, `created_by`, `date`, `modified_by`) VALUES
(1, 'For 2 year', 1, 'Amit', '2019-08-09 03:05:24', 'amit'),
(2, 'for 1 Year', 1, 'amit', '2019-08-09 03:05:24', 'amit'),
(3, 'For 3 Year', 1, 'amit', '2019-08-09 03:34:44', 'amit');

-- --------------------------------------------------------

--
-- Table structure for table `its_location`
--

CREATE TABLE `its_location` (
  `id` int(11) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `location_type` varchar(50) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `near_by_location` varchar(50) NOT NULL,
  `ship_address` enum('yes','no') NOT NULL DEFAULT 'no',
  `bil_address` enum('yes','no') NOT NULL DEFAULT 'no',
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_mobiles`
--

CREATE TABLE `its_mobiles` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `mobile_type` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_price_type`
--

CREATE TABLE `its_price_type` (
  `id` int(11) NOT NULL,
  `price_type` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_price_type`
--

INSERT INTO `its_price_type` (`id`, `price_type`, `status`, `date`, `created_by`, `modified_by`) VALUES
(1, 'Cost', 1, '2019-07-25 02:54:23', 'amit', 'amit'),
(2, 'Price', 1, '2019-07-25 02:54:35', 'amit', 'amit'),
(3, 'MRP', 1, '2019-07-25 02:54:52', 'amit', 'amit'),
(4, 'Unit ', 1, '2019-07-25 02:55:00', 'amit', 'amit');

-- --------------------------------------------------------

--
-- Table structure for table `its_product`
--

CREATE TABLE `its_product` (
  `id` int(11) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_category` varchar(256) NOT NULL,
  `product_sub_category` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `end_date` date DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `product_condition` varchar(256) DEFAULT NULL,
  `quantity` varchar(256) NOT NULL,
  `quantity_type` varchar(50) NOT NULL,
  `product_category_id` varchar(50) DEFAULT NULL,
  `installed_location_id` varchar(50) DEFAULT NULL,
  `location_id` varchar(50) DEFAULT NULL,
  `product_type_id` varchar(50) DEFAULT NULL,
  `address_1` text DEFAULT NULL,
  `address_2` text DEFAULT NULL,
  `state1` varchar(50) DEFAULT NULL,
  `city1` varchar(50) DEFAULT NULL,
  `pin1` varchar(50) DEFAULT NULL,
  `area_square_fit` varchar(256) DEFAULT NULL,
  `landmark1` varchar(50) DEFAULT NULL,
  `long_lat1` varchar(50) DEFAULT NULL,
  `price` varchar(256) NOT NULL,
  `city2` varchar(50) DEFAULT NULL,
  `country1` varchar(50) DEFAULT NULL,
  `state2` varchar(50) DEFAULT NULL,
  `country2` varchar(50) DEFAULT NULL,
  `pin2` varchar(50) DEFAULT NULL,
  `landmark2` varchar(50) DEFAULT NULL,
  `long_lat2` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modify_by` varchar(50) NOT NULL,
  `is_serviceable_item` enum('yes','no') DEFAULT NULL,
  `is_service_item` enum('yes','no') DEFAULT NULL,
  `is_serialized` enum('yes','no') DEFAULT NULL,
  `num_column1` varchar(50) DEFAULT NULL,
  `num_column2` varchar(50) DEFAULT NULL,
  `num_column3` int(11) DEFAULT NULL,
  `txt_column1` varchar(50) DEFAULT NULL,
  `txt_column2` varchar(50) DEFAULT NULL,
  `txt_column3` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_product`
--

INSERT INTO `its_product` (`id`, `product_code`, `product_name`, `product_category`, `product_sub_category`, `product_type`, `end_date`, `start_date`, `product_condition`, `quantity`, `quantity_type`, `product_category_id`, `installed_location_id`, `location_id`, `product_type_id`, `address_1`, `address_2`, `state1`, `city1`, `pin1`, `area_square_fit`, `landmark1`, `long_lat1`, `price`, `city2`, `country1`, `state2`, `country2`, `pin2`, `landmark2`, `long_lat2`, `description`, `status`, `date`, `created_by`, `modify_by`, `is_serviceable_item`, `is_service_item`, `is_serialized`, `num_column1`, `num_column2`, `num_column3`, `txt_column1`, `txt_column2`, `txt_column3`) VALUES
(7, 'comp12', 'its_comp', 'software', 'computer', 'Service', '2019-08-20', '2019-08-19', 'broken', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2019-08-05', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'comp12', 'its_comp', 'comp', 'computer', 'Subscription', '2019-08-20', '2019-08-19', 'broken', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2019-08-20', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `its_product_category`
--

CREATE TABLE `its_product_category` (
  `id` int(11) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_product_category`
--

INSERT INTO `its_product_category` (`id`, `product_category`, `status`, `created_by`, `modified_by`, `date`) VALUES
(1, 'software', 1, 'amit', 'amit', '2019-08-06 07:31:35'),
(3, 'Subscription', 1, 'amit', 'amit', '2019-08-08 03:08:53'),
(4, 'dsfsdsd', 1, 'amit', 'amit', '2019-08-08 22:57:52'),
(5, 'dsfsdsd', 1, 'amit', 'amit', '2019-08-08 22:58:35'),
(11, 'property', 1, 'amit', 'amit', '2019-08-12 00:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `its_product_custom`
--

CREATE TABLE `its_product_custom` (
  `id` int(11) NOT NULL,
  `label_category` varchar(50) DEFAULT NULL,
  `label_code` varchar(50) NOT NULL,
  `label_sub_category` varchar(50) NOT NULL,
  `label_name_type` varchar(50) NOT NULL,
  `label_area` varchar(50) NOT NULL,
  `label_name` varchar(50) NOT NULL,
  `label_quantity` varchar(50) NOT NULL,
  `label_cost` varchar(35) NOT NULL,
  `label_stock_quantity` varchar(50) NOT NULL,
  `label_start_date` varchar(50) NOT NULL,
  `label_end_Date` varchar(50) NOT NULL,
  `label_quantity_type` varchar(50) NOT NULL,
  `num_column1` varchar(50) NOT NULL,
  `num_column2` varchar(50) NOT NULL,
  `num_column3` varchar(50) NOT NULL,
  `txt_column1` varchar(50) NOT NULL,
  `txt_column2` varchar(50) NOT NULL,
  `txt_column3` varchar(50) NOT NULL,
  `lable_servicable` varchar(50) NOT NULL,
  `label_service_item` varchar(50) NOT NULL,
  `label_serialise` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `label_cost_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_product_custom`
--

INSERT INTO `its_product_custom` (`id`, `label_category`, `label_code`, `label_sub_category`, `label_name_type`, `label_area`, `label_name`, `label_quantity`, `label_cost`, `label_stock_quantity`, `label_start_date`, `label_end_Date`, `label_quantity_type`, `num_column1`, `num_column2`, `num_column3`, `txt_column1`, `txt_column2`, `txt_column3`, `lable_servicable`, `label_service_item`, `label_serialise`, `description`, `status`, `created_by`, `modified_by`, `label_cost_type`) VALUES
(1, 'Properry Category', 'Property  land no', 'Property Sub cat', 'Property type', 'Area sq fit', 'Property Name', 'Unit', 'Price', 'Stock In Quantity', 'Lease Start Date', 'Lease End Date', 'Quantity Type', 'Custom Number Column1', 'Custom  Column2', 'Custom Column3', 'location', 'Custom text Column', 'Custom text Column', 'Servicable', 'Service Item', 'Serialise', 'Description', 1, 'Amit', 'Amit', 'Cost Type');

-- --------------------------------------------------------

--
-- Table structure for table `its_product_type`
--

CREATE TABLE `its_product_type` (
  `id` int(11) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_product_type`
--

INSERT INTO `its_product_type` (`id`, `product_type`, `date`, `status`, `created_by`, `modified_by`) VALUES
(2, 'Service', '2019-08-08 03:36:04', 1, 'amit', 'amit'),
(8, 'Subscription', '2019-08-09 01:46:09', 1, 'amit', 'amit'),
(9, 'Rent', '2019-08-09 01:57:23', 1, 'amit', 'amit'),
(10, 'Lease', '2019-08-09 01:58:49', 1, 'amit', 'amit');

-- --------------------------------------------------------

--
-- Table structure for table `its_quantity_type`
--

CREATE TABLE `its_quantity_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_quantity_type`
--

INSERT INTO `its_quantity_type` (`id`, `type_name`, `status`, `date`, `created_by`, `modified_by`) VALUES
(1, 'Square feet', 1, '2019-08-06 07:34:14', 'amit', 'amit'),
(2, 'Acred', 1, '2019-08-07 06:02:17', 'amit', 'amit'),
(4, 'dssdfsd', 1, '2019-08-08 22:58:16', 'amit', 'amit'),
(5, 'VVVVVVVVVVVVVVV', 1, '2019-08-08 23:45:23', 'amit', 'amit'),
(6, 'YYYYYYYYYYYYY', 1, '2019-08-08 23:48:26', 'amit', 'amit'),
(7, 'YYYYYYYYYYYYY', 1, '2019-08-09 00:57:21', 'amit', 'amit'),
(8, '6666666666666', 1, '2019-08-09 00:57:33', 'amit', 'amit'),
(9, '666666666', 1, '2019-08-09 01:06:53', 'amit', 'amit'),
(10, 'tttttttttt', 1, '2019-08-09 01:46:19', 'amit', 'amit'),
(11, 'cm', 1, '2019-08-09 05:45:53', 'amit', 'amit'),
(12, 'ttttttttttt', 1, '2019-08-09 05:48:01', 'amit', 'amit');

-- --------------------------------------------------------

--
-- Table structure for table `its_rent_type`
--

CREATE TABLE `its_rent_type` (
  `id` int(11) NOT NULL,
  `rent_type` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_rent_type`
--

INSERT INTO `its_rent_type` (`id`, `rent_type`, `status`, `date`, `created_by`, `modified_by`) VALUES
(1, 'For 1 Day', 1, '2019-08-09 03:05:51', 'Amit', 'amit'),
(2, 'For 2 Day', 1, '2019-08-09 03:05:58', 'Amit', 'amit'),
(3, 'For 3 Day', 1, '2019-08-09 03:34:59', 'amit', 'amit'),
(4, 'for 4 Day', 1, '2019-08-09 05:14:20', 'amit', 'amit'),
(5, 'for 4 Day', 1, '2019-08-09 05:14:45', 'amit', 'amit'),
(6, '6666666666', 1, '2019-08-09 05:17:57', 'amit', 'amit');

-- --------------------------------------------------------

--
-- Table structure for table `its_sale_custom`
--

CREATE TABLE `its_sale_custom` (
  `id` int(11) NOT NULL,
  `label_c_name` varchar(50) NOT NULL,
  `label_c_email` varchar(50) NOT NULL,
  `label_c_phone` varchar(50) NOT NULL,
  `label_c_order_date` varchar(50) NOT NULL,
  `label_c_due_date` varchar(50) NOT NULL,
  `label_c_purchase_date` varchar(50) NOT NULL,
  `label_status` varchar(50) NOT NULL,
  `label_p_mode` varchar(50) NOT NULL,
  `label_total_amount` varchar(50) NOT NULL,
  `label_discount` varchar(50) NOT NULL,
  `label_cgst` varchar(50) NOT NULL,
  `label_igst` varchar(50) NOT NULL,
  `label_sgst` varchar(50) NOT NULL,
  `label_net_amount` varchar(50) NOT NULL,
  `label_pay_amount` varchar(50) NOT NULL,
  `label_balance` varchar(50) NOT NULL,
  `status` tinyint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_sale_custom`
--

INSERT INTO `its_sale_custom` (`id`, `label_c_name`, `label_c_email`, `label_c_phone`, `label_c_order_date`, `label_c_due_date`, `label_c_purchase_date`, `label_status`, `label_p_mode`, `label_total_amount`, `label_discount`, `label_cgst`, `label_igst`, `label_sgst`, `label_net_amount`, `label_pay_amount`, `label_balance`, `status`) VALUES
(1, 'Customer Name', 'Customer Email Id', 'Customer Phone No', 'Order Date', 'Due Date', 'Purchase Date', 'Status', 'Payment Mode', 'Total Amount', 'Discount', 'Cgst', 'Igst', 'Sgst', 'Net Amount', 'Pay Amount', 'Balance', 1);

-- --------------------------------------------------------

--
-- Table structure for table `its_sale_product`
--

CREATE TABLE `its_sale_product` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `customer_name` varchar(256) NOT NULL,
  `address_id` varchar(50) DEFAULT NULL,
  `order_date` varchar(50) NOT NULL,
  `due_date` varchar(50) NOT NULL,
  `phone_no` varchar(50) DEFAULT NULL,
  `purchase_order` varchar(50) DEFAULT NULL,
  `ship_address1` varchar(50) DEFAULT NULL,
  `ship_address2` varchar(50) DEFAULT NULL,
  `city1` varchar(50) DEFAULT NULL,
  `state1` varchar(50) DEFAULT NULL,
  `postal_code1` varchar(50) DEFAULT NULL,
  `country1` varchar(50) DEFAULT NULL,
  `bill_address1` varchar(50) DEFAULT NULL,
  `bill_address2` varchar(50) DEFAULT NULL,
  `city2` varchar(50) DEFAULT NULL,
  `state2` varchar(50) DEFAULT NULL,
  `postal_code2` varchar(50) DEFAULT NULL,
  `country2` varchar(50) DEFAULT NULL,
  `product_id` varchar(50) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_code` varchar(50) DEFAULT NULL,
  `unit_price` varchar(50) DEFAULT NULL,
  `unit` varchar(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `make_of_payment` varchar(50) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `cgst` int(11) NOT NULL,
  `sgst` int(11) NOT NULL,
  `igst` int(50) NOT NULL,
  `net_amount` int(50) NOT NULL,
  `pay_amount` int(50) NOT NULL,
  `balance` int(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_serial_number`
--

CREATE TABLE `its_serial_number` (
  `id` int(11) NOT NULL,
  `product_id` varchar(35) NOT NULL,
  `stock_id` varchar(35) NOT NULL,
  `product_code` varchar(35) NOT NULL,
  `serial_number` varchar(250) NOT NULL,
  `receiver_id` varchar(35) NOT NULL,
  `Receiver_name` varchar(35) NOT NULL,
  `date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_serial_number`
--

INSERT INTO `its_serial_number` (`id`, `product_id`, `stock_id`, `product_code`, `serial_number`, `receiver_id`, `Receiver_name`, `date`, `created_by`, `modified_by`, `status`) VALUES
(1, '1', '1', 'prod001', 'prod001120620191', '8013', 'Ritesh Verma', '2019-06-12', 4230, 4230, 2),
(3, '1', '1', 'prod001', 'prod001120620193', '', '', '2019-06-12', 4230, 4230, 3),
(5, '1', '1', 'prod001', 'prod001120620195', '4273', 'Abhay Singh', '2019-06-12', 4230, 4230, 2),
(6, '1', '1', 'prod001', 'prod001120620196', '4273', 'Abhay Singh', '2019-06-12', 4230, 4230, 2),
(7, '1', '1', 'prod001', 'prod001120620197', '', 'Neeraj Kumar', '2019-06-12', 4230, 4230, 2),
(8, '1', '1', 'prod001', 'prod001120620198', '', 'Neeraj Kumar', '2019-06-12', 4230, 4230, 2),
(9, '1', '1', 'prod001', 'prod001120620199', '', '', '2019-07-18', 4230, 4230, 3),
(10, '2', '2', 'prod002', 'prod0021206201910', '5211', 'Priya Dey', '2019-06-12', 4230, 4230, 2),
(11, '2', '2', 'prod002', 'prod0021206201911', '5211', 'Priya Dey', '2019-06-12', 4230, 4230, 2),
(12, '2', '2', 'prod002', 'prod0021206201912', '', '', '2019-06-12', 4230, 4230, 3),
(13, '2', '2', 'prod002', 'prod0021206201913', '5211', 'Priya Dey', '2019-06-12', 4230, 4230, 2),
(14, '2', '2', 'prod002', 'prod0021206201914', '5211', 'Priya Dey', '2019-06-12', 4230, 4230, 2);

-- --------------------------------------------------------

--
-- Table structure for table `its_state`
--

CREATE TABLE `its_state` (
  `id` int(11) NOT NULL,
  `state` varchar(35) NOT NULL,
  `county_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_stock`
--

CREATE TABLE `its_stock` (
  `id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `subjects` varchar(50) NOT NULL,
  `sale_order_date` varchar(50) NOT NULL,
  `due_date` varchar(50) NOT NULL,
  `customer_no` varchar(50) NOT NULL,
  `accoount_name` varchar(50) NOT NULL,
  `product_status` varchar(50) NOT NULL,
  `purchase_order` varchar(256) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `ship_address1` varchar(50) NOT NULL,
  `ship_address2` varchar(50) NOT NULL,
  `ship_city` varchar(50) NOT NULL,
  `ship_state` varchar(50) NOT NULL,
  `ship_country` varchar(50) NOT NULL,
  `ship_postal_code` varchar(50) NOT NULL,
  `bil_address1` varchar(50) NOT NULL,
  `bil_address2` varchar(50) NOT NULL,
  `bil_city` varchar(50) NOT NULL,
  `bil_state` varchar(50) NOT NULL,
  `bil_country` varchar(50) NOT NULL,
  `bil_postal_code` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `unit_price` varchar(50) NOT NULL,
  `quantity_in_stock` varchar(50) NOT NULL,
  `list_price` varchar(50) NOT NULL,
  `sub_total` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `tax` varchar(50) NOT NULL,
  `grand_total` varchar(50) NOT NULL,
  `term_condition` text NOT NULL,
  `description` text NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `updated_date` varchar(50) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `its_sub_category`
--

CREATE TABLE `its_sub_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sub_category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `modified_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `its_sub_category`
--

INSERT INTO `its_sub_category` (`id`, `category_name`, `sub_category`, `status`, `date`, `created_by`, `modified_by`) VALUES
(1, 'software', 'ITs', 1, '2019-08-08 03:10:56', 'amit', 'amit'),
(2, 'software', 'ITScient', 1, '2019-08-08 05:23:27', 'amit', 'amit'),
(3, 'software', 'yyyyyyyyyyyyyy', 1, '2019-08-09 01:57:03', 'amit', 'amit');

-- --------------------------------------------------------

--
-- Table structure for table `its_users`
--

CREATE TABLE `its_users` (
  `id` int(11) NOT NULL,
  `users_role` int(11) DEFAULT NULL,
  `users_type` int(11) DEFAULT NULL COMMENT '''1'' Employee',
  `parent_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `username` varchar(111) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` bigint(111) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `token_expire` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '''0'' Inactive , ''1'' Active',
  `is_deleted` int(11) DEFAULT 0 COMMENT '''1'' =>delete',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_date` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_date` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `its_users`
--

INSERT INTO `its_users` (`id`, `users_role`, `users_type`, `parent_id`, `emp_id`, `username`, `name`, `password`, `email`, `phone`, `address`, `email_verified_at`, `remember_token`, `token_expire`, `status`, `is_deleted`, `deleted_by`, `deleted_date`, `ip_address`, `modified_date`, `created_at`, `updated_at`, `created_date`, `last_login`) VALUES
(1, 1, 0, 0, 0, 'admin', 'Amit Rajput', '$2a$08$TnLUue010iZQcUVL.b0bPeCaFvVqa221s0MmNopcnzeIg4q4jjxQa', 'amitrajput270@gmail.com', 7409969352, 'Noida 63', '0000-00-00 00:00:00', 'PHfPG7O0TAehcGfMQ9VYWJ4a6Cm78MgiTXAboh9QluePEjxn2OYfKC9RRDZR', '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00 00:00:00', '', '2019-08-07 11:02:58', '2019-06-28 14:57:00', '2019-06-28 14:57:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 2, 0, 0, 'Jamshedpurproperty', 'Amit Rajput', '$2a$08$TnLUue010iZQcUVL.b0bPeCaFvVqa221s0MmNopcnzeIg4q4jjxQa', 'amitrajput270@gmail.com', 7409969352, 'Noida 63', '0000-00-00 00:00:00', 'Jgnfop0kbJd7wQ5XMv6t7J6xl1ocqDDNwXBZS1drjnwtDp6Ua8cSACv00znr', '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00 00:00:00', '', '2019-08-07 12:52:01', '2019-06-28 14:57:00', '2019-06-28 14:57:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `its_address`
--
ALTER TABLE `its_address`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `its_address_custom`
--
ALTER TABLE `its_address_custom`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `its_contract`
--
ALTER TABLE `its_contract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_customers_details`
--
ALTER TABLE `its_customers_details`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `its_customer_custom`
--
ALTER TABLE `its_customer_custom`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `its_lease_type`
--
ALTER TABLE `its_lease_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_product`
--
ALTER TABLE `its_product`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `its_product_category`
--
ALTER TABLE `its_product_category`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `its_product_custom`
--
ALTER TABLE `its_product_custom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_product_type`
--
ALTER TABLE `its_product_type`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `its_quantity_type`
--
ALTER TABLE `its_quantity_type`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `its_rent_type`
--
ALTER TABLE `its_rent_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_sale_custom`
--
ALTER TABLE `its_sale_custom`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `its_sale_product`
--
ALTER TABLE `its_sale_product`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `its_sub_category`
--
ALTER TABLE `its_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `its_users`
--
ALTER TABLE `its_users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `its_address`
--
ALTER TABLE `its_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `its_address_custom`
--
ALTER TABLE `its_address_custom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `its_contract`
--
ALTER TABLE `its_contract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_customers_details`
--
ALTER TABLE `its_customers_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `its_customer_custom`
--
ALTER TABLE `its_customer_custom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `its_lease_type`
--
ALTER TABLE `its_lease_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_product`
--
ALTER TABLE `its_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `its_product_category`
--
ALTER TABLE `its_product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `its_product_custom`
--
ALTER TABLE `its_product_custom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `its_product_type`
--
ALTER TABLE `its_product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `its_quantity_type`
--
ALTER TABLE `its_quantity_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `its_rent_type`
--
ALTER TABLE `its_rent_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `its_sale_custom`
--
ALTER TABLE `its_sale_custom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `its_sale_product`
--
ALTER TABLE `its_sale_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `its_sub_category`
--
ALTER TABLE `its_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `its_users`
--
ALTER TABLE `its_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
