-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2019 at 09:59 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


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
(1, 'cách sử dụng điện thoại 1', 'cach-su-dung-dien-thoai-1', 'cách sử dụng điện thoại 2019', 'cách sử dụng điện thoại 1', 1, 0, 'cách sử dụng điện thoại 1', 'cách sử dụng điện thoại 1', NULL, 0, 'iphone-11-pro-max-256gb-green-400x400.jpg', '2019-11-12 16:23:44', '2019-11-14 19:28:54'),
(2, 'so sánh iphone 7 và X', 'so-sanh-iphone-7-va-x', 'so sánh iphone 7 và X', 'so sánh iphone 7 và X', 1, 0, 'so sánh iphone 7 và X', 'so sánh iphone 7 và X', NULL, 0, 'samsung-galaxy-a7-2018-blue-400x400.jpg', '2019-11-12 16:38:41', '2019-11-14 19:29:02'),
(4, 'cách sử dụng facebook', 'cach-su-dung-facebook', 'cách sử dụng facebook', 'cách sử dụng facebook', 1, 0, 'cách sử dụng facebook', 'cách sử dụng facebook', NULL, 0, 'realme-3-green-isaac-400x400.jpg', '2019-11-14 19:54:57', '2019-11-14 19:54:57');

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
(2, 'điện thoại', 'dien-thoai', '', NULL, 1, 0, 'điện thoại', NULL, NULL, '2019-10-31 19:06:51', '2019-10-31 19:06:51'),
(3, 'điện thoại bàn', 'dien-thoai-ban', 'da', NULL, 1, 0, 'điện thoại bàn', 'điện thoại bàn mới nhất 2019', NULL, '2019-10-31 19:08:17', '2019-10-31 20:00:03'),
(6, 'máy tính bảng', 'may-tinh-bang', 'fa-table', NULL, 1, 0, 'máy tính bảng', NULL, NULL, '2019-11-01 19:12:15', '2019-11-01 19:12:15');

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
(2, 'teo', 'teo', 'teo@gmail.com', 'teo', 0, '2019-11-17 00:56:56', '2019-11-17 00:56:56');

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(11, '2019_11_17_143853_create_contact_table', 5),
(12, '2019_11_18_095652_create_transactions_table', 6),
(13, '2019_11_18_095717_create_orders_table', 6),
(14, '2019_11_18_134221_alter_column_pro_pay_in_table_products', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `or_transaction_id` int(11) NOT NULL DEFAULT '0',
  `or_product_id` int(11) NOT NULL DEFAULT '0',
  `or_qty` tinyint(4) NOT NULL DEFAULT '0',
  `or_price` int(11) NOT NULL DEFAULT '0',
  `or_sale` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_or_transaction_id_index` (`or_transaction_id`),
  KEY `orders_or_product_id_index` (`or_product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `or_transaction_id`, `or_product_id`, `or_qty`, `or_price`, `or_sale`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 1, 10000000, 0, NULL, NULL),
(2, 1, 7, 1, 1, 1, NULL, NULL),
(3, 2, 9, 2, 10000000, 0, NULL, NULL);

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
  `pro_pay` tinyint(4) NOT NULL DEFAULT '0',
  `pro_number` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `products_pro_slug_index` (`pro_slug`),
  KEY `products_pro_category_id_index` (`pro_category_id`),
  KEY `products_pro_author_id_index` (`pro_author_id`),
  KEY `products_pro_active_index` (`pro_active`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_category_id`, `pro_price`, `pro_author_id`, `pro_sale`, `pro_active`, `pro_hot`, `pro_view`, `pro_avatar`, `pro_title_seo`, `pro_description_seo`, `pro_keyword_seo`, `created_at`, `updated_at`, `pro_description`, `pro_content`, `pro_pay`, `pro_number`) VALUES
(1, 'máy tính bảng 12', 'may-tinh-bang-12', 3, 0, 0, 0, 1, 0, 0, 'iphone-11-pro-max-256gb-green-400x400.jpg', 'máy tính bảng 1', 'máy tính bảng 1', NULL, '2019-11-01 19:14:48', '2019-11-14 18:39:24', NULL, 'máy tính bảng 1', 0, 0),
(2, 'máy tính bảng ipad pro 11', 'may-tinh-bang-ipad-pro-11', 6, 0, 0, 0, 1, 0, 0, 'samsung-galaxy-a50s-green-400x400.jpg', 'máy tính bảng ipad pro 11', 'máy tính bảng ipad pro 11', NULL, '2019-11-01 19:15:35', '2019-11-14 18:38:59', 'máy tính bảng ipad pro 11', 'máy tính bảng ipad pro 11', 0, 0),
(3, 'iphone1', 'iphone1', 2, 200000, 0, 10, 1, 0, 0, 'My-An-dong-thap.jpg', 'iphone1 a', 'iphone1 ad', NULL, '2019-11-02 01:37:15', '2019-11-14 01:45:15', 'ưa', 'iphone1', 0, 0),
(4, 'a', 'a', 2, 0, 0, 0, 1, 0, 0, 'My-An-dong-thap.jpg', 'a', 'a', NULL, '2019-11-13 18:11:09', '2019-11-14 01:45:04', 'a', 'a', 0, 0),
(5, 'ab', 'ab', 3, 0, 0, 0, 1, 0, 0, 'samsung-galaxy-a50s-green-400x400.jpg', 'a', 'a', NULL, '2019-11-13 18:11:40', '2019-11-14 14:26:25', 'a', 'a', 0, 0),
(6, 'ad', 'ad', 3, 0, 0, 0, 1, 0, 0, 'samsung-galaxy-a7-2018-blue-400x400.jpg', 'ad', 'ad', NULL, '2019-11-13 18:45:04', '2019-11-14 14:26:17', 'da', 'da', 0, 0),
(7, '1', '1', 6, 1, 0, 1, 1, 1, 0, 'realme-3-green-isaac-400x400.jpg', '1', '1', NULL, '2019-11-13 18:45:22', '2019-11-14 16:19:33', '1', '1', 0, 0),
(8, 'a2', 'a2', 6, 0, 0, 0, 0, 1, 0, 'oppo-f11-pro-128gb-400x400.jpg', 'a2', 'a2', NULL, '2019-11-13 18:46:12', '2019-11-14 16:27:00', 'a2', 'a2', 0, 0),
(9, 'A4', 'a4', 2, 10000000, 0, 0, 1, 1, 0, 'iphone-11-pro-max-256gb-green-400x400.jpg', 'A4', 'A4', NULL, '2019-11-13 19:13:03', '2019-11-14 16:19:45', 'A4', 'A4', 0, 0),
(10, 'Điện thoại iPhone 11 Pro Max 256GB', 'dien-thoai-iphone-11-pro-max-256gb', 2, 37990000, 0, 10, 1, 1, 0, 'iphone-11-pro-max-256gb-green-400x400.jpg', 'Điện thoại iPhone 11 Pro Max 256GB', 'iPhone 11 Pro Max 256GB là chiếc iPhone cao cấp nhất trong bộ 3 iPhone Apple giới thiệu trong năm 2019 và quả thực chiếc smartphone', NULL, '2019-11-19 02:42:15', '2019-11-19 02:42:22', 'iPhone 11 Pro Max 256GB là chiếc iPhone cao cấp nhất trong bộ 3 iPhone Apple giới thiệu trong năm 2019 và quả thực chiếc smartphone', '<h3>Pro về camera sau</h3>\r\n\r\n<p>Camera là một trong những điểm nâng cấp mạnh mẽ nhất năm nay Apple mang đến cho chiếc&nbsp;iPhone 11 Pro Max.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd13.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Giao diện chụp ảnh\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd13.jpg\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd13.jpg\" title=\"Điện thoại iPhone 11 Pro Max 256GB | Giao diện chụp ảnh\" /></a></p>\r\n\r\n<p>Đó là lần đầu tiên một chiếc iPhone sở hữu tới 3 camera ở mặt sau với 3 tiêu cự khác nhau mà người ta vẫn gọi là \"từ nhà tới trường\" đáp ứng mọi nhu cầu nhiếp ảnh của người dùng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd22.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Giao diện chụp ảnh\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd22.jpg\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd22.jpg\" title=\"Điện thoại iPhone 11 Pro Max 256GB | Giao diện chụp ảnh\" /></a></p>\r\n\r\n<p>Ngoài một camera góc rộng và một camera tele vốn dĩ đã xuất hiện từ thời iPhone 7 Plus thì năm nay&nbsp;iPhone 11 Pro Max được trang bị thêm một ống kính&nbsp;<a href=\"https://www.thegioididong.com/dtdd-camera-goc-rong\" target=\"_blank\" title=\"Tham khảo các dòng điện thoại hỗ trợ chụp góc rộng\" type=\"Tham khảo các dòng điện thoại hỗ trợ chụp góc rộng\">góc siêu rộng</a>&nbsp;nữa.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd21.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Ảnh chụp chân dung bằng camera sau\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd21.jpg\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd21.jpg\" title=\"Điện thoại iPhone 11 Pro Max 256GB | Ảnh chụp chân dung bằng camera sau\" /></a></p>\r\n\r\n<p><em>Ảnh chụp chân dung camera sau</em></p>\r\n\r\n<p>Ống kính này sẽ thực sự hữu ích khi bạn muốn lấy được nhiều chi tiết hơn khi đứng cùng một vị trí chụp mà không cần phải di chuyển ra xa chủ thể.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd20.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Ảnh chụp chân dung ngược sáng với HDR\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd20.jpg\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd20.jpg\" title=\"Điện thoại iPhone 11 Pro Max 256GB | Ảnh chụp chân dung ngược sáng với HDR\" /></a></p>\r\n\r\n<p><em>Ảnh chụp chân dung ngược sáng với HDR</em></p>\r\n\r\n<p>Không chỉ nâng cấp về mặt phần cứng mà phần mềm bên trong máy cũng được bổ sung thêm nhiều tính năng đáng giá khác.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd19.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Chế độ Night Mode mới\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd19.jpg\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd19.jpg\" title=\"Điện thoại iPhone 11 Pro Max 256GB | Chế độ Night Mode mới\" /></a></p>\r\n\r\n<p><em>Chế độ Night Mode mới</em></p>\r\n\r\n<p>Đó là chế độ chụp đêm giúp máy khắc phục hoàn toàn \"yếu điểm\" chụp đêm không tốt vốn bị phàn nàn khá nhiều tới từ người dùng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd18.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Ảnh chụp bằng chế độ Night Mode\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd18.jpg\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd18.jpg\" title=\"Điện thoại iPhone 11 Pro Max 256GB | Ảnh chụp bằng chế độ Night Mode\" /></a></p>\r\n\r\n<p><em>Sự khác biệt với Night Mode trên iPhone 11 Pro Max</em></p>\r\n\r\n<p>iPhone năm nay thực sự là một sự \"lột xác\" của Apple về camera chụp đêm khi những bức ảnh cho ra có độ sáng và chi tiết cao hơn hẳn nếu đem so với chiếc iPhone Xs Max năm ngoái.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd17.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Ảnh chụp chế độ cơ bản\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd17.jpg\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd17.jpg\" title=\"Điện thoại iPhone 11 Pro Max 256GB | Ảnh chụp chế độ cơ bản\" /></a></p>\r\n\r\n<p><em>Ảnh chụp chế độ cơ bản bình thường với camera chính</em></p>\r\n\r\n<p>Apple cũng mang lại một trải nghiệm rất thông minh khi tất cả máy sẽ tự động quyết định khi nào chụp đêm khi nào không và việc của bạn chỉ là đưa lên và chụp thôi.</p>\r\n\r\n<p>Chế độ chân dung không chỉ tốt hơn trong việc lấy nét vào đối tượng muốn chụp, mà còn hoạt động được ở khoảng cách \'bình thường\' nhờ sự trợ giúp của cảm biến độ sâu.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd16.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Giao diện chuyển đổi các ống kính camera\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd16.jpg\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd16.jpg\" title=\"Điện thoại iPhone 11 Pro Max 256GB | Giao diện chuyển đổi các ống kính camera\" /></a></p>\r\n\r\n<p>Khả năng quay video nâng cấp đáng kể với chế độ 4K 60fps giúp bạn&nbsp;có thể quay những thước phim chuyên nghiệp bằng iPhone và chỉnh sửa trực tiếp trên máy.</p>\r\n\r\n<h3>Pro luôn cả camera trước</h3>\r\n\r\n<p>Không chỉ có camera sau được nâng cấp mà camera selfie trên iPhone 11 Pro Max cũng được nâng lên độ phân giải 12 MP thay vì 7 MP như trước.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/210653/iphone-11-pro-max-256gb-tgdd15.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 256GB | Trải nghiệm cầm nắm\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd15.jpg\" src=\"https://cdn.tgdd.vn/Products/Images/42/210653/iphone-11-pro-max-256gb-tgdd15.jpg\" title=\"Điện thoại iPhone 11 Pro Max 256GB | Trải nghiệm cầm nắm\" /></a></p>\r\n\r\n<p>Camera trước năm nay còn có thêm tính năng selfie góc rộng rất thích hợp cho các bạn đi chơi và chụp hình một nhóm đông người.</p>', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tr_user_id` int(11) NOT NULL DEFAULT '0',
  `tr_total` int(11) NOT NULL DEFAULT '0',
  `tr_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_tr_user_id_index` (`tr_user_id`),
  KEY `transactions_tr_status_index` (`tr_status`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `tr_user_id`, `tr_total`, `tr_note`, `tr_address`, `tr_phone`, `tr_status`, `created_at`, `updated_at`) VALUES
(1, 1, 10000001, 'giao hàng nhanh', NULL, '0778123957', 0, NULL, NULL),
(2, 1, 20000000, 'ok bay', '16 tran van on', '0778123957', 0, NULL, NULL);

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
(1, 'Nguyễn Viết Tú', 'nviettu12345@gmail.com', '0778123957', NULL, 1, '$2y$10$EhtlqbIsXrZ9CyOqrElfyO4f3GCWk7MtLCxo1TXSdfL9K4l9W/pO6', 'Db8IrXhVVd0pcZtGA7jtYwAReZES0NJsDK5gRFWqRpaJhjzzDV9BjW47kQ4Q', '2019-11-15 14:51:40', '2019-11-15 14:51:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
