-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2021 pada 17.35
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user` int(15) NOT NULL,
  `id_lawan` int(15) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_user`, `id_lawan`, `isi`, `waktu`) VALUES
(1, 3, 1, 'halo', '2021-12-07 22:27:15'),
(2, 2, 1, 'haloo', '2021-12-07 22:27:39'),
(3, 3, 1, 'ini siapa?\n', '2021-12-07 22:28:06'),
(4, 2, 3, 'aaaa', '2021-12-07 22:29:05'),
(5, 3, 2, 'halo', '2021-12-07 22:29:45'),
(6, 2, 3, 'kalo siapa?\n', '2021-12-07 22:29:59'),
(7, 3, 2, 'aku indra', '2021-12-07 22:30:10'),
(8, 2, 3, 'aku juga indra', '2021-12-07 22:30:37'),
(9, 2, 6, 'hallo..!!\n', '2021-12-11 17:54:49'),
(10, 4, 1, 'haloo', '2021-12-11 20:41:21'),
(11, 2, 1, 'hai', '2021-12-11 21:00:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`) VALUES
(1, 'user', 'User', 'ee11cbb19052e40b07aac0ca060c23ee'),
(2, 'admin', 'indra ardiansyah', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'indra', 'aku indra', 'e24f6e3ce19ee0728ff1c443e4ff488d'),
(4, 'aku', 'aku', '89ccfac87d8d06db06bf3211cb2d69ed'),
(5, 'siapa', 'siapa', '2128e15b849bb3d5b1fa88cc18d494fe'),
(6, 'ardiansyah', 'indra', '67828759c3e2eefe362f296dfe71ec6c');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
