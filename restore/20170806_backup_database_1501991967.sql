DROP TABLE tb_admin;

CREATE TABLE `tb_admin` (
  `ID` int(2) NOT NULL,
  `NAMA` varchar(20) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO tb_admin VALUES("1","ADMIN","ADMIN","ADMIN");



DROP TABLE tb_agama;

CREATE TABLE `tb_agama` (
  `id` int(2) NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO tb_agama VALUES("1","Islam");
INSERT INTO tb_agama VALUES("2","Kristen");



DROP TABLE tb_detail_kematian;

CREATE TABLE `tb_detail_kematian` (
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

INSERT INTO tb_detail_kematian VALUES("474.3/001/2017","Reg00002","","MATI","Laki-laki","11","1900-01-01","","","","","0","0");
INSERT INTO tb_detail_kematian VALUES("474.3/002/2017","Reg00002","","ANGGOTA_MASUK2","Laki-laki","","1900-01-01","-","-","-","","0","0");



DROP TABLE tb_detail_kk;

CREATE TABLE `tb_detail_kk` (
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

INSERT INTO tb_detail_kk VALUES("KK00004","Reg00002","1606013005930001","MEIGI RAHMAN","Laki-laki","SEKAYU","1993-05-30","-","Islam","Belum Kawin","-","-","-","-"," Kepala Keluarga ","Diploma IV/Strata I","Pelajar/Mahasiswa","FERIYADI","DARLINA","19","6");
INSERT INTO tb_detail_kk VALUES("KK00001","Reg00001","","ANGGOTA_MASUK","Laki-laki","","1900-01-01","-","-","-","-","","-","","-","-","-","","","0","0");
INSERT INTO tb_detail_kk VALUES("KK00002","Reg00001","","ANGGOTA_MASUK","Laki-laki","","1900-01-01","-","-","-","-","","-","","-","-","-","","","0","0");
INSERT INTO tb_detail_kk VALUES("KK00003","Reg00002","1606013005930001","MEIGI RAHMAN","Laki-laki","SEKAYU","1993-05-30","-","Islam","Belum Kawin","-","-","-","-"," Kepala Keluarga ","Diploma IV/Strata I","Pelajar/Mahasiswa","FERIYADI","DARLINA","19","6");
INSERT INTO tb_detail_kk VALUES("KK00005","Reg00002","1606013005930001","MEIGI RAHMAN","Laki-laki","SEKAYU","1993-05-30","-","Islam","Belum Kawin","-","-","-","-"," Kepala Keluarga ","Diploma IV/Strata I","Pelajar/Mahasiswa","FERIYADI","DARLINA","19","6");



DROP TABLE tb_detail_ktp;

CREATE TABLE `tb_detail_ktp` (
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




DROP TABLE tb_detail_pend_masuk;

CREATE TABLE `tb_detail_pend_masuk` (
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

INSERT INTO tb_detail_pend_masuk VALUES("","Reg00001","1606013005930001","ANGGOTA_MASUK","Laki-laki","","1900-01-01","0","-","-","-","-","","-","","-","-","-","","","","-","0","0","2017-08-03");
INSERT INTO tb_detail_pend_masuk VALUES("","Reg00002","","ANGGOTA_MASUK2","Laki-laki","","1900-01-01","0","-","-","-","-","","-","","-","-","-","","","","-","0","0","2017-08-03");



DROP TABLE tb_detail_pend_pindah;

CREATE TABLE `tb_detail_pend_pindah` (
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




DROP TABLE tb_jenis_kelamin;

CREATE TABLE `tb_jenis_kelamin` (
  `jenis_kelamin` varchar(10) NOT NULL,
  PRIMARY KEY (`jenis_kelamin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO tb_jenis_kelamin VALUES("Laki-laki");
INSERT INTO tb_jenis_kelamin VALUES("Perempuan");



DROP TABLE tb_kelahiran;

CREATE TABLE `tb_kelahiran` (
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

INSERT INTO tb_kelahiran VALUES("474.1/001/2017","Reg00001","ANDI","Laki-laki","Senin Legi","SELARAI","1900-01-01","IBUK","ASRI","123","10","2","2017-08-03");
INSERT INTO tb_kelahiran VALUES("474.1/002/2017","Reg00002","MATI","Laki-laki","- -","11","1900-01-01","","","","0","0","2017-08-03");



DROP TABLE tb_kematian;

CREATE TABLE `tb_kematian` (
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

INSERT INTO tb_kematian VALUES("474.3/001/2017","1900-01-01","-","0","Rumah Sakit","","","","-","2017-08-03");
INSERT INTO tb_kematian VALUES("474.3/002/2017","1900-01-01","-","0","Rumah Sakit","","","","-","2017-08-03");



DROP TABLE tb_kk;

CREATE TABLE `tb_kk` (
  `no_reg_kk` varchar(10) NOT NULL,
  `nama_kk` varchar(25) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `no_rw` int(2) NOT NULL,
  `jml_anggota` int(2) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`no_reg_kk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO tb_kk VALUES("KK00001","KK-FERI","19","5","1","2017-08-05");
INSERT INTO tb_kk VALUES("KK00002","KK-ke1","3","2","1","2017-08-05");
INSERT INTO tb_kk VALUES("KK00003","dar","1","2","1","2017-08-05");
INSERT INTO tb_kk VALUES("KK00004","MEIGI RAHMAN","19","6","1","2017-08-05");
INSERT INTO tb_kk VALUES("KK00005","MEIGI RAHMAN","19","6","1","2017-08-05");



DROP TABLE tb_ktp;

CREATE TABLE `tb_ktp` (
  `nik` varchar(16) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_berlaku` date NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




DROP TABLE tb_pekerjaan;

CREATE TABLE `tb_pekerjaan` (
  `kd_kerja` int(2) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_kerja`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO tb_pekerjaan VALUES("1","Belum/Tidak Bekerja");
INSERT INTO tb_pekerjaan VALUES("2","Mengurus Rumah Tangga");
INSERT INTO tb_pekerjaan VALUES("3","Pelajar/Mahasiswa");
INSERT INTO tb_pekerjaan VALUES("4","Pensiunan");
INSERT INTO tb_pekerjaan VALUES("5","Pegawai Negeri Sipil (PNS)");
INSERT INTO tb_pekerjaan VALUES("6","Tentara Nasional Indonesia (TNI)");
INSERT INTO tb_pekerjaan VALUES("7","Kepolisian RI (POLRI)");
INSERT INTO tb_pekerjaan VALUES("8","Perdagangan");
INSERT INTO tb_pekerjaan VALUES("9","Petani/Pekebun");
INSERT INTO tb_pekerjaan VALUES("10","Peternak");
INSERT INTO tb_pekerjaan VALUES("11","Nelayan/Perikanan");
INSERT INTO tb_pekerjaan VALUES("12","Industri");
INSERT INTO tb_pekerjaan VALUES("13","Konstruksi");
INSERT INTO tb_pekerjaan VALUES("14","Transportasi");
INSERT INTO tb_pekerjaan VALUES("15","Karyawan Swasta");
INSERT INTO tb_pekerjaan VALUES("16","Karyawan BUMN");
INSERT INTO tb_pekerjaan VALUES("17","Karyawan BUMD");
INSERT INTO tb_pekerjaan VALUES("18","Karyawan Honorer");
INSERT INTO tb_pekerjaan VALUES("19","Buruh Harian Lepas");
INSERT INTO tb_pekerjaan VALUES("20","Buruh Tani/Perkebunan");
INSERT INTO tb_pekerjaan VALUES("21","Buruh Nelayan/Perikanan");
INSERT INTO tb_pekerjaan VALUES("22","Buruh Peternakan");
INSERT INTO tb_pekerjaan VALUES("23","Pembantu Rumah Tangga");
INSERT INTO tb_pekerjaan VALUES("24","Tukang Cukur");
INSERT INTO tb_pekerjaan VALUES("25","Tukang Listrik");
INSERT INTO tb_pekerjaan VALUES("26","Tukang Batu");
INSERT INTO tb_pekerjaan VALUES("27","Tukang Kayu");
INSERT INTO tb_pekerjaan VALUES("28","Tukang Sol Sepatu");
INSERT INTO tb_pekerjaan VALUES("29","Tukang Las/Pandai Besi");
INSERT INTO tb_pekerjaan VALUES("30","Tukang Jahit");
INSERT INTO tb_pekerjaan VALUES("31","Tukang Gigi");
INSERT INTO tb_pekerjaan VALUES("32","Penata Rias");
INSERT INTO tb_pekerjaan VALUES("33","Penata Busana");
INSERT INTO tb_pekerjaan VALUES("34","Penata Rambut");
INSERT INTO tb_pekerjaan VALUES("35","Mekanik");
INSERT INTO tb_pekerjaan VALUES("36","Seniman");
INSERT INTO tb_pekerjaan VALUES("37","Tabib");
INSERT INTO tb_pekerjaan VALUES("38","Paraji");
INSERT INTO tb_pekerjaan VALUES("39","Perancang Busana");
INSERT INTO tb_pekerjaan VALUES("40","Penterjemah");
INSERT INTO tb_pekerjaan VALUES("41","Imam Masjid");
INSERT INTO tb_pekerjaan VALUES("42","Pendeta");
INSERT INTO tb_pekerjaan VALUES("43","Pastor");
INSERT INTO tb_pekerjaan VALUES("44","Wartawan");
INSERT INTO tb_pekerjaan VALUES("45","Ustadz/Mubaligh");
INSERT INTO tb_pekerjaan VALUES("46","Juru Masak");
INSERT INTO tb_pekerjaan VALUES("47","Promotor Acara");
INSERT INTO tb_pekerjaan VALUES("48","Anggota DPR-RI");
INSERT INTO tb_pekerjaan VALUES("49","Anggota DPD");
INSERT INTO tb_pekerjaan VALUES("50","Anggota BPK");
INSERT INTO tb_pekerjaan VALUES("51","Presiden");
INSERT INTO tb_pekerjaan VALUES("52","Wakil Presiden");
INSERT INTO tb_pekerjaan VALUES("53","Anggota Mahkamah Konstitusi");
INSERT INTO tb_pekerjaan VALUES("54","Anggota Kabinet Kementrian");
INSERT INTO tb_pekerjaan VALUES("55","Duta Besar");
INSERT INTO tb_pekerjaan VALUES("56","Gubernur");
INSERT INTO tb_pekerjaan VALUES("57","Wakil Gubernur");
INSERT INTO tb_pekerjaan VALUES("58","Bupati");
INSERT INTO tb_pekerjaan VALUES("59","Wakil Bupati");
INSERT INTO tb_pekerjaan VALUES("60","Walikota");
INSERT INTO tb_pekerjaan VALUES("61","Wakil Walikota");
INSERT INTO tb_pekerjaan VALUES("62","Anggota DPRP Prov");
INSERT INTO tb_pekerjaan VALUES("63","Anggota DPRP Kab/Kota");
INSERT INTO tb_pekerjaan VALUES("64","Dosen");
INSERT INTO tb_pekerjaan VALUES("65","Guru");
INSERT INTO tb_pekerjaan VALUES("66","Pilot");
INSERT INTO tb_pekerjaan VALUES("67","Pengacara");
INSERT INTO tb_pekerjaan VALUES("68","Notaris");
INSERT INTO tb_pekerjaan VALUES("69","Arsitek");
INSERT INTO tb_pekerjaan VALUES("70","Akuntan");
INSERT INTO tb_pekerjaan VALUES("71","Konsultan");
INSERT INTO tb_pekerjaan VALUES("72","Dokter");
INSERT INTO tb_pekerjaan VALUES("73","Bidan");
INSERT INTO tb_pekerjaan VALUES("74","Perawat");
INSERT INTO tb_pekerjaan VALUES("75","Apoteker");
INSERT INTO tb_pekerjaan VALUES("76","Psikiater/Psikolog");
INSERT INTO tb_pekerjaan VALUES("77","Penyiar Televisi");
INSERT INTO tb_pekerjaan VALUES("78","Penyiar Radio");
INSERT INTO tb_pekerjaan VALUES("79","Pelaut");
INSERT INTO tb_pekerjaan VALUES("80","Peneliti");
INSERT INTO tb_pekerjaan VALUES("81","Sopir");
INSERT INTO tb_pekerjaan VALUES("82","Pialang");
INSERT INTO tb_pekerjaan VALUES("83","Paranormal");
INSERT INTO tb_pekerjaan VALUES("84","Pedagang");
INSERT INTO tb_pekerjaan VALUES("85","Perangkat Desa");
INSERT INTO tb_pekerjaan VALUES("86","Kepala Desa");
INSERT INTO tb_pekerjaan VALUES("87","Biarawati");
INSERT INTO tb_pekerjaan VALUES("88","Wiraswasta");



DROP TABLE tb_penandatangan;

CREATE TABLE `tb_penandatangan` (
  `no` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_penandatangan VALUES("1","EDI HERYANTO, SH","19801206 200701 1 00","LURAH SERASAN JAYA");
INSERT INTO tb_penandatangan VALUES("2","M. TAISIR GUNAWAN, S.Sos, MM","19650620 198609 1 00","CAMAT SEKAYU");



DROP TABLE tb_pend_masuk;

CREATE TABLE `tb_pend_masuk` (
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

INSERT INTO tb_pend_masuk VALUES("","","kkcoba1","","0","0","","","","-","0","0","-","-","-","2017-08-03");



DROP TABLE tb_pend_pindah;

CREATE TABLE `tb_pend_pindah` (
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




DROP TABLE tb_pendidikan;

CREATE TABLE `tb_pendidikan` (
  `kd_pend` int(2) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_pend`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO tb_pendidikan VALUES("1","Tidak/Belum Sekolah");
INSERT INTO tb_pendidikan VALUES("2","Belum Tamat SD/Sederajat");
INSERT INTO tb_pendidikan VALUES("3","Tamat SD/Sederajat");
INSERT INTO tb_pendidikan VALUES("4","SLTP/Sederajat");
INSERT INTO tb_pendidikan VALUES("5","SLTA/Sederajat");
INSERT INTO tb_pendidikan VALUES("6","Diploma I/II");
INSERT INTO tb_pendidikan VALUES("7","Akademi/Diploma III Sarjana Muda");
INSERT INTO tb_pendidikan VALUES("8","Diploma IV/Strata I");
INSERT INTO tb_pendidikan VALUES("9","Strata II");
INSERT INTO tb_pendidikan VALUES("10","Strata III");



DROP TABLE tb_penduduk;

CREATE TABLE `tb_penduduk` (
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

INSERT INTO tb_penduduk VALUES("Reg00003","1606012010196300","DARLINA","Perempuan","SEKAYU","1900-01-01","0","-","-","-","-","","-",""," Istri "," SLTA/Sederajat "," Pegawai Negeri Sipil (PNS) ","","","","-","-","3","2","2017-08-05");
INSERT INTO tb_penduduk VALUES("Reg00002","1606013005930001","MEIGI RAHMAN","Laki-laki","SEKAYU","1993-05-30","0","-","Islam","Belum Kawin","-","-","-","-"," Kepala Keluarga ","Diploma IV/Strata I","Pelajar/Mahasiswa","FERIYADI","DARLINA","KK00001","-","-","19","6","2017-08-05");
INSERT INTO tb_penduduk VALUES("Reg00001","","ANGGOTA_MASUK","Laki-laki","","1900-01-01","0","-","-","-","-","","-",""," Anak ","-","-","","","KK00001","-","","0","0","2017-08-03");



DROP TABLE tb_rt;

CREATE TABLE `tb_rt` (
  `no` int(2) NOT NULL,
  `no_rt` int(2) NOT NULL,
  `nama_rt` varchar(15) NOT NULL,
  `no_rw` int(2) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO tb_rt VALUES("1","1","BONTENG","1");
INSERT INTO tb_rt VALUES("2","2","ISMA","2");
INSERT INTO tb_rt VALUES("3","3","YENI","3");
INSERT INTO tb_rt VALUES("4","4","PUTRI","4");



DROP TABLE tb_rw;

CREATE TABLE `tb_rw` (
  `no_rw` int(2) NOT NULL,
  `nama_rw` varchar(15) NOT NULL,
  PRIMARY KEY (`no_rw`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO tb_rw VALUES("1","DIAS");
INSERT INTO tb_rw VALUES("2","AZHI");
INSERT INTO tb_rw VALUES("3","MAMAN");
INSERT INTO tb_rw VALUES("4","TARIP");



DROP TABLE tb_sementarakk;

CREATE TABLE `tb_sementarakk` (
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




DROP TABLE tb_sementaramasuk;

CREATE TABLE `tb_sementaramasuk` (
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




DROP TABLE tb_sementarapindah;

CREATE TABLE `tb_sementarapindah` (
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




DROP TABLE tb_sktm;

CREATE TABLE `tb_sktm` (
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




DROP TABLE tb_status_hub;

CREATE TABLE `tb_status_hub` (
  `id` int(2) NOT NULL,
  `status_hub` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO tb_status_hub VALUES("1","Kepala Keluarga");
INSERT INTO tb_status_hub VALUES("2","Suami");
INSERT INTO tb_status_hub VALUES("3","Istri");
INSERT INTO tb_status_hub VALUES("4","Anak");
INSERT INTO tb_status_hub VALUES("5","Menantu");
INSERT INTO tb_status_hub VALUES("6","Cucu");
INSERT INTO tb_status_hub VALUES("7","Orangtua");
INSERT INTO tb_status_hub VALUES("8","Mertua");
INSERT INTO tb_status_hub VALUES("9","Famili Lain");
INSERT INTO tb_status_hub VALUES("10","Pembantu");
INSERT INTO tb_status_hub VALUES("11","Lainnya");



DROP TABLE tb_status_nikah;

CREATE TABLE `tb_status_nikah` (
  `id` int(2) NOT NULL,
  `status_nikah` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO tb_status_nikah VALUES("2","Kawin");
INSERT INTO tb_status_nikah VALUES("1","Belum Kawin");
INSERT INTO tb_status_nikah VALUES("3","Cerai Hidup");
INSERT INTO tb_status_nikah VALUES("4","Cerai Mati");



DROP TABLE tb_surat;

CREATE TABLE `tb_surat` (
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




DROP TABLE tb_surat_domisili;

CREATE TABLE `tb_surat_domisili` (
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

INSERT INTO tb_surat_domisili VALUES("474.4/001/VIII/2017","1606013005930001","MEIGI RAHMAN","Laki-laki","SEKAYU","1993-05-30","Belum Kawin","Pelajar/Mahasiswa","19","6","2017-08-05","ABDUL KHAYYI");



DROP TABLE tb_surat_skck;

CREATE TABLE `tb_surat_skck` (
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
  `keperluan` varchar(100) NOT NULL,
  PRIMARY KEY (`no_surat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO tb_surat_skck VALUES("331/001/2017","1606012010196300","FERIYADI","Laki-laki","SEKAYU","1963-10-20"," Islam "," Pegawai Negeri Sipil (PNS) ","19","6","2017-07-31","0000-00-00","ABDUL KHAYYI","");



DROP TABLE tb_surat_usaha;

CREATE TABLE `tb_surat_usaha` (
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




