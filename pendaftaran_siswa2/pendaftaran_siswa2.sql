-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 10:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_siswa2`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa2`
--

CREATE TABLE `calon_siswa2` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('pria','perempuan') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(35) NOT NULL,
  `agama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_siswa2`
--

INSERT INTO `calon_siswa2` (`id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `email`, `no_hp`, `agama`) VALUES
(51, 'farhan', 'garut', '2023-11-16', 'pria', 'leles', 'awded@rffrf.ngntg', '085797954113', 'Kristen Protestan'),
(52, 'farhan ', 'gartut', '2023-11-30', 'perempuan', 'kleles', 'awded@rffrf.ngntg', '08570705454', 'Islam'),
(53, 'farhan', 'gartut', '2023-11-29', 'pria', 'leles', 'awded@rffrf.ngntg', '085797954113', 'Islam'),
(54, 'Farhan', 'Garut', '2023-11-24', 'pria', 'leles', 'awded@rffrf.ngntg', '0857979544113', 'Budha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_siswa2`
--
ALTER TABLE `calon_siswa2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_siswa2`
--
ALTER TABLE `calon_siswa2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
