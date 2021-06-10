-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2021 pada 05.39
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `d_id` int(11) NOT NULL,
  `d_tentang` varchar(255) NOT NULL,
  `d_nomor` varchar(30) NOT NULL,
  `d_kec1` varchar(3) NOT NULL,
  `d_desa1` varchar(3) NOT NULL,
  `d_posisi1` varchar(30) NOT NULL,
  `d_kec2` varchar(3) NOT NULL,
  `d_desa2` varchar(3) NOT NULL,
  `d_posisi2` varchar(30) NOT NULL,
  `d_kec3` varchar(3) NOT NULL,
  `d_desa3` varchar(3) NOT NULL,
  `d_posisi3` varchar(30) NOT NULL,
  `d_kec4` varchar(3) NOT NULL,
  `d_desa4` varchar(3) NOT NULL,
  `d_posisi4` varchar(30) NOT NULL,
  `d_kec5` varchar(3) NOT NULL,
  `d_desa5` varchar(3) NOT NULL,
  `d_posisi5` varchar(30) NOT NULL,
  `d_kec6` varchar(3) NOT NULL,
  `d_desa6` varchar(3) NOT NULL,
  `d_posisi6` varchar(30) NOT NULL,
  `d_kec7` varchar(3) NOT NULL,
  `d_desa7` varchar(3) NOT NULL,
  `d_posisi7` varchar(30) NOT NULL,
  `d_peta` varchar(255) NOT NULL,
  `d_status` int(2) NOT NULL,
  `d_jenis` int(1) NOT NULL,
  `d_ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`d_id`, `d_tentang`, `d_nomor`, `d_kec1`, `d_desa1`, `d_posisi1`, `d_kec2`, `d_desa2`, `d_posisi2`, `d_kec3`, `d_desa3`, `d_posisi3`, `d_kec4`, `d_desa4`, `d_posisi4`, `d_kec5`, `d_desa5`, `d_posisi5`, `d_kec6`, `d_desa6`, `d_posisi6`, `d_kec7`, `d_desa7`, `d_posisi7`, `d_peta`, `d_status`, `d_jenis`, `d_ket`) VALUES
(1, 'xcvsfvsf', '1', '1', '1', 'selatan', '2', '1', 'utara', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 1, ''),
(2, 'dfddfee', '2', '2', '1', 'barat', '1', '1', 'timur', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`d_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
