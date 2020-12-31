-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 01:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinjam_jte`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Rika Okta Nabella', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(20) NOT NULL,
  `id_jenis_fasilitas` int(20) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `lokasi_fasilitas` varchar(255) NOT NULL,
  `deskripsi_fasilitas` varchar(255) NOT NULL,
  `jumlah_fasilitas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `id_jenis_fasilitas`, `nama_fasilitas`, `lokasi_fasilitas`, `deskripsi_fasilitas`, `jumlah_fasilitas`) VALUES
(1, 1, 'Proyektor', 'Ruang Admin', 'Proyektor hanya dapat dipinjamkan maksimal 1 hari', 10),
(9, 2, 'Laboratorium Komputer', 'Lantai 3, Gedung E', '-', 1),
(10, 2, 'Laboratorium Teknik Digital', 'Lantai 3, Gedung E', '-', 1),
(11, 2, 'Laboratorium Kendali', 'Lantai 3, Gedung H', '-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_fasilitas`
--

CREATE TABLE `jenis_fasilitas` (
  `id_jenis_fasilitas` int(20) NOT NULL,
  `nama_jenis_fasilitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_fasilitas`
--

INSERT INTO `jenis_fasilitas` (`id_jenis_fasilitas`, `nama_jenis_fasilitas`) VALUES
(1, 'Sarana'),
(2, 'Prasarana');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id_peminjam` int(20) NOT NULL,
  `npm` int(10) NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `email_peminjam` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`id_peminjam`, `npm`, `nama_peminjam`, `email_peminjam`, `prodi`) VALUES
(5, 1815061004, 'Rika Okta Nabella', 'rikaa@gmail.com', 'PSTE'),
(6, 1815061026, 'Destiara Rizky Rahmadanti', 'deszky@gmail.com', 'PSTI'),
(8, 1815061001, 'Rizky Hadi', 'rizky@gmail.com', 'PSTI'),
(9, 1815061005, 'Zulfa Agusti Annisa', 'zulfa@gmail.com', 'PSTI');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(20) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `peminjam_transaksi` varchar(50) NOT NULL,
  `fasilitas_transaksi` varchar(50) NOT NULL,
  `tgl_selesai_transaksi` date NOT NULL,
  `status_transaksi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `peminjam_transaksi`, `fasilitas_transaksi`, `tgl_selesai_transaksi`, `status_transaksi`) VALUES
(17, '2020-12-25', '5', '1', '2020-12-18', 0),
(18, '2020-12-25', '6', '9', '2020-12-24', 1),
(19, '2020-12-30', '9', '1', '2020-12-24', 1),
(20, '2020-12-30', '9', '11', '2020-12-31', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `id_jenis_fasilitas` (`id_jenis_fasilitas`);

--
-- Indexes for table `jenis_fasilitas`
--
ALTER TABLE `jenis_fasilitas`
  ADD PRIMARY KEY (`id_jenis_fasilitas`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jenis_fasilitas`
--
ALTER TABLE `jenis_fasilitas`
  MODIFY `id_jenis_fasilitas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id_peminjam` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`id_jenis_fasilitas`) REFERENCES `jenis_fasilitas` (`id_jenis_fasilitas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
