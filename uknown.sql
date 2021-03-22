-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 09. Januari 2018 jam 09:27
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `udown`
-- 
use unknown;
-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` enum('Biasa','Penting','Segera') NOT NULL,
  `up_by` enum('Fazal Said','Bima Wibowo','Asisten Dosen') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`, `status`, `up_by`) VALUES
(6, '2017-11-19', 'SKRIPSI', 'docx', '478985', 'files/SKRIPSI.docx', 'Penting', 'Fazal Said'),
(13, '2017-11-24', 'LATIHAN', 'zip', '479', 'files/LATIHAN.zip', 'Segera', 'Asisten Dosen'),
(14, '2017-11-25', 'Stiker', 'png', '76219', 'files/Stiker.png', 'Segera', 'Bima Wibowo'),
(15, '2017-11-25', 'pamflet', 'jpg', '616244', 'files/pamflet.jpg', 'Segera', 'Bima Wibowo'),
(16, '2017-11-25', 'Stiker FPWare', 'ai', '965410', 'files/Stiker FPWare.ai', 'Segera', 'Fazal Said'),
(17, '2017-11-25', 'logofpware', 'png', '250816', 'files/logofpware.png', 'Segera', 'Bima Wibowo'),
(18, '2017-11-25', 'fpwarelogo1', 'png', '153889', 'files/fpwarelogo1.png', 'Segera', 'Bima Wibowo'),
(19, '2017-11-25', 'topi1', 'png', '664122', 'files/topi1.png', 'Segera', 'Bima Wibowo'),
(20, '2017-11-25', 'fpwarelogofix', 'png', '80332', 'files/fpwarelogofix.png', 'Segera', 'Bima Wibowo'),
(21, '2017-11-25', 'bloko', 'ai', '982782', 'files/bloko.ai', 'Segera', 'Bima Wibowo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_kom` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`id_kom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_kom`, `nama`, `komentar`) VALUES
(1, 'Fazal Said', 'Aplikasinya bagus sekali, tingkatkan lagi ya... :)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE IF NOT EXISTS `tentang` (
  `id_app` int(11) NOT NULL AUTO_INCREMENT,
  `app` varchar(40) NOT NULL,
  `ver` varchar(30) NOT NULL,
  `dev` varchar(40) NOT NULL,
  `fung` varchar(100) NOT NULL,
  PRIMARY KEY (`id_app`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_app`, `app`, `ver`, `dev`, `fung`) VALUES
(1, 'FPWare Sharing Data', '1.00 (BETA)', 'Fazal Said', 'Aplikasi ini berfungsi sebagai media untuk berkirim data antar sesama user.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(10) NOT NULL,
  `up_by` enum('USER FPWARE SHARING DATA','ADMINISTRATOR') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `uploads`
--

INSERT INTO `uploads` (`id`, `tgl_upload`, `file_name`, `file_size`, `file_type`, `up_by`) VALUES
(9, '2017-11-23', 'SKRIPSI-1.docx', 478985, 'docx', 'ADMINISTRATOR'),
(10, '2017-11-24', 'Latihan_Pertemuan_Praktikum.txt', 695, 'txt', 'USER FPWARE SHARING DATA'),
(11, '2017-12-12', 'ardiyantividia-20171211-0001.jpg', 40454, 'jpg', 'USER FPWARE SHARING DATA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_daftar` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `tgl_daftar`, `nama`, `email`, `username`, `password`) VALUES
(4, '2016-11-05', 'Tutorialweb', 'admin@tutorialweb.net', 'tutorialweb', 'c30b61ff99917c70e70a57d7c72ee621'),
(5, '2017-11-21', 'Fazal Said', 'ichaldotid@gmail.com', 'fazalsaid', '25d55ad283aa400af464c76d713c07ad'),
(6, '2017-11-24', 'Asisten Dosen', 'asdos@mail.com', 'asdos', '25d55ad283aa400af464c76d713c07ad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;