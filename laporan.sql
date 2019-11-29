-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 05:53 PM
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
-- Database: `laporan`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejalas`
--

CREATE TABLE `gejalas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejalas`
--

INSERT INTO `gejalas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'BATANG DAN DAUN ATAS LAYU', '2019-11-27 06:42:29', '2019-11-27 19:51:07'),
(4, 'BERCAK COKLAT SAMPAI HITAM PADA DAUN', '2019-11-27 06:45:20', '2019-11-27 06:45:20'),
(7, 'ADA BERCAK KECIL BERWARNA COKLAT PADA DAUN', '2019-11-27 06:46:37', '2019-11-27 06:46:37'),
(8, 'ADA BERCAK KECIL BERAIR DAN MEMBULAT CEKUNG PADA DAUN', '2019-11-27 06:46:57', '2019-11-27 06:46:57'),
(9, 'PADA PANGKAL DAUN DEKAT TANGKAI ADA BERCAK UNGU', '2019-11-27 06:49:31', '2019-11-27 06:49:31'),
(10, 'DAUN KERITING DAN KERING', '2019-11-27 06:49:46', '2019-11-27 06:49:46'),
(11, 'BATANG TAMPAK KERANG MEMANJANG BERWARNA ABU-ABU', '2019-11-27 06:51:07', '2019-11-27 06:51:07'),
(12, 'ADA LUBANG PADA DAUN DISETIAP TEMPAT', '2019-11-27 06:51:27', '2019-11-27 06:51:27'),
(13, 'BATANG MUDAH PATAH', '2019-11-27 06:51:43', '2019-11-27 06:51:43'),
(14, 'DAUN KERITING DAN KERDIL, MELENGKUNG KE BAWAH', '2019-11-27 06:52:04', '2019-11-27 06:52:04'),
(15, 'DAUN MENYEMPIT SEPERTI PITA', '2019-11-27 06:52:20', '2019-11-27 06:52:20'),
(16, 'WARNA DAUN MENJADI MOZAIK DAN RAPUH', '2019-11-27 06:52:33', '2019-11-27 06:52:33'),
(17, 'DAUN MENGECIL DAN MENGGULUNG KE ATAS', '2019-11-27 06:52:52', '2019-11-27 06:52:52'),
(18, 'DAUN TERLIHAT SEPERTI TERSELUBUNGI TEPUNG PUTIH', '2019-11-27 06:53:42', '2019-11-27 06:53:42'),
(19, 'JIKA DAUN DIBUKA, ADA HAMA ULAT', '2019-11-27 06:54:36', '2019-11-27 06:54:36'),
(20, 'DAUN LAYU', '2019-11-27 06:54:57', '2019-11-27 06:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `gejalas_pakar`
--

CREATE TABLE `gejalas_pakar` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gejalas_pakar`
--

INSERT INTO `gejalas_pakar` (`id`, `kode`, `nama`) VALUES
(1, 'G01', 'BATANG DAN DAUN ATAS LAYU'),
(2, 'G02', 'BERCAK COKLAT SAMPAI HITAM PADA DAUN'),
(3, 'G03', 'ADA BERCAK KECIL BERWARNA COKLAT PADA DAUN'),
(4, 'G04', 'ADA BERCAK KECIL BERAIR DAN MEMBULAT CEKUNG PADA DAUN'),
(5, 'G05', 'PADA PANGKAL DAUN DEKAT TANGKAI ADA BERCAK UNGU'),
(6, 'G06', 'DAUN KERITING DAN KERING'),
(7, 'G07', 'BATANG TAMPAK KERANG MEMANJANG BERWARNA ABU-ABU'),
(8, 'G08', 'ADA LUBANG PADA DAUN DISETIAP TEMPAT'),
(9, 'G09', 'BATANG MUDAH PATAH'),
(10, 'G10', 'DAUN KERITING DAN KERDIL, MELENGKUNG KE BAWAH'),
(11, 'G11', 'DAUN MENYEMPIT SEPERTI PITA'),
(12, 'G12', 'WARNA DAUN MENJADI MOZAIK DAN RAPUH'),
(13, 'G13', 'DAUN MENGECIL DAN MENGGULUNG KE ATAS'),
(14, 'G14', 'DAUN TERLIHAT SEPERTI TERSELUBUNGI TEPUNG PUTIH'),
(15, 'G15', 'JIKA DAUN DIBUKA, ADA ULAT'),
(16, 'G16', 'BATANG BAGIAN BAWAH BUSUK');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_laporan`
--

CREATE TABLE `gejala_laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED DEFAULT NULL,
  `laporan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejala_laporan`
--

INSERT INTO `gejala_laporan` (`id`, `gejala_id`, `laporan_id`, `created_at`, `updated_at`) VALUES
(13, 3, 13, NULL, NULL),
(14, 10, 13, NULL, NULL),
(15, 11, 13, NULL, NULL),
(16, 13, 13, NULL, NULL),
(17, 16, 13, NULL, NULL),
(18, 18, 13, NULL, NULL),
(19, 19, 13, NULL, NULL),
(20, 11, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_laporan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `umur_tanaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sawah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyakit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solusi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('BELUM','SUDAH') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporans`
--

INSERT INTO `laporans` (`id`, `judul_laporan`, `user_id`, `umur_tanaman`, `sawah`, `foto`, `penyakit`, `solusi`, `status`, `created_at`, `updated_at`) VALUES
(7, 'laporan1', 0, '10', 'sawah 2', 'foto/lhktyFBYIWCnjuNVagTgjXgzoZiRlyeMQHvMF2Wd.jpeg', NULL, NULL, 'BELUM', '2019-10-15 14:19:06', '2019-10-15 14:19:06'),
(8, 'laporan2', 0, '20', 'sawah 2', 'foto/NC7CKOCrSnMlv9rrQDzPmAw92hNFv5O8cz4esueZ.jpeg', NULL, NULL, 'BELUM', '2019-10-15 14:23:32', '2019-10-15 14:23:32'),
(9, 'laporan3', 0, '20', 'sawah 2', 'foto/X1Vq31ZF9ZTquLoT25VOaS1LmP3jQUrglNxBfbF9.jpeg', NULL, NULL, 'BELUM', '2019-10-15 14:23:33', '2019-10-15 14:23:33'),
(10, 'laporan4', 13, '10', 'sawah 2', 'foto/tOmaXuPhKxZk5pzCwSG3o1MriCrjIGyWDZ4TLRsD.jpeg', 'penyakit nakal', 'bawa ke dokter', 'SUDAH', '2019-10-15 14:23:59', '2019-10-15 20:13:16'),
(11, 'laporan5', 13, '12', 'sawah 1', 'foto/OT34xoO0XSMJBziKP08KoT9bLyYTUezqGtDaTFME.jpeg', NULL, NULL, 'BELUM', '2019-10-15 19:53:26', '2019-10-15 19:53:26'),
(12, 'Laporan Tanaman Kering', 13, '20', 'sawah 1', 'foto/RYMwSsN2D2kwp5dmTEpbmg7e7JFXcoye9USkNf2P.jpeg', NULL, NULL, 'BELUM', '2019-10-16 19:46:22', '2019-10-16 19:46:22'),
(13, 'kalau siang pada layu', 10, '14', 'Sawah 1', 'foto/Q8HxvnnlRiLRNAaPjTIjKHb5JinzJv75cDrcAmnI.jpeg', NULL, NULL, 'BELUM', '2019-11-27 18:52:50', '2019-11-27 18:52:50'),
(14, 'kalau siang pada layu', 10, '7', 'Sawah 1', 'foto/oS5BaSH8P5tqbYOELvQyZUCYrTwIigX8dnZJNacY.jpeg', 'terkena penyakit mosaik', 'Di cabut tanamananya di kasih insektisida', 'SUDAH', '2019-11-27 20:36:33', '2019-11-27 20:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_13_074517_create_roles_table', 1),
(4, '2019_10_13_074607_create_role_user_table', 1),
(5, '2019_10_13_101605_create_penjadwalan_table', 2),
(6, '2019_10_13_101712_create_laporan_table', 2),
(7, '2019_10_13_183048_create_sawah_table', 3),
(8, '2019_10_15_151542_create_gejala_table', 4),
(15, '2019_10_15_191900_create_laporans_table', 5),
(16, '2019_10_15_192148_create_gejalas_table', 5),
(17, '2019_10_15_201156_create_gejala_laporan_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjadwalan`
--

CREATE TABLE `penjadwalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sawah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjadwalan`
--

INSERT INTO `penjadwalan` (`id`, `sawah`, `kegiatan`, `tanggal`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'sawah 1', 'Penanaman', '2019-10-15', 'SEMANGAT YA', '2019-10-13 04:00:22', '2019-11-27 18:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `penyakits`
--

CREATE TABLE `penyakits` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desk` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penyakits`
--

INSERT INTO `penyakits` (`id`, `kode`, `nama`, `desk`) VALUES
(1, 'P01', 'LAYU FUSARIUM', 'Penyakit layu fusarium yang disebabkan oleh jamur Fusarium Oxysporum. Jamur ini menyerang bagian jaringan pembuluhan tanaman tomat. Jika dilihat tanaman tomat akan menjadi layu jika terkena cahaya matahari pada siang hari, lalu tanaman akan tampak segar kembali pada malam hari, kondisi ini akan berlangsung hingga tanaman mati. Gejala yang ditimbulkan oleh penyakit ini adalah jaringan pembuluh akan berubah warna menjadi coklat yang mengakibatkan terhambatnya aliran air dari akar ke daun'),
(2, 'P02', 'BUSUK DAUN', 'Penyakit ini sering menyerang di daereah dataran tinggi. Penyebab penyakit ini adalah Phytophthora Infestans. Penyakit ini menyerang pada bagian daun tanaman tomat. Gejala dari penyakit ini adalah pada bagian ujung dan sisi daun terdapat bercak coklat kehitaman, kemudian bercak coklat kehitaman meluas keseluruh permukaan daun, hingga ketangkai daun'),
(3, 'P03', 'BUSUK BUAH', 'Penyakit ini disebabkan oleh Cendawan Thanatephorus Cucumeris dan Cendawan Colletotrichum Coccodes. Penyakit ini menyerang pada bagian buah tanaman tomat. Gejala yang ditimbulkan penyakit ini adalah pada buah terdapat bercak kecil berwarna coklat dan berair lalu bercak itu akan membesar mencekung dan bagian tengahnya retak, serta pada pangkal buah terdapat bercak ungu.'),
(4, 'P04', 'BERCAK BAKTERI', 'Penyakit ini disebabkan oleh Xanthomonas Vesicatoria yang menyerang bagian buah, daun dan batang tanaman tomat. Gejala yang ditimbulkan antara lain : 1) Pada bagian buah terlihat bercak bergabus, 2) Pada daun terlihat berubah menjadi keriting dan mongering, 3) Pada batang terdapat kerang yang memanjang dan memiliki ke abu-abuan.'),
(5, 'H01', 'ULAT BUAH', 'Ulat buah merupakan salah satu hama yang menyerang tanaman tomat khususnya pada buah tomat. Ulat buah memiliki panjang sekitar 4-5cm dan memiliki permukaan berkutil dan ditumbuhi bulu dengan bagian samping tubuh terdapat garis yang bergelombang dengan warna yang lebih terang. Ulat buah memiliki warna yang bervariasi mulai dari warna hijau, hijau kekuningan dan kecoklatan hingga hitam. Gejala yang ditimbulkan oleh hama ini adalah jika ulat ini menyerang bagian buah tomat, maka ada banyak lubang yang ada pada buah tomat, selain menyerang buah ulat ini juga menyerang daun, dan bunga.'),
(6, 'H02', 'ULAT TANAH', 'Ulat tanah, salah satu hama yang menyerang tanaman tomat, khususnya menyerang batang tanaman. Ulat tanah memiliki warna coklat tua kehitaman, tubuhnya mengkilat dan terpadat garis coklat pada kedua sisi tubuhnya. Ulat tanah memiliki umur cukup panjang yaitu 56 minggu (4 tahun 8 bulan ) tiap satu generasi. Gejala yang ditimbulkan oleh hama ini adalah tanaman yang masih berumur muda namun layu, karena batang tanaman tomat terputus dimakan oleh ulat tanah.'),
(7, 'H03', 'KUTU DAUN HIJAU', 'Kutu daun hijau tidak menyerang secara langsung pada tanaman tomat, namun kutu daun hijau hanya hinggap pada daun tanaman tomat, dan tanaman tomat yang dihinggapi akan terkena penyebaran virus. Ada 2 macam kutu daun hijau, 1) bersayap : memiliki warna kepala dan dadanya coklat kehitaman dan bagian perut bewarna hijau kekuningan, 2)tidak bersayap : memiliki warna hijau kekuningan. Gejala yang ditimbulkan oleh hama ini memiliki gejala yang bervariasi seperti : daun menjadi keriting dan kerdil, bentuk daun melengkung kebawah, daun menyempit seperti pita, daun berubah warna menjadi mozaik dan menjadi rapuh'),
(8, 'H04', 'LALAT PUTIH', 'Lalat putih ini menyerang tanaman tomat pada bagian buah dan daun. Lalat putih memiliki warna putih, memiliki tubuh seperti dilapisi oleh tepung putih, dan memiliki ukuran tubuh kurang lebih 1 mm, memiliki rentang sayap 2 mm. Gejala yang ditimbulkan oleh hama ini adalah terhambatnya pertumbuhan tanaman tomat sehingga membuat tanaman tomat terlihat kerdil, daun akan mengecil dan menggulung ke atas.'),
(9, 'H05', 'LALAT BUAH', 'Lalat buah merupakan salah satu hama tanaman tomat yang menyerang dari dalam tanaman tomat tepatnya pada buah tomat. Lalat buah akan menyuntikkan telurtelurnya kedalam buah tomat, dan ketika telur-telur tersebut menetas akan menjadi larva yang akan memakan buah tomat dari dalam hingga tomat menjadi busuk. Lalat buah sendiri memiliki warna coklat kekuningan, memiliki garis kuning yang membujur pada bagian punggungnya.');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit_solusi`
--

CREATE TABLE `penyakit_solusi` (
  `id` int(10) UNSIGNED NOT NULL,
  `penyakit_id` int(10) UNSIGNED NOT NULL,
  `solusi_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penyakit_solusi`
--

INSERT INTO `penyakit_solusi` (`id`, `penyakit_id`, `solusi_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 5),
(6, 2, 6),
(7, 2, 7),
(8, 3, 1),
(9, 3, 5),
(10, 3, 8),
(11, 3, 9),
(12, 4, 1),
(13, 4, 5),
(14, 4, 9),
(15, 4, 10),
(16, 5, 11),
(17, 5, 12),
(18, 5, 13),
(19, 5, 14),
(20, 6, 11),
(21, 6, 14),
(22, 6, 15),
(23, 7, 14),
(24, 7, 16),
(25, 8, 12),
(26, 8, 14),
(27, 8, 17),
(28, 9, 15),
(29, 9, 18);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-10-13 02:59:53', '2019-10-13 02:59:53'),
(2, 'mandor', '2019-10-13 02:59:53', '2019-10-13 02:59:53'),
(3, 'litbang', '2019-10-13 02:59:53', '2019-10-13 02:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(5, 6, 1, NULL, NULL),
(7, 8, 3, NULL, NULL),
(8, 9, 2, NULL, NULL),
(9, 10, 2, NULL, NULL),
(10, 11, 1, NULL, NULL),
(11, 12, 2, NULL, NULL),
(12, 13, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sawah`
--

CREATE TABLE `sawah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sawah`
--

INSERT INTO `sawah` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(20, 'Sawah 1', '2019-10-13 21:17:25', '2019-11-27 18:49:43'),
(21, 'sawah 2', '2019-10-13 21:18:31', '2019-10-13 21:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `solusis`
--

CREATE TABLE `solusis` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `solusis`
--

INSERT INTO `solusis` (`id`, `kode`, `nama`) VALUES
(1, 'S01', 'MEMAKAI BENIH YANG RESISTEN'),
(2, 'S02', 'MEMAKAI MULSA PLASTIK'),
(3, 'S03', 'MENJAUHI BUDIDAYA TEMBAKAU PADA TEMPAT YANG PERNAH TERKENA JAMUR'),
(4, 'S04', 'MEMBERI JEDA YANG LAMA PADA LAHAN HINGGA DITANAMI KEMBALI'),
(5, 'S05', 'HARUS CEPAT DICABUT DAN DIBAKAR, JANGAN DIPENDAM, UNTUK MEMUTUS SIKLUS'),
(6, 'S06', 'MEMAKAI VARIETAS UNGGUL DAN BEBAS JAMUR'),
(7, 'S07', 'PENYEMPROTAN MEMAKAI FUNGISIDA'),
(8, 'S08', 'MEMAKAI AIR UNTUK MENYOKONG TANAMAN TEMBAKAU SUPAYA DAUN TAK MENYENTUH TANAH'),
(9, 'S09', 'MEROTASI PEMBIBITAN TANAMAN'),
(10, 'S10', 'PENYEMPROTAN MEMAKAI BAKTERISIDA YANG MENGANDUNG ANTIBIOTIK, PAKAI DOSIS SESUAI PANDUAN'),
(11, 'S11', 'MEMUNGUT ULAT DAN TELURNYA, LALU DIBAKAR'),
(12, 'S12', 'MENJAGA KEBERSIHAN SAWAH DARI GULMA SERTA SEMAK BELUKAR'),
(13, 'S13', 'JIKA BERBENTUK NGENGAT, DAPAT DIATASI DENGAN PERANGKAT ULTRAVIOLET'),
(14, 'S14', 'PENYEMPROTAN MEMAKAI INSEKTISIDA'),
(15, 'S15', 'MENGOLAH TANAH DENGAN BAIK'),
(16, 'S16', 'MEMAKAI MULSA PLASTIK PERAK'),
(17, 'S17', 'MEMAKAI MULSA PLASTIK JERAMI ATAU MULSA KUNING'),
(18, '218', 'MEMBALIK TANAH DAN BIARKAN TERKENA SINAR MATAHARI SELAMA BEBERAPA HARI');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'admin', 'admin@gmail.com', NULL, '$2y$10$Ej2RaHobIgUnuocKcFb/IueOVsaWMPDLa.EaU5WNoTaYMztkqI/F.', NULL, '2019-10-13 09:18:33', '2019-10-13 09:18:33'),
(8, 'litbang', 'litbang@gmail.com', NULL, '$2y$10$7Ek.9kGdUdkHpQw5z7h4m.WZlCQ65OoH8BnBkTm7.Frc8BF3RGBLy', NULL, '2019-10-13 16:30:04', '2019-10-13 16:30:04'),
(10, 'mandor1', 'mandor1@gmail.com', NULL, '$2y$10$63hWEJyFAM5x9qz9viNtX.3AHK08f0k0hDpFmGnv7TFQCoNYqLXwy', NULL, '2019-10-13 17:26:44', '2019-10-13 17:26:44'),
(13, 'mandor', 'mandor@gmail.com', NULL, '$2y$10$CCmwUIoqAftX8wHGnxvrv.DNGwYeXou6uVzknZD0p4xiOZeHxddE6', NULL, '2019-10-15 10:00:16', '2019-10-15 10:00:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejalas`
--
ALTER TABLE `gejalas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejalas_pakar`
--
ALTER TABLE `gejalas_pakar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala_laporan`
--
ALTER TABLE `gejala_laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejala_laporan_gejala_id_foreign` (`gejala_id`),
  ADD KEY `gejala_laporan_laporan_id_foreign` (`laporan_id`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penjadwalan`
--
ALTER TABLE `penjadwalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakits`
--
ALTER TABLE `penyakits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit_solusi`
--
ALTER TABLE `penyakit_solusi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penyakit_solusi_penyakit_id_foreign` (`penyakit_id`),
  ADD KEY `penyakit_solusi_solusi_id_foreign` (`solusi_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sawah`
--
ALTER TABLE `sawah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solusis`
--
ALTER TABLE `solusis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejalas`
--
ALTER TABLE `gejalas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `gejalas_pakar`
--
ALTER TABLE `gejalas_pakar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gejala_laporan`
--
ALTER TABLE `gejala_laporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `penjadwalan`
--
ALTER TABLE `penjadwalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penyakits`
--
ALTER TABLE `penyakits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penyakit_solusi`
--
ALTER TABLE `penyakit_solusi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sawah`
--
ALTER TABLE `sawah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `solusis`
--
ALTER TABLE `solusis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gejala_laporan`
--
ALTER TABLE `gejala_laporan`
  ADD CONSTRAINT `gejala_laporan_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `gejalas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gejala_laporan_laporan_id_foreign` FOREIGN KEY (`laporan_id`) REFERENCES `laporans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `penyakit_solusi`
--
ALTER TABLE `penyakit_solusi`
  ADD CONSTRAINT `penyakit_solusi_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakits` (`id`),
  ADD CONSTRAINT `penyakit_solusi_solusi_id_foreign` FOREIGN KEY (`solusi_id`) REFERENCES `solusis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
