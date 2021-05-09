-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2021 pada 08.07
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kendaraan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(10) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'kucing1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_angkot`
--

CREATE TABLE `data_angkot` (
  `no` int(11) NOT NULL,
  `id_angkot` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `rute` varchar(400) NOT NULL,
  `kota` text NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_angkot`
--

INSERT INTO `data_angkot` (`no`, `id_angkot`, `jurusan`, `rute`, `kota`, `harga`) VALUES
(1, 'D1/AX ', 'Dukuh Semar – Perumnas', 'Dukuh Semar – Pegambiran – Krucuk – Perumnas', 'Cirebon', 10000),
(2, 'D2', 'Dukuh Semar – Krucuk – Majasem', 'Dukuh Semar – Kesambi – Merdeka – Pesisir – Krucuk – Tuparev – Kedawung – Majasem', 'Cirebon', 10500),
(3, 'D3', 'Dukuh Semar – Majasem – Kesambi', 'Dukuh Semar – Majasem – Pemuda – Kartini – Pasar Pagi (PGC) – Kesambi', 'Cirebon', 10000),
(4, 'D4/BX', 'Dukuh Semar – Pasuketan', 'Dukuh Semar – Kedawung – Tuparev – Hero – Pasuketan', 'Cirebon', 5000),
(5, 'D5', 'Dukuh Semar – Perumnas', 'Dukuh Semar – Jagasatru – Pasuketan – PGC – Surya – Krucuk – Stasiun – Grage – Cipto – Terminal – Perumnas', 'Cirebon', 5000),
(6, 'D6', 'Dukuh Semar – Perum Rajawali', 'Dukuh Semar – Kesambi – Drajat – Grage – Krucuk – Stasiun – PGC – Karang Getas – Kesambi – Perum Rajawali', 'Cirebon', 15000),
(7, 'D7', 'Dukuh Semar – Mas Gandasari – Pilang – Tuparev', 'Dukuh Semar – PGC – Kartini – Wahidin – Pilang – Kedawung – Tuparev – Grage – Pemuda – By Pass – Terminal', 'Cirebon', 7000),
(8, 'D8', 'Dukuh Semar – Pilang – Pasar Pagi – Jagasatru', 'Dukuh Semar – Grage – Kedawung – Wahidin – Kartini – PGC – Asia – Pekiringan – Jagasatru – Drajat – Terminal', 'Cirebon', 12000),
(9, 'D9', 'Dukuh Semar – Kebun Pelok', 'Dukuh Semar – Kedawung – Evakuasi – Kanggraksan – Kebun Pelok', 'Cirebon', 5000),
(10, 'D10', 'Dukuh Semar – Benda', 'Dukuh Semar – Benda', 'Cirebon', 10000),
(11, 'GS', 'Gunung Sari – Sumber', 'Gunung Sari – Kanggraksan – kesambi – Cipto – Wahidin – Krucuk – Siliwangi – kesambi – kanggraksan – Sumber', 'Cirebon', 10000),
(12, 'GM', 'Gunung Sari – Mundu', 'Gunung Sari – PGC – Kesambi – Cipto – Krucuk – Pesisir – Cangkol – Mundu', 'Cirebon', 7000),
(13, 'GP', 'Gunung Sari – Plered', 'Gunung Sari – Kedawung – Tuparev – Wahidin – Pesisir – Bahagia – Tentara Pelajar – Plered', 'Cirebon', 11000),
(14, 'GC', 'Gunung Sari – Ciperna', 'Gunung Sari – Merdeka – Grage – Surya – Bahagia – Penggung – Ciperna', 'Cirebon', 9000),
(15, 'GG\r\n', 'Gunung Sari – Clancang', 'Gunung Sari – Hero – Klayan – Clancang', 'Cirebon', 8000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(15) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `nama`, `email`, `feedback`) VALUES
(23, 'Saya', 'Nemo@Nemo.com', 'Saya TIdak Suka Web INi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_angkot`
--
ALTER TABLE `data_angkot`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_angkot`
--
ALTER TABLE `data_angkot`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
