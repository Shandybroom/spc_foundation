-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2019 at 11:57 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scp_foundation`
--

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@scp.com', '$2y$10$EaRmXKskEOkX6WZI2Nhd9uN7FtqvMiKuiLsVdqykQd2BVTwLedhMK', '2019-08-22 21:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `scp_monsters`
--

CREATE TABLE `scp_monsters` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `alias` varchar(255) NOT NULL DEFAULT '???',
  `code` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `region` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scp_monsters`
--

INSERT INTO `scp_monsters` (`id`, `name`, `alias`, `code`, `class`, `rank`, `region`, `status`, `description`, `file`) VALUES
(1, 'Ogopogo', 'The Misunderstood Lake Monster', 'SCP-001', 'Reptile', 'Normal', 'Danau Okanagan, British Columbia, Kanada', 'Protected', 'Ogopogo diduga sudah terlihat oleh orang pribumi. Deskripsi yang umum mengenai Ogopogo yakni seekor naga laut yang panjangnya berkisar antara 12-15 meter.\r\n\r\nBeberapa cryptozoolog berpendapat makhluk ini adalah sejenis dengan \'cadbosaurus\', cryptid laut yang juga misterius keberadaannya. Asumsi tentang Cadbosaurus jgua diperkuat tentang beberapa kesaksian bahwa \'kepalanya mirip kepala kambing\'. Ogopogo mampu berenang sangat cepat (mencapai 60km perjam).', 'ogopogo.jpg'),
(2, 'Yeti', 'The Bigfoot', 'SCP-002', 'Humanoid', 'Normal', 'Gunung Himalaya', 'Wild', 'Yeti atau Manusia Salju Menakutkan adalah sejenis primata besar yang menyerupai manusia yang menghuni wilayah pegunungan Himalaya di Nepal dan Tibet. Nama Yeti dan Meh-Teh umummnya digunakan secara luas oleh penduduk asli di wilayah tersebut, dan merupakan bagian dari kisah sejarah dan mitologi mereka. Orang-orang Nepal juga menyebutnya Bonmanche yang berarti \"manusia liar\" atau \"Kanchanjunga rachyyas\" yang berarti \"Iblis Kanchanjunga.\r\n\r\nTahun 1832 sebuah jurnal menerbitkan laporan seorang penjelajah Inggris tentang seekor makhluk yang penuh bulu panjang dan gelap yang dilihatnya di Himalaya. Lalu legenda pun berkembang tentang mahluk misterius yang kemudian dijuluki Yeti.', 'yeti.jpeg'),
(3, 'Chupacabra', 'El Chupacabras', 'SCP-003', 'Mamals', 'Danger', 'Mexico & Amerika', 'Wild', 'Chupacabra(dari kata chupar \"mengisap\" dan cabra \"kambing\", bermakna \"pengisap kambing\"), adalah kriptid legendaris yang dikabarkan menghuni sebagian wilayah Benua Amerika. Chupacabra dikaporkan terlihat di Puerto Rico (penampakan pertama), Meksiko, dan Amerika Serikat. Makhluk ini dilaporkan menyerang dan mengisap darah ternak, terutama kambing. Deskripsi fisiknya bervariasi. Penampakan pertama dilaporkan terjadi pada awal tahun 1995 di Puerto Rico, dan sejak itu makhluk ini dilaporkan muncul dari sejauh Maine, Amerika Serikat di utara, dan sampai sejauh Cili di selatan. Diperkirakan makhluk ini seukuran beruang kecil.', 'chupacabra.jpg');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`) VALUES
(1, 'Sandy Pratama Hidayat', 'admin@scp.com', NULL, '$2y$10$zyk3HEz6hOyW9GAZbPm/8uAWGG4Mand6BvBpZ.w3OuA.tZ.HDWHLC', 'XbyaUUgc5NevdtoyeSPvxJJ1lhDVXX4BqZ1JYMfb0MbKruvIteZvm0cZ31bK', '2019-08-22 20:26:35', '2019-08-22 20:26:35', 'user2-160x160.jpg'),
(2, 'Nicole Sender', 'admin2@scp.com', NULL, '$2y$10$t21MOQJpYbrj.qILa2/tr..ypjjTgfRYfnXlVy9P90lJs5Fzbfvv.', NULL, '2019-08-22 21:04:32', '2019-08-22 21:04:32', 'user1-128x128.jpg'),
(10, 'Kubil Syahron', 'kubil@scp.com', NULL, '$2y$10$7Q58CrjRbtri6UWkZWuRZONYxiOYVrdd2muvRF7gk4HSK5Jo.XB7e', NULL, '2019-08-26 02:14:10', '2019-08-26 02:14:10', 'not-found.jpg');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `scp_monsters`
--
ALTER TABLE `scp_monsters`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scp_monsters`
--
ALTER TABLE `scp_monsters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
