-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 01:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nagari_talao`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(255) NOT NULL,
  `ad_email` varchar(255) NOT NULL,
  `ad_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_email`, `ad_password`) VALUES
(1, 'Alfin Adha Anshar', 'nagari@gmail.com', 'alfin123'),
(4, '', 'b', 'abc'),
(6, '', 'lubukaluang123', '@Nagarilubukaluang123'),
(7, 'a', 'a', '123');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `b_id` int(11) NOT NULL,
  `b_image` text NOT NULL,
  `b_cat` varchar(255) NOT NULL,
  `b_title` varchar(255) NOT NULL,
  `b_author` varchar(255) NOT NULL,
  `b_date` varchar(255) NOT NULL,
  `b_message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`b_id`, `b_image`, `b_cat`, `b_title`, `b_author`, `b_date`, `b_message`) VALUES
(1, 'aefa', 'Politik', 'aefaef', 'aefaf', 'aefaf', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(5, '', 'Politik', 'sad', 'Fulan Binti FUlan', 'asdad', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n'),
(6, '', 'Ekonomi', 'wg', 'Fulan Binti FUlan', 'wgg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(7, '', 'Wisata', 'srgsrgsrgsrrg', 'Fulan Binti FUlan', 'aersg', 'eaf 12w131323'),
(8, '', 'Pendidikan', 'aeffeaf', 'Fulan Binti FUlan', '25/7/2021 12:02:08 PM', '  aefaeffafae ae ff f fa f aefaeffafae ae ff f fa faefaeffafae ae ff f fa faefaeffafae ae ff f fa faefaeffafae ae ff f fa faefaeffafae ae ff f fa faefaeffafae ae ff f fa faefaeffafae ae ff f fa faefaeffafae ae ff f fa faefaeffafae ae ff f fa faefaeffafae ae ff f fa faefaeffafae ae ff f fa faefaeffafae ae ff f fa f'),
(9, '', 'Politik', 'gwggew wweg wg  gewge gewg ', 'Fulan Binti FUlan', '25/7/2021 12:02:24 PM', ' wgwe we we gweg wweg wg weg wegw  we wewt ry jdj y  trshshsh s stsgaerga aegraegaeg agagrra are ag raa grwgwe we we gweg wweg wg weg wegw  we wewt ry jdj y  trshshsh s stsgaerga aegraegaeg agagrra are ag raa grwgwe we we gweg wweg wg weg wegw  we wewt ry jdj y  trshshsh s stsgaerga aegraegaeg agagrra are ag raa grwgwe we we gweg wweg wg weg wegw  we wewt ry jdj y  trshshsh s stsgaerga aegraegaeg agagrra are ag raa grwgwe we we gweg wweg wg weg wegw  we wewt ry jdj y  trshshsh s stsgaerga aegraegaeg agagrra are ag raa grwgwe we we gweg wweg wg weg wegw  we wewt ry jdj y  trshshsh s stsgaerga aegraegaeg agagrra are ag raa grwgwe we we gweg wweg wg weg wegw  we wewt ry jdj y  trshshsh s stsgaerga aegraegaeg agagrra are ag raa gr'),
(11, 'IMG-614ae42eb307e1.97676158.jpeg', 'Politik', 'ok', 'alfin', '22/9/2021  03:05 PM', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. <br><br>\r\n\r\nLorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.'),
(12, 'IMG-61b07b565428b4.95056678.jpg', 'Politik', 'sv', 'efef', '8/12/2021  04:28 PM', 'sdfsf'),
(13, 'IMG-61c807125eeda6.03824917.png', 'Politik', 'test', 'test', '26/12/2021  01:09 PM', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `d_id` int(255) DEFAULT NULL,
  `d_kk` varchar(255) NOT NULL,
  `d_name` varchar(255) DEFAULT NULL,
  `d_nik` varchar(255) DEFAULT NULL,
  `d_fotokk` text DEFAULT NULL,
  `d_kelamin` varchar(255) DEFAULT NULL,
  `d_password` varchar(255) DEFAULT NULL,
  `d_status` varchar(255) DEFAULT NULL,
  `d_hub` varchar(255) DEFAULT NULL,
  `d_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`d_id`, `d_kk`, `d_name`, `d_nik`, `d_fotokk`, `d_kelamin`, `d_password`, `d_status`, `d_hub`, `d_date`) VALUES
(2, '0000000000004444', 'Alfin Adha Anshar', '1213134414144141', 'IMG-61d21ecbef1002.54704823.jpg', 'Laki-laki', '123', '2', 'Kepala Keluarga', '2022-01-02 21:53:15'),
(1, '2222222222222222', 'Alfin Adha Anshar', '2222222222222222', 'IMG-61cb226cdbcb07.57225049.jpg', 'Laki-laki', '123', '2', 'Kepala Keluarga', '2021-12-28 14:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `folder_id` varchar(255) DEFAULT NULL,
  `file_made` timestamp NOT NULL DEFAULT current_timestamp(),
  `file_type` varchar(255) DEFAULT NULL,
  `file_size` mediumblob DEFAULT NULL,
  `file_tmp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `file_name`, `folder_id`, `file_made`, `file_type`, `file_size`, `file_tmp`) VALUES
(1, 'test', '3', '2021-12-15 22:55:12', NULL, NULL, NULL),
(2, '', 'eee', '2021-12-15 23:01:43', NULL, NULL, NULL),
(3, 'IMG-61ba77f981d9c6.75067262.png', '3', '2021-12-15 23:19:21', NULL, NULL, NULL),
(4, 'IMG-61ba781f466d02.95105821.png', '3', '2021-12-15 23:19:59', NULL, NULL, NULL),
(5, 'IMG-61ba9501008824.86120284.png', '3', '2021-12-16 01:23:13', NULL, NULL, NULL),
(6, 'IMG-61ba9577954607.91057056.png', '3', '2021-12-16 01:25:11', NULL, NULL, NULL),
(7, 'IMG-61ba95b9a21746.94592136.jpg', '3', '2021-12-16 01:26:17', NULL, NULL, NULL),
(8, 'IMG-61ba9604af3328.16418659.png', '3', '2021-12-16 01:27:32', NULL, NULL, NULL),
(9, 'IMG-61ba9d1c4366b0.66004926.jpg', '3', '2021-12-16 01:57:48', NULL, NULL, NULL),
(12, 'main_image.jpg', '4', '2021-12-16 02:10:58', NULL, NULL, NULL),
(13, 'CIMB Clicks.pdf', '4', '2021-12-16 06:37:49', 'Array', NULL, NULL),
(14, 'Picture12.png', '3', '2021-12-16 06:40:02', 'Array', NULL, NULL),
(15, 'main_image.jpg', '3', '2021-12-16 06:40:14', 'Array', NULL, NULL),
(16, 'Screenshot_1.png', '3', '2021-12-16 06:40:29', 'Array', NULL, NULL),
(17, '2017-honda-civic-type-r.jpg', '3', '2021-12-16 06:40:50', 'Array', NULL, NULL),
(18, 'SK PPIU (1).pdf', '4', '2021-12-16 09:18:12', 'Array', NULL, NULL),
(20, 'restaurantjava.sql', '4', '2021-12-16 09:22:15', 'Array', NULL, NULL),
(21, '2017-honda-civic-type-r.jpg', '16', '2021-12-28 09:51:48', 'Array', 0x313231303738, 'C:xampp	mpphp27E6.tmp'),
(22, 'Picture19.png', '16', '2021-12-28 09:52:52', 'Array', 0x3433313934, 'image/png'),
(23, 'ok.pdf', '16', '2021-12-28 09:54:36', 'Array', 0x363036383432, 'application/pdf'),
(24, 'Picture17.png', '4', '2021-12-28 10:39:12', 'Array', 0x3636363432, 'image/png'),
(25, 'main_image.jpg', '4', '2021-12-28 10:50:06', 'Array', 0x323537373334, 'image/jpeg'),
(26, 'Picture21.png', '4', '2021-12-28 10:59:40', 'png', 0x3538353434, 'image/png'),
(27, 'ok.pdf', '4', '2021-12-28 11:00:13', 'pdf', 0x363036383432, 'application/pdf'),
(28, 'HTML Surat.rar', '4', '2021-12-28 11:11:22', 'rar', 0x343936363430, 'application/octet-stream'),
(29, 'Report Article for LR (1) (1).xlsx', '4', '2021-12-28 12:01:00', 'xlsx', 0x3436383934, 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

CREATE TABLE `folder` (
  `folder_id` int(255) NOT NULL,
  `folder_name` varchar(255) DEFAULT NULL,
  `folder_made` timestamp NOT NULL DEFAULT current_timestamp(),
  `folder_parent` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `folder`
--

INSERT INTO `folder` (`folder_id`, `folder_name`, `folder_made`, `folder_parent`) VALUES
(2, 'test', '2021-12-15 17:11:24', 3),
(3, 'eee', '2021-12-15 17:13:09', 4),
(4, 'Folder Baru', '2021-12-16 02:09:26', 0),
(5, 'Surat Jalan', '2021-12-20 14:01:27', 4),
(8, 'okkkkkk', '2021-12-28 09:34:50', 4),
(9, 'I know it', '2021-12-28 09:37:08', 0),
(10, 'I knewwwww', '2021-12-28 09:37:34', 9),
(11, 'iiiakkaa', '2021-12-28 09:37:57', 3),
(12, 'wwwww', '2021-12-28 09:40:36', 4),
(13, 'wwwwwqwqw', '2021-12-28 09:42:09', 4),
(14, '123', '2021-12-28 09:42:54', 4),
(15, '123', '2021-12-28 09:45:32', 3),
(16, '1234444', '2021-12-28 09:46:10', 3),
(17, '12314', '2021-12-28 09:46:56', 16);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `k_id` int(11) NOT NULL,
  `k_image` text DEFAULT NULL,
  `k_date` varchar(255) DEFAULT NULL,
  `k_message` varchar(10000) DEFAULT NULL,
  `k_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`k_id`, `k_image`, `k_date`, `k_message`, `k_title`) VALUES
(2, 'IMG-6101ddf47ca4e6.14407872.png', '29/7/2021  05:45 AM', 'ffefaef', 'aeffeqw'),
(3, 'IMG-6102170b06b333.15623986.png', '29/7/2021  09:48 AM', 'avavavwwwwww2414414', 'dvv'),
(4, 'IMG-618859f40ec3c2.73060463.png', '8/11/2021  05:57 AM', 'asadda', 'asasa');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `k_nik2` varchar(16) DEFAULT NULL,
  `k_nik` varchar(16) NOT NULL,
  `p_kk` varchar(16) DEFAULT NULL,
  `k_name` varchar(255) DEFAULT NULL,
  `k_l_tempat` varchar(255) DEFAULT NULL,
  `k_l_tanggal` varchar(255) DEFAULT NULL,
  `kelamin` varchar(255) DEFAULT NULL,
  `k_suku` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `k_alamat` varchar(255) DEFAULT NULL,
  `k_hub` varchar(255) DEFAULT NULL,
  `k_telp` varchar(255) DEFAULT NULL,
  `pend` varchar(255) DEFAULT NULL,
  `k_pend_nama` varchar(255) DEFAULT NULL,
  `pek` varchar(255) DEFAULT NULL,
  `k_pek_nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`k_nik2`, `k_nik`, `p_kk`, `k_name`, `k_l_tempat`, `k_l_tanggal`, `kelamin`, `k_suku`, `agama`, `k_alamat`, `k_hub`, `k_telp`, `pend`, `k_pend_nama`, `pek`, `k_pek_nama`) VALUES
('', '', '', 'seefsfae', 'aff', 'aefafae', 'Laki-laki', 'faeff', 'Islam', 'aefaef', 'afaef', NULL, 'afaef', 'aefaf', 'aefaefaf', 'afaef'),
('MTGG71ARA7HSQZFC', '1111111111111111', '2323232323232323', 'aaan', 'qwerty', ' 14 December 2021', 'Perempuan', 'asdfgh', 'Islam', 'Talao', 'Istri', NULL, 'Sedang SMA/Sederajat', '', 'BELUM/TIDAK BEKERJA', ''),
('PXBCABHMORBZBOOQ', '1111121211111122', '0000000000004444', 'Cindy Kartika Sari', 'Padang', ' 23 December 1998', 'Perempuan', 'Koto', 'Islam', 'Tarantang', 'Istri', '9889878676687', 'Sedang D-3/Sederajat', 'UNIDHA', 'AKUNTAN', 'PT Kharisma'),
('7RY7QIFAFMTQ200J', '1121231123144414', '1111111111111111', 'dcwcwccwc', 'wcwrc', ' 18 October 2021', 'Perempuan', 'wrwwf', 'Islam', 'wrfwfwfrfwfef', 'Istri', '333431312', 'Tidak Pernah Sekolah', 'ewfwef', 'BELUM/TIDAK BEKERJA', 'esfwef'),
('3Z144ERV8FHXY3FI', '2111312313123132', '3334445556667778', 'adfaef', '', '', 'Laki-laki', '', 'Islam', '', 'Istri', NULL, 'Tidak Pernah Sekolah', '', 'BELUM/TIDAK BEKERJA', ''),
('', '2342532523', '222333444555666', 'Muhammad Zainuddin', 'Padang', ' 15 August 2002', 'Perempuan', 'Kotosasdad', 'Buddha', 'Komplek Pelangi INdah B3 no2', 'Istri', '085283788991', 'S1', 'UTeM', 'Pegawai Negeri Sipil', 'Kantor Wali Nagari'),
('', '2343413441343442', '0000000000000000', 'asadad', '', ' 11 August 2021', 'Laki-laki', '', 'Konghucu', '', 'Anak', NULL, '', '', '', ''),
('', '322222222222234', '0000000000000000', 'erfegegeg', '', '', 'Laki-laki', '', 'Islam', '', 'Anak', NULL, '', '', '', ''),
('ZZ4URTJMV0BCC6Z2', '3421315365464636', '8888888888888887', 'qwqqwqw', '', '', '', '', 'Pilih Agama', '', '....', '', '', '', '', ''),
('', '3454555555555555', '4555555555555555', 'sgffgrs', '', '', 'Laki-laki', '', 'Islam', '', 'Istri', '', 'S3', '', 'Petani', ''),
('', '78678990', '222333444555666', 'srgsgsr', '', '', 'Laki-laki', '', 'Islam', '', 'Istri', '', '', '', '', ''),
('5CQ8H5UIOYUGKJGE', '9999999999990003', '9999999999990000', 'Siti Khadijah', 'Bukittinggi', ' 26 December 1993', 'Perempuan', 'Chanigo', 'Islam', 'Perumahan Mutiara Hati, B6 No.3 , Korong Gdang, Padang', 'Istri', NULL, 'Tamat S-3/Sederajat', 'Harvard  University, USA', 'ANGGOTA MAHKAMAH KONSTITUSI', 'PEMDA');

-- --------------------------------------------------------

--
-- Table structure for table `lapor`
--

CREATE TABLE `lapor` (
  `l_id` int(11) NOT NULL,
  `l_type` varchar(255) DEFAULT NULL,
  `l_cat` varchar(255) DEFAULT NULL,
  `l_title` varchar(255) DEFAULT NULL,
  `l_message` varchar(10000) DEFAULT NULL,
  `l_date` varchar(255) DEFAULT NULL,
  `l_loc` varchar(255) DEFAULT NULL,
  `l_namainstansi` varchar(255) DEFAULT NULL,
  `l_pelapornik` varchar(255) DEFAULT NULL,
  `l_date2` varchar(255) DEFAULT NULL,
  `l_pelaporkk` varchar(255) DEFAULT NULL,
  `l_status` varchar(255) DEFAULT NULL,
  `l_badge` varchar(255) DEFAULT NULL,
  `l_anonim` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapor`
--

INSERT INTO `lapor` (`l_id`, `l_type`, `l_cat`, `l_title`, `l_message`, `l_date`, `l_loc`, `l_namainstansi`, `l_pelapornik`, `l_date2`, `l_pelaporkk`, `l_status`, `l_badge`, `l_anonim`) VALUES
(3, 'PENGADUAN', 'Fasilitas Umum', 'srfgaesg', 'eryery', ' 23 July 2021', 'etet', '', '', '', '', 'Sudah Selesai', NULL, ''),
(4, 'PENGADUAN', 'Fasilitas Umum', 'asdawf', 'wrhetrhth', ' 23 July 2021', 'rjtrjtr', 'treh', '', '', '', 'Sudah Selesai', NULL, ''),
(5, 'PENGADUAN', 'Bencana Alam', 'dhdj', 'ttrj', ' 23 July 2021', 'rjrthtrh', 'rrthrtj', '', '', '', 'Dalam Proses', NULL, ''),
(6, 'PENGADUAN', 'Fasilitas Umum', 'ukyuky', 'ukyuk', ' 21 July 2021', 'ukukugk', 'gykgyj', '', '', '', 'Dalam Proses', NULL, ''),
(7, 'PENGADUAN', 'Keresahan', 'sdaf', 'afaf', ' 06 July 2021', 'awfaf', 'wafaf', '', '23.7.2021 04:13:15 PM', '', 'Dalam Proses', NULL, '1'),
(8, 'PENGADUAN', 'Protokol Kesehatan', 'tfhdth', 'dthdth', ' 07 July 2021', 'dthdh', 'dthdh', '', '23.7.2021 04:15:51 PM', '1004040', 'Dalam Proses', NULL, '1'),
(9, 'PENGADUAN', 'Fasilitas Umum', 'wafawf', 'awfaf', ' 08 July 2021', 'afaf', 'awfa', '66666', '23.7.2021 04:42:27 PM', '1004040', 'Dalam Proses', NULL, '0'),
(10, 'PENGADUAN', 'Pilih Kategori Laporan', '', '', '----', '', '', '12234', '23.7.2021 04:49:51 PM', '1004040', 'Dalam Proses', NULL, ''),
(11, 'PENGADUAN', 'Fasilitas Umum', 'egaeg', 'aegaeg', ' 08 July 2021', 'eagaeg', 'egagga', '66666', '23.7.2021 04:51:24 PM', '1004040', 'Dalam Proses', NULL, '1'),
(12, 'ASPIRASI', 'Fasilitas Umum', 'af', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\n', '----', 'awfa', 'aefaef', '66666', '23.7.2021 04:53:52 PM', '1004040', 'Dalam Proses', NULL, ''),
(13, 'ASPIRASI', 'Bencana Alam', 'aefaeg', 'gsrgsrgsgsghddh', '----', 'dgdrh', 'dhdthdrh', '12234', '23.7.2021 05:06:46 PM', '1004040', 'Sudah Selesai', NULL, '1'),
(14, 'PENGADUAN', 'Bencana Alam', 'Banjir di selokan sebelah Mesjid Ar Rahman', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', ' 27 July 2021', 'Mesjid Ar Rahman', 'Satpol PP', '939829840', '26.7.2021 02:38:45 PM', '2147483647', 'Sudah Selesai', NULL, '1'),
(15, 'PENGADUAN', 'Bencana Alam', 'afeaf', 'aaef', ' 28 July 2021', 'aca', 'acs', '123456789', '29.7.2021 09:13:11 AM', '123456', 'Dalam Proses', NULL, '2'),
(16, 'PENGADUAN', 'Bencana Alam', 'af', 'afa', ' 29 July 2021', 'afaf', 'asdac', '12333213', '29.7.2021 09:19:39 AM', '123456', 'Dalam Proses', NULL, '2'),
(17, 'PENGADUAN', 'Bencana Alam', 'srfsf', 'sefsrf', ' 15 August 2021', 'rsgrg', 'rgrsgrg', 'rfwrf', '15.8.2021 02:51:17 AM', '222333444555666', 'Dalam Proses', NULL, '1'),
(18, 'PENGADUAN', 'Fasilitas Umum', 'ssv', 'sfsfr', ' 16 August 2021', 'srgrsg', 'rgrdg', '2342535', '15.8.2021 03:02:50 AM', '222333444555666', 'Dalam Proses', NULL, '2'),
(19, 'PENGADUAN', 'Bencana Alam', 'fhfthfj', 'kgkguj', ' 09 August 2021', 'ugkg', 'guguk', '5464747', '15.8.2021 03:04:19 AM', '222333444555666', 'Dalam Proses', NULL, '1'),
(20, 'PENGADUAN', 'Bencana Alam', '41414', '', '', '', '', '121244', '30.9.2021 10:37:39 PM', '8888888888888887', 'Dalam Proses', NULL, ''),
(21, 'ASPIRASI', 'Bencana Alam', '24t2t', '24t4t4', '----', 't4t2', '4t4t', '2535225', '30.9.2021 10:38:47 PM', '8888888888888887', 'Sudah Selesai', NULL, '1'),
(22, 'PENGADUAN', 'Bencana Alam', 'qeefqf', '', '', '', '', '', '30.9.2021 10:48:04 PM', '8888888888888887', 'Dalam Proses', NULL, ''),
(23, 'PENGADUAN', 'Pilih Kategori Laporan', '', '', '', '', '', '', '30.9.2021 10:54:24 PM', '8888888888888887', 'Dalam Proses', NULL, ''),
(24, 'PENGADUAN', 'Bencana Alam', 'swxwxwxwexwexwx', 'dwxwxwxd', ' 09 November 2021', 'dwxwx', 'dxdx', '0000000000000000', '23.11.2021 08:21:09 PM', '0000000000000000', 'Sudah Selesai', NULL, '2'),
(25, 'PENGADUAN', 'Bencana Alam', 'Putus Cinta', 'asdas ae da e d ae eea a', ' 06 December 2021', 'Kuranji Padang', 'eeac', '3334445556667778', '18.12.2021 08:29:26 AM', '3334445556667778', 'Dalam Proses', NULL, '2'),
(26, 'PENGADUAN', 'Fasilitas Umum', 'ewdewd', 'ewdededwedwe', ' 06 December 2021', 'edewd', 'wedwde', '1121231123144414', '18.12.2021 10:02:59 AM', '1111111111111111', 'Dalam Proses', NULL, '2'),
(27, 'PENGADUAN', 'Keresahan', 'ewdewd', 'edewddew', ' 06 December 2021', 'edwedd', 'eded', '1111111111111111', '18.12.2021 10:04:08 AM', '1111111111111111', 'Sudah Diproses', 'badge-success', '2'),
(28, 'PENGADUAN', 'Fasilitas Umum', 'Banjir di selokan sebelah Mesjid Ar Rahman', 'efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae efafafafa  ea ae ae eae ', ' 21 December 2021', 'Padang', '-', '0000000000004443', '22.12.2021 01:59:17 PM', '0000000000004444', 'Sudah Selesai', 'badge-success', '2'),
(29, 'ASPIRASI', 'Keresahan', 'asasssaas', 'assaadfeffe', '----', 'qfqf', 'qfqefeqfqff', '', '22.12.2021 03:58:55 PM', '0000000000004444', 'Sudah Selesai', 'badge-success', '2'),
(30, 'PENGADUAN', 'Fasilitas Umum', 'Tiang Putus', 'Tiang putus di aerah bawah jembatan kuranji', ' 25 December 2021', 'Jemabtan Kuranji', 'PLN', '9999999999990003', '26.12.2021 05:34:54 AM', '9999999999990000', 'Sudah Diproses', 'badge-success', '2');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(11) DEFAULT NULL,
  `p_kk` varchar(255) NOT NULL,
  `p_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `p_kk`, `p_password`) VALUES
(NULL, '2222222222222222', '123');

-- --------------------------------------------------------

--
-- Table structure for table `nagari`
--

CREATE TABLE `nagari` (
  `n_id` int(255) NOT NULL,
  `n_name` varchar(255) DEFAULT NULL,
  `n_address` varchar(255) DEFAULT NULL,
  `n_email` varchar(255) DEFAULT NULL,
  `n_fb` varchar(255) DEFAULT NULL,
  `n_twitter` varchar(255) DEFAULT NULL,
  `n_ig` varchar(255) DEFAULT NULL,
  `n_kontak1` varchar(255) DEFAULT NULL,
  `n_kontak2` varchar(255) DEFAULT NULL,
  `n_kontak3` varchar(255) DEFAULT NULL,
  `n_kontak4` varchar(255) DEFAULT NULL,
  `n_color` varchar(255) DEFAULT NULL,
  `n_image1` text DEFAULT NULL,
  `n_image2` text DEFAULT NULL,
  `n_image3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nagari`
--

INSERT INTO `nagari` (`n_id`, `n_name`, `n_address`, `n_email`, `n_fb`, `n_twitter`, `n_ig`, `n_kontak1`, `n_kontak2`, `n_kontak3`, `n_kontak4`, `n_color`, `n_image1`, `n_image2`, `n_image3`) VALUES
(1, 'Talao Sungai Kunyit', 'QC6J+W67, Magek, Kamang Magek, Agam Regency, West Sumatra 26152', 'nagari.talao@gmail.com', '-', '-', '-', '6285263968189', '6285263968189', '6285263968189', '6285263968189', '#0aa619', 'IMG-61c78bffc39f22.00014430.jpg', 'IMG-61c78caa2e6ca0.22377926.jpg', 'IMG-61bc113aba85a3.33519817.png');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `notif_id` int(255) NOT NULL,
  `notif_kk` varchar(255) DEFAULT NULL,
  `notif_message` varchar(255) DEFAULT NULL,
  `notif_logo` varchar(255) DEFAULT NULL,
  `notif_icon` varchar(255) DEFAULT NULL,
  `notif_time` timestamp NULL DEFAULT current_timestamp(),
  `notif_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`notif_id`, `notif_kk`, `notif_message`, `notif_logo`, `notif_icon`, `notif_time`, `notif_title`) VALUES
(1, '0000000000004444', 'Selamat, Alfin Anshar Adha dengan nomor Kartu Keluarga ( 0000000000004444 ), akun anda sudah terdaftar di dalam Akun SIMNagari.', 'ïˆŽ', 'bg-info', '2021-12-22 06:47:26', 'Data Penduduk'),
(2, '0000000000004444', 'Selamat, pengaduan anda sedang di proses oleh operator nagari. Proses akan dilakukan selama 24 jam atau 2 hari. Terima Kasih', '?', 'bg-green', '2021-12-22 07:00:14', 'Pengaduan'),
(3, '0000000000004444', 'Aspirasi anda sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï‰œ', 'bg-green', '2021-12-22 08:59:12', 'Aspirasi'),
(4, '0000000000004444', 'Pengaduan anda sudah di teirma oleh operator dan akan segera di tindak lanjuti. Terima Kasih', 'ï‰œ', 'bg-green', '2021-12-22 09:45:46', 'Pengaduan'),
(5, '0000000000004444', 'Pengaduan anda sudah di teirma oleh operator dan akan segera di tindak lanjuti. Terima Kasih', 'ï‰œ', 'bg-green', '2021-12-22 09:46:19', 'Pengaduan'),
(6, '2323232323232323', 'Selamat, Budi bin buda dengan nomor Kartu Keluarga ( 2323232323232323 ), akun anda sudah terdaftar di dalam Akun SIMNagari.', 'ïˆŽ', 'bg-info', '2021-12-22 15:39:14', 'Data Penduduk'),
(7, '0000000000004444', 'Permohonan cetak surat ( Surat Rekomendasi e-KTP ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-24 12:38:35', 'Permohonan Surat'),
(8, '0000000000004444', 'Permohonan cetak surat ( Surat Rekomendasi e-KTP ) berhasil !. Silahkan ambil surat di kantor Wali Nagari', 'ï†°', 'bg-orange', '2021-12-24 13:05:41', 'Permohonan Surat'),
(9, '0000000000004444', 'Permohonan cetak surat ( Surat Rekomendasi e-KTP ) Tidak Berhasil !. Silahkan tanya operator Nagari', 'ï†°', 'bg-orange', '2021-12-24 13:10:11', 'Permohonan Surat'),
(10, '0000000000004444', 'Permohonan cetak surat ( Surat Pembuatan KK ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-24 16:12:21', 'Permohonan Surat'),
(11, '0000000000004444', 'Permohonan cetak surat ( Surat Rekomendasi KK ) Tidak Berhasil !. Silahkan tanya operator Nagari', 'ï†°', 'bg-orange', '2021-12-24 16:15:20', 'Permohonan Surat'),
(12, '0000000000004444', 'Permohonan cetak surat ( Surat Berdomisili ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-24 16:49:39', 'Permohonan Surat'),
(13, '0000000000004444', 'Permohonan cetak surat ( Surat Berdomisili ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-24 16:51:02', 'Permohonan Surat'),
(14, '0000000000004444', 'Permohonan cetak surat ( Surat Keterangan Usaha ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-25 14:41:12', 'Permohonan Surat'),
(15, '0000000000004444', 'Permohonan cetak surat ( Surat Keterangan Beda Nama ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-25 19:24:11', 'Permohonan Surat'),
(16, '0000000000004444', 'Permohonan cetak surat ( Surat Keterangan Beda Nama ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-25 19:25:24', 'Permohonan Surat'),
(17, '0000000000004444', 'Permohonan cetak surat ( Surat Keterangan Beda Nama ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-25 19:25:24', 'Permohonan Surat'),
(18, '0000000000004444', 'Permohonan cetak surat ( Surat Keterangan Beda Nama ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-25 19:27:30', 'Permohonan Surat'),
(19, '0000000000004444', 'Permohonan cetak surat ( Surat Keterangan Beda Nama ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-25 19:29:33', 'Permohonan Surat'),
(20, '0000000000004444', 'Permohonan cetak surat ( Surat Keterangan Beda Nama ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-25 19:32:42', 'Permohonan Surat'),
(21, '0000000000004444', 'Permohonan cetak surat ( Surat Berdomisili ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-25 19:40:14', 'Permohonan Surat'),
(22, '0000000000004444', 'Permohonan cetak surat ( Surat Keterangan Beda Nama ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-25 19:46:04', 'Permohonan Surat'),
(23, '0000000000004444', 'Permohonan cetak surat ( Surat Keterangan Beda Nama ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-25 19:48:06', 'Permohonan Surat'),
(24, '0000000000004444', 'Permohonan cetak surat (  ) berhasil !. Silahkan segera mengambil surat di kantor Wali Nagari', 'ï†°', 'bg-orange', '2021-12-25 19:54:01', 'Permohonan Surat'),
(25, '0000000000004444', 'Permohonan cetak surat ( Surat Berdomisili ) berhasil !. Silahkan segera mengambil surat di kantor Wali Nagari', 'ï†°', 'bg-orange', '2021-12-25 19:58:21', 'Permohonan Surat'),
(26, '9999999999990000', 'Selamat, Hilman bin Razak dengan nomor Kartu Keluarga ( 9999999999990000 ), akun anda sudah terdaftar di dalam Akun SIMNagari.', 'ïˆŽ', 'bg-info', '2021-12-25 22:29:16', 'Data Penduduk'),
(27, '9999999999990000', 'Selamat, pengaduan anda sedang di proses oleh operator nagari. Proses akan dilakukan selama 24 jam atau 2 hari. Terima Kasih', 'ï‰œ', 'bg-green', '2021-12-25 22:36:00', 'Pengaduan'),
(28, '9999999999990000', 'Permohonan cetak surat ( Surat Keterangan Usaha ) sedang di proses oleh operator nagari. Proses akan dilakukan selama 1-2 hari. Terima Kasih', 'ï†°', 'bg-orange', '2021-12-25 22:37:53', 'Permohonan Surat'),
(29, '1111111111111111', 'Pengaduan anda tentang ( ewdewd ) berhasil diproses ! Terima Kasih atas kontribusinya', 'ï‰œ', 'bg-green', '2021-12-25 23:10:29', 'PENGADUAN'),
(30, '9999999999990000', 'Pengaduan anda tentang ( Tiang Putus ) berhasil diproses ! Terima Kasih atas kontribusinya', 'ï‰œ', 'bg-green', '2021-12-25 23:10:40', 'PENGADUAN'),
(35, 'simnag', 'Selamat Datang di Website Official Nagari Talao Sungai Kunyit', 'ï‡³', 'bg-red', '2021-12-25 23:45:16', 'Pengumuman'),
(36, '0000000000004444', 'Selamat, Alfin Adha Anshar dengan nomor Kartu Keluarga ( 0000000000004444 ), akun anda sudah terdaftar di dalam Akun SIMNagari.', 'ïˆŽ', 'bg-info', '2022-01-02 21:53:40', 'Data Penduduk'),
(37, '2222222222222222', 'Selamat, Alfin Adha Anshar dengan nomor Kartu Keluarga ( 2222222222222222 ), akun anda sudah terdaftar di dalam Akun SIMNagari.', 'ïˆŽ', 'bg-info', '2022-01-03 23:30:44', 'Data Penduduk');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `p_kk` varchar(255) DEFAULT NULL,
  `p_nik` varchar(16) NOT NULL,
  `p_nik2` varchar(255) DEFAULT NULL,
  `p_password` varchar(255) DEFAULT NULL,
  `p_name` varchar(255) DEFAULT NULL,
  `p_l_tempat` varchar(255) DEFAULT NULL,
  `p_l_tanggal` varchar(255) DEFAULT NULL,
  `kelamin` varchar(255) DEFAULT NULL,
  `p_suku` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `p_alamat` varchar(255) DEFAULT NULL,
  `p_hub` varchar(255) DEFAULT NULL,
  `p_telp` varchar(255) DEFAULT NULL,
  `pend` varchar(255) DEFAULT NULL,
  `p_pend_nama` varchar(255) DEFAULT NULL,
  `pek` varchar(255) DEFAULT NULL,
  `p_pek_nama` varchar(255) DEFAULT NULL,
  `p_fotokk` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`p_kk`, `p_nik`, `p_nik2`, `p_password`, `p_name`, `p_l_tempat`, `p_l_tanggal`, `kelamin`, `p_suku`, `agama`, `p_alamat`, `p_hub`, `p_telp`, `pend`, `p_pend_nama`, `pek`, `p_pek_nama`, `p_fotokk`) VALUES
('0000000000004444', '0000000000003333', 'KXGI4T7IUAHZI4RB', NULL, 'Cindy Adam Sari', 'Padang', ' 03 January 2022', 'Perempuan', 'Koto', 'Islam', 'Padang', 'Istri', NULL, 'Tamat D-3/Sederajat', 'OK', 'BELUM/TIDAK BEKERJA', 'ok', NULL),
('0000000000004444', '1213134414144141', NULL, '123', 'Alfin Adha Anshar', NULL, NULL, 'Laki-laki', NULL, NULL, NULL, 'Kepala Keluarga', NULL, NULL, NULL, NULL, NULL, 'IMG-61d21ecbef1002.54704823.jpg'),
('0000000000004444', '2131441415434444', 'G179LTN16VGBOFXS', NULL, 'Aiman', 'wdaddw', '', 'Laki-laki', '', 'Islam', '', 'Famili Lain', '211312312321', 'Tidak Pernah Sekolah', '', 'BELUM/TIDAK BEKERJA', '', NULL),
('2222222222222222', '2222222222222222', NULL, '123', 'Alfin Adha Anshar', NULL, NULL, 'Laki-laki', NULL, NULL, NULL, 'Kepala Keluarga', NULL, NULL, NULL, NULL, NULL, 'IMG-61cb226cdbcb07.57225049.jpg'),
('0000000000004444', '4333333333333333', 'IZVCKVG9DX897VHA', NULL, 'Aminuddin', '', '', 'Laki-laki', '', 'Islam', '', 'Anak', NULL, 'Tidak Pernah Sekolah', '', 'BELUM/TIDAK BEKERJA', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `peng_id` int(11) NOT NULL,
  `peng_date` varchar(255) NOT NULL,
  `peng_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`peng_id`, `peng_date`, `peng_message`) VALUES
(3, '26.12.2021 06:44:00 AM', 'Selamat Datang di Website Official Nagari Talao Sungai Kunyit');

-- --------------------------------------------------------

--
-- Table structure for table `perantau`
--

CREATE TABLE `perantau` (
  `per_id` int(11) NOT NULL,
  `per_nik` int(11) DEFAULT NULL,
  `per_name` varchar(255) DEFAULT NULL,
  `per_pek` varchar(255) DEFAULT NULL,
  `per_address` varchar(255) DEFAULT NULL,
  `per_country` varchar(255) DEFAULT NULL,
  `per_prov` varchar(255) DEFAULT NULL,
  `per_wa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perantau`
--

INSERT INTO `perantau` (`per_id`, `per_nik`, `per_name`, `per_pek`, `per_address`, `per_country`, `per_prov`, `per_wa`) VALUES
(5, NULL, NULL, NULL, NULL, 'Thailand', NULL, NULL),
(6, 123132, 'adad', 'afaf', 'adefdaf', 'Albania', '', '21313000000'),
(7, 0, 'wdqwd', 'qwdqwdqw', 'qwdqdw', 'Bangladesh', 'Kalteng', '341424'),
(8, 0, 'wwefwefwf', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pn_agama`
--

CREATE TABLE `pn_agama` (
  `pn_agama_id` int(11) NOT NULL,
  `pn_agama_jor` varchar(255) DEFAULT NULL,
  `pn_agama_1` varchar(255) NOT NULL,
  `pn_agama_2` varchar(255) DEFAULT NULL,
  `pn_agama_3` varchar(255) DEFAULT NULL,
  `pn_agama_4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pn_agama`
--

INSERT INTO `pn_agama` (`pn_agama_id`, `pn_agama_jor`, `pn_agama_1`, `pn_agama_2`, `pn_agama_3`, `pn_agama_4`) VALUES
(1, 'Sungai Jerinjing', '1454', '2', '0', '0'),
(2, 'Talao', '495', '0', '0', '0'),
(3, 'Test', '900', '90', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pn_pdk`
--

CREATE TABLE `pn_pdk` (
  `pn_pdk_id` int(11) NOT NULL,
  `pn_pdk_jor` varchar(255) NOT NULL,
  `pn_pdk_pdk` varchar(255) NOT NULL,
  `pn_pdk_kk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pn_pdk`
--

INSERT INTO `pn_pdk` (`pn_pdk_id`, `pn_pdk_jor`, `pn_pdk_pdk`, `pn_pdk_kk`) VALUES
(2, 'okokk', '766776', '98');

-- --------------------------------------------------------

--
-- Table structure for table `pn_pek`
--

CREATE TABLE `pn_pek` (
  `pn_pek_id` int(11) NOT NULL,
  `pn_pek_nama` varchar(255) DEFAULT NULL,
  `pn_pek_jumlah` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pn_pek`
--

INSERT INTO `pn_pek` (`pn_pek_id`, `pn_pek_nama`, `pn_pek_jumlah`) VALUES
(1, 'Petanii', '123');

-- --------------------------------------------------------

--
-- Table structure for table `pn_sekolah`
--

CREATE TABLE `pn_sekolah` (
  `pn_sek_id` int(11) NOT NULL,
  `pn_sek_tingkat` varchar(255) NOT NULL,
  `pn_sek_nama` varchar(255) NOT NULL,
  `pn_sek_jor` varchar(255) NOT NULL,
  `pn_sek_guru` varchar(255) NOT NULL,
  `pn_sek_siswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pn_sekolah`
--

INSERT INTO `pn_sekolah` (`pn_sek_id`, `pn_sek_tingkat`, `pn_sek_nama`, `pn_sek_jor`, `pn_sek_guru`, `pn_sek_siswa`) VALUES
(1, 'PAUD', 'ww', 'www', '2112', '131');

-- --------------------------------------------------------

--
-- Table structure for table `pn_umur`
--

CREATE TABLE `pn_umur` (
  `pn_umur_id` int(11) NOT NULL,
  `pn_umur_cat` varchar(255) DEFAULT NULL,
  `pn_umur_l` varchar(255) DEFAULT NULL,
  `pn_umur_p` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pn_umur`
--

INSERT INTO `pn_umur` (`pn_umur_id`, `pn_umur_cat`, `pn_umur_l`, `pn_umur_p`) VALUES
(1, '0-5', '1213', '13131'),
(2, '5-10', '232', '424'),
(3, '10-15', '212', '131'),
(4, '15-20', '1313', '1313'),
(5, '20-25', '3232', '2332'),
(6, '25-30', '2323', '2323'),
(7, '30-35', '12', '31'),
(8, '35-40', '232', '232'),
(9, '40-45', '232', '232'),
(10, '45-50', '2323', '434'),
(11, '50-55', '354', '545'),
(12, '55-60', '235', '245'),
(13, '>60', '543', '231');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `s_id` int(11) NOT NULL,
  `s_username` varchar(255) DEFAULT NULL,
  `s_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`s_id`, `s_username`, `s_password`) VALUES
(1, 'Superadmin', 'JfHOaA9NG3excnxC'),
(2, 'alfin', '@Alfin20041997');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `s_id` int(255) NOT NULL,
  `s_status` varchar(255) DEFAULT NULL,
  `s_badge` varchar(255) DEFAULT NULL,
  `s_date` varchar(255) DEFAULT NULL,
  `s_title` varchar(255) DEFAULT NULL,
  `s_made` timestamp NULL DEFAULT current_timestamp(),
  `s_filepath` varchar(255) DEFAULT NULL,
  `s_p_kk` varchar(255) DEFAULT NULL,
  `s_p_nik` varchar(255) DEFAULT NULL,
  `s_p_name` varchar(255) DEFAULT NULL,
  `s_p_tanggal_l` mediumtext DEFAULT NULL,
  `s_p_tempat_l` varchar(255) DEFAULT NULL,
  `s_p_kelamin` varchar(255) DEFAULT NULL,
  `s_p_agama` varchar(255) DEFAULT NULL,
  `s_p_status` varchar(255) DEFAULT NULL,
  `s_p_pek` varchar(255) DEFAULT NULL,
  `s_p_pen` varchar(255) DEFAULT NULL,
  `s_p_alamat` varchar(255) DEFAULT NULL,
  `s_p_suku` varchar(255) DEFAULT NULL,
  `s_p_tujuan` varchar(255) DEFAULT NULL,
  `s4_nama_usaha` varchar(255) DEFAULT NULL,
  `s_p_jorong` varchar(255) DEFAULT NULL,
  `s5_p_name` varchar(255) DEFAULT NULL,
  `s5_p_nik` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`s_id`, `s_status`, `s_badge`, `s_date`, `s_title`, `s_made`, `s_filepath`, `s_p_kk`, `s_p_nik`, `s_p_name`, `s_p_tanggal_l`, `s_p_tempat_l`, `s_p_kelamin`, `s_p_agama`, `s_p_status`, `s_p_pek`, `s_p_pen`, `s_p_alamat`, `s_p_suku`, `s_p_tujuan`, `s4_nama_usaha`, `s_p_jorong`, `s5_p_name`, `s5_p_nik`) VALUES
(2, 'Sudah Diproses', 'badge-success', '24 December 2021', 'Surat Rekomendasi e-KTP', '2021-12-24 06:33:04', 'a_surat_print_01.php', '0000000000004444', '0000000000004443', 'Alfin Anshar Adha', ' 20 April 1997', 'Padang', 'Laki-laki', 'Islam', 'Sudah Kawin', 'BELUM/TIDAK BEKERJA', NULL, 'Komplek Pelangi INdah B3 No.2 Korong Gadang Kuranji, Pdang, Sumatera Barat', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Dalam Proses', 'badge-warning', '24 December 2021', 'Surat Rekomendasi e-KTP', '2021-12-24 12:11:24', 'a_surat_print_01.php', '0000000000004444', '1111121211111122', 'Cindy Kartika Sari', ' 23 December 1998', 'Padang', 'Perempuan', 'Islam', 'Sudah Kawin', 'AKUNTAN', NULL, 'Tarantang', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Ditolak', 'badge-danger', '24 December 2021', 'Surat Rekomendasi e-KTP', '2021-12-24 12:37:51', 'a_surat_print_01.php', '0000000000004444', '0000000000004443', 'Cindy Kartika Sari', ' 20 April 1997', 'Padang', 'Laki-laki', 'Islam', 'Sudah Kawin', 'BELUM/TIDAK BEKERJA', NULL, 'Komplek Pelangi INdah B3 No.2 Korong Gadang Kuranji, Pdang, Sumatera Barat', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Sudah Diproses', 'badge-success', '24 December 2021', 'Surat Rekomendasi e-KTP', '2021-12-24 12:38:35', 'a_surat_print_01.php', '0000000000004444', '0000000000004443', 'Alfin Anshar Adha', ' 20 April 1997', 'Padang', 'Laki-laki', 'Islam', 'Sudah Kawin', 'BELUM/TIDAK BEKERJA', NULL, 'Komplek Pelangi INdah B3 No.2 Korong Gadang Kuranji, Pdang, Sumatera Barat', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Ditolak', 'badge-danger', '24 December 2021', 'Surat Rekomendasi KK', '2021-12-24 16:12:21', 'a_surat_print_02.php', '0000000000004444', '0000000000004443', 'Alfin Anshar Adha', ' 20 April 1997', 'Padang', 'Laki-laki', 'Islam', 'Sudah Kawin', 'BELUM/TIDAK BEKERJA', NULL, 'Komplek Pelangi INdah B3 No.2 Korong Gadang Kuranji, Pdang, Sumatera Barat', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Dalam Proses', 'badge-warning', '24 December 2021', 'Surat Berdomisili', '2021-12-24 16:49:39', 'a_surat_print_03.php', '0000000000004444', '0000000000004443', 'Alfin Anshar Adha', ' 20 April 1997', 'Padang', 'Laki-laki', 'Islam', 'Sudah Kawin', 'BELUM/TIDAK BEKERJA', NULL, 'Komplek Pelangi INdah B3 No.2 Korong Gadang Kuranji, Pdang, Sumatera Barat', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Dalam Proses', 'badge-warning', '24 December 2021', 'Surat Berdomisili', '2021-12-24 16:51:02', 'a_surat_print_03.php', '0000000000004444', '0000000000004443', 'Alfin Anshar Adha', ' 20 April 1997', 'Padang', 'Laki-laki', 'Islam', 'Sudah Kawin', 'BELUM/TIDAK BEKERJA', NULL, 'Komplek Pelangi INdah B3 No.2 Korong Gadang Kuranji, Pdang, Sumatera Barat', NULL, 'Bertanam', NULL, NULL, NULL, NULL),
(9, 'Dalam Proses', 'badge-warning', '25 December 2021', 'Surat Keterangan Usaha', '2021-12-25 14:41:12', 'a_surat_print_04.php', '0000000000004444', '0000000000004443', 'Alfin Anshar Adha', ' 20 April 1997', 'Padang', 'Laki-laki', 'Islam', 'Sudah Kawin', 'BELUM/TIDAK BEKERJA', NULL, 'Komplek Pelangi INdah B3 No.2 Korong Gadang Kuranji, Pdang, Sumatera Barat', NULL, '', 'Bidang Perikanan', 'Jorong Talao', NULL, NULL),
(10, 'Dalam Proses', 'badge-warning', '25 December 2021', 'Surat Keterangan Beda Nama', '2021-12-25 19:24:11', 'a_surat_print_05.php', '0000000000004444', '0000000000004443', 'Alfin Anshar Adha', ' 20 April 1997', 'Padang', 'Laki-laki', 'Islam', 'Sudah Kawin', 'BELUM/TIDAK BEKERJA', NULL, 'Komplek Pelangi INdah B3 No.2 Korong Gadang Kuranji, Pdang, Sumatera Barat', NULL, '', NULL, NULL, NULL, NULL),
(11, 'Dalam Proses', 'badge-warning', '25 December 2021', 'Surat Keterangan Beda Nama', '2021-12-25 19:25:24', 'a_surat_print_05.php', '0000000000004444', '0000000000004443', 'Alfin Anshar Adha', ' 20 April 1997', 'Padang', 'Laki-laki', 'Islam', 'Sudah Kawin', 'BELUM/TIDAK BEKERJA', NULL, 'Komplek Pelangi INdah B3 No.2 Korong Gadang Kuranji, Pdang, Sumatera Barat', NULL, '', NULL, NULL, NULL, NULL),
(12, 'Sudah Diproses', 'badge-success', '25 December 2021', 'Surat Berdomisili', '2021-12-25 19:40:14', 'a_surat_print_05.php', '0000000000004444', '0000000000004443', 'Alfin Anshar Adha', ' 20 April 1997', 'Padang', 'Laki-laki', 'Islam', 'Sudah Kawin', 'BELUM/TIDAK BEKERJA', NULL, 'Komplek Pelangi INdah B3 No.2 Korong Gadang Kuranji, Pdang, Sumatera Barat', NULL, 'yyh', NULL, NULL, NULL, NULL),
(13, 'Dalam Proses', 'badge-warning', '25 December 2021', 'Surat Keterangan Beda Nama', '2021-12-25 19:46:04', 'a_surat_print_05.php', '0000000000004444', '0000000000004443', 'Alfin Anshar Adha', ' 20 April 1997', 'Padang', 'Laki-laki', 'Islam', 'Sudah Kawin', 'BELUM/TIDAK BEKERJA', NULL, 'Komplek Pelangi INdah B3 No.2 Korong Gadang Kuranji, Pdang, Sumatera Barat', NULL, 'jhb', NULL, NULL, '', '980'),
(14, 'Sudah Diproses', 'badge-success', '25 December 2021', 'Surat Keterangan Beda Nama', '2021-12-25 19:48:06', 'a_surat_print_05.php', '0000000000004444', '0000000000004443', 'Alfin Anshar Adha', ' 20 April 1997', 'Padang', 'Laki-laki', 'Islam', 'Sudah Kawin', 'BELUM/TIDAK BEKERJA', NULL, 'Komplek Pelangi INdah B3 No.2 Korong Gadang Kuranji, Pdang, Sumatera Barat', NULL, NULL, NULL, NULL, 'wqqwqw', '21222112'),
(15, 'Dalam Proses', 'badge-warning', '25 December 2021', 'Surat Keterangan Usaha', '2021-12-25 22:37:53', 'a_surat_print_04.php', '9999999999990000', '9999999999990001', 'Hilman bin Razak', ' 03 September 1992', 'Solok Selatan', 'Laki-laki', 'Islam', 'Sudah Kawin', 'PENELITI', NULL, 'Komplek elangi Indah B3 No2 Korong Gadang Kuranji Padang', NULL, 'Peminjaman Kredit di Bank Nagari SYariah', 'Perusahaan Sistem Informasi', 'Di Padang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ubah`
--

CREATE TABLE `ubah` (
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `w_id` int(11) NOT NULL,
  `w_image` text NOT NULL,
  `w_name` varchar(255) DEFAULT NULL,
  `w_desc` varchar(10000) DEFAULT NULL,
  `w_location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`w_id`, `w_image`, `w_name`, `w_desc`, `w_location`) VALUES
(14, 'IMG-610103130f2e24.62664831.png', 'afafaegaafafaegaafafaegaafafaega afafaega afafaegaafafaega afafaegaafafaegaafafaega', '', 'fafa'),
(16, 'IMG-61011bd223bdd5.25836478.png', 'asdas', 'aefafaf', 'awdad'),
(17, 'IMG-61014507c6c609.05193014.png', 'qewd1414124', 'qdq123124214', 'qed1414'),
(18, 'IMG-61885a625d70b9.93685740.png', 'adad', 'daaddadda', 'daadad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`d_kk`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `folder`
--
ALTER TABLE `folder`
  ADD PRIMARY KEY (`folder_id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`k_id`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`k_nik`);

--
-- Indexes for table `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `nagari`
--
ALTER TABLE `nagari`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`p_nik`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`peng_id`);

--
-- Indexes for table `perantau`
--
ALTER TABLE `perantau`
  ADD PRIMARY KEY (`per_id`);

--
-- Indexes for table `pn_agama`
--
ALTER TABLE `pn_agama`
  ADD PRIMARY KEY (`pn_agama_id`);

--
-- Indexes for table `pn_pdk`
--
ALTER TABLE `pn_pdk`
  ADD PRIMARY KEY (`pn_pdk_id`);

--
-- Indexes for table `pn_pek`
--
ALTER TABLE `pn_pek`
  ADD PRIMARY KEY (`pn_pek_id`);

--
-- Indexes for table `pn_sekolah`
--
ALTER TABLE `pn_sekolah`
  ADD PRIMARY KEY (`pn_sek_id`);

--
-- Indexes for table `pn_umur`
--
ALTER TABLE `pn_umur`
  ADD PRIMARY KEY (`pn_umur_id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `ubah`
--
ALTER TABLE `ubah`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `folder`
--
ALTER TABLE `folder`
  MODIFY `folder_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lapor`
--
ALTER TABLE `lapor`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `nagari`
--
ALTER TABLE `nagari`
  MODIFY `n_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `notif_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `peng_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perantau`
--
ALTER TABLE `perantau`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pn_agama`
--
ALTER TABLE `pn_agama`
  MODIFY `pn_agama_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pn_pdk`
--
ALTER TABLE `pn_pdk`
  MODIFY `pn_pdk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pn_pek`
--
ALTER TABLE `pn_pek`
  MODIFY `pn_pek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pn_sekolah`
--
ALTER TABLE `pn_sekolah`
  MODIFY `pn_sek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pn_umur`
--
ALTER TABLE `pn_umur`
  MODIFY `pn_umur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `s_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ubah`
--
ALTER TABLE `ubah`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
