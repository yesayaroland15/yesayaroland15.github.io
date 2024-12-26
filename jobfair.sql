-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2024 at 05:57 AM
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
-- Database: `jobfair`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id_apply` int(11) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `alamatemail` varchar(1000) NOT NULL,
  `portofolio` varchar(100) NOT NULL,
  `programstudi` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `id_job` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id_apply`, `namalengkap`, `alamatemail`, `portofolio`, `programstudi`, `pendidikan_terakhir`, `cv`, `id_job`, `created_at`, `updated_at`) VALUES
(15, 'Yesaya', 'a@mail.com', 'https://www.linkedin.com/company/winnicodegarudateknologi/', 'Teknik Informatika', 'S1', '1730184050_7758653e34a9746bba19.pdf', 21, '2024-10-29 13:40:50', '2024-10-29 13:40:50'),
(16, 'Yesaya', 'jo@mail.com', 'https://www.linkedin.com/company/winnicodegarudateknologi/', 'Sistem Informasi', 'S1', '1730184156_c0d95b8c6288b0bd7070.pdf', 18, '2024-10-29 13:42:36', '2024-10-29 13:42:36'),
(17, 'nita', 'nita@mail.com', 'https://www.linkedin.com/company/winnicodegarudateknologi/', 'Teknik Informatika', 'S2', '1733294858_8ac4a1ca3f0c6974a8a6.pdf', 23, '2024-12-04 13:47:38', '2024-12-04 13:47:38'),
(18, 'Vina', 'vina@mail.com', 'https://www.linkedin.com/company/winnicodegarudateknologi/', 'Sistem Informasi', 'S1', '1733295137_366c5311e1d31cf665ce.pdf', 21, '2024-12-04 13:52:17', '2024-12-04 13:52:17'),
(19, 'Jessica', 'jessica@mail.com', 'https://www.linkedin.com/company/winnicodegarudateknologi/', 'Informatika', 'S1', '1733295767_f906d03a0dab21029df7.pdf', 19, '2024-12-04 14:02:47', '2024-12-04 14:02:47'),
(20, 'wani', 'wani@mail.com', 'https://www.linkedin.com/company/winnicodegarudateknologi/', 'Sistem Informasi', 'S1', '1734497098_6c28b320a7b20831702a.pdf', 19, '2024-12-18 11:44:58', '2024-12-18 11:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `login_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `success` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_job`
--

CREATE TABLE `category_job` (
  `id_category` int(11) NOT NULL,
  `nama_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_job`
--

INSERT INTO `category_job` (`id_category`, `nama_category`) VALUES
(1, 'IT'),
(2, 'Bussiness and Economics'),
(3, 'Engineering'),
(4, 'Health'),
(5, 'Law'),
(6, 'Human Resource'),
(7, 'Teaching and Education'),
(8, 'Design & Creative');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id_job` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `nama_job` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `syarat` varchar(100) NOT NULL,
  `Gaji` int(11) NOT NULL,
  `jenis_pekerjaan` varchar(100) NOT NULL,
  `batas_pendaftaran` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id_job`, `picture`, `nama_job`, `nama_perusahaan`, `syarat`, `Gaji`, `jenis_pekerjaan`, `batas_pendaftaran`, `id_category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, '', 'IT Development', 'PT Samporna nnnn', 'ipk 3, punya kemampuan bahasa ', 0, '', '', 4, '2024-09-26 17:33:32', '2024-10-03 16:58:01', '2024-10-03 16:58:01'),
(6, '', 'IT Developer', 'PT Samporna, Bandung', 'IPK 3.00, Punya bidang CSS dan HTML, Menguasai beberapa code', 1000, '', '', 1, '2024-09-30 12:47:28', '2024-10-03 16:58:05', '2024-10-03 16:58:05'),
(7, '', 'IT Development', 'PT Samporna nnnn', 'ipk 3, punya kemampuan bahasa ', 50000000, '', '', 1, '2024-10-01 13:08:52', '2024-10-03 16:58:27', '2024-10-03 16:58:27'),
(8, '', 'IT Development', 'PT Samporna nnnn', 'ipk 3, punya kemampuan bahasa ', 50000000, '', '', 1, '2024-10-01 13:10:00', '2024-10-03 16:58:31', '2024-10-03 16:58:31'),
(9, '', 'IT Development', 'PT Samporna nnnn', 'ipk 3, punya kemampuan bahasa ', 50000000, '', '', 1, '2024-10-01 13:11:27', '2024-10-03 16:58:34', '2024-10-03 16:58:34'),
(10, '', 'IT Development', 'PT Samporna nnnn', 'ipk 3, punya kemampuan bahasa ', 50000000, 'magang', '', 1, '2024-10-01 13:13:32', '2024-10-03 16:58:22', '2024-10-03 16:58:22'),
(11, '', 'Full Stack', 'PT ABC 123', 'IPK 3.00, menguasai bahasa php', 500000, 'Full Time', '25 November 2024', 1, '2024-10-03 14:13:59', '2024-10-04 14:30:56', '2024-10-04 14:30:56'),
(12, '', 'IT Developer', '', 'IPK 3.00, Punya bidang CSS dan HTML, Menguasai beberapa code', 1000000, 'Full Time', '25 November 2024', 1, '2024-10-03 14:14:51', '2024-10-04 14:30:52', '2024-10-04 14:30:52'),
(13, '', 'IT Developer', 'PT Sampoerna', 'IPK 3.00, Punya bidang CSS dan HTML, Menguasai beberapa code', 1000000, 'Magang', '25 November 2024', 1, '2024-10-03 14:15:21', '2024-10-04 14:30:44', '2024-10-04 14:30:44'),
(14, '', 'Konselor', 'PT Emas', 'IPK 3.00, Punya bidang psikologi, S1 Psikologi', 5000000, 'Full Time', '10 Oktober 2025', 1, '2024-10-03 14:42:21', '2024-10-04 14:30:39', '2024-10-04 14:30:39'),
(15, '1728023953_41b41f75daf7a12e4199.jpg', 'IT Development c', 'PT Samporna nnnn', 'ipk 3, punya kemampuan bahasa ', 50000000, 'magang', '23', 1, '2024-10-04 13:39:13', '2024-10-04 15:02:43', '2024-10-04 15:02:43'),
(16, '1728024940_ed946a24291a42b6569b.jpg', 'IT Development c', 'PT Samporna nnnn', 'ipk 3, punya kemampuan bahasa ', 50000000, 'magang', '23', 1, '2024-10-04 13:55:40', '2024-10-04 14:30:34', '2024-10-04 14:30:34'),
(17, '1728025007_b7d0787a4a5c6ac24cc8.jpg', 'IT Development c', 'PT Samporna nnnn', 'ipk 3, punya kemampuan bahasa ', 50000000, 'magang', '23aa', 1, '2024-10-04 13:56:47', '2024-10-04 15:03:03', '2024-10-04 15:03:03'),
(18, '1728470612_2913b7098f6cccbfb013.jpg', 'Konselor', 'PT ABGA', 'IPK 3.00, Punya bidang dalam kesehatan mental', 1000000, 'Full Time', '1 Desember 2024', 4, '2024-10-04 14:30:25', '2024-10-09 17:43:32', NULL),
(19, '1728029311_e9de246310dac602ee64.jpg', 'IT Developer', 'PT ABGA', 'IPK 3.00, Punya bidang CSS dan HTML, Menguasai beberapa code', 500000, 'Magang', '1 Desember 2024', 1, '2024-10-04 14:48:51', '2024-10-04 15:08:31', NULL),
(20, '1728385170_53197ae25f893d7c0d96.jpg', 'IT Developer', 'PT Emas', 'IPK 3.00, Punya bidang CSS dan HTML, Menguasai beberapa code', 1000000, 'Magang', '10 Oktober 2025', 1, '2024-10-08 17:56:55', '2024-10-09 17:47:42', '2024-10-09 17:47:42'),
(21, '1728394587_f074336b28caed16fcf6.jpg', 'Project Management', 'PT ABGA', 'IPK 3.00, Punya bidang dalam IT Project Manajemen', 1000000, 'Full Time', '25 November 2024', 1, '2024-10-08 20:36:27', '2024-10-08 20:36:27', NULL),
(22, '1728949827_dceeb08cbb9da58709ba.jpg', 'IT Project Management', 'PT ABGA', 'IPK 3.00, punya minat dalam IT.', 5000000, 'Full Time', '25 November 2024', 1, '2024-10-15 06:46:49', '2024-10-15 06:51:39', '2024-10-15 06:51:39'),
(23, '1728949998_29b4a412616a619a808f.jpg', 'IT Project Management', 'PT ABGA', 'IPK 3.00, Punya bidang dalam IT Project Manajemen', 5000000, 'Full Time', '25 November 2024', 1, '2024-10-15 06:52:42', '2024-10-15 06:53:18', NULL),
(24, '1733970243_078df179b88c37f237df.jpg', 'IT Developer', 'PT CAN', 'IPK 3.00, Prodi Sistem Informasi dan Informatika', 5000, 'Full Time', '1 April 2025', 1, '2024-12-12 09:24:03', '2024-12-12 09:24:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'alex', 'alex@mail.com', 'keluhan', 'perbaiki keluhan', '2024-09-24 22:16:21', NULL),
(2, '', '', '', '', '2024-09-25 09:25:04', '2024-09-25 02:25:04'),
(3, '', '', '', '', '2024-09-25 09:25:20', '2024-09-25 02:25:20'),
(4, 'hkds', 'aaa@mail.com', 'jjjjj', 'wwwwww', '2024-09-25 10:19:15', '2024-09-25 03:19:15'),
(5, 'Yesaya', '1234smls@gmail.com', 'lowongan belum hubungi', 'perlu ada bantuan', '2024-09-25 10:20:13', '2024-09-25 03:20:13'),
(6, 'hkds', 'aaa@mail.com', 'JJJ', 'bcjkchHACLC', '2024-09-25 10:41:57', '2024-09-25 03:41:57'),
(7, 'hkds', 'aaa@mail.com', 'JJJ', 'sasssaassas', '2024-09-25 18:01:44', '2024-09-25 11:01:44'),
(8, 'dhhdjhdhj', 'jkfjfjfjf@mail.com', 'kklkfglkfl', 'hjhlfhjfhkjflhf', '2024-09-25 18:03:36', '2024-09-25 11:03:36'),
(9, 'hkds', 'aaa@mail.com', 'JJJ', 'hkgkjfgjfmdmgd', '2024-09-26 15:41:36', '2024-09-26 08:41:36'),
(10, 'Alex', 'alex@mail.com', 'Kendala', 'tolong diperbaiki ya\r\n', '2024-10-09 18:24:28', '2024-10-09 11:24:28'),
(11, 'Alex', 'alex@mail.com', 'Testimonial JobEntry', 'Saya senang sekali. Dengan adanya JobEntry, saya bisa mendapatkan pekerjaan dengan baik dan benar.', '2024-10-11 15:42:57', '2024-10-11 08:42:57'),
(12, 'Alex', 'alex@mail.com', 'kklkfglkfl', 'nkdnkfafabjfaba', '2024-10-14 13:37:37', '2024-10-14 06:37:37'),
(13, 'Alex', 'alex@mail.com', 'kklkfglkfl', 'nkdnkfafabjfabaaa', '2024-10-14 13:38:42', '2024-10-14 06:38:42'),
(14, 'dhhdjhdhj', 'jkfjfjfjf@mail.com', 'kklkfglkfl', 'jflagjgogshgshjgshshg', '2024-10-14 14:09:27', '2024-10-14 07:09:27'),
(15, 'Alex', 'jkfjfjfjf@mail.com', 'Testimonial JobEntry', 'Ini menunjukan bahwa Job Entry merupakan pekerja yang paling banyak diikuti oleh beberapa perusahaan', '2024-10-15 07:08:19', '2024-10-15 00:08:19'),
(16, 'Alex', 'alex@mail.com', 'masalah apply', 'kenapa lama sekali ya pengumuman lolos seleksi lowongan?', '2024-12-04 13:55:32', '2024-12-04 06:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `created_at`, `updated_at`, `deleted_at`, `email`, `role`) VALUES
(40, 'alexan', '$2y$10$Fs7Fyi/cwBBdVXXH5GdVqOqYhQf.eylXn1hjHSmnBxH4XsRNJ49gW', NULL, NULL, NULL, NULL, '2024-12-04 10:44:45', '2024-12-04 10:44:45', NULL, 'alexan@mail.com', 'user'),
(41, 'sjkcore', '$2y$10$/qevFCsfJM.IUaQ1L2J7geYYdq5ccVB8qQb36EZjee3wsxceImXem', NULL, NULL, NULL, NULL, '2024-12-04 10:51:54', '2024-12-04 10:51:54', NULL, 'alina@mail.com', 'admin'),
(42, 'alisa', '$2y$10$AqK8jlGB.pwOFdJDRzV2fOVNC/P.IDaOKDKF0y7/fK5x9KH4Xhbsu', NULL, NULL, NULL, NULL, '2024-12-04 10:52:44', '2024-12-04 10:52:44', NULL, 'alisa@mail.com', 'owner'),
(43, 'salina', '$2y$10$AzCUFt53cihh/bjLU3Eys.7LEM3YKWbCiPqFnm19KkH8S3DSNuEka', NULL, NULL, NULL, NULL, '2024-12-05 11:08:01', '2024-12-05 11:08:01', NULL, 'salina@mail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id_apply`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id_job`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id_apply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD CONSTRAINT `auth_logins_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
