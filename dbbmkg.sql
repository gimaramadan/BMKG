-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 07:46 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbmkg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(200) NOT NULL,
  `nama_berkas` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `tipe_berkas` varchar(100) NOT NULL,
  `ukuran_berkas` float NOT NULL,
  `article_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`article_id`, `article_title`, `nama_berkas`, `article_content`, `tipe_berkas`, `ukuran_berkas`, `article_created_at`) VALUES
(17, 'Cerita', '1d6fdb08343e7b93016f68b17642288d.png', '<p>Cerita rakyat yang berasal dari daerah Sumatera ini berkisah tentang satu keluarga yang memiliki seorang anak bernama Malin Kundang. Kondisi keluarga tersebut serba kekurangan sehingga sang ayah merantau ke wilayah lain.<br>\r\n<br>\r\nSayangnya, sang ayah tak kunjung pulang hingga Malin dan ibunya ditinggal begitu saja. Ketika sudah dewasa, Malin memilih merantau untuk menjadi orang kaya. Namun, ketika di perjalanan merantau, kapalnya diserang bajak laut sehingga ia dan rekan-rekannya terdampar di sebuah desa.<br>\r\n<br>\r\nBeruntungnya, desa tersebut sangat subur sehingga Malin sukses menjadi kaya raya. Akhirnya Malin kembali tanah kelahirannya, ibunya yang melihat ada kapal yang berlabuh segera menghampiri Malin dengan penuh semangat. Sayangnya, Malin berpura-pura tidak mengenali ibunya karena malu memiliki ibu dengan pakaian kotor. Akibat hal itu, ibunya berdoa \"Ya Tuhanku, apabila benar ia adalah anakku maka aku kutuk ia menjadi batu.\" Saat itu juga angin kencang dan badai menghancurkan kapal Malin dan perlahan Malin berubah menjadi batu karang.</p>\r\n', '.png', 240.77, '2020-09-05 14:23:41'),
(19, 'cuaca', '107a1c7556815efaa825768031972380.png', '<p>Cerita rakyat yang berasal dari daerah Sumatera ini berkisah tentang satu keluarga yang memiliki seorang anak bernama Malin Kundang. Kondisi keluarga tersebut serba kekurangan sehingga sang ayah merantau ke wilayah lain.<br>\r\n<br>\r\nSayangnya, sang ayah tak kunjung pulang hingga Malin dan ibunya ditinggal begitu saja. Ketika sudah dewasa, Malin memilih merantau untuk menjadi orang kaya. Namun, ketika di perjalanan merantau, kapalnya diserang bajak laut sehingga ia dan rekan-rekannya terdampar di sebuah desa.<br>\r\n<br>\r\nBeruntungnya, desa tersebut sangat subur sehingga Malin sukses menjadi kaya raya. Akhirnya Malin kembali tanah kelahirannya, ibunya yang melihat ada kapal yang berlabuh segera menghampiri Malin dengan penuh semangat. Sayangnya, Malin berpura-pura tidak mengenali ibunya karena malu memiliki ibu dengan pakaian kotor. Akibat hal itu, ibunya berdoa \"Ya Tuhanku, apabila benar ia adalah anakku maka aku kutuk ia menjadi batu.\" Saat itu juga angin kencang dan badai menghancurkan kapal Malin dan perlahan Malin berubah menjadi batu karang.</p>\r\n', '.png', 2.77, '2020-09-09 04:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prospek`
--

CREATE TABLE `tbl_prospek` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_prospek`
--

INSERT INTO `tbl_prospek` (`id`, `judul`, `tanggal`, `file`) VALUES
(5, 'judul 7', '2020-08-11', '1597907034.pdf'),
(8, 'judul 2', '2020-08-02', '1597596778.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saran`
--

CREATE TABLE `tbl_saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_saran`
--

INSERT INTO `tbl_saran` (`id`, `nama`, `email`, `isi`) VALUES
(4, 'Gima Ramadan', 'gimaramadan99@gmail.com', 'aaaa'),
(5, 'STAMET', 'stamet@gmail.com', 'GOOD LUCK ! !'),
(6, 'Zulfa', 'ulbecks23@gmail.com', 'Test... ');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `nik` int(14) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`nik`, `username`, `email`, `password`, `no_telp`, `role_id`) VALUES
(2, 'stamet', 'stamet@gmail.com', '$2y$10$IconDFQCVpIX5kqOn1pr3Oy4K5XluRffHvfvp6k6xziLfmPPeNFOa', '1222331', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbvisi_misi`
--

CREATE TABLE `tbvisi_misi` (
  `id_visi` int(11) NOT NULL,
  `Visi` varchar(500) NOT NULL,
  `Misi` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbvisi_misi`
--

INSERT INTO `tbvisi_misi` (`id_visi`, `Visi`, `Misi`) VALUES
(1, 'Mewujudkan BMKG yang handal, tanggap dan mampu dalam rangka mendukung keselamatan masyarakat serta keberhasilan pembangunan nasional, dan berperan aktif di tingkat Internasional', 'Mengamati dan memahami fenomena meteorologi, klimatologi, kualitas udara, dan geofisika artinya BMKG melaksanakan operasional pengamatan dan pengumpulan data secara teratur, lengkap dan akurat guna dipakai untuk mengenali dan memahami karakteristik unsur-unsur meteorologi, klimatologi, kualitas udara, dan geofisika guna membuat prakiraan dan informasi yang akurat;\r\nMenyediakan data, informasi dan jasa meteorologi, klimatologi, kualitas udara, dan geofisika kepada para pengguna sesuai dengan kebutuhan dan keinginan mereka dengan tingkat akurasi tinggi dan tepat waktu;\r\nMengkoordinasi dan Memfasilitasi kegiatan sesuai dengan kewenangan BMKG, maka BMKG wajib mengawasi pelaksanaan operasional, memberi pedoman teknis, serta berwenang untuk mengkalibrasi peralatan meteorologi, klimatologi, kualitas udara, dan geofisika sesuai dengan peraturan yang berlaku\r\nBerpartisipasi aktif dalam kegiatan internasional artinya BMKG dalam melaksanakan kegiatan secara operasional selalu mengacu pada ketentuan internasional mengingat bahwa fenomena meteorologi, klimatologi, kualitas udara, dan geofisika tidak terbatas dan tidak terkait pada batas batas wilayah suatu negara manapun.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `kd_berkas` int(11) NOT NULL,
  `nama_berkas` varchar(255) DEFAULT NULL,
  `keterangan_berkas` varchar(255) DEFAULT NULL,
  `tipe_berkas` varchar(100) DEFAULT NULL,
  `ukuran_berkas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas`
--

INSERT INTO `tb_berkas` (`kd_berkas`, `nama_berkas`, `keterangan_berkas`, `tipe_berkas`, `ukuran_berkas`) VALUES
(29, '01c61c1876940d7daba9da2d6aa0dbb6.png', 'buletin-maret', '.png', 1551.22),
(30, '11f2172aed934f6b7f4471fc1a671a6a.png', 'buletin-april2020', '.png', 1204.58),
(31, '616f2a767bb4af4787bf2c9cd73c8980.png', 'buletin-mei2020', '.png', 1205.31),
(32, '3f82c176762c23cebf91174149468f1e.png', 'buletin-juni2020', '.png', 756.88),
(33, '35953cc71bd3961377be57968cf7051b.png', 'buletin-juli2020', '.png', 316.92);

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `nama_berkas` varchar(255) NOT NULL,
  `tipe_berkas` varchar(100) NOT NULL,
  `ukuran_berkas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id`, `nama`, `jabatan`, `nama_berkas`, `tipe_berkas`, `ukuran_berkas`) VALUES
(7, 'joni', 'Staff', '15ed4cc2613a7d85d797d5886004caa8.png', '.png', 2.77),
(8, 'Gima Ramadan', 'staff', '427ca55fc9218d977cc3ca696be8b45d.png', '.png', 2.77);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `tbl_prospek`
--
ALTER TABLE `tbl_prospek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbvisi_misi`
--
ALTER TABLE `tbvisi_misi`
  ADD PRIMARY KEY (`id_visi`);

--
-- Indexes for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD PRIMARY KEY (`kd_berkas`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_prospek`
--
ALTER TABLE `tbl_prospek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `nik` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbvisi_misi`
--
ALTER TABLE `tbvisi_misi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  MODIFY `kd_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
