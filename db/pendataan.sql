-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 09:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataan`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasiswa`
--

CREATE TABLE `datasiswa` (
  `nis` varchar(50) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `thn_masuk` date NOT NULL,
  `Jurusan` varchar(50) NOT NULL,
  `asal_sekolah` varchar(500) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasiswa`
--

INSERT INTO `datasiswa` (`nis`, `nama`, `kelas`, `alamat`, `gender`, `agama`, `no_telp`, `foto`, `thn_masuk`, `Jurusan`, `asal_sekolah`, `Status`) VALUES
('121232', 'Mario Suryo Aji', 'X Multimedia 2', 'Tanjung pura', '', 'Islam sd', '08232312131', 'Mario suryo.jpg', '2022-10-05', 'Multimedia', 'Smp 4 Kisaran', ''),
('122335', 'Hirioaki Kato', 'X TKJ 1', '1221334', 'Laki - Laki', 'Katholik', '232142', 'hiroaki kato.jpg', '0000-00-00', 'TKJ', 'smp 2 kisaran', 'Dipinjam'),
('12345', 'Feri', 'asdasd2141', '124124', '', '1241241', '2asq412124', 'tutwuri.png', '2022-10-05', 'asd', '12412412', 'Mampu'),
('1234567', 'aul', '123', '123', '', '123', '', 'logopnkis.jpg', '2022-10-07', '123', 'qwerty', ''),
('181231', 'Den Dimas', 'X TKJ 1', 'Mutiara', 'Laki - Laki', 'Islam', '083232312', 'den dimas.jpg', '0000-00-00', 'TKJ', 'Smp Muahammadiyah', 'Dipinjam'),
('213144', 'Toprak Razgatlioglu ', 'XII Multimedia 3', 'kisaran barat', 'Laki - Laki', 'Islam', '0867474563', 'Toprak Razgatioglu.jpg', '0000-00-00', 'Multimedia', 'SMP Swasta Muhammadiyah 99', 'Dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `pendataan`
--

CREATE TABLE `pendataan` (
  `nis` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `lama_pengambilan` varchar(20) NOT NULL,
  `keterangan` varchar(283) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendataan`
--

INSERT INTO `pendataan` (`nis`, `nama`, `tgl_pendaftaran`, `tgl_pengambilan`, `lama_pengambilan`, `keterangan`) VALUES
(181231, 'Den Dimas', '2022-01-01', '2022-02-03', '0', ''),
(121232, 'Mario Suryo Aji', '2022-01-19', '2022-01-22', '0', ''),
(122335, 'Hirioaki Kato', '2022-01-26', '2022-04-15', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', 'admin', 'devk@gmail.com', 'Admin', 1, 'Staff Kepaniteraan Sekolah'),
('user', 'user123', 'user123@gamil.com', 'User', 2, 'Siswa Smk Swasta Amal Bakti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
