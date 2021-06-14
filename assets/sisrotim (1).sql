-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 08:08 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisrotim`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `d_id` int(11) NOT NULL,
  `d_tentang` varchar(255) NOT NULL,
  `d_nomor` varchar(30) NOT NULL,
  `d_kec1` varchar(30) NOT NULL,
  `d_desa1` varchar(30) NOT NULL,
  `d_posisi1` int(1) NOT NULL,
  `d_kec2` varchar(30) NOT NULL,
  `d_desa2` varchar(30) NOT NULL,
  `d_posisi2` int(1) NOT NULL,
  `d_kec3` varchar(30) DEFAULT NULL,
  `d_desa3` varchar(30) DEFAULT NULL,
  `d_posisi3` int(1) DEFAULT NULL,
  `d_kec4` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `d_desa4` varchar(30) DEFAULT NULL,
  `d_posisi4` int(1) DEFAULT NULL,
  `d_kec5` varchar(30) DEFAULT NULL,
  `d_desa5` varchar(30) DEFAULT NULL,
  `d_posisi5` int(1) DEFAULT NULL,
  `d_kec6` varchar(30) DEFAULT NULL,
  `d_desa6` varchar(30) DEFAULT NULL,
  `d_posisi6` int(1) DEFAULT NULL,
  `d_kec7` varchar(30) DEFAULT NULL,
  `d_desa7` varchar(30) DEFAULT NULL,
  `d_posisi7` int(1) DEFAULT NULL,
  `d_pgaris` int(10) NOT NULL,
  `d_peta` varchar(255) NOT NULL,
  `d_status` int(1) NOT NULL,
  `d_jenis` int(1) NOT NULL,
  `d_ket` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`d_id`, `d_tentang`, `d_nomor`, `d_kec1`, `d_desa1`, `d_posisi1`, `d_kec2`, `d_desa2`, `d_posisi2`, `d_kec3`, `d_desa3`, `d_posisi3`, `d_kec4`, `d_desa4`, `d_posisi4`, `d_kec5`, `d_desa5`, `d_posisi5`, `d_kec6`, `d_desa6`, `d_posisi6`, `d_kec7`, `d_desa7`, `d_posisi7`, `d_pgaris`, `d_peta`, `d_status`, `d_jenis`, `d_ket`) VALUES
(1, 'xcvsfvsf', '1', 'sangkulirang', 'maloy', 2, 'kaliorang', 'kaliorang desa', 1, 'kaubun', 'kaubun desa', 1, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, '', 1, 3, 0),
(2, 'dfddfee', '2', 'kaubun', 'kaubun desa', 2, 'sangkulirang', 'sempayau', 1, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, '', 1, 1, 0),
(3, 'dfdf', 'sddsfdsf', 'sangkulirang', 'sempayau', 3, 'sangkulirang', 'maloy', 1, 'sangkulirang', 'sempayau', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4545, 'laki5.png', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_desa`
--

CREATE TABLE `master_desa` (
  `md_id` int(5) NOT NULL,
  `md_kec` varchar(30) NOT NULL,
  `md_desa` varchar(35) NOT NULL,
  `md_ket` int(1) NOT NULL,
  `md_luas` int(11) NOT NULL,
  `md_segmen` int(11) NOT NULL,
  `md_peta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_desa`
--

INSERT INTO `master_desa` (`md_id`, `md_kec`, `md_desa`, `md_ket`, `md_luas`, `md_segmen`, `md_peta`) VALUES
(1, 'sangkulirang', 'maloy', 1, 0, 2, ''),
(2, 'sangkulirang', 'sempayau', 1, 0, 1, ''),
(7, 'sangatta utara', 'sangatta utara', 1, 4545, 45, 'edit.png');

-- --------------------------------------------------------

--
-- Table structure for table `master_kecamatan`
--

CREATE TABLE `master_kecamatan` (
  `mk_id` int(5) NOT NULL,
  `mk_kec` varchar(30) NOT NULL,
  `mk_ket` int(1) NOT NULL,
  `mk_ibukota` varchar(30) NOT NULL,
  `mk_luas` int(11) NOT NULL,
  `mk_segmen` int(11) NOT NULL,
  `mk_peta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_kecamatan`
--

INSERT INTO `master_kecamatan` (`mk_id`, `mk_kec`, `mk_ket`, `mk_ibukota`, `mk_luas`, `mk_segmen`, `mk_peta`) VALUES
(1, 'sangkulirang', 1, '', 0, 10, ''),
(3, 'bengalon', 1, '', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `p_id` int(2) NOT NULL,
  `nama` varchar(21) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`p_id`, `nama`, `username`, `pass`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `master_desa`
--
ALTER TABLE `master_desa`
  ADD PRIMARY KEY (`md_id`);

--
-- Indexes for table `master_kecamatan`
--
ALTER TABLE `master_kecamatan`
  ADD PRIMARY KEY (`mk_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_desa`
--
ALTER TABLE `master_desa`
  MODIFY `md_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_kecamatan`
--
ALTER TABLE `master_kecamatan`
  MODIFY `mk_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `p_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
