-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 04:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_grosir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `idAdmin` int(5) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`idAdmin`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kodeBarang` varchar(20) NOT NULL,
  `namaBarang` varchar(100) DEFAULT NULL,
  `stokBarang` int(5) DEFAULT NULL,
  `hargaBeli` int(10) DEFAULT NULL,
  `hargaJual` int(10) DEFAULT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `gambarBarang` varchar(100) DEFAULT NULL,
  `idSupplier` int(11) NOT NULL,
  `idKategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`kodeBarang`, `namaBarang`, `stokBarang`, `hargaBeli`, `hargaJual`, `deskripsi`, `gambarBarang`, `idSupplier`, `idKategori`) VALUES
('5875445654476', 'Minyak Kita', 88, 158000, 162000, 'Minyak Kita 1 DUS 1 Liter', '58754456544762.png', 2, 1),
('8996001600726', 'Galon Le Minarale', 100, 18000, 22000, 'Galon Le Minarale', 'galon-le.png', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `idKategori` int(11) NOT NULL,
  `namaKategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`idKategori`, `namaKategori`) VALUES
(1, 'Groceries'),
(4, 'Mineral Water'),
(5, 'Seasoning');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `idPelanggan` int(11) NOT NULL,
  `namaPelanggan` varchar(100) DEFAULT NULL,
  `jenisKelamin` varchar(10) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `alamat` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`idPelanggan`, `namaPelanggan`, `jenisKelamin`, `telp`, `alamat`) VALUES
(1, 'Bu Sri Haryani', 'P', '081228064125', 'Desa Purwokarto RT 05/RW 08 Kelurahan Puro, Kecamatan Karangmalang, Kabupaten Sragen');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `idSupplier` int(11) NOT NULL,
  `namaSupplier` varchar(100) DEFAULT NULL,
  `alamat` tinytext DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`idSupplier`, `namaSupplier`, `alamat`, `no_telp`) VALUES
(1, 'Wings Non Food', 'Jl. Embong Malang No.61-65\r\nGedung Ekonomi Lt.7\r\nSurabaya 60261', '081225762847'),
(2, 'Unilever Indonesia', 'Grha Unilever , Green Office Park Kav. 3 Jl BSD Boulevard Barat , BSD City , Tangerang 15345 Indonesia', '08001558000'),
(5, 'Grosir Indonesia', 'Jalan Padjajaran No. 18, Kota Bandung, Provinsi Jawa Barat', '085638150292');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `waktuTransaksi` datetime DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `idPelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `idTransaksi` int(11) NOT NULL,
  `kodeBarang` varchar(20) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kodeBarang`),
  ADD KEY `idSupplier` (`idSupplier`),
  ADD KEY `idKategori` (`idKategori`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`idPelanggan`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`idSupplier`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `idPelanggan` (`idPelanggan`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD KEY `idTransaksi` (`idTransaksi`),
  ADD KEY `kodeBarang` (`kodeBarang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `idAdmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `idPelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `idSupplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD CONSTRAINT `tbl_barang_ibfk_1` FOREIGN KEY (`idSupplier`) REFERENCES `tbl_supplier` (`idSupplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_barang_ibfk_2` FOREIGN KEY (`idKategori`) REFERENCES `tbl_kategori` (`idKategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `tbl_pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `transaksi_detail_ibfk_1` FOREIGN KEY (`idTransaksi`) REFERENCES `tbl_transaksi` (`idTransaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_detail_ibfk_2` FOREIGN KEY (`kodeBarang`) REFERENCES `tbl_barang` (`kodeBarang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
