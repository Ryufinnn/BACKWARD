-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2017 at 03:31 PM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_polio`
--

-- --------------------------------------------------------

--
-- Table structure for table `acount`
--

CREATE TABLE IF NOT EXISTS `acount` (
  `id_acount` int(10) NOT NULL AUTO_INCREMENT,
  `nm_depan` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `nm_belakang` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jk` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('1','0') COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_acount`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=50 ;

--
-- Dumping data for table `acount`
--

INSERT INTO `acount` (`id_acount`, `nm_depan`, `nm_belakang`, `email`, `password`, `jk`, `tgl_lahir`, `alamat`, `aktif`) VALUES
(47, 'edo', '081267090592', 'edo@yahoo.com', '12345', 'Laki-Laki', '2008-12-19', 'Padang', '1'),
(49, 'Rafi', '082170214488', 'rafi', '12345', 'Laki-Laki', '1992-03-03', 'Padang<br>', '0'),
(48, 'fajri', '082170214488', 'fajri@gmail.com', '12345', 'Laki-Laki', '2005-09-06', 'Padang', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama_lengkap`, `email`, `no_telp`, `id_session`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Adminweb@yahoo.com', '082170392980', 'qff682ovbn1tlvc9s4ih7t70u6');

-- --------------------------------------------------------

--
-- Table structure for table `master_gejala`
--

CREATE TABLE IF NOT EXISTS `master_gejala` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `master_gejala` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gejala` (`master_gejala`),
  KEY `master_gejala` (`master_gejala`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `master_gejala`
--

INSERT INTO `master_gejala` (`id`, `master_gejala`) VALUES
(1, 'Tidak enak badan/demam'),
(2, 'Anoreksi/gangguan makan/tidak nafsu makan'),
(3, 'Mual dan muntah'),
(4, 'Sakit perut'),
(5, 'Sembelit / buang air besar kurang dari 3 kali dalam seminggu'),
(6, 'Nyeri tenggorokan'),
(7, 'Nyeri pada kepala'),
(8, 'Nyeri pada abdomen / rongga perut'),
(9, 'Lesu dan sensitif'),
(10, 'kram otot pada leher dan punggung'),
(11, 'otot terasa lembek'),
(12, 'kekebalan tubuh menurun drastis kibat inveksi virus '),
(13, 'sesak pada bagian dada'),
(14, 'lemah pada otot tungkai dan tubuh,Gerak reflex pada otot mengurang bahkan menghilang'),
(15, 'kelemahan otot leher'),
(16, 'tidak adanya kekebalan alami batang otak'),
(17, 'terkadang kejang-kejang'),
(18, 'tergantungnya penglihatan'),
(19, 'Pengerutan otot menyebabkan tulang-tulang merapat'),
(20, 'tergantungnya pendengaran akibat saraf auditori karena terserang virus'),
(21, 'kesulitan dalam menelan akibat saraf glossofaringeal tidak berfungsi dengan normal'),
(22, 'sesak nafas / pernafasan terganggu'),
(23, 'banyak terdapat cairan pada paru-paru');

-- --------------------------------------------------------

--
-- Table structure for table `master_penyakit`
--

CREATE TABLE IF NOT EXISTS `master_penyakit` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `master_penyakit` varchar(50) NOT NULL,
  `nilai_temuan` smallint(6) DEFAULT NULL,
  `definisi` text NOT NULL,
  `solusi` text NOT NULL,
  `nilai_temuan1` int(20) NOT NULL,
  `nilai_temuan2` int(10) NOT NULL,
  `nilai_temuan3` int(10) NOT NULL,
  `nilai_temuan4` int(10) NOT NULL,
  `nilai_temuan5` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `master_penyakit` (`master_penyakit`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `master_penyakit`
--

INSERT INTO `master_penyakit` (`id`, `master_penyakit`, `nilai_temuan`, `definisi`, `solusi`, `nilai_temuan1`, `nilai_temuan2`, `nilai_temuan3`, `nilai_temuan4`, `nilai_temuan5`) VALUES
(1, 'Polio non-paralisis', 66, 'Polio non-paralisis adalah tipe polio yang tidak menyebabkan kelumpuhan.        ', '<br>\r\n1.	Cukup diberi analgenetika dan sedatifa <br>\r\n2.	diet adekuat <br>\r\n3.	istirahat sampai suhu normal untuk beberapa hari, sebaliknya dicegah beraktifitas yang berlebihan selama 2 bulan dan 2 bulan kemudian diperiksa neuroskletal secara teliti <br>\r\n4.	di kompres dengan air hangat selama 15-30 menit, setiap 2-4 jam\r\n', 6, 10, 15, 21, 9),
(2, 'Polio paralisis spinal', 70, 'tipe polio yang paling parah dan dapat menyebabkan kelumpuhan. Beberapa penderita polio paralisis bisa mengalami kelumpuhan dengan sangat cepat atau bahkan dalam hitungan jam saja setelah terinfeksi dan kadang-kadang kelumpuhan hanya terjadi pada salah satu sisi tubuh. Saluran pernapasan mungkin bisa terhambat atau tidak berfungsi, sehingga membutuhkan penanganan medis darurat. ', '<br>\r\n1.	istirahat total selama 7 hari atau sedikitnya fase akut dilampaui <br>\r\n2.	selama fase akut kebersihan mulut dijaga <br>\r\n3.	perubahan posisi penderita dilakukan dengan menyangga persendian tanpa menyentu otot dan hindari gerakan memeluk punggung <br>\r\n4.	fisioterapi dilakukan sedini mungkin sesudah fase akut. Mulai dengan latihan pasif dengan maksud untuk mencegah terjainya deformitas <br>\r\n5.	Akupuntur dilakukan sedini mungkin <br>\r\n6.	interferon dilakukan sedini mungkin,untuk mencegah terjadinya paralitik progresif.\r\n', 16, 28, 41, 22, 12),
(3, 'Polio bulbar (syndrom pasca-polio)', 183, 'Sindrom pasca-polio biasanya menimpa orang-orang yang sebelumnya pernah menderita penyakit polio', '<br>\r\n1.	Membutuhkan perawatan dirumah sakit <br>\r\n2.	Perawatan khusus terhadap penderita  paralis bulbar , seperti pemberian makan dalam bentuk padat atau semisolid <br>\r\n3.	Selama fase akut dan berat, dilakukan drainasepostural dengan posisi kaki lebih tinggi (20-25)8, muka pada suatu posisi untuk mencegah terjadi aspirasi, pengisapan lendir dilakukan secara teratur dan hati-hati kalau perlu trakeostrom\r\n', 25, 41, 58, 19, 9);
