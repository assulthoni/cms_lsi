-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 20 Feb 2020 pada 04.13
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_base`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2020_02_12_130139_add_timestamp_to_pembimbing', 1),
(5, '2014_10_12_000000_create_users_table', 2),
(6, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_index`
--

CREATE TABLE `tb_index` (
  `id_index` int(10) NOT NULL,
  `kata` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_index_ta`
--

CREATE TABLE `tb_index_ta` (
  `id_ta` int(5) NOT NULL,
  `id_index` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kata_dasar`
--

CREATE TABLE `tb_kata_dasar` (
  `id_katadasar` int(10) NOT NULL,
  `katadasar` varchar(70) NOT NULL,
  `tipe_katadasar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(5) NOT NULL,
  `kategori` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'data');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_ta`
--

CREATE TABLE `tb_kategori_ta` (
  `id_ta` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori_ta`
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
(20, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembimbing`
--

CREATE TABLE `tb_pembimbing` (
  `id_pembimbing` int(5) NOT NULL,
  `nama_pembimbing` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembimbing`
--

INSERT INTO `tb_pembimbing` (`id_pembimbing`, `nama_pembimbing`) VALUES
(1, 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_program_studi`
--

CREATE TABLE `tb_program_studi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_program_studi`
--

INSERT INTO `tb_program_studi` (`id_prodi`, `nama_prodi`) VALUES
(1, 'Teknik Fisika'),
(2, 'Teknik Elektro'),
(3, 'Teknik Ekonometrika'),
(4, 'Teknik Sipil'),
(5, 'Teknik Geodesi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stopword`
--

CREATE TABLE `tb_stopword` (
  `id_stopword` int(5) NOT NULL,
  `stopword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tugas_akhir`
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
-- Dumping data untuk tabel `tb_tugas_akhir`
--

INSERT INTO `tb_tugas_akhir` (`id_ta`, `judul`, `penulis`, `tahun`, `id_pembimbing`, `id_prodi`, `abstract`, `nama_file`) VALUES
(1, 'cobaan skripsi', 'pundung sanjaya', 2018, 1, 1, 0x696e69206164616c616820636f6261616e20736b72697073692064616e20696e69206164616c6168206162737472616b73692064696d616e61206162737472616b7369206164616c61682067616d626172616e206265736172206461726920736562756168, 'Etprof Self Assesment Chapter 3.docx'),
(7, 'coba', 'santoso', 2018, 1, 3, 0x706572636f6261616e2066696c6520696e707574, 'Module 2.pdf'),
(8, 'coba2', 'santoso 2', 2019, 1, 2, 0x696e69206164616c616820706572636f6261616e206b65647561, 'Module 3.pdf'),
(9, 'coba3', 'santoso 3', 2018, 1, 4, 0x696e69206164616c616820706572636f6261616e2075706c6f61642066696c65206b6574696761, 'Module 2.pdf'),
(10, 'coba4', 'santoso 4', 2017, 1, 5, 0x696e69206164616c616820706572636f6261616e206b65656d706174, 'Module 2.pdf'),
(11, 'coba5', 'santoso 5', 2017, 1, 5, 0x696e69206164616c616820706572636f6261616e206b656c696d61, 'Module 2.pdf'),
(12, 'fdasfsga', 'dasdasg', 2017, 1, 3, 0x6167616467737273747667737667746776737476677367747674677674, 'Module 3.pdf'),
(13, 'dfadfasg', 'santoso', 2017, 1, 4, 0x646673647a66646662627367646667646667737267737467, 'Module 3.pdf'),
(14, 'fsdfzfdgdfgd', 'dfgzdfgzdfg', 2019, 1, 2, 0x7a676466677a6466677a6466677a646667, 'Module 3.pdf'),
(15, 'asdfasdf', 'gdfgdfgdfg', 2018, 1, 1, 0x6466676466677a6466677a6466677a646667646667, 'C:\\xampp\\tmp\\phpB830.tmp'),
(16, 'coba akhir', 'ksDJnfksdfsd', 2017, 1, 4, 0x647a66676466676466677a64677a6472677a6472677a647267, 'C:\\xampp\\tmp\\php4A55.tmp'),
(17, 'sdfzdfgzdfg', 'fgzdfgzdg', 2017, 1, 1, 0x6466677a6466677a646667, 'C:\\xampp\\tmp\\php891B.tmp'),
(18, 'asdasd', 'SDFSDFSDf', 2017, 1, 1, 0x667a6466677a646667646667, 'public/TA/GYBuD1dR91beYzaMYCuz3DlzjESiAH3M3OuceB6B.pdf'),
(19, 'dfadfasg', 'pundung sanjaya', 2018, 1, 1, 0x76647666767366767376737276747320727467737276616a6862636c6164666270697661646662766c6a61642065666a6c73646b66626c657266626c616b6e, 'Module 4.pdfpdf'),
(20, 'fdgdfgd', 'fdflgjnldkjfng', 2018, 1, 2, 0x66676c646a666e676b6a6e6466676c6b6a736e6c666b676a6e7364666e67646e666b67646772, 'Module 2.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `jenis_user`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$MuVoloWwkjw5XDMyYypyjulZTfTHxexKiXLRxSs5Og18Yc7EpT3kG', 'i5wJOSWREdGsUBac1RlwUGC9e4ljY690jpSKvnNn9dpdRtp8uorRrg1jxs3s', '2020-02-13 07:58:34', '2020-02-13 07:58:34'),
(2, 'user', '$2y$10$OuVb6HGUFI9HEpnAmc4aNuILTX9bkEihZhAZqhA3.KfGEKdqPDAzu', 'GZS3AxPxxRXC8I2oid0NhfdjSC3AR01YkZweV31DR1DFGkM4s7Dp7P5w1FJj', '2020-02-13 10:52:04', '2020-02-13 10:52:04'),
(3, 'userlagi', '$2y$10$nooClubnAb0julNb3h3dhewPlxcva7O4DRn.j4fBql4Ms3sZIY1NK', 'K57vblRrWnksBvqPw3gi5nDmb63xRcQ7jrX08BlUkA8i8uYMsWLOBceFftLQ', '2020-02-13 12:16:21', '2020-02-13 12:16:21'),
(4, 'userlagi2', '$2y$10$AOkAOWuVcqf0EnOIdUBIwOaKFv57rpqyVOBTR2OGQWetL9V323DBy', NULL, '2020-02-13 12:19:40', '2020-02-13 12:19:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `tb_index`
--
ALTER TABLE `tb_index`
  ADD PRIMARY KEY (`id_index`);

--
-- Indeks untuk tabel `tb_index_ta`
--
ALTER TABLE `tb_index_ta`
  ADD KEY `id_ta` (`id_ta`,`id_index`),
  ADD KEY `id_index` (`id_index`);

--
-- Indeks untuk tabel `tb_kata_dasar`
--
ALTER TABLE `tb_kata_dasar`
  ADD PRIMARY KEY (`id_katadasar`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_kategori_ta`
--
ALTER TABLE `tb_kategori_ta`
  ADD KEY `id_ta_3` (`id_ta`,`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tb_pembimbing`
--
ALTER TABLE `tb_pembimbing`
  ADD PRIMARY KEY (`id_pembimbing`);

--
-- Indeks untuk tabel `tb_program_studi`
--
ALTER TABLE `tb_program_studi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `tb_stopword`
--
ALTER TABLE `tb_stopword`
  ADD PRIMARY KEY (`id_stopword`);

--
-- Indeks untuk tabel `tb_tugas_akhir`
--
ALTER TABLE `tb_tugas_akhir`
  ADD PRIMARY KEY (`id_ta`),
  ADD KEY `id_pembimbing` (`id_pembimbing`),
  ADD KEY `id_pembimbing_2` (`id_pembimbing`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_index`
--
ALTER TABLE `tb_index`
  MODIFY `id_index` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kata_dasar`
--
ALTER TABLE `tb_kata_dasar`
  MODIFY `id_katadasar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pembimbing`
--
ALTER TABLE `tb_pembimbing`
  MODIFY `id_pembimbing` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_program_studi`
--
ALTER TABLE `tb_program_studi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_stopword`
--
ALTER TABLE `tb_stopword`
  MODIFY `id_stopword` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_tugas_akhir`
--
ALTER TABLE `tb_tugas_akhir`
  MODIFY `id_ta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_index_ta`
--
ALTER TABLE `tb_index_ta`
  ADD CONSTRAINT `tb_index_ta_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `tb_tugas_akhir` (`id_ta`),
  ADD CONSTRAINT `tb_index_ta_ibfk_2` FOREIGN KEY (`id_index`) REFERENCES `tb_index` (`id_index`);

--
-- Ketidakleluasaan untuk tabel `tb_kategori_ta`
--
ALTER TABLE `tb_kategori_ta`
  ADD CONSTRAINT `tb_kategori_ta_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`),
  ADD CONSTRAINT `tb_kategori_ta_ibfk_2` FOREIGN KEY (`id_ta`) REFERENCES `tb_tugas_akhir` (`id_ta`);

--
-- Ketidakleluasaan untuk tabel `tb_tugas_akhir`
--
ALTER TABLE `tb_tugas_akhir`
  ADD CONSTRAINT `tb_tugas_akhir_ibfk_1` FOREIGN KEY (`id_pembimbing`) REFERENCES `tb_pembimbing` (`id_pembimbing`),
  ADD CONSTRAINT `tb_tugas_akhir_ibfk_2` FOREIGN KEY (`id_prodi`) REFERENCES `tb_program_studi` (`id_prodi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
