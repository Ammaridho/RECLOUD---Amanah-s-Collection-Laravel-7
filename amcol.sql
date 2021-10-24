-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 03:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amcol`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksesoris_baju`
--

CREATE TABLE `aksesoris_baju` (
  `id_aksesoris` int(11) NOT NULL,
  `nama_aksesoris` varchar(100) NOT NULL,
  `persediaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aksesoris_baju`
--

INSERT INTO `aksesoris_baju` (`id_aksesoris`, `nama_aksesoris`, `persediaan`) VALUES
(1, 'topi aceh warna merah', 3),
(2, 'topi papua', 2),
(3, 'kalung aceh ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `tlp` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `kodepos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `atasan_baju`
--

CREATE TABLE `atasan_baju` (
  `id_atasan` int(11) NOT NULL,
  `nama_atasan` varchar(100) NOT NULL,
  `persediaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atasan_baju`
--

INSERT INTO `atasan_baju` (`id_atasan`, `nama_atasan`, `persediaan`) VALUES
(1, 'baju Merah pria dan wanita', 5),
(2, 'baju biru pria wanita', 4);

-- --------------------------------------------------------

--
-- Table structure for table `baju`
--

CREATE TABLE `baju` (
  `id` int(11) NOT NULL,
  `nama_baju` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `jenis_baju` varchar(10) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_atasan` int(11) NOT NULL,
  `id_bawahan` int(11) NOT NULL,
  `kode_aksesoris` int(11) NOT NULL,
  `harga_baju` int(11) NOT NULL,
  `persediaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baju`
--

INSERT INTO `baju` (`id`, `nama_baju`, `jenis_kelamin`, `jenis_baju`, `id_provinsi`, `id_atasan`, `id_bawahan`, `kode_aksesoris`, `harga_baju`, `persediaan`) VALUES
(1, 'Baju Raja kuning', 'pria', 'Baju Tari', 1, 1, 1, 1, 200000, 3),
(2, 'Baju Putri', 'wanita', 'Baju Tari', 2, 1, 2, 1, 300000, 2),
(3, 'baju pendekar biru pria', 'wanita', 'Baju Adat', 1, 2, 2, 1, 400000, 1),
(5, 'Baju Coba NIkah', 'pria', 'Baju Nikah', 1, 2, 1, 1, 300000, 5),
(6, 'Baju Nikahan SUmut', 'pria', 'Baju Nikah', 2, 2, 1, 1, 300000, 5),
(7, 'Baju Tari Sumatra', 'wanita', 'Baju Tari', 2, 2, 1, 2, 300000, 4),
(8, 'Baju Perang', 'pria', 'Baju Adat', 1, 1, 1, 2, 500000, 43);

-- --------------------------------------------------------

--
-- Table structure for table `bawahan_baju`
--

CREATE TABLE `bawahan_baju` (
  `id_bawahan` int(11) NOT NULL,
  `nama_bawahan` varchar(100) NOT NULL,
  `persediaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bawahan_baju`
--

INSERT INTO `bawahan_baju` (`id_bawahan`, `nama_bawahan`, `persediaan`) VALUES
(1, 'Celana Panjang Hitam', 5),
(2, 'Rok Kuning', 2);

-- --------------------------------------------------------

--
-- Table structure for table `chart_atasan`
--

CREATE TABLE `chart_atasan` (
  `id_atasan` int(11) NOT NULL,
  `ukuran_atasan` char(5) NOT NULL,
  `lingkaratasan` varchar(5) NOT NULL,
  `panjangatasan` varchar(5) NOT NULL,
  `persediaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chart_atasan`
--

INSERT INTO `chart_atasan` (`id_atasan`, `ukuran_atasan`, `lingkaratasan`, `panjangatasan`, `persediaan`) VALUES
(1, 'XL', '20', '23', 1),
(1, 'M', '20', '25', 3),
(1, 'L', '20', '21', 2),
(1, 'S', '10', '14', 4),
(2, 'S', '10', '12', 4),
(2, 'M', '21', '24', 2),
(2, 'L', '30', '32', 3),
(2, 'XL', '40', '45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chart_bawahan`
--

CREATE TABLE `chart_bawahan` (
  `id_bawahan` int(11) NOT NULL,
  `ukuran_bawahan` char(5) NOT NULL,
  `lingkarbawahan` varchar(5) NOT NULL,
  `panjangbawahan` varchar(5) NOT NULL,
  `persediaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chart_bawahan`
--

INSERT INTO `chart_bawahan` (`id_bawahan`, `ukuran_bawahan`, `lingkarbawahan`, `panjangbawahan`, `persediaan`) VALUES
(1, 'S', '10', '13', 2),
(1, 'M', '20', '24', 4),
(2, 'S', '13', '15', 5),
(2, 'L', '40', '42', 5);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `noktp` varchar(25) DEFAULT NULL,
  `fotoktp` varchar(255) DEFAULT NULL,
  `fotobersamaktp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama`, `tlp`, `email`, `alamat`, `kodepos`, `noktp`, `fotoktp`, `fotobersamaktp`) VALUES
(1, 'Ammaridho', '081992545654', 'a', 'asdads', '', NULL, NULL, NULL),
(2, 'wwidiii', '0456357', 'sfgsgdf@gmail.com', 'fdasfafd', '', NULL, NULL, NULL),
(3, 'uculllasdf', '13123', 'ucul', 'ucul', '', NULL, NULL, NULL),
(4, 'asdasd', '2313123', 'ab', 'asdasd', '', NULL, NULL, NULL),
(5, 'ccacca', '11213123', 'cc', 'asdasd', '', NULL, NULL, NULL),
(6, 'Amanah Siregar', '081234567565', 'amanahsiregar@gmail.com', 'Perum. Bukit sawangan indah Blok D. 19 No.3', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gambar_baju`
--

CREATE TABLE `gambar_baju` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_baju`
--

INSERT INTO `gambar_baju` (`id`, `gambar`) VALUES
(1, '1.png'),
(1, '2.png'),
(2, '3.png'),
(3, '33.png'),
(5, 'cobanikah.jpe');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `baju_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `total_hari` int(11) NOT NULL,
  `total_biaya` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `customer_id`, `baju_id`, `jumlah`, `tanggal_mulai`, `tanggal_selesai`, `total_hari`, `total_biaya`, `updated_at`, `created_at`) VALUES
(33, 4, 3, 22, '2021-10-17', '2021-10-19', 2, 17600000, '2021-10-16 22:53:04', '2021-10-16 22:53:04'),
(34, 4, 2, 8, '2021-10-17', '2021-10-19', 2, 4800000, '2021-10-16 22:56:44', '2021-10-16 22:56:44'),
(38, 4, 3, 123, '2021-10-22', '2021-10-23', 1, 49200000, '2021-10-22 01:49:26', '2021-10-22 01:49:26'),
(39, 6, 3, 5, '2021-10-22', '2021-10-25', 3, 6000000, '2021-10-22 02:00:52', '2021-10-22 02:00:52'),
(40, 1, 3, 2, '2021-10-22', '2021-10-29', 7, 5600000, '2021-10-22 02:40:43', '2021-10-22 02:40:43'),
(42, 1, 1, 6, '2021-10-24', '2021-10-26', 2, 2400000, '2021-10-23 21:54:04', '2021-10-23 21:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang_ukuran`
--

CREATE TABLE `keranjang_ukuran` (
  `keranjang_id` int(11) NOT NULL,
  `ukuran_atasan` varchar(3) NOT NULL,
  `ukuran_bawahan` varchar(3) NOT NULL,
  `jumlah_baju_perukuran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang_ukuran`
--

INSERT INTO `keranjang_ukuran` (`keranjang_id`, `ukuran_atasan`, `ukuran_bawahan`, `jumlah_baju_perukuran`) VALUES
(33, 'S', 'L', 22),
(34, 'XL', 'S', 8),
(38, 'S', 'S', 123),
(39, 'L', 'L', 2),
(39, 'S', 'L', 3),
(40, 'S', 'S', 2),
(42, 'XL', 'M', 3),
(42, 'M', 'S', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kode_aksesoris`
--

CREATE TABLE `kode_aksesoris` (
  `kode_aksesoris` int(11) NOT NULL,
  `id_aksesoris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_aksesoris`
--

INSERT INTO `kode_aksesoris` (`kode_aksesoris`, `id_aksesoris`) VALUES
(1, 3),
(2, 3),
(1, 2),
(1, 3);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` char(100) NOT NULL,
  `namaButton` char(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`, `namaButton`, `deskripsi`, `gambar`) VALUES
(1, 'Aceh', 'aceh', 'Aceh adalah sebuah provinsi di Indonesia yang ibu kotanya berada di Banda Aceh. Aceh merupakan salah satu provinsi di Indonesia yang diberi status sebagai daerah istimewa dan juga diberi kewenangan otonomi khusus. Aceh terletak di ujung utara pulau Sumatra dan merupakan provinsi paling barat di Indonesia. Menurut hasil sensus Badan Pusat Statistik tahun 2019, jumlah penduduk provinsi ini sekitar 5.281.891Jiwa.[10] Letaknya dekat dengan Kepulauan Andaman dan Nikobar di India dan terpisahkan oleh Laut Andaman. Aceh berbatasan dengan Teluk Benggala di sebelah utara, Samudra Hindia di sebelah barat, Selat Malaka di sebelah timur, dan Sumatra Utara di sebelah tenggara dan selatan.', 'aceh-01.png'),
(2, 'Sumatra Utara', 'sumatraUtara', 'Sumatra Utara (disingkat Sumut) adalah sebuah provinsi di Indonesia yang terletak di bagian utara Pulau Sumatra. Provinsi ini beribu kota di Medan, dengan luas wilayah 72.981,23 km2. Sumatra Utara adalah provinsi dengan jumlah penduduk terbesar keempat di Indonesia, setelah Jawa Barat, Jawa Timur, dan Jawa Tengah, dan pada tahun 2019 jumlah penduduknya berjumlah 14.908.036 jiwa.', 'sumut.png'),
(3, 'Sumatra Barat', 'sumatraBarat', 'Sumatra Barat (disingkat Sumbar) adalah sebuah provinsi di Indonesia yang terletak di Pulau Sumatra dengan Padang sebagai ibu kotanya. Provinsi Sumatra Barat terletak sepanjang pesisir barat Sumatra bagian tengah, dataran tinggi Bukit Barisan di sebelah timur, dan sejumlah pulau di lepas pantainya seperti Kepulauan Mentawai. Dari utara ke selatan, provinsi dengan wilayah seluas 42.012,89 km² ini berbatasan dengan empat provinsi, yakni Sumatra Utara, Riau, Jambi, dan Bengkulu.', 'sumatraBarat.png');

-- --------------------------------------------------------

--
-- Table structure for table `tari`
--

CREATE TABLE `tari` (
  `id` int(11) NOT NULL,
  `nama_tari` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tari`
--

INSERT INTO `tari` (`id`, `nama_tari`) VALUES
(7, 'Tari Tortor'),
(1, 'Tari Piring'),
(2, 'Tari Coba');

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
(1, 'a', 'a', NULL, 'a', 'a', NULL, NULL),
(3, 'uculllasdf', 'ucul', NULL, 'a', NULL, '2021-10-13 05:51:52', '2021-10-13 05:51:52'),
(4, 'asdasd', 'ab', NULL, 'ab', NULL, '2021-10-15 04:35:42', '2021-10-15 04:35:42'),
(5, 'ccacca', 'cc', NULL, 'cc', NULL, '2021-10-16 22:58:13', '2021-10-16 22:58:13'),
(6, 'Amanah Siregar', 'amanahsiregar@gmail.com', NULL, 'amanah123', NULL, '2021-10-22 01:58:33', '2021-10-22 01:58:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksesoris_baju`
--
ALTER TABLE `aksesoris_baju`
  ADD PRIMARY KEY (`id_aksesoris`);

--
-- Indexes for table `atasan_baju`
--
ALTER TABLE `atasan_baju`
  ADD PRIMARY KEY (`id_atasan`);

--
-- Indexes for table `baju`
--
ALTER TABLE `baju`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_provinsi` (`id_provinsi`),
  ADD KEY `fk_atasan` (`id_atasan`),
  ADD KEY `fk_bawahan` (`id_bawahan`),
  ADD KEY `fk_kode_aksesoris` (`kode_aksesoris`);

--
-- Indexes for table `bawahan_baju`
--
ALTER TABLE `bawahan_baju`
  ADD PRIMARY KEY (`id_bawahan`);

--
-- Indexes for table `chart_atasan`
--
ALTER TABLE `chart_atasan`
  ADD KEY `fk_chartatasan` (`id_atasan`);

--
-- Indexes for table `chart_bawahan`
--
ALTER TABLE `chart_bawahan`
  ADD KEY `fk_chartbawahan` (`id_bawahan`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar_baju`
--
ALTER TABLE `gambar_baju`
  ADD KEY `fk_gambar` (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_baju` (`baju_id`),
  ADD KEY `fk_customer` (`customer_id`);

--
-- Indexes for table `keranjang_ukuran`
--
ALTER TABLE `keranjang_ukuran`
  ADD KEY `fk_keranjang_ukuran` (`keranjang_id`);

--
-- Indexes for table `kode_aksesoris`
--
ALTER TABLE `kode_aksesoris`
  ADD KEY `fk_aksesoris` (`id_aksesoris`),
  ADD KEY `fk_kodeaksesoris` (`kode_aksesoris`);

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
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

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
-- AUTO_INCREMENT for table `aksesoris_baju`
--
ALTER TABLE `aksesoris_baju`
  MODIFY `id_aksesoris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `atasan_baju`
--
ALTER TABLE `atasan_baju`
  MODIFY `id_atasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `baju`
--
ALTER TABLE `baju`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bawahan_baju`
--
ALTER TABLE `bawahan_baju`
  MODIFY `id_bawahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baju`
--
ALTER TABLE `baju`
  ADD CONSTRAINT `fk_atasan` FOREIGN KEY (`id_atasan`) REFERENCES `atasan_baju` (`id_atasan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bawahan` FOREIGN KEY (`id_bawahan`) REFERENCES `bawahan_baju` (`id_bawahan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kode_aksesoris` FOREIGN KEY (`kode_aksesoris`) REFERENCES `kode_aksesoris` (`kode_aksesoris`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_provinsi` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `chart_atasan`
--
ALTER TABLE `chart_atasan`
  ADD CONSTRAINT `fk_chartatasan` FOREIGN KEY (`id_atasan`) REFERENCES `baju` (`id_atasan`);

--
-- Constraints for table `chart_bawahan`
--
ALTER TABLE `chart_bawahan`
  ADD CONSTRAINT `fk_chartbawahan` FOREIGN KEY (`id_bawahan`) REFERENCES `baju` (`id_bawahan`);

--
-- Constraints for table `gambar_baju`
--
ALTER TABLE `gambar_baju`
  ADD CONSTRAINT `fk_gambar` FOREIGN KEY (`id`) REFERENCES `baju` (`id`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `fk_baju` FOREIGN KEY (`baju_id`) REFERENCES `baju` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keranjang_ukuran`
--
ALTER TABLE `keranjang_ukuran`
  ADD CONSTRAINT `fk_keranjang_ukuran` FOREIGN KEY (`keranjang_id`) REFERENCES `keranjang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kode_aksesoris`
--
ALTER TABLE `kode_aksesoris`
  ADD CONSTRAINT `fk_aksesoris` FOREIGN KEY (`id_aksesoris`) REFERENCES `aksesoris_baju` (`id_aksesoris`),
  ADD CONSTRAINT `fk_kodeaksesoris` FOREIGN KEY (`kode_aksesoris`) REFERENCES `baju` (`kode_aksesoris`);

--
-- Constraints for table `tari`
--
ALTER TABLE `tari`
  ADD CONSTRAINT `fk_tari` FOREIGN KEY (`id`) REFERENCES `baju` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
