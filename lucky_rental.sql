-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2020 pada 03.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lucky_rental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`, `role_id`) VALUES
(1, 'lucky', 'lucky', 'Padalarang', 'Laki-Laki', '089605279689', '527281827021701720', '339a65e93299ad8d72c42b263aa23117', 2),
(2, 'admin', 'admin', 'padalarang', 'Laki Laki', '0896829182912', '55271928719812', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `kode_type` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `no_plat` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `ac` int(11) NOT NULL,
  `supir` int(11) NOT NULL,
  `mp3_player` int(11) NOT NULL,
  `central_lock` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `kode_type`, `merk`, `no_plat`, `warna`, `tahun`, `status`, `harga`, `denda`, `ac`, `supir`, `mp3_player`, `central_lock`, `gambar`) VALUES
(8, 'LMB', 'Lamborgini', 'B 0001 LUCK', 'Hitam', '2020', '0', 500000, 200000, 1, 0, 1, 1, 'LAMBO.jpg'),
(9, 'FTR', 'Fortuner', 'B 0002 LUCK', 'Putih', '2007', '0', 200000, 50000, 1, 1, 1, 1, 'FORTUNER.jpg'),
(10, 'CRL', 'Toyota Corola', 'B 0003 LUCK', 'Hitam', '1998', '1', 1000000, 10000, 0, 0, 1, 1, 'COROLA.jpg'),
(11, 'BMW', 'BMW', 'B 0004 LUCK', 'Abu abu', '2007', '1', 200000, 300000, 1, 1, 1, 1, 'bmw-concept-i4-hometeaser-desktop.jpg'),
(12, 'ALPD', 'ALPHARD', 'B 0005 LUCK', 'Putih', '2020', '1', 1200000, 300000, 1, 1, 1, 1, 'Harga-Mobil-Toyota-Alphard-Terbaru-Feature-Image-1024x5761.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_rental` varchar(255) NOT NULL,
  `status_pengembalian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` varchar(123) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(255) NOT NULL,
  `status_rental` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(225) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_mobil`, `tanggal_rental`, `tanggal_kembali`, `harga`, `denda`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(3, 1, 2, '2020-02-01', '2020-02-02', '500000', '100000', '0000-00-00', 'Belum Kembali', 'Belum Selesai', 'zz', 1),
(4, 1, 3, '2020-01-01', '2020-01-02', '200000', '50000', '0000-00-00', 'Belum Kembali', 'Selesai', 'z', 1),
(5, 1, 2, '2020-02-02', '2020-02-01', '500000', '100000', '0000-00-00', 'Belum Kembali', 'Belum Selesai', 'z', 1),
(6, 1, 5, '2020-02-02', '2020-02-03', '200000', '20000', '0000-00-00', 'Belum Kembali', 'Selesai', 'z', 1),
(7, 1, 4, '2020-04-03', '2020-04-04', '200000', '20000', '0000-00-00', 'Belum Kembali', 'Belum Selesai', '', 0),
(8, 1, 2, '2020-04-04', '2020-04-30', '500000', '100000', '0000-00-00', 'Belum Kembali', 'Belum Selesai', 'z', 0),
(9, 1, 6, '2020-04-04', '2020-04-30', '200000', '800000', '0000-00-00', 'Belum Kembali', 'Belum Selesai', 'coffee_beans_coffee_close_up_120092_6000x4000.jpg', 0),
(10, 4, 7, '2020-04-04', '2020-04-23', '200000', '50000', '0000-00-00', 'Belum Kembali', 'Belum Selesai', 'Modul_9_Praktikum_ISD.pdf', 1),
(11, 1, 8, '2020-04-01', '2020-04-02', '500000', '200000', '0000-00-00', 'Belum Kembali', 'Belum Selesai', '', 0),
(12, 1, 9, '0000-00-00', '0000-00-00', '200000', '50000', '0000-00-00', 'Belum Kembali', 'Belum Selesai', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `type`
--

CREATE TABLE `type` (
  `id_type` int(150) NOT NULL,
  `kode_type` varchar(255) NOT NULL,
  `nama_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(4, 'LMB', 'Lamborgini'),
(5, 'FTR', 'Fortuner'),
(6, 'CRL', 'Corola'),
(7, 'BMW', 'BMW'),
(8, 'ALPD', 'ALPHARD');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indeks untuk tabel `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
