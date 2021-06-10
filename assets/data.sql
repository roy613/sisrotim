-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 01:30 AM
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
  `d_posisi1` varchar(30) NOT NULL,
  `d_kec2` varchar(30) NOT NULL,
  `d_desa2` varchar(30) NOT NULL,
  `d_posisi2` varchar(30) NOT NULL,
  `d_kec3` varchar(30) NOT NULL,
  `d_desa3` varchar(30) NOT NULL,
  `d_posisi3` varchar(30) NOT NULL,
  `d_kec4` varchar(30) NOT NULL,
  `d_desa4` varchar(30) NOT NULL,
  `d_posisi4` varchar(30) NOT NULL,
  `d_kec5` varchar(30) NOT NULL,
  `d_desa5` varchar(30) NOT NULL,
  `d_posisi5` varchar(30) NOT NULL,
  `d_kec6` varchar(30) NOT NULL,
  `d_desa6` varchar(30) NOT NULL,
  `d_posisi6` varchar(30) NOT NULL,
  `d_kec7` varchar(30) NOT NULL,
  `d_desa7` varchar(30) NOT NULL,
  `d_posisi7` varchar(30) NOT NULL,
  `d_peta` varchar(255) NOT NULL,
  `d_status` int(2) NOT NULL,
  `d_jenis` int(1) NOT NULL,
  `d_ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`d_id`, `d_tentang`, `d_nomor`, `d_kec1`, `d_desa1`, `d_posisi1`, `d_kec2`, `d_desa2`, `d_posisi2`, `d_kec3`, `d_desa3`, `d_posisi3`, `d_kec4`, `d_desa4`, `d_posisi4`, `d_kec5`, `d_desa5`, `d_posisi5`, `d_kec6`, `d_desa6`, `d_posisi6`, `d_kec7`, `d_desa7`, `d_posisi7`, `d_peta`, `d_status`, `d_jenis`, `d_ket`) VALUES
(1, 'xcvsfvsf', '1', 'sangkulirang', 'maloy', 'selatan', 'kaliorang', 'kaliorang desa', 'utara', 'kaubun', 'kaubun desa', 'utara', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 1, ''),
(2, 'dfddfee', '2', 'kaubun', 'kaubun desa', 'barat', 'sangkulirang', 'sempayau', 'timur', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
