-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jul 2019 pada 15.14
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xpreso`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya_lomba`
--

CREATE TABLE `biaya_lomba` (
  `id` int(10) NOT NULL,
  `nama_lomba` varchar(255) NOT NULL,
  `biaya` varchar(255) DEFAULT NULL,
  `row` varchar(10) NOT NULL,
  `sub_harga` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biaya_lomba`
--

INSERT INTO `biaya_lomba` (`id`, `nama_lomba`, `biaya`, `row`, `sub_harga`) VALUES
(1, 'Futsal (SMP)', NULL, '', NULL),
(2, 'Futsal (SMA)', NULL, '', NULL),
(3, 'Basket (SMP)', '350.000,-/Tim', '', NULL),
(4, 'Basket (SMA)', '450.000,-/Tim', '', NULL),
(5, 'Silat (SMA)', '100.000,-/Orang', '<br><hr>', '150.000,-/Kontingen'),
(7, 'E-Sport (SMP, SMA, Umum)', '100.000,-/Squad', '', NULL),
(8, 'Marawis (SMA)', '200.000,-/Tim', '', NULL),
(9, 'Solo Vocal (SMP, SMA)', '85.000,-/Orang', '', NULL),
(10, 'MHQ (SMP)', '70.000,-/Orang', '', NULL),
(11, 'Dakwah (SMP, SMA)', '75.000,-/Orang', '', NULL),
(12, 'English Debate (SMA)', '100.000,-/Tim', '', NULL),
(13, 'Storytelling (SMP)', NULL, '', NULL),
(14, 'Cerdas Cermat Science and Religion (SMP)', '150.000,-/Tim', '', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `mata_lomba` varchar(255) NOT NULL,
  `lagu` varchar(255) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `no_sekolah` varchar(20) NOT NULL,
  `nama_pembina` varchar(128) NOT NULL,
  `no_pembina` varchar(20) NOT NULL,
  `tgl_dibuat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `registration`
--

INSERT INTO `registration` (`id`, `nama`, `email`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `nohp`, `mata_lomba`, `lagu`, `asal_sekolah`, `no_sekolah`, `nama_pembina`, `no_pembina`, `tgl_dibuat`) VALUES
(1, 'asda', 'admin@admin.com', 'L', '2019-07-30', 'aaa', 'aa', 'Futsal (SMP)', 'Photograph', 'aasdad', 'axadaa', 'dada', 'adad', '05-07-2019'),
(2, 'asdas', 'dsad@gmail.com', 'L', '2019-07-09', 'asdasdsadasdasdsadas', '12321312321', 'English Debate (SMA)', 'Photograph', 'sadsad', '21321321', '1wdas', '123123123', '07-08-2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(1) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'guest');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'admin', 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biaya_lomba`
--
ALTER TABLE `biaya_lomba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biaya_lomba`
--
ALTER TABLE `biaya_lomba`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
