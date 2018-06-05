-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 02:02 AM
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
(990517, 'Bahrul', 'Laki-Laki', '81', 'Admin SD', 'adminsd', 'adminsd', 'adminsd');

-- --------------------------------------------------------

--
-- Table structure for table `ciri_khas_anak`
--

CREATE TABLE `ciri_khas_anak` (
  `ID_CIRIKHAS_ANAK` varchar(6) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `CIRI_FISIK_YANG_MENONJOL` varchar(100) DEFAULT NULL,
  `CIRI_KEPRIBADIAN_YANG_MENONJOL` varchar(100) DEFAULT NULL,
  `BAKAT_KHUSUS_YANG_MENONJOL` varchar(100) DEFAULT NULL,
  `PRESTASI_YANG_PERNAH_DIRAIH` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_tempat_tinggal`
--

CREATE TABLE `data_tempat_tinggal` (
  `ID_DATA_TEMPAT_TINGGAL` varchar(9) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `STATUS_TEMPAT_TINGGAL` varchar(12) DEFAULT NULL,
  `JARAK_RUMAH_KE_SEKOLAH` varchar(6) DEFAULT NULL,
  `LUAS_BANGUNAN_RUMAH` varchar(6) DEFAULT NULL,
  `JUMLAH_KAMAR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `ID_GAMBAR` varchar(9) NOT NULL,
  `ID_PEMBAYARAN` varchar(9) DEFAULT NULL,
  `GAMBAR` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `ID_HASIL` varchar(9) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `STATUS_TERIMA` varchar(100) DEFAULT NULL,
  `TOTAL_NILAI` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `input`
--

CREATE TABLE `input` (
  `ID_NILAI_PSIKOTEST` varchar(9) NOT NULL,
  `admin_ID_ADMIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `input2`
--

CREATE TABLE `input2` (
  `nilai_test_ID_NILAI_TEST` int(11) NOT NULL,
  `admin_ID_ADMIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `ID_JENJANG` int(11) NOT NULL,
  `NAMA_JENJANG` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`ID_JENJANG`, `NAMA_JENJANG`) VALUES
(46127, 'TK'),
(46128, 'SD'),
(46129, 'SMP');

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran_anak`
--

CREATE TABLE `kelahiran_anak` (
  `ID_KELAHIRAN_ANAK` varchar(9) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `LAMA_DLM_KANDUNGAN` varchar(100) DEFAULT NULL,
  `KEADAAN_DLM_KANDUNGAN` varchar(100) DEFAULT NULL,
  `KEADAAN_LAHIR` varchar(100) DEFAULT NULL,
  `PROSES_KELAHIRAN` varchar(100) DEFAULT NULL,
  `YG_MEMBANTU_KELAHIRAN` varchar(100) DEFAULT NULL,
  `BERAT_PANJANG_KETIKA_LAHIR` varchar(100) DEFAULT NULL,
  `APGOR_SCORE` varchar(100) DEFAULT NULL,
  `USIA_IBU_KETIKA_LAHIR` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `ID_KELUARGA` varchar(9) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `NAMA_AYAH` varchar(100) DEFAULT NULL,
  `NAMA_IBU` varchar(100) DEFAULT NULL,
  `AGAMA_AYAH` varchar(100) DEFAULT NULL,
  `AGAMA_IBU` varchar(100) DEFAULT NULL,
  `TGL_LAHIR_AYAH` varchar(100) DEFAULT NULL,
  `TGL_LAHIR_IBU` varchar(100) DEFAULT NULL,
  `KEWARGANEGARAAN_AYAH` varchar(100) DEFAULT NULL,
  `KEWARGANEGARAAN_IBU` varchar(100) DEFAULT NULL,
  `PEND_TERAKHIR_AYAH` varchar(100) DEFAULT NULL,
  `PEND_AKHIR_IBU` varchar(100) DEFAULT NULL,
  `JUR_YG_DIAMBIL_AYAH` varchar(100) DEFAULT NULL,
  `JUR_YG_DIAMBIL_IBU` varchar(100) DEFAULT NULL,
  `NAMA_INSTANSI_AYAH_BEKERJA` varchar(100) DEFAULT NULL,
  `NAMA_INSTANSI_IBU_BEKERJA` varchar(100) DEFAULT NULL,
  `PANGKAT_GOL_AYAH` varchar(100) DEFAULT NULL,
  `PANGKAT_GOL_IBU` varchar(100) DEFAULT NULL,
  `LAMA_KERJA_AYAH_PERHARI` varchar(100) DEFAULT NULL,
  `LAMA_KERJA_IBU_PERHARI` varchar(100) DEFAULT NULL,
  `PENGHASILAN_PERBULAN_AYAH` float(12,0) DEFAULT NULL,
  `PENGHASILAN_PERBULAN_IBU` float(12,0) DEFAULT NULL,
  `JUMLAH_TANGGUNGAN_AYAH` varchar(100) DEFAULT NULL,
  `JUMLAH_TANGGUNGAN_IBU` varchar(100) DEFAULT NULL,
  `ALAMAT_RMH_AYAH` varchar(100) DEFAULT NULL,
  `ALAMAT_RMH_IBU` varchar(100) DEFAULT NULL,
  `ALAMAT_KANTOR_AYAH` varchar(100) DEFAULT NULL,
  `ALAMAT_KANTOR_IBU` varchar(100) DEFAULT NULL,
  `TLP_RMH_HP_AYAH` varchar(100) DEFAULT NULL,
  `TLP_RMH_HP_IBU` varchar(100) DEFAULT NULL,
  `TLP_KANTOR_AYAH` varchar(100) DEFAULT NULL,
  `TLP_KANTOR_IBU` varchar(100) DEFAULT NULL,
  `KESEMPATAN_BERKOMUNIKASI_DG_AYAH` varchar(100) DEFAULT NULL,
  `KESEMPATAN_BERKOMUNIKASI_DG_IBU` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kemampuan_anak`
--

CREATE TABLE `kemampuan_anak` (
  `ID_KEMAMPUAN_ANAK` varchar(9) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `AKTIVITAS` varchar(100) DEFAULT NULL,
  `KETERANGAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan_anak`
--

CREATE TABLE `kesehatan_anak` (
  `ID_KESEHATAN_ANAK` varchar(9) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `BB_TB` varchar(100) DEFAULT NULL,
  `GOLDAR` varchar(100) DEFAULT NULL,
  `MINUM_ASI_SELAMA` varchar(100) DEFAULT NULL,
  `PERKEMBANGAN_DLM_2BLN` varchar(100) DEFAULT NULL,
  `KELAINAN_DLM_TUBUH` varchar(100) DEFAULT NULL,
  `MAKANAN_TAMBAHAN_KURANG_DARI_4BLN` varchar(100) DEFAULT NULL,
  `IMUNISASI_YG_DIBERIKAN` varchar(100) DEFAULT NULL,
  `ALERGI_MAKANAN_DAN_OBAT` varchar(100) DEFAULT NULL,
  `PENGLIHATAN` varchar(100) DEFAULT NULL,
  `PENDENGARAN` varchar(100) DEFAULT NULL,
  `PENAMPILAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_keluarga`
--

CREATE TABLE `kondisi_keluarga` (
  `ID_KONDISI_KELUARGA` varchar(6) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `PERTANYAAN_KONDISI` text,
  `JAWABAN_KONDISI` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kuisinoner`
--

CREATE TABLE `kuisinoner` (
  `ID_KUISINONER` varchar(9) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `PERTANYAAN` varchar(100) DEFAULT NULL,
  `JAWABAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menentukan`
--

CREATE TABLE `menentukan` (
  `ID_HASIL` varchar(9) NOT NULL,
  `admin_ID_ADMIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_psikotest`
--

CREATE TABLE `nilai_psikotest` (
  `ID_NILAI_PSIKOTEST` varchar(9) NOT NULL,
  `ID_MAPEL` varchar(9) DEFAULT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `NILAI_PSIKOTEST` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_psikotest`
--

INSERT INTO `nilai_psikotest` (`ID_NILAI_PSIKOTEST`, `ID_MAPEL`, `ID_SISWA`, `NILAI_PSIKOTEST`) VALUES
('4444', '4', '1234', 57);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_test`
--

CREATE TABLE `nilai_test` (
  `ID_NILAI_TEST` int(11) NOT NULL,
  `matematika` int(11) NOT NULL,
  `JUMLAH_NILAI_TEST` int(11) DEFAULT NULL,
  `RATA_RATA_NILAI_TEST` float DEFAULT NULL,
  `siswa_ID_SISWA` varchar(9) NOT NULL,
  `bahasa_inggris` int(11) NOT NULL,
  `IPA` int(11) NOT NULL,
  `Bahasa_Indonesia` int(11) NOT NULL,
  `Psikologi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id_notif` varchar(25) NOT NULL,
  `jenis_notif` varchar(30) NOT NULL,
  `judul_notif` varchar(30) NOT NULL,
  `isi_notif` varchar(30) NOT NULL,
  `status_notif` varchar(30) NOT NULL,
  `id` varchar(25) NOT NULL,
  `user_ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id_notif`, `jenis_notif`, `judul_notif`, `isi_notif`, `status_notif`, `id`, `user_ID_USER`) VALUES
('123', 'DaftarUlang', 'welcomn', 'well', 'Belum', '12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_PEMBAYARAN` varchar(9) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `STATUS_PEMBAYARAN` varchar(12) DEFAULT NULL,
  `admin_ID_ADMIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`ID_PEMBAYARAN`, `ID_SISWA`, `STATUS_PEMBAYARAN`, `admin_ID_ADMIN`) VALUES
('12345', '1234', 'konfirmasi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_sekolah`
--

CREATE TABLE `riwayat_sekolah` (
  `ID_RIWAYATSEKOLAH` varchar(6) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `NAMA_SEKOLAH` varchar(100) DEFAULT NULL,
  `MASUK_TAHUN` int(11) DEFAULT NULL,
  `TAMAT_TAHUN` int(11) DEFAULT NULL,
  `ALAMAT_SEKOLAH` varchar(100) DEFAULT NULL,
  `KESULITANYANGDIALAMISAATSEKOLAH` text,
  `AKTIFITASYANGDISUKAI` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saudara_kandung_anak`
--

CREATE TABLE `saudara_kandung_anak` (
  `ID_SAUDARA_KANDUNG` varchar(9) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `NAMA_SAUDARA_KANDUNG` varchar(100) DEFAULT NULL,
  `JK_ADMIN` varchar(100) DEFAULT NULL,
  `PENDIDIKAN` varchar(100) DEFAULT NULL,
  `KELAS` varchar(100) DEFAULT NULL,
  `NO_INDUK` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `ID_SISWA` varchar(9) NOT NULL,
  `NAMA_SISWA` varchar(100) DEFAULT NULL,
  `NAMA_PANGGILAN` varchar(100) DEFAULT NULL,
  `TTL_SISWA` varchar(100) DEFAULT NULL,
  `USIA_1JULI` int(11) DEFAULT NULL,
  `JK_SISWA` varchar(100) DEFAULT NULL,
  `AGAMA_SISWA` varchar(100) DEFAULT NULL,
  `KEWARGANEGARAAN` varchar(100) DEFAULT NULL,
  `TINGGAL_BERSAMA` varchar(100) DEFAULT NULL,
  `ANAK_KE` int(11) DEFAULT NULL,
  `user_ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`ID_SISWA`, `NAMA_SISWA`, `NAMA_PANGGILAN`, `TTL_SISWA`, `USIA_1JULI`, `JK_SISWA`, `AGAMA_SISWA`, `KEWARGANEGARAAN`, `TINGGAL_BERSAMA`, `ANAK_KE`, `user_ID_USER`) VALUES
('1234', 'panjul', 'kokoko', '141kqhsa2313', 12, 'P', 'Ateis', 'aselo', 'jomblo', 2, 1236);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `NAMA_USER` varchar(100) DEFAULT NULL,
  `EMAIL_USER` varchar(100) DEFAULT NULL,
  `PASSWORD_USER` varchar(100) DEFAULT NULL,
  `jenjang_ID_JENJANG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `NAMA_USER`, `EMAIL_USER`, `PASSWORD_USER`, `jenjang_ID_JENJANG`) VALUES
(1236, 'Andis', 'Andis@mail.com', '12345', 46128),
(1237, 'abiem', '', 'abiem', 46127),
(1238, 'Anas Abiem', '082230507275', 'abimanyu', 46128);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `ciri_khas_anak`
--
ALTER TABLE `ciri_khas_anak`
  ADD PRIMARY KEY (`ID_CIRIKHAS_ANAK`),
  ADD KEY `FK_MEMILIKI7` (`ID_SISWA`);

--
-- Indexes for table `data_tempat_tinggal`
--
ALTER TABLE `data_tempat_tinggal`
  ADD PRIMARY KEY (`ID_DATA_TEMPAT_TINGGAL`),
  ADD KEY `FK_MEMILIKI4` (`ID_SISWA`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`ID_GAMBAR`),
  ADD KEY `FK_SCAN` (`ID_PEMBAYARAN`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`ID_HASIL`),
  ADD KEY `FK_MEMILIKI24` (`ID_SISWA`);

--
-- Indexes for table `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`ID_NILAI_PSIKOTEST`,`admin_ID_ADMIN`),
  ADD KEY `FK_INPUT2` (`ID_NILAI_PSIKOTEST`),
  ADD KEY `fk_input_admin1_idx` (`admin_ID_ADMIN`);

--
-- Indexes for table `input2`
--
ALTER TABLE `input2`
  ADD PRIMARY KEY (`admin_ID_ADMIN`),
  ADD KEY `fk_input2_nilai_test1_idx` (`nilai_test_ID_NILAI_TEST`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`ID_JENJANG`);

--
-- Indexes for table `kelahiran_anak`
--
ALTER TABLE `kelahiran_anak`
  ADD PRIMARY KEY (`ID_KELAHIRAN_ANAK`),
  ADD KEY `FK_MEMILIKI_DATA2` (`ID_SISWA`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`ID_KELUARGA`),
  ADD KEY `FK_MEMPUNYAI2` (`ID_SISWA`);

--
-- Indexes for table `kemampuan_anak`
--
ALTER TABLE `kemampuan_anak`
  ADD PRIMARY KEY (`ID_KEMAMPUAN_ANAK`),
  ADD KEY `FK_MEMILIKI6` (`ID_SISWA`);

--
-- Indexes for table `kesehatan_anak`
--
ALTER TABLE `kesehatan_anak`
  ADD PRIMARY KEY (`ID_KESEHATAN_ANAK`),
  ADD KEY `FK_MEMILIKI15` (`ID_SISWA`);

--
-- Indexes for table `kondisi_keluarga`
--
ALTER TABLE `kondisi_keluarga`
  ADD PRIMARY KEY (`ID_KONDISI_KELUARGA`),
  ADD KEY `FK_MEMILIKI18` (`ID_SISWA`);

--
-- Indexes for table `kuisinoner`
--
ALTER TABLE `kuisinoner`
  ADD PRIMARY KEY (`ID_KUISINONER`),
  ADD KEY `FK_MEMILIKI16` (`ID_SISWA`);

--
-- Indexes for table `menentukan`
--
ALTER TABLE `menentukan`
  ADD PRIMARY KEY (`ID_HASIL`),
  ADD KEY `FK_MENENTUKAN2` (`ID_HASIL`),
  ADD KEY `fk_menentukan_admin1_idx` (`admin_ID_ADMIN`);

--
-- Indexes for table `nilai_psikotest`
--
ALTER TABLE `nilai_psikotest`
  ADD PRIMARY KEY (`ID_NILAI_PSIKOTEST`),
  ADD KEY `FK_MEMILIKI22` (`ID_SISWA`);

--
-- Indexes for table `nilai_test`
--
ALTER TABLE `nilai_test`
  ADD PRIMARY KEY (`ID_NILAI_TEST`),
  ADD KEY `fk_nilai_test_siswa1_idx` (`siswa_ID_SISWA`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notif`),
  ADD KEY `fk_notification_user1_idx` (`user_ID_USER`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID_PEMBAYARAN`),
  ADD KEY `FK_MELAKUKAN2` (`ID_SISWA`),
  ADD KEY `fk_pembayaran_admin1_idx` (`admin_ID_ADMIN`);

--
-- Indexes for table `riwayat_sekolah`
--
ALTER TABLE `riwayat_sekolah`
  ADD PRIMARY KEY (`ID_RIWAYATSEKOLAH`),
  ADD KEY `FK_MEMILIKI3` (`ID_SISWA`);

--
-- Indexes for table `saudara_kandung_anak`
--
ALTER TABLE `saudara_kandung_anak`
  ADD PRIMARY KEY (`ID_SAUDARA_KANDUNG`),
  ADD KEY `FK_MEMILIKI5` (`ID_SISWA`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`ID_SISWA`),
  ADD KEY `fk_siswa_user1_idx` (`user_ID_USER`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `fk_user_jenjang1_idx` (`jenjang_ID_JENJANG`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=990518;

--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `ID_JENJANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46130;

--
-- AUTO_INCREMENT for table `nilai_test`
--
ALTER TABLE `nilai_test`
  MODIFY `ID_NILAI_TEST` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1239;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ciri_khas_anak`
--
ALTER TABLE `ciri_khas_anak`
  ADD CONSTRAINT `FK_MEMILIKI7` FOREIGN KEY (`ID_SISWA`) REFERENCES `siswa` (`ID_SISWA`);

--
-- Constraints for table `data_tempat_tinggal`
--
ALTER TABLE `data_tempat_tinggal`
  ADD CONSTRAINT `FK_MEMILIKI4` FOREIGN KEY (`ID_SISWA`) REFERENCES `siswa` (`ID_SISWA`);

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `FK_SCAN` FOREIGN KEY (`ID_PEMBAYARAN`) REFERENCES `pembayaran` (`ID_PEMBAYARAN`);

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `FK_MEMILIKI24` FOREIGN KEY (`ID_SISWA`) REFERENCES `siswa` (`ID_SISWA`);

--
-- Constraints for table `input`
--
ALTER TABLE `input`
  ADD CONSTRAINT `FK_INPUT2` FOREIGN KEY (`ID_NILAI_PSIKOTEST`) REFERENCES `nilai_psikotest` (`ID_NILAI_PSIKOTEST`),
  ADD CONSTRAINT `fk_input_admin1` FOREIGN KEY (`admin_ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `input2`
--
ALTER TABLE `input2`
  ADD CONSTRAINT `fk_input2_admin1` FOREIGN KEY (`admin_ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_input2_nilai_test1` FOREIGN KEY (`nilai_test_ID_NILAI_TEST`) REFERENCES `nilai_test` (`ID_NILAI_TEST`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kelahiran_anak`
--
ALTER TABLE `kelahiran_anak`
  ADD CONSTRAINT `FK_MEMILIKI_DATA2` FOREIGN KEY (`ID_SISWA`) REFERENCES `siswa` (`ID_SISWA`);

--
-- Constraints for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD CONSTRAINT `FK_MEMPUNYAI2` FOREIGN KEY (`ID_SISWA`) REFERENCES `siswa` (`ID_SISWA`);

--
-- Constraints for table `kemampuan_anak`
--
ALTER TABLE `kemampuan_anak`
  ADD CONSTRAINT `FK_MEMILIKI6` FOREIGN KEY (`ID_SISWA`) REFERENCES `siswa` (`ID_SISWA`);

--
-- Constraints for table `kesehatan_anak`
--
ALTER TABLE `kesehatan_anak`
  ADD CONSTRAINT `FK_MEMILIKI15` FOREIGN KEY (`ID_SISWA`) REFERENCES `siswa` (`ID_SISWA`);

--
-- Constraints for table `kondisi_keluarga`
--
ALTER TABLE `kondisi_keluarga`
  ADD CONSTRAINT `FK_MEMILIKI18` FOREIGN KEY (`ID_SISWA`) REFERENCES `siswa` (`ID_SISWA`);

--
-- Constraints for table `kuisinoner`
--
ALTER TABLE `kuisinoner`
  ADD CONSTRAINT `FK_MEMILIKI16` FOREIGN KEY (`ID_SISWA`) REFERENCES `siswa` (`ID_SISWA`);

--
-- Constraints for table `menentukan`
--
ALTER TABLE `menentukan`
  ADD CONSTRAINT `FK_MENENTUKAN2` FOREIGN KEY (`ID_HASIL`) REFERENCES `hasil` (`ID_HASIL`),
  ADD CONSTRAINT `fk_menentukan_admin1` FOREIGN KEY (`admin_ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nilai_psikotest`
--
ALTER TABLE `nilai_psikotest`
  ADD CONSTRAINT `FK_MEMILIKI22` FOREIGN KEY (`ID_SISWA`) REFERENCES `siswa` (`ID_SISWA`);

--
-- Constraints for table `nilai_test`
--
ALTER TABLE `nilai_test`
  ADD CONSTRAINT `fk_nilai_test_siswa1` FOREIGN KEY (`siswa_ID_SISWA`) REFERENCES `siswa` (`ID_SISWA`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
