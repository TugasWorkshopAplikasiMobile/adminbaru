-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 03:41 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `NAMA_ADMIN` varchar(100) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(100) DEFAULT NULL,
  `NO_TELP` decimal(13,0) DEFAULT NULL,
  `STATUS` varchar(100) DEFAULT NULL,
  `USERNAME_ADMIN` varchar(100) DEFAULT NULL,
  `PASSWORD_ADMIN` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NAMA_ADMIN`, `JENIS_KELAMIN`, `NO_TELP`, `STATUS`, `USERNAME_ADMIN`, `PASSWORD_ADMIN`, `level`) VALUES
(990516, 'Christopher', 'Laki-Laki', '81', 'Admin TK', 'sekretaris1', 'sekretaris1', 'sekretaris1'),
(990517, 'Bahrul', 'Laki-Laki', '81', 'Admin SD', 'adminsd', 'adminsd', 'adminsd'),
(990518, 'Anas', 'Laki-Laki', '81', 'Admin TK', 'admintk', 'admintk', 'admintk'),
(990519, 'Tita', 'Perempuan', '81', 'Admin SMP', 'adminsmp', 'adminsmp', 'adminsmp'),
(990520, 'Eldwin', 'Laki-Laki', '81', 'Direktur', 'admindirektur', 'admindirektur', 'admindirektur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=990521;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
