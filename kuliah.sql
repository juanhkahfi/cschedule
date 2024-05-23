-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 08:42 AM
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
-- Database: `kuliah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `jk_admin` enum('Laki-laki','Perempuan') NOT NULL,
  `telp_admin` varchar(15) NOT NULL,
  `alamat_admin` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `jk_admin`, `telp_admin`, `alamat_admin`, `email`, `password`) VALUES
(1, 'admin', 'Laki-laki', '08753536262', 'Jalan Raya Muchtar 70\r\nBojong Sari, Depok, Jawa Barat – 16516', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `aside`
--

CREATE TABLE `aside` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aside`
--

INSERT INTO `aside` (`id_kategori`, `kategori`) VALUES
(3, 'Wajib'),
(4, 'Kota');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `gambar_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `stok_barang` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `gambar_barang`, `jenis_barang`, `deskripsi_barang`, `stok_barang`) VALUES
(32, 'Perancangan Administrasi dan Basis Data', 'pabd.jpg', 'Wajib', 'Dosen: Marcello Singadji, S.Kom., MT. Jadwal : Senin, 13.00 - 15.00       ', 5),
(33, 'Media Audio Visual Kota', 'mav.png', 'Kota', 'Dosen: YOSAPHAT DANIS MURTIHARSO, S.SN.,M.SN Jadwal: Senin, 08.00 - 10.00', 3),
(34, 'Mobile Device Programming Tech', 'mobile.png', 'Wajib', 'Dosen: Augury El Rayeb, S.Kom., MMSI. Jadwal: Senin, 13.00 - 15.00 ', 4),
(35, 'Rekayasa Perangkat Lunak', 'rpl.png', 'Wajib', 'Dosen: M Johan Budiman, S.Kom, M.Kom MT. Jadwal : Selasa, 08.00 - 10.00', 4),
(36, 'Pengolahan Informasi Berbasis Script', 'pibs.png', 'Wajib', 'Dosen:Augury El Rayeb, S.Kom., MMSI. Jadwal: Kamis, 10.30 - 12.30', 4),
(37, 'Keamanan Informasi Administrasi Jaringan', 'kiaj.png', 'Wajib', 'Dosen:Johannes Hamonangan Siregar., drs, M.Ed, Ph.D. Jadwal : Jumat, 15.30 - 17.30', 4),
(39, 'Somver', 'mobile.png', 'Kota', 'Dosen:Augury El Rayeb, S.Kom., MMSI. Jadwal: Senin, 13.00 - 15.00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(30) NOT NULL,
  `link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id_menu`, `menu`, `link`) VALUES
(1, 'Utama', 'index.php'),
(2, 'Login Admin', 'login.php');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id_temp` int(11) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `header` varchar(30) NOT NULL,
  `subheader` varchar(50) NOT NULL,
  `footer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id_temp`, `logo`, `header`, `subheader`, `footer`) VALUES
(1, 'logo.png', 'Cschedule', 'Intip Informasi Matakuliahmu!', 'Cschedule');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `aside`
--
ALTER TABLE `aside`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id_temp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aside`
--
ALTER TABLE `aside`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
