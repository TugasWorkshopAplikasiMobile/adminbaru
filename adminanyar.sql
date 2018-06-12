-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 06:55 PM
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
-- Database: `adminanyar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(9) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `jenis_kelamin_admin` varchar(50) NOT NULL,
  `no_telp_admin` int(13) NOT NULL,
  `level` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `id_gambar` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ciri_khas_anak`
--

CREATE TABLE `ciri_khas_anak` (
  `id_ciri_khas_anak` int(9) NOT NULL,
  `ciri_fisik_yang_menonjol` varchar(50) NOT NULL,
  `ciri_kepribadian_yang_menonjol` varchar(50) NOT NULL,
  `bakat_khusus_yang_menonjol` varchar(50) NOT NULL,
  `prestasi_yang_pernah_diraih` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_tempat_tinggal`
--

CREATE TABLE `data_tempat_tinggal` (
  `id_data_tempat_tinggal` int(9) NOT NULL,
  `status_tempat_tinggal` varchar(50) NOT NULL,
  `jarak_rumah_ke_sekolah` varchar(50) NOT NULL,
  `luas_bangunan_rumah` varchar(50) NOT NULL,
  `jumlah_kamar` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(9) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(9) NOT NULL,
  `status_terima` varchar(50) NOT NULL,
  `total_nilai` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `id_jenjang` int(9) NOT NULL,
  `nama_jenjang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran_anak`
--

CREATE TABLE `kelahiran_anak` (
  `id_kelahiran_anak` int(9) NOT NULL,
  `lama_dalam_kandungan` int(9) NOT NULL,
  `keadaan_dalam_kandungan` varchar(100) NOT NULL,
  `keadaan_lahir` varchar(100) NOT NULL,
  `proses_kelahiran` varchar(100) NOT NULL,
  `yang_membantu_kelahiran` varchar(100) NOT NULL,
  `berat_panjang_ketika_lahir` varchar(100) NOT NULL,
  `usia_ibu_ketika_lahir` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id_keluarga` int(9) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `agama_ayah` varchar(50) NOT NULL,
  `agama_ibu` varchar(50) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `kewarganegaraan_ayah` varchar(50) NOT NULL,
  `kewarganegaraan_ibu` varchar(50) NOT NULL,
  `pendidikan_terakhir_ayah` varchar(50) NOT NULL,
  `pendidikan_terakhir_ibu` varchar(50) NOT NULL,
  `jurusan_yang_diambil_ayah` varchar(50) NOT NULL,
  `jurusan_yang_diambil_ibu` varchar(50) NOT NULL,
  `nama_instansi_ayah_bekerja` varchar(50) NOT NULL,
  `nama_instansi_ibu_bekerja` varchar(50) NOT NULL,
  `pangkat_golongan_ayah` varchar(50) NOT NULL,
  `pangkat_golongan_ibu` varchar(50) NOT NULL,
  `lama_kerja_ayah_perhari` varchar(50) NOT NULL,
  `lama_kerja_ibu_perhari` varchar(50) NOT NULL,
  `penghasilan_perbulan_ayah` int(50) NOT NULL,
  `penghasilan_perbulan_ibu` int(50) NOT NULL,
  `jumlah_tanggungan_ayah` int(50) NOT NULL,
  `jumlah_tanggungan_ibu` int(50) NOT NULL,
  `alamat_rumah_ayah` varchar(50) NOT NULL,
  `alamat_rumah_ibu` varchar(50) NOT NULL,
  `alamat_kantor_ayah` varchar(50) NOT NULL,
  `alamat_kantor_ibu` varchar(50) NOT NULL,
  `telp_rumah_hp_ayah` int(13) NOT NULL,
  `telp_rumah_hp_ibu` int(13) NOT NULL,
  `telp_kantor_ayah` int(13) NOT NULL,
  `telp_kantor_ibu` int(13) NOT NULL,
  `kesempatan_berkomunikasi_dg_ayah` varchar(100) NOT NULL,
  `kesempatan_berkomunikasi_dg_ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kemampuan_anak`
--

CREATE TABLE `kemampuan_anak` (
  `id_kemampuan_anak` int(9) NOT NULL,
  `aktifitas` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan_anak`
--

CREATE TABLE `kesehatan_anak` (
  `id_kesehatan_anak` int(9) NOT NULL,
  `berat_badan` int(9) NOT NULL,
  `tinggi_badan` varchar(10) NOT NULL,
  `gol_darah` varchar(3) NOT NULL,
  `minum_asi_selama` int(3) NOT NULL,
  `perkembangan_dalam_2bulan` varchar(100) NOT NULL,
  `kelainan_dalam_tubuh` varchar(100) NOT NULL,
  `makanan_tambahan_kurang_dari_2bulan` varchar(100) NOT NULL,
  `imunisasi_yang_diberikan` varchar(100) NOT NULL,
  `alergi_makanan_dan_obat` varchar(100) NOT NULL,
  `penglihatan` varchar(100) NOT NULL,
  `pendengaran` varchar(100) NOT NULL,
  `penampilan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_keluarga`
--

CREATE TABLE `kondisi_keluarga` (
  `id_kondisi_keluarga` int(9) NOT NULL,
  `pertanyaan_kondisi` varchar(100) NOT NULL,
  `jawaban_kondisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id_kuisioner` int(9) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_psikotes`
--

CREATE TABLE `nilai_psikotes` (
  `id_nilai_psikotes` int(9) NOT NULL,
  `nilai_psikotes` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_tes`
--

CREATE TABLE `nilai_tes` (
  `id_nilai_tes` int(9) NOT NULL,
  `matematika` int(9) NOT NULL,
  `ipa` int(9) NOT NULL,
  `bahasa_indonesia` int(9) NOT NULL,
  `bahasa_inggris` int(9) NOT NULL,
  `psikologi` int(9) NOT NULL,
  `jumlah_nilai_tes` int(9) NOT NULL,
  `rata_rata_nilai_tes` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(9) NOT NULL,
  `jenis_notifikasi` varchar(50) NOT NULL,
  `judul_notifikasi` varchar(50) NOT NULL,
  `isi_notifikasi` varchar(50) NOT NULL,
  `status_notifikasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(9) NOT NULL,
  `status_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_sekolah`
--

CREATE TABLE `riwayat_sekolah` (
  `id_riwayat_sekolah` int(9) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `tahun_masuk` int(4) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `alamat_sekolah` varchar(50) NOT NULL,
  `kesulitan_saat_sekolah` varchar(100) NOT NULL,
  `aktifitas_yang_disukai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saudara_kandung_anak`
--

CREATE TABLE `saudara_kandung_anak` (
  `id_saudara_kandung` int(9) NOT NULL,
  `nama_saudara_kandung` varchar(50) NOT NULL,
  `jenis_kelamin_saudara_kandung` varchar(50) NOT NULL,
  `pendidikan_saudara_kandung` varchar(50) NOT NULL,
  `kelas_saudara_kandung` varchar(50) NOT NULL,
  `no_induk_saudara_kandung` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(9) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `tempat_lahir_siswa` varchar(50) NOT NULL,
  `tanggal_lahir_siswa` date NOT NULL,
  `usia_siswa` int(3) NOT NULL,
  `jenis_kelamin_siswa` varchar(50) NOT NULL,
  `agama_siswa` varchar(50) NOT NULL,
  `kewarganegaraan_siswa` varchar(50) NOT NULL,
  `tinggal_bersama_siswa` varchar(50) NOT NULL,
  `anak_ke_siswa` int(3) NOT NULL,
  `id_data_tempat_tinggal` int(9) NOT NULL,
  `id_ciri_khas_anak` int(9) NOT NULL,
  `id_hasil` int(9) NOT NULL,
  `id_jenjang` int(9) NOT NULL,
  `id_kelahiran_anak` int(9) NOT NULL,
  `id_keluarga` int(9) NOT NULL,
  `id_kemampuan_anak` int(9) NOT NULL,
  `id_kesehatan_anak` int(9) NOT NULL,
  `id_kondisi_keluarga` int(9) NOT NULL,
  `id_kuisioner` int(9) NOT NULL,
  `id_nilai_psikotes` int(9) NOT NULL,
  `id_nilai_tes` int(9) NOT NULL,
  `id_pembayaran` int(9) NOT NULL,
  `id_riwayat_sekolah` int(9) NOT NULL,
  `id_saudara_kandung` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(9) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `id_siswa` int(9) NOT NULL,
  `id_notifikasi` int(9) NOT NULL,
  `id_gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_gambar_admin` (`id_gambar`) USING BTREE;

--
-- Indexes for table `ciri_khas_anak`
--
ALTER TABLE `ciri_khas_anak`
  ADD PRIMARY KEY (`id_ciri_khas_anak`);

--
-- Indexes for table `data_tempat_tinggal`
--
ALTER TABLE `data_tempat_tinggal`
  ADD PRIMARY KEY (`id_data_tempat_tinggal`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indexes for table `kelahiran_anak`
--
ALTER TABLE `kelahiran_anak`
  ADD PRIMARY KEY (`id_kelahiran_anak`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indexes for table `kemampuan_anak`
--
ALTER TABLE `kemampuan_anak`
  ADD PRIMARY KEY (`id_kemampuan_anak`);

--
-- Indexes for table `kesehatan_anak`
--
ALTER TABLE `kesehatan_anak`
  ADD PRIMARY KEY (`id_kesehatan_anak`);

--
-- Indexes for table `kondisi_keluarga`
--
ALTER TABLE `kondisi_keluarga`
  ADD PRIMARY KEY (`id_kondisi_keluarga`);

--
-- Indexes for table `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`id_kuisioner`);

--
-- Indexes for table `nilai_psikotes`
--
ALTER TABLE `nilai_psikotes`
  ADD PRIMARY KEY (`id_nilai_psikotes`);

--
-- Indexes for table `nilai_tes`
--
ALTER TABLE `nilai_tes`
  ADD PRIMARY KEY (`id_nilai_tes`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `riwayat_sekolah`
--
ALTER TABLE `riwayat_sekolah`
  ADD PRIMARY KEY (`id_riwayat_sekolah`);

--
-- Indexes for table `saudara_kandung_anak`
--
ALTER TABLE `saudara_kandung_anak`
  ADD PRIMARY KEY (`id_saudara_kandung`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_data_tempat_tinggal` (`id_data_tempat_tinggal`),
  ADD KEY `id_ciri_khas_anak` (`id_ciri_khas_anak`),
  ADD KEY `id_hasil` (`id_hasil`),
  ADD KEY `id_jenjang` (`id_jenjang`),
  ADD KEY `id_kelahiran_anak` (`id_kelahiran_anak`),
  ADD KEY `id_keluarga` (`id_keluarga`),
  ADD KEY `id_kemampuan_anak` (`id_kemampuan_anak`),
  ADD KEY `id_kesehatan_anak` (`id_kesehatan_anak`),
  ADD KEY `id_kondisi_keluarga` (`id_kondisi_keluarga`),
  ADD KEY `id_kuisioner` (`id_kuisioner`),
  ADD KEY `id_nilai_psikotes` (`id_nilai_psikotes`),
  ADD KEY `id_nilai_tes` (`id_nilai_tes`),
  ADD KEY `id_pembayaran` (`id_pembayaran`),
  ADD KEY `id_riwayat_sekolah` (`id_riwayat_sekolah`),
  ADD KEY `id_saudara_kandung` (`id_saudara_kandung`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_notifikasi_user` (`id_notifikasi`),
  ADD KEY `id_gambar_user` (`id_gambar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ciri_khas_anak`
--
ALTER TABLE `ciri_khas_anak`
  MODIFY `id_ciri_khas_anak` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `id_jenjang` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelahiran_anak`
--
ALTER TABLE `kelahiran_anak`
  MODIFY `id_kelahiran_anak` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_keluarga` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kemampuan_anak`
--
ALTER TABLE `kemampuan_anak`
  MODIFY `id_kemampuan_anak` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kondisi_keluarga`
--
ALTER TABLE `kondisi_keluarga`
  MODIFY `id_kondisi_keluarga` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuisioner`
--
ALTER TABLE `kuisioner`
  MODIFY `id_kuisioner` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_psikotes`
--
ALTER TABLE `nilai_psikotes`
  MODIFY `id_nilai_psikotes` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_tes`
--
ALTER TABLE `nilai_tes`
  MODIFY `id_nilai_tes` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_sekolah`
--
ALTER TABLE `riwayat_sekolah`
  MODIFY `id_riwayat_sekolah` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saudara_kandung_anak`
--
ALTER TABLE `saudara_kandung_anak`
  MODIFY `id_saudara_kandung` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(9) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_gambar`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_data_tempat_tinggal`) REFERENCES `data_tempat_tinggal` (`id_data_tempat_tinggal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_10` FOREIGN KEY (`id_kuisioner`) REFERENCES `kuisioner` (`id_kuisioner`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_11` FOREIGN KEY (`id_nilai_psikotes`) REFERENCES `nilai_psikotes` (`id_nilai_psikotes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_12` FOREIGN KEY (`id_nilai_tes`) REFERENCES `nilai_tes` (`id_nilai_tes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_13` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_14` FOREIGN KEY (`id_riwayat_sekolah`) REFERENCES `riwayat_sekolah` (`id_riwayat_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_15` FOREIGN KEY (`id_saudara_kandung`) REFERENCES `saudara_kandung_anak` (`id_saudara_kandung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_ciri_khas_anak`) REFERENCES `ciri_khas_anak` (`id_ciri_khas_anak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`id_hasil`) REFERENCES `hasil` (`id_hasil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_4` FOREIGN KEY (`id_jenjang`) REFERENCES `jenjang` (`id_jenjang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_5` FOREIGN KEY (`id_kelahiran_anak`) REFERENCES `kelahiran_anak` (`id_kelahiran_anak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_6` FOREIGN KEY (`id_keluarga`) REFERENCES `keluarga` (`id_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_7` FOREIGN KEY (`id_kemampuan_anak`) REFERENCES `kemampuan_anak` (`id_kemampuan_anak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_8` FOREIGN KEY (`id_kesehatan_anak`) REFERENCES `kesehatan_anak` (`id_kesehatan_anak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_9` FOREIGN KEY (`id_kondisi_keluarga`) REFERENCES `kondisi_keluarga` (`id_kondisi_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_notifikasi`) REFERENCES `notifikasi` (`id_notifikasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`id_gambar`) REFERENCES `gambar` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
