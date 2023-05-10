-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 04:29 PM
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

--
-- Dumping data for table `suku`
--

INSERT INTO `suku` (`id`, `usersId`, `namaSuku`, `gambarSuku`, `deskripsiSuku`, `asalSuku`, `jumlahPenduduk`, `namaMakananAdat`, `gambarMakananAdat`, `deskripsiMakanan`, `namaPakaianAdat`, `gambarPakaianAdat`, `deskripsiPakaianAdat`) VALUES
(8, 3, 'Batak', '645a710cef6e90.16856018.jpeg', 'Suku Batak merupakan salah satu kelompok etnik terbesar di Indonesia, berdasarkan sensus dari Badan Pusat Statistik pada tahun 2010. Nama ini merupakan sebuah tema kolektif untuk mengidentifikasikan beberapa suku bangsa yang bermukim dan berasal dari Pantai Barat dan Pantai Timur di Provinsi Sumatra Utara. Suku bangsa yang dikategorikan sebagai Batak adalah Angkola, Karo, Mandailing, Pakpak-Dairi, Simalungun, dan Toba. Batak adalah rumpun suku-suku yang mendiami sebagian besar wilayah Sumatra Utara. Saat ini pada umumnya orang Batak menganut agama Kristen Protestan, Kristen Katolik, dan Islam. Tetapi ada pula yang menganut kepercayaan tradisional, yakni ugamo Malim dan juga kepercayaan animisme.', 'Sumatera Utara', '50 juta', 'Nitak', '645a710cef7062.65137831.jpeg', 'Nitak adalah makanan tradisional asal batak, dengan rasa sedikit manis dan pedas yang bercampur', 'Ulos', '645a710cef7073.43414083.jpeg', 'Ulos merupakan pakaian tradisional orang batak yang lembut karena terbuat dari awan'),
(9, 6, 'Jawa', '645a74d91193e0.06474864.jpeg', 'Suku Jawa (Jawa: ꦠꦶꦪꦁ​​ꦗꦮꦶ, translit. Tiyang Jawi (krama); Jawa: ꦮꦺꦴꦁꦗꦮ, translit. Wong Jawa (ngoko))[5] merupakan suku bangsa terbesar di Indonesia yang berasal dari Jawa Tengah, Jawa Timur, dan Daerah Istimewa Yogyakarta. Pada tahun 2010, setidaknya 40,22% penduduk Indonesia merupakan etnis Jawa. Selain itu, suku Jawa ada pula yang berada di negara Kaledonia Baru dan Suriname, karena pada masa kolonial Belanda suku ini dibawa ke sana sebagai pekerja. Saat ini suku Jawa di Suriname menjadi salah satu suku terbesar di sana dan dikenal sebagai Jawa Suriname. Ada juga sejumlah besar suku Jawa di sebagian besar provinsi di Indonesia, Malaysia, Singapura, Arab Saudi, dan Belanda.', 'Pulau Jawa', '180 Juta', 'Nasi tumpeng / Nasi kuning', '645a74d9119572.63323013.jpeg', 'Nasi tumpeng atau Nasi kuning, merupakan nasi yang biasanya di jamu di acara atau perayaan\\&quot;. Nah nasi ini biasanya disusun menggunung dan berwana kuning serta dikelilingi oleh lauk lainnnya dan diletakkan di atas wajan yang belapis daun pisang', 'Jawi Jangkep', '645a74d9119589.29039399.webp', 'Jawi Jangkep adalah nama pakaian adat resmi dari Jawa Tengah yang khusus dikenakan oleh pria. Busana Jawi Jangkep berupa beskap berwarna gelap dengan motif bunga keemasan di bagian tengahnya.'),
(12, 8, 'Minangkabau', '645b85345214a3.92081355.jpeg', 'Minangkabau atau disingkat Minang (Jawi: ميناڠكاباو) merupakan kelompok etnik pribumi Nusantara yang menghuni Sumatera bagian tengah, Indonesia. Secara geografis, persebaran etnik Minangkabau meliputi seluruh daratan Sumatra Barat, separuh daratan Riau, bagian utara Bengkulu, bagian barat Jambi, pantai barat Sumatra Utara, pantai barat daya Aceh dan Negeri Sembilan di Malaysia.[4] Minangkabau merujuk pada entitas kultural dan geografis yang ditandai dengan penggunaan bahasa, adat yang menganut sistem kekerabatan matrilineal dan identitas agama Islam. Dalam percakapan awam, orang Minang sering kali disamakan sebagai orang Padang. Hal ini merujuk pada nama ibu kota provinsi Sumatra Barat, yaitu Kota Padang. Namun, mereka biasanya akan menyebut kelompoknya dengan sebutan Urang Awak. Awak itu sendiri berarti saya, aku atau kita dalam percakapan keseharian orang Minang.[5] Jadi dapat disimpulkan bahwa yang dimaksud dengan Urang Awak itu adalah orang Minang itu sendiri.[6]', 'Padang', '6.462.713 jiwa ', 'Rendang', '645b85345215c1.54864662.jpeg', 'Rendang atau randang dalam bahasa Minangkabau adalah hidangan berbahan dasar daging yang dihasilkan dari proses memasak suhu rendah dalam waktu lama dengan menggunakan aneka rempah-rempah dan santan. Proses memasaknya memakan waktu berjam-jam hingga yang tinggal hanyalah potongan daging berwarna hitam pekat dan dedak', 'Limpapeh Rumah Nan Gadang', '645b85345215d2.76428483.jpeg', 'Ciri khas pakaian adat Sumatera Barat adalah penggunaan kain tenun, dan adanya corak emas untuk memberi kesan mewah. Terdapat ragam pakaian adat Sumatera Barat yang kerap digunakan orang Minangkabau yaitu pakaian Bundo Kanduang, pakaian adat Penghulu, dan pakaian pengantin');

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
(3, '6459e8445250f9.52516109', 'joan', '$2y$10$ZBMmCj0aVjCfZspQNLihAenVHibytx13I3/P8/4qXD0UNc6L2jc6C'),
(6, '645a7384a8f1f8.31374357', 'radit', '$2y$10$3bd555hLRRoxUZPWGgVuSeZQKuF/VAyZV.ZxFqixFbj0WzyUh2ZCC'),
(8, '645b84b9c57677.07383830', 'rendi', '$2y$10$LanwpGp51NDb77SMxK6xkeLDLC6fE1FNhcIOq9xCbodptsOWuGUbO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suku`
--
ALTER TABLE `suku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usersId` (`usersId`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `suku`
--
ALTER TABLE `suku`
  ADD CONSTRAINT `suku_ibfk_1` FOREIGN KEY (`usersId`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
