-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2017 at 08:59 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualanfilm`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(11) NOT NULL,
  `judul` varchar(20) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `tipe` varchar(15) NOT NULL DEFAULT '0',
  `best` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `judul`, `genre`, `harga`, `stok`, `image`, `tipe`, `best`) VALUES
(1, 'Ant Man', 'action', 40000, 10, '1.png', '', 1),
(2, 'Avengers', 'action', 40000, 4, '2.png\r\n', '', 1),
(3, 'Batman v Superman', 'action', 40000, 2, '3.png', '1', 1),
(4, 'Beauty and the beast', 'romance', 40000, 9, '4.png', '', 0),
(5, 'Beyond', 'action', 40000, 10, '5.png', '1', 0),
(6, 'Blazing Samurai', 'cartoon', 40000, 5, '6.png', '1', 0),
(7, 'Boss Baby', 'cartoon', 40000, -13, '7.png', '1', 0),
(8, 'Deadpool', 'action', 40000, 4, '8.png', '', 1),
(9, 'Dont Breathe', 'horror', 40000, 9, '9.png', '', 0),
(10, 'me before you', 'romance', 40000, 0, '15.png', '', 0),
(11, 'Doctor Strange', 'action', 40000, 10, '10.png', '0', 0),
(12, 'Fast and Furious 8', 'action', 40000, 10, '11.png', '0', 0),
(13, 'Jungle Book', 'adventure', 40000, 10, '12.png', '0', 0),
(14, 'Justice League', 'action', 40000, 10, '13.png', '0', 0),
(15, 'Kungfu Panda 3', 'cartoon', 40000, -1, '14.png\r\n', '0', 0),
(17, 'Moana', 'cartoon', 40000, 10, '16.png', '0', 0),
(18, 'Now You See Me', 'action', 40000, 10, '17.png', '0', 0),
(19, 'Rogue One', 'action', 40000, 10, '18.png', '0', 0),
(20, 'Suicide Squad', 'action', 40000, 10, '19.png', '0', 0),
(21, 'Tarzan', 'action', 40000, 9, '20.png', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idCart` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`idCart`, `idBarang`, `username`, `qty`, `total`, `status`) VALUES
(42, 2, 'mama', 7, 280000, 0),
(43, 3, 'mama', 6, 240000, 0),
(44, 1, 'mama', 1, 40000, 0),
(45, 5, 'mama', 7, 280000, 0),
(51, 18, 'coba', 1, 40000, 0),
(52, 6, 'adek', 8, 320000, 0),
(53, 10, 'adek', 1, 40000, 0),
(56, 10, 'user', 1, 40000, 1),
(57, 15, 'user', 5, 200000, 1),
(58, 3, 'coba', 3, 120000, 0),
(59, 6, 'coba', 8, 320000, 0),
(60, 15, 'coba', 5, 200000, 0),
(63, 7, 'bayu', 2, 80000, 1),
(64, 6, 'bayu', 8, 320000, 1),
(65, 7, 'user', 2, 80000, 1),
(66, 4, 'user', 1, 40000, 1),
(67, 15, 'bayu', 5, 200000, 1),
(68, 14, 'bayu', 1, 40000, 0),
(69, 9, 'bayu', 2, 80000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `daftarpenjualan`
--

CREATE TABLE `daftarpenjualan` (
  `idPenjualan` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarpenjualan`
--

INSERT INTO `daftarpenjualan` (`idPenjualan`, `idBarang`, `username`, `qty`, `total`) VALUES
(1, 8, 'ara', 1, 40000),
(2, 2, 'ara', 2, 80000),
(3, 3, 'ara', 1, 40000),
(4, 21, 'ara', 1, 40000),
(5, 3, 'ara', 3, 120000);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'aura@gmail.com'),
(2, 'aurakanzaa@yahoo.co.id'),
(3, 'a@b.co'),
(4, 'aurakanzaa@yahoo.co.id'),
(5, '');

-- --------------------------------------------------------

--
-- Table structure for table `sendto`
--

CREATE TABLE `sendto` (
  `idsendto` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `kota` varchar(15) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sendto`
--

INSERT INTO `sendto` (`idsendto`, `username`, `alamat`, `kodepos`, `kota`, `phone`) VALUES
(1, 'bayu', 'bandulan', 65148, 'malang', 1234589),
(2, 'bayu', 'jl. peltu sujono no 31', 123, 'malang', 1),
(4, 'mama', 'mlg', 65148, 'malang', 1234589),
(10, 'adek', 'jl. peltu sujono no 31', 65148, 'a', 1),
(11, 'user', 'JAKARTA', 1, 'a', 1),
(12, 'coba', 'jl. peltu sujono no 31', 1, 'malang', 1234589);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `full_name` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `rolee` varchar(10) NOT NULL DEFAULT 'user',
  `uang` int(11) NOT NULL DEFAULT '500000',
  `email` varchar(30) DEFAULT NULL,
  `hp` int(15) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kodepos` int(11) DEFAULT NULL,
  `kota` varchar(10) DEFAULT NULL,
  `hp_lain` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`full_name`, `username`, `password`, `rolee`, `uang`, `email`, `hp`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `kodepos`, `kota`, `hp_lain`) VALUES
('adek', 'adek', 'adek', 'user', 420000, 'aurakanzaa@yahoo.co.id', 2345678, 'Laki-Laki', '2017-01-04', 'bandulan', 65148, 'q', 0),
('admin', 'admin', 'admin', 'admin', 500000, 'aura@gmail.com', 1212121, 'Perempuan', '1996-11-02', 'malang', 65148, 'malang', 98754),
('admin', 'admin2', 'admin', 'admin', 500000, 'aurakanzaa@yahoo.co.id', 23456781, 'Laki-Laki', '1970-01-01', 'aaaaaaq', 1231, 'malang', 1234561),
('ara', 'ara', 'ara', 'user', 180000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('bayu', 'bayu', 'bayu', 'user', 20000, 'bayu@gmail.com', 981628, 'laki-laki', '1996-12-07', 'bandulan', 65148, 'malang', 989898),
('mama', 'mama', 'mama', '', 0, 'mama@gmail.com', 111, 'laki-laki', '1968-06-10', 'malang', 65148, 'sukun', 2222),
('user ', 'user', 'user', 'user', 60000, 'aurakanzaa@yahoo.co.id', 123980, 'perempuan', '1998-02-11', 'jl. peltu sujono no 31', 65148, 'malang', 987);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idCart`),
  ADD KEY `idBarang` (`idBarang`);

--
-- Indexes for table `daftarpenjualan`
--
ALTER TABLE `daftarpenjualan`
  ADD PRIMARY KEY (`idPenjualan`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sendto`
--
ALTER TABLE `sendto`
  ADD PRIMARY KEY (`idsendto`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idCart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `daftarpenjualan`
--
ALTER TABLE `daftarpenjualan`
  MODIFY `idPenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sendto`
--
ALTER TABLE `sendto`
  MODIFY `idsendto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`idBarang`) REFERENCES `barang` (`idBarang`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
