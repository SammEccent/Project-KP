-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2025 pada 18.24
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelurahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pass_hash` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `pass_hash`, `role`, `nama`, `email`) VALUES
(1, 'admin1', 'admin1234', '$2y$10$YE6Y3oSlqUOMuNzFhVHsZeQqI3HU6KsiYAFhfAVds9sRh8i0wUgmG', 'admin', 'Budi Santoso', 'budisantoso@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `nama_fasilitas` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `map` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `jenis`, `nama_fasilitas`, `alamat`, `map`) VALUES
(1, 'Pendidikan', 'SDN Lengkong Wetan 1', 'Jl. Lengkong Wetan, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', 'https://www.google.com/maps/place/Lengkong+Wetan+1+Serpong+Elementary+School/@-6.2793099,106.6690543,17.69z/data=!4m14!1m7!3m6!1s0x2e69fb1eb3eb0839:0x210535aaa7f725a8!2sLengkong+Wetan+1+Serpong+Elementary+School!8m2!3d-6.2794113!4d106.6706422!16s%2Fg%2F1h'),
(2, 'Pendidikan', 'SDN Lengkong Wetan 2', 'Jl. BSD Bintaro No.32, Lengkong Wetan, Kec. Serpong, Kota Tangerang Selatan, Banten 15310', 'https://www.google.com/maps/place/UPTD+Sekolah+Dasar+Negeri+Lengkong+Wetan+02/@-6.2827695,106.6837531,17.8z/data=!4m14!1m7!3m6!1s0x2e69fae779ccae95:0x888e2ad1cd2922f1!2sUPTD+Sekolah+Dasar+Negeri+Lengkong+Wetan+02!8m2!3d-6.2823618!4d106.684979!16s%2Fg%2F1h');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
