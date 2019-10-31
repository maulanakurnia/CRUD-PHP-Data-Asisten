-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 31 Okt 2019 pada 13.50
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_asisten`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_asisten`
--

CREATE TABLE `data_asisten` (
  `id_asisten` int(11) NOT NULL,
  `nama_asisten` varchar(120) NOT NULL,
  `nim` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_asisten`
--

INSERT INTO `data_asisten` (`id_asisten`, `nama_asisten`, `nim`) VALUES
(1, 'Dwi Ardhi', '123150082'),
(2, 'Rizal Ardhi', '123150078'),
(5, 'Marella Putri', '123150032'),
(6, 'Yogaswara', '123150056');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_mengajar`
--

CREATE TABLE `jadwal_mengajar` (
  `id_jadwal` int(11) NOT NULL,
  `id_asisten` int(11) NOT NULL,
  `lab` varchar(120) NOT NULL,
  `hari` varchar(120) NOT NULL,
  `waktu` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_mengajar`
--

INSERT INTO `jadwal_mengajar` (`id_jadwal`, `id_asisten`, `lab`, `hari`, `waktu`) VALUES
(1, 1, 'Lab Jaringan', 'Senin', '08.10-10.00'),
(6, 2, 'Lab Komputasi', 'Selasa', '10.30-12.30'),
(8, 5, 'Lab Basis Data', 'Kamis', '13.00-15.00'),
(10, 1, 'Lab Komputasi', 'Selasa', '10.30-12.30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_asisten`
--
ALTER TABLE `data_asisten`
  ADD PRIMARY KEY (`id_asisten`);

--
-- Indeks untuk tabel `jadwal_mengajar`
--
ALTER TABLE `jadwal_mengajar`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_asisten` (`id_asisten`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_asisten`
--
ALTER TABLE `data_asisten`
  MODIFY `id_asisten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jadwal_mengajar`
--
ALTER TABLE `jadwal_mengajar`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal_mengajar`
--
ALTER TABLE `jadwal_mengajar`
  ADD CONSTRAINT `jadwal_mengajar_ibfk_1` FOREIGN KEY (`id_asisten`) REFERENCES `data_asisten` (`id_asisten`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
