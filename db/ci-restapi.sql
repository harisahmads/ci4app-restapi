-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 03:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-restapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontrakan`
--

CREATE TABLE `kontrakan` (
  `id` int(5) UNSIGNED NOT NULL,
  `no_rumah` int(3) NOT NULL,
  `penghuni` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `lama_sewa` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kontrakan`
--

INSERT INTO `kontrakan` (`id`, `no_rumah`, `penghuni`, `pekerjaan`, `no_kk`, `telepon`, `tanggal_masuk`, `lama_sewa`, `created_at`, `updated_at`) VALUES
(1, 74, 'Haris Su\'aidi Ahmad', 'Belum Bekerja', '3175091403920003', '089505043154', '2023-02-10', 12, '2023-02-05 04:49:38', '2023-02-05 04:49:38'),
(2, 72, 'Fathur Rozaq', 'Karyawan Swasta', '3175092003980001', '087808228189', '2022-05-01', 24, '2023-02-05 04:49:38', '2023-02-05 04:49:38'),
(5, 24, 'Ahmad fauzan', 'Pegawai Swasta', '31750987283992', '24', '2020-12-14', 24, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 25, 'Muhammad Dulfi Kamal', 'Karyawan Swasta', '3197238236652', '087237623486823', '2020-04-23', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2023-02-04-065334', 'App\\Database\\Migrations\\Kontrakan', 'default', 'App', 1675568050, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontrakan`
--
ALTER TABLE `kontrakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontrakan`
--
ALTER TABLE `kontrakan`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
