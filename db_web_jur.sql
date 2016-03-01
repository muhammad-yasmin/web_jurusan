-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2016 at 05:10 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web_jur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `level` int(1) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telpon` varchar(15) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `level`, `username`, `pass`, `nama`, `alamat`, `email`, `telpon`, `foto`) VALUES
(1, 1, 'yasmin', '27c207ca64db8e49761f1136c6dd577c', 'Muhammad Yasmin', 'JL. Laksda Adi Sucipto Gg 7A/17', 'yasminmuh2615@gmail.com', '+6282232200837', '12006380_1704005389828672_8747240905927180407_n(1).jpg'),
(2, 1, 'ine', 'adminine', 'Refine A', NULL, NULL, NULL, NULL),
(3, 1, 'yuli', 'c3fdc294dd6e2073f064344d231503db', 'Muhammad Yuli A', 'Surabaya', '', '08970867223', 'Dino_blue(1).ico'),
(4, 1, 'farid', 'adminfarid', 'Miftakh Farid', NULL, NULL, NULL, NULL),
(5, 1, 'virman', 'adminvirman', 'Virman Teguh', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(2) NOT NULL,
  `agama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katholik'),
(4, 'Hindu'),
(5, 'Buddha'),
(6, 'Kong Hu Cu');

-- --------------------------------------------------------

--
-- Table structure for table `bio_siswa`
--

CREATE TABLE `bio_siswa` (
  `id_bio_siswa` int(5) NOT NULL,
  `tl_siswa` varchar(50) DEFAULT NULL,
  `tgl_siswa` varchar(50) DEFAULT NULL,
  `alamat` text,
  `foto` varchar(255) DEFAULT NULL,
  `qr` varchar(255) DEFAULT NULL,
  `id_agama` int(5) DEFAULT NULL,
  `id_gol_darah` int(5) DEFAULT NULL,
  `id_th_ajaran` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio_siswa`
--

INSERT INTO `bio_siswa` (`id_bio_siswa`, `tl_siswa`, `tgl_siswa`, `alamat`, `foto`, `qr`, `id_agama`, `id_gol_darah`, `id_th_ajaran`) VALUES
(3, 'Malang', '27-03-1998', 'JL. Kolonel Sugiono', 'haul-gusdur(1).png', '<img src=https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Lovei&choe=UTF-8&chld=L|4>', 1, 4, 2),
(4, 'Malang', '1997-12-31', 'JL. Sesama', 'default.png', '<img src=https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Fandi&choe=UTF-8&chld=L|4>', 1, 2, 1),
(5, 'Surabaya', '1998-09-18', 'JL. Bahagia', 'default.png', '<img src=https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Trypophobia&choe=UTF-8&chld=L|4>', 1, 1, 1),
(6, 'Malang', '1990-08-12', 'JL. Antariksa', 'default.png', '<img src=https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Refsy&choe=UTF-8&chld=L|4>', 1, 1, 1),
(7, 'Malang', '1999-03-24', 'JL. Ciliwung', 'default.png', '<img src=https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Rizky&choe=UTF-8&chld=L|4>', 1, 2, 1),
(8, 'Malang', '1998-10-10', 'JL. Kahuripan', 'default.png', '<img src=https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Idhar&choe=UTF-8&chld=L|4>', 1, 1, 1),
(12, 'Malang', '1998-05-26', 'JL. Laksda Adi Sucipto 17', 'haul-gusdur(1).png', '<img src=https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Muhammad&choe=UTF-8&chld=L|4>', 1, 3, 2),
(13, 'Jember', '2015-12-04', 'JL. Natuna 19 Malang', 'bedak(1)(1).png', '<img src=https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Charles&choe=UTF-8&chld=L|4>', 1, 2, 1),
(18, 'Malang', '29-01-1997', 'JL. LA Sucipto', 'default.png', '', 2, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `dt_ayah`
--

CREATE TABLE `dt_ayah` (
  `id_ayah` int(5) NOT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(25) DEFAULT NULL,
  `penghasilan_ayah` varchar(50) DEFAULT NULL,
  `no_telp_ayah` varchar(20) DEFAULT NULL,
  `agama_ayah` int(5) DEFAULT NULL,
  `tempat_lhr_ayah` varchar(15) DEFAULT NULL,
  `tgl_lhr_ayah` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_ayah`
--

INSERT INTO `dt_ayah` (`id_ayah`, `nama_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `no_telp_ayah`, `agama_ayah`, `tempat_lhr_ayah`, `tgl_lhr_ayah`) VALUES
(3, 'Abraham Luggana', 'Bapak Rumah Tangga', '-', '+623419812921', 1, 'Kediri', '1945-08-17'),
(4, 'Sugeng', 'Guru', '3.500.000', '+62812371821', 1, 'Malang', '1970-08-09'),
(5, 'Joko Hartono', 'Arsitek', '2.000.000', '+62821387111', 1, 'Jakarta', '1972-09-12'),
(6, 'Ferry AW', 'GO-JEK', '1.500.000', '+62152136711', 1, 'Bandung', '1987-12-13'),
(7, 'Kholis', 'Wiraswasta', '1.000.000', '+62737121222', 1, 'Surabaya', '1972-10-11'),
(8, 'Heri Pujianto', 'Arsitek', '1.500.000', '+62812121212', 1, 'Malang', '1970-12-07'),
(12, 'Sugiharto', 'PNS', '4.000.000', '+62875689726', 1, 'Malang', '2016-01-17'),
(13, 'Charles Hariono', 'Guru', '3.500.000', '+62854898721', 1, 'Jombang', '2003-02-09'),
(18, 'Koko', '', '', '', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dt_ibu`
--

CREATE TABLE `dt_ibu` (
  `id_ibu` int(5) NOT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(25) DEFAULT NULL,
  `penghasilan_ibu` varchar(50) DEFAULT NULL,
  `no_telp_ibu` varchar(20) DEFAULT NULL,
  `agama_ibu` int(5) DEFAULT NULL,
  `tempat_lhr_ibu` varchar(15) DEFAULT NULL,
  `tgl_lhr_ibu` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_ibu`
--

INSERT INTO `dt_ibu` (`id_ibu`, `nama_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `no_telp_ibu`, `agama_ibu`, `tempat_lhr_ibu`, `tgl_lhr_ibu`) VALUES
(3, 'Patmini', 'Guru', '3.000.000', '+6234121012', 1, 'Malang', '1978-09-19'),
(4, 'Utami', 'Ibu Rumah Tangga', '-', '+6289898981', 1, 'Surabaya', '1956-09-23'),
(5, 'Ayuningtyas', 'Arsitek', '3.000.000', '+629891288212', 1, 'Kediri', '1987-09-23'),
(6, 'Mamik', 'Desainer', '3.000.000', '+62345121212', 1, 'Tulungagung', '1987-08-11'),
(7, 'Lamini', 'Ibu Rumah Tangga', '-', '+8213948122', 1, 'Blitar', '1989-08-19'),
(8, 'Marsinah', 'Ibu Rumah Tangga', '-', '+6245212321', 1, 'Ngawi', '1978-09-11'),
(12, 'Sumiyati', 'Guru', '-', '+6289890789876', 1, 'Kediri', '1975-04-08'),
(13, 'Sri Hartini', 'Ibu Rumah Tangga', '3.000.000', '+62341982192', 1, 'Lamongan', '1965-03-25'),
(18, 'Kiki', '', '', '', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `update` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(4) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `capt` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `aktif` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `capt`, `deskripsi`, `aktif`) VALUES
(1, 'window.jpg', 'Window Oe', 'Just Window Oe', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `goldar`
--

CREATE TABLE `goldar` (
  `id` int(2) NOT NULL,
  `nama_goldar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goldar`
--

INSERT INTO `goldar` (`id`, `nama_goldar`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'AB'),
(4, 'O');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(100) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `id_gol_darah` int(5) DEFAULT NULL,
  `id_agama` int(5) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tl_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` varchar(25) DEFAULT NULL,
  `qr` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `id_guru` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `alamat`, `id_gol_darah`, `id_agama`, `foto`, `email`, `tl_lahir`, `tgl_lahir`, `qr`, `pass`, `level`, `id_guru`) VALUES
('197209081002', 'Alwan Ali Latief, S.Pd, M.T', 'JL. Laksda Adi Sucipto Gg 7A/17', 1, 1, '12314347_10208371756400793_2604848519365141892_o(2).jpg', 'allonealilatief@gmail.com', 'Malang', '2015-12-28', '<img src=https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Alwan+Ali&choe=UTF-8&chld=L|4>', 'NjY2Ng==', 3, 1),
('', '', '', 0, 0, 'default.png', '', '', '', '', '2bfcb2db4c80b2dd6dbbb6d0f90dc583', 3, 6),
('', '', '', 0, 0, 'default.png', '', '', '', '', '2bfcb2db4c80b2dd6dbbb6d0f90dc583', 3, 7),
('', '', '', 0, 0, 'default.png', '', '', '', '', '2bfcb2db4c80b2dd6dbbb6d0f90dc583', 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(5) NOT NULL,
  `nama_jurusan` varchar(50) DEFAULT NULL,
  `inisial` varchar(15) DEFAULT NULL,
  `aktif` varchar(10) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `inisial`, `aktif`, `deskripsi`) VALUES
(1, 'Desain dan Produksi Kriya Kayu', 'KAYU', 'on', 'Jurusan Kriya Kayu SMK Negeri 5 Malang'),
(2, 'Desain dan Produksi Kriya Keramik', 'KKR', 'off', 'Jurusan Kriya Keramik SMK Negeri 5 Malang'),
(3, 'Desain dan Produksi Kriya Tekstil', 'KTK', 'off', 'Jurusan Kriya Tekstil SMK Negeri 5 Malang'),
(4, 'Multimedia', 'MM', 'off', 'Jurusan Multimedia SMK Negeri 5 Malang'),
(5, 'Animasi', 'ANIM', 'off', 'Jurusan Animasi SMK Negeri 5 Malang'),
(6, 'Rekayasa Perangkat Lunak', 'RPL', 'off', 'Jurusan Rekayasa Perangkat Lunak SMK Negeri 5 Malang'),
(7, 'Busana Butik', 'BB', 'off', 'Jurusan Busana Butik SMK Negeri 5 Malang'),
(8, 'Teknik Komputer dan Jaringan', 'TKJ', 'off', 'Jurusan Teknik Komuter dan Jaringan SMK Negeri 5 Malang');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(5) NOT NULL,
  `nama_kelas` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'X'),
(2, 'XI'),
(3, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(5) NOT NULL,
  `nama_prestasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama_prestasi`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(5) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `url`, `deskripsi`) VALUES
(1, 'Ujian Online', 'http://rpl.smkn5malang.sch.id', 'Ujian Online berbasis Komputer'),
(2, 'Jurnal BK', 'http://jurnalbk.smkn5malang.sch.id', 'Jurnal Bimbingan Konseling');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pesan` text,
  `tanggal_masuk` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id`, `nama`, `email`, `pesan`, `tanggal_masuk`) VALUES
(1, 'Yasmin', 'yasmin', 'Bagus', '0000-00-00'),
(2, 'Muhammad Yasmin', 'yasminmuh2615@gmail.com', 'Sudah Bagus', '14 02 16'),
(3, 'ahmad jumani', 'jumanicantikz1233@gmail.com', 'warna jurang menarik', '14 02 16'),
(4, 'Yasmin', 'yasmin', 'Bagus', 'Mon Feb 2016, 08:12:21'),
(5, 'Yuli', 'tu', 'kutihga', 'Thu Feb 2016, 14:52:10'),
(6, 'Yasmin', 'yasmin@mail.com', 'Tes', 'Sat Feb 2016, 18:32:48'),
(7, 'Yasmin', 'yasmin', 'admin', 'Sat Feb 2016, 18:33:42'),
(8, 'Yasmin', 'admin', 'yasmin', 'Sat Feb 2016, 18:34:11'),
(9, 'Yasmin', 'Yasmin', 'Bagus', 'Sun Feb 2016, 18:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_tabel`
--

CREATE TABLE `siswa_tabel` (
  `id_siswa` int(100) NOT NULL,
  `nis` char(255) DEFAULT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` enum('PEREMPUAN','LAKI-LAKI') NOT NULL,
  `kelas` enum('X','XI','XII') NOT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_tabel`
--

INSERT INTO `siswa_tabel` (`id_siswa`, `nis`, `nama_siswa`, `jenis_kelamin`, `kelas`, `id_jurusan`, `password`, `level`) VALUES
(3, '7003/754.003', 'Lina', 'PEREMPUAN', 'XII', 6, '2bfcb2db4c80b2dd6dbbb6d0f90dc583', '3'),
(4, '2003', 'Lusi', 'LAKI-LAKI', 'XII', 6, '2bfcb2db4c80b2dd6dbbb6d0f90dc583', '3'),
(5, '2004', 'Lucky', 'LAKI-LAKI', 'XII', 6, '2bfcb2db4c80b2dd6dbbb6d0f90dc583', '3'),
(6, '2005', 'Charles', 'PEREMPUAN', 'XII', 6, '2bfcb2db4c80b2dd6dbbb6d0f90dc583', '3'),
(7, '2006', 'Iko Uwais', 'LAKI-LAKI', 'XII', 6, '2bfcb2db4c80b2dd6dbbb6d0f90dc583', '3'),
(8, '2001', 'Fafa', 'LAKI-LAKI', 'XII', 6, '2bfcb2db4c80b2dd6dbbb6d0f90dc583', '3'),
(12, '2605', 'Ika', 'LAKI-LAKI', 'XII', 6, '2bfcb2db4c80b2dd6dbbb6d0f90dc583', '3'),
(13, '0000', 'Charles', 'LAKI-LAKI', 'XII', 6, '2bfcb2db4c80b2dd6dbbb6d0f90dc583', '3'),
(18, '7812/098.887', 'Keke', '', 'XI', 7, '2bfcb2db4c80b2dd6dbbb6d0f90dc583', '3');

-- --------------------------------------------------------

--
-- Table structure for table `status_anak`
--

CREATE TABLE `status_anak` (
  `id_status` int(5) NOT NULL,
  `nama_status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_anak`
--

INSERT INTO `status_anak` (`id_status`, `nama_status`) VALUES
(1, 'Anak Kandung'),
(2, 'Anak Angkat'),
(3, 'Anak Tiri');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(5) NOT NULL,
  `nama_jur` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `nama_jur`) VALUES
(1, 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `th_pelajaran`
--

CREATE TABLE `th_pelajaran` (
  `id_th_pelajaran` int(5) NOT NULL,
  `th_pelajaran` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `th_pelajaran`
--

INSERT INTO `th_pelajaran` (`id_th_pelajaran`, `th_pelajaran`) VALUES
(1, '2013'),
(2, '2014'),
(3, '2015'),
(4, '2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bio_siswa`
--
ALTER TABLE `bio_siswa`
  ADD PRIMARY KEY (`id_bio_siswa`);

--
-- Indexes for table `dt_ayah`
--
ALTER TABLE `dt_ayah`
  ADD PRIMARY KEY (`id_ayah`);

--
-- Indexes for table `dt_ibu`
--
ALTER TABLE `dt_ibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goldar`
--
ALTER TABLE `goldar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_tabel`
--
ALTER TABLE `siswa_tabel`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `status_anak`
--
ALTER TABLE `status_anak`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `th_pelajaran`
--
ALTER TABLE `th_pelajaran`
  ADD PRIMARY KEY (`id_th_pelajaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bio_siswa`
--
ALTER TABLE `bio_siswa`
  MODIFY `id_bio_siswa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `dt_ayah`
--
ALTER TABLE `dt_ayah`
  MODIFY `id_ayah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `dt_ibu`
--
ALTER TABLE `dt_ibu`
  MODIFY `id_ibu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `goldar`
--
ALTER TABLE `goldar`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `siswa_tabel`
--
ALTER TABLE `siswa_tabel`
  MODIFY `id_siswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `status_anak`
--
ALTER TABLE `status_anak`
  MODIFY `id_status` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `th_pelajaran`
--
ALTER TABLE `th_pelajaran`
  MODIFY `id_th_pelajaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
