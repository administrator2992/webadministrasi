-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2021 pada 07.32
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sd_amogus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', '900150983cd24fb0d6963f7d28e17f72', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `golongan` varchar(11) NOT NULL,
  `gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`golongan`, `gaji`) VALUES
('1a', 1948300),
('1b', 2088700),
('1c', 2177050),
('1d', 2279150),
('2a', 2697900),
('2b', 2862350),
('2c', 2983400),
('2d', 3109600),
('3a', 3407900),
('3b', 3552050),
('3c', 3702350),
('3d', 3858900);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `kode_guru` varchar(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `bidang_studi` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `golongan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`kode_guru`, `nama`, `NIP`, `jabatan`, `bidang_studi`, `alamat`, `golongan`) VALUES
('G01', 'Ahmad S.Pd', '', 'Guru Pengajar', 'Guru IPA', '', '1b'),
('G02', 'Ujang S.Pd', '', 'Guru Pengajar', 'Guru IPS', '', '1b'),
('G03', 'Aji S.Pd', '', 'Guru Pengajar', 'Guru Matematika', '', '1b');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `jadwal_pelajaran`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `jadwal_pelajaran` (
`hari` varchar(11)
,`jam_pelajaran` varchar(15)
,`kelas` varchar(11)
,`nama_mapel` varchar(25)
,`nama_pengajar` varchar(40)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_pelajaran_asli`
--

CREATE TABLE `jadwal_pelajaran_asli` (
  `no` int(11) NOT NULL,
  `hari` varchar(11) NOT NULL,
  `mapel` varchar(11) NOT NULL,
  `jam_pelajaran` varchar(15) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `guru_pengajar` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_pelajaran_asli`
--

INSERT INTO `jadwal_pelajaran_asli` (`no`, `hari`, `mapel`, `jam_pelajaran`, `kelas`, `guru_pengajar`) VALUES
(1, 'Senin', 'MTK01', '07.00 - 07.50', '1a', 'G03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(11) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `kapasitas`) VALUES
('1a', 30),
('1b', 30),
('2a', 30),
('2b', 30),
('3a', 30),
('3b', 30),
('4a', 30),
('4b', 30),
('5a', 30),
('5b', 30),
('6a', 30),
('6b', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `kode_mapel` varchar(11) NOT NULL,
  `nama_mapel` varchar(25) NOT NULL,
  `jam_pelajaran` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `nama_mapel`, `jam_pelajaran`) VALUES
('AG01', 'Agama Muslim', '2'),
('AG02', 'Agama Non-Muslim', '2'),
('MTK01', 'Matematika Dasar', '2'),
('MTK02', 'Matematika Dasar 2', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `kode_murid` varchar(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`kode_murid`, `nama`, `nisn`, `jenis_kelamin`, `agama`, `alamat`, `kelas`) VALUES
('M001', 'Zaidan Awoloka', '0001231303', 'Laki Laki', 'Atheis', 'jln.kehampaan, DKIY, Bumi', '1a'),
('M002', 'Leonte', '0009412212', 'Laki Laki', 'Shinto', 'jln.kesuksesan, pulau kesatuan, Bumi', '1a');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `spp`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `spp` (
`kode_pembayaran` varchar(11)
,`nisn` varchar(12)
,`tgl_dibayar` date
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp_asli`
--

CREATE TABLE `spp_asli` (
  `kode_pembayaran` varchar(11) NOT NULL,
  `kode_murid` varchar(11) NOT NULL,
  `tgl_dibayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spp_asli`
--

INSERT INTO `spp_asli` (`kode_pembayaran`, `kode_murid`, `tgl_dibayar`) VALUES
('P0001', 'M001', '2021-05-10'),
('P0002', 'M002', '2021-05-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(1, 'bambang@gokil.com', '3bd3feb3f927d7c1dace62e7997bcd94', 'Bambang'),
(2, 'susanti@dekil.com', 'dcb76da384ae3028d6aa9b2ebcea01c9', 'Susanti');

-- --------------------------------------------------------

--
-- Struktur untuk view `jadwal_pelajaran`
--
DROP TABLE IF EXISTS `jadwal_pelajaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jadwal_pelajaran`  AS SELECT `jadwal_pelajaran_asli`.`hari` AS `hari`, `jadwal_pelajaran_asli`.`jam_pelajaran` AS `jam_pelajaran`, `jadwal_pelajaran_asli`.`kelas` AS `kelas`, `mapel`.`nama_mapel` AS `nama_mapel`, `guru`.`nama` AS `nama_pengajar` FROM ((`jadwal_pelajaran_asli` join `guru`) join `mapel`) WHERE `jadwal_pelajaran_asli`.`guru_pengajar` = `guru`.`kode_guru` AND `jadwal_pelajaran_asli`.`mapel` = `mapel`.`kode_mapel` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `spp`
--
DROP TABLE IF EXISTS `spp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `spp`  AS SELECT `spp_asli`.`kode_pembayaran` AS `kode_pembayaran`, `siswa`.`nisn` AS `nisn`, `spp_asli`.`tgl_dibayar` AS `tgl_dibayar` FROM (`spp_asli` join `siswa`) WHERE `spp_asli`.`kode_murid` = `siswa`.`kode_murid` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`golongan`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kode_guru`),
  ADD KEY `fk_golongan` (`golongan`);

--
-- Indeks untuk tabel `jadwal_pelajaran_asli`
--
ALTER TABLE `jadwal_pelajaran_asli`
  ADD PRIMARY KEY (`no`),
  ADD KEY `fk_jadwal_kelas` (`kelas`),
  ADD KEY `fk_jadwal_guru` (`guru_pengajar`),
  ADD KEY `fk_jadwal_mapel` (`mapel`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`kode_murid`),
  ADD KEY `fk_kelas` (`kelas`);

--
-- Indeks untuk tabel `spp_asli`
--
ALTER TABLE `spp_asli`
  ADD PRIMARY KEY (`kode_pembayaran`),
  ADD KEY `fk_murid` (`kode_murid`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jadwal_pelajaran_asli`
--
ALTER TABLE `jadwal_pelajaran_asli`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `fk_golongan` FOREIGN KEY (`golongan`) REFERENCES `golongan` (`Golongan`);

--
-- Ketidakleluasaan untuk tabel `jadwal_pelajaran_asli`
--
ALTER TABLE `jadwal_pelajaran_asli`
  ADD CONSTRAINT `fk_jadwal_guru` FOREIGN KEY (`guru_pengajar`) REFERENCES `guru` (`kode_guru`),
  ADD CONSTRAINT `fk_jadwal_kelas` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`kode_kelas`),
  ADD CONSTRAINT `fk_jadwal_mapel` FOREIGN KEY (`mapel`) REFERENCES `mapel` (`kode_mapel`);

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_kelas` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`kode_kelas`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `spp_asli`
--
ALTER TABLE `spp_asli`
  ADD CONSTRAINT `fk_murid` FOREIGN KEY (`kode_murid`) REFERENCES `siswa` (`kode_murid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
