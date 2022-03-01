-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 08:31 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_hotel`
--

INSERT INTO `detail_hotel` (`id_detail_hotel`, `id_hotel`, `harga`, `tipe_kamar`, `foto_kamar`, `status`, `stok_detail_hotel`) VALUES
(1, '1', '200000', 'deluxe', 'kamar_hotel.jpg', 1, 10),
(2, '1', '300000', 'suite', 'kamar_hotel_2.jpg', 1, 5),
(3, '1', '150000', 'single', 'kamar_hotel.jpg', 1, 10),
(4, '2', '200000', 'deluxe', 'kamar_hotel.jpg', 1, 20),
(5, '2', '100000', 'deluxe', 'kamar_hotel.jpg', 1, 10);

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`id_hotel`, `nama_hotel`, `fasilitas`, `harga`, `tipe_kamar`, `review`, `kelas`, `lokasi`, `foto`, `status`, `deskripsi`, `pemesanan`) VALUES
(1, 'Hotel Sahid Surabaya', 'AC, TV, Internet', '250000', 'deluxe', '90', 'Bintang 4', 'Gubeng', 'hotel_sahid.jpg', 1, 'Waktu Check-in dan Check-outCheck-in: Mulai pukul 14:00Check-out: Sebelum pukul 12:00LokasiSahid Surabaya Hotel terletak di kawasan / kota Gubeng.Hotel ini terletak hanya 0,2 km dari Stasiun Surabaya Gubeng.Terdapat beberapa tempat menarik di sekitarnya, seperti Stasiun Surabaya Gubeng yang berjarak sekitar 0,2 km dan Monumen Kapal Selam berjarak sekitar 0,22 km.Tentang Hotel Sahid SurabayaDari acara bisnis hingga pertemuan perusahaan, Sahid Surabaya Hotel menyediakan layanan dan fasilitas lengkap yang Anda dan rekan Anda butuhkan.Bersenang-senang dengan berbagai fasilitas hiburan untuk Anda dan seluruh keluarga di Sahid Surabaya Hotel, akomodasi yang luar biasa untuk liburan keluarga Anda.Rasakan pengalaman menginap yang unik di gedung bersejarah Sahid Surabaya Hotel, yang jarang Anda temukan di tempat lain.Pelayanan yang prima serta berbagai fasilitas yang disediakan tidak akan membuat Anda mengeluh selama menginap di Sahid Surabaya Hotel.Dapatkan penawaran terbaik untuk perawatan spa kualitas terbaik untuk melepas lelah dan meremajakan diri Anda.Resepsionis 24 jam tersedia untuk melayani Anda, mulai dari check-in hingga check-out, atau bantuan apa pun yang Anda butuhkan. Jika Anda menginginkan lebih, jangan ragu untuk bertanya ke meja depan, kami selalu siap untuk mengakomodasi Anda.Nikmati hidangan favorit Anda dengan masakan spesial dari Sahid Surabaya Hotel khusus untuk Anda.WiFi tersedia di area umum properti untuk membantu Anda tetap terhubung dengan keluarga dan teman.Dengan fasilitas yang memadai, Hotel Sahid Surabaya menjadi pilihan yang tepat untuk menginap. ', 100),
(2, 'Hotel Evora', 'breakfast, parkir, area rokok', '300000', 'deluxe', '86', 'Bintang 4', 'lakarsantri', 'hotel_evora.jpg', 1, 'Tab Hotel Darmo Permai Surabaya sangat direkomendasikan bagi para backpacker yang ingin mendapatkan penginapan yang terjangkau namun sekaligus nyaman.Bagi Anda, para pelancong yang ingin bepergian dengan nyaman dengan anggaran terbatas, Tab Hotel Darmo Permai Surabaya adalah tempat menginap yang sempurna yang menyediakan fasilitas yang layak serta layanan yang luar biasa.Apakah Anda seorang shopaholic? Menginap di Tab Hotel Darmo Permai Surabaya pasti akan memanjakan Anda dengan berbagai pusat perbelanjaan terdekat.Dari acara bisnis hingga pertemuan perusahaan, Tab Hotel Darmo Permai Surabaya menyediakan layanan dan fasilitas lengkap yang Anda dan rekan Anda butuhkan.', 50),
(3, 'Hotel Gunawangsa', 'AC, TV', '320000', 'deluxe', '87', 'bintang 4', 'wonokromo', 'hotel_gunawangsa.jpg', 1, 'Tab Hotel Darmo Permai Surabaya sangat direkomendasikan bagi para backpacker yang ingin mendapatkan penginapan yang terjangkau namun sekaligus nyaman.Bagi Anda, para pelancong yang ingin bepergian dengan nyaman dengan anggaran terbatas, Tab Hotel Darmo Permai Surabaya adalah tempat menginap yang sempurna yang menyediakan fasilitas yang layak serta layanan yang luar biasa.Apakah Anda seorang shopaholic? Menginap di Tab Hotel Darmo Permai Surabaya pasti akan memanjakan Anda dengan berbagai pusat perbelanjaan terdekat.Dari acara bisnis hingga pertemuan perusahaan, Tab Hotel Darmo Permai Surabaya menyediakan layanan dan fasilitas lengkap yang Anda dan rekan Anda butuhkan.', 80),
(4, 'Alaminar Premier', 'internet', '200000', 'suite', '70', 'bintang 3', 'tandes', 'hotel_alaminar.jpg', 1, 'Tab Hotel Darmo Permai Surabaya sangat direkomendasikan bagi para backpacker yang ingin mendapatkan penginapan yang terjangkau namun sekaligus nyaman.Bagi Anda, para pelancong yang ingin bepergian dengan nyaman dengan anggaran terbatas, Tab Hotel Darmo Permai Surabaya adalah tempat menginap yang sempurna yang menyediakan fasilitas yang layak serta layanan yang luar biasa.Apakah Anda seorang shopaholic? Menginap di Tab Hotel Darmo Permai Surabaya pasti akan memanjakan Anda dengan berbagai pusat perbelanjaan terdekat.Dari acara bisnis hingga pertemuan perusahaan, Tab Hotel Darmo Permai Surabaya menyediakan layanan dan fasilitas lengkap yang Anda dan rekan Anda butuhkan.', 40),
(5, 'West Homey Syariah', 'AC, TV, Internet', '300000', 'Single', '40', 'Bintang 3', 'Tandes', 'hotel_sahid.jpg', 1, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis nisi ipsam est corporis atque? Commodi vero dicta tempore, similique iusto atque nulla dolorum perspiciatis natus quaerat consequatur voluptas. Tenetur, nihil.', 53),
(6, 'Life Style hotel', 'AC, TV, Internet, Breakfast', '200000', 'Suite', '76', 'Bintang 4', 'Gubeng', 'hotel_sahid.jpg', 1, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis nisi ipsam est corporis atque? Commodi vero dicta tempore, similique iusto atque nulla dolorum perspiciatis natus quaerat consequatur voluptas. Tenetur, nihil.', 20),
(7, 'OYO Flagship 910 ', 'AC, TV, Internet, Breakfast', '200000', 'Single', '70', 'Bintang 2', 'Rungkut', 'hotel.jpg', 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum numquam odio eius ducimus architecto dolorum suscipit ullam facere, laboriosam possimus doloribus recusandae quae ipsa distinctio. Rem architecto deleniti aspernatur soluta!', 11),
(8, 'Glass House Cityland', 'TV, Area parkir, Area rokok, Internet', '250000', 'Deluxe', '78', 'Bintang 3', 'Mulyorejo', 'hotel.jpg', 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum numquam odio eius ducimus architecto dolorum suscipit ullam facere, laboriosam possimus doloribus recusandae quae ipsa distinctio. Rem architecto deleniti aspernatur soluta!', 8),
(9, 'Vasa Hotel Surabaya', 'Wifi, breakfast', '320000', 'deluxe', '84', 'Bintang 4', 'Sukomanunggal', 'hotel.jpg', 1, 'Tab Hotel Darmo Permai Surabaya sangat direkomendasikan bagi para backpacker yang ingin mendapatkan penginapan yang terjangkau namun sekaligus nyaman.Bagi Anda, para pelancong yang ingin bepergian dengan nyaman dengan anggaran terbatas, Tab Hotel Darmo Permai Surabaya adalah tempat menginap yang sempurna yang menyediakan fasilitas yang layak serta layanan yang luar biasa.Apakah Anda seorang shopaholic? Menginap di Tab Hotel Darmo Permai Surabaya pasti akan memanjakan Anda dengan berbagai pusat perbelanjaan terdekat.Dari acara bisnis hingga pertemuan perusahaan, Tab Hotel Darmo Permai Surabaya menyediakan layanan dan fasilitas lengkap yang Anda dan rekan Anda butuhkan.', 20),
(10, 'Four Point By Sheraton', 'Wifi, Breakfast, Meeting, Fitness', '420000', 'Deluxe', '90', 'Bintang 4', 'Gubeng', 'hotel_sahid.jpg', 1, 'Tab Hotel Darmo Permai Surabaya sangat direkomendasikan bagi para backpacker yang ingin mendapatkan penginapan yang terjangkau namun sekaligus nyaman.Bagi Anda, para pelancong yang ingin bepergian dengan nyaman dengan anggaran terbatas, Tab Hotel Darmo Permai Surabaya adalah tempat menginap yang sempurna yang menyediakan fasilitas yang layak serta layanan yang luar biasa.Apakah Anda seorang shopaholic? Menginap di Tab Hotel Darmo Permai Surabaya pasti akan memanjakan Anda dengan berbagai pusat perbelanjaan terdekat.Dari acara bisnis hingga pertemuan perusahaan, Tab Hotel Darmo Permai Surabaya menyediakan layanan dan fasilitas lengkap yang Anda dan rekan Anda butuhkan.', 20),
(11, 'Best Papilio Hotel', 'kolam renang, breakfast', '300000', 'deluxe', '80', 'Bintang 4', 'Gubeng', 'hotel.jpg', 1, 'Tab Hotel Darmo Permai Surabaya sangat direkomendasikan bagi para backpacker yang ingin mendapatkan penginapan yang terjangkau namun sekaligus nyaman.Bagi Anda, para pelancong yang ingin bepergian dengan nyaman dengan anggaran terbatas, Tab Hotel Darmo Permai Surabaya adalah tempat menginap yang sempurna yang menyediakan fasilitas yang layak serta layanan yang luar biasa.Apakah Anda seorang shopaholic? Menginap di Tab Hotel Darmo Permai Surabaya pasti akan memanjakan Anda dengan berbagai pusat perbelanjaan terdekat.Dari acara bisnis hingga pertemuan perusahaan, Tab Hotel Darmo Permai Surabaya menyediakan layanan dan fasilitas lengkap yang Anda dan rekan Anda butuhkan.', 30),
(12, 'The Alana Surabaya', 'Kolam renang, breakfast, parkir, meeting', '300000', 'Double', '90', 'Bintang 4', 'Drangu', 'hotel.jpg', 1, 'Tab Hotel Darmo Permai Surabaya sangat direkomendasikan bagi para backpacker yang ingin mendapatkan penginapan yang terjangkau namun sekaligus nyaman.Bagi Anda, para pelancong yang ingin bepergian dengan nyaman dengan anggaran terbatas, Tab Hotel Darmo Permai Surabaya adalah tempat menginap yang sempurna yang menyediakan fasilitas yang layak serta layanan yang luar biasa.Apakah Anda seorang shopaholic? Menginap di Tab Hotel Darmo Permai Surabaya pasti akan memanjakan Anda dengan berbagai pusat perbelanjaan terdekat.Dari acara bisnis hingga pertemuan perusahaan, Tab Hotel Darmo Permai Surabaya menyediakan layanan dan fasilitas lengkap yang Anda dan rekan Anda butuhkan.', 30);

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE IF NOT EXISTS `tb_data` (
`id_hotels` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ac` int(2) NOT NULL,
  `tv` int(2) NOT NULL,
  `internet` int(2) NOT NULL,
  `breakfast` int(2) NOT NULL,
  `ruang_meeting` int(2) NOT NULL,
  `fitness` int(2) NOT NULL,
  `restoran` int(2) NOT NULL,
  `parkiran` int(2) NOT NULL,
  `kolam_renang` int(2) NOT NULL,
  `area_rokok` int(2) NOT NULL,
  `id_harga` int(2) NOT NULL,
  `id_tipe_kamar` int(2) NOT NULL,
  `id_review` int(2) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `id_lokasi` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id_hotels`, `nama`, `ac`, `tv`, `internet`, `breakfast`, `ruang_meeting`, `fitness`, `restoran`, `parkiran`, `kolam_renang`, `area_rokok`, `id_harga`, `id_tipe_kamar`, `id_review`, `id_kelas`, `id_lokasi`) VALUES
(1, 'Fairfield By Marriott Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 1),
(2, 'Fairfield By Marriott Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 1),
(3, 'Java Paragon Hotel And Residence', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 3, 3, 2, 1),
(4, 'Java Paragon Hotel And Residence', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 3, 3, 2, 1),
(5, 'Java Paragon Hotel And Residence', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 3, 2, 1),
(6, 'Java Paragon Hotel And Residence', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 3, 2, 1),
(7, 'Java Paragon Hotel And Residence', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 3, 3, 2, 1),
(8, 'Java Paragon Hotel And Residence', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 3, 3, 2, 1),
(9, 'Singgasana Hotel Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 3, 3, 4, 3, 1),
(10, 'Singgasana Hotel Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 2, 4, 3, 1),
(11, 'Singgasana Hotel Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 2, 4, 3, 1),
(12, 'Singgasana Hotel Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 4, 3, 1),
(13, 'Singgasana Hotel Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 4, 3, 1),
(14, 'Singgasana Hotel Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 3, 1),
(15, 'Tab Hotel Darmo Permai Surabaya', 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 4, 4, 5, 3, 1),
(16, 'Tab Hotel Darmo Permai Surabaya', 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 4, 3, 5, 3, 1),
(17, 'Tab Hotel Darmo Permai Surabaya', 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 3, 2, 5, 3, 1),
(18, 'The Life Styles Hotel Surabaya', 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 4, 3, 1, 3, 4),
(19, 'The Life Styles Hotel Surabaya', 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 3, 2, 1, 3, 4),
(20, 'Hotel Santika Premiere GBG', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 3, 4),
(21, 'Hotel Santika Premiere GBG', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 3, 4),
(22, 'Hotel Santika Premiere GBG', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 3, 4),
(23, 'Bonnet Hotel Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 4, 3, 3, 3, 4),
(24, 'Narita Hotel Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 3, 2, 3, 3, 4),
(25, 'Narita Hotel Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 3, 1, 3, 3, 4),
(26, 'Luxpoint Hotel Baratajaya', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 4, 4, 5, 3, 4),
(27, 'Garden Palace Hotel Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 2, 3, 4, 2, 3),
(28, 'Garden Palace Hotel Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 4, 2, 3),
(29, 'Swiss-Belinn Tunjungan Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 3, 3),
(30, 'Swiss-Belinn Tunjungan Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 2, 2, 3, 3),
(31, 'Swiss-Belinn Tunjungan Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 2, 3, 3),
(32, 'Wyndham Surabaya', 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 2, 2, 2, 3, 3),
(33, 'Wyndham Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 3, 3),
(34, 'Grand Dafam Signature Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 2, 3, 2, 2, 3),
(35, 'Grand Dafam Signature Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 2, 3, 2, 2, 3),
(36, 'Grand Dafam Signature Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 2, 2, 2, 2, 3),
(37, 'Grand Dafam Signature Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 2, 2, 3),
(38, 'DoubleTree by Hilton Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 3),
(39, 'HARRIS Hotel & Conventions GBG', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 3),
(40, 'Hotel Aria Centra Surabaya', 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 3, 2, 2, 2, 3),
(41, 'Hotel Aria Centra Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 2, 2, 2, 2, 3),
(42, 'Hotel Aria Centra Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 2, 2, 2, 2, 3),
(43, 'Hotel Aria Centra Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 2, 2, 3),
(44, 'Surabaya 1s Hotel', 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 3, 1, 3, 2, 3),
(45, 'Surabaya 1s Hotel', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 3, 1, 3, 2, 3),
(46, 'Surabaya 1s Hotel', 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 3, 1, 3, 2, 3),
(47, 'Surabaya 1s Hotel', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 3, 1, 3, 2, 3),
(48, 'Elmi Hotel', 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 3, 3, 2, 3, 3),
(49, 'Elmi Hotel', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 2, 3, 2, 3, 3),
(50, 'Elmi Hotel', 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 2, 2, 2, 3, 3),
(51, 'Elmi Hotel', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 2, 2, 2, 3, 3),
(52, 'ibis Surabaya City Center', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 3, 4, 3, 2, 3),
(53, 'Grand Surabaya Hotel', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 4, 2, 4, 3, 3),
(54, 'Grand Surabaya Hotel', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 3, 2, 4, 3, 3),
(55, 'Grand Surabaya Hotel', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 2, 1, 4, 3, 3),
(56, 'Grand Surabaya Hotel', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 2, 1, 4, 3, 3),
(57, 'Life Emerald Hotel Surabaya', 1, 1, 1, 1, 0, 0, 1, 1, 0, 1, 4, 3, 3, 3, 3),
(58, 'Life Emerald Hotel Surabaya', 1, 1, 1, 1, 0, 0, 1, 1, 0, 1, 4, 2, 3, 3, 3),
(59, 'Life Emerald Hotel Surabaya', 1, 1, 1, 1, 0, 0, 1, 1, 0, 1, 3, 1, 3, 3, 3),
(60, 'Grand Inna Tunjungan', 1, 1, 1, 0, 1, 0, 1, 1, 0, 0, 3, 3, 4, 2, 3),
(61, 'Grand Inna Tunjungan', 1, 1, 1, 0, 1, 0, 1, 1, 0, 0, 2, 2, 4, 2, 3),
(62, 'Grand Inna Tunjungan', 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 1, 1, 4, 2, 3),
(63, 'Choice City Hotel', 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 4, 3, 4, 3, 3),
(64, 'Choice City Hotel', 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 4, 2, 4, 3, 3),
(65, 'Varna Culture Hotel Soerabaia', 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 4, 3, 3, 3, 3),
(66, 'Varna Culture Hotel Soerabaia', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 4, 3, 3, 3, 3),
(67, 'Goldvitel Hotel', 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 4, 4, 4, 2, 3),
(68, 'Goldvitel Hotel', 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 3, 3, 4, 2, 3),
(69, 'Goldvitel Hotel', 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 3, 2, 4, 2, 3),
(70, 'Goldvitel Hotel', 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 4, 2, 3),
(71, 'D''Carol Hotel Surabaya', 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 4, 3, 3, 3, 3),
(72, 'D''Carol Hotel Surabaya', 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 4, 2, 3, 3, 3),
(73, 'Maumu Hotel and Lounge', 1, 1, 1, 0, 0, 0, 0, 1, 0, 0, 4, 2, 5, 3, 3),
(74, 'The Alana Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 3, 3, 2, 2, 2),
(75, 'The Alana Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 3, 2, 2, 2),
(76, 'The Alana Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 3, 3, 2, 2, 2),
(77, 'The Alana Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2),
(78, 'The Alana Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 1, 2, 2, 2),
(79, 'The Alana Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 1, 2, 2, 2),
(80, 'Hotel Dafam Pacific Caesar Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 3, 2, 3, 3, 5),
(81, 'Swiss-Belinn Manyar Surabaya', 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 2, 2, 3, 3, 5),
(82, 'Swiss-Belinn Manyar Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 2, 2, 3, 3, 5),
(83, 'Alimar Premier Hotel', 1, 1, 1, 0, 1, 0, 1, 1, 1, 0, 3, 3, 5, 3, 5),
(84, 'Alimar Premier Hotel', 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 3, 3, 5, 3, 5),
(85, 'Alimar Premier Hotel', 1, 1, 1, 0, 1, 0, 1, 1, 1, 0, 3, 2, 5, 3, 5),
(86, 'Alimar Premier Hotel', 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 3, 2, 5, 3, 5),
(87, 'Alimar Premier Hotel', 1, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 5, 3, 5),
(88, 'Alimar Premier Hotel', 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 5, 3, 5),
(89, 'Life Taman Melati Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 4, 3, 3, 3, 5),
(90, 'Life Taman Melati Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 3, 2, 3, 3, 5),
(91, 'Livinn Taman Melati Surabaya', 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 4, 3, 4, 3, 5),
(92, 'Hotel Gunawangsa MERR', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 4, 2, 4, 3, 6),
(93, 'Hotel Gunawangsa MERR', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 2, 4, 3, 6),
(94, 'Hotel Gunawangsa MERR', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 3, 1, 4, 3, 6),
(95, 'Hotel Gunawangsa MERR', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 4, 3, 6),
(96, 'Hotel Gunawangsa MERR', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 1, 4, 3, 6),
(97, 'Hotel Gunawangsa MERR', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 4, 3, 6),
(98, 'Novotel Samator Surabaya Timur', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 2, 3, 3, 2, 6),
(99, 'Novotel Samator Surabaya Timur', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 2, 3, 3, 2, 6),
(100, 'Novotel Samator Surabaya Timur', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 2, 2, 3, 2, 6),
(101, 'Novotel Samator Surabaya Timur', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 2, 2, 3, 2, 6),
(102, 'Verwood Hotel and Serviced Residence Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 2, 4, 2, 10),
(103, 'Verwood Hotel and Serviced Residence Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 4, 2, 10),
(104, 'Verwood Hotel and Serviced Residence Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 4, 2, 10),
(105, 'Whiz Prime Hotel Darmo Harapan Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 5, 4, 3, 10),
(106, 'Whiz Prime Hotel Darmo Harapan Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 3, 4, 3, 10),
(107, 'Whiz Prime Hotel Darmo Harapan Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 2, 4, 3, 10),
(108, 'Whiz Prime Hotel Darmo Harapan Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 2, 4, 3, 10),
(109, 'Gunawangsa Manyar Hotel Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 4, 2, 4, 3, 9),
(110, 'Country Heritage Hotel', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 4, 2, 5, 3, 9),
(111, 'Country Heritage Hotel', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 3, 2, 5, 3, 9),
(112, 'Shangri-La Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 7),
(113, 'Shangri-La Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 7),
(114, 'Shangri-La Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 7),
(115, 'Hotel Ciputra World Surabaya managed by Swiss-Belhotel International', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 2, 2, 1, 7),
(116, 'Hotel Ciputra World Surabaya managed by Swiss-Belhotel International', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 7),
(117, 'Hotel Ciputra World Surabaya managed by Swiss-Belhotel International', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 7),
(118, 'Hotel Ciputra World Surabaya managed by Swiss-Belhotel International', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 7),
(119, 'Hotel Ciputra World Surabaya managed by Swiss-Belhotel International', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 3, 2, 1, 7),
(120, 'Hotel Ciputra World Surabaya managed by Swiss-Belhotel International', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 2, 1, 7),
(121, 'Hotel Ciputra World Surabaya managed by Swiss-Belhotel International', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 7),
(122, 'Hotel Ciputra World Surabaya managed by Swiss-Belhotel International', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 7),
(123, 'Hotel Ciputra World Surabaya managed by Swiss-Belhotel International', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 7),
(124, 'Holiday Inn Express SURABAYA CENTERPOINT', 1, 1, 1, 0, 0, 1, 0, 1, 0, 0, 2, 3, 3, 3, 7),
(125, 'Holiday Inn Express SURABAYA CENTERPOINT', 1, 1, 1, 0, 0, 1, 0, 1, 0, 0, 2, 2, 3, 3, 7),
(126, 'Holiday Inn Express SURABAYA CENTERPOINT', 1, 1, 1, 1, 0, 1, 0, 1, 0, 0, 2, 2, 3, 3, 7),
(127, 'JW Marriott Hotel Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 11),
(128, 'JW Marriott Hotel Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 11),
(129, 'JW Marriott Hotel Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 11),
(130, 'JW Marriott Hotel Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 11),
(131, 'JW Marriott Hotel Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 11),
(132, 'Four Points by Sheraton Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 11),
(133, 'Four Points by Sheraton Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 11),
(134, 'Four Points by Sheraton Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 11),
(135, 'Four Points by Sheraton Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 11),
(136, 'Four Points by Sheraton Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 11),
(137, 'Four Points by Sheraton Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 11),
(138, 'Four Points by Sheraton Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 11),
(139, 'Four Points by Sheraton Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 11),
(140, 'Four Points by Sheraton Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 11),
(141, 'Tunjungan Hotel Surabaya', 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 3, 3, 5, 2, 11),
(142, 'Tunjungan Hotel Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 2, 2, 5, 2, 11),
(143, 'Tunjungan Hotel Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 2, 2, 5, 2, 11),
(144, 'Tunjungan Hotel Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 5, 2, 11),
(145, 'Vasa Hotel Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 11),
(146, 'Midtown Hotel Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 2, 3, 3, 3, 11),
(147, 'Midtown Hotel Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 2, 2, 3, 3, 11),
(148, 'Quest Hotel Darmo - Surabaya by ASTON', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 2, 3, 3, 11),
(149, 'Quest Hotel Darmo - Surabaya by ASTON', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 3, 3, 11),
(150, 'Quest Hotel Darmo - Surabaya by ASTON', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 3, 3, 11),
(151, 'Royal Tulip Darmo Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 2, 3, 1, 11),
(152, 'Royal Tulip Darmo Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 3, 1, 11),
(153, 'Hotel Santika Pandegiling Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 3, 2, 2, 3, 11),
(154, 'Hotel Santika Pandegiling Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 3, 2, 2, 3, 11),
(155, 'Hotel Santika Pandegiling Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 3, 2, 2, 3, 11),
(156, 'Hotel 2 Embong Malang', 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 4, 3, 4, 3, 11),
(157, 'Hotel 2 Embong Malang', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 3, 3, 4, 3, 11),
(158, 'Hotel 2 Embong Malang', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 3, 2, 4, 3, 11),
(159, 'Royal Singosari Cendana Tunjungan', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 2, 3, 4, 3, 11),
(160, 'Royal Singosari Cendana Tunjungan', 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 2, 2, 4, 3, 11),
(161, 'Royal Singosari Cendana Tunjungan', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 4, 3, 11),
(162, 'Mercure Grand Mirama Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 3, 4, 2, 11),
(163, 'Mercure Grand Mirama Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 3, 4, 2, 11),
(164, 'Mercure Grand Mirama Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 2, 4, 2, 11),
(165, 'Mercure Grand Mirama Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 4, 2, 11),
(166, 'Mercure Grand Mirama Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 4, 2, 11),
(167, 'Mercure Grand Mirama Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 2, 11),
(168, 'Luminor Hotel Jemursari', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 3, 2, 2, 3, 12),
(169, 'Luminor Hotel Jemursari', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 3, 2, 2, 3, 12),
(170, 'Luminor Hotel Jemursari', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 2, 2, 2, 3, 12),
(171, 'Yello Hotel Jemursari', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 3, 4, 3, 3, 12),
(172, 'Hotel Santika Jemursari', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 3, 2, 3, 3, 12),
(173, 'Ibis Styles Surabaya Jemursari', 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 3, 4, 3, 3, 12),
(174, 'Ibis Styles Surabaya Jemursari', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 2, 4, 3, 3, 12),
(175, 'Ibis Styles Surabaya Jemursari', 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 2, 2, 3, 3, 12),
(176, 'Ibis Styles Surabaya Jemursari', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 2, 2, 3, 3, 12),
(177, 'BeSS Mansion Hotel Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 3, 3, 2, 14),
(178, 'Grand Mercure Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 2, 3, 3, 1, 14),
(179, 'Grand Mercure Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 2, 2, 3, 1, 14),
(180, 'The Square Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 4, 2, 4, 3, 14),
(181, 'The Square Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 1, 4, 3, 14),
(182, 'Best Western Papilio Hotel', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 3, 3, 2, 2, 15),
(183, 'Best Western Papilio Hotel', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 3, 2, 2, 2, 15),
(184, 'Best Western Papilio Hotel', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 15),
(185, 'Best Western Papilio Hotel', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 15),
(186, 'Grand Darmo 1 by AMITHYA', 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 3, 2, 4, 2, 15),
(187, 'Grand Darmo 1 by AMITHYA', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 4, 1, 4, 2, 15),
(188, 'Primebiz Hotel Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 3, 3, 3, 3, 15),
(189, 'Primebiz Hotel Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 3, 3, 3, 3, 15),
(190, 'Primebiz Hotel Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 3, 2, 3, 3, 15),
(191, 'Primebiz Hotel Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 2, 3, 3, 3, 15),
(192, 'Primebiz Hotel Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 2, 1, 3, 3, 15),
(193, 'Primebiz Hotel Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 2, 1, 3, 3, 15),
(194, 'Novotel Surabaya Hotel & 1', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 3, 4, 2, 15),
(195, 'Novotel Surabaya Hotel & 1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 3, 4, 2, 15),
(196, 'Novotel Surabaya Hotel & 1', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 3, 4, 2, 15),
(197, 'Novotel Surabaya Hotel & 1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 3, 4, 2, 15),
(198, 'Novotel Surabaya Hotel & 1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 3, 4, 2, 15),
(199, 'ibis budget Surabaya Diponegoro', 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 4, 4, 3, 3, 15),
(200, 'BATIQA Hotel Darmo - Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 0, 0, 3, 3, 3, 3, 15),
(201, 'Great Diponegoro Hotel Surabaya', 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 3, 3, 3, 3, 15),
(202, 'Great Diponegoro Hotel Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 3, 3, 3, 3, 15),
(203, 'Great Diponegoro Hotel Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 3, 2, 3, 3, 15),
(204, 'Great Diponegoro Hotel Surabaya', 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 2, 1, 3, 3, 15),
(205, 'Hotel Oval', 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 4, 3, 5, 3, 15),
(206, 'Hotel Oval', 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 4, 2, 5, 3, 15),
(207, 'Hotel Oval', 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 3, 1, 5, 3, 15),
(208, 'Four Points by Sheraton Surabaya Pakuwon Indah', 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 2, 1, 2, 13),
(209, 'Four Points by Sheraton Surabaya Pakuwon Indah', 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 2, 13),
(210, 'The Westin Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 13),
(211, 'The Westin Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 13),
(212, 'Ascott Waterplace Surabaya', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 13),
(213, 'Ascott Waterplace Surabaya', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tb_harga`
--

CREATE TABLE IF NOT EXISTS `tb_harga` (
  `id_harga` int(5) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_harga`
--

INSERT INTO `tb_harga` (`id_harga`, `harga`) VALUES
(1, '> 1.000.000'),
(2, '500.000 – 1.000.000'),
(3, '500.000 – 1.000.000'),
(4, '100.000 – 300.000'),
(5, '< 100.000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE IF NOT EXISTS `tb_kelas` (
  `id_kelas` int(5) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(1, 'Bintang 5'),
(2, 'Bintang 4'),
(3, 'Bintang 3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE IF NOT EXISTS `tb_lokasi` (
  `id_lokasi` int(5) NOT NULL,
  `nm_lokasi` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `long` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `nm_lokasi`, `lat`, `long`) VALUES
(1, 'Dukuh Pakis', '-7,28127', '112,68466'),
(2, 'Sukomanunggal', '-7,26427', '112,69734'),
(3, 'Sawahan', '-7,26302', '112,72118'),
(4, 'Tegalsari', '-7,27986', '112,73606'),
(5, 'Wonokromo', '-7,302660', '112,73310'),
(6, 'Wiyung', '-7,31527', '112,68542'),
(7, 'Gubeng', '-7,27928', '112,75392'),
(8, 'Genteng', '-7,25913', '112,74807'),
(9, 'Wonocolo', '-7,31983', '112,74203'),
(10, 'Gayungan', '-7,33054', '112,72391'),
(11, 'Tenggilis Mejoyo', '-7,32036', '112,75800'),
(12, 'Mulyorejo', '-7,26932', '112,79267'),
(13, 'Sukolilo', '-7,28819', '112,81651'),
(14, 'Rungkut', '-7,31898', '112,80462');

-- --------------------------------------------------------

--
-- Table structure for table `tb_review`
--

CREATE TABLE IF NOT EXISTS `tb_review` (
  `id_review` int(5) NOT NULL,
  `review` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_review`
--

INSERT INTO `tb_review` (`id_review`, `review`) VALUES
(1, '> 98'),
(2, '96 – 98'),
(3, '94 – 96'),
(4, '92 – 94'),
(5, '< 92');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tipe_kamar`
--

CREATE TABLE IF NOT EXISTS `tb_tipe_kamar` (
  `id_tipe_kamar` int(5) NOT NULL,
  `tipe_kamar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tipe_kamar`
--

INSERT INTO `tb_tipe_kamar` (`id_tipe_kamar`, `tipe_kamar`) VALUES
(1, 'Suite'),
(2, 'Deluxe'),
(3, 'Superior'),
(4, 'Standart'),
(5, 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `tb_training`
--

CREATE TABLE IF NOT EXISTS `tb_training` (
`id_transaksi` int(5) NOT NULL,
  `id_user` int(2) DEFAULT NULL,
  `ac_f1` int(1) DEFAULT NULL,
  `tv_f2` int(1) DEFAULT NULL,
  `internet_f3` int(1) DEFAULT NULL,
  `breakfast_f4` int(1) DEFAULT NULL,
  `ruang_meeting_f5` int(1) DEFAULT NULL,
  `fitness_f6` int(1) DEFAULT NULL,
  `restoran_f7` int(1) DEFAULT NULL,
  `parkiran_f8` int(1) DEFAULT NULL,
  `kolam_renang_f9` int(1) DEFAULT NULL,
  `area_rokok_f10` int(1) DEFAULT NULL,
  `harga_h` varchar(2) DEFAULT NULL,
  `tipe_kamar_t` varchar(2) DEFAULT NULL,
  `review_r` varchar(2) DEFAULT NULL,
  `kelas_k` varchar(2) DEFAULT NULL,
  `lokasi` varchar(3) DEFAULT NULL,
  `result` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_training`
--

INSERT INTO `tb_training` (`id_transaksi`, `id_user`, `ac_f1`, `tv_f2`, `internet_f3`, `breakfast_f4`, `ruang_meeting_f5`, `fitness_f6`, `restoran_f7`, `parkiran_f8`, `kolam_renang_f9`, `area_rokok_f10`, `harga_h`, `tipe_kamar_t`, `review_r`, `kelas_k`, `lokasi`, `result`) VALUES
(1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, '2', '3', '2', '2', '1', 1),
(2, 2, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, '0', '5', '4', '0', '1', 2),
(3, 3, 0, 0, 1, 1, 0, 0, 1, 0, 1, 0, '0', '1', '1', '1', '1', 3),
(4, 4, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, '1', '3', '0', '0', '15', 4),
(5, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, '3', '0', '4', '0', '15', 5),
(6, 3, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, '4', '2', '0', '2', '4', 6),
(7, 2, 0, 0, 0, 1, 0, 0, 0, 1, 1, 0, '5', '0', '0', '3', '12', 7),
(8, 2, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, '0', '3', '5', '0', '12', 8),
(9, 1, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, '3', '3', '5', '0', '3', 9),
(10, 4, 0, 0, 0, 1, 0, 0, 0, 1, 1, 0, '5', '1', '1', '3', '11', 10);

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
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
 ADD PRIMARY KEY (`id_hotels`);

--
-- Indexes for table `tb_harga`
--
ALTER TABLE `tb_harga`
 ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
 ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_review`
--
ALTER TABLE `tb_review`
 ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `tb_tipe_kamar`
--
ALTER TABLE `tb_tipe_kamar`
 ADD PRIMARY KEY (`id_tipe_kamar`);

--
-- Indexes for table `tb_training`
--
ALTER TABLE `tb_training`
 ADD PRIMARY KEY (`id_transaksi`);

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
MODIFY `id_detail_hotel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_foto_detail`
--
ALTER TABLE `tbl_foto_detail`
MODIFY `id_foto_detail` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
MODIFY `id_hotels` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=214;
--
-- AUTO_INCREMENT for table `tb_training`
--
ALTER TABLE `tb_training`
MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
