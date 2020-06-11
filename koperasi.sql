-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 04:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(5) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `angsuran`
--

CREATE TABLE `angsuran` (
  `id_angsuran` int(5) NOT NULL,
  `id_pinjaman` int(5) NOT NULL,
  `bayar_angsuran` int(20) NOT NULL,
  `tgl_angsuran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id_gaji` int(5) NOT NULL,
  `id_pembayaran` int(5) NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `tgl_gaji` date NOT NULL,
  `periode` varchar(20) NOT NULL,
  `hasil` int(6) NOT NULL,
  `harga` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kewajiban`
--

CREATE TABLE `kewajiban` (
  `id_kewajiban` int(5) NOT NULL,
  `kode_kwj` varchar(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kewajiban`
--

INSERT INTO `kewajiban` (`id_kewajiban`, `kode_kwj`, `nama`, `jumlah`) VALUES
(1, 'A1', 'Transpor', 42670),
(2, 'A2', 'Upah Panen', 75300),
(3, 'A3', 'Muat/Timbangan Buah', 15060),
(4, 'A4', 'FEE KUD', 18457),
(5, 'A5', 'Keamanan Gajian', 0),
(6, 'A6', 'Fee Dusun / Desa', 787),
(7, 'A7', 'Simpanan Wajib', 10000),
(8, 'A8', 'Keamanan Sub Unit', 7876),
(9, 'A9', 'Sumbangan Untuk Masjid', 4950),
(10, 'B1', 'Jasa KT', 10040),
(11, 'B2', 'Upah Bongkar / Uang Transport', 13554),
(12, 'B3', 'Operasional Muat / Panen', 10040),
(13, 'B4', 'Perawatan Jalan Poros', 5020),
(14, 'B5', 'Upah Langsir', 0),
(15, 'B6', 'Upah Muat Langsir', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kewajiban_anggota`
--

CREATE TABLE `kewajiban_anggota` (
  `id_kewajiban_agt` int(5) NOT NULL,
  `id_pembayaran` int(5) NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(5) NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `klpk_tani` varchar(20) NOT NULL,
  `bulan_pembayaran` date NOT NULL,
  `bulan_dibayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(5) NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `jumlah_pinjaman` int(20) NOT NULL,
  `sisa_pinjaman` int(10) NOT NULL,
  `tgl_pinjaman` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE `simpanan` (
  `id_simpanan` int(5) NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `jumlah_smpn_keseluruhan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `simpanan_pokok`
--

CREATE TABLE `simpanan_pokok` (
  `id_simpanan_pokok` int(5) NOT NULL,
  `id_simpanan` int(5) NOT NULL,
  `bayar_simpanan` int(10) NOT NULL,
  `tgl_simpanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `simpanan_sukarela`
--

CREATE TABLE `simpanan_sukarela` (
  `id_simpanan_sukarela` int(5) NOT NULL,
  `id_simpanan` int(5) NOT NULL,
  `bayar_simpanan` int(10) NOT NULL,
  `tgl_simpanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `simpanan_wk`
--

CREATE TABLE `simpanan_wk` (
  `id_simpanan_wk` int(5) NOT NULL,
  `id_simpanan` int(5) NOT NULL,
  `bayar_simpanan_w` int(10) NOT NULL,
  `bayar_simpanan_k` int(10) NOT NULL,
  `tgl_simpanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nama_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama_user`) VALUES
('admin', 'admin', 'admin'),
('admin2', 'admin2', 'admin2'),
('budi', 'budi123', 'budi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `angsuran`
--
ALTER TABLE `angsuran`
  ADD PRIMARY KEY (`id_angsuran`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indexes for table `kewajiban`
--
ALTER TABLE `kewajiban`
  ADD PRIMARY KEY (`id_kewajiban`);

--
-- Indexes for table `kewajiban_anggota`
--
ALTER TABLE `kewajiban_anggota`
  ADD PRIMARY KEY (`id_kewajiban_agt`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id_simpanan`);

--
-- Indexes for table `simpanan_pokok`
--
ALTER TABLE `simpanan_pokok`
  ADD PRIMARY KEY (`id_simpanan_pokok`);

--
-- Indexes for table `simpanan_sukarela`
--
ALTER TABLE `simpanan_sukarela`
  ADD PRIMARY KEY (`id_simpanan_sukarela`);

--
-- Indexes for table `simpanan_wk`
--
ALTER TABLE `simpanan_wk`
  ADD PRIMARY KEY (`id_simpanan_wk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `angsuran`
--
ALTER TABLE `angsuran`
  MODIFY `id_angsuran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_gaji` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kewajiban`
--
ALTER TABLE `kewajiban`
  MODIFY `id_kewajiban` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kewajiban_anggota`
--
ALTER TABLE `kewajiban_anggota`
  MODIFY `id_kewajiban_agt` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `id_simpanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `simpanan_pokok`
--
ALTER TABLE `simpanan_pokok`
  MODIFY `id_simpanan_pokok` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `simpanan_sukarela`
--
ALTER TABLE `simpanan_sukarela`
  MODIFY `id_simpanan_sukarela` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `simpanan_wk`
--
ALTER TABLE `simpanan_wk`
  MODIFY `id_simpanan_wk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
