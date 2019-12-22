-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 12:46 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_daerah`
--

CREATE TABLE `data_daerah` (
  `Kd_daerah` char(12) NOT NULL,
  `Kota` varchar(30) DEFAULT NULL,
  `Provensi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_daerah`
--

INSERT INTO `data_daerah` (`Kd_daerah`, `Kota`, `Provensi`) VALUES
('D001', 'Makassar', 'Sulawesi Selatan'),
('D002', 'Gowa', 'Sulawesi Selatan'),
('D003', 'Takalar', 'Sulawesi Selatan'),
('D004', 'Jeneponto', 'Sulawesi Selatan'),
('D005', 'Bantaeng', 'Sulawesi Selatan'),
('D006', 'Bulukumba', 'Sulawesi Selatan'),
('D007', 'Selayar', 'Sulawesi Selatan'),
('D008', 'Sinjai', 'Sulawesi Selatan'),
('D009', 'Bone', 'Sulawesi Selatan'),
('D010', 'Maros', 'Sulawesi Selatan'),
('D011', 'Barru', 'Sulawesi Selatan'),
('D012', 'Soppeng', 'Sulawesi Selatan'),
('D013', 'Wajo', 'Sulawesi Selatan'),
('D014', 'Belopa', 'Sulawesi Selatan'),
('D015', 'Palopo', 'Sulawesi Selatan'),
('D016', 'Masamba', 'Sulawesi Selatan'),
('D017', 'Toraja', 'Sulawesi Selatan'),
('D018', 'Enrekang', 'Sulawesi Selatan'),
('D019', 'Sidrap', 'Sulawesi Selatan'),
('D020', 'Parepare', 'Sulawesi Selatan'),
('D021', 'pangkep', 'Sulawesi Selatan'),
('D022', 'Pinrang', 'Sulawesi Selatan'),
('D023', 'Polewali Mandar', 'Sulawesi Barat'),
('D024', 'Majene', 'Sulawesi Barat'),
('D025', 'Mamuju', 'Sulawesi Barat'),
('D026', 'Mamuju Utara', 'Sulawesi Barat'),
('D027', 'Mamuju Tengah', 'Sulawesi Barat'),
('D028', 'Mamasa', 'Sulawesi Barat');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_media`
--

CREATE TABLE `kategori_media` (
  `Kd_media` varchar(5) NOT NULL,
  `Nama_media` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_media`
--

INSERT INTO `kategori_media` (`Kd_media`, `Nama_media`) VALUES
('M001', 'Media Cetak'),
('M002', 'Media Online'),
('M003', 'Media Elektronik'),
('M004', 'Personal Salling'),
('M005', 'Pendekatan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id` int(5) NOT NULL,
  `alternatif` varchar(30) DEFAULT NULL,
  `C1` varchar(30) DEFAULT NULL,
  `C2` varchar(30) DEFAULT NULL,
  `C3` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `NPM` int(12) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `lulusan` enum('SMA','SMK','MA') DEFAULT NULL,
  `asal_daerah` varchar(30) DEFAULT NULL,
  `informasi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`NPM`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `lulusan`, `asal_daerah`, `informasi`) VALUES
(201020142, 'Tobey kristiantow', 'Laki-Laki', 'Polewali', '2019-04-27', 'SMA', 'Makassar', 'Media Online'),
(1486141011, 'Imes juanissa qorina', 'Perempuan', 'Cianjur', '1996-11-01', 'SMA', 'Belopa', 'Media Online'),
(2010020138, 'Muh Anas Kurniawan R', 'Laki-Laki', 'Makassar', '1991-05-20', 'SMA', 'Makassar', 'Media Cetak'),
(2015020043, 'Hasrullah', 'Laki-Laki', 'Ujung pandang', '1996-04-24', 'SMK', 'Makassar', 'Pendekatan'),
(2016020001, 'Alwi Aprianto', 'Laki-Laki', 'Sinjai', '1996-04-02', 'SMA', 'Sinjai', 'Pendekatan'),
(2016020013, 'Anitha Salim Muslimah', 'Perempuan', 'Jakarta', '1997-08-09', 'SMA', 'Makassar', 'Pendekatan'),
(2016020015, 'Andi Miftahuddin', 'Laki-Laki', 'Maros', '1997-12-31', 'SMA', 'Maros', 'Pendekatan'),
(2016020029, 'Zulhardi Mukhtar', 'Laki-Laki', 'Pangkep', '1995-04-30', 'SMK', 'Pangkep', 'Pendekatan'),
(2016020035, 'Nurpudail Adam', 'Laki-Laki', 'Barru', '1995-03-02', 'MA', 'Barru', 'Pendekatan'),
(2016020040, 'Firda', 'Perempuan', 'Mangkoso', '2019-09-27', 'SMA', 'Barru', 'Pendekatan'),
(2016020045, 'Muhaeimin ', 'Laki-Laki', 'Barru', '1998-01-10', 'SMK', 'Pangkep', 'Media Elektronik'),
(2016020046, 'Muhammad Chaerul Saharuddin', 'Laki-Laki', 'Ujung pandang', '1998-07-15', 'SMK', 'Makassar', 'Pendekatan'),
(2016020047, 'Shabrina Aisya Putri', 'Perempuan', 'Maros', '1998-03-03', 'SMK', 'Maros', 'Pendekatan'),
(2016020049, 'Husaema', 'Laki-Laki', 'Lamuru', '1996-04-11', 'SMA', 'Bone', 'Pendekatan'),
(2016020056, 'Dwitri Anugrah Insani', 'Perempuan', 'Makassar', '1998-05-25', 'SMK', 'Makassar', 'Media Cetak'),
(2016020059, 'Illyas setiawan', 'Laki-Laki', 'Mamasa', '1997-07-19', 'SMK', 'Mamasa', 'Pendekatan'),
(2016020060, 'Baqil Iman', 'Laki-Laki', 'Sungguminasa', '1997-01-05', 'SMK', 'Gowa', 'Media Elektronik'),
(2016020067, 'Suarni', 'Perempuan', 'Sinjai', '1999-02-12', 'SMA', 'Sinjai', 'Pendekatan'),
(2016020069, 'JUNAEDI', 'Laki-Laki', 'Ujung Pandang', '1996-08-30', 'SMA', 'Makassar', 'Pendekatan'),
(2016020075, 'NURJANNAH', 'Perempuan', 'Makassar', '1996-12-31', 'SMA', 'Jeneponto', 'Pendekatan'),
(2016020082, 'Sri Haryaningsi', 'Perempuan', 'Samata', '1999-02-18', 'SMA', 'Gowa', 'Pendekatan'),
(2016020097, 'Asdin pramana putra', 'Laki-Laki', 'Pinrang', '1996-08-16', 'SMK', 'Polewali Mandar', 'Media Cetak'),
(2016020098, 'Desi Maemuna Nur', 'Perempuan', 'Jeneponto', '1999-12-19', 'SMA', 'Jeneponto ', 'Pendekatan'),
(2016020099, 'Hasniar S.', 'Perempuan', 'Barobbo', '1996-06-12', 'SMA', 'Jeneponto', 'Pendekatan'),
(2016020102, 'Diah Aryati.Sir', 'Perempuan', 'Sinjai', '1998-03-12', 'SMA', 'Sinjai', 'Pendekatan'),
(2016020109, 'Muh Nawir Hans', 'Laki-Laki', 'Ujung pandang', '1991-02-24', 'SMK', 'Takalar', 'Media Cetak'),
(2016020118, 'HASRAWATI', 'Perempuan', 'SUNGGUMINASA', '1996-02-28', 'SMA', 'Gowa', 'Media Cetak'),
(2016020119, 'Ahdarul Muakhir', 'Laki-Laki', 'Kampung Baru', '1994-10-02', 'SMK', 'Bulukumba ', 'Pendekatan'),
(2016020120, 'Muh Nurhidayat', 'Laki-Laki', 'Makassar', '1997-12-27', 'SMK', 'Gowa', 'Pendekatan'),
(2016020122, 'Abd Kadir J', 'Laki-Laki', 'Ujung Pandang', '1989-03-27', 'SMK', 'Gowa', 'Pendekatan'),
(2016020132, 'Muhammad Agus Gasali', 'Laki-Laki', 'Ujung Pandang', '2019-08-15', 'SMK', 'Makassar', 'Media Cetak'),
(2016020144, 'jumadi yahya', 'Laki-Laki', 'ujung pandang', '1994-07-28', 'SMK', 'Makassar', 'Media Online'),
(2016020154, 'Hasmawati', 'Perempuan', 'Kalonding', '1997-05-05', 'SMA', 'Mamuju', 'Pendekatan'),
(2016020157, 'Fardian Wahyudi', 'Laki-Laki', 'Samarinda', '1996-05-22', 'SMK', 'Marowali', 'Pendekatan'),
(2016020158, 'Muhammad Achsan Usman', 'Laki-Laki', 'Takalar', '1998-12-23', 'SMK', 'Takalar', 'Personal Salling'),
(2016020159, 'Andi Muhammad Nurul Ichsan', 'Laki-Laki', 'Ujung pandang', '1998-05-24', 'SMK', 'Makassar', 'Pendekatan'),
(2016020165, 'Al gazali', 'Laki-Laki', 'Maros', '1995-09-09', 'SMK', 'Maros', 'Pendekatan'),
(2016020168, 'Dayanti', 'Perempuan', 'siwa', '1996-12-30', 'SMK', 'Wajo', 'Pendekatan'),
(2016020190, 'Zaenal tahir p', 'Laki-Laki', 'Bone', '2019-11-28', 'SMK', 'Bone', 'Pendekatan'),
(2016020191, 'Risma asriani', 'Perempuan', 'Bontorannu', '1999-11-06', 'SMK', 'Gowa', 'Media Cetak'),
(2016030015, 'Pebrianto', 'Laki-Laki', 'Makassar', '1998-02-17', 'SMK', 'Makassar', 'Pendekatan'),
(2016030020, 'Sukma Anugerah', 'Perempuan', 'Polewali mandar', '1998-03-28', 'SMK', 'Polewali Mandar', 'Media Cetak'),
(2016030022, 'Hendra', 'Laki-Laki', 'Ronfongan', '1997-03-19', 'SMK', 'Polewali Mandar', 'Media Cetak'),
(2016030023, 'Fauziah', 'Perempuan', 'Ujungpandang', '1999-01-07', 'SMA', 'Pangkep', 'Pendekatan'),
(2016030025, 'Muh. Ahsan', 'Laki-Laki', 'Kondo', '1998-06-26', 'SMK', 'Polewali Mandar', 'Media Cetak'),
(2016030026, 'Rifki Abdi Pujatra', 'Laki-Laki', 'Enrekang', '1998-05-18', 'SMA', 'Enrekang', 'Pendekatan'),
(2016030028, 'Retno saputra', 'Laki-Laki', 'Selayar', '1998-01-26', 'SMK', 'Selayar', 'Pendekatan'),
(2016030032, 'Huzaimah arandi ', 'Perempuan', 'Massila ', '1997-07-10', 'SMA', 'Bone', 'Media Cetak'),
(2016030034, 'Kristianto', 'Laki-Laki', 'Salubulo ', '1997-02-15', 'SMA', 'Mamasa', 'Media Cetak'),
(2016030039, 'Abdi Hafid', 'Laki-Laki', 'Bantaeng', '1999-10-28', 'SMA', 'Bantaeng', 'Pendekatan'),
(2016030045, 'Sarce sua', 'Perempuan', 'Kanan', '2019-09-30', 'SMK', 'Mamasa', 'Media Cetak'),
(2016030049, 'M Taufiq Hidayat', 'Laki-Laki', 'Makassar', '2019-04-20', 'SMK', 'Makassar', 'Pendekatan'),
(2016040001, 'Rina', 'Perempuan', 'Batu Nomi', '1997-06-22', 'SMA', 'Enrekang', 'Pendekatan'),
(2016040003, 'Riswandi R', 'Laki-Laki', 'Ujung Pandang', '1993-07-17', 'SMK', 'Makassar', 'Pendekatan'),
(2016040004, 'Hendrikus Nowo T', 'Laki-Laki', 'Makassar', '1997-04-20', 'SMA', 'Makassar', 'Pendekatan'),
(2016040005, 'Ericsson Randy Bangasalu', 'Laki-Laki', 'Soroako', '1995-04-26', 'SMA', 'Marowali', 'Media Online'),
(2016040009, 'SERLI YULIANA SARI', 'Perempuan', 'Ralla', '1998-03-28', 'SMA', 'Barru', 'Pendekatan'),
(2017010002, 'Sudarmanto', 'Laki-Laki', 'Sinjai', '1998-10-29', 'SMA', 'Sinjai', 'Pendekatan'),
(2017010005, 'Bela amriani', 'Perempuan', 'Lanna', '1997-08-07', 'SMA', 'Takalar', 'Pendekatan'),
(2017010006, 'NURHIDAYAH', 'Perempuan', 'Maros', '1999-12-15', 'SMK', 'Maros', 'Media Online'),
(2017010007, 'Andi Paduppa', 'Laki-Laki', 'Ujung pandang', '1998-04-14', 'SMK', 'Bone', 'Media Cetak'),
(2017010009, 'Muh. Syahrul Ramadhan', 'Laki-Laki', 'Pinrang', '1997-01-14', 'SMK', 'Pinrang', 'Media Cetak'),
(2017010011, 'Mustika', 'Perempuan', 'Batukara', '2019-08-23', 'SMA', 'Toraja', 'Pendekatan'),
(2017010012, 'Melvin bongi', 'Perempuan', 'Tengan', '1999-05-14', 'SMK', 'Toraja', 'Pendekatan'),
(2017010014, 'Ayu anggraeni rahman', 'Perempuan', 'Makassar', '1999-08-12', 'SMA', 'Makassar', 'Pendekatan'),
(2017010017, 'AYUNI FAUZIAH', 'Perempuan', 'Selayar', '1999-07-22', 'SMA', 'Selayar', 'Media Cetak'),
(2017010020, 'Rahmat Hidayat Hasbi', 'Laki-Laki', 'Jeneponto', '2000-02-16', 'SMA', 'Jeneponto', 'Media Cetak'),
(2017020008, 'Andi Alif Septihan', 'Laki-Laki', 'Bulukumba, Sulawesi Selatan', '1999-01-09', 'SMK', 'Bulukumba', 'Pendekatan'),
(2017020009, 'sarianti', 'Perempuan', 'pulau madu 13 desember1997', '1997-12-13', 'MA', 'Selayar', 'Pendekatan'),
(2017020012, 'Armita ramadhani putri amirudd', 'Perempuan', 'Makassar', '1999-01-12', 'SMA', 'Makassar', 'Pendekatan'),
(2017020013, 'Dewi Marzulinda', 'Perempuan', 'Makassar', '2000-01-03', 'SMA', 'Makassar', 'Media Cetak'),
(2017020019, 'Christopher fernando', 'Laki-Laki', 'Makassar', '1999-04-15', 'SMA', 'Makassar', 'Pendekatan'),
(2017020020, 'Rusdianto', 'Laki-Laki', 'Gattungan', '1999-01-05', 'SMK', 'Polewali mandar', 'Media Cetak '),
(2017020028, 'JUMRAH .R', 'Perempuan', 'Pandajaya', '1998-04-03', 'SMK', 'Enrekang', 'Pendekatan'),
(2017020030, 'Masda', 'Laki-Laki', 'tanah towa', '1997-01-04', '', 'Bulukumba', 'Pendekatan'),
(2017020032, 'Reinhard jacobs', 'Laki-Laki', 'Toraja', '1999-01-04', 'SMK', 'Toraja', 'Media Cetak'),
(2017020038, 'Muh. Nur Amrib', 'Laki-Laki', 'Takalar', '1999-01-12', 'SMK', 'Takalar', 'Pendekatan'),
(2017020039, 'Zakiyul fahmi.m', 'Laki-Laki', 'Bulukumba', '1998-01-01', 'SMA', 'Bulukumba', 'Pendekatan'),
(2017020049, 'ANDI ARIEF SURYADI', 'Laki-Laki', 'MAMUJU', '2000-03-19', 'SMK', 'Sinjai', 'Pendekatan'),
(2017020055, 'Nur Ika Putri', 'Perempuan', 'Jeneponto', '2001-05-13', 'MA', 'Jeneponto', 'Pendekatan'),
(2017020056, 'Yudith Mirsa Putra Bayu', 'Laki-Laki', 'Palopo Utara', '1994-03-05', 'SMK', 'Makassar', 'Media Cetak'),
(2017020058, 'WINDA NURUL ILMI', 'Perempuan', 'Tarampang', '1999-02-27', 'SMK', 'Bulukumba', 'Pendekatan'),
(2017020059, 'Sukrianto', 'Laki-Laki', 'Campagaya', '1998-05-28', 'SMK', 'Gowa', 'Pendekatan'),
(2017020061, 'Nurlitha Surti Azzahrah', 'Perempuan', 'Ujung Pandang', '1999-02-02', 'SMK', 'Makassar', 'Pendekatan'),
(2017020064, 'Nurhayati', 'Perempuan', 'Kalumpang', '1997-06-15', 'SMK', 'Bulukumba', 'Pendekatan'),
(2017020066, 'Fitriani', 'Perempuan', 'PAREPARE', '2000-01-13', 'SMA', 'Parepare', 'Media Cetak'),
(2017020073, 'Muh. Wahyu yadi saputra', 'Laki-Laki', 'Ujung pandang', '1998-11-18', 'SMK', 'Takalar', 'Pendekatan'),
(2017020078, 'Nuradha', 'Perempuan', 'Langkowa', '2019-03-29', 'MA', 'Gowa', 'Pendekatan'),
(2017020080, 'Muhammad fahmi ilyas', 'Laki-Laki', 'Pangkajene', '1999-09-25', 'SMA', 'Pangkep', 'Pendekatan'),
(2017020085, 'Alex Sander', 'Laki-Laki', 'Cessna Hitam', '1999-12-29', 'SMA', 'Masamba', 'Media Cetak'),
(2017020086, 'Rahamatullah', 'Laki-Laki', 'Sakui-kui', '2000-05-09', 'SMA', 'Bulukumba', 'Pendekatan'),
(2017020090, 'SYAIFUL. B', 'Laki-Laki', 'BANTAENG', '1998-12-29', 'SMK', 'Bantaeng', 'Pendekatan'),
(2017020092, 'St.masyita s', 'Perempuan', 'Makassar', '1998-11-07', 'SMA', 'Makassar', 'media cetak'),
(2017020093, 'Muh Fajar Ade Saputera', 'Laki-Laki', 'Sungguminasa', '1999-01-06', 'SMK', 'Gowa', 'Pendekatan '),
(2017020096, 'Sunarti ', 'Perempuan', 'Barru', '1999-12-02', 'SMK', 'Barru', 'Pendekatan'),
(2017020097, 'Krislew ivan marsem', 'Laki-Laki', 'Bumal', '1997-12-31', 'SMA', 'Mamasa', 'Pendekatan'),
(2017020110, 'Fiqri Haikal', 'Laki-Laki', 'Pangkep', '1999-04-25', 'SMA', 'Pangkep', 'Pendekatan'),
(2017020114, 'Daniel.Wim.Lm', 'Laki-Laki', 'Papua', '1994-10-08', 'SMA', 'Toraja', 'Pendekatan'),
(2017020115, 'Elsa Sera', 'Perempuan', 'Bulukumba', '2000-10-01', 'SMA', 'Bulukumba', 'Pendekatan'),
(2017020120, 'Asmawati ', 'Perempuan', 'Balumbungang', '1999-07-11', 'SMA', 'Jeneponto', 'Media online'),
(2017020122, 'Suharfina Ramadhani', 'Perempuan', 'Bulukumba', '1999-01-13', 'SMK', 'Bulukumba', 'Pendekatan'),
(2017020123, 'Andi Intan Sri Mulyati', 'Perempuan', 'Makassar', '2000-03-18', 'SMA', 'Makassar', 'Media Cetak'),
(2017020124, 'Risnayanti', 'Perempuan', 'Mamasa', '1997-07-01', 'SMA', 'Mamasa', 'Pendekatan'),
(2017020126, 'Fatimah Toon Az Zahra', 'Perempuan', 'Makassar', '1998-01-23', 'MA', 'Makassar', 'Pendekatan'),
(2017020128, 'Sumiati Salam', 'Perempuan', 'Tugondeng', '1999-04-03', 'SMA', 'Bulukumba', 'Media Online'),
(2017020134, 'MEILIN', 'Perempuan', 'Se\'pon', '1998-05-14', 'SMA', 'Belopa', 'Media Cetak'),
(2017020136, 'Ilham suprianto', 'Laki-Laki', 'Jeneponto', '1999-04-21', 'SMK', 'Jeneponto', 'Pendekatan'),
(2017020137, 'Wiwik Nasir', 'Perempuan', 'Pinrang', '1999-11-20', 'SMA', 'Pinrang', 'Pendekatan'),
(2017020139, 'Apryanti Dewi', 'Perempuan', 'Tomoni', '1998-04-10', 'SMA', 'Masamba', 'Media Cetak'),
(2017020150, 'Hafsah. Hs', 'Perempuan', 'Bantaeng', '1999-04-24', 'SMA', 'Bantaeng', 'Pendekatan'),
(2017020155, 'Nurul Hikmah.T', 'Perempuan', 'Sinjai', '2000-05-20', 'SMK', 'Sinjai', 'Media Cetak'),
(2017020159, 'Muhammad Arief Akbar', 'Laki-Laki', 'Ujungpandang', '1997-08-21', 'MA', 'Wajo', 'Pendekatan'),
(2017020161, 'Ruhaemi Bakri', 'Perempuan', '3 Desember 1996', '1996-12-03', 'SMA', 'Makassar', 'Pendekatan'),
(2017020162, 'Indah safitri karim', 'Perempuan', 'Makassar', '1997-08-26', 'SMK', 'Palopo', 'Media Online'),
(2017020168, 'Asra Nurradiah A', 'Perempuan', 'Ujung Pandang', '1997-11-08', 'SMK', 'Makassar', 'Pendekatan'),
(2017020169, 'Fajar', 'Laki-Laki', 'Makassar', '1999-02-13', 'SMK', 'Makassar', 'Pendekatan'),
(2017020170, 'Muhammad Afdal', 'Laki-Laki', 'Makassar', '1999-11-23', 'SMK', 'Makassar', 'Pendekatan'),
(2017020174, 'Firman Zulfikar', 'Laki-Laki', 'Ujung Pandaang', '1996-10-14', 'SMK', 'Makassar', 'Media Online'),
(2017020175, 'Asdar Ansar', 'Laki-Laki', 'Tibona', '1999-04-22', 'MA', 'Bulukumba', 'Pendekatan'),
(2017020181, 'Teresa Tasik', 'Perempuan', 'Pan', '1997-04-15', 'SMK', 'Toraja', 'Pendekatan'),
(2017020184, 'M. Nur Fahmi ', 'Laki-Laki', 'Ujung Pandang', '1998-08-18', 'SMK', 'Gowa', 'Pendekatan'),
(2017020185, 'Sri Puspita Syarir', 'Perempuan', 'Makassar', '1999-03-17', 'SMK', 'Maros', 'Pendekatan'),
(2017020187, 'Muhammad Fajri', 'Laki-Laki', 'Makassar', '1996-01-15', 'SMK', 'Makassar', 'Pendekatan'),
(2017020208, 'Hasrul Akbar', 'Laki-Laki', 'Parepare', '1983-01-08', 'SMK', 'Parepare', 'Pendekatan '),
(2017020209, 'Muhammad Nasrum', 'Laki-Laki', 'palopo', '1997-01-11', 'MA', 'Palopo', 'Media Cetak'),
(2017020219, 'Aulia Ramadani', 'Perempuan', 'Kalumpang', '1999-12-25', 'SMK', 'Bulukumba', 'Pendekatan'),
(2017020224, 'Ulfa Dewi yanti', 'Perempuan', 'Tompo bulu', '1999-01-25', 'MA', 'Bone', 'Pendekatan'),
(2017020225, 'Arruan Langi', 'Perempuan', 'Minanga', '1999-02-12', 'SMK', 'Mamasa', 'Pendekatan'),
(2017020227, 'Muhammad Ansar', 'Laki-Laki', 'Takalar', '1999-08-10', 'SMK', 'Takalar', 'Media Online'),
(2017020228, 'Muhammad sulfian latief', 'Laki-Laki', 'Pattallassang', '2019-06-27', 'SMK', 'Takalar', 'Pendekatan'),
(2017020229, 'Octavia Anggita Faeningsih', 'Perempuan', 'Makassar', '1997-01-10', 'SMA', 'Gowa', 'Pendekatan'),
(2017020230, 'Hikmawati', 'Perempuan', 'Sinjai', '2000-03-03', 'SMA', 'Sinjai', 'Pendekatan'),
(2017020237, 'Aditya Anugerah Pratama', 'Laki-Laki', 'Wajo', '1999-03-10', 'SMA', 'Wajo', 'Pendekatan'),
(2017020289, 'PLASIDUS MAI MEGA', 'Laki-Laki', 'Nangapanda', '2019-03-28', 'SMA', 'Enrekang', 'Pendekatan'),
(2017030004, 'ANDI MAKKURAGA A.M', 'Laki-Laki', 'MAKASSAR', '1998-11-08', 'SMA', 'Sinjai', 'Media Online'),
(2017030006, 'HANS ', 'Laki-Laki', 'Makassar', '1996-09-22', 'SMK', 'Makassar', 'Media Cetak'),
(2017030007, 'Muhajirin Fatona', 'Laki-Laki', 'Ujung Pandang', '1998-04-19', 'SMA', 'Jeneponto', 'Pendekatan'),
(2017030008, 'M. Erdiansyah', 'Laki-Laki', 'Makassar', '1999-09-17', 'SMK', 'Makassar', 'Pendekatan'),
(2017030011, 'Asna dewanti', 'Perempuan', 'Salutabang', '1999-10-31', 'SMA', 'Mamasa', 'Pendekatan'),
(2017030015, 'ALMERTA', 'Laki-Laki', 'PANGANDARAN', '1998-07-30', 'SMK', 'Mamasa', 'Media Online'),
(2017030016, 'Muhammad Ilyas Syahmi', 'Perempuan', 'Benteng selayar', '1998-05-08', 'SMK', 'Selayar', 'Pendekatan'),
(2017030027, 'Rivaldi putra', 'Laki-Laki', 'Ujung pandang', '1997-03-03', 'MA', 'Sinjai', 'Media Online '),
(2017030032, 'Nur ridho fitrah', 'Laki-Laki', 'Makassar', '2000-01-06', 'SMA', 'Jeneponto', 'Pendekatan'),
(2017030033, 'Alfiana fira', 'Perempuan', 'Labbakkang ', '1998-10-28', 'SMA', 'Gowa', 'Pendekatan'),
(2017030034, 'Parmanto MB', 'Laki-Laki', 'Makassar', '1999-04-20', 'SMA', 'Makassar', 'Pendekatan'),
(2017040009, 'Ani Anggraeni', 'Perempuan', 'Sinjai', '2019-10-27', 'SMA', 'Sinjai', 'Pendekatan'),
(2017040012, 'Akbar aras nur', 'Laki-Laki', 'Takalar', '1997-08-29', 'SMA', 'Takalar', 'Media Online'),
(2017040028, 'Andi nur rizkha meliunita r la', 'Perempuan', 'Sinjai', '2000-01-25', 'SMA', 'Sinjai', 'Pendekatan'),
(2017050006, 'Agus Prasetio', 'Laki-Laki', 'Bulukumba', '2019-05-06', 'SMA', 'Bulukumba', 'Pendekatan'),
(2017050008, 'Ayu Lestari', 'Perempuan', 'Salubulo', '1996-05-27', 'SMA', 'Mamasa', 'Pendekatan'),
(2017050009, 'ILHAM SETIAWAN', 'Laki-Laki', 'Salutambun', '1999-01-08', 'SMA', 'Mamasa', 'Pendekatan'),
(2017050016, 'Meygi Eka Putri Sunarto', 'Perempuan', 'Makasaar', '2000-05-07', 'SMA', 'Makassar', 'Pendekatan'),
(2018010010, 'Agustina Tasik Pasau', 'Perempuan', 'Sepang', '1999-01-08', 'SMK', 'Mamasa', 'Media Cetak'),
(2018010013, 'Lidia ningsi', 'Perempuan', 'Petangunan', '1998-09-10', 'SMK', 'Mamasa', 'Pendekatan'),
(2018020003, 'Muh.Zulfikar Khalik', 'Laki-Laki', 'Makassar', '1999-10-25', 'SMK', 'Makassar', 'Pendekatan'),
(2018020004, 'Adrian ', 'Laki-Laki', 'Ujung Pandang', '1999-10-21', 'SMA', 'Makassar', 'Media Cetak'),
(2018020005, 'Irfandi', 'Laki-Laki', 'Jingaraka', '1999-07-02', 'SMK', 'Makassar', 'Pendekatan'),
(2018020006, 'Dian irwanti', 'Perempuan', 'Makassar', '2001-01-01', 'SMA', 'Makassar', 'Media Cetak'),
(2018020007, 'Muhammad Riswan', 'Laki-Laki', 'Keera', '2000-03-10', 'SMA', 'Wajo', 'Pendekatan'),
(2018020008, 'Muhammad Akbar', 'Laki-Laki', 'Soppeng', '2000-06-30', 'SMK', 'Soppeng ', 'Media Online'),
(2018020010, 'Esron', 'Laki-Laki', 'Su\'ding', '2000-03-19', 'SMK', 'Toraja', 'Media Cetak'),
(2018020012, 'Kiki Reki Astuti', 'Perempuan', 'Onemalangka', '1999-03-27', 'SMA', 'Selayar', 'Pendekatan'),
(2018020019, 'Ardilla Ayu Oktavia', 'Perempuan', 'Makassar', '1999-10-20', 'SMK', 'Makassar', 'Pendekatan'),
(2018020021, 'Nurul Fajruu Ashadiq ', 'Laki-Laki', 'Masumpu', '2019-08-23', 'SMK', 'Bone', 'Media Online'),
(2018020022, 'Salma Rasyid', 'Laki-Laki', 'Makassar', '1999-12-16', 'SMA', 'Makassar', 'Pendekatan'),
(2018020027, 'Musdalifa', 'Perempuan', 'Sinjai', '2000-01-04', 'SMA', 'Sinjai', 'Pendekatan '),
(2018020029, 'Siti Maharani', 'Perempuan', 'Kalumpang', '2000-04-06', 'SMK', 'Bulukumba', 'Pendekatan'),
(2018020031, 'Firman sudarsono', 'Laki-Laki', 'Borogloe', '2019-03-02', 'SMK', 'Jeneponto', 'Pendekatan'),
(2018020033, 'Muhammad Faizal', 'Laki-Laki', 'Kasuarang', '1999-12-31', 'SMK', 'Pangkep', 'Media Online'),
(2018020034, 'Kurnia', 'Perempuan', 'Balang Loe', '1999-06-24', 'SMA', 'Jeneponto', 'Pendekatan'),
(2018020036, 'Muhammad Akbar.S', 'Laki-Laki', 'Enrekang', '2000-03-23', 'MA', 'Enrekang', 'Pendekatan'),
(2018020037, 'Haschandra Binata', 'Laki-Laki', 'Majene', '1998-03-18', 'SMK', 'Majene ', 'Media online'),
(2018020040, 'Agung Dwi Darmawan', 'Laki-Laki', 'Makassar', '1999-04-14', 'SMA', 'Makassar', 'Media Cetak'),
(2018020042, 'Rifqi Aspakar', 'Laki-Laki', 'Kalumpang', '2000-04-19', 'SMK', 'Bulukumba', 'Pendekatan'),
(2018020044, 'Alfandi Ariyawan ', 'Laki-Laki', 'Makassar', '2001-07-31', 'SMK', 'Makassar', 'Pendekatan'),
(2018020045, 'Cahyo Prasetyo', 'Laki-Laki', 'Sumarorong', '1999-09-22', 'SMA', 'Mamasa', 'Pendekatan'),
(2018020048, 'Indichristin', 'Laki-Laki', 'Tarinding', '1999-09-27', 'SMA', 'Mamasa', 'Pendekatan'),
(2018020049, 'Primadi Artasasta', 'Laki-Laki', 'Mamasa', '2000-04-12', 'SMA', 'Mamasa', 'Pendekatan'),
(2018020050, 'Aldi Agusman', 'Laki-Laki', 'Gowa ', '2000-08-17', 'SMA', 'Gowa', 'Media Online'),
(2018020053, 'Darma Agustin', 'Perempuan', 'Takalala', '1999-08-28', 'SMK', 'Soppeng ', 'Pendekatan'),
(2018020056, 'Mushawwir', 'Laki-Laki', 'Mangadu', '2000-04-27', 'SMK', 'Takalar', 'Media Online'),
(2018020057, 'Renaldi', 'Laki-Laki', 'Makassar', '2000-10-11', 'SMK', 'Makassar', 'Media Online'),
(2018020058, 'Nur Ikhsan', 'Laki-Laki', 'Sungguminasa', '2000-08-17', 'SMA', 'Masamba', 'Pendekatan'),
(2018020060, 'Angga Saputra', 'Laki-Laki', 'Makassar', '1999-07-01', 'SMK', 'Makassar', 'Pendekatan'),
(2018020061, 'Nadia Amalia', 'Perempuan', 'Makassar', '2002-02-28', 'SMA', 'Jeneponto', 'Media Cetak'),
(2018020064, 'Gunawan suaeb', 'Laki-Laki', 'Watampone', '1999-10-05', 'SMA', 'Bone', 'Pendekatan'),
(2018020069, 'Sabil ', 'Laki-Laki', 'Sinjai', '1999-11-05', 'SMA', 'Sinjai', 'Pendekatan'),
(2018020070, 'Suardi', 'Laki-Laki', 'Salubulo', '1998-10-20', 'SMA', 'Mamasa', 'Pendekatan'),
(2018020071, 'Zulkifli yamin', 'Laki-Laki', 'Ujung Pandang', '1998-02-10', 'SMK', 'Makassar', 'Pendekatan'),
(2018020072, 'Agustiawan', 'Laki-Laki', 'Bulukumba', '1999-10-17', 'SMA', 'Bulukumba', 'Pendekatan'),
(2018020073, 'Rahmat Ramadhan', 'Laki-Laki', 'Sinjai', '2000-12-08', 'SMA', 'Sinjai', 'Media Online'),
(2018020074, 'Nasaruddin', 'Laki-Laki', 'Bonelambere', '1999-10-05', 'SMA', 'Selayar', 'Media Online'),
(2018020077, 'Dwiky Darmawansyah', 'Laki-Laki', 'Makassar', '1999-09-09', 'MA', 'Makassar', 'Pendekatan'),
(2018020079, 'Ilham Akbar M', 'Laki-Laki', 'Makassar', '2000-04-04', 'SMK', 'Makassar', 'Media Online'),
(2018020080, 'Indriani Nurazizah', 'Perempuan', 'Malino', '2000-05-23', 'MA', 'Gowa', 'Pendekatan'),
(2018020082, 'Hasriani', 'Perempuan', 'Sinjai', '1999-12-12', 'SMA', 'Sinjai', 'Pendekatan'),
(2018020083, 'Fathur Rahman Abdullah', 'Laki-Laki', 'Ujung Pandang', '1999-01-05', 'SMA', 'Gowa', 'Pendekatan'),
(2018020084, 'Rahmat Hidayat', 'Laki-Laki', 'Limbung', '2000-05-13', 'SMK', 'Gowa', 'Pendekatan'),
(2018020091, 'Savira Hasan', 'Perempuan', 'Makassar', '1999-11-29', 'SMK', 'Makassar', 'Media Online'),
(2018020092, 'Yuliana Aprilia Anwar', 'Perempuan', 'Dusun Polewali', '2000-07-21', 'SMK', 'Pinrang', 'Pendekatan'),
(2018020094, 'Arafik Y. Baito', 'Laki-Laki', 'Mamuju', '1997-08-10', 'SMA', 'Mamuju', 'Pendekatan'),
(2018020095, 'Andito', 'Laki-Laki', 'Ara', '1998-01-10', 'SMK', 'Bulukumba', 'Pendekatan'),
(2018020096, 'Hasniati', 'Perempuan', 'Bantaeng', '2000-05-14', 'SMA', 'Bantaeng', 'Pendekatan'),
(2018020098, 'Amelia Fitriany', 'Perempuan', 'Darubiah', '2000-12-04', 'SMA', 'Bulukumba', 'Media Online'),
(2018020099, 'Zulfikar limpah', 'Laki-Laki', 'Masamba', '2000-10-18', 'SMA', 'Masamba', 'Pendekatan'),
(2018020100, 'Rifki', 'Laki-Laki', 'Pongo', '2000-08-09', 'SMA', 'Masamba', 'Pendekatan'),
(2018020101, 'Muh arfah wahlil pratama', 'Laki-Laki', 'Kalumpang', '2019-01-10', 'SMK', 'Bulukumba', 'Pendekatan'),
(2018020102, 'Hikmah Hardiyanti', 'Perempuan', 'Pangkep', '2000-10-06', 'SMA', 'Pangkep', 'Media Online'),
(2018020103, 'Hairin annisa', 'Perempuan', 'Tamasongo', '2000-11-15', 'MA', 'Jeneponto', 'Pendekatan'),
(2018020105, 'Muhammad Nur Rizki', 'Laki-Laki', 'Ujung pandang', '1999-10-23', 'SMK', 'Makassar', 'Media Cetak'),
(2018020106, 'Ahmadfauzy', 'Laki-Laki', 'Makassar', '2000-04-05', 'SMK', 'Makassar', 'Pendekatan'),
(2018020128, 'Sitratul munahbi', 'Laki-Laki', 'Lajoa', '2000-10-18', 'SMK', 'Soppeng', 'Pendekatan'),
(2018020131, 'Alpriani', 'Perempuan', 'Makassar', '1999-04-12', 'SMK', 'Makassar', 'Media Online'),
(2018020132, 'Dwi Wahyudi B', 'Laki-Laki', 'Ujung Pandang', '1998-09-07', 'SMK', 'Makassar', 'Pendekatan'),
(2018020135, 'Andi shaifullah', 'Laki-Laki', 'Ujung pandang', '1999-02-10', 'SMK', 'Makassar', 'Pendekatan'),
(2018020136, 'Andi Muh Farid Wajdi', 'Laki-Laki', 'Makassar', '1998-11-01', 'SMK', 'Makassar', 'Media Cetak'),
(2018020138, 'Rezkyani', 'Perempuan', 'Pinrang ', '2001-06-21', 'SMA', 'Sinjai', 'Pendekatan'),
(2018020141, 'Wais Alqorni', 'Laki-Laki', 'Makassar', '2000-02-22', 'SMK', 'Makassar', 'Pendekatan'),
(2018020143, 'Arda Farid', 'Laki-Laki', 'Malangka', '1997-12-26', 'SMK', 'Bone', 'Pendekatan'),
(2018020145, 'Mabnur Imran', 'Laki-Laki', 'Ujung Pandang', '1998-03-27', 'SMK', 'Makassar', 'Media Online'),
(2018020146, 'Hasmawati tombi linggi\'', 'Perempuan', 'Tana Toraja ', '1993-12-28', 'SMK', 'Toraja', 'Media Cetak'),
(2018020149, 'Herodion Windi', 'Laki-Laki', 'Salu Tambun', '1999-03-10', 'SMA', 'Mamasa', 'Pendekatan'),
(2018020157, 'Wahyudin Arrasid', 'Laki-Laki', 'Ujung pandang', '1999-06-22', 'SMK', 'Makassar', 'Media Online'),
(2018020158, 'Ciputran Gunawan', 'Laki-Laki', 'Ujung Pandang', '1997-03-13', 'SMA', 'Makassar', 'Media Online'),
(2018020160, 'M.Ihsan', 'Laki-Laki', 'Makassar', '1995-12-27', 'SMA', 'Makassar', 'Media Online'),
(2018020182, 'Muh. Akbar Razak', 'Laki-Laki', 'Ujung pandang', '1995-12-06', 'SMK', 'Soppeng', 'Media Cetak'),
(2018020187, 'Hafsah', 'Perempuan', 'Buludoang', '1997-08-30', 'SMK', 'Jeneponto', 'Media Online'),
(2018020210, 'A. RAI EKA PRASAKTI', 'Laki-Laki', 'Ujung pandang', '1997-10-01', 'SMK', 'Makassar', 'Pendekatan'),
(2018020220, 'FITRIANI', 'Perempuan', 'SINJAI', '1997-07-07', 'SMA', 'Sinjai', 'Pendekatan'),
(2018020228, 'SURIYANI', 'Perempuan', 'BULUKUMBA', '1997-08-02', 'SMA', 'Bulukumba', 'Pendekatan'),
(2018020231, 'M. Firas', 'Laki-Laki', 'Makassar', '1995-03-17', 'SMK', 'Makassar', 'Media Online'),
(2018020244, 'Aris Munandar', 'Laki-Laki', 'Gowa', '1996-12-18', 'SMK', 'Gowa', 'Pendekatan'),
(2018030001, 'Taufik Dwi Anada', 'Laki-Laki', 'Kabere', '2000-01-29', 'SMK', 'Enrekang', 'Pendekatan'),
(2018030002, 'Rian Sultan Asizan', 'Laki-Laki', 'Pinrang', '2000-11-30', 'SMK', 'Pinrang', 'Pendekatan'),
(2018030003, 'Fahri Ramadhan', 'Laki-Laki', 'Makassar', '2000-12-02', 'SMK', 'Gowa', 'Media Cetak'),
(2018030004, 'Adullah', 'Laki-Laki', 'Kendari', '2000-10-08', 'SMK', 'Maros', 'Media Online'),
(2018030006, 'Indah sari idrus', 'Perempuan', 'Takalar', '2001-10-12', 'SMK', 'Takalar', 'Media Cetak'),
(2018030007, 'Rahman Azis', 'Laki-Laki', 'Takalar', '2000-11-28', 'SMK', 'Takalar', 'Media Online'),
(2018030008, 'Dedi Syam', 'Laki-Laki', 'Limbo', '1999-07-31', 'SMK', 'Selayar', 'Pendekatan'),
(2018030010, 'Verawati', 'Perempuan', 'Bone', '1999-01-09', 'SMA', 'Bone', 'Pendekatan'),
(2018030012, 'Atri Ramadani', 'Perempuan', 'Bulukumba', '1998-03-26', 'SMA', 'Bulukumba', 'Pendekatan'),
(2018030013, 'Akmal Hidayat A.', 'Laki-Laki', 'Toli-Toli', '1997-05-06', 'SMK', 'Jeneponto', 'Media Online'),
(2018030014, 'Asrul', 'Laki-Laki', 'Makassar', '1999-09-05', 'SMA', 'Makassar', 'Pendekatan'),
(2018030016, ' Muhammad Nur Ilman M', 'Laki-Laki', 'Parepare', '1999-09-17', 'MA', 'Barru', 'Media Online'),
(2018030017, 'Sulfa Mita sari', 'Perempuan', 'Benteng Malewang', '2000-02-18', 'SMK', 'Bulukumba', 'Pendekatan'),
(2018030018, 'Andi Fuly Ekaningrat', 'Laki-Laki', 'Bulukumba', '1999-09-10', 'SMA', 'Bulukumba', 'Pendekatan'),
(2018030020, 'Akbar Rusadi', 'Laki-Laki', 'Bulukumba', '1996-07-27', 'SMA', 'Bulukumba', 'Media Online'),
(2018030021, 'Muh Ahriangga', 'Laki-Laki', 'Selayar', '1999-06-12', 'SMK', 'Selayar', 'Media Online'),
(2018030023, 'Jesy Grasela', 'Perempuan', 'Makale', '1999-11-23', 'SMA', 'Toraja', 'Media Online'),
(2018030024, 'Yustin', 'Perempuan', 'Limbang Sangpolo', '1999-07-26', 'SMA', 'Toraja', 'Pendekatan'),
(2018030026, 'Elieser Lorensius Tulak', 'Laki-Laki', 'Makassar', '1999-09-05', 'SMA', 'Makassar', 'Pendekatan'),
(2018030027, 'MUH.Rivaldi', 'Laki-Laki', 'Sungguminasa', '1999-06-26', 'SMA', 'Gowa', 'Media Online'),
(2018030028, 'Zhubhan Azmin', 'Laki-Laki', 'Bone', '2000-11-18', 'SMK', 'Bone', 'Pendekatan'),
(2018030032, 'MUHAMMAD SYAHRUL. S', 'Laki-Laki', 'PAO, Pinrang', '1998-01-12', 'SMK', 'Pinrang', 'Media Online'),
(2018030033, 'Ahmad Nurwahid', 'Laki-Laki', 'TAKALAR', '2000-10-15', 'SMK', 'Takalar', 'Pendekatan'),
(2018030034, 'MUHAMMAD IKRAM RASYID', 'Laki-Laki', 'Mamuju', '1999-04-27', 'SMK', 'Takalar', 'Pendekatan'),
(2018030035, 'Muh.Fahrul Muslimin', 'Laki-Laki', 'Makassar', '1999-02-11', 'SMK', 'Makassar', 'Pendekatan'),
(2018030038, 'Seti barung', 'Laki-Laki', 'Makale', '2019-10-29', 'SMK', 'Bone', 'Media Elektronik'),
(2018030041, 'Rifaldry  Budiman', 'Laki-Laki', 'Makassar ', '2000-01-23', 'SMK', 'Makassar', 'Media Cetak'),
(2018030046, 'Serdision M.Saiye', 'Laki-Laki', 'Makassar', '2000-05-25', 'SMA', 'Makassar', 'Pendekatan'),
(2018030047, 'Juhelvin Brilianus M', 'Laki-Laki', 'Mandai', '2000-05-03', 'SMA', 'Makassar', 'Pendekatan'),
(2018040003, 'Andi Musbah Aksani', 'Laki-Laki', 'Bulukumba', '1998-08-24', 'SMA', 'Bulukumba', 'Pendekatan'),
(2018040006, 'Nurul Fatimah Amirani', 'Perempuan', 'Pinrang', '2000-10-02', 'MA', 'Polewali mandar', 'Pendekatan'),
(2018040011, 'Fermin Indryani', 'Perempuan', 'Bambangbuda', '2000-03-10', 'SMK', 'Mamasa', 'Pendekatan'),
(2018040012, 'Dyan Anugrah E-Fahmi', 'Perempuan', 'Bulukumba', '2000-05-18', 'SMA', 'Bulukumba', 'Media Cetak'),
(2018040013, 'Yuliyan Sulistri', 'Perempuan', 'Cirebon', '1999-07-20', 'SMA', 'Bulukumba', 'Pendekatan'),
(2018040016, 'Yusril Randa Liling', 'Laki-Laki', 'Kondo', '2000-09-27', 'SMA', 'Toraja', 'Pendekatan'),
(2018040019, 'Erika Nur Aprillia', 'Perempuan', 'Bima', '2000-04-08', 'SMK', 'Makassar', 'Media Online'),
(2018040021, 'Saenal', 'Laki-Laki', 'Makassar', '1996-08-08', 'SMA', 'Makassar', 'Media Cetak'),
(2018040024, 'Khofifa Putri Tiasa', 'Perempuan', 'Tawaro tebota', '2000-06-03', 'SMK', 'Makassar', 'Pendekatan'),
(2018040027, 'Yeti Ramayani', 'Perempuan', 'Koang', '2000-01-03', 'SMK', 'Mamuju', 'Pendekatan'),
(2018040028, 'Andriani', 'Perempuan', 'Luwu Timur', '2000-05-15', 'SMA', 'Marowali', 'Pendekatan'),
(2018040029, 'Siti Maharani', 'Perempuan', 'Kalumpang', '2000-04-06', 'SMK', 'Bulukumba', 'Media Cetak'),
(2018050004, 'Dita lestari', 'Perempuan', 'Lita', '1998-09-07', '', 'Bone', 'Pendekatan '),
(2018050006, 'Novi Wahdania', 'Perempuan', 'Sinjai', '2000-01-11', 'SMA', 'Mamuju', 'Media Cetak'),
(2018050009, 'Nur afni mentari', 'Perempuan', 'Makassar', '1994-01-05', 'SMK', 'Selayar', 'Pendekatan'),
(2018050010, 'Yasnilia Jumiati A.Lolo', 'Perempuan', 'Makassar', '2000-01-05', 'SMA', 'Gowa', 'Media Cetak'),
(2018050012, 'St.khairunnisa', 'Perempuan', 'Jeneponto', '2019-05-23', 'SMA', 'Jeneponto', 'Media Cetak'),
(2018050015, 'Amelia Benita Rachman', 'Perempuan', 'Bontang, kalimantan timur', '2000-03-01', 'SMK', 'Gowa', 'Media Online'),
(2018050016, 'Bahrani', 'Perempuan', 'Sinjai', '2019-01-07', 'SMA', 'Sinjai', 'Pendekatan'),
(2018050019, 'Rezky inriani k', 'Perempuan', 'Makassar', '2000-01-07', 'SMA', 'Makassar', 'Pendekatan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` varchar(5) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `jabatan`, `password`) VALUES
('P001', 'Guntur', 'Ketua Panitia', 'admin'),
('P002', 'Absri', 'Sekertaris Panitia', '010101'),
('P003', 'Mustika ', 'Bendahara', '010101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_daerah`
--
ALTER TABLE `data_daerah`
  ADD PRIMARY KEY (`Kd_daerah`);

--
-- Indexes for table `kategori_media`
--
ALTER TABLE `kategori_media`
  ADD PRIMARY KEY (`Kd_media`) USING BTREE;

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`NPM`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
