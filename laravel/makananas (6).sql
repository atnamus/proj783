-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2014 at 08:37 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `makananas`
--

-- --------------------------------------------------------

--
-- Table structure for table `site_assigned_roles`
--

CREATE TABLE IF NOT EXISTS `site_assigned_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `assigned_roles_user_id_foreign` (`user_id`),
  KEY `assigned_roles_role_id_foreign` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `site_assigned_roles`
--

INSERT INTO `site_assigned_roles` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 3, 3),
(4, 4, 3),
(5, 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `site_cms`
--

CREATE TABLE IF NOT EXISTS `site_cms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(50) NOT NULL COMMENT 'page name means home , login etc',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_cms_content`
--

CREATE TABLE IF NOT EXISTS `site_cms_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cms_id` int(10) unsigned NOT NULL,
  `indonesia` text NOT NULL,
  `english` text NOT NULL,
  `type` varchar(4) NOT NULL DEFAULT 'text' COMMENT 'text or html depending on this create text field or text area field',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_login_details`
--

CREATE TABLE IF NOT EXISTS `site_login_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `device` varchar(100) NOT NULL,
  `platform` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `browser_version` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `site_login_details`
--

INSERT INTO `site_login_details` (`id`, `user_id`, `device`, `platform`, `browser`, `browser_version`, `ip`, `created_at`) VALUES
(1, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-09-26 11:47:52'),
(2, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-09-26 11:50:28'),
(3, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-09-26 11:50:28'),
(4, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-09-29 06:40:06'),
(5, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-09-29 06:40:07'),
(6, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-06 14:22:08'),
(7, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-06 14:22:08'),
(8, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-07 06:00:32'),
(9, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-07 06:00:32'),
(10, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-07 11:40:35'),
(11, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-07 11:40:35'),
(12, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-07 12:11:59'),
(13, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-07 12:11:59'),
(14, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-09 04:54:34'),
(15, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-09 04:54:34'),
(16, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-10 07:02:02'),
(17, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-10 07:02:02'),
(18, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-10 11:47:36'),
(19, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-10 11:47:36'),
(20, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-10 13:36:51'),
(21, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-10 13:36:51'),
(22, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-11 05:00:17'),
(23, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-11 05:00:17'),
(24, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-11 07:03:23'),
(25, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-11 07:03:23'),
(26, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-11 10:35:29'),
(27, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-11 10:35:29'),
(28, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-11 11:16:08'),
(29, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-11 11:16:08'),
(30, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-11 13:42:36'),
(31, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-11 13:42:36'),
(32, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 06:01:34'),
(33, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 06:01:34'),
(34, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 07:20:47'),
(35, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 07:20:47'),
(36, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:25:16'),
(37, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:25:16'),
(38, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:25:44'),
(39, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:25:44'),
(40, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:37:36'),
(41, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:38:33'),
(42, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:42:15'),
(43, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:42:36'),
(44, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:43:21'),
(45, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:46:05'),
(46, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:50:35'),
(47, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:50:57'),
(48, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:51:37'),
(49, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:52:05'),
(50, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:52:26'),
(51, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:52:45'),
(52, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-13 11:52:45'),
(53, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-14 05:35:01'),
(54, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-14 05:35:01'),
(55, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-14 13:31:09'),
(56, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-14 13:31:09'),
(57, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-15 05:23:49'),
(58, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-15 05:23:49'),
(59, 6, 'desktop', 'Windows', 'Firefox', '33.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-15 11:48:44'),
(60, 6, 'desktop', 'Windows', 'Firefox', '33.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-15 11:48:44'),
(61, 6, 'desktop', 'Windows', 'Firefox', '33.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-15 11:58:58'),
(62, 6, 'desktop', 'Windows', 'Firefox', '33.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-15 11:58:58'),
(63, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-16 05:25:17'),
(64, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-16 05:25:17'),
(65, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-16 11:41:50'),
(66, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-16 11:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `site_migrations`
--

CREATE TABLE IF NOT EXISTS `site_migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_migrations`
--

INSERT INTO `site_migrations` (`migration`, `batch`) VALUES
('2014_09_25_121521_confide_setup_users_table', 1),
('2014_09_25_124232_entrust_setup_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `site_pages`
--

CREATE TABLE IF NOT EXISTS `site_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keywords` text,
  `meta_description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `site_pages`
--

INSERT INTO `site_pages` (`id`, `slug`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'home', 'fg', 'fdgfdgdf', 'fgfdg', '2014-10-16 00:00:00', '2014-10-16 10:58:24'),
(2, 'login', '', '', '', '2014-10-16 00:00:00', '2014-10-16 00:00:00'),
(3, 'order', '', NULL, '', '2014-10-16 11:18:37', '2014-10-16 11:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `site_password_reminders`
--

CREATE TABLE IF NOT EXISTS `site_password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_password_reminders`
--

INSERT INTO `site_password_reminders` (`email`, `token`, `created_at`) VALUES
('sumanta.ghosh2@infoway.us', '3a0dfe9928320046c22934da120d5041', '2014-10-15 05:51:28'),
('sumanta.ghosh2@infoway.us', 'bd7461037c7c321d379340db92a96b74', '2014-10-15 06:14:50'),
('sumanta.ghosh2@infoway.us', '9ef2468c51d7b2ff71a574e021c83130', '2014-10-15 06:20:26'),
('sumanta.ghosh2@infoway.us', '9b691ddf3a9c41c7d80194aa731ef302', '2014-10-15 06:23:22'),
('sumanta.ghosh2@infoway.us', '69655ffa4887e7653067b33b7dca8b6a', '2014-10-15 06:24:30'),
('sumanta.ghosh2@infoway.us', 'ccd06b9fb7a0e951a522662ef5c02c59', '2014-10-15 06:27:16'),
('sumanta.ghosh2@infoway.us', '6cf3cbb7c27fdd545cf73ca4f9b206eb', '2014-10-15 06:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `site_permissions`
--

CREATE TABLE IF NOT EXISTS `site_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_permission_role`
--

CREATE TABLE IF NOT EXISTS `site_permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_foreign` (`permission_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_restaurant`
--

CREATE TABLE IF NOT EXISTS `site_restaurant` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int(10) unsigned NOT NULL COMMENT 'users_id',
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `city` varchar(45) DEFAULT NULL,
  `address` text,
  `email` varchar(254) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `backup_phone` varchar(20) DEFAULT NULL,
  `latitude` varchar(15) DEFAULT NULL,
  `longitude` varchar(15) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `taxes` decimal(5,2) DEFAULT '0.00' COMMENT 'this is in %',
  `facebook` text COMMENT 'Resturant facebook link',
  `twitter` text COMMENT 'Resturant twitte link',
  `google_plus` text COMMENT 'Resturant google plus link',
  `is_premium` tinyint(1) DEFAULT '0' COMMENT '0=>no,1=>Yes',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL COMMENT '0=>inactive,1=>active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_site_restaurant_site_users1_idx` (`owner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `site_restaurant`
--

INSERT INTO `site_restaurant` (`id`, `owner_id`, `name`, `description`, `city`, `address`, `email`, `phone`, `backup_phone`, `latitude`, `longitude`, `logo`, `taxes`, `facebook`, `twitter`, `google_plus`, `is_premium`, `created_at`, `updated_at`, `status`, `deleted_at`) VALUES
(1, 2, NULL, NULL, NULL, 'kolkata', NULL, '9800463084', '', NULL, NULL, NULL, 25.52, '', '', '', 1, '2014-10-09 13:04:06', '2014-10-11 11:45:34', 1, '2014-10-11 06:15:34'),
(2, 3, 'Samrat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, NULL, NULL, NULL, 0, '2014-10-09 13:24:28', '2014-10-13 12:11:45', 2, '2014-10-13 06:41:45'),
(3, 4, 'Samrat', NULL, NULL, 'kolkata', NULL, '9800463084', '', NULL, NULL, NULL, 0.00, '', '', '', 1, '2014-10-10 14:08:55', '2014-10-13 12:10:09', 1, '2014-10-13 06:40:09'),
(4, 7, 'BJ’s Restaurant & Brewhouse', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, NULL, NULL, NULL, 0, '2014-10-16 11:44:16', '2014-10-16 11:44:16', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_roles`
--

CREATE TABLE IF NOT EXISTS `site_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `site_roles`
--

INSERT INTO `site_roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2014-09-26 02:37:24', '2014-09-26 02:37:24'),
(3, 'resto_owner', '2014-09-26 02:48:57', '2014-09-26 02:48:57'),
(4, 'resto_employee', '2014-09-26 02:48:57', '2014-09-26 02:48:57'),
(5, 'normal_user', '2014-09-26 02:48:57', '2014-09-26 02:48:57'),
(6, 'admin_employee', '2014-09-26 02:51:19', '2014-09-26 02:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE IF NOT EXISTS `site_settings` (
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `type` set('text','textarea','password','select','select-multiple','radio','checkbox') COLLATE utf8_unicode_ci NOT NULL,
  `default` text COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `options` text COLLATE utf8_unicode_ci NOT NULL,
  `is_required` int(1) NOT NULL,
  `is_gui` int(1) NOT NULL,
  `module` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `row_order` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`slug`),
  UNIQUE KEY `unique_slug` (`slug`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`slug`, `title`, `description`, `type`, `default`, `value`, `options`, `is_required`, `is_gui`, `module`, `row_order`) VALUES
('contact_number', 'Contact Number', 'Store contact number', 'text', '+606 2823585', '+606 2823585', '', 1, 1, 'General', 7),
('date_format', 'Date Format', 'How should dates be displayed across the website and control panel? Using the <a target="_blank" href="http://php.net/manual/en/function.date.php">date format</a> from PHP - OR - Using the format of <a target="_blank" href="http://php.net/manual/en/function.strftime.php">strings formatted as date</a> from PHP.', 'text', 'd-m-Y', 'd-m-Y', '', 1, 1, 'General', 2),
('enable_reward_points', 'Minimak', 'Points system is enable or disable', 'radio', '1', '1', '1=Enable|0=Disable', 1, 1, 'Minimak', 0),
('facebook_app_id', 'Facebook App ID', '', 'text', '', '226327480909169', '', 1, 1, 'OAuth', 2),
('facebook_app_secret', 'Facebook App secret', '', 'text', '', '8c17de77c16ffa805a814c6906986a5b', '', 1, 1, 'OAuth', 1),
('facebook_url', 'Facebook', '', 'text', 'https://www.facebook.com/', 'https://www.facebook.com', '', 1, 1, 'Social Link', 2),
('google_app_id', 'Google App ID', '', 'text', '', '83501818717-50ot16c81qu2q8nsoke67dactr903qil.apps.googleusercontent.com', '', 1, 1, 'OAuth', 4),
('google_app_secret', 'Google Client secret', 'To get your Client Secret <a href="https://console.developers.google.com/project" target="_blank">Goto</a> there and create your project.', 'text', '', 'MmRScP7FreytvuLsvPiuCXP-', '', 1, 1, 'OAuth', 3),
('google_plus_link', 'Google plus', '', 'text', '', '  https://plus.google.com', '', 1, 1, 'Social Link', 3),
('instagram_link', 'Instagram', '', 'text', 'http://pinterest.com/', 'http://instagram.com', '', 1, 1, 'Social Link', 1),
('minimak_excange_rate', 'Minimak Exchange Rate', '1 minimak point equaling to how much amount', 'text', '0', '20', '', 1, 1, 'Minimak', 0),
('twitter_url', 'Twitter', '', 'text', 'https://twitter.com/', 'https://twitter.com/pakomall', '', 1, 1, 'Social Link', 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_users`
--

CREATE TABLE IF NOT EXISTS `site_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `site_users`
--

INSERT INTO `site_users` (`id`, `username`, `email`, `name`, `password`, `phone`, `address`, `confirmation_code`, `remember_token`, `confirmed`, `last_login`, `created_at`, `updated_at`, `status`, `deleted_at`) VALUES
(1, 'admin', 'admin@infoway.us', '', '$2y$10$ZeSFaXdy2AuqUn81VsQljek0xtRBPZ9K.IBZg0fQCi1t5ZxosoJo2', '', '', '', 'pueWLaznEODChuqs5aOnME6VnGiyM8TnxxsoXWqXv3Y5Dv4SqowadMh1TuA1', 1, '2014-10-16 06:11:50', '2014-09-25 07:56:12', '2014-10-16 06:11:50', 1, NULL),
(2, 'souravs', 'saurav@gmail.com', '', '$2y$10$vE83r0QyWArNQsT1zv1qgOESiHRjbcquCWazU1w.Z/tk0vTPUnHJm', '', '', '', NULL, 0, NULL, '2014-10-09 07:34:06', '2014-10-11 06:15:35', 2, '2014-10-11 06:15:35'),
(3, 'samrat', 'samrat@gmail.com', '', '$2y$10$1je.tb5/ejj2JQr2GLVwYeQvrFJnblHOHVfN9orwsb.vArAc4z.GC', '', '', '', NULL, 0, NULL, '2014-10-09 07:54:27', '2014-10-13 06:41:45', 2, '2014-10-13 06:41:45'),
(4, 'sumanta1', 'samrat1@gmail.com', '', '$2y$10$b8QDEmPv4nzTcjMbhCr6geCsNoRIkMQw0gCz4qDZ51MJPTidoPjYG', '', '', '', NULL, 0, NULL, '2014-10-10 08:38:55', '2014-10-13 06:40:09', 1, '2014-10-13 06:40:09'),
(5, 'sumanta', 'sumanta.ghosh@infoway.us', '', '$2y$10$ZtzPkAiAsH/6T.zLnd1SvuIB6ExT3vYsTSzHXfW01a7snK2GG96y.', '', '', 'f0f26f0db1b25d0f7e599891892aa197', NULL, 0, NULL, '2014-10-15 05:35:07', '2014-10-15 05:35:07', 1, NULL),
(6, 'admin8', 'sumanta.ghosh2@infoway.us', '', '$2y$10$PhKpuISOBPs.y4UR5Tgap.vaI2LGYLnOzYH4TXk4dk56zKz52ZLe6', '', '', '', 'a2sHcsnr63S4ugBRGmyS0MXsa1l1OxLbd6NDCVtmQFtNIpRxEz8Spt6Msza7', 1, '2014-10-15 06:28:58', '2014-10-15 05:51:28', '2014-10-15 06:28:58', 1, NULL),
(7, 'sumanta3', 'sumanta.ghosh5@infoway.us', '', '$2y$10$59Qt.SJath17mGAWXXTCRe2VYFmjnQX0d1G6mCD8hPJCyI4cLyMkW', '', '', '', NULL, 0, NULL, '2014-10-16 06:14:16', '2014-10-16 06:14:16', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL COMMENT 'utc',
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Sumanta Kr Ghosh', 'sumanta.ghosh@infoway.us', 'MTIzNDU2', '2014-09-23 11:18:59', '2014-09-23 11:18:59'),
(2, 'Sanjeet', 'sanjeet.kumar@infoway.us', 'MTIzNDU2', '2014-09-23 11:37:51', '2014-09-23 11:37:51'),
(3, 'carole43', 'prasanta.karmakar@infoway.us', 'MTIzNDU2', '2014-09-24 11:46:58', '2014-09-24 11:46:58'),
(4, 'admin', 'mikey.klause@mailinator.com', 'MTIzNDU2', '2014-09-24 11:47:20', '2014-09-24 11:47:20'),
(5, 'admin', 'tapas.palui@infoway.us', 'MTIzMTIz', '2014-09-24 11:53:21', '2014-09-24 11:53:21'),
(6, 'tarun', 'tarun.mukherjee@infoway.us', 'MTIzNDU2', '2014-09-30 06:51:38', '2014-09-30 06:51:38');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `site_assigned_roles`
--
ALTER TABLE `site_assigned_roles`
  ADD CONSTRAINT `assigned_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `site_roles` (`id`),
  ADD CONSTRAINT `assigned_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `site_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `site_permission_role`
--
ALTER TABLE `site_permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `site_permissions` (`id`),
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `site_roles` (`id`);

--
-- Constraints for table `site_restaurant`
--
ALTER TABLE `site_restaurant`
  ADD CONSTRAINT `fk_site_restaurant_site_users1` FOREIGN KEY (`owner_id`) REFERENCES `site_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
