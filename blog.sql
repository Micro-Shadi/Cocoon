-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 سبتمبر 2021 الساعة 16:56
-- إصدار الخادم: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- بنية الجدول `baqas`
--

CREATE TABLE `baqas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `baqas`
--

INSERT INTO `baqas` (`id`, `name`, `price`, `detale`, `created_at`, `updated_at`) VALUES
(4, 'أنور أبو عون', '250', 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', '2021-09-10 08:57:59', '2021-09-10 08:57:59'),
(5, 'mahmoud', '390', 'geeeeeeeeeeeeeeeeeeeee', '2021-09-10 08:58:15', '2021-09-10 08:58:15'),
(6, 'ahmad', '790', 'hellow', '2021-09-10 09:10:02', '2021-09-12 10:12:27');

-- --------------------------------------------------------

--
-- بنية الجدول `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'أنور أبو عون', 'anwarabooun53@gmail.com', 'my gud', '2021-09-08 10:46:14', '2021-09-08 10:46:14'),
(2, 'ahmad', 'mahhndy@hotmail.com', 'hhhhhhhhh', '2021-09-12 11:36:18', '2021-09-12 11:36:18');

-- --------------------------------------------------------

--
-- بنية الجدول `desines`
--

CREATE TABLE `desines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `desines`
--

INSERT INTO `desines` (`id`, `photo`, `title`, `detale`, `created_at`, `updated_at`) VALUES
(2, '/storage/car-imgs/1631273769workers.svg', 'تصميم جرافيك', '\"hiiiiiiiiiiiiiiiiiiiiii\"', '2021-09-10 08:36:09', '2021-09-10 11:59:59'),
(3, '/storage/car-imgs/1631274141employees.svg', 'mahmoud ahmad Hello', '\"\"hiiiiii mahmoud\"\"', '2021-09-10 08:41:34', '2021-09-12 11:34:36'),
(5, '/storage/car-imgs/1631457326design.svg', 'تصميم جرافيك', 'khgjkhhgkjghjhghgj', '2021-09-12 11:35:26', '2021-09-12 11:35:26');

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
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
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_09_02_170144_create_sessions_table', 1),
(7, '2021_09_02_180341_create_desines_table', 1),
(8, '2021_09_02_180531_create_talabs_table', 1),
(9, '2021_09_02_180602_create_contacts_table', 1),
(10, '2021_09_05_220959_add_rol_to_users_table', 1),
(11, '2021_09_09_122135_create_baqas_table', 2),
(12, '2021_09_09_224007_create_programes_table', 3),
(13, '2021_09_10_085138_create_tasweqs_table', 4),
(14, '2021_09_10_123628_create_veds_table', 5),
(15, '2021_09_11_110228_create_parts_table', 6);

-- --------------------------------------------------------

--
-- بنية الجدول `parts`
--

CREATE TABLE `parts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `parts`
--

INSERT INTO `parts` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'mahmoud991000@hotmail.com', '2021-09-11 11:01:52', '2021-09-11 11:01:52'),
(5, 'anwarabooun53@gmail.com', '2021-09-12 11:37:08', '2021-09-12 11:37:08');

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `personal_access_tokens`
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
-- بنية الجدول `programes`
--

CREATE TABLE `programes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `programes`
--

INSERT INTO `programes` (`id`, `photo`, `name`, `detale`, `created_at`, `updated_at`) VALUES
(3, '/storage/prog-imgs/1631275134employees.svg', 'أنور أبو عون', '\"hiiiiiiiiiiiiiiiiiiiiiiiiiiii\"', '2021-09-10 08:58:54', '2021-09-10 12:29:06'),
(4, '/storage/prog-imgs/1631275151dimond.svg', 'ahmad', 'geeeeeeeeeeeeeeeee', '2021-09-10 08:59:11', '2021-09-10 08:59:11');

-- --------------------------------------------------------

--
-- بنية الجدول `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6ShCqNH1JfOu8YaeLhbFKsRWFr3MyEmdjDET0ATO', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTo2OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6IkJCY0V0TUM2RnhBZXJPSXdweVRLZmdwUXNPVUxjSjR3ejI0SzNYbXQiO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkNXVmZ3R2dnQ1Z1Q3dGlSUXBBeG82dWlDTWU0WDVtQzVJYmRPcy81bUM4MHcxR09OVE5MeHkiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1631458418);

-- --------------------------------------------------------

--
-- بنية الجدول `talabs`
--

CREATE TABLE `talabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serves` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commerc_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mob` int(14) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `talabs`
--

INSERT INTO `talabs` (`id`, `serves`, `name`, `commerc_name`, `mob`, `email`, `detale`, `created_at`, `updated_at`) VALUES
(7, 'SEO تهيئة محركات البحث', 'أنور أبو عون', 'الهندي', 5555555, 'mahhndy@hotmail.com', 'kkkkkkkkkkkkkkkkkkkkk', '2021-09-12 11:17:08', '2021-09-12 11:17:08'),
(10, 'اعداد الخطط التسويقية', 'أنور أبو عون', 'الهندي', 5555555, 'mahhndy@hotmail.com', 'hhhhhhhhhhhhhhhhhhhhhhh', '2021-09-12 11:20:10', '2021-09-12 11:20:10'),
(11, 'إدارة مواقع التواصل الاجتماعي', 'ahmad', 'الهندي', 595200380, 'mahmoud9910006232@hotmail.com', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '2021-09-12 11:22:47', '2021-09-12 11:22:47'),
(12, 'إدارة مواقع التواصل الاجتماعي', 'mahmoud', 'الهندي', 564879563, 'mahmoud991000@hotmail.com', 'lllllllllllllllllllllllll', '2021-09-12 11:32:14', '2021-09-12 11:32:14');

-- --------------------------------------------------------

--
-- بنية الجدول `tasweqs`
--

CREATE TABLE `tasweqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `tasweqs`
--

INSERT INTO `tasweqs` (`id`, `photo`, `name`, `detale`, `created_at`, `updated_at`) VALUES
(4, '/storage/tas-imgs/1631275363circle.svg', 'أنور أبو عون', 'hiiiiiiiiiiiiiiiiiiiiiiii', '2021-09-10 09:02:43', '2021-09-10 09:02:43'),
(5, '/storage/tas-imgs/1631275389phone.svg', 'mahmoud', 'geeeeeeeeeeeeeee', '2021-09-10 09:03:09', '2021-09-10 09:03:09');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` int(2) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `rol`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(3, 'anwar', NULL, 'anwarabooun53@gmail.com', NULL, '$2y$10$5ufgtvvt5gT7tiRQpAxo6uiCMe4X5mC5IbdOs/5mC80w1GONTNLxy', NULL, NULL, NULL, NULL, NULL, '2021-09-12 11:50:38', '2021-09-12 11:50:38');

-- --------------------------------------------------------

--
-- بنية الجدول `veds`
--

CREATE TABLE `veds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vedo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `veds`
--

INSERT INTO `veds` (`id`, `vedo`, `created_at`, `updated_at`) VALUES
(10, '/storage/vedo-imgs/16313551523.mp4', '2021-09-11 07:12:32', '2021-09-11 07:12:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baqas`
--
ALTER TABLE `baqas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desines`
--
ALTER TABLE `desines`
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
-- Indexes for table `parts`
--
ALTER TABLE `parts`
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
-- Indexes for table `programes`
--
ALTER TABLE `programes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `talabs`
--
ALTER TABLE `talabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasweqs`
--
ALTER TABLE `tasweqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `veds`
--
ALTER TABLE `veds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baqas`
--
ALTER TABLE `baqas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `desines`
--
ALTER TABLE `desines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programes`
--
ALTER TABLE `programes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `talabs`
--
ALTER TABLE `talabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tasweqs`
--
ALTER TABLE `tasweqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `veds`
--
ALTER TABLE `veds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
