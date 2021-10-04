-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 04:37 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL DEFAULT 0,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `parent_id`, `order`, `title`, `icon`, `uri`, `permission`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Dashboard', 'fa-bar-chart', '/', NULL, NULL, NULL),
(2, 0, 2, 'Admin', 'fa-tasks', '', NULL, NULL, NULL),
(3, 2, 3, 'Users', 'fa-users', 'auth/users', NULL, NULL, NULL),
(4, 2, 4, 'Roles', 'fa-user', 'auth/roles', NULL, NULL, NULL),
(5, 2, 5, 'Permission', 'fa-ban', 'auth/permissions', NULL, NULL, NULL),
(6, 2, 6, 'Menu', 'fa-bars', 'auth/menu', NULL, NULL, NULL),
(7, 2, 7, 'Operation log', 'fa-history', 'auth/logs', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_operation_log`
--

CREATE TABLE `admin_operation_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_operation_log`
--

INSERT INTO `admin_operation_log` (`id`, `user_id`, `path`, `method`, `ip`, `input`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'GET', '127.0.0.1', '[]', '2021-10-03 23:33:06', '2021-10-03 23:33:06'),
(2, 1, 'admin/sites', 'GET', '127.0.0.1', '[]', '2021-10-03 23:33:16', '2021-10-03 23:33:16'),
(3, 1, 'admin/sites/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-03 23:33:20', '2021-10-03 23:33:20'),
(4, 1, 'admin/sites', 'POST', '127.0.0.1', '{\"content\":{\"Phone\":\"11111111111\",\"Email\":\"hhtuan@gmail.com\",\"Address\":\"h\\u00e0 n\\u1ed9i\"},\"_token\":\"cBsoVJ03ZKg9UDiG4MNG0PVko32liAquyoTvGI7Q\",\"_previous_\":\"http:\\/\\/localhost:8000\\/admin\\/sites\"}', '2021-10-03 23:33:40', '2021-10-03 23:33:40'),
(5, 1, 'admin/sites', 'GET', '127.0.0.1', '[]', '2021-10-03 23:33:41', '2021-10-03 23:33:41'),
(6, 1, 'admin/sites', 'GET', '127.0.0.1', '[]', '2021-10-03 23:34:14', '2021-10-03 23:34:14'),
(7, 1, 'admin/sites', 'GET', '127.0.0.1', '[]', '2021-10-03 23:34:49', '2021-10-03 23:34:49'),
(8, 1, 'admin/_handle_action_', 'POST', '127.0.0.1', '{\"_key\":\"1\",\"_model\":\"App_Models_Site\",\"_token\":\"cBsoVJ03ZKg9UDiG4MNG0PVko32liAquyoTvGI7Q\",\"_action\":\"Encore_Admin_Grid_Actions_Delete\",\"_input\":\"true\"}', '2021-10-03 23:34:54', '2021-10-03 23:34:54'),
(9, 1, 'admin/sites', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-03 23:34:55', '2021-10-03 23:34:55'),
(10, 1, 'admin/sites/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-03 23:34:56', '2021-10-03 23:34:56'),
(11, 1, 'admin/sites', 'POST', '127.0.0.1', '{\"content\":{\"Phone\":\"11111111111\",\"Email\":\"hhtuan@gmail.com\",\"Address\":\"11111111\"},\"_token\":\"cBsoVJ03ZKg9UDiG4MNG0PVko32liAquyoTvGI7Q\",\"_previous_\":\"http:\\/\\/localhost:8000\\/admin\\/sites\"}', '2021-10-03 23:35:08', '2021-10-03 23:35:08'),
(12, 1, 'admin/sites', 'GET', '127.0.0.1', '[]', '2021-10-03 23:35:08', '2021-10-03 23:35:08'),
(13, 1, 'admin/sites/2/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-03 23:35:57', '2021-10-03 23:35:57'),
(14, 1, 'admin/sites/2', 'PUT', '127.0.0.1', '{\"content\":{\"Phone\":\"11111111111\",\"Email\":\"hhtuan@gmail.com\",\"Address\":\"111111111111\"},\"_token\":\"cBsoVJ03ZKg9UDiG4MNG0PVko32liAquyoTvGI7Q\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/localhost:8000\\/admin\\/sites\"}', '2021-10-03 23:36:08', '2021-10-03 23:36:08'),
(15, 1, 'admin/sites', 'GET', '127.0.0.1', '[]', '2021-10-03 23:36:08', '2021-10-03 23:36:08'),
(16, 1, 'admin/products', 'GET', '127.0.0.1', '[]', '2021-10-03 23:36:22', '2021-10-03 23:36:22'),
(17, 1, 'admin/products/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-03 23:39:22', '2021-10-03 23:39:22'),
(18, 1, 'admin/products', 'POST', '127.0.0.1', '{\"product_name\":\"sdasd\",\"description\":\"<p>d&aacute;dd\\u0111<\\/p>\",\"price\":\"111.00\",\"quantity\":\"2\",\"categories\":[null],\"_token\":\"cBsoVJ03ZKg9UDiG4MNG0PVko32liAquyoTvGI7Q\",\"_previous_\":\"http:\\/\\/localhost:8000\\/admin\\/products\"}', '2021-10-03 23:39:43', '2021-10-03 23:39:43'),
(19, 1, 'admin/products', 'GET', '127.0.0.1', '[]', '2021-10-03 23:39:44', '2021-10-03 23:39:44'),
(20, 1, 'admin/categories', 'GET', '127.0.0.1', '[]', '2021-10-03 23:39:57', '2021-10-03 23:39:57'),
(21, 1, 'admin/categories/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-03 23:40:02', '2021-10-03 23:40:02'),
(22, 1, 'admin/categories', 'POST', '127.0.0.1', '{\"category_name\":\"magic\",\"_token\":\"cBsoVJ03ZKg9UDiG4MNG0PVko32liAquyoTvGI7Q\",\"_previous_\":\"http:\\/\\/localhost:8000\\/admin\\/categories\"}', '2021-10-03 23:40:06', '2021-10-03 23:40:06'),
(23, 1, 'admin/categories', 'GET', '127.0.0.1', '[]', '2021-10-03 23:40:07', '2021-10-03 23:40:07'),
(24, 1, 'admin/categories/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-03 23:40:09', '2021-10-03 23:40:09'),
(25, 1, 'admin/categories', 'POST', '127.0.0.1', '{\"category_name\":\"anime\",\"_token\":\"cBsoVJ03ZKg9UDiG4MNG0PVko32liAquyoTvGI7Q\",\"_previous_\":\"http:\\/\\/localhost:8000\\/admin\\/categories\"}', '2021-10-03 23:40:14', '2021-10-03 23:40:14'),
(26, 1, 'admin/categories', 'GET', '127.0.0.1', '[]', '2021-10-03 23:40:15', '2021-10-03 23:40:15'),
(27, 1, 'admin/products/1/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-03 23:40:18', '2021-10-03 23:40:18'),
(28, 1, 'admin/products/1', 'PUT', '127.0.0.1', '{\"product_name\":\"sdasd\",\"description\":\"<p>d&aacute;dd\\u0111<\\/p>\",\"price\":\"111.00\",\"quantity\":\"2\",\"categories\":[\"1\",null],\"_token\":\"cBsoVJ03ZKg9UDiG4MNG0PVko32liAquyoTvGI7Q\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/localhost:8000\\/admin\\/products\"}', '2021-10-03 23:40:22', '2021-10-03 23:40:22'),
(29, 1, 'admin/products', 'GET', '127.0.0.1', '[]', '2021-10-03 23:40:22', '2021-10-03 23:40:22'),
(30, 1, 'admin/products/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-03 23:40:23', '2021-10-03 23:40:23'),
(31, 1, 'admin/products', 'POST', '127.0.0.1', '{\"product_name\":\"\\u00e1dsadsd\",\"description\":\"<p>\\u0111&acirc;sdas<\\/p>\",\"price\":\"231.00\",\"quantity\":\"3\",\"categories\":[\"2\",null],\"_token\":\"cBsoVJ03ZKg9UDiG4MNG0PVko32liAquyoTvGI7Q\",\"_previous_\":\"http:\\/\\/localhost:8000\\/admin\\/products\"}', '2021-10-03 23:40:35', '2021-10-03 23:40:35'),
(32, 1, 'admin/products', 'GET', '127.0.0.1', '[]', '2021-10-03 23:40:37', '2021-10-03 23:40:37'),
(33, 1, 'admin/products/create', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-03 23:40:38', '2021-10-03 23:40:38'),
(34, 1, 'admin', 'GET', '127.0.0.1', '[]', '2021-10-04 03:14:48', '2021-10-04 03:14:48'),
(35, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:14:56', '2021-10-04 03:14:56'),
(36, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:18:02', '2021-10-04 03:18:02'),
(37, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:18:26', '2021-10-04 03:18:26'),
(38, 1, 'admin/bills/82/edit', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-04 03:19:00', '2021-10-04 03:19:00'),
(39, 1, 'admin/bills', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-04 03:19:02', '2021-10-04 03:19:02'),
(40, 1, 'admin/bills/82', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-04 03:19:03', '2021-10-04 03:19:03'),
(41, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:19:04', '2021-10-04 03:19:04'),
(42, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:19:29', '2021-10-04 03:19:29'),
(43, 1, 'admin/bills/82', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-04 03:19:33', '2021-10-04 03:19:33'),
(44, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:19:34', '2021-10-04 03:19:34'),
(45, 1, 'admin/bills/82', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-04 03:20:36', '2021-10-04 03:20:36'),
(46, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:20:37', '2021-10-04 03:20:37'),
(47, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:22:27', '2021-10-04 03:22:27'),
(48, 1, 'admin/bills/82', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-04 03:22:31', '2021-10-04 03:22:31'),
(49, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:23:28', '2021-10-04 03:23:28'),
(50, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:23:59', '2021-10-04 03:23:59'),
(51, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:26:52', '2021-10-04 03:26:52'),
(52, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:27:35', '2021-10-04 03:27:35'),
(53, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:27:49', '2021-10-04 03:27:49'),
(54, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:29:21', '2021-10-04 03:29:21'),
(55, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:30:09', '2021-10-04 03:30:09'),
(56, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:30:37', '2021-10-04 03:30:37'),
(57, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:31:12', '2021-10-04 03:31:12'),
(58, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:31:22', '2021-10-04 03:31:22'),
(59, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:32:56', '2021-10-04 03:32:56'),
(60, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:33:04', '2021-10-04 03:33:04'),
(61, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:33:18', '2021-10-04 03:33:18'),
(62, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:36:52', '2021-10-04 03:36:52'),
(63, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:37:04', '2021-10-04 03:37:04'),
(64, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:37:18', '2021-10-04 03:37:18'),
(65, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:37:32', '2021-10-04 03:37:32'),
(66, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:37:41', '2021-10-04 03:37:41'),
(67, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:37:46', '2021-10-04 03:37:46'),
(68, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:38:00', '2021-10-04 03:38:00'),
(69, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:38:30', '2021-10-04 03:38:30'),
(70, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:38:37', '2021-10-04 03:38:37'),
(71, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:38:48', '2021-10-04 03:38:48'),
(72, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:39:00', '2021-10-04 03:39:00'),
(73, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:39:20', '2021-10-04 03:39:20'),
(74, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:39:51', '2021-10-04 03:39:51'),
(75, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:40:52', '2021-10-04 03:40:52'),
(76, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:40:59', '2021-10-04 03:40:59'),
(77, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:41:41', '2021-10-04 03:41:41'),
(78, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:41:47', '2021-10-04 03:41:47'),
(79, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:43:08', '2021-10-04 03:43:08'),
(80, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:43:18', '2021-10-04 03:43:18'),
(81, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:43:53', '2021-10-04 03:43:53'),
(82, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:44:23', '2021-10-04 03:44:23'),
(83, 1, 'admin/bills/82', 'GET', '127.0.0.1', '[]', '2021-10-04 03:45:52', '2021-10-04 03:45:52'),
(84, 1, 'admin/bills/83', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-04 03:46:12', '2021-10-04 03:46:12'),
(85, 1, 'admin/bills', 'GET', '127.0.0.1', '{\"_pjax\":\"#pjax-container\"}', '2021-10-04 03:46:16', '2021-10-04 03:46:16'),
(86, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:49:11', '2021-10-04 03:49:11'),
(87, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:49:43', '2021-10-04 03:49:43'),
(88, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:50:05', '2021-10-04 03:50:05'),
(89, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:51:03', '2021-10-04 03:51:03'),
(90, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:53:57', '2021-10-04 03:53:57'),
(91, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:54:20', '2021-10-04 03:54:20'),
(92, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:54:43', '2021-10-04 03:54:43'),
(93, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:55:00', '2021-10-04 03:55:00'),
(94, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:55:12', '2021-10-04 03:55:12'),
(95, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:55:22', '2021-10-04 03:55:22'),
(96, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:55:31', '2021-10-04 03:55:31'),
(97, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 03:56:03', '2021-10-04 03:56:03'),
(98, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 04:01:48', '2021-10-04 04:01:48'),
(99, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 04:02:38', '2021-10-04 04:02:38'),
(100, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 04:02:48', '2021-10-04 04:02:48'),
(101, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 04:03:08', '2021-10-04 04:03:08'),
(102, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 04:03:44', '2021-10-04 04:03:44'),
(103, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 04:04:02', '2021-10-04 04:04:02'),
(104, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 04:04:41', '2021-10-04 04:04:41'),
(105, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 04:06:34', '2021-10-04 04:06:34'),
(106, 1, 'admin/bills', 'GET', '127.0.0.1', '[]', '2021-10-04 04:07:10', '2021-10-04 04:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `admin_permissions`
--

CREATE TABLE `admin_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `http_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_permissions`
--

INSERT INTO `admin_permissions` (`id`, `name`, `slug`, `http_method`, `http_path`, `created_at`, `updated_at`) VALUES
(1, 'All permission', '*', '', '*', NULL, NULL),
(2, 'Dashboard', 'dashboard', 'GET', '/', NULL, NULL),
(3, 'Login', 'auth.login', '', '/auth/login\r\n/auth/logout', NULL, NULL),
(4, 'User setting', 'auth.setting', 'GET,PUT', '/auth/setting', NULL, NULL),
(5, 'Auth management', 'auth.management', '', '/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator', '2021-10-03 23:13:26', '2021-10-03 23:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_menu`
--

CREATE TABLE `admin_role_menu` (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_menu`
--

INSERT INTO `admin_role_menu` (`role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_permissions`
--

CREATE TABLE `admin_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_permissions`
--

INSERT INTO `admin_role_permissions` (`role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_users`
--

CREATE TABLE `admin_role_users` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_users`
--

INSERT INTO `admin_role_users` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$ZQq3u/DIaaroHqogp3Dg9.TZ.B2XxhVdNQHKHnafxdYFnxXb0qGpK', 'Administrator', NULL, 'akwpUvKA5Mw892FqDtDcYH5rYDMMf8paESL2KmgydZRytyQELj9UkZxs3pAo', '2021-10-03 23:13:26', '2021-10-03 23:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_permissions`
--

CREATE TABLE `admin_user_permissions` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `user_id`, `subtotal`, `created_at`, `updated_at`) VALUES
(82, 1, '342.00', NULL, NULL),
(83, 1, '111.00', '2021-10-04 01:32:31', '2021-10-04 01:32:31'),
(84, 1, '231.00', '2021-10-04 02:13:42', '2021-10-04 02:13:42'),
(85, 1, '231.00', '2021-10-04 02:16:12', '2021-10-04 02:16:12'),
(86, 1, '111.00', '2021-10-04 02:38:45', '2021-10-04 02:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `bill_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`id`, `product_id`, `bill_id`, `quantity`, `created_at`, `updated_at`) VALUES
(115, 1, 82, 1, '2021-10-04 00:10:34', '2021-10-04 00:10:34'),
(116, 2, 82, 1, '2021-10-04 00:10:34', '2021-10-04 00:10:34'),
(117, 1, 83, 1, '2021-10-04 01:32:32', '2021-10-04 01:32:32'),
(118, 2, 84, 1, '2021-10-04 02:13:42', '2021-10-04 02:13:42'),
(119, 2, 85, 1, '2021-10-04 02:16:12', '2021-10-04 02:16:12'),
(120, 1, 86, 1, '2021-10-04 02:38:45', '2021-10-04 02:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'magic', '2021-10-03 23:40:06', '2021-10-03 23:40:06'),
(2, 'anime', '2021-10-03 23:40:14', '2021-10-03 23:40:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2016_01_04_173148_create_admin_tables', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_08_10_113653_create_products_table', 1),
(6, '2021_08_10_113751_create_blogs_table', 1),
(7, '2021_09_25_071029_create_categories_table', 1),
(8, '2021_09_25_084750_create_product_category_table', 1),
(9, '2021_09_25_090704_create_sites_table', 1),
(10, '2021_10_04_054934_create_bills_table', 1),
(11, '2021_10_04_061143_create_bill_details_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `quantity`, `image`, `created_at`, `updated_at`) VALUES
(1, 'sdasd', '<p>d&aacute;ddđ</p>', '111', 2, 'images/adcc31b3d52a7b5d3c0cd6699ee6a2cd.png', '2021-10-03 23:39:43', '2021-10-03 23:39:43'),
(2, 'ádsadsd', '<p>đ&acirc;sdas</p>', '231', 3, 'images/e68ecb0850fa67c061ce9d751ea23059.png', '2021-10-03 23:40:36', '2021-10-03 23:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `product_id`, `category_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '{}' CHECK (json_valid(`content`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `content`, `created_at`, `updated_at`) VALUES
(2, '{\"Phone\":\"11111111111\",\"Email\":\"hhtuan@gmail.com\",\"Address\":\"111111111111\",\"Logo\":\"images\\/13e2ed2e87be16befab00068205b2692.png\"}', '2021-10-03 23:35:08', '2021-10-03 23:36:08');

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
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `phone`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tuấn', 'hhtuan206@gmail.com', NULL, '$2y$10$ne4kyqKtkKEjjC77FRWLceIXt4ynKSdCib9Wt9L2D3rhaQGkl.uOm', '', '', 1, NULL, '2021-10-04 00:03:18', '2021-10-04 00:03:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_operation_log_user_id_index` (`user_id`);

--
-- Indexes for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_permissions_name_unique` (`name`),
  ADD UNIQUE KEY `admin_permissions_slug_unique` (`slug`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_roles_name_unique` (`name`),
  ADD UNIQUE KEY `admin_roles_slug_unique` (`slug`);

--
-- Indexes for table `admin_role_menu`
--
ALTER TABLE `admin_role_menu`
  ADD KEY `admin_role_menu_role_id_menu_id_index` (`role_id`,`menu_id`);

--
-- Indexes for table `admin_role_permissions`
--
ALTER TABLE `admin_role_permissions`
  ADD KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`);

--
-- Indexes for table `admin_role_users`
--
ALTER TABLE `admin_role_users`
  ADD KEY `admin_role_users_role_id_user_id_index` (`role_id`,`user_id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_username_unique` (`username`);

--
-- Indexes for table `admin_user_permissions`
--
ALTER TABLE `admin_user_permissions`
  ADD KEY `admin_user_permissions_user_id_permission_id_index` (`user_id`,`permission_id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_user_id_index` (`user_id`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_details_product_id_index` (`product_id`),
  ADD KEY `bill_details_bill_id_index` (`bill_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_product_id_index` (`product_id`),
  ADD KEY `product_category_category_id_index` (`category_id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bill_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `product_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_category_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
