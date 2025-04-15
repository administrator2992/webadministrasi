-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 12:56 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_db`
--
-- CREATE DATABASE IF NOT EXISTS `web_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
-- USE `web_db`;

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `user_name`, `password`, `name`) VALUES
(0, 'admin', '900150983cd24fb0d6963f7d28e17f72', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen`
--

CREATE TABLE `data_dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `NIDN` int(11) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `keahlian` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_dosen`
--

INSERT INTO `data_dosen` (`id`, `nama`, `NIDN`, `tempat`, `tanggal`, `keahlian`, `email`) VALUES
(3, 'Raiz Ramzan', 56789, 'Tulungagung', '2021-01-15', 'Elektronika', 'kkk@dmail.com'),
(5, 'Faiz S', 56789, 'Tulungagung', '2021-01-29', 'Telematika', 'li@gmail.io');

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `nim_mahasiswa` varchar(255) NOT NULL,
  `tempat_lahir_mahasiswa` varchar(255) NOT NULL,
  `tanggal_lahir_mahasiswa` date NOT NULL,
  `email_mahasiswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `nim_mahasiswa`, `tempat_lahir_mahasiswa`, `tanggal_lahir_mahasiswa`, `email_mahasiswa`) VALUES
(26, 'hasan besari', '19.83.0351', 'jakarta', '2021-01-16', 'l@gmail.com'),
(30, 'Michael S', '19.83.0361', 'Surabaya', '2021-01-19', 'li@gmail.io');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id` int(11) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `id_pegawai` int(6) NOT NULL,
  `tempat_lahir_pegawai` varchar(255) NOT NULL,
  `tanggal_lahir_pegawai` date NOT NULL,
  `departemen_pegawai` varchar(255) NOT NULL,
  `email_pegawai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id`, `nama_pegawai`, `id_pegawai`, `tempat_lahir_pegawai`, `tanggal_lahir_pegawai`, `departemen_pegawai`, `email_pegawai`) VALUES
(4, 'Sukro', 123456, 'Semarang', '2021-01-07', 'Kebersihan', 'fepob56573@cocyo.com');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `nama_user`, `password`, `name`) VALUES
(0, 'operator1', '900150983cd24fb0d6963f7d28e17f72', 'operator'),
(2, 'dadang123', '56abe31ad7a889c8f3e43dfb6d902761', 'Dadang'),
(3, 'febri12', 'a384b6463fc216a5f8ecb6670f86456a', 'Febri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_dosen`
--
ALTER TABLE `data_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
