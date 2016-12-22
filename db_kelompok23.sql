-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2016 at 01:29 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kelompok23`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_bayar`
--

CREATE TABLE `t_bayar` (
  `no_faktur` varchar(10) NOT NULL,
  `uang_bayar` decimal(8,0) NOT NULL,
  `uang_kembali` decimal(8,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_bayar`
--

INSERT INTO `t_bayar` (`no_faktur`, `uang_bayar`, `uang_kembali`) VALUES
('F000000001', '136760', '0');

-- --------------------------------------------------------

--
-- Table structure for table `t_buku`
--

CREATE TABLE `t_buku` (
  `kd_buku` varchar(6) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `jenis_buku` varchar(50) NOT NULL,
  `karang_buku` varchar(50) NOT NULL,
  `terbit_buku` varchar(50) NOT NULL,
  `tahun_buku` int(4) NOT NULL,
  `harga_buku` decimal(8,0) NOT NULL,
  `stok_buku` int(4) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_buku`
--

INSERT INTO `t_buku` (`kd_buku`, `judul_buku`, `jenis_buku`, `karang_buku`, `terbit_buku`, `tahun_buku`, `harga_buku`, `stok_buku`, `foto`) VALUES
('KB0001', 'Temeraire Buku 1: His Majesty Dragon', 'Science Fiction & Fantasy', 'Naomi Novic', 'Elex Media Komputindo', 2012, '53380', 5, ''),
('KB0002', 'Immortal #4 The Realms Of The Gods: Alam Para Dewa', 'Science Fiction & Fantasy', 'Tamora Pierce', '	Elex Media Komputindo', 2013, '40800', 8, ''),
('KB0003', 'Joomla Site Security + Cd', 'Computing & Internet', 'Su Rahman', '	Elex Media Komputindo', 2013, '29580', 4, ''),
('KB0004', 'Simple Yoga', 'Diet & Health', 'Swami Vidyanand', 'Bhuana Ilmu Populer', 2008, '24650', 5, ''),
('KB0005', 'Agribisnis Rambutan', 'Agriculture', 'Arief Prahasta', 'PUSTAKA GRAFIKA', 2010, '29750', 0, ''),
('KB0006', '100% Siap Tempur Seleksi Tes Masuk TNI Polri', 'psychology', 'Aditya A Christian, Sarwadi & Setia Utami', 'GENIUS', 2014, '50000', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `t_pelanggan`
--

CREATE TABLE `t_pelanggan` (
  `kd_pelanggan` varchar(6) NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL,
  `alamat_pelanggan` varchar(50) NOT NULL,
  `telpon_pelanggan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pelanggan`
--

INSERT INTO `t_pelanggan` (`kd_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `telpon_pelanggan`) VALUES
('K00001', 'Sukijan', 'jl sukijan', '084323244323'),
('K00002', 'Runi', 'jl Runi no 2', '08124124422312');

-- --------------------------------------------------------

--
-- Table structure for table `t_transaksi`
--

CREATE TABLE `t_transaksi` (
  `no_faktur` varchar(10) NOT NULL,
  `tgl_faktur` date NOT NULL,
  `kd_pelanggan` varchar(6) NOT NULL,
  `id_user` varchar(4) NOT NULL,
  `kd_buku` varchar(6) NOT NULL,
  `jumlah_beli` int(4) NOT NULL,
  `biaya_kirim` decimal(8,0) NOT NULL,
  `total_bayar` decimal(8,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_transaksi`
--

INSERT INTO `t_transaksi` (`no_faktur`, `tgl_faktur`, `kd_pelanggan`, `id_user`, `kd_buku`, `jumlah_beli`, `biaya_kirim`, `total_bayar`) VALUES
('F000000001', '2016-12-17', 'K00001', 'A001', 'KB0001', 2, '30000', '136760');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` varchar(4) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `type_user` varchar(15) NOT NULL,
  `telpon_user` int(20) NOT NULL,
  `alamat_user` varchar(20) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama_user`, `type_user`, `telpon_user`, `alamat_user`, `password_user`, `last_login`) VALUES
('A001', 'Admin', 'Admin', 988222111, 'jl sepak ads', '63a9f0ea7bb98050796b649e85481845', '2016-12-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_buku`
--
ALTER TABLE `t_buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `t_pelanggan`
--
ALTER TABLE `t_pelanggan`
  ADD PRIMARY KEY (`kd_pelanggan`);

--
-- Indexes for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  ADD PRIMARY KEY (`no_faktur`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
