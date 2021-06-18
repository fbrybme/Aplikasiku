-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2021 pada 09.12
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kodebuku` varchar(8) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` int(11) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun` int(11) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kodebuku`, `judul`, `kategori`, `pengarang`, `penerbit`, `tahun`, `sinopsis`, `gambar`) VALUES
('KB-001', '7 hari mahir database', 1, 'Fbrybme', 'Ibme', 2021, 'Buku ini membahas tentang bagaimana cara belajar database dengan cepat', 'gambar1.jpg'),
('KB-002', '7 hari mahir photoshop', 2, 'Fbrybme', 'Ibme', 2021, 'Buku ini membahas tentang bagaimana cara belajar photoshop dengan cepat', 'gambar2.jpg'),
('KB-003', '7 hari mahir canva', 3, 'Fbrybme', 'Ibme', 2021, 'Buku ini membahas tentang bagaimana cara belajar canva dengan cepat', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kodebuku`),
  ADD KEY `kategori` (`kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
