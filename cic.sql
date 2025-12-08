-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2025 at 12:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cic`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` bigint UNSIGNED NOT NULL,
  `batch_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `production_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `batch_number`, `product_id`, `production_date`, `expire_date`, `created_at`, `updated_at`) VALUES
(1, '123ABC', 1, '2025-08-11', '2026-08-11', '2025-08-11 14:59:20', '2025-08-11 14:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('cic_cache_356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1756511529),
('cic_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1756511529;', 1756511529),
('cic_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1756607477),
('cic_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1756607477;', 1756607477);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_29_113907_create_obat_categories_table', 1),
(5, '2025_06_29_113914_create_product_categories_table', 1),
(6, '2025_06_29_114429_create_batches_table', 1),
(7, '2025_06_29_114619_create_products_detail_table', 1),
(8, '2025_06_29_120540_create_uoms_table', 1),
(9, '2025_08_03_065948_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obat_categories`
--

CREATE TABLE `obat_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `obat_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obat_categories`
--

INSERT INTO `obat_categories` (`id`, `obat_category_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Obat Bebas', 'obat-bebas', '2025-06-30 00:25:19', '2025-08-16 16:51:25'),
(2, 'Obat Bebas Terbatas', 'obat-bebas-terbatas', '2025-06-30 00:25:30', '2025-06-30 00:25:30'),
(3, 'Obat Keras', 'obat-keras', '2025-06-30 00:25:39', '2025-08-16 17:11:39'),
(4, 'Obat Jenis Narkotika', 'obat-jenis-narkotika', '2025-06-30 00:25:48', '2025-06-30 00:25:48'),
(5, 'Obat Jamu', 'obat-jamu', '2025-06-30 00:25:59', '2025-06-30 00:25:59'),
(6, 'Obat Herbal Terstandar', 'obat-herbal-terstandar', '2025-06-30 00:26:05', '2025-06-30 00:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `product_category_id` bigint UNSIGNED NOT NULL,
  `obat_category_id` bigint UNSIGNED NOT NULL,
  `uom_id` bigint UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `obat_category_id`, `uom_id`, `product_name`, `slug`, `product_code`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 5, 'Constipen', 'constipen', 'COCS12', '2025-08-11 14:59:02', '2025-08-16 17:30:48'),
(2, 2, 3, 5, 'Ulsafate Suspensi', 'ulsafate-suspensi', 'COUL51', '2025-08-15 17:21:31', '2025-08-16 17:33:22'),
(4, 2, 3, 5, 'Ulsafate Tablet', 'ulsafate-tablet', 'COUL50', '2025-08-15 17:22:08', '2025-08-16 17:32:41'),
(5, 1, 1, 5, 'Fortiboost Imuno Sirup', 'fortiboost-imuno-sirup', 'COFORTIMS', '2025-08-15 17:22:51', '2025-08-16 17:33:51'),
(6, 1, 1, 5, 'Fortiboost Imuno Kaplet', 'fortiboost-imuno-kaplet', 'COFORTIMK', '2025-08-15 17:23:14', '2025-08-16 17:34:05'),
(7, 1, 1, 5, 'Fortiboost D3 4000', 'fortiboost-d3-4000', 'FORTD34', '2025-08-15 17:23:39', '2025-08-15 17:23:39'),
(8, 1, 1, 5, 'Fortiboost D3 1000', 'fortiboost-d3-1000', 'FORTD31', '2025-08-15 17:24:01', '2025-08-15 17:24:01'),
(9, 1, 2, 5, 'ZincPro Sirup', 'zincpro-sirup', 'COZINS', '2025-08-15 17:24:32', '2025-08-15 17:24:32'),
(10, 1, 2, 5, 'ZincPro Drops', 'zincpro-drops', 'COZIND', '2025-08-15 17:24:52', '2025-08-15 17:24:52'),
(11, 1, 1, 5, 'Maltofer 150ml Sirup', 'maltofer-150ml-sirup', 'COMALS', '2025-08-15 17:25:20', '2025-08-15 17:25:20'),
(12, 1, 1, 5, 'Maltofer Tablet Kunyah', 'maltofer-tablet-kunyah', 'COMAL5', '2025-08-15 17:25:39', '2025-08-15 17:25:39'),
(13, 1, 1, 5, 'Maltofer Obat Tetes 30 ml', 'maltofer-obat-tetes-30-ml', 'COMALD', '2025-08-15 17:26:02', '2025-08-15 17:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `products_detail`
--

CREATE TABLE `products_detail` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `indikasi` longtext COLLATE utf8mb4_unicode_ci,
  `komposisi` longtext COLLATE utf8mb4_unicode_ci,
  `dosis` longtext COLLATE utf8mb4_unicode_ci,
  `aturan_pakai` longtext COLLATE utf8mb4_unicode_ci,
  `perhatian` longtext COLLATE utf8mb4_unicode_ci,
  `kontra_indikasi` longtext COLLATE utf8mb4_unicode_ci,
  `efek_samping` longtext COLLATE utf8mb4_unicode_ci,
  `kemasan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomer_registrasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufaktur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_detail`
--

INSERT INTO `products_detail` (`id`, `product_id`, `image`, `price`, `description`, `indikasi`, `komposisi`, `dosis`, `aturan_pakai`, `perhatian`, `kontra_indikasi`, `efek_samping`, `kemasan`, `nomer_registrasi`, `manufaktur`, `url_website`, `created_at`, `updated_at`) VALUES
(1, 1, 'product_images/01K2R3TMXVRJDFFHBTFZPMAFRN.png', '13000.00', '<p>tester</p>', '<p>te</p>', '<p>e</p>', '<p>e</p>', '<p>e</p>', '<p>e</p>', '<p>e</p>', '<p>e</p>', 'res', '12345', 'qw', 'https://filamentphp.com/', '2025-08-15 17:04:14', '2025-08-16 16:37:28'),
(2, 2, 'product_images/01K3CSPJXJQRJT2RSS1H25Z7C4.png', '0.00', '<p>-</p>', '<p>-</p>', '<p>-</p>', '<p>-</p>', '<p>-</p>', '<p>-</p>', '<p>-</p>', '<p>-</p>', '-', '-', '-', NULL, '2025-08-23 18:04:50', '2025-08-23 18:04:50'),
(3, 4, 'product_images/01K3CSQX9824C00DGB52HBJ3VX.png', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-23 18:05:33', '2025-08-23 18:05:33'),
(4, 5, 'product_images/01K3CSV93NMCH4EE1RGNTCYDDJ.png', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-23 18:07:23', '2025-08-23 18:07:23'),
(5, 6, 'product_images/01K3CSW3QMCW8TSAQHKSTBR6NC.png', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-23 18:07:51', '2025-08-23 18:07:51'),
(6, 7, 'product_images/01K3CSWZCX6N2WAAZ99ZQGSENC.png', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-23 18:08:19', '2025-08-23 18:08:19'),
(7, 8, 'product_images/01K3CSXTCE7FJAFMY4BZHAZ53W.png', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-23 18:08:47', '2025-08-23 18:08:47'),
(8, 9, 'product_images/01K3CSYRQJ5SQCE6PFFC5ZBAHA.png', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-23 18:09:18', '2025-08-23 18:09:18'),
(9, 10, 'product_images/01K3CSZR75XDV288ZRW58Y01P1.png', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-23 18:09:50', '2025-08-23 18:09:50'),
(10, 11, 'product_images/01K3CT0M8DZ8S4STDJS3HQG60Q.png', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-23 18:10:19', '2025-08-23 18:10:19'),
(11, 12, 'product_images/01K3CT1EDX2642XYT3GAEEJGQ9.png', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-23 18:10:45', '2025-08-23 18:10:45'),
(12, 13, 'product_images/01K3W3W755ERXGW3RRRMA7T10V.png', '0.00', '<p>&nbsp;MALTOFER DROPS adalah suplemen zat besi dalam bentuk tetes yang mengandung Iron (III) Hydroxide Polymaltose Complex. Bentuk kompleks polimaltosa besi ini dirancang untuk membantu penyerapan zat besi yang baik dengan tolerabilitas yang lebih tinggi dibandingkan garam besi anorganik konvensional, sehingga membantu meminimalkan efek samping pada saluran pencernaan seperti mual atau konstipasi. Zat besi merupakan mineral esensial yang berperan penting dalam pembentukan hemoglobin, komponen sel darah merah yang berfungsi membawa oksigen ke seluruh tubuh. Maltofer Drops membantu memenuhi kebutuhan zat besi, terutama pada bayi dan anak-anak dalam masa pertumbuhan, serta untuk membantu mencegah dan mengatasi defisiensi zat besi.</p>', '<p>&nbsp;Untuk pengobatan kekurangan zat besi dengan atau tanpa anemia.&nbsp;</p>', '<p>&nbsp;Tiap mL (setara dengan 20 tetes) mengandung:<br>Iron (III)-Hydroxide Polymaltose Complex (IPC) setara dengan Besi elemental 50 mg.&nbsp;</p>', '<p>&nbsp;Dosis dan lamanya terapi bergantung pada tingkat kekurangan zat besi dan harus disesuaikan dengan anjuran dokter.&nbsp; Berikut dosis rekomendasi untuk kondisi \"Dengan Anemia\":<br><br>Bayi (&lt; 1 tahun): 10 - 20 tetes sehari.<br>Anak-anak (1 – 12 tahun): 24 - 40 tetes sehari.<br>Anak-anak (&gt; 12 tahun), Dewasa, dan Ibu Menyusui: 40 - 120 tetes sehari.<br>Wanita Hamil: 80 - 120 tetes sehari.<br>Bayi Prematur: 1 - 2 tetes sehari per kg berat badan.<br>(1 mL = 20 tetes; 1 tetes = 2.5 mg besi elemental).<br><br><br>Untuk kondisi \"Tanpa Anemia\" atau \"Terapi Pencegahan\", dosis akan berbeda dan harus sesuai dengan petunjuk dokter.&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-23 18:11:03', '2025-08-29 16:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `product_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_category_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Wellnes', 'wellnes', '2025-06-30 00:16:14', '2025-06-30 00:16:14'),
(2, 'Pharma', 'pharma', '2025-06-30 00:16:50', '2025-06-30 00:16:50'),
(3, 'Consumer Healthcare', 'consumer-healthcare', '2025-06-30 00:17:10', '2025-06-30 00:17:10'),
(4, 'Internasional Operations', 'internasional-operations', '2025-06-30 00:17:26', '2025-06-30 00:17:26'),
(5, 'Cereal', 'cereal', '2025-06-30 00:17:33', '2025-06-30 00:17:33'),
(6, 'Honey', 'honey', '2025-06-30 00:17:47', '2025-08-16 17:14:50'),
(7, 'Herbal', 'herbal', '2025-06-30 00:17:53', '2025-06-30 00:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('av3T4exMQbmCOdgmFn2aB6RogNdd7qyzWbzAYYFN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXhzdUFmWGk5cGI1Z3BBcUtXMDlCclUzTTlmQ0tNRWFrQVF3Nkp3NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0L2NvbnN0aXBlbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1756638514),
('zmXuLTM66CsPJlYDauG9vrY74dJVuTUQa65xvHm6', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQUZ3QThpTFZLeEtNSFpudnVmdmZNcmxEaWVhUE9WVWVCRW5SOTNaeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkNktpNEpiMlo5T21YYUpReTByZXRmT05LQmJnOEVidEl6S1AxdUpmWENLZWdTTnJHVWdrMVciO30=', 1756607994);

-- --------------------------------------------------------

--
-- Table structure for table `uoms`
--

CREATE TABLE `uoms` (
  `id` bigint UNSIGNED NOT NULL,
  `uom_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uom_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uom_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uom_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uoms`
--

INSERT INTO `uoms` (`id`, `uom_name`, `uom_code`, `uom_type`, `uom_description`, `created_at`, `updated_at`) VALUES
(1, 'Pieces', 'PCS', 'unit', NULL, '2025-06-30 00:31:10', '2025-06-30 00:31:10'),
(2, 'Milliliters', 'ML', 'volume', NULL, '2025-06-30 00:31:22', '2025-06-30 00:31:22'),
(3, 'Grams', 'GR', 'weight', NULL, '2025-06-30 00:31:34', '2025-06-30 00:31:34'),
(4, 'Liters', 'LTR', 'volume', NULL, '2025-06-30 00:31:46', '2025-06-30 00:31:46'),
(5, 'Box', 'BOX', 'packaging', NULL, '2025-06-30 00:32:01', '2025-06-30 00:32:01'),
(6, 'Bottle', 'BTL', 'unit', NULL, '2025-08-16 17:22:01', '2025-08-16 17:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'Administrator', 'admin@mail.com', NULL, '$2y$12$6Ki4Jb2Z9OmXaJQy0retfONKBbg8EbtIzKP1uJfXCKegSNrGUgk1W', NULL, '2025-08-11 14:58:13', '2025-08-11 14:58:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `batches_batch_number_unique` (`batch_number`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat_categories`
--
ALTER TABLE `obat_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `obat_categories_slug_unique` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_product_code_unique` (`product_code`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`),
  ADD KEY `products_obat_category_id_foreign` (`obat_category_id`),
  ADD KEY `products_uom_id_foreign` (`uom_id`);

--
-- Indexes for table `products_detail`
--
ALTER TABLE `products_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_categories_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `uoms`
--
ALTER TABLE `uoms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uoms_uom_name_unique` (`uom_name`),
  ADD UNIQUE KEY `uoms_uom_code_unique` (`uom_code`);

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
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `obat_categories`
--
ALTER TABLE `obat_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products_detail`
--
ALTER TABLE `products_detail`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `uoms`
--
ALTER TABLE `uoms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_obat_category_id_foreign` FOREIGN KEY (`obat_category_id`) REFERENCES `obat_categories` (`id`),
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`),
  ADD CONSTRAINT `products_uom_id_foreign` FOREIGN KEY (`uom_id`) REFERENCES `uoms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
