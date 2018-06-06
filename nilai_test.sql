-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 08:11 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amin`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai_test`
--

CREATE TABLE `nilai_test` (
  `ID_NILAI_TEST` int(9) NOT NULL,
  `matematika` int(11) NOT NULL,
  `JUMLAH_NILAI_TEST` int(11) DEFAULT NULL,
  `RATA_RATA_NILAI_TEST` float DEFAULT NULL,
  `siswa_ID_SISWA` varchar(9) NOT NULL,
  `bahasa_inggris` int(11) NOT NULL,
  `IPA` int(11) NOT NULL,
  `Bahasa_Indonesia` int(11) NOT NULL,
  `Psikologi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_test`
--

INSERT INTO `nilai_test` (`ID_NILAI_TEST`, `matematika`, `JUMLAH_NILAI_TEST`, `RATA_RATA_NILAI_TEST`, `siswa_ID_SISWA`, `bahasa_inggris`, `IPA`, `Bahasa_Indonesia`, `Psikologi`) VALUES
(7, 90, 450, 90, '1', 90, 90, 90, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai_test`
--
ALTER TABLE `nilai_test`
  ADD PRIMARY KEY (`ID_NILAI_TEST`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
