-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2022 pada 15.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmanga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_manga`
--

CREATE TABLE `table_manga` (
  `id_manga` varchar(10) NOT NULL,
  `nama_manga` varchar(20) NOT NULL,
  `author` varchar(50) NOT NULL,
  `harga_sewa` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_manga`
--

INSERT INTO `table_manga` (`id_manga`, `nama_manga`, `author`, `harga_sewa`, `stok`) VALUES
('DC-01', 'Detektif Conan Vol.1', 'Gosho Aoyama', '10000', 14),
('DC-02', 'Detektif Conan Vol.2', 'Gosho Aoyama', '10000', 12),
('DC-03', 'Detektif Conan Vol.3', 'Gosho Aoyama', '10000', 16),
('DC-04', 'Detektif Conan Vol.4', 'Gosho Aoyama', '10000', 11),
('DC-05', 'Detektif Conan Vol.5', 'Gosho Aoyama', '10000', 10),
('JK-01', 'Jujutsu Kaisen Vol.1', 'Gege Akutami', '10000', 10),
('JK-02', 'Jujutsu Kaisen Vol.2', 'Gege Akutami', '10000', 12),
('JK-03', 'Jujutsu Kaisen Vol.3', 'Gege Akutami', '10000', 14),
('JK-04', 'Jujutsu Kaisen Vol.4', 'Gege Akutami', '10000', 8),
('JK-05', 'Jujutsu Kaisen Vol.5', 'Gege Akutami', '10000', 10),
('OP-01', 'One Piece Vol.1', 'Eiichiro Oda', '10000', 7),
('OP-02', 'One Piece Vol.2', 'Eiichiro Oda', '10000', 5),
('OP-03', 'One Piece Vol.3', 'Eiichiro Oda', '10000', 9),
('OP-04', 'One Piece Vol.4', 'Eiichiro Oda', '10000', 6),
('OP-05', 'One Piece Vol.5', 'Eiichiro Oda', '10000', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_outlet`
--

CREATE TABLE `table_outlet` (
  `id_outlet` varchar(10) NOT NULL,
  `nama_outlet` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_outlet`
--

INSERT INTO `table_outlet` (`id_outlet`, `nama_outlet`, `alamat`) VALUES
('01-TMB', 'Outlet Rental Manga Tembung', 'Jl.Makmur psr 7 Tembung'),
('02-LTS', 'Outlet Rental Manga Letsu', 'Jl.Letda Sujono No.229'),
('03-MDN', 'Outlet Rental Manga Medan', 'Jl.M.Yamin No.67C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_rental`
--

CREATE TABLE `table_rental` (
  `id_rental` int(10) NOT NULL,
  `id_manga` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_outlet` varchar(10) NOT NULL,
  `tgl_rental` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `total_harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_user`
--

CREATE TABLE `table_user` (
  `email` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_user`
--

INSERT INTO `table_user` (`email`, `nama_user`, `alamat`, `no_hp`, `password`) VALUES
('pagasputra661@gmail.com', 'pagas sukarno putra', 'Jl.Langgar Bandar Setia', '081375931184', '$2y$10$h54lmvD9sf48qPUAD2AFHufg4uXQTnt2jBfysr0C9h9fqZ8uP1Tvu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_manga`
--
ALTER TABLE `table_manga`
  ADD PRIMARY KEY (`id_manga`);

--
-- Indeks untuk tabel `table_outlet`
--
ALTER TABLE `table_outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indeks untuk tabel `table_rental`
--
ALTER TABLE `table_rental`
  ADD PRIMARY KEY (`id_rental`),
  ADD KEY `fk_manga` (`id_manga`),
  ADD KEY `fk_user` (`email`),
  ADD KEY `fk_outlet` (`id_outlet`);

--
-- Indeks untuk tabel `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `table_rental`
--
ALTER TABLE `table_rental`
  MODIFY `id_rental` int(10) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `table_rental`
--
ALTER TABLE `table_rental`
  ADD CONSTRAINT `fk_manga` FOREIGN KEY (`id_manga`) REFERENCES `table_manga` (`id_manga`),
  ADD CONSTRAINT `fk_outlet` FOREIGN KEY (`id_outlet`) REFERENCES `table_outlet` (`id_outlet`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`email`) REFERENCES `table_user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
