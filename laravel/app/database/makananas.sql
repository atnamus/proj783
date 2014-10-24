-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2014 at 04:01 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `site_assigned_roles`
--

INSERT INTO `site_assigned_roles` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

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
(66, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-16 11:41:50'),
(67, 7, 'desktop', 'Windows', 'Firefox', '33.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-17 05:46:10'),
(68, 7, 'desktop', 'Windows', 'Firefox', '33.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-17 05:46:10'),
(69, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-17 09:18:53'),
(70, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-17 09:18:53'),
(71, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-17 14:46:31'),
(72, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-17 14:46:31'),
(73, 7, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-17 14:47:09'),
(74, 7, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-17 14:47:09'),
(75, 1, 'desktop', 'Windows', 'Firefox', '33.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-17 15:04:48'),
(76, 1, 'desktop', 'Windows', 'Firefox', '33.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-17 15:04:48'),
(77, 7, 'desktop', 'Windows', 'Firefox', '33.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-17 15:05:25'),
(78, 7, 'desktop', 'Windows', 'Firefox', '33.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-17 15:05:25'),
(79, 1, 'desktop', 'Windows', 'Firefox', '33.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-17 15:05:53'),
(80, 1, 'desktop', 'Windows', 'Firefox', '33.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-17 15:05:53'),
(81, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-18 13:28:49'),
(82, 1, 'desktop', 'Windows', 'Chrome', '37.0.2062.124', 'fe80::a871:4c9f:2024:e3d0', '2014-10-18 13:28:49'),
(83, 11, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-18 13:41:11'),
(84, 11, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-18 13:41:11'),
(85, 12, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-18 13:50:49'),
(86, 12, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-18 13:50:49'),
(87, 1, 'desktop', 'Windows', 'Chrome', '38.0.2125.104', 'fe80::a871:4c9f:2024:e3d0', '2014-10-21 04:49:44'),
(88, 1, 'desktop', 'Windows', 'Chrome', '38.0.2125.104', 'fe80::a871:4c9f:2024:e3d0', '2014-10-21 04:49:44'),
(89, 1, 'desktop', 'Windows', 'Chrome', '38.0.2125.104', 'fe80::a871:4c9f:2024:e3d0', '2014-10-21 10:42:12'),
(90, 1, 'desktop', 'Windows', 'Chrome', '38.0.2125.104', 'fe80::a871:4c9f:2024:e3d0', '2014-10-21 10:42:12'),
(91, 5, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-21 12:54:10'),
(92, 5, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-21 12:54:10'),
(93, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-21 12:55:34'),
(94, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-21 12:55:34'),
(95, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-21 12:55:57'),
(96, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-21 12:55:57'),
(97, 1, 'desktop', 'Windows', 'Chrome', '38.0.2125.104', 'fe80::a871:4c9f:2024:e3d0', '2014-10-21 15:06:51'),
(98, 1, 'desktop', 'Windows', 'Chrome', '38.0.2125.104', 'fe80::a871:4c9f:2024:e3d0', '2014-10-21 15:06:51'),
(99, 1, 'desktop', 'Windows', 'Chrome', '38.0.2125.104', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 05:22:17'),
(100, 1, 'desktop', 'Windows', 'Chrome', '38.0.2125.104', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 05:22:18'),
(101, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 05:56:14'),
(102, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 05:56:14'),
(103, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 05:59:02'),
(104, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 05:59:02'),
(105, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 06:00:43'),
(106, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 06:00:43'),
(107, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 06:11:36'),
(108, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 06:11:36'),
(109, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 06:14:09'),
(110, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 06:14:10'),
(111, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 10:42:05'),
(112, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 10:42:05'),
(113, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 10:47:06'),
(114, 7, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 10:47:06'),
(115, 15, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 11:49:29'),
(116, 15, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 11:49:29'),
(117, 1, 'desktop', 'Windows', 'Chrome', '38.0.2125.104', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 12:03:25'),
(118, 1, 'desktop', 'Windows', 'Chrome', '38.0.2125.104', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 12:03:25'),
(119, 19, 'desktop', 'Windows', 'Chrome', '38.0.2125.104', 'fe80::34e4:b03:2320:e8c8', '2014-10-22 12:18:27'),
(120, 19, 'desktop', 'Windows', 'Chrome', '38.0.2125.104', 'fe80::34e4:b03:2320:e8c8', '2014-10-22 12:18:27'),
(121, 16, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 13:01:46'),
(122, 16, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 13:01:46'),
(123, 20, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 13:04:44'),
(124, 20, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 13:04:44'),
(125, 20, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 13:10:57'),
(126, 20, 'desktop', 'Windows', 'Firefox', '34.0', 'fe80::a871:4c9f:2024:e3d0', '2014-10-22 13:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `site_menu_category`
--

CREATE TABLE IF NOT EXISTS `site_menu_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `site_menu_category`
--

INSERT INTO `site_menu_category` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Continental', 'continental cuisine. a style of cooking that includes the better-known dishes of \r\nvarious western \r\nEuropean countries.', '2014-10-17 10:18:33', '2014-10-17 10:39:07', NULL),
(2, 'dfd', 'dsdsfsdfdsfdsfs', '2014-10-17 10:39:58', '2014-10-17 10:41:05', '2014-10-17 05:11:05');

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
(1, 'home', 'Makananas Home', '', '', '2014-10-16 00:00:00', '2014-10-17 15:19:03'),
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
('sumanta.ghosh@infoway.us', 'd8a4396b1eb400b57e401c004aacb8d9', '2014-10-22 07:27:05'),
('tarun@yopmail.com', '695cc526d0e87d4e9c8e03f059ad46d8', '2014-10-22 07:35:10'),
('tarun@yopmail.com', 'd952daf4e3e72ef06e101732a634faa1', '2014-10-22 07:37:43');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_restaurant_menu`
--

CREATE TABLE IF NOT EXISTS `site_restaurant_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `restaurant_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` float(10,2) NOT NULL DEFAULT '0.00',
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  `sattus` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_site_restaurant_menu_site_restaurant1_idx` (`restaurant_id`),
  KEY `fk_site_menu_site_menu_category1_idx` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `site_users`
--

INSERT INTO `site_users` (`id`, `username`, `email`, `name`, `password`, `phone`, `address`, `confirmation_code`, `remember_token`, `confirmed`, `last_login`, `created_at`, `updated_at`, `status`, `deleted_at`) VALUES
(1, 'admin', 'admin@infoway.us', '', '$2y$10$ZeSFaXdy2AuqUn81VsQljek0xtRBPZ9K.IBZg0fQCi1t5ZxosoJo2', '', '', '', 'agdt5MZOFto41s7kMzZFqFkugLRoNPcdA2g3AidVWHeeb5Zoie8TFwFi49Kp', 1, '2014-10-22 06:33:25', '2014-09-25 07:56:12', '2014-10-22 06:33:25', 1, NULL),
(20, 'tarun', 'tarun@yopmail.com', 'tarun', '$2y$10$Pze.LNsqCbZ/UdwQR7ogaOxtrDn06M.E8a.PPsTl2c1.VVrPcGPIG', '', '', '', 'pWmHv8vXJSC48uUL4cZopOaHMqwqph4vrQCb2bqFHsoNmdpsx3oXZesnSQM7', 1, '2014-10-22 07:40:57', '2014-10-22 07:33:40', '2014-10-22 07:41:14', 1, NULL);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
