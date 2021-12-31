-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 08:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_26_050054_create_posts_table', 1),
(6, '2021_12_26_071633_create_user_contacts_table', 1),
(7, '2021_12_27_143411_create_user_categories_table', 1),
(8, '2021_12_27_152913_create_user_carts_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `security_question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bkash_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `game_name`, `game_email`, `game_password`, `game_image`, `game_details`, `security_question`, `game_price`, `contact_info`, `bkash_no`, `author_name`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Leage of Legends', 'Ocean111@gmail.com', '1021110211', '20213112052548am2.jfif', 'Level:421 Blue Essence:100k Skin:40  RP:1000', 'Whats your Nick name? - Blue', '3500', 'Ocean@gmail.com /01556947786', '01556947786', 'Ocean', '3', 'unsold', '2021-12-30 23:25:48', '2021-12-30 23:25:48'),
(7, 'God Of War', 'Ocean111@gmail.com', 'sdjkfsdhfkjsdhfkjsd', '20213112053009am1.jpg', 'This is a game account from Epic Game store', 'Whats your Nick name? - Blue', '9000', '01786984564', '01556947786', 'Ocean', '3', 'unsold', '2021-12-30 23:30:09', '2021-12-30 23:30:09'),
(8, 'Lords mobile', 'Ocean111@gmail.com', 'ahdkjsadajkha', '20213112053647am5.jfif', 'level:60 Might:30056790900 Troops Tier:5 VIP:13', 'Whats your Nick name? - Blue', '20000', '01786984564', '01556947786', 'Ocean', '3', 'unsold', '2021-12-30 23:36:47', '2021-12-30 23:36:47'),
(9, 'Leage of Legends', 'm', 'gfdgdfgdfgghfyyu', '20213112054019amleague-of-legends-account.jfif', 'Level:421 Blue Essence:1006 Skin:20 RP:33', 'Whats your Nick name? - Red', '1500', '01786984565', '01556947784', 'Mitul Chakma', '1', 'sold', '2021-12-30 23:40:19', '2021-12-31 00:20:03'),
(10, 'Leage of Legends', 'mitu102113@gmail.com', 'gdfgdfgdgggd', '20213112060543amf46d97f0b9abc53a7eda31222b14507f.jpg', 'Level:421 Blue Essence:1006 Skin:20 RP:33', 'Whats your Nick name? - Red', '1500', '01786984564', '01556947786', 'Mitul Chakma', '1', 'unsold', '2021-12-31 00:05:43', '2021-12-31 00:05:43'),
(11, 'Valorant', 'mitu102113@gmail.com', 'hfhfghfghfg', '20213112061159amfef249c5-c317-4ceb-8ead-a6d399e5b06f.jpg', 'Region: Asia', 'Whats your Nick name? - Red', '3000', '01786984564', '01556947786', 'Mitul Chakma', '1', 'sold', '2021-12-31 00:11:59', '2021-12-31 00:26:23');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mitul Chakma', 'mitul@gmail.com', NULL, '$2y$10$pfC0BxMDkuPD104tbwBg0eHiQuf082r2R0a7/1HniEnys2iZvfJDO', NULL, '2021-12-30 09:37:34', '2021-12-30 09:37:34'),
(2, 'Pranab chakma', 'Pranab.chakma@g.bracu.ac.bd', NULL, '$2y$10$g/IOg4sFUPGb1ppaaeBTPePGKK.EzRBCblG26jq6tr8F.oZsdONiq', NULL, '2021-12-30 09:46:43', '2021-12-30 09:46:43'),
(3, 'Ocean', 'Ocean@gmail.com', NULL, '$2y$10$Vr5UspL.NkjC.rYpbCVT7e.ice1raIPtGivZfql/OZZ2XqEBX/nAa', NULL, '2021-12-30 23:07:27', '2021-12-30 23:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_carts`
--

CREATE TABLE `user_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `security_q` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bkash_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_carts`
--

INSERT INTO `user_carts` (`id`, `seller_name`, `seller_id`, `buyer_name`, `buyer_id`, `game_name`, `email`, `status`, `game_password`, `security_q`, `bkash_no`, `game_id`, `created_at`, `updated_at`) VALUES
(5, 'Mitul Chakma', '1', 'Pranab chakma', '2', 'Leage of Legends', 'm', 'pending', 'gfdgdfgdfgghfyyu', 'Whats your Nick name? - Red', '01556947784', '9', '2021-12-31 00:20:03', '2021-12-31 00:20:03'),
(6, 'Mitul Chakma', '1', 'Ocean', '3', 'Valorant', 'mitu102113@gmail.com', 'pending', 'hfhfghfghfg', 'Whats your Nick name? - Red', '01556947786', '11', '2021-12-31 00:26:23', '2021-12-31 00:26:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_categories`
--

CREATE TABLE `user_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_categories`
--

INSERT INTO `user_categories` (`id`, `email`, `user_category`, `created_at`, `updated_at`) VALUES
(1, 'mitul@gmail.com', 'user', '2021-12-30 09:37:34', '2021-12-30 09:37:34'),
(2, 'Pranab.chakma@g.bracu.ac.bd', 'admin', '2021-12-30 09:46:43', '2021-12-30 09:46:43'),
(3, 'Ocean@gmail.com', 'user', '2021-12-30 23:07:27', '2021-12-30 23:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_contacts`
--

CREATE TABLE `user_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_contacts`
--

INSERT INTO `user_contacts` (`id`, `user_image`, `phone_no`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '20213112050906amea69dc6226e72a33f82d3add20b470df.jpg', '01556948836', '3', '2021-12-30 23:09:06', '2021-12-30 23:09:06'),
(2, '20213112071452amcartoon-boy-images-1.jpg', '01868222002', '1', '2021-12-31 01:14:52', '2021-12-31 01:14:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_carts`
--
ALTER TABLE `user_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_categories`
--
ALTER TABLE `user_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_carts`
--
ALTER TABLE `user_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_categories`
--
ALTER TABLE `user_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
