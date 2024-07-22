-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2024 at 06:16 PM
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
  `idAdmin` int(11) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `stokBarang` int(11) DEFAULT NULL,
  `hargaBeli` int(11) DEFAULT NULL,
  `hargaJual` int(11) DEFAULT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `gambarBarang` varchar(100) DEFAULT NULL,
  `idSupplier` int(11) NOT NULL,
  `idKategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`kodeBarang`, `namaBarang`, `stokBarang`, `hargaBeli`, `hargaJual`, `deskripsi`, `gambarBarang`, `idSupplier`, `idKategori`) VALUES
('5875445654476', 'Minyak Kita 1L/box', 94, 158000, 162000, 'Minyak Kita 1 DUS 1 Liter', 'minyakkita.png', 2, 1),
('71184433014', 'ABC Sardines Chili 155G', 78, 12900, 14900, 'Abc Sardines Chili 155G', '71184433014.png', 11, 6),
('8992628020152', 'Minyak Bimoli Reffil 1L', 76, 22700, 25000, 'Minyak goreng bimoli reffil 1 L', '8992628020152.png', 6, 1),
('8993200661343', 'Cimory Yogurt Squeeze Mango Sticky Rice 120G', 70, 8900, 10000, 'Yogurt cimory 120g', '8993200661343.png', 7, 7),
('8993200664399', 'Kanzler Crispy Chicken Nugget 450g', 45, 45000, 48000, 'Nugget ayam krispi 450g', '8993200664399.png', 7, 6),
('8996001401187', 'Gentle Gen Morning Breeze 700 ml', 100, 14900, 19900, 'Gentle Gen Morning Breeze 700 ml', '8996001401187.png', 10, 9),
('8996001600726', 'Galon Le Minarale', 93, 18000, 22000, 'Galon Le Minarale', 'galon-le.png', 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `idKategori` int(11) NOT NULL,
  `namaKategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`idKategori`, `namaKategori`) VALUES
(1, 'Groceries'),
(4, 'Mineral Water'),
(6, 'Fast Food'),
(7, 'Drink'),
(8, 'Seasoning'),
(9, 'Detergent');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `idSupplier` int(11) NOT NULL,
  `namaSupplier` varchar(100) DEFAULT NULL,
  `alamat` tinytext DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`idSupplier`, `namaSupplier`, `alamat`, `no_telp`) VALUES
(1, 'Wings Non Food', 'Jl. Embong Malang No.61-65\r\nGedung Ekonomi Lt.7\r\nSurabaya 60261', '081225762847'),
(2, 'Unilever Indonesia', 'Grha Unilever , Green Office Park Kav. 3 Jl BSD Boulevard Barat , BSD City , Tangerang 15345 Indonesia', '08001558000'),
(5, 'Grosir Indonesia', 'Jalan Padjajaran No. 18, Kota Bandung, Provinsi Jawa Barat', '085638150292'),
(6, 'Indofood Sukses Makmur', 'Sudirman Plaza Indofood Tower Lantai 23\r\nJl. Jend. Sudirman Kav. 76-78\r\nJakarta DKI Jakarta', '08271853927'),
(7, 'Cisarua Mountain Dairy (Cimory)', 'Jl. Komp. Rukan Taman Meruya No.N/27-28, RT.16/RW.7, Meruya Utara, Kec. Kembangan, Kota Jakarta Barat', '081224395162'),
(10, 'Mayora Indah', 'Gedung Mayora Jl. Tomang Raya Kav 21–23, Jakarta Barat', '082847901232'),
(11, 'ABC Indonesia', 'Tamanmartani, Kalasan, Sleman Regency, Special Region of Yogyakarta', '087091283823');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `waktuTransaksi` datetime DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `kodeInvoice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`idTransaksi`, `waktuTransaksi`, `total`, `kodeInvoice`) VALUES
(1, '2024-07-12 06:43:52', 66000, '450398316'),
(2, '2024-07-17 06:45:52', 854000, '450398316'),
(3, '2024-07-17 06:50:39', 486000, '519736446'),
(4, '2024-07-17 07:10:08', 324000, '1436874738'),
(5, '2024-07-17 07:49:58', 368000, '1566175936'),
(6, '2024-07-17 17:05:52', 228000, '1435826250'),
(7, '2024-07-17 17:52:39', 162000, '1557831937'),
(8, '2024-07-17 18:46:59', 44000, '1929329313'),
(9, '2024-07-18 15:58:51', 162000, '226675886'),
(10, '2024-07-19 01:29:07', 462000, '1157149872'),
(11, '2024-07-19 01:30:10', 78000, '111502202');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `idDetail` int(11) NOT NULL,
  `idTransaksi` int(11) NOT NULL,
  `kodeBarang` varchar(20) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`idDetail`, `idTransaksi`, `kodeBarang`, `harga`, `qty`) VALUES
(1, 1, '8996001600726', 22000, 3),
(2, 2, '5875445654476', 162000, 5),
(3, 2, '8996001600726', 22000, 2),
(4, 3, '5875445654476', 162000, 3),
(5, 4, '5875445654476', 162000, 2),
(6, 5, '5875445654476', 162000, 2),
(7, 5, '8996001600726', 22000, 2),
(8, 6, '8996001600726', 22000, 3),
(9, 6, '5875445654476', 162000, 1),
(10, 7, '5875445654476', 162000, 1),
(11, 8, '8996001600726', 22000, 2),
(12, 9, '5875445654476', 162000, 1),
(13, 10, '8993200661343', 10000, 2),
(14, 10, '8993200664399', 48000, 4),
(15, 10, '8992628020152', 25000, 10),
(16, 11, '8993200661343', 10000, 3),
(17, 11, '8993200664399', 48000, 1);

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
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`idSupplier`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`idDetail`),
  ADD KEY `idTransaksi` (`idTransaksi`),
  ADD KEY `kodeBarang` (`kodeBarang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `idSupplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `idDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
-- Constraints for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `transaksi_detail_ibfk_1` FOREIGN KEY (`idTransaksi`) REFERENCES `tbl_transaksi` (`idTransaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_detail_ibfk_2` FOREIGN KEY (`kodeBarang`) REFERENCES `tbl_barang` (`kodeBarang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
