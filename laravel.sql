-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2025 at 02:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` blob DEFAULT NULL,
  `expiration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `expiration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) DEFAULT NULL,
  `connection` text DEFAULT NULL,
  `queue` text DEFAULT NULL,
  `payload` longtext DEFAULT NULL,
  `exception` longtext DEFAULT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) DEFAULT NULL,
  `payload` longtext DEFAULT NULL,
  `attempts` tinyint(3) UNSIGNED DEFAULT NULL,
  `reserved_at` int(11) DEFAULT NULL,
  `available_at` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--
-- Error reading structure for table laravel.job_batches: #1932 - Table &#039;laravel.job_batches&#039; doesn&#039;t exist in engine
-- Error reading data for table laravel.job_batches: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `laravel`.`job_batches`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(11) NOT NULL,
  `migration` varchar(255) DEFAULT NULL,
  `batch` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text DEFAULT NULL,
  `last_activity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `batch`, `created_at`, `updated_at`) VALUES
(602, 'Prince Kothiya', 'princekothiya1604@gmail.com', '+91 9979936073', 'BSc (IT)', '2025-05-23 10:00:00', '2025-05-23 10:00:00'),
(605, 'Meera Desai', 'meera.d123@gmail.com', '+91 9123456789', 'BCA', '2025-05-23 10:03:00', '2025-05-23 10:03:00'),
(606, 'Arjun Rathi', 'arjun.rathi@hotmail.com', '+91 9001112233', 'BSc (CS)', '2025-05-23 10:04:00', '2025-05-23 10:04:00'),
(607, 'Simran Sethi', 'simran.sethi@yahoo.com', '+91 8899776655', 'BSc (IT)', '2025-05-23 10:05:00', '2025-05-23 10:05:00'),
(608, 'Ishaan Joshi', 'ishaanjoshi25@gmail.com', '+91 9123012345', 'BCA', '2025-05-23 10:06:00', '2025-05-23 10:06:00'),
(609, 'Priya Nair', 'priya.nair19@gmail.com', '+91 9011223344', 'BSc (CS)', '2025-05-23 10:07:00', '2025-05-23 10:07:00'),
(610, 'Karan Mehta', 'karan.m@gmail.com', '+91 9090901234', 'BCA', '2025-05-23 10:08:00', '2025-05-23 10:08:00'),
(611, 'Riya Jain', 'riya.jain_99@gmail.com', '+91 9055567890', 'BSc (IT)', '2025-05-23 10:09:00', '2025-05-23 10:09:00'),
(612, 'Dev Sharma', 'dev.sharma11@gmail.com', '+91 9877654321', 'BCA', '2025-05-23 10:10:00', '2025-05-23 10:10:00'),
(613, 'Anjali Mehta', 'anjali.m24@gmail.com', '+91 9021345678', 'BSc (CS)', '2025-05-23 10:11:00', '2025-05-23 10:11:00'),
(614, 'Aarav Shah', 'aarav.shah87@gmail.com', '+91 9934567810', 'BSc (IT)', '2025-05-23 10:12:00', '2025-05-23 10:12:00'),
(615, 'Sneha Patel', 'sneha.patel@gmail.com', '+91 9003214567', 'BCA', '2025-05-23 10:13:00', '2025-05-23 10:13:00'),
(616, 'Yash Thakkar', 'yash.t@hotmail.com', '+91 9988776655', 'BSc (CS)', '2025-05-23 10:14:00', '2025-05-23 10:14:00'),
(617, 'Divya Rana', 'divyarana123@gmail.com', '+91 9098123456', 'BSc (IT)', '2025-05-23 10:15:00', '2025-05-23 10:15:00'),
(618, 'Aditya Verma', 'aditya.v@outlook.com', '+91 9871234567', 'BCA', '2025-05-23 10:16:00', '2025-05-23 10:16:00'),
(619, 'Nisha Jadhav', 'nisha.j@gmail.com', '+91 9112233445', 'BSc (CS)', '2025-05-23 10:17:00', '2025-05-23 10:17:00'),
(620, 'Siddharth Rao', 'sidd.rao@gmail.com', '+91 9008765432', 'BCA', '2025-05-23 10:18:00', '2025-05-23 10:18:00'),
(621, 'Tanvi Shah', 'tanvishah98@gmail.com', '+91 9445566778', 'BSc (IT)', '2025-05-23 10:19:00', '2025-05-23 10:19:00'),
(622, 'Omkar Patil', 'omkar.patil@gmail.com', '+91 9678564321', 'BSc (CS)', '2025-05-23 10:20:00', '2025-05-23 10:20:00'),
(623, 'Neha Soni', 'neha.soni@gmail.com', '+91 9012456789', 'BCA', '2025-05-23 10:21:00', '2025-05-23 10:21:00'),
(624, 'Rohit Kumar', 'rohitkumar@gmail.com', '+91 9843216789', 'BSc (IT)', '2025-05-23 10:22:00', '2025-05-23 10:22:00'),
(625, 'Aishwarya Raut', 'aish.raut@gmail.com', '+91 9365478210', 'BCA', '2025-05-23 10:23:00', '2025-05-23 10:23:00'),
(626, 'Viraj Vyas', 'viraj.vyas@ymail.com', '+91 9283456123', 'BSc (CS)', '2025-05-23 10:24:00', '2025-05-23 10:24:00'),
(627, 'patel brother', 'patel@gmail.com', '+91 99999999635', '9991', '2025-05-23 13:13:06', '2025-05-23 13:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=628;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
