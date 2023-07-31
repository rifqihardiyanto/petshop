-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 27, 2022 at 08:58 PM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.2.34-28+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(144) NOT NULL,
  `username` varchar(144) NOT NULL,
  `password` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Super Admin', 'admin', 'pgKDXY8kr2LOXBCZxA==');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dt_grooming`
--

CREATE TABLE `tb_dt_grooming` (
  `id_dt_grooming` int(11) NOT NULL,
  `id_grooming` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pemesan` varchar(144) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `jenis_bayar` enum('0','1') NOT NULL COMMENT '0 =TF, 1 = Ditempat',
  `bukti_bayar` varchar(144) DEFAULT NULL,
  `status_bayar` enum('0','1') NOT NULL COMMENT '0 = menunggu, 1 dibayar',
  `status_diambil` enum('0','1') NOT NULL COMMENT '0 = belum. 1 = diambil',
  `alamat_ambil` text NOT NULL,
  `enkripsi` enum('0','1') NOT NULL COMMENT '0 = non, 1 = enkripsi',
  `aes_key` varchar(144) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dt_grooming`
--

INSERT INTO `tb_dt_grooming` (`id_dt_grooming`, `id_grooming`, `id_user`, `nama_pemesan`, `tanggal_masuk`, `total_bayar`, `jenis_bayar`, `bukti_bayar`, `status_bayar`, `status_diambil`, `alamat_ambil`, `enkripsi`, `aes_key`) VALUES
(1, 1, 2, 'M Dhifta', '2022-06-19', 35000, '0', 'logo-green.png', '1', '1', '', '0', 'null'),
(2, 1, 3, 'Julio Hermes', '2022-06-24', 35000, '1', NULL, '0', '1', 'Jatirejo, Sendangadi, Kec. Mlati, Sleman, Yogyakarta', '0', 'null'),
(3, 1, 3, 'Julio Hermes', '2022-06-23', 35000, '1', NULL, '0', '1', 'Jatirejo, Sendangadi, Kec. Mlati, Sleman, Yogyakarta', '0', 'null'),
(4, 1, 2, 'Julio Andreas', '2022-06-30', 35000, '0', NULL, '0', '1', 'Jatirejo, Sendangadi, Kec. Mlati, Sleman, Yogyakarta', '0', 'null'),
(5, 1, 4, 'rifqi', '2022-06-29', 35000, '0', 'AGWL7709.JPG', '1', '1', 'trini', '0', 'null'),
(6, 1, 4, 'rifqi', '2022-07-01', 35000, '1', NULL, '0', '0', 'trini', '0', 'null'),
(7, 1, 4, 'rifqi', '2022-07-04', 35000, '0', NULL, '0', '0', 'trini', '0', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dt_penitipan`
--

CREATE TABLE `tb_dt_penitipan` (
  `id_dt_penitipan` int(11) NOT NULL,
  `id_penitipan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_penitip` varchar(144) NOT NULL,
  `waktu_penitipan` date NOT NULL,
  `waktu_keluar` date NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status_pembayaran` enum('0','1') NOT NULL COMMENT '0 = tf, 1 = dibayar langsung',
  `status_diambil` enum('0','1') NOT NULL COMMENT '0 = belum, 1 = diambil',
  `bukti_bayar` varchar(144) DEFAULT NULL,
  `status_bayar` enum('0','1') NOT NULL COMMENT '0 = menunggu, 1 = lunas',
  `alamat_ambil` text NOT NULL,
  `enkripsi` enum('0','1') NOT NULL COMMENT '0 = non, 1 = enkripsi',
  `aes_key` varchar(144) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dt_penitipan`
--

INSERT INTO `tb_dt_penitipan` (`id_dt_penitipan`, `id_penitipan`, `id_user`, `nama_penitip`, `waktu_penitipan`, `waktu_keluar`, `total_bayar`, `status_pembayaran`, `status_diambil`, `bukti_bayar`, `status_bayar`, `alamat_ambil`, `enkripsi`, `aes_key`) VALUES
(1, 2, 2, 'M Dhifta', '2022-06-19', '2022-06-21', 70000, '0', '1', 'Screenshot from 2022-06-18 10-58-03.png', '1', 'Jatirejo, Sendangadi, Kec. Mlati, Sleman, Yogyakarta', '0', 'null'),
(2, 2, 3, 'Julio Hermes', '2022-06-23', '2022-06-30', 245000, '1', '1', NULL, '1', 'Jatirejo, Sendangadi, Kec. Mlati, Sleman, Yogyakarta', '0', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `tb_grooming`
--

CREATE TABLE `tb_grooming` (
  `id_grooming` int(11) NOT NULL,
  `jenis_grooming` varchar(144) NOT NULL,
  `harga_grooming` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_grooming`
--

INSERT INTO `tb_grooming` (`id_grooming`, `jenis_grooming`, `harga_grooming`, `keterangan`) VALUES
(1, 'Biasa', 35000, 'Grooming paket biasa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penitipan`
--

CREATE TABLE `tb_penitipan` (
  `id_penitipan` int(11) NOT NULL,
  `jenis_penitipan` varchar(114) NOT NULL,
  `harga_penitipan` int(11) NOT NULL,
  `status_penitipan` enum('1','0') NOT NULL COMMENT '0 = biasa, 1 = makan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penitipan`
--

INSERT INTO `tb_penitipan` (`id_penitipan`, `jenis_penitipan`, `harga_penitipan`, `status_penitipan`) VALUES
(2, 'Biasa', 35000, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(144) NOT NULL,
  `username` varchar(144) NOT NULL,
  `password` varchar(144) NOT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `alamat`) VALUES
(2, 'M Dhifta', 'mdhifta', 'LwJNg3Elr2IavEWvVvo=', 'LgADQALps2LpAWMwpaFFKs/rNlSdUQGvs4u4zgoPa4v20ObWGDPc69lZk2l21ggrB0aycBbuMw0BOOqJ'),
(3, 'Master', 'master', 'LQDkmwLps2JB41oQPg==', 'LgADQALps2LpAWMwpaFFKs/rNlSdUQGvs4u4zgoPa4v20ObWGDPc69lZk2l21ggrB0aycBbuMw0BOOqJ'),
(4, 'rifqi', 'rifqi', 'ZwOP+/ZguWINaZ4=', 'ZwOi4vZguWJC2eSRXg==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_dt_grooming`
--
ALTER TABLE `tb_dt_grooming`
  ADD PRIMARY KEY (`id_dt_grooming`),
  ADD KEY `id_grooming` (`id_grooming`),
  ADD KEY `id_users` (`id_user`);

--
-- Indexes for table `tb_dt_penitipan`
--
ALTER TABLE `tb_dt_penitipan`
  ADD PRIMARY KEY (`id_dt_penitipan`),
  ADD KEY `id_penitipan` (`id_penitipan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_grooming`
--
ALTER TABLE `tb_grooming`
  ADD PRIMARY KEY (`id_grooming`);

--
-- Indexes for table `tb_penitipan`
--
ALTER TABLE `tb_penitipan`
  ADD PRIMARY KEY (`id_penitipan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_dt_grooming`
--
ALTER TABLE `tb_dt_grooming`
  MODIFY `id_dt_grooming` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_dt_penitipan`
--
ALTER TABLE `tb_dt_penitipan`
  MODIFY `id_dt_penitipan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_grooming`
--
ALTER TABLE `tb_grooming`
  MODIFY `id_grooming` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_penitipan`
--
ALTER TABLE `tb_penitipan`
  MODIFY `id_penitipan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_dt_grooming`
--
ALTER TABLE `tb_dt_grooming`
  ADD CONSTRAINT `tb_dt_grooming_ibfk_1` FOREIGN KEY (`id_grooming`) REFERENCES `tb_grooming` (`id_grooming`),
  ADD CONSTRAINT `tb_dt_grooming_ibfk_2` FOREIGN KEY (`id_grooming`) REFERENCES `tb_grooming` (`id_grooming`),
  ADD CONSTRAINT `tb_dt_grooming_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_dt_penitipan`
--
ALTER TABLE `tb_dt_penitipan`
  ADD CONSTRAINT `tb_dt_penitipan_ibfk_1` FOREIGN KEY (`id_penitipan`) REFERENCES `tb_penitipan` (`id_penitipan`),
  ADD CONSTRAINT `tb_dt_penitipan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
