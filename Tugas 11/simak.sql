-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 05:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simak`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `kategori` int(2) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `fakultas` enum('Fakultas Ilmu Budaya','Fakultas Kedokteran','Fakultas Ekonomi dan Bisnis','Fakultas MIPA','Fakultas Pertanian','Fakultas Peternakan','Fakultas Teknik','Fakultas Hukum','Fakultas Kedokteran Hewan','Fakultas Pariwisata','Fakultas Ilmu Sosial dan Politik','Fakultas Kelautan dan Perikanan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `kategori`, `nip`, `nama`, `email`, `jeniskelamin`, `fakultas`) VALUES
(1, 1, '1984082920181113001', 'I Wayan Supriana, S.Si., M.Cs.', 'wayan.supriana@unud.ac.id', 'Laki-laki', 'Fakultas MIPA'),
(2, 1, '1985091920181113001', 'Made Agung Raharja, S.Si., M.Cs.', 'made.agung@unud.ac.id', 'Laki-laki', 'Fakultas MIPA'),
(3, 1, '198403172019031005', 'I Gusti Ngurah Anom Cahyadi Putra, ST., M.Cs', 'anom.cp@unud.ac.id', 'Laki-laki', 'Fakultas MIPA');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Dosen'),
(2, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `kategori` int(2) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempatlahir` varchar(20) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `fakultas` enum('Fakultas Ilmu Budaya','Fakultas Kedokteran','Fakultas Ekonomi dan Bisnis','Fakultas MIPA','Fakultas Pertanian','Fakultas Peternakan','Fakultas Teknik','Fakultas Hukum','Fakultas Kedokteran Hewan','Fakultas Pariwisata','Fakultas Ilmu Sosial dan Politik','Fakultas Kelautan dan Perikanan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `kategori`, `nim`, `nama`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `alamat`, `email`, `fakultas`) VALUES
(1, 2, '1708561067', 'Ayu Apsari ', 'Perempuan', 'Bandung', '1999-06-25', 'Jimbaran', 'ayuapsaarii25@gmail.com', 'Fakultas MIPA'),
(2, 2, '1708561071', 'Pingkan Anggriani', 'Perempuan', 'Karangasem', '1999-10-10', 'Jimbaran', 'pingkananggriani@gmail.com', 'Fakultas MIPA'),
(3, 2, '1708561057', 'Widiantari Putri', 'Perempuan', 'Denpasar', '1999-06-14', 'Jimbaran', 'widiantariputri@gmail.com', 'Fakultas MIPA'),
(4, 2, '1708561053', 'Sherly Anggita', 'Perempuan', 'Karangasem', '1999-09-24', 'Jimbaran', 'sherlyanggita@gmail.com', 'Fakultas MIPA'),
(5, 2, '1602531053', 'Indira Ayu', 'Perempuan', 'Bandung', '1998-03-04', 'Denpasar', 'indiraayu@gmail.com', 'Fakultas Kedokteran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
