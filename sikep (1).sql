-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2018 at 05:20 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sikep`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama`) VALUES
(1, 'besati.jpg'),
(2, 'besati.jpg'),
(3, 'besati.jpg'),
(4, 'dodi-beni-lantik.jpg'),
(5, '1073.jpg'),
(6, '1073.jpg'),
(7, 'besati.jpg'),
(8, '1073.jpg'),
(9, 'besati.jpg'),
(10, '1073.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sk_penelitian`
--

CREATE TABLE IF NOT EXISTS `sk_penelitian` (
  `no_surat` varchar(30) NOT NULL,
  `dasar` varchar(200) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(30) NOT NULL,
  KEY `no_surat` (`no_surat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_penelitian`
--

INSERT INTO `sk_penelitian` (`no_surat`, `dasar`, `nama`, `nim`, `judul`, `tanggal_input`, `oleh`) VALUES
('125/0001/KEC.SKY/IX/2018', '1', 'AZHARI ROMADHON ', '2', '3', '2018-09-09', 'CAMAT SEKAYU'),
('125/0001/KEC.SKY/IX/2018', '1', 'AZHARI ROMADHON ', '2', '3', '2018-09-09', 'CAMAT SEKAYU'),
('125/0001/KEC.SKY/IX/2018', '1', 'AZHARI ROMADHON ', '2', '3', '2018-10-08', 'CAMAT SEKAYU'),
('125/0001/KEC.SKY/IX/2018', '1', 'AZHARI ROMADHON ', '2', '3', '2018-09-09', 'CAMAT SEKAYU'),
('125/0001/KEC.SKY/IX/2018', '1', 'AZHARI ROMADHON ', '2', '3', '2018-01-01', 'CAMAT SEKAYU'),
('125/0001/KEC.SKY/IX/2018', '1', 'AZHARI ROMADHON ', '2', '3', '2018-09-08', 'CAMAT SEKAYU'),
('125/0001/KEC.SKY/IX/2018', '1', 'AZHARI ROMADHON ', '2', '3', '2018-09-10', 'CAMAT SEKAYU');

-- --------------------------------------------------------

--
-- Table structure for table `sp_kematian`
--

CREATE TABLE IF NOT EXISTS `sp_kematian` (
  `no_surat` varchar(50) NOT NULL,
  `dasar_surat` varchar(100) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `berkas` varchar(30) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sp_kematian`
--

INSERT INTO `sp_kematian` (`no_surat`, `dasar_surat`, `kepada`, `nama`, `alamat`, `no_rt`, `no_rw`, `berkas`, `tanggal_input`, `oleh`) VALUES
('125/0001/KEC.SKY/IX/2018', 'XXX', 'kepada', 'MA. ERWIN ARYANTO BADUISYAH ', 'JL MERDEKA LK I ', '0', '0', '2 berkas', '2018-09-09', 'Camat');

-- --------------------------------------------------------

--
-- Table structure for table `sp_kk`
--

CREATE TABLE IF NOT EXISTS `sp_kk` (
  `no_surat` varchar(30) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `anggota` text NOT NULL,
  `asal` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(30) NOT NULL,
  KEY `no_surat` (`no_surat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sp_kk`
--

INSERT INTO `sp_kk` (`no_surat`, `kepada`, `nama`, `anggota`, `asal`, `keterangan`, `tanggal_input`, `oleh`) VALUES
('125/0001/KEC.SKY/IX/2018', 'kepada', 'AZHARI ROMADHON ', '52', 'desa', 'ket', '2018-09-09', 'CAMAT SEKAYU');

-- --------------------------------------------------------

--
-- Table structure for table `sp_pindah`
--

CREATE TABLE IF NOT EXISTS `sp_pindah` (
  `no_surat` varchar(150) NOT NULL,
  `jenis_surat` varchar(200) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama_kepala` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` int(3) NOT NULL,
  `no_rw` int(3) NOT NULL,
  `alamat_pindah` text NOT NULL,
  `rt_pindah` varchar(3) NOT NULL,
  `rw_pindah` varchar(3) NOT NULL,
  `kec_pindah` varchar(50) NOT NULL,
  `kab_pindah` varchar(100) NOT NULL,
  `jumlah_pindah` varchar(25) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(30) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sp_pindah`
--

INSERT INTO `sp_pindah` (`no_surat`, `jenis_surat`, `nik`, `nama`, `no_kk`, `nama_kepala`, `alamat`, `no_rt`, `no_rw`, `alamat_pindah`, `rt_pindah`, `rw_pindah`, `kec_pindah`, `kab_pindah`, `jumlah_pindah`, `tanggal_input`, `oleh`) VALUES
('125/0001/KEC.SKY/IX/2018', '', '1606015708450005', 'NURBAYA ', '1606010902090069', 'kepala', 'JL DEPATI NO 068 LK III', 0, 0, '1', '2', '3', '4', '5', '6777', '2018-09-09', 'Camat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `username`, `password`, `status`) VALUES
(1, 'ADMIN', 'ADMIN', 'ADMIN', 'Aktif'),
(2, 'USER', 'USER', 'USER', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kematian`
--

CREATE TABLE IF NOT EXISTS `tb_detail_kematian` (
  `no_surat_kematian` varchar(50) NOT NULL,
  `no_reg_pend` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_kematian`
--

INSERT INTO `tb_detail_kematian` (`no_surat_kematian`, `no_reg_pend`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `no_kk`, `no_rt`, `no_rw`, `status`) VALUES
('474.3/0001/KEL.SJ/XII/2017', '0', '1606010805870004', 'AZHARI ROMADHON ', 'Laki-laki ', 'SEKAYU ', '1987-05-08', 'ISLAM ', 'KARYAWAN HONORER ', '1606010902090069', 0, 0, 'kelurahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kk`
--

CREATE TABLE IF NOT EXISTS `tb_detail_kk` (
  `no_kk` varchar(10) NOT NULL,
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
  `no_rw` int(2) NOT NULL,
  `alamat` text NOT NULL,
  KEY `no_kk` (`no_kk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_kk`
--

INSERT INTO `tb_detail_kk` (`no_kk`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `no_akta`, `agama`, `status_nikah`, `no_akta_nikah`, `tanggal_nikah`, `no_akta_cerai`, `tanggal_cerai`, `status_hub`, `pendidikan`, `pekerjaan`, `nama_ayah`, `nama_ibu`, `no_rt`, `no_rw`, `alamat`) VALUES
('666', '160601', 'tes trigger', 'l', 'sky', '2017-12-03', '', '', '', '', '', '', '', '', 'sma', 'mhs', '', '', 5, 6, 'jln');

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
('', 'Reg00005', '123', 'QWERTY', 'Laki-laki', '', '1900-01-01', 0, '-', '-', '-', '-', '', '-', '', '-', '-', '-', '', '', '', '-', 0, 0, '2017-08-12'),
('', 'Reg00006', '123', 'QWERTY', 'Laki-laki', '', '1900-01-01', 0, '-', '-', '-', '-', '', '-', '', '-', '-', '-', '', '', '', '-', 0, 0, '2017-08-12');

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
('474.1/001/2017', 'Reg00001', 'ANDI SAA', 'Laki-laki', 'Senin Legi', 'SELARAI', '1900-01-01', 'IBUK', 'ASRI', '123', 10, 2, '2017-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kematian`
--

CREATE TABLE IF NOT EXISTS `tb_kematian` (
  `no_surat_kematian` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `hari_meninggal` varchar(6) NOT NULL,
  `umur` int(2) NOT NULL,
  `tempat_meninggal` varchar(20) NOT NULL,
  `sebab` varchar(50) NOT NULL,
  `berdasarkan` text NOT NULL,
  `kebumikan` varchar(100) NOT NULL,
  `saksi1` varchar(30) NOT NULL,
  `saksi2` varchar(30) NOT NULL,
  `saksi3` varchar(30) NOT NULL,
  `pukul` varchar(5) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_surat_kematian`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kematian`
--

INSERT INTO `tb_kematian` (`no_surat_kematian`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `alamat`, `agama`, `pekerjaan`, `no_rt`, `no_rw`, `tanggal_meninggal`, `hari_meninggal`, `umur`, `tempat_meninggal`, `sebab`, `berdasarkan`, `kebumikan`, `saksi1`, `saksi2`, `saksi3`, `pukul`, `oleh`, `tanggal_input`) VALUES
('474.3/0001/KEL.SJ/XII/2017', 'AZHARI ROMADHON ', 'Laki-laki ', 'SEKAYU ', '1987-05-08', 'JL DEPATI NO 068 LK III', 'ISLAM ', 'KARYAWAN HONORER ', '0', '0', '2000-01-01', 'Senin', 13, 'Rumah Sakit', 'Sakit', 'Surat Keterangan', 'PKM', 'aaaaaaaaaaaaaaa', 'bbbbbbbbbbbbb', 'cccccccccccccccc', '13.00', 'Lurah Serasan Jaya', '2017-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk`
--

CREATE TABLE IF NOT EXISTS `tb_kk` (
  `no_kk` varchar(10) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `jml_anggota` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_kk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kk`
--

INSERT INTO `tb_kk` (`no_kk`, `no_rt`, `no_rw`, `jml_anggota`, `tanggal_input`) VALUES
('160', 1, 1, 5, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kop`
--

CREATE TABLE IF NOT EXISTS `tb_kop` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `kelurahan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kontak` varchar(200) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_kop`
--

INSERT INTO `tb_kop` (`no`, `kelurahan`, `alamat`, `kontak`) VALUES
(1, 'KELURAHAN SERASAN JAYA', 'Jalan Kolonel Wahid Udin No.562 RT.015 RW.001', 'Email : serasanjaya2017@gmail.com Kode Pos 30711');

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobile`
--

CREATE TABLE IF NOT EXISTS `tb_mobile` (
  `no_urut` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kel` text NOT NULL,
  `hp` varchar(100) NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `status` varchar(1) NOT NULL,
  `namau` text NOT NULL,
  `jenisu` text NOT NULL,
  `ukuranu` text NOT NULL,
  `modalu` text NOT NULL,
  `alamatu` text NOT NULL,
  PRIMARY KEY (`no_urut`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tb_mobile`
--

INSERT INTO `tb_mobile` (`no_urut`, `nama`, `nik`, `kel`, `hp`, `jenis_surat`, `status`, `namau`, `jenisu`, `ukuranu`, `modalu`, `alamatu`) VALUES
(7, 'rekomkeramaian', '1606027012810002', 'Serasan Jaya', '', 'ketpindah', '0', '', '', '', '', ''),
(8, 'fhshs', '', 'Serasan Jaya', '', 'izinSiup', '0', '', '', '', '', ''),
(9, 'tdp', '', 'Serasan Jaya', '', 'izinTdp', '0', '', '', '', '', ''),
(10, 'reklame', '', 'Serasan Jaya', '', 'rekomReklame', '0', '', '', '', '', ''),
(11, 'galc', '', 'Serasan Jaya', '', 'rekomGalianc', '0', '', '', '', '', ''),
(12, 'siup', '', 'Serasan Jaya', '', 'rekomSiup', '0', '', '', '', '', ''),
(13, 'imb', '', 'Serasan Jaya', '', 'rekomImb', '0', '', '', '', '', ''),
(15, 'ramai', '', 'Serasan Jaya', '', 'rekomKeramaian', '0', '', '', '', '', ''),
(16, 'fff', 'gf', 'Serasan Jaya', '', 'izinSiup', '0', '', '', '', '', ''),
(17, '222543as', '', 'Serasan Jaya', '22', 'izinSiup', '0', '', '', '', '', ''),
(18, '222543as', '', 'Serasan Jaya', '22', 'izinSiup', '0', '', '', '', '', ''),
(19, '222543as', '', 'Serasan Jaya', '22', 'izinSiup', '0', '', '', '', '', ''),
(20, '222543as', '', 'Serasan Jaya', '22', 'izinSiup', '0', '', '', '', '', ''),
(21, 'adasda', '', 'Serasan Jaya', '', 'izinTdp', '0', '', '', '', '', ''),
(22, 'siup', '', 'Serasan Jaya', '', 'izinSiup', '0', '', '', '', '', ''),
(23, 'rdft', '', 'Serasan Jaya', '', 'Iumk', '0', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `no` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(22) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`no`, `nama`, `nip`, `pangkat`, `golongan`, `jabatan`) VALUES
(1, 'M. TAISIR GUNAWAN, S.Sos., MM', '19650620 198609 1 001', 'PEMBINA', 'IV/a', 'CAMAT SEKAYU'),
(2, 'M. ASWIN., S.STP. MM', '19740208 199802 1 001', 'PENATA TINGKAT I', 'III/d', 'SEKRETARIS'),
(3, 'MUSMULYADI, SE,. MM', '19740208 199802 1 001', '-', '-', 'KASI PELAYANAN UMUM'),
(4, 'ARIYANTO', '19760217 200906 1 001', '-', '-', 'STAF SEKSI PELAYANAN UMUM');

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
-- Table structure for table `tb_penandatangan`
--

CREATE TABLE IF NOT EXISTS `tb_penandatangan` (
  `no` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `penandatangan` varchar(100) NOT NULL,
  KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penandatangan`
--

INSERT INTO `tb_penandatangan` (`no`, `nama`, `nip`, `jabatan`, `penandatangan`) VALUES
(1, 'EDI HERYANTO, SH', '19801206 200701 1 001', 'Lurah Serasan Jaya', 'Lurah Serasan Jaya'),
(2, 'AKA ANGGARA SAPUTRA, S.STP', '19920503 201507 1 001', 'Plt. Sekretaris Lurah Serasan Jaya', 'an. Lurah Serasan Jaya Plt. Sekretaris Lurah,'),
(3, 'RUSIDA', '19610312 198503 2 002', 'Kasi Kessos dan Pelayanan Umum', 'an. Lurah Serasan Jaya Kasi Kessos dan Pelayanan Umum'),
(4, 'LASIMAN, SH', '19800410 200801 1 004', 'Kasi Trantib', 'an. Lurah Serasan Jaya Kasi Trantib'),
(5, 'YOSI APRILINA, SE', '19820421 200801 2 005', 'Kasi Pemerintahan', 'an. Lurah Serasan Jaya Kasi Pemerintahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penandatangan_kec`
--

CREATE TABLE IF NOT EXISTS `tb_penandatangan_kec` (
  `no` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `penandatangan` varchar(100) NOT NULL,
  `sebagai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penandatangan_kec`
--

INSERT INTO `tb_penandatangan_kec` (`no`, `nama`, `nip`, `jabatan`, `penandatangan`, `sebagai`) VALUES
(1, 'M. TAISIR GUNAWAN, S.Sos, MM', '19650620 198609 1 00', 'CAMAT SEKAYU', 'CAMAT SEKAYU', 'Camat'),
(2, 'M. TAISIR GUNAWAN, S.Sos, MM', '19650620 198609 1 00	', 'CAMAT SEKAYU', 'an. Bupati Musi Banyuasin Camat Sekayu', 'an. Bupati Musi Banyuasin'),
(3, 'ASWIN', '199999999', 'Sekretaris Lurah', 'an. Camat Sekayu     Sekretaris Camat', 'Lurah Serasan Jaya');

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
  `no_reg_pend` int(11) NOT NULL,
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
  `no_rt` int(3) NOT NULL,
  `no_rw` int(3) NOT NULL,
  `tanggal_input` date NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`nik`),
  KEY `nik` (`nik`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`no_reg_pend`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `umur`, `no_akta`, `agama`, `status_nikah`, `no_akta_nikah`, `tanggal_nikah`, `no_akta_cerai`, `tanggal_cerai`, `status_hub`, `pendidikan`, `pekerjaan`, `nama_ayah`, `nama_ibu`, `no_kk`, `no_surat_kelahiran`, `no_surat_masuk`, `no_rt`, `no_rw`, `tanggal_input`, `kelurahan`, `alamat`) VALUES
(0, '1606027012810002', 'KHODIJA ', 'Perempuan ', 'SEKAYU ', '1981-12-30', 0, '', 'ISLAM ', '', '', '', '', '', 'ISTRI ', '', 'MENGURUS RUMAH TANGGA ', '', 'KOMAR ', '1606020904086314', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JALAN PELTU YUSUP ULAK '),
(0, '1606020505990002', 'M REDHO SAPRIJA ', 'Laki-laki ', 'SEKAYU ', '1999-05-05', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'PELAJAR/MAHASISWA ', '', 'KHODIJA ', '1606020904086314', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JALAN PELTU YUSUP ULAK '),
(0, '1606027008000001', 'GUSTI INDAH SAPRIJA ', 'Perempuan ', 'SEKAYU ', '2000-08-30', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'PELAJAR/MAHASISWA ', '', 'KHODIJA ', '1606020904086314', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JALAN PELTU YUSUP ULAK '),
(0, '1606025407020002', 'DWI PUTRI SAPRIJA ', 'Perempuan ', 'SEKAYU ', '2002-07-14', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'PELAJAR/MAHASISWA ', '', 'KHODIJA ', '1606020904086314', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JALAN PELTU YUSUP ULAK '),
(0, '1606020303050002', 'M ALDHO SAPRIJA ', 'Laki-laki ', 'SEKAYU ', '2005-03-03', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'BELUM/TIDAK BEKERJA ', '', 'KHODIJAH ', '1606020904086314', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JALAN PELTU YUSUP ULAK '),
(0, '1606020210070002', 'M GILANG SAPRIJA ', 'Laki-laki ', 'LAIS ', '2007-10-02', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'BELUM/TIDAK BEKERJA ', '', 'KHODIJA ', '1606020904086314', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JALAN PELTU YUSUP ULAK '),
(0, '1606010805870004', 'AZHARI ROMADHON ', 'Laki-laki ', 'SEKAYU ', '1987-05-08', 0, '', 'ISLAM ', '', '', '', '', '', 'KEPALA KELUARGA ', '', 'KARYAWAN HONORER ', '', 'NURBAYA ', '1606010902090069', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL DEPATI NO 068 LK III'),
(0, '1606016512860003', 'EVA ANGGRAENI ', 'Perempuan ', 'LUMPATAN ', '1986-12-25', 0, '', 'ISLAM ', '', '', '', '', '', 'ISTRI ', '', 'KARYAWAN HONORER ', '', 'SYAMSIA ', '1606010902090069', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL DEPATI NO 068 LK III'),
(0, '1606011906150004', 'ABRAHAM SERHAN ', 'Laki-laki ', 'MUSI BANYUASIN ', '2015-06-19', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'BELUM/TIDAK BEKERJA ', '', 'EVA ANGGRAENI ', '1606010902090069', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL DEPATI NO 068 LK III'),
(0, '1606015708450005', 'NURBAYA ', 'Perempuan ', 'SEKAYU ', '1945-08-17', 0, '', 'ISLAM ', '', '', '', '', '', 'ORANG TUA ', '', 'MENGURUS RUMAH TANGGA ', '', '- ', '1606010902090069', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL DEPATI NO 068 LK III'),
(0, '1606010304890005', 'SUPRIADI ', 'Laki-laki ', 'SUKARAMI ', '1989-04-03', 0, '', 'ISLAM ', '', '', '', '', '', 'KEPALA KELUARGA ', '', 'WIRASWASTA ', '', 'SUMARNI ', '1606011208100002', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL LETN H NUR'),
(0, '1606015707920004', 'SITI KHODIJAH ', 'Perempuan ', 'SEKAYU ', '1992-07-17', 0, '', 'ISLAM ', '', '', '', '', '', 'ISTRI ', '', 'PELAJAR/MAHASISWA ', '', 'MEGAWATI ', '1606011208100002', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL LETN H NUR'),
(0, '1606010608110008', 'M GUSTI PRATAMA ', 'Laki-laki ', 'SUKARAMI ', '2011-08-06', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'BELUM/TIDAK BEKERJA ', '', 'SITI KHODIJAH ', '1606011208100002', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL LETN H NUR'),
(0, '1606014506860007', 'SRI WAHYUNI ', 'Perempuan ', 'SEKAYU ', '1986-06-05', 0, '', 'ISLAM ', '', '', '', '', '', 'KEPALA KELUARGA ', '', 'WIRASWASTA ', '', 'RODIA ', '1606012309160008', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL MERDEKA'),
(0, '1606015906480001', 'ZULMAINI ', 'Perempuan ', 'BENGKULU ', '1948-06-19', 0, '', 'ISLAM ', '', '', '', '', '', 'KEPALA KELUARGA ', '', 'PERDAGANGAN ', '', 'NURALIA ', '1606011303150001', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL MERDEKA LK I '),
(0, '1606012906770002', 'MA. ERWIN ARYANTO BADUISYAH ', 'Laki-laki ', 'SEKAYU ', '1977-06-29', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'PERDAGANGAN ', '', 'ZULMAINI ', '1606011303150001', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL MERDEKA LK I '),
(0, '1606011905670004', 'ERWIN HALIM ', 'Laki-laki ', 'SEKAYU ', '1967-05-19', 0, '', 'ISLAM ', '', '', '', '', '', 'KEPALA KELUARGA ', '', 'KARYAWAN SWASTA ', '', 'SYAIPUR ', '1606012407080007', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL MERDEKA LK VII NO 884 '),
(0, '1606016103770001', 'ROSMALATIKA ', 'Perempuan ', 'SEKAYU ', '1977-03-21', 0, '', 'ISLAM ', '', '', '', '', '', 'ISTRI ', '', 'KARYAWAN HONORER ', '', 'RUSMINI ', '1606012407080007', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL MERDEKA LK VII NO 885'),
(0, '1606012311970001', 'RIFQI NANDA KURNIAWAN ', 'Laki-laki ', 'JAKARTA ', '1997-11-23', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'PELAJAR/MAHASISWA ', '', 'ROSMALATIKA ', '1606012407080007', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL MERDEKA LK VII NO 886'),
(0, '6301031612000002', 'MUHAIMIN IBRAHIM ', 'Laki-laki ', 'PELAIHARI ', '2000-12-16', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'PELAJAR/MAHASISWA ', '', 'JUMIATI ', '1606012407080007', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL MERDEKA LK VII NO 887'),
(0, '1606060809840005', 'APRIANTO ', 'Laki-laki ', 'PALEMBANG ', '1984-09-08', 0, '', 'ISLAM ', '', '', '', '', '', 'KEPALA KELUARGA ', '', 'KARYAWAN SWASTA ', '', 'NURIATI ', ' 160601050315000', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL PERINTIS '),
(0, '1606065911820002', 'LIA FRANSISKA ', 'Perempuan ', 'PALEMBANG ', '1982-11-29', 0, '', 'ISLAM ', '', '', '', '', '', 'ISTRI ', '', 'MENGURUS RUMAH TANGGA ', '', 'MULIANA ', ' 160601050315000', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL PERINTIS '),
(0, '1606065605070002', 'LARASSHIENAIYA ARILIA ', 'Perempuan ', 'KAYU AGUNG ', '2007-05-16', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'PELAJAR/MAHASISWA ', '', 'LIA FRANSISKA ', ' 160601050315000', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL PERINTIS '),
(0, '1606132210110001', 'DIEGO NICHLOLAS ARILIA ', 'Laki-laki ', 'SEKAYU ', '2011-10-22', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'BELUM/TIDAK BEKERJA ', '', 'LIA FRANSISKA ', ' 160601050315000', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL PERINTIS '),
(0, '1606015905150002', 'JASMINE ELEINA ARILIA ', 'Perempuan ', 'SEKAYU ', '2015-05-19', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'BELUM/TIDAK BEKERJA ', '', 'LIA FRANSISKA ', ' 160601050315000', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL PERINTIS '),
(0, '1606135710840001', 'ARIE BERLINA Y ', 'Perempuan ', 'PALEMBANG ', '1984-10-17', 0, '', 'ISLAM ', '', '', '', '', '', 'FAMILI LAIN ', '', 'KARYAWAN SWASTA ', '', 'MULIANA ', ' 160601050315000', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL PERINTIS '),
(0, '1606012003760002', 'IDRIS SARDI ', 'Laki-laki ', 'SEKAYU ', '1976-03-20', 0, '', 'ISLAM ', '', '', '', '', '', 'KEPALA KELUARGA ', '', 'WIRASWASTA ', '', 'HOIRUN NISAK ', ' 160601101108002', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL. INFRES PENJARA BARU'),
(0, '1606016610830001', 'TITIN SUMARNI ', 'Perempuan ', 'SEKAYU ', '1983-10-26', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'BELUM/TIDAK BEKERJA ', '', 'HOIRUN NISAK ', ' 160601101108002', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL. INFRES PENJARA BARU'),
(0, '1606014406640002', 'JAMILAH ', 'Perempuan ', 'SUKARAMI ', '1964-06-04', 0, '', 'ISLAM ', '', '', '', '', '', 'KEPALA KELUARGA ', '', 'MENGURUS RUMAH TANGGA ', '', 'ARIPAH ', ' 160601050209002', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL. MERDEKA'),
(0, '1606016910980004', 'DIAN ISLAMIA ', 'Perempuan ', 'SEKAYU ', '1998-10-29', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'PELAJAR/MAHASISWA ', '', 'JAMALIAH ', ' 160601050209002', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL. MERDEKA'),
(0, '1606014307370001', 'ARIPAH ', 'Perempuan ', 'SUKARAMI ', '1937-07-03', 0, '', 'ISLAM ', '', '', '', '', '', 'MERTUA ', '', 'BELUM/TIDAK BEKERJA ', '', '- ', ' 160601050209002', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL. MERDEKA'),
(0, '3272040607610002', 'MAHAPUTRA, SH, MH ', 'Laki-laki ', 'SUKARTA ', '1961-07-06', 0, '', 'ISLAM ', '', '', '', '', '', 'KEPALA KELUARGA ', '', 'PEGAWAI NEGERI SIPIL (PNS) ', '', 'DRS DJOKO SOEMANTO ', ' 160601200214000', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL. MERDEKA PERUMAHAN HAKIM PN'),
(0, '1671052701840002', 'EKO SUSANTO ', 'Laki-laki ', 'PALEMBANG ', '1984-01-27', 0, '', 'ISLAM ', '', '', '', '', '', 'KEPALA KELUARGA ', '', 'KARYAWAN SWASTA ', '', 'SRI WAHYU NINGSIH ', ' 160601240316000', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL.KOL.WAHID UDIN'),
(0, '1671075910870012', 'PUTRI WIDIA NINGSIH ', 'Perempuan ', 'PALEMBANG ', '1987-10-19', 0, '', 'ISLAM ', '', '', '', '', '', 'ISTRI ', '', 'KARYAWAN SWASTA ', '', 'JATMINI WAJEM ', ' 160601240316000', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL.KOL.WAHID UDIN'),
(0, '1671072205900011', 'PALBAIN ', 'Laki-laki ', 'PURWOSARI ', '1990-05-22', 0, '', 'ISLAM ', '', '', '', '', '', 'KEPALA KELUARGA ', '', 'WIRASWASTA ', '', 'SUSMITA ', ' 160601070416000', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL.KOL.WAHID UDIN LK.7'),
(0, '1606065808910006', 'ANITA MIANA ', 'Perempuan ', 'LUMPATAN ', '1991-08-18', 0, '', 'ISLAM ', '', '', '', '', '', 'ISTRI ', '', 'KARYAWAN HONORER ', '', 'KURNIAH ', ' 160601070416000', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL.KOL.WAHID UDIN LK.7'),
(0, '1606011009150003', 'RAJATAMA RAHMATULLAH ', 'Laki-laki ', 'PALEMBANG ', '2015-09-10', 0, '', 'ISLAM ', '', '', '', '', '', 'ANAK ', '', 'BELUM/TIDAK BEKERJA ', '', 'ANITA MIANA ', ' 160601070416000', '', '', 0, 0, '0000-00-00', 'Serasan Jaya', 'JL.KOL.WAHID UDIN LK.7');

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
('', '160240', 'kk-ferr', '', 0, 0, '', '', '', '-', 0, 0, '-', '-', '1', '2017-08-12');

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_penelitian`
--

CREATE TABLE IF NOT EXISTS `tb_penelitian` (
  `no_surat` varchar(30) NOT NULL,
  `kepada` varchar(200) NOT NULL,
  `dasar_surat` varchar(200) NOT NULL,
  `no_dasar` varchar(100) NOT NULL,
  `tgl_dasar` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(50) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penelitian`
--

INSERT INTO `tb_penelitian` (`no_surat`, `kepada`, `dasar_surat`, `no_dasar`, `tgl_dasar`, `nama`, `nim`, `judul`, `tanggal_input`, `oleh`) VALUES
('401/0001/KEL.SJ/XII/2017', 'school', 'kjalkjdlkjal         ', '123123/324534         ', '2017-12-06', 'M REDHO SAPRIJA ', '32452342342         ', 'Skripsi         ', '2017-12-16', 'Plt. Sekretaris Lurah Serasan Jaya');

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
('', 'Reg00009', '', '11111', 'Laki-laki', '', '1900-01-01', 0, '-', '-', '-', '-', '', '-', '', '-', '-', '-', '', '', '', '-', 0, 0, '2017-08-12');

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

INSERT INTO `tb_sementarapindah` (`no_reg_pend`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `status_nikah`, `status_hub`, `pendidikan`, `pekerjaan`, `no_kk`, `no_rt`, `no_rw`) VALUES
('Reg00005', '', 'QWERTY', 'Laki-laki', '', '1900-01-01', '-', '-', '-', '-', '-', 'KK00001', 20, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siup_kec`
--

CREATE TABLE IF NOT EXISTS `tb_siup_kec` (
  `no_surat` varchar(30) NOT NULL,
  `dasar_surat` varchar(150) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `alamat_pemilik` text NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `kekayaan_bersih` varchar(20) NOT NULL,
  `kelembagaan` varchar(100) NOT NULL,
  `bidang_usaha` varchar(100) NOT NULL,
  `barang_jasa` varchar(100) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `oleh` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siup_kec`
--

INSERT INTO `tb_siup_kec` (`no_surat`, `dasar_surat`, `nama_perusahaan`, `alamat_perusahaan`, `nama_pemilik`, `alamat_pemilik`, `no_telepon`, `kekayaan_bersih`, `kelembagaan`, `bidang_usaha`, `barang_jasa`, `tanggal_input`, `tanggal_akhir`, `oleh`) VALUES
('001/SIUP/PATEN/Kec.Sky/2017', '503/006/Kec.Sky/2017', 'NM', 'sekayu', 'TITIN SUMARNI ', 'JL. INFRES PENJARA BARU', '082176601231', '50000', 'Kelembagaans', 'BDG', 'Barang dan Jasas', '2017-12-05', '2017-08-26', 'Camat'),
('125/0017/KEL.SJ/IX/2018', '', 'nama perusahaan', 'Jalan Kolonel Wahid Udin Lingk. I Kelurahan Serasan Jaya Sekayu', 'KHODIJA ', 'JALAN PELTU YUSUP ULAK ', '085383447070', '', 'kelembagaan', 'bidang', 'barag', '2018-09-09', '2018-09-09', 'CAMAT SEKAYU');

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
('', '2', 'KIKI', 'Perempuan', 'caracas', '1900-01-01', 'Islam', 'Pegawai Negeri Sipil (PNS)', 3, 1, '2016-11-25', ''),
('422.5/001/VII/2017', 'asdasd', 'asdada', 'as', 'asd', '0000-00-00', 'asd', 'asd', 0, 0, '2017-07-24', 'ABDUL KHAYYI');

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

INSERT INTO `tb_surat` (`no_surat`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `no_rt`, `no_rw`, `ket`, `tanggal_input`) VALUES
('001', '11', 'meigi rahman', 'l', 'sekyu', '2012-12-12', 3, 2, 'keterangan tidak mam', '2017-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_baik`
--

CREATE TABLE IF NOT EXISTS `tb_surat_baik` (
  `no_surat` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `oleh` varchar(100) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_baik`
--

INSERT INTO `tb_surat_baik` (`no_surat`, `nik`, `kk`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `keperluan`, `tanggal_input`, `tanggal_akhir`, `oleh`) VALUES
('145.1/0001/KEL.SJ/XI/2017', '1606011906150004', '1606010902090069', 'ABRAHAM SERHAN ', 'Laki-laki ', 'MUSI BANYUASIN ', '2015-06-19', 'ISLAM ', 'BELUM/TIDAK BEKERJA ', 'JL DEPATI NO 068 LK III', 0, 0, '', '2017-11-20', '0000-00-00', 'Plt. Sekretaris Lurah Serasan Jaya'),
('145.1/0003/KEL.SJ/XII/2017', '1606010805870004', '1606010902090069', 'AZHARI ROMADHON ', 'Laki-laki ', 'SEKAYU ', '1987-05-08', 'ISLAM ', 'KARYAWAN HONORER ', 'JL DEPATI NO 068 LK III', 0, 0, 'qwqe', '2017-12-05', '2017-12-14', 'Lurah Serasan Jaya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_domisili`
--

CREATE TABLE IF NOT EXISTS `tb_surat_domisili` (
  `no_surat` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(100) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_domisili`
--

INSERT INTO `tb_surat_domisili` (`no_surat`, `nik`, `kk`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `tanggal_input`, `oleh`) VALUES
('300/0001/KEL.SJ/XII/2017', '1606014307370001', ' 160601050209002', 'ARIPAH ', 'Perempuan ', 'SUKARAMI ', '1937-07-03', 'ISLAM ', 'BELUM/TIDAK BEKERJA ', 'JL. MERDEKA', 0, 0, '2017-12-05', 'Lurah Serasan Jaya'),
('300/0002/KEL.SJ/XII/2017', '1606015708450005', '1606010902090069', 'NURBAYA ', 'Perempuan ', 'SEKAYU ', '1945-08-17', 'ISLAM ', 'MENGURUS RUMAH TANGGA ttt', 'JL DEPATI NO 068 LK III', 0, 0, '2017-12-17', 'Lurah Serasan Jaya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_el`
--

CREATE TABLE IF NOT EXISTS `tb_surat_el` (
  `no_surat` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(100) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_el`
--

INSERT INTO `tb_surat_el` (`no_surat`, `nik`, `kk`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `tanggal_input`, `oleh`) VALUES
('no', 'nik', 'kk', 'nama', 'jenis', 'tempat', '2017-09-19', 'agama', 'pekerjaan', 'alamat', 1, 2, '2017-09-14', 'CAMAT');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_hilang`
--

CREATE TABLE IF NOT EXISTS `tb_surat_hilang` (
  `no_surat` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `benda` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `oleh` varchar(100) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_hilang`
--

INSERT INTO `tb_surat_hilang` (`no_surat`, `nik`, `kk`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `benda`, `lokasi`, `tanggal_input`, `tanggal_akhir`, `oleh`) VALUES
('300/0001/KEL.SJ/XII/2017', '1606016512860003', '1606010902090069', 'EVA ANGGRAENI ', 'Perempuan ', 'LUMPATAN ', '1986-12-25', 'ISLAM ', 'KARYAWAN HONORER ', 'JL DEPATI NO 068 LK III', 0, 0, 'HP dan laptop', 'DIRUMAH, 13.00WIB', '2017-12-05', '2017-12-27', 'Lurah Serasan Jaya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_ho`
--

CREATE TABLE IF NOT EXISTS `tb_surat_ho` (
  `no_surat` varchar(100) NOT NULL,
  `no_sk` varchar(50) NOT NULL,
  `no_piagam` varchar(100) NOT NULL,
  `nama_pemohon` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nama_usaha` varchar(100) NOT NULL,
  `alamat_usaha` varchar(200) NOT NULL,
  `index_lokasi` varchar(15) NOT NULL,
  `luas_bangunan` varchar(10) NOT NULL,
  `batas_depan` varchar(100) NOT NULL,
  `batas_belakang` varchar(100) NOT NULL,
  `batas_kiri` varchar(100) NOT NULL,
  `batas_kanan` varchar(100) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL,
  `besar_retribusi` varchar(100) NOT NULL,
  `nama1` varchar(100) NOT NULL,
  `nip1` varchar(100) NOT NULL,
  `nama2` varchar(100) NOT NULL,
  `nip2` varchar(100) NOT NULL,
  `nama3` varchar(100) NOT NULL,
  `nip3` varchar(100) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `lama` varchar(100) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_pergi` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `oleh_sk` varchar(100) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_ho`
--

INSERT INTO `tb_surat_ho` (`no_surat`, `no_sk`, `no_piagam`, `nama_pemohon`, `jabatan`, `nama_usaha`, `alamat_usaha`, `index_lokasi`, `luas_bangunan`, `batas_depan`, `batas_belakang`, `batas_kiri`, `batas_kanan`, `jenis_usaha`, `besar_retribusi`, `nama1`, `nip1`, `nama2`, `nip2`, `nama3`, `nip3`, `keperluan`, `tujuan`, `lama`, `tanggal_input`, `tanggal_pergi`, `tanggal_akhir`, `oleh`, `oleh_sk`) VALUES
('01/ST/PATEN/Kec.Sky/2017', '10 Tahun 2017', '01/UUG-SITU/PATEN/Kec.Sky/2017', 'ANGWARI', 'Pemilik Usaha', 'TOKO REFOND', 'Alamat Usaha', '', 'Luas', 'depan', 'belakang', 'kiri', 'kanan', 'Jenis Usaha', 'Besar', 'M. Aswin. S.STP., MM', '198606102004121002', 'Musmulyadi, SE., MM', '197402081998021001', 'Ariyanto, SH', '197602172009061001', 'TOKO REFOND', 'Kelurahan Serasan Jaya', '1 (satu) hari', '2017-10-11', '2017-10-18', '2017-08-26', 'Lurah Serasan Jaya', 'an. Bupati Musi Banyuasin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_imb`
--

CREATE TABLE IF NOT EXISTS `tb_surat_imb` (
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(50) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_imb`
--

INSERT INTO `tb_surat_imb` (`no_surat`, `nama`, `nik`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `keperluan`, `lokasi`, `tanggal_input`, `oleh`, `desa`, `kecamatan`, `status`) VALUES
('640/0001/KEL.SJ/XII/2017', 'ROSMALATIKA ', '1606016103770001', 'SEKAYU ', '1977-03-21', 'KARYAWAN HONORER ', 'JL MERDEKA LK VII NO 885', '0', '0', 'toko', 'SEKAYU', '2017-12-17', 'Plt. Sekretaris Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_imb_kec`
--

CREATE TABLE IF NOT EXISTS `tb_surat_imb_kec` (
  `no_surat` varchar(100) NOT NULL,
  `dasar_surat` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `bangunan` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `ukuran_bangunan` varchar(50) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_imb_kec`
--

INSERT INTO `tb_surat_imb_kec` (`no_surat`, `dasar_surat`, `tanggal_surat`, `nama`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `bangunan`, `lokasi`, `ukuran_bangunan`, `tanggal_input`, `oleh`, `desa`, `kecamatan`) VALUES
('503/003/PATEN/Kec.Sky/2017', '640/0001/KEL.SJ/XII/2017', '2017-12-05', 'ROSMALATIKA ', 'SEKAYU ', '0000-00-00', 'KARYAWAN HONORER ', 'JL MERDEKA LK VII NO 885', '0', '0', 'bgn', 'almt', '12', '2017-12-05', 'Camat', 'Kelurahan Serasan Jaya', 'Sekayu'),
('503/002/PATEN/Kec.Sky/2017', '640/0002/KEL.SJ/XII/2017', '2017-12-05', 'GUSTI INDAH SAPRIJA ', 'SEKAYU ', '2000-08-30', 'PELAJAR/MAHASISWA ', 'JALAN PELTU YUSUP ULAK ', '0', '0', 'bgn', 'almt', '10 M2', '2017-12-05', 'Camat', 'Kelurahan Serasan Jaya', 'Sekayu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_izin`
--

CREATE TABLE IF NOT EXISTS `tb_surat_izin` (
  `no_surat` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal_acara` varchar(20) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(100) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_izin`
--

INSERT INTO `tb_surat_izin` (`no_surat`, `nik`, `kk`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `keperluan`, `hari`, `tanggal_acara`, `tanggal_input`, `oleh`) VALUES
('300/0001/KEL.SJ/XII/2017', '1606027008000001', '1606020904086314', 'GUSTI INDAH SAPRIJA ', 'Perempuan ', 'SEKAYU ', '2000-08-30', '', 'JALAN PELTU YUSUP ULAK ', 0, 0, 'IZIN', '', '2017-12-13', '2017-12-05', 'Lurah Serasan Jaya'),
('300/0002/KEL.SJ/XII/2017', '1606025407020002', '1606020904086314', 'DWI PUTRI SAPRIJA ', 'Perempuan ', 'SEKAYU ', '2002-07-14', '', 'JALAN PELTU YUSUP ULAK ', 0, 0, 'ASDSADASDAS', '', '2017-12-13', '2017-12-05', 'Kasi Kessos dan Pelayanan Umum'),
('300/0003/KEL.SJ/XII/2017', '1606010305950007', '1606010605110001', 'ANDRE PRATAMA ', 'Laki-laki ', 'PALEMBANG ', '1995-05-03', '', 'ASPOL POLRES MUBA', 0, 0, 'asdSADA', '', '2017-12-06', '2017-12-12', 'Lurah Serasan Jaya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keramaian`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keramaian` (
  `no_surat` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `nama_acara` varchar(200) NOT NULL,
  `tempat_acara` varchar(200) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `waktu_acara` varchar(200) NOT NULL,
  `hari_acara` varchar(200) NOT NULL,
  `hiburan` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_keramaian`
--

INSERT INTO `tb_surat_keramaian` (`no_surat`, `nama`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `nama_acara`, `tempat_acara`, `tanggal_acara`, `waktu_acara`, `hari_acara`, `hiburan`, `tanggal_input`, `oleh`, `desa`, `kecamatan`, `status`) VALUES
('300/0001/KEL.SJ/XII/2017', 'M REDHO SAPRIJA ', 'SEKAYU ', '1999-05-05', 'PELAJAR/MAHASISWA ', 'JALAN PELTU YUSUP ULAK ', '5', '1', 'ACARA', 'TEMPAT', '2017-11-30', '13.00', 'Senin', 'HIBURAN', '2017-12-05', 'Lurah Serasan Jaya', '', '', 'kecamatan'),
('300/0002/KEL.SJ/XII/2017', 'AGHNIYA DZAKIRAH PUTRI ', 'PALEMBANG ', '2013-08-23', 'BELUM/TIDAK BEKERJA ', 'ASPOL POLRES MUBA', '0', '0', 'asdjak', 'rmh', '2017-12-22', '', 'Senin', 'ot', '2017-12-07', 'Lurah Serasan Jaya', '', '', 'kelurahan'),
('300/0003/KEL.SJ/XII/2017', 'M REDHO SAPRIJA ', 'SEKAYU ', '1999-05-05', 'PELAJAR/MAHASISWA ', 'JALAN PELTU YUSUP ULAK ', '0', '0', 'Akad', 'Pemda', '2017-11-30', '13.00', 'Senin', 'OT', '2017-12-16', 'Lurah Serasan Jaya', '', '', 'kelurahan'),
('300/0004/KEL.SJ/XII/2017', 'KHODIJA ', 'SEKAYU ', '1981-12-30', 'MENGURUS RUMAH TANGGA ', 'JALAN PELTU YUSUP ULAK ', '0', '0', 'Resepsi Pernikahan', 'jl peltu ulak yusuf', '2017-12-01', '09.00', 'Senin', 'OT Permata', '2017-12-16', 'Lurah Serasan Jaya', '', '', 'kelurahan'),
('300/0005/KEL.SJ/XII/2017', 'KHODIJA ', 'SEKAYU ', '1981-12-30', 'MENGURUS RUMAH TANGGA ', 'JALAN PELTU YUSUP ULAK ', '0', '0', '4', '2', '2017-11-30', '5', 'Senin', '3', '0000-00-00', 'Lurah Serasan Jaya', '', '', 'kelurahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keramaian_kec`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keramaian_kec` (
  `no_surat` varchar(50) NOT NULL,
  `dasar_surat` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `nama_acara` varchar(200) NOT NULL,
  `tempat_acara` varchar(200) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `waktu_acara` varchar(200) NOT NULL,
  `hari_acara` varchar(10) NOT NULL,
  `hiburan` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tinggi_tower` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_keramaian_kec`
--

INSERT INTO `tb_surat_keramaian_kec` (`no_surat`, `dasar_surat`, `tanggal_surat`, `nama`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `nama_acara`, `tempat_acara`, `tanggal_acara`, `waktu_acara`, `hari_acara`, `hiburan`, `tanggal_input`, `tinggi_tower`, `oleh`, `desa`, `kecamatan`) VALUES
('503/01/PATEN/Kec.Sky', '503/05/Kel.SJ/IX/2017', '2017-09-30', 'Nadi Mufti', 'Lumpatan', '2017-09-15', 'Wiraswasta', 'Kelurahan Serasan Jaya', '011', '001', 'Resepsi Pernikahan', 'Kelurahan Serasan Jaya', '2017-09-22', '19.00 s.d 24.00', 'Rabu', 'OT. GALAXY 41 Mini Musik', '2017-10-02', '2017-09-04', 'an. Bupati Musi Banyuasin', 'Kelurahan Serasan Jaya', 'Sekayu'),
('503/       /PATEN/Kec.Sky/2017', '300/0001/KEL.SJ/XII/2017', '0000-00-00', 'M REDHO SAPRIJA ', 'SEKAYU ', '0000-00-00', 'PELAJAR/MAHASISWA ', 'JALAN PELTU YUSUP ULAK ', '5', '1', 'ACARA', 'TEMPAT', '2017-11-30', '', 'SEKAYU ', 'HIBURAN', '2017-12-07', '0000-00-00', 'Camat', 'Kelurahan Serasan Jaya', 'Sekayu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keterangan_pindah_kec`
--

CREATE TABLE IF NOT EXISTS `tb_surat_keterangan_pindah_kec` (
  `no_surat` varchar(150) NOT NULL,
  `jenis_surat` varchar(200) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama_kepala` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` int(3) NOT NULL,
  `no_rw` int(3) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `alasan_pindah` varchar(30) NOT NULL,
  `alamat_pindah` text NOT NULL,
  `rt_pindah` varchar(3) NOT NULL,
  `rw_pindah` varchar(3) NOT NULL,
  `desa_pindah` varchar(30) NOT NULL,
  `kec_pindah` varchar(50) NOT NULL,
  `kab_pindah` varchar(100) NOT NULL,
  `jenis_pindah` varchar(50) NOT NULL,
  `status_kk_tidak_pindah` varchar(30) NOT NULL,
  `status_kk_pindah` varchar(30) NOT NULL,
  `jumlah_pindah` varchar(25) NOT NULL,
  `nik1` varchar(25) NOT NULL,
  `nik2` varchar(25) NOT NULL,
  `nik3` varchar(25) NOT NULL,
  `nik4` varchar(25) NOT NULL,
  `nik5` varchar(25) NOT NULL,
  `nama1` varchar(25) NOT NULL,
  `nama2` varchar(50) NOT NULL,
  `nama3` varchar(50) NOT NULL,
  `nama4` varchar(50) NOT NULL,
  `nama5` varchar(50) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(30) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surat_keterangan_pindah_kec`
--

INSERT INTO `tb_surat_keterangan_pindah_kec` (`no_surat`, `jenis_surat`, `nik`, `nama`, `no_kk`, `nama_kepala`, `alamat`, `no_rt`, `no_rw`, `desa`, `alasan_pindah`, `alamat_pindah`, `rt_pindah`, `rw_pindah`, `desa_pindah`, `kec_pindah`, `kab_pindah`, `jenis_pindah`, `status_kk_tidak_pindah`, `status_kk_pindah`, `jumlah_pindah`, `nik1`, `nik2`, `nik3`, `nik4`, `nik5`, `nama1`, `nama2`, `nama3`, `nama4`, `nama5`, `tanggal_input`, `oleh`) VALUES
('475/001/PATEN/Kec.Sky/2017', 'ANTAR KECAMATAN DALAM SATU KABUPATEN', '1606011505640002', 'NGATIMAN', '1606010904085521', 'NGATIMAN', 'Asrama Kodim ', 4, 2, 'Serasan Jaya', '', 'Villa Mandasyari Kenali Blok F No.06', '005', '000', 'Kenali Asam Bawah', 'Kota Baru', 'Jambi', '1', '1', '1', '7 (tujuh)', '33', '3', '3', '33', '3', 's', 's', 's', 's', 's', '2017-11-01', 'Camat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_pindah`
--

CREATE TABLE IF NOT EXISTS `tb_surat_pindah` (
  `no_surat` varchar(150) NOT NULL,
  `jenis_surat` varchar(200) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama_kepala` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` int(3) NOT NULL,
  `no_rw` int(3) NOT NULL,
  `alamat_pindah` text NOT NULL,
  `rt_pindah` varchar(3) NOT NULL,
  `rw_pindah` varchar(3) NOT NULL,
  `desa_pindah` varchar(100) NOT NULL,
  `kec_pindah` varchar(50) NOT NULL,
  `kab_pindah` varchar(100) NOT NULL,
  `jumlah_pindah` varchar(25) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(30) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surat_pindah`
--

INSERT INTO `tb_surat_pindah` (`no_surat`, `jenis_surat`, `nik`, `nama`, `no_kk`, `nama_kepala`, `alamat`, `no_rt`, `no_rw`, `alamat_pindah`, `rt_pindah`, `rw_pindah`, `desa_pindah`, `kec_pindah`, `kab_pindah`, `jumlah_pindah`, `tanggal_input`, `oleh`, `desa`, `status`) VALUES
('471.21/001/KEL.SJ/2017', 'ANTAR KABUPATEN/KOTA ATAU ANTAR PROVINSI', '1606016308130004', 'AGHNIYA DZAKIRAH PUTRI ', '1606010605110001', 'Feriyadi', 'ASPOL POLRES MUBA', 0, 0, 'jl merdeka', '5', '6', '', 'sky', 'muba', '3', '2017-12-05', 'Lurah Serasan Jaya', '', 'kecamatan'),
('471.21/002/KEL.SJ/2017', 'ANTAR KECAMATAN DALAM SATU KABUPATEN', '1606027012810002', 'KHODIJA ', '1606020904086314', 'ayah', 'JALAN PELTU YUSUP ULAK ', 0, 0, 'jl kecamatan', '9', '9', '', 'bayung', 'muba', '2', '2017-12-05', 'Lurah Serasan Jaya', '', 'kecamatan'),
('471.21/003/KEL.SJ/2017', 'ANTAR KECAMATAN DALAM SATU KABUPATEN', '1606021205760003', 'SYAPRI FAHRUDIN ', '1606020904086314', 'asdads', 'JALAN PELTU YUSUP ULAK ', 0, 0, 'assa', 'as', 'as', '', 'as', 'as', '4', '2017-12-14', 'Lurah Serasan Jaya', '', 'kelurahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_pnpm`
--

CREATE TABLE IF NOT EXISTS `tb_surat_pnpm` (
  `no_surat` varchar(100) NOT NULL,
  `kepada` varchar(150) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(100) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surat_pnpm`
--

INSERT INTO `tb_surat_pnpm` (`no_surat`, `kepada`, `desa`, `tanggal_input`, `oleh`) VALUES
('0001/PNPM/Kel.SJ/X/2017', 'Ketua Unit Pengelola ', 'Serasan Jaya ', '2017-12-05', 'Kasi Trantib');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_p_iumk`
--

CREATE TABLE IF NOT EXISTS `tb_surat_p_iumk` (
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `jenis_usaha` varchar(200) NOT NULL,
  `ukuran_usaha` varchar(200) NOT NULL,
  `modal_usaha` int(50) NOT NULL,
  `alamat_usaha` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_p_iumk`
--

INSERT INTO `tb_surat_p_iumk` (`no_surat`, `nama`, `nik`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `nama_usaha`, `jenis_usaha`, `ukuran_usaha`, `modal_usaha`, `alamat_usaha`, `tanggal_input`, `oleh`, `desa`, `kecamatan`, `status`) VALUES
('201/001/Kec.Sky/2017', 'AGHNIYA DZAKIRAH PUTRI ', '1606016308130004', 'PALEMBANG ', '0000-00-00', 'BELUM/TIDAK BEKERJA ', 'ASPOL POLRES MUBA', '0', '0', 'a', 'a', 'a', 10000, 'asdad', '2017-12-05', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kecamatan'),
('201/002/Kec.Sky/2017', 'DIEGO NICHLOLAS ARILIA ', '1606132210110001', 'SEKAYU ', '0000-00-00', 'BELUM/TIDAK BEKERJA ', 'JL PERINTIS ', '0', '0', 'ASDSADSADSAD', 'ASDSADASDSA', 'SADSADSADSAD', 123123213, 'ADSADADSADAS', '2017-12-05', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kecamatan'),
('201/003/Kec.Sky/2017', 'AGHNIYA DZAKIRAH PUTRI ', '1606016308130004', 'PALEMBANG ', '0000-00-00', 'BELUM/TIDAK BEKERJA ', 'ASPOL POLRES MUBA', '0', '0', '111', '111', '111', 111, '111', '2017-12-11', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kecamatan'),
('201/004/Kec.Sky/2017', 'DIEGO NICHLOLAS ARILIA ', '1606132210110001', 'SEKAYU ', '0000-00-00', 'BELUM/TIDAK BEKERJA ', 'JL PERINTIS ', '0', '0', 'FHFGH', 'FGHFGH', 'FGHFGHFG', 0, 'FGHFGHFGH', '2017-12-12', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan'),
('201/005/Kec.Sky/2017', 'M REDHO SAPRIJA ', '1606020505990002', 'SEKAYU ', '0000-00-00', 'PELAJAR/MAHASISWA ', 'JALAN PELTU YUSUP ULAK ', '0', '0', 'c', 'c', 'c', 0, 'c', '2017-12-17', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan'),
('201/006/Kec.Sky/2017', 'KHODIJA ', '1606027012810002', 'SEKAYU ', '1981-12-30', 'MENGURUS RUMAH TANGGA ', 'JALAN PELTU YUSUP ULAK ', '0', '0', '1', '2', '3', 4, '5', '2017-12-17', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan'),
('201/007/Kec.Sky/2017', 'KHODIJA ', '1606027012810002', 'SEKAYU ', '1981-12-30', 'MENGURUS RUMAH TANGGA ', 'JALAN PELTU YUSUP ULAK ', '0', '0', 'm', 'q', 'q', 0, 'q', '2017-12-17', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan'),
('201/008/Kec.Sky/2017', 'KHODIJA ', '1606027012810002', 'SEKAYU ', '1981-12-30', 'MENGURUS RUMAH TANGGA ', 'JALAN PELTU YUSUP ULAK ', '0', '0', '1', '2', '3', 4, '5', '2017-12-17', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan'),
('201/009/Kec.Sky/2017', 'KHODIJA ', '1606027012810002', 'SEKAYU ', '1981-12-30', 'MENGURUS RUMAH TANGGA ', 'JALAN PELTU YUSUP ULAK ', '0', '0', '1', '2', '3', 4, '5', '2017-12-17', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_p_siup`
--

CREATE TABLE IF NOT EXISTS `tb_surat_p_siup` (
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `bidang_usaha` varchar(200) NOT NULL,
  `ukuran_usaha` varchar(200) NOT NULL,
  `kegiatan_usaha` varchar(100) NOT NULL,
  `modal_usaha` int(50) NOT NULL,
  `alamat_usaha` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_p_siup`
--

INSERT INTO `tb_surat_p_siup` (`no_surat`, `nama`, `nik`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `nama_usaha`, `bidang_usaha`, `ukuran_usaha`, `kegiatan_usaha`, `modal_usaha`, `alamat_usaha`, `tanggal_input`, `oleh`, `desa`, `kecamatan`, `status`) VALUES
('503/006/Kec.Sky/2017', 'TITIN SUMARNI ', '', 'SEKAYU ', '1983-10-26', 'BELUM/TIDAK BEKERJA ', 'JL. INFRES PENJARA BARU', '0', '0', 'NM', 'BDG', 'UK', 'KEG', 50000, 'sekayu', '2017-12-05', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kecamatan'),
('503/005/Kec.Sky/2017', 'ANITA MIANA ', '', 'LUMPATAN ', '0000-00-00', 'KARYAWAN HONORER ', 'JL.KOL.WAHID UDIN LK.7', '0', '0', 'NMU', 'BDGU', 'UK', 'KGT', 200000000, 'MT', '2017-12-05', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kecamatan'),
('503/007/Kec.Sky/2017', 'ANDRE PRATAMA ', '', 'PALEMBANG ', '1995-05-03', 'PELAJAR/MAHASISWA ', 'ASPOL POLRES MUBA', '0', '0', 'USAHA', 'BDG', 'UK', 'KEG', 30000, 'sKY', '2017-12-07', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan'),
('503/008/Kec.Sky/2017', 'DWI PUTRI SAPRIJA ', '', 'SEKAYU ', '2002-07-14', 'PELAJAR/MAHASISWA ', 'JALAN PELTU YUSUP ULAK ', '0', '0', 'ASDSAD', 'ASDASD', 'ASDASDSAD', 'ASDSAD', 0, 'ASDASD', '2017-12-12', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan'),
('503/009/Kec.Sky/2017', 'ABRAHAM SERHAN ', '', 'MUSI BANYUASIN ', '2015-06-19', 'BELUM/TIDAK BEKERJA ', 'JL DEPATI NO 068 LK III', '0', '0', 'RTYRT', 'RRTY', 'TRY', 'RTYTR', 0, 'RY', '2017-12-12', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan'),
('503/010/Kec.Sky/2017', 'KHODIJA ', '', 'SEKAYU ', '1981-12-30', 'MENGURUS RUMAH TANGGA ', 'JALAN PELTU YUSUP ULAK ', '0', '0', 'sdaasd', '3', '1', '2', 1, '2', '2017-12-17', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan'),
('503/011/Kec.Sky/2017', 'KHODIJA ', '', 'SEKAYU ', '1981-12-30', 'MENGURUS RUMAH TANGGA ', 'JALAN PELTU YUSUP ULAK ', '0', '0', '1', '2', '4', '3', 5, '6', '2017-12-18', 'Plt. Sekretaris Lurah Ser', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_p_tdp`
--

CREATE TABLE IF NOT EXISTS `tb_surat_p_tdp` (
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `bidang_usaha` varchar(200) NOT NULL,
  `ukuran_usaha` varchar(200) NOT NULL,
  `kegiatan_usaha` varchar(100) NOT NULL,
  `modal_usaha` int(50) NOT NULL,
  `alamat_usaha` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_p_tdp`
--

INSERT INTO `tb_surat_p_tdp` (`no_surat`, `nama`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `nama_usaha`, `bidang_usaha`, `ukuran_usaha`, `kegiatan_usaha`, `modal_usaha`, `alamat_usaha`, `tanggal_input`, `oleh`, `desa`, `kecamatan`, `status`) VALUES
('503/001/Kec.Sky/2017', 'AGHNIYA DZAKIRAH PUTRI ', 'PALEMBANG ', '0000-00-00', 'BELUM/TIDAK BEKERJA ', 'ASPOL POLRES MUBA', '0', '0', 'NMU', 'BDG', 'UK', 'KEG', 8000000, 'PLG', '2017-12-05', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kecamatan'),
('503/002/Kec.Sky/2017', 'NURBAYA ', 'SEKAYU ', '0000-00-00', 'MENGURUS RUMAH TANGGA ', 'JL DEPATI NO 068 LK III', '0', '0', 'NM', 'BDG', 'UK', 'KEG', 51000000, 'sekayu', '2017-12-05', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan'),
('503/003/Kec.Sky/2017', 'ARIPAH ', 'SUKARAMI ', '0000-00-00', 'BELUM/TIDAK BEKERJA ', 'JL. MERDEKA', '0', '0', 'SDFSDF', 'RTY', 'RYRY', 'RRTYRTY', 122222, 'sGFSDG', '2017-12-12', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_reklame`
--

CREATE TABLE IF NOT EXISTS `tb_surat_reklame` (
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `alamat_usaha` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(50) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_reklame`
--

INSERT INTO `tb_surat_reklame` (`no_surat`, `nama`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `nama_usaha`, `alamat_usaha`, `tanggal_input`, `oleh`, `desa`, `kecamatan`, `status`) VALUES
('300/0002/KEL.SJ/XII/2017', 'KHODIJA ', 'SEKAYU ', '1981-12-30', 'MENGURUS RUMAH TANGGA ', 'JALAN PELTU YUSUP ULAK ', '0', '0', 'z', 'z', '2017-12-17', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan'),
('300/0001/KEL.SJ/XII/2017', 'TITIN SUMARNI ', 'SEKAYU ', '1983-10-26', 'BELUM/TIDAK BEKERJA ', 'JL. INFRES PENJARA BARU', '1', '2', 'cv berkah', 'sekayu', '2017-12-16', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan'),
('300/0003/KEL.SJ/XII/2017', 'M REDHO SAPRIJA ', 'SEKAYU ', '1999-05-05', 'PELAJAR/MAHASISWA ', 'JALAN PELTU YUSUP ULAK ', '0', '0', 'h', 'h', '2017-12-17', 'Plt. Sekretaris Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kelurahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_reklame_kec`
--

CREATE TABLE IF NOT EXISTS `tb_surat_reklame_kec` (
  `no_surat` varchar(100) NOT NULL,
  `dasar_surat` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `alamat_usaha` varchar(200) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `materi` varchar(50) NOT NULL,
  `berlaku` varchar(50) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_reklame_kec`
--

INSERT INTO `tb_surat_reklame_kec` (`no_surat`, `dasar_surat`, `tanggal_surat`, `nama`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `nama_usaha`, `alamat_usaha`, `ukuran`, `materi`, `berlaku`, `tanggal_input`, `oleh`, `desa`, `kecamatan`) VALUES
('503/001/PATEN/Kec.Sky/2017', '300/0001/KEL.SJ/XII/2017', '2017-12-05', 'TITIN SUMARNI ', 'SEKAYU ', '1983-10-26', 'BELUM/TIDAK BEKERJA ', 'JL. INFRES PENJARA BARU', '1', '2', 'NAMA', 'sekayu', '10 M2', 'Materi', '1 (satu)', '2017-12-05', 'Camat', 'Kelurahan Serasan Jaya', 'Sekayu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_rektdp_kec`
--

CREATE TABLE IF NOT EXISTS `tb_surat_rektdp_kec` (
  `no_surat` varchar(100) NOT NULL,
  `dasar_surat` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `alamat_usaha` varchar(200) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL,
  `bentuk_usaha` varchar(150) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_sengketa`
--

CREATE TABLE IF NOT EXISTS `tb_surat_sengketa` (
  `no_surat` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `dasar_surat` varchar(50) NOT NULL,
  `alamat_sengketa` varchar(100) NOT NULL,
  `penjamin` varchar(50) NOT NULL,
  `luas_tanah` varchar(10) NOT NULL,
  `tanggal_akta` varchar(20) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_sengketa`
--

INSERT INTO `tb_surat_sengketa` (`no_surat`, `nik`, `kk`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `tanggal_input`, `oleh`, `dasar_surat`, `alamat_sengketa`, `penjamin`, `luas_tanah`, `tanggal_akta`) VALUES
('470/0002/KEL.SJ/XII/2017', '1606016512860003', '1606010902090069', '', 'Perempuan ', 'LUMPATAN ', '1986-12-25', 'ISLAM ', 'KARYAWAN HONORER ', 'JL DEPATI NO 068 LK III', 0, 0, '2017-12-14', 'Lurah Serasan Jaya', '1', '4', '5', '3', '2'),
('470/0001/KEL.SJ/XII/2017', '1606010305950007', '1606010605110001', 'ANDRE PRATAMA ', 'Laki-laki ', 'PALEMBANG ', '1995-05-03', 'ISLAM ', 'PELAJAR/MAHASISWA ', 'ASPOL POLRES MUBA', 0, 0, '2017-12-05', 'Lurah Serasan Jaya', 'NOMOR AKTA', 'LOKASI TANAH', 'BANK', 'LUAS TANAH', 'TGL AKTA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_situ`
--

CREATE TABLE IF NOT EXISTS `tb_surat_situ` (
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `alamat_usaha` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_situ`
--

INSERT INTO `tb_surat_situ` (`no_surat`, `nama`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `nama_usaha`, `alamat_usaha`, `tanggal_input`, `oleh`, `desa`, `kecamatan`, `status`) VALUES
('01', 'RHANDY ELFANDIAR', 'Sekayu', '0000-00-00', ' Karyawan Honorer ', 'Komp. Perumnas Blok. C No. 86 Sekayu', '011', '002', 'Indomaret', 'Jalan Merdeka No. 485 RT. 003 RW. 002 Kel. Serasan Jaya Kec, Sekayu', '2017-09-18', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kecamatan'),
('3', 'RHANDY ELFANDIAR', 'Sekayu', '0000-00-00', ' Karyawan Honorer ', 'Komp. Perumnas Blok. C No. 86 Sekayu', '0', '0', 'r', 'r', '2017-09-18', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kecamatan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_situ_kec`
--

CREATE TABLE IF NOT EXISTS `tb_surat_situ_kec` (
  `no_surat` varchar(100) NOT NULL,
  `dasar_surat` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `alamat_usaha` varchar(200) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL,
  `bentuk_usaha` varchar(100) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `modal_usaha` int(20) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_situ_kec`
--

INSERT INTO `tb_surat_situ_kec` (`no_surat`, `dasar_surat`, `tanggal_surat`, `nama`, `tempat`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `nama_usaha`, `alamat_usaha`, `jenis_usaha`, `bentuk_usaha`, `ukuran`, `modal_usaha`, `tanggal_input`, `oleh`, `desa`, `kecamatan`) VALUES
('503/001/SIUP/PATEN/Kec.Sky/2017', '503/005/Kec.Sky/2017', '2017-12-05', 'ANITA MIANA ', 'LUMPATAN ', 'KARYAWAN HONORER ', 'JL.KOL.WAHID UDIN LK.7', '0', '0', 'NMU', 'MT', 'BDGU', 'Perdagangan Dalam Negeri', '200000000', 0, '2017-12-05', 'Camat', 'Kelurahan Serasan Jaya', 'Sekayu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_skck`
--

CREATE TABLE IF NOT EXISTS `tb_surat_skck` (
  `no_surat` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `oleh` varchar(100) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_skck`
--

INSERT INTO `tb_surat_skck` (`no_surat`, `nik`, `kk`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `keperluan`, `tanggal_input`, `tanggal_akhir`, `oleh`) VALUES
('125/0001/KEL.SJ/XII/2017', '1606020303050002', '1606020904086314', 'M ALDHO SAPRIJA ', 'Laki-laki ', 'SEKAYU ', '2005-03-03', 'ISLAM ', 'BELUM/TIDAK BEKERJA ', 'JALAN PELTU YUSUP ULAK ', 0, 0, 'KEPERLUAN', '2017-12-05', '2017-12-21', 'Lurah Serasan Jaya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_tambang`
--

CREATE TABLE IF NOT EXISTS `tb_surat_tambang` (
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `alamat_usaha` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_tambang`
--

INSERT INTO `tb_surat_tambang` (`no_surat`, `nama`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `nama_usaha`, `alamat_usaha`, `tanggal_input`, `oleh`, `desa`, `kecamatan`, `status`) VALUES
('01', 'Rhandy', 'Sekayu', '2017-09-05', 'Honorer', 'Komp. Perumnas', '11', '02', 'Reklame Papan', 'Kel. Serasan Jaya', '2017-09-19', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kecamatan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_tambang_kec`
--

CREATE TABLE IF NOT EXISTS `tb_surat_tambang_kec` (
  `no_surat` varchar(100) NOT NULL,
  `dasar_surat` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `alamat_usaha` varchar(200) NOT NULL,
  `jenis_usaha` varchar(200) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_tambang_kec`
--

INSERT INTO `tb_surat_tambang_kec` (`no_surat`, `dasar_surat`, `tanggal_surat`, `nama`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `nama_usaha`, `alamat_usaha`, `jenis_usaha`, `ukuran`, `tanggal_input`, `oleh`, `desa`, `kecamatan`) VALUES
('01', '02', '2017-10-04', 'Nama', 'Tempat', '2017-10-09', 'Pekerjaan', 'Alamat', '001', '002', 'Nama Usaha', 'Alamat Usaha', 'Jenis Usaha', 'Ukuran', '2017-10-26', 'CAMAT', 'Kelurahan Serasan Jaya', 'Sekayu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_taspen`
--

CREATE TABLE IF NOT EXISTS `tb_surat_taspen` (
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(100) NOT NULL DEFAULT 'Lurah Serasan Jaya',
  `almarhum` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `tgl_meninggal` date NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tempat_meninggal` varchar(50) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_taspen`
--

INSERT INTO `tb_surat_taspen` (`no_surat`, `nama`, `tempat`, `tanggal_lahir`, `alamat`, `no_rt`, `no_rw`, `tanggal_input`, `oleh`, `almarhum`, `nip`, `tgl_meninggal`, `instansi`, `status`, `tempat_meninggal`) VALUES
('401/0003/KEL.SJ/XII/2017', 'ABRAHAM SERHAN ', 'MUSI BANYUASIN ', '2015-06-19', 'JL DEPATI NO 068 LK III', 0, 0, '2017-12-16', 'Kasi Kessos dan Pelayanan Umum', 'asdads', '1997223029', '2017-12-07', 'pusda', 'Duda', 'Rumah Sakit'),
('401/0001/KEL.SJ/XII/2017', 'ANDRE PRATAMA ', 'PALEMBANG ', '1995-05-03', 'ASPOL POLRES MUBA', 0, 0, '2017-12-16', 'Lurah Serasan Jaya', 'q', '1997223029', '2017-11-01', 'BPKAD KABUPATEN MUSI BANYUASIN', 'Duda', 'Rumah Sakit'),
('401/0002/KEL.SJ/XII/2017', 'TITIN SUMARNI ', 'SEKAYU ', '1983-10-26', 'JL. INFRES PENJARA BARU', 0, 0, '2017-12-16', 'Lurah Serasan Jaya', 'asdsadsad', '19871111 111111 1 001', '2017-12-21', 'bpkad', 'Duda', 'sekayu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_tm`
--

CREATE TABLE IF NOT EXISTS `tb_surat_tm` (
  `no_surat` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(100) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_tm`
--

INSERT INTO `tb_surat_tm` (`no_surat`, `nik`, `kk`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `keperluan`, `tanggal_input`, `oleh`) VALUES
('401/0001/KEL.SJ/XII/2017', '1606010805870004', '1606010902090069', 'AZHARI ROMADHON ', 'Laki-laki ', 'SEKAYU ', '1987-05-08', 'ISLAM ', 'KARYAWAN HONORER ', 'JL DEPATI NO 068 LK III', 0, 0, 'a', '2017-12-05', 'Lurah Serasan Jaya'),
('401/0002/KEL.SJ/XII/2017', '1606016308130004', '1606010605110001', 'AGHNIYA DZAKIRAH PUTRI ', 'Perempuan ', 'PALEMBANG ', '2013-08-23', 'ISLAM ', 'BELUM/TIDAK BEKERJA ', 'ASPOL POLRES MUBA', 0, 0, 'aa', '2017-12-05', 'Lurah Serasan Jaya'),
('401/0003/KEL.SJ/XII/2017', '1606010305950007', '1606010605110001', 'ANDRE PRATAMA ', 'Laki-laki ', 'PALEMBANG ', '1995-05-03', 'ISLAM ', 'PELAJAR/MAHASISWA ', 'ASPOL POLRES MUBA', 0, 0, 'minjam bank', '2017-12-07', 'Lurah Serasan Jaya'),
('401/0004/KEL.SJ/XII/2017', '1606021205760003', '1606020904086314', 'SYAPRI FAHRUDIN ', 'Laki-laki ', 'PALEMBANG ', '1976-05-12', 'ISLAM ', 'PEGAWAI NEGERI SIPIL (PNS) ', 'JALAN PELTU YUSUP ULAK ', 0, 0, 'bbbb', '2017-12-07', 'Lurah Serasan Jaya'),
('wwwe', '', '', 'wewewe', '', '', '0000-00-00', '', '', '', 0, 0, '', '2018-09-09', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_tower`
--

CREATE TABLE IF NOT EXISTS `tb_surat_tower` (
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `oleh` varchar(25) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_tower`
--

INSERT INTO `tb_surat_tower` (`no_surat`, `nama`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `keperluan`, `lokasi`, `tanggal_input`, `oleh`, `desa`, `kecamatan`, `status`) VALUES
('01', 'RHANDY ELFANDIAR', 'Sekayu', '0000-00-00', ' Karyawan Honorer ', 'Komp. Perumnas Blok. C No. 86 Sekayu', '0', '0', 'Bangunan Kantor Pengadilan Negeri Sekayu Kelas II', 'Jalan Merdeka No. 485 RT. 003 RW. 002 Kel. Serasan Jaya Kec, Sekayu', '2017-09-18', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kecamatan'),
('3', 'RHANDY ELFANDIAR', 'Sekayu', '0000-00-00', ' Karyawan Honorer ', 'Komp. Perumnas Blok. C No. 86 Sekayu', '0', '0', 'r', 'r', '2017-09-18', 'Lurah Serasan Jaya', 'Kelurahan Serasan Jaya', 'Sekayu', 'kecamatan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_tower_kec`
--

CREATE TABLE IF NOT EXISTS `tb_surat_tower_kec` (
  `no_surat` varchar(100) NOT NULL,
  `dasar_surat` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_rt` varchar(3) NOT NULL,
  `no_rw` varchar(3) NOT NULL,
  `bangunan` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tinggi_tower` varchar(50) NOT NULL,
  `oleh` varchar(25) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_tower_kec`
--

INSERT INTO `tb_surat_tower_kec` (`no_surat`, `dasar_surat`, `tanggal_surat`, `nama`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `bangunan`, `lokasi`, `jenis_usaha`, `tanggal_input`, `tinggi_tower`, `oleh`, `desa`, `kecamatan`) VALUES
('1111', '01', '2017-09-20', 'RHANDY ELFANDIAR', 'Sekayu', '2017-09-06', ' Karyawan Honorer ', 'Komp. Perumnas Blok. C No. 86 Sekayu RT. 0 / RW. 0', '', '', 'Bangunan Kantor Pengadilan Negeri Sekayu Kelas II', 'Jalan Merdeka No. 485 RT. 003 RW. 002 Kel. Serasan Jaya Kec, Sekayu', 'dcadc', '2017-09-26', '10 Meter', 'Camat', 'Kelurahan Serasan Jaya', 'Sekayu'),
('503/       /PATEN/Kec.Sky/2017', '01', '0000-00-00', 'j', 'oi', '0000-00-00', 'i', 'i', 'iij', 'ioj', '', '', '', '2017-10-02', '', 'Camat', 'Kelurahan Serasan Jaya', 'Sekayu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_usaha`
--

CREATE TABLE IF NOT EXISTS `tb_surat_usaha` (
  `no_surat` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `n_usaha` varchar(100) NOT NULL,
  `a_usaha` varchar(100) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_usaha`
--

INSERT INTO `tb_surat_usaha` (`no_surat`, `nik`, `kk`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `agama`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `n_usaha`, `a_usaha`, `keperluan`, `tanggal_input`, `tanggal_akhir`, `oleh`, `status`) VALUES
('125/0001/KEL.SJ/XI/2017', '1606010305950007', '1606010605110001', 'ANDRE PRATAMA ', 'Laki-laki ', 'PALEMBANG ', '1995-05-03', 'ISLAM ', 'PELAJAR/MAHASISWA ', '', 0, 0, '', '', '', '2017-11-24', '0000-00-00', 'Lurah Serasan Jaya', 'kecamatan'),
('125/0002/KEL.SJ/XI/2017', '1606020303050002', '1606020904086314', 'M ALDHO SAPRIJA ', 'Laki-laki ', 'SEKAYU ', '2005-03-03', 'ISLAM ', 'BELUM/TIDAK BEKERJA ', '', 0, 0, '', '', '', '2017-11-24', '0000-00-00', 'Lurah Serasan Jaya', 'kecamatan'),
('125/0003/KEL.SJ/XI/2017', '1606016309100003', '1606010605110001', 'NAYLA ZHAFIRAH PUTRI ', 'Perempuan ', 'PALEMBANG ', '2010-09-23', 'ISLAM ', 'BELUM/TIDAK BEKERJA ', '', 0, 0, '', '', '', '2017-11-25', '0000-00-00', 'Lurah Serasan Jaya', 'kelurahan'),
('125/0004/KEL.SJ/XI/2017', '1606012311970001', '1606012407080007', 'RIFQI NANDA KURNIAWAN ', 'Laki-laki ', 'JAKARTA ', '1997-11-23', 'ISLAM ', 'PELAJAR/MAHASISWA ', 'Jl Merdeka', 1, 5, 'CV. BERKAH', 'Jl. Merdeka No 222', 'Kredit Rumah', '2017-11-25', '2017-12-25', 'Kasi Kessos dan Pelayanan Umum', 'kelurahan'),
('125/0005/KEL.SJ/XI/2017', '1606025407020002', '1606020904086314', 'DWI PUTRI SAPRIJA ', 'Perempuan ', 'SEKAYU ', '2002-07-14', 'ISLAM ', 'PELAJAR/MAHASISWA ', 'JL PELTU YUSUF', 0, 0, 'RM AMANAH', 'JL KOLONEL WAHID UDIN NO21', 'PINJAMAN BANK', '2017-11-25', '2017-12-25', 'Lurah Serasan Jaya', 'kelurahan'),
('125/0006/KEL.SJ/XI/2017', '1606016308130004', '1606010605110001', 'AGHNIYA DZAKIRAH PUTRI ', 'Perempuan ', 'PALEMBANG ', '2013-08-23', 'ISLAM ', 'BELUM/TIDAK BEKERJA ', '', 0, 0, '', '', '', '2017-11-25', '0000-00-00', 'Kasi Pemerintahan', 'kelurahan'),
('125/0007/KEL.SJ/XI/2017', '1606016309100003', '1606010605110001', 'NAYLA ZHAFIRAH PUTRI ', 'Perempuan ', 'PALEMBANG ', '2010-09-23', 'ISLAM ', 'BELUM/TIDAK BEKERJA ', '', 0, 0, '', '', '', '2017-11-25', '0000-00-00', 'Lurah Serasan Jaya', 'kelurahan'),
('125/0008/KEL.SJ/XI/2017', '1606021205760003', '1606020904086314', 'SYAPRI FAHRUDIN ', 'Laki-laki ', 'PALEMBANG ', '1976-05-12', 'ISLAM ', 'PEGAWAI NEGERI SIPIL (PNS) ', '', 0, 0, '', '', '', '2017-11-25', '0000-00-00', 'Plt. Sekretaris Lurah Serasan Jaya', 'kelurahan'),
('125/0009/KEL.SJ/XI/2017', '1606135710840001', ' 160601050315000', 'ARIE BERLINA Y ', 'Perempuan ', 'PALEMBANG ', '1984-10-17', 'ISLAM ', 'KARYAWAN SWASTA ', '', 0, 0, '', '', '', '2017-11-25', '0000-00-00', 'Kasi Trantib', 'kelurahan'),
('125/0010/KEL.SJ/XI/2017', '1606132210110001', ' 160601050315000', 'DIEGO NICHLOLAS ARILIA ', 'Laki-laki ', 'SEKAYU ', '2011-10-22', 'ISLAM ', 'BELUM/TIDAK BEKERJA ', '', 0, 0, '', '', '', '2017-11-25', '0000-00-00', 'Kasi Trantib', 'kelurahan'),
('125/0011/KEL.SJ/XI/2017', '1606016103770001', '1606012407080007', 'ROSMALATIKA ', 'Perempuan ', 'SEKAYU ', '1977-03-21', 'ISLAM ', 'KARYAWAN HONORER ', '', 0, 0, '', '', '', '2017-11-25', '0000-00-00', 'Plt. Sekretaris Lurah Serasan Jaya', 'kelurahan'),
('125/0012/KEL.SJ/XI/2017', '1606012906770002', '1606011303150001', 'MA. ERWIN ARYANTO BADUISYAH ', 'Laki-laki ', 'SEKAYU ', '1977-06-29', 'ISLAM ', 'PERDAGANGAN ', '', 0, 0, '', '', '', '2017-11-25', '0000-00-00', 'Plt. Sekretaris Lurah Serasan Jaya', 'kelurahan'),
('125/0013/KEL.SJ/XI/2017', '1606065605070002', ' 160601050315000', 'LARASSHIENAIYA ARILIA ', 'Perempuan ', 'KAYU AGUNG ', '2007-05-16', 'ISLAM ', 'PELAJAR/MAHASISWA ', '', 0, 0, '', '', '', '2017-11-25', '0000-00-00', 'Plt. Sekretaris Lurah Serasan Jaya', 'kelurahan'),
('125/0014/KEL.SJ/XI/2017', '1606010305950007', '1606010605110001', 'ANDRE PRATAMA ', 'Laki-laki ', 'PALEMBANG ', '1995-05-03', 'ISLAM ', 'PELAJAR/MAHASISWA ', 'aaaaaaaaaa', 0, 0, 'a', 'a', 'a', '2017-11-25', '2017-10-19', '-', 'kelurahan'),
('125/0015/KEL.SJ/XI/2017', '1606027012810002', '1606020904086314', 'KHODIJA ', 'Perempuan ', 'SEKAYU ', '1981-12-30', 'ISLAM ', 'MENGURUS RUMAH TANGGA ', '', 0, 0, 'a', 'a', 'a', '2017-11-25', '0000-00-00', '-', 'kelurahan'),
('125/0016/KEL.SJ/XII/2017', '1606027008000001', '1606020904086314', 'GUSTI INDAH SAPRIJA ', 'Perempuan ', 'SEKAYU ', '2000-08-30', 'ISLAM ', 'PELAJAR/MAHASISWA ', '', 0, 0, 'usaha', 'alnt', 'rl', '2017-12-16', '2017-12-20', 'Lurah Serasan Jaya', 'kelurahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_usaha_kec`
--

CREATE TABLE IF NOT EXISTS `tb_surat_usaha_kec` (
  `no_surat` varchar(100) NOT NULL,
  `dasar_surat` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `nama_usaha` varchar(50) NOT NULL,
  `bentuk_usaha` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `kegiatan_usaha` varchar(100) NOT NULL,
  `sarana_usaha` varchar(100) NOT NULL,
  `alamat_usaha` varchar(200) NOT NULL,
  `jumlah_modal` varchar(50) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `oleh` varchar(100) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_surat_usaha_kec`
--

INSERT INTO `tb_surat_usaha_kec` (`no_surat`, `dasar_surat`, `nama`, `nik`, `tempat`, `tanggal_lahir`, `pekerjaan`, `alamat`, `no_rt`, `no_rw`, `nama_usaha`, `bentuk_usaha`, `npwp`, `kegiatan_usaha`, `sarana_usaha`, `alamat_usaha`, `jumlah_modal`, `tanggal_input`, `tanggal_akhir`, `oleh`) VALUES
('503/0003/IUMK/PATEN/KEC.SKY/2017', '201/003/Kec.Sky/2017', 'AGHNIYA DZAKIRAH PUTRI ', '1606016308130004', 'PALEMBANG ', '0000-00-00', 'BELUM/TIDAK BEKERJA ', 'ASPOL POLRES MUBA', 0, 0, '111', '111', '123213', '123213123', '123123', '111', '111', '2017-12-12', '0000-00-00', 'Camat'),
('nomor', 'dasar', 'meigi', '1606013005930001', '', '0000-00-00', '', 'JL MERAK GRIYA BUKIT AGUNG SEJAHTERA BLOK A5 NO.22 RT.19 RW.06 KEL. BALAI AGUNG KEC. SEKAYU', 19, 6, 'nama usaha', 'kegiatan', '11211', 'kegiatan', 'sarana', 'alamat usaha', '50000000', '2018-09-08', '0000-00-00', 'Camat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tdp_kec`
--

CREATE TABLE IF NOT EXISTS `tb_tdp_kec` (
  `no_surat` varchar(100) NOT NULL,
  `dasar_surat` varchar(200) NOT NULL,
  `jenis_perusahaan` varchar(30) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `kegiatan_usaha` varchar(30) NOT NULL,
  `kbli` varchar(30) NOT NULL,
  `pendaftaran` varchar(30) NOT NULL,
  `pembaharuan` varchar(5) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `oleh` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tdp_kec`
--

INSERT INTO `tb_tdp_kec` (`no_surat`, `dasar_surat`, `jenis_perusahaan`, `nama_perusahaan`, `status`, `alamat_perusahaan`, `nama_pemilik`, `npwp`, `no_telepon`, `kegiatan_usaha`, `kbli`, `pendaftaran`, `pembaharuan`, `tanggal_input`, `tanggal_akhir`, `oleh`) VALUES
('001', '503/001/Kec.Sky/2017', 'Perusahaan Perorangan (PO)', 'NMU', 'non', 'PLG', 'AGHNIYA DZAKIRAH PUTRI ', 'npwp', '082176601231', 'KEG', 'KBLIa', '01', '01', '2017-12-05', '2017-08-26', 'Camat'),
('002', '23232', 'Perusahaan Perorangan (PO)', 'nama perusahaan', 'stat', 'alama p', 'KHODIJA ', 'npwp', 'no tel', 'keg', 'kbli', 'pendafta', '2', '2018-09-09', '2018-09-09', 'Lurah Serasan Jaya'),
('003', 'dasar', 'Perusahaan Perorangan (PO)', 'nama perusahaan', 'stat', 'Jalan Kolonel Wahid Udin Lingk. I Kelurahan Serasan Jaya Sekayu', 'KHODIJA ', '11211', 'no tel', '15', 'kbli', 'pendafta', '2', '2018-09-09', '2018-09-09', 'Lurah Serasan Jaya');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
