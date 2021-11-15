-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 06:31 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_hotel`
--

CREATE TABLE IF NOT EXISTS `detail_hotel` (
`id_detail_hotel` int(11) NOT NULL,
  `id_hotel` varchar(5) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `tipe_kamar` varchar(30) NOT NULL,
  `foto_kamar` text NOT NULL,
  `status` int(2) NOT NULL,
  `stok_detail_hotel` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_hotel`
--

INSERT INTO `detail_hotel` (`id_detail_hotel`, `id_hotel`, `harga`, `tipe_kamar`, `foto_kamar`, `status`, `stok_detail_hotel`) VALUES
(1, '1', '200000', 'deluxe', 'kamar_hotel.jpg', 1, 10),
(2, '1', '300000', 'suite', 'kamar_hotel_2.jpg', 1, 5),
(3, '2', '150000', 'single', 'kamar_hotel.jpg', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foto_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_foto_detail` (
`id_foto_detail` int(10) NOT NULL,
  `foto_detail` text NOT NULL,
  `id_hotel` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_foto_detail`
--

INSERT INTO `tbl_foto_detail` (`id_foto_detail`, `foto_detail`, `id_hotel`) VALUES
(1, 'detail_hotel_1.jpg', 1),
(2, 'detail_hotel_2.jpg', 1),
(4, 'detail_hotel_3.jpeg', 1),
(5, 'detail_hotel_1.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel`
--

CREATE TABLE IF NOT EXISTS `tbl_hotel` (
`id_hotel` int(11) NOT NULL,
  `nama_hotel` varchar(50) NOT NULL,
  `fasilitas` text NOT NULL,
  `harga` text NOT NULL,
  `tipe_kamar` text NOT NULL,
  `review` text NOT NULL,
  `kelas` text NOT NULL,
  `lokasi` text NOT NULL,
  `foto` text NOT NULL,
  `status` int(2) NOT NULL,
  `deskripsi` text NOT NULL,
  `pemesanan` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`id_hotel`, `nama_hotel`, `fasilitas`, `harga`, `tipe_kamar`, `review`, `kelas`, `lokasi`, `foto`, `status`, `deskripsi`, `pemesanan`) VALUES
(1, 'Hotel Sahid Surabaya', 'AC, TV, Internet', '250000', 'deluxe', '90', 'Bintang 4', 'Gubeng', 'hotel_sahid.jpg', 1, 'Tab Hotel Darmo Permai Surabaya sangat direkomendasikan bagi para backpacker yang ingin mendapatkan penginapan yang terjangkau namun sekaligus nyaman.Bagi Anda, para pelancong yang ingin bepergian dengan nyaman dengan anggaran terbatas, Tab Hotel Darmo Permai Surabaya adalah tempat menginap yang sempurna yang menyediakan fasilitas yang layak serta layanan yang luar biasa.Apakah Anda seorang shopaholic? Menginap di Tab Hotel Darmo Permai Surabaya pasti akan memanjakan Anda dengan berbagai pusat perbelanjaan terdekat.Dari acara bisnis hingga pertemuan perusahaan, Tab Hotel Darmo Permai Surabaya menyediakan layanan dan fasilitas lengkap yang Anda dan rekan Anda butuhkan.', 100),
(2, 'Hotel Evora', 'breakfast, parkir, area rokok', '300000', 'deluxe', '86', 'Bintang 4', 'lakarsantri', 'hotel_evora.jpg', 1, 'Tab Hotel Darmo Permai Surabaya sangat direkomendasikan bagi para backpacker yang ingin mendapatkan penginapan yang terjangkau namun sekaligus nyaman.Bagi Anda, para pelancong yang ingin bepergian dengan nyaman dengan anggaran terbatas, Tab Hotel Darmo Permai Surabaya adalah tempat menginap yang sempurna yang menyediakan fasilitas yang layak serta layanan yang luar biasa.Apakah Anda seorang shopaholic? Menginap di Tab Hotel Darmo Permai Surabaya pasti akan memanjakan Anda dengan berbagai pusat perbelanjaan terdekat.Dari acara bisnis hingga pertemuan perusahaan, Tab Hotel Darmo Permai Surabaya menyediakan layanan dan fasilitas lengkap yang Anda dan rekan Anda butuhkan.', 50),
(3, 'Hotel Gunawangsa', 'AC, TV', '320000', 'deluxe', '87', 'bintang 4', 'wonokromo', 'hotel_gunawangsa.jpg', 1, 'Tab Hotel Darmo Permai Surabaya sangat direkomendasikan bagi para backpacker yang ingin mendapatkan penginapan yang terjangkau namun sekaligus nyaman.Bagi Anda, para pelancong yang ingin bepergian dengan nyaman dengan anggaran terbatas, Tab Hotel Darmo Permai Surabaya adalah tempat menginap yang sempurna yang menyediakan fasilitas yang layak serta layanan yang luar biasa.Apakah Anda seorang shopaholic? Menginap di Tab Hotel Darmo Permai Surabaya pasti akan memanjakan Anda dengan berbagai pusat perbelanjaan terdekat.Dari acara bisnis hingga pertemuan perusahaan, Tab Hotel Darmo Permai Surabaya menyediakan layanan dan fasilitas lengkap yang Anda dan rekan Anda butuhkan.', 80),
(4, 'Alaminar Premier', 'internet', '200000', 'suite', '70', 'bintang 3', 'tandes', 'hotel_alaminar.jpg', 1, 'Tab Hotel Darmo Permai Surabaya sangat direkomendasikan bagi para backpacker yang ingin mendapatkan penginapan yang terjangkau namun sekaligus nyaman.Bagi Anda, para pelancong yang ingin bepergian dengan nyaman dengan anggaran terbatas, Tab Hotel Darmo Permai Surabaya adalah tempat menginap yang sempurna yang menyediakan fasilitas yang layak serta layanan yang luar biasa.Apakah Anda seorang shopaholic? Menginap di Tab Hotel Darmo Permai Surabaya pasti akan memanjakan Anda dengan berbagai pusat perbelanjaan terdekat.Dari acara bisnis hingga pertemuan perusahaan, Tab Hotel Darmo Permai Surabaya menyediakan layanan dan fasilitas lengkap yang Anda dan rekan Anda butuhkan.', 40),
(5, 'West Homey Syariah', 'AC, TV, Internet', '300000', 'Single', '40', 'Bintang 3', 'Tandes', 'hotel.jpg', 1, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis nisi ipsam est corporis atque? Commodi vero dicta tempore, similique iusto atque nulla dolorum perspiciatis natus quaerat consequatur voluptas. Tenetur, nihil.', 53),
(6, 'Life Style hotel', 'AC, TV, Internet, Breakfast', '200000', 'Suite', '76', 'Bintang 4', 'Gubeng', 'hotel.jpg', 1, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis nisi ipsam est corporis atque? Commodi vero dicta tempore, similique iusto atque nulla dolorum perspiciatis natus quaerat consequatur voluptas. Tenetur, nihil.', 20),
(7, 'OYO Flagship 910 ', 'AC, TV, Internet, Breakfast', '200000', 'Single', '70', 'Bintang 2', 'Rungkut', 'hotel.jpg', 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum numquam odio eius ducimus architecto dolorum suscipit ullam facere, laboriosam possimus doloribus recusandae quae ipsa distinctio. Rem architecto deleniti aspernatur soluta!', 11),
(8, 'Glass House Cityland', 'TV, Area parkir, Area rokok, Internet', '250000', 'Deluxe', '78', 'Bintang 3', 'Mulyorejo', 'hotel.jpg', 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum numquam odio eius ducimus architecto dolorum suscipit ullam facere, laboriosam possimus doloribus recusandae quae ipsa distinctio. Rem architecto deleniti aspernatur soluta!', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`id_user` int(100) NOT NULL,
  `nip_user` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `cabang` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `foto` text NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nip_user`, `nama`, `password`, `jabatan`, `cabang`, `level`, `foto`, `status`) VALUES
(1, '12345', 'Agung Muliawan', '827ccb0eea8a706c4c34a16891f84e7b', 'Staff IT', 'Jember', 'administrator', 'agung.jpg', 'aktif'),
(7, 'M00001', 'Muhammad Amin', '7db3d96b0f76480d94a7ded5f234fb96', 'mahasiswa', 'Jember', 'mahasiswa', 'e52c18a4-0abd-453f-886a-220217a2aa33.jpg', 'aktif'),
(10, 'D00001', 'Sigit Mustiko, S.p, M.Cs', 'daf6dde99348b2948e6024db311b82b5', 'dosen', 'Jember', 'dosen', 'x_-_Copy1.png', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_hotel`
--
ALTER TABLE `detail_hotel`
 ADD PRIMARY KEY (`id_detail_hotel`);

--
-- Indexes for table `tbl_foto_detail`
--
ALTER TABLE `tbl_foto_detail`
 ADD PRIMARY KEY (`id_foto_detail`);

--
-- Indexes for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
 ADD PRIMARY KEY (`id_hotel`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_hotel`
--
ALTER TABLE `detail_hotel`
MODIFY `id_detail_hotel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_foto_detail`
--
ALTER TABLE `tbl_foto_detail`
MODIFY `id_foto_detail` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
