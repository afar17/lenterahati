-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 03:34 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lenterahati`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_judul` int(10) NOT NULL,
  `nm_judul` varchar(100) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_terbit` datetime NOT NULL,
  `id_user` int(3) NOT NULL,
  `sekolah_kodesekolah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(10) NOT NULL,
  `jdl_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_terbit` date NOT NULL,
  `id_user` int(3) NOT NULL,
  `sekolah_kodesekolah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `jdl_berita`, `isi_berita`, `tgl_terbit`, `id_user`, `sekolah_kodesekolah`) VALUES
(1, 'SMP IT', '<p><strong>nasa bagus prakosos</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-07-09', 1, 'SDIT');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_daftar` int(3) NOT NULL,
  `nm_lengkap` varchar(100) NOT NULL,
  `nm_panggilan` varchar(10) DEFAULT NULL,
  `nik_siswa` int(20) DEFAULT NULL,
  `no_akta` int(20) DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `tempat` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `kewarganegaraan` varchar(20) DEFAULT NULL,
  `anak_ke` varchar(10) DEFAULT NULL,
  `jumlah_saudara_kandung` varchar(10) DEFAULT NULL,
  `jumlah_saudara_angkat` int(3) DEFAULT NULL,
  `jumlah_saudara_tiri` int(3) DEFAULT NULL,
  `status_anak1` varchar(20) DEFAULT NULL,
  `status_anak2` varchar(20) DEFAULT NULL,
  `bahasa_dirumah` varchar(30) DEFAULT NULL,
  `jarak_rumah_kesekolah` varchar(10) DEFAULT NULL,
  `tinggal_bersama` varchar(10) DEFAULT NULL,
  `gol_darah` varchar(2) DEFAULT NULL,
  `penyakit_diderita` varchar(30) DEFAULT NULL,
  `tinggi_badan` varchar(20) DEFAULT NULL,
  `berat_badan` varchar(20) DEFAULT NULL,
  `imunisasi_yg_diterima` varchar(100) DEFAULT NULL,
  `asal_sekolah` varchar(30) DEFAULT NULL,
  `alamat_sekolah` varchar(30) DEFAULT NULL,
  `no_surat_keterangan` varchar(30) DEFAULT NULL,
  `uk_baju` varchar(10) DEFAULT NULL,
  `nm_ayah` int(50) DEFAULT NULL,
  `no_ktp_ayah` varchar(30) DEFAULT NULL,
  `tempat_ayah` varchar(20) DEFAULT NULL,
  `tgl_lahir_ayah` date DEFAULT NULL,
  `hubunganayah_dgn_siswa` varchar(20) DEFAULT NULL,
  `agama_ayah` varchar(20) DEFAULT NULL,
  `kewarganegaraan_ayah` varchar(20) DEFAULT NULL,
  `pendidikan_ayah` varchar(50) DEFAULT NULL,
  `alamat_ayah` varchar(30) DEFAULT NULL,
  `no_tlpn_ayah` varchar(15) DEFAULT NULL,
  `penghasilan_perbulan_ayah` varchar(30) DEFAULT NULL,
  `kesempatanayah_komunikasi_dgn_siswa` varchar(30) DEFAULT NULL,
  `nm_ibu` varchar(50) DEFAULT NULL,
  `no_ktp_ibu` varchar(30) DEFAULT NULL,
  `tempat_ibu` varchar(20) DEFAULT NULL,
  `tgl_lahir_ibu` date DEFAULT NULL,
  `hubunganibu_dgn_siswa` varchar(30) DEFAULT NULL,
  `agama_ibu` varchar(20) DEFAULT NULL,
  `kewarganegaraan_ibu` varchar(20) DEFAULT NULL,
  `pendidikan_terakhir_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `alamat_ibu` varchar(50) DEFAULT NULL,
  `no_tlpn_ibu` varchar(15) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `penghasilan_perbulan_ibu` varchar(30) DEFAULT NULL,
  `kesempatanibu_komunikasi_dgn_anak` varchar(20) DEFAULT NULL,
  `hasil_kelulusan` varchar(20) DEFAULT NULL,
  `lunas` enum('Ya','Tidak') DEFAULT NULL,
  `sekolah_kodesekolah` varchar(5) DEFAULT NULL,
  `tgl_pendaftaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `nm_lengkap`, `nm_panggilan`, `nik_siswa`, `no_akta`, `jenis_kelamin`, `tempat`, `tgl_lahir`, `alamat`, `agama`, `kewarganegaraan`, `anak_ke`, `jumlah_saudara_kandung`, `jumlah_saudara_angkat`, `jumlah_saudara_tiri`, `status_anak1`, `status_anak2`, `bahasa_dirumah`, `jarak_rumah_kesekolah`, `tinggal_bersama`, `gol_darah`, `penyakit_diderita`, `tinggi_badan`, `berat_badan`, `imunisasi_yg_diterima`, `asal_sekolah`, `alamat_sekolah`, `no_surat_keterangan`, `uk_baju`, `nm_ayah`, `no_ktp_ayah`, `tempat_ayah`, `tgl_lahir_ayah`, `hubunganayah_dgn_siswa`, `agama_ayah`, `kewarganegaraan_ayah`, `pendidikan_ayah`, `alamat_ayah`, `no_tlpn_ayah`, `penghasilan_perbulan_ayah`, `kesempatanayah_komunikasi_dgn_siswa`, `nm_ibu`, `no_ktp_ibu`, `tempat_ibu`, `tgl_lahir_ibu`, `hubunganibu_dgn_siswa`, `agama_ibu`, `kewarganegaraan_ibu`, `pendidikan_terakhir_ibu`, `pekerjaan_ayah`, `alamat_ibu`, `no_tlpn_ibu`, `pekerjaan_ibu`, `penghasilan_perbulan_ibu`, `kesempatanibu_komunikasi_dgn_anak`, `hasil_kelulusan`, `lunas`, `sekolah_kodesekolah`, `tgl_pendaftaran`) VALUES
(1, 'Rizky', NULL, 1234, NULL, '', 'Makassar', '2018-08-20', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, 'anak_kandung', NULL, NULL, NULL, NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'S', NULL, NULL, NULL, '2018-08-20', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-20', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(2, 'Rizky', NULL, 0, NULL, NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TKIT', '2018-08-01'),
(3, 'Rizky', NULL, 0, NULL, NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TKIT', '2018-08-01'),
(4, 'Faris', NULL, 0, NULL, NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SDIT', '0000-00-00'),
(5, 'Ramadhani', NULL, 0, NULL, '', 'Manado', '2014-08-13', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, 'anak_kandung', NULL, NULL, NULL, NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'S', NULL, NULL, NULL, '2000-08-15', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1985-08-07', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TKIT', '2018-08-20'),
(6, '', NULL, 0, NULL, NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SDIT', '2018-09-05'),
(7, '', NULL, 0, NULL, NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TKIT', '2018-09-05'),
(8, '', NULL, 0, NULL, NULL, '', '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TKIT', '2018-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(10) NOT NULL,
  `isi_profil` text NOT NULL,
  `jdl_profil` varchar(100) NOT NULL,
  `id_user` int(3) NOT NULL,
  `sekolah_kodesekolah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quota_tk`
--

CREATE TABLE `quota_tk` (
  `tahun` varchar(4) NOT NULL,
  `kuota` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quota_tk`
--

INSERT INTO `quota_tk` (`tahun`, `kuota`) VALUES
('2018', 6);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `kodesekolah` varchar(5) NOT NULL,
  `namasekolah` varchar(100) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`kodesekolah`, `namasekolah`, `alamat`) VALUES
('SDIT', 'SD IT', 'wosi'),
('SMPIT', 'SMP IT', ''),
('TKIT', 'TK IT', ''),
('YYS', 'Yayasan Lentera Hati', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nik_siswa` int(20) NOT NULL,
  `nm_siswa` varchar(20) NOT NULL,
  `level` enum('Siswa TK','Siswa SD','Siswa SMP','') NOT NULL,
  `pendaftaran_id_daftar` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(3) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` enum('Admin','operator_tk','operator_sd','operator_smp') NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `username`, `password`, `level`, `last_login`) VALUES
(1, 'Nasrul Aslami', 'nasa', '230c5c9d495e3bf392ef2b8098e51921', 'Admin', NULL),
(2, 'Budi', 'budi', 'budi', 'operator_tk', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_judul`),
  ADD KEY `fk_galeri_sekolah1_idx` (`sekolah_kodesekolah`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `fk_informasi_sekolah1_idx` (`sekolah_kodesekolah`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `fk_daftar_sd_sekolah_idx` (`sekolah_kodesekolah`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `fk_profil_sekolah1_idx` (`sekolah_kodesekolah`);

--
-- Indexes for table `quota_tk`
--
ALTER TABLE `quota_tk`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`kodesekolah`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nik_siswa`),
  ADD KEY `fk_siswa_pendaftaran1_idx` (`pendaftaran_id_daftar`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_judul` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_daftar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nik_siswa` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `fk_galeri_sekolah1` FOREIGN KEY (`sekolah_kodesekolah`) REFERENCES `sekolah` (`kodesekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `fk_informasi_sekolah1` FOREIGN KEY (`sekolah_kodesekolah`) REFERENCES `sekolah` (`kodesekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `fk_daftar_sd_sekolah` FOREIGN KEY (`sekolah_kodesekolah`) REFERENCES `sekolah` (`kodesekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `fk_profil_sekolah1` FOREIGN KEY (`sekolah_kodesekolah`) REFERENCES `sekolah` (`kodesekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_siswa_pendaftaran1` FOREIGN KEY (`pendaftaran_id_daftar`) REFERENCES `pendaftaran` (`id_daftar`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
