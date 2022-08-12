-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 09:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `00_b6_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `invoiceDetails_id` int(20) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `Catagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Test_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total_Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`invoiceDetails_id`, `invoice_id`, `Catagory`, `Test_Name`, `Price`, `Discount`, `Total_Price`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Select', 'Select', '15', '3.75', '11.25', '2022-07-27 00:07:44', '2022-07-27 00:07:44'),
(2, NULL, 'C', 'C', '15', '3.75', '11.25', '2022-07-27 01:00:44', '2022-07-27 01:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_06_27_085706_create_sessions_table', 1),
(7, '2022_06_27_094200_create_products_table', 1),
(8, '2022_07_25_102751_create__invoice', 2),
(9, '2022_07_26_110359_create_invoice_details', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('APXYyqoL7BFGFJp1JdrpoVpKwNMl8idvYpi3KgXh', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieFd6NHN0aGlEVFJtY0F5cjduTUJOeFNKOEZySE1lZ0RpQTVkbzJEeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iaWxscyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkVTZxejZsdk9DZmF5ZVpSbDJiUDR4ZWFyUWVueGJ2N0xVLkNLZGs1N0gzMXJHbE1DSG9ERUciO30=', 1658905244);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'Tanvee', 'tanvee@gmail.com', NULL, '$2y$10$gMKThUMScDQfS056RS0lOO7JdbRibS6dp7UZcfR7figt7pY3EDRjm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-16 01:52:28', '2022-07-16 01:52:28'),
(3, 'rownak1', 'rownak12@gmail.com', NULL, '$2y$10$U6qz6lvOCfayeZRl2bP4xearQenxbv7LU.CKdk57H31rGlMCHoDEG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-17 00:12:51', '2022-07-17 22:39:01'),
(5, 'user7', 'admin345@gmail.com', NULL, '$2y$10$gGj3G5yX6dA5vnegc78rEePn9Ljl8ypIUIdXBrtTZPydTqTodWyly', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 00:49:01', '2022-07-27 00:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `_invoice`
--

CREATE TABLE `_invoice` (
  `id` int(20) NOT NULL,
  `Patient` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Referred_by` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Bill_date` date NOT NULL,
  `Delivery_date` date NOT NULL,
  `Delivery_time` time NOT NULL,
  `Remarks` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Sub_total` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Tax` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Discount` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Net_Payable` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Received_Ammount` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Pay_Via` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Remarks2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_invoice`
--

INSERT INTO `_invoice` (`id`, `Patient`, `Referred_by`, `Bill_date`, `Delivery_date`, `Delivery_time`, `Remarks`, `Sub_total`, `Tax`, `Discount`, `Net_Payable`, `Received_Ammount`, `Pay_Via`, `Remarks2`, `created_at`, `updated_at`) VALUES
(1, 'B', 'B', '2022-06-15', '2022-06-23', '03:15:00', 'fefferferfre', '15.00', '0.75', '3.75', '12.00', '12.00', 'C', 'frgergr', '2022-07-26 03:48:37', '2022-07-26 03:48:37'),
(2, 'C', 'C', '2022-06-14', '2022-06-14', '03:15:00', 'ferftgregergergergergerge', '1915.00', '861.75', '585.75', '2191.00', '2191.00', 'C', 'rgfregerge', '2022-07-26 03:51:21', '2022-07-26 03:51:21'),
(3, 'D', 'A', '2022-06-21', '2022-06-03', '03:15:00', 'remaks1', '1000.00', '350', '463.00', '887.00', '887.00', 'D', 'remarks2', '2022-07-26 03:53:52', '2022-07-26 03:53:52'),
(4, 'B', 'C', '2022-03-28', '2022-12-28', '03:15:00', 'remarks2', '3100.00', '3038', '2152.00', '3986.00', '3986.00', 'C', 'remarks3', '2022-07-26 03:56:24', '2022-07-26 03:56:24'),
(5, 'C', 'C', '2022-09-21', '2022-06-22', '04:15:00', 'remarks4', '1943.00', '1748.7', '476.05', '3215.65', '3215.65', 'C', 'remarks5', '2022-07-26 03:59:30', '2022-07-26 03:59:30'),
(6, 'A', 'A', '2022-06-14', '2022-06-07', '03:15:00', 'remarks6', '1379.00', '68.95', '609.40', '838.55', '838.55', 'A', 'remarks7', '2022-07-26 05:37:00', '2022-07-26 05:37:00'),
(7, 'A', 'A', '2022-06-14', '2022-06-07', '03:15:00', 'remarks6', '1379.00', '68.95', '609.40', '838.55', '838.55', 'A', 'remarks7', '2022-07-26 05:41:21', '2022-07-26 05:41:21'),
(8, 'B', 'C', '2022-06-21', '2022-06-14', '02:15:00', 'remarks8', '360.00', '201.6', '174.95', '386.65', '386.65', 'C', 'remarks9', '2022-07-26 22:30:38', '2022-07-26 22:30:38'),
(9, 'B', 'C', '2022-06-15', '2022-06-15', '02:15:00', 'remarks11', '15.00', '6.75', '3.75', '18.00', '18.00', 'C', 'remarks12', '2022-07-27 00:02:35', '2022-07-27 00:02:35'),
(10, 'B', 'C', '2022-06-15', '2022-06-15', '02:15:00', 'remarks11', '15.00', '6.75', '3.75', '18.00', '18.00', 'C', 'remarks12', '2022-07-27 00:04:13', '2022-07-27 00:04:13'),
(11, 'B', 'C', '2022-06-15', '2022-06-15', '02:15:00', 'remarks11', '15.00', '6.75', '3.75', '18.00', '18.00', 'C', 'remarks12', '2022-07-27 00:07:44', '2022-07-27 00:07:44'),
(12, 'C', 'C', '2022-06-19', '2022-06-19', '11:15:00', 'remarks14', '15.00', '6.75', '3.75', '18.00', '18.00', 'B', 'fgegeg', '2022-07-27 01:00:44', '2022-07-27 01:00:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`invoiceDetails_id`),
  ADD KEY `invoice_details_invoice_id_foreign` (`invoice_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `_invoice`
--
ALTER TABLE `_invoice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `invoiceDetails_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `_invoice`
--
ALTER TABLE `_invoice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD CONSTRAINT `invoice_details_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `_invoice` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
