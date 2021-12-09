-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 05:03 PM
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
-- Database: `dummydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(10001, 'admin@gmail.com', '$2y$10$YfETYRa0XP1DBBsZ0FMhCO1Y.WBxwUurcdY59Ly9Xh/0fYTgXi2X.'),
(11001, 'admin1@gmail.com', '$2y$10$fFVpcq2wp67htP.Q1iVcDu/V5DKSiNxsdJoDpFQdyRi6hA0ELRMTS'),
(12001, 'admin2@gmail.com', '$2y$10$3Y95GdFLaje808VdOq.XbevoWzJLu2li44S.jpKL1Bw6//roGDIWy'),
(13001, 'admin3@gmail.com', '$2y$10$.Mek5GHU6buPexjn4Wktq.j/gFZodmly3ZMllH3ygnIpzRL1X5Osm'),
(13003, 'rajarisqullah@gmail.com', '$2y$10$h50RpcyPd/gQwfEveLf03.3ssJR/.jvzwp4NiCBGxlrqNacA5RlZK'),
(13004, 'raihanfatoni23@gmail.com', '$2y$10$sVJSUCgCpn.I2avo1qVctuZxmcA0Z3.ctscJ9Yl3.fbXHHni.cPFe');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id_doctor` int(11) NOT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  `Alamat` varchar(30) DEFAULT NULL,
  `JenisKelamin` varchar(30) DEFAULT NULL,
  `Spesialis` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id_doctor`, `Nama`, `Alamat`, `JenisKelamin`, `Spesialis`) VALUES
(20001, 'Raihan Fatoni', 'Villa Bintaro Regency', 'Laki-laki', 'Kucing'),
(20002, 'Farhan Maulana', 'Gede Bage', 'Laki-laki', 'Kadal'),
(20003, 'Dimas Rahadia', 'Antapani', 'Laki-laki', 'Mamoth'),
(20004, 'Gavin Nugroho', 'Kelapa Gading', 'Laki-laki', 'Unggas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id_doctor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
