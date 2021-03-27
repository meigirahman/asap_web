-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2016 at 07:35 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kependudukanok`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `ID` int(2) NOT NULL,
  `NAMA` varchar(20) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`ID`, `NAMA`, `USERNAME`, `PASSWORD`) VALUES
(1, 'ADMIN', 'ADMIN', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_agama`
--

CREATE TABLE IF NOT EXISTS `tb_agama` (
  `id` int(2) NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_agama`
--

INSERT INTO `tb_agama` (`id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kematian`
--

CREATE TABLE IF NOT EXISTS `tb_detail_kematian` (
  `no_surat_kematian` varchar(20) NOT NULL,
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_kematian`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kk`
--

CREATE TABLE IF NOT EXISTS `tb_detail_kk` (
  `no_reg_kk` varchar(10) NOT NULL,
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_akta` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `no_akta_nikah` varchar(20) NOT NULL,
  `tanggal_nikah` varchar(12) NOT NULL,
  `no_akta_cerai` varchar(20) NOT NULL,
  `tanggal_cerai` varchar(12) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_kk`
--

INSERT INTO `tb_detail_kk` (`no_reg_kk`, `no_reg_pend`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `no_akta`, `agama`, `status_nikah`, `no_akta_nikah`, `tanggal_nikah`, `no_akta_cerai`, `tanggal_cerai`, `status_hub`, `pendidikan`, `pekerjaan`, `nama_ayah`, `nama_ibu`, `no_rt`, `no_rw`) VALUES
('KK00003', 'Reg00002', '2', 'KIKI', 'Perempuan', 'caracas', '1900-01-01', '-', 'Islam', 'Belum Kawin', '-', '', '-', '', 'Anak', 'Strata II', 'Pegawai Negeri Sipil (PNS)', 'AJI', 'KIKI', 3, 1),
('KK00002', 'Reg00002', '2', 'KIKI', 'Perempuan', 'caracas', '1900-01-01', '-', 'Islam', 'Belum Kawin', '-', '', '-', '', ' Anak ', 'Strata II', 'Pegawai Negeri Sipil (PNS)', 'AJI', 'KIKI', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_ktp`
--

CREATE TABLE IF NOT EXISTS `tb_detail_ktp` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_ktp`
--

INSERT INTO `tb_detail_ktp` (`nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `status_hub`, `status_nikah`, `pendidikan`, `pekerjaan`, `no_kk`, `no_rt`, `no_rw`) VALUES
('1', 'AJI', 'Laki-laki', 'kuningan', '1900-01-01', 'Islam', 'Kepala Keluarga', 'Kawin', 'Strata II', 'Pegawai Negeri Sipil (PNS)', 'KK00001', 3, 1),
('2', 'KIKI', 'Perempuan', 'caracas', '1900-01-01', 'Islam', 'Anak', 'Belum Kawin', 'Strata II', 'Pegawai Negeri Sipil (PNS)', 'KK00003', 3, 1),
('2', '', 'Laki-laki', '', '1900-01-01', '-', '-', '-', '-', '-', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pend_masuk`
--

CREATE TABLE IF NOT EXISTS `tb_detail_pend_masuk` (
  `no_surat_masuk` varchar(30) NOT NULL,
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(2) NOT NULL,
  `no_akta` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `no_akta_nikah` varchar(20) NOT NULL,
  `tanggal_nikah` varchar(12) NOT NULL,
  `no_akta_cerai` varchar(20) NOT NULL,
  `tanggal_cerai` varchar(12) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_surat_kelahiran` varchar(20) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_reg_pend`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_pend_masuk`
--

INSERT INTO `tb_detail_pend_masuk` (`no_surat_masuk`, `no_reg_pend`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `umur`, `no_akta`, `agama`, `status_nikah`, `no_akta_nikah`, `tanggal_nikah`, `no_akta_cerai`, `tanggal_cerai`, `status_hub`, `pendidikan`, `pekerjaan`, `nama_ayah`, `nama_ibu`, `no_kk`, `no_surat_kelahiran`, `no_rt`, `no_rw`, `tanggal_input`) VALUES
('', 'Reg00005', '12', 'IIS', 'Laki-laki', '', '1900-01-01', 0, '-', '-', '-', '-', '', '-', '', ' Istri ', ' Akademi/Diploma III Sarjana Muda ', ' Transportasi ', 'ER', 'RE', '', '-', 3, 2, '2016-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pend_pindah`
--

CREATE TABLE IF NOT EXISTS `tb_detail_pend_pindah` (
  `no_surat_pindah` varchar(20) NOT NULL,
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_pend_pindah`
--

INSERT INTO `tb_detail_pend_pindah` (`no_surat_pindah`, `no_reg_pend`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `status_nikah`, `status_hub`, `pendidikan`, `pekerjaan`, `no_kk`, `no_rt`, `no_rw`) VALUES
('470/002/2016', 'Reg00006', '', 'EPUL', 'Laki-laki', '', '1900-01-01', '-', '-', ' Kepala Keluarga ', '-', '-', 'KK00002', 0, 0),
('470/003/2016', '', '2', '', 'Laki-laki', '', '1900-01-01', '', '-', '-', '-', '-', '', 0, 0),
('470/001/2016', 'Reg00001', '1', 'AJI', 'Laki-laki', 'kuningan', '1900-01-01', 'Islam', 'Kawin', 'Kepala Keluarga', 'Pegawai Negeri Sipil (PNS)', 'Strata II', 'KK00001', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_kelamin`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_kelamin` (
  `jenis_kelamin` varchar(10) NOT NULL,
  PRIMARY KEY (`jenis_kelamin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_jenis_kelamin`
--

INSERT INTO `tb_jenis_kelamin` (`jenis_kelamin`) VALUES
('Laki-laki'),
('Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelahiran`
--

CREATE TABLE IF NOT EXISTS `tb_kelahiran` (
  `no_surat_kelahiran` varchar(20) NOT NULL,
  `no_reg_pend` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_surat_kelahiran`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kelahiran`
--

INSERT INTO `tb_kelahiran` (`no_surat_kelahiran`, `no_reg_pend`, `nama`, `jenis_kelamin`, `hari`, `tempat`, `tanggal_lahir`, `nama_ibu`, `nama_ayah`, `no_kk`, `no_rt`, `no_rw`, `tanggal_input`) VALUES
('474.1/003/2016', 'Reg00008', 'NANA', 'Laki-laki', '- -', '', '1900-01-01', '', '', '', 0, 0, '2016-11-28'),
('474.1/002/2016', 'Reg00004', 'AJIZAH', 'Perempuan', 'Senin Legi', 'caracas', '1900-01-01', 'WIWI MARDWIYAH', 'MAMAN', '123', 3, 2, '2016-11-26'),
('474.1/001/2016', 'Reg00003', 'AJIBON', 'Laki-laki', 'Senin Legi', 'caracas', '1900-02-02', 'ENTIN', 'SUDIRMAN', '12', 3, 1, '2016-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kematian`
--

CREATE TABLE IF NOT EXISTS `tb_kematian` (
  `no_surat_kematian` varchar(20) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `hari_meninggal` varchar(6) NOT NULL,
  `umur` int(2) NOT NULL,
  `tempat_meninggal` varchar(20) NOT NULL,
  `sebab` varchar(50) NOT NULL,
  `desa` varchar(15) NOT NULL,
  `kota` varchar(15) NOT NULL,
  `oleh` varchar(20) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_surat_kematian`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kematian`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_kk`
--

CREATE TABLE IF NOT EXISTS `tb_kk` (
  `no_reg_kk` varchar(10) NOT NULL,
  `nama_kk` varchar(25) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `jml_anggota` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_reg_kk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kk`
--

INSERT INTO `tb_kk` (`no_reg_kk`, `nama_kk`, `no_rt`, `no_rw`, `jml_anggota`, `tanggal_input`) VALUES
('KK00002', 'EPUL', 3, 2, 1, '2016-11-27'),
('KK00003', 'TONO', 3, 2, 1, '2016-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ktp`
--

CREATE TABLE IF NOT EXISTS `tb_ktp` (
  `nik` varchar(16) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_berlaku` date NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_ktp`
--

INSERT INTO `tb_ktp` (`nik`, `tanggal_input`, `tanggal_berlaku`) VALUES
('2', '2016-11-28', '2016-11-28'),
('Reg00002', '2016-11-25', '2017-02-04'),
('1', '2016-11-26', '2017-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `tb_pekerjaan` (
  `kd_kerja` int(2) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_kerja`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`kd_kerja`, `pekerjaan`) VALUES
(1, 'Belum/Tidak Bekerja'),
(2, 'Mengurus Rumah Tangga'),
(3, 'Pelajar/Mahasiswa'),
(4, 'Pensiunan'),
(5, 'Pegawai Negeri Sipil (PNS)'),
(6, 'Tentara Nasional Indonesia (TNI)'),
(7, 'Kepolisian RI (POLRI)'),
(8, 'Perdagangan'),
(9, 'Petani/Pekebun'),
(10, 'Peternak'),
(11, 'Nelayan/Perikanan'),
(12, 'Industri'),
(13, 'Konstruksi'),
(14, 'Transportasi'),
(15, 'Karyawan Swasta'),
(16, 'Karyawan BUMN'),
(17, 'Karyawan BUMD'),
(18, 'Karyawan Honorer'),
(19, 'Buruh Harian Lepas'),
(20, 'Buruh Tani/Perkebunan'),
(21, 'Buruh Nelayan/Perikanan'),
(22, 'Buruh Peternakan'),
(23, 'Pembantu Rumah Tangga'),
(24, 'Tukang Cukur'),
(25, 'Tukang Listrik'),
(26, 'Tukang Batu'),
(27, 'Tukang Kayu'),
(28, 'Tukang Sol Sepatu'),
(29, 'Tukang Las/Pandai Besi'),
(30, 'Tukang Jahit'),
(31, 'Tukang Gigi'),
(32, 'Penata Rias'),
(33, 'Penata Busana'),
(34, 'Penata Rambut'),
(35, 'Mekanik'),
(36, 'Seniman'),
(37, 'Tabib'),
(38, 'Paraji'),
(39, 'Perancang Busana'),
(40, 'Penterjemah'),
(41, 'Imam Masjid'),
(42, 'Pendeta'),
(43, 'Pastor'),
(44, 'Wartawan'),
(45, 'Ustadz/Mubaligh'),
(46, 'Juru Masak'),
(47, 'Promotor Acara'),
(48, 'Anggota DPR-RI'),
(49, 'Anggota DPD'),
(50, 'Anggota BPK'),
(51, 'Presiden'),
(52, 'Wakil Presiden'),
(53, 'Anggota Mahkamah Konstitusi'),
(54, 'Anggota Kabinet Kementrian'),
(55, 'Duta Besar'),
(56, 'Gubernur'),
(57, 'Wakil Gubernur'),
(58, 'Bupati'),
(59, 'Wakil Bupati'),
(60, 'Walikota'),
(61, 'Wakil Walikota'),
(62, 'Anggota DPRP Prov'),
(63, 'Anggota DPRP Kab/Kota'),
(64, 'Dosen'),
(65, 'Guru'),
(66, 'Pilot'),
(67, 'Pengacara'),
(68, 'Notaris'),
(69, 'Arsitek'),
(70, 'Akuntan'),
(71, 'Konsultan'),
(72, 'Dokter'),
(73, 'Bidan'),
(74, 'Perawat'),
(75, 'Apoteker'),
(76, 'Psikiater/Psikolog'),
(77, 'Penyiar Televisi'),
(78, 'Penyiar Radio'),
(79, 'Pelaut'),
(80, 'Peneliti'),
(81, 'Sopir'),
(82, 'Pialang'),
(83, 'Paranormal'),
(84, 'Pedagang'),
(85, 'Perangkat Desa'),
(86, 'Kepala Desa'),
(87, 'Biarawati'),
(88, 'Wiraswasta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE IF NOT EXISTS `tb_pendidikan` (
  `kd_pend` int(2) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_pend`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`kd_pend`, `pendidikan`) VALUES
(1, 'Tidak/Belum Sekolah'),
(2, 'Belum Tamat SD/Sederajat'),
(3, 'Tamat SD/Sederajat'),
(4, 'SLTP/Sederajat'),
(5, 'SLTA/Sederajat'),
(6, 'Diploma I/II'),
(7, 'Akademi/Diploma III Sarjana Muda'),
(8, 'Diploma IV/Strata I'),
(9, 'Strata II'),
(10, 'Strata III');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE IF NOT EXISTS `tb_penduduk` (
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(2) NOT NULL,
  `no_akta` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `no_akta_nikah` varchar(20) NOT NULL,
  `tanggal_nikah` varchar(12) NOT NULL,
  `no_akta_cerai` varchar(20) NOT NULL,
  `tanggal_cerai` varchar(12) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_surat_kelahiran` varchar(20) NOT NULL,
  `no_surat_masuk` varchar(30) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_reg_pend`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`no_reg_pend`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `umur`, `no_akta`, `agama`, `status_nikah`, `no_akta_nikah`, `tanggal_nikah`, `no_akta_cerai`, `tanggal_cerai`, `status_hub`, `pendidikan`, `pekerjaan`, `nama_ayah`, `nama_ibu`, `no_kk`, `no_surat_kelahiran`, `no_surat_masuk`, `no_rt`, `no_rw`, `tanggal_input`) VALUES
('Reg00010', '', '', 'Laki-laki', '', '1900-01-01', 0, '-', '-', '-', '-', '', '-', '', '-', '-', '-', '', '', '', '-', '', 0, 0, '2016-11-28'),
('Reg00008', '', 'NANA', 'Laki-laki', '', '1900-01-01', 0, '', ' Islam ', ' Kawin ', '', '', '', '', '', ' Diploma IV/Strata I ', ' Pegawai Negeri Sipil (PNS) ', '', '', '', '474.1/003/2016', '', 0, 0, '2016-11-28'),
('Reg00006', '', 'TONO', 'Laki-laki', '', '1900-01-01', 0, '-', '-', ' Kawin ', '-', '', '-', '', 'Kepala Keluarga', '-', '-', '', '', 'KK00003', '-', '-', 0, 0, '2016-11-27'),
('Reg00009', '', 'AANG', 'Laki-laki', 'caracas', '1900-01-01', 0, '1222', ' Islam ', ' Kawin ', '111', '20-02-2020', '33', '', ' Suami ', ' Diploma I/II ', ' Industri ', 'TATANG', 'EU', '', '-', '', 3, 2, '2016-11-28'),
('Reg00002', '2', 'KIKI', 'Perempuan', 'caracas', '1900-01-01', 0, '-', 'Islam', 'Belum Kawin', '-', '', '-', '', 'Anak', 'Strata II', 'Pegawai Negeri Sipil (PNS)', 'AJI', 'KIKI', 'KK00003', '-', '-', 3, 1, '2016-11-25'),
('Reg00005', '', 'IIS', 'Laki-laki', '', '1900-01-01', 0, '-', '-', '-', '-', '', '-', '', ' Istri ', ' Akademi/Diploma III Sarjana Muda ', ' Transportasi ', 'ER', 'RE', '', '-', '', 3, 2, '2016-11-26'),
('Reg00003', '', 'AJIBON', 'Laki-laki', 'caracas', '1900-02-02', 0, '', '', '', '', '', '', '', '', '', '', 'SUDIRMAN', 'ENTIN', '12', '474.1/001/2016', '', 3, 1, '2016-11-26'),
('Reg00004', '', 'AJIZAH', 'Perempuan', 'caracas', '1900-01-01', 0, '', '', '', '', '', '', '', '', '', '', 'MAMAN', 'WIWI MARDWIYAH', '123', '474.1/002/2016', '', 3, 2, '2016-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pend_masuk`
--

CREATE TABLE IF NOT EXISTS `tb_pend_masuk` (
  `no_surat_masuk` varchar(30) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama_kk` varchar(25) NOT NULL,
  `alamat_sebelum` varchar(15) NOT NULL,
  `rt_sebelum` int(2) NOT NULL,
  `rw_sebelum` int(2) NOT NULL,
  `kec_sebelum` varchar(15) NOT NULL,
  `kab_sebelum` varchar(15) NOT NULL,
  `prov_sebelum` varchar(15) NOT NULL,
  `alasan` varchar(30) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `klsfksi_pindah` varchar(30) NOT NULL,
  `jenis_pindah` varchar(30) NOT NULL,
  `status_kk_pindah` varchar(30) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_surat_masuk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pend_masuk`
--

INSERT INTO `tb_pend_masuk` (`no_surat_masuk`, `no_kk`, `nama_kk`, `alamat_sebelum`, `rt_sebelum`, `rw_sebelum`, `kec_sebelum`, `kab_sebelum`, `prov_sebelum`, `alasan`, `no_rt`, `no_rw`, `klsfksi_pindah`, `jenis_pindah`, `status_kk_pindah`, `tanggal_input`) VALUES
('', '', 'GAGAN', '', 0, 0, '', '', '', '-', 0, 0, '-', '-', '-', '2016-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pend_pindah`
--

CREATE TABLE IF NOT EXISTS `tb_pend_pindah` (
  `no_surat_pindah` varchar(20) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama_kk` varchar(25) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_pindah` date NOT NULL,
  `alamat_tujuan` varchar(20) NOT NULL,
  `rt_tujuan` int(2) NOT NULL,
  `rw_tujuan` int(2) NOT NULL,
  `kec_tujuan` varchar(15) NOT NULL,
  `kab_tujuan` varchar(15) NOT NULL,
  `prov_tujuan` varchar(15) NOT NULL,
  `klsfksi_pindah` varchar(30) NOT NULL,
  `jenis_pindah` varchar(40) NOT NULL,
  `status_kk_pindah` varchar(2) NOT NULL,
  `status_kk_tdkpindah` varchar(2) NOT NULL,
  `alasan` varchar(20) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_surat_pindah`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pend_pindah`
--

INSERT INTO `tb_pend_pindah` (`no_surat_pindah`, `no_kk`, `nama_kk`, `no_rt`, `no_rw`, `tanggal_pindah`, `alamat_tujuan`, `rt_tujuan`, `rw_tujuan`, `kec_tujuan`, `kab_tujuan`, `prov_tujuan`, `klsfksi_pindah`, `jenis_pindah`, `status_kk_pindah`, `status_kk_tdkpindah`, `alasan`, `tanggal_input`) VALUES
('470/001/2016', '', 'MAMAN', 0, 0, '0000-00-00', '', 0, 0, '', '', '', '-', '-', '-', '-', '-', '2016-11-26'),
('470/002/2016', 'KK00002', '', 0, 0, '0000-00-00', '', 0, 0, '', '', '', '-', '-', '-', '-', '-', '2016-11-27'),
('470/003/2016', '', '', 0, 0, '2016-11-28', '', 0, 0, '', '', '', '-', '-', '-', '-', '-', '2016-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rt`
--

CREATE TABLE IF NOT EXISTS `tb_rt` (
  `no` int(2) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `nama_rt` varchar(15) NOT NULL,
  `no_rw` int(2) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rt`
--

INSERT INTO `tb_rt` (`no`, `no_rt`, `nama_rt`, `no_rw`) VALUES
(1, 1, 'BONTENG', 1),
(2, 2, 'ISMA', 2),
(3, 3, 'YENI', 3),
(4, 4, 'PUTRI', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rw`
--

CREATE TABLE IF NOT EXISTS `tb_rw` (
  `no_rw` int(2) NOT NULL,
  `nama_rw` varchar(15) NOT NULL,
  PRIMARY KEY (`no_rw`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rw`
--

INSERT INTO `tb_rw` (`no_rw`, `nama_rw`) VALUES
(1, 'DIAS'),
(2, 'AZHI'),
(3, 'MAMAN'),
(4, 'TARIP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sementarakk`
--

CREATE TABLE IF NOT EXISTS `tb_sementarakk` (
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_akta` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `no_akta_nikah` varchar(20) NOT NULL,
  `tanggal_nikah` varchar(12) NOT NULL,
  `no_akta_cerai` varchar(20) NOT NULL,
  `tanggal_cerai` varchar(12) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sementarakk`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_sementaramasuk`
--

CREATE TABLE IF NOT EXISTS `tb_sementaramasuk` (
  `no_surat_masuk` varchar(30) NOT NULL,
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(2) NOT NULL,
  `no_akta` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `no_akta_nikah` varchar(20) NOT NULL,
  `tanggal_nikah` varchar(12) NOT NULL,
  `no_akta_cerai` varchar(20) NOT NULL,
  `tanggal_cerai` varchar(12) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_surat_kelahiran` varchar(20) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_reg_pend`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sementaramasuk`
--

INSERT INTO `tb_sementaramasuk` (`no_surat_masuk`, `no_reg_pend`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `umur`, `no_akta`, `agama`, `status_nikah`, `no_akta_nikah`, `tanggal_nikah`, `no_akta_cerai`, `tanggal_cerai`, `status_hub`, `pendidikan`, `pekerjaan`, `nama_ayah`, `nama_ibu`, `no_kk`, `no_surat_kelahiran`, `no_rt`, `no_rw`, `tanggal_input`) VALUES
('', 'Reg00009', '122', 'AANG', 'Laki-laki', 'caracas', '1900-01-01', 0, '1222', ' Islam ', ' Kawin ', '111', '20-02-2020', '33', '', ' Suami ', ' Diploma I/II ', ' Industri ', 'TATANG', 'EU', '222', '-', 3, 2, '2016-11-28'),
('', 'Reg00010', '', '', 'Laki-laki', '', '1900-01-01', 0, '-', '-', '-', '-', '', '-', '', '-', '-', '-', '', '', '', '-', 0, 0, '2016-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sementarapindah`
--

CREATE TABLE IF NOT EXISTS `tb_sementarapindah` (
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `status_hub` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sementarapindah`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_sktm`
--

CREATE TABLE IF NOT EXISTS `tb_sktm` (
  `no_surat` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sktm`
--

INSERT INTO `tb_sktm` (`no_surat`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `no_rt`, `no_rw`, `tanggal_input`, `oleh`) VALUES
('', '2', 'KIKI', 'Perempuan', 'caracas', '1900-01-01', 'Islam', 'Pegawai Negeri Sipil (PNS)', 3, 1, '2016-11-25', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_hub`
--

CREATE TABLE IF NOT EXISTS `tb_status_hub` (
  `id` int(2) NOT NULL,
  `status_hub` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_status_hub`
--

INSERT INTO `tb_status_hub` (`id`, `status_hub`) VALUES
(1, 'Kepala Keluarga'),
(2, 'Suami'),
(3, 'Istri'),
(4, 'Anak'),
(5, 'Menantu'),
(6, 'Cucu'),
(7, 'Orangtua'),
(8, 'Mertua'),
(9, 'Famili Lain'),
(10, 'Pembantu'),
(11, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_nikah`
--

CREATE TABLE IF NOT EXISTS `tb_status_nikah` (
  `id` int(2) NOT NULL,
  `status_nikah` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_status_nikah`
--

INSERT INTO `tb_status_nikah` (`id`, `status_nikah`) VALUES
(2, 'Kawin'),
(1, 'Belum Kawin'),
(3, 'Cerai Hidup'),
(4, 'Cerai Mati');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE IF NOT EXISTS `tb_surat` (
  `no_surat` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `ket` varchar(20) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_domisili`
--

CREATE TABLE IF NOT EXISTS `tb_surat_domisili` (
  `no_surat` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_domisili`
--

INSERT INTO `tb_surat_domisili` (`no_surat`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `status_nikah`, `pekerjaan`, `no_rt`, `no_rw`, `tanggal_input`, `oleh`) VALUES
('', '2', 'KIKI', 'Perempuan', 'caracas', '1900-01-01', 'Belum Kawin', 'Pegawai Negeri Sipil (PNS)', 3, 1, '2016-11-25', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_skck`
--

CREATE TABLE IF NOT EXISTS `tb_surat_skck` (
  `no_surat` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_skck`
--

INSERT INTO `tb_surat_skck` (`no_surat`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `no_rt`, `no_rw`, `tanggal_input`, `tanggal_akhir`, `oleh`) VALUES
('331/001/2016', '', '', '', '', '0000-00-00', '', '', 0, 0, '2016-11-26', '0000-00-00', 'ABDUL KHAYYI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_usaha`
--

CREATE TABLE IF NOT EXISTS `tb_surat_usaha` (
  `no_surat` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  `usaha` varchar(50) NOT NULL,
  `oleh` varchar(25) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_usaha`
--

INSERT INTO `tb_surat_usaha` (`no_surat`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `no_rt`, `no_rw`, `tanggal_input`, `usaha`, `oleh`) VALUES
('500/001/2016', '', '', '', '', '0000-00-00', '', '', 0, 0, '2016-11-27', '', 'ABDUL KHAYYI');
