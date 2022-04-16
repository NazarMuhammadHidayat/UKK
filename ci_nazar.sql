-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2021 pada 16.23
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_nazar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_pkl`
--

CREATE TABLE `admin_pkl` (
  `id_admin` int(50) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `alamat_admin` varchar(100) NOT NULL,
  `kontak_admin` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_pkl`
--

INSERT INTO `admin_pkl` (`id_admin`, `nama_admin`, `alamat_admin`, `kontak_admin`) VALUES
(1, 'bobon santos0', 'cinehel', 11111111),
(2, 'disza', 'Kalangsari', 2147483647),
(3, 'aldi', 'la', 52365236);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `nisn` int(25) NOT NULL,
  `nama_peserta` varchar(100) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `no_hp` int(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`nisn`, `nama_peserta`, `jenis_kelamin`, `no_hp`, `alamat`) VALUES
(13, 'obet ', 'P', 6324735, 'alah siah boy'),
(15, 'riska', 'P', 2147483647, 'ARGASARI'),
(17, 'jeremy rak', 'L', 23456235, 'Archer'),
(18, 'miftah', 'L', 5234653, 'Leuwianyar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_pkl`
--
ALTER TABLE `admin_pkl`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`nisn`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_pkl`
--
ALTER TABLE `admin_pkl`
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `nisn` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
