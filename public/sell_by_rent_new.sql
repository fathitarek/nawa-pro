-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2017 at 11:57 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.26-2+ubuntu16.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sell_by_rent_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `Brands`
--

CREATE TABLE `Brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Sell', 'sell', '2017-11-13 13:53:22', '2017-11-16 07:10:08'),
(2, NULL, 1, 'Rent', 'rent', '2017-11-13 13:53:22', '2017-11-16 07:10:19'),
(3, 1, 1, 'ahmed', 'ahmed', '2017-11-23 07:27:55', '2017-11-23 07:27:55'),
(4, NULL, 1, 'name225', 'name225', '2017-11-26 07:39:02', '2017-11-26 07:39:02'),
(6, NULL, 1, 'oooooo', 'oooooo', '2017-12-21 08:27:13', '2017-12-21 08:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `text`, `created_at`, `updated_at`) VALUES
(2, 'netsecv', '2017-11-23 13:47:21', '2017-11-23 13:47:21'),
(3, 'ahmed', '2017-11-26 07:46:13', '2017-11-26 07:46:13'),
(4, '@#', '2017-12-18 08:13:44', '2017-12-18 08:13:44'),
(7, 'ooo', '2017-12-19 06:30:22', '2017-12-19 06:30:22'),
(9, 'yyyyyyy', '2017-12-19 06:32:32', '2017-12-19 06:32:32'),
(14, 'test', '2017-12-20 07:44:07', '2017-12-20 07:44:07'),
(16, 'testing', '2017-12-20 07:45:06', '2017-12-20 07:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `phone` int(11) DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `service_id` int(10) UNSIGNED DEFAULT NULL,
  `fax` int(11) NOT NULL,
  `website` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `title`, `description`, `phone`, `address`, `created_at`, `updated_at`, `service_id`, `fax`, `website`, `facebook`, `image`, `logo`) VALUES
(5, 'ahmed', 'desc', 1004983444, 'address emad', '2017-12-17 15:22:29', '2017-12-17 15:22:29', 4, 0, '', '', '', ''),
(6, '67y68u', 'uyhiuyuy', 7887, '78y7897', '2017-12-20 11:54:04', '2017-12-20 11:54:04', 4, 0, '', '', '', ''),
(7, 'yuuu', 'uhiohj', 775, 'ujhkhj', '2017-12-20 12:07:36', '2017-12-20 12:07:36', 4, 0, '', '', '', ''),
(8, 'title TEN', 'uuuuuuu@#$', 7777774, 'hgygy', '2017-12-21 08:03:33', '2017-12-21 08:03:33', 4, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(2, 'ahmed', 'samyemad4@gmail.com', 1004983444, 'message message message', '2017-11-23 13:49:08', '2017-11-23 13:49:08'),
(3, 'ah', 'admn@adniu.com', 502213277, 'message message', '2017-11-23 13:57:00', '2017-11-23 15:04:57'),
(4, 'ahmed', 'emsd54@yahoo.com', 100452584, 'message12', '2017-11-26 08:42:04', '2017-11-26 08:42:04'),
(5, 'ahmed', 'emad@gmail.com', 1004983444, 'message 125841', '2017-12-17 14:26:32', '2017-12-17 14:26:32'),
(6, 'ahmed', 'samyemad4@gmail.com', 1004983444, 'bosy', '2017-12-17 16:49:57', '2017-12-17 16:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, '1', '2017-12-20 10:41:07', '2017-12-20 10:41:07'),
(2, '0', '2017-12-20 10:41:11', '2017-12-20 10:41:11'),
(3, '1', '2017-12-21 07:14:30', '2017-12-21 07:14:30'),
(4, '1', '2017-12-21 07:14:34', '2017-12-21 07:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 1, 0, 0, 0, 0, NULL, 1),
(2, 1, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(3, 1, 'category_id', 'text', 'Category', 0, 0, 1, 1, 1, 0, NULL, 3),
(4, 1, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{"validation":{"rules":["required"]}}', 4),
(5, 1, 'excerpt', 'text_area', 'excerpt', 0, 0, 1, 1, 1, 1, NULL, 5),
(6, 1, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{"validation":{"rules":["required"]}}', 6),
(7, 1, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{"resize":{"width":"1000","height":"null"},"quality":"70%","upsize":true,"thumbnails":[{"name":"medium","scale":"50%"},{"name":"small","scale":"25%"},{"name":"cropped","crop":{"width":"300","height":"250"}}]}', 7),
(8, 1, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{"slugify":{"origin":"title","forceUpdate":true}}', 8),
(9, 1, 'meta_description', 'text_area', 'meta_description', 0, 0, 1, 1, 1, 1, NULL, 9),
(10, 1, 'meta_keywords', 'text_area', 'meta_keywords', 0, 0, 1, 1, 1, 1, NULL, 10),
(11, 1, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{"default":"DRAFT","options":{"PUBLISHED":"published","DRAFT":"draft","PENDING":"pending"}}', 11),
(12, 1, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, NULL, 12),
(13, 1, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, NULL, 13),
(14, 2, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, NULL, 1),
(15, 2, 'author_id', 'text', 'author_id', 1, 0, 0, 0, 0, 0, NULL, 2),
(16, 2, 'title', 'text', 'title', 1, 1, 1, 1, 1, 1, '{}', 3),
(17, 2, 'excerpt', 'text_area', 'excerpt', 0, 0, 1, 1, 1, 1, NULL, 4),
(18, 2, 'body', 'rich_text_box', 'body', 0, 0, 1, 1, 1, 1, '{}', 5),
(19, 2, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{"slugify":{"origin":"title"}}', 6),
(20, 2, 'meta_description', 'text', 'meta_description', 0, 0, 1, 1, 1, 1, NULL, 7),
(21, 2, 'meta_keywords', 'text', 'meta_keywords', 0, 0, 1, 1, 1, 1, NULL, 8),
(22, 2, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{"default":"INACTIVE","options":{"INACTIVE":"INACTIVE","ACTIVE":"ACTIVE"}}', 9),
(23, 2, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, NULL, 10),
(24, 2, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, NULL, 11),
(25, 2, 'image', 'image', 'image', 0, 1, 1, 1, 1, 1, NULL, 12),
(26, 3, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, NULL, 1),
(27, 3, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '{}', 2),
(28, 3, 'email', 'text', 'email', 1, 1, 1, 1, 1, 1, '{}', 3),
(29, 3, 'password', 'password', 'password', 1, 0, 0, 1, 1, 0, NULL, 4),
(30, 3, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"name","pivot_table":"roles","pivot":"0"}', 10),
(31, 3, 'remember_token', 'text', 'remember_token', 0, 0, 0, 0, 0, 0, NULL, 5),
(32, 3, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, NULL, 6),
(33, 3, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, NULL, 7),
(34, 3, 'avatar', 'image', 'avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(35, 5, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, NULL, 1),
(36, 5, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '{"validation":{"rule":"required","messages":{"required":"This :attribute field is a must."}}}', 2),
(37, 5, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, NULL, 3),
(38, 5, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, NULL, 4),
(39, 4, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, NULL, 1),
(40, 4, 'parent_id', 'select_dropdown', 'parent', 0, 0, 1, 1, 1, 1, '{"default":"","null":"","options":{"":"-- None --"},"relationship":{"key":"id","label":"name"}}', 2),
(41, 4, 'order', 'text', 'order', 1, 1, 1, 1, 1, 1, '{"default":1}', 3),
(42, 4, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '{}', 4),
(43, 4, 'slug', 'text', 'slug', 1, 1, 1, 1, 1, 1, '{"slugify":{"origin":"name"}}', 5),
(44, 4, 'created_at', 'timestamp', 'created_at', 0, 0, 1, 0, 0, 0, NULL, 6),
(45, 4, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, NULL, 7),
(46, 6, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, NULL, 1),
(47, 6, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(48, 6, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, NULL, 3),
(49, 6, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, NULL, 4),
(50, 6, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '{}', 5),
(51, 1, 'seo_title', 'text', 'seo_title', 0, 1, 1, 1, 1, 1, NULL, 14),
(52, 1, 'featured', 'checkbox', 'featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(53, 3, 'role_id', 'text', 'role_id', 0, 1, 1, 1, 1, 1, NULL, 9),
(58, 12, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(59, 12, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, NULL, 2),
(60, 12, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(61, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(62, 13, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(63, 13, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, NULL, 2),
(64, 13, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(65, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(70, 16, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(71, 16, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, NULL, 2),
(72, 16, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(73, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(74, 17, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(75, 17, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, NULL, 2),
(76, 17, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(77, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(78, 18, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(79, 18, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, NULL, 2),
(80, 18, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(81, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(88, 22, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(89, 22, 'text', 'text', 'Text', 1, 1, 1, 1, 1, 1, NULL, 2),
(90, 22, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 3),
(91, 22, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(92, 22, 'location_belongsto_city_relationship', 'relationship', 'Cities', 1, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Cities","table":"Cities","type":"belongsTo","column":"city_id","key":"id","label":"text","pivot_table":"Cities","pivot":"0"}', 5),
(94, 22, 'city_id', 'checkbox', 'City Id', 0, 0, 0, 0, 0, 0, NULL, 5),
(101, 24, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(102, 24, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, NULL, 2),
(103, 24, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(104, 24, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(109, 33, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(110, 33, 'text', 'text', 'Text', 1, 1, 1, 1, 1, 1, '{"validation":{"rules":["required"]}}', 2),
(111, 33, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(112, 33, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(113, 34, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(114, 34, 'text', 'text', 'Text', 1, 1, 1, 1, 1, 1, '{"validation":{"rules":["required"]}}', 2),
(115, 34, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(116, 34, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(122, 37, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(123, 37, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, '{}', 2),
(124, 37, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(125, 37, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(126, 38, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(127, 38, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, '{}', 2),
(128, 38, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(129, 38, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(130, 39, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(131, 39, 'text', 'text', 'Text', 1, 1, 1, 1, 1, 1, '{"validation":{"rules":["required"]}}', 2),
(132, 39, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(133, 39, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(134, 40, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(135, 40, 'text', 'text', 'Text', 1, 1, 1, 1, 1, 1, '{"validation":{"rules":["required"]}}', 2),
(136, 40, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(137, 40, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(138, 41, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(139, 41, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, '{}', 2),
(140, 41, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(141, 41, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(142, 43, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(143, 43, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(144, 43, 'price', 'number', 'Price', 0, 1, 1, 1, 1, 1, '{}', 3),
(145, 43, 'property_type_id', 'checkbox', 'Property Type Id', 1, 0, 0, 0, 0, 0, NULL, 4),
(146, 43, 'property_form_id', 'checkbox', 'Property Form Id', 1, 0, 0, 0, 0, 0, NULL, 5),
(147, 43, 'purpose_posting_id', 'checkbox', 'Purpose Posting Id', 1, 0, 0, 0, 0, 0, NULL, 6),
(153, 43, 'degree_ownership_id', 'checkbox', 'Degree Ownership Id', 1, 0, 0, 0, 0, 0, NULL, 12),
(159, 43, 'developer_id', 'checkbox', 'Developer Id', 1, 0, 0, 0, 0, 0, NULL, 18),
(163, 43, 'public', 'checkbox', 'Public', 1, 0, 1, 1, 1, 1, NULL, 22),
(164, 43, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 23),
(165, 43, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 24),
(166, 43, 'property_belongsto_property_form_relationship', 'relationship', 'property_forms', 0, 0, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\PropertyForm","table":"property_forms","type":"belongsTo","column":"property_form_id","key":"id","label":"text","pivot_table":"categories","pivot":"0"}', 25),
(167, 43, 'property_belongsto_degree_ownership_relationship', 'relationship', 'degree_ownerships', 0, 0, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\DegreeOwnership","table":"degree_ownerships","type":"belongsTo","column":"degree_ownership_id","key":"id","label":"text","pivot_table":"categories","pivot":"0"}', 26),
(168, 43, 'property_belongsto_developer_relationship', 'relationship', 'developers', 0, 0, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Developer","table":"developers","type":"belongsTo","column":"developer_id","key":"id","label":"text","pivot_table":"categories","pivot":"0"}', 27),
(169, 43, 'property_belongsto_property_status_relationship', 'relationship', 'property_statuses', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\PropertyStatus","table":"property_statuses","type":"belongsTo","column":"property_status_id","key":"id","label":"text","pivot_table":"categories","pivot":"0"}', 28),
(170, 43, 'property_belongsto_property_type_relationship', 'relationship', 'property_types', 0, 0, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\PropertyType","table":"property_types","type":"belongsTo","column":"property_type_id","key":"id","label":"text","pivot_table":"categories","pivot":"0"}', 29),
(171, 43, 'property_belongsto_purpose_posting_relationship', 'relationship', 'purpose_postings', 0, 0, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\PurposePosting","table":"purpose_postings","type":"belongsTo","column":"purpose_posting_id","key":"id","label":"text","pivot_table":"categories","pivot":"0"}', 30),
(173, 44, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(174, 44, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(175, 44, 'desc', 'text_area', 'Desc', 0, 1, 1, 1, 1, 1, '{}', 3),
(176, 44, 'facebook', 'text', 'Facebook', 0, 0, 1, 1, 1, 1, NULL, 4),
(177, 44, 'instagram', 'text', 'Instagram', 0, 0, 1, 1, 1, 1, NULL, 5),
(178, 44, 'website', 'text', 'Website', 0, 1, 1, 1, 1, 1, NULL, 6),
(179, 44, 'photo', 'image', 'Photo', 0, 1, 1, 1, 1, 1, NULL, 7),
(180, 44, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 8),
(181, 44, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 9),
(182, 45, 'id', 'checkbox', 'Id', 1, 1, 0, 0, 0, 0, NULL, 1),
(183, 45, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{"validation":{"rules":["required"]}}', 2),
(184, 45, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{"validation":{"rules":["required"]}}', 3),
(185, 45, 'phone', 'number', 'Phone', 1, 0, 1, 1, 1, 1, '{"validation":{"rules":["required"]}}', 4),
(186, 45, 'message', 'text_area', 'Message', 1, 0, 1, 1, 1, 1, '{"validation":{"rules":["required"]}}', 5),
(187, 45, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 6),
(188, 45, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(189, 46, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(190, 46, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, '{}', 2),
(191, 46, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(192, 46, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(193, 47, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(194, 47, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, '{}', 2),
(195, 47, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(196, 47, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(197, 47, 'district_belongsto_city_relationship', 'relationship', 'cities', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\City","table":"cities","type":"belongsTo","column":"city_id","key":"id","label":"text","pivot_table":"categories","pivot":"0"}', 5),
(198, 47, 'city_id', 'checkbox', 'City Id', 0, 0, 0, 0, 0, 0, NULL, 5),
(204, 50, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(205, 50, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(206, 50, 'description', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(207, 50, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 4),
(208, 50, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(209, 50, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, NULL, 6),
(210, 51, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(211, 51, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(212, 51, 'description', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(213, 51, 'phone', 'number', 'Phone', 0, 1, 1, 1, 1, 1, '{}', 4),
(214, 51, 'address', 'text_area', 'Address', 0, 1, 1, 1, 1, 1, '{}', 5),
(215, 51, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 6),
(216, 51, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(217, 51, 'company_belongsto_service_relationship', 'relationship', 'services', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Service","table":"services","type":"belongsTo","column":"service_id","key":"id","label":"title","pivot_table":"categories","pivot":"0"}', 8),
(218, 47, 'longtitude', 'number', 'Longtitude', 0, 1, 1, 1, 1, 1, NULL, 6),
(219, 47, 'latitiude', 'number', 'Latitiude', 0, 1, 1, 1, 1, 1, NULL, 7),
(228, 56, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(229, 56, 'from_user', 'checkbox', 'From User', 0, 0, 0, 0, 0, 0, '{}', 2),
(230, 56, 'to_user', 'checkbox', 'To User', 0, 0, 0, 0, 0, 0, '{}', 3),
(231, 56, 'body', 'text_area', 'Body', 0, 1, 1, 1, 1, 1, '{}', 4),
(232, 56, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 5),
(233, 56, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 6),
(234, 56, 'message_hasone_user_relationship', 'relationship', 'from_user', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\User","table":"users","type":"belongsTo","column":"from_user","key":"id","label":"name","pivot_table":"Brands","pivot":"0"}', 7),
(235, 56, 'message_hasone_user_relationship_1', 'relationship', 'to_user', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\User","table":"users","type":"belongsTo","column":"to_user","key":"id","label":"name","pivot_table":"Brands","pivot":"0"}', 8),
(236, 57, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(237, 57, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(238, 57, 'featured', 'checkbox', 'Featured', 0, 1, 1, 1, 1, 1, NULL, 3),
(239, 57, 'brochure', 'image', 'Brochure', 1, 1, 1, 1, 1, 1, NULL, 4),
(240, 57, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 5),
(241, 57, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 6),
(242, 57, 'user_id', 'checkbox', 'User Id', 1, 0, 0, 0, 0, 0, NULL, 7),
(243, 57, 'new_launch_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"Brands","pivot":"0"}', 8),
(244, 58, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(245, 58, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 2),
(246, 58, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(247, 58, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(248, 62, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(249, 62, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, '{}', 2),
(250, 62, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(251, 62, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(252, 63, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(253, 63, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(254, 63, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(255, 63, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(256, 63, 'limit_property', 'number', 'Limit Property', 0, 1, 1, 1, 1, 1, '{"validation":{"rules":["required"]}}', 5),
(257, 65, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(258, 65, 'text', 'text', 'Text', 1, 1, 1, 1, 1, 1, '{}', 2),
(259, 65, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(260, 65, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(261, 67, 'user_type_id', 'checkbox', 'User Type Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(262, 67, 'front_slug_id', 'checkbox', 'Front Slug Id', 1, 0, 0, 0, 0, 0, NULL, 2),
(263, 67, 'front_role_belongsto_user_type_relationship', 'relationship', 'user_types', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\UserType","table":"user_types","type":"belongsTo","column":"user_type_id","key":"id","label":"title","pivot_table":"Brands","pivot":"0"}', 3),
(264, 67, 'front_role_belongsto_front_slug_relationship', 'relationship', 'front_slugs', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\FrontSlug","table":"front_slugs","type":"belongsTo","column":"front_slug_id","key":"id","label":"text","pivot_table":"Brands","pivot":"0"}', 4),
(265, 3, 'is_verified', 'checkbox', 'Is Verified', 0, 1, 1, 1, 1, 1, NULL, 10),
(266, 3, 'is_featured', 'checkbox', 'Is Featured', 0, 1, 1, 1, 1, 1, NULL, 11),
(267, 3, 'user_type_id', 'checkbox', 'User Type Id', 0, 0, 0, 0, 0, 0, NULL, 12),
(268, 3, 'user_belongsto_user_type_relationship', 'relationship', 'user_types', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\UserType","table":"user_types","type":"belongsTo","column":"user_type_id","key":"id","label":"title","pivot_table":"Brands","pivot":"0"}', 13),
(269, 68, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(271, 68, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(272, 68, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(273, 69, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(274, 69, 'image', 'image', 'Image', 0, 0, 0, 0, 0, 0, NULL, 2),
(275, 69, 'dimension_id', 'checkbox', 'Dimension Id', 1, 0, 0, 0, 0, 0, NULL, 3),
(276, 69, 'property_ad_belongsto_dimension_relationship', 'relationship', 'dimensions', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Dimension","table":"dimensions","type":"belongsTo","column":"dimension_id","key":"id","label":"title","pivot_table":"Brands","pivot":"0"}', 4),
(277, 43, 'district_id', 'checkbox', 'District Id', 1, 0, 0, 0, 0, 0, NULL, 7),
(278, 43, 'property_status_id', 'checkbox', 'Property Status Id', 1, 0, 0, 0, 0, 0, NULL, 9),
(279, 43, 'longtitude', 'number', 'Longtitude', 0, 1, 1, 1, 1, 1, '{}', 14),
(280, 43, 'latitiude', 'number', 'Latitiude', 0, 1, 1, 1, 1, 1, '{}', 15),
(281, 43, 'is_prime', 'checkbox', 'Is Prime', 0, 0, 1, 1, 1, 1, NULL, 16),
(282, 43, 'property_belongsto_district_relationship', 'relationship', 'districts', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\District","table":"districts","type":"belongsTo","column":"district_id","key":"id","label":"text","pivot_table":"Brands","pivot":"0"}', 31),
(284, 56, 'is_read', 'checkbox', 'Is Read', 0, 1, 1, 1, 1, 1, NULL, 7),
(285, 70, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(286, 70, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, NULL, 2),
(287, 70, 'property_id', 'checkbox', 'Property Id', 0, 0, 0, 0, 0, 0, NULL, 3),
(289, 69, 'property_ad_belongsto_property_relationship', 'relationship', 'properties', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Property","table":"properties","type":"belongsTo","column":"property_id","key":"id","label":"title","pivot_table":"Brands","pivot":"0"}', 5),
(290, 69, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 4),
(291, 69, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(292, 69, 'property_id', 'checkbox', 'Property Id', 1, 0, 0, 0, 0, 0, NULL, 6),
(293, 69, 'is_verified', 'checkbox', 'Is Verified', 0, 0, 1, 1, 1, 1, NULL, 7),
(294, 72, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(295, 72, 'interior_designer_id', 'checkbox', 'Interior Designer Id', 0, 0, 0, 0, 0, 0, NULL, 2),
(296, 72, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, NULL, 3),
(297, 72, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 4),
(298, 72, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(299, 72, 'interior_designers_image_belongsto_interior_designer_relationship', 'relationship', 'interior_designers', 1, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\InteriorDesigner","table":"interior_designers","type":"belongsTo","column":"interior_designer_id","key":"id","label":"name","pivot_table":"Brands","pivot":"0"}', 6),
(300, 70, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 4),
(301, 70, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(302, 51, 'service_id', 'checkbox', 'Service Id', 0, 1, 1, 1, 1, 1, NULL, 8),
(303, 68, 'height', 'number', 'Height', 0, 1, 1, 1, 1, 1, NULL, 4),
(304, 68, 'width', 'number', 'Width', 0, 1, 1, 1, 1, 1, NULL, 5),
(305, 70, 'is_cover', 'checkbox', 'Is Cover', 0, 0, 1, 1, 1, 1, NULL, 6),
(306, 73, 'id', 'checkbox', 'Id', 1, 1, 0, 0, 0, 0, NULL, 1),
(307, 73, 'text', 'text', 'Text', 0, 1, 1, 1, 1, 1, NULL, 2),
(308, 73, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, NULL, 3),
(309, 73, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(310, 74, 'id', 'checkbox', 'Id', 1, 1, 0, 0, 0, 0, NULL, 1),
(311, 74, 'text', 'checkbox', 'Text', 0, 1, 1, 1, 1, 1, NULL, 2),
(312, 74, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, NULL, 3),
(313, 74, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(314, 77, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(315, 77, 'property_id', 'checkbox', 'Property Id', 1, 0, 0, 0, 0, 0, NULL, 2),
(316, 77, 'start_date', 'timestamp', 'Start Date', 0, 1, 1, 1, 1, 1, NULL, 3),
(317, 77, 'end_date', 'timestamp', 'End Date', 0, 1, 1, 1, 1, 1, NULL, 4),
(318, 77, 'paid', 'number', 'Paid', 0, 1, 1, 1, 1, 1, NULL, 5),
(319, 77, 'hot_offers_discount_id', 'checkbox', 'Hot Offers Discount Id', 1, 0, 0, 0, 0, 0, NULL, 6),
(320, 77, 'hot_offers_place_id', 'checkbox', 'Hot Offers Place Id', 1, 0, 0, 0, 0, 0, NULL, 7),
(321, 77, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 8),
(322, 77, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 9),
(323, 77, 'hot_offer_belongsto_property_relationship', 'relationship', 'properties', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Property","table":"properties","type":"belongsTo","column":"property_id","key":"id","label":"title","pivot_table":"Brands","pivot":"0"}', 10),
(324, 77, 'hot_offer_belongsto_hot_offers_discount_relationship', 'relationship', 'hot_offers_discounts', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\HotOffersDiscount","table":"hot_offers_discounts","type":"belongsTo","column":"hot_offers_discount_id","key":"id","label":"text","pivot_table":"Brands","pivot":"0"}', 11),
(325, 77, 'hot_offer_belongsto_hot_offers_place_relationship', 'relationship', 'hot_offers_places', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\HotOffersPlace","table":"hot_offers_places","type":"belongsTo","column":"hot_offers_place_id","key":"id","label":"text","pivot_table":"Brands","pivot":"0"}', 12),
(326, 79, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(327, 79, 'banner', 'image', 'Banner', 0, 1, 1, 1, 1, 1, '{}', 2),
(328, 79, 'link', 'text', 'Link', 0, 1, 1, 1, 1, 1, NULL, 3),
(329, 79, 'property_id', 'checkbox', 'Property Id', 0, 0, 0, 0, 0, 0, NULL, 4),
(330, 79, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 5),
(331, 79, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 6),
(332, 79, 'featured_home_slider_belongsto_property_relationship', 'relationship', 'properties', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\Property","table":"properties","type":"belongsTo","column":"property_id","key":"id","label":"title","pivot_table":"Brands","pivot":"0"}', 7),
(333, 62, 'is_featured', 'checkbox', 'Is Featured', 0, 0, 1, 1, 1, 1, NULL, 6),
(334, 80, 'id', 'checkbox', 'Id', 1, 1, 0, 0, 0, 0, NULL, 1),
(335, 80, 'text', 'text', 'Text', 1, 1, 1, 1, 1, 1, NULL, 2),
(336, 80, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(337, 80, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(338, 62, 'property_option_belongsto_property_option_type_relationship', 'relationship', 'property_option_types', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\PropertyOptionType","table":"property_option_types","type":"belongsTo","column":"property_option_type_id","key":"id","label":"text","pivot_table":"Brands","pivot":"0"}', 7),
(339, 62, 'property_option_type_id', 'checkbox', 'Property Option Type Id', 0, 0, 0, 0, 0, 0, NULL, 7),
(340, 81, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(341, 81, 'text', 'text', 'Text', 1, 1, 1, 1, 1, 1, NULL, 2),
(342, 81, 'property_option_id', 'checkbox', 'Property Option Id', 0, 0, 0, 0, 0, 0, NULL, 3),
(343, 81, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 4),
(344, 81, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 5),
(345, 81, 'property_option_result_belongsto_property_option_relationship', 'relationship', 'property_options', 0, 1, 1, 1, 1, 1, '{"model":"App\\\\Models\\\\PropertyOption","table":"property_options","type":"belongsTo","column":"property_option_id","key":"id","label":"text","pivot_table":"Brands","pivot":"0"}', 6),
(346, 83, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(347, 83, 'text', 'checkbox', 'Text', 1, 1, 1, 1, 1, 1, NULL, 2),
(348, 83, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(349, 83, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(350, 43, 'is_approved', 'checkbox', 'Is Approved', 0, 1, 1, 1, 1, 1, NULL, 17),
(351, 3, 'is_social', 'checkbox', 'Is Social', 0, 0, 0, 0, 0, 0, NULL, 13),
(352, 3, 'social_type', 'checkbox', 'Social Type', 0, 0, 0, 0, 0, 0, NULL, 14),
(353, 3, 'property_limit_user', 'number', 'Property Limit User', 0, 1, 1, 1, 1, 1, NULL, 15),
(354, 68, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, NULL, 6),
(355, 56, 'parent_id', 'checkbox', 'Parent Id', 0, 0, 0, 0, 0, 0, NULL, 8),
(356, 56, 'type', 'checkbox', 'Type', 0, 0, 0, 0, 0, 0, NULL, 9),
(357, 56, 'related_id', 'checkbox', 'Related Id', 0, 0, 0, 0, 0, 0, NULL, 10),
(358, 84, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(359, 84, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 2),
(360, 84, 'featured', 'checkbox', 'Featured', 0, 1, 1, 1, 1, 1, NULL, 3),
(361, 84, 'brochure', 'image', 'Brochure', 1, 1, 1, 1, 1, 1, NULL, 4),
(362, 84, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, NULL, 5),
(363, 84, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 6),
(364, 84, 'user_id', 'checkbox', 'User Id', 1, 0, 0, 0, 0, 0, NULL, 7),
(365, 84, 'is_new_launch', 'checkbox', 'Is New Launch', 0, 0, 1, 1, 1, 1, NULL, 8),
(366, 62, 'icon', 'text', 'Icon', 0, 0, 1, 1, 1, 1, NULL, 5),
(367, 70, 'is_best', 'checkbox', 'Is Best', 0, 0, 1, 1, 1, 1, NULL, 7),
(370, 70, 'property_image_belongsto_property_relationship', 'relationship', 'properties', 0, 1, 1, 0, 0, 0, '{"model":"App\\\\Models\\\\Property","table":"properties","type":"belongsTo","column":"property_id","key":"id","label":"title","pivot_table":"Brands","pivot":"0"}', 8);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `created_at`, `updated_at`) VALUES
(1, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '2017-11-13 13:52:32', '2017-11-23 07:42:24'),
(2, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, NULL, NULL, 1, 0, '2017-11-13 13:52:32', '2017-12-18 12:25:53'),
(3, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', NULL, NULL, 1, 0, '2017-11-13 13:52:32', '2017-12-06 12:01:04'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, NULL, NULL, 1, 0, '2017-11-13 13:52:32', '2017-12-18 12:22:09'),
(5, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, NULL, NULL, 1, 0, '2017-11-13 13:52:32', '2017-12-18 12:25:03'),
(6, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, NULL, NULL, 1, 0, '2017-11-13 13:52:32', '2017-12-18 12:19:42'),
(12, 'House_Type', 'house-type', 'House Type', 'House Types', 'voyager-star', 'App\\Models\\HouseType', NULL, NULL, NULL, 1, 0, '2017-11-14 13:17:55', '2017-11-14 13:17:55'),
(13, 'Property_Status', 'property-status', 'Property Status', 'Property Statuses', 'voyager-star', 'App\\Models\\PropertyStatus', NULL, NULL, NULL, 1, 0, '2017-11-14 13:20:39', '2017-11-14 13:20:39'),
(16, 'Expected_Delivery', 'expected-delivery', 'Expected Delivery', 'Expected Deliveries', 'voyager-star', 'App\\Models\\ExpectedDelivery', NULL, NULL, NULL, 1, 0, '2017-11-14 13:27:56', '2017-11-14 13:27:56'),
(17, 'Degeree_Ownership', 'degeree-ownership', 'Degeree Ownership', 'Degeree Ownerships', 'voyager-star', 'App\\Models\\DegereeOwnership', NULL, NULL, NULL, 1, 0, '2017-11-14 14:04:31', '2017-11-14 14:04:31'),
(18, 'Purpose_Posting', 'purpose-posting', 'Purpose Posting', 'Purpose Postings', 'voyager-star', 'App\\Models\\PurposePosting', NULL, NULL, NULL, 1, 0, '2017-11-14 14:09:02', '2017-11-14 14:09:02'),
(22, 'Location', 'location', 'Location', 'Locations', 'voyager-location', 'App\\Models\\Location', NULL, NULL, NULL, 1, 0, '2017-11-16 10:18:48', '2017-11-16 10:18:48'),
(24, 'Property_Type', 'property-type', 'Property Type', 'Property Types', 'voyager-activity', 'App\\Models\\PropertyType', NULL, NULL, NULL, 1, 0, '2017-11-19 12:11:36', '2017-11-19 12:11:36'),
(33, 'degree_ownerships', 'degree-ownerships', 'Degree Ownership', 'Degree Ownerships', NULL, 'App\\Models\\DegreeOwnership', NULL, NULL, NULL, 1, 0, '2017-11-19 13:23:39', '2017-11-19 13:23:39'),
(34, 'expected_deliveries', 'expected-deliveries', 'Expected Delivery', 'Expected Deliveries', NULL, 'App\\Models\\ExpectedDelivery', NULL, NULL, NULL, 1, 0, '2017-11-19 13:25:05', '2017-11-19 13:25:05'),
(37, 'property_statuses', 'property-statuses', 'Property Status', 'Property Statuses', 'voyager-categories', 'App\\Models\\PropertyStatus', NULL, NULL, NULL, 1, 0, '2017-11-19 13:37:04', '2017-11-19 13:37:04'),
(38, 'property_types', 'property-types', 'Property Type', 'Property Types', 'voyager-categories', 'App\\Models\\PropertyType', NULL, NULL, NULL, 1, 0, '2017-11-19 13:37:34', '2017-11-19 13:37:34'),
(39, 'purpose_postings', 'purpose-postings', 'Purpose Posting', 'Purpose Postings', 'voyager-laptop', 'App\\Models\\PurposePosting', NULL, NULL, NULL, 1, 0, '2017-11-19 13:38:07', '2017-11-19 13:38:07'),
(40, 'developers', 'developers', 'Developer', 'Developers', 'voyager-laptop', 'App\\Models\\Developer', NULL, NULL, NULL, 1, 0, '2017-11-19 13:49:07', '2017-11-19 13:49:07'),
(41, 'property_forms', 'property-forms', 'Property Form', 'Property Forms', 'voyager-laptop', 'App\\Models\\PropertyForm', NULL, NULL, NULL, 1, 0, '2017-11-19 13:56:47', '2017-11-19 13:56:47'),
(43, 'properties', 'properties', 'Property', 'Properties', 'voyager-categories', 'App\\Models\\Property', NULL, NULL, NULL, 1, 0, '2017-11-19 14:40:50', '2017-12-18 12:45:17'),
(44, 'interior_designers', 'interior-designers', 'Interior Designer', 'Interior Designers', 'voyager-images', 'App\\Models\\InteriorDesigner', NULL, NULL, NULL, 1, 0, '2017-11-21 13:09:55', '2017-12-19 04:44:37'),
(45, 'contacts', 'contacts', 'Contact', 'Contacts', 'voyager-people', 'App\\Models\\Contact', NULL, NULL, NULL, 1, 0, '2017-11-22 08:47:32', '2017-11-22 08:47:32'),
(46, 'cities', 'cities', 'City', 'Cities', 'voyager-dashboard', 'App\\Models\\City', NULL, NULL, NULL, 1, 0, '2017-11-23 13:28:51', '2017-11-23 13:28:51'),
(47, 'districts', 'districts', 'District', 'Districts', 'voyager-dashboard', 'App\\Models\\District', NULL, NULL, NULL, 1, 0, '2017-11-26 08:17:42', '2017-11-26 08:17:42'),
(50, 'services', 'services', 'Service', 'Services', 'voyager-fire', 'App\\Models\\Service', NULL, NULL, NULL, 1, 0, '2017-11-28 09:38:57', '2017-12-18 12:37:29'),
(51, 'companies', 'companies', 'Company', 'Companies', 'voyager-company', 'App\\Models\\Company', NULL, NULL, NULL, 1, 0, '2017-11-28 09:44:59', '2017-12-18 12:40:30'),
(56, 'messages', 'messages', 'Message', 'Messages', 'voyager-double-down', 'App\\Models\\Message', NULL, NULL, NULL, 1, 0, '2017-12-05 08:36:14', '2017-12-18 12:43:10'),
(57, 'new_launches', 'new-launches', 'New Launch', 'New Launches', 'voyager-person', 'App\\Models\\NewLaunch', NULL, NULL, NULL, 1, 0, '2017-12-05 09:12:56', '2017-12-18 12:46:45'),
(58, 'remove_reasons', 'remove-reasons', 'Remove Reason', 'Remove Reasons', NULL, 'App\\Models\\RemoveReason', NULL, NULL, NULL, 1, 0, '2017-12-05 09:19:11', '2017-12-05 09:19:11'),
(62, 'property_options', 'property-options', 'Property Option', 'Property Options', 'voyager-hammer', 'App\\Models\\PropertyOption', NULL, NULL, NULL, 1, 0, '2017-12-06 07:43:28', '2017-12-18 12:47:34'),
(63, 'user_types', 'user-types', 'User Type', 'User Types', 'voyager-person', 'App\\Models\\UserType', NULL, NULL, NULL, 1, 0, '2017-12-06 10:52:50', '2017-12-18 12:46:21'),
(65, 'front_slugs', 'front-slugs', 'Front Slug', 'Front Slugs', 'voyager-list', 'App\\Models\\FrontSlug', NULL, NULL, NULL, 1, 0, '2017-12-06 10:56:10', '2017-12-18 12:42:06'),
(67, 'front_roles', 'front-roles', 'Front Role', 'Front Roles', NULL, 'App\\Models\\FrontRole', NULL, NULL, NULL, 1, 0, '2017-12-06 11:18:36', '2017-12-06 11:18:36'),
(68, 'dimensions', 'dimensions', 'Dimension', 'Dimensions', 'voyager-x', 'App\\Models\\Dimension', NULL, NULL, NULL, 1, 0, '2017-12-06 12:17:06', '2017-12-18 12:41:03'),
(69, 'property_ads', 'property-ads', 'Property Ad', 'Property Ads', 'voyager-bread', 'App\\Models\\PropertyAd', NULL, NULL, NULL, 1, 0, '2017-12-06 12:26:30', '2017-12-18 12:48:05'),
(70, 'property_images', 'property-images', 'Property Image', 'Property Images', NULL, 'App\\Models\\PropertyImage', NULL, NULL, NULL, 1, 0, '2017-12-07 10:41:00', '2017-12-07 10:41:00'),
(72, 'interior_designers_images', 'interior-designers-images', 'Interior Designers Image', 'Interior Designers Images', NULL, 'App\\Models\\InteriorDesignersImage', NULL, NULL, NULL, 1, 0, '2017-12-11 08:43:44', '2017-12-11 08:43:44'),
(73, 'hot_offers_discounts', 'hot-offers-discounts', 'Hot Offers Discount', 'Hot Offers Discounts', NULL, 'App\\Models\\HotOffersDiscount', NULL, NULL, NULL, 1, 0, '2017-12-19 10:06:15', '2017-12-19 10:06:15'),
(74, 'hot_offers_places', 'hot-offers-places', 'Hot Offers Place', 'Hot Offers Places', NULL, 'App\\Models\\HotOffersPlace', NULL, NULL, NULL, 1, 0, '2017-12-19 11:24:27', '2017-12-19 11:24:27'),
(77, 'hot_offers', 'hot-offers', 'Hot Offer', 'Hot Offers', NULL, 'App\\Models\\HotOffer', NULL, NULL, NULL, 1, 0, '2017-12-19 11:37:28', '2017-12-19 11:37:28'),
(79, 'featured_home_sliders', 'featured-home-sliders', 'Featured Home Slider', 'Featured Home Sliders', NULL, 'App\\Models\\FeaturedHomeSlider', NULL, NULL, NULL, 1, 0, '2017-12-19 12:15:15', '2017-12-19 12:15:15'),
(80, 'property_option_types', 'property-option-types', 'Property Option Type', 'Property Option Types', NULL, 'App\\Models\\PropertyOptionType', NULL, NULL, NULL, 1, 0, '2017-12-19 12:25:47', '2017-12-19 12:25:47'),
(81, 'property_option_results', 'property-option-results', 'Property Option Result', 'Property Option Results', NULL, 'App\\Models\\PropertyOptionResult', NULL, NULL, NULL, 1, 0, '2017-12-19 12:38:36', '2017-12-19 12:38:36'),
(83, 'currencies', 'currencies', 'Currency', 'Currencies', NULL, 'App\\Models\\Currency', NULL, NULL, NULL, 1, 0, '2017-12-19 12:58:46', '2017-12-19 12:58:46'),
(84, 'projects', 'projects', 'Project', 'Projects', NULL, 'App\\Models\\Project', NULL, NULL, NULL, 1, 0, '2017-12-21 12:29:45', '2017-12-21 12:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `degree_ownerships`
--

CREATE TABLE `degree_ownerships` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `degree_ownerships`
--

INSERT INTO `degree_ownerships` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'owner level3', '2017-11-27 10:48:24', '2017-12-29 13:17:01'),
(2, 'owner level2', '2017-12-17 14:20:07', '2017-12-29 13:16:51'),
(3, 'owner level1', '2017-12-17 14:23:25', '2017-12-29 13:16:42'),
(4, 'owner', '2017-12-17 16:46:44', '2017-12-29 13:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`id`, `text`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'vbv', NULL, '2017-12-17 16:47:49', '2017-12-17 16:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `dimensions`
--

CREATE TABLE `dimensions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dimensions`
--

INSERT INTO `dimensions` (`id`, `created_at`, `updated_at`, `height`, `width`, `title`) VALUES
(17, '2017-12-21 07:37:03', '2017-12-21 11:14:07', 76876, 345, 'title TEN'),
(18, '2017-12-21 11:13:39', '2017-12-21 11:13:39', 999, 999, 'ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `longtitude` double DEFAULT NULL,
  `latitiude` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `text`, `created_at`, `updated_at`, `city_id`, `longtitude`, `latitiude`) VALUES
(7, 'ahmed', '2017-12-17 16:43:33', '2017-12-17 16:43:33', 2, 35, 478.2258);

-- --------------------------------------------------------

--
-- Table structure for table `expected_deliveries`
--

CREATE TABLE `expected_deliveries` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured_home_sliders`
--

CREATE TABLE `featured_home_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `property_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `featured_home_sliders`
--

INSERT INTO `featured_home_sliders` (`id`, `banner`, `link`, `property_id`, `created_at`, `updated_at`) VALUES
(12, '', '', 10, NULL, '2017-12-29 16:51:48'),
(16, '', '', 11, NULL, '2017-12-29 16:50:11'),
(17, 'featured-home-sliders/December2017/snvmfHCJX9fkiUEYGDuX.png', 'http://sellbyrent.dev/admin/featured-home-sliders/create', NULL, '2017-12-29 17:01:20', '2017-12-29 17:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `front_roles`
--

CREATE TABLE `front_roles` (
  `id` int(5) NOT NULL,
  `user_type_id` int(5) NOT NULL,
  `front_slug_id` int(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `front_roles`
--

INSERT INTO `front_roles` (`id`, `user_type_id`, `front_slug_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2017-12-17 16:08:26', '2017-12-17 16:08:26'),
(2, 1, 1, '2017-12-17 16:09:57', '2017-12-17 16:09:57'),
(3, 2, 2, '2017-12-21 07:37:33', '2017-12-21 07:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `front_slugs`
--

CREATE TABLE `front_slugs` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `front_slugs`
--

INSERT INTO `front_slugs` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'designer', '2017-12-07 06:59:34', '2017-12-07 06:59:34'),
(2, 'nemeaa', '2017-12-14 07:02:48', '2017-12-14 07:02:48'),
(3, 'dsfdsf', '2017-12-17 15:51:54', '2017-12-17 15:51:54'),
(4, 'uiui', '2017-12-21 07:54:10', '2017-12-21 07:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `hot_offers`
--

CREATE TABLE `hot_offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `paid` double DEFAULT NULL,
  `hot_offers_discount_id` int(11) NOT NULL DEFAULT '0',
  `hot_offers_place_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price_after_discount` int(11) DEFAULT NULL,
  `discount_value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hot_offers`
--

INSERT INTO `hot_offers` (`id`, `property_id`, `start_date`, `end_date`, `paid`, `hot_offers_discount_id`, `hot_offers_place_id`, `created_at`, `updated_at`, `price_after_discount`, `discount_value`) VALUES
(1, 4, '2012-02-01 22:00:00', '2012-03-02 22:00:00', 786, 0, 1, '2017-12-20 11:27:23', '2017-12-20 11:27:23', NULL, NULL),
(2, 4, '2017-12-14 22:00:00', '2017-12-21 22:00:00', 777, 0, 1, '2017-12-21 04:52:07', '2017-12-21 04:52:07', NULL, NULL),
(3, 4, '2017-12-20 22:00:00', '2017-12-17 22:00:00', 884, 0, 1, '2017-12-21 07:24:32', '2017-12-21 07:24:32', NULL, NULL),
(4, 8, NULL, NULL, NULL, 0, NULL, '2017-12-26 16:22:29', '2017-12-26 16:22:29', 18000, 10),
(5, 9, NULL, NULL, NULL, 0, NULL, '2017-12-26 16:27:48', '2017-12-26 16:27:48', 18000, 10),
(6, 10, NULL, NULL, NULL, 0, NULL, '2017-12-27 07:07:29', '2017-12-27 07:07:29', 450000, 10),
(7, 11, NULL, NULL, NULL, 0, NULL, '2017-12-28 10:25:00', '2017-12-28 10:25:00', 7200000, 10),
(8, 12, NULL, NULL, NULL, 0, NULL, '2017-12-29 10:41:10', '2017-12-29 10:41:10', 450000, 10),
(9, 13, NULL, NULL, NULL, 0, NULL, '2017-12-29 10:52:25', '2017-12-29 10:52:25', 1275000, 15);

-- --------------------------------------------------------

--
-- Table structure for table `hot_offers_discounts`
--

CREATE TABLE `hot_offers_discounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hot_offers_discounts`
--

INSERT INTO `hot_offers_discounts` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'percentatge', NULL, '2017-12-26 13:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `hot_offers_places`
--

CREATE TABLE `hot_offers_places` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hot_offers_places`
--

INSERT INTO `hot_offers_places` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'home', '2017-12-20 10:28:15', '2017-12-20 10:28:15'),
(2, 'inner', '2017-12-20 10:28:20', '2017-12-20 10:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `interior_designers`
--

CREATE TABLE `interior_designers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desc` longtext COLLATE utf8_unicode_ci,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `interior_designers`
--

INSERT INTO `interior_designers` (`id`, `name`, `desc`, `facebook`, `instagram`, `website`, `photo`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'sell-by-rent-web', 'kii', 'interior 1', 'klj', 'interior 1', 'interior-designers/December2017/7Ezkqfn9FwtcGuBf4zFF.png', '2017-12-18 09:16:18', '2017-12-18 09:16:18', 0),
(2, 'sell-by-rent-web', 'sdfgh', 'fghj', 'klj', 'interior 1', NULL, '2017-12-20 12:10:20', '2017-12-20 12:10:20', 0),
(3, 'sell-by-rent-web', 'yghyghyhj', 'klm', 'klj', 'interior 1', NULL, '2017-12-20 12:12:37', '2017-12-20 12:12:37', 0),
(4, 'yugh', 'yghj', 'yuhjn', 'yhgjn', 'hj', NULL, '2017-12-20 12:15:24', '2017-12-20 12:15:24', 0),
(5, 'sell-by-rent-web', 'iojkjik', 'kjokjkkkj', 'kjkjlkj', 'kjkljkl', NULL, '2017-12-21 04:09:53', '2017-12-21 04:09:53', 0),
(6, 'fathhiii', 'iulkj', 'yuui', 'uiyiu', 'uyhiuhu', 'interior-designers/December2017/F95TwdBpPgiBcy5gubdF.png', '2017-12-21 08:09:33', '2017-12-21 08:09:33', 0),
(7, 'fathjiuuuuu', 'kjhuj', 'http://sellbyrent.dev/admin/interior-designers/create', 'http://sellbyrent.dev/admin/interior-designers/create', 'http://sellbyrent.dev/admin/interior-designers/create', NULL, '2017-12-21 08:11:39', '2017-12-21 08:11:39', 0),
(8, 'our name', 'uytyut', 'http://sellbyrent.dev/admin/interior-designers/create', 'http://sellbyrent.dev/admin/interior-designers/create', 'http://sellbyrent.dev/admin/interior-designers/create', NULL, '2017-12-21 08:15:23', '2017-12-21 08:15:23', 0),
(9, 'yyy', 'yyy', 'http://sellbyrent.dev/admin/interior-designers/create', 'http://sellbyrent.dev/admin/interior-designers/create', 'http://sellbyrent.dev/admin/interior-designers/create', NULL, '2017-12-21 08:17:38', '2017-12-21 08:17:38', 0),
(11, 'uuyy', 'yyyyy', 'http://sellbyrent.dev/admin/interior-designers/create', 'http://sellbyrent.dev/admin/interior-designers/create', 'http://sellbyrent.dev/admin/interior-designers/create', 'interior-designers/December2017/S4RDn3sRbCWp2bkFglvE.png', '2017-12-21 08:20:11', '2017-12-21 08:20:11', 0),
(12, 'last', 'last', 'http://sellbyrent.dev/admin/interior-designers/create', 'http://sellbyrent.dev/admin/interior-designers/create', 'http://sellbyrent.dev/admin/interior-designers/create', 'interior-designers/December2017/1bkIEf5HsNPN21eVDYR5.png', '2017-12-21 08:22:16', '2017-12-21 08:22:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `interior_designers_images`
--

CREATE TABLE `interior_designers_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `interior_designer_id` int(11) DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `interior_designers_images`
--

INSERT INTO `interior_designers_images` (`id`, `interior_designer_id`, `image`, `created_at`, `updated_at`) VALUES
(10, 3, 'uu', '2017-12-20 12:41:05', '2017-12-20 12:41:05'),
(11, 1, 'jjk', '2017-12-20 12:42:20', '2017-12-20 12:42:20'),
(12, 1, 'interior-designers-images/December2017/fEXs8APLkgNOGewBh6Qm.png', '2017-12-20 12:43:06', '2017-12-20 12:43:06'),
(19, 1, 'interior-designers-images/December2017/YjrgdVuyOvKZOXP77D9W.png', '2017-12-20 12:50:25', '2017-12-20 12:50:25'),
(20, 1, NULL, '2017-12-20 12:51:02', '2017-12-20 12:51:02'),
(21, 1, NULL, '2017-12-20 12:51:10', '2017-12-20 12:51:10'),
(22, 1, 'interior-designers-images/December2017/Z5efaWwvaSZw9xq0NOQ8.png', '2017-12-21 04:41:28', '2017-12-21 04:41:28'),
(23, 1, 'interior-designers-images/December2017/okdfMeCENZZTItdtZ4OS.png', '2017-12-21 07:26:28', '2017-12-21 07:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2017-11-13 13:52:35', '2017-11-13 13:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2017-11-13 13:52:35', '2017-11-13 13:52:35', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 3, '2017-11-13 13:52:35', '2017-12-30 07:53:14', 'voyager.media.index', NULL),
(3, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 4, '2017-11-13 13:52:35', '2017-12-30 07:53:14', 'voyager.posts.index', NULL),
(4, 1, 'Users', '', '_self', 'voyager-person', NULL, 62, 1, '2017-11-13 13:52:35', '2017-12-30 07:53:33', 'voyager.users.index', NULL),
(5, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 6, '2017-11-13 13:52:35', '2017-12-30 07:53:14', 'voyager.categories.index', NULL),
(6, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 5, '2017-11-13 13:52:35', '2017-12-30 07:53:14', 'voyager.pages.index', NULL),
(7, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2017-11-13 13:52:35', '2017-11-13 13:52:35', 'voyager.roles.index', NULL),
(8, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 7, '2017-11-13 13:52:35', '2017-12-30 07:53:14', NULL, NULL),
(9, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 8, 1, '2017-11-13 13:52:35', '2017-11-14 13:30:08', 'voyager.menus.index', NULL),
(10, 1, 'Database', '', '_self', 'voyager-data', NULL, 8, 2, '2017-11-13 13:52:35', '2017-11-14 13:30:08', 'voyager.database.index', NULL),
(11, 1, 'Compass', '/admin/compass', '_self', 'voyager-compass', NULL, 8, 3, '2017-11-13 13:52:35', '2017-11-14 13:30:08', NULL, NULL),
(12, 1, 'Hooks', '/admin/hooks', '_self', 'voyager-hook', NULL, 8, 4, '2017-11-13 13:52:35', '2017-11-14 13:30:08', NULL, NULL),
(13, 1, 'Settings', '', '_self', 'voyager-settings', NULL, 8, 5, '2017-11-13 13:52:35', '2017-12-30 07:56:50', 'voyager.settings.index', NULL),
(19, 1, 'Options', '', '_self', 'voyager-paw', '#000000', NULL, 9, '2017-11-14 13:30:01', '2017-12-30 07:56:50', NULL, ''),
(22, 1, 'Cities', '/admin/cities', '_self', NULL, NULL, 19, 1, '2017-11-16 09:48:39', '2017-11-26 08:25:50', NULL, NULL),
(25, 1, 'Degree Ownerships', '/admin/degree-ownerships', '_self', NULL, NULL, 19, 4, '2017-11-19 13:23:39', '2017-11-19 13:40:56', NULL, NULL),
(26, 1, 'Expected Deliveries', '/admin/expected-deliveries', '_self', NULL, NULL, 19, 5, '2017-11-19 13:25:05', '2017-11-19 13:40:56', NULL, NULL),
(28, 1, 'Property Statuses', '/admin/property-statuses', '_self', NULL, NULL, 19, 6, '2017-11-19 13:37:04', '2017-11-26 08:25:50', NULL, NULL),
(29, 1, 'Property Types', '/admin/property-types', '_self', NULL, NULL, 19, 7, '2017-11-19 13:37:34', '2017-11-26 08:25:50', NULL, NULL),
(30, 1, 'Purpose Postings', '/admin/purpose-postings', '_self', NULL, NULL, 19, 3, '2017-11-19 13:38:07', '2017-11-19 13:40:55', NULL, NULL),
(31, 1, 'Developers', '/admin/developers', '_self', NULL, NULL, 19, 8, '2017-11-19 13:49:07', '2017-11-26 08:25:50', NULL, NULL),
(32, 1, 'Property Forms', '/admin/property-forms', '_self', NULL, NULL, 19, 9, '2017-11-19 13:56:48', '2017-11-26 08:25:50', NULL, NULL),
(33, 1, 'Properties', '/admin/properties', '_self', NULL, NULL, 60, 1, '2017-11-19 14:40:50', '2017-12-30 07:48:06', NULL, NULL),
(34, 1, 'Interior Designers', '/admin/interior-designers', '_self', NULL, NULL, 63, 3, '2017-11-21 13:09:55', '2017-12-30 07:56:20', NULL, NULL),
(35, 1, 'Contacts', '/admin/contacts', '_self', NULL, NULL, 19, 10, '2017-11-22 08:47:32', '2017-11-26 08:25:50', NULL, NULL),
(36, 1, 'Districts', '/admin/districts', '_self', NULL, NULL, 19, 2, '2017-11-26 08:17:42', '2017-11-26 08:25:50', NULL, NULL),
(37, 1, 'User Types', '/admin/user-types', '_self', NULL, NULL, 62, 4, '2017-11-28 09:16:34', '2017-12-30 07:54:01', NULL, NULL),
(38, 1, 'Services', '/admin/services', '_self', NULL, NULL, 63, 6, '2017-11-28 09:38:57', '2017-12-30 07:56:31', NULL, NULL),
(39, 1, 'Companies', '/admin/companies', '_self', NULL, NULL, 63, 2, '2017-11-28 09:44:59', '2017-12-30 07:56:01', NULL, NULL),
(40, 1, 'Brands', '/admin/brands', '_self', NULL, NULL, 19, 12, '2017-11-28 11:07:04', '2017-12-30 07:55:15', NULL, NULL),
(41, 1, 'Store Categories', '/admin/store-categories', '_self', NULL, NULL, 63, 5, '2017-11-28 11:17:05', '2017-12-30 07:56:31', NULL, NULL),
(42, 1, 'Messages', '/admin/messages', '_self', NULL, NULL, NULL, 13, '2017-12-05 08:36:15', '2017-12-30 07:56:56', NULL, NULL),
(43, 1, 'New Launches', '/admin/new-launches', '_self', NULL, NULL, 60, 2, '2017-12-05 09:12:56', '2017-12-30 07:48:17', NULL, NULL),
(44, 1, 'Remove Reasons', '/admin/remove-reasons', '_self', NULL, NULL, 60, 3, '2017-12-05 09:19:11', '2017-12-30 07:48:26', NULL, NULL),
(45, 1, 'Property Options', '/admin/property-options', '_self', NULL, NULL, 60, 10, '2017-12-06 07:43:29', '2017-12-30 07:54:30', NULL, NULL),
(46, 1, 'Front Slugs', '/admin/front-slugs', '_self', NULL, NULL, 62, 2, '2017-12-06 10:56:10', '2017-12-30 07:53:37', NULL, NULL),
(47, 1, 'Front Roles', '/admin/front-roles', '_self', NULL, NULL, 62, 3, '2017-12-06 11:18:36', '2017-12-30 07:53:43', NULL, NULL),
(48, 1, 'Dimensions', '/admin/dimensions', '_self', NULL, NULL, 60, 9, '2017-12-06 12:17:06', '2017-12-30 07:51:42', NULL, NULL),
(49, 1, 'Property Ads', '/admin/property-ads', '_self', NULL, NULL, 60, 5, '2017-12-06 12:26:30', '2017-12-30 07:48:52', NULL, NULL),
(50, 1, 'Property Images', '/admin/property-images', '_self', NULL, NULL, 60, 4, '2017-12-07 10:41:00', '2017-12-30 07:48:39', NULL, NULL),
(51, 1, 'Interior Designers Images', '/admin/interior-designers-images', '_self', NULL, NULL, 63, 4, '2017-12-11 08:43:45', '2017-12-30 07:56:26', NULL, NULL),
(52, 1, 'Hot Offers Discounts', '/admin/hot-offers-discounts', '_self', NULL, NULL, 61, 2, '2017-12-19 10:06:15', '2017-12-30 07:52:35', NULL, NULL),
(53, 1, 'Hot Offers Places', '/admin/hot-offers-places', '_self', NULL, NULL, 61, 3, '2017-12-19 11:24:27', '2017-12-30 07:52:38', NULL, NULL),
(54, 1, 'Hot Offers', '/admin/hot-offers', '_self', NULL, NULL, 61, 1, '2017-12-19 11:37:28', '2017-12-30 07:52:32', NULL, NULL),
(55, 1, 'Featured Home Sliders', '/admin/featured-home-sliders', '_self', NULL, NULL, 60, 7, '2017-12-19 12:15:15', '2017-12-30 07:49:43', NULL, NULL),
(56, 1, 'Property Option Types', '/admin/property-option-types', '_self', NULL, NULL, 60, 6, '2017-12-19 12:25:47', '2017-12-30 07:49:21', NULL, NULL),
(57, 1, 'Property Option Results', '/admin/property-option-results', '_self', NULL, NULL, 60, 8, '2017-12-19 12:38:36', '2017-12-30 07:50:06', NULL, NULL),
(58, 1, 'Currencies', '/admin/currencies', '_self', NULL, NULL, 19, 11, '2017-12-19 12:58:46', '2017-12-30 07:54:57', NULL, NULL),
(59, 1, 'Projects', '/admin/projects', '_self', NULL, NULL, 63, 1, '2017-12-21 12:29:45', '2017-12-30 07:55:52', NULL, NULL),
(60, 1, 'Properties Section', '', '_self', NULL, '#000000', NULL, 8, '2017-12-30 07:47:20', '2017-12-30 07:56:50', NULL, ''),
(61, 1, 'Hot Offer Section', '', '_self', NULL, '#000000', NULL, 11, '2017-12-30 07:52:21', '2017-12-30 07:56:56', NULL, ''),
(62, 1, 'Users Section', '', '_self', NULL, '#000000', NULL, 10, '2017-12-30 07:53:05', '2017-12-30 07:56:56', NULL, ''),
(63, 1, 'The Dock', '', '_self', NULL, '#000000', NULL, 12, '2017-12-30 07:55:41', '2017-12-30 07:56:56', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `from_user` int(10) UNSIGNED DEFAULT NULL,
  `to_user` int(10) UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_read` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `related_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from_user`, `to_user`, `body`, `created_at`, `updated_at`, `is_read`, `parent_id`, `type`, `related_id`, `deleted_at`) VALUES
(7, 1, 1, NULL, '2017-12-17 16:24:14', '2017-12-17 16:24:14', 1, NULL, NULL, NULL, NULL),
(8, 1, 1, 'ahmed', '2017-12-17 16:25:28', '2017-12-17 16:25:28', 1, NULL, NULL, NULL, NULL),
(9, 1, 1, 'ytyut6688#', '2017-12-21 08:01:48', '2017-12-21 08:01:56', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_add_permission_group_id_to_permissions_table', 1),
(17, '2017_01_15_000000_create_permission_groups_table', 1),
(18, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(19, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(20, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(21, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(22, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(23, '2017_08_05_000000_add_group_to_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci,
  `body` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `meta_keywords` text COLLATE utf8_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'ahmed', 'except', NULL, 'pages/November2017/1eBQVaKJkwlMMpF9idXJ.png', 'ahmed', 'meta desc', 'meta keywords', 'INACTIVE', '2017-11-26 07:38:30', '2017-11-26 07:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission_group_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`, `permission_group_id`) VALUES
(1, 'browse_admin', NULL, '2017-11-13 13:52:35', '2017-11-13 13:52:35', NULL),
(2, 'browse_database', NULL, '2017-11-13 13:52:35', '2017-11-13 13:52:35', NULL),
(3, 'browse_media', NULL, '2017-11-13 13:52:35', '2017-11-13 13:52:35', NULL),
(4, 'browse_compass', NULL, '2017-11-13 13:52:35', '2017-11-13 13:52:35', NULL),
(5, 'browse_menus', 'menus', '2017-11-13 13:52:35', '2017-11-13 13:52:35', NULL),
(6, 'read_menus', 'menus', '2017-11-13 13:52:35', '2017-11-13 13:52:35', NULL),
(7, 'edit_menus', 'menus', '2017-11-13 13:52:36', '2017-11-13 13:52:36', NULL),
(8, 'add_menus', 'menus', '2017-11-13 13:52:36', '2017-11-13 13:52:36', NULL),
(9, 'delete_menus', 'menus', '2017-11-13 13:52:36', '2017-11-13 13:52:36', NULL),
(10, 'browse_pages', 'pages', '2017-11-13 13:52:36', '2017-11-13 13:52:36', NULL),
(11, 'read_pages', 'pages', '2017-11-13 13:52:36', '2017-11-13 13:52:36', NULL),
(12, 'edit_pages', 'pages', '2017-11-13 13:52:36', '2017-11-13 13:52:36', NULL),
(13, 'add_pages', 'pages', '2017-11-13 13:52:36', '2017-11-13 13:52:36', NULL),
(14, 'delete_pages', 'pages', '2017-11-13 13:52:36', '2017-11-13 13:52:36', NULL),
(15, 'browse_roles', 'roles', '2017-11-13 13:52:36', '2017-11-13 13:52:36', NULL),
(16, 'read_roles', 'roles', '2017-11-13 13:52:36', '2017-11-13 13:52:36', NULL),
(17, 'edit_roles', 'roles', '2017-11-13 13:52:36', '2017-11-13 13:52:36', NULL),
(18, 'add_roles', 'roles', '2017-11-13 13:52:36', '2017-11-13 13:52:36', NULL),
(19, 'delete_roles', 'roles', '2017-11-13 13:52:36', '2017-11-13 13:52:36', NULL),
(20, 'browse_users', 'users', '2017-11-13 13:52:36', '2017-11-13 13:52:36', NULL),
(21, 'read_users', 'users', '2017-11-13 13:52:37', '2017-11-13 13:52:37', NULL),
(22, 'edit_users', 'users', '2017-11-13 13:52:37', '2017-11-13 13:52:37', NULL),
(23, 'add_users', 'users', '2017-11-13 13:52:37', '2017-11-13 13:52:37', NULL),
(24, 'delete_users', 'users', '2017-11-13 13:52:37', '2017-11-13 13:52:37', NULL),
(25, 'browse_posts', 'posts', '2017-11-13 13:52:37', '2017-11-13 13:52:37', NULL),
(26, 'read_posts', 'posts', '2017-11-13 13:52:37', '2017-11-13 13:52:37', NULL),
(27, 'edit_posts', 'posts', '2017-11-13 13:52:37', '2017-11-13 13:52:37', NULL),
(28, 'add_posts', 'posts', '2017-11-13 13:52:37', '2017-11-13 13:52:37', NULL),
(29, 'delete_posts', 'posts', '2017-11-13 13:52:37', '2017-11-13 13:52:37', NULL),
(30, 'browse_categories', 'categories', '2017-11-13 13:52:37', '2017-11-13 13:52:37', NULL),
(31, 'read_categories', 'categories', '2017-11-13 13:52:38', '2017-11-13 13:52:38', NULL),
(32, 'edit_categories', 'categories', '2017-11-13 13:52:38', '2017-11-13 13:52:38', NULL),
(33, 'add_categories', 'categories', '2017-11-13 13:52:38', '2017-11-13 13:52:38', NULL),
(34, 'delete_categories', 'categories', '2017-11-13 13:52:38', '2017-11-13 13:52:38', NULL),
(35, 'browse_settings', 'settings', '2017-11-13 13:52:38', '2017-11-13 13:52:38', NULL),
(36, 'read_settings', 'settings', '2017-11-13 13:52:38', '2017-11-13 13:52:38', NULL),
(37, 'edit_settings', 'settings', '2017-11-13 13:52:38', '2017-11-13 13:52:38', NULL),
(38, 'add_settings', 'settings', '2017-11-13 13:52:38', '2017-11-13 13:52:38', NULL),
(39, 'delete_settings', 'settings', '2017-11-13 13:52:38', '2017-11-13 13:52:38', NULL),
(45, 'browse_House_Type', 'House_Type', '2017-11-14 13:17:55', '2017-11-14 13:17:55', NULL),
(46, 'read_House_Type', 'House_Type', '2017-11-14 13:17:55', '2017-11-14 13:17:55', NULL),
(47, 'edit_House_Type', 'House_Type', '2017-11-14 13:17:55', '2017-11-14 13:17:55', NULL),
(48, 'add_House_Type', 'House_Type', '2017-11-14 13:17:55', '2017-11-14 13:17:55', NULL),
(49, 'delete_House_Type', 'House_Type', '2017-11-14 13:17:55', '2017-11-14 13:17:55', NULL),
(50, 'browse_Property_Status', 'Property_Status', '2017-11-14 13:20:39', '2017-11-14 13:20:39', NULL),
(51, 'read_Property_Status', 'Property_Status', '2017-11-14 13:20:39', '2017-11-14 13:20:39', NULL),
(52, 'edit_Property_Status', 'Property_Status', '2017-11-14 13:20:39', '2017-11-14 13:20:39', NULL),
(53, 'add_Property_Status', 'Property_Status', '2017-11-14 13:20:39', '2017-11-14 13:20:39', NULL),
(54, 'delete_Property_Status', 'Property_Status', '2017-11-14 13:20:39', '2017-11-14 13:20:39', NULL),
(60, 'browse_Expected_Delivery', 'Expected_Delivery', '2017-11-14 13:27:56', '2017-11-14 13:27:56', NULL),
(61, 'read_Expected_Delivery', 'Expected_Delivery', '2017-11-14 13:27:56', '2017-11-14 13:27:56', NULL),
(62, 'edit_Expected_Delivery', 'Expected_Delivery', '2017-11-14 13:27:56', '2017-11-14 13:27:56', NULL),
(63, 'add_Expected_Delivery', 'Expected_Delivery', '2017-11-14 13:27:56', '2017-11-14 13:27:56', NULL),
(64, 'delete_Expected_Delivery', 'Expected_Delivery', '2017-11-14 13:27:56', '2017-11-14 13:27:56', NULL),
(65, 'browse_Degeree_Ownership', 'Degeree_Ownership', '2017-11-14 14:04:31', '2017-11-14 14:04:31', NULL),
(66, 'read_Degeree_Ownership', 'Degeree_Ownership', '2017-11-14 14:04:31', '2017-11-14 14:04:31', NULL),
(67, 'edit_Degeree_Ownership', 'Degeree_Ownership', '2017-11-14 14:04:31', '2017-11-14 14:04:31', NULL),
(68, 'add_Degeree_Ownership', 'Degeree_Ownership', '2017-11-14 14:04:31', '2017-11-14 14:04:31', NULL),
(69, 'delete_Degeree_Ownership', 'Degeree_Ownership', '2017-11-14 14:04:31', '2017-11-14 14:04:31', NULL),
(70, 'browse_Purpose_Posting', 'Purpose_Posting', '2017-11-14 14:09:02', '2017-11-14 14:09:02', NULL),
(71, 'read_Purpose_Posting', 'Purpose_Posting', '2017-11-14 14:09:02', '2017-11-14 14:09:02', NULL),
(72, 'edit_Purpose_Posting', 'Purpose_Posting', '2017-11-14 14:09:02', '2017-11-14 14:09:02', NULL),
(73, 'add_Purpose_Posting', 'Purpose_Posting', '2017-11-14 14:09:02', '2017-11-14 14:09:02', NULL),
(74, 'delete_Purpose_Posting', 'Purpose_Posting', '2017-11-14 14:09:02', '2017-11-14 14:09:02', NULL),
(90, 'browse_Property_Type', 'Property_Type', '2017-11-19 12:11:36', '2017-11-19 12:11:36', NULL),
(91, 'read_Property_Type', 'Property_Type', '2017-11-19 12:11:36', '2017-11-19 12:11:36', NULL),
(92, 'edit_Property_Type', 'Property_Type', '2017-11-19 12:11:36', '2017-11-19 12:11:36', NULL),
(93, 'add_Property_Type', 'Property_Type', '2017-11-19 12:11:36', '2017-11-19 12:11:36', NULL),
(94, 'delete_Property_Type', 'Property_Type', '2017-11-19 12:11:36', '2017-11-19 12:11:36', NULL),
(95, 'browse_degree_ownerships', 'degree_ownerships', '2017-11-19 13:23:39', '2017-11-19 13:23:39', NULL),
(96, 'read_degree_ownerships', 'degree_ownerships', '2017-11-19 13:23:39', '2017-11-19 13:23:39', NULL),
(97, 'edit_degree_ownerships', 'degree_ownerships', '2017-11-19 13:23:39', '2017-11-19 13:23:39', NULL),
(98, 'add_degree_ownerships', 'degree_ownerships', '2017-11-19 13:23:39', '2017-11-19 13:23:39', NULL),
(99, 'delete_degree_ownerships', 'degree_ownerships', '2017-11-19 13:23:39', '2017-11-19 13:23:39', NULL),
(100, 'browse_expected_deliveries', 'expected_deliveries', '2017-11-19 13:25:05', '2017-11-19 13:25:05', NULL),
(101, 'read_expected_deliveries', 'expected_deliveries', '2017-11-19 13:25:05', '2017-11-19 13:25:05', NULL),
(102, 'edit_expected_deliveries', 'expected_deliveries', '2017-11-19 13:25:05', '2017-11-19 13:25:05', NULL),
(103, 'add_expected_deliveries', 'expected_deliveries', '2017-11-19 13:25:05', '2017-11-19 13:25:05', NULL),
(104, 'delete_expected_deliveries', 'expected_deliveries', '2017-11-19 13:25:05', '2017-11-19 13:25:05', NULL),
(110, 'browse_property_statuses', 'property_statuses', '2017-11-19 13:37:04', '2017-11-19 13:37:04', NULL),
(111, 'read_property_statuses', 'property_statuses', '2017-11-19 13:37:04', '2017-11-19 13:37:04', NULL),
(112, 'edit_property_statuses', 'property_statuses', '2017-11-19 13:37:04', '2017-11-19 13:37:04', NULL),
(113, 'add_property_statuses', 'property_statuses', '2017-11-19 13:37:04', '2017-11-19 13:37:04', NULL),
(114, 'delete_property_statuses', 'property_statuses', '2017-11-19 13:37:04', '2017-11-19 13:37:04', NULL),
(115, 'browse_property_types', 'property_types', '2017-11-19 13:37:34', '2017-11-19 13:37:34', NULL),
(116, 'read_property_types', 'property_types', '2017-11-19 13:37:34', '2017-11-19 13:37:34', NULL),
(117, 'edit_property_types', 'property_types', '2017-11-19 13:37:34', '2017-11-19 13:37:34', NULL),
(118, 'add_property_types', 'property_types', '2017-11-19 13:37:34', '2017-11-19 13:37:34', NULL),
(119, 'delete_property_types', 'property_types', '2017-11-19 13:37:34', '2017-11-19 13:37:34', NULL),
(120, 'browse_purpose_postings', 'purpose_postings', '2017-11-19 13:38:07', '2017-11-19 13:38:07', NULL),
(121, 'read_purpose_postings', 'purpose_postings', '2017-11-19 13:38:07', '2017-11-19 13:38:07', NULL),
(122, 'edit_purpose_postings', 'purpose_postings', '2017-11-19 13:38:07', '2017-11-19 13:38:07', NULL),
(123, 'add_purpose_postings', 'purpose_postings', '2017-11-19 13:38:07', '2017-11-19 13:38:07', NULL),
(124, 'delete_purpose_postings', 'purpose_postings', '2017-11-19 13:38:07', '2017-11-19 13:38:07', NULL),
(125, 'browse_developers', 'developers', '2017-11-19 13:49:07', '2017-11-19 13:49:07', NULL),
(126, 'read_developers', 'developers', '2017-11-19 13:49:07', '2017-11-19 13:49:07', NULL),
(127, 'edit_developers', 'developers', '2017-11-19 13:49:07', '2017-11-19 13:49:07', NULL),
(128, 'add_developers', 'developers', '2017-11-19 13:49:07', '2017-11-19 13:49:07', NULL),
(129, 'delete_developers', 'developers', '2017-11-19 13:49:07', '2017-11-19 13:49:07', NULL),
(130, 'browse_property_forms', 'property_forms', '2017-11-19 13:56:47', '2017-11-19 13:56:47', NULL),
(131, 'read_property_forms', 'property_forms', '2017-11-19 13:56:47', '2017-11-19 13:56:47', NULL),
(132, 'edit_property_forms', 'property_forms', '2017-11-19 13:56:47', '2017-11-19 13:56:47', NULL),
(133, 'add_property_forms', 'property_forms', '2017-11-19 13:56:47', '2017-11-19 13:56:47', NULL),
(134, 'delete_property_forms', 'property_forms', '2017-11-19 13:56:47', '2017-11-19 13:56:47', NULL),
(135, 'browse_properties', 'properties', '2017-11-19 14:40:50', '2017-11-19 14:40:50', NULL),
(136, 'read_properties', 'properties', '2017-11-19 14:40:50', '2017-11-19 14:40:50', NULL),
(137, 'edit_properties', 'properties', '2017-11-19 14:40:50', '2017-11-19 14:40:50', NULL),
(138, 'add_properties', 'properties', '2017-11-19 14:40:50', '2017-11-19 14:40:50', NULL),
(139, 'delete_properties', 'properties', '2017-11-19 14:40:50', '2017-11-19 14:40:50', NULL),
(140, 'browse_interior_designers', 'interior_designers', '2017-11-21 13:09:55', '2017-11-21 13:09:55', NULL),
(141, 'read_interior_designers', 'interior_designers', '2017-11-21 13:09:55', '2017-11-21 13:09:55', NULL),
(142, 'edit_interior_designers', 'interior_designers', '2017-11-21 13:09:55', '2017-11-21 13:09:55', NULL),
(143, 'add_interior_designers', 'interior_designers', '2017-11-21 13:09:55', '2017-11-21 13:09:55', NULL),
(144, 'delete_interior_designers', 'interior_designers', '2017-11-21 13:09:55', '2017-11-21 13:09:55', NULL),
(145, 'browse_contacts', 'contacts', '2017-11-22 08:47:32', '2017-11-22 08:47:32', NULL),
(146, 'read_contacts', 'contacts', '2017-11-22 08:47:32', '2017-11-22 08:47:32', NULL),
(147, 'edit_contacts', 'contacts', '2017-11-22 08:47:32', '2017-11-22 08:47:32', NULL),
(148, 'add_contacts', 'contacts', '2017-11-22 08:47:32', '2017-11-22 08:47:32', NULL),
(149, 'delete_contacts', 'contacts', '2017-11-22 08:47:32', '2017-11-22 08:47:32', NULL),
(150, 'browse_cities', 'cities', '2017-11-23 13:28:51', '2017-11-23 13:28:51', NULL),
(151, 'read_cities', 'cities', '2017-11-23 13:28:51', '2017-11-23 13:28:51', NULL),
(152, 'edit_cities', 'cities', '2017-11-23 13:28:51', '2017-11-23 13:28:51', NULL),
(153, 'add_cities', 'cities', '2017-11-23 13:28:51', '2017-11-23 13:28:51', NULL),
(154, 'delete_cities', 'cities', '2017-11-23 13:28:51', '2017-11-23 13:28:51', NULL),
(155, 'browse_districts', 'districts', '2017-11-26 08:17:42', '2017-11-26 08:17:42', NULL),
(156, 'read_districts', 'districts', '2017-11-26 08:17:42', '2017-11-26 08:17:42', NULL),
(157, 'edit_districts', 'districts', '2017-11-26 08:17:42', '2017-11-26 08:17:42', NULL),
(158, 'add_districts', 'districts', '2017-11-26 08:17:42', '2017-11-26 08:17:42', NULL),
(159, 'delete_districts', 'districts', '2017-11-26 08:17:42', '2017-11-26 08:17:42', NULL),
(165, 'browse_services', 'services', '2017-11-28 09:38:57', '2017-11-28 09:38:57', NULL),
(166, 'read_services', 'services', '2017-11-28 09:38:57', '2017-11-28 09:38:57', NULL),
(167, 'edit_services', 'services', '2017-11-28 09:38:57', '2017-11-28 09:38:57', NULL),
(168, 'add_services', 'services', '2017-11-28 09:38:57', '2017-11-28 09:38:57', NULL),
(169, 'delete_services', 'services', '2017-11-28 09:38:57', '2017-11-28 09:38:57', NULL),
(170, 'browse_companies', 'companies', '2017-11-28 09:44:59', '2017-11-28 09:44:59', NULL),
(171, 'read_companies', 'companies', '2017-11-28 09:44:59', '2017-11-28 09:44:59', NULL),
(172, 'edit_companies', 'companies', '2017-11-28 09:44:59', '2017-11-28 09:44:59', NULL),
(173, 'add_companies', 'companies', '2017-11-28 09:44:59', '2017-11-28 09:44:59', NULL),
(174, 'delete_companies', 'companies', '2017-11-28 09:44:59', '2017-11-28 09:44:59', NULL),
(185, 'browse_messages', 'messages', '2017-12-05 08:36:14', '2017-12-05 08:36:14', NULL),
(186, 'read_messages', 'messages', '2017-12-05 08:36:14', '2017-12-05 08:36:14', NULL),
(187, 'edit_messages', 'messages', '2017-12-05 08:36:14', '2017-12-05 08:36:14', NULL),
(188, 'add_messages', 'messages', '2017-12-05 08:36:14', '2017-12-05 08:36:14', NULL),
(189, 'delete_messages', 'messages', '2017-12-05 08:36:14', '2017-12-05 08:36:14', NULL),
(190, 'browse_new_launches', 'new_launches', '2017-12-05 09:12:56', '2017-12-05 09:12:56', NULL),
(191, 'read_new_launches', 'new_launches', '2017-12-05 09:12:56', '2017-12-05 09:12:56', NULL),
(192, 'edit_new_launches', 'new_launches', '2017-12-05 09:12:56', '2017-12-05 09:12:56', NULL),
(193, 'add_new_launches', 'new_launches', '2017-12-05 09:12:56', '2017-12-05 09:12:56', NULL),
(194, 'delete_new_launches', 'new_launches', '2017-12-05 09:12:56', '2017-12-05 09:12:56', NULL),
(195, 'browse_remove_reasons', 'remove_reasons', '2017-12-05 09:19:11', '2017-12-05 09:19:11', NULL),
(196, 'read_remove_reasons', 'remove_reasons', '2017-12-05 09:19:11', '2017-12-05 09:19:11', NULL),
(197, 'edit_remove_reasons', 'remove_reasons', '2017-12-05 09:19:11', '2017-12-05 09:19:11', NULL),
(198, 'add_remove_reasons', 'remove_reasons', '2017-12-05 09:19:11', '2017-12-05 09:19:11', NULL),
(199, 'delete_remove_reasons', 'remove_reasons', '2017-12-05 09:19:11', '2017-12-05 09:19:11', NULL),
(200, 'browse_property_options', 'property_options', '2017-12-06 07:43:28', '2017-12-06 07:43:28', NULL),
(201, 'read_property_options', 'property_options', '2017-12-06 07:43:28', '2017-12-06 07:43:28', NULL),
(202, 'edit_property_options', 'property_options', '2017-12-06 07:43:28', '2017-12-06 07:43:28', NULL),
(203, 'add_property_options', 'property_options', '2017-12-06 07:43:28', '2017-12-06 07:43:28', NULL),
(204, 'delete_property_options', 'property_options', '2017-12-06 07:43:28', '2017-12-06 07:43:28', NULL),
(205, 'browse_user_types', 'user_types', '2017-12-06 10:52:50', '2017-12-06 10:52:50', NULL),
(206, 'read_user_types', 'user_types', '2017-12-06 10:52:50', '2017-12-06 10:52:50', NULL),
(207, 'edit_user_types', 'user_types', '2017-12-06 10:52:50', '2017-12-06 10:52:50', NULL),
(208, 'add_user_types', 'user_types', '2017-12-06 10:52:50', '2017-12-06 10:52:50', NULL),
(209, 'delete_user_types', 'user_types', '2017-12-06 10:52:50', '2017-12-06 10:52:50', NULL),
(210, 'browse_front_slugs', 'front_slugs', '2017-12-06 10:56:10', '2017-12-06 10:56:10', NULL),
(211, 'read_front_slugs', 'front_slugs', '2017-12-06 10:56:10', '2017-12-06 10:56:10', NULL),
(212, 'edit_front_slugs', 'front_slugs', '2017-12-06 10:56:10', '2017-12-06 10:56:10', NULL),
(213, 'add_front_slugs', 'front_slugs', '2017-12-06 10:56:10', '2017-12-06 10:56:10', NULL),
(214, 'delete_front_slugs', 'front_slugs', '2017-12-06 10:56:10', '2017-12-06 10:56:10', NULL),
(215, 'browse_front_roles', 'front_roles', '2017-12-06 11:18:36', '2017-12-06 11:18:36', NULL),
(216, 'read_front_roles', 'front_roles', '2017-12-06 11:18:36', '2017-12-06 11:18:36', NULL),
(217, 'edit_front_roles', 'front_roles', '2017-12-06 11:18:36', '2017-12-06 11:18:36', NULL),
(218, 'add_front_roles', 'front_roles', '2017-12-06 11:18:36', '2017-12-06 11:18:36', NULL),
(219, 'delete_front_roles', 'front_roles', '2017-12-06 11:18:36', '2017-12-06 11:18:36', NULL),
(220, 'browse_dimensions', 'dimensions', '2017-12-06 12:17:06', '2017-12-06 12:17:06', NULL),
(221, 'read_dimensions', 'dimensions', '2017-12-06 12:17:06', '2017-12-06 12:17:06', NULL),
(222, 'edit_dimensions', 'dimensions', '2017-12-06 12:17:06', '2017-12-06 12:17:06', NULL),
(223, 'add_dimensions', 'dimensions', '2017-12-06 12:17:06', '2017-12-06 12:17:06', NULL),
(224, 'delete_dimensions', 'dimensions', '2017-12-06 12:17:06', '2017-12-06 12:17:06', NULL),
(225, 'browse_property_ads', 'property_ads', '2017-12-06 12:26:30', '2017-12-06 12:26:30', NULL),
(226, 'read_property_ads', 'property_ads', '2017-12-06 12:26:30', '2017-12-06 12:26:30', NULL),
(227, 'edit_property_ads', 'property_ads', '2017-12-06 12:26:30', '2017-12-06 12:26:30', NULL),
(228, 'add_property_ads', 'property_ads', '2017-12-06 12:26:30', '2017-12-06 12:26:30', NULL),
(229, 'delete_property_ads', 'property_ads', '2017-12-06 12:26:30', '2017-12-06 12:26:30', NULL),
(230, 'browse_property_images', 'property_images', '2017-12-07 10:41:00', '2017-12-07 10:41:00', NULL),
(231, 'read_property_images', 'property_images', '2017-12-07 10:41:00', '2017-12-07 10:41:00', NULL),
(232, 'edit_property_images', 'property_images', '2017-12-07 10:41:00', '2017-12-07 10:41:00', NULL),
(233, 'add_property_images', 'property_images', '2017-12-07 10:41:00', '2017-12-07 10:41:00', NULL),
(234, 'delete_property_images', 'property_images', '2017-12-07 10:41:00', '2017-12-07 10:41:00', NULL),
(235, 'browse_interior_designers_images', 'interior_designers_images', '2017-12-11 08:43:44', '2017-12-11 08:43:44', NULL),
(236, 'read_interior_designers_images', 'interior_designers_images', '2017-12-11 08:43:44', '2017-12-11 08:43:44', NULL),
(237, 'edit_interior_designers_images', 'interior_designers_images', '2017-12-11 08:43:44', '2017-12-11 08:43:44', NULL),
(238, 'add_interior_designers_images', 'interior_designers_images', '2017-12-11 08:43:44', '2017-12-11 08:43:44', NULL),
(239, 'delete_interior_designers_images', 'interior_designers_images', '2017-12-11 08:43:44', '2017-12-11 08:43:44', NULL),
(240, 'browse_hot_offers_discounts', 'hot_offers_discounts', '2017-12-19 10:06:15', '2017-12-19 10:06:15', NULL),
(241, 'read_hot_offers_discounts', 'hot_offers_discounts', '2017-12-19 10:06:15', '2017-12-19 10:06:15', NULL),
(242, 'edit_hot_offers_discounts', 'hot_offers_discounts', '2017-12-19 10:06:15', '2017-12-19 10:06:15', NULL),
(243, 'add_hot_offers_discounts', 'hot_offers_discounts', '2017-12-19 10:06:15', '2017-12-19 10:06:15', NULL),
(244, 'delete_hot_offers_discounts', 'hot_offers_discounts', '2017-12-19 10:06:15', '2017-12-19 10:06:15', NULL),
(245, 'browse_hot_offers_places', 'hot_offers_places', '2017-12-19 11:24:27', '2017-12-19 11:24:27', NULL),
(246, 'read_hot_offers_places', 'hot_offers_places', '2017-12-19 11:24:27', '2017-12-19 11:24:27', NULL),
(247, 'edit_hot_offers_places', 'hot_offers_places', '2017-12-19 11:24:27', '2017-12-19 11:24:27', NULL),
(248, 'add_hot_offers_places', 'hot_offers_places', '2017-12-19 11:24:27', '2017-12-19 11:24:27', NULL),
(249, 'delete_hot_offers_places', 'hot_offers_places', '2017-12-19 11:24:27', '2017-12-19 11:24:27', NULL),
(250, 'browse_hot_offers', 'hot_offers', '2017-12-19 11:37:28', '2017-12-19 11:37:28', NULL),
(251, 'read_hot_offers', 'hot_offers', '2017-12-19 11:37:28', '2017-12-19 11:37:28', NULL),
(252, 'edit_hot_offers', 'hot_offers', '2017-12-19 11:37:28', '2017-12-19 11:37:28', NULL),
(253, 'add_hot_offers', 'hot_offers', '2017-12-19 11:37:28', '2017-12-19 11:37:28', NULL),
(254, 'delete_hot_offers', 'hot_offers', '2017-12-19 11:37:28', '2017-12-19 11:37:28', NULL),
(255, 'browse_featured_home_sliders', 'featured_home_sliders', '2017-12-19 12:15:15', '2017-12-19 12:15:15', NULL),
(256, 'read_featured_home_sliders', 'featured_home_sliders', '2017-12-19 12:15:15', '2017-12-19 12:15:15', NULL),
(257, 'edit_featured_home_sliders', 'featured_home_sliders', '2017-12-19 12:15:15', '2017-12-19 12:15:15', NULL),
(258, 'add_featured_home_sliders', 'featured_home_sliders', '2017-12-19 12:15:15', '2017-12-19 12:15:15', NULL),
(259, 'delete_featured_home_sliders', 'featured_home_sliders', '2017-12-19 12:15:15', '2017-12-19 12:15:15', NULL),
(260, 'browse_property_option_types', 'property_option_types', '2017-12-19 12:25:47', '2017-12-19 12:25:47', NULL),
(261, 'read_property_option_types', 'property_option_types', '2017-12-19 12:25:47', '2017-12-19 12:25:47', NULL),
(262, 'edit_property_option_types', 'property_option_types', '2017-12-19 12:25:47', '2017-12-19 12:25:47', NULL),
(263, 'add_property_option_types', 'property_option_types', '2017-12-19 12:25:47', '2017-12-19 12:25:47', NULL),
(264, 'delete_property_option_types', 'property_option_types', '2017-12-19 12:25:47', '2017-12-19 12:25:47', NULL),
(265, 'browse_property_option_results', 'property_option_results', '2017-12-19 12:38:36', '2017-12-19 12:38:36', NULL),
(266, 'read_property_option_results', 'property_option_results', '2017-12-19 12:38:36', '2017-12-19 12:38:36', NULL),
(267, 'edit_property_option_results', 'property_option_results', '2017-12-19 12:38:36', '2017-12-19 12:38:36', NULL),
(268, 'add_property_option_results', 'property_option_results', '2017-12-19 12:38:36', '2017-12-19 12:38:36', NULL),
(269, 'delete_property_option_results', 'property_option_results', '2017-12-19 12:38:36', '2017-12-19 12:38:36', NULL),
(270, 'browse_currencies', 'currencies', '2017-12-19 12:58:46', '2017-12-19 12:58:46', NULL),
(271, 'read_currencies', 'currencies', '2017-12-19 12:58:46', '2017-12-19 12:58:46', NULL),
(272, 'edit_currencies', 'currencies', '2017-12-19 12:58:46', '2017-12-19 12:58:46', NULL),
(273, 'add_currencies', 'currencies', '2017-12-19 12:58:46', '2017-12-19 12:58:46', NULL),
(274, 'delete_currencies', 'currencies', '2017-12-19 12:58:46', '2017-12-19 12:58:46', NULL),
(275, 'browse_projects', 'projects', '2017-12-21 12:29:45', '2017-12-21 12:29:45', NULL),
(276, 'read_projects', 'projects', '2017-12-21 12:29:45', '2017-12-21 12:29:45', NULL),
(277, 'edit_projects', 'projects', '2017-12-21 12:29:45', '2017-12-21 12:29:45', NULL),
(278, 'add_projects', 'projects', '2017-12-21 12:29:45', '2017-12-21 12:29:45', NULL),
(279, 'delete_projects', 'projects', '2017-12-21 12:29:45', '2017-12-21 12:29:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(5, 3),
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(9, 3),
(10, 1),
(10, 3),
(11, 1),
(11, 3),
(12, 1),
(12, 3),
(13, 1),
(13, 3),
(14, 1),
(14, 3),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(25, 3),
(26, 1),
(26, 3),
(27, 1),
(27, 3),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1),
(145, 2),
(145, 3),
(146, 1),
(146, 2),
(146, 3),
(147, 1),
(147, 2),
(147, 3),
(148, 1),
(148, 2),
(148, 3),
(149, 1),
(149, 2),
(149, 3),
(150, 1),
(150, 3),
(151, 1),
(151, 3),
(152, 1),
(152, 3),
(153, 1),
(153, 3),
(154, 1),
(154, 3),
(155, 1),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(170, 1),
(171, 1),
(172, 1),
(173, 1),
(174, 1),
(185, 1),
(186, 1),
(187, 1),
(188, 1),
(189, 1),
(190, 1),
(191, 1),
(192, 1),
(193, 1),
(194, 1),
(195, 1),
(196, 1),
(197, 1),
(198, 1),
(199, 1),
(200, 1),
(201, 1),
(202, 1),
(203, 1),
(204, 1),
(205, 1),
(206, 1),
(207, 1),
(208, 1),
(209, 1),
(210, 1),
(211, 1),
(212, 1),
(213, 1),
(214, 1),
(215, 1),
(216, 1),
(217, 1),
(218, 1),
(219, 1),
(220, 1),
(221, 1),
(222, 1),
(223, 1),
(224, 1),
(225, 1),
(226, 1),
(227, 1),
(228, 1),
(229, 1),
(230, 1),
(231, 1),
(232, 1),
(233, 1),
(234, 1),
(235, 1),
(236, 1),
(237, 1),
(238, 1),
(239, 1),
(240, 1),
(241, 1),
(242, 1),
(243, 1),
(244, 1),
(245, 1),
(246, 1),
(247, 1),
(248, 1),
(249, 1),
(250, 1),
(251, 1),
(252, 1),
(253, 1),
(254, 1),
(255, 1),
(256, 1),
(257, 1),
(258, 1),
(259, 1),
(260, 1),
(261, 1),
(262, 1),
(263, 1),
(264, 1),
(265, 1),
(266, 1),
(267, 1),
(268, 1),
(269, 1),
(270, 1),
(270, 9),
(271, 1),
(271, 9),
(272, 1),
(272, 9),
(273, 1),
(273, 9),
(274, 1),
(274, 9),
(275, 1),
(276, 1),
(277, 1),
(278, 1),
(279, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8_unicode_ci,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `meta_keywords` text COLLATE utf8_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'post 1', 'seo seo', 'excerpt 125', '<p>post description</p>', 'posts/November2017/V6KYy1q75OFXQqcB3aXn.jpg', 'post-1', 'meta desc', 'meta keywords', 'DRAFT', 1, '2017-11-26 07:37:46', '2017-11-26 07:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `featured` int(11) DEFAULT NULL,
  `brochure` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `is_new_launch` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `featured`, `brochure`, `created_at`, `updated_at`, `user_id`, `is_new_launch`) VALUES
(1, 'Porto - Homepage Slider 5', 1, 'new-launches/December2017/8aeAF1wXO84kNSvUqzfi.png', '2017-12-05 09:21:39', '2017-12-05 09:21:39', 1, NULL),
(2, 'ahned', 1, 'new-launches/December2017/IxvmicwdfBWnoYLwdb3Q.jpg', '2017-12-17 15:43:50', '2017-12-17 15:43:50', 3, NULL),
(3, 'ahmed3', 1, 'new-launches/December2017/dKarek6E4ZtyG6sppsGx.png', '2017-12-21 07:56:20', '2017-12-21 07:58:35', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `property_type_id` int(10) UNSIGNED NOT NULL,
  `property_form_id` int(10) UNSIGNED NOT NULL,
  `purpose_posting_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED DEFAULT NULL,
  `degree_ownership_id` int(10) UNSIGNED NOT NULL,
  `property_status_id` int(10) UNSIGNED NOT NULL,
  `developer_id` int(10) UNSIGNED NOT NULL,
  `public` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `longtitude` double DEFAULT NULL,
  `latitiude` double DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `is_prime` tinyint(4) DEFAULT NULL,
  `is_approved` tinyint(4) DEFAULT NULL,
  `user_id` int(5) DEFAULT NULL,
  `additional_comments` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `price`, `property_type_id`, `property_form_id`, `purpose_posting_id`, `district_id`, `degree_ownership_id`, `property_status_id`, `developer_id`, `public`, `created_at`, `updated_at`, `longtitude`, `latitiude`, `address`, `is_prime`, `is_approved`, `user_id`, `additional_comments`) VALUES
(10, 'apartment in down town', 5000000, 1, 4, 4, NULL, 1, 5, 5, 0, '2017-12-27 07:07:29', '2017-12-27 14:39:45', 30.035937082882487, 31.4075292480469, 'Taha Hussein, Cairo Governorate, Egypt', NULL, 1, 0, 'commentssssssssssssssssssssssssssss'),
(11, 'villa in rehab', 8000000, 1, 4, 4, NULL, 1, 5, 5, 1, '2017-12-28 10:25:00', '2017-12-28 10:26:19', 28.164160869884796, 30.78817099999992, 'Unnamed Road, Tahna Al Gabal, Minya, Egypt', NULL, 1, NULL, 'comments two'),
(12, 'villa in katmeya heights ', 500000, 1, 4, 4, NULL, 1, 5, 5, 1, '2017-12-29 10:41:10', '2017-12-29 10:42:28', 31.304532421875024, 29.993128379179083, '28, Al Abageyah, Qism El-Khalifa, Cairo Governorate, Egypt', NULL, 1, NULL, 'comments samy'),
(13, 'shared villa in 6 october', 1500000, 1, 4, 4, NULL, 1, 5, 5, 1, '2017-12-29 10:52:24', '2017-12-29 10:55:27', 31.370450390625024, 29.91221711606199, 'Wadi Hof Trail, Qesm Torah, Cairo Governorate, Egypt', NULL, 1, NULL, 'comments samy');

-- --------------------------------------------------------

--
-- Table structure for table `property_ads`
--

CREATE TABLE `property_ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dimension_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `property_id` int(11) NOT NULL,
  `is_verified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property_ads`
--

INSERT INTO `property_ads` (`id`, `image`, `dimension_id`, `created_at`, `updated_at`, `property_id`, `is_verified`) VALUES
(1, 'property-ads/December2017/wfgwT0uofOkOnASYTD1V.png', 1, '2017-12-06 12:29:00', '2017-12-07 12:07:14', 1, NULL),
(2, 'property-ads/December2017/sPU3TIXFCwDaXmBcegSR.jpg', 1, '2017-12-07 12:21:05', '2017-12-17 16:13:26', 1, 0),
(3, NULL, 1, '2017-12-17 16:13:13', '2017-12-17 16:13:13', 1, 0),
(4, NULL, 7, '2017-12-21 07:27:51', '2017-12-21 07:27:51', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `property_forms`
--

CREATE TABLE `property_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property_forms`
--

INSERT INTO `property_forms` (`id`, `text`, `created_at`, `updated_at`) VALUES
(4, 'vcxvcx', '2017-12-17 14:25:28', '2017-12-17 14:25:28'),
(5, 'ahmed', '2017-12-17 16:49:04', '2017-12-17 16:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_cover` tinyint(4) DEFAULT NULL,
  `is_best` int(11) DEFAULT NULL,
  `property_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`id`, `image`, `created_at`, `updated_at`, `is_cover`, `is_best`, `property_id`) VALUES
(1, '587c0b1e5ef2788b469cce75a8d16dfb.png', '2017-12-27 14:39:46', '2017-12-28 07:58:44', 1, 0, 10),
(2, 'ea24c2fde23bd0115e6657464e343767.jpeg', '2017-12-27 14:39:46', '2017-12-27 14:39:46', 0, 0, 10),
(3, 'e1573e230eb2bf440aee55b8b9a145de.jpeg', '2017-12-27 14:39:46', '2017-12-27 14:39:46', 0, 0, 10),
(4, 'c908d6d0020d0879cce7e59ab9cf8ede.jpeg', '2017-12-27 14:39:46', '2017-12-27 14:39:46', 0, 0, 10),
(5, 'd4ca70f2b3ad5f751b3c21b43f4fdf6c.jpeg', '2017-12-27 14:39:46', '2017-12-27 14:39:46', 0, 0, 10),
(6, 'b7c97ca3d85a2d0a11ee392c23712a89.jpeg', '2017-12-27 14:39:46', '2017-12-27 14:39:46', 0, 1, 10),
(7, '5a5712d498761e68eb38c0e7bcc9b805.jpeg', '2017-12-27 14:39:46', '2017-12-27 14:39:46', 0, 1, 10),
(8, '87772a529d53f7cd22129bf5036c8d09.jpeg', '2017-12-27 14:39:46', '2017-12-27 14:39:46', 0, 1, 10),
(21, '2eae7354e02a4de4a3799700cf5442b3.png', '2017-12-28 10:26:19', '2017-12-28 10:26:19', 1, NULL, 11),
(22, 'e882c0aaf895f86e2910d1606d6aab89.jpeg', '2017-12-28 10:26:19', '2017-12-28 10:26:19', 0, NULL, 11),
(23, '5df137cc9ae6a9b7a3f4c457c6c172c0.jpeg', '2017-12-28 10:26:19', '2017-12-28 10:26:19', 0, NULL, 11),
(24, '52e395c48892eed66ebc595000a64527.jpeg', '2017-12-28 10:26:19', '2017-12-28 10:26:19', 0, NULL, 11),
(25, '43a79095e63b16bd134abf030b5a9e70.jpeg', '2017-12-28 10:26:19', '2017-12-28 10:26:19', 0, NULL, 11),
(26, 'fe1e17c73c89341af02037e7caf9fd8b.jpeg', '2017-12-28 10:26:19', '2017-12-28 10:26:19', 0, NULL, 11),
(27, '5be134d842c75b82ea195949684c66a0.jpeg', '2017-12-28 10:26:19', '2017-12-28 10:26:19', 0, NULL, 11),
(28, '28d2699aec7caf43b9f5224ce966b56a.jpeg', '2017-12-28 10:26:19', '2017-12-28 10:26:19', 0, NULL, 11),
(29, '97673ed78738f8d6bc721293af2184c0.png', '2017-12-29 10:42:28', '2017-12-29 10:42:28', 1, NULL, 12),
(30, '584e521271e1008e0d657240e750155f.jpeg', '2017-12-29 10:42:28', '2017-12-29 10:42:28', 0, NULL, 12),
(31, '11f8cb6c477b20db86759fe65e7350a6.jpeg', '2017-12-29 10:42:28', '2017-12-29 10:42:28', 0, NULL, 12),
(32, 'edc165c23b4a59a880c8bb6139c21092.jpeg', '2017-12-29 10:42:28', '2017-12-29 10:42:28', 0, NULL, 12),
(33, '6f79e744aa92aafde8f631fa0728b379.jpeg', '2017-12-29 10:42:28', '2017-12-29 10:42:28', 0, NULL, 12),
(34, 'f255842d1e7594dff2268855b9d85d24.jpeg', '2017-12-29 10:42:28', '2017-12-29 10:42:28', 0, NULL, 12),
(35, 'd85285d464653255f084244bda2e47eb.jpeg', '2017-12-29 10:42:28', '2017-12-29 10:42:28', 0, NULL, 12),
(36, '1218003f8107ebf18011b742e7234d85.jpeg', '2017-12-29 10:42:28', '2017-12-29 10:42:28', 0, NULL, 12),
(37, '034921618156b5b02019f1f0c4604d68.png', '2017-12-29 10:55:27', '2017-12-29 10:55:27', 1, NULL, 13),
(38, 'd82738074857db2a788873e956cc0f29.jpeg', '2017-12-29 10:55:27', '2017-12-29 10:55:27', 0, NULL, 13),
(39, '0ebe7480f8d7530997ce9301cfeb8c15.jpeg', '2017-12-29 10:55:27', '2017-12-29 10:55:27', 0, NULL, 13),
(40, '2589b7db3799efc706ce451d00959c3e.jpeg', '2017-12-29 10:55:27', '2017-12-29 10:55:27', 0, NULL, 13),
(41, '89161418106d20103eabe23128b00d63.jpeg', '2017-12-29 10:55:27', '2017-12-29 10:55:27', 0, NULL, 13),
(42, 'a2f06d8ad34bec415d3f66953a4bdb4c.jpeg', '2017-12-29 10:55:27', '2017-12-29 10:55:27', 0, NULL, 13),
(43, 'f55a136fc03968e948aebe6295480f1e.jpeg', '2017-12-29 10:55:27', '2017-12-29 10:55:27', 0, NULL, 13),
(44, '80ef57c1a5c328d206e96ec81202c86d.jpeg', '2017-12-29 10:55:27', '2017-12-29 10:55:27', 0, NULL, 13);

-- --------------------------------------------------------

--
-- Table structure for table `property_options`
--

CREATE TABLE `property_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT NULL,
  `property_option_type_id` int(10) UNSIGNED DEFAULT NULL,
  `is_required` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property_options`
--

INSERT INTO `property_options` (`id`, `text`, `created_at`, `updated_at`, `icon`, `is_featured`, `property_option_type_id`, `is_required`) VALUES
(1, 'master', '2017-12-07 09:23:47', '2017-12-07 09:23:47', 'icon-pathroom', NULL, 5, 0),
(2, 'Number of Full bathroom\n', '2017-12-17 15:47:22', '2017-12-17 15:47:22', 'icon-pathroom', NULL, 5, 0),
(3, 'Half Bathrooms', '2017-12-17 15:49:18', '2017-12-17 15:49:18', 'icon-pathroom', NULL, 5, 0),
(4, 'Bedrooms', '2017-12-21 07:55:05', '2017-12-21 07:55:05', 'icon-pathroom', 1, 5, 0),
(5, 'land area (m2)', NULL, NULL, 'icon-pathroom', 1, 1, 0),
(6, 'build up area (m2)', NULL, NULL, 'icon-small-home', 1, 1, 0),
(7, 'finishing condition', NULL, NULL, 'icon-shell', NULL, 2, 1),
(8, 'outdoor parking', NULL, NULL, 'icon-search', NULL, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `property_option_results`
--

CREATE TABLE `property_option_results` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `property_option_id` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property_option_results`
--

INSERT INTO `property_option_results` (`id`, `text`, `property_option_id`, `created_at`, `updated_at`) VALUES
(1, 'oio', 8, '2017-12-20 10:40:50', '2017-12-20 10:40:50'),
(2, 'iiiii', 8, '2017-12-21 07:15:18', '2017-12-21 07:15:18'),
(3, 'finishing condition option 1', 7, NULL, NULL),
(4, 'finishing condition option 2', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_option_types`
--

CREATE TABLE `property_option_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property_option_types`
--

INSERT INTO `property_option_types` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'text', '2017-12-20 09:46:39', '2017-12-20 09:46:39'),
(2, 'select', '2017-12-20 09:47:12', '2017-12-20 09:47:12'),
(3, 'checkbox', '2017-12-20 09:47:28', '2017-12-20 09:47:28'),
(4, 'radio', '2017-12-20 09:56:54', '2017-12-20 09:56:54'),
(5, 'number', '2017-12-20 10:04:16', '2017-12-20 10:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `property_option_users`
--

CREATE TABLE `property_option_users` (
  `id` int(11) NOT NULL,
  `property_id` int(11) UNSIGNED NOT NULL,
  `property_option_id` int(11) UNSIGNED NOT NULL,
  `property_option_result_id` int(11) UNSIGNED DEFAULT NULL,
  `value` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property_option_users`
--

INSERT INTO `property_option_users` (`id`, `property_id`, `property_option_id`, `property_option_result_id`, `value`, `created_at`, `updated_at`) VALUES
(1, 10, 1, NULL, '6', '2017-12-27 12:18:30', '2017-12-27 12:18:30'),
(2, 10, 2, NULL, '7', '2017-12-27 12:18:30', '2017-12-27 12:18:30'),
(3, 10, 3, NULL, '8', '2017-12-27 12:18:30', '2017-12-27 12:18:30'),
(4, 10, 4, NULL, '9', '2017-12-27 12:18:30', '2017-12-27 12:18:30'),
(5, 10, 5, NULL, '10', '2017-12-27 12:18:30', '2017-12-27 12:18:30'),
(6, 10, 6, NULL, '11', '2017-12-27 12:18:30', '2017-12-27 12:18:30'),
(7, 10, 7, NULL, 'finishing condition option 1', '2017-12-27 12:18:30', '2017-12-27 12:18:30'),
(8, 10, 8, NULL, 'iiiii', '2017-12-27 12:18:30', '2017-12-27 12:18:30'),
(9, 11, 1, NULL, '5', '2017-12-28 10:25:26', '2017-12-28 10:25:26'),
(10, 11, 2, NULL, '6', '2017-12-28 10:25:26', '2017-12-28 10:25:26'),
(11, 11, 3, NULL, '7', '2017-12-28 10:25:26', '2017-12-28 10:25:26'),
(12, 11, 4, NULL, '8', '2017-12-28 10:25:26', '2017-12-28 10:25:26'),
(13, 11, 5, NULL, '250', '2017-12-28 10:25:26', '2017-12-28 10:25:26'),
(14, 11, 6, NULL, '150', '2017-12-28 10:25:26', '2017-12-28 10:25:26'),
(15, 11, 7, NULL, 'finishing condition option 1', '2017-12-28 10:25:26', '2017-12-28 10:25:26'),
(16, 11, 8, NULL, 'oio', '2017-12-28 10:25:26', '2017-12-28 10:25:26'),
(17, 12, 1, NULL, '5', '2017-12-29 10:41:32', '2017-12-29 10:41:32'),
(18, 12, 2, NULL, '6', '2017-12-29 10:41:32', '2017-12-29 10:41:32'),
(19, 12, 3, NULL, '7', '2017-12-29 10:41:32', '2017-12-29 10:41:32'),
(20, 12, 4, NULL, '8', '2017-12-29 10:41:32', '2017-12-29 10:41:32'),
(21, 12, 5, NULL, '520', '2017-12-29 10:41:32', '2017-12-29 10:41:32'),
(22, 12, 6, NULL, '420', '2017-12-29 10:41:32', '2017-12-29 10:41:32'),
(23, 12, 7, NULL, 'finishing condition option 1', '2017-12-29 10:41:32', '2017-12-29 10:41:32'),
(24, 12, 8, NULL, 'oio', '2017-12-29 10:41:32', '2017-12-29 10:41:32'),
(25, 13, 1, NULL, '5', '2017-12-29 10:52:50', '2017-12-29 10:52:50'),
(26, 13, 2, NULL, '6', '2017-12-29 10:52:50', '2017-12-29 10:52:50'),
(27, 13, 3, NULL, '7', '2017-12-29 10:52:50', '2017-12-29 10:52:50'),
(28, 13, 4, NULL, '8', '2017-12-29 10:52:50', '2017-12-29 10:52:50'),
(29, 13, 5, NULL, '150', '2017-12-29 10:52:50', '2017-12-29 10:52:50'),
(30, 13, 6, NULL, '120', '2017-12-29 10:52:50', '2017-12-29 10:52:50'),
(31, 13, 7, NULL, 'finishing condition option 1', '2017-12-29 10:52:50', '2017-12-29 10:52:50'),
(32, 13, 8, NULL, 'oio', '2017-12-29 10:52:51', '2017-12-29 10:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `property_statuses`
--

CREATE TABLE `property_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property_statuses`
--

INSERT INTO `property_statuses` (`id`, `text`, `created_at`, `updated_at`) VALUES
(5, 'construction', '2017-12-17 16:47:13', '2017-12-29 13:18:30'),
(6, 'under construction', '2017-12-29 13:18:40', '2017-12-29 13:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'roof top', '2017-11-23 11:33:16', '2017-12-29 13:18:07'),
(2, 'apartment', '2017-12-17 14:24:42', '2017-12-29 13:17:32'),
(3, 'villa', '2017-12-17 16:47:39', '2017-12-29 13:17:22');

-- --------------------------------------------------------

--
-- Table structure for table `purpose_postings`
--

CREATE TABLE `purpose_postings` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `purpose_postings`
--

INSERT INTO `purpose_postings` (`id`, `text`, `created_at`, `updated_at`) VALUES
(4, 'sale', '2017-11-23 07:37:16', '2017-12-29 13:16:12'),
(5, 'rent', '2017-12-29 13:16:17', '2017-12-29 13:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `remove_reasons`
--

CREATE TABLE `remove_reasons` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `remove_reasons`
--

INSERT INTO `remove_reasons` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'sadd2258', '2017-12-05 09:19:31', '2017-12-14 06:56:43'),
(2, 'ahmed', '2017-12-17 15:44:36', '2017-12-17 15:44:36'),
(3, 'ahmed', '2017-12-21 07:55:31', '2017-12-21 07:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2017-11-13 13:52:35', '2017-11-13 13:52:35'),
(2, 'user', 'Normal User', '2017-11-13 13:52:35', '2017-11-13 13:52:35'),
(3, 'Developer', 'developer', '2017-11-14 09:09:43', '2017-11-14 09:09:43'),
(9, 'fat', 'iii', '2017-12-21 09:20:26', '2017-12-21 09:20:26'),
(10, 'kokokop', 'kokok', '2017-12-21 09:20:39', '2017-12-21 09:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `created_at`, `updated_at`, `image`) VALUES
(4, 'Porto - Homepage Slider 5', 'dasdasdsa', '2017-12-17 14:53:04', '2017-12-17 14:53:04', 'services/December2017/i3Uz2BqIq9K7Urxd13tA.png'),
(5, 'ahmed', 'uuuiiuiuuuuuu', '2017-12-21 08:06:02', '2017-12-21 08:06:02', 'services/December2017/Z1cDCLmcyl7qmffKinYP.png');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Sell By Rent', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Sell By Rent is  app that enables customers to deal with sell and rent properties', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings/November2017/qoANDattphlqTgd9AhHm.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Sell By Rent', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Sell By Rent is  app that enables customers to deal with sell and rent properties', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings/November2017/kwwRMIbf3g1IMrmlQUMo.png', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings/November2017/h5L09FZaw26bMCMmaFTO.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `store_categories`
--

CREATE TABLE `store_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `store_categories`
--

INSERT INTO `store_categories` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'store 125', '2017-12-04 06:52:16', '2017-12-04 06:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 1, 'pt', 'Post', '2017-11-13 13:53:24', '2017-11-13 13:53:24'),
(2, 'data_types', 'display_name_singular', 2, 'pt', 'Página', '2017-11-13 13:53:24', '2017-11-13 13:53:24'),
(3, 'data_types', 'display_name_singular', 3, 'pt', 'Utilizador', '2017-11-13 13:53:24', '2017-11-13 13:53:24'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2017-11-13 13:53:24', '2017-11-13 13:53:24'),
(5, 'data_types', 'display_name_singular', 5, 'pt', 'Menu', '2017-11-13 13:53:24', '2017-11-13 13:53:24'),
(6, 'data_types', 'display_name_singular', 6, 'pt', 'Função', '2017-11-13 13:53:24', '2017-11-13 13:53:24'),
(7, 'data_types', 'display_name_plural', 1, 'pt', 'Posts', '2017-11-13 13:53:24', '2017-11-13 13:53:24'),
(8, 'data_types', 'display_name_plural', 2, 'pt', 'Páginas', '2017-11-13 13:53:25', '2017-11-13 13:53:25'),
(9, 'data_types', 'display_name_plural', 3, 'pt', 'Utilizadores', '2017-11-13 13:53:25', '2017-11-13 13:53:25'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2017-11-13 13:53:25', '2017-11-13 13:53:25'),
(11, 'data_types', 'display_name_plural', 5, 'pt', 'Menus', '2017-11-13 13:53:25', '2017-11-13 13:53:25'),
(12, 'data_types', 'display_name_plural', 6, 'pt', 'Funções', '2017-11-13 13:53:25', '2017-11-13 13:53:25'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2017-11-13 13:53:25', '2017-11-13 13:53:25'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2017-11-13 13:53:25', '2017-11-13 13:53:25'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2017-11-13 13:53:25', '2017-11-13 13:53:25'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2017-11-13 13:53:25', '2017-11-13 13:53:25'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2017-11-13 13:53:25', '2017-11-13 13:53:25'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2017-11-13 13:53:25', '2017-11-13 13:53:25'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2017-11-13 13:53:25', '2017-11-13 13:53:25'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2017-11-13 13:53:25', '2017-11-13 13:53:25'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2017-11-13 13:53:25', '2017-11-13 13:53:25'),
(22, 'menu_items', 'title', 3, 'pt', 'Publicações', '2017-11-13 13:53:26', '2017-11-13 13:53:26'),
(23, 'menu_items', 'title', 4, 'pt', 'Utilizadores', '2017-11-13 13:53:26', '2017-11-13 13:53:26'),
(24, 'menu_items', 'title', 5, 'pt', 'Categorias', '2017-11-13 13:53:26', '2017-11-13 13:53:26'),
(25, 'menu_items', 'title', 6, 'pt', 'Páginas', '2017-11-13 13:53:26', '2017-11-13 13:53:26'),
(26, 'menu_items', 'title', 7, 'pt', 'Funções', '2017-11-13 13:53:26', '2017-11-13 13:53:26'),
(27, 'menu_items', 'title', 8, 'pt', 'Ferramentas', '2017-11-13 13:53:26', '2017-11-13 13:53:26'),
(28, 'menu_items', 'title', 9, 'pt', 'Menus', '2017-11-13 13:53:26', '2017-11-13 13:53:26'),
(29, 'menu_items', 'title', 10, 'pt', 'Base de dados', '2017-11-13 13:53:26', '2017-11-13 13:53:26'),
(30, 'menu_items', 'title', 13, 'pt', 'Configurações', '2017-11-13 13:53:26', '2017-11-13 13:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_user` tinyint(4) NOT NULL DEFAULT '1',
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_verified` int(11) DEFAULT NULL,
  `is_featured` int(11) DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `is_social` tinyint(4) DEFAULT NULL,
  `social_type` int(11) DEFAULT NULL,
  `property_limit_user` int(11) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_user`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`, `is_verified`, `is_featured`, `user_type_id`, `is_social`, `social_type`, `property_limit_user`, `phone`, `city_id`, `district_id`) VALUES
(1, 0, 1, 'Admin', 'admin@admin.com', 'users/November2017/Q9ckSRq5he8a2XzSTyVP.jpg', '$2y$10$JbPkxmVmBPKMbug19YxlAOrCXms85DgKwMIu9dPuurl.H2DGXAhqW', 'PR39omoNNiwzlLsLpAozySQVM6mT4Zpuz5tgkXwpTMfY7elHvhyMtzMUJZgG', '2017-11-13 13:53:23', '2017-11-26 07:32:11', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(2, 1, 3, 'Developer One', 'developer_one@developer.com', 'users/November2017/YUPEm432jBq9U3UFa8HD.png', '$2y$10$ut1nGLJ/3d3CicQ3nQLPl.98XCg2jQ7oGBJNBeqeCRgolMw3TIqL2', 'ngfYNtGEXe5CZAc5IK9z0CfrAtaFAPpYQAWP8ld4hTPrbhXx4xurfIQoTY28', '2017-11-14 09:10:22', '2017-11-27 09:04:07', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(3, 1, 1, 'dddd', 'admi@admin.com', 'users/November2017/Sdt6qBVDgPHmkKr0Vpx5.jpg', '$2y$10$AzTmJ8BRh/3XL4rAjOJ0Z.PqYVpo75OBci/6vMsUWRQXf5lU9Q41S', NULL, '2017-11-23 13:49:48', '2017-11-23 15:01:30', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(4, 1, 2, 'samyemad', 'samyemad4@gmail.com', 'users/December2017/b7zfhDR7dFv7mZLkvEX3.png', '$2y$10$8adOP1o3ozCnKx8BFzG0A.ABWqTnwyCWx9kvOgbZNdICZNkm5Pon6', NULL, '2017-12-06 12:19:15', '2017-12-06 12:19:15', 1, 1, 1, NULL, NULL, NULL, 0, 0, 0),
(6, 1, 1, 'fat', 'admin22@admin.com', 'users/default.png', '$2y$10$ZI9Yc8Z9ocq.fA7uWJkWGOT8E47hO2Pvp9MYU7svFStqNXTtwjEKq', NULL, '2017-12-20 06:46:08', '2017-12-20 06:46:08', 0, 0, 1, NULL, NULL, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_favourite_properties`
--

CREATE TABLE `user_favourite_properties` (
  `user_id` int(5) NOT NULL,
  `property_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_follows`
--

CREATE TABLE `user_follows` (
  `user_id` int(5) NOT NULL,
  `follow_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `limit_property` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `title`, `created_at`, `updated_at`, `limit_property`) VALUES
(1, 'developer', '2017-12-06 12:03:24', '2017-12-06 12:03:24', 3),
(2, 'normal user', '2017-12-06 12:03:39', '2017-12-06 12:03:39', 5),
(3, 'broker', '2017-12-18 09:20:12', '2017-12-18 09:20:12', -37),
(4, 'interior designer', '2017-12-18 09:21:54', '2017-12-18 09:21:54', 88),
(5, '888', '2017-12-18 09:21:54', '2017-12-18 09:21:54', 88),
(6, '777', '2017-12-19 04:53:35', '2017-12-19 04:53:35', 77),
(7, 'ttt', '2017-12-19 04:54:44', '2017-12-19 04:54:44', 66),
(8, '88', '2017-12-19 04:56:08', '2017-12-19 04:56:08', 88),
(9, 'ooo', '2017-12-19 05:55:52', '2017-12-19 05:55:52', -2),
(10, 'ii', '2017-12-19 05:57:23', '2017-12-19 05:57:23', 1),
(11, 'ahmed', '2017-12-20 08:30:23', '2017-12-20 08:30:23', 9),
(12, '8', '2017-12-20 08:30:50', '2017-12-20 08:30:50', 99),
(13, 'oooo', '2017-12-20 08:40:32', '2017-12-20 08:40:32', NULL),
(14, 'ahmed', '2017-12-20 08:41:24', '2017-12-20 08:41:24', NULL),
(15, 'ooo', '2017-12-20 08:45:49', '2017-12-20 08:45:49', 9),
(16, 'uuuu', '2017-12-20 10:29:21', '2017-12-20 10:29:21', 8),
(17, 'title one', '2017-12-21 05:37:21', '2017-12-21 05:37:21', 99),
(18, 'fathitarek', '2017-12-21 05:39:40', '2017-12-21 05:39:40', 44),
(19, 'ahmed', '2017-12-21 08:06:45', '2017-12-21 08:06:45', 877788),
(20, 'ahmed', '2017-12-21 08:07:04', '2017-12-21 08:07:04', 878);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Brands`
--
ALTER TABLE `Brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `degree_ownerships`
--
ALTER TABLE `degree_ownerships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dimensions`
--
ALTER TABLE `dimensions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expected_deliveries`
--
ALTER TABLE `expected_deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_home_sliders`
--
ALTER TABLE `featured_home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_roles`
--
ALTER TABLE `front_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_slugs`
--
ALTER TABLE `front_slugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hot_offers`
--
ALTER TABLE `hot_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hot_offers_discounts`
--
ALTER TABLE `hot_offers_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hot_offers_places`
--
ALTER TABLE `hot_offers_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interior_designers`
--
ALTER TABLE `interior_designers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interior_designers_images`
--
ALTER TABLE `interior_designers_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission_groups_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_ads`
--
ALTER TABLE `property_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_forms`
--
ALTER TABLE `property_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_options`
--
ALTER TABLE `property_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_option_results`
--
ALTER TABLE `property_option_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_option_id` (`property_option_id`);

--
-- Indexes for table `property_option_types`
--
ALTER TABLE `property_option_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_option_users`
--
ALTER TABLE `property_option_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`),
  ADD KEY `property_option_id` (`property_option_id`),
  ADD KEY `property_option_result_id` (`property_option_result_id`);

--
-- Indexes for table `property_statuses`
--
ALTER TABLE `property_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purpose_postings`
--
ALTER TABLE `purpose_postings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remove_reasons`
--
ALTER TABLE `remove_reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `store_categories`
--
ALTER TABLE `store_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_favourite_properties`
--
ALTER TABLE `user_favourite_properties`
  ADD PRIMARY KEY (`user_id`,`property_id`);

--
-- Indexes for table `user_follows`
--
ALTER TABLE `user_follows`
  ADD PRIMARY KEY (`user_id`,`follow_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Brands`
--
ALTER TABLE `Brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=371;
--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `degree_ownerships`
--
ALTER TABLE `degree_ownerships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dimensions`
--
ALTER TABLE `dimensions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `expected_deliveries`
--
ALTER TABLE `expected_deliveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `featured_home_sliders`
--
ALTER TABLE `featured_home_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `front_roles`
--
ALTER TABLE `front_roles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `front_slugs`
--
ALTER TABLE `front_slugs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hot_offers`
--
ALTER TABLE `hot_offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hot_offers_discounts`
--
ALTER TABLE `hot_offers_discounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hot_offers_places`
--
ALTER TABLE `hot_offers_places`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `interior_designers`
--
ALTER TABLE `interior_designers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `interior_designers_images`
--
ALTER TABLE `interior_designers_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;
--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `property_ads`
--
ALTER TABLE `property_ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `property_forms`
--
ALTER TABLE `property_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `property_options`
--
ALTER TABLE `property_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `property_option_results`
--
ALTER TABLE `property_option_results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `property_option_types`
--
ALTER TABLE `property_option_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `property_option_users`
--
ALTER TABLE `property_option_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `property_statuses`
--
ALTER TABLE `property_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `purpose_postings`
--
ALTER TABLE `purpose_postings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `remove_reasons`
--
ALTER TABLE `remove_reasons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `store_categories`
--
ALTER TABLE `store_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_option_results`
--
ALTER TABLE `property_option_results`
  ADD CONSTRAINT `property_option_results_ibfk_1` FOREIGN KEY (`property_option_id`) REFERENCES `property_options` (`id`);

--
-- Constraints for table `property_option_users`
--
ALTER TABLE `property_option_users`
  ADD CONSTRAINT `property_option_users_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`),
  ADD CONSTRAINT `property_option_users_ibfk_2` FOREIGN KEY (`property_option_id`) REFERENCES `property_options` (`id`),
  ADD CONSTRAINT `property_option_users_ibfk_3` FOREIGN KEY (`property_option_result_id`) REFERENCES `property_option_results` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
