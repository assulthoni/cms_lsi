-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 03:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_ta`
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
(4, '2020_02_12_130139_add_timestamp_to_pembimbing', 1),
(5, '2014_10_12_000000_create_users_table', 2),
(6, '2014_10_12_100000_create_password_resets_table', 2);

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
-- Table structure for table `tb_index`
--

CREATE TABLE `tb_index` (
  `id_index` int(10) NOT NULL,
  `kata` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_index_ta`
--

CREATE TABLE `tb_index_ta` (
  `id_ta` int(5) NOT NULL,
  `id_index` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kata_dasar`
--

CREATE TABLE `tb_kata_dasar` (
  `id_katadasar` int(10) NOT NULL,
  `katadasar` varchar(70) NOT NULL,
  `tipe_katadasar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(5) NOT NULL,
  `kategori` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'data');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_ta`
--

CREATE TABLE `tb_kategori_ta` (
  `id_ta` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori_ta`
--

INSERT INTO `tb_kategori_ta` (`id_ta`, `id_kategori`) VALUES
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembimbing`
--

CREATE TABLE `tb_pembimbing` (
  `id_pembimbing` int(5) NOT NULL,
  `nama_pembimbing` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembimbing`
--

INSERT INTO `tb_pembimbing` (`id_pembimbing`, `nama_pembimbing`) VALUES
(1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_program_studi`
--

CREATE TABLE `tb_program_studi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_program_studi`
--

INSERT INTO `tb_program_studi` (`id_prodi`, `nama_prodi`) VALUES
(1, 'Teknik Fisika'),
(2, 'Teknik Elektro'),
(3, 'Teknik Ekonometrika'),
(4, 'Teknik Sipil'),
(5, 'Teknik Geodesi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stopword`
--

CREATE TABLE `tb_stopword` (
  `id_stopword` int(5) NOT NULL,
  `stopword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas_akhir`
--

CREATE TABLE `tb_tugas_akhir` (
  `id_ta` int(5) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `tahun` year(4) NOT NULL,
  `id_pembimbing` int(5) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `abstract` longblob NOT NULL,
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tugas_akhir`
--

INSERT INTO `tb_tugas_akhir` (`id_ta`, `judul`, `penulis`, `tahun`, `id_pembimbing`, `id_prodi`, `abstract`, `nama_file`) VALUES
(21, 'tugas akhir 1', 'lalala', 2019, 1, 2, 0x6164696a73616f6a64616f73646e616e646f73616e646f616e646f6e616f64736e616c6b646e61736c6b646e6c61736b6e646c6b61736e646c6b616e7373646c6b73616e64617364, 'CREATE IT WEB UI-01.svg'),
(22, 'tugas akhir 2', 'dddd', 2018, 1, 4, 0x6c616c612079657965206c616c612079657965, 'CREATE IT WEB UI-01.svg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `jenis_user`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$MuVoloWwkjw5XDMyYypyjulZTfTHxexKiXLRxSs5Og18Yc7EpT3kG', 'vxMTAjRWcyGgA0nVolxBDAoUnGd3TRMV3rhnKtIPZkWUaBzUyb0RPszkO776', '2020-02-13 07:58:34', '2020-02-13 07:58:34'),
(2, 'user', '$2y$10$OuVb6HGUFI9HEpnAmc4aNuILTX9bkEihZhAZqhA3.KfGEKdqPDAzu', 'GZS3AxPxxRXC8I2oid0NhfdjSC3AR01YkZweV31DR1DFGkM4s7Dp7P5w1FJj', '2020-02-13 10:52:04', '2020-02-13 10:52:04'),
(3, 'userlagi', '$2y$10$nooClubnAb0julNb3h3dhewPlxcva7O4DRn.j4fBql4Ms3sZIY1NK', 'K57vblRrWnksBvqPw3gi5nDmb63xRcQ7jrX08BlUkA8i8uYMsWLOBceFftLQ', '2020-02-13 12:16:21', '2020-02-13 12:16:21'),
(4, 'userlagi2', '$2y$10$AOkAOWuVcqf0EnOIdUBIwOaKFv57rpqyVOBTR2OGQWetL9V323DBy', NULL, '2020-02-13 12:19:40', '2020-02-13 12:19:40'),
(5, 'mhs123', '$2y$10$.khUQKefCGvtNBXquIeFK.DZxsBoyc1XAehAGZ6lH2ULZ2Rvx0xFm', '4ydVs6Hg1xANFBajP5eA5sby5Lb6lD1mY5xZRV3wJDWKlO9PQTCtGBmSNuku', '2020-03-12 06:14:27', '2020-03-12 06:14:27');

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
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `tb_index`
--
ALTER TABLE `tb_index`
  ADD PRIMARY KEY (`id_index`);

--
-- Indexes for table `tb_index_ta`
--
ALTER TABLE `tb_index_ta`
  ADD KEY `id_ta` (`id_ta`,`id_index`),
  ADD KEY `id_index` (`id_index`);

--
-- Indexes for table `tb_kata_dasar`
--
ALTER TABLE `tb_kata_dasar`
  ADD PRIMARY KEY (`id_katadasar`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kategori_ta`
--
ALTER TABLE `tb_kategori_ta`
  ADD KEY `id_ta_3` (`id_ta`,`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_pembimbing`
--
ALTER TABLE `tb_pembimbing`
  ADD PRIMARY KEY (`id_pembimbing`);

--
-- Indexes for table `tb_program_studi`
--
ALTER TABLE `tb_program_studi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tb_stopword`
--
ALTER TABLE `tb_stopword`
  ADD PRIMARY KEY (`id_stopword`);

--
-- Indexes for table `tb_tugas_akhir`
--
ALTER TABLE `tb_tugas_akhir`
  ADD PRIMARY KEY (`id_ta`),
  ADD KEY `id_pembimbing` (`id_pembimbing`),
  ADD KEY `id_pembimbing_2` (`id_pembimbing`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_index`
--
ALTER TABLE `tb_index`
  MODIFY `id_index` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kata_dasar`
--
ALTER TABLE `tb_kata_dasar`
  MODIFY `id_katadasar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pembimbing`
--
ALTER TABLE `tb_pembimbing`
  MODIFY `id_pembimbing` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_program_studi`
--
ALTER TABLE `tb_program_studi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_stopword`
--
ALTER TABLE `tb_stopword`
  MODIFY `id_stopword` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tugas_akhir`
--
ALTER TABLE `tb_tugas_akhir`
  MODIFY `id_ta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
