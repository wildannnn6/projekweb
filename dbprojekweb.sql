-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2025 at 03:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprojekweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(10) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga` int(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama`, `harga`, `gambar`, `deskripsi`) VALUES
(1, 'Soto', 10001, 'soto.jpg', 'soto enak'),
(9, 'Ayam Goreng ', 12000, 'ayam_goreng.jpg', 'ayam enak'),
(10, 'Mie Goreng', 10000, 'mie_goreng.jpg', 'mie enak'),
(11, 'nasi goreng', 12003, 'nasi_goreng.jpg', 'nasi enak');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(10) NOT NULL,
  `id_user` int(255) DEFAULT NULL,
  `id_makanan` int(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga` int(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `username_user` varchar(255) DEFAULT NULL,
  `password_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username_user`, `password_user`) VALUES
(15, 'admin', '$2y$10$WOe0x7rONv56EntLO6N3YOVToDfnX.s7OqwzemkJ2IosvyB54GYva'),
(16, 'staf', '$2y$10$Z3KGqfK8CsFBBMlcTvdJguTYJlt73lxhb/vhglS3espQKvh.Snjei'),
(17, 'user1', '$2y$10$7opaX3SCNrVmjYtJXx5TI.jHAVxuWY396jqd4BYbhS1pM757Tj3ju'),
(18, 'user2', '$2y$10$LT1VBchDvmCs1eQzUdv0we7rFz8WsSDT6sF3utLOVbQ3ps2HB/Yg2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_makanan` (`id_makanan`),
  ADD KEY `id_users` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `id_makanan` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id_makanan`),
  ADD CONSTRAINT `id_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
