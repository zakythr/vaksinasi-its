-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Agu 2021 pada 10.10
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaksinasi-its`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalvaksin`
--

CREATE TABLE `jadwalvaksin` (
  `id` int(11) NOT NULL,
  `vaksinator` varchar(255) NOT NULL,
  `jenisvaksin` varchar(255) NOT NULL,
  `mulaidaftar` date NOT NULL,
  `selesaidaftar` date NOT NULL,
  `tglvaksin` date NOT NULL,
  `sesi_vaksin_mulai` time NOT NULL,
  `sesi_vaksin_selesai` time NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwalvaksin`
--

INSERT INTO `jadwalvaksin` (`id`, `vaksinator`, `jenisvaksin`, `mulaidaftar`, `selesaidaftar`, `tglvaksin`, `sesi_vaksin_mulai`, `sesi_vaksin_selesai`, `lokasi`, `kuota`) VALUES
(1, 'Jeruk', 'RS Mitra Keluarga', '2021-08-25', '2021-08-28', '2021-08-31', '18:14:00', '19:14:00', 'FTI Universitas Ahmad Dahlan', 1),
(2, 'Jeruk', 'RS Mitra Keluarga', '2021-08-24', '2021-08-28', '2021-08-22', '17:19:00', '19:19:00', 'FTI Universitas Ahmad Dahlan', 1),
(3, 'Jeruk', 'RS Mitra Keluarga', '2021-08-17', '2021-08-26', '2021-08-25', '17:22:00', '19:22:00', 'FTI Universitas Ahmad Dahlan', 1),
(4, 'RS Mitra Keluarga', 'GotongRoyong', '2021-08-24', '2021-08-26', '2021-08-22', '18:37:00', '19:37:00', 'FTI Universitas Ahmad Dahlan', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisvaksin`
--

CREATE TABLE `jenisvaksin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenisvaksin`
--

INSERT INTO `jenisvaksin` (`id`, `nama`) VALUES
(1, 'GotongRoyong'),
(2, 'Sinovac'),
(3, 'AstraZeneca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `kehadiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nip/npp` varchar(255) NOT NULL,
  `gol_darah` varchar(255) NOT NULL,
  `nomer_hp` varchar(255) NOT NULL,
  `status_aktif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaksinator`
--

CREATE TABLE `vaksinator` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vaksinator`
--

INSERT INTO `vaksinator` (`id`, `nama`) VALUES
(1, 'RS Mitra Keluarga'),
(2, 'RS Menur');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwalvaksin`
--
ALTER TABLE `jadwalvaksin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenisvaksin`
--
ALTER TABLE `jenisvaksin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vaksinator`
--
ALTER TABLE `vaksinator`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwalvaksin`
--
ALTER TABLE `jadwalvaksin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenisvaksin`
--
ALTER TABLE `jenisvaksin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `vaksinator`
--
ALTER TABLE `vaksinator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
