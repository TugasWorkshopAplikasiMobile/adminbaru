-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Jun 2018 pada 13.09
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `NAMA_ADMIN` varchar(100) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(100) DEFAULT NULL,
  `NO_TELP` decimal(13,0) DEFAULT NULL,
  `STATUS` varchar(100) DEFAULT NULL,
  `USERNAME_ADMIN` varchar(100) DEFAULT NULL,
  `PASSWORD_ADMIN` varchar(100) DEFAULT NULL,
  `level` varchar(50) NOT NULL,
  `notification_id_notif` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NAMA_ADMIN`, `JENIS_KELAMIN`, `NO_TELP`, `STATUS`, `USERNAME_ADMIN`, `PASSWORD_ADMIN`, `level`, `notification_id_notif`) VALUES
(990509, 'Toper', 'Laki-Laki', '7899', 'Direktur', 'qwerty', 'qwerty', '', ''),
(990510, 'Beras', 'Perempuan', '676767676', 'Admin SMP', 'bi', 'biem27', 'sekretaris1', ''),
(990516, 'bhnj', 'Laki-Laki', '0', 'Admin TK', 'vbhknj', 'bnjlmk', '', ''),
(990517, 'gbhnjmk', 'Perempuan', '0', 'Admin TK', 'v bnm,', 'hyjmk,l', '', ''),
(990518, 'hbnjkmk', 'Perempuan', '0', 'Admin SD', 'jmk,l.', 'hnkjm,l.', '', ''),
(990519, 'gbhnjmk', 'Perempuan', '0', 'Admin TK', 'tk', 'tk', 'admintk', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ciri_khas_anak`
--

CREATE TABLE `ciri_khas_anak` (
  `ID_CIRIKHAS_ANAK` int(9) NOT NULL,
  `CIRI_FISIK_YANG_MENONJOL` varchar(100) DEFAULT NULL,
  `CIRI_KEPRIBADIAN_YANG_MENONJOL` varchar(100) DEFAULT NULL,
  `BAKAT_KHUSUS_YANG_MENONJOL` varchar(100) DEFAULT NULL,
  `PRESTASI_YANG_PERNAH_DIRAIH` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tempat_tinggal`
--

CREATE TABLE `data_tempat_tinggal` (
  `ID_DATA_TEMPAT_TINGGAL` int(9) NOT NULL,
  `STATUS_TEMPAT_TINGGAL` varchar(12) DEFAULT NULL,
  `JARAK_RUMAH_KE_SEKOLAH` varchar(6) DEFAULT NULL,
  `LUAS_BANGUNAN_RUMAH` varchar(6) DEFAULT NULL,
  `JUMLAH_KAMAR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `ID_GAMBAR` varchar(9) NOT NULL,
  `ID_PEMBAYARAN` varchar(9) DEFAULT NULL,
  `GAMBAR` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `ID_HASIL` int(9) NOT NULL,
  `STATUS_TERIMA` varchar(100) DEFAULT NULL,
  `TOTAL_NILAI` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `input`
--

CREATE TABLE `input` (
  `admin_ID_ADMIN` int(11) NOT NULL,
  `nilai_psikotest_ID_NILAI_PSIKOTEST` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `input2`
--

CREATE TABLE `input2` (
  `nilai_test_ID_NILAI_TEST` int(11) NOT NULL,
  `admin_ID_ADMIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenjang`
--

CREATE TABLE `jenjang` (
  `ID_JENJANG` int(11) NOT NULL,
  `NAMA_JENJANG` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenjang`
--

INSERT INTO `jenjang` (`ID_JENJANG`, `NAMA_JENJANG`) VALUES
(46127, 'TK'),
(46128, 'SD'),
(46129, 'SMP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran_anak`
--

CREATE TABLE `kelahiran_anak` (
  `ID_KELAHIRAN_ANAK` int(9) NOT NULL,
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
-- Struktur dari tabel `keluarga`
--

CREATE TABLE `keluarga` (
  `ID_KELUARGA` int(9) NOT NULL,
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
-- Struktur dari tabel `kemampuan_anak`
--

CREATE TABLE `kemampuan_anak` (
  `ID_KEMAMPUAN_ANAK` int(9) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `AKTIVITAS` varchar(100) DEFAULT NULL,
  `KETERANGAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kesehatan_anak`
--

CREATE TABLE `kesehatan_anak` (
  `ID_KESEHATAN_ANAK` int(9) NOT NULL,
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
-- Struktur dari tabel `kondisi_keluarga`
--

CREATE TABLE `kondisi_keluarga` (
  `ID_KONDISI_KELUARGA` int(9) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `PERTANYAAN_KONDISI` text,
  `JAWABAN_KONDISI` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisinoner`
--

CREATE TABLE `kuisinoner` (
  `ID_KUISINONER` int(9) NOT NULL,
  `PERTANYAAN` varchar(100) DEFAULT NULL,
  `JAWABAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menentukan`
--

CREATE TABLE `menentukan` (
  `admin_ID_ADMIN` int(11) NOT NULL,
  `hasil_ID_HASIL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_psikotest`
--

CREATE TABLE `nilai_psikotest` (
  `ID_NILAI_PSIKOTEST` int(9) NOT NULL,
  `NILAI_PSIKOTEST` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_psikotest`
--

INSERT INTO `nilai_psikotest` (`ID_NILAI_PSIKOTEST`, `NILAI_PSIKOTEST`) VALUES
(4444, 57);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_test`
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
-- Dumping data untuk tabel `nilai_test`
--

INSERT INTO `nilai_test` (`ID_NILAI_TEST`, `matematika`, `JUMLAH_NILAI_TEST`, `RATA_RATA_NILAI_TEST`, `siswa_ID_SISWA`, `bahasa_inggris`, `IPA`, `Bahasa_Indonesia`, `Psikologi`) VALUES
(2131, 90, 450, 90, '1234', 90, 90, 90, 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notification`
--

CREATE TABLE `notification` (
  `id_notif` varchar(25) NOT NULL,
  `jenis_notif` varchar(30) NOT NULL,
  `judul_notif` varchar(30) NOT NULL,
  `isi_notif` varchar(30) NOT NULL,
  `status_notif` varchar(30) NOT NULL,
  `id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notification`
--

INSERT INTO `notification` (`id_notif`, `jenis_notif`, `judul_notif`, `isi_notif`, `status_notif`, `id`) VALUES
('123', 'DaftarUlang', 'welcomn', 'well', 'Belum', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_PEMBAYARAN` varchar(9) NOT NULL,
  `ID_SISWA` varchar(9) DEFAULT NULL,
  `STATUS_PEMBAYARAN` varchar(12) DEFAULT NULL,
  `admin_ID_ADMIN` int(11) NOT NULL,
  `user_ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`ID_PEMBAYARAN`, `ID_SISWA`, `STATUS_PEMBAYARAN`, `admin_ID_ADMIN`, `user_ID_USER`) VALUES
('12345', '1234', 'konfirmasi', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_sekolah`
--

CREATE TABLE `riwayat_sekolah` (
  `ID_RIWAYATSEKOLAH` int(9) NOT NULL,
  `NAMA_SEKOLAH` varchar(100) DEFAULT NULL,
  `MASUK_TAHUN` int(11) DEFAULT NULL,
  `TAMAT_TAHUN` int(11) DEFAULT NULL,
  `ALAMAT_SEKOLAH` varchar(100) DEFAULT NULL,
  `KESULITANYANGDIALAMISAATSEKOLAH` text,
  `AKTIFITASYANGDISUKAI` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `saudara_kandung_anak`
--

CREATE TABLE `saudara_kandung_anak` (
  `ID_SAUDARA_KANDUNG` int(9) NOT NULL,
  `NAMA_SAUDARA_KANDUNG` varchar(100) DEFAULT NULL,
  `JK_ADMIN` varchar(100) DEFAULT NULL,
  `PENDIDIKAN` varchar(100) DEFAULT NULL,
  `KELAS` varchar(100) DEFAULT NULL,
  `NO_INDUK` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `ID_SISWA` int(11) NOT NULL,
  `NAMA_SISWA` varchar(100) NOT NULL,
  `NAMA_PANGGILAN` varchar(100) DEFAULT NULL,
  `TTL_SISWA` varchar(100) DEFAULT NULL,
  `USIA_1JULI` int(11) DEFAULT NULL,
  `JK_SISWA` varchar(100) DEFAULT NULL,
  `AGAMA_SISWA` varchar(100) DEFAULT NULL,
  `KEWARGANEGARAAN` varchar(100) DEFAULT NULL,
  `TINGGAL_BERSAMA` varchar(100) DEFAULT NULL,
  `ANAK_KE` int(11) DEFAULT NULL,
  `saudara_kandung_anak_ID_SAUDARA_KANDUNG` int(9) NOT NULL,
  `riwayat_sekolah_ID_RIWAYATSEKOLAH` int(9) NOT NULL,
  `keluarga_ID_KELUARGA` int(9) NOT NULL,
  `kesehatan_anak_ID_KESEHATAN_ANAK` int(9) NOT NULL,
  `kelahiran_anak_ID_KELAHIRAN_ANAK` int(9) NOT NULL,
  `kemampuan_anak_ID_KEMAMPUAN_ANAK` int(9) NOT NULL,
  `hasil_ID_HASIL` int(9) NOT NULL,
  `kuisinoner_ID_KUISINONER` int(9) NOT NULL,
  `data_tempat_tinggal_ID_DATA_TEMPAT_TINGGAL` int(9) NOT NULL,
  `nilai_test_ID_NILAI_TEST` int(9) NOT NULL,
  `nilai_psikotest_ID_NILAI_PSIKOTEST` int(9) NOT NULL,
  `kondisi_keluarga_ID_KONDISI_KELUARGA` int(9) NOT NULL,
  `ciri_khas_anak_ID_CIRIKHAS_ANAK` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`ID_SISWA`, `NAMA_SISWA`, `NAMA_PANGGILAN`, `TTL_SISWA`, `USIA_1JULI`, `JK_SISWA`, `AGAMA_SISWA`, `KEWARGANEGARAAN`, `TINGGAL_BERSAMA`, `ANAK_KE`, `saudara_kandung_anak_ID_SAUDARA_KANDUNG`, `riwayat_sekolah_ID_RIWAYATSEKOLAH`, `keluarga_ID_KELUARGA`, `kesehatan_anak_ID_KESEHATAN_ANAK`, `kelahiran_anak_ID_KELAHIRAN_ANAK`, `kemampuan_anak_ID_KEMAMPUAN_ANAK`, `hasil_ID_HASIL`, `kuisinoner_ID_KUISINONER`, `data_tempat_tinggal_ID_DATA_TEMPAT_TINGGAL`, `nilai_test_ID_NILAI_TEST`, `nilai_psikotest_ID_NILAI_PSIKOTEST`, `kondisi_keluarga_ID_KONDISI_KELUARGA`, `ciri_khas_anak_ID_CIRIKHAS_ANAK`) VALUES
(1, 'panjul', 'kokoko', '141kqhsa2313', 12, 'P', 'Ateis', 'aselo', 'jomblo', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `NAMA_USER` varchar(100) DEFAULT NULL,
  `EMAIL_USER` varchar(100) DEFAULT NULL,
  `PASSWORD_USER` varchar(100) DEFAULT NULL,
  `jenjang_ID_JENJANG` int(11) NOT NULL,
  `siswa_ID_SISWA` int(11) NOT NULL,
  `siswa_saudara_kandung_anak_ID_SAUDARA_KANDUNG` int(9) NOT NULL,
  `siswa_riwayat_sekolah_ID_RIWAYATSEKOLAH` int(9) NOT NULL,
  `siswa_keluarga_ID_KELUARGA` int(9) NOT NULL,
  `siswa_kesehatan_anak_ID_KESEHATAN_ANAK` int(9) NOT NULL,
  `siswa_kelahiran_anak_ID_KELAHIRAN_ANAK` int(9) NOT NULL,
  `siswa_kemampuan_anak_ID_KEMAMPUAN_ANAK` int(9) NOT NULL,
  `siswa_hasil_ID_HASIL` int(9) NOT NULL,
  `siswa_kuisinoner_ID_KUISINONER` int(9) NOT NULL,
  `siswa_data_tempat_tinggal_ID_DATA_TEMPAT_TINGGAL` int(9) NOT NULL,
  `siswa_nilai_test_ID_NILAI_TEST` int(9) NOT NULL,
  `siswa_nilai_psikotest_ID_NILAI_PSIKOTEST` int(9) NOT NULL,
  `siswa_kondisi_keluarga_ID_KONDISI_KELUARGA` int(9) NOT NULL,
  `siswa_ciri_khas_anak_ID_CIRIKHAS_ANAK` int(9) NOT NULL,
  `notification_id_notif` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER`, `NAMA_USER`, `EMAIL_USER`, `PASSWORD_USER`, `jenjang_ID_JENJANG`, `siswa_ID_SISWA`, `siswa_saudara_kandung_anak_ID_SAUDARA_KANDUNG`, `siswa_riwayat_sekolah_ID_RIWAYATSEKOLAH`, `siswa_keluarga_ID_KELUARGA`, `siswa_kesehatan_anak_ID_KESEHATAN_ANAK`, `siswa_kelahiran_anak_ID_KELAHIRAN_ANAK`, `siswa_kemampuan_anak_ID_KEMAMPUAN_ANAK`, `siswa_hasil_ID_HASIL`, `siswa_kuisinoner_ID_KUISINONER`, `siswa_data_tempat_tinggal_ID_DATA_TEMPAT_TINGGAL`, `siswa_nilai_test_ID_NILAI_TEST`, `siswa_nilai_psikotest_ID_NILAI_PSIKOTEST`, `siswa_kondisi_keluarga_ID_KONDISI_KELUARGA`, `siswa_ciri_khas_anak_ID_CIRIKHAS_ANAK`, `notification_id_notif`) VALUES
(1236, 'Andis', 'Andis@mail.com', '12345', 46128, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(1237, 'abiem', '', 'abiem', 46127, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(1238, 'Anas Abiem', '082230507275', 'abimanyu', 46128, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`,`notification_id_notif`),
  ADD KEY `fk_admin_notification1_idx` (`notification_id_notif`);

--
-- Indexes for table `ciri_khas_anak`
--
ALTER TABLE `ciri_khas_anak`
  ADD PRIMARY KEY (`ID_CIRIKHAS_ANAK`);

--
-- Indexes for table `data_tempat_tinggal`
--
ALTER TABLE `data_tempat_tinggal`
  ADD PRIMARY KEY (`ID_DATA_TEMPAT_TINGGAL`);

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
  ADD PRIMARY KEY (`ID_HASIL`);

--
-- Indexes for table `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`admin_ID_ADMIN`,`nilai_psikotest_ID_NILAI_PSIKOTEST`),
  ADD KEY `fk_input_admin1_idx` (`admin_ID_ADMIN`),
  ADD KEY `fk_input_nilai_psikotest1_idx` (`nilai_psikotest_ID_NILAI_PSIKOTEST`);

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
  ADD PRIMARY KEY (`ID_KELAHIRAN_ANAK`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`ID_KELUARGA`);

--
-- Indexes for table `kemampuan_anak`
--
ALTER TABLE `kemampuan_anak`
  ADD PRIMARY KEY (`ID_KEMAMPUAN_ANAK`);

--
-- Indexes for table `kesehatan_anak`
--
ALTER TABLE `kesehatan_anak`
  ADD PRIMARY KEY (`ID_KESEHATAN_ANAK`);

--
-- Indexes for table `kondisi_keluarga`
--
ALTER TABLE `kondisi_keluarga`
  ADD PRIMARY KEY (`ID_KONDISI_KELUARGA`);

--
-- Indexes for table `kuisinoner`
--
ALTER TABLE `kuisinoner`
  ADD PRIMARY KEY (`ID_KUISINONER`);

--
-- Indexes for table `menentukan`
--
ALTER TABLE `menentukan`
  ADD PRIMARY KEY (`hasil_ID_HASIL`),
  ADD KEY `fk_menentukan_admin1_idx` (`admin_ID_ADMIN`);

--
-- Indexes for table `nilai_psikotest`
--
ALTER TABLE `nilai_psikotest`
  ADD PRIMARY KEY (`ID_NILAI_PSIKOTEST`);

--
-- Indexes for table `nilai_test`
--
ALTER TABLE `nilai_test`
  ADD PRIMARY KEY (`ID_NILAI_TEST`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID_PEMBAYARAN`),
  ADD KEY `fk_pembayaran_admin1_idx` (`admin_ID_ADMIN`),
  ADD KEY `fk_pembayaran_user1_idx` (`user_ID_USER`);

--
-- Indexes for table `riwayat_sekolah`
--
ALTER TABLE `riwayat_sekolah`
  ADD PRIMARY KEY (`ID_RIWAYATSEKOLAH`);

--
-- Indexes for table `saudara_kandung_anak`
--
ALTER TABLE `saudara_kandung_anak`
  ADD PRIMARY KEY (`ID_SAUDARA_KANDUNG`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`ID_SISWA`,`saudara_kandung_anak_ID_SAUDARA_KANDUNG`,`riwayat_sekolah_ID_RIWAYATSEKOLAH`,`keluarga_ID_KELUARGA`,`kesehatan_anak_ID_KESEHATAN_ANAK`,`kelahiran_anak_ID_KELAHIRAN_ANAK`,`kemampuan_anak_ID_KEMAMPUAN_ANAK`,`hasil_ID_HASIL`,`kuisinoner_ID_KUISINONER`,`data_tempat_tinggal_ID_DATA_TEMPAT_TINGGAL`,`nilai_test_ID_NILAI_TEST`,`nilai_psikotest_ID_NILAI_PSIKOTEST`,`kondisi_keluarga_ID_KONDISI_KELUARGA`,`ciri_khas_anak_ID_CIRIKHAS_ANAK`),
  ADD KEY `fk_siswa_saudara_kandung_anak1_idx` (`saudara_kandung_anak_ID_SAUDARA_KANDUNG`),
  ADD KEY `fk_siswa_riwayat_sekolah1_idx` (`riwayat_sekolah_ID_RIWAYATSEKOLAH`),
  ADD KEY `fk_siswa_keluarga1_idx` (`keluarga_ID_KELUARGA`),
  ADD KEY `fk_siswa_kesehatan_anak1_idx` (`kesehatan_anak_ID_KESEHATAN_ANAK`),
  ADD KEY `fk_siswa_kelahiran_anak1_idx` (`kelahiran_anak_ID_KELAHIRAN_ANAK`),
  ADD KEY `fk_siswa_kemampuan_anak1_idx` (`kemampuan_anak_ID_KEMAMPUAN_ANAK`),
  ADD KEY `fk_siswa_hasil1_idx` (`hasil_ID_HASIL`),
  ADD KEY `fk_siswa_kuisinoner1_idx` (`kuisinoner_ID_KUISINONER`),
  ADD KEY `fk_siswa_data_tempat_tinggal1_idx` (`data_tempat_tinggal_ID_DATA_TEMPAT_TINGGAL`),
  ADD KEY `fk_siswa_nilai_test1_idx` (`nilai_test_ID_NILAI_TEST`),
  ADD KEY `fk_siswa_nilai_psikotest1_idx` (`nilai_psikotest_ID_NILAI_PSIKOTEST`),
  ADD KEY `fk_siswa_kondisi_keluarga1_idx` (`kondisi_keluarga_ID_KONDISI_KELUARGA`),
  ADD KEY `fk_siswa_ciri_khas_anak1_idx` (`ciri_khas_anak_ID_CIRIKHAS_ANAK`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`,`notification_id_notif`),
  ADD KEY `fk_user_jenjang1_idx` (`jenjang_ID_JENJANG`),
  ADD KEY `fk_user_siswa1_idx` (`siswa_ID_SISWA`,`siswa_saudara_kandung_anak_ID_SAUDARA_KANDUNG`,`siswa_riwayat_sekolah_ID_RIWAYATSEKOLAH`,`siswa_keluarga_ID_KELUARGA`,`siswa_kesehatan_anak_ID_KESEHATAN_ANAK`,`siswa_kelahiran_anak_ID_KELAHIRAN_ANAK`,`siswa_kemampuan_anak_ID_KEMAMPUAN_ANAK`,`siswa_hasil_ID_HASIL`,`siswa_kuisinoner_ID_KUISINONER`,`siswa_data_tempat_tinggal_ID_DATA_TEMPAT_TINGGAL`,`siswa_nilai_test_ID_NILAI_TEST`,`siswa_nilai_psikotest_ID_NILAI_PSIKOTEST`,`siswa_kondisi_keluarga_ID_KONDISI_KELUARGA`,`siswa_ciri_khas_anak_ID_CIRIKHAS_ANAK`),
  ADD KEY `fk_user_notification1_idx` (`notification_id_notif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=990520;
--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `ID_JENJANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46130;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1239;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_notification1` FOREIGN KEY (`notification_id_notif`) REFERENCES `notification` (`id_notif`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `FK_SCAN` FOREIGN KEY (`ID_PEMBAYARAN`) REFERENCES `pembayaran` (`ID_PEMBAYARAN`);

--
-- Ketidakleluasaan untuk tabel `input`
--
ALTER TABLE `input`
  ADD CONSTRAINT `fk_input_admin1` FOREIGN KEY (`admin_ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_input_nilai_psikotest1` FOREIGN KEY (`nilai_psikotest_ID_NILAI_PSIKOTEST`) REFERENCES `nilai_psikotest` (`ID_NILAI_PSIKOTEST`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `input2`
--
ALTER TABLE `input2`
  ADD CONSTRAINT `fk_input2_admin1` FOREIGN KEY (`admin_ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_input2_nilai_test1` FOREIGN KEY (`nilai_test_ID_NILAI_TEST`) REFERENCES `nilai_test` (`ID_NILAI_TEST`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `menentukan`
--
ALTER TABLE `menentukan`
  ADD CONSTRAINT `fk_menentukan_admin1` FOREIGN KEY (`admin_ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_menentukan_hasil1` FOREIGN KEY (`hasil_ID_HASIL`) REFERENCES `hasil` (`ID_HASIL`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_pembayaran_admin1` FOREIGN KEY (`admin_ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pembayaran_user1` FOREIGN KEY (`user_ID_USER`) REFERENCES `user` (`ID_USER`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_siswa_ciri_khas_anak1` FOREIGN KEY (`ciri_khas_anak_ID_CIRIKHAS_ANAK`) REFERENCES `ciri_khas_anak` (`ID_CIRIKHAS_ANAK`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_siswa_data_tempat_tinggal1` FOREIGN KEY (`data_tempat_tinggal_ID_DATA_TEMPAT_TINGGAL`) REFERENCES `data_tempat_tinggal` (`ID_DATA_TEMPAT_TINGGAL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_siswa_hasil1` FOREIGN KEY (`hasil_ID_HASIL`) REFERENCES `hasil` (`ID_HASIL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_siswa_kelahiran_anak1` FOREIGN KEY (`kelahiran_anak_ID_KELAHIRAN_ANAK`) REFERENCES `kelahiran_anak` (`ID_KELAHIRAN_ANAK`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_siswa_keluarga1` FOREIGN KEY (`keluarga_ID_KELUARGA`) REFERENCES `keluarga` (`ID_KELUARGA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_siswa_kemampuan_anak1` FOREIGN KEY (`kemampuan_anak_ID_KEMAMPUAN_ANAK`) REFERENCES `kemampuan_anak` (`ID_KEMAMPUAN_ANAK`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_siswa_kesehatan_anak1` FOREIGN KEY (`kesehatan_anak_ID_KESEHATAN_ANAK`) REFERENCES `kesehatan_anak` (`ID_KESEHATAN_ANAK`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_siswa_kondisi_keluarga1` FOREIGN KEY (`kondisi_keluarga_ID_KONDISI_KELUARGA`) REFERENCES `kondisi_keluarga` (`ID_KONDISI_KELUARGA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_siswa_kuisinoner1` FOREIGN KEY (`kuisinoner_ID_KUISINONER`) REFERENCES `kuisinoner` (`ID_KUISINONER`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_siswa_nilai_psikotest1` FOREIGN KEY (`nilai_psikotest_ID_NILAI_PSIKOTEST`) REFERENCES `nilai_psikotest` (`ID_NILAI_PSIKOTEST`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_siswa_nilai_test1` FOREIGN KEY (`nilai_test_ID_NILAI_TEST`) REFERENCES `nilai_test` (`ID_NILAI_TEST`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_siswa_riwayat_sekolah1` FOREIGN KEY (`riwayat_sekolah_ID_RIWAYATSEKOLAH`) REFERENCES `riwayat_sekolah` (`ID_RIWAYATSEKOLAH`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_siswa_saudara_kandung_anak1` FOREIGN KEY (`saudara_kandung_anak_ID_SAUDARA_KANDUNG`) REFERENCES `saudara_kandung_anak` (`ID_SAUDARA_KANDUNG`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_jenjang1` FOREIGN KEY (`jenjang_ID_JENJANG`) REFERENCES `jenjang` (`ID_JENJANG`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_notification1` FOREIGN KEY (`notification_id_notif`) REFERENCES `notification` (`id_notif`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_siswa1` FOREIGN KEY (`siswa_ID_SISWA`,`siswa_saudara_kandung_anak_ID_SAUDARA_KANDUNG`,`siswa_riwayat_sekolah_ID_RIWAYATSEKOLAH`,`siswa_keluarga_ID_KELUARGA`,`siswa_kesehatan_anak_ID_KESEHATAN_ANAK`,`siswa_kelahiran_anak_ID_KELAHIRAN_ANAK`,`siswa_kemampuan_anak_ID_KEMAMPUAN_ANAK`,`siswa_hasil_ID_HASIL`,`siswa_kuisinoner_ID_KUISINONER`,`siswa_data_tempat_tinggal_ID_DATA_TEMPAT_TINGGAL`,`siswa_nilai_test_ID_NILAI_TEST`,`siswa_nilai_psikotest_ID_NILAI_PSIKOTEST`,`siswa_kondisi_keluarga_ID_KONDISI_KELUARGA`,`siswa_ciri_khas_anak_ID_CIRIKHAS_ANAK`) REFERENCES `siswa` (`ID_SISWA`, `saudara_kandung_anak_ID_SAUDARA_KANDUNG`, `riwayat_sekolah_ID_RIWAYATSEKOLAH`, `keluarga_ID_KELUARGA`, `kesehatan_anak_ID_KESEHATAN_ANAK`, `kelahiran_anak_ID_KELAHIRAN_ANAK`, `kemampuan_anak_ID_KEMAMPUAN_ANAK`, `hasil_ID_HASIL`, `kuisinoner_ID_KUISINONER`, `data_tempat_tinggal_ID_DATA_TEMPAT_TINGGAL`, `nilai_test_ID_NILAI_TEST`, `nilai_psikotest_ID_NILAI_PSIKOTEST`, `kondisi_keluarga_ID_KONDISI_KELUARGA`, `ciri_khas_anak_ID_CIRIKHAS_ANAK`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
