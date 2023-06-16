-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2023 pada 12.41
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `login_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`login_id`, `username`, `email`, `password`) VALUES
(1, 'ersy', 'ersy@gmail', '123'),
(2, 'ergen', 'ergeni@gmail', 'r12'),
(3, 'ergen', 'ersygn71@gmail.com', '123'),
(4, 'nissa', 'nissa@gmail.com', 'nis123'),
(5, 'erer', 'nagari@gmail', 'rrr'),
(6, 'jejen', 'ergeni@gmail', '456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `customer_id` int(11) NOT NULL,
  `nama_resto` varchar(150) NOT NULL,
  `nama_customer` varchar(150) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pax` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `catatan_menu` varchar(500) NOT NULL,
  `bukti_bayar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`customer_id`, `nama_resto`, `nama_customer`, `no_telp`, `email`, `pax`, `tanggal`, `jam`, `catatan_menu`, `bukti_bayar`) VALUES
(1, 'wapo', 'nissa', '08111', 'nissa@gmail.com', '2', '2023-06-13', '12:41:00', 'es teh 8, mie goreng jawa 2, nasi goreng jawa 2', 0x30),
(2, 'wapo', 'nissa', '08111', 'nissa@gmail.com', '2', '2023-06-13', '12:41:00', 'es teh 8, mie goreng jawa 2, nasi goreng jawa 2', 0x30),
(3, 'wapo', 'ersy', '08999', 'ersy@gmail', '8', '2023-06-12', '08:14:00', 'es teh 8, mie goreng jawa 2, nasi goreng jawa 2', 0x30),
(4, 'wapo', 'er', '08999', 'ersygn71@gmail.com', '8', '2023-06-21', '08:19:00', 'es teh 8, mie goreng jawa 2, nasi goreng jawa 2', 0x6272312e6a706567),
(5, 'wapo', 'er', '08999', 'ersy@gmail', '8', '2023-06-13', '08:21:00', 'es teh 8, mie goreng jawa 2, nasi goreng jawa 2', 0x6272312e6a706567),
(6, 'wapo', 'ersy', '08999', 'ersy@gmail', '8', '2023-06-12', '20:56:00', 'es teh 8, mie goreng jawa 2', 0x6c322e706e67),
(7, 'layar', 'er', '08999', 'nagari@gmail', '8', '2023-06-29', '21:49:00', 'seafood A 2', 0x6c322e706e67),
(8, 'layar', 'ersy', '08999', 'ersy@gmail', '8', '2023-07-06', '17:00:00', 'es teh 8, mie goreng jawa 2', 0x6c322e706e67),
(9, 'bu rudy', 'ersy', '08999', 'ersy@gmail', '8', '2023-06-13', '22:02:00', 'es teh 8', 0x706a2e706e67),
(10, 'wapo', 'er', '08999', 'ersy@gmail', '8', '2023-06-29', '22:28:00', 'es teh 8, mie goreng jawa 2, nasi goreng jawa 2', 0x6c322e706e67),
(11, 'bu rudy', 'ersy', '08999', 'ersy@gmail', '8', '2023-06-14', '08:10:00', 'seafood A 2', 0x6c322e706e67),
(12, 'layar', 'jeni', '0888', 'erjen@gamil.com', '3', '2023-06-15', '12:44:00', 'Seafood ', 0x6c6f676f202831292e706e67),
(13, 'layar', 'jeni', '0888', 'erjen@gamil.com', '3', '2023-06-15', '12:44:00', 'Seafood ', 0x6c6f676f202831292e706e67),
(14, 'layar', 'nissa', '08999', 'nissa@gmail.com', '4', '2023-06-29', '04:38:00', 'seafood A 2', 0x6c322e706e67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `resto`
--

CREATE TABLE `resto` (
  `resto_id` int(11) NOT NULL,
  `nama_resto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `resto`
--

INSERT INTO `resto` (`resto_id`, `nama_resto`) VALUES
(1, 'wapo'),
(2, 'layar'),
(3, 'bu rudy'),
(4, 'tahu telor pak jayen');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeks untuk tabel `resto`
--
ALTER TABLE `resto`
  ADD PRIMARY KEY (`resto_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `resto`
--
ALTER TABLE `resto`
  MODIFY `resto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
