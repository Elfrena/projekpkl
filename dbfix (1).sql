-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 01:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfix`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_absen` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_pulang` time NOT NULL,
  `jam_kerja` int(11) DEFAULT NULL,
  `terlambat` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `nama`, `tgl_absen`, `jam_masuk`, `jam_pulang`, `jam_kerja`, `terlambat`, `updated_at`, `created_at`) VALUES
(12, 'agus sunandar', '2022-11-11', '09:30:00', '17:00:00', 8, '0 Jam 30 Menit', '2022-11-12 08:38:04', '2022-11-12 08:38:04'),
(13, 'baharudin', '2022-11-12', '09:30:00', '17:00:00', 8, '0 Jam 30 Menit', '2022-11-21 02:26:05', '2022-11-21 02:26:05'),
(14, 'Dimas A', '2022-11-13', '09:40:00', '17:00:00', 7, '0 Jam 40 Menit', '2022-11-21 02:38:35', '2022-11-21 02:38:35'),
(15, 'agus', '2022-11-09', '09:00:00', '17:00:00', 8, '0 Jam 0 Menit', '2022-11-21 03:11:49', '2022-11-21 03:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id` int(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jumlah` int(12) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id`, `nama_karyawan`, `nip`, `jabatan`, `tanggal_mulai`, `tgl_selesai`, `jumlah`, `status`, `keterangan`, `updated_at`, `created_at`) VALUES
(16, 'agus sunandar', '001', 'Jabatan', '2022-11-20', '2022-11-21', 1, '2', 'liburan keluarga', '2022-11-20 20:33:01', '2022-11-21 03:33:01'),
(17, 'Dimas A', '004', 'Jabatan', '2022-11-01', '2022-11-03', 3, '2', 'Sakit', '2022-11-20 20:35:11', '2022-11-21 03:35:11'),
(18, 'agus sunandar', '001', 'Jabatan', '2022-12-13', '2022-12-19', 6, '2', 'libur nikah', '2022-11-20 20:33:22', '2022-11-21 03:33:22'),
(19, 'agus sunandar', '001', 'Jabatan', '2022-02-19', '2022-02-21', 3, '2', 'liburan', '2022-11-20 20:34:36', '2022-11-21 03:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id` int(11) NOT NULL,
  `nama_golongan` varchar(50) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id`, `nama_golongan`, `keterangan`, `updated_at`, `created_at`) VALUES
(8, 'Project Manager Executive', 'a)	Mengelola ruang lingkup proyek, termasuk mengidentifikasi potensi masalah dan membuat penyesuaian seperlunya\r\nb)	Melayani sebagai penghubung antar departemen dalam suatu organisasi untuk memastikan bahwa proyek diselesaikan dengan sukses\r\nc)	Berkoordinasi dengan vendor luar untuk memastikan bahwa semua bahan, peralatan, dan tenaga kerja yang dibutuhkan untuk proyek tersedia tepat waktu\r\nd)	Meninjau proposal proyek untuk menentukan kelayakan dan membuat rekomendasi untuk perubahan', '2022-11-21 02:29:25', '2022-11-21 02:29:25'),
(9, 'Project Manager', 'Menjalankan proses manajemen sebuah proyek. Ia bertugas mengatur, merencanakan, dan melaksanakan proyek sesuai batasan yang sudah ditentukan, seperti anggaran dan waktu.', '2022-11-21 02:33:32', '2022-11-21 02:33:32'),
(10, 'Marketing', 'Menghubungkan brand CV. Nakula sadewa dengan calon konsumen. Agar bisa terhubung dengan baik, di dalam marketing terdapat proses identifikasi kebutuhan calon pelanggan serta cara perusahaan memenuhi kebutuhan mereka.', '2022-11-21 02:34:03', '2022-11-21 02:34:03'),
(11, 'Head of technician', 'Pemimpin teknis atau seorang profesional yang bertugas mengawasi tim tenaga teknis di CV. Nakula sadewa perangkat lunak atau berhubungan dengan teknologi informasi.', '2022-11-21 02:34:30', '2022-11-21 02:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telpon` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status_nikah` enum('belum nikah','nikah') NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(225) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nip`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `telpon`, `email`, `status_nikah`, `alamat`, `jabatan`, `foto`, `updated_at`, `created_at`) VALUES
(7, '001', 'agus sunandar', 'pria', 'malang', '2000-02-09', '082765552187', 'agus@gmail.com', 'belum nikah', 'jl.kartini no.11 kota malang', 'Divisi IT', '1668243817.png', '2022-11-12 02:03:37', '2022-11-12 09:03:37'),
(8, '002', 'baharudin', 'pria', 'surabaya', '1998-01-09', '086752210921', 'baharudin@gmail.com', 'belum nikah', 'jl.ikan gurame no.11 - kota malang', 'Divisi Pemasaran', '0', '2022-11-10 04:45:07', '2022-11-10 04:45:07'),
(9, '003', 'agus', 'pria', 'malang', '2001-08-09', '085123456789', 'admin@gmail.com', 'belum nikah', 'jl', 'Manager', '1668225773176-user.png', '2022-11-12 04:02:53', '2022-11-12 04:02:53'),
(10, '004', 'Dimas A', 'pria', 'Malang', '1995-02-28', '083887645098', 'dimas1@gmail.com', 'nikah', 'Jl. Candi Mendut Kota Malang', 'Project Manager', '1668998270063-Fdlfk6uVIAMaqeN.jpg', '2022-11-21 02:37:50', '2022-11-21 02:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE `lembur` (
  `id` int(11) NOT NULL,
  `nama_kry` varchar(50) NOT NULL,
  `tanggal_lembur` date NOT NULL,
  `mulai_lembur` time NOT NULL,
  `selesai_lembur` time NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jumlah` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lembur`
--

INSERT INTO `lembur` (`id`, `nama_kry`, `tanggal_lembur`, `mulai_lembur`, `selesai_lembur`, `updated_at`, `created_at`, `jumlah`) VALUES
(15, 'Dimas A', '2022-11-30', '17:00:00', '18:00:00', '2022-11-21 02:55:28', '2022-11-21 02:55:28', '1 Jam 0 Menit'),
(16, 'baharudin', '2022-11-21', '17:30:00', '18:45:00', '2022-11-21 03:12:56', '2022-11-21 03:12:56', '1 Jam 45 Menit'),
(17, 'Dimas A', '2022-11-19', '18:00:00', '18:30:00', '2022-11-21 03:15:01', '2022-11-21 03:15:01', '1 Jam 30 Menit');

-- --------------------------------------------------------

--
-- Table structure for table `lemburans`
--

CREATE TABLE `lemburans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `tgl` date NOT NULL,
  `jammasuk` time DEFAULT NULL,
  `jamselesai` time DEFAULT NULL,
  `jamkerja` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2022_07_25_072000_create_jabatan_table', 2),
(18, '2022_11_08_093352_create_lemburans_table', 2),
(19, '2022_11_08_124307_create_lemburans_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` longblob DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nip`, `name`, `email`, `email_verified_at`, `password`, `photo`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', 'admin@gmail.com', '2022-11-07 00:35:47', '$2y$10$2wqkS3IdiHb5OWQUym97Ceg.6/6IqtVczD97Tm5ISw85iP2YeI5c6', 0x4d416e6f43696851756e426e4b716e61734d4e4469344f4d4c6d31634b62514137744f6a766959502e6a70672e6a7067, NULL, 'admin', '2022-11-07 00:35:47', '2022-11-08 20:56:07'),
(3, NULL, 'Admin1', 'admin1@gmail.com', '2022-11-08 23:34:46', '$2y$10$r8w6rtY9mnr9lvs0SAX/UezFuobq7xynOdaXU80xBDuJG5wJ2bgLG', 0x415834614e67784f69347641444d4b48515079734335776c736443713249754e5031354c45547a4d2e6a70672e6a7067, NULL, 'admin', '2022-11-08 23:34:46', '2022-11-08 23:35:22'),
(7, '001', 'agus sunandar', 'agus@gmail.com', NULL, '$2y$10$mUAqEGwckACqkKfiM9sV/uHlaGPie8a1AKFWlkQ0bpisjZlNVAhdi', NULL, NULL, 'user', NULL, '2022-11-20 20:31:46'),
(8, '002', 'baharudin', 'baharudin@gmail.com', NULL, '$2y$10$Gb6zr4AYglR20HprebHG2eqegz620ZIFLlqgNshDsIDoyDnZzfgaK', 0x6841774a4f5662314a484863644368523956364e49484e795a784a5832695235727a4f533250346e2e706e672e706e67, NULL, 'user', NULL, '2022-11-09 22:54:29'),
(10, '004', 'Dimas A', 'dimas1@gmail.com', NULL, '$2y$10$gUgVr4769oScK1kxVtWql.NqtC0.ZOSaOqz8roclFyOqeHNIrojDm', NULL, NULL, 'user', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_golongan` (`nama_golongan`) USING BTREE;

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`nama`);

--
-- Indexes for table `lembur`
--
ALTER TABLE `lembur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lemburans`
--
ALTER TABLE `lemburans`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lembur`
--
ALTER TABLE `lembur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lemburans`
--
ALTER TABLE `lemburans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
