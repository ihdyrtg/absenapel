-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 03:22 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absenkaryawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `jam_masuk`
--

CREATE TABLE `jam_masuk` (
  `id` int(11) NOT NULL,
  `jam_masuk` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jam_masuk`
--

INSERT INTO `jam_masuk` (`id`, `jam_masuk`) VALUES
(1, '08:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id` int(11) NOT NULL,
  `nip` text NOT NULL,
  `nama` text NOT NULL,
  `tanggal` text NOT NULL,
  `jam` time NOT NULL,
  `jam2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `kontak` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `nama`, `kontak`, `foto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Yusri Fahmi', 'yfahmi2010@gmail.com', '856-pas_photo_kecil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id` int(11) NOT NULL,
  `nip` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `divsi` text NOT NULL,
  `tanggal_lahir` text NOT NULL,
  `alamat` text NOT NULL,
  `kontak` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id`, `nip`, `username`, `password`, `nama`, `divisi`, `tanggal_lahir`, `alamat`, `kontak`, `foto`) VALUES
(33, '1213063001193000', 'adi', 'c46335eb267e2e1cde5b017acb4cd799', 'Adi Firmansyah, S.Pd', 'Sirkulasi', '', '', '081367643207', '178-adi.jpg'),
(34, '1277050208870003', 'aflah', '39f1b4512436bfdb2215a65e4f40f0db', 'Aflah Indra Pulungan', 'Administrasi', '', '', '082366088911', '590-aflah.png'),
(35, '1272034503940002', 'Diva', '72de20c106a52f0aaf21bd650af81bd2', 'Diva Rahmadani Damanik, S.Sos', 'Pengolahan', '', '', '081230135030', ''),
(36, '1277025205960001', 'Elysa', '244f2d090dac632f2df1f3de82bc7660', 'Elysa Fitri Pakpahan', 'Pengolahan', '', '', '082276456712', '781-3x4_Elysa.jpg'),
(37, '1277051708970001', 'faqih', '45fb45aa7a0c763fa7c8349947f5a7cb', 'Faqihuddin Nasution', 'Sirkulasi', '', '', '082166213694', '973-faqih.jpg'),
(38, '1277015701980003', 'Fatimah', '81d78ff9668da73b2c4d9101fce622df', 'Fatimah Ramadani Gaja, S.S.I', 'Pengolahan', '', '', '082362050862', ''),
(39, '1277010308960003', 'ihdi', '422a1b2d1dca5d5779161418d4b5daed', 'Ihdi Syahputra Ritonga, S.Kom', 'TI & Digitalisasi', '', '', '082211703018', '340-Foto_Ihdi putih.png'),
(40, '1220041505592000', 'Jainal', '17f9744b1d139a214509ecd050b4d675', 'Jainal Siregar', 'Sirkulasi', '', '', '085381568500', '415-jainal.jpg'),
(41, '1277011810930003', 'kamal', 'aa63b0d5d950361c05012235ab520512', 'Kamal Siregar, S.Sos', 'Pengolahan', '', '', '082137375628', ''),
(43, '1277023101800003', 'Ihsan', 'ab7b5eebff9005d893b26268ac801fec', 'Muhammad Ihsan Ritonga', 'Sirkulasi', '', '', '081361174074', '219-Ihsan.jpg'),
(44, '1213020804820001', 'Nuddin', '8016a8a584d5a6be5455c8e54bb7dae0', 'Muhammad Nuddin', 'Kerumahtanggaan', '', '', '081397990485', '713-nuddin.jpg'),
(45, '1277016706820003', 'Mutia', 'f18188033117355e518a1dde05bc9cf9', 'Mutia Handayani', 'Pengolahan', '', '', '082164676009', '573-mutia.jpg'),
(46, '1213035006960003', 'Rina', '0ca52b8ce692226686ed5e16b5540b4a', 'Rina Edipa', 'Sirkulasi', '', '', '081343738343', '256-rina.jpg'),
(47, '1271094610950001', 'Suci', '064ceae70089340d761eaa54fa6d5e30', 'Suci Syahfifa Nasution', 'Sirkulasi', '', '', '081265307894', '174-suci.jpg'),
(48, '1277027101790006', 'Zuraidah', '7ba6e645d32f2ac22479eee12095ac7b', 'Zuraidah', 'Pengolahan', '', '', '085262009693', '385-IBU_ZURAIDAH.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keterangan`
--

CREATE TABLE `tb_keterangan` (
  `id` int(11) NOT NULL,
  `nip` text NOT NULL,
  `nama` text NOT NULL,
  `keterangan` text NOT NULL,
  `alasan` text NOT NULL,
  `tanggal` text NOT NULL,
  `jam` time NOT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jam_masuk`
--
ALTER TABLE `jam_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jam_masuk`
--
ALTER TABLE `jam_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
