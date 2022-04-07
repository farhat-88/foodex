-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 03:00 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodex`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors_info`
--

CREATE TABLE `donors_info` (
  `d_id` int(5) UNSIGNED NOT NULL,
  `d_fname` varchar(100) NOT NULL,
  `d_lname` varchar(100) NOT NULL,
  `d_contact_num` varchar(50) NOT NULL,
  `d_address` varchar(250) NOT NULL,
  `d_email` varchar(250) DEFAULT NULL,
  `d_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donors_info`
--

INSERT INTO `donors_info` (`d_id`, `d_fname`, `d_lname`, `d_contact_num`, `d_address`, `d_email`, `d_password`) VALUES
(1, 'Donor', 'abc', '03453276686', 'test address', 'donor@gmail.com', '$2y$10$cI1bAjtNtmVX8hmFul5K8O9XLXvEoy6lC/8VW9OmS88pOaCMOX/Z6'),
(2, 'Donor', 'xyz', '03453276686', 'test address', 'donorxyz@gmail.com', '$2y$10$8MuaQMgjSpCJkQAqVdBPT.c3Sc4uFFSr6colEC2QoWa/V1PeiSsGW');

-- --------------------------------------------------------

--
-- Table structure for table `foods_rating`
--

CREATE TABLE `foods_rating` (
  `rating_id` int(5) UNSIGNED NOT NULL,
  `rating_description` text DEFAULT NULL,
  `rating_star` int(2) DEFAULT NULL,
  `s_id` int(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `item_id` int(5) UNSIGNED NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `servings` int(5) NOT NULL,
  `pickup_address` varchar(250) NOT NULL,
  `prepared_date` date NOT NULL,
  `prepared_time` time NOT NULL,
  `food_expiry_expected` date NOT NULL,
  `type_id` int(5) UNSIGNED NOT NULL,
  `food_status` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`item_id`, `item_name`, `servings`, `pickup_address`, `prepared_date`, `prepared_time`, `food_expiry_expected`, `type_id`, `food_status`) VALUES
(1, 'test meal 1 [updated]', 10, 'test address updated', '2020-12-29', '13:01:00', '2020-12-30', 3, 2),
(3, 'test meal 2', 2, 'test address', '2020-12-28', '14:51:00', '2020-12-29', 2, 0),
(4, 'test meal 3', 4, 'test address', '2020-12-29', '16:00:00', '2020-12-30', 1, 0),
(5, 'test meal 4', 4, 'test address', '2020-12-29', '18:08:00', '2020-12-29', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `food_types`
--

CREATE TABLE `food_types` (
  `type_id` int(5) UNSIGNED NOT NULL,
  `food_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_types`
--

INSERT INTO `food_types` (`type_id`, `food_type`) VALUES
(1, 'Breakfast'),
(2, 'Snacks'),
(3, 'Fruits'),
(4, 'Vegetables'),
(5, 'Beverages/Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `linkage_table`
--

CREATE TABLE `linkage_table` (
  `link_id` int(5) UNSIGNED NOT NULL,
  `s_id` int(5) UNSIGNED DEFAULT NULL,
  `d_id` int(5) UNSIGNED DEFAULT NULL,
  `rating_id` int(5) UNSIGNED DEFAULT NULL,
  `item_id` int(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `linkage_table`
--

INSERT INTO `linkage_table` (`link_id`, `s_id`, `d_id`, `rating_id`, `item_id`) VALUES
(1, 1, 1, NULL, 1),
(3, NULL, 1, NULL, 3),
(4, NULL, 1, NULL, 4),
(5, NULL, 1, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(36, '2020-12-16-182405', 'App\\Database\\Migrations\\AddSeekerDetailsTable', 'default', 'App', 1609096819, 1),
(37, '2020-12-19-111512', 'App\\Database\\Migrations\\AddDonorDetailsTable', 'default', 'App', 1609096819, 1),
(38, '2020-12-21-084514', 'App\\Database\\Migrations\\AddFoodTypes', 'default', 'App', 1609096820, 1),
(39, '2020-12-21-085238', 'App\\Database\\Migrations\\AddFoodItems', 'default', 'App', 1609096820, 1),
(40, '2020-12-24-201447', 'App\\Database\\Migrations\\AddFoodRatingsTable', 'default', 'App', 1609096820, 1),
(41, '2020-12-25-065016', 'App\\Database\\Migrations\\AddAllTableLinkage', 'default', 'App', 1609096821, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seekers_info`
--

CREATE TABLE `seekers_info` (
  `s_id` int(5) UNSIGNED NOT NULL,
  `s_fname` varchar(100) NOT NULL,
  `s_lname` varchar(100) NOT NULL,
  `s_contact_num` varchar(50) NOT NULL,
  `s_address` varchar(250) NOT NULL,
  `s_email` varchar(250) DEFAULT NULL,
  `s_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seekers_info`
--

INSERT INTO `seekers_info` (`s_id`, `s_fname`, `s_lname`, `s_contact_num`, `s_address`, `s_email`, `s_password`) VALUES
(1, 'Seeker1', 'test', '03453276686', 'test address', 'seeker@gmail.com', '$2y$10$OK.mVhYe3QM014XBg4VpDelcI4M1HZKi0zm8tMUCcBknnYfXF/TNS'),
(2, 'testuser', 'seeker', '03453276686', 'test address', 'testseeker@gmail.coom', '$2y$10$QMtK2ZFc777328au6cfOTut8IjtF1Ds/6MsKfC/uOYfvz.eRlnKZO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors_info`
--
ALTER TABLE `donors_info`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `foods_rating`
--
ALTER TABLE `foods_rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `foods_rating_s_id_foreign` (`s_id`);

--
-- Indexes for table `food_items`
--
ALTER TABLE `food_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `food_items_type_id_foreign` (`type_id`);

--
-- Indexes for table `food_types`
--
ALTER TABLE `food_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `linkage_table`
--
ALTER TABLE `linkage_table`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `linkage_table_s_id_foreign` (`s_id`),
  ADD KEY `linkage_table_d_id_foreign` (`d_id`),
  ADD KEY `linkage_table_item_id_foreign` (`item_id`),
  ADD KEY `linkage_table_rating_id_foreign` (`rating_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seekers_info`
--
ALTER TABLE `seekers_info`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_email` (`s_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors_info`
--
ALTER TABLE `donors_info`
  MODIFY `d_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foods_rating`
--
ALTER TABLE `foods_rating`
  MODIFY `rating_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_items`
--
ALTER TABLE `food_items`
  MODIFY `item_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food_types`
--
ALTER TABLE `food_types`
  MODIFY `type_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `linkage_table`
--
ALTER TABLE `linkage_table`
  MODIFY `link_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `seekers_info`
--
ALTER TABLE `seekers_info`
  MODIFY `s_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foods_rating`
--
ALTER TABLE `foods_rating`
  ADD CONSTRAINT `foods_rating_s_id_foreign` FOREIGN KEY (`s_id`) REFERENCES `seekers_info` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `food_items`
--
ALTER TABLE `food_items`
  ADD CONSTRAINT `food_items_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `food_types` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `linkage_table`
--
ALTER TABLE `linkage_table`
  ADD CONSTRAINT `linkage_table_d_id_foreign` FOREIGN KEY (`d_id`) REFERENCES `donors_info` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `linkage_table_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `food_items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `linkage_table_rating_id_foreign` FOREIGN KEY (`rating_id`) REFERENCES `foods_rating` (`rating_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `linkage_table_s_id_foreign` FOREIGN KEY (`s_id`) REFERENCES `seekers_info` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
