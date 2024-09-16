-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 16, 2024 at 08:08 AM
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
(3, 'Infinitrade Corporation', '2024-08-15 21:51:22', '2024-08-15 21:51:22'),
(4, 'Test Feedback Farmer', '2024-08-21 08:02:16', '2024-08-21 08:02:16'),
(5, 'XDE', '2024-09-04 06:21:23', '2024-09-04 06:21:23'),
(6, 'GDR Company', '2024-09-04 06:34:32', '2024-09-04 06:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `booking_id` bigint UNSIGNED DEFAULT NULL,
  `logged_in_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `activity`, `created_at`, `updated_at`, `booking_id`, `logged_in_at`) VALUES
(1, 37, 'Viewed rubix details page', '2024-09-05 07:22:30', '2024-09-05 07:22:30', NULL, NULL),
(2, 37, 'Page loaded or refreshed', '2024-09-05 07:22:32', '2024-09-05 07:22:32', NULL, NULL),
(3, 37, 'Viewed rubix details page', '2024-09-05 07:22:37', '2024-09-05 07:22:37', NULL, NULL),
(4, 37, 'Page loaded or refreshed', '2024-09-05 07:22:39', '2024-09-05 07:22:39', NULL, NULL),
(5, 37, 'Clicked on I (fas fa-eye) at 9/5/2024, 3:22:42 PM', '2024-09-05 07:22:42', '2024-09-05 07:22:42', NULL, NULL),
(6, 37, 'Clicked on DIV (modal fade) at 9/5/2024, 3:22:42 PM', '2024-09-05 07:22:43', '2024-09-05 07:22:43', NULL, NULL),
(7, 37, 'Clicked on BUTTON (btn btn-primary) at 9/5/2024, 3:22:44 PM', '2024-09-05 07:22:44', '2024-09-05 07:22:44', NULL, NULL),
(8, 37, 'Clicked on DIV (modal fade) at 9/5/2024, 3:22:44 PM', '2024-09-05 07:22:45', '2024-09-05 07:22:45', NULL, NULL),
(9, 37, 'Clicked on SPAN (menu-title) at 9/5/2024, 3:22:46 PM', '2024-09-05 07:22:46', '2024-09-05 07:22:46', NULL, NULL),
(10, 37, 'Viewed rubix details page', '2024-09-05 07:22:46', '2024-09-05 07:22:46', NULL, NULL),
(11, 37, 'Page loaded or refreshed', '2024-09-05 07:22:48', '2024-09-05 07:22:48', NULL, NULL),
(12, 37, 'Viewed rubix details page', '2024-09-05 07:25:36', '2024-09-05 07:25:36', NULL, NULL),
(13, 37, 'Page loaded or refreshed', '2024-09-05 07:25:38', '2024-09-05 07:25:38', NULL, NULL),
(14, 37, 'Clicked on I (fas fa-eye) at 9/5/2024, 3:25:42 PM', '2024-09-05 07:25:42', '2024-09-05 07:25:42', NULL, NULL),
(15, 37, 'Clicked on DIV (modal fade) at 9/5/2024, 3:25:42 PM', '2024-09-05 07:25:43', '2024-09-05 07:25:43', NULL, NULL),
(16, 37, 'Clicked on BUTTON (btn btn-primary) at 9/5/2024, 3:25:46 PM', '2024-09-05 07:25:47', '2024-09-05 07:25:47', NULL, NULL),
(17, 37, 'Clicked on BUTTON (btn btn-secondary) at 9/5/2024, 3:25:48 PM', '2024-09-05 07:25:48', '2024-09-05 07:25:48', NULL, NULL),
(18, 37, 'Clicked on I (fas fa-eye) at 9/5/2024, 3:25:49 PM', '2024-09-05 07:25:49', '2024-09-05 07:25:49', NULL, NULL),
(19, 37, 'Clicked on BUTTON (btn-close) at 9/5/2024, 3:25:51 PM', '2024-09-05 07:25:51', '2024-09-05 07:25:51', NULL, NULL),
(20, 37, 'Clicked on BUTTON (btn btn-primary) at 9/5/2024, 3:25:52 PM', '2024-09-05 07:25:53', '2024-09-05 07:25:53', NULL, NULL),
(21, 37, 'Clicked on BUTTON (btn btn-secondary) at 9/5/2024, 3:25:54 PM', '2024-09-05 07:25:54', '2024-09-05 07:25:54', NULL, NULL),
(22, 37, 'Viewed rubix details page', '2024-09-05 07:25:56', '2024-09-05 07:25:56', NULL, NULL),
(23, 37, 'Page loaded or refreshed', '2024-09-05 07:25:57', '2024-09-05 07:25:57', NULL, NULL),
(24, 37, 'Viewed rubix details page', '2024-09-05 07:30:58', '2024-09-05 07:30:58', NULL, NULL),
(25, 37, 'Page loaded or refreshed', '2024-09-05 07:31:01', '2024-09-05 07:31:01', NULL, NULL),
(26, 37, 'Viewed rubix details page', '2024-09-05 07:32:02', '2024-09-05 07:32:02', NULL, NULL),
(27, 37, 'Page loaded or refreshed', '2024-09-05 07:32:05', '2024-09-05 07:32:05', NULL, NULL),
(28, 37, 'Clicked on TD () at 9/5/2024, 3:32:06 PM', '2024-09-05 07:32:07', '2024-09-05 07:32:07', NULL, NULL),
(29, 37, 'Clicked on TD () at 9/5/2024, 3:32:07 PM', '2024-09-05 07:32:07', '2024-09-05 07:32:07', NULL, NULL),
(30, 37, 'Clicked on TD () at 9/5/2024, 3:32:07 PM', '2024-09-05 07:32:07', '2024-09-05 07:32:07', NULL, NULL),
(31, 37, 'Clicked on TD () at 9/5/2024, 3:32:07 PM', '2024-09-05 07:32:08', '2024-09-05 07:32:08', NULL, NULL),
(32, 37, 'Viewed rubix details page', '2024-09-05 07:32:30', '2024-09-05 07:32:30', NULL, NULL),
(33, 37, 'Page loaded or refreshed', '2024-09-05 07:32:32', '2024-09-05 07:32:32', NULL, NULL),
(34, 37, 'Viewed rubix details page', '2024-09-05 07:34:15', '2024-09-05 07:34:15', NULL, NULL),
(35, 37, 'Page loaded or refreshed', '2024-09-05 07:34:17', '2024-09-05 07:34:17', NULL, NULL),
(36, 37, 'Viewed rubix details page', '2024-09-05 07:34:26', '2024-09-05 07:34:26', NULL, NULL),
(37, 37, 'Page loaded or refreshed', '2024-09-05 07:34:28', '2024-09-05 07:34:28', NULL, NULL),
(38, 37, 'Viewed rubix details page', '2024-09-05 07:35:10', '2024-09-05 07:35:10', NULL, NULL),
(39, 37, 'Viewed rubix details page', '2024-09-05 07:35:27', '2024-09-05 07:35:27', NULL, NULL),
(40, 37, 'Page loaded or refreshed', '2024-09-05 07:35:30', '2024-09-05 07:35:30', NULL, NULL),
(41, 37, 'Viewed rubix details page', '2024-09-05 07:35:41', '2024-09-05 07:35:41', NULL, NULL),
(42, 37, 'Page loaded or refreshed', '2024-09-05 07:35:44', '2024-09-05 07:35:44', NULL, NULL),
(43, 37, 'Viewed rubix details page', '2024-09-05 07:35:58', '2024-09-05 07:35:58', NULL, NULL),
(44, 37, 'Page loaded or refreshed', '2024-09-05 07:36:01', '2024-09-05 07:36:01', NULL, NULL),
(45, 37, 'Viewed rubix details page', '2024-09-05 07:36:47', '2024-09-05 07:36:47', NULL, NULL),
(46, 37, 'Viewed rubix details page', '2024-09-05 07:36:58', '2024-09-05 07:36:58', NULL, NULL),
(47, 37, 'Page loaded or refreshed', '2024-09-05 07:37:01', '2024-09-05 07:37:01', NULL, NULL),
(48, 37, 'Viewed rubix details page', '2024-09-05 07:37:34', '2024-09-05 07:37:34', NULL, NULL),
(49, 37, 'Page loaded or refreshed', '2024-09-05 07:37:37', '2024-09-05 07:37:37', NULL, NULL),
(50, 37, 'Clicked on TD () at 9/5/2024, 3:37:37 PM', '2024-09-05 07:37:38', '2024-09-05 07:37:38', NULL, NULL),
(51, 37, 'Viewed rubix details page', '2024-09-05 07:38:05', '2024-09-05 07:38:05', NULL, NULL),
(52, 37, 'Page loaded or refreshed', '2024-09-05 07:38:07', '2024-09-05 07:38:07', NULL, NULL),
(53, 37, 'Clicked on TD () at 9/5/2024, 3:38:17 PM', '2024-09-05 07:38:17', '2024-09-05 07:38:17', NULL, NULL),
(54, 37, 'Viewed rubix details page', '2024-09-05 07:42:12', '2024-09-05 07:42:12', NULL, NULL),
(55, 37, 'Page loaded or refreshed', '2024-09-05 07:42:14', '2024-09-05 07:42:14', NULL, NULL),
(56, 37, 'Viewed rubix details page', '2024-09-05 07:45:44', '2024-09-05 07:45:44', NULL, NULL),
(57, 37, 'Page loaded or refreshed', '2024-09-05 07:45:47', '2024-09-05 07:45:47', NULL, NULL),
(58, 37, 'Viewed rubix details page', '2024-09-05 07:46:53', '2024-09-05 07:46:53', NULL, NULL),
(59, 37, 'Viewed rubix details page', '2024-09-05 07:50:12', '2024-09-05 07:50:12', NULL, NULL),
(60, 37, 'Viewed rubix details page', '2024-09-05 07:50:22', '2024-09-05 07:50:22', NULL, NULL),
(61, 37, 'Viewed rubix details page', '2024-09-05 07:50:32', '2024-09-05 07:50:32', NULL, NULL),
(62, 37, 'Page loaded or refreshed', '2024-09-05 07:50:35', '2024-09-05 07:50:35', NULL, NULL),
(63, 37, 'Viewed rubix details page', '2024-09-05 07:51:59', '2024-09-05 07:51:59', NULL, NULL),
(64, 37, 'Page loaded or refreshed', '2024-09-05 07:52:01', '2024-09-05 07:52:01', NULL, NULL),
(65, 37, 'Clicked on P () at 9/5/2024, 3:52:01 PM', '2024-09-05 07:52:02', '2024-09-05 07:52:02', NULL, NULL),
(66, 37, 'Clicked on DIV (user-info mb-4 p-4 bg-light rounded shadow) at 9/5/2024, 3:52:04 PM', '2024-09-05 07:52:04', '2024-09-05 07:52:04', NULL, NULL),
(67, 37, 'Clicked on DIV (user-info mb-4 p-4 bg-light rounded shadow) at 9/5/2024, 3:52:05 PM', '2024-09-05 07:52:05', '2024-09-05 07:52:05', NULL, NULL),
(68, 37, 'Clicked on P () at 9/5/2024, 3:52:05 PM', '2024-09-05 07:52:06', '2024-09-05 07:52:06', NULL, NULL),
(69, 37, 'Clicked on DIV (table-responsive--sm table-responsive) at 9/5/2024, 3:52:06 PM', '2024-09-05 07:52:06', '2024-09-05 07:52:06', NULL, NULL),
(70, 37, 'Viewed rubix details page', '2024-09-05 07:52:32', '2024-09-05 07:52:32', NULL, NULL),
(71, 37, 'Page loaded or refreshed', '2024-09-05 07:52:35', '2024-09-05 07:52:35', NULL, NULL),
(72, 37, 'Clicked on P () at 9/5/2024, 3:52:36 PM', '2024-09-05 07:52:36', '2024-09-05 07:52:36', NULL, NULL),
(73, 37, 'Clicked on P () at 9/5/2024, 3:52:37 PM', '2024-09-05 07:52:37', '2024-09-05 07:52:37', NULL, NULL),
(74, 37, 'Clicked on DIV (table-responsive--sm table-responsive) at 9/5/2024, 3:52:37 PM', '2024-09-05 07:52:37', '2024-09-05 07:52:37', NULL, NULL),
(75, 37, 'Viewed rubix details page', '2024-09-05 07:52:49', '2024-09-05 07:52:49', NULL, NULL),
(76, 37, 'Page loaded or refreshed', '2024-09-05 07:52:51', '2024-09-05 07:52:51', NULL, NULL),
(77, 37, 'Viewed rubix details page', '2024-09-05 07:53:46', '2024-09-05 07:53:46', NULL, NULL),
(78, 37, 'Page loaded or refreshed', '2024-09-05 07:53:49', '2024-09-05 07:53:49', NULL, NULL),
(79, 37, 'Clicked on BUTTON (btn btn-link text-primary collapsed) at 9/5/2024, 3:54:18 PM', '2024-09-05 07:54:18', '2024-09-05 07:54:18', NULL, NULL),
(80, 37, 'Clicked on BUTTON (btn btn-link text-primary collapsed) at 9/5/2024, 3:54:19 PM', '2024-09-05 07:54:19', '2024-09-05 07:54:19', NULL, NULL),
(81, 37, 'Clicked on BUTTON (btn btn-link text-primary) at 9/5/2024, 3:54:22 PM', '2024-09-05 07:54:23', '2024-09-05 07:54:23', NULL, NULL),
(82, 37, 'Clicked on BUTTON (btn btn-link text-primary collapsed) at 9/5/2024, 3:54:23 PM', '2024-09-05 07:54:23', '2024-09-05 07:54:23', NULL, NULL),
(83, 37, 'Viewed rubix details page', '2024-09-05 07:55:17', '2024-09-05 07:55:17', NULL, NULL),
(84, 37, 'Page loaded or refreshed', '2024-09-05 07:55:20', '2024-09-05 07:55:20', NULL, NULL),
(85, 37, 'Clicked on BUTTON (btn btn-link text-primary collapsed) at 9/5/2024, 3:55:22 PM', '2024-09-05 07:55:22', '2024-09-05 07:55:22', NULL, NULL),
(86, 37, 'Clicked on BUTTON (btn btn-link text-primary) at 9/5/2024, 3:55:23 PM', '2024-09-05 07:55:23', '2024-09-05 07:55:23', NULL, NULL),
(87, 37, 'Clicked on BUTTON (btn btn-link text-primary collapsed) at 9/5/2024, 3:55:33 PM', '2024-09-05 07:55:34', '2024-09-05 07:55:34', NULL, NULL),
(88, 37, 'Clicked on BUTTON (btn btn-link text-primary) at 9/5/2024, 3:56:21 PM', '2024-09-05 07:56:22', '2024-09-05 07:56:22', NULL, NULL),
(89, 37, 'Clicked on BUTTON (btn btn-link text-primary collapsed) at 9/5/2024, 3:56:23 PM', '2024-09-05 07:56:23', '2024-09-05 07:56:23', NULL, NULL),
(90, 37, 'Viewed rubix details page', '2024-09-05 07:56:32', '2024-09-05 07:56:32', NULL, NULL),
(91, 37, 'Page loaded or refreshed', '2024-09-05 07:56:34', '2024-09-05 07:56:34', NULL, NULL),
(92, 37, 'Viewed rubix details page', '2024-09-05 07:56:45', '2024-09-05 07:56:45', NULL, NULL),
(93, 37, 'Page loaded or refreshed', '2024-09-05 07:56:47', '2024-09-05 07:56:47', NULL, NULL),
(94, 37, 'Clicked on SPAN (menu-title) at 9/5/2024, 3:56:55 PM', '2024-09-05 07:56:55', '2024-09-05 07:56:55', NULL, NULL),
(95, 37, 'Viewed rubix details page', '2024-09-05 07:56:58', '2024-09-05 07:56:58', NULL, NULL),
(96, 37, 'Page loaded or refreshed', '2024-09-05 07:57:00', '2024-09-05 07:57:00', NULL, NULL),
(97, 37, 'Clicked on TD () at 9/5/2024, 3:57:09 PM', '2024-09-05 07:57:09', '2024-09-05 07:57:09', NULL, NULL),
(98, 37, 'Clicked on TD () at 9/5/2024, 3:57:10 PM', '2024-09-05 07:57:10', '2024-09-05 07:57:10', NULL, NULL),
(99, 37, 'Clicked on TD () at 9/5/2024, 3:57:10 PM', '2024-09-05 07:57:10', '2024-09-05 07:57:10', NULL, NULL),
(100, 37, 'Clicked on TD () at 9/5/2024, 3:57:11 PM', '2024-09-05 07:57:12', '2024-09-05 07:57:12', NULL, NULL),
(101, 37, 'Clicked on BUTTON (btn btn-link text-primary collapsed) at 9/5/2024, 3:57:29 PM', '2024-09-05 07:57:29', '2024-09-05 07:57:29', NULL, NULL),
(102, 37, 'Viewed rubix details page', '2024-09-05 07:58:38', '2024-09-05 07:58:38', NULL, NULL),
(103, 37, 'Page loaded or refreshed', '2024-09-05 07:58:41', '2024-09-05 07:58:41', NULL, NULL),
(104, 37, 'Clicked on BUTTON (btn btn-primary) at 9/5/2024, 3:59:09 PM', '2024-09-05 07:59:10', '2024-09-05 07:59:10', NULL, NULL),
(105, 37, 'Clicked on BUTTON (btn btn-secondary) at 9/5/2024, 3:59:22 PM', '2024-09-05 07:59:22', '2024-09-05 07:59:22', NULL, NULL),
(106, 37, 'Clicked on BUTTON (btn btn-primary) at 9/5/2024, 4:00:24 PM', '2024-09-05 08:00:24', '2024-09-05 08:00:24', NULL, NULL),
(107, 37, 'Clicked on TD () at 9/5/2024, 4:00:26 PM', '2024-09-05 08:00:26', '2024-09-05 08:00:26', NULL, NULL),
(108, 37, 'Clicked on TD () at 9/5/2024, 4:00:26 PM', '2024-09-05 08:00:27', '2024-09-05 08:00:27', NULL, NULL),
(109, 37, 'Clicked on DIV (modal fade) at 9/5/2024, 4:00:48 PM', '2024-09-05 08:00:49', '2024-09-05 08:00:49', NULL, NULL),
(110, 37, 'Clicked on BUTTON (btn btn-primary) at 9/5/2024, 4:00:50 PM', '2024-09-05 08:00:50', '2024-09-05 08:00:50', NULL, NULL),
(111, 37, 'Clicked on BUTTON (btn btn-secondary) at 9/5/2024, 4:00:55 PM', '2024-09-05 08:00:55', '2024-09-05 08:00:55', NULL, NULL),
(112, 37, 'Clicked on SPAN (menu-title) at 9/5/2024, 4:02:31 PM', '2024-09-05 08:02:31', '2024-09-05 08:02:31', NULL, NULL),
(113, 37, 'Viewed rubix details page', '2024-09-05 08:13:18', '2024-09-05 08:13:18', NULL, NULL),
(114, 37, 'Page loaded or refreshed', '2024-09-05 08:13:20', '2024-09-05 08:13:20', NULL, NULL),
(115, 37, 'Clicked on BUTTON (btn btn-primary) at 9/5/2024, 4:13:31 PM', '2024-09-05 08:13:32', '2024-09-05 08:13:32', NULL, NULL),
(116, 37, 'Clicked on TD () at 9/5/2024, 4:13:33 PM', '2024-09-05 08:13:34', '2024-09-05 08:13:34', NULL, NULL),
(117, 37, 'Clicked on TD () at 9/5/2024, 4:13:34 PM', '2024-09-05 08:13:34', '2024-09-05 08:13:34', NULL, NULL),
(118, 37, 'Clicked on TD () at 9/5/2024, 4:13:40 PM', '2024-09-05 08:13:41', '2024-09-05 08:13:41', NULL, NULL),
(119, 37, 'Clicked on TD () at 9/5/2024, 4:13:42 PM', '2024-09-05 08:13:43', '2024-09-05 08:13:43', NULL, NULL),
(120, 37, 'Clicked on TD () at 9/5/2024, 4:13:44 PM', '2024-09-05 08:13:44', '2024-09-05 08:13:44', NULL, NULL),
(121, 37, 'Clicked on TD () at 9/5/2024, 4:13:44 PM', '2024-09-05 08:13:45', '2024-09-05 08:13:45', NULL, NULL),
(122, 37, 'Clicked on BUTTON (btn btn-secondary) at 9/5/2024, 4:13:46 PM', '2024-09-05 08:13:46', '2024-09-05 08:13:46', NULL, NULL),
(123, 37, 'Clicked on DIV (table-responsive--sm table-responsive) at 9/5/2024, 4:13:46 PM', '2024-09-05 08:13:47', '2024-09-05 08:13:47', NULL, NULL),
(124, 37, 'Clicked on BUTTON (btn btn-primary) at 9/5/2024, 4:13:47 PM', '2024-09-05 08:13:47', '2024-09-05 08:13:47', NULL, NULL),
(125, 37, 'Clicked on TD () at 9/5/2024, 4:13:54 PM', '2024-09-05 08:13:55', '2024-09-05 08:13:55', NULL, NULL),
(126, 37, 'Clicked on TD () at 9/5/2024, 4:13:55 PM', '2024-09-05 08:13:55', '2024-09-05 08:13:55', NULL, NULL),
(127, 37, 'Clicked on DIV (modal fade) at 9/5/2024, 4:13:56 PM', '2024-09-05 08:13:57', '2024-09-05 08:13:57', NULL, NULL),
(128, 37, 'Clicked on TD () at 9/5/2024, 4:13:57 PM', '2024-09-05 08:13:57', '2024-09-05 08:13:57', NULL, NULL),
(129, 37, 'Clicked on TD () at 9/5/2024, 4:13:58 PM', '2024-09-05 08:13:58', '2024-09-05 08:13:58', NULL, NULL),
(130, 37, 'Clicked on A (side-menu--open) at 9/5/2024, 4:16:31 PM', '2024-09-05 08:16:31', '2024-09-05 08:16:31', NULL, NULL),
(131, 37, 'Clicked on SPAN (menu-title) at 9/5/2024, 4:16:32 PM', '2024-09-05 08:16:32', '2024-09-05 08:16:32', NULL, NULL),
(132, 31, 'Viewed rubix details page', '2024-09-06 00:06:51', '2024-09-06 00:06:51', NULL, NULL),
(133, 31, 'Page loaded or refreshed', '2024-09-06 00:06:55', '2024-09-06 00:06:55', NULL, NULL),
(134, 31, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 8:07:02 AM', '2024-09-06 00:07:02', '2024-09-06 00:07:02', NULL, NULL),
(135, 31, 'Clicked on BUTTON (btn btn-secondary) at 9/6/2024, 8:07:05 AM', '2024-09-06 00:07:05', '2024-09-06 00:07:05', NULL, NULL),
(136, 31, 'Clicked on DIV (container mt-4) at 9/6/2024, 8:07:05 AM', '2024-09-06 00:07:06', '2024-09-06 00:07:06', NULL, NULL),
(137, 31, 'Viewed rubix details page', '2024-09-06 00:07:07', '2024-09-06 00:07:07', NULL, NULL),
(138, 31, 'Page loaded or refreshed', '2024-09-06 00:07:09', '2024-09-06 00:07:09', NULL, NULL),
(139, 31, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 8:07:11 AM', '2024-09-06 00:07:11', '2024-09-06 00:07:11', NULL, NULL),
(140, 31, 'Clicked on DIV (modal fade) at 9/6/2024, 8:07:11 AM', '2024-09-06 00:07:12', '2024-09-06 00:07:12', NULL, NULL),
(141, 31, 'Clicked on TD () at 9/6/2024, 8:07:12 AM', '2024-09-06 00:07:12', '2024-09-06 00:07:12', NULL, NULL),
(142, 31, 'Clicked on I (fas fa-eye) at 9/6/2024, 8:07:12 AM', '2024-09-06 00:07:13', '2024-09-06 00:07:13', NULL, NULL),
(143, 31, 'Clicked on DIV (modal fade) at 9/6/2024, 8:07:13 AM', '2024-09-06 00:07:14', '2024-09-06 00:07:14', NULL, NULL),
(144, 31, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 8:07:16 AM', '2024-09-06 00:07:16', '2024-09-06 00:07:16', NULL, NULL),
(145, 31, 'Clicked on BUTTON (btn btn-secondary) at 9/6/2024, 8:09:05 AM', '2024-09-06 00:09:05', '2024-09-06 00:09:05', NULL, NULL),
(146, 31, 'Viewed rubix details page', '2024-09-06 00:09:06', '2024-09-06 00:09:06', NULL, NULL),
(147, 31, 'Page loaded or refreshed', '2024-09-06 00:09:09', '2024-09-06 00:09:09', NULL, NULL),
(148, 31, 'Viewed rubix details page', '2024-09-06 04:03:23', '2024-09-06 04:03:23', NULL, '2024-09-06 04:03:23'),
(149, 31, 'Page loaded or refreshed', '2024-09-06 04:03:26', '2024-09-06 04:03:26', NULL, NULL),
(150, 31, 'Clicked on SPAN (text-dark) at 9/6/2024, 12:03:27 PM', '2024-09-06 04:03:27', '2024-09-06 04:03:27', NULL, NULL),
(151, 31, 'Clicked on DIV (user-info mb-4) at 9/6/2024, 12:03:28 PM', '2024-09-06 04:03:28', '2024-09-06 04:03:28', NULL, NULL),
(152, 31, 'Viewed rubix details page', '2024-09-06 05:02:21', '2024-09-06 05:02:21', NULL, '2024-09-06 05:02:21'),
(153, 31, 'Page loaded or refreshed', '2024-09-06 05:02:23', '2024-09-06 05:02:23', NULL, NULL),
(154, 31, 'Clicked on TH () at 9/6/2024, 1:02:24 PM', '2024-09-06 05:02:24', '2024-09-06 05:02:24', NULL, NULL),
(155, 31, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:02:24 PM', '2024-09-06 05:02:24', '2024-09-06 05:02:24', NULL, NULL),
(156, 31, 'Clicked on TH () at 9/6/2024, 1:02:26 PM', '2024-09-06 05:02:26', '2024-09-06 05:02:26', NULL, NULL),
(157, 31, 'Clicked on TH () at 9/6/2024, 1:02:26 PM', '2024-09-06 05:02:27', '2024-09-06 05:02:27', NULL, NULL),
(158, 31, 'Clicked on TD () at 9/6/2024, 1:02:27 PM', '2024-09-06 05:02:27', '2024-09-06 05:02:27', NULL, NULL),
(159, 31, 'Clicked on DIV (modal fade show) at 9/6/2024, 1:02:28 PM', '2024-09-06 05:02:29', '2024-09-06 05:02:29', NULL, NULL),
(160, 31, 'Clicked on H4 (text-primary mb-3) at 9/6/2024, 1:02:29 PM', '2024-09-06 05:02:29', '2024-09-06 05:02:29', NULL, NULL),
(161, 31, 'Clicked on TD () at 9/6/2024, 1:02:34 PM', '2024-09-06 05:02:34', '2024-09-06 05:02:34', NULL, NULL),
(162, 31, 'Clicked on TD () at 9/6/2024, 1:02:35 PM', '2024-09-06 05:02:36', '2024-09-06 05:02:36', NULL, NULL),
(163, 31, 'Clicked on TD () at 9/6/2024, 1:02:35 PM', '2024-09-06 05:02:36', '2024-09-06 05:02:36', NULL, NULL),
(164, 31, 'Clicked on TD () at 9/6/2024, 1:02:37 PM', '2024-09-06 05:02:38', '2024-09-06 05:02:38', NULL, NULL),
(165, 13, 'Viewed rubix details page', '2024-09-06 05:03:10', '2024-09-06 05:03:10', NULL, '2024-09-06 05:03:10'),
(166, 13, 'Page loaded or refreshed', '2024-09-06 05:03:12', '2024-09-06 05:03:12', NULL, NULL),
(167, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:03:13 PM', '2024-09-06 05:03:14', '2024-09-06 05:03:14', NULL, NULL),
(168, 13, 'Clicked on TH () at 9/6/2024, 1:03:15 PM', '2024-09-06 05:03:15', '2024-09-06 05:03:15', NULL, NULL),
(169, 13, 'Clicked on BUTTON (btn btn-secondary) at 9/6/2024, 1:03:18 PM', '2024-09-06 05:03:19', '2024-09-06 05:03:19', NULL, NULL),
(170, 13, 'Viewed rubix details page', '2024-09-06 05:03:19', '2024-09-06 05:03:19', NULL, '2024-09-06 05:03:19'),
(171, 13, 'Page loaded or refreshed', '2024-09-06 05:03:21', '2024-09-06 05:03:21', NULL, NULL),
(172, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:03:22 PM', '2024-09-06 05:03:22', '2024-09-06 05:03:22', NULL, NULL),
(173, 13, 'Clicked on TD () at 9/6/2024, 1:03:26 PM', '2024-09-06 05:03:27', '2024-09-06 05:03:27', NULL, NULL),
(174, 13, 'Clicked on H4 (text-primary mb-3) at 9/6/2024, 1:03:27 PM', '2024-09-06 05:03:28', '2024-09-06 05:03:28', NULL, NULL),
(175, 13, 'Viewed rubix details page', '2024-09-06 05:04:22', '2024-09-06 05:04:22', NULL, '2024-09-06 05:04:22'),
(176, 13, 'Page loaded or refreshed', '2024-09-06 05:04:25', '2024-09-06 05:04:25', NULL, NULL),
(177, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:04:25 PM', '2024-09-06 05:04:26', '2024-09-06 05:04:26', NULL, NULL),
(178, 13, 'Clicked on SPAN (text-dark) at 9/6/2024, 1:04:27 PM', '2024-09-06 05:04:27', '2024-09-06 05:04:27', NULL, NULL),
(179, 13, 'Clicked on SPAN (text-dark) at 9/6/2024, 1:04:27 PM', '2024-09-06 05:04:27', '2024-09-06 05:04:27', NULL, NULL),
(180, 13, 'Clicked on P () at 9/6/2024, 1:04:27 PM', '2024-09-06 05:04:28', '2024-09-06 05:04:28', NULL, NULL),
(181, 13, 'Clicked on P () at 9/6/2024, 1:04:28 PM', '2024-09-06 05:04:28', '2024-09-06 05:04:28', NULL, NULL),
(182, 13, 'Clicked on TD () at 9/6/2024, 1:04:29 PM', '2024-09-06 05:04:30', '2024-09-06 05:04:30', NULL, NULL),
(183, 13, 'Clicked on TD () at 9/6/2024, 1:04:30 PM', '2024-09-06 05:04:30', '2024-09-06 05:04:30', NULL, NULL),
(184, 13, 'Clicked on TD () at 9/6/2024, 1:04:30 PM', '2024-09-06 05:04:31', '2024-09-06 05:04:31', NULL, NULL),
(185, 13, 'Clicked on TD () at 9/6/2024, 1:04:31 PM', '2024-09-06 05:04:31', '2024-09-06 05:04:31', NULL, NULL),
(186, 13, 'Clicked on TD () at 9/6/2024, 1:04:31 PM', '2024-09-06 05:04:31', '2024-09-06 05:04:31', NULL, NULL),
(187, 13, 'Clicked on TD () at 9/6/2024, 1:04:32 PM', '2024-09-06 05:04:32', '2024-09-06 05:04:32', NULL, NULL),
(188, 13, 'Clicked on BUTTON (btn btn-secondary) at 9/6/2024, 1:04:34 PM', '2024-09-06 05:04:35', '2024-09-06 05:04:35', NULL, NULL),
(189, 13, 'Viewed rubix details page', '2024-09-06 05:04:52', '2024-09-06 05:04:52', NULL, '2024-09-06 05:04:52'),
(190, 13, 'Page loaded or refreshed', '2024-09-06 05:04:54', '2024-09-06 05:04:54', NULL, NULL),
(191, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:04:55 PM', '2024-09-06 05:04:55', '2024-09-06 05:04:55', NULL, NULL),
(192, 13, 'Clicked on P () at 9/6/2024, 1:05:08 PM', '2024-09-06 05:05:09', '2024-09-06 05:05:09', NULL, NULL),
(193, 13, 'Viewed rubix details page', '2024-09-06 05:06:25', '2024-09-06 05:06:25', NULL, '2024-09-06 05:06:25'),
(194, 13, 'Page loaded or refreshed', '2024-09-06 05:06:27', '2024-09-06 05:06:27', NULL, '2024-09-06 05:06:27'),
(195, 13, 'Clicked on DIV (table-responsive--sm table-responsive) at 9/6/2024, 1:06:27 PM', '2024-09-06 05:06:27', '2024-09-06 05:06:27', NULL, '2024-09-06 05:06:27'),
(196, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:06:27 PM', '2024-09-06 05:06:28', '2024-09-06 05:06:28', NULL, '2024-09-06 05:06:28'),
(197, 13, 'Clicked on P () at 9/6/2024, 1:06:29 PM', '2024-09-06 05:06:29', '2024-09-06 05:06:29', NULL, '2024-09-06 05:06:29'),
(198, 13, 'Clicked on DIV (activity-logs) at 9/6/2024, 1:06:30 PM', '2024-09-06 05:06:30', '2024-09-06 05:06:30', NULL, '2024-09-06 05:06:30'),
(199, 13, 'Clicked on BUTTON (btn btn-secondary) at 9/6/2024, 1:06:31 PM', '2024-09-06 05:06:32', '2024-09-06 05:06:32', NULL, '2024-09-06 05:06:32'),
(200, 13, 'Clicked on DIV (d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center) at 9/6/2024, 1:06:33 PM', '2024-09-06 05:06:33', '2024-09-06 05:06:33', NULL, '2024-09-06 05:06:33'),
(201, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:06:33 PM', '2024-09-06 05:06:34', '2024-09-06 05:06:34', NULL, '2024-09-06 05:06:34'),
(202, 13, 'Clicked on DIV (modal fade show) at 9/6/2024, 1:06:34 PM', '2024-09-06 05:06:35', '2024-09-06 05:06:35', NULL, '2024-09-06 05:06:35'),
(203, 13, 'Clicked on P () at 9/6/2024, 1:06:35 PM', '2024-09-06 05:06:35', '2024-09-06 05:06:35', NULL, '2024-09-06 05:06:35'),
(204, 13, 'Viewed rubix details page', '2024-09-06 05:11:54', '2024-09-06 05:11:54', NULL, '2024-09-06 05:11:54'),
(205, 13, 'Page loaded or refreshed', '2024-09-06 05:11:57', '2024-09-06 05:11:57', NULL, '2024-09-06 05:11:57'),
(206, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:11:59 PM', '2024-09-06 05:11:59', '2024-09-06 05:11:59', NULL, '2024-09-06 05:11:59'),
(207, 13, 'Viewed rubix details page', '2024-09-06 05:12:52', '2024-09-06 05:12:52', NULL, '2024-09-06 05:12:52'),
(208, 13, 'Page loaded or refreshed', '2024-09-06 05:12:55', '2024-09-06 05:12:55', NULL, '2024-09-06 05:12:55'),
(209, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:12:55 PM', '2024-09-06 05:12:56', '2024-09-06 05:12:56', NULL, '2024-09-06 05:12:56'),
(210, 13, 'Viewed rubix details page', '2024-09-06 05:13:04', '2024-09-06 05:13:04', NULL, '2024-09-06 05:13:04'),
(211, 13, 'Page loaded or refreshed', '2024-09-06 05:13:06', '2024-09-06 05:13:06', NULL, '2024-09-06 05:13:06'),
(212, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:13:06 PM', '2024-09-06 05:13:07', '2024-09-06 05:13:07', NULL, '2024-09-06 05:13:07'),
(213, 13, 'Clicked on BUTTON (btn btn-secondary) at 9/6/2024, 1:13:20 PM', '2024-09-06 05:13:20', '2024-09-06 05:13:20', NULL, '2024-09-06 05:13:20'),
(214, 13, 'Viewed rubix details page', '2024-09-06 05:13:40', '2024-09-06 05:13:40', NULL, '2024-09-06 05:13:40'),
(215, 13, 'Page loaded or refreshed', '2024-09-06 05:13:42', '2024-09-06 05:13:42', NULL, '2024-09-06 05:13:42'),
(216, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:13:42 PM', '2024-09-06 05:13:43', '2024-09-06 05:13:43', NULL, '2024-09-06 05:13:43'),
(217, 13, 'Viewed rubix details page', '2024-09-06 05:14:23', '2024-09-06 05:14:23', NULL, '2024-09-06 05:14:23'),
(218, 13, 'Page loaded or refreshed', '2024-09-06 05:14:26', '2024-09-06 05:14:26', NULL, '2024-09-06 05:14:26'),
(219, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:14:26 PM', '2024-09-06 05:14:27', '2024-09-06 05:14:27', NULL, '2024-09-06 05:14:27'),
(220, 13, 'Clicked on P () at 9/6/2024, 1:14:28 PM', '2024-09-06 05:14:28', '2024-09-06 05:14:28', NULL, '2024-09-06 05:14:28'),
(221, 13, 'Viewed rubix details page', '2024-09-06 05:15:20', '2024-09-06 05:15:20', NULL, '2024-09-06 05:15:20'),
(222, 13, 'Page loaded or refreshed', '2024-09-06 05:15:23', '2024-09-06 05:15:23', NULL, '2024-09-06 05:15:23'),
(223, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:15:23 PM', '2024-09-06 05:15:23', '2024-09-06 05:15:23', NULL, '2024-09-06 05:15:23'),
(224, 13, 'Clicked on BUTTON (btn-close) at 9/6/2024, 1:15:29 PM', '2024-09-06 05:15:30', '2024-09-06 05:15:30', NULL, '2024-09-06 05:15:30'),
(225, 13, 'Viewed rubix details page', '2024-09-06 05:15:36', '2024-09-06 05:15:36', NULL, '2024-09-06 05:15:36'),
(226, 13, 'Page loaded or refreshed', '2024-09-06 05:15:38', '2024-09-06 05:15:38', NULL, '2024-09-06 05:15:38'),
(227, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:15:38 PM', '2024-09-06 05:15:39', '2024-09-06 05:15:39', NULL, '2024-09-06 05:15:39'),
(228, 13, 'Clicked on BUTTON (btn btn-secondary) at 9/6/2024, 1:15:41 PM', '2024-09-06 05:15:42', '2024-09-06 05:15:42', NULL, '2024-09-06 05:15:42'),
(229, 13, 'Viewed rubix details page', '2024-09-06 05:16:01', '2024-09-06 05:16:01', NULL, '2024-09-06 05:16:01'),
(230, 13, 'Page loaded or refreshed', '2024-09-06 05:16:03', '2024-09-06 05:16:03', NULL, '2024-09-06 05:16:03'),
(231, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:16:03 PM', '2024-09-06 05:16:04', '2024-09-06 05:16:04', NULL, '2024-09-06 05:16:04'),
(232, 13, 'Viewed rubix details page', '2024-09-06 05:16:06', '2024-09-06 05:16:06', NULL, '2024-09-06 05:16:06'),
(233, 13, 'Page loaded or refreshed', '2024-09-06 05:16:09', '2024-09-06 05:16:09', NULL, '2024-09-06 05:16:09'),
(234, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:16:09 PM', '2024-09-06 05:16:09', '2024-09-06 05:16:09', NULL, '2024-09-06 05:16:09'),
(235, 13, 'Viewed rubix details page', '2024-09-06 05:16:15', '2024-09-06 05:16:15', NULL, '2024-09-06 05:16:15'),
(236, 13, 'Page loaded or refreshed', '2024-09-06 05:16:18', '2024-09-06 05:16:18', NULL, '2024-09-06 05:16:18'),
(237, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:16:17 PM', '2024-09-06 05:16:18', '2024-09-06 05:16:18', NULL, '2024-09-06 05:16:18'),
(238, 13, 'Viewed rubix details page', '2024-09-06 05:16:21', '2024-09-06 05:16:21', NULL, '2024-09-06 05:16:21'),
(239, 13, 'Page loaded or refreshed', '2024-09-06 05:16:23', '2024-09-06 05:16:23', NULL, '2024-09-06 05:16:23'),
(240, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:16:23 PM', '2024-09-06 05:16:24', '2024-09-06 05:16:24', NULL, '2024-09-06 05:16:24'),
(241, 13, 'Viewed rubix details page', '2024-09-06 05:16:27', '2024-09-06 05:16:27', NULL, '2024-09-06 05:16:27'),
(242, 13, 'Page loaded or refreshed', '2024-09-06 05:16:30', '2024-09-06 05:16:30', NULL, '2024-09-06 05:16:30'),
(243, 13, 'Clicked on DIV (table-responsive--sm table-responsive) at 9/6/2024, 1:16:30 PM', '2024-09-06 05:16:30', '2024-09-06 05:16:30', NULL, '2024-09-06 05:16:30'),
(244, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:16:30 PM', '2024-09-06 05:16:31', '2024-09-06 05:16:31', NULL, '2024-09-06 05:16:31'),
(245, 13, 'Viewed rubix details page', '2024-09-06 05:16:34', '2024-09-06 05:16:34', NULL, '2024-09-06 05:16:34'),
(246, 13, 'Page loaded or refreshed', '2024-09-06 05:16:36', '2024-09-06 05:16:36', NULL, '2024-09-06 05:16:36'),
(247, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:16:36 PM', '2024-09-06 05:16:37', '2024-09-06 05:16:37', NULL, '2024-09-06 05:16:37'),
(248, 13, 'Viewed rubix details page', '2024-09-06 05:16:41', '2024-09-06 05:16:41', NULL, '2024-09-06 05:16:41'),
(249, 13, 'Page loaded or refreshed', '2024-09-06 05:16:44', '2024-09-06 05:16:44', NULL, '2024-09-06 05:16:44'),
(250, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:16:44 PM', '2024-09-06 05:16:44', '2024-09-06 05:16:44', NULL, '2024-09-06 05:16:44'),
(251, 13, 'Viewed rubix details page', '2024-09-06 05:16:49', '2024-09-06 05:16:49', NULL, '2024-09-06 05:16:49'),
(252, 13, 'Page loaded or refreshed', '2024-09-06 05:16:52', '2024-09-06 05:16:52', NULL, '2024-09-06 05:16:52'),
(253, 13, 'Clicked on TH () at 9/6/2024, 1:16:52 PM', '2024-09-06 05:16:52', '2024-09-06 05:16:52', NULL, '2024-09-06 05:16:52'),
(254, 13, 'Clicked on DIV (table-responsive--sm table-responsive) at 9/6/2024, 1:16:52 PM', '2024-09-06 05:16:53', '2024-09-06 05:16:53', NULL, '2024-09-06 05:16:53'),
(255, 13, 'Clicked on DIV (table-responsive--sm table-responsive) at 9/6/2024, 1:16:53 PM', '2024-09-06 05:16:53', '2024-09-06 05:16:53', NULL, '2024-09-06 05:16:53'),
(256, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:16:53 PM', '2024-09-06 05:16:54', '2024-09-06 05:16:54', NULL, '2024-09-06 05:16:54'),
(257, 13, 'Clicked on TD () at 9/6/2024, 1:16:59 PM', '2024-09-06 05:17:00', '2024-09-06 05:17:00', NULL, '2024-09-06 05:17:00'),
(258, 13, 'Clicked on TD () at 9/6/2024, 1:17:22 PM', '2024-09-06 05:17:23', '2024-09-06 05:17:23', NULL, '2024-09-06 05:17:23'),
(259, 13, 'Viewed rubix details page', '2024-09-06 05:18:01', '2024-09-06 05:18:01', NULL, '2024-09-06 05:18:01'),
(260, 13, 'Page loaded or refreshed', '2024-09-06 05:18:03', '2024-09-06 05:18:03', NULL, '2024-09-06 05:18:03'),
(261, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:18:04 PM', '2024-09-06 05:18:04', '2024-09-06 05:18:04', NULL, '2024-09-06 05:18:04'),
(262, 13, 'Viewed rubix details page', '2024-09-06 05:18:31', '2024-09-06 05:18:31', NULL, '2024-09-06 05:18:31'),
(263, 13, 'Page loaded or refreshed', '2024-09-06 05:18:34', '2024-09-06 05:18:34', NULL, '2024-09-06 05:18:34'),
(264, 13, 'Clicked on DIV (table-responsive--sm table-responsive) at 9/6/2024, 1:18:34 PM', '2024-09-06 05:18:35', '2024-09-06 05:18:35', NULL, '2024-09-06 05:18:35'),
(265, 13, 'Clicked on BUTTON (btn btn-primary) at 9/6/2024, 1:18:35 PM', '2024-09-06 05:18:35', '2024-09-06 05:18:35', NULL, '2024-09-06 05:18:35'),
(266, 13, 'Clicked on TD () at 9/6/2024, 1:18:43 PM', '2024-09-06 05:18:44', '2024-09-06 05:18:44', NULL, '2024-09-06 05:18:44'),
(267, 13, 'Clicked on BUTTON (btn btn-secondary) at 9/6/2024, 1:18:45 PM', '2024-09-06 05:18:46', '2024-09-06 05:18:46', NULL, '2024-09-06 05:18:46'),
(268, 13, 'Viewed rubix details page', '2024-09-06 05:21:33', '2024-09-06 05:21:33', NULL, '2024-09-06 05:21:33'),
(269, 33, 'Viewed rubix details page', '2024-09-06 06:19:59', '2024-09-06 06:19:59', NULL, '2024-09-06 06:19:59'),
(270, 33, 'Page loaded or refreshed', '2024-09-06 06:20:02', '2024-09-06 06:20:02', NULL, '2024-09-06 06:20:02'),
(271, 33, 'Clicked on SPAN (menu-title) at 9/6/2024, 2:20:04 PM', '2024-09-06 06:20:04', '2024-09-06 06:20:04', NULL, '2024-09-06 06:20:04'),
(272, 40, 'Viewed rubix details page', '2024-09-09 00:33:51', '2024-09-09 00:33:51', NULL, '2024-09-09 00:33:51'),
(273, 40, 'Page loaded or refreshed', '2024-09-09 00:33:53', '2024-09-09 00:33:53', NULL, '2024-09-09 00:33:53'),
(274, 40, 'Clicked on A (nav-link ) at 9/9/2024, 8:34:10 AM', '2024-09-09 00:34:10', '2024-09-09 00:34:10', NULL, '2024-09-09 00:34:10'),
(275, 40, 'Page loaded or refreshed', '2024-09-09 00:55:04', '2024-09-09 00:55:04', NULL, '2024-09-09 00:55:04'),
(276, 40, 'Viewed rubix details page', '2024-09-09 01:02:45', '2024-09-09 01:02:45', NULL, '2024-09-09 01:02:45'),
(277, 40, 'Page loaded or refreshed', '2024-09-09 01:02:47', '2024-09-09 01:02:47', NULL, '2024-09-09 01:02:47'),
(278, 40, 'Clicked on A (nav-link ) at 9/9/2024, 9:09:01 AM', '2024-09-09 01:09:02', '2024-09-09 01:09:02', NULL, '2024-09-09 01:09:02'),
(279, 40, 'Viewed rubix details page', '2024-09-09 01:09:02', '2024-09-09 01:09:02', NULL, '2024-09-09 01:09:02'),
(280, 40, 'Page loaded or refreshed', '2024-09-09 01:09:05', '2024-09-09 01:09:05', NULL, '2024-09-09 01:09:05'),
(281, 40, 'Viewed rubix details page', '2024-09-09 01:11:09', '2024-09-09 01:11:09', NULL, '2024-09-09 01:11:09'),
(282, 40, 'Page loaded or refreshed', '2024-09-09 01:11:12', '2024-09-09 01:11:12', NULL, '2024-09-09 01:11:12'),
(283, 40, 'Viewed rubix details page', '2024-09-09 01:11:19', '2024-09-09 01:11:19', NULL, '2024-09-09 01:11:19'),
(284, 40, 'Page loaded or refreshed', '2024-09-09 01:11:22', '2024-09-09 01:11:22', NULL, '2024-09-09 01:11:22'),
(285, 40, 'Clicked on SPAN (menu-title) at 9/9/2024, 9:13:51 AM', '2024-09-09 01:13:51', '2024-09-09 01:13:51', NULL, '2024-09-09 01:13:51'),
(286, 31, 'Viewed rubix details page', '2024-09-09 03:27:43', '2024-09-09 03:27:43', NULL, '2024-09-09 03:27:43'),
(287, 31, 'Page loaded or refreshed', '2024-09-09 03:27:48', '2024-09-09 03:27:48', NULL, '2024-09-09 03:27:48'),
(288, 31, 'Clicked on A (nav-link ) at 9/9/2024, 11:32:15 AM', '2024-09-09 03:32:16', '2024-09-09 03:32:16', NULL, '2024-09-09 03:32:16'),
(289, 31, 'Viewed rubix details page', '2024-09-09 03:32:16', '2024-09-09 03:32:16', NULL, '2024-09-09 03:32:16'),
(290, 31, 'Page loaded or refreshed', '2024-09-09 03:32:18', '2024-09-09 03:32:18', NULL, '2024-09-09 03:32:18'),
(291, 31, 'Viewed rubix details page', '2024-09-09 07:30:56', '2024-09-09 07:30:56', NULL, '2024-09-09 07:30:56'),
(292, 31, 'Page loaded or refreshed', '2024-09-09 07:30:59', '2024-09-09 07:30:59', NULL, '2024-09-09 07:30:59'),
(293, 31, 'Clicked on I (fas fa-eye) at 9/9/2024, 3:31:02 PM', '2024-09-09 07:31:02', '2024-09-09 07:31:02', NULL, '2024-09-09 07:31:02'),
(294, 31, 'Clicked on DIV (modal fade) at 9/9/2024, 3:31:13 PM', '2024-09-09 07:31:14', '2024-09-09 07:31:14', NULL, '2024-09-09 07:31:14'),
(295, 31, 'Clicked on BUTTON (btn btn-info) at 9/9/2024, 3:31:15 PM', '2024-09-09 07:31:15', '2024-09-09 07:31:15', NULL, '2024-09-09 07:31:15'),
(296, 31, 'Viewed rubix details page', '2024-09-09 07:33:04', '2024-09-09 07:33:04', NULL, '2024-09-09 07:33:04'),
(297, 31, 'Page loaded or refreshed', '2024-09-09 07:33:07', '2024-09-09 07:33:07', NULL, '2024-09-09 07:33:07'),
(298, 31, 'Clicked on I (fas fa-eye) at 9/9/2024, 3:33:08 PM', '2024-09-09 07:33:09', '2024-09-09 07:33:09', NULL, '2024-09-09 07:33:09'),
(299, 31, 'Clicked on DIV (modal fade) at 9/9/2024, 3:33:18 PM', '2024-09-09 07:33:18', '2024-09-09 07:33:18', NULL, '2024-09-09 07:33:18'),
(300, 31, 'Clicked on I (fas fa-eye) at 9/9/2024, 3:33:20 PM', '2024-09-09 07:33:20', '2024-09-09 07:33:20', NULL, '2024-09-09 07:33:20'),
(301, 31, 'Clicked on DIV (modal fade) at 9/9/2024, 3:34:22 PM', '2024-09-09 07:34:22', '2024-09-09 07:34:22', NULL, '2024-09-09 07:34:22'),
(302, 31, 'Viewed rubix details page', '2024-09-09 07:34:58', '2024-09-09 07:34:58', NULL, '2024-09-09 07:34:58'),
(303, 31, 'Page loaded or refreshed', '2024-09-09 07:35:01', '2024-09-09 07:35:01', NULL, '2024-09-09 07:35:01'),
(304, 31, 'Clicked on BUTTON (btn btn-success) at 9/9/2024, 3:35:09 PM', '2024-09-09 07:35:10', '2024-09-09 07:35:10', NULL, '2024-09-09 07:35:10'),
(305, 31, 'Viewed rubix details page', '2024-09-09 07:35:16', '2024-09-09 07:35:16', NULL, '2024-09-09 07:35:16'),
(306, 31, 'Page loaded or refreshed', '2024-09-09 07:35:18', '2024-09-09 07:35:18', NULL, '2024-09-09 07:35:18'),
(307, 31, 'Clicked on SPAN (menu-title) at 9/9/2024, 3:36:12 PM', '2024-09-09 07:36:13', '2024-09-09 07:36:13', NULL, '2024-09-09 07:36:13'),
(308, 31, 'Viewed rubix details page', '2024-09-09 08:38:44', '2024-09-09 08:38:44', NULL, '2024-09-09 08:38:44'),
(309, 31, 'Page loaded or refreshed', '2024-09-09 08:38:47', '2024-09-09 08:38:47', NULL, '2024-09-09 08:38:47'),
(310, 31, 'Clicked on BUTTON (btn btn-info) at 9/9/2024, 4:38:50 PM', '2024-09-09 08:38:50', '2024-09-09 08:38:50', NULL, '2024-09-09 08:38:50'),
(311, 33, 'Viewed rubix details page', '2024-09-10 03:28:01', '2024-09-10 03:28:01', NULL, '2024-09-10 03:28:01'),
(312, 33, 'Page loaded or refreshed', '2024-09-10 03:28:04', '2024-09-10 03:28:04', NULL, '2024-09-10 03:28:04'),
(313, 33, 'Clicked on BUTTON (btn btn-primary) at 9/10/2024, 11:28:04 AM', '2024-09-10 03:28:05', '2024-09-10 03:28:05', NULL, '2024-09-10 03:28:05'),
(314, 33, 'Clicked on BUTTON (btn btn-secondary) at 9/10/2024, 11:28:07 AM', '2024-09-10 03:28:08', '2024-09-10 03:28:08', NULL, '2024-09-10 03:28:08'),
(315, 33, 'Clicked on TD () at 9/10/2024, 11:28:08 AM', '2024-09-10 03:28:08', '2024-09-10 03:28:08', NULL, '2024-09-10 03:28:08'),
(316, 33, 'Clicked on A () at 9/10/2024, 11:28:09 AM', '2024-09-10 03:28:09', '2024-09-10 03:28:09', NULL, '2024-09-10 03:28:09'),
(317, 33, 'Clicked on BUTTON (btn btn-primary) at 9/10/2024, 11:28:11 AM', '2024-09-10 03:28:11', '2024-09-10 03:28:11', NULL, '2024-09-10 03:28:11'),
(318, 33, 'Viewed rubix details page', '2024-09-10 03:28:13', '2024-09-10 03:28:13', NULL, '2024-09-10 03:28:13'),
(319, 33, 'Page loaded or refreshed', '2024-09-10 03:28:15', '2024-09-10 03:28:15', NULL, '2024-09-10 03:28:15'),
(320, 33, 'Clicked on BUTTON (btn btn-primary) at 9/10/2024, 11:35:01 AM', '2024-09-10 03:35:06', '2024-09-10 03:35:06', NULL, '2024-09-10 03:35:06'),
(321, 33, 'Clicked on DIV (modal fade) at 9/10/2024, 11:35:02 AM', '2024-09-10 03:35:07', '2024-09-10 03:35:07', NULL, '2024-09-10 03:35:07'),
(322, 33, 'Clicked on SPAN (menu-title) at 9/10/2024, 11:35:51 AM', '2024-09-10 03:35:51', '2024-09-10 03:35:51', NULL, '2024-09-10 03:35:51'),
(323, 33, 'Viewed rubix details page', '2024-09-10 08:03:28', '2024-09-10 08:03:28', NULL, '2024-09-10 08:03:28'),
(324, 33, 'Page loaded or refreshed', '2024-09-10 08:03:31', '2024-09-10 08:03:31', NULL, '2024-09-10 08:03:31'),
(325, 33, 'Clicked on BUTTON (btn btn-info) at 9/10/2024, 4:03:40 PM', '2024-09-10 08:03:40', '2024-09-10 08:03:40', NULL, '2024-09-10 08:03:40'),
(326, 33, 'Clicked on DIV () at 9/10/2024, 4:03:44 PM', '2024-09-10 08:03:44', '2024-09-10 08:03:44', NULL, '2024-09-10 08:03:44'),
(327, 33, 'Viewed rubix details page', '2024-09-10 08:10:13', '2024-09-10 08:10:13', NULL, '2024-09-10 08:10:13'),
(328, 33, 'Page loaded or refreshed', '2024-09-10 08:10:16', '2024-09-10 08:10:16', NULL, '2024-09-10 08:10:16'),
(329, 33, 'Clicked on I (fas fa-eye) at 9/10/2024, 4:10:21 PM', '2024-09-10 08:10:21', '2024-09-10 08:10:21', NULL, '2024-09-10 08:10:21'),
(330, 33, 'Clicked on DIV (modal fade) at 9/10/2024, 4:10:25 PM', '2024-09-10 08:10:25', '2024-09-10 08:10:25', NULL, '2024-09-10 08:10:25'),
(331, 33, 'Viewed rubix details page', '2024-09-10 08:11:08', '2024-09-10 08:11:08', NULL, '2024-09-10 08:11:08'),
(332, 33, 'Page loaded or refreshed', '2024-09-10 08:11:12', '2024-09-10 08:11:12', NULL, '2024-09-10 08:11:12'),
(333, 33, 'Clicked on FORM () at 9/10/2024, 4:11:16 PM', '2024-09-10 08:11:17', '2024-09-10 08:11:17', NULL, '2024-09-10 08:11:17'),
(334, 33, 'Clicked on FORM () at 9/10/2024, 4:12:00 PM', '2024-09-10 08:12:00', '2024-09-10 08:12:00', NULL, '2024-09-10 08:12:00'),
(335, 33, 'Clicked on A (paginate_button ) at 9/10/2024, 4:12:07 PM', '2024-09-10 08:12:07', '2024-09-10 08:12:07', NULL, '2024-09-10 08:12:07'),
(336, 33, 'Clicked on BUTTON (btn btn-success) at 9/10/2024, 4:12:11 PM', '2024-09-10 08:12:11', '2024-09-10 08:12:11', NULL, '2024-09-10 08:12:11'),
(337, 33, 'Viewed rubix details page', '2024-09-10 08:12:18', '2024-09-10 08:12:18', NULL, '2024-09-10 08:12:18'),
(338, 33, 'Page loaded or refreshed', '2024-09-10 08:12:20', '2024-09-10 08:12:20', NULL, '2024-09-10 08:12:20'),
(339, 33, 'Clicked on A (paginate_button ) at 9/10/2024, 4:12:26 PM', '2024-09-10 08:12:27', '2024-09-10 08:12:27', NULL, '2024-09-10 08:12:27'),
(340, 33, 'Clicked on TD () at 9/10/2024, 4:12:29 PM', '2024-09-10 08:12:30', '2024-09-10 08:12:30', NULL, '2024-09-10 08:12:30'),
(341, 33, 'Clicked on BUTTON (btn btn-primary) at 9/10/2024, 4:13:03 PM', '2024-09-10 08:13:03', '2024-09-10 08:13:03', NULL, '2024-09-10 08:13:03'),
(342, 33, 'Clicked on BUTTON (btn btn-secondary) at 9/10/2024, 4:13:08 PM', '2024-09-10 08:13:08', '2024-09-10 08:13:08', NULL, '2024-09-10 08:13:08'),
(343, 33, 'Clicked on DIV (body-wrapper) at 9/10/2024, 4:13:11 PM', '2024-09-10 08:13:11', '2024-09-10 08:13:11', NULL, '2024-09-10 08:13:11'),
(344, 33, 'Clicked on DIV (d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center) at 9/10/2024, 4:13:11 PM', '2024-09-10 08:13:12', '2024-09-10 08:13:12', NULL, '2024-09-10 08:13:12'),
(345, 33, 'Clicked on DIV (body-wrapper) at 9/10/2024, 4:13:13 PM', '2024-09-10 08:13:13', '2024-09-10 08:13:13', NULL, '2024-09-10 08:13:13'),
(346, 33, 'Clicked on INPUT (form-control) at 9/10/2024, 4:13:17 PM', '2024-09-10 08:13:18', '2024-09-10 08:13:18', NULL, '2024-09-10 08:13:18'),
(347, 33, 'Clicked on DIV (body-wrapper) at 9/10/2024, 4:13:18 PM', '2024-09-10 08:13:19', '2024-09-10 08:13:19', NULL, '2024-09-10 08:13:19'),
(348, 33, 'Clicked on DIV (container mt-4 pb-3) at 9/10/2024, 4:13:21 PM', '2024-09-10 08:13:22', '2024-09-10 08:13:22', NULL, '2024-09-10 08:13:22'),
(349, 33, 'Clicked on INPUT () at 9/10/2024, 4:13:22 PM', '2024-09-10 08:13:22', '2024-09-10 08:13:22', NULL, '2024-09-10 08:13:22'),
(350, 33, 'Clicked on SPAN (menu-title) at 9/10/2024, 4:13:34 PM', '2024-09-10 08:13:34', '2024-09-10 08:13:34', NULL, '2024-09-10 08:13:34'),
(351, 13, 'Viewed Salary page', '2024-09-11 00:04:02', '2024-09-11 00:04:02', NULL, '2024-09-11 00:04:02'),
(352, 13, 'Viewed Salary page', '2024-09-11 00:04:19', '2024-09-11 00:04:19', NULL, '2024-09-11 00:04:19'),
(353, 13, 'Viewed Salary page', '2024-09-11 00:05:28', '2024-09-11 00:05:28', NULL, '2024-09-11 00:05:28'),
(354, 13, 'Viewed Salary page', '2024-09-11 00:05:51', '2024-09-11 00:05:51', NULL, '2024-09-11 00:05:51'),
(355, 13, 'Viewed Salary page', '2024-09-11 00:07:32', '2024-09-11 00:07:32', NULL, '2024-09-11 00:07:32'),
(356, 13, 'Viewed Salary page', '2024-09-11 00:09:02', '2024-09-11 00:09:02', NULL, '2024-09-11 00:09:02'),
(357, 13, 'Viewed Salary page', '2024-09-11 00:09:18', '2024-09-11 00:09:18', NULL, '2024-09-11 00:09:18'),
(358, 13, 'Viewed Salary page', '2024-09-11 00:09:36', '2024-09-11 00:09:36', NULL, '2024-09-11 00:09:36'),
(359, 13, 'Viewed Salary page', '2024-09-11 00:12:40', '2024-09-11 00:12:40', NULL, '2024-09-11 00:12:40'),
(360, 13, 'Viewed Salary page', '2024-09-11 00:14:27', '2024-09-11 00:14:27', NULL, '2024-09-11 00:14:27'),
(361, 13, 'Viewed Salary page', '2024-09-11 00:15:01', '2024-09-11 00:15:01', NULL, '2024-09-11 00:15:01'),
(362, 13, 'Viewed Salary page', '2024-09-11 00:15:37', '2024-09-11 00:15:37', NULL, '2024-09-11 00:15:37'),
(363, 13, 'Viewed Salary page', '2024-09-11 00:16:34', '2024-09-11 00:16:34', NULL, '2024-09-11 00:16:34'),
(364, 13, 'Viewed Salary page', '2024-09-11 00:17:18', '2024-09-11 00:17:18', NULL, '2024-09-11 00:17:18'),
(365, 13, 'Viewed Salary page', '2024-09-11 00:23:59', '2024-09-11 00:23:59', NULL, '2024-09-11 00:23:59'),
(366, 13, 'Viewed rubix details page', '2024-09-11 00:27:34', '2024-09-11 00:27:34', NULL, '2024-09-11 00:27:34'),
(367, 13, 'Page loaded or refreshed', '2024-09-11 00:27:38', '2024-09-11 00:27:38', NULL, '2024-09-11 00:27:38'),
(368, 13, 'Clicked on BUTTON (btn btn-info) at 9/11/2024, 8:27:40 AM', '2024-09-11 00:27:40', '2024-09-11 00:27:40', NULL, '2024-09-11 00:27:40'),
(369, 13, 'Clicked on LI () at 9/11/2024, 8:28:10 AM', '2024-09-11 00:28:11', '2024-09-11 00:28:11', NULL, '2024-09-11 00:28:11'),
(370, 13, 'Clicked on BUTTON (btn btn-secondary) at 9/11/2024, 8:28:44 AM', '2024-09-11 00:28:44', '2024-09-11 00:28:44', NULL, '2024-09-11 00:28:44'),
(371, 13, 'Clicked on DIV (body-wrapper) at 9/11/2024, 8:28:48 AM', '2024-09-11 00:28:48', '2024-09-11 00:28:48', NULL, '2024-09-11 00:28:48'),
(372, 13, 'Clicked on I (fas fa-eye) at 9/11/2024, 8:29:02 AM', '2024-09-11 00:29:02', '2024-09-11 00:29:02', NULL, '2024-09-11 00:29:02'),
(373, 13, 'Clicked on SPAN (countdown-timer) at 9/11/2024, 8:29:05 AM', '2024-09-11 00:29:05', '2024-09-11 00:29:05', NULL, '2024-09-11 00:29:05'),
(374, 13, 'Clicked on SPAN () at 9/11/2024, 8:29:05 AM', '2024-09-11 00:29:06', '2024-09-11 00:29:06', NULL, '2024-09-11 00:29:06'),
(375, 13, 'Clicked on SPAN () at 9/11/2024, 8:29:06 AM', '2024-09-11 00:29:06', '2024-09-11 00:29:06', NULL, '2024-09-11 00:29:06'),
(376, 13, 'Clicked on TD (text-wrap) at 9/11/2024, 8:29:31 AM', '2024-09-11 00:29:32', '2024-09-11 00:29:32', NULL, '2024-09-11 00:29:32'),
(377, 13, 'Clicked on STRONG () at 9/11/2024, 8:29:34 AM', '2024-09-11 00:29:34', '2024-09-11 00:29:34', NULL, '2024-09-11 00:29:34'),
(378, 13, 'Clicked on STRONG () at 9/11/2024, 8:29:34 AM', '2024-09-11 00:29:34', '2024-09-11 00:29:34', NULL, '2024-09-11 00:29:34'),
(379, 13, 'Clicked on STRONG () at 9/11/2024, 8:29:34 AM', '2024-09-11 00:29:35', '2024-09-11 00:29:35', NULL, '2024-09-11 00:29:35'),
(380, 13, 'Clicked on STRONG () at 9/11/2024, 8:29:35 AM', '2024-09-11 00:29:35', '2024-09-11 00:29:35', NULL, '2024-09-11 00:29:35'),
(381, 13, 'Clicked on STRONG () at 9/11/2024, 8:29:35 AM', '2024-09-11 00:29:36', '2024-09-11 00:29:36', NULL, '2024-09-11 00:29:36'),
(382, 13, 'Clicked on LI () at 9/11/2024, 8:29:36 AM', '2024-09-11 00:29:36', '2024-09-11 00:29:36', NULL, '2024-09-11 00:29:36'),
(383, 13, 'Clicked on LI () at 9/11/2024, 8:29:36 AM', '2024-09-11 00:29:36', '2024-09-11 00:29:36', NULL, '2024-09-11 00:29:36'),
(384, 13, 'Clicked on LI () at 9/11/2024, 8:29:36 AM', '2024-09-11 00:29:37', '2024-09-11 00:29:37', NULL, '2024-09-11 00:29:37'),
(385, 13, 'Clicked on STRONG () at 9/11/2024, 8:29:40 AM', '2024-09-11 00:29:40', '2024-09-11 00:29:40', NULL, '2024-09-11 00:29:40'),
(386, 13, 'Clicked on STRONG () at 9/11/2024, 8:29:40 AM', '2024-09-11 00:29:40', '2024-09-11 00:29:40', NULL, '2024-09-11 00:29:40'),
(387, 13, 'Clicked on LI () at 9/11/2024, 8:29:40 AM', '2024-09-11 00:29:40', '2024-09-11 00:29:40', NULL, '2024-09-11 00:29:40'),
(388, 13, 'Clicked on BUTTON (btn btn-secondary) at 9/11/2024, 8:30:22 AM', '2024-09-11 00:30:22', '2024-09-11 00:30:22', NULL, '2024-09-11 00:30:22'),
(389, 13, 'Clicked on SPAN (menu-title) at 9/11/2024, 8:34:38 AM', '2024-09-11 00:34:38', '2024-09-11 00:34:38', NULL, '2024-09-11 00:34:38'),
(390, 13, 'Viewed Salary page', '2024-09-11 00:45:00', '2024-09-11 00:45:00', NULL, '2024-09-11 00:45:00'),
(391, 13, 'Viewed rubix details page', '2024-09-11 00:49:35', '2024-09-11 00:49:35', NULL, '2024-09-11 00:49:35'),
(392, 13, 'Page loaded or refreshed', '2024-09-11 00:49:38', '2024-09-11 00:49:38', NULL, '2024-09-11 00:49:38'),
(393, 13, 'Clicked on DIV (dataTables_wrapper no-footer) at 9/11/2024, 8:49:40 AM', '2024-09-11 00:49:40', '2024-09-11 00:49:40', NULL, '2024-09-11 00:49:40'),
(394, 13, 'Clicked on BUTTON (btn btn-primary) at 9/11/2024, 8:50:06 AM', '2024-09-11 00:50:06', '2024-09-11 00:50:06', NULL, '2024-09-11 00:50:06'),
(395, 13, 'Clicked on TD () at 9/11/2024, 8:50:25 AM', '2024-09-11 00:50:25', '2024-09-11 00:50:25', NULL, '2024-09-11 00:50:25'),
(396, 13, 'Clicked on TD () at 9/11/2024, 8:50:26 AM', '2024-09-11 00:50:26', '2024-09-11 00:50:26', NULL, '2024-09-11 00:50:26'),
(397, 13, 'Clicked on TD () at 9/11/2024, 8:50:26 AM', '2024-09-11 00:50:26', '2024-09-11 00:50:26', NULL, '2024-09-11 00:50:26'),
(398, 13, 'Clicked on TD () at 9/11/2024, 8:50:26 AM', '2024-09-11 00:50:27', '2024-09-11 00:50:27', NULL, '2024-09-11 00:50:27'),
(399, 13, 'Clicked on TD () at 9/11/2024, 8:50:27 AM', '2024-09-11 00:50:27', '2024-09-11 00:50:27', NULL, '2024-09-11 00:50:27'),
(400, 13, 'Clicked on TD () at 9/11/2024, 8:50:27 AM', '2024-09-11 00:50:27', '2024-09-11 00:50:27', NULL, '2024-09-11 00:50:27'),
(401, 13, 'Clicked on TD () at 9/11/2024, 8:50:27 AM', '2024-09-11 00:50:28', '2024-09-11 00:50:28', NULL, '2024-09-11 00:50:28'),
(402, 13, 'Clicked on TD () at 9/11/2024, 8:50:28 AM', '2024-09-11 00:50:28', '2024-09-11 00:50:28', NULL, '2024-09-11 00:50:28'),
(403, 13, 'Clicked on TD () at 9/11/2024, 8:50:28 AM', '2024-09-11 00:50:28', '2024-09-11 00:50:28', NULL, '2024-09-11 00:50:28'),
(404, 13, 'Clicked on TD () at 9/11/2024, 8:50:29 AM', '2024-09-11 00:50:29', '2024-09-11 00:50:29', NULL, '2024-09-11 00:50:29'),
(405, 13, 'Clicked on TD () at 9/11/2024, 8:50:29 AM', '2024-09-11 00:50:29', '2024-09-11 00:50:29', NULL, '2024-09-11 00:50:29'),
(406, 13, 'Clicked on TD () at 9/11/2024, 8:50:30 AM', '2024-09-11 00:50:30', '2024-09-11 00:50:30', NULL, '2024-09-11 00:50:30'),
(407, 13, 'Clicked on DIV (modal fade) at 9/11/2024, 8:50:31 AM', '2024-09-11 00:50:32', '2024-09-11 00:50:32', NULL, '2024-09-11 00:50:32'),
(408, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 8:50:33 AM', '2024-09-11 00:50:33', '2024-09-11 00:50:33', NULL, '2024-09-11 00:50:33'),
(409, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 8:50:33 AM', '2024-09-11 00:50:33', '2024-09-11 00:50:33', NULL, '2024-09-11 00:50:33'),
(410, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 8:50:33 AM', '2024-09-11 00:50:34', '2024-09-11 00:50:34', NULL, '2024-09-11 00:50:34'),
(411, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 8:50:34 AM', '2024-09-11 00:50:34', '2024-09-11 00:50:34', NULL, '2024-09-11 00:50:34'),
(412, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 8:50:34 AM', '2024-09-11 00:50:34', '2024-09-11 00:50:34', NULL, '2024-09-11 00:50:34'),
(413, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 8:50:34 AM', '2024-09-11 00:50:35', '2024-09-11 00:50:35', NULL, '2024-09-11 00:50:35');
INSERT INTO `activity_logs` (`id`, `user_id`, `activity`, `created_at`, `updated_at`, `booking_id`, `logged_in_at`) VALUES
(414, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 8:50:34 AM', '2024-09-11 00:50:35', '2024-09-11 00:50:35', NULL, '2024-09-11 00:50:35'),
(415, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 8:50:35 AM', '2024-09-11 00:50:36', '2024-09-11 00:50:36', NULL, '2024-09-11 00:50:36'),
(416, 13, 'Clicked on TBODY () at 9/11/2024, 8:50:39 AM', '2024-09-11 00:50:40', '2024-09-11 00:50:40', NULL, '2024-09-11 00:50:40'),
(417, 13, 'Clicked on TD () at 9/11/2024, 8:50:43 AM', '2024-09-11 00:50:43', '2024-09-11 00:50:43', NULL, '2024-09-11 00:50:43'),
(418, 13, 'Viewed rubix details page', '2024-09-11 01:07:52', '2024-09-11 01:07:52', NULL, '2024-09-11 01:07:52'),
(419, 13, 'Page loaded or refreshed', '2024-09-11 01:07:54', '2024-09-11 01:07:54', NULL, '2024-09-11 01:07:54'),
(420, 13, 'Clicked on TD () at 9/11/2024, 9:08:03 AM', '2024-09-11 01:08:03', '2024-09-11 01:08:03', NULL, '2024-09-11 01:08:03'),
(421, 13, 'Clicked on TBODY () at 9/11/2024, 9:08:05 AM', '2024-09-11 01:08:05', '2024-09-11 01:08:05', NULL, '2024-09-11 01:08:05'),
(422, 13, 'Clicked on TD () at 9/11/2024, 9:08:08 AM', '2024-09-11 01:08:08', '2024-09-11 01:08:08', NULL, '2024-09-11 01:08:08'),
(423, 13, 'Clicked on INPUT (form-control) at 9/11/2024, 9:08:11 AM', '2024-09-11 01:08:11', '2024-09-11 01:08:11', NULL, '2024-09-11 01:08:11'),
(424, 13, 'Clicked on DIV (container mt-4 pb-3) at 9/11/2024, 9:08:13 AM', '2024-09-11 01:08:13', '2024-09-11 01:08:13', NULL, '2024-09-11 01:08:13'),
(425, 13, 'Clicked on TD () at 9/11/2024, 9:08:23 AM', '2024-09-11 01:08:23', '2024-09-11 01:08:23', NULL, '2024-09-11 01:08:23'),
(426, 13, 'Clicked on TD () at 9/11/2024, 9:08:25 AM', '2024-09-11 01:08:25', '2024-09-11 01:08:25', NULL, '2024-09-11 01:08:25'),
(427, 13, 'Clicked on TD () at 9/11/2024, 9:08:27 AM', '2024-09-11 01:08:28', '2024-09-11 01:08:28', NULL, '2024-09-11 01:08:28'),
(428, 13, 'Clicked on TD () at 9/11/2024, 9:08:28 AM', '2024-09-11 01:08:28', '2024-09-11 01:08:28', NULL, '2024-09-11 01:08:28'),
(429, 13, 'Clicked on TD () at 9/11/2024, 9:09:11 AM', '2024-09-11 01:09:11', '2024-09-11 01:09:11', NULL, '2024-09-11 01:09:11'),
(430, 13, 'Viewed rubix details page', '2024-09-11 01:19:49', '2024-09-11 01:19:49', NULL, '2024-09-11 01:19:49'),
(431, 13, 'Page loaded or refreshed', '2024-09-11 01:19:51', '2024-09-11 01:19:51', NULL, '2024-09-11 01:19:51'),
(432, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:21:42 AM', '2024-09-11 01:21:43', '2024-09-11 01:21:43', NULL, '2024-09-11 01:21:43'),
(433, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:21:43 AM', '2024-09-11 01:21:43', '2024-09-11 01:21:43', NULL, '2024-09-11 01:21:43'),
(434, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:21:43 AM', '2024-09-11 01:21:43', '2024-09-11 01:21:43', NULL, '2024-09-11 01:21:43'),
(435, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:21:45 AM', '2024-09-11 01:21:45', '2024-09-11 01:21:45', NULL, '2024-09-11 01:21:45'),
(436, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:21:45 AM', '2024-09-11 01:21:45', '2024-09-11 01:21:45', NULL, '2024-09-11 01:21:45'),
(437, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:21:47 AM', '2024-09-11 01:21:47', '2024-09-11 01:21:47', NULL, '2024-09-11 01:21:47'),
(438, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:21:47 AM', '2024-09-11 01:21:47', '2024-09-11 01:21:47', NULL, '2024-09-11 01:21:47'),
(439, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:21:58 AM', '2024-09-11 01:21:58', '2024-09-11 01:21:58', NULL, '2024-09-11 01:21:58'),
(440, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:21:58 AM', '2024-09-11 01:21:59', '2024-09-11 01:21:59', NULL, '2024-09-11 01:21:59'),
(441, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:21:58 AM', '2024-09-11 01:21:59', '2024-09-11 01:21:59', NULL, '2024-09-11 01:21:59'),
(442, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:22:17 AM', '2024-09-11 01:22:18', '2024-09-11 01:22:18', NULL, '2024-09-11 01:22:18'),
(443, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:22:21 AM', '2024-09-11 01:22:21', '2024-09-11 01:22:21', NULL, '2024-09-11 01:22:21'),
(444, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:23:05 AM', '2024-09-11 01:23:05', '2024-09-11 01:23:05', NULL, '2024-09-11 01:23:05'),
(445, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:23:06 AM', '2024-09-11 01:23:06', '2024-09-11 01:23:06', NULL, '2024-09-11 01:23:06'),
(446, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:23:14 AM', '2024-09-11 01:23:14', '2024-09-11 01:23:14', NULL, '2024-09-11 01:23:14'),
(447, 13, 'Clicked on TD (sorting_1) at 9/11/2024, 9:23:15 AM', '2024-09-11 01:23:15', '2024-09-11 01:23:15', NULL, '2024-09-11 01:23:15'),
(448, 13, 'Clicked on TD () at 9/11/2024, 9:23:20 AM', '2024-09-11 01:23:20', '2024-09-11 01:23:20', NULL, '2024-09-11 01:23:20'),
(449, 13, 'Clicked on TD () at 9/11/2024, 9:23:30 AM', '2024-09-11 01:23:30', '2024-09-11 01:23:30', NULL, '2024-09-11 01:23:30'),
(450, 13, 'Clicked on TD () at 9/11/2024, 9:23:31 AM', '2024-09-11 01:23:31', '2024-09-11 01:23:31', NULL, '2024-09-11 01:23:31'),
(451, 13, 'Clicked on TD () at 9/11/2024, 9:23:49 AM', '2024-09-11 01:23:49', '2024-09-11 01:23:49', NULL, '2024-09-11 01:23:49'),
(452, 13, 'Clicked on TD () at 9/11/2024, 9:24:31 AM', '2024-09-11 01:24:32', '2024-09-11 01:24:32', NULL, '2024-09-11 01:24:32'),
(453, 13, 'Clicked on A () at 9/11/2024, 9:24:35 AM', '2024-09-11 01:24:35', '2024-09-11 01:24:35', NULL, '2024-09-11 01:24:35'),
(454, 13, 'Clicked on TD () at 9/11/2024, 9:24:44 AM', '2024-09-11 01:24:44', '2024-09-11 01:24:44', NULL, '2024-09-11 01:24:44'),
(455, 13, 'Clicked on TD () at 9/11/2024, 9:24:44 AM', '2024-09-11 01:24:45', '2024-09-11 01:24:45', NULL, '2024-09-11 01:24:45'),
(456, 13, 'Clicked on TD () at 9/11/2024, 9:25:59 AM', '2024-09-11 01:25:59', '2024-09-11 01:25:59', NULL, '2024-09-11 01:25:59'),
(457, 13, 'Clicked on TD () at 9/11/2024, 9:26:00 AM', '2024-09-11 01:26:00', '2024-09-11 01:26:00', NULL, '2024-09-11 01:26:00'),
(458, 13, 'Clicked on TD () at 9/11/2024, 9:26:00 AM', '2024-09-11 01:26:00', '2024-09-11 01:26:00', NULL, '2024-09-11 01:26:00'),
(459, 13, 'Clicked on TD () at 9/11/2024, 9:26:00 AM', '2024-09-11 01:26:00', '2024-09-11 01:26:00', NULL, '2024-09-11 01:26:00'),
(460, 13, 'Clicked on TD () at 9/11/2024, 9:26:00 AM', '2024-09-11 01:26:01', '2024-09-11 01:26:01', NULL, '2024-09-11 01:26:01'),
(461, 13, 'Clicked on TD () at 9/11/2024, 9:26:01 AM', '2024-09-11 01:26:01', '2024-09-11 01:26:01', NULL, '2024-09-11 01:26:01'),
(462, 13, 'Clicked on TD () at 9/11/2024, 9:26:01 AM', '2024-09-11 01:26:01', '2024-09-11 01:26:01', NULL, '2024-09-11 01:26:01'),
(463, 13, 'Clicked on TD () at 9/11/2024, 9:26:01 AM', '2024-09-11 01:26:02', '2024-09-11 01:26:02', NULL, '2024-09-11 01:26:02'),
(464, 13, 'Clicked on TD () at 9/11/2024, 9:26:03 AM', '2024-09-11 01:26:03', '2024-09-11 01:26:03', NULL, '2024-09-11 01:26:03'),
(465, 13, 'Clicked on TD () at 9/11/2024, 9:26:04 AM', '2024-09-11 01:26:04', '2024-09-11 01:26:04', NULL, '2024-09-11 01:26:04'),
(466, 13, 'Clicked on FORM () at 9/11/2024, 9:26:06 AM', '2024-09-11 01:26:06', '2024-09-11 01:26:06', NULL, '2024-09-11 01:26:06'),
(467, 13, 'Clicked on FORM () at 9/11/2024, 9:26:06 AM', '2024-09-11 01:26:06', '2024-09-11 01:26:06', NULL, '2024-09-11 01:26:06'),
(468, 13, 'Clicked on FORM () at 9/11/2024, 9:26:06 AM', '2024-09-11 01:26:06', '2024-09-11 01:26:06', NULL, '2024-09-11 01:26:06'),
(469, 13, 'Clicked on FORM () at 9/11/2024, 9:26:06 AM', '2024-09-11 01:26:07', '2024-09-11 01:26:07', NULL, '2024-09-11 01:26:07'),
(470, 13, 'Clicked on FORM () at 9/11/2024, 9:26:07 AM', '2024-09-11 01:26:07', '2024-09-11 01:26:07', NULL, '2024-09-11 01:26:07'),
(471, 13, 'Clicked on FORM () at 9/11/2024, 9:26:07 AM', '2024-09-11 01:26:08', '2024-09-11 01:26:08', NULL, '2024-09-11 01:26:08'),
(472, 13, 'Clicked on FORM () at 9/11/2024, 9:26:07 AM', '2024-09-11 01:26:08', '2024-09-11 01:26:08', NULL, '2024-09-11 01:26:08'),
(473, 13, 'Clicked on FORM () at 9/11/2024, 9:26:07 AM', '2024-09-11 01:26:08', '2024-09-11 01:26:08', NULL, '2024-09-11 01:26:08'),
(474, 13, 'Clicked on BUTTON (btn btn-primary) at 9/11/2024, 9:26:10 AM', '2024-09-11 01:26:10', '2024-09-11 01:26:10', NULL, '2024-09-11 01:26:10'),
(475, 13, 'Clicked on BUTTON (btn btn-secondary) at 9/11/2024, 9:26:13 AM', '2024-09-11 01:26:13', '2024-09-11 01:26:13', NULL, '2024-09-11 01:26:13'),
(476, 13, 'Clicked on I (fas fa-eye) at 9/11/2024, 9:26:17 AM', '2024-09-11 01:26:17', '2024-09-11 01:26:17', NULL, '2024-09-11 01:26:17'),
(477, 13, 'Clicked on BUTTON (btn-close) at 9/11/2024, 9:26:25 AM', '2024-09-11 01:26:26', '2024-09-11 01:26:26', NULL, '2024-09-11 01:26:26'),
(478, 13, 'Clicked on A (nav-link ) at 9/11/2024, 9:26:32 AM', '2024-09-11 01:26:33', '2024-09-11 01:26:33', NULL, '2024-09-11 01:26:33'),
(479, 13, 'Clicked on A (nav-link ) at 9/11/2024, 9:27:11 AM', '2024-09-11 01:27:11', '2024-09-11 01:27:11', NULL, '2024-09-11 01:27:11'),
(480, 13, 'Viewed Salary page', '2024-09-11 03:15:46', '2024-09-11 03:15:46', NULL, '2024-09-11 03:15:46'),
(481, 13, 'Viewed Salary page', '2024-09-11 03:16:14', '2024-09-11 03:16:14', NULL, '2024-09-11 03:16:14'),
(482, 13, 'Viewed Salary page', '2024-09-11 03:16:39', '2024-09-11 03:16:39', NULL, '2024-09-11 03:16:39'),
(483, 13, 'Viewed Salary page', '2024-09-11 03:16:48', '2024-09-11 03:16:48', NULL, '2024-09-11 03:16:48'),
(484, 13, 'Viewed rubix details page', '2024-09-11 03:23:44', '2024-09-11 03:23:44', NULL, '2024-09-11 03:23:44'),
(485, 13, 'Page loaded or refreshed', '2024-09-11 03:23:48', '2024-09-11 03:23:48', NULL, '2024-09-11 03:23:48'),
(486, 13, 'Clicked on TD () at 9/11/2024, 11:23:50 AM', '2024-09-11 03:23:50', '2024-09-11 03:23:50', NULL, '2024-09-11 03:23:50'),
(487, 13, 'Clicked on BUTTON (btn btn-info) at 9/11/2024, 11:23:50 AM', '2024-09-11 03:23:51', '2024-09-11 03:23:51', NULL, '2024-09-11 03:23:51'),
(488, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/11/2024, 11:24:02 AM', '2024-09-11 03:24:03', '2024-09-11 03:24:03', NULL, '2024-09-11 03:24:03'),
(489, 13, 'Clicked on DIV () at 9/11/2024, 11:24:13 AM', '2024-09-11 03:24:13', '2024-09-11 03:24:13', NULL, '2024-09-11 03:24:13'),
(490, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/11/2024, 11:24:29 AM', '2024-09-11 03:24:30', '2024-09-11 03:24:30', NULL, '2024-09-11 03:24:30'),
(491, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/11/2024, 11:26:36 AM', '2024-09-11 03:26:37', '2024-09-11 03:26:37', NULL, '2024-09-11 03:26:37'),
(492, 13, 'Clicked on IMG () at 9/11/2024, 11:26:38 AM', '2024-09-11 03:26:39', '2024-09-11 03:26:39', NULL, '2024-09-11 03:26:39'),
(493, 13, 'Clicked on AREA () at 9/11/2024, 11:26:39 AM', '2024-09-11 03:26:39', '2024-09-11 03:26:39', NULL, '2024-09-11 03:26:39'),
(494, 13, 'Clicked on AREA () at 9/11/2024, 11:26:39 AM', '2024-09-11 03:26:40', '2024-09-11 03:26:40', NULL, '2024-09-11 03:26:40'),
(495, 13, 'Clicked on AREA () at 9/11/2024, 11:26:39 AM', '2024-09-11 03:26:40', '2024-09-11 03:26:40', NULL, '2024-09-11 03:26:40'),
(496, 13, 'Clicked on DIV () at 9/11/2024, 11:27:16 AM', '2024-09-11 03:27:16', '2024-09-11 03:27:16', NULL, '2024-09-11 03:27:16'),
(497, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/11/2024, 11:27:17 AM', '2024-09-11 03:27:18', '2024-09-11 03:27:18', NULL, '2024-09-11 03:27:18'),
(498, 13, 'Clicked on DIV () at 9/11/2024, 11:28:01 AM', '2024-09-11 03:28:01', '2024-09-11 03:28:01', NULL, '2024-09-11 03:28:01'),
(499, 13, 'Clicked on AREA () at 9/11/2024, 11:28:05 AM', '2024-09-11 03:28:05', '2024-09-11 03:28:05', NULL, '2024-09-11 03:28:05'),
(500, 13, 'Clicked on IMG () at 9/11/2024, 11:28:09 AM', '2024-09-11 03:28:09', '2024-09-11 03:28:09', NULL, '2024-09-11 03:28:09'),
(501, 13, 'Clicked on IMG () at 9/11/2024, 11:28:10 AM', '2024-09-11 03:28:10', '2024-09-11 03:28:10', NULL, '2024-09-11 03:28:10'),
(502, 13, 'Clicked on IMG () at 9/11/2024, 11:28:10 AM', '2024-09-11 03:28:10', '2024-09-11 03:28:10', NULL, '2024-09-11 03:28:10'),
(503, 13, 'Viewed rubix details page', '2024-09-11 03:29:23', '2024-09-11 03:29:23', NULL, '2024-09-11 03:29:23'),
(504, 13, 'Page loaded or refreshed', '2024-09-11 03:29:26', '2024-09-11 03:29:26', NULL, '2024-09-11 03:29:26'),
(505, 13, 'Clicked on BUTTON (btn btn-info) at 9/11/2024, 11:29:28 AM', '2024-09-11 03:29:28', '2024-09-11 03:29:28', NULL, '2024-09-11 03:29:28'),
(506, 13, 'Clicked on DIV (modal-content) at 9/11/2024, 11:29:33 AM', '2024-09-11 03:29:33', '2024-09-11 03:29:33', NULL, '2024-09-11 03:29:33'),
(507, 13, 'Clicked on DIV () at 9/11/2024, 11:29:33 AM', '2024-09-11 03:29:34', '2024-09-11 03:29:34', NULL, '2024-09-11 03:29:34'),
(508, 13, 'Viewed rubix details page', '2024-09-11 03:31:40', '2024-09-11 03:31:40', NULL, '2024-09-11 03:31:40'),
(509, 13, 'Page loaded or refreshed', '2024-09-11 03:31:43', '2024-09-11 03:31:43', NULL, '2024-09-11 03:31:43'),
(510, 13, 'Clicked on BUTTON (btn btn-info) at 9/11/2024, 11:31:45 AM', '2024-09-11 03:31:45', '2024-09-11 03:31:45', NULL, '2024-09-11 03:31:45'),
(511, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/11/2024, 11:31:55 AM', '2024-09-11 03:31:55', '2024-09-11 03:31:55', NULL, '2024-09-11 03:31:55'),
(512, 13, 'Clicked on DIV () at 9/11/2024, 11:32:14 AM', '2024-09-11 03:32:14', '2024-09-11 03:32:14', NULL, '2024-09-11 03:32:14'),
(513, 13, 'Clicked on DIV () at 9/11/2024, 11:32:16 AM', '2024-09-11 03:32:16', '2024-09-11 03:32:16', NULL, '2024-09-11 03:32:16'),
(514, 13, 'Clicked on DIV () at 9/11/2024, 11:32:17 AM', '2024-09-11 03:32:17', '2024-09-11 03:32:17', NULL, '2024-09-11 03:32:17'),
(515, 13, 'Clicked on DIV () at 9/11/2024, 11:32:18 AM', '2024-09-11 03:32:18', '2024-09-11 03:32:18', NULL, '2024-09-11 03:32:18'),
(516, 13, 'Clicked on DIV () at 9/11/2024, 11:32:19 AM', '2024-09-11 03:32:19', '2024-09-11 03:32:19', NULL, '2024-09-11 03:32:19'),
(517, 13, 'Clicked on DIV () at 9/11/2024, 11:32:21 AM', '2024-09-11 03:32:22', '2024-09-11 03:32:22', NULL, '2024-09-11 03:32:22'),
(518, 13, 'Clicked on DIV () at 9/11/2024, 11:32:25 AM', '2024-09-11 03:32:25', '2024-09-11 03:32:25', NULL, '2024-09-11 03:32:25'),
(519, 13, 'Clicked on DIV () at 9/11/2024, 11:32:26 AM', '2024-09-11 03:32:26', '2024-09-11 03:32:26', NULL, '2024-09-11 03:32:26'),
(520, 13, 'Clicked on DIV () at 9/11/2024, 11:32:26 AM', '2024-09-11 03:32:27', '2024-09-11 03:32:27', NULL, '2024-09-11 03:32:27'),
(521, 13, 'Clicked on DIV () at 9/11/2024, 11:32:30 AM', '2024-09-11 03:32:30', '2024-09-11 03:32:30', NULL, '2024-09-11 03:32:30'),
(522, 13, 'Clicked on DIV () at 9/11/2024, 11:32:33 AM', '2024-09-11 03:32:33', '2024-09-11 03:32:33', NULL, '2024-09-11 03:32:33'),
(523, 13, 'Clicked on DIV () at 9/11/2024, 11:32:34 AM', '2024-09-11 03:32:35', '2024-09-11 03:32:35', NULL, '2024-09-11 03:32:35'),
(524, 13, 'Clicked on DIV () at 9/11/2024, 11:38:12 AM', '2024-09-11 03:38:12', '2024-09-11 03:38:12', NULL, '2024-09-11 03:38:12'),
(525, 13, 'Clicked on DIV () at 9/11/2024, 11:38:12 AM', '2024-09-11 03:38:13', '2024-09-11 03:38:13', NULL, '2024-09-11 03:38:13'),
(526, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/11/2024, 11:38:14 AM', '2024-09-11 03:38:15', '2024-09-11 03:38:15', NULL, '2024-09-11 03:38:15'),
(527, 13, 'Clicked on BUTTON (btn btn-secondary) at 9/11/2024, 11:38:18 AM', '2024-09-11 03:38:18', '2024-09-11 03:38:18', NULL, '2024-09-11 03:38:18'),
(528, 13, 'Clicked on A (nav-link ) at 9/11/2024, 11:41:43 AM', '2024-09-11 03:41:44', '2024-09-11 03:41:44', NULL, '2024-09-11 03:41:44'),
(529, 31, 'Viewed rubix details page', '2024-09-12 07:35:36', '2024-09-12 07:35:36', NULL, '2024-09-12 07:35:36'),
(530, 31, 'Page loaded or refreshed', '2024-09-12 07:35:39', '2024-09-12 07:35:39', NULL, '2024-09-12 07:35:39'),
(531, 31, 'Viewed rubix details page', '2024-09-12 07:42:10', '2024-09-12 07:42:10', NULL, '2024-09-12 07:42:10'),
(532, 31, 'Page loaded or refreshed', '2024-09-12 07:42:14', '2024-09-12 07:42:14', NULL, '2024-09-12 07:42:14'),
(533, 31, 'Clicked on TD () at 9/12/2024, 3:42:16 PM', '2024-09-12 07:42:17', '2024-09-12 07:42:17', NULL, '2024-09-12 07:42:17'),
(534, 31, 'Clicked on TD () at 9/12/2024, 3:42:16 PM', '2024-09-12 07:42:17', '2024-09-12 07:42:17', NULL, '2024-09-12 07:42:17'),
(535, 31, 'Clicked on BUTTON (btn btn-primary) at 9/12/2024, 3:56:44 PM', '2024-09-12 07:56:45', '2024-09-12 07:56:45', NULL, '2024-09-12 07:56:45'),
(536, 31, 'Clicked on BUTTON (btn btn-secondary) at 9/12/2024, 3:56:50 PM', '2024-09-12 07:56:50', '2024-09-12 07:56:50', NULL, '2024-09-12 07:56:50'),
(537, 31, 'Viewed rubix details page', '2024-09-12 07:56:51', '2024-09-12 07:56:51', NULL, '2024-09-12 07:56:51'),
(538, 31, 'Page loaded or refreshed', '2024-09-12 07:56:54', '2024-09-12 07:56:54', NULL, '2024-09-12 07:56:54'),
(539, 31, 'Clicked on BUTTON (btn btn-primary) at 9/12/2024, 3:56:54 PM', '2024-09-12 07:56:55', '2024-09-12 07:56:55', NULL, '2024-09-12 07:56:55'),
(540, 31, 'Clicked on BUTTON (btn btn-secondary) at 9/12/2024, 3:57:03 PM', '2024-09-12 07:57:04', '2024-09-12 07:57:04', NULL, '2024-09-12 07:57:04'),
(541, 31, 'Clicked on DIV (modal-footer) at 9/12/2024, 3:57:03 PM', '2024-09-12 07:57:04', '2024-09-12 07:57:04', NULL, '2024-09-12 07:57:04'),
(542, 31, 'Clicked on DIV (dataTables_wrapper no-footer) at 9/12/2024, 3:57:04 PM', '2024-09-12 07:57:05', '2024-09-12 07:57:05', NULL, '2024-09-12 07:57:05'),
(543, 31, 'Clicked on DIV (dataTables_wrapper no-footer) at 9/12/2024, 3:57:05 PM', '2024-09-12 07:57:05', '2024-09-12 07:57:05', NULL, '2024-09-12 07:57:05'),
(544, 31, 'Clicked on DIV (dataTables_wrapper no-footer) at 9/12/2024, 3:57:05 PM', '2024-09-12 07:57:05', '2024-09-12 07:57:05', NULL, '2024-09-12 07:57:05'),
(545, 31, 'Clicked on TD () at 9/12/2024, 3:57:24 PM', '2024-09-12 07:57:24', '2024-09-12 07:57:24', NULL, '2024-09-12 07:57:24'),
(546, 31, 'Clicked on TD () at 9/12/2024, 3:57:24 PM', '2024-09-12 07:57:25', '2024-09-12 07:57:25', NULL, '2024-09-12 07:57:25'),
(547, 31, 'Clicked on TD () at 9/12/2024, 3:57:25 PM', '2024-09-12 07:57:25', '2024-09-12 07:57:25', NULL, '2024-09-12 07:57:25'),
(548, 31, 'Clicked on TD () at 9/12/2024, 3:57:25 PM', '2024-09-12 07:57:25', '2024-09-12 07:57:25', NULL, '2024-09-12 07:57:25'),
(549, 31, 'Clicked on TD () at 9/12/2024, 3:57:26 PM', '2024-09-12 07:57:26', '2024-09-12 07:57:26', NULL, '2024-09-12 07:57:26'),
(550, 31, 'Clicked on TD () at 9/12/2024, 3:57:26 PM', '2024-09-12 07:57:27', '2024-09-12 07:57:27', NULL, '2024-09-12 07:57:27'),
(551, 31, 'Clicked on TD () at 9/12/2024, 3:57:27 PM', '2024-09-12 07:57:27', '2024-09-12 07:57:27', NULL, '2024-09-12 07:57:27'),
(552, 31, 'Clicked on TD () at 9/12/2024, 3:57:27 PM', '2024-09-12 07:57:27', '2024-09-12 07:57:27', NULL, '2024-09-12 07:57:27'),
(553, 31, 'Clicked on TD () at 9/12/2024, 3:57:28 PM', '2024-09-12 07:57:28', '2024-09-12 07:57:28', NULL, '2024-09-12 07:57:28'),
(554, 31, 'Clicked on TD () at 9/12/2024, 3:57:28 PM', '2024-09-12 07:57:29', '2024-09-12 07:57:29', NULL, '2024-09-12 07:57:29'),
(555, 31, 'Clicked on TD () at 9/12/2024, 3:57:29 PM', '2024-09-12 07:57:29', '2024-09-12 07:57:29', NULL, '2024-09-12 07:57:29'),
(556, 31, 'Clicked on TD () at 9/12/2024, 3:57:29 PM', '2024-09-12 07:57:30', '2024-09-12 07:57:30', NULL, '2024-09-12 07:57:30'),
(557, 31, 'Clicked on TD () at 9/12/2024, 3:57:29 PM', '2024-09-12 07:57:30', '2024-09-12 07:57:30', NULL, '2024-09-12 07:57:30'),
(558, 31, 'Clicked on TD () at 9/12/2024, 3:57:30 PM', '2024-09-12 07:57:30', '2024-09-12 07:57:30', NULL, '2024-09-12 07:57:30'),
(559, 31, 'Clicked on TD () at 9/12/2024, 3:57:33 PM', '2024-09-12 07:57:33', '2024-09-12 07:57:33', NULL, '2024-09-12 07:57:33'),
(560, 31, 'Clicked on TD () at 9/12/2024, 3:57:33 PM', '2024-09-12 07:57:33', '2024-09-12 07:57:33', NULL, '2024-09-12 07:57:33'),
(561, 31, 'Clicked on TD () at 9/12/2024, 3:57:33 PM', '2024-09-12 07:57:34', '2024-09-12 07:57:34', NULL, '2024-09-12 07:57:34'),
(562, 31, 'Clicked on TD () at 9/12/2024, 3:57:33 PM', '2024-09-12 07:57:34', '2024-09-12 07:57:34', NULL, '2024-09-12 07:57:34'),
(563, 31, 'Clicked on TD () at 9/12/2024, 3:57:34 PM', '2024-09-12 07:57:34', '2024-09-12 07:57:34', NULL, '2024-09-12 07:57:34'),
(564, 31, 'Clicked on TD () at 9/12/2024, 3:57:37 PM', '2024-09-12 07:57:38', '2024-09-12 07:57:38', NULL, '2024-09-12 07:57:38'),
(565, 31, 'Clicked on TD () at 9/12/2024, 3:57:37 PM', '2024-09-12 07:57:38', '2024-09-12 07:57:38', NULL, '2024-09-12 07:57:38'),
(566, 31, 'Clicked on TD () at 9/12/2024, 3:57:38 PM', '2024-09-12 07:57:38', '2024-09-12 07:57:38', NULL, '2024-09-12 07:57:38'),
(567, 31, 'Clicked on TD () at 9/12/2024, 3:57:39 PM', '2024-09-12 07:57:39', '2024-09-12 07:57:39', NULL, '2024-09-12 07:57:39'),
(568, 31, 'Clicked on TD () at 9/12/2024, 3:57:39 PM', '2024-09-12 07:57:39', '2024-09-12 07:57:39', NULL, '2024-09-12 07:57:39'),
(569, 31, 'Clicked on A (nav-link ) at 9/12/2024, 3:57:42 PM', '2024-09-12 07:57:43', '2024-09-12 07:57:43', NULL, '2024-09-12 07:57:43'),
(570, 13, 'Viewed rubix details page', '2024-09-13 01:12:59', '2024-09-13 01:12:59', NULL, '2024-09-13 01:12:59'),
(571, 13, 'Page loaded or refreshed', '2024-09-13 01:13:03', '2024-09-13 01:13:03', NULL, '2024-09-13 01:13:03'),
(572, 13, 'Clicked on A (paginate_button ) at 9/13/2024, 9:13:10 AM', '2024-09-13 01:13:10', '2024-09-13 01:13:10', NULL, '2024-09-13 01:13:10'),
(573, 13, 'Clicked on I (fas fa-eye) at 9/13/2024, 9:13:12 AM', '2024-09-13 01:13:13', '2024-09-13 01:13:13', NULL, '2024-09-13 01:13:13'),
(574, 13, 'Viewed Salary page', '2024-09-13 01:44:06', '2024-09-13 01:44:06', NULL, '2024-09-13 01:44:06'),
(575, 13, 'Viewed rubix details page', '2024-09-13 02:59:28', '2024-09-13 02:59:28', NULL, '2024-09-13 02:59:28'),
(576, 13, 'Page loaded or refreshed', '2024-09-13 02:59:30', '2024-09-13 02:59:30', NULL, '2024-09-13 02:59:30'),
(577, 13, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 10:59:39 AM', '2024-09-13 02:59:39', '2024-09-13 02:59:39', NULL, '2024-09-13 02:59:39'),
(578, 13, 'Viewed rubix details page', '2024-09-13 03:00:48', '2024-09-13 03:00:48', NULL, '2024-09-13 03:00:48'),
(579, 13, 'Page loaded or refreshed', '2024-09-13 03:00:50', '2024-09-13 03:00:50', NULL, '2024-09-13 03:00:50'),
(580, 13, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 11:00:54 AM', '2024-09-13 03:00:54', '2024-09-13 03:00:54', NULL, '2024-09-13 03:00:54'),
(581, 13, 'Clicked on DIV (col-md-6) at 9/13/2024, 11:00:58 AM', '2024-09-13 03:00:58', '2024-09-13 03:00:58', NULL, '2024-09-13 03:00:58'),
(582, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 11:01:08 AM', '2024-09-13 03:01:09', '2024-09-13 03:01:09', NULL, '2024-09-13 03:01:09'),
(583, 13, 'Clicked on DIV (modal fade) at 9/13/2024, 11:01:27 AM', '2024-09-13 03:01:27', '2024-09-13 03:01:27', NULL, '2024-09-13 03:01:27'),
(584, 13, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 11:01:28 AM', '2024-09-13 03:01:29', '2024-09-13 03:01:29', NULL, '2024-09-13 03:01:29'),
(585, 13, 'Clicked on DIV (modal fade) at 9/13/2024, 11:01:32 AM', '2024-09-13 03:01:32', '2024-09-13 03:01:32', NULL, '2024-09-13 03:01:32'),
(586, 13, 'Viewed rubix details page', '2024-09-13 03:01:33', '2024-09-13 03:01:33', NULL, '2024-09-13 03:01:33'),
(587, 13, 'Page loaded or refreshed', '2024-09-13 03:01:36', '2024-09-13 03:01:36', NULL, '2024-09-13 03:01:36'),
(588, 13, 'Viewed rubix details page', '2024-09-13 03:05:46', '2024-09-13 03:05:46', NULL, '2024-09-13 03:05:46'),
(589, 13, 'Page loaded or refreshed', '2024-09-13 03:05:48', '2024-09-13 03:05:48', NULL, '2024-09-13 03:05:48'),
(590, 13, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 11:05:50 AM', '2024-09-13 03:05:50', '2024-09-13 03:05:50', NULL, '2024-09-13 03:05:50'),
(591, 13, 'Viewed rubix details page', '2024-09-13 03:06:58', '2024-09-13 03:06:58', NULL, '2024-09-13 03:06:58'),
(592, 13, 'Page loaded or refreshed', '2024-09-13 03:07:01', '2024-09-13 03:07:01', NULL, '2024-09-13 03:07:01'),
(593, 13, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 11:07:02 AM', '2024-09-13 03:07:03', '2024-09-13 03:07:03', NULL, '2024-09-13 03:07:03'),
(594, 13, 'Viewed rubix details page', '2024-09-13 03:08:36', '2024-09-13 03:08:36', NULL, '2024-09-13 03:08:36'),
(595, 13, 'Page loaded or refreshed', '2024-09-13 03:08:39', '2024-09-13 03:08:39', NULL, '2024-09-13 03:08:39'),
(596, 13, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 11:08:41 AM', '2024-09-13 03:08:41', '2024-09-13 03:08:41', NULL, '2024-09-13 03:08:41'),
(597, 13, 'Clicked on H2 () at 9/13/2024, 11:08:54 AM', '2024-09-13 03:08:55', '2024-09-13 03:08:55', NULL, '2024-09-13 03:08:55'),
(598, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 11:08:55 AM', '2024-09-13 03:08:56', '2024-09-13 03:08:56', NULL, '2024-09-13 03:08:56'),
(599, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 11:09:06 AM', '2024-09-13 03:09:07', '2024-09-13 03:09:07', NULL, '2024-09-13 03:09:07'),
(600, 13, 'Viewed rubix details page', '2024-09-13 03:10:25', '2024-09-13 03:10:25', NULL, '2024-09-13 03:10:25'),
(601, 13, 'Page loaded or refreshed', '2024-09-13 03:10:28', '2024-09-13 03:10:28', NULL, '2024-09-13 03:10:28'),
(602, 13, 'Clicked on I (fas fa-eye) at 9/13/2024, 11:10:30 AM', '2024-09-13 03:10:30', '2024-09-13 03:10:30', NULL, '2024-09-13 03:10:30'),
(603, 13, 'Clicked on DIV () at 9/13/2024, 11:10:33 AM', '2024-09-13 03:10:33', '2024-09-13 03:10:33', NULL, '2024-09-13 03:10:33'),
(604, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 11:10:34 AM', '2024-09-13 03:10:35', '2024-09-13 03:10:35', NULL, '2024-09-13 03:10:35'),
(605, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 11:11:04 AM', '2024-09-13 03:11:04', '2024-09-13 03:11:04', NULL, '2024-09-13 03:11:04'),
(606, 13, 'Viewed rubix details page', '2024-09-13 03:12:04', '2024-09-13 03:12:04', NULL, '2024-09-13 03:12:04'),
(607, 13, 'Page loaded or refreshed', '2024-09-13 03:12:06', '2024-09-13 03:12:06', NULL, '2024-09-13 03:12:06'),
(608, 13, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 11:12:08 AM', '2024-09-13 03:12:08', '2024-09-13 03:12:08', NULL, '2024-09-13 03:12:08'),
(609, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 11:12:15 AM', '2024-09-13 03:12:15', '2024-09-13 03:12:15', NULL, '2024-09-13 03:12:15'),
(610, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 11:12:30 AM', '2024-09-13 03:12:31', '2024-09-13 03:12:31', NULL, '2024-09-13 03:12:31'),
(611, 13, 'Viewed rubix details page', '2024-09-13 03:13:39', '2024-09-13 03:13:39', NULL, '2024-09-13 03:13:39'),
(612, 13, 'Page loaded or refreshed', '2024-09-13 03:13:42', '2024-09-13 03:13:42', NULL, '2024-09-13 03:13:42'),
(613, 13, 'Clicked on I (fas fa-eye) at 9/13/2024, 11:13:43 AM', '2024-09-13 03:13:44', '2024-09-13 03:13:44', NULL, '2024-09-13 03:13:44'),
(614, 13, 'Clicked on DIV () at 9/13/2024, 11:13:46 AM', '2024-09-13 03:13:46', '2024-09-13 03:13:46', NULL, '2024-09-13 03:13:46'),
(615, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 11:13:48 AM', '2024-09-13 03:13:48', '2024-09-13 03:13:48', NULL, '2024-09-13 03:13:48'),
(616, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 11:14:03 AM', '2024-09-13 03:14:03', '2024-09-13 03:14:03', NULL, '2024-09-13 03:14:03'),
(617, 13, 'Viewed rubix details page', '2024-09-13 03:14:10', '2024-09-13 03:14:10', NULL, '2024-09-13 03:14:10'),
(618, 13, 'Page loaded or refreshed', '2024-09-13 03:14:13', '2024-09-13 03:14:13', NULL, '2024-09-13 03:14:13'),
(619, 13, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 11:14:29 AM', '2024-09-13 03:14:29', '2024-09-13 03:14:29', NULL, '2024-09-13 03:14:29'),
(620, 13, 'Clicked on DIV () at 9/13/2024, 11:14:55 AM', '2024-09-13 03:14:55', '2024-09-13 03:14:55', NULL, '2024-09-13 03:14:55'),
(621, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 11:14:56 AM', '2024-09-13 03:14:57', '2024-09-13 03:14:57', NULL, '2024-09-13 03:14:57'),
(622, 13, 'Clicked on DIV () at 9/13/2024, 11:15:00 AM', '2024-09-13 03:15:00', '2024-09-13 03:15:00', NULL, '2024-09-13 03:15:00'),
(623, 13, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 11:15:03 AM', '2024-09-13 03:15:03', '2024-09-13 03:15:03', NULL, '2024-09-13 03:15:03'),
(624, 13, 'Clicked on BUTTON (btn-close) at 9/13/2024, 11:15:06 AM', '2024-09-13 03:15:07', '2024-09-13 03:15:07', NULL, '2024-09-13 03:15:07'),
(625, 31, 'Viewed rubix details page', '2024-09-13 05:26:58', '2024-09-13 05:26:58', NULL, '2024-09-13 05:26:58'),
(626, 31, 'Page loaded or refreshed', '2024-09-13 05:27:03', '2024-09-13 05:27:03', NULL, '2024-09-13 05:27:03'),
(627, 31, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 1:27:05 PM', '2024-09-13 05:27:05', '2024-09-13 05:27:05', NULL, '2024-09-13 05:27:05'),
(628, 31, 'Clicked on TD (text-wrap) at 9/13/2024, 1:27:10 PM', '2024-09-13 05:27:11', '2024-09-13 05:27:11', NULL, '2024-09-13 05:27:11'),
(629, 31, 'Viewed rubix details page', '2024-09-13 05:27:18', '2024-09-13 05:27:18', NULL, '2024-09-13 05:27:18'),
(630, 31, 'Page loaded or refreshed', '2024-09-13 05:27:22', '2024-09-13 05:27:22', NULL, '2024-09-13 05:27:22'),
(631, 31, 'Clicked on TD () at 9/13/2024, 1:27:25 PM', '2024-09-13 05:27:25', '2024-09-13 05:27:25', NULL, '2024-09-13 05:27:25'),
(632, 31, 'Clicked on I (fas fa-eye) at 9/13/2024, 1:27:36 PM', '2024-09-13 05:27:36', '2024-09-13 05:27:36', NULL, '2024-09-13 05:27:36'),
(633, 31, 'Clicked on BUTTON (btn btn-secondary) at 9/13/2024, 1:28:01 PM', '2024-09-13 05:28:01', '2024-09-13 05:28:01', NULL, '2024-09-13 05:28:01'),
(634, 31, 'Viewed rubix details page', '2024-09-13 05:28:46', '2024-09-13 05:28:46', NULL, '2024-09-13 05:28:46'),
(635, 31, 'Page loaded or refreshed', '2024-09-13 05:28:48', '2024-09-13 05:28:48', NULL, '2024-09-13 05:28:48'),
(636, 31, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 1:28:51 PM', '2024-09-13 05:28:51', '2024-09-13 05:28:51', NULL, '2024-09-13 05:28:51'),
(637, 31, 'Clicked on DIV (modal fade) at 9/13/2024, 1:28:53 PM', '2024-09-13 05:28:54', '2024-09-13 05:28:54', NULL, '2024-09-13 05:28:54'),
(638, 31, 'Clicked on I (fas fa-eye) at 9/13/2024, 1:28:54 PM', '2024-09-13 05:28:54', '2024-09-13 05:28:54', NULL, '2024-09-13 05:28:54'),
(639, 31, 'Clicked on DIV (modal fade) at 9/13/2024, 1:28:57 PM', '2024-09-13 05:28:57', '2024-09-13 05:28:57', NULL, '2024-09-13 05:28:57'),
(640, 31, 'Viewed rubix details page', '2024-09-13 05:29:02', '2024-09-13 05:29:02', NULL, '2024-09-13 05:29:02'),
(641, 31, 'Page loaded or refreshed', '2024-09-13 05:29:05', '2024-09-13 05:29:05', NULL, '2024-09-13 05:29:05'),
(642, 31, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 1:29:06 PM', '2024-09-13 05:29:07', '2024-09-13 05:29:07', NULL, '2024-09-13 05:29:07'),
(643, 31, 'Clicked on DIV (modal fade) at 9/13/2024, 1:29:08 PM', '2024-09-13 05:29:09', '2024-09-13 05:29:09', NULL, '2024-09-13 05:29:09'),
(644, 31, 'Viewed rubix details page', '2024-09-13 08:58:23', '2024-09-13 08:58:23', NULL, '2024-09-13 08:58:23'),
(645, 31, 'Page loaded or refreshed', '2024-09-13 08:58:27', '2024-09-13 08:58:27', NULL, '2024-09-13 08:58:27'),
(646, 31, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 4:58:29 PM', '2024-09-13 08:58:29', '2024-09-13 08:58:29', NULL, '2024-09-13 08:58:29'),
(647, 31, 'Clicked on DIV (gm-style) at 9/13/2024, 4:58:32 PM', '2024-09-13 08:58:33', '2024-09-13 08:58:33', NULL, '2024-09-13 08:58:33'),
(648, 31, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 4:58:34 PM', '2024-09-13 08:58:35', '2024-09-13 08:58:35', NULL, '2024-09-13 08:58:35'),
(649, 31, 'Clicked on DIV () at 9/13/2024, 4:58:56 PM', '2024-09-13 08:58:57', '2024-09-13 08:58:57', NULL, '2024-09-13 08:58:57'),
(650, 31, 'Viewed rubix details page', '2024-09-13 09:00:12', '2024-09-13 09:00:12', NULL, '2024-09-13 09:00:12'),
(651, 31, 'Page loaded or refreshed', '2024-09-13 09:00:16', '2024-09-13 09:00:16', NULL, '2024-09-13 09:00:16'),
(652, 31, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 5:00:18 PM', '2024-09-13 09:00:19', '2024-09-13 09:00:19', NULL, '2024-09-13 09:00:19'),
(653, 31, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 5:00:37 PM', '2024-09-13 09:00:37', '2024-09-13 09:00:37', NULL, '2024-09-13 09:00:37'),
(654, 31, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 5:00:47 PM', '2024-09-13 09:00:48', '2024-09-13 09:00:48', NULL, '2024-09-13 09:00:48'),
(655, 31, 'Viewed rubix details page', '2024-09-13 09:02:04', '2024-09-13 09:02:04', NULL, '2024-09-13 09:02:04'),
(656, 31, 'Page loaded or refreshed', '2024-09-13 09:02:07', '2024-09-13 09:02:07', NULL, '2024-09-13 09:02:07'),
(657, 31, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 5:02:09 PM', '2024-09-13 09:02:09', '2024-09-13 09:02:09', NULL, '2024-09-13 09:02:09'),
(658, 31, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 5:02:13 PM', '2024-09-13 09:02:14', '2024-09-13 09:02:14', NULL, '2024-09-13 09:02:14'),
(659, 31, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 5:02:28 PM', '2024-09-13 09:02:29', '2024-09-13 09:02:29', NULL, '2024-09-13 09:02:29'),
(660, 31, 'Clicked on DIV (modal fade) at 9/13/2024, 5:02:31 PM', '2024-09-13 09:02:32', '2024-09-13 09:02:32', NULL, '2024-09-13 09:02:32'),
(661, 31, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 5:02:42 PM', '2024-09-13 09:02:42', '2024-09-13 09:02:42', NULL, '2024-09-13 09:02:42'),
(662, 31, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 5:03:06 PM', '2024-09-13 09:03:07', '2024-09-13 09:03:07', NULL, '2024-09-13 09:03:07'),
(663, 31, 'Clicked on BUTTON (gm-control-active gm-fullscreen-control) at 9/13/2024, 5:03:24 PM', '2024-09-13 09:03:24', '2024-09-13 09:03:24', NULL, '2024-09-13 09:03:24'),
(664, 31, 'Clicked on BUTTON (btn btn-primary) at 9/13/2024, 5:03:28 PM', '2024-09-13 09:03:29', '2024-09-13 09:03:29', NULL, '2024-09-13 09:03:29'),
(665, 31, 'Clicked on BUTTON (btn-close) at 9/13/2024, 5:03:56 PM', '2024-09-13 09:03:56', '2024-09-13 09:03:56', NULL, '2024-09-13 09:03:56'),
(666, 31, 'Clicked on BUTTON (btn btn-primary) at 9/13/2024, 5:04:02 PM', '2024-09-13 09:04:03', '2024-09-13 09:04:03', NULL, '2024-09-13 09:04:03'),
(667, 31, 'Clicked on BUTTON (btn btn-primary) at 9/13/2024, 5:04:03 PM', '2024-09-13 09:04:04', '2024-09-13 09:04:04', NULL, '2024-09-13 09:04:04'),
(668, 31, 'Clicked on BUTTON (btn btn-secondary) at 9/13/2024, 5:04:29 PM', '2024-09-13 09:04:30', '2024-09-13 09:04:30', NULL, '2024-09-13 09:04:30'),
(669, 13, 'Viewed rubix details page', '2024-09-13 09:11:57', '2024-09-13 09:11:57', NULL, '2024-09-13 09:11:57'),
(670, 13, 'Page loaded or refreshed', '2024-09-13 09:12:01', '2024-09-13 09:12:01', NULL, '2024-09-13 09:12:01'),
(671, 13, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 5:12:13 PM', '2024-09-13 09:12:13', '2024-09-13 09:12:13', NULL, '2024-09-13 09:12:13'),
(672, 13, 'Clicked on DIV (modal fade) at 9/13/2024, 5:12:48 PM', '2024-09-13 09:12:49', '2024-09-13 09:12:49', NULL, '2024-09-13 09:12:49'),
(673, 13, 'Clicked on SPAN (menu-title) at 9/13/2024, 5:12:49 PM', '2024-09-13 09:12:49', '2024-09-13 09:12:49', NULL, '2024-09-13 09:12:49'),
(674, 13, 'Viewed Salary page', '2024-09-13 09:13:12', '2024-09-13 09:13:12', NULL, '2024-09-13 09:13:12'),
(675, 13, 'Viewed rubix details page', '2024-09-13 09:34:17', '2024-09-13 09:34:17', NULL, '2024-09-13 09:34:17'),
(676, 13, 'Page loaded or refreshed', '2024-09-13 09:34:20', '2024-09-13 09:34:20', NULL, '2024-09-13 09:34:20'),
(677, 13, 'Clicked on BUTTON (btn btn-info) at 9/13/2024, 5:34:22 PM', '2024-09-13 09:34:23', '2024-09-13 09:34:23', NULL, '2024-09-13 09:34:23'),
(678, 13, 'Clicked on TD (text-wrap) at 9/13/2024, 5:34:28 PM', '2024-09-13 09:34:28', '2024-09-13 09:34:28', NULL, '2024-09-13 09:34:28'),
(679, 13, 'Clicked on DIV (modal fade) at 9/13/2024, 5:34:44 PM', '2024-09-13 09:34:44', '2024-09-13 09:34:44', NULL, '2024-09-13 09:34:44'),
(680, 13, 'Clicked on SPAN (menu-title) at 9/13/2024, 5:34:44 PM', '2024-09-13 09:34:45', '2024-09-13 09:34:45', NULL, '2024-09-13 09:34:45'),
(681, 13, 'Viewed rubix details page', '2024-09-13 09:54:01', '2024-09-13 09:54:01', NULL, '2024-09-13 09:54:01'),
(682, 13, 'Page loaded or refreshed', '2024-09-13 09:54:04', '2024-09-13 09:54:04', NULL, '2024-09-13 09:54:04'),
(683, 13, 'Clicked on A (nav-link ) at 9/13/2024, 5:59:26 PM', '2024-09-13 09:59:26', '2024-09-13 09:59:26', NULL, '2024-09-13 09:59:26'),
(684, 13, 'Viewed rubix details page', '2024-09-13 10:01:27', '2024-09-13 10:01:27', NULL, '2024-09-13 10:01:27'),
(685, 13, 'Page loaded or refreshed', '2024-09-13 10:01:29', '2024-09-13 10:01:29', NULL, '2024-09-13 10:01:29'),
(686, 13, 'Clicked on INPUT (form-control) at 9/13/2024, 6:01:35 PM', '2024-09-13 10:01:36', '2024-09-13 10:01:36', NULL, '2024-09-13 10:01:36'),
(687, 13, 'Clicked on INPUT (form-control) at 9/13/2024, 6:01:41 PM', '2024-09-13 10:01:42', '2024-09-13 10:01:42', NULL, '2024-09-13 10:01:42'),
(688, 13, 'Clicked on INPUT (form-control) at 9/13/2024, 6:01:42 PM', '2024-09-13 10:01:42', '2024-09-13 10:01:42', NULL, '2024-09-13 10:01:42'),
(689, 13, 'Clicked on INPUT (form-control) at 9/13/2024, 6:01:44 PM', '2024-09-13 10:01:44', '2024-09-13 10:01:44', NULL, '2024-09-13 10:01:44'),
(690, 13, 'Clicked on INPUT (form-control) at 9/13/2024, 6:02:26 PM', '2024-09-13 10:02:26', '2024-09-13 10:02:26', NULL, '2024-09-13 10:02:26'),
(691, 13, 'Clicked on DIV (pt-3) at 9/13/2024, 6:02:48 PM', '2024-09-13 10:02:48', '2024-09-13 10:02:48', NULL, '2024-09-13 10:02:48'),
(692, 13, 'Clicked on INPUT () at 9/13/2024, 6:03:14 PM', '2024-09-13 10:03:14', '2024-09-13 10:03:14', NULL, '2024-09-13 10:03:14'),
(693, 13, 'Clicked on INPUT (form-control) at 9/13/2024, 6:04:07 PM', '2024-09-13 10:04:07', '2024-09-13 10:04:07', NULL, '2024-09-13 10:04:07'),
(694, 13, 'Clicked on INPUT (form-control) at 9/13/2024, 6:04:11 PM', '2024-09-13 10:04:11', '2024-09-13 10:04:11', NULL, '2024-09-13 10:04:11'),
(695, 13, 'Clicked on INPUT (form-control) at 9/13/2024, 6:04:14 PM', '2024-09-13 10:04:14', '2024-09-13 10:04:14', NULL, '2024-09-13 10:04:14'),
(696, 13, 'Clicked on BUTTON (btn btn-secondary w-100) at 9/13/2024, 6:04:19 PM', '2024-09-13 10:04:19', '2024-09-13 10:04:19', NULL, '2024-09-13 10:04:19'),
(697, 13, 'Clicked on A (side-menu--open) at 9/13/2024, 6:04:25 PM', '2024-09-13 10:04:26', '2024-09-13 10:04:26', NULL, '2024-09-13 10:04:26'),
(698, 13, 'Clicked on SPAN (menu-title) at 9/13/2024, 6:04:26 PM', '2024-09-13 10:04:26', '2024-09-13 10:04:26', NULL, '2024-09-13 10:04:26'),
(699, 13, 'Viewed rubix details page', '2024-09-13 10:05:09', '2024-09-13 10:05:09', NULL, '2024-09-13 10:05:09'),
(700, 13, 'Page loaded or refreshed', '2024-09-13 10:05:11', '2024-09-13 10:05:11', NULL, '2024-09-13 10:05:11'),
(701, 13, 'Clicked on TD () at 9/13/2024, 6:06:03 PM', '2024-09-13 10:06:04', '2024-09-13 10:06:04', NULL, '2024-09-13 10:06:04'),
(702, 13, 'Clicked on TD () at 9/13/2024, 6:06:03 PM', '2024-09-13 10:06:04', '2024-09-13 10:06:04', NULL, '2024-09-13 10:06:04'),
(703, 13, 'Clicked on TD () at 9/13/2024, 6:06:04 PM', '2024-09-13 10:06:04', '2024-09-13 10:06:04', NULL, '2024-09-13 10:06:04'),
(704, 13, 'Clicked on TD () at 9/13/2024, 6:06:04 PM', '2024-09-13 10:06:05', '2024-09-13 10:06:05', NULL, '2024-09-13 10:06:05'),
(705, 13, 'Clicked on DIV (table-responsive--sm table-responsive) at 9/13/2024, 6:07:02 PM', '2024-09-13 10:07:02', '2024-09-13 10:07:02', NULL, '2024-09-13 10:07:02'),
(706, 13, 'Clicked on SPAN (menu-title) at 9/13/2024, 6:07:02 PM', '2024-09-13 10:07:03', '2024-09-13 10:07:03', NULL, '2024-09-13 10:07:03'),
(707, 13, 'Clicked on SPAN (menu-title) at 9/13/2024, 6:07:03 PM', '2024-09-13 10:07:03', '2024-09-13 10:07:03', NULL, '2024-09-13 10:07:03'),
(708, 13, 'Viewed rubix details page', '2024-09-13 10:08:17', '2024-09-13 10:08:17', NULL, '2024-09-13 10:08:17'),
(709, 13, 'Page loaded or refreshed', '2024-09-13 10:08:19', '2024-09-13 10:08:19', NULL, '2024-09-13 10:08:19'),
(710, 13, 'Clicked on BUTTON (btn btn-primary) at 9/13/2024, 6:08:22 PM', '2024-09-13 10:08:23', '2024-09-13 10:08:23', NULL, '2024-09-13 10:08:23'),
(711, 13, 'Clicked on DIV (modal fade) at 9/13/2024, 6:08:27 PM', '2024-09-13 10:08:27', '2024-09-13 10:08:27', NULL, '2024-09-13 10:08:27'),
(712, 13, 'Clicked on TD () at 9/13/2024, 6:08:28 PM', '2024-09-13 10:08:28', '2024-09-13 10:08:28', NULL, '2024-09-13 10:08:28'),
(713, 13, 'Clicked on TD () at 9/13/2024, 6:08:28 PM', '2024-09-13 10:08:28', '2024-09-13 10:08:28', NULL, '2024-09-13 10:08:28'),
(714, 13, 'Clicked on TD () at 9/13/2024, 6:08:29 PM', '2024-09-13 10:08:29', '2024-09-13 10:08:29', NULL, '2024-09-13 10:08:29'),
(715, 13, 'Clicked on A (side-menu--open) at 9/13/2024, 6:08:36 PM', '2024-09-13 10:08:37', '2024-09-13 10:08:37', NULL, '2024-09-13 10:08:37'),
(716, 13, 'Clicked on SPAN (menu-title) at 9/13/2024, 6:08:38 PM', '2024-09-13 10:08:39', '2024-09-13 10:08:39', NULL, '2024-09-13 10:08:39'),
(717, 13, 'Viewed Salary page', '2024-09-13 10:37:56', '2024-09-13 10:37:56', NULL, '2024-09-13 10:37:56'),
(718, 13, 'Viewed rubix details page', '2024-09-13 10:40:03', '2024-09-13 10:40:03', NULL, '2024-09-13 10:40:03'),
(719, 13, 'Page loaded or refreshed', '2024-09-13 10:40:06', '2024-09-13 10:40:06', NULL, '2024-09-13 10:40:06'),
(720, 13, 'Clicked on SPAN (menu-title) at 9/13/2024, 6:41:00 PM', '2024-09-13 10:41:01', '2024-09-13 10:41:01', NULL, '2024-09-13 10:41:01'),
(721, 13, 'Clicked on SPAN (menu-title) at 9/13/2024, 6:41:02 PM', '2024-09-13 10:41:02', '2024-09-13 10:41:02', NULL, '2024-09-13 10:41:02'),
(722, 13, 'Viewed Salary page', '2024-09-15 23:59:07', '2024-09-15 23:59:07', NULL, '2024-09-15 23:59:07'),
(723, 13, 'Viewed Salary page', '2024-09-16 00:00:06', '2024-09-16 00:00:06', NULL, '2024-09-16 00:00:06'),
(724, 13, 'Viewed rubix details page', '2024-09-16 00:07:22', '2024-09-16 00:07:22', NULL, '2024-09-16 00:07:22'),
(725, 13, 'Page loaded or refreshed', '2024-09-16 00:07:25', '2024-09-16 00:07:25', NULL, '2024-09-16 00:07:25'),
(726, 13, 'Clicked on TD () at 9/16/2024, 8:07:29 AM', '2024-09-16 00:07:29', '2024-09-16 00:07:29', NULL, '2024-09-16 00:07:29'),
(727, 13, 'Clicked on TD () at 9/16/2024, 8:07:30 AM', '2024-09-16 00:07:30', '2024-09-16 00:07:30', NULL, '2024-09-16 00:07:30'),
(728, 13, 'Clicked on TD () at 9/16/2024, 8:07:30 AM', '2024-09-16 00:07:30', '2024-09-16 00:07:30', NULL, '2024-09-16 00:07:30'),
(729, 13, 'Clicked on TD () at 9/16/2024, 8:07:30 AM', '2024-09-16 00:07:30', '2024-09-16 00:07:30', NULL, '2024-09-16 00:07:30'),
(730, 13, 'Clicked on TD () at 9/16/2024, 8:07:30 AM', '2024-09-16 00:07:31', '2024-09-16 00:07:31', NULL, '2024-09-16 00:07:31'),
(731, 13, 'Clicked on TD () at 9/16/2024, 8:07:31 AM', '2024-09-16 00:07:31', '2024-09-16 00:07:31', NULL, '2024-09-16 00:07:31'),
(732, 13, 'Clicked on TBODY () at 9/16/2024, 8:07:32 AM', '2024-09-16 00:07:32', '2024-09-16 00:07:32', NULL, '2024-09-16 00:07:32'),
(733, 13, 'Clicked on TD () at 9/16/2024, 8:07:33 AM', '2024-09-16 00:07:33', '2024-09-16 00:07:33', NULL, '2024-09-16 00:07:33'),
(734, 13, 'Viewed rubix details page', '2024-09-16 01:14:11', '2024-09-16 01:14:11', NULL, '2024-09-16 01:14:11'),
(735, 13, 'Page loaded or refreshed', '2024-09-16 01:14:14', '2024-09-16 01:14:14', NULL, '2024-09-16 01:14:14'),
(736, 13, 'Viewed rubix details page', '2024-09-16 01:14:56', '2024-09-16 01:14:56', NULL, '2024-09-16 01:14:56'),
(737, 13, 'Page loaded or refreshed', '2024-09-16 01:14:58', '2024-09-16 01:14:58', NULL, '2024-09-16 01:14:58'),
(738, 13, 'Clicked on TD () at 9/16/2024, 9:15:05 AM', '2024-09-16 01:15:05', '2024-09-16 01:15:05', NULL, '2024-09-16 01:15:05'),
(739, 13, 'Clicked on TD () at 9/16/2024, 9:15:05 AM', '2024-09-16 01:15:06', '2024-09-16 01:15:06', NULL, '2024-09-16 01:15:06'),
(740, 13, 'Clicked on TD () at 9/16/2024, 9:15:06 AM', '2024-09-16 01:15:06', '2024-09-16 01:15:06', NULL, '2024-09-16 01:15:06'),
(741, 13, 'Viewed rubix details page', '2024-09-16 01:16:46', '2024-09-16 01:16:46', NULL, '2024-09-16 01:16:46'),
(742, 13, 'Page loaded or refreshed', '2024-09-16 01:16:49', '2024-09-16 01:16:49', NULL, '2024-09-16 01:16:49'),
(743, 13, 'Clicked on TD () at 9/16/2024, 9:16:51 AM', '2024-09-16 01:16:51', '2024-09-16 01:16:51', NULL, '2024-09-16 01:16:51'),
(744, 13, 'Clicked on TD () at 9/16/2024, 9:16:52 AM', '2024-09-16 01:16:52', '2024-09-16 01:16:52', NULL, '2024-09-16 01:16:52'),
(745, 13, 'Viewed rubix details page', '2024-09-16 01:19:57', '2024-09-16 01:19:57', NULL, '2024-09-16 01:19:57'),
(746, 13, 'Viewed rubix details page', '2024-09-16 01:20:21', '2024-09-16 01:20:21', NULL, '2024-09-16 01:20:21'),
(747, 13, 'Viewed rubix details page', '2024-09-16 01:20:27', '2024-09-16 01:20:27', NULL, '2024-09-16 01:20:27'),
(748, 13, 'Viewed rubix details page', '2024-09-16 01:20:43', '2024-09-16 01:20:43', NULL, '2024-09-16 01:20:43'),
(749, 13, 'Page loaded or refreshed', '2024-09-16 01:20:46', '2024-09-16 01:20:46', NULL, '2024-09-16 01:20:46'),
(750, 13, 'Viewed rubix details page', '2024-09-16 01:21:49', '2024-09-16 01:21:49', NULL, '2024-09-16 01:21:49'),
(751, 13, 'Page loaded or refreshed', '2024-09-16 01:21:51', '2024-09-16 01:21:51', NULL, '2024-09-16 01:21:51'),
(752, 13, 'Viewed rubix details page', '2024-09-16 01:23:45', '2024-09-16 01:23:45', NULL, '2024-09-16 01:23:45'),
(753, 13, 'Page loaded or refreshed', '2024-09-16 01:23:47', '2024-09-16 01:23:47', NULL, '2024-09-16 01:23:47'),
(754, 13, 'Viewed rubix details page', '2024-09-16 01:24:03', '2024-09-16 01:24:03', NULL, '2024-09-16 01:24:03'),
(755, 13, 'Page loaded or refreshed', '2024-09-16 01:24:06', '2024-09-16 01:24:06', NULL, '2024-09-16 01:24:06'),
(756, 13, 'Viewed rubix details page', '2024-09-16 01:25:38', '2024-09-16 01:25:38', NULL, '2024-09-16 01:25:38'),
(757, 13, 'Page loaded or refreshed', '2024-09-16 01:25:40', '2024-09-16 01:25:40', NULL, '2024-09-16 01:25:40'),
(758, 13, 'Clicked on SPAN (menu-title) at 9/16/2024, 9:26:01 AM', '2024-09-16 01:26:01', '2024-09-16 01:26:01', NULL, '2024-09-16 01:26:01'),
(759, 13, 'Viewed rubix details page', '2024-09-16 01:27:47', '2024-09-16 01:27:47', NULL, '2024-09-16 01:27:47'),
(760, 13, 'Page loaded or refreshed', '2024-09-16 01:27:49', '2024-09-16 01:27:49', NULL, '2024-09-16 01:27:49'),
(761, 13, 'Viewed rubix details page', '2024-09-16 01:29:09', '2024-09-16 01:29:09', NULL, '2024-09-16 01:29:09'),
(762, 13, 'Page loaded or refreshed', '2024-09-16 01:29:12', '2024-09-16 01:29:12', NULL, '2024-09-16 01:29:12'),
(763, 13, 'Clicked on TD (sorting_1) at 9/16/2024, 9:29:16 AM', '2024-09-16 01:29:16', '2024-09-16 01:29:16', NULL, '2024-09-16 01:29:16'),
(764, 13, 'Clicked on TD (sorting_1) at 9/16/2024, 9:29:16 AM', '2024-09-16 01:29:16', '2024-09-16 01:29:16', NULL, '2024-09-16 01:29:16'),
(765, 13, 'Clicked on TD (sorting_1) at 9/16/2024, 9:29:17 AM', '2024-09-16 01:29:17', '2024-09-16 01:29:17', NULL, '2024-09-16 01:29:17'),
(766, 13, 'Clicked on TD (sorting_1) at 9/16/2024, 9:29:17 AM', '2024-09-16 01:29:17', '2024-09-16 01:29:17', NULL, '2024-09-16 01:29:17'),
(767, 13, 'Clicked on TD (sorting_1) at 9/16/2024, 9:29:17 AM', '2024-09-16 01:29:18', '2024-09-16 01:29:18', NULL, '2024-09-16 01:29:18'),
(768, 13, 'Clicked on TD (sorting_1) at 9/16/2024, 9:29:18 AM', '2024-09-16 01:29:18', '2024-09-16 01:29:18', NULL, '2024-09-16 01:29:18'),
(769, 13, 'Clicked on TD () at 9/16/2024, 9:30:44 AM', '2024-09-16 01:30:44', '2024-09-16 01:30:44', NULL, '2024-09-16 01:30:44'),
(770, 13, 'Clicked on BUTTON (btn btn-info) at 9/16/2024, 9:30:44 AM', '2024-09-16 01:30:45', '2024-09-16 01:30:45', NULL, '2024-09-16 01:30:45'),
(771, 13, 'Clicked on TD (text-wrap) at 9/16/2024, 9:30:52 AM', '2024-09-16 01:30:53', '2024-09-16 01:30:53', NULL, '2024-09-16 01:30:53'),
(772, 13, 'Clicked on TD (text-wrap) at 9/16/2024, 9:30:53 AM', '2024-09-16 01:30:53', '2024-09-16 01:30:53', NULL, '2024-09-16 01:30:53'),
(773, 13, 'Viewed rubix details page', '2024-09-16 01:31:56', '2024-09-16 01:31:56', NULL, '2024-09-16 01:31:56'),
(774, 13, 'Page loaded or refreshed', '2024-09-16 01:31:59', '2024-09-16 01:31:59', NULL, '2024-09-16 01:31:59'),
(775, 13, 'Clicked on BUTTON (btn btn-info) at 9/16/2024, 9:32:01 AM', '2024-09-16 01:32:01', '2024-09-16 01:32:01', NULL, '2024-09-16 01:32:01'),
(776, 13, 'Clicked on TD (text-wrap) at 9/16/2024, 9:32:03 AM', '2024-09-16 01:32:04', '2024-09-16 01:32:04', NULL, '2024-09-16 01:32:04'),
(777, 13, 'Clicked on DIV (modal fade) at 9/16/2024, 9:32:05 AM', '2024-09-16 01:32:05', '2024-09-16 01:32:05', NULL, '2024-09-16 01:32:05'),
(778, 13, 'Clicked on A (paginate_button ) at 9/16/2024, 9:32:07 AM', '2024-09-16 01:32:07', '2024-09-16 01:32:07', NULL, '2024-09-16 01:32:07'),
(779, 13, 'Clicked on BUTTON (btn btn-info) at 9/16/2024, 9:32:08 AM', '2024-09-16 01:32:08', '2024-09-16 01:32:08', NULL, '2024-09-16 01:32:08'),
(780, 13, 'Clicked on TD (text-wrap) at 9/16/2024, 9:32:10 AM', '2024-09-16 01:32:10', '2024-09-16 01:32:10', NULL, '2024-09-16 01:32:10'),
(781, 13, 'Clicked on TD (text-wrap) at 9/16/2024, 9:32:10 AM', '2024-09-16 01:32:11', '2024-09-16 01:32:11', NULL, '2024-09-16 01:32:11'),
(782, 13, 'Clicked on TD (text-wrap) at 9/16/2024, 9:32:10 AM', '2024-09-16 01:32:11', '2024-09-16 01:32:11', NULL, '2024-09-16 01:32:11'),
(783, 13, 'Clicked on TD (text-wrap) at 9/16/2024, 9:32:11 AM', '2024-09-16 01:32:11', '2024-09-16 01:32:11', NULL, '2024-09-16 01:32:11'),
(784, 13, 'Clicked on TD (text-wrap) at 9/16/2024, 9:32:11 AM', '2024-09-16 01:32:12', '2024-09-16 01:32:12', NULL, '2024-09-16 01:32:12'),
(785, 13, 'Clicked on TD (text-wrap) at 9/16/2024, 9:32:12 AM', '2024-09-16 01:32:12', '2024-09-16 01:32:12', NULL, '2024-09-16 01:32:12'),
(786, 13, 'Clicked on TD (text-wrap) at 9/16/2024, 9:32:12 AM', '2024-09-16 01:32:12', '2024-09-16 01:32:12', NULL, '2024-09-16 01:32:12'),
(787, 13, 'Clicked on BUTTON (btn-close) at 9/16/2024, 9:32:14 AM', '2024-09-16 01:32:14', '2024-09-16 01:32:14', NULL, '2024-09-16 01:32:14'),
(788, 13, 'Clicked on SPAN (menu-title) at 9/16/2024, 9:51:08 AM', '2024-09-16 01:51:08', '2024-09-16 01:51:08', NULL, '2024-09-16 01:51:08'),
(789, 13, 'Viewed Salary page', '2024-09-16 03:43:18', '2024-09-16 03:43:18', NULL, '2024-09-16 03:43:18'),
(790, 13, 'Viewed Salary page', '2024-09-16 03:44:04', '2024-09-16 03:44:04', NULL, '2024-09-16 03:44:04'),
(791, 13, 'Viewed Salary page', '2024-09-16 03:47:10', '2024-09-16 03:47:10', NULL, '2024-09-16 03:47:10');
INSERT INTO `activity_logs` (`id`, `user_id`, `activity`, `created_at`, `updated_at`, `booking_id`, `logged_in_at`) VALUES
(792, 13, 'Viewed Salary page', '2024-09-16 04:47:30', '2024-09-16 04:47:30', NULL, '2024-09-16 04:47:30'),
(793, 13, 'Viewed Salary page', '2024-09-16 05:23:02', '2024-09-16 05:23:02', NULL, '2024-09-16 05:23:02'),
(794, 13, 'Viewed rubix details page', '2024-09-16 05:49:17', '2024-09-16 05:49:17', NULL, '2024-09-16 05:49:17'),
(795, 13, 'Page loaded or refreshed', '2024-09-16 05:49:19', '2024-09-16 05:49:19', NULL, '2024-09-16 05:49:19'),
(796, 13, 'Clicked on DIV (pt-3) at 9/16/2024, 1:49:20 PM', '2024-09-16 05:49:20', '2024-09-16 05:49:20', NULL, '2024-09-16 05:49:20'),
(797, 13, 'Clicked on DIV (pt-3) at 9/16/2024, 1:49:20 PM', '2024-09-16 05:49:20', '2024-09-16 05:49:20', NULL, '2024-09-16 05:49:20'),
(798, 13, 'Clicked on DIV (table-responsive--sm table-responsive) at 9/16/2024, 1:49:21 PM', '2024-09-16 05:49:21', '2024-09-16 05:49:21', NULL, '2024-09-16 05:49:21'),
(799, 13, 'Clicked on DIV (table-responsive--sm table-responsive) at 9/16/2024, 1:49:21 PM', '2024-09-16 05:49:21', '2024-09-16 05:49:21', NULL, '2024-09-16 05:49:21'),
(800, 13, 'Viewed rubix details page', '2024-09-16 05:50:30', '2024-09-16 05:50:30', NULL, '2024-09-16 05:50:30'),
(801, 13, 'Page loaded or refreshed', '2024-09-16 05:50:32', '2024-09-16 05:50:32', NULL, '2024-09-16 05:50:32'),
(802, 13, 'Clicked on BUTTON (btn btn-secondary dropdown-toggle show) at 9/16/2024, 1:50:34 PM', '2024-09-16 05:50:34', '2024-09-16 05:50:34', NULL, '2024-09-16 05:50:34'),
(803, 13, 'Clicked on A (dropdown-item) at 9/16/2024, 1:50:35 PM', '2024-09-16 05:50:35', '2024-09-16 05:50:35', NULL, '2024-09-16 05:50:35'),
(804, 13, 'Viewed rubix details page', '2024-09-16 05:50:57', '2024-09-16 05:50:57', NULL, '2024-09-16 05:50:57'),
(805, 13, 'Page loaded or refreshed', '2024-09-16 05:51:00', '2024-09-16 05:51:00', NULL, '2024-09-16 05:51:00'),
(806, 13, 'Clicked on BUTTON (btn btn-secondary dropdown-toggle show) at 9/16/2024, 1:51:00 PM', '2024-09-16 05:51:01', '2024-09-16 05:51:01', NULL, '2024-09-16 05:51:01'),
(807, 13, 'Clicked on A (dropdown-item) at 9/16/2024, 1:51:01 PM', '2024-09-16 05:51:01', '2024-09-16 05:51:01', NULL, '2024-09-16 05:51:01'),
(808, 13, 'Clicked on BUTTON (btn btn-secondary dropdown-toggle show) at 9/16/2024, 1:51:02 PM', '2024-09-16 05:51:02', '2024-09-16 05:51:02', NULL, '2024-09-16 05:51:02'),
(809, 13, 'Clicked on A (dropdown-item) at 9/16/2024, 1:51:03 PM', '2024-09-16 05:51:03', '2024-09-16 05:51:03', NULL, '2024-09-16 05:51:03'),
(810, 13, 'Clicked on DIV (table-responsive--sm table-responsive) at 9/16/2024, 1:51:03 PM', '2024-09-16 05:51:04', '2024-09-16 05:51:04', NULL, '2024-09-16 05:51:04'),
(811, 13, 'Clicked on BUTTON (btn btn-secondary dropdown-toggle show) at 9/16/2024, 1:51:04 PM', '2024-09-16 05:51:04', '2024-09-16 05:51:04', NULL, '2024-09-16 05:51:04'),
(812, 13, 'Clicked on A (dropdown-item) at 9/16/2024, 1:51:04 PM', '2024-09-16 05:51:04', '2024-09-16 05:51:04', NULL, '2024-09-16 05:51:04'),
(813, 13, 'Clicked on BUTTON (btn btn-secondary dropdown-toggle show) at 9/16/2024, 1:51:05 PM', '2024-09-16 05:51:05', '2024-09-16 05:51:05', NULL, '2024-09-16 05:51:05'),
(814, 13, 'Clicked on A (dropdown-item) at 9/16/2024, 1:51:05 PM', '2024-09-16 05:51:05', '2024-09-16 05:51:05', NULL, '2024-09-16 05:51:05'),
(815, 13, 'Clicked on BUTTON (btn btn-secondary dropdown-toggle show) at 9/16/2024, 1:51:05 PM', '2024-09-16 05:51:06', '2024-09-16 05:51:06', NULL, '2024-09-16 05:51:06'),
(816, 13, 'Clicked on A (dropdown-item) at 9/16/2024, 1:51:06 PM', '2024-09-16 05:51:07', '2024-09-16 05:51:07', NULL, '2024-09-16 05:51:07'),
(817, 13, 'Clicked on BUTTON (btn btn-secondary dropdown-toggle show) at 9/16/2024, 1:51:08 PM', '2024-09-16 05:51:08', '2024-09-16 05:51:08', NULL, '2024-09-16 05:51:08'),
(818, 13, 'Clicked on A (dropdown-item) at 9/16/2024, 1:51:08 PM', '2024-09-16 05:51:08', '2024-09-16 05:51:08', NULL, '2024-09-16 05:51:08'),
(819, 13, 'Viewed rubix details page', '2024-09-16 05:52:31', '2024-09-16 05:52:31', NULL, '2024-09-16 05:52:31'),
(820, 13, 'Page loaded or refreshed', '2024-09-16 05:52:33', '2024-09-16 05:52:33', NULL, '2024-09-16 05:52:33'),
(821, 13, 'Viewed rubix details page', '2024-09-16 05:52:39', '2024-09-16 05:52:39', NULL, '2024-09-16 05:52:39'),
(822, 13, 'Page loaded or refreshed', '2024-09-16 05:52:41', '2024-09-16 05:52:41', NULL, '2024-09-16 05:52:41'),
(823, 13, 'Clicked on BUTTON (btn btn-secondary dropdown-toggle show) at 9/16/2024, 1:52:47 PM', '2024-09-16 05:52:48', '2024-09-16 05:52:48', NULL, '2024-09-16 05:52:48'),
(824, 13, 'Clicked on A (dropdown-item) at 9/16/2024, 1:52:48 PM', '2024-09-16 05:52:49', '2024-09-16 05:52:49', NULL, '2024-09-16 05:52:49'),
(825, 13, 'Clicked on DIV (table-responsive--sm table-responsive) at 9/16/2024, 1:52:49 PM', '2024-09-16 05:52:50', '2024-09-16 05:52:50', NULL, '2024-09-16 05:52:50'),
(826, 13, 'Clicked on BUTTON (btn btn-secondary dropdown-toggle show) at 9/16/2024, 1:52:50 PM', '2024-09-16 05:52:50', '2024-09-16 05:52:50', NULL, '2024-09-16 05:52:50'),
(827, 13, 'Clicked on A (dropdown-item) at 9/16/2024, 1:52:51 PM', '2024-09-16 05:52:51', '2024-09-16 05:52:51', NULL, '2024-09-16 05:52:51'),
(828, 13, 'Clicked on A (side-menu--open) at 9/16/2024, 1:53:04 PM', '2024-09-16 05:53:05', '2024-09-16 05:53:05', NULL, '2024-09-16 05:53:05'),
(829, 13, 'Clicked on SPAN (menu-title) at 9/16/2024, 1:53:05 PM', '2024-09-16 05:53:05', '2024-09-16 05:53:05', NULL, '2024-09-16 05:53:05'),
(830, 31, 'Viewed Salary page', '2024-09-16 07:14:00', '2024-09-16 07:14:00', NULL, '2024-09-16 07:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `clock_in` timestamp NULL DEFAULT NULL,
  `clock_out` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `order_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `transport_mode` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
  `order_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `plate_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `remarks` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `date` datetime DEFAULT NULL,
  `proof_of_delivery` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `truck_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `qr_code_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_pick_up` text COLLATE utf8mb4_unicode_ci,
  `product_name` text COLLATE utf8mb4_unicode_ci,
  `trip_ticket` text COLLATE utf8mb4_unicode_ci,
  `created_by` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `order_number`, `sender_name`, `transport_mode`, `delivery_type`, `journey_type`, `consignee_name`, `consignee_address`, `consignee_email`, `consignee_mobile`, `consignee_city`, `consignee_province`, `consignee_barangay`, `consignee_building_type`, `merchant_name`, `merchant_address`, `merchant_email`, `merchant_mobile`, `merchant_city`, `merchant_province`, `tracking_number`, `created_at`, `updated_at`, `assigned_driver_id`, `driver_id`, `vehicle_id`, `qr_code`, `order_status`, `updated_by`, `plate_number`, `driver_name`, `status`, `remarks`, `date`, `proof_of_delivery`, `truck_type`, `qr_code_path`, `date_of_pick_up`, `product_name`, `trip_ticket`, `created_by`) VALUES
(109, '2024-0024', 'Acme Corp', 'Water Transport', 'Door-to-Door', 'International', 'Jane Does Mangubat', 'Batangas City', 'decastrojustin24@gmail.com', '09456754591', 'Batangas', 'Batangas', 'Mabini', 'apartment', 'Global Goods Inc.', 'Calamba Laguna', 'decastrojustin321@gmail.com', '09456754591', 'Laguna', 'Laguna', 'GDR-36762024866CD7B8BC9ECB2.40590572', '2024-08-27 07:08:59', '2024-08-28 05:53:57', NULL, NULL, NULL, NULL, 'Confirmed_delivery', NULL, 'D05-ABCQWE', '19', 'Delivery successful', 'Done Delivery', '2024-08-28 15:07:00', 'pictures/1724821490_closedvans.jpg', '4', 'qrcodes/1724742539-GDR-36762024866CD7B8BC9ECB2.40590572.svg', NULL, NULL, NULL, NULL),
(209, '2024-0025', 'DSWD', 'Land Transport', 'Warehouse Transfer', 'Local', 'Mangubat Feeds Supply', 'Bacolod City', 'decastrojustin24@gmail.com', '09456754591', 'Bacolod City', 'bacolod', 'Masipit', 'Apartment', 'Global Goods Inc.', 'Pio Del Pilar Makati City', 'decastrojustin321@gmail.com', '09456754591', 'Makati', 'Makati', 'GDR-76115180', '2024-09-16 08:06:57', '2024-09-16 08:06:58', NULL, NULL, NULL, NULL, 'Pending', NULL, 'D05-ABCDe', '31', NULL, NULL, '2024-09-17 16:05:00', NULL, '14', 'qrcodes/1726474017-GDR-76115180.svg', NULL, '1000 gaming chairs', NULL, 31);

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
-- Table structure for table `budgets`
--

CREATE TABLE `budgets` (
  `id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget_amount` decimal(15,2) NOT NULL,
  `expense_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requestee` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `approved_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `budgets`
--

INSERT INTO `budgets` (`id`, `date`, `department`, `budget_amount`, `expense_details`, `voucher`, `requestee`, `status`, `approved_by`, `created_at`, `updated_at`, `bank_name`, `account_name`, `account_number`) VALUES
(1, '2024-09-07', 'logistics', 500000.00, 'For family outing', 'cash', NULL, 'Denied', 13, '2024-09-06 05:57:30', '2024-09-12 08:01:12', NULL, NULL, NULL),
(2, '2024-09-08', 'logistics', 250000.00, 'Will buy new car', 'cheques', 'Justin De Castro', 'Approved', 13, '2024-09-06 06:05:18', '2024-09-06 06:53:28', NULL, NULL, NULL),
(3, '2024-09-12', 'maintenance', 5500.00, 'Nothing', NULL, 'Angel Darlene', 'Pending', NULL, '2024-09-11 03:48:29', '2024-09-11 03:48:29', 'BPI', 'Darlene Angel Fajarito', '09255678341'),
(4, '2024-09-13', 'miscellaneous', 6700.00, 'NOne', 'bank_transfer', 'Angel Darlenes', 'Pending', NULL, '2024-09-11 03:50:44', '2024-09-11 03:50:44', NULL, NULL, NULL),
(5, '2024-09-14', 'logistics', 4500.00, 'GASOLINE', 'bank_transfer', 'Angel Darlene Fajarito', 'Pending', NULL, '2024-09-11 03:53:08', '2024-09-11 03:53:08', 'BPI', 'Darlene Angel Fajarito', '09255678341');

-- --------------------------------------------------------

--
-- Table structure for table `consignee_addresses`
--

CREATE TABLE `consignee_addresses` (
  `id` bigint UNSIGNED NOT NULL,
  `booking_id` bigint UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `delay_reports`
--

CREATE TABLE `delay_reports` (
  `id` bigint UNSIGNED NOT NULL,
  `trip_ticket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plate_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `delay_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delay_cause` text COLLATE utf8mb4_unicode_ci,
  `other_cause` text COLLATE utf8mb4_unicode_ci,
  `additional_notes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `driver_name` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delay_reports`
--

INSERT INTO `delay_reports` (`id`, `trip_ticket`, `plate_number`, `date`, `delay_duration`, `delay_cause`, `other_cause`, `additional_notes`, `created_at`, `updated_at`, `driver_name`) VALUES
(1, '2024100', 'D05-ABCDe', '2024-09-11 13:31:00', 'The total time the delivery was delayed, calculated as the difference between scheduled and actual delivery times.', 'Road conditions or closures', NULL, 'nothing', '2024-09-09 05:34:50', '2024-09-09 05:34:50', NULL),
(2, '2024100', 'D05-ABCDe', '2024-09-11 13:31:00', 'The total time the delivery was delayed, calculated as the difference between scheduled and actual delivery times.', 'Road conditions or closures', NULL, 'nothing', '2024-09-09 05:35:04', '2024-09-09 05:35:04', NULL),
(3, '20241002', 'MCM-1998ZXY', '2024-09-10 13:51:00', 'The total time the delivery was delayed, calculated as the difference between scheduled and actual delivery times.', 'Traffic', NULL, 'Flat tire', '2024-09-09 05:53:05', '2024-09-09 05:53:05', 'Justin Mangubat De Castro Coordinator'),
(4, '2024100255', 'MCD-56432XCV', '2024-09-08 13:58:00', '5das', 'Tires go Boom', NULL, 'matatagalan matapos send cash pambili tires', '2024-09-09 05:58:30', '2024-09-09 05:58:30', 'Justin Mangubat De Castro Coordinator'),
(5, '2024100299', 'VMB-1235', '2024-09-13 05:34:00', 'The total time the delivery was delayed, calculated as the difference between scheduled and actual delivery times.', 'Other', 'Weather not okay', 'ANy', '2024-09-13 05:37:42', '2024-09-13 05:37:42', 'Justin Mangubat De Castros');

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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `employee_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `files` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_hired` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_place` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `civil_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `id_number`, `position`, `profile_image`, `files`, `date_hired`, `birthday`, `birth_place`, `civil_status`, `gender`, `mobile`, `address`, `created_at`, `updated_at`) VALUES
(3, 'MARJON JASPER TAGANAS', '1234567890', 'COORDINATOR', 'profile_images/1724721833_6228589885539859811.jpg', '', '', '', '', '', '', '', '', '2024-08-27 01:23:53', '2024-08-27 01:24:11'),
(4, 'Justin', 'C1805044', 'Senior Web Dev', 'images/employees/1725944662.png', '', '2024-09-02', '2024-09-02', 'Naujan', 'Widowed', 'Male', '09456754591', 'Makati City', '2024-09-03 12:17:18', '2024-09-10 05:04:22'),
(5, 'Darlene Angel', '24210003', 'Junior Web Developer', 'profile_images/1725940742_closedvans-removebg-preview.png', '\"[]\"', '2024-09-05', '2024-09-03', 'Naujan', 'Single', 'Female', '09456754591', 'Naujan Mindoro', '2024-09-10 03:59:02', '2024-09-10 03:59:02'),
(6, 'Darlene Angel', '24-00032', 'Junior Web Developer', 'images/employees/1725944850.png', '\"[\\\"files\\\\\\/1725940967_[removal.ai]_58d3e57f-85b1-4b48-aaf8-3064f5e9dbbd-o1nzrl2prkqll1dzvepc0a.png\\\",\\\"files\\\\\\/1725940967_10wheeler.jpg\\\"]\"', '2024-09-01', '2024-09-03', 'Naujan', 'Single', 'Male', '09456754591', 'Address: Unit 205 Campos Rueda Building, Urban Ave, Makati, Metro Manila, Philippines', '2024-09-10 04:02:47', '2024-09-10 05:07:30');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `position`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Justin Mangubat De Castro', 'Senior Web Developer', 'I had an excellent experience with your trucking service. The driver arrived on time and handled my cargo with great care. The communication was clear and professional throughout. I’ll definitely use your services again!', 'Declined', '2024-08-28 02:11:53', '2024-09-03 08:01:35'),
(2, 'Moses Alcantara', 'Senior Web Developer', 'I wanted to share my appreciation for the excellent trucking services your team has provided. Your timely deliveries, professional drivers, and top-notch customer support have been outstanding. The condition of your fleet and your flexibility have also been greatly valued.', 'Accepted', '2024-08-28 02:57:36', '2024-08-28 02:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `g_d_r_accountings`
--

CREATE TABLE `g_d_r_accountings` (
  `id` bigint UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `particulars` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_channel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proof_of_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `g_d_r_accountings`
--

INSERT INTO `g_d_r_accountings` (`id`, `date`, `particulars`, `payment_amount`, `payment_channel`, `proof_of_payment`, `notes`, `created_at`, `updated_at`) VALUES
(1, '2024-09-11T08:51', '100 Box of Canned Goods', '500000', 'GCash', 'uploads/proof_of_payments/1725929580_corn.jpeg', 'BananaPajama', '2024-09-10 00:53:00', '2024-09-10 00:53:00'),
(2, '2024-09-12 09:11:00', 'Capital', '1000000', 'Bank', 'uploads/proof_of_payments/1725930734_image-placeholder-10697310d866c75f85f5469ea61ebc18.png', 'For Banking', '2024-09-10 01:12:14', '2024-09-10 01:12:14');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_per_month` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_terms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_payment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_percentage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `mode_of_payment` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `date`, `borrower`, `initial_amount`, `created_at`, `updated_at`, `payment_per_month`, `payment_terms`, `total_payment`, `interest_percentage`, `status`, `mode_of_payment`) VALUES
(3, '2024-09-05', 'Justin', 250000.00, '2024-09-03 16:25:20', '2024-09-03 16:30:25', '72500.00', '4', '290000.00', '4', 'Paid', ''),
(4, '2024-09-06', 'Justin', 560000.00, '2024-09-03 16:36:08', '2024-09-03 16:40:17', '162400.00', '4', '649600.00', '4', 'Unpaid', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `latitude` decimal(10,7) NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `user_id`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(5, 40, 14.5599215, 121.0137700, '2024-09-09 02:53:41', '2024-09-09 02:53:41'),
(6, 31, 14.5599509, 121.0137692, '2024-09-09 03:01:00', '2024-09-09 03:01:00'),
(7, 31, 14.5599635, 121.0137818, '2024-09-13 07:03:15', '2024-09-13 07:03:15');

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
(28, '2024_08_16_212803_create_rubixes_table', 21),
(29, '2024_08_16_215251_update_bookings_table', 22),
(30, '2024_08_19_152442_create_pricing_salaries_table', 22),
(31, '2024_08_19_174822_add_order_number_to_bookings_table', 23),
(32, '2024_08_22_131540_create_employees_table', 24),
(33, '2024_08_22_131627_create_attendance_table', 24),
(34, '2024_08_22_140901_create_attendances_table', 25),
(35, '2024_08_22_141149_create_attendances_table', 26),
(36, '2024_08_22_141825_create_staff_table', 27),
(37, '2024_08_27_084552_create_preventives_table', 28),
(38, '2024_08_27_095134_create_rate_per_miles_table', 29),
(39, '2024_08_27_150601_add_qr_code_path_to_bookings_table', 30),
(40, '2024_08_28_083122_create_feedback_table', 31),
(41, '2024_08_30_141526_add_verification_fields_to_users_table', 32),
(42, '2024_09_05_114337_add_updated_by_to_rubixes_table', 33),
(43, '2024_09_05_114748_add_updated_by_to_bookings_table', 34),
(44, '2024_09_05_140546_add_created_by_to_bookings_table', 35),
(45, '2024_09_05_141830_create_logs_table', 36),
(46, '2024_09_05_150209_create_activity_logs_table', 37),
(47, '2024_09_05_151136_create_activity_logs_table', 38),
(48, '2024_09_05_152125_add_booking_id_to_activity_logs_table', 39),
(49, '2024_09_05_162129_create_trips_table', 40),
(50, '2024_09_06_084915_create_return_items_table', 41),
(51, '2024_09_06_085203_create_return_items_table', 42),
(52, '2024_09_06_104147_update_trip_close_trip_enum', 43),
(53, '2024_09_06_104446_add_close_trip_to_trips_table', 44),
(54, '2024_09_06_120152_add_logged_in_at_to_activity_logs_table', 45),
(55, '2024_09_06_134853_create_budgets_table', 46),
(56, '2024_09_06_135429_create_budgets_table', 47),
(57, '2024_09_06_143135_add_approved_by_and_approved_at_to_budgets_table', 48),
(58, '2024_09_06_145826_add_denied_by_to_budgets_table', 49),
(59, '2024_09_09_095156_add_location_to_trips_table', 49),
(60, '2024_09_09_095407_create_locations_table', 50),
(61, '2024_09_09_101904_create_locations_table', 51),
(62, '2024_09_09_104812_add_user_id_to_locations_table', 52),
(63, '2024_09_09_132726_create_delay_reports_table', 53),
(64, '2024_09_10_084108_create_g_d_r_accountings_table', 54),
(65, '2024_09_11_114559_add_bank_details_to_budgets_table', 55),
(66, '2024_09_12_093858_create_receivables_table', 56),
(67, '2024_09_13_130927_create_consignee_addresses_table', 57);

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
-- Table structure for table `preventives`
--

CREATE TABLE `preventives` (
  `id` bigint UNSIGNED NOT NULL,
  `parts_replaced` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_parts_replaced` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `plate_number` text COLLATE utf8mb4_unicode_ci,
  `truck_model` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `proof_of_need_to_fixed` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `proof_of_payment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preventives`
--

INSERT INTO `preventives` (`id`, `parts_replaced`, `price_parts_replaced`, `created_at`, `updated_at`, `plate_number`, `truck_model`, `proof_of_need_to_fixed`, `proof_of_payment`, `quantity`) VALUES
(12, 'WHEELS', '560', '2024-09-04 01:55:12', '2024-09-04 01:55:12', 'MCD-56432', 'Suzuki', '[\"proofs\\/corn.jpeg\",\"proofs\\/corn3.jpeg\"]', '[\"proofs\\/dmci.jpg\"]', '2'),
(13, 'WHEELS', '500', '2024-09-10 08:44:42', '2024-09-10 08:44:42', 'VCV-123', 'Suzuki', '[\"proofs\\/default.png\",\"proofs\\/flash.png\"]', '[\"proofs\\/footer.png\"]', '2'),
(14, 'WHEELS', '555', '2024-09-10 08:53:58', '2024-09-10 08:53:58', 'MCM-1998', 'Suzuki', '[\"proofs\\/GDR logo.png\"]', '[\"proofs\\/GvbF5WNNR1y-4y1STBZbOw.jpeg\"]', '2');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_salaries`
--

CREATE TABLE `pricing_salaries` (
  `id` bigint UNSIGNED NOT NULL,
  `delivery_routes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_salary` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `helper_salary` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_salaries`
--

INSERT INTO `pricing_salaries` (`id`, `delivery_routes`, `driver_salary`, `helper_salary`, `created_at`, `updated_at`) VALUES
(1, 'Bacolod', '8400', '3600', '2024-08-19 22:41:41', '2024-08-19 22:41:41'),
(2, 'Butuan', '11200', '4800', '2024-08-19 23:02:50', '2024-08-19 23:02:50'),
(3, 'Cagayan De Oro', '11900', '5100', '2024-08-19 23:19:09', '2024-08-19 23:19:09'),
(4, 'Calapan', '3500', '1500', '2024-08-19 23:22:09', '2024-08-19 23:22:09'),
(5, 'Cebu', '9800', '4200', '2024-08-19 23:23:24', '2024-08-19 23:23:24'),
(6, 'Davao', '12600', '5400', '2024-08-19 23:23:47', '2024-08-19 23:23:47'),
(10, 'IloIlo', '7700', '3300', '2024-08-19 23:33:45', '2024-08-19 23:33:45'),
(11, 'Ormoc', '6300', '2700', '2024-08-19 23:34:33', '2024-08-19 23:34:33'),
(12, 'Roxas', '3850', '1650', '2024-08-19 23:34:55', '2024-08-19 23:34:55'),
(13, 'Tacloban', '5950', '2550', '2024-08-19 23:35:33', '2024-08-19 23:35:33'),
(14, 'Tagum', '12250', '5250', '2024-08-19 23:36:35', '2024-08-19 23:36:35'),
(15, 'ILIGAN', '12950', '5550', '2024-08-19 23:37:35', '2024-08-19 23:37:35'),
(16, 'MASBATE', '4900', '2100', '2024-08-19 23:37:50', '2024-08-19 23:37:50'),
(17, 'MARINDUQUE', '3500', '1500', '2024-08-19 23:38:17', '2024-08-19 23:38:17'),
(18, 'GENSAN', '15400', '6600', '2024-08-19 23:38:30', '2024-08-19 23:38:30'),
(19, 'ZAMBOANGA', '15400', '6600', '2024-08-19 23:38:43', '2024-08-19 23:38:43'),
(20, 'NCR', '1260', '540', '2024-08-20 00:02:31', '2024-08-20 00:02:31'),
(21, 'BULACAN', '1540', '660', '2024-08-20 00:02:46', '2024-08-20 00:02:46'),
(22, 'BAGUIO', '3500', '1500', '2024-08-20 00:03:02', '2024-08-20 00:03:02'),
(23, 'PAMPANGA', '1680', '720', '2024-08-20 00:03:14', '2024-08-20 00:03:14'),
(24, 'NUEVA ICIJA/TARLAC', '1750', '750', '2024-08-20 00:03:50', '2024-08-20 00:03:50'),
(25, 'PANGASINAN', '2100', '900', '2024-08-20 00:04:02', '2024-08-20 00:04:02'),
(26, 'ISABELA/NUEVA VIZCAYA', '3150', '1350', '2024-08-20 00:04:25', '2024-08-20 00:04:25'),
(27, 'TUGUEGARAO', '3500', '1500', '2024-08-20 00:04:40', '2024-08-20 00:04:40'),
(28, 'LA UNION', '3150', '1350', '2024-08-20 00:04:55', '2024-08-20 00:04:55'),
(29, 'VIGAN', '3360', '1440', '2024-08-20 00:05:12', '2024-08-20 00:05:12'),
(30, 'LAOAG', '3500', '1500', '2024-08-20 00:05:29', '2024-08-20 00:05:29'),
(31, 'BATANGAS', '1540', '660', '2024-08-20 00:05:42', '2024-08-20 00:05:42'),
(32, 'QUEZON', '1960', '840', '2024-08-20 00:06:05', '2024-08-20 00:06:05'),
(33, 'NAGA', '2800', '1200', '2024-08-20 00:06:19', '2024-08-20 00:06:19'),
(34, 'LEGAZPI', '3150', '1350', '2024-08-20 00:06:42', '2024-08-20 00:06:42'),
(35, 'SORSOGON', '3500', '1500', '2024-08-20 00:06:58', '2024-08-20 00:06:58'),
(36, 'BAUAN BATANGAS/MEYCAUYAN', '1554', '666', '2024-08-20 00:07:17', '2024-08-20 00:07:17'),
(37, 'TRINIDAD', '3500', '1500', '2024-08-20 00:07:29', '2024-08-20 00:07:29'),
(38, 'ABRA', '3850', '1650', '2024-08-20 00:07:50', '2024-08-20 00:07:50'),
(39, 'ORIENTAL MINDORO', '3500', '1500', '2024-08-20 00:08:06', '2024-08-20 00:08:06'),
(40, 'MANSALAY', '4550', '1950', '2024-08-20 00:08:23', '2024-08-20 00:08:23'),
(41, 'BATANGAS/PASAY', '1750', '750', '2024-08-20 00:08:44', '2024-08-20 00:08:44'),
(42, 'BULACAN/PASAY', '1470', '630', '2024-08-20 00:09:06', '2024-08-20 00:09:06'),
(43, 'PASAY/INFANTA', '2100', '900', '2024-08-20 00:09:50', '2024-08-20 00:09:50'),
(44, 'PASAY/GUMACA QUEZON', '2450', '1050', '2024-08-20 00:10:07', '2024-08-20 00:10:07'),
(45, 'PASAY/MULANAY QUEZON', '2800', '1200', '2024-08-20 00:10:34', '2024-08-20 00:10:34'),
(46, 'PACO MANILA/ CATARMAN', '5250', '2250', '2024-08-20 00:10:53', '2024-08-20 00:10:53'),
(47, 'IPIL ZAMBOANGA/PAGADIAN', '1750', '750', '2024-08-20 00:11:16', '2024-08-20 00:11:16'),
(48, 'VALENZUELA/LUNA APAYAO', '3850', '1650', '2024-08-20 00:11:41', '2024-08-20 00:11:41'),
(49, 'CEBU/GENSAN', '6650', '2850', '2024-08-20 00:11:59', '2024-08-20 00:11:59'),
(50, 'CALAPAN', '5600', '3200', '2024-08-22 03:20:31', '2024-08-22 03:20:31');

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
-- Table structure for table `rate_per_miles`
--

CREATE TABLE `rate_per_miles` (
  `id` bigint UNSIGNED NOT NULL,
  `rate_per_mile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operational_costs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `plate_number` text COLLATE utf8mb4_unicode_ci,
  `date` datetime DEFAULT NULL,
  `proof_of_payment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `gross_income` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rate_per_miles`
--

INSERT INTO `rate_per_miles` (`id`, `rate_per_mile`, `operational_costs`, `km`, `created_at`, `updated_at`, `plate_number`, `date`, `proof_of_payment`, `gross_income`) VALUES
(33, '125', '1500', '25', '2024-09-10 07:17:01', '2024-09-10 07:18:19', 'D05-ABCQWE', '2024-09-13 15:18:00', NULL, '3125.00'),
(34, '500', '50005', '275', '2024-09-10 07:19:34', '2024-09-10 07:19:34', 'MCM-1998', '2024-09-11 15:19:00', NULL, '137500.00'),
(35, '5005', '555555', '1800', '2024-09-10 07:21:02', '2024-09-10 07:21:02', 'VCV-123', '2024-09-17 15:20:00', 'proofs_of_payment/1725952862.png', '7507500.00');

-- --------------------------------------------------------

--
-- Table structure for table `receivables`
--

CREATE TABLE `receivables` (
  `id` bigint UNSIGNED NOT NULL,
  `issuer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `borrower` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `principal` decimal(15,2) NOT NULL,
  `mode_of_payment` enum('principal','interest') COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_borrowed` date NOT NULL,
  `pay_now_date` date DEFAULT NULL,
  `pay_later_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receivables`
--

INSERT INTO `receivables` (`id`, `issuer`, `borrower`, `principal`, `mode_of_payment`, `date_borrowed`, `pay_now_date`, `pay_later_date`, `created_at`, `updated_at`) VALUES
(1, 'Justin Mangubat De Castro', '3', 50000.00, 'principal', '2024-09-05', '2024-09-12', NULL, '2024-09-12 01:44:18', '2024-09-12 01:44:18'),
(2, 'Justin Mangubat De Castro', '3', 50000.00, 'principal', '2024-09-05', '2024-09-12', NULL, '2024-09-12 01:44:31', '2024-09-12 01:44:31'),
(3, 'Justin Mangubat De Castros', '1', 670000.00, 'interest', '2024-08-15', NULL, '2024-09-20', '2024-09-12 05:28:19', '2024-09-12 05:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `return_items`
--

CREATE TABLE `return_items` (
  `id` bigint UNSIGNED NOT NULL,
  `return_date` date NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_quantity` int NOT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_id` bigint UNSIGNED DEFAULT NULL,
  `proof_of_return` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `return_items`
--

INSERT INTO `return_items` (`id`, `return_date`, `product_name`, `return_reason`, `return_quantity`, `condition`, `driver_id`, `proof_of_return`, `status`, `created_at`, `updated_at`) VALUES
(10, '2024-09-18', 'Gaming Chair', 'asd', 2, 'Damaged', NULL, '1725869975.jpg', 'approved', '2024-09-09 08:19:35', '2024-09-13 05:31:52'),
(11, '2024-09-10', 'Avida Tower Elevator', 'wrong item', 2, 'damaged and wrong', NULL, '1725870828.png', 'approved', '2024-09-09 08:33:48', '2024-09-13 05:33:36');

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
  `tracking_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `rider_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rubixes`
--

INSERT INTO `rubixes` (`id`, `sender_name`, `transport_mode`, `shipping_type`, `delivery_type`, `journey_type`, `consignee_name`, `consignee_address`, `consignee_email`, `consignee_mobile`, `consignee_city`, `consignee_province`, `consignee_barangay`, `consignee_building_type`, `merchant_name`, `merchant_address`, `merchant_email`, `merchant_mobile`, `merchant_city`, `merchant_province`, `created_at`, `updated_at`, `tracking_number`, `updated_by`, `rider_id`) VALUES
(1, 'Justin Mangubat De Castro', 'Land', 'Land', 'Regular', 'Regular', 'Mangubat Gasoline Station', 'Pola Oriental Mindoro', 'admin@admin.com', '09456754591', 'makati', 'Oriental Mindoro', 'Tagbakin', 'Industrial', 'Choox', 'pola oriental mindoro', 'pola@email.com', '09456754591', 'makati', 'oriental mindoro', '2024-08-17 04:34:57', '2024-08-17 04:34:57', NULL, NULL, 0),
(2, 'Justin Mangubat De Castro', 'Land', 'Land', 'Regular', 'Regular', 'Mangubat Gasoline Station', 'Pola Oriental Mindoro', 'admin@admin.com', '09456754591', 'makati', 'Oriental Mindoro', 'Tagbakin', 'Industrial', 'Choox', 'pola oriental mindoro', 'pola@email.com', '09456754591', 'makati', 'oriental mindoro', '2024-08-17 04:35:36', '2024-08-17 04:35:36', NULL, NULL, 0),
(3, 'Justin Mangubat De Castro', 'Land', 'Land', 'Regular', 'Regular', 'Mangubat Gasoline Station', 'Pola Oriental Mindoro', 'admin@admin.com', '09456754591', 'makati', 'Oriental Mindoro', 'Tagbakin', 'Industrial', 'Choox', 'pola oriental mindoro', 'pola@email.com', '09456754591', 'makati', 'oriental mindoro', '2024-08-17 06:16:12', '2024-08-17 06:16:12', NULL, NULL, 0),
(4, 'Justin Mangubat De Castro', 'Land', 'Land', 'Regular', 'Regular', 'Mangubat Gasoline Station', 'Pola Oriental Mindoro', 'admin@admin.com', '09456754591', 'makati', 'Oriental Mindoro', 'Tagbakin', 'Industrial', 'Choox', 'pola oriental mindoro', 'pola@email.com', '09456754591', 'makati', 'oriental mindoro', '2024-08-17 06:17:30', '2024-08-17 06:17:30', NULL, NULL, 0),
(5, 'Justin Mangubat De Castro', 'Land', 'Land', 'Regular', 'Regular', 'Mangubat Gasoline Station', 'Pola Oriental Mindoro', 'admin@admin.com', '09456754591', 'makati', 'Oriental Mindoro', 'Tagbakin', 'Industrial', 'Choox', 'pola oriental mindoro', 'pola@email.com', '09456754591', 'makati', 'oriental mindoro', '2024-08-17 06:18:09', '2024-08-17 06:18:09', 'GPC-34220415766BFDE314B0213.90994180', NULL, 0),
(6, 'Justin Mangubat De Castro', 'Land', 'Land', 'Regular', 'Regular', 'Mangubat Gasoline Station', 'Pola Oriental Mindoro', 'admin@admin.com', '09456754591', 'makati', 'Oriental Mindoro', 'Tagbakin', 'Industrial', 'Choox', 'pola oriental mindoro', 'pola@email.com', '09456754591', 'makati', 'oriental mindoro', '2024-08-17 06:31:43', '2024-08-17 06:31:43', 'GPC-156232497766BFE15F3AFE74.96969639', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qr_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, 2, 100000.00, '2024-08-29 06:34:21', '2024-08-29 06:34:21'),
(6, 4, 600000.00, '2024-08-29 11:41:21', '2024-08-29 11:41:21'),
(7, 5, 500000.00, '2024-09-04 06:25:33', '2024-09-04 06:25:33'),
(8, 5, 500000.00, '2024-09-04 06:25:55', '2024-09-04 06:25:55'),
(9, 6, 5.00, '2024-09-11 02:42:22', '2024-09-11 02:42:22'),
(10, 1, 6700000.00, '2024-09-11 02:43:47', '2024-09-11 02:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `subcontractors`
--

CREATE TABLE `subcontractors` (
  `id` bigint UNSIGNED NOT NULL,
  `company_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcontractor_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_upload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `truck_capacity` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `plate_number` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcontractors`
--

INSERT INTO `subcontractors` (`id`, `company_name`, `subcontractor_id`, `full_name`, `address`, `email_address`, `phone_number`, `file_upload`, `created_at`, `updated_at`, `truck_capacity`, `plate_number`) VALUES
(3, 'Infinitech', '1', 'Justin De Castro', 'Makati City', 'decastrojustin321@gmail.com', '09456754591', 'uploads/1726451883_Picture1.jpg', '2024-09-16 01:58:03', '2024-09-16 01:58:03', '567kg', 'QWERTY-123'),
(5, 'TR3', '2', 'Justin De Castro', 'Cabuyao Laguna', 'tr3@gmail.com', '09456754591', 'uploads/1726457559_Picture1.jpg', '2024-09-16 03:32:39', '2024-09-16 03:32:39', '1500kg', 'VBV-1234');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `account_id` bigint UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `particulars` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit_amount` decimal(10,2) DEFAULT '0.00',
  `withdraw_amount` decimal(10,2) DEFAULT '0.00',
  `expense_amount` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `proof_payment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_channel` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `account_id`, `date`, `particulars`, `deposit_amount`, `withdraw_amount`, `expense_amount`, `proof_payment`, `notes`, `created_at`, `updated_at`, `payment_channel`) VALUES
(24, 1, '2024-08-24 15:07:00', '100 Box of Canned Goods', 57000.00, 0.00, NULL, 'proofs/1724310451_GDR logo.png', 'Guava Ripe', '2024-08-22 07:07:31', '2024-08-22 07:07:31', 'GCash'),
(25, 2, '2024-08-31 14:33:00', 'Mangoes', 340000.00, 0.00, NULL, 'proofs/1724913221_corn3.jpeg', 'Banana Hinog', '2024-08-29 06:33:41', '2024-08-29 06:33:41', 'GCash'),
(26, 2, '2024-08-30 00:00:00', 'Mango', 0.00, 100000.00, NULL, NULL, 'Mango ripe', '2024-08-29 06:35:09', '2024-08-29 06:35:09', NULL),
(27, 2, '2024-09-01 00:00:00', 'Mangoes', 0.00, 20000.00, NULL, NULL, 'Fragile', '2024-08-29 06:36:16', '2024-08-29 06:36:16', NULL),
(28, 1, '2024-08-31 00:00:00', '100 Box of Canned Goods', 0.00, 7000.00, NULL, NULL, 'BananaPajama', '2024-08-29 08:31:12', '2024-08-29 08:31:12', NULL),
(29, 4, '2024-08-30 19:40:00', '100 Box of Canned Goods', 560000.00, 0.00, NULL, 'proofs/1724931628_corn2.jpeg', 'Fragile', '2024-08-29 11:40:28', '2024-08-29 11:40:28', 'GCash'),
(30, 4, '2024-08-30 00:00:00', '100 Box of Canned Goods', 0.00, 60000.00, NULL, NULL, 'expenasasd', '2024-08-29 11:40:57', '2024-08-29 11:40:57', NULL),
(31, 2, '2024-09-13 16:12:00', 'Mango', 10000.00, 0.00, NULL, 'proofs/1725351180_Screenshot (2).png', 'wala', '2024-09-03 08:13:00', '2024-09-03 08:13:00', 'GCash'),
(32, 2, '2024-09-12 00:00:00', 'Mango', 0.00, 30000.00, NULL, NULL, 'Guava Ripe', '2024-09-03 08:13:43', '2024-09-03 08:13:43', NULL),
(33, 5, '2024-09-04 14:22:00', '100 Box of Canned Goods', 100000.00, 0.00, NULL, 'proofs/1725430983_1719968956_6684a4bc5fbc3.jpg', 'Banana Hinog', '2024-09-04 06:23:03', '2024-09-04 06:23:03', 'GCash'),
(34, 5, '2024-09-04 00:00:00', 'Mangoes', 0.00, 20000.00, NULL, NULL, 'Mango ripe', '2024-09-04 06:23:36', '2024-09-04 06:23:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint UNSIGNED NOT NULL,
  `arrival_proof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trip_completion` enum('Returned Successfully','Pending') COLLATE utf8mb4_unicode_ci NOT NULL,
  `plate_number` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `proof_of_delivery` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `arrival_proof`, `trip_completion`, `plate_number`, `created_at`, `updated_at`, `proof_of_delivery`, `status`) VALUES
(1, '1725524883.png', 'Returned Successfully', NULL, '2024-09-05 08:28:03', '2024-09-12 08:15:11', NULL, 'Closed'),
(2, 'arrival_proofs/IgdjOt40QwQxf0tFYS6lKDIBHP7JsLfcuiIzmP6P.png', 'Returned Successfully', 'D05-ABCDE', '2024-09-06 02:26:58', '2024-09-12 08:23:33', NULL, 'Closed'),
(3, '1725589754.png', 'Returned Successfully', 'D05-ABCQWE', '2024-09-06 02:29:14', '2024-09-06 02:29:14', NULL, 'Pending'),
(4, '1725590720.png', 'Returned Successfully', 'MCM-19989', '2024-09-06 02:45:20', '2024-09-06 02:45:20', NULL, 'Pending'),
(5, '\"[\\\"1725608356_arrival_66dab1a4cc481.png\\\"]\"', 'Returned Successfully', 'MCM-19989', '2024-09-06 07:39:16', '2024-09-06 07:39:16', '\"[\\\"1725608356_pod_66dab1a4cf246.png\\\"]\"', 'Pending'),
(6, '\"[\\\"1725608533_arrival_66dab2559f075.jpg\\\",\\\"1725608533_arrival_66dab255a42ce.jpg\\\"]\"', 'Returned Successfully', 'MCM-19989', '2024-09-06 07:42:13', '2024-09-06 07:42:13', '\"[\\\"1725608533_pod_66dab255a54f7.png\\\",\\\"1725608533_pod_66dab255a6001.png\\\"]\"', 'Pending'),
(7, '\"[\\\"1725864910_arrival_66de9bce51c84.jpg\\\"]\"', 'Returned Successfully', 'MCM-19989', '2024-09-09 06:55:10', '2024-09-09 06:55:10', '\"[\\\"1725864910_pod_66de9bceeb35e.jpg\\\"]\"', 'Pending'),
(8, '\"[\\\"1726126800_arrival_66e29ad0af688.png\\\"]\"', 'Returned Successfully', 'D05-ABCQWE', '2024-09-12 07:40:00', '2024-09-12 07:40:00', '\"[\\\"1726126800_pod_66e29ad0b40ac.jpg\\\"]\"', 'Pending'),
(9, '\"[\\\"1726127197_arrival_66e29c5dec14b.jpg\\\"]\"', 'Returned Successfully', 'MCM-1998', '2024-09-12 07:46:38', '2024-09-12 07:46:38', '\"[\\\"1726127197_pod_66e29c5df0138.png\\\"]\"', 'Pending'),
(10, '\"[\\\"1726127231_arrival_66e29c7f160ef.png\\\"]\"', 'Pending', 'VCV-123', '2024-09-12 07:47:11', '2024-09-12 07:47:11', '\"[\\\"1726127231_pod_66e29c7f1951a.png\\\"]\"', 'Pending'),
(11, '\"[\\\"1726127565_arrival_66e29dcd77c2c.jpg\\\"]\"', 'Returned Successfully', 'D05-ABCDe', '2024-09-12 07:52:45', '2024-09-12 07:52:45', '\"[\\\"1726127565_pod_66e29dcd7e1bd.png\\\"]\"', 'Pending');

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
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `driver_image` text COLLATE utf8mb4_unicode_ci,
  `verification_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `license_expiration` text COLLATE utf8mb4_unicode_ci,
  `status` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `driver_license`, `license_number`, `contact_number`, `plate_number`, `address`, `driver_image`, `verification_code`, `is_verified`, `license_expiration`, `status`) VALUES
(13, 'Justin', 'admin@admin.com', NULL, '$2y$12$5DHxafkn/hu1bOrnU01CHOS.LrJE1UzQyBWaDiqAuf2vdj/jmRlLy', NULL, '2024-08-14 03:52:24', '2024-08-14 03:52:24', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(18, 'Driver 110', 'driver110@gmail.com', NULL, '$2y$12$Ik4mzsZbwlKbcyr59.IP4.4QwxnO93QiMn7RszascysMg0yBREQDm', NULL, '2024-08-14 07:13:52', '2024-09-13 06:07:02', 'courier', 'driver_licenses/1723594432_6185769061598739636.jpg', 'D05-17-335223', '09456754591', NULL, 'Calapan Mindoro', NULL, NULL, 0, NULL, 'terminated'),
(31, 'Justin Mangubat De Castros', 'inorganicdrake@gmail.com', NULL, '$2y$12$sBpx8Qx2hqnbW7LAE.ET2OCa9M/n5bvysSc9grduScqjz9hkZWUT6', NULL, '2024-08-30 07:35:48', '2024-09-13 06:57:14', 'courier', 'licenses/1726210634-images.png', 'D09-788862', '09456754591', NULL, 'Makati City', 'driver_images/1725003347_Screenshot (13).png', NULL, 1, '2024-09-26', 'renewed'),
(33, 'Justin Mangubat De Castro', 'decastrojustin321@gmail.com', NULL, '$2y$12$z0AamgocnFGJJAP8UUfHAuOKeA7GFVZhuQNqdXVynZq7FryYV1Ugm', NULL, '2024-09-04 00:00:07', '2024-09-04 00:00:52', 'accounting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(34, 'Darlene Angel', 'decastrojustin24@gmail.com', NULL, '$2y$12$qDxF3gYBr5bUmgXz7Zwdh.knNUHsF116WpLK5fr9qD0bQQGGqNVOG', NULL, '2024-09-05 03:53:44', '2024-09-05 03:54:17', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(37, 'Justin Mangubat De Castro Coordinator', '23jb6.justin@bcrvtvi.edu.ph', NULL, '$2y$12$qGHCIVLjRWZEs0uTLY.WmO8JuRUSRyDpsoWh1pPCgJp/9OEjiRqeq', NULL, '2024-09-05 04:59:45', '2024-09-05 04:59:45', 'coordinator', NULL, NULL, NULL, NULL, NULL, NULL, 'GDR-TueNA7', 1, NULL, NULL),
(40, 'Darlene Angel', 'infinitech.justin2024@gmail.com', NULL, '$2y$12$2.3sC/SOwqnH/k4y4uYe1.ihCJlIQrpA2r7jnMeNM8V0sL3Zod.zi', NULL, '2024-09-09 00:28:52', '2024-09-09 00:29:46', 'courier', 'driver_licenses/1725841732_corn.jpeg', 'D05-17-333225', '09456754591', NULL, 'Makati City', 'driver_images/1725841732_corn2.jpeg', NULL, 1, '2024-09-12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint UNSIGNED NOT NULL,
  `truck_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `truck_capacity` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `operator_name` text COLLATE utf8mb4_unicode_ci,
  `truck_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `operator_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `plate_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `truck_model` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `or` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cr` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `truck_name`, `truck_capacity`, `operator_name`, `truck_status`, `quantity`, `operator_id`, `created_at`, `updated_at`, `plate_number`, `truck_model`, `or`, `cr`) VALUES
(14, 'isuzu', '567kg', NULL, 'available', '23', NULL, '2024-09-12 06:56:44', '2024-09-16 08:06:58', 'MCM-1998', 'Suzuki', 'documents/1726125459_or_official.jpeg', 'documents/1726125468_cr_new-lto-certificate-of-registration-604addbf02645.jpg'),
(15, 'isuzu', '567kg', NULL, 'available', '53', NULL, '2024-09-12 07:18:24', '2024-09-16 03:27:44', 'MCD-56432', 'Suzuki', 'documents/1726125515_or_official.jpeg', 'documents/1726125504_cr_cer.jpeg'),
(16, 'GDR TRUCKING', '500kg', NULL, 'available', '55', NULL, '2024-09-13 06:37:21', '2024-09-13 06:37:21', 'ABCDEFG123', 'Man', 'documents/1726209441_or_official.jpeg', 'documents/1726209441_cr_new-lto-certificate-of-registration-604addbf02645.jpg'),
(17, 'GDR TRUCK', '500kg', 'GDR TRUCKING', 'available', '52', NULL, '2024-09-13 06:53:54', '2024-09-16 01:31:53', 'ABCDEFG12345', 'Man', 'documents/1726210434_or_official.jpeg', 'documents/1726210434_cr_cer.jpeg');

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
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_logs_user_id_foreign` (`user_id`),
  ADD KEY `activity_logs_booking_id_foreign` (`booking_id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendances_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bookings_order_number_unique` (`order_number`),
  ADD KEY `bookings_driver_id_foreign` (`driver_id`),
  ADD KEY `bookings_assigned_driver_id_foreign` (`assigned_driver_id`),
  ADD KEY `bookings_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `bookings_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `branch_managers`
--
ALTER TABLE `branch_managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branch_managers_email_unique` (`email`);

--
-- Indexes for table `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `budgets_approved_by_foreign` (`approved_by`);

--
-- Indexes for table `consignee_addresses`
--
ALTER TABLE `consignee_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consignee_addresses_booking_id_foreign` (`booking_id`);

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
-- Indexes for table `delay_reports`
--
ALTER TABLE `delay_reports`
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
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`id_number`);

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g_d_r_accountings`
--
ALTER TABLE `g_d_r_accountings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locations_user_id_foreign` (`user_id`);

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
-- Indexes for table `preventives`
--
ALTER TABLE `preventives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_salaries`
--
ALTER TABLE `pricing_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proof_payments`
--
ALTER TABLE `proof_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate_per_miles`
--
ALTER TABLE `rate_per_miles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receivables`
--
ALTER TABLE `receivables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_items`
--
ALTER TABLE `return_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `return_items_driver_id_foreign` (`driver_id`);

--
-- Indexes for table `rubixes`
--
ALTER TABLE `rubixes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rubixes_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_qr_code_unique` (`qr_code`);

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
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=831;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `branch_managers`
--
ALTER TABLE `branch_managers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `budgets`
--
ALTER TABLE `budgets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `consignee_addresses`
--
ALTER TABLE `consignee_addresses`
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
-- AUTO_INCREMENT for table `delay_reports`
--
ALTER TABLE `delay_reports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `g_d_r_accountings`
--
ALTER TABLE `g_d_r_accountings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manage_branches`
--
ALTER TABLE `manage_branches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preventives`
--
ALTER TABLE `preventives`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pricing_salaries`
--
ALTER TABLE `pricing_salaries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `proof_payments`
--
ALTER TABLE `proof_payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rate_per_miles`
--
ALTER TABLE `rate_per_miles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `receivables`
--
ALTER TABLE `receivables`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `return_items`
--
ALTER TABLE `return_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rubixes`
--
ALTER TABLE `rubixes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `starting_balances`
--
ALTER TABLE `starting_balances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subcontractors`
--
ALTER TABLE `subcontractors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `activity_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_assigned_driver_id_foreign` FOREIGN KEY (`assigned_driver_id`) REFERENCES `bookings` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `bookings_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT,
  ADD CONSTRAINT `bookings_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `bookings_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `budgets`
--
ALTER TABLE `budgets`
  ADD CONSTRAINT `budgets_approved_by_foreign` FOREIGN KEY (`approved_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `consignee_addresses`
--
ALTER TABLE `consignee_addresses`
  ADD CONSTRAINT `consignee_addresses_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `return_items`
--
ALTER TABLE `return_items`
  ADD CONSTRAINT `return_items_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `rubixes`
--
ALTER TABLE `rubixes`
  ADD CONSTRAINT `rubixes_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

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
