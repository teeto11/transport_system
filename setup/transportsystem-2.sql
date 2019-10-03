-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 12, 2018 at 05:53 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transportsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_seat` int(11) NOT NULL,
  `depature_time_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `firstname`, `lastname`, `email`, `number_of_seat`, `depature_time_id`, `created_at`, `updated_at`) VALUES
(5, 'efcewsc', 'ghj', 'tomtom@yahoo.com', 2, 1, '2018-01-26 06:35:57', '2018-01-26 06:35:57'),
(6, 't4rkfr', 'ttfvrv', 'tomi.@yahoo.com', 2, 1, '2018-01-26 06:36:17', '2018-01-26 06:36:17'),
(7, 'zvm, mrgv', 'fefcds', 'teeto@yahoo.com', 2, 1, '2018-01-26 06:49:29', '2018-01-26 06:49:29'),
(8, 'rjndvjkfv', 'ofgverfdgv', 'teeto@yahoo.com', 4, 2, '2018-02-02 14:51:01', '2018-02-02 14:51:01'),
(9, 'wfewfcrwef', 'ewfcewcdec', 'tomi@yahoo.com', 3, 2, '2018-02-02 14:51:22', '2018-02-02 14:51:22'),
(10, 'ewffwrefc', 'fcewfc', 'tteto@yahoo.com', 2, 1, '2018-02-02 14:51:47', '2018-02-02 14:51:47'),
(11, 'jj', 'nj', 'tteto@yahoo.com', 9, 1, '2018-02-02 14:52:25', '2018-02-02 14:52:25'),
(12, 'bvvghv', 'hghgk', 'tomi@yahoo.com', 8, 1, '2018-02-02 14:58:21', '2018-02-02 14:58:21'),
(13, 'bb', 'uuijk', 'tteto@yahoo.com', 8, 1, '2018-02-02 14:58:44', '2018-02-02 14:58:44'),
(14, 'ewffwrefc', 'sax', 'tomtom@yahoo.com', 4, 2, '2018-02-02 15:00:06', '2018-02-02 15:00:06'),
(15, 'dwscx', 'wecs', 'tomtom@yahoo.com', 3, 2, '2018-02-02 15:00:44', '2018-02-02 15:00:44'),
(16, 'dwscx', 'wecs', 'tomtom@yahoo.com', 3, 2, '2018-02-02 15:05:35', '2018-02-02 15:05:35'),
(17, 'efsc', 'dccasxds', 'teeto@yahoo.com', 3, 2, '2018-02-02 15:05:53', '2018-02-02 15:05:53'),
(18, 'gvh', 'ihjkhhjh', 'tteto@yahoo.com', 8, 2, '2018-02-02 15:08:18', '2018-02-02 15:08:18'),
(19, 'efcefc', 'dcsx', 'tomtom@yahoo.com', 3, 2, '2018-02-02 15:11:24', '2018-02-02 15:11:24'),
(20, 'wdxz', 'az', 'tomtom@yahoo.com', 2, 2, '2018-02-02 15:11:43', '2018-02-02 15:11:43'),
(21, 'wdasxz', 'scx', 'tomi@yahoo.com', 3, 2, '2018-02-02 15:17:13', '2018-02-02 15:17:13'),
(22, 'femi', 'bamidele', 'femibams@gmail.com', 3, 4, '2018-02-12 15:02:19', '2018-02-12 15:02:19'),
(23, 'femi', 'bams', 'femibams@gmail.com', 3, 4, '2018-02-12 15:04:03', '2018-02-12 15:04:03'),
(24, 'femi', 'bams', 'femibams@gmail.com', 3, 4, '2018-02-12 15:06:00', '2018-02-12 15:06:00'),
(25, 'femi', 'bams', 'femibams@gmail.com', 3, 4, '2018-02-12 15:07:47', '2018-02-12 15:07:47'),
(26, 'femi', 'feminana', 'femibams@gmail.com', 3, 4, '2018-02-12 15:09:57', '2018-02-12 15:09:57'),
(27, 'femi', 'feminana', 'femibams@gmail.com', 3, 4, '2018-02-12 15:10:30', '2018-02-12 15:10:30');

-- --------------------------------------------------------

--
-- Table structure for table `depature_times`
--

CREATE TABLE `depature_times` (
  `id` int(10) UNSIGNED NOT NULL,
  `trip_id` int(10) UNSIGNED NOT NULL,
  `time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `depature_times`
--

INSERT INTO `depature_times` (`id`, `trip_id`, `time`, `created_at`, `updated_at`) VALUES
(1, 3, '2018-01-14 12:00:00', '2018-01-13 12:41:14', '2018-01-13 12:41:14'),
(2, 3, '2018-01-14 13:00:00', '2018-01-13 12:41:14', '2018-01-13 12:41:14'),
(3, 5, '2018-01-16 17:03:00', '2018-01-23 07:53:27', '2018-01-23 07:53:27'),
(4, 6, '3112-04-02 01:11:00', '2018-01-26 08:50:22', '2018-01-26 08:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_01_03_135404_create_terminals_table', 1),
(4, '2017_10_28_090622_create_trips_table', 1),
(5, '2017_11_28_091912_create_depature_times_table', 1),
(6, '2017_12_28_090859_create_bookings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Abia State', NULL, NULL),
(2, 'Adamawa State', NULL, NULL),
(3, 'Akwa Ibom State', NULL, NULL),
(4, 'Anambra State', NULL, NULL),
(5, 'Bauchi State', NULL, NULL),
(6, 'Bayelsa State', NULL, NULL),
(7, 'Benue State', NULL, NULL),
(8, 'Borno State', NULL, NULL),
(9, 'Cross River State', NULL, NULL),
(10, 'Delta State', NULL, NULL),
(11, 'Ebonyi State', NULL, NULL),
(12, 'Edo State', NULL, NULL),
(13, 'Ekiti State', NULL, NULL),
(14, 'Enugu State', NULL, NULL),
(15, 'FCT', NULL, NULL),
(16, 'Gombe State', NULL, NULL),
(17, 'Imo State', NULL, NULL),
(18, 'Jigawa State', NULL, NULL),
(19, 'Kaduna State', NULL, NULL),
(20, 'Kano State', NULL, NULL),
(21, 'Katsina State', NULL, NULL),
(22, 'Kebbi State', NULL, NULL),
(23, 'Kogi State', NULL, NULL),
(24, 'Kwara State', NULL, NULL),
(25, 'Lagos State', NULL, NULL),
(26, 'Nasarawa State', NULL, NULL),
(27, 'Niger State', NULL, NULL),
(28, 'Ogun State', NULL, NULL),
(29, 'Ondo State', NULL, NULL),
(30, 'Osun State', NULL, NULL),
(31, 'Oyo State', NULL, NULL),
(32, 'Plateau State', NULL, NULL),
(33, 'Rivers State', NULL, NULL),
(34, 'Sokoto State', NULL, NULL),
(35, 'Taraba State', NULL, NULL),
(36, 'Yobe State', NULL, NULL),
(37, 'Zamfara State', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `terminals`
--

CREATE TABLE `terminals` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terminals`
--

INSERT INTO `terminals` (`id`, `state_name`, `area`, `created_at`, `updated_at`) VALUES
(1, 'Lagos State', 'Ajah', '2018-01-10 13:23:26', '2018-01-10 13:23:26'),
(2, 'Ogun State', 'Sagamu', '2018-01-10 13:45:36', '2018-01-10 13:45:36'),
(3, '', 'lekki', '2018-01-22 19:18:09', '2018-01-22 19:18:09'),
(4, 'Anambra State', 'lekki', '2018-01-22 19:19:36', '2018-01-22 19:19:36'),
(5, 'Ebonyi State', 'lekki', '2018-01-22 19:20:31', '2018-01-22 19:20:31'),
(6, 'Lagos State', 'lekki', '2018-01-22 19:21:03', '2018-01-22 19:21:03'),
(7, 'Lagos State', 'lekki', '2018-01-22 19:21:22', '2018-01-22 19:21:22'),
(8, 'Abia State', 'lekki', '2018-01-26 08:44:00', '2018-01-26 08:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(10) UNSIGNED NOT NULL,
  `from` int(10) UNSIGNED NOT NULL,
  `to` int(10) UNSIGNED NOT NULL,
  `estimated_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_seats` int(11) NOT NULL,
  `available_seat` int(11) DEFAULT NULL,
  `amount` double NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `from`, `to`, `estimated_time`, `number_of_seats`, `available_seat`, `amount`, `details`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '120', 20, 20, 1800, '', NULL, NULL),
(3, 2, 1, '120', 12, 12, 1200, 'furo be dansagjkvrgvnremvd ', '2018-01-13 12:41:14', '2018-02-02 15:17:13'),
(4, 6, 2, '50', 120, 120, 20000, 'loool', '2018-01-23 07:40:42', '2018-01-23 07:40:42'),
(5, 1, 2, '50', 20, 20, 20000, 'loool', '2018-01-23 07:53:27', '2018-01-23 07:53:27'),
(6, 1, 5, '200', 50, 0, 20000, 'lool this are details', '2018-01-26 08:50:22', '2018-02-12 15:10:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kamal', 'yinka', 'kamal@gmail.com', '$2y$10$Jw5TB1ddftmzYTWGc.KEb.7aVyCiFEDTtlVY3VcUoLHjTbe1FW6ti', 'zlcYaXZNn7n0LTCsWuztBChcfuTIeo0RQTMWu3emqpVlqwO0CcIG3PRhbpMJ', '2018-01-10 13:01:01', '2018-01-10 13:01:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_depature_time_id_foreign` (`depature_time_id`);

--
-- Indexes for table `depature_times`
--
ALTER TABLE `depature_times`
  ADD PRIMARY KEY (`id`),
  ADD KEY `depature_times_trip_id_foreign` (`trip_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terminals`
--
ALTER TABLE `terminals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `terminals_state_id_foreign` (`state_name`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trips_from_foreign` (`from`),
  ADD KEY `trips_to_foreign` (`to`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `depature_times`
--
ALTER TABLE `depature_times`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `terminals`
--
ALTER TABLE `terminals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_depature_time_id_foreign` FOREIGN KEY (`depature_time_id`) REFERENCES `depature_times` (`id`);

--
-- Constraints for table `depature_times`
--
ALTER TABLE `depature_times`
  ADD CONSTRAINT `depature_times_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`);

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_from_foreign` FOREIGN KEY (`from`) REFERENCES `terminals` (`id`),
  ADD CONSTRAINT `trips_to_foreign` FOREIGN KEY (`to`) REFERENCES `terminals` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
