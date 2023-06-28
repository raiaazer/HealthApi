-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2023 at 08:29 AM
-- Server version: 8.0.30
-- PHP Version: 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `calculator_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `calculator_name`, `title`, `description`, `created_at`, `updated_at`) VALUES
(7, 'Sugar Level', 'sjjfdsfd', 'gdfgfdsgfsdhsfghgfjhgdjhkghggggggggggggggggggggggggggggggggggggga', '2023-06-07 07:07:45', '2023-06-09 01:05:50'),
(8, 'Heart Rate', 'title', 'des', '2023-06-09 00:24:38', '2023-06-09 00:31:05'),
(9, 'BMI', 'title2', 'des2', '2023-06-09 00:30:50', '2023-06-09 00:30:50'),
(10, 'Blood Pressure', 'title5', 'des5', '2023-06-09 00:31:37', '2023-06-09 00:31:37'),
(11, 'Calorie Calculator', 'ttt', 'ddd', '2023-06-09 01:07:50', '2023-06-09 01:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_07_091532_create_categories_table', 2),
(7, '2023_06_08_073436_create_recipes_table', 3),
(9, '2023_06_21_115629_create_userprofiles_table', 4),
(10, '2014_10_12_000000_create_users_table', 5);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 2, 'api_token', 'a67bdbddaee5029a064a82e7b60dfacde52a11cdf20dd90cb2d342fd1b1ec425', '[\"*\"]', NULL, NULL, '2023-06-22 02:07:33', '2023-06-22 02:07:33'),
(2, 'App\\Models\\User', 3, 'api_token', 'b447157d2c4812fa670d391526b514cacb5ffdafea27ccebbf32a897b5277e54', '[\"*\"]', NULL, NULL, '2023-06-22 02:15:46', '2023-06-22 02:15:46'),
(3, 'App\\Models\\User', 4, 'api_token', '8c297b5e57a95a7a9cb5a694469307c0cf280f9e27cb2f17026de080a177f9e9', '[\"*\"]', NULL, NULL, '2023-06-22 02:19:41', '2023-06-22 02:19:41'),
(4, 'App\\Models\\User', 5, 'api_token', '16decfc1bde5927c5dcf455ee7ad29ef2540cfeb2e4c3c5cb67076b12a127994', '[\"*\"]', NULL, NULL, '2023-06-22 02:23:39', '2023-06-22 02:23:39'),
(5, 'App\\Models\\User', 6, 'api_token', '50f5d084367c4896b0fcf8a60b51d19a30bd3558a5c1e77e64518587e3e5ec66', '[\"*\"]', NULL, NULL, '2023-06-22 02:30:42', '2023-06-22 02:30:42'),
(6, 'App\\Models\\User', 7, 'api_token', '2e11247cb0ec381b2a580d524e50191e107f94c092db6b32371b33e6e300ec30', '[\"*\"]', NULL, NULL, '2023-06-22 02:33:31', '2023-06-22 02:33:31'),
(7, 'App\\Models\\User', 8, 'api_token', '075f620be249f0ca4f02f6f23df4602ef1570867f088ddc07375a1f73fb862a5', '[\"*\"]', NULL, NULL, '2023-06-22 02:37:06', '2023-06-22 02:37:06'),
(8, 'App\\Models\\User', 9, 'api_token', '1aec4c69db9c4e5538023f9c80d49a9f2380f3acae32c3e779624c1fe068389f', '[\"*\"]', NULL, NULL, '2023-06-22 02:38:48', '2023-06-22 02:38:48'),
(9, 'App\\Models\\User', 10, 'api_token', '2d644b60d5d3569ceee961c4beffb2f6c07864c7c5f74f1c7492854f4504c082', '[\"*\"]', NULL, NULL, '2023-06-22 02:41:50', '2023-06-22 02:41:50'),
(10, 'App\\Models\\User', 11, 'api_token', '78660dbdfad055e369941c948f4dc7920c6026bd60c93dc848e6c6a9c851767c', '[\"*\"]', NULL, NULL, '2023-06-22 02:51:16', '2023-06-22 02:51:16'),
(11, 'App\\Models\\User', 12, 'api_token', 'e051fee84a341689fe9a31eba0da28d4fb3f53dc6e4de8f0aca9ad77170629a0', '[\"*\"]', NULL, NULL, '2023-06-22 02:51:58', '2023-06-22 02:51:58'),
(12, 'App\\Models\\User', 12, 'api_token', '919813292afb8caff0a2684858efa0e1f3cce52e91be624576348a7a55baec8b', '[\"*\"]', NULL, NULL, '2023-06-22 02:51:58', '2023-06-22 02:51:58'),
(13, 'App\\Models\\User', 13, 'api_token', 'a0322f817bb1f0c0b22a4297a256d03ae420d9d3c2d2f2a407fafbeff35a448e', '[\"*\"]', NULL, NULL, '2023-06-22 03:12:58', '2023-06-22 03:12:58'),
(14, 'App\\Models\\User', 13, 'api_token', 'f9bb2458430f7e6525722ae5b2c3891218b348b3aab55a621ba426fbd320ec20', '[\"*\"]', NULL, NULL, '2023-06-22 03:12:58', '2023-06-22 03:12:58'),
(15, 'App\\Models\\User', 14, 'api_token', 'e7e1995a4f0ed23ad43de38382c4bc9cd79d1505bbda77ce16ba5ee50d52b613', '[\"*\"]', NULL, NULL, '2023-06-22 03:15:34', '2023-06-22 03:15:34'),
(16, 'App\\Models\\User', 14, 'api_token', '06e9dc71c0552384c6d9e1a2c344d0c35edf189dc9ca73960c00dd9f5bcf9c9a', '[\"*\"]', NULL, NULL, '2023-06-22 03:15:34', '2023-06-22 03:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calculator_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int NOT NULL,
  `serving` int NOT NULL,
  `calories` int NOT NULL,
  `net_carbs` int NOT NULL,
  `carbs` int NOT NULL,
  `fat` int NOT NULL,
  `proteins` int NOT NULL,
  `nutrients` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `calculator_name`, `ingredients`, `instructions`, `time`, `serving`, `calories`, `net_carbs`, `carbs`, `fat`, `proteins`, `nutrients`, `benefits`, `thumbnail`, `created_at`, `updated_at`) VALUES
(8, 'recipe 1', 'BMI', 'burger1', 'jkjhjkhkhkjj', 78, 6876, 876, 876876, 876, 876876, 78687, '6kjkjjkh', 'kjhj', 'recipe-images/LJShTDS0BPK0J3C2OduotZrNn7p9lWHY1OPLAK1U.jpg', '2023-06-08 08:20:48', '2023-06-09 01:02:29'),
(9, 'recipe 1345', 'BMR', 'burger133', 'jkjhjkhkhkjj', 7833, 6876333, 87633, 33, 876, 333456, 3345, '6kjkjjkh33', 'kjhj3', 'recipe-images/z3vcmQuFNGn1uxdXypBp2ulPBzZKMHKU7llPfB4f.jpg', '2023-06-08 08:21:20', '2023-06-09 01:02:42'),
(10, 'h', 'Heart Rate', 'jkh', 'jh', 67, 57, 6576, 567, 567, 57, 65, '76df', 'sdgfdfsg', 'recipe-images/xEtXd3LTOhW7wk28DslOmidNNIW9VushSAagBj2g.jpg', '2023-06-09 00:58:58', '2023-06-09 01:02:51'),
(11, 'HealthCare', 'Sugar Level', 'jkh', 'jh', 67, 57, 6576, 567, 567, 57, 65, '76df', 'sdgfdfsg', 'recipe-images/qfMxTBodBulWR7kuFf0EKx3CFUKpIWQxYaC329HL.jpg', '2023-06-09 00:59:24', '2023-06-09 01:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `userprofiles`
--

CREATE TABLE `userprofiles` (
  `id` bigint UNSIGNED NOT NULL,
  `user_type` enum('regular','premium') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'regular',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_o_b` date DEFAULT NULL,
  `height` int DEFAULT NULL,
  `height_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` int DEFAULT NULL,
  `weight_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `user_type` enum('regular','premium') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'regular',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint NOT NULL DEFAULT '0',
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_o_b` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` int DEFAULT NULL,
  `height_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` int DEFAULT NULL,
  `weight_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `email_verified_at`, `password`, `role`, `phone`, `d_o_b`, `height`, `height_unit`, `weight`, `weight_unit`, `gender`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'regular', 'Admin', 'admin@gmail.com', NULL, '$2y$10$.H.veRFSEnJ0ROXNZTMQb.Fzdkkh8noWOiTWhnThAV8qCB4uhTR9C', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 01:43:57', '2023-06-22 01:43:57'),
(2, 'regular', 'ali', 'ali@gmail.com', NULL, '$2y$10$DYdC1TWmVPOMr5ZwOdcZVeGUrsDCTXLatUVtEb.gMSTzsfGGzNYvS', 0, '456547567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 02:07:33', '2023-06-22 02:07:33'),
(3, 'regular', 'wasif', 'wasif@gmail.com', NULL, '$2y$10$ypYWStpRpYvcedgSLhoGku39GUDEh44kICBouHPyzYHD3BQIbRYEu', 0, '456547567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 02:15:46', '2023-06-22 02:15:46'),
(4, 'regular', 'wasifb', 'wasifbb@gmail.com', NULL, '$2y$10$Y7C8uRmexuY40BDw2egBzujvwiXFGo0imH8vEMXLIMd0bocZo.LWy', 0, '456547567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 02:19:41', '2023-06-22 02:19:41'),
(5, 'regular', 'wwww', 'wwww@gmail.com', NULL, '$2y$10$sAq9BvtofKVKeKlpmoTewupllYkQ2yrTi7aPCI6GmLrMnzd9RsIji', 0, '456547567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 02:23:39', '2023-06-22 02:23:39'),
(6, 'regular', 'w11w', '11@gmail.com', NULL, '$2y$10$eJbK366MjbFk7UnuPR.eHuZ3EVmGDwL04rd12cKlrujAFmOp4hBNm', 0, '456547567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 02:30:42', '2023-06-22 02:30:42'),
(7, 'regular', 'w1331w', '1133@gmail.com', NULL, '$2y$10$obqk8e418ElatYhHnPZv0ewvZ3hbLTc7Fv5dt61I8A70Q3IQBjpHC', 0, '456547567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 02:33:31', '2023-06-22 02:33:31'),
(8, 'regular', 'w1331w', '113333@gmail.com', NULL, '$2y$10$Fh0ACcslucDXEjJTJ3GPiOhBRIAH2f2rRdC/u1QICaEBCIXuBMHiG', 0, '456547567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 02:37:06', '2023-06-22 02:37:06'),
(9, 'regular', 'w1331w', '1135333@gmail.com', NULL, '$2y$10$CUX5hv0sBuXjGkPpIg8dU.JD538rKWaQgz.lToYn9JdiKv.j5Kpg6', 0, '456547567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 02:38:48', '2023-06-22 02:38:48'),
(10, 'regular', 'w1331w', 'giggg@gmail.com', NULL, '$2y$10$UQYmEc4qJGoBwb4OaIEN/OTRU8I5PrFK4zhjDTsPm.04hIQlNvEoK', 0, '456547567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 02:41:50', '2023-06-22 02:41:50'),
(11, 'regular', 'w1331w', '1@gmail.com', NULL, '$2y$10$rXjDFAUYM7KnPrwblq3Gsu30YcKoaESR8r1uBVl2F3J0kobEAdwY.', 0, '456547567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 02:51:16', '2023-06-22 02:51:16'),
(12, 'regular', 'w1331w', '2@gmail.com', NULL, '$2y$10$n6LF9E/sHKeMhuzBdkxFgergfExT0bAHUbn.OvaVaQ9MeMOvr/9MW', 0, '456547567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 02:51:58', '2023-06-22 02:51:58'),
(13, 'regular', 'w1331w', '3@gmail.com', NULL, '$2y$10$4O9DrrthA8gIN4D1YxkARe/bkPX2FjE.P.l.6l6PmXKqTrE5gJtxi', 0, '456547567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 03:12:58', '2023-06-22 03:12:58'),
(14, 'regular', '4', '4@gmail.com', NULL, '$2y$10$81gKXnAA09g.mSViqi8PIeKxcUeYVY2bE74zhQOKD4iqSZS.rCs8O', 0, '456547567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-22 03:15:34', '2023-06-22 03:15:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofiles`
--
ALTER TABLE `userprofiles`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userprofiles`
--
ALTER TABLE `userprofiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
