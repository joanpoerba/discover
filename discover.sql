-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 02:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discover`
--

-- --------------------------------------------------------

--
-- Table structure for table `suku`
--

CREATE TABLE `suku` (
  `id` int(11) NOT NULL,
  `usersId` int(11) NOT NULL,
  `namaSuku` varchar(255) NOT NULL,
  `gambarSuku` varchar(255) NOT NULL,
  `deskripsiSuku` text NOT NULL,
  `asalSuku` varchar(255) NOT NULL,
  `jumlahPenduduk` varchar(255) NOT NULL,
  `namaMakananAdat` varchar(255) NOT NULL,
  `gambarMakananAdat` varchar(255) NOT NULL,
  `deskripsiMakanan` text NOT NULL,
  `namaPakaianAdat` varchar(255) NOT NULL,
  `gambarPakaianAdat` varchar(255) NOT NULL,
  `deskripsiPakaianAdat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uniqueId` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uniqueId`, `username`, `password`) VALUES
(1, '645d2b7ab989e8.55482085', 'joan', '$2y$10$aVTu6LTmT.incz97p4mmaeH9eru8TH.sv6JU.K/6ILXcQ6CBta16y'),
(2, '645df221e76f99.88419218', 'radit', '$2y$10$moX96Zsu3pAMlKaByVC3Y.7HB1Hrha9XMSvyqGpjN.Wre6SXuI7qW'),
(5, '645df555ec9f70.51734941', 'randy', '$2y$10$Ul0A80A4kk.xkPZKgubzH.PSNUmwS7MrSVUN79lfxkBLycZvquCnq'),
(12, '645dfaa80b1f33.97866113', 'jojo', '$2y$10$qutMR6x7/6te2eptOWNv.e4.TbTIHD8P5RxS4exM8MllPFISm3yGi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suku`
--
ALTER TABLE `suku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUserDanSuku` (`usersId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suku`
--
ALTER TABLE `suku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `suku`
--
ALTER TABLE `suku`
  ADD CONSTRAINT `idUserDanSuku` FOREIGN KEY (`usersId`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
