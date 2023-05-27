-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2023 pada 08.49
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kai_kya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `peran` varchar(20) NOT NULL,
  `waktu_login` datetime NOT NULL,
  `waktu_logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `activity_log`
--

INSERT INTO `activity_log` (`id`, `no`, `nama_user`, `peran`, `waktu_login`, `waktu_logout`) VALUES
(45, 28, 'hisyam', 'OP Purwokerto', '2022-12-24 14:20:07', '2022-12-24 14:20:13'),
(46, 29, 'admin', 'Admin', '2022-12-24 14:20:22', '2022-12-24 14:20:35'),
(47, 30, 'admin', 'Admin', '2022-12-24 14:20:45', '2022-12-24 14:20:52'),
(49, 32, 'hisyam', 'OP Purwokerto', '2022-12-24 14:41:42', '2022-12-24 14:41:57'),
(50, 33, 'admin', 'Admin', '2022-12-24 14:42:10', '2022-12-24 14:43:02'),
(52, 34, 'admin', 'Admin', '2022-12-24 14:43:11', '2022-12-24 14:43:29'),
(54, 36, 'admin', 'Admin', '2022-12-24 15:15:43', '2022-12-24 15:15:58'),
(55, 37, 'admin', 'Admin', '2022-12-24 15:16:10', '2022-12-24 15:16:21'),
(56, 38, 'ilham', 'OP Kutoarjo', '2022-12-24 15:18:49', '2022-12-24 15:19:34'),
(57, 39, 'kroya', 'OP Kroya', '2022-12-25 21:34:02', '2022-12-25 21:34:48'),
(58, 40, 'ilham', 'OP Kutoarjo', '2022-12-25 21:35:51', '2022-12-25 21:36:51'),
(59, 41, 'kroya', 'OP Kroya', '2022-12-25 21:36:58', '0000-00-00 00:00:00'),
(60, 42, 'kroya', 'OP Kroya', '2022-12-25 21:40:50', '0000-00-00 00:00:00'),
(61, 43, 'kroya', 'OP Kroya', '2022-12-25 22:26:31', '2022-12-25 22:26:52'),
(62, 44, 'ilham', 'OP Kutoarjo', '2022-12-25 22:26:58', '2022-12-25 22:32:30'),
(63, 45, 'hisyam', 'OP Purwokerto', '2022-12-25 22:32:37', '2022-12-25 23:08:30'),
(64, 46, 'ilham', 'OP Kutoarjo', '2022-12-25 23:08:39', '2022-12-25 23:14:08'),
(65, 47, 'kroya', 'OP Kroya', '2022-12-25 23:15:05', '2022-12-25 23:23:35'),
(66, 48, 'ilham', 'OP Kutoarjo', '2022-12-25 23:23:44', '2022-12-25 23:52:10'),
(67, 49, 'kroya', 'OP Kroya', '2022-12-25 23:52:16', '2022-12-25 23:55:58'),
(68, 50, 'ilham', 'OP Kutoarjo', '2022-12-25 23:56:05', '0000-00-00 00:00:00'),
(69, 51, 'kroya', 'OP Kroya', '2022-12-26 06:01:53', '0000-00-00 00:00:00'),
(70, 52, 'ilham', 'OP Kutoarjo', '2022-12-26 08:38:23', '0000-00-00 00:00:00'),
(71, 53, 'ilham', 'OP Kutoarjo', '2022-12-26 08:40:54', '2022-12-26 08:45:39'),
(72, 54, 'admin1', 'Admin', '2022-12-26 08:46:37', '2022-12-26 09:01:36'),
(73, 55, 'ilham', 'OP Kutoarjo', '2022-12-26 09:10:44', '0000-00-00 00:00:00'),
(74, 56, 'admin', 'Admin', '2022-12-26 14:56:00', '2022-12-26 14:56:08'),
(75, 57, 'admin', 'Admin', '2022-12-26 14:56:24', '2022-12-26 14:58:10'),
(76, 58, 'admin', 'Admin', '2022-12-26 15:13:22', '2022-12-26 15:13:58'),
(77, 59, 'admin', 'Admin', '2022-12-26 15:14:06', '2022-12-26 15:14:11'),
(78, 60, 'kutoarjo', 'OP Kutoarjo', '2022-12-26 15:15:30', '2022-12-26 15:21:00'),
(79, 61, 'kutoarjo', 'OP Kutoarjo', '2022-12-26 15:21:14', '0000-00-00 00:00:00'),
(80, 62, 'admin', 'Admin', '2022-12-26 16:09:53', '2022-12-26 16:10:21'),
(81, 63, 'admin', 'Admin', '2022-12-26 16:10:27', '0000-00-00 00:00:00'),
(82, 64, 'kutoarjo', 'Admin', '2022-12-27 12:06:36', '2022-12-27 12:06:41'),
(83, 65, 'kutoarjo', 'Admin', '2022-12-27 12:06:55', '2022-12-27 12:07:16'),
(84, 66, 'kutoarjo', 'OP Kutoarjo', '2022-12-27 12:07:26', '0000-00-00 00:00:00'),
(85, 67, 'kutoarjo', 'OP Kutoarjo', '2022-12-28 04:56:43', '0000-00-00 00:00:00'),
(86, 68, 'kutoarjo', 'OP Kutoarjo', '2022-12-28 05:04:53', '0000-00-00 00:00:00'),
(87, 69, 'ali', 'OP Kroya', '2023-02-09 09:03:17', '0000-00-00 00:00:00'),
(88, 70, 'admin', 'Admin', '2023-02-09 09:16:49', '2023-02-09 09:16:55'),
(89, 71, 'ali', 'OP Kroya', '2023-02-09 09:17:01', '0000-00-00 00:00:00'),
(90, 72, 'kroya', 'OP Kroya', '2023-02-09 09:21:18', '0000-00-00 00:00:00'),
(91, 73, 'ali', 'OP Kroya', '2023-02-09 11:14:45', '0000-00-00 00:00:00'),
(92, 74, 'kroya', 'OP Kroya', '2023-02-09 11:22:04', '0000-00-00 00:00:00'),
(93, 75, 'kroya', 'OP Kroya', '2023-02-09 11:22:42', '0000-00-00 00:00:00'),
(94, 76, 'kroya', 'OP Kroya', '2023-02-09 13:42:36', '0000-00-00 00:00:00'),
(95, 77, 'ali', 'OP Kroya', '2023-02-20 04:12:30', '2023-02-21 06:32:01'),
(96, 78, 'admin', 'Admin', '2023-02-21 06:32:11', '2023-02-21 06:48:17'),
(97, 79, 'ali', 'OP Kroya', '2023-02-21 06:48:24', '0000-00-00 00:00:00'),
(98, 80, 'ali', 'OP Kroya', '2023-02-21 14:28:24', '0000-00-00 00:00:00'),
(99, 81, 'ali', 'OP Kroya', '2023-02-22 21:35:02', '0000-00-00 00:00:00'),
(100, 82, 'ali', 'OP Kroya', '2023-02-23 07:35:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departure`
--

CREATE TABLE `departure` (
  `id` int(11) NOT NULL,
  `nomor` int(11) NOT NULL,
  `no_ka` varchar(100) NOT NULL,
  `nama_ka` varchar(100) NOT NULL,
  `relasi` varchar(100) NOT NULL,
  `jadwal_berangkat` varchar(5) NOT NULL,
  `jadwal_datang` varchar(5) NOT NULL,
  `jumlah` int(1) NOT NULL,
  `purwokerto_datang` varchar(5) NOT NULL,
  `purwokerto_berangkat` varchar(5) NOT NULL,
  `stamformasi` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `departure`
--

INSERT INTO `departure` (`id`, `nomor`, `no_ka`, `nama_ka`, `relasi`, `jadwal_berangkat`, `jadwal_datang`, `jumlah`, `purwokerto_datang`, `purwokerto_berangkat`, `stamformasi`, `keterangan`) VALUES
(1154, 1, '304/301', 'SERAYU ', ' KIARACONDONG', '', '', 1, '', '06:45', '', ''),
(1155, 2, '112B', 'RANGGAJATI ', ' SURABAYA', '', '', 3, '', '08:37', '', ''),
(1156, 3, '153A', 'SAWUNGGALIH  ', '  PASAR SENEN', '', '', 2, '', '09:03', '', ''),
(1157, 4, '143B', 'FAJAR UTAMA YOGYA ', ' PASAR SENEN', '', '', 2, '', '09:44', '', ''),
(1158, 5, '195B', 'JOGLOSEMARKERTO', 'TEGAL', '', '', 2, '', '10:08', '', ''),
(1159, 6, '260A', 'KUTOJAYA UTARA ', ' KUTOARJO', '', '', 3, '', '10.40', '', ''),
(1160, 7, '81C', 'TAKSAKA  ', '  GAMBIR', '', '', 2, '', '10:54', '', ''),
(1161, 8, '134C', 'FAJAR UTAMA SOLO ', ' SOLO BALAPAN', '', '', 3, '', '11:13', '', ''),
(1162, 9, '7C', 'ARGO LAWU ', ' GAMBIR', '', '', 2, '', '11:18', '', ''),
(1163, 10, '228A', 'KAMANDAKA ', ' CILACAP ', '', '', 3, '', '11:45', '', ''),
(1164, 11, '292E', 'BENGAWAN  ', '  PURWOSARI', '', '', 3, '', '12:10', '', ''),
(1165, 12, '121D', 'BANGUNKARTA  ', '  PASAR SENEN', '', '', 2, '', '12:20', '', ''),
(1166, 13, '144E', 'FAJAR UTAMA YOGYA ', ' YOGYAKARTA', '', '', 3, '', '12:26', '', ''),
(1167, 14, '135B', 'MATARAM  ', '   PASAR SENEN', '', '', 2, '', '12:36', '', ''),
(1168, 15, '154C', 'SAWUNGGALIH   ', '  KUTOARJO', '', '', 3, '', '12:41', '', ''),
(1169, 16, '137C', 'BOGOWONTO ', ' PASAR SENEN', '', '', 2, '', '13:00', '', ''),
(1170, 17, '10C', 'ARGO DWIPANGGA ', ' SOLO BALAPAN', '', '', 3, '', '13:12', '', ''),
(1171, 18, '10543', 'TAMBAHAN SOLO GAMBIR ', ' GAMBIR', '', '', 2, '', '13:26', '', ''),
(1172, 19, '82D', 'TAKSAKA  ', '  YOGYAKARTA', '', '', 3, '', '13:33', '', ''),
(1173, 20, '190C', 'JOGLOSEMARKERTO ', '  YOGYA ', '', '', 3, '', '13:59', '', ''),
(1174, 21, '57C', 'ARGO LAWU TAMBAHAN  ', ' GAMBIR', '', '', 2, '', '13:26', '', ''),
(1175, 22, '7025B', 'TAKSAKA TAMBAHAN ', ' GAMBIR', '', '', 2, '', '14:30', '', ''),
(1176, 23, 'KP/11039', 'TAMBAHAN SOLO GAMBIR ', ' GAMBIR', '', '', 2, '', '14:52', '', ''),
(1177, 24, '60C', 'ARGO DWIPANGGA TAMBAHAN ', ' SOLO', '', '', 3, '', '15:21', '', ''),
(1178, 25, 'KP/227A', 'KAMANDAKA  ', '  SEMARANG TAWANG', '', '', 2, '', '15:41', '', ''),
(1179, 26, 'KP/10910', 'TAMBAHAN GAMBIR YOGYA ', ' YOGYA', '', '', 3, '', '16:00', '', ''),
(1180, 27, '85A', 'PURWOJAYA  ', '  GAMBIR', '', '', 2, '', '16:02', '', ''),
(1181, 28, '308/305', 'SERAYU ', ' KIARACONDONG', '', '', 1, '', '16:30', '', ''),
(1182, 29, '104C', 'GAYA BARU MALAM ', ' SURABAYA GUB', '', '', 3, '', '16:47', '', ''),
(1183, 30, '187A', 'JOGLOSEMARKERTO', 'TEGAL', '', '', 4, '', '17:10', '', ''),
(1184, 31, '122C', 'BANGUNKARTA ', ' JOMBANG', '', '', 3, '', '17:11', '', ''),
(1185, 32, '111B', 'RANGGAJATI  ', '  CIREBON', '', '', 2, '', '17:22', '', ''),
(1186, 33, '258A', 'JAKA TINGKIR ', ' PURWOSARI', '', '', 3, '', '18:02', '', ''),
(1187, 34, '293B', 'PROGO ', ' PASAR SENEN', '', '', 2, '', '18:13', '', ''),
(1188, 35, '170C', 'KERTANEGARA  ', '  MALANG', '', '', 4, '', '18:20', '', ''),
(1189, 36, '259F', 'KUTOJAYA UTARA ', ' JAKARTA KOTA', '', '', 2, '', '19:13', '', ''),
(1190, 37, '103C', 'GAYA BARU MALAM ', ' PASAR SENEN', '', '', 2, '', '19:57', '', ''),
(1191, 38, '141C', 'SENJA UTAMA YOGYA ', ' PASAR SENEN', '', '', 2, '', '20:36', '', ''),
(1192, 39, '155A', 'SAWUNGGALIH  ', '  PASAR SENEN', '', '', 2, '', '21:00', '', ''),
(1193, 40, '133D', 'SENJA UTAMA SOLO  ', '  PASAR SENEN', '', '', 2, '', '21:34', '', ''),
(1194, 41, '76E', 'BIMA (KA 76)  ', '  SURABAYA GUBENG', '', '', 3, '', '21:58', '', ''),
(1195, 42, '253C', 'JAYAKARTA (KA 253) ', ' PASAR SENEN', '', '', 2, '', '22:05', '', ''),
(1196, 43, '7046', 'TAMBAHAN GAMBIR SOLO ', ' SOLO', '', '', 3, '', '15:21', '', ''),
(1197, 44, '', 'KAMANDAKA KA 184', '', '', '', 4, '', 'UTARA', '', ''),
(1198, 45, '71C', 'GAJAYANA (KA 71) ', '  GAMBIR', '', '', 2, '', '22:31', '', ''),
(1199, 46, '254B', 'JAYAKARTA (KA 254) ', '  SURABAYA GUBENG', '', '', 3, '', '22:46', '', ''),
(1200, 47, '9C', 'ARGO DWIPANGGA (KA 9)  ', '  GAMBIR', '', '', 2, '', '22:52', '', ''),
(1201, 48, '102C', 'SINGASARI (KA 102)  ', '  BLITAR', '', '', 3, '', '23:05', '', ''),
(1202, 49, '83C', 'TAKSAKA (KA 83) ', '  GAMBIR', '', '', 2, '', '23:14', '', ''),
(1203, 50, '72C', 'GAJAYANA (KA 72)  ', '  MALANG', '', '', 3, '', '23:30', '', ''),
(1204, 0, '75E', 'BIMA( KA 75)   ', '   GAMBIR', '', '', 2, '', '23:52', '', ''),
(1205, 0, '156C', 'SAWUNGGALIH  (KA 156) ', '  KUTOARJO', '', '', 3, '', '23:57', '', ''),
(1206, 0, '7011B', 'TAKSAKA TAMBAHAN(7011B)', 'GAMBIR', '', '', 2, '', '00:18', '', ''),
(1207, 0, '141B', 'SENJA UTAMA YOGYA (KA 142) ', ' YOGYAKARTA', '', '', 3, '', '00.45', '', ''),
(1208, 0, '101C', 'SINGASARI (KA 101) ', '  PASAR SENEN', '', '', 2, '', '00:55', '', ''),
(1209, 0, '8C', 'ARGO LAWU  (KA 8 )', '  SOLO BALAPAN', '', '', 3, '', '01:09', '', ''),
(1210, 0, '291B', 'BENGAWAN  (KA 291)', '  PASAR SENEN', '', '', 2, '', '01:15', '', ''),
(1211, 0, '7045', 'ARGO DWIPANGGA TAMBAHAN (59C)', 'GAMBIR', '', '', 2, '', '01:35', '', ''),
(1212, 0, '84D', 'TAKSAKA (KA 84) ', '  YOGYAKARTA', '', '', 3, '', '01:53', '', ''),
(1213, 0, '136D', 'MATARAM (KA 136)  ', '  SOLO  BALAPAN', '', '', 3, '', '02:40', '', ''),
(1214, 0, '86B', 'PURWOJAYA  ', '  CILACAP', '', '', 3, '', '03:33', '', ''),
(1215, 0, '138B', 'BOGOWONTO  ', '  LEMPUYANGAN', '', '', 3, '', '04.48', '', ''),
(1216, 0, '7124', 'TAMBAHAN GAMBIR SOLO ', ' SOLO', '', '', 3, '', '04:03', '', ''),
(1217, 0, '294C', 'PROGO  ', '  LEMPUYANGAN', '', '', 3, '', '04:19', '', ''),
(1218, 0, '183A', 'KAMANDAKA  ', ' TEGAL S/D SEMARANG', '', '', 2, '', '05:00', '', ''),
(1219, 0, '7026B', 'TAKSAKA TAMBAHAN ', ' YOGYAKARTA', '', '', 3, '', '05.15', '', ''),
(1220, 0, '248B', 'LOGAWA  ', '  SURABAYA ', '', '', 5, '', '05:30', '', ''),
(1221, 0, '10909', 'TAMBAHAN YK', 'gambir', '', '', 2, '', '00.18', '', ''),
(1222, 0, '257A', 'JAKA TINGKIR ', ' PASAR SENEN', '', '', 2, '', '03:31', '', ''),
(1223, 0, '58C', 'ARGO LAWU TAMBHN ', ' SOLO BALAPAN', '', '', 3, '', '04:03', '', ''),
(1224, 0, '11046', 'TAMBAHAN GAMBIR SOLO ', 'SOLO BALAPAN', '', '', 3, '', '05:57', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departure_kroya`
--

CREATE TABLE `departure_kroya` (
  `id` int(11) NOT NULL,
  `noka` varchar(100) NOT NULL,
  `namaka` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `jadwalberangkat` varchar(5) NOT NULL,
  `jadwaldatang` varchar(5) NOT NULL,
  `jalur` int(1) NOT NULL,
  `stamformasi` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `departure_kroya`
--

INSERT INTO `departure_kroya` (`id`, `noka`, `namaka`, `tujuan`, `jadwalberangkat`, `jadwaldatang`, `jalur`, `stamformasi`, `keterangan`, `jenis`) VALUES
(1567, '101AA', 'Serayu-Baru', 'Kroya', '10:19', '10:10', 6, '-', '', 'Pilih Jenis Kereta...'),
(1569, '101', 'Serayu-Baru', 'KROYA', '10:11', '10:10', 6, '-', 'kereta tambahan', '1'),
(1591, '2725', 'Karsolo Service', 'Gambir', '11:12', '11:11', 1, '', 'TAMBAH', '1'),
(1592, '59A', 'Argo Dwipangga', '', '12:21', '12:20', 3, 'reg', 'tambahan', '3'),
(1593, '101A', 'Sawunggalih', 'Jakarta Kota', '10:24', '10:23', 2, '-', 'kereta tambah', 'Kereta Reguler'),
(1594, '101A', 'Serayu', 'Pwt', '10:20', '10:10', 2, '-', 'tambahan', 'kereta regional'),
(1595, '101', 'Serayu', 'Kya', '10:11', '10:10', 1, '-', 'kereta tambahan', 'kereta regional'),
(1596, '101A', 'Serayu', 'Pwt', '10:20', '10:10', 2, '-', 'tambahan', 'kereta regional'),
(1597, '101', 'Serayu', 'Kya', '10:11', '10:10', 1, '-', 'kereta tambahan', 'kereta regional'),
(1598, '101A', 'Serayu', 'Pwt', '10:20', '10:10', 2, '-', 'tambahan', 'kereta regional'),
(1599, '101', 'Serayu', 'Kya', '10:11', '10:10', 1, '-', 'kereta tambahan', 'kereta regional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilka`
--

CREATE TABLE `hasilka` (
  `jalur` int(1) NOT NULL,
  `no_ka` char(10) NOT NULL,
  `nama_ka` varchar(50) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `jam_berangkat` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasilka`
--

INSERT INTO `hasilka` (`jalur`, `no_ka`, `nama_ka`, `tujuan`, `jam_berangkat`) VALUES
(1, '10909', 'TAMBAHAN YK', 'gambir', '00.18'),
(2, '--', '--', '--', '--'),
(3, '--', '--', '--', '--'),
(4, '--', '--', '--', '--'),
(5, '--', '--', '--', '--');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasilka_kroya`
--

CREATE TABLE `hasilka_kroya` (
  `jalur` int(1) NOT NULL,
  `noka` char(10) NOT NULL,
  `namaka` varchar(50) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `jadwalberangkat` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasilka_kroya`
--

INSERT INTO `hasilka_kroya` (`jalur`, `noka`, `namaka`, `tujuan`, `jadwalberangkat`) VALUES
(1, '--', '--', '--', '--'),
(2, '--', '--', '--', '--'),
(3, '--', '--', '--', '--'),
(4, '--', '--', '--', '--'),
(5, '--', '--', '--', '--'),
(6, '--', '--', '--', '--');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nip`, `nama`, `password`, `role`) VALUES
(44, '12345', 'Admin 5', 'admin123', 'Admin'),
(45, '10102910', 'Admin 2', 'Admin123', 'Admin'),
(46, '1812910', 'Operator 1', 'operatorkya', 'Operator'),
(48, '1010101', 'Operator Kroya', 'operatorkya', 'operator'),
(50, '1212121', 'Admin kroya', 'adminkya', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `departure`
--
ALTER TABLE `departure`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `departure_kroya`
--
ALTER TABLE `departure_kroya`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasilka`
--
ALTER TABLE `hasilka`
  ADD PRIMARY KEY (`jalur`);

--
-- Indeks untuk tabel `hasilka_kroya`
--
ALTER TABLE `hasilka_kroya`
  ADD PRIMARY KEY (`jalur`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `departure_kroya`
--
ALTER TABLE `departure_kroya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1600;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
