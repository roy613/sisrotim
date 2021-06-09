-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2021 pada 14.03
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
-- Struktur dari tabel `master_desa`
--

CREATE TABLE `master_desa` (
  `md_id` int(5) NOT NULL,
  `md_kec` int(5) NOT NULL,
  `md_desa` varchar(35) NOT NULL,
  `md_ket` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_desa`
--

INSERT INTO `master_desa` (`md_id`, `md_kec`, `md_desa`, `md_ket`) VALUES
(1, 1, 'maloy', ''),
(2, 1, 'sempayau', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `master_desa`
--
ALTER TABLE `master_desa`
  ADD PRIMARY KEY (`md_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `master_desa`
--
ALTER TABLE `master_desa`
  MODIFY `md_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
