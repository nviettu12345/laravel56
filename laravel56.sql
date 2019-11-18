-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2019 at 03:39 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel56`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `a_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_content` longtext COLLATE utf8mb4_unicode_ci,
  `a_active` tinyint(4) NOT NULL DEFAULT '1',
  `a_author_id` int(11) NOT NULL DEFAULT '0',
  `a_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_view` int(11) NOT NULL DEFAULT '0',
  `a_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `articles_a_name_unique` (`a_name`),
  KEY `articles_a_slug_index` (`a_slug`),
  KEY `articles_a_active_index` (`a_active`),
  KEY `articles_a_author_id_index` (`a_author_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `a_name`, `a_slug`, `a_description`, `a_content`, `a_active`, `a_author_id`, `a_title_seo`, `a_description_seo`, `a_keyword_seo`, `a_view`, `a_avatar`, `created_at`, `updated_at`) VALUES
(1, 'cách sử dụng điện thoại 1', 'cach-su-dung-dien-thoai-1', 'cách sử dụng điện thoại 2019', 'cách sử dụng điện thoại 1', 1, 0, 'cách sử dụng điện thoại 1', 'cách sử dụng điện thoại 1', NULL, 0, 'iphone-11-pro-max-256gb-green-400x400.jpg', '2019-11-12 23:23:44', '2019-11-15 02:28:54'),
(2, 'so sánh iphone 7 và X', 'so-sanh-iphone-7-va-x', 'so sánh iphone 7 và X', 'so sánh iphone 7 và X', 1, 0, 'so sánh iphone 7 và X', 'so sánh iphone 7 và X', NULL, 0, 'samsung-galaxy-a7-2018-blue-400x400.jpg', '2019-11-12 23:38:41', '2019-11-15 02:29:02'),
(4, 'cách sử dụng facebook', 'cach-su-dung-facebook', 'cách sử dụng facebook', 'cách sử dụng facebook', 1, 0, 'cách sử dụng facebook', 'cách sử dụng facebook', NULL, 0, 'realme-3-green-isaac-400x400.jpg', '2019-11-15 02:54:57', '2019-11-15 02:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_icon` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_active` int(11) NOT NULL DEFAULT '1',
  `c_total_product` int(11) NOT NULL DEFAULT '0',
  `c_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_c_name_unique` (`c_name`),
  KEY `categories_c_slug_index` (`c_slug`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_slug`, `c_icon`, `c_avatar`, `c_active`, `c_total_product`, `c_title_seo`, `c_description_seo`, `c_keyword_seo`, `created_at`, `updated_at`) VALUES
(2, 'điện thoại', 'dien-thoai', '', NULL, 1, 0, 'điện thoại', NULL, NULL, '2019-11-01 02:06:51', '2019-11-01 02:06:51'),
(3, 'điện thoại bàn', 'dien-thoai-ban', 'da', NULL, 1, 0, 'điện thoại bàn', 'điện thoại bàn mới nhất 2019', NULL, '2019-11-01 02:08:17', '2019-11-01 03:00:03'),
(6, 'máy tính bảng', 'may-tinh-bang', 'fa-table', NULL, 1, 0, 'máy tính bảng', NULL, NULL, '2019-11-02 02:12:15', '2019-11-02 02:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `c_name`, `c_title`, `c_email`, `c_content`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Viết TÍ', 'abc', 'nviettu12345@gmail.com', 'abc', 0, NULL, NULL),
(2, 'teo', 'teo', 'teo@gmail.com', 'teo', 0, '2019-11-17 07:56:56', '2019-11-17 07:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_10_31_094326_create_categories_table', 1),
(7, '2019_11_02_044343_create_products_table', 2),
(8, '2019_11_02_063152_alter_column_pro_content_and_pro_title_seo_in_talble_products', 3),
(10, '2019_11_12_085535_create_article_table', 4),
(11, '2019_11_17_143853_create_contact_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_category_id` int(11) NOT NULL DEFAULT '0',
  `pro_price` int(11) NOT NULL DEFAULT '0',
  `pro_author_id` int(11) NOT NULL DEFAULT '0',
  `pro_sale` tinyint(4) NOT NULL DEFAULT '0',
  `pro_active` tinyint(4) NOT NULL DEFAULT '1',
  `pro_hot` tinyint(4) NOT NULL DEFAULT '0',
  `pro_view` int(11) NOT NULL DEFAULT '0',
  `pro_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pro_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_content` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `products_pro_slug_index` (`pro_slug`),
  KEY `products_pro_category_id_index` (`pro_category_id`),
  KEY `products_pro_author_id_index` (`pro_author_id`),
  KEY `products_pro_active_index` (`pro_active`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_category_id`, `pro_price`, `pro_author_id`, `pro_sale`, `pro_active`, `pro_hot`, `pro_view`, `pro_avatar`, `pro_title_seo`, `pro_description_seo`, `pro_keyword_seo`, `created_at`, `updated_at`, `pro_description`, `pro_content`) VALUES
(1, 'máy tính bảng 12', 'may-tinh-bang-12', 3, 0, 0, 0, 1, 0, 0, 'iphone-11-pro-max-256gb-green-400x400.jpg', 'máy tính bảng 1', 'máy tính bảng 1', NULL, '2019-11-02 02:14:48', '2019-11-15 01:39:24', NULL, 'máy tính bảng 1'),
(2, 'máy tính bảng ipad pro 11', 'may-tinh-bang-ipad-pro-11', 6, 0, 0, 0, 1, 0, 0, 'samsung-galaxy-a50s-green-400x400.jpg', 'máy tính bảng ipad pro 11', 'máy tính bảng ipad pro 11', NULL, '2019-11-02 02:15:35', '2019-11-15 01:38:59', 'máy tính bảng ipad pro 11', 'máy tính bảng ipad pro 11'),
(3, 'iphone1', 'iphone1', 2, 200000, 0, 10, 1, 0, 0, 'My-An-dong-thap.jpg', 'iphone1 a', 'iphone1 ad', NULL, '2019-11-02 08:37:15', '2019-11-14 08:45:15', 'ưa', 'iphone1'),
(4, 'a', 'a', 2, 0, 0, 0, 1, 0, 0, 'My-An-dong-thap.jpg', 'a', 'a', NULL, '2019-11-14 01:11:09', '2019-11-14 08:45:04', 'a', 'a'),
(5, 'ab', 'ab', 3, 0, 0, 0, 1, 0, 0, 'samsung-galaxy-a50s-green-400x400.jpg', 'a', 'a', NULL, '2019-11-14 01:11:40', '2019-11-14 21:26:25', 'a', 'a'),
(6, 'ad', 'ad', 3, 0, 0, 0, 1, 0, 0, 'samsung-galaxy-a7-2018-blue-400x400.jpg', 'ad', 'ad', NULL, '2019-11-14 01:45:04', '2019-11-14 21:26:17', 'da', 'da'),
(7, '1', '1', 6, 1, 0, 1, 1, 1, 0, 'realme-3-green-isaac-400x400.jpg', '1', '1', NULL, '2019-11-14 01:45:22', '2019-11-14 23:19:33', '1', '1'),
(8, 'a2', 'a2', 6, 0, 0, 0, 0, 1, 0, 'oppo-f11-pro-128gb-400x400.jpg', 'a2', 'a2', NULL, '2019-11-14 01:46:12', '2019-11-14 23:27:00', 'a2', 'a2'),
(9, 'A4', 'a4', 2, 10000000, 0, 0, 1, 1, 0, 'iphone-11-pro-max-256gb-green-400x400.jpg', 'A4', 'A4', NULL, '2019-11-14 02:13:03', '2019-11-14 23:19:45', 'A4', 'A4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_active_index` (`active`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `avatar`, `active`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Viết Tú', 'nviettu12345@gmail.com', '0778123957', NULL, 1, '$2y$10$EhtlqbIsXrZ9CyOqrElfyO4f3GCWk7MtLCxo1TXSdfL9K4l9W/pO6', 'Db8IrXhVVd0pcZtGA7jtYwAReZES0NJsDK5gRFWqRpaJhjzzDV9BjW47kQ4Q', '2019-11-15 21:51:40', '2019-11-15 21:51:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
