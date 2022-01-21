-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 10 Jan 2022 pada 18.02
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `baak`
--

CREATE TABLE `baak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `baak`
--

INSERT INTO `baak` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'baak', 'haidar@gmail.com', '$2y$10$d58T9qgRHKvY/I0uDKfTU.218a8jbMyHGrBI9M8lTFk/BzbzRt00q', 'SyzBDduJHBrjjxZNpvlTULCQrIsNj001OdjvedYujcjl2sylcYFFWVwBOYvk', '2021-12-01 09:59:43', '2021-12-01 09:59:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `set` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `name`, `username`, `password`, `no_tlp`, `jk`, `ket`, `set`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dosen1', '1234567890', '$2y$10$1UG.YvesWBewSqY2uB/ALOKxV/GpVxCdXYV5KxpPPOLhU6AX67VrK', '08999427153', 'laki-laki', 'DT', '1', NULL, '2021-12-31 04:43:28', '2021-12-31 04:43:28'),
(2, 'dosen2', '1234567811', '$2y$10$dtV7tyOkfecVoXv.R6evVuMUaOhPV9KghZ46TCcKq8N8aPXkAMzcq', '08999427153', 'laki-laki', 'DT', '1', NULL, '2022-01-02 10:39:25', '2022-01-09 21:19:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` bigint(20) NOT NULL,
  `nama_jurusan` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Infromatika', NULL, '2021-12-28 08:51:40', '2021-12-28 08:51:40'),
(2, 'Sistem Informasi', NULL, '2021-12-28 09:09:37', '2021-12-28 09:09:37'),
(3, 'SIAK', NULL, '2022-01-09 11:06:45', '2022-01-09 11:06:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` int(5) NOT NULL,
  `no_tlp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `set` int(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `name`, `username`, `password`, `jk`, `jurusan`, `angkatan`, `no_tlp`, `ket`, `set`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad Haidar', '43E57006185006', '$2y$10$jsZ7dpvSWbkSf3XjDW4YSeKCF5L.r2OJzn1bdIeFwQi054iymRwf.', 'laki-laki', 'Infromatika', 2018, '08999427153', 'reguler', 1, NULL, '2022-01-02 11:54:25', '2022-01-02 11:54:25'),
(2, 'Alvin Supriyan', '43E57006185012', '$2y$10$K.UESt8QNzRqOcRm6fa7ReyhaVRAVPmzPsHOQeiQN03.aKZpyh4iG', 'laki-laki', 'Infromatika', 2018, '08999427153', 'reguler', 1, NULL, '2022-01-09 20:05:44', '2022-01-09 20:05:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` bigint(20) NOT NULL,
  `matkul_id` bigint(11) NOT NULL,
  `dosen_id` bigint(20) DEFAULT NULL,
  `mahasiswa_id` bigint(20) NOT NULL,
  `judul_materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `matkul_id`, `dosen_id`, `mahasiswa_id`, `judul_materi`, `materi`, `deskripsi`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 1, 2, 1, 'pertemuan 2', '14980-30072-1-SM.pdf', 'Kelebihan Bahasa C · 1. Tersedia hampir di semua jenis komputer · 2. Bersifat Portable · 3. Banyak Struktur · 4. Lebih mudah dipahami', NULL, '2022-01-09 10:27:51', '2022-01-09 10:27:51'),
(10, 1, 1, 1, 'pertemuan 4', '14980-30072-1-SM.pdf', ' 1. Struktur Sintaksis Yang Sederhana · 2. Bahasa Pemrograman Yang Portabel', NULL, '2022-01-09 10:37:36', '2022-01-09 10:37:36'),
(11, 3, 1, 2, 'pertemuan 2', '14980-30072-1-SM.pdf', 'Keunggulan Python. Menyadur dari Pyhton.org, Python merupakan bahasa pemrograman yang dianggap mudah untuk dipelajari, sekalipun oleh para', NULL, '2022-01-09 10:44:11', '2022-01-09 10:44:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id` bigint(20) NOT NULL,
  `mahasiswa_id` bigint(11) NOT NULL,
  `dosen_id` bigint(20) NOT NULL,
  `matkul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id`, `mahasiswa_id`, `dosen_id`, `matkul`, `jurusan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'web ', 'Infromatika', NULL, NULL, NULL),
(2, 2, 1, 'python', 'sistem informasi', NULL, NULL, NULL),
(3, 2, 2, 'mobile progremming', 'SIAK', NULL, '2022-01-02 12:07:41', '2022-01-09 11:05:58');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_01_162400_dosen', 2),
(6, '2021_12_01_162416_mahasiswa', 2),
(8, '2021_12_07_050327_mk_si', 3),
(9, '2021_12_07_050334_mk_siak', 3),
(10, '2021_12_07_050246_mk_informatika', 4),
(12, '2021_12_24_163611_video', 5),
(13, '2021_12_27_174932_video_materi_si', 6),
(14, '2021_12_28_150939_jurusan', 7),
(15, '2021_12_28_180218_matkul', 8),
(16, '2021_12_28_183323_materi', 9),
(17, '2021_12_31_174558_tugas', 10),
(20, '2021_12_31_201419_presensi', 11),
(22, '2022_01_07_090601_komentar', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `npm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id`, `npm`, `nama`, `jurusan`, `semester`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '43E57006185006', 'Ahmad Haidar', 'Infromatika', '7', NULL, '2022-01-02 08:20:27', '2022-01-02 08:20:27'),
(2, '43E57006185006', 'Ahmad Haidar', 'Infromatika', '7', NULL, '2022-01-09 22:32:40', '2022-01-09 22:32:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dosen_id` bigint(11) DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `dosen_id`, `file`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 2, 'Tugas_Pertemuan11_Ahmad Haidar.pdf', NULL, '2022-01-01 07:04:48', '2022-01-01 07:04:48'),
(3, 1, 'Tugas12_Karsih Siti Nurjanah_Informatika.pdf', NULL, '2022-01-01 07:16:25', '2022-01-01 07:16:25'),
(4, 1, 'Tugas_Pertemuan11_Ahmad Haidar.pdf', NULL, '2022-01-02 07:14:21', '2022-01-02 07:14:21'),
(6, NULL, '14980-30072-1-SM.pdf', NULL, '2022-01-09 21:55:55', '2022-01-09 21:55:55'),
(7, NULL, '14980-30072-1-SM.pdf', NULL, '2022-01-09 22:04:45', '2022-01-09 22:04:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `baak`
--
ALTER TABLE `baak`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `baak_email_unique` (`username`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswa_email_unique` (`username`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matkul_id_2` (`matkul_id`),
  ADD KEY `dosen_id` (`dosen_id`),
  ADD KEY `mahasiswa_id` (`mahasiswa_id`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_id` (`mahasiswa_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_id` (`dosen_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `baak`
--
ALTER TABLE `baak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
