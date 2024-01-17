-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 01:18 PM
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
-- Database: `jamur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(4) NOT NULL,
  `username` varchar(23) NOT NULL,
  `password` varchar(23) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `hak_akses`) VALUES
(1, 'wahyu', 'wahyu', '5'),
(4, 'ilham', 'ilham', '3'),
(5, 'riko', 'riko', '2'),
(6, 'anton', '12345678', '6'),
(10, 'mujib', 'mujib123', '1'),
(11, 'wahyu', 'wahyu123', '1'),
(12, 'ahmad', '12345678a', '2'),
(13, 'ardiansyah', '1218029a', '3');

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id_beranda` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id_beranda`, `judul`, `gambar`, `keterangan`) VALUES
(1, 'Create Your Own Small Garden At Home', 'jamurku.jpeg', 'isi lagi'),
(2, 'Create Your Own Small Garden At Home', 'carousel-2.jpg', 'isi lagi2'),
(3, 'Create Your Own Small Garden At Home', 'carousel-1.jpg', 'isi lagi2');

-- --------------------------------------------------------

--
-- Table structure for table `gov_hak_akses`
--

CREATE TABLE `gov_hak_akses` (
  `id_gov` int(5) NOT NULL,
  `id_hak_akses` int(5) NOT NULL,
  `Home` varchar(20) NOT NULL,
  `patner` varchar(20) NOT NULL,
  `profil` varchar(20) NOT NULL,
  `layanan` varchar(20) NOT NULL,
  `kontak_kami` varchar(20) NOT NULL,
  `profil_akun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gov_hak_akses`
--

INSERT INTO `gov_hak_akses` (`id_gov`, `id_hak_akses`, `Home`, `patner`, `profil`, `layanan`, `kontak_kami`, `profil_akun`) VALUES
(1, 1, 'V,A,E,D', 'V,A,E,D', 'V,A,E,D', 'V,A,E,D', 'V,D', 'V'),
(2, 2, 'V,A,E,D', 'V,A,E,D', 'V,A,E,D', 'V,A,E,D', 'V,D', 'V'),
(3, 3, 'V,A,E,D', 'V,A,E,D', 'V,A,E,D', 'V,A,E,D', 'V,D', 'V'),
(4, 4, 'V,A,E,D', 'V,A,E,D', 'V,A,E,D', 'V,A,E,D', 'V,D', 'V'),
(5, 5, 'V,A', 'V,A', 'V,A', 'V,A', 'V', '0');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_akses` int(11) NOT NULL,
  `nama_hak_akses` varchar(144) NOT NULL,
  `deskipsi` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_akses`, `nama_hak_akses`, `deskipsi`) VALUES
(1, 'onwer', 'pemlik'),
(2, 'supervisor', 'supervisor'),
(3, 'manager', '-'),
(4, 'waiter', '-'),
(5, 'kasir', '-cd');

-- --------------------------------------------------------

--
-- Table structure for table `kontak_kami`
--

CREATE TABLE `kontak_kami` (
  `id_kontak` int(5) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telepon` int(20) NOT NULL,
  `pesan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak_kami`
--

INSERT INTO `kontak_kami` (`id_kontak`, `nama`, `alamat`, `no_telepon`, `pesan`) VALUES
(1, 'wahyu', 'ngingit', 98, 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` longtext NOT NULL,
  `icon` varchar(50) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `judul`, `isi`, `icon`, `gambar`) VALUES
(1, 'judul 1', '<p>del</p>\r\n', 'icon-3.png', 'service-1.jpg'),
(2, 'judul 2', 'dul.', 'icon-6.png', 'service-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patner`
--

CREATE TABLE `patner` (
  `id_patner` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `twiter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patner`
--

INSERT INTO `patner` (`id_patner`, `nama`, `posisi`, `foto`, `twiter`, `instagram`, `fb`) VALUES
(1, 'Doris Jordan', 'karyawan', 'team-1.jpg', '-', '-', '-'),
(2, 'Johnny Ramirez', 'karyawan tetap', 'team-2.jpg', '-', '-', '-'),
(3, 'inem', 'karyawan', 'team-3.jpg', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `profil_produksi`
--

CREATE TABLE `profil_produksi` (
  `id_profil` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil_produksi`
--

INSERT INTO `profil_produksi` (`id_profil`, `judul`, `gambar`, `link`) VALUES
(1, 'Landscaping', 'service-1.jpg', '-'),
(2, 'Landscaping2', 'service-2.jpg', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id_beranda`);

--
-- Indexes for table `gov_hak_akses`
--
ALTER TABLE `gov_hak_akses`
  ADD PRIMARY KEY (`id_gov`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `kontak_kami`
--
ALTER TABLE `kontak_kami`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `patner`
--
ALTER TABLE `patner`
  ADD PRIMARY KEY (`id_patner`);

--
-- Indexes for table `profil_produksi`
--
ALTER TABLE `profil_produksi`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
