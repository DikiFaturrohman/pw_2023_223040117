-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 08:23 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int NOT NULL,
  `nik` char(16) DEFAULT NULL,
  `namadepan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `namabelakang` varchar(50) DEFAULT NULL,
  `tglahir` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `jeniskelamin` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `namadepan`, `namabelakang`, `tglahir`, `jeniskelamin`, `alamat`, `agama`, `pekerjaan`) VALUES
(7, '3213011709040001', 'Diki', 'Faturrohman', '2004-09-17', 'Laki-Laki', 'Sagalaherang Kaler', 'Islam', 'Pelajar'),
(9, '0000000000000000', 'Fadhil', 'Rizky Fauzan', '2004-01-01', 'Laki-Laki', 'Subang', 'Islam', 'Pelajar'),
(10, '0000000000000000', 'Rivaldy', 'Novyan Dwi Putra', '2004-01-01', 'Laki-Laki', 'Cianjur', 'Islam', 'Pelajar'),
(11, '0000000000000000', 'Muhammad Daffa', 'Riyadi', '2004-01-01', 'laki-laki', 'Bandung', 'islam', 'Pelajar'),
(12, '0000000000000000', 'Rizal', 'Fahla', '2004-01-11', 'laki-laki', 'Bandung', 'islam', 'Pelajar');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `role`) VALUES
(3, 'admin', '$2y$10$0g0Dy2bpg7nboWNRAzJocuQx0ulNx4sX.dvHfXn7ZSXn6XMMhrZh.', 'admin'),
(11, 'diki', '$2y$10$SW/AUVIJFIrhwN0.OicSQ.ClF4C6COnxvFlf88s2X5oa6./eicHbC', 'role'),
(12, 'fadhil', '$2y$10$ey.8tv3mtOHZZ.RK/Gr7yuHEhNP1S18UeLcX6TfUOCraLQd9cIyAO', 'role');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
