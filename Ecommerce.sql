-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 02:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Product_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `name`, `email`, `phone`, `address`, `product_title`, `quantity`, `price`, `image`, `Product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(20, 'userkripa3', 'userkripa3@gmail.com', '9808695653', 'Abd', 'Felt slippers', '2', '12', '1700267349.jpg', '4', '4', '2023-11-19 09:16:14', '2023-11-19 09:16:14'),
(29, 'userkripa1', 'userkripa1@gmail.com', '9808695651', 'Aba', 'Felt slippers', '2', '12', '1700267349.jpg', '4', '2', '2023-11-25 02:17:51', '2023-11-25 02:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(2, 'dress', '2023-11-17 18:37:45', '2023-11-17 18:37:45'),
(3, 'shoes', '2023-11-17 18:37:51', '2023-11-17 18:37:51'),
(4, 'Decor', '2023-11-17 18:38:11', '2023-11-17 18:38:11'),
(5, 'Incense', '2023-11-17 18:38:21', '2023-11-17 18:38:21'),
(6, 'treats', '2023-11-17 18:44:54', '2023-11-17 18:44:54'),
(9, 'mask', '2023-11-19 08:22:53', '2023-11-19 08:22:53');

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
(9, '2014_10_12_000000_create_users_table', 1),
(15, '2023_10_05_024041_create_categories_table', 1),
(16, '2023_10_07_071000_create_products_table', 1),
(17, '2023_11_18_072721_create_carts_table', 2),
(18, '2023_11_18_101628_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Product_id` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `delivery_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `product_title`, `quantity`, `price`, `image`, `Product_id`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(16, 'userkripa3', 'userkripa3@gmail.com', '9808695653', 'Abd', '4', 'Frog Ball', '2', '4', '1700267292.jpg', '3', 'cash on delivery', 'delivered', '2023-11-19 09:15:42', '2023-11-19 13:42:36'),
(19, 'userkripa1', 'userkripa1@gmail.com', '9808695651', 'Aba', '2', 'Frog Ball', '2', '4', '1700267292.jpg', '3', 'Paid using cards', 'delivered', '2023-11-19 10:32:53', '2023-11-19 13:53:10'),
(22, 'userkripa1', 'userkripa1@gmail.com', '9808695651', 'Aba', '2', 'santa', '2', '2', '1700267196.jpg', '2', 'cash on delivery', 'processing', '2023-11-19 20:06:49', '2023-11-19 20:06:49'),
(24, 'userkripa1', 'userkripa1@gmail.com', '9808695651', 'Aba', '2', 'Frog Ball', '3', '6', '1700267292.jpg', '3', 'Paid using cards', 'processing', '2023-11-22 06:49:37', '2023-11-22 06:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `category`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(2, 'santa', 'Christmas theme', '1700267196.jpg', 'Decor', '3', '1', '2023-11-17 18:41:36', '2023-11-17 18:41:36'),
(3, 'Frog Ball', 'ecofriendly', '1700267292.jpg', 'Decor', '3', '2', '2023-11-17 18:43:12', '2023-11-17 18:43:12'),
(4, 'Felt slippers', 'Sustainable', '1700267349.jpg', 'shoes', '2', '6', '2023-11-17 18:44:10', '2023-11-17 18:44:10'),
(7, 'Felt Coaster', 'ecofriendly', '1700267575.jpg', 'Decor', '6', '4', '2023-11-17 18:47:55', '2023-11-17 18:47:55'),
(8, 'Shawl', 'ecofriendly', '1700895958.jpg', 'dress', '6', '20', '2023-11-17 21:04:03', '2023-11-25 01:20:58'),
(9, 'Dog chew', 'Pet treats', '1700275775.jpg', 'treats', '4', '15', '2023-11-17 21:04:35', '2023-11-17 21:04:35'),
(13, 'Bhairav', 'Wooden mask', '1700402818.jpg', 'Decor', '3', '20', '2023-11-19 08:21:58', '2023-11-19 08:21:58');

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
(1, 'adminkripa1', 'adminkripa1@gmail.com', '1', '9808695659', 'Tulachhen', '2023-11-10 07:09:28', '---', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-17 18:33:49', '2023-11-17 18:33:49'),
(2, 'userkripa1', 'userkripa1@gmail.com', '0', '9808695651', 'Aba', '2023-11-09 07:09:58', '---', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-17 20:53:42', '2023-11-17 20:53:42'),
(3, 'userkripa2', 'userkripa2@gmail.com', '0', '9808695652', 'Abb', '2023-11-08 07:10:16', '---', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-18 04:18:02', '2023-11-18 04:18:02'),
(8, 'userkripa4', 'kripadotkhwalapala@gmail.com', '0', '9808695653', 'Abc', '2023-11-20 01:18:51', '---', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-20 01:18:06', '2023-11-20 01:18:51'),
(9, 'adminkripa4', 'abcde@gmail.com', '0', '7894561230', 'ktm', NULL, '---', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-25 03:03:04', '2023-11-25 03:03:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
