-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2026 at 05:17 PM
-- Server version: 10.11.16-MariaDB
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muketede_jemea`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `about` text NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `about`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Everything', '1729815191.png', 'Master category for eveything.', 'everything', '2024-10-25 00:13:11', '2024-10-25 00:13:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `main` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2024_10_24_144007_create_categories_table', 1),
(6, '2024_10_24_144020_create_sub_categories_table', 1),
(7, '2024_10_24_144031_create_products_table', 1),
(8, '2024_10_24_144041_create_contacts_table', 1),
(9, '2024_10_24_150938_create_pictures_table', 1);

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
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `name`, `picture`, `product_id`, `created_at`, `updated_at`) VALUES
(10, 'mandarine-33cl-bottle Image 1', '1769360691_869764d33949e5.png', 7, '2026-01-25 17:04:51', '2026-01-25 17:04:51'),
(11, 'kumquat-33cl-bottle Image 1', '1769360723_869764d53656f4.png', 8, '2026-01-25 17:05:23', '2026-01-25 17:05:23'),
(12, 'kumquat-1l-bottle Image 1', '1769360848_869764dd03f037.png', 9, '2026-01-25 17:07:28', '2026-01-25 17:07:28'),
(13, 'gingembre-33cl-bottle Image 1', '1769360878_869764deeb7911.png', 10, '2026-01-25 17:07:58', '2026-01-25 17:07:58'),
(14, 'gingembre-1l-bottle Image 1', '1769360906_869764e0ae705c.png', 11, '2026-01-25 17:08:27', '2026-01-25 17:08:27'),
(15, 'curcuma-33cl-bottle Image 1', '1769360942_869764e2e41663.png', 12, '2026-01-25 17:09:02', '2026-01-25 17:09:02'),
(16, 'curcuma-1l-bottle Image 1', '1769360965_869764e454e9ac.png', 13, '2026-01-25 17:09:25', '2026-01-25 17:09:25'),
(17, 'ananas-33cl-bottle Image 1', '1769360986_869764e5a429a3.png', 14, '2026-01-25 17:09:46', '2026-01-25 17:09:46'),
(37, 'sacoche-de-poivre-100g Image 1', '1777016433_869eb1e710b481.png', 27, '2026-04-24 07:40:33', '2026-04-24 07:40:33'),
(38, 'viande-de-chevre-vendu-au-kg Image 1', '1777016518_869eb1ec6d7bd2.png', 28, '2026-04-24 07:41:58', '2026-04-24 07:41:58'),
(39, 'poivre-blanc-de-penja-50g Image 1', '1777016592_869eb1f1002a5e.png', 29, '2026-04-24 07:43:12', '2026-04-24 07:43:12'),
(41, 'huile-de-piment-doux Image 1', '1779287289_86a0dc4f912edc.png', 31, '2026-05-20 14:28:09', '2026-05-20 14:28:09'),
(42, 'sirop-de-mandarine Image 1', '1779287464_86a0dc5a83b438.png', 32, '2026-05-20 14:31:04', '2026-05-20 14:31:04'),
(43, 'moulin-de-poivre-noire-de-penja Image 1', '1779287620_86a0dc6443e4ec.png', 20, '2026-05-20 14:33:40', '2026-05-20 14:33:40'),
(44, 'huile-de-piment-fort Image 1', '1779287828_86a0dc7148ab52.png', 33, '2026-05-20 14:37:08', '2026-05-20 14:37:08'),
(45, 'huile-de-palme-0-5l Image 1', '1779288049_86a0dc7f1a7063.png', 19, '2026-05-20 14:40:49', '2026-05-20 14:40:49'),
(46, 'huile-de-palme-1l Image 1', '1779288159_86a0dc85fb2e29.png', 24, '2026-05-20 14:42:39', '2026-05-20 14:42:39'),
(47, 'miel-blanc-de-oku-125ml Image 1', '1779288328_86a0dc9081ff83.png', 21, '2026-05-20 14:45:28', '2026-05-20 14:45:28'),
(48, 'confiture-de-kumquat Image 1', '1779288549_86a0dc9e5633e7.png', 34, '2026-05-20 14:49:09', '2026-05-20 14:49:09'),
(49, 'pot-miel-blanc-de-oku Image 1', '1779288655_86a0dca4f1ae91.png', 17, '2026-05-20 14:50:55', '2026-05-20 14:50:55'),
(50, 'huile-de-palm-5l Image 1', '1779432165_86a0ffae5d3c19.png', 26, '2026-05-22 06:42:46', '2026-05-22 06:42:46'),
(51, 'moulin-a-poivre-blanc-noire Image 1', '1779432444_86a0ffbfceb6b5.png', 25, '2026-05-22 06:47:25', '2026-05-22 06:47:25'),
(52, 'feves-de-cacao-200g Image 1', '1779733415_86a1493a7ddc5e.png', 18, '2026-05-25 18:23:36', '2026-05-25 18:23:36'),
(53, 'glass-de-poivre-334-g Image 1', '1779733961_86a1495c924065.png', 22, '2026-05-25 18:32:41', '2026-05-25 18:32:41'),
(54, 'sirop-de-lemon Image 1', '1779734090_86a14964a32433.png', 23, '2026-05-25 18:34:50', '2026-05-25 18:34:50'),
(55, 'curcuma Image 1', '1779734229_86a1496d59ac44.png', 30, '2026-05-25 18:37:09', '2026-05-25 18:37:09'),
(56, 'carton-de-24-bouteilles Image 1', '1779788950_86a156c96ba306.jpeg', 35, '2026-05-26 09:49:10', '2026-05-26 09:49:10'),
(57, 'chips-de-plantain-mure Image 1', '1780325724_86a1d9d5c146d5.jpeg', 36, '2026-06-01 14:55:24', '2026-06-01 14:55:24'),
(58, 'chips-de-plantain-non-mure Image 1', '1780325779_86a1d9d93c4124.jpeg', 37, '2026-06-01 14:56:19', '2026-06-01 14:56:19'),
(59, 'feuille-de-ndole-laver-au-kg Image 1', '1780325866_86a1d9dea1f1a9.jpeg', 38, '2026-06-01 14:57:46', '2026-06-01 14:57:46'),
(60, 'chips-de-plantain-mure-35g Image 1', '1780326973_86a1da23d12d58.jpeg', 39, '2026-06-01 15:16:13', '2026-06-01 15:16:13'),
(61, 'chips-de-plantain-non-mure-35g Image 1', '1780327235_86a1da3432aaad.jpeg', 40, '2026-06-01 15:20:35', '2026-06-01 15:20:35');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double DEFAULT NULL,
  `short_description` text NOT NULL,
  `long_description` longtext NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `short_description`, `long_description`, `slug`, `category_id`, `sub_category_id`, `created_at`, `updated_at`) VALUES
(7, 'Ananas Mandarine 33cl', 600, 'Ananas Mandarine 33cl bottle', '<p><span style=\"font-size: 14.4px;\">Ananas Mandarine 33cl bottle</span></p>', 'mandarine-33cl-bottle', 1, 3, '2026-01-25 17:04:51', '2026-05-26 09:36:30'),
(8, 'Ananas Kumquat 33cl', 600, 'Ananas Kumquat 33cl bottle', '<p><span style=\"font-size: 14.4px;\">Ananas Kumquat 33cl bottle</span></p>', 'kumquat-33cl-bottle', 1, 3, '2026-01-25 17:05:23', '2026-05-26 09:37:02'),
(9, 'Ananas Kumquat 1l', 2500, 'Ananas Kumquat 1l bottle', '<p><span style=\"font-size: 14.4px;\">ananas Kumquat 1l bottle</span></p>', 'kumquat-1l-bottle', 1, 3, '2026-01-25 17:07:28', '2026-05-26 09:37:19'),
(10, 'Ananas Gingembre 33cl', 600, 'Ananas Gingembre 33cl bottle', '<p><span style=\"font-size: 14.4px;\">Ananas Gingembre 33cl bottle</span></p>', 'gingembre-33cl-bottle', 1, 3, '2026-01-25 17:07:58', '2026-05-26 09:37:30'),
(11, 'Ananas Gingembre 1l', 2500, 'Ananas Gingembre 1l bottle', '<p><span style=\"font-size: 14.4px;\">Ananas Gingembre 1l bottle</span></p>', 'gingembre-1l-bottle', 1, 3, '2026-01-25 17:08:26', '2026-05-26 09:37:42'),
(12, 'Ananas Curcuma 33cl', 600, 'Ananas Curcuma 33cl bottle', '<p><span style=\"font-size: 14.4px;\">Ananas Curcuma 33cl bottle</span></p>', 'curcuma-33cl-bottle', 1, 3, '2026-01-25 17:09:02', '2026-05-26 09:37:58'),
(13, 'Ananas Curcuma 1l', 2500, 'Ananas Curcuma 1l bottle', '<p><span style=\"font-size: 14.4px;\">Ananas Curcuma 1l bottle</span></p>', 'curcuma-1l-bottle', 1, 3, '2026-01-25 17:09:25', '2026-05-26 09:38:13'),
(14, 'Pur Jus Ananas 33cl', 600, 'Pur jus Ananas 33cl bottle', '<p><span style=\"font-size: 14.4px;\">Pur jus Ananas 33cl bottle</span></p>', 'ananas-33cl-bottle', 1, 3, '2026-01-25 17:09:46', '2026-05-26 09:38:37'),
(17, 'Pot Miel blanc de OKU', 3500, 'miel blanc de OKU', '<p>Miel blanc de OKU</p>', 'pot-miel-blanc-de-oku', 1, 7, '2026-04-08 15:41:57', '2026-04-08 15:41:57'),
(18, 'Fèves de cacao(200g)', 1000, 'cacao', '<p>cacao</p>', 'feves-de-cacao-200g', 1, 7, '2026-04-09 15:59:59', '2026-04-09 15:59:59'),
(19, 'Huile de palme 0,5l', 500, 'huile de palme', '<p>huile de palme</p>', 'huile-de-palme-0-5l', 1, 5, '2026-04-09 16:02:32', '2026-04-24 07:58:20'),
(20, 'Moulin de poivre noire de Penja', 3500, 'poivre', '<p>Poivre</p>', 'moulin-de-poivre-noire-de-penja', 1, 4, '2026-04-09 16:04:08', '2026-04-09 16:04:08'),
(21, 'Miel blanc de Oku(125ml)', 1500, 'miel blanc', '<p>Miel blanc</p>', 'miel-blanc-de-oku-125ml', 1, 7, '2026-04-09 16:05:42', '2026-04-09 16:05:42'),
(22, 'Glass de poivre (334 g)', 6000, 'caraf en verre de poivre  blanc de penja', '<p>poivre blanc de penja</p>', 'glass-de-poivre-334-g', 1, 4, '2026-04-24 06:53:05', '2026-04-24 06:53:05'),
(23, 'Sirop de lemon', 2000, 'sirop de lemon', '<p>sirop de lemon</p>', 'sirop-de-lemon', 1, 3, '2026-04-24 06:56:37', '2026-05-26 09:43:09'),
(24, 'Huile de palme 1l', 1000, 'huile de palme', '<p>huile rouge&nbsp;</p>', 'huile-de-palme-1l', 1, 5, '2026-04-24 06:58:08', '2026-05-26 09:39:48'),
(25, 'Moulin a poivre (Blanc+Noire) 120g', 3500, 'poivre blanc + noire', '<p>poivre</p>', 'moulin-a-poivre-blanc-noire', 1, 4, '2026-04-24 07:37:24', '2026-04-24 07:39:21'),
(26, 'Huile de palm 5l', 4500, 'red oil', '<p>red oil</p>', 'huile-de-palm-5l', 1, 5, '2026-04-24 07:38:40', '2026-05-26 09:39:06'),
(27, 'Sacoche de poivre de penja 100g', 2000, 'poivre', '<p>poivre</p>', 'sacoche-de-poivre-100g', 1, 4, '2026-04-24 07:40:33', '2026-05-26 09:40:06'),
(28, 'Viande de chèvre 1kg', 2500, 'viande', '<p>viande</p>', 'viande-de-chevre-vendu-au-kg', 1, 7, '2026-04-24 07:41:58', '2026-05-26 09:44:32'),
(29, 'Poivre blanc de penja 50g', 1000, 'poivre de penja', '<p>poivre de penja</p>', 'poivre-blanc-de-penja-50g', 1, 4, '2026-04-24 07:43:12', '2026-04-24 07:43:12'),
(30, 'Curcuma', 1500, 'curcuma', '<p>curcuma</p>', 'curcuma', 1, 4, '2026-04-24 07:54:45', '2026-05-26 09:42:36'),
(31, 'Huile de piment doux', 1500, 'huile de piment', '<p>huile de piment</p>', 'huile-de-piment-doux', 1, 4, '2026-05-20 14:28:09', '2026-05-26 09:41:44'),
(32, 'Sirop de mandarine', 2000, 'sirop de mandarine', '<p>sirop de mandarine</p>', 'sirop-de-mandarine', 1, 3, '2026-05-20 14:31:04', '2026-05-26 09:42:13'),
(33, 'Huile de piment fort', 1500, 'huile de piment fort', '<p>huile de piment fort</p>', 'huile-de-piment-fort', 1, 4, '2026-05-20 14:37:08', '2026-05-26 09:41:58'),
(34, 'Confiture de kumquat', 2000, 'confiture', '<p>confiture</p>', 'confiture-de-kumquat', 1, 7, '2026-05-20 14:49:09', '2026-05-26 09:39:27'),
(35, 'Carton de 24 bouteilles', 14400, 'Nous proposons un mélange de saveurs de jus de 33cl, laissez nous un message sur whatsapp', '<p>Carton de bouteilles de 33cl</p>', 'carton-de-24-bouteilles', 1, 3, '2026-05-26 09:49:10', '2026-05-26 09:49:10'),
(36, 'chips de plantain mure(150g)', 500, 'plantain mure', '<p>plantain mure</p>', 'chips-de-plantain-mure', 1, 7, '2026-06-01 14:55:24', '2026-06-01 15:07:56'),
(37, 'chips de plantain non-mure(150g)', 500, 'plantain', '<p>plantain</p>', 'chips-de-plantain-non-mure', 1, 7, '2026-06-01 14:56:19', '2026-06-01 15:08:44'),
(38, 'feuille de ndole laver (au kg)', 1000, 'ndole', '<p>ndole</p>', 'feuille-de-ndole-laver-au-kg', 1, 7, '2026-06-01 14:57:46', '2026-06-01 14:57:46'),
(39, 'chips de plantain mure(35g)', 100, 'plantain', '<p>plantain</p>', 'chips-de-plantain-mure-35g', 1, 7, '2026-06-01 15:16:13', '2026-06-01 15:16:13'),
(40, 'chips de plantain non-mure(35g)', 100, 'chips', '<p>chips</p>', 'chips-de-plantain-non-mure-35g', 1, 7, '2026-06-01 15:20:35', '2026-06-01 15:20:35');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `about` text NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `image`, `about`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'Jus', '1769360028.png', 'Jus', 'jus', 1, '2026-01-25 16:53:48', '2026-01-25 16:53:48'),
(4, 'Épices', '1769360053.png', 'Épices', 'epices', 1, '2026-01-25 16:54:13', '2026-01-25 16:54:13'),
(5, 'Huiles de cuisson', '1769360256.png', 'Huiles de cuisson', 'huiles-de-cuisson', 1, '2026-01-25 16:57:36', '2026-01-25 16:57:36'),
(6, 'Graines', '1769360283.png', 'Graines', 'graines', 1, '2026-01-25 16:58:03', '2026-01-25 16:58:03'),
(7, 'Autres', '1769360302.png', 'Autres', 'autres', 1, '2026-01-25 16:58:22', '2026-01-25 16:58:22');

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
(1, 'dna.', 'hi@dna.test', NULL, '$2y$10$4u7PIInlEOSDWjm1nkfJ1OTZUyfqoA67wKPl1DZzkucpFLGwBDW4.', 'PGxIzooWfsEC0LMcTEGlnAhEe0mhGC1EM8uVlwhpnqejXOPZlmhSu2n2uNk7', '2024-10-24 15:26:15', '2024-10-24 15:26:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pictures_product_id_foreign` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
