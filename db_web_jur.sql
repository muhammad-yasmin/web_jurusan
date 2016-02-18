-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2016 at 04:35 PM
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
  `username` varchar(25) DEFAULT NULL,
  `pass` varchar(25) DEFAULT NULL,
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
(1, 1, 'yasmin', 'YWRtaW55YXNtaW4=', 'Muhammad Yasmin', 'JL. Laksda Adi Sucipto Gg 7A/17', 'yasminmuh2615@gmail.com', '+6282232200837', '12006380_1704005389828672_8747240905927180407_n(1).jpg'),
(2, 1, 'ine', 'adminine', 'Refine A', NULL, NULL, NULL, NULL),
(3, 1, 'yuli', 'adminyuli', 'Muhammad Yuli A', 'Surabaya', '', '08970867223', 'Dino_blue(1).ico'),
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
-- Table structure for table `dt_ayah`
--

CREATE TABLE `dt_ayah` (
  `id_ayah` int(5) NOT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(25) DEFAULT NULL,
  `penghasilan_ayah` varchar(50) DEFAULT NULL,
  `no_telp_ayah` varchar(20) DEFAULT NULL,
  `agama_ayah` varchar(15) DEFAULT NULL,
  `tempat_lhr_ayah` varchar(15) DEFAULT NULL,
  `tgl_lhr_ayah` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_ayah`
--

INSERT INTO `dt_ayah` (`id_ayah`, `nama_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `no_telp_ayah`, `agama_ayah`, `tempat_lhr_ayah`, `tgl_lhr_ayah`) VALUES
(1, 'Sugiharto', 'PNS', '4.000.000', '+62875689726', '1', 'Malang', '2016-01-17'),
(2, '', '', NULL, '', '', '', ''),
(3, '', '', NULL, '', '', '', '');

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
  `agama_ibu` varchar(15) DEFAULT NULL,
  `tempat_lhr_ibu` varchar(15) DEFAULT NULL,
  `tgl_lhr_ibu` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_ibu`
--

INSERT INTO `dt_ibu` (`id_ibu`, `nama_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `no_telp_ibu`, `agama_ibu`, `tempat_lhr_ibu`, `tgl_lhr_ibu`) VALUES
(1, 'Sumiyati', 'Guru', '-', '+6289890789876', '1', 'Kediri', '1975-04-08'),
(2, '', '', NULL, '', '', '', ''),
(3, '', '', NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id_email` int(5) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id_email`, `email`) VALUES
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
(11, ''),
(12, ''),
(13, '');

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
  `telepon` varchar(50) DEFAULT NULL,
  `tgl_lahir` varchar(25) DEFAULT NULL,
  `qr` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `level` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `alamat`, `id_gol_darah`, `id_agama`, `foto`, `email`, `telepon`, `tgl_lahir`, `qr`, `pass`, `level`) VALUES
('6666', 'Alwan Ali Latief, S.Pd, M.T', 'JL. Laksda Adi Sucipto Gg 7A/17', 1, 1, '12314347_10208371756400793_2604848519365141892_o(2).jpg', 'allonealilatief@gmail.com', '', '2015-12-28', '<img src=https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Alwan+Ali&choe=UTF-8&chld=L|4>', 'NjY2Ng==', 3);

-- --------------------------------------------------------

--
-- Table structure for table `industri`
--

CREATE TABLE `industri` (
  `id` int(1) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(5) NOT NULL,
  `nama_jurusan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Desain dan Produksi Kriya Kayu'),
(2, 'Desain dan Produksi Kriya Keramik'),
(3, 'Desain dan Produksi Kriya Tekstil'),
(4, 'Multimedia'),
(5, 'Animasi'),
(6, 'Rekayasa Perangkat Lunak'),
(7, 'Busana Butik'),
(8, 'Teknik Komputer dan Jaringan');

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
-- Table structure for table `kesehatan`
--

CREATE TABLE `kesehatan` (
  `id_kesehatan` int(5) NOT NULL,
  `penyakit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesehatan`
--

INSERT INTO `kesehatan` (`id_kesehatan`, `penyakit`) VALUES
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
(11, ''),
(12, ''),
(13, '');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(5) NOT NULL,
  `nama_pendidikan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `nama_pendidikan`) VALUES
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
(11, ''),
(12, ''),
(13, '');

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
(1, 'Ujian Online', 'https://www.rpl.smkn5malang.sch.id', 'Asu'),
(2, 'Jurnal BK', 'https://www.jurnalbk.smkn5malang.sch.id', 'Jurnal');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subjek` varchar(50) DEFAULT NULL,
  `pesan` text,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(5) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `qr` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tempat_lhr` varchar(25) DEFAULT NULL,
  `tgl_lhr` varchar(25) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `gol_darah` varchar(2) DEFAULT NULL,
  `thn_pelajaran` int(5) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `id_kelas` int(5) DEFAULT NULL,
  `id_prestasi` int(5) DEFAULT NULL,
  `id_pendidikan` int(5) DEFAULT NULL,
  `id_ayah` int(5) DEFAULT NULL,
  `id_ibu` int(5) DEFAULT NULL,
  `id_kesehatan` int(5) DEFAULT NULL,
  `id_jurusan` int(5) DEFAULT NULL,
  `id_email` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `pass`, `qr`, `foto`, `tempat_lhr`, `tgl_lhr`, `agama`, `alamat`, `gol_darah`, `thn_pelajaran`, `level`, `id_kelas`, `id_prestasi`, `id_pendidikan`, `id_ayah`, `id_ibu`, `id_kesehatan`, `id_jurusan`, `id_email`) VALUES
(1, '0000', 'Sudjono', 'bXVoYW1tYWQ=', '<img src=https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=Yasmin&choe=UTF-8&chld=L|4>', 'bedak(1)(1).png', 'Jember', '2015-12-04', '1', 'JL. Laksda Adi Sucipto Gg 7A/17', '4', 2014, 2, 2, 1, 1, 1, 1, 1, 6, 1),
(2, '7004/754.063', 'Muhammad Yasmin', 'cXdlcnR5', '<img src=https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=Muhammad&choe=UTF-8&chld=L|4>', 'haul-gusdur(1).png', 'Malang', '1998-02-06', '1', 'JL. Laksda Adi Sucipto Gg 7A', '3', 2015, 2, 3, 2, 2, 2, 2, 2, 0, 2);

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
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `goldar`
--
ALTER TABLE `goldar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `industri`
--
ALTER TABLE `industri`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD PRIMARY KEY (`id_kesehatan`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

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
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`,`id`);

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
-- AUTO_INCREMENT for table `dt_ayah`
--
ALTER TABLE `dt_ayah`
  MODIFY `id_ayah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dt_ibu`
--
ALTER TABLE `dt_ibu`
  MODIFY `id_ibu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id_email` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `goldar`
--
ALTER TABLE `goldar`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
-- AUTO_INCREMENT for table `kesehatan`
--
ALTER TABLE `kesehatan`
  MODIFY `id_kesehatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
-- AUTO_INCREMENT for table `status_anak`
--
ALTER TABLE `status_anak`
  MODIFY `id_status` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
