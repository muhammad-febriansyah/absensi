-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2022 pada 16.04
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fg_absen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `idkaryawan` int(11) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `masuk` time NOT NULL,
  `keluar` time NOT NULL,
  `idkehadiran` int(11) DEFAULT NULL,
  `idstatus` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id`, `idkaryawan`, `tgl`, `masuk`, `keluar`, `idkehadiran`, `idstatus`) VALUES
(30, 843511, '2022-01-06', '05:03:17', '05:03:37', 1, '2'),
(31, 685216, '2022-01-06', '08:23:33', '00:00:00', 1, '1'),
(32, 685216, '2022-01-21', '10:34:48', '10:34:59', 1, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(99) DEFAULT NULL,
  `username` varchar(99) DEFAULT NULL,
  `password` varchar(99) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `telp`, `level`, `status`) VALUES
(1, 'Administrator', 'admin', '7363a0d0604902af7b70b271a0b96480', '081295916567', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE `gedung` (
  `id` int(11) NOT NULL,
  `gedung` varchar(99) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`id`, `gedung`, `alamat`) VALUES
(4, 'Gudang A', 'Kp.bedahan'),
(5, 'Gudang B', 'Kp.bedahan'),
(6, 'Gudang C', 'Kp.bedahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `nama` varchar(99) DEFAULT NULL,
  `info` varchar(99) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `ip` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES
(1, 'Administrator', ' Telah melakukan login', '2022-01-05 14:04:06', '::1'),
(2, 'Administrator', ' Terakhir Login Pada', '2022-01-05 15:00:50', '::1'),
(3, 'Muhammad Febriansyah', ' Telah melakukan login', '2022-01-06 10:56:38', '::1'),
(4, 'Muhammad Febriansyah', ' Terakhir Login Pada', '2022-01-06 10:56:53', '::1'),
(6, 'Administrator', ' Telah melakukan login', '2022-01-06 12:18:34', '::1'),
(7, 'Administrator', ' Terakhir Login Pada', '2022-01-06 14:19:03', '::1'),
(8, 'Administrator', ' Telah melakukan login', '2022-01-06 14:19:07', '::1'),
(9, 'Administrator', ' Terakhir Login Pada', '2022-01-06 19:03:32', '::1'),
(10, 'Muhammad Febriansyah', ' Telah melakukan login', '2022-01-06 19:10:57', '::1'),
(11, 'Muhammad Febriansyah', ' Terakhir Login Pada', '2022-01-06 19:13:30', '::1'),
(12, 'Muhammad Febriansyah', ' Telah melakukan login', '2022-01-06 19:13:37', '::1'),
(13, 'Muhammad Febriansyah', ' Terakhir Login Pada', '2022-01-06 19:13:53', '::1'),
(14, 'Muhammad Febriansyah', ' Telah melakukan login', '2022-01-06 19:13:57', '::1'),
(15, 'Muhammad Febriansyah', ' Terakhir Login Pada', '2022-01-06 19:36:36', '::1'),
(16, 'Administrator', ' Telah melakukan login', '2022-01-06 19:36:40', '::1'),
(17, 'Administrator', ' Terakhir Login Pada', '2022-01-06 20:08:14', '::1'),
(18, 'Administrator', ' Telah melakukan login', '2022-01-06 20:10:21', '::1'),
(19, 'Administrator', ' Terakhir Login Pada', '2022-01-06 20:10:41', '::1'),
(20, 'Administrator', ' Telah melakukan login', '2022-01-06 20:17:59', '::1'),
(21, 'Administrator', ' Terakhir Login Pada', '2022-01-06 20:18:48', '::1'),
(22, 'Muhammad Febriansyah', ' Telah melakukan login', '2022-01-06 20:22:07', '::1'),
(23, 'Muhammad Febriansyah', ' Terakhir Login Pada', '2022-01-06 20:22:31', '::1'),
(24, 'Administrator', ' Telah melakukan login', '2022-01-06 20:22:38', '::1'),
(25, 'Administrator', ' Terakhir Login Pada', '2022-01-06 20:24:34', '::1'),
(26, 'Muhammad Febriansyah', ' Telah melakukan login', '2022-01-06 20:24:38', '::1'),
(27, 'Muhammad Febriansyah', ' Terakhir Login Pada', '2022-01-06 20:25:56', '::1'),
(28, 'Muhammad Febriansyah', ' Telah melakukan login', '2022-01-06 20:25:59', '::1'),
(29, 'Muhammad Febriansyah', ' Terakhir Login Pada', '2022-01-06 20:27:52', '::1'),
(30, 'Administrator', ' Telah melakukan login', '2022-01-06 20:28:13', '::1'),
(31, 'Administrator', ' Terakhir Login Pada', '2022-01-06 20:29:38', '::1'),
(32, 'Muhammad Febriansyah', ' Telah melakukan login', '2022-01-06 20:29:42', '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`) VALUES
(2, 'Karyawan'),
(3, 'Manajer'),
(4, 'Manajer Pemasaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam`
--

CREATE TABLE `jam` (
  `idjam` int(11) NOT NULL,
  `masuk` time DEFAULT NULL,
  `keluar` time DEFAULT NULL,
  `idkaryawan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jam`
--

INSERT INTO `jam` (`idjam`, `masuk`, `keluar`, `idkaryawan`) VALUES
(1, '07:43:37', '01:43:37', 843511);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `idkaryawan` varchar(99) DEFAULT NULL,
  `nip` varchar(99) DEFAULT NULL,
  `nama` varchar(99) DEFAULT NULL,
  `jk` varchar(99) DEFAULT NULL,
  `tempat_lahir` varchar(99) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `usia` varchar(99) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `email` varchar(99) DEFAULT NULL,
  `agama` varchar(99) DEFAULT NULL,
  `idjabatan` int(11) DEFAULT NULL,
  `idshift` int(11) DEFAULT NULL,
  `idgedung` int(11) DEFAULT NULL,
  `username` varchar(99) DEFAULT NULL,
  `password` varchar(99) DEFAULT NULL,
  `otp` varchar(99) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `qr` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `idkaryawan`, `nip`, `nama`, `jk`, `tempat_lahir`, `tgl_lhr`, `usia`, `telp`, `email`, `agama`, `idjabatan`, `idshift`, `idgedung`, `username`, `password`, `otp`, `status`, `alamat`, `qr`) VALUES
(7, '685216', '239613961', 'Muhammad Febriansyah', 'Laki-laki', 'Bogor', '2021-12-30', '', '081295916567', 'muhammadfebrian121@gmail.com', 'Islam', 2, 1, 4, 'febri', '7363a0d0604902af7b70b271a0b96480', '346933', 1, 'Jambi', '685216.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id` int(11) NOT NULL,
  `kehadiran` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kehadiran`
--

INSERT INTO `kehadiran` (`id`, `kehadiran`) VALUES
(1, 'Hadir'),
(2, 'Sakit'),
(3, 'Izin'),
(4, 'Lepas/Off');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `web` varchar(99) DEFAULT NULL,
  `keyword` varchar(99) DEFAULT NULL,
  `telp` varchar(99) DEFAULT NULL,
  `email` varchar(99) DEFAULT NULL,
  `yt` varchar(99) DEFAULT NULL,
  `fb` varchar(99) DEFAULT NULL,
  `ig` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `web`, `keyword`, `telp`, `email`, `yt`, `fb`, `ig`) VALUES
(1, 'E-Absensi', 'absensi pegawai menggunakan QRCODE', '081295916567', 'muhammadfebrian121@gmail.com', 'https://www.youtube.com/channel/UCQyBPY7Y7x_Zeqsf8LmgCoQ', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shift`
--

CREATE TABLE `shift` (
  `id` int(11) NOT NULL,
  `shift` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `shift`
--

INSERT INTO `shift` (`id`, `shift`) VALUES
(1, 'Shift Pagi'),
(2, 'Shift malam'),
(4, 'Shift Siang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Masuk'),
(2, 'Pulang'),
(3, 'Tidak Hadir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`idjam`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jam`
--
ALTER TABLE `jam`
  MODIFY `idjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `shift`
--
ALTER TABLE `shift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
