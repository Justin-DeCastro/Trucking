-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 14, 2024 at 03:20 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trucking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `full_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'On Process',
  `payment_status` text COLLATE utf8mb4_unicode_ci,
  `order_amount` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `receiver_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_date` date NOT NULL,
  `pickup_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dropoff_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_list` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `tracking_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `assigned_driver_id` bigint UNSIGNED DEFAULT NULL,
  `driver_id` bigint UNSIGNED DEFAULT NULL,
  `plate_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `other_location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `full_name`, `order_status`, `payment_status`, `order_amount`, `receiver_name`, `email`, `phone`, `pickup_date`, `pickup_address`, `dropoff_address`, `item_list`, `comments`, `tracking_number`, `created_at`, `updated_at`, `assigned_driver_id`, `driver_id`, `plate_number`, `location`, `other_location`) VALUES
(8, 'Moses Alcantara', 'Out For Delivery', 'Paid', '5000', 'Mangubat Gasoline Station', 'decastrojustin321@gmail.com', '09456754591', '2024-08-23', 'Santa Mesa, Manila', 'Calapan City Oriental Mindoro', 'List', 'Enter', 'GPC-82419142966BBF63CB95BF8.72461784', '2024-08-14 07:11:40', '2024-08-14 07:18:03', NULL, 18, NULL, 'Manila', NULL),
(9, 'Darlene Angel Fajarito', 'Out For Delivery', 'Not Yet Paid', '5000', 'Mangubat Gasoline Stations', 'admin@manpower.com', '09456754591', '2024-08-17', 'Santa Mesa, Manila', 'Calapan City Oriental Mindoro', 'qwerty', 'qwertty', 'GPC-123668766BBF7DEA7F663.49343686', '2024-08-14 07:18:38', '2024-08-14 22:07:05', NULL, 15, NULL, 'Laguna', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branch_managers`
--

CREATE TABLE `branch_managers` (
  `id` bigint UNSIGNED NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_managers`
--

INSERT INTO `branch_managers` (`id`, `branch`, `name`, `email`, `phone`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Makatio', 'Justin', 'justin@gmail.com', '09456754591', '2024-08-14', '2024-08-13 00:32:53', '2024-08-13 00:32:53'),
(2, 'Lagunas', 'Test Manager', 'test@manager.com', '09456754591', '2024-08-13', '2024-08-13 00:40:20', '2024-08-13 00:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plate_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `address`, `contact`, `email`, `license_number`, `plate_number`, `created_at`, `updated_at`) VALUES
(1, 'Justin De Castro', 'Makati Cityt', '09456754591', 'decastrojustin321@gmail.com', 'D05-17-3352', 'ABC-123', '2024-08-13 05:12:18', '2024-08-13 05:12:18'),
(2, 'Giolo', 'Calapan Mindoro', '09456754591', 'giolo@gmail.com', 'D07-15-43212', 'ABC-1234', '2024-08-13 05:35:06', '2024-08-13 05:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manage_branches`
--

CREATE TABLE `manage_branches` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_branches`
--

INSERT INTO `manage_branches` (`id`, `name`, `email`, `phone`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Makati Branch', 'makatibranch@gmail.com', '09456754591', 'Makati City', 'Inactive', '2024-08-12 23:53:21', '2024-08-12 23:53:21'),
(3, 'Calapan Branches', 'calapan@gmail.com', '09456754591', 'Calapan Mindoro', 'Inactive', '2024-08-12 23:54:14', '2024-08-13 00:02:20'),
(4, 'Laguna Branches', 'lagunabranch@gmail.com', '09456754591', 'Laguna', 'Inactive', '2024-08-13 00:08:46', '2024-08-13 00:09:31'),
(5, 'Infinitrade Corporation', 'adminm@manpower.com', '09456754591', 'Makati City', 'Active', '2024-08-13 01:19:30', '2024-08-13 01:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_12_164513_create_manage_branches_table', 2),
(6, '2024_08_12_172637_create_branch_mangers_table', 3),
(7, '2024_08_12_211425_create_bookings_table', 4),
(8, '2024_08_12_220139_create_drivers_table', 5),
(9, '2024_08_12_221931_add_assigned_driver_id_to_bookings_table', 6),
(10, '2024_08_12_224029_add_driver_id_to_bookings_table', 6),
(11, '2024_08_13_154127_add_driver_license_and_license_number_to_users_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` text COLLATE utf8mb4_unicode_ci,
  `plate_number` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `driver_license`, `license_number`, `contact_number`, `plate_number`, `address`) VALUES
(12, 'Driver 101', 'driver11@gmail.com', NULL, '$2y$12$560L4GsRu/ZceyxzQmMgtOpWeev95pS.W5oMFjbuMjrzC874RLnJi', NULL, '2024-08-14 01:18:45', '2024-08-14 01:18:45', 'courier', 'driver_licenses/1723573125_6185769061598739636.jpg', 'D05-17-335223', '09456754591', NULL, 'Calapan Mindoro'),
(13, 'Justin', 'admin@admin.com', NULL, '$2y$12$5DHxafkn/hu1bOrnU01CHOS.LrJE1UzQyBWaDiqAuf2vdj/jmRlLy', NULL, '2024-08-14 03:52:24', '2024-08-14 03:52:24', 'admin', NULL, NULL, NULL, NULL, NULL),
(14, 'Accounting1', 'accounting1@gmail.com', NULL, '$2y$12$HokxvR3ctkroJcFTAl2M6uVAKB7ST1zoFGc2AhFVNEYGAwxn6spCC', NULL, '2024-08-14 03:53:03', '2024-08-14 03:53:03', 'accounting', NULL, NULL, NULL, NULL, NULL),
(15, 'Driver 102', 'driver102@gmail.com', NULL, '$2y$12$qeRgGzhUUX4kxjd3pOD1N.vTPgS8X24OrYodzaRXl415oQnZ28zGi', NULL, '2024-08-14 06:15:58', '2024-08-14 06:15:58', 'courier', 'driver_licenses/1723590958_6185769061598739636.jpg', 'D05-17-33522323', '09456754591', NULL, 'Calapan Mindoro'),
(16, 'Infinitrade Corporation', 'infinitech.justin2024@gmail.com', NULL, '$2y$12$p5WTeNrUVdbtJxovgQkchey13r3jU2lC4xI8whqZOkoGVSwsGvgFi', NULL, '2024-08-14 07:10:06', '2024-08-14 07:10:06', 'courier', 'driver_licenses/1723594205_6185769061598739636.jpg', 'D05-17-335223232', '09456754591', NULL, 'Calapan Mindoro'),
(17, 'admin2admin', 'admin2@admin.com', NULL, '$2y$12$eL/EDMmWoS8CwpLmHivYterHdxpEmaSfKKcnfH/c.5bZGdX8w2.A.', NULL, '2024-08-14 07:10:50', '2024-08-14 07:10:50', 'admin', NULL, NULL, NULL, NULL, NULL),
(18, 'Driver 110', 'driver110@gmail.com', NULL, '$2y$12$Ik4mzsZbwlKbcyr59.IP4.4QwxnO93QiMn7RszascysMg0yBREQDm', NULL, '2024-08-14 07:13:52', '2024-08-14 07:13:52', 'courier', 'driver_licenses/1723594432_6185769061598739636.jpg', 'D05-17-335223', '09456754591', NULL, 'Calapan Mindoro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_driver_id_foreign` (`driver_id`),
  ADD KEY `bookings_assigned_driver_id_foreign` (`assigned_driver_id`);

--
-- Indexes for table `branch_managers`
--
ALTER TABLE `branch_managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branch_managers_email_unique` (`email`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `drivers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `manage_branches`
--
ALTER TABLE `manage_branches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `manage_branches_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `branch_managers`
--
ALTER TABLE `branch_managers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_branches`
--
ALTER TABLE `manage_branches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_assigned_driver_id_foreign` FOREIGN KEY (`assigned_driver_id`) REFERENCES `bookings` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `bookings_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
