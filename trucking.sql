-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 19, 2024 at 12:07 AM
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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Trading Account', '2024-08-14 07:41:57', '2024-08-14 07:41:57'),
(2, 'FarmerOld', '2024-08-14 08:04:44', '2024-08-14 08:04:44'),
(3, 'Infinitrade Corporation', '2024-08-15 21:51:22', '2024-08-15 21:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `sender_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `transport_mode` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `shipping_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `delivery_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `journey_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `consignee_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `consignee_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `consignee_email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `consignee_mobile` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `consignee_city` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `consignee_province` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `consignee_barangay` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `consignee_building_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `merchant_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `merchant_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `merchant_email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `merchant_mobile` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `merchant_city` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `merchant_province` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tracking_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `assigned_driver_id` bigint UNSIGNED DEFAULT NULL,
  `driver_id` bigint UNSIGNED DEFAULT NULL,
  `vehicle_id` bigint UNSIGNED DEFAULT NULL,
  `qr_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `plate_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `sender_name`, `transport_mode`, `shipping_type`, `delivery_type`, `journey_type`, `consignee_name`, `consignee_address`, `consignee_email`, `consignee_mobile`, `consignee_city`, `consignee_province`, `consignee_barangay`, `consignee_building_type`, `merchant_name`, `merchant_address`, `merchant_email`, `merchant_mobile`, `merchant_city`, `merchant_province`, `tracking_number`, `created_at`, `updated_at`, `assigned_driver_id`, `driver_id`, `vehicle_id`, `qr_code`, `plate_number`, `driver_name`) VALUES
(64, 'qwertyuiop', 'land', 'sea', 'lregular', 'jeep', 'Killer Machine', 'munoz', 'machine@gmail.com', '09456754591', 'qc', 'qc', 'munoz', 'unit', 'alaska', 'alaska', 'alaska@gmail.com', '09456754591', 'asd', 'asd', 'GDR-196933393866C01FBE6CFBA0.04465704', '2024-08-16 19:57:50', '2024-08-16 19:57:50', NULL, NULL, NULL, NULL, 'D05-ABC', 'Justinn Mangubat'),
(66, 'qwertyuiopAMA', 'AMA', 'AMA', 'AMA', 'AMA', 'AMA', 'AMA', 'AMA@email.com', '09456754591', 'AMA', 'AMA', 'AMA', 'AMA', 'AMA', 'AMA', 'AMA@gmail.com', '09456754591', 'AMA', 'AMA', 'GPC-122542473166C032EED33850.32152340', '2024-08-16 21:19:42', '2024-08-16 21:19:42', NULL, NULL, NULL, NULL, 'D05322', 'AMA'),
(67, 'Acme Corp', 'Air Freight', 'Standard', 'Door-to-Door', 'International', 'Jane Doe', '123 Maple Street, Apt 4B', 'jane.doe@example.com', '09456754591', 'New York', 'New York', 'Manila', 'Apartment', 'Global Goods Inc.', '456 Elm Street, Suite 300', 'contact@globalgoods.com', '09456754591', 'Los Angeles', 'California', 'GDR-187814407066C04E725003C0.26089920', '2024-08-16 23:17:06', '2024-08-16 23:17:06', NULL, NULL, NULL, NULL, 'D05-ABCDe', '16'),
(68, 'Acme Corp', 'Air Freight', 'Standard', 'Door-to-Door', 'International', 'Jane Doe', '123 Maple Street, Apt 4B', 'jane.doe@example.com', '09456754591', 'New York', 'New York', 'Manila', 'Apartment', 'Global Goods Inc.', '456 Elm Street, Suite 300', 'contact@globalgoods.com', '09456754591', 'Los Angeles', 'California', 'GDR-160793916566C0573A023BA1.84789084', '2024-08-16 23:54:34', '2024-08-16 23:54:34', NULL, NULL, NULL, NULL, 'D05-ABCDe', '18'),
(69, 'Acme Corp', 'Air Freight', 'Standard', 'Door-to-Door', 'International', 'Jane Doe', '123 Maple Street, Apt 4B', 'jane.doe@example.com', '09456754591', 'New York', 'New York', 'Manila', 'Apartment', 'Global Goods Inc.', '456 Elm Street, Suite 300', 'contact@globalgoods.com', '09456754591', 'Los Angeles', 'California', 'GDR-187335714766C05920A6E9C4.86376958', '2024-08-17 00:02:40', '2024-08-17 00:02:40', NULL, NULL, NULL, NULL, 'D05-ABCDe', '16'),
(70, 'weq', 'qwe', 'qwe', 'Door-to-Door', 'International', 'Jane Doe', '123 Maple Street, Apt 4B', 'jane.doe@example.com', '09456754591', 'New York', 'New York', 'Manila', 'Apartment', 'Global Goods Inc.', '456 Elm Street, Suite 300', 'contact@globalgoods.com', '09456754591', 'Los Angeles', 'California', 'GDR-76045114666C05959162143.81492874', '2024-08-17 00:03:37', '2024-08-17 00:03:37', NULL, NULL, NULL, NULL, 'D05322asd', '16'),
(71, 'Acme Corporations', 'Air Freight', 'Local', 'Door-to-Door', 'International', 'Jane Does', 'Calapan City, Oriental Mindoro', 'jane.doe@example.com', '09456754591', 'New York', 'New York', 'Manila', 'Apartment', 'Global Goods Inc.', 'Davao City', 'contact@globalgoods.com', '09456754591', 'Los Angeles', 'California', 'GDR-58765123566C05AFD424C52.81490047', '2024-08-17 00:10:37', '2024-08-17 00:10:37', NULL, NULL, NULL, NULL, 'ABC132', '16');

-- --------------------------------------------------------

--
-- Table structure for table `branch_managers`
--

CREATE TABLE `branch_managers` (
  `id` bigint UNSIGNED NOT NULL,
  `branch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Calapan Branches', 'admin@manpower.coms', 'Trucking', 'Hi', '2024-08-16 23:53:38', '2024-08-16 23:53:38'),
(2, 'ABIC Manpower Service Corp', 'adminm@manpower.com', 'Trucking', 'hi', '2024-08-16 23:53:49', '2024-08-16 23:53:49'),
(3, 'Justin De Castro', 'admin@manpower.com', 'Trucking', 'Hi', '2024-08-16 23:58:40', '2024-08-16 23:58:40'),
(4, 'Justin De Castro', 'admin@manpower.coms', 'Trucking', 'sad', '2024-08-16 23:59:02', '2024-08-16 23:59:02'),
(5, 'Justin De Castro', 'admin@manpower.coms', 'Trucking', 'hi', '2024-08-16 23:59:26', '2024-08-16 23:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `courier_sends`
--

CREATE TABLE `courier_sends` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `particulars` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit_amount` decimal(10,2) NOT NULL,
  `notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `withdraw_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `date`, `particulars`, `deposit_amount`, `notes`, `withdraw_id`, `created_at`, `updated_at`) VALUES
(1, '2024-08-16', 'radmin.themicly.com/presale/proposal', 500000.00, 'Hello', NULL, '2024-08-15 09:17:47', '2024-08-15 09:17:47'),
(2, '2024-08-17', 'qwer', 250000.00, 'Hello', NULL, '2024-08-15 09:31:54', '2024-08-15 09:31:54'),
(3, '2024-08-15', 'add bal', 500000.00, 'nhyiby', NULL, '2024-08-15 10:07:35', '2024-08-15 10:07:35'),
(4, '2024-08-18', 'nhubhouhyo', 50000.00, 'Hello', NULL, '2024-08-15 11:09:48', '2024-08-15 11:09:48'),
(5, '2024-08-20', 'qwer', 120000.00, 'Hello', NULL, '2024-08-15 11:47:16', '2024-08-15 11:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `plate_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint UNSIGNED NOT NULL,
  `account_id` bigint UNSIGNED DEFAULT NULL,
  `date` date NOT NULL,
  `particulars` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expense_amount` decimal(15,2) NOT NULL,
  `notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `account_id`, `date`, `particulars`, `expense_amount`, `notes`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-08-24', 'Banana', 20000.00, 'Banana Hinog', '2024-08-14 08:15:33', '2024-08-14 08:15:33'),
(2, NULL, '2024-08-17', 'radmin.themicly.com/presale/proposal', 25.00, 'Hellos', '2024-08-16 00:58:51', '2024-08-16 00:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `borrower` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial_amount` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `date`, `borrower`, `initial_amount`, `created_at`, `updated_at`) VALUES
(1, '2024-08-15', 'Justrin', 500000.00, '2024-08-15 10:36:16', '2024-08-15 10:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `manage_branches`
--

CREATE TABLE `manage_branches` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
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
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
(11, '2024_08_13_154127_add_driver_license_and_license_number_to_users_table', 7),
(12, '2024_08_14_150849_create_courier_sends_table', 8),
(13, '2024_08_14_193653_create_vehicles_table', 8),
(14, '2024_08_14_204520_add_vehicle_id_to_bookings_table', 9),
(15, '2024_08_15_002426_create_expenses_table', 10),
(16, '2024_08_15_004250_create_subcontractors_table', 11),
(17, '2024_08_15_005705_create_proof_payments_table', 12),
(18, '2024_08_15_011949_create_deposits_table', 12),
(19, '2024_08_15_015914_create_withdraws_table', 13),
(20, '2024_08_15_020936_add_withdraw_id_to_deposits_table', 14),
(21, '2024_08_15_021613_create_deposits_table', 15),
(22, '2024_08_15_031842_create_loans_table', 16),
(23, '2024_08_14_152526_create_accounts_table', 17),
(24, '2024_08_14_152658_create_transactions_table', 17),
(25, '2024_08_14_161340_create_expenses_table', 18),
(26, '2024_08_15_170248_create_starting_balances_table', 19),
(27, '2024_08_16_164721_create_contacts_table', 20),
(28, '2024_08_16_212803_create_rubixes_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proof_payments`
--

CREATE TABLE `proof_payments` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rubixes`
--

CREATE TABLE `rubixes` (
  `id` bigint UNSIGNED NOT NULL,
  `sender_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport_mode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `journey_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_barangay` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_building_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant_mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant_city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant_province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tracking_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rubixes`
--

INSERT INTO `rubixes` (`id`, `sender_name`, `transport_mode`, `shipping_type`, `delivery_type`, `journey_type`, `consignee_name`, `consignee_address`, `consignee_email`, `consignee_mobile`, `consignee_city`, `consignee_province`, `consignee_barangay`, `consignee_building_type`, `merchant_name`, `merchant_address`, `merchant_email`, `merchant_mobile`, `merchant_city`, `merchant_province`, `created_at`, `updated_at`, `tracking_number`) VALUES
(1, 'Justin Mangubat De Castro', 'Land', 'Land', 'Regular', 'Regular', 'Mangubat Gasoline Station', 'Pola Oriental Mindoro', 'admin@admin.com', '09456754591', 'makati', 'Oriental Mindoro', 'Tagbakin', 'Industrial', 'Choox', 'pola oriental mindoro', 'pola@email.com', '09456754591', 'makati', 'oriental mindoro', '2024-08-17 04:34:57', '2024-08-17 04:34:57', NULL),
(2, 'Justin Mangubat De Castro', 'Land', 'Land', 'Regular', 'Regular', 'Mangubat Gasoline Station', 'Pola Oriental Mindoro', 'admin@admin.com', '09456754591', 'makati', 'Oriental Mindoro', 'Tagbakin', 'Industrial', 'Choox', 'pola oriental mindoro', 'pola@email.com', '09456754591', 'makati', 'oriental mindoro', '2024-08-17 04:35:36', '2024-08-17 04:35:36', NULL),
(3, 'Justin Mangubat De Castro', 'Land', 'Land', 'Regular', 'Regular', 'Mangubat Gasoline Station', 'Pola Oriental Mindoro', 'admin@admin.com', '09456754591', 'makati', 'Oriental Mindoro', 'Tagbakin', 'Industrial', 'Choox', 'pola oriental mindoro', 'pola@email.com', '09456754591', 'makati', 'oriental mindoro', '2024-08-17 06:16:12', '2024-08-17 06:16:12', NULL),
(4, 'Justin Mangubat De Castro', 'Land', 'Land', 'Regular', 'Regular', 'Mangubat Gasoline Station', 'Pola Oriental Mindoro', 'admin@admin.com', '09456754591', 'makati', 'Oriental Mindoro', 'Tagbakin', 'Industrial', 'Choox', 'pola oriental mindoro', 'pola@email.com', '09456754591', 'makati', 'oriental mindoro', '2024-08-17 06:17:30', '2024-08-17 06:17:30', NULL),
(5, 'Justin Mangubat De Castro', 'Land', 'Land', 'Regular', 'Regular', 'Mangubat Gasoline Station', 'Pola Oriental Mindoro', 'admin@admin.com', '09456754591', 'makati', 'Oriental Mindoro', 'Tagbakin', 'Industrial', 'Choox', 'pola oriental mindoro', 'pola@email.com', '09456754591', 'makati', 'oriental mindoro', '2024-08-17 06:18:09', '2024-08-17 06:18:09', 'GPC-34220415766BFDE314B0213.90994180'),
(6, 'Justin Mangubat De Castro', 'Land', 'Land', 'Regular', 'Regular', 'Mangubat Gasoline Station', 'Pola Oriental Mindoro', 'admin@admin.com', '09456754591', 'makati', 'Oriental Mindoro', 'Tagbakin', 'Industrial', 'Choox', 'pola oriental mindoro', 'pola@email.com', '09456754591', 'makati', 'oriental mindoro', '2024-08-17 06:31:43', '2024-08-17 06:31:43', 'GPC-156232497766BFE15F3AFE74.96969639');

-- --------------------------------------------------------

--
-- Table structure for table `starting_balances`
--

CREATE TABLE `starting_balances` (
  `id` bigint UNSIGNED NOT NULL,
  `account_id` bigint UNSIGNED NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `starting_balances`
--

INSERT INTO `starting_balances` (`id`, `account_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 2500000.00, '2024-08-16 00:04:31', '2024-08-16 00:04:31'),
(2, 2, 200.00, '2024-08-16 00:24:34', '2024-08-16 00:24:34'),
(3, 1, 500000.00, '2024-08-16 00:51:53', '2024-08-16 00:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `subcontractors`
--

CREATE TABLE `subcontractors` (
  `id` bigint UNSIGNED NOT NULL,
  `company_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcontractor_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_upload` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcontractors`
--

INSERT INTO `subcontractors` (`id`, `company_name`, `subcontractor_id`, `contact_first_name`, `contact_last_name`, `email_address`, `phone_number`, `file_upload`, `created_at`, `updated_at`) VALUES
(1, 'InfiniTrade', '12345', 'JKustin', 'De Castro', 'decastrojustin321@gmail.com', '09456754591', 'uploads/1723682782_6172461341655285059.jpg', '2024-08-15 07:46:22', '2024-08-15 07:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `account_id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `particulars` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit_amount` decimal(10,2) DEFAULT '0.00',
  `withdraw_amount` decimal(10,2) DEFAULT '0.00',
  `expense_amount` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `proof_of_payment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `account_id`, `date`, `particulars`, `deposit_amount`, `withdraw_amount`, `expense_amount`, `proof_of_payment`, `notes`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-08-23', 'Mango', 50000.00, 0.00, NULL, NULL, 'Mango ripe', '2024-08-14 07:44:19', '2024-08-14 07:44:19'),
(2, 1, '2024-08-17', 'Mangoes', 0.00, 250.00, NULL, NULL, 'Mango ripe', '2024-08-14 07:44:49', '2024-08-14 07:44:49'),
(3, 1, '2024-08-25', 'Bananas', 0.00, 0.00, '43000', NULL, 'BananaPajama', '2024-08-14 08:21:18', '2024-08-14 08:21:18'),
(4, 1, '2024-08-29', 'Guava', 250000.00, 0.00, NULL, NULL, 'Guava Ripe', '2024-08-14 08:30:00', '2024-08-14 08:30:00'),
(5, 1, '2024-08-31', 'add bal', 0.00, 0.00, NULL, 'proofs/1723736016_Screenshot (15).png', 'Hello Gcash', '2024-08-15 22:33:36', '2024-08-15 22:33:36'),
(9, 2, '2024-08-24', 'qwer', 50000.00, 0.00, NULL, NULL, 'qwer', '2024-08-16 00:25:11', '2024-08-16 00:25:11'),
(10, 2, '2024-08-25', 'qwer', 0.00, 25000.00, NULL, NULL, 'Hello', '2024-08-16 00:25:35', '2024-08-16 00:25:35'),
(11, 2, '2024-08-26', 'qwer', 0.00, 0.00, '20000', NULL, 'Hello', '2024-08-16 00:26:53', '2024-08-16 00:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_license` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `plate_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
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

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint UNSIGNED NOT NULL,
  `truck_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `truck_capacity` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `truck_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `truck_name`, `truck_capacity`, `truck_status`, `quantity`, `created_at`, `updated_at`) VALUES
(4, '10 Wheeler Aluminum wing van', '15,000 to 20,000 kilograms (15 to 20 metric tons).', 'Available', '19', '2024-08-15 03:13:39', '2024-08-17 03:05:15'),
(7, '6 Wheeler closed vans', '5,000 to 8,000 kilograms (5 to 8 metric tons).', 'Available', '9', '2024-08-15 03:16:35', '2024-08-17 00:19:31'),
(9, '6 Wheeler tractor heads', '12,000 kg to 26,000 kg (about 26,000 lbs to 57,000 lbs)', 'Available', '3', '2024-08-15 03:17:06', '2024-08-17 00:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` bigint UNSIGNED NOT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `particulars` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `withdraw_amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraws`
--

INSERT INTO `withdraws` (`id`, `date`, `particulars`, `withdraw_amount`, `notes`, `created_at`, `updated_at`) VALUES
(1, '2024-08-15', 'radmin.themicly.com/presale/proposal', '250000', 'Hello', '2024-08-15 09:02:52', '2024-08-15 09:02:52'),
(2, '2024-08-16', 'radmin.themicly.com/presale/proposal', '10000', 'Hello', '2024-08-15 09:34:26', '2024-08-15 09:34:26'),
(3, '2024-08-14', 'nhubhouhyo', '450000', 'nhyiby', '2024-08-15 10:06:49', '2024-08-15 10:06:49'),
(4, '2024-08-15', ',k nmin', '40000', ',juobub', '2024-08-15 10:07:11', '2024-08-15 10:07:11'),
(5, '2024-08-19', 'add bal', '415000', 'Hello', '2024-08-15 11:15:56', '2024-08-15 11:15:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accounts_name_unique` (`name`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_driver_id_foreign` (`driver_id`),
  ADD KEY `bookings_assigned_driver_id_foreign` (`assigned_driver_id`),
  ADD KEY `bookings_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `branch_managers`
--
ALTER TABLE `branch_managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branch_managers_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courier_sends`
--
ALTER TABLE `courier_sends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deposits_withdraw_id_foreign` (`withdraw_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `drivers_email_unique` (`email`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_account_id_foreign` (`account_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `proof_payments`
--
ALTER TABLE `proof_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rubixes`
--
ALTER TABLE `rubixes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `starting_balances`
--
ALTER TABLE `starting_balances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `starting_balances_account_id_foreign` (`account_id`);

--
-- Indexes for table `subcontractors`
--
ALTER TABLE `subcontractors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcontractors_subcontractor_id_unique` (`subcontractor_id`),
  ADD UNIQUE KEY `subcontractors_email_address_unique` (`email_address`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_account_id_foreign` (`account_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `branch_managers`
--
ALTER TABLE `branch_managers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courier_sends`
--
ALTER TABLE `courier_sends`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_branches`
--
ALTER TABLE `manage_branches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proof_payments`
--
ALTER TABLE `proof_payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rubixes`
--
ALTER TABLE `rubixes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `starting_balances`
--
ALTER TABLE `starting_balances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcontractors`
--
ALTER TABLE `subcontractors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_assigned_driver_id_foreign` FOREIGN KEY (`assigned_driver_id`) REFERENCES `bookings` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `bookings_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT,
  ADD CONSTRAINT `bookings_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `deposits`
--
ALTER TABLE `deposits`
  ADD CONSTRAINT `deposits_withdraw_id_foreign` FOREIGN KEY (`withdraw_id`) REFERENCES `withdraws` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `starting_balances`
--
ALTER TABLE `starting_balances`
  ADD CONSTRAINT `starting_balances_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
