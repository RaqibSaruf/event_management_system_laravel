-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 12:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tahir', '101systemerror@gmail.com', NULL, '$2y$10$NTzCR79.jdZd7VkQHq8QVusc1hJmeuMtjlfMzAMPNvpeXwjpaEm42', NULL, '2020-04-02 10:04:34', '2020-04-02 10:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `parent_id`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 11, 5, NULL, 'Yes of course we will', '2020-04-10 13:42:20', '2020-04-10 13:42:20', NULL),
(6, 9, 6, NULL, 'Welcome... :)', '2020-04-10 14:10:33', '2020-04-10 14:10:33', NULL),
(7, 13, 5, 5, 'oo tai naki', '2020-04-11 12:30:02', '2020-04-11 12:30:02', NULL),
(8, 14, 8, NULL, 'ki holo eta?? eta kono kotha!!!', '2020-04-19 23:42:31', '2020-04-19 23:42:31', NULL),
(9, 9, 14, NULL, 'hur!!! eishob aul faul kotha batray kaan des ken', '2020-04-19 23:43:59', '2020-04-19 23:43:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `id` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `created_at`, `updated_at`, `image`, `title`, `description`) VALUES
(1, NULL, '2020-04-13 03:02:48', '71046281_2467370736819296_1753811339400183808_o.jpg', 'EWU Computer Programming club', 'East West University Computer Programming Club (EWUCoPC) helps to improve Computer programming skill and this club is also invite them who are interested in computer programming from any department of EWU to be a member. This is a nice club to join');

-- --------------------------------------------------------

--
-- Table structure for table `executives`
--

CREATE TABLE `executives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_id` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `executives`
--

INSERT INTO `executives` (`id`, `created_at`, `updated_at`, `image`, `name`, `title`, `std_id`, `contact`, `email`) VALUES
(1, '2020-04-12 04:23:33', '2020-04-12 04:23:33', '83273561_2580871648802537_594330925811105792_n.jpg', 'Azaz Ahmed', 'President', '2016-1-60-054', '01926564546', 'azaz@gmail.com'),
(7, '2020-05-09 02:53:03', '2020-05-09 02:53:03', '16422489_455045284885508_2716988873467594371_o.jpg', 'Uzzal Rahman', 'Vice President', '2016-1-60-085', '01564885542', 'uzzalrh@gmail.com'),
(8, '2020-05-09 02:54:49', '2020-05-09 02:54:49', '89514239_2770615736386267_2681241060897718272_o (1).jpg', 'Shaikh Mohammad', 'General Secretary', '2016-2-60-055', '01322566545', 'shaikh_md@gmail.com'),
(9, '2020-05-09 02:56:02', '2020-05-09 02:56:02', '29694682_1909294959095074_655803916545425408_n.jpg', 'MD. Nayeem Hossain', 'Assistant General Secretary', '2016-2-60-084', '01875663254', 'nayeem_084@gmail.com'),
(10, '2020-05-09 02:57:15', '2020-05-09 02:57:15', '53873375_2404455073107684_2230372080111583232_o.jpg', 'Sabbir Ahmed Anik', 'Programming Organizer', '2016-2-60-034', '01754855568', 'sabbir_034@gmail.com'),
(11, '2020-05-09 02:58:57', '2020-05-09 02:58:57', '48365688_2775748992649644_6961789400065769472_o.jpg', 'MD. Raqibul Hasan', 'Treasurer', '2017-1-60-090', '01866554526', 'raqibsaruf1998@gmail.com'),
(12, '2020-05-09 03:00:04', '2020-05-09 03:00:04', '70730801_2637624439691951_435206867145195520_o.jpg', 'Abdul Mannan Omi', 'Event Coordinator', '2017-1-60-111', '01755224476', 'mannan_11@gmail.com'),
(13, '2020-05-09 03:01:06', '2020-05-09 03:01:06', '85135303_2937541132931982_180328960746323968_o.jpg', 'Abdullah Muhammad Tahir', 'Volunteer Supervisor', '2017-1-60-082', '01760086485', 'amtahir74@gmail.com');

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
-- Table structure for table `latest_events`
--

CREATE TABLE `latest_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latest_events`
--

INSERT INTO `latest_events` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'test event 1', 'abcd', '2020-03-21 10:04:28', '2020-03-21 10:04:28'),
(2, 'test event 2', 'erhgdjhafdsfg', '2020-03-21 10:04:47', '2020-03-21 10:04:47'),
(3, 'test event 3', 'asdfgfdhghaSFddsfgfdxhbfdh', '2020-03-21 10:45:33', '2020-03-21 10:45:33'),
(4, 'EWU Gaming Event', 'CSGO, PUBG, FIFA-17 and DOTA-2', '2020-04-02 11:46:32', '2020-04-02 11:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `latest_event_image`
--

CREATE TABLE `latest_event_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `latest_events_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latest_event_image`
--

INSERT INTO `latest_event_image` (`id`, `latest_events_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '12657999_10207892862574551_2294628810428375422_o.jpg', '2020-03-21 10:04:29', '2020-03-21 10:04:29'),
(2, 2, '12661914_972584446163379_795819611214489496_n.jpg', '2020-03-21 10:04:47', '2020-03-21 10:04:47'),
(3, 3, '12592675_912862975499069_1120397151233733928_n.jpg', '2020-03-21 10:45:33', '2020-03-21 10:45:33'),
(4, 3, '12654320_10153959144986155_2763109534767341579_n.jpg', '2020-03-21 10:45:33', '2020-03-21 10:45:33'),
(5, 3, '12688002_972587232829767_3536641546949168613_n.jpg', '2020-03-21 10:45:33', '2020-03-21 10:45:33'),
(7, 4, '81776045_542774883005536_1698775314936627200_n.jpg', '2020-04-07 20:20:13', '2020-04-07 20:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_03_08_090147_create_sliders_table', 1),
(4, '2020_03_13_172839_create_latest_events_table', 1),
(5, '2020_03_13_182203_latest_event_image_table', 1),
(6, '2020_03_21_125958_create_upcoming_events_table', 2),
(7, '2014_10_12_100000_create_password_resets_table', 3),
(8, '2020_03_31_202429_create_posts_comments_table', 4),
(9, '2020_03_15_200158_create_admins_table', 5),
(10, '2020_03_21_191859_add_job_column_to_users', 6),
(11, '2020_04_03_164553_add_userid_table', 7),
(12, '2020_04_03_170121_add_username_table', 8),
(13, '2020_04_03_171134_add_userjob_table', 9),
(14, '2020_04_03_190012_add_request_table', 10),
(15, '2020_04_03_191355_add_speciality_table', 11),
(16, '2020_04_05_044944_create_users_event_reg_table', 12),
(17, '2020_04_05_052059_add_contact_to_users_table', 13),
(18, '2020_04_05_053120_add_participate_to_users_event_reg_table', 14),
(19, '2020_04_05_233343_remove_participate_from_users', 15),
(20, '2020_04_05_233524_remove_participate_from_users', 16),
(21, '2020_04_05_234307_add_eventid_to_users_event_reg', 17),
(22, '2020_04_07_004514_add_registration_id_to_users_event_reg_table', 18),
(23, '2020_04_07_171859_remove_registration_id_from_users_event_reg', 19),
(24, '2020_04_07_185345_add_userid_to_users_event_reg', 20),
(25, '2020_04_08_005801_add_competing_event_to_users', 21),
(26, '2020_04_08_232508_create_about_table', 22),
(27, '2020_04_10_181632_add_university_to_users_event_reg', 23),
(28, '2020_04_11_165649_add_report_to_posts', 24),
(29, '2020_04_12_094937_create_description_table', 25),
(30, '2020_04_12_095129_create_executive_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `userjob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `report` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `userjob`, `username`, `userid`, `title`, `body`, `created_at`, `updated_at`, `deleted_at`, `report`) VALUES
(5, 'Admin', 'Abdullah Muhammad Tahir', 10, 'Hello Users', 'This is a newly developed web application for event management purpose for East West University Computer Programming Club. I am Tahir, one of the admins of the page, request you to have patience if you find any glitch or mistakes while surfing the web application and inform them to any of the copyright links given below. \r\n\r\nAlthough we have checked for bugs several times, it is very normal, some mistakes will still skip our eyes. Hope you enjoy.\r\n\r\nThanks.', '2020-04-08 18:46:08', '2020-04-12 07:35:17', '2020-04-12 07:35:17', 'I think this post is not necessary'),
(6, 'Admin', 'Abdullah Muhammad Tahir', 10, 'A lot have been changed in this website..', 'Your responses to the previous post have moved us and paved the way to add more features and fix the bugs. Thanks Everyone.. Keep up the good work!! Really appreciate it…', '2020-04-10 14:10:08', '2020-04-11 10:34:04', '2020-04-11 10:34:04', ''),
(7, 'Volunteer Coordinator', 'Abdullah Muhammad Tahir', 9, 'Bangabandhu Intra University Programming Contest', 'kjgghvmvnbvn', '2020-04-12 07:33:15', '2020-04-12 07:35:23', '2020-04-12 07:35:23', 'NULL'),
(8, 'Admin', 'Abdullah Muhammad Tahir', 10, 'Hello Users', 'This is a newly developed web application for event management purpose for East West University Computer Programming Club. I am Tahir, one of the admins of the page, request you to have patience if you find any glitch or mistakes while surfing the web application and inform them to any of the copyright links given below. \r\n\r\nAlthough we have checked for bugs several times, it is very normal, some mistakes will still skip our eyes. Hope you enjoy.\r\n\r\nThanks.', '2020-04-12 07:34:38', '2020-04-12 07:34:38', NULL, 'NULL'),
(9, 'User', 'Azaz Ahmed', 11, 'Bangabandhu Intra University Programming Contest', 'There\'s free t-shirts for every participant.... Grab yours at registration booth', '2020-04-12 07:36:29', '2020-04-13 07:03:53', '2020-04-13 07:03:53', 'NULL'),
(10, 'User', 'Azaz Ahmed', 11, 'nothing', 'just nothing', '2020-04-13 07:04:56', '2020-04-13 07:05:09', '2020-04-13 07:05:09', 'NULL'),
(11, 'User', 'Azaz Ahmed', 11, 'no', 'just nothing', '2020-04-13 07:06:59', '2020-04-13 07:07:02', '2020-04-13 07:07:02', 'NULL'),
(12, 'User', 'Azaz Ahmed', 11, 'nothing', 'just nothing', '2020-04-13 07:08:01', '2020-04-13 07:08:04', '2020-04-13 07:08:04', 'NULL'),
(13, 'User', 'Azaz Ahmed', 11, 'nothing', 'just nothing', '2020-04-13 07:10:10', '2020-04-13 07:10:10', NULL, 'NULL'),
(14, 'User', 'Turash Boka', 14, 'Ki jani ki shunlam!!', 'Ami shunlam.. .. amader cse fest naki ei bochor hobena??', '2020-04-19 23:43:20', '2020-04-19 23:47:14', '2020-04-19 23:47:14', 'ulta palta kotha koy!!');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(4, 'After Football Event', '77096703_470535990253592_2154914190530183168_n.jpg', '2020-04-02 12:43:32', '2020-04-02 12:43:32'),
(5, 'The gaming Event', '74906674_2527434873988679_2767874833340432384_n.jpg', '2020-04-02 12:43:43', '2020-04-02 12:43:43'),
(7, 'Seminar', '1586631093.jpg', '2020-04-11 12:51:34', '2020-04-11 12:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_events`
--

CREATE TABLE `upcoming_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upcoming_events`
--

INSERT INTO `upcoming_events` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(14, 'Bangabandhu Intra University Programming Contest', 'Hi guys,<br />\r\nIntra University programming Contest is back as a part of CSE FEST 2020. Only for students of East West University from all department.<br />\r\nIn <strong><em>&ldquo;Participating Field&rdquo; </em></strong>type one of the following options as your preferred language for programming:\r\n<ol>\r\n	<li>Java</li>\r\n	<li>C</li>\r\n	<li>C++</li>\r\n	<li>python</li>\r\n</ol>\r\n<strong>Last date of registration</strong>: 22nd June 2020<br />\r\n<strong>Event Date:</strong>&nbsp;30th of JUNE 2020<br />\r\n<strong>Time:</strong> 9:00 AM to 4:00 PM', 'IMG_4567.JPG', '2020-04-10 12:56:46', '2020-04-11 12:58:57'),
(16, 'Inter University Programming Contest', 'Hi guys,<br />\r\nIntra University programming Contest is back as a part of CSE FEST 2020. Only for students of East West University from all department.<br />\r\nIn <strong><em>&ldquo;Participating Field&rdquo; </em></strong>type one of the following options as your preferred language for programming:\r\n<ol>\r\n	<li>Java</li>\r\n	<li>C</li>\r\n	<li>C++</li>\r\n	<li>python</li>\r\n</ol>\r\n<strong>Last date of registration</strong>: 22nd June 2020<br />\r\n<strong>Event Date:</strong> 25th of JUNE 2020<br />\r\n<strong>Time:</strong> 9:00 AM to 4:00 PM<br />\r\n&nbsp;', 'IMG_4568.JPG', '2020-04-11 12:54:10', '2020-04-11 12:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `contact`, `job`, `request`, `speciality`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Abdullah Muhammad Tahir', 'amtahir74@gmail.com', NULL, '$2y$10$56mvU2e89GariMNpgWO5beRb34KeutJ9e.77oHP5pbpVWIqaBuiRa', '01760086485', 'Volunteer Coordinator', 'NULL', 'NULL', NULL, '2020-04-07 21:59:56', '2020-04-10 14:05:16'),
(10, 'Abdullah Muhammad Tahir', '101systemerror@gmail.com', NULL, '$2y$10$HciXLNIfKGv9IPGNqvI1eOI0N0.544zZgI.YSJ0VrUrSo7CyO.4hG', '01760086485', 'Admin', 'NULL', 'Web Development', NULL, '2020-04-08 18:35:27', '2020-04-08 18:36:16'),
(11, 'Azaz Ahmed', 'azaz@gmail.com', NULL, '$2y$10$x40wK66G.GsIkbzFU2VayOEeHOfjIVcAYHOZC9Am2dXidX0Qj.aJ.', 'NULL', 'User', 'NULL', 'NULL', NULL, '2020-04-10 13:41:43', '2020-04-10 13:41:43'),
(14, 'Turash Boka', 'turash@gmail.com', NULL, '$2y$10$F48AzyWePtxcmhJYKR8R9.Q3.mP0fn17Cj8jLQt6nf.TMEA5hTFye', '01926564546', 'Member', 'NULL', 'Cyclist', NULL, '2020-04-19 23:38:48', '2020-04-19 23:44:56'),
(15, 'Sadia Tasnim', 'sadiatasnim@gmail.com', NULL, '$2y$10$JvIX1ti50AuwJr1lRhybAeL1nokxPGLRIHQi8h.dbTvx7JjS5XVJu', 'NULL', 'User', 'NULL', 'NULL', NULL, '2020-05-09 03:24:39', '2020-05-09 03:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `users_event_reg`
--

CREATE TABLE `users_event_reg` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `participate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eventid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_event_reg`
--

INSERT INTO `users_event_reg` (`id`, `userid`, `event_name`, `user_name`, `university`, `user_email`, `user_contact`, `payment`, `created_at`, `updated_at`, `participate`, `eventid`) VALUES
(27, 12, 'Bangabandhu Intra University Programming Contest', 'Fahad Ahmed', 'East West University', 'fahad@gmail.com', '01854546254', 'NO', '2020-04-10 13:53:16', '2020-04-19 23:46:00', 'python', '14'),
(29, 9, 'Bangabandhu Intra University Programming Contest', 'Abdullah Muhammad Tahir', 'East West University', 'amtahir74@gmail.com', '01760086485', 'YES', '2020-04-10 14:05:16', '2020-04-11 12:50:18', 'C++', '14'),
(30, 6, 'Bangabandhu Intra University Programming Contest', 'Raqibul Hasan', 'East West University', 'raqib@gmail.com', '01926564546', 'NULL', '2020-04-10 14:06:32', '2020-04-10 14:06:32', 'C++', '14'),
(31, 13, 'Bangabandhu Intra University Programming Contest', 'Fahad Ahmed', 'East West University', 'fahad@gmail.com', '01685245265', 'NULL', '2020-04-11 12:31:59', '2020-04-11 12:31:59', 'python', '14'),
(33, 14, 'Bangabandhu Intra University Programming Contest', 'Turash Boka', 'Mohammadpur Preparatory Higher secondary School', 'turash@gmail.com', '01564654564', 'NULL', '2020-04-19 23:41:21', '2020-04-19 23:41:21', 'PUBG', '14'),
(34, 14, 'Inter University Programming Contest', 'Turash Boka', 'Mohammadpur Preparatory Higher secondary School', 'turash@gmail.com', '01926564546', 'YES', '2020-04-19 23:41:52', '2020-04-19 23:46:16', 'Programming Contest', '16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executives`
--
ALTER TABLE `executives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_events`
--
ALTER TABLE `latest_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_event_image`
--
ALTER TABLE `latest_event_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `latest_event_image_latest_events_id_foreign` (`latest_events_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_event_reg`
--
ALTER TABLE `users_event_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `executives`
--
ALTER TABLE `executives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `latest_events`
--
ALTER TABLE `latest_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `latest_event_image`
--
ALTER TABLE `latest_event_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users_event_reg`
--
ALTER TABLE `users_event_reg`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `latest_event_image`
--
ALTER TABLE `latest_event_image`
  ADD CONSTRAINT `latest_event_image_latest_events_id_foreign` FOREIGN KEY (`latest_events_id`) REFERENCES `latest_events` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
