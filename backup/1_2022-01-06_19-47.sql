#
# TABLE STRUCTURE FOR: absen
#

DROP TABLE IF EXISTS `absen`;

CREATE TABLE `absen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idkaryawan` int(11) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `masuk` time NOT NULL,
  `keluar` time NOT NULL,
  `idkehadiran` int(11) DEFAULT NULL,
  `idstatus` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

INSERT INTO `absen` (`id`, `idkaryawan`, `tgl`, `masuk`, `keluar`, `idkehadiran`, `idstatus`) VALUES (30, 843511, '2022-01-06', '05:03:17', '05:03:37', 1, '2');


#
# TABLE STRUCTURE FOR: admin
#

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(99) DEFAULT NULL,
  `username` varchar(99) DEFAULT NULL,
  `password` varchar(99) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `telp`, `level`, `status`) VALUES (1, 'Administrator', 'admin', '7363a0d0604902af7b70b271a0b96480', '081295916567', 1, 1);


#
# TABLE STRUCTURE FOR: gedung
#

DROP TABLE IF EXISTS `gedung`;

CREATE TABLE `gedung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gedung` varchar(99) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO `gedung` (`id`, `gedung`, `alamat`) VALUES (4, 'Gudang A', 'Kp.bedahan');
INSERT INTO `gedung` (`id`, `gedung`, `alamat`) VALUES (5, 'Gudang B', 'Kp.bedahan');
INSERT INTO `gedung` (`id`, `gedung`, `alamat`) VALUES (6, 'Gudang C', 'Kp.bedahan');


#
# TABLE STRUCTURE FOR: history
#

DROP TABLE IF EXISTS `history`;

CREATE TABLE `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(99) DEFAULT NULL,
  `info` varchar(99) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `ip` varchar(99) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (1, 'Administrator', ' Telah melakukan login', '2022-01-05 14:04:06', '::1');
INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (2, 'Administrator', ' Terakhir Login Pada', '2022-01-05 15:00:50', '::1');
INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (3, 'Muhammad Febriansyah', ' Telah melakukan login', '2022-01-06 10:56:38', '::1');
INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (4, 'Muhammad Febriansyah', ' Terakhir Login Pada', '2022-01-06 10:56:53', '::1');
INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (6, 'Administrator', ' Telah melakukan login', '2022-01-06 12:18:34', '::1');
INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (7, 'Administrator', ' Terakhir Login Pada', '2022-01-06 14:19:03', '::1');
INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (8, 'Administrator', ' Telah melakukan login', '2022-01-06 14:19:07', '::1');
INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (9, 'Administrator', ' Terakhir Login Pada', '2022-01-06 19:03:32', '::1');
INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (10, 'Muhammad Febriansyah', ' Telah melakukan login', '2022-01-06 19:10:57', '::1');
INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (11, 'Muhammad Febriansyah', ' Terakhir Login Pada', '2022-01-06 19:13:30', '::1');
INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (12, 'Muhammad Febriansyah', ' Telah melakukan login', '2022-01-06 19:13:37', '::1');
INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (13, 'Muhammad Febriansyah', ' Terakhir Login Pada', '2022-01-06 19:13:53', '::1');
INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (14, 'Muhammad Febriansyah', ' Telah melakukan login', '2022-01-06 19:13:57', '::1');
INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (15, 'Muhammad Febriansyah', ' Terakhir Login Pada', '2022-01-06 19:36:36', '::1');
INSERT INTO `history` (`id`, `nama`, `info`, `waktu`, `ip`) VALUES (16, 'Administrator', ' Telah melakukan login', '2022-01-06 19:36:40', '::1');


#
# TABLE STRUCTURE FOR: jabatan
#

DROP TABLE IF EXISTS `jabatan`;

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(99) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `jabatan` (`id`, `jabatan`) VALUES (2, 'Karyawan');
INSERT INTO `jabatan` (`id`, `jabatan`) VALUES (3, 'Manajer');
INSERT INTO `jabatan` (`id`, `jabatan`) VALUES (4, 'Manajer Pemasaran');


#
# TABLE STRUCTURE FOR: jam
#

DROP TABLE IF EXISTS `jam`;

CREATE TABLE `jam` (
  `idjam` int(11) NOT NULL AUTO_INCREMENT,
  `masuk` time DEFAULT NULL,
  `keluar` time DEFAULT NULL,
  `idkaryawan` int(11) DEFAULT NULL,
  PRIMARY KEY (`idjam`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `jam` (`idjam`, `masuk`, `keluar`, `idkaryawan`) VALUES (1, '07:43:37', '01:43:37', 843511);


#
# TABLE STRUCTURE FOR: karyawan
#

DROP TABLE IF EXISTS `karyawan`;

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idkaryawan` varchar(99) DEFAULT NULL,
  `nip` varchar(99) DEFAULT NULL,
  `nama` varchar(99) DEFAULT NULL,
  `jk` varchar(99) DEFAULT NULL,
  `tempat_lahir` varchar(99) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `usia` varchar(99) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `email` varchar(99) DEFAULT NULL,
  `agama` varchar(99) DEFAULT NULL,
  `idjabatan` int(11) DEFAULT NULL,
  `idshift` int(11) DEFAULT NULL,
  `idgedung` int(11) DEFAULT NULL,
  `username` varchar(99) DEFAULT NULL,
  `password` varchar(99) DEFAULT NULL,
  `otp` varchar(99) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `qr` varchar(99) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO `karyawan` (`id`, `idkaryawan`, `nip`, `nama`, `jk`, `tempat_lahir`, `tgl_lhr`, `usia`, `telp`, `email`, `agama`, `idjabatan`, `idshift`, `idgedung`, `username`, `password`, `otp`, `status`, `alamat`, `qr`) VALUES (6, '743145', '12351321', 'Muhammad Febriansyah', 'Laki-laki', 'Bogor', '2022-01-06', '', '081295916567', 'muhammadfebrian121@gmail.com', 'Islam', 3, 1, 4, 'febri', '7363a0d0604902af7b70b271a0b96480', '929969', 1, 'Jambi', '743145.png');


#
# TABLE STRUCTURE FOR: kehadiran
#

DROP TABLE IF EXISTS `kehadiran`;

CREATE TABLE `kehadiran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kehadiran` varchar(99) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `kehadiran` (`id`, `kehadiran`) VALUES (1, 'Hadir');
INSERT INTO `kehadiran` (`id`, `kehadiran`) VALUES (2, 'Sakit');
INSERT INTO `kehadiran` (`id`, `kehadiran`) VALUES (3, 'Izin');
INSERT INTO `kehadiran` (`id`, `kehadiran`) VALUES (4, 'Lepas/Off');


#
# TABLE STRUCTURE FOR: setting
#

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `web` varchar(99) DEFAULT NULL,
  `keyword` varchar(99) DEFAULT NULL,
  `telp` varchar(99) DEFAULT NULL,
  `email` varchar(99) DEFAULT NULL,
  `yt` varchar(99) DEFAULT NULL,
  `fb` varchar(99) DEFAULT NULL,
  `ig` varchar(99) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `setting` (`id`, `web`, `keyword`, `telp`, `email`, `yt`, `fb`, `ig`) VALUES (1, 'asdasd', 'asdas', 'asd', 'asdas', 'sada', 'asdasd', 'asda');


#
# TABLE STRUCTURE FOR: shift
#

DROP TABLE IF EXISTS `shift`;

CREATE TABLE `shift` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shift` varchar(99) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `shift` (`id`, `shift`) VALUES (1, 'Shift Pagi');
INSERT INTO `shift` (`id`, `shift`) VALUES (2, 'Shift malam');
INSERT INTO `shift` (`id`, `shift`) VALUES (4, 'Shift Siang');


#
# TABLE STRUCTURE FOR: status
#

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(99) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO `status` (`id`, `status`) VALUES (1, 'Masuk');
INSERT INTO `status` (`id`, `status`) VALUES (2, 'Pulang');
INSERT INTO `status` (`id`, `status`) VALUES (3, 'Tidak Hadir');


