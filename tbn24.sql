-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 01:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbn24`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registered_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `user_phone`, `password`, `status`, `picture`, `registered_date`) VALUES
(13, 'ddd', 'a@gmail.com', '5555555555555', 'c4ca4238a0b923820dcc509a6f75849badmin', 'super-admin', '1600763415.webp', '2020-09-22'),
(14, 'isolutions', 'admin@isolutionsbd.com', '0173830567', '7ece99e593ff5dd200e2b9233d9ba654admin', 'super-admin', '1601210874.webp', '2020-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `app_seating`
--

CREATE TABLE `app_seating` (
  `app_setting_id` int(11) NOT NULL,
  `app_time_zone` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `google_app_id` varchar(100) DEFAULT NULL,
  `instagram_id` varchar(100) DEFAULT NULL,
  `live_url` varchar(250) DEFAULT NULL,
  `live_url_bd` varchar(250) DEFAULT NULL,
  `program_start_type` varchar(50) DEFAULT NULL,
  `youtube_chanel` varchar(250) DEFAULT NULL,
  `google_map` varchar(500) DEFAULT NULL,
  `contact_address` varchar(200) DEFAULT NULL,
  `contact_phone` varchar(20) DEFAULT NULL,
  `contact_email` varchar(20) DEFAULT NULL,
  `linkedIn` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `ios_app_link` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_seating`
--

INSERT INTO `app_seating` (`app_setting_id`, `app_time_zone`, `facebook`, `google_app_id`, `instagram_id`, `live_url`, `live_url_bd`, `program_start_type`, `youtube_chanel`, `google_map`, `contact_address`, `contact_phone`, `contact_email`, `linkedIn`, `twitter`, `ios_app_link`) VALUES
(1, 'America/New_York', 'https://www.facebook.com/tbn24usa', 'https://play.google.com/store/apps/details?id=com.tbn.live', 'https://www.instagram.com/tbn24usa/', 'http://dog.dg21bd.com/TBN243/index.m3u8', 'http://dog.dg21bd.com/TBN243/index.m3u8', 'manualy', 'UCv_oQ-sRZoJdEX4K5fQ6q6w', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.5574698989853!2d-73.90740168483684!3d40.749762043241915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25f1bece75213%3A0x43f4dd9a13836756!2s37-19+57th+St%2C+Flushing%2C+NY+11377%2C+USA!5e0!3m2!1sen!2sbd!4v1495992827453', '37-19, 57th street, woodside,NY-11377 United States', '+1(718)808-9000', 'info@tbn24.com', NULL, NULL, 'https://play.google.com/store/apps/details?id=com.tbn.live');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_title`, `status`, `created_date`) VALUES
(2, 'Mango', 1, '2020-09-28'),
(3, 'computer', 1, '2020-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_subject` varchar(250) NOT NULL,
  `contact_message` text NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `status`, `created_date`) VALUES
(1, 'sujon', 'admin@isolutionsbd.com', 'dd', 'ff', 1, '2020-09-27 00:00:00'),
(2, 'sujon', 'info@isolutionsbd.com', 'fff', 'd', 1, '2020-09-27 00:00:00'),
(3, 'sujon', 'admin@isolutionsbd.com', 'dd', 'dd', 1, '2020-09-27 00:00:00'),
(4, 'shahinul islam', 'suzonice10@gmal.com', 'how  can help you ?', 'I need your help  I need your help I need your help \r\nI need your help  I need your help I need your help \r\nI need your help  I need your help I need your help', 1, '2020-09-27 18:41:12');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faq_id` int(11) NOT NULL,
  `questions` varchar(250) DEFAULT NULL,
  `answers` varchar(250) DEFAULT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_22_073017_create_programs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(250) DEFAULT NULL,
  `news_body` varchar(500) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_body`, `status`, `create_date`) VALUES
(1, 'dayly news id', 'bangla today', 0, '0000-00-00'),
(2, 'dorkar nai', 'vat kai si', 1, '2020-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `option_id` int(11) NOT NULL,
  `option_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`option_id`, `option_name`, `option_value`) VALUES
(59, 'home_page_category_id', '58,65'),
(60, 'logo', 'https://demo.bestearnidea.com/wp-content/uploads/file/logo-gif.gif'),
(61, 'icon', 'https://sohojbuy.com/public/uploads/logo f.png'),
(62, 'site_title', 'Solehin Online Shopping'),
(63, 'order_image', NULL),
(64, 'phone', '01300884747'),
(65, 'phone_order', '<i class=\"fa fa-phone-square\" style=\"padding-left:20px;color: green;\">   </i> 01300884747 <br>\r\n <i class=\"fa fa-phone-square\" style=\"padding-left:20px;color: green;\"> </i> 01407011239 <br>'),
(66, 'address', '<ul class=\"toggle-footer\" style=\"\">\r\n                            <li class=\"media\">\r\n                                <div class=\"pull-left\">\r\n                      <span class=\"icon fa-stack fa-lg\">\r\n                      <i class=\"fa fa-map-marker fa-stack-1x fa-inverse\"></i>\r\n                      </span>\r\n                                </div>\r\n                                <div class=\"media-body\">\r\n                                    <p>Office no 1417, Level 13, Shah Ali Plaza, Mirpur 10, Dhaka</p>\r\n                                </div>\r\n                            </li>\r\n                            <li class=\"media\">\r\n                                <div class=\"pull-left\">\r\n                      <span class=\"icon fa-stack fa-lg\">\r\n                      <i class=\"fa fa-mobile fa-stack-1x fa-inverse\"></i>\r\n                      </span>\r\n                                </div>\r\n                                <div class=\"media-body\">\r\n                                    <p>01300884747<br>01300884747</p>\r\n                                </div>\r\n                            </li>\r\n                            <li class=\"media\">\r\n                                <div class=\"pull-left\">\r\n                      <span class=\"icon fa-stack fa-lg\">\r\n                      <i class=\"fa fa-envelope fa-stack-1x fa-inverse\"></i>\r\n                      </span>\r\n                                </div>\r\n                                <div class=\"media-body\">\r\n                                    <span><a href=\"#\">support@sohojbuy.com</a></span>\r\n                                </div>\r\n                            </li>\r\n                        </ul>'),
(67, 'admin_email', 'info@sohojbuy.com'),
(68, 'shipping_charge_in_dhaka', '60'),
(69, 'shipping_charge_out_of_dhaka', '120'),
(70, 'footer', NULL),
(71, 'google_map', NULL),
(72, 'copyright', NULL),
(73, 'default_product_terms', NULL),
(74, 'home_cat_section', '1,18,2,102,4,9,16,113,124'),
(75, 'home_seo_title', 'Sohoj Online Shopping'),
(76, 'home_seo_content', NULL),
(77, 'home_seo_keywords', NULL),
(78, 'home_about_title', NULL),
(79, 'home_about_content', NULL),
(80, 'bkash', '01748188268'),
(81, 'facebook', 'https://www.facebook.com/sohojbuyshop'),
(82, 'youtube', 'https://www.youtube.com/channel/UCWA3XLqrBLNItdEXNAcZVSA'),
(83, 'twitter', NULL),
(84, 'linked', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_name`, `page_link`, `page_content`, `created_time`) VALUES
(14, 'About Us', 'about-us', '<h1 style=\"text-align:center\"><strong>The voice of Non Resident Bangladeshis</strong></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TBN24 is a Bangla language live television channel in North America provides content that is informative, educational, socially responsible, entertaining and comparable with world-class television broadcasters. TBN24 is the first Bangla 24x7 live television channel to produce original content here in the USA. This channel is currently available in US, Canada, Europe, Australia, and Middle-East.</p>\r\n\r\n<p>TBN24 Television is the for non-resident Bangladeshi living across the globe as well as people whose mother tongue is Bangla</p>\r\n\r\n<p>This is a test to see download shows up here</p>', '2020-09-23 11:23:40'),
(15, 'documents', 'documents', '<h2>Covid-19 Eviction Moratorium</h2>\r\n\r\n<p><br />\r\nরোগ নিয়ন্ত্রণ ও প্রতিরোধ কেন্দ্র (সিডিসি) একটি অস্থায়ী উচ্ছেদের স্থগিতাদেশ ঘোষণা করেছে ডিসেম্বর 2020 পর্যন্ত । এই নির্বাহী আদেশ, বছরে $99,000 এর চেয়ে কম উপার্জনকারী ব্যক্তি এবং বিবাহিত দম্পতিদের $198,000 ডলারের কম আয়ের ক্ষেত্রে প্রযোজ্য, যারা COVID মহামারীর কারণে ভাড়া বা আবাসন প্রদান করতে অক্ষম হন।<br />\r\nযদি এই পরিস্থিতি আপনার ক্ষেত্রে প্রযোজ্য হয় তাহলে, আমরা একটি চিঠি তৈরি করেছি যা আপনি পূরণ করে, আপনার বাড়িওয়ালাকে সরবরাহ করতে পারেন।<br />\r\nআমাদের পিডিএফ ডাউনলোড করতে নীচের লিঙ্ক এ ক্লিক করুন।</p>', '2020-09-24 11:55:16');

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
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `playlist_id` int(11) NOT NULL,
  `playlist_name` varchar(100) NOT NULL,
  `playlist_link` varchar(250) NOT NULL,
  `playlist_picture` varchar(100) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`playlist_id`, `playlist_name`, `playlist_link`, `playlist_picture`, `category_id`, `created_date`) VALUES
(2, 'ddd', 'dddd', 'ddddddddddd', 3, '0000-00-00'),
(3, 'ddd', 'fff', '1601292605.webp', 2, '2020-09-28'),
(4, 'ddd', 'fff', 'playlist_1601293723.webp', 3, '2020-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `program_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `program_name`, `program_details`, `youtube`, `status`, `program_image`, `created_at`, `updated_at`) VALUES
(3, 'TBN24 AM NEWS', 'TBN24 AM NEWS', 'TBN24 AM NEWS', 1, '1600861547.jpg', '2020-09-21 18:00:00', NULL),
(4, 'TBN WELLNESS', 'TBN WELLNESS', '545228771152222', 1, '1600861504.jpg', '2020-09-21 18:00:00', NULL),
(5, 'News Flash', 'News Flash', 'fffd', 1, '1600861471.jpg', '2020-09-21 18:00:00', NULL),
(6, 'কুরআনের আলো', 'detail ki', '4455', 1, '1600861349.jpg', '2020-09-22 18:00:00', NULL),
(7, 'aso islam siki', 'ddd', 'fff', 1, '1600862030.jpg', '2020-09-22 18:00:00', NULL),
(8, 'ajker kobor', 'dd', 'dff', 1, '1600862052.jpg', '2020-09-22 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_id` int(11) NOT NULL,
  `schedule_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `chat_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `schedule_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `program_id`, `schedule_date`, `start_time`, `end_time`, `chat_status`, `created_at`, `updated_at`, `schedule_note`, `day`) VALUES
(1, 4, '2020-09-16', '00:00:00', '00:00:00', 1, '2020-09-25 18:00:00', NULL, NULL, 'Sat'),
(2, 4, '2020-09-16', '00:30:00', '00:30:00', 1, '2020-09-23 18:00:00', NULL, '555', NULL),
(3, 1, '2020-09-15', '00:00:00', '00:00:00', 0, '2020-09-23 18:00:00', NULL, '666', NULL),
(8, 7, '2020-09-26', '00:45:00', '00:30:00', 1, '2020-09-25 18:00:00', NULL, '888', 'Sat'),
(9, 8, '2020-09-26', '00:45:00', '01:00:00', 0, '2020-09-25 18:00:00', NULL, '888', NULL),
(10, 3, '2020-09-23', '01:00:00', '00:45:00', 0, '2020-09-25 18:00:00', NULL, NULL, 'Sat'),
(11, 7, '2020-09-26', '00:30:00', '00:30:00', NULL, '2020-09-25 18:00:00', NULL, NULL, NULL),
(12, 6, '2020-09-24', '00:00:00', '00:00:00', 0, '2020-09-25 18:00:00', NULL, '888', NULL),
(13, 5, '2020-09-26', '01:00:00', '01:00:00', 0, '2020-09-25 18:00:00', NULL, 'hhh 45', 'Sat'),
(14, 5, '2020-09-10', '00:45:00', '00:00:00', 0, '2020-09-25 18:00:00', NULL, 'hhh 45', 'Sat'),
(15, 5, '2020-09-08', '00:30:00', '00:45:00', 1, '2020-09-25 18:00:00', NULL, '888', 'Sat'),
(16, 4, '2020-09-09', '00:30:00', '00:30:00', 0, '2020-09-25 18:00:00', NULL, 'hhh 45', 'Saturday'),
(17, 6, '2020-09-16', '00:15:00', '00:45:00', 1, '2020-09-26 18:00:00', NULL, 'dd', 'Sunday'),
(18, 6, '2020-09-27', '00:45:00', '00:45:00', 1, '2020-09-26 18:00:00', NULL, '888', 'Sunday'),
(19, 7, '2020-09-27', '01:00:00', '00:45:00', 0, '2020-09-26 18:00:00', NULL, 'hhh 45', 'Sunday');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `app_seating`
--
ALTER TABLE `app_seating`
  ADD PRIMARY KEY (`app_setting_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`playlist_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `app_seating`
--
ALTER TABLE `app_seating`
  MODIFY `app_setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `playlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
