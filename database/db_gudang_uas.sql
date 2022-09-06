-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql113.byethost8.com
-- Waktu pembuatan: 11 Agu 2022 pada 04.06
-- Versi server: 10.3.27-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b8_32169102_db_gudang_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `email`, `pass`) VALUES
(1, 'alfisal', 'punjungalfisal@gmail.com', '9f7dd5cac8a9003a142d707e2000e94c'),
(2, 'alfisalpunjungkurniawan', 'punjung@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'punjung', 'punjung@gmail.com', 'c073056da68f19e52e175afee0cd3868');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gudang`
--

CREATE TABLE `tb_gudang` (
  `id` int(11) NOT NULL,
  `nama_staff` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `kode_barang` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_barang` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `harga_barang` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `nama_supplier` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_barang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kabupaten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kode_area` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_gudang`
--

INSERT INTO `tb_gudang` (`id`, `nama_staff`, `kode_barang`, `jenis_barang`, `harga_barang`, `nama_supplier`, `jumlah_barang`, `alamat`, `kota`, `kabupaten`, `kode_area`) VALUES
(3, 'Alfisal', 'B0001', 'Bahan Pemansi', '60000', 'Raiahn', '700', 'Jakarta', 'Sukoharjo', 'Sukoharjo', '57163'),
(4, 'Joko', 'k001', 'Kemasan', '50000', 'Mocha', '700', 'Kartasura ', 'Solo', 'Sukoharjo', '57163'),
(5, 'Punjung', 'B0002', 'Singkong', '100000', 'Kurniawan', '500', 'Kartasura', 'Solo', 'Sukoharjo', '57163');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `email`, `pass`) VALUES
(6, 'anggota', 'anggota@gmail.com', 'c073056da68f19e52e175afee0cd3868'),
(7, 'Alfisal Punjung 23', 'alfisal@gmail.com', '1a031e81eb09abe9d49e2cea403d459e');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_gudang`
--
ALTER TABLE `tb_gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_gudang`
--
ALTER TABLE `tb_gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
