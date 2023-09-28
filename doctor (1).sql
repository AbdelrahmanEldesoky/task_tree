-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 09:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to Your Health Center', 'Aenean luctus lobortis tellus, vel ornare enim molestie condimentum. Curabitur lacinia nisi vitae velit volutpat venenatis.\n\n            Sed a dignissim lacus. Quisque fermentum est non orci commodo, a luctus urna mattis. Ut placerat, diam a tempus vehicula', 'about-bg.jpg', '2023-09-27 18:13:08', '2023-09-27 18:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$eSbHAEejoccDd7CLM1X56OtNPYoKy8iqE5JQDebdRit53QkDSiIIi', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `advices`
--

CREATE TABLE `advices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title1` varchar(191) NOT NULL,
  `advices1` varchar(191) NOT NULL,
  `title2` varchar(191) NOT NULL,
  `advices2` varchar(191) NOT NULL,
  `title3` varchar(191) NOT NULL,
  `advices3` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advices`
--

INSERT INTO `advices` (`id`, `title1`, `advices1`, `title2`, `advices2`, `title3`, `advices3`, `created_at`, `updated_at`) VALUES
(1, 'Let\'s make your life happier', 'Healthy Living', 'Aenean luctus lobortis tellus', 'New Lifestyle', 'Pellentesque nec libero nisi', 'Your Health Benefits', '2023-09-27 18:13:08', '2023-09-27 18:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `from` date NOT NULL,
  `status` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doctor_id`, `user_id`, `from`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2023-09-06', 'cancel', '2023-09-28 00:43:36', '2023-09-28 03:53:17'),
(2, 9, 2, '2023-09-12', 'done', '2023-09-28 03:33:15', '2023-09-28 03:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `facebook` varchar(191) NOT NULL,
  `linkedIn` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `map` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `facebook`, `linkedIn`, `description`, `map`, `created_at`, `updated_at`) VALUES
(1, 'Health Center', '01200816003', 'https://www.facebook.com/abdu.mascherino', 'https://www.linkedin.com/in/abdelrahman-el-desoky-b926391b8/', 'Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13646.64043407445!2d29.9496385!3d31.2301448!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c5aa27fa73d3%3A0x6e4c61f46e42a7ce!2sTREE%20Marketing!5e0!3m2!1sar!2seg!4v1695858153731!5m2!1sar!2seg', '2023-09-27 18:13:08', '2023-09-27 18:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed Said ElGamal', 'M.Said@gmail.com', '012115077789', NULL, '$2y$10$lpoCn2BC9n.h.t5MBadYv.k9jIsnt8Y0j.8J0lXip/LV1VoHvE8pG', NULL, '2023-09-27 19:24:03', '2023-09-27 19:24:03'),
(3, 'Doctor Ayman El Azony', 'AymanElAzony@gmail.com', '0124478964411', NULL, '$2y$10$uchDjarPBZ8r8INNFfor/.j9pEUesSuRPv6SWC2Fvz2ocaXzyDgQ6', NULL, '2023-09-27 19:26:42', '2023-09-27 19:26:42'),
(4, 'Doctor Eman Tantawy', 'Dr.Eman_Tantawy@gmai.com', '011588896222', NULL, '$2y$10$ogwr2/48Va1HbFRlenSZUO6TfNNVNXf7MuyejN99hGJI7Ol7I0nMO', NULL, '2023-09-27 19:27:32', '2023-09-27 19:27:32'),
(5, 'Doctor Mohamed Sobhy', 'Mohamed_Sobhy@gmail.com', '010115599887', NULL, '$2y$10$zM0UhDVWN.i7YCS4KUbja.4rKadtn.fsQd0VVODjB9clhvxPTCYue', NULL, '2023-09-27 19:32:18', '2023-09-27 19:32:18'),
(9, 'Abdu', 'dev.desoky@gmail.com', '01200816003', NULL, '$2y$10$myaLEB6px/3VzIG/GjZsX.HPsp8eK1LlUxgLkUMLFglrPqECsik4a', NULL, '2023-09-28 02:55:50', '2023-09-28 02:55:50'),
(10, 'kkjfhfgy', 'wdw@dw.com', '451845123', NULL, '$2y$10$XwXmnKakNdJPlp2pkjLeTeC.OaRUF7DD2TvaUe24Kn96m8P6ZU6vC', NULL, '2023-09-28 03:38:24', '2023-09-28 03:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `title_job` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `specialities` varchar(191) DEFAULT NULL,
  `state` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `created_at`, `updated_at`, `doctor_id`, `title_job`, `description`, `about`, `specialities`, `state`, `image`) VALUES
(1, '2023-09-27 19:24:03', '2023-09-28 03:58:37', 1, 'lkjhgf', 'lkjhgfd', 'lkjhgf', 'Chest and Respiratory', 'male', 'default_male.jpg'),
(3, '2023-09-27 19:26:42', '2023-09-27 19:26:42', 3, NULL, NULL, NULL, 'Neurology', 'male', 'default_male.jpg'),
(4, '2023-09-27 19:27:32', '2023-09-27 19:27:32', 4, NULL, NULL, NULL, 'Cardiology and Thoracic Surgery', 'female', 'default_female.jpg'),
(5, '2023-09-27 19:32:18', '2023-09-27 19:32:18', 5, NULL, NULL, NULL, 'Ear, Nose and Throat', 'male', 'default_male.jpg'),
(9, '2023-09-28 02:55:50', '2023-09-28 03:59:30', 9, 'lkjhgf', 'lkjhgfd', 'lkjhgf', 'Chest and Respiratory', 'male', 'default_male.jpg'),
(10, '2023-09-28 03:38:24', '2023-09-28 03:38:24', 10, NULL, NULL, NULL, 'wdwwdwdwd', 'male', 'default_male.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'cc', '4444', '5656q56', '65656', '2023-09-27 20:33:38', '2023-09-27 20:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(94, '2014_10_12_000000_create_users_table', 1),
(95, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(96, '2014_10_12_100000_create_password_resets_table', 1),
(97, '2019_08_19_000000_create_failed_jobs_table', 1),
(98, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(99, '2023_09_26_121908_create_admins_table', 1),
(100, '2023_09_26_185712_create_doctors_table', 1),
(101, '2023_09_26_185713_create_informations_table', 1),
(102, '2023_09_26_185741_create_appointments_table', 1),
(103, '2023_09_26_185742_create_news_table', 1),
(104, '2023_09_26_185822_create_abouts_table', 1),
(105, '2023_09_26_191007_create_contacts_table', 1),
(106, '2023_09_26_191007_create_messages_table', 1),
(107, '2023_09_27_210110_create_advices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'How Targeted Drugs Can Vanquish a Virulent Leukemia', 'For patients with acute myeloid leukemia (AML), especially those who are older or have relapsed/refractory disease, standard chemotherapy treatments often', '2023-09-27 20:03:51', '2023-09-27 20:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dcdcd', '5555', 'a@a.com', NULL, '$2y$10$eSbHAEejoccDd7CLM1X56OtNPYoKy8iqE5JQDebdRit53QkDSiIIi', NULL, NULL, NULL),
(2, 'name', '11111111', 'abduhamada6@gmail.com', NULL, '$2y$10$eOIntOPAPglhReZN7eIyBu5vGrmLnym/Rf22xoM9jGfrl6hPQPH.W', NULL, '2023-09-28 03:32:09', '2023-09-28 03:32:09'),
(3, 'feefe', '5555', 'dwd@dd.com', NULL, '$2y$10$YJ8oOeluIXU2XKYiuxW9.upfOj45.cbmYwQ9nYjUY2GoXi65/vwAC', NULL, '2023-09-28 03:34:19', '2023-09-28 03:34:19'),
(4, 'lkjhgf', '5555', 'wd@dd.com', NULL, '$2y$10$oqeEAESXtxC1.OJcR..Sw.O3H.AGap4O2Q0nSCzXlzW7sX2Lvc0qO', NULL, '2023-09-28 03:35:10', '2023-09-28 03:35:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `advices`
--
ALTER TABLE `advices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_doctor_id_foreign` (`doctor_id`),
  ADD KEY `appointments_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`),
  ADD UNIQUE KEY `doctors_phone_unique` (`phone`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `informations_doctor_id_foreign` (`doctor_id`);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advices`
--
ALTER TABLE `advices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `informations`
--
ALTER TABLE `informations`
  ADD CONSTRAINT `informations_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
