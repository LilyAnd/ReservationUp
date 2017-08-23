-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2017 at 05:26 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_roles` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `id_roles`, `address`, `phone_number`, `gender`, `start_time`, `end_time`) VALUES
(4, 'Mikan Akane', 'mikan@gmail.com', '$2y$10$eQ1hGjEnvDhhmL2nHpmzYOxt3RLTSk0szOD7BJwFLtXmku5cj6g/O', NULL, NULL, NULL, 2, 'Minato', '098765432123', 'Male', '10:30:00', '22:00:00'),
(5, 'Suika', 'suika@gmail.com', '$2y$10$eQ1hGjEnvDhhmL2nHpmzYOxt3RLTSk0szOD7BJwFLtXmku5cj6g/O', NULL, NULL, NULL, 2, 'Kyoto', '098767876543', 'Male', '08:00:00', '19:00:00'),
(6, 'Mayu', 'mayu@gmail.com', '$2y$10$eQ1hGjEnvDhhmL2nHpmzYOxt3RLTSk0szOD7BJwFLtXmku5cj6g/O', NULL, NULL, NULL, 2, 'Hakkaido', '019876543222', 'Female', '09:00:00', '22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id_item` int(11) NOT NULL,
  `item_name` varchar(255) COLLATE eucjpms_bin NOT NULL,
  `item_stock` int(11) NOT NULL,
  `item_price` float NOT NULL,
  `id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=eucjpms COLLATE=eucjpms_bin;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_item`, `item_name`, `item_stock`, `item_price`, `id`) VALUES
(10, 'buah', 12, 10003, 4),
(11, 'kacang', 12, 2000, 5),
(12, 'Crepe', 12, 20000, 4),
(14, 'Peach', 10, 20000, 5),
(15, 'Berries', 10, 10000, 4),
(16, 'jelly', 100, 1000, 4),
(17, 'Burger', 45, 20000, 4),
(18, 'Blueberry', 11, 20000, 6),
(19, 'Burger', 45, 12000, 5),
(20, 'Nasi Goreng', 12, 12000, 4);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_08_150753_create_admins_table', 2);

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id_reservation` int(11) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `reservation_date` datetime NOT NULL,
  `id_admin` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id_reservation`, `id`, `reservation_date`, `id_admin`) VALUES
(1, 21, '2017-08-08 02:40:52', 4),
(2, 20, '2017-08-22 02:49:56', 4),
(3, 20, '2017-08-23 02:49:56', 4),
(4, 20, '2017-08-23 02:49:56', 4),
(5, 20, '2017-08-01 04:06:21', 4),
(6, 20, '2017-08-17 04:11:42', 6),
(7, 20, '2017-08-24 04:47:21', 5),
(8, 20, '2017-08-24 04:47:21', 5),
(9, 21, '2017-08-08 05:00:32', 5),
(10, 20, '2017-08-25 05:23:11', 6),
(11, 20, '2017-08-24 05:57:50', 4),
(12, 20, '2017-08-25 06:01:08', 4),
(13, 23, '2017-08-24 06:06:42', 5),
(14, 23, '2017-08-24 06:11:34', 4);

-- --------------------------------------------------------

--
-- Table structure for table `reservations_items`
--

CREATE TABLE `reservations_items` (
  `id_reservation` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) DEFAULT NULL,
  `reservation_status` varchar(233) COLLATE eucjpms_bin DEFAULT NULL,
  `alasan` varchar(255) COLLATE eucjpms_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=eucjpms COLLATE=eucjpms_bin;

--
-- Dumping data for table `reservations_items`
--

INSERT INTO `reservations_items` (`id_reservation`, `id_item`, `quantity`, `total_price`, `reservation_status`, `alasan`) VALUES
(1, 10, 1, 40000, 'Ditolak', NULL),
(1, 12, 2, 40000, 'Ditolak', NULL),
(2, 10, 2, NULL, NULL, NULL),
(2, 16, 3, NULL, NULL, NULL),
(3, 10, 2, NULL, NULL, NULL),
(4, 10, 2, 24000, 'Diterima', 'wqqwqw'),
(4, 16, 2, 24000, 'Diterima', 'wqqwqw'),
(4, 20, 2, 24000, 'Diterima', 'wqqwqw'),
(5, 10, 1, 10003, 'Diterima', 'qwerty'),
(6, 18, 12, NULL, NULL, NULL),
(8, 11, 11, 220000, 'Ditolak', 'Terlalu cantik'),
(8, 14, 11, 220000, 'Ditolak', 'Terlalu cantik'),
(9, 11, 2, 20000, 'Ditolak', 'Terlalu Jelek'),
(9, 14, 1, 20000, 'Ditolak', 'Terlalu Jelek'),
(10, 18, 2, NULL, NULL, NULL),
(11, 10, 2, 100000, 'Ditolak', 'fsdsdfdf'),
(11, 12, 5, 100000, 'Ditolak', 'fsdsdfdf'),
(12, 20, 12, NULL, NULL, NULL),
(13, 11, 2, 4000, 'Ditolak', NULL),
(14, 10, 2, 40000, 'Diterima', NULL),
(14, 12, 2, 40000, 'Diterima', NULL),
(14, 15, 2, 40000, 'Diterima', NULL),
(14, 16, 2, 40000, 'Diterima', NULL),
(14, 17, 2, 40000, 'Diterima', NULL),
(30, 15, 1, 20000, 'Diterima', NULL),
(30, 16, 1, 20000, 'Diterima', NULL),
(30, 17, 1, 20000, 'Diterima', NULL),
(31, 11, 1, 40000, 'Ditolak', 'aaa'),
(31, 14, 2, 40000, 'Ditolak', 'aaa'),
(32, 11, 11, NULL, NULL, NULL),
(32, 14, 111, NULL, NULL, NULL),
(33, 11, 8, NULL, NULL, NULL),
(33, 14, 8, NULL, NULL, NULL),
(34, 11, 2, NULL, NULL, NULL),
(34, 14, 2, NULL, NULL, NULL),
(35, 11, 4, NULL, NULL, NULL),
(36, 11, 6, NULL, NULL, NULL),
(36, 14, 9, NULL, NULL, NULL),
(38, 14, 0, NULL, NULL, NULL),
(39, 14, 0, NULL, NULL, NULL),
(40, 11, 9, NULL, NULL, NULL),
(41, 11, 9, NULL, NULL, NULL),
(42, 11, 9, NULL, NULL, NULL),
(43, 11, 9, NULL, NULL, NULL),
(44, 11, 1, NULL, NULL, NULL),
(44, 14, 1, NULL, NULL, NULL),
(45, 11, 1, NULL, NULL, NULL),
(45, 14, 1, NULL, NULL, NULL),
(46, 11, 5, NULL, NULL, NULL),
(47, 10, 1, NULL, NULL, NULL),
(47, 12, 2, NULL, NULL, NULL),
(48, 10, 1, NULL, NULL, NULL),
(48, 12, 2, NULL, NULL, NULL),
(49, 10, 1, NULL, NULL, NULL),
(49, 12, 2, NULL, NULL, NULL),
(49, 15, 4, NULL, NULL, NULL),
(50, 10, 1, NULL, NULL, NULL),
(50, 12, 2, NULL, NULL, NULL),
(50, 15, 4, NULL, NULL, NULL),
(51, 10, 1, NULL, NULL, NULL),
(51, 12, 2, NULL, NULL, NULL),
(51, 15, 4, NULL, NULL, NULL),
(52, 11, 9, NULL, NULL, NULL),
(53, 11, 6, NULL, NULL, NULL),
(54, 11, 6, NULL, NULL, NULL),
(55, 11, 11, NULL, NULL, NULL),
(56, 11, 2, NULL, NULL, NULL),
(57, 11, 1, NULL, NULL, NULL),
(58, 11, 2, NULL, NULL, NULL),
(59, 11, 123, NULL, NULL, NULL),
(60, 11, 789, NULL, NULL, NULL),
(61, 11, 1234, NULL, NULL, NULL),
(62, 11, 1234, NULL, NULL, NULL),
(63, 11, 1234, NULL, NULL, NULL),
(64, 11, 1, NULL, NULL, NULL),
(64, 14, 2, NULL, NULL, NULL),
(65, 11, 2, NULL, NULL, NULL),
(66, 11, 1, NULL, NULL, NULL),
(67, 10, 1, NULL, NULL, NULL),
(68, 10, 1, NULL, NULL, NULL),
(69, 10, 1, NULL, NULL, NULL),
(70, 11, 6, NULL, NULL, NULL),
(71, 10, 12345, NULL, NULL, NULL),
(72, 18, 2, NULL, NULL, NULL),
(73, 18, 6, NULL, NULL, NULL),
(74, 11, 4, NULL, NULL, NULL),
(74, 14, 5, NULL, NULL, NULL),
(75, 10, 1, NULL, NULL, NULL),
(75, 12, 123, NULL, NULL, NULL),
(76, 18, 14, NULL, NULL, NULL),
(77, 18, 3, NULL, NULL, NULL),
(78, 11, 1, NULL, NULL, NULL),
(78, 14, 2, NULL, NULL, NULL),
(79, 11, 1, NULL, NULL, NULL),
(79, 14, 2, NULL, NULL, NULL),
(80, 11, 1, NULL, NULL, NULL),
(80, 14, 2, NULL, NULL, NULL),
(81, 11, 1, NULL, NULL, NULL),
(81, 14, 2, NULL, NULL, NULL),
(82, 11, 1, NULL, NULL, NULL),
(82, 14, 2, NULL, NULL, NULL),
(83, 11, 1, NULL, NULL, NULL),
(83, 14, 2, NULL, NULL, NULL),
(84, 11, 1, NULL, NULL, NULL),
(84, 14, 2, NULL, NULL, NULL),
(85, 11, 1, NULL, NULL, NULL),
(85, 14, 2, NULL, NULL, NULL),
(86, 11, 1, NULL, NULL, NULL),
(86, 14, 2, NULL, NULL, NULL),
(87, 11, 1, NULL, NULL, NULL),
(87, 14, 2, NULL, NULL, NULL),
(88, 11, 1, NULL, NULL, NULL),
(88, 14, 2, NULL, NULL, NULL),
(89, 11, 1, NULL, NULL, NULL),
(89, 14, 2, NULL, NULL, NULL),
(90, 11, 1, NULL, NULL, NULL),
(90, 14, 2, NULL, NULL, NULL),
(91, 11, 1, NULL, NULL, NULL),
(91, 14, 2, NULL, NULL, NULL),
(92, 11, 1, NULL, NULL, NULL),
(92, 14, 2, NULL, NULL, NULL),
(93, 11, 1, NULL, NULL, NULL),
(93, 14, 2, NULL, NULL, NULL),
(94, 11, 1, NULL, NULL, NULL),
(94, 14, 2, NULL, NULL, NULL),
(95, 11, 1, NULL, NULL, NULL),
(95, 14, 2, NULL, NULL, NULL),
(96, 11, 1, NULL, NULL, NULL),
(96, 14, 2, NULL, NULL, NULL),
(97, 11, 1, NULL, NULL, NULL),
(97, 14, 2, NULL, NULL, NULL),
(98, 11, 1, NULL, NULL, NULL),
(98, 14, 2, NULL, NULL, NULL),
(99, 11, 1, NULL, NULL, NULL),
(99, 14, 2, NULL, NULL, NULL),
(100, 11, 2, NULL, NULL, NULL),
(100, 14, 2, NULL, NULL, NULL),
(101, 11, 2, NULL, NULL, NULL),
(101, 14, 2, NULL, NULL, NULL),
(102, 11, 2, NULL, NULL, NULL),
(102, 14, 2, NULL, NULL, NULL),
(103, 11, 2, NULL, NULL, NULL),
(103, 14, 2, NULL, NULL, NULL),
(104, 11, 2, NULL, NULL, NULL),
(104, 14, 2, NULL, NULL, NULL),
(105, 11, 5, NULL, NULL, NULL),
(105, 14, 3, NULL, NULL, NULL),
(106, 11, 5, NULL, NULL, NULL),
(106, 14, 3, NULL, NULL, NULL),
(107, 11, 5, NULL, NULL, NULL),
(107, 14, 3, NULL, NULL, NULL),
(108, 11, 5, NULL, NULL, NULL),
(108, 14, 3, NULL, NULL, NULL),
(109, 11, 5, NULL, NULL, NULL),
(109, 14, 3, NULL, NULL, NULL),
(109, 19, 3, NULL, NULL, NULL),
(110, 11, 5, NULL, NULL, NULL),
(110, 14, 3, NULL, NULL, NULL),
(110, 19, 3, NULL, NULL, NULL),
(111, 11, 5, NULL, NULL, NULL),
(111, 14, 3, NULL, NULL, NULL),
(111, 19, 3, NULL, NULL, NULL),
(112, 11, 5, NULL, NULL, NULL),
(112, 14, 3, NULL, NULL, NULL),
(112, 19, 3, NULL, NULL, NULL),
(113, 11, 5, NULL, NULL, NULL),
(113, 14, 3, NULL, NULL, NULL),
(113, 19, 3, NULL, NULL, NULL),
(114, 11, 5, NULL, NULL, NULL),
(114, 14, 3, NULL, NULL, NULL),
(114, 19, 3, NULL, NULL, NULL),
(115, 11, 5, NULL, NULL, NULL),
(115, 14, 3, NULL, NULL, NULL),
(115, 19, 3, NULL, NULL, NULL),
(116, 11, 5, NULL, NULL, NULL),
(116, 14, 3, NULL, NULL, NULL),
(116, 19, 3, NULL, NULL, NULL),
(117, 11, 5, NULL, NULL, NULL),
(117, 14, 3, NULL, NULL, NULL),
(117, 19, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(10) UNSIGNED NOT NULL,
  `nama_roles` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_roles`, `nama_roles`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_roles` int(10) UNSIGNED DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `id_roles`, `address`, `phone_number`, `gender`) VALUES
(20, 'Lily', 'lily@gmail.com', '$2y$10$VdD7Ljwk1zTlu4MxBq6kaO6EYMr88LeXNGjjdPi.RmDT2EiUrjNba', 'rxqLR1SdhVZ0dniLCswIXBD4AS02POavYmzcT9VoyDlwEhywIclt3SJhHPl3', NULL, NULL, 1, 'Tarutung', '098765432123', 'Female'),
(21, 'Gloria L Hutauruk', 'gloria@gmail.com', '$2y$10$erivrBWrQ/4nEby/BlbgOuTE8cBQEr84GpaX91R4I2fi0KBn7w672', '0pwEFzx4S2FfUQIrOwznc0nsp3VdZ47t5tOSWW810QDs7ejNiJWZaqajUG8b', NULL, NULL, 1, 'Sipoholon Ujung', '087965433456', 'Male'),
(22, 'Sam', 'sam@gmail.com', '$2y$10$EVjfqvm5aJ990jJM5Xx2du9LSIBNTrbLvB/seW7ZAyMpQ8ODnY91C', 'GI0oolLRI32hgkbtO3drCwoOkTJ7nAM0duRT1A13prVt8TNf6rDN0zRHuARz', NULL, NULL, 1, 'Medan', '098767654322', 'Male'),
(23, 'Ben', 'ben@gmail.com', '$2y$10$t1CC6BEgrK7idloz7zG/JeUR.lpNuMFYYCCMIWsxhFaVozEmZhqTa', '0nIiSskSOvbzqTCf4Z55RQqdtYajWPz1afjAmIplKCZnjC2G2qMpn3RWDffy', NULL, NULL, 1, 'Medan', '098765432123', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `id` (`id`),
  ADD KEY `id_roles` (`id_roles`),
  ADD KEY `id_roles_2` (`id_roles`),
  ADD KEY `id_roles_3` (`id_roles`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`),
  ADD KEY `id_4` (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_item` (`id_item`),
  ADD KEY `id_item_2` (`id_item`),
  ADD KEY `id` (`id`);

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
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_reservation` (`id_reservation`),
  ADD KEY `id` (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `reservations_items`
--
ALTER TABLE `reservations_items`
  ADD PRIMARY KEY (`id_reservation`,`id_item`),
  ADD KEY `id_reservation` (`id_reservation`,`id_item`),
  ADD KEY `id_item` (`id_item`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`),
  ADD KEY `id_roles` (`id_roles`),
  ADD KEY `id_roles_2` (`id_roles`),
  ADD KEY `id_roles_3` (`id_roles`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`),
  ADD KEY `id_role` (`id_roles`),
  ADD KEY `id_roles` (`id_roles`),
  ADD KEY `id_roles_2` (`id_roles`),
  ADD KEY `id_roles_3` (`id_roles`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id`);

--
-- Constraints for table `reservations_items`
--
ALTER TABLE `reservations_items`
  ADD CONSTRAINT `reservations_items_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `items` (`id_item`),
  ADD CONSTRAINT `reservations_items_ibfk_2` FOREIGN KEY (`id_reservation`) REFERENCES `reservations` (`id_reservation`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
