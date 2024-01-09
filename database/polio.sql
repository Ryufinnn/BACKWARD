-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2017 at 12:15 PM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pakar_jeruk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `nama`, `phone`, `email`) VALUES
(1, 'admin', 'admin', 'sri rahayu rozalina', '09765', 'srahayu434@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
  `id_gejala` int(3) NOT NULL AUTO_INCREMENT,
  `kode_gejala` varchar(10) NOT NULL,
  `nama_gejala` text NOT NULL,
  PRIMARY KEY (`id_gejala`),
  UNIQUE KEY `kode_gejala` (`kode_gejala`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `gejala`
--



-- --------------------------------------------------------

--
-- Table structure for table `hasil_konsultasi`
--

CREATE TABLE IF NOT EXISTS `hasil_konsultasi` (
  `id_konsultasi` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `konsultasi` int(10) NOT NULL,
  `id_gejala` int(3) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_konsultasi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=288 ;

--
-- Dumping data for table `hasil_konsultasi`
--


-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE IF NOT EXISTS `keterangan` (
  `id_keterangan` int(10) NOT NULL AUTO_INCREMENT,
  `id_konsultasi` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kode_penyakit` varchar(4) NOT NULL,
  `tgl_konsultasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_keterangan`),
  UNIQUE KEY `id_konsultasi` (`id_konsultasi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `keterangan`
--


-- --------------------------------------------------------

--
-- Table structure for table `kota`
--


-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `kode_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `solusi` text NOT NULL,
  PRIMARY KEY (`kode_penyakit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--


-- --------------------------------------------------------

--
-- Table structure for table `penyakit_gejala`
--

CREATE TABLE IF NOT EXISTS `penyakit_gejala` (
  `id_pg` int(3) NOT NULL AUTO_INCREMENT,
  `kode_penyakit` varchar(10) NOT NULL,
  `id_gejala` int(3) NOT NULL,
  PRIMARY KEY (`id_pg`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=304 ;

--
-- Dumping data for table `penyakit_gejala`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

