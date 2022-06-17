-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2022 pada 11.20
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datadiri`
--

CREATE TABLE `datadiri` (
  `npm` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `sd` varchar(255) NOT NULL,
  `smp` varchar(255) NOT NULL,
  `sma` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `skill2` varchar(255) NOT NULL,
  `skill3` varchar(255) NOT NULL,
  `pengalaman` varchar(255) NOT NULL,
  `pengalaman2` varchar(255) NOT NULL,
  `pengalaman3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datadiri`
--

INSERT INTO `datadiri` (`npm`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `email`, `jenis_kelamin`, `agama`, `sd`, `smp`, `sma`, `skill`, `skill2`, `skill3`, `pengalaman`, `pengalaman2`, `pengalaman3`) VALUES
(20753045, 'Bunga Adifatillah', 'Bandar Lampung', '2001-04-06', 'Jl.Kenangan Gg.Lain Hati', '089876543212', 'bungaadifatillah@gmail.com', 'Perempuan', 'Islam', '2007-2013', '2013-2016', '2016-2019', 'HTML(Expert)', 'CSS(Beginer)', 'Desain Grafis', 'Bekerja di Kementerian Riset dan Teknologi', 'Bekerja di Kementerian Komunikasi dan Teknologi', 'Bekerja di Dicoding');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(1, 'admin', '508041e449f36b7f47448e4b3bbd74d7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
