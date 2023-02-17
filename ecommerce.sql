-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 07:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `catagory_name`, `created_at`, `updated_at`) VALUES
(1, 'Car', '2022-11-30 05:02:40', '2022-11-30 05:02:40'),
(2, 'Mobile', '2022-11-30 05:25:34', '2022-11-30 05:25:34'),
(7, 'HeadPhone', '2022-11-30 05:40:28', '2022-11-30 05:40:28'),
(8, 'Bus', '2022-11-30 05:40:39', '2022-11-30 05:40:39'),
(9, 'Toy', '2022-11-30 10:05:55', '2022-11-30 10:05:55'),
(10, 'Bear', '2022-11-30 22:27:13', '2022-11-30 22:27:13'),
(11, 'Cube', '2022-11-30 22:27:20', '2022-11-30 22:27:20'),
(12, 'Doll', '2022-11-30 22:27:30', '2022-11-30 22:27:30'),
(15, 'Jersey', '2023-01-04 00:48:31', '2023-01-04 00:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_11_30_060245_create_sessions_table', 1),
(7, '2022_11_30_102753_create_catagories_table', 2),
(8, '2022_11_30_115607_create_products_table', 3),
(9, '2022_12_02_071009_create_carts_table', 4),
(10, '2022_12_09_045825_create_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `delivery_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `product_title`, `quantity`, `price`, `image`, `product_id`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(7, 'user', 'user@gmail.com', '01738844520', 'asdfdsfdsfds', '1', 'Car', '2', '398', 'IMG-63875d3c528a0.jpg', '1', 'Cash On Delivery', 'Delivered', '2022-12-09 00:14:14', '2023-01-03 10:31:13'),
(8, 'user', 'user@gmail.com', '01738844520', 'asdfdsfdsfds', '1', 'Supper Mario', '2', '420', 'IMG-63882cc79bf76.jpeg', '6', 'Paid', 'Delivered', '2022-12-09 00:14:14', '2023-01-03 10:49:32'),
(9, 'user', 'user@gmail.com', '01738844520', 'asdfdsfdsfds', '1', 'Car', '2', '398', 'IMG-63875d3c528a0.jpg', '1', 'Cash On Delivery', 'Delivered', '2022-12-30 03:25:40', '2023-01-03 10:32:10'),
(10, 'user', 'user@gmail.com', '01738844520', 'asdfdsfdsfds', '1', 'Pop Fidge Sensory Toy', '3', '357', 'IMG-638830a4f1684.jpg', '8', 'Cash On Delivery', 'Processing', '2022-12-30 03:25:40', '2022-12-30 03:25:40'),
(11, 'user', 'user@gmail.com', '01738844520', 'asdfdsfdsfds', '1', 'Cube', '1', '599', 'IMG-6388310622e66.webp', '9', 'Cash On Delivery', 'Processing', '2022-12-30 03:25:40', '2022-12-30 03:25:40'),
(13, 'user', 'user@gmail.com', '01738844520', 'asdfdsfdsfds', '1', 'Cube', '2', '1198', 'IMG-6388310622e66.webp', '9', 'Paid', 'Processing', '2022-12-30 10:54:35', '2022-12-30 10:54:35'),
(14, 'user', 'user@gmail.com', '01738844520', 'asdfdsfdsfds', '1', 'Pop Fidge Sensory Toy', '2', '238', 'IMG-638830a4f1684.jpg', '8', 'Paid', 'Processing', '2022-12-30 10:54:35', '2022-12-30 10:54:35'),
(15, 'user', 'user@gmail.com', '01738844520', 'asdfdsfdsfds', '1', 'Supper Mario', '5', '1050', 'IMG-63882cc79bf76.jpeg', '6', 'Paid', 'Processing', '2022-12-30 11:02:58', '2022-12-30 11:02:58'),
(16, 'user', 'user@gmail.com', '01738844520', 'asdfdsfdsfds', '1', 'Cube', '3', '1497', 'IMG-6388310622e66.webp', '9', 'Cash On Delivery', 'Processing', '2023-01-01 08:29:46', '2023-01-01 08:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `catagory` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `catagory`, `quantity`, `price`, `discount_price`, `created_at`, `updated_at`) VALUES
(1, 'Car', 'This is a nice car for kids.', 'IMG-63875d3c528a0.jpg', 'Car', '50', '250', '199', '2022-11-30 07:40:12', '2022-11-30 22:45:37'),
(5, 'Spinner for Kids', 'This is a spinner for Kids.', 'IMG-63882c9061bd7.jpeg', 'Toy', '185', '250', '199', '2022-11-30 22:24:48', '2022-11-30 22:24:48'),
(6, 'Supper Mario', 'This is a Supper Mario for kids.', 'IMG-63882cc79bf76.jpeg', 'Toy', '145', '236', '210', '2022-11-30 22:25:43', '2022-11-30 22:25:43'),
(7, 'Bear', 'This is a Bear for kids.', 'IMG-63882d0e061c0.jpg', 'Toy', '145', '420', '399', '2022-11-30 22:26:54', '2022-11-30 22:26:54'),
(8, 'Pop Fidge Sensory Toy', 'Pop Fidge Sensory Toy', 'IMG-638830a4f1684.jpg', 'Toy', '20', '150', '119', '2022-11-30 22:42:12', '2022-11-30 22:42:12'),
(9, 'Cube', 'This is a cube.', 'IMG-6388310622e66.webp', 'Toy', '35', '700', '499', '2022-11-30 22:43:50', '2023-01-01 08:26:59'),
(10, 'Little vehicle scooter', 'This is a Little vehicle scooter.', 'IMG-638831364cd6a.jpg', 'Car', '145', '3000', '2500', '2022-11-30 22:44:38', '2022-11-30 22:44:38'),
(12, 'Headphone', 'This is a HeadPhone', 'IMG-63b5220a5dcc1.jfif', 'HeadPhone', '52', '520', '499', '2023-01-04 00:51:54', '2023-01-04 00:51:54'),
(13, 'Jersey of Argentina', 'Jersey of Argentina', 'IMG-63b5225b92c98.jpg', 'Jersey', '200', '500', '450', '2023-01-04 00:53:15', '2023-01-04 00:53:15'),
(14, 'Brazil Jersey', 'Brazil Jersey', 'IMG-63b522779d1e1.jpg', 'Jersey', '52', '520', '499', '2023-01-04 00:53:43', '2023-01-04 00:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6vQ9yBZlBEWQIj3PGfREJhp3vl5bd8F4JMkmR9Zy', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTWZUUlZiU0hVNzRQRWVmRjVGeGRibHJPVkhva3UzcWZHZVBRZWpucCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wcm9kdWN0cyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1672815248);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '0', '01738844520', 'asdfdsfdsfds', '2023-01-31 17:43:32', '$2y$10$64VPB6bNgkjLWp9o3raUFuUzVdqeaDwnTpKqV/XLb7isy9lfoz4r.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-30 00:25:04', '2022-11-30 00:25:04'),
(2, 'admin', 'admin@gmail.com', '1', '01738844520', 'asdfdsfdsfds', '2023-01-30 17:44:01', '$2y$10$p3DJgFWjhPG2SS7Haj4HG.mm8x3kyLPEQcJARTyAoWd36tsv/pKy2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-30 00:26:07', '2022-11-30 00:26:07'),
(3, 'Amit Dey', 'amitdey9020@gmail.com', '0', '01867134455', 'Halishaher', '2023-01-03 11:48:51', '$2y$10$fbgcrbsOousPC2E5NrKFze00x6k6.aGyoQTXnQlj4ubF06l1r4yyq', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-03 11:44:57', '2023-01-03 11:48:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
