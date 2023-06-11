-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 11, 2023 at 08:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `nomor_telepon_admin` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto_admin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nama_admin`, `nomor_telepon_admin`, `username`, `password`, `foto_admin`, `created_at`, `updated_at`) VALUES
(1, 'Helena J. Pakpahan', '6281375089145', 'helena_j_pakpahan', 'Bakery123', 'admin.jpg', NULL, '2023-05-30 02:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `carousells`
--

CREATE TABLE `carousells` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_carousel` varchar(255) NOT NULL,
  `deskripsi_carousel` varchar(255) NOT NULL,
  `gambar_carousel` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousells`
--

INSERT INTO `carousells` (`id`, `judul_carousel`, `deskripsi_carousel`, `gambar_carousel`, `created_at`, `updated_at`) VALUES
(16, '', '', 'banner1.jpg', NULL, NULL),
(17, '', '', 'banner2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masukans`
--

CREATE TABLE `masukans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pengunjung` varchar(255) NOT NULL,
  `email_pengunjung` varchar(255) NOT NULL,
  `teks_masukan` text NOT NULL,
  `tanggal_post_masukan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gambar_video_masukan` varchar(255) NOT NULL,
  `status_masukan` enum('Diizinkan','Diblokir') NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masukans`
--

INSERT INTO `masukans` (`id`, `nama_pengunjung`, `email_pengunjung`, `teks_masukan`, `tanggal_post_masukan`, `gambar_video_masukan`, `status_masukan`, `updated_at`, `created_at`) VALUES
(1, 'Aldv', 'aldv@gmail.com', 'Pizzanya enakk andalimannya berasa khas banget. Keju mozzarella mereka nggak pelit. Minumannya juga enak dengan package bisa dibawa sambil jalan.', '2023-05-29 14:25:23', 'aldv.png', 'Diizinkan', '2023-05-27 02:17:06', '2023-05-27 02:17:06'),
(2, 'Roela Amri', 'roela@gmail.com', 'Banana green smoothies nya cakep . Dekat dari kota Balige', '2023-05-29 14:25:30', 'roela_amri.jpg', 'Diizinkan', '2023-05-27 02:18:19', '2023-05-27 02:18:19'),
(3, 'Pangeran', 'pangeran@gmail.com', 'Pizza andaliman nya sedap banget', '2023-05-29 14:25:41', 'testi1.jpg', 'Diizinkan', '2023-05-29 06:23:28', '2023-05-29 06:23:28'),
(4, 'Rafael', 'rafael11425@gmail.com', 'green tea nya mantap, sangat menyegarkan', '2023-05-29 14:25:48', 'testi2.jpg', 'Diizinkan', '2023-05-29 06:28:38', '2023-05-29 06:28:38'),
(21, 'asdsad', 'asdsa@gmail.com', 'asda', '2023-05-30 07:08:56', '2023-05-22 15-09-41.mkv', 'Diizinkan', '2023-05-30 00:08:56', '2023-05-30 00:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_03_131624_create_admins_table', 1),
(6, '2023_05_03_162001_create_masukans_table', 1),
(7, '2023_05_08_141032_create_carousells_table', 2),
(8, '2023_05_09_033006_create_kategoris_table', 3),
(9, '2023_05_09_033617_create_kategoris_table', 4),
(10, '2023_05_09_034020_create_kategoris_table', 5),
(11, '2023_05_09_034103_create_kategoris_table', 6),
(12, '2023_05_09_034917_create_produks_table', 7),
(13, '2023_05_09_133850_create_prestasis_table', 8),
(14, '2023_05_09_134042_create_sertifikats_table', 9),
(15, '2023_05_10_130454_create_sertifikats_table', 10),
(16, '2023_05_10_130554_create_sertifikats_table', 11),
(17, '2023_05_15_085135_create_produks_table', 12),
(18, '2023_05_15_134603_create_produks_table', 13),
(19, '2023_05_16_011231_create_produks_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_prestasi` varchar(255) NOT NULL,
  `deskripsi_prestasi` varchar(255) NOT NULL,
  `gambar_prestasi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`id`, `judul_prestasi`, `deskripsi_prestasi`, `gambar_prestasi`, `created_at`, `updated_at`) VALUES
(1, 'Festival Danau Toba', 'Peserta dan pemenang kategori makanan unik dalam Festival Danau Toba tahun 2016, yang diadakan di Muara - Tapanuli Utara', 'prestasi1.jpg', NULL, NULL),
(2, 'Pelatihan Tata Boga', 'Sebagai instruktur pelatihan tata boga kegiatan pendidikan dan pelatihan keterampilan bagi pencari kerja program peningkatan kualitas tenaga kerja', 'pres2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` varchar(255) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL,
  `kategori` enum('Makanan','Minuman','Roti dan Kue') NOT NULL,
  `status_produk` enum('Aktif','Nonaktif') NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `harga_produk`, `gambar_produk`, `kategori`, `status_produk`, `deskripsi_produk`, `created_at`, `updated_at`) VALUES
(1, 'Donat Coklat Kacang', '3000', 'peanut.jpg', 'Roti dan Kue', 'Aktif', 'Donat lezat yang terbuat dari kacang pilihan serta cokelat yang berkualitas.', NULL, NULL),
(2, 'Lemon Tea', '12000', 'lemon.jpg', 'Minuman', 'Aktif', 'Teh Lemon dengan kesegeran lemon alami yang dipetik sendiri dari pohon. Dengan campuran teh yang membuat terasa semakin menyegarkan.', NULL, NULL),
(3, 'Kebab', '18000', 'kebab.jpg', 'Makanan', 'Aktif', 'Kebab adalah hidangan yang berasal dari Timur Tengah yang terdiri dari daging panggang yang dipotong kecil-kecil dan disajikan di dalam roti pipih.', NULL, NULL),
(4, 'French Fries', '18000', 'fries.jpg', 'Makanan', 'Aktif', 'Kentang goreng yang terbuat dari kentang pilihan yang berkualitas dan diolah dengan profesional, menghasilkan masakan kentang yang renyah, gurih dan lezat.', NULL, NULL),
(5, 'Nasi Goreng', '25000', 'nasgor.jpg', 'Makanan', 'Aktif', 'Nasi Goreng dari beras pilihan dan diolah dengan baik, menghasilkan nasi yang berkualitas, kemudian diolah dengan bumbu rahasia dapur membuat aroma dan rasa yang tak kalah sedap.', NULL, NULL),
(6, 'Nugget', '18000', 'nugget.jpg', 'Makanan', 'Aktif', 'Nugget yang dibuat dari daging ayam pilihan, diolah dengan minyak yang sehat.', NULL, NULL),
(7, 'Pizza Andaliman Ayam', '70000', 'andalimann.jpg', 'Roti dan Kue', 'Aktif', 'Pizza Andaliman Ayam yang terbuat dari bumbu khas andaliman, dengan ayam berkualitas.', NULL, NULL),
(8, 'Pizza Rendang Sapi', '80000', 'rendang.jpg', 'Roti dan Kue', 'Aktif', 'Pizza rendang sapi adalah variasi pizza yang terinspirasi dari masakan tradisional Indonesia, yaitu rendang sapi. Rendang sapi adalah hidangan daging sapi yang dimasak dengan rempah-rempah khas Indonesia yang kaya akan rasa gurih, pedas, dan rempah.', NULL, NULL),
(9, 'Dimsum Ayam', '20000', 'chickdim.jpg', 'Makanan', 'Aktif', 'Dimsum ayam sering disajikan sebagai hidangan pembuka. Hidangan ini biasanya disajikan dengan saus yang menggugah selera seperti saus cabe, saus kacang, atau saus kecap untuk menambahkan rasa dan aroma yang lebih kaya.', NULL, NULL),
(10, 'Dimsum Udang', '20000', 'shrimpdim.jpg', 'Makanan', 'Aktif', 'Dimsum udang memiliki kulit yang tipis dan transparan, memberikan tampilan yang menarik saat disajikan. Isian udang yang segar dan dimasak dengan bumbu bawang putih, kecap asin, minyak wijen memberikan cita rasa gurih dan manis yang khas.', NULL, NULL),
(11, 'Pizza Ayam', '70000', 'chickpiz.jpg', 'Roti dan Kue', 'Aktif', 'Pizza dengan perpaduan rasa gurih dan lezat dari ayam yang dimasak dengan berbagai bumbu, dan kelezatan adonan pizza yang renyah.', NULL, NULL),
(12, 'Pizza Sapi', '80000', 'beefpiz.jpg', 'Roti dan Kue', 'Aktif', 'Pizza sapi adalah variasi pizza yang menggunakan daging sapi sebagai bahan utamanya. Daging sapi yang digunakan biasanya dipotong tipis atau diiris menjadi potongan kecil sebelum dijadikan topping pizza.', NULL, NULL),
(13, 'Pizza Ikan Tuna', '75000', 'tunapiz.jpg', 'Roti dan Kue', 'Aktif', 'Pizza ikan tuna adalah variasi pizza yang menggunakan ikan tuna sebagai bahan utamanya. Daging tuna segar dipotong menjadi potongan kecil atau dihancurkan dan dijadikan topping pizza.', NULL, NULL),
(14, 'Pizza Jamur', '65000', 'mushpiz.jpg', 'Roti dan Kue', 'Aktif', '\r\nPizza jamur adalah variasi pizza yang memiliki jamur sebagai bahan utamanya. Jamur segar dipotong atau diiris dan dijadikan topping pada pizza.', NULL, NULL),
(15, 'Pizza Sosis', '65000', 'sospiz.jpg', 'Roti dan Kue', 'Aktif', 'Pizza sosis adalah variasi pizza yang menggunakan sosis sebagai salah satu bahan utamanya. Sosis dipotong menjadi irisan atau potongan kecil dan dijadikan topping pada pizza.', NULL, NULL),
(16, 'Pizza Sayuran', '60000', 'vegpiz.jpg', 'Roti dan Kue', 'Aktif', 'Pizza sayuran memberikan rasa yang segar, tekstur yang renyah, dan kelezatan dari kombinasi berbagai jenis sayuran.', NULL, NULL),
(17, 'Jus Jeruk', '10000', 'orgjc.jpg', 'Minuman', 'Aktif', 'Jus jeruk adalah minuman yang terbuat dari perasan buah jeruk segar.', NULL, NULL),
(18, 'Green Tea', '10000', 'greentea.jpg', 'Minuman', 'Aktif', '\r\nGreen tea, atau dikenal juga sebagai Camellia sinensis, adalah jenis teh yang dibuat dari daun tanaman teh.', NULL, NULL),
(19, 'Black Coffee', '10000', 'coffee.jpg', 'Minuman', 'Aktif', 'Kopi hitam adalah minuman yang terbuat dari biji kopi yang telah digiling dan diseduh dalam air panas tanpa penambahan susu atau gula. ', NULL, NULL),
(20, 'Milo', '12000', 'milo.jpg', 'Minuman', 'Aktif', 'Minuman susu Milo adalah minuman yang terbuat dari campuran serbuk Milo dengan susu. ', NULL, NULL),
(21, 'Chocolate', '12000', 'cokelat.jpg', 'Minuman', 'Aktif', 'Minuman cokelat merupakan favorit di berbagai usia. Rasanya yang lezat dan kenikmatan dari rasa cokelat yang khas membuatnya menjadi minuman yang menyenangkan.', NULL, NULL),
(22, 'Cappucino', '12000', 'cappucino.jpg', 'Minuman', 'Aktif', 'Cappuccino memiliki rasa yang kaya, dengan kombinasi antara cita rasa kuat dari espresso dan kelembutan dari susu.', NULL, NULL),
(23, 'Capcay', '25000', 'capcay.jpg', 'Makanan', 'Aktif', 'Capcay adalah masakan Tionghoa-Indonesia yang terdiri dari campuran sayuran yang diolah dengan cara tumis.', NULL, NULL),
(24, 'Pancake Durian', '25000', 'durian.jpg', 'Makanan', 'Aktif', 'Pancake durian dibuat dengan mencampurkan daging durian yang matang dengan adonan pancake yang terdiri dari tepung, telur, susu, gula, dan bahan-bahan lainnya.', NULL, NULL),
(25, 'Ayam Penyet', '25000', 'penyet.jpg', 'Makanan', 'Aktif', 'Ayam penyet adalah hidangan khas Indonesia yang terdiri dari ayam yang dimasak dengan bumbu rempah-rempah khas, kemudian dihaluskan dan disajikan dengan nasi dan sambal pedas.', NULL, NULL),
(26, 'Cincau', '20000', 'alergi.png', 'Minuman', 'Aktif', 'Minuman sehat bernutrisi', '2023-05-29 09:36:08', '2023-05-29 09:36:08');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikats`
--

CREATE TABLE `sertifikats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_sertifikat` varchar(255) NOT NULL,
  `deskripsi_sertifikat` text NOT NULL,
  `lambang_sertifikat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sertifikats`
--

INSERT INTO `sertifikats` (`id`, `judul_sertifikat`, `deskripsi_sertifikat`, `lambang_sertifikat`, `created_at`, `updated_at`) VALUES
(1, 'Sertifikat Produksi Pangan Industri Rumah Tangga', 'Sertifikat ini adalah Sertifikat PIRT atau yang lebih dikenal dengan Sertifikat Produksi Pangan Industri Rumah Tangga (SPP-IRT) merupakan jaminan tertulis yang diberikan oleh Bupati atau Walikota terhadap hasil produksi IRT yang memenuhi syarat dan standa', 'pirt.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gilberd', 'gilberd@gmail.com', NULL, '$2y$10$Obc4nbOulkLfOB.81j6DPeDo1SuJsY/7Bjb/EPjfSpgxYbWu7mlya', NULL, '2023-05-30 07:52:17', '2023-05-30 07:52:17'),
(2, 'Helena Pakpahan', 'helena_j_pakpahan', NULL, 'Bakery123', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousells`
--
ALTER TABLE `carousells`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `masukans`
--
ALTER TABLE `masukans`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikats`
--
ALTER TABLE `sertifikats`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carousells`
--
ALTER TABLE `carousells`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masukans`
--
ALTER TABLE `masukans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sertifikats`
--
ALTER TABLE `sertifikats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
