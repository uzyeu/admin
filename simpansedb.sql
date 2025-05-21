-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Bulan Mei 2025 pada 08.38
-- Versi server: 8.0.30
-- Versi PHP: 8.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpansedb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `api_keys`
--

CREATE TABLE `api_keys` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspeks`
--

CREATE TABLE `aspeks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_aspek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan_aspek` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aspeks`
--

INSERT INTO `aspeks` (`id`, `nama_aspek`, `urutan_aspek`, `created_at`, `updated_at`) VALUES
(1, 'Kebijakan Internal Tata Kelola SPBE', 1, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(2, 'Perencanaan Strategis SPBE', 2, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(3, 'Teknologi Informasi dan Komunikasi', 3, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(4, 'Penyelenggaraan SPBE', 4, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(5, 'Penerapan Manajemen SPBE', 5, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(6, 'Pelaksanaan Audit TIK', 6, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(7, 'Layanan Administrasi Pemerintahan Berbasis Elektronik', 7, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(8, 'Layanan Publik Berbasis Elektronik', 8, '2025-05-21 00:01:53', '2025-05-21 00:01:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi_konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `slug`, `gambar`, `isi_konten`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Aut dicta iure aut iure occaecati qui ullam.', 'aut-dicta-iure-aut-iure-occaecati-qui-ullam-2OYIj', 'berita/01JTQ4PG7HGKV34DYEBYVFMA2Q.heic', 'Facilis aut rerum veritatis deserunt soluta. Eos voluptate voluptatum optio voluptatem. Modi voluptas quia ullam sapiente assumenda corrupti.\n\nEligendi placeat iure non rerum adipisci quia. Ut at qui iusto eius. Et et voluptatem qui et. Et sed sint quae minima temporibus praesentium illum.\n\nAut reprehenderit saepe enim. Inventore eveniet tempore inventore officia sint tempore debitis iure. Molestias neque molestias velit rerum.\n\nEos explicabo et molestiae sit sint quia temporibus. Ut maxime tenetur omnis non eum. Praesentium inventore id cupiditate quod vero culpa totam aut. Blanditiis aut et nulla aliquam animi exercitationem.\n\nOmnis tenetur magni ipsam aut dolorem quae quaerat. Hic hic repellat vel occaecati. Possimus unde aut cupiditate dolor quod mollitia. Molestiae dolor distinctio reprehenderit vel.', 'Joaquin Littel', '2025-05-21 00:02:59', '2025-05-21 00:02:59'),
(2, 'Laboriosam molestiae quam id non.', 'laboriosam-molestiae-quam-id-non-Q53sc', 'berita/01JTQ4PG7HGKV34DYEBYVFMA2Q.heic', 'Dolorem eius dolores cupiditate magnam occaecati consequatur tempore. Fugit in recusandae ducimus quos et. Neque omnis repudiandae ut quisquam.\n\nVel quam et voluptate dolores. Repudiandae provident neque laboriosam laboriosam labore quisquam. Cumque aut molestias sed.\n\nLaudantium enim error nostrum ut. Velit eum iusto sint voluptatem nihil laboriosam impedit.\n\nNulla cumque et ad exercitationem in earum est ipsam. Et impedit quisquam eos fuga laboriosam numquam quasi. Ut quod laudantium rerum voluptatem nulla cupiditate. Non ab et tenetur minus aut quas et.\n\nEveniet optio deserunt et nihil omnis et enim. Numquam aut delectus et. Modi eum facere dignissimos deleniti et voluptatem. Corporis quo recusandae tempore voluptatem ut.', 'Horacio Wisoky', '2025-05-21 00:02:59', '2025-05-21 00:02:59'),
(3, 'Ipsum et totam tempora dolores autem.', 'ipsum-et-totam-tempora-dolores-autem-10FUR', 'berita/01JVJCGJ3SE1899VSRYCDTNCJD.jpeg', 'Impedit in earum fugiat expedita maxime. Debitis commodi deserunt neque distinctio. Quaerat quia minus voluptatem qui nostrum voluptate.\n\nEst dignissimos sunt autem reprehenderit voluptatum optio. Sit atque in laborum aut quibusdam facere natus dicta. Laboriosam voluptas cumque libero aut quos dolores similique ut. Aut sint ipsum perspiciatis consequatur et doloremque.\n\nQuis dolorum rerum in blanditiis totam et. Inventore dolore occaecati accusantium est qui. Nostrum vero numquam praesentium suscipit. Unde vero sunt rerum quod ipsum enim quis.\n\nUt debitis ut molestiae quia in. Molestiae modi assumenda corporis reiciendis.\n\nAssumenda aut commodi voluptatem qui quam eos. Eaque quia sint voluptas id qui laborum dolorem. Fuga ab voluptatem sapiente id.', 'Wilfrid Schinner', '2025-05-21 00:02:59', '2025-05-21 00:02:59'),
(4, 'Tenetur pariatur quia libero eum qui repellendus.', 'tenetur-pariatur-quia-libero-eum-qui-repellendus-J8bQY', 'berita/01JVJDHYDQ6T2332BDVERHV565.jpg', 'Esse et inventore sed illo enim. Voluptatem ipsum dolor in eaque aut ipsum consequatur. Atque ipsa ut veritatis consectetur rem.\n\nNumquam ut quidem ea enim eum. Aspernatur dolor assumenda corporis quod. Iusto inventore magni sint totam occaecati. Mollitia est officia recusandae sit velit laudantium autem optio.\n\nUt dolorem eligendi voluptatem sit corrupti omnis. Culpa consequatur sint laborum eius. Accusamus doloribus autem excepturi et pariatur necessitatibus earum. Veniam non eum omnis ut optio qui officiis.\n\nMolestiae consequatur voluptatibus quidem sed culpa labore fugit. Et sit natus omnis in veritatis omnis expedita.\n\nPerspiciatis at consequatur sequi tenetur natus libero explicabo. Molestias pariatur quo et sit. Ipsa praesentium et voluptate dolor culpa fugiat.', 'Oran Zemlak', '2025-05-21 00:02:59', '2025-05-21 00:02:59'),
(5, 'Quo dolorum quos ab beatae ut optio praesentium.', 'quo-dolorum-quos-ab-beatae-ut-optio-praesentium-bIPUu', 'berita/01JVJCGJ3SE1899VSRYCDTNCJD.jpeg', 'In labore maiores sed cum repudiandae velit officia. Dolorum eius harum similique dicta est. Eos at enim voluptates aliquid voluptates ab porro reprehenderit. Dolorem est quam qui.\n\nAliquid necessitatibus nostrum qui veritatis unde. Minus in blanditiis cumque qui dolorem et. Dolorum molestias dignissimos placeat voluptates libero ducimus.\n\nIllum id nobis id rerum eligendi. Unde dolore quia molestias ea incidunt. Voluptas est consectetur nisi non veritatis.\n\nEt suscipit ut velit numquam aut eos est. Impedit alias unde minus quidem occaecati non reiciendis. Illo reiciendis amet nesciunt sed consectetur laboriosam. Est voluptas incidunt consequatur facilis aut quas incidunt.\n\nImpedit deserunt facere dolor animi. Ea voluptatem facere est quaerat et nobis omnis. In non est ipsum eos ex incidunt totam. Quis omnis quidem et est.', 'Prof. Candice Lindgren III', '2025-05-21 00:02:59', '2025-05-21 00:02:59'),
(6, 'Quia ut possimus suscipit ratione qui dolorem.', 'quia-ut-possimus-suscipit-ratione-qui-dolorem-ylQMF', 'berita/01JVJCGJ3SE1899VSRYCDTNCJD.jpeg', 'Eaque molestias eum sint consequatur qui et ut. Ut est tempore et illum consectetur odit. Quod odit cupiditate quis ab adipisci aut est. Eum voluptatem tempora laborum excepturi alias velit.\n\nAut ratione ut expedita expedita distinctio quibusdam sit. Iusto sit rerum et reiciendis. Tempora et consequatur aut minima fuga delectus rerum. Porro impedit natus temporibus vel ut. Ut a eos facilis tenetur perspiciatis porro qui.\n\nAperiam dolor quod provident adipisci minus. Doloremque aut possimus expedita natus voluptatum est. Corporis autem ut placeat minus soluta aut. Eveniet adipisci molestiae cumque doloremque ut beatae.\n\nIpsum voluptas quia natus est amet quae qui. Vel repudiandae rerum dolores quo non assumenda. Quod in nihil in sed molestias porro. Quos similique eligendi consequatur.\n\nQuibusdam corporis suscipit dolores illo. Est id sed sed suscipit. Dolores voluptas molestiae quia sint rerum laudantium.', 'Georgette Willms', '2025-05-21 00:02:59', '2025-05-21 00:02:59'),
(7, 'Nostrum repellat laborum velit sunt vitae.', 'nostrum-repellat-laborum-velit-sunt-vitae-WXhXF', 'berita/01JTQ4PG7HGKV34DYEBYVFMA2Q.heic', 'Sint quia quis ex repellendus id. Natus aperiam est hic quo vitae quia. Blanditiis nesciunt nihil quasi recusandae saepe temporibus non harum.\n\nModi dolorem autem atque omnis similique. Consequatur quam qui totam. Delectus nihil quo nobis est dolorem facere error. Aut quae illo sint.\n\nUt expedita sit dolor. Aut provident aut dolor at. Ut illo distinctio velit quae corrupti et molestiae facilis. Provident ut libero est quisquam voluptatem recusandae.\n\nQuasi doloribus dicta non optio atque voluptate. Reiciendis vel nostrum voluptatibus similique repudiandae. Velit iusto illum sit quis nisi autem.\n\nNam repudiandae explicabo aperiam facere eum. Est exercitationem eius omnis tempora. Dolore autem eos officiis est maxime consequatur vitae est. Ex blanditiis corporis eos natus sunt qui.', 'Xzavier Rohan', '2025-05-21 00:02:59', '2025-05-21 00:02:59'),
(8, 'Et fugit sunt earum quia non asperiores.', 'et-fugit-sunt-earum-quia-non-asperiores-I9REm', 'berita/01JTQ4PG7HGKV34DYEBYVFMA2Q.heic', 'Aut et earum quidem quae rerum quasi. Ut numquam excepturi qui molestiae. Delectus inventore rerum illum qui recusandae quas.\n\nAperiam qui provident aut soluta corporis. Aut dolores deserunt quos id rerum doloribus nihil dolorem. Asperiores sapiente assumenda tenetur sint voluptatem ut ducimus accusamus. Minus in id natus enim enim. Aut mollitia saepe aut ipsa.\n\nVeritatis consequuntur qui saepe ut. Iusto inventore eos iste accusamus nobis atque similique. Quaerat optio asperiores eum. Dolor earum consequuntur dolores animi. Et eum eaque ut ex aut aut quia quaerat.\n\nCumque incidunt ut ullam. Itaque voluptatem et corrupti sint est libero qui. Libero quia quod perferendis provident suscipit.\n\nEos nesciunt illum adipisci quam culpa voluptatem error. Enim dolor vero consequatur quo deleniti et consequatur. Non nihil magni magni accusantium aut veniam quis.', 'Nettie Abshire', '2025-05-21 00:02:59', '2025-05-21 00:02:59'),
(9, 'Ab ut optio molestiae eum inventore.', 'ab-ut-optio-molestiae-eum-inventore-MgJro', 'berita/01JTQ4PG7HGKV34DYEBYVFMA2Q.heic', 'Nihil officiis doloremque eum fuga. Quae veritatis laudantium quo. Iste eos qui nulla officia laboriosam assumenda rerum cumque.\n\nNumquam voluptatem nobis eos facere iusto. Ut dolores aliquid nisi autem sequi. Eum eos officiis aliquid facere repudiandae et mollitia.\n\nItaque voluptatum dolorum possimus et. Consequatur nihil voluptatem ut tempora et. Ex repellat et ut praesentium ullam.\n\nNon aliquid reprehenderit sunt nisi repellat quia non. Corporis modi molestiae nam. Nostrum debitis ipsa quo deserunt consequatur quia vel et. Sunt nihil ut vel rerum rerum id fuga autem.\n\nVoluptas labore velit omnis molestiae et possimus. Perspiciatis autem cupiditate maiores laudantium. Totam dolorum iusto soluta fuga. Esse consequatur earum soluta unde ducimus amet.', 'Prof. Vernon Goyette I', '2025-05-21 00:02:59', '2025-05-21 00:02:59'),
(10, 'Odio illo quo quia aut fugiat.', 'odio-illo-quo-quia-aut-fugiat-BpnR5', 'berita/01JVJDHYDQ6T2332BDVERHV565.jpg', 'Fugiat accusantium quod eius et. Consequatur autem autem ipsum et ut. Optio nesciunt pariatur corporis velit dolor neque maxime sunt. Eum nihil enim ipsum sequi.\n\nEt in sequi necessitatibus aliquid sit magnam. Alias accusantium eum ducimus unde dolor consequatur. Sed et velit enim voluptatum vel perspiciatis ea facere. Soluta cupiditate libero unde laudantium corrupti ducimus laudantium.\n\nMinus sunt aut sed consectetur dolor explicabo. Voluptas consequatur fuga non odit enim accusantium. Expedita pariatur tempora deserunt quo doloribus et.\n\nBeatae deleniti et ducimus nostrum nihil. Inventore suscipit odio quod earum corrupti dolores.\n\nVelit at eius consequatur ut consectetur aut quis inventore. Veniam nam alias aut cum voluptatem culpa dolor. Et dolores qui commodi accusamus excepturi et. Ea labore quis ut.', 'Robert Pollich', '2025-05-21 00:02:59', '2025-05-21 00:02:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1747814702),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1747814702;', 1747814702),
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:122:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:10:\"view_aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:14:\"view_any_aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:12:\"create_aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:12:\"update_aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:13:\"restore_aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:17:\"restore_any_aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:15:\"replicate_aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:13:\"reorder_aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:12:\"delete_aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:16:\"delete_any_aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:18:\"force_delete_aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:22:\"force_delete_any_aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:11:\"view_berita\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:15:\"view_any_berita\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:13:\"create_berita\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:13:\"update_berita\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:14:\"restore_berita\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:18:\"restore_any_berita\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:16:\"replicate_berita\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:14:\"reorder_berita\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:13:\"delete_berita\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:17:\"delete_any_berita\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:19:\"force_delete_berita\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:23:\"force_delete_any_berita\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:21:\"view_dinas::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:25:\"view_any_dinas::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:23:\"create_dinas::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:23:\"update_dinas::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:24:\"restore_dinas::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:28:\"restore_any_dinas::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:26:\"replicate_dinas::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:24:\"reorder_dinas::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:23:\"delete_dinas::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:27:\"delete_any_dinas::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:29:\"force_delete_dinas::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:33:\"force_delete_any_dinas::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:23:\"view_dokumen::pendukung\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:37;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:27:\"view_any_dokumen::pendukung\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:25:\"create_dokumen::pendukung\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:25:\"update_dokumen::pendukung\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:26:\"restore_dokumen::pendukung\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:30:\"restore_any_dokumen::pendukung\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:28:\"replicate_dokumen::pendukung\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:26:\"reorder_dokumen::pendukung\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:25:\"delete_dokumen::pendukung\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:29:\"delete_any_dokumen::pendukung\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:31:\"force_delete_dokumen::pendukung\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:35:\"force_delete_any_dokumen::pendukung\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:20:\"view_evaluasi::tahun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:24:\"view_any_evaluasi::tahun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:22:\"create_evaluasi::tahun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:22:\"update_evaluasi::tahun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:52;a:4:{s:1:\"a\";i:53;s:1:\"b\";s:23:\"restore_evaluasi::tahun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:27:\"restore_any_evaluasi::tahun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:54;a:4:{s:1:\"a\";i:55;s:1:\"b\";s:25:\"replicate_evaluasi::tahun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:55;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:23:\"reorder_evaluasi::tahun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:56;a:4:{s:1:\"a\";i:57;s:1:\"b\";s:22:\"delete_evaluasi::tahun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:57;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:26:\"delete_any_evaluasi::tahun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:58;a:4:{s:1:\"a\";i:59;s:1:\"b\";s:28:\"force_delete_evaluasi::tahun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:59;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:32:\"force_delete_any_evaluasi::tahun\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:60;a:4:{s:1:\"a\";i:61;s:1:\"b\";s:14:\"view_indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:61;a:4:{s:1:\"a\";i:62;s:1:\"b\";s:18:\"view_any_indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:62;a:4:{s:1:\"a\";i:63;s:1:\"b\";s:16:\"create_indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:63;a:4:{s:1:\"a\";i:64;s:1:\"b\";s:16:\"update_indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:64;a:4:{s:1:\"a\";i:65;s:1:\"b\";s:17:\"restore_indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:65;a:4:{s:1:\"a\";i:66;s:1:\"b\";s:21:\"restore_any_indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:66;a:4:{s:1:\"a\";i:67;s:1:\"b\";s:19:\"replicate_indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:67;a:4:{s:1:\"a\";i:68;s:1:\"b\";s:17:\"reorder_indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:68;a:4:{s:1:\"a\";i:69;s:1:\"b\";s:16:\"delete_indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:69;a:4:{s:1:\"a\";i:70;s:1:\"b\";s:20:\"delete_any_indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:70;a:4:{s:1:\"a\";i:71;s:1:\"b\";s:22:\"force_delete_indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:71;a:4:{s:1:\"a\";i:72;s:1:\"b\";s:26:\"force_delete_any_indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:72;a:4:{s:1:\"a\";i:73;s:1:\"b\";s:21:\"view_informasi::aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:73;a:4:{s:1:\"a\";i:74;s:1:\"b\";s:25:\"view_any_informasi::aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:74;a:4:{s:1:\"a\";i:75;s:1:\"b\";s:23:\"create_informasi::aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:75;a:4:{s:1:\"a\";i:76;s:1:\"b\";s:23:\"update_informasi::aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:76;a:4:{s:1:\"a\";i:77;s:1:\"b\";s:24:\"restore_informasi::aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:77;a:4:{s:1:\"a\";i:78;s:1:\"b\";s:28:\"restore_any_informasi::aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:78;a:4:{s:1:\"a\";i:79;s:1:\"b\";s:26:\"replicate_informasi::aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:79;a:4:{s:1:\"a\";i:80;s:1:\"b\";s:24:\"reorder_informasi::aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:80;a:4:{s:1:\"a\";i:81;s:1:\"b\";s:23:\"delete_informasi::aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:81;a:4:{s:1:\"a\";i:82;s:1:\"b\";s:27:\"delete_any_informasi::aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:82;a:4:{s:1:\"a\";i:83;s:1:\"b\";s:29:\"force_delete_informasi::aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:83;a:4:{s:1:\"a\";i:84;s:1:\"b\";s:33:\"force_delete_any_informasi::aspek\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:84;a:4:{s:1:\"a\";i:85;s:1:\"b\";s:25:\"view_informasi::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:85;a:4:{s:1:\"a\";i:86;s:1:\"b\";s:29:\"view_any_informasi::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:86;a:4:{s:1:\"a\";i:87;s:1:\"b\";s:27:\"create_informasi::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:87;a:4:{s:1:\"a\";i:88;s:1:\"b\";s:27:\"update_informasi::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:88;a:4:{s:1:\"a\";i:89;s:1:\"b\";s:28:\"restore_informasi::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:89;a:4:{s:1:\"a\";i:90;s:1:\"b\";s:32:\"restore_any_informasi::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:90;a:4:{s:1:\"a\";i:91;s:1:\"b\";s:30:\"replicate_informasi::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:91;a:4:{s:1:\"a\";i:92;s:1:\"b\";s:28:\"reorder_informasi::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:92;a:4:{s:1:\"a\";i:93;s:1:\"b\";s:27:\"delete_informasi::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:93;a:4:{s:1:\"a\";i:94;s:1:\"b\";s:31:\"delete_any_informasi::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:94;a:4:{s:1:\"a\";i:95;s:1:\"b\";s:33:\"force_delete_informasi::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:95;a:4:{s:1:\"a\";i:96;s:1:\"b\";s:37:\"force_delete_any_informasi::indikator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:96;a:4:{s:1:\"a\";i:97;s:1:\"b\";s:9:\"view_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:97;a:4:{s:1:\"a\";i:98;s:1:\"b\";s:13:\"view_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:98;a:4:{s:1:\"a\";i:99;s:1:\"b\";s:11:\"create_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:99;a:4:{s:1:\"a\";i:100;s:1:\"b\";s:11:\"update_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:100;a:4:{s:1:\"a\";i:101;s:1:\"b\";s:11:\"delete_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:101;a:4:{s:1:\"a\";i:102;s:1:\"b\";s:15:\"delete_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:102;a:4:{s:1:\"a\";i:103;s:1:\"b\";s:9:\"view_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:103;a:4:{s:1:\"a\";i:104;s:1:\"b\";s:13:\"view_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:104;a:4:{s:1:\"a\";i:105;s:1:\"b\";s:11:\"create_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:105;a:4:{s:1:\"a\";i:106;s:1:\"b\";s:11:\"update_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:106;a:4:{s:1:\"a\";i:107;s:1:\"b\";s:12:\"restore_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:107;a:4:{s:1:\"a\";i:108;s:1:\"b\";s:16:\"restore_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:108;a:4:{s:1:\"a\";i:109;s:1:\"b\";s:14:\"replicate_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:109;a:4:{s:1:\"a\";i:110;s:1:\"b\";s:12:\"reorder_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:110;a:4:{s:1:\"a\";i:111;s:1:\"b\";s:11:\"delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:111;a:4:{s:1:\"a\";i:112;s:1:\"b\";s:15:\"delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:112;a:4:{s:1:\"a\";i:113;s:1:\"b\";s:17:\"force_delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:113;a:4:{s:1:\"a\";i:114;s:1:\"b\";s:21:\"force_delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:114;a:3:{s:1:\"a\";i:115;s:1:\"b\";s:32:\"widget_StatusIndikatorAdminDinas\";s:1:\"c\";s:3:\"web\";}i:115;a:3:{s:1:\"a\";i:116;s:1:\"b\";s:34:\"widget_NamaDinasWithTotalIndikator\";s:1:\"c\";s:3:\"web\";}i:116;a:3:{s:1:\"a\";i:117;s:1:\"b\";s:23:\"widget_GrafikIndeksSPBE\";s:1:\"c\";s:3:\"web\";}i:117;a:3:{s:1:\"a\";i:118;s:1:\"b\";s:35:\"widget_GrafikRataRataIndeksPerTahun\";s:1:\"c\";s:3:\"web\";}i:118;a:3:{s:1:\"a\";i:119;s:1:\"b\";s:23:\"widget_AspekIndeksChart\";s:1:\"c\";s:3:\"web\";}i:119;a:3:{s:1:\"a\";i:120;s:1:\"b\";s:31:\"widget_DistribusiIndikatorChart\";s:1:\"c\";s:3:\"web\";}i:120;a:3:{s:1:\"a\";i:121;s:1:\"b\";s:24:\"widget_AspekIndeksChart2\";s:1:\"c\";s:3:\"web\";}i:121;a:3:{s:1:\"a\";i:122;s:1:\"b\";s:27:\"widget_IndikatorIndeksChart\";s:1:\"c\";s:3:\"web\";}}s:5:\"roles\";a:1:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:11:\"super_admin\";s:1:\"c\";s:3:\"web\";}}}', 1747902088);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dinas_indikators`
--

CREATE TABLE `dinas_indikators` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `indikator_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dinas_indikators`
--

INSERT INTO `dinas_indikators` (`id`, `user_id`, `indikator_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL),
(2, 3, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 3, 4, NULL, NULL),
(5, 3, 5, NULL, NULL),
(6, 3, 6, NULL, NULL),
(7, 3, 7, NULL, NULL),
(8, 3, 8, NULL, NULL),
(9, 3, 9, NULL, NULL),
(10, 3, 10, NULL, NULL),
(11, 3, 11, NULL, NULL),
(12, 3, 12, NULL, NULL),
(13, 3, 13, NULL, NULL),
(14, 3, 15, NULL, NULL),
(15, 3, 16, NULL, NULL),
(16, 3, 17, NULL, NULL),
(17, 3, 18, NULL, NULL),
(18, 3, 19, NULL, NULL),
(19, 3, 22, NULL, NULL),
(20, 3, 23, NULL, NULL),
(21, 3, 27, NULL, NULL),
(22, 3, 28, NULL, NULL),
(23, 3, 29, NULL, NULL),
(24, 3, 30, NULL, NULL),
(25, 3, 31, NULL, NULL),
(26, 3, 42, NULL, NULL),
(27, 3, 43, NULL, NULL),
(28, 3, 47, NULL, NULL),
(29, 4, 11, NULL, NULL),
(30, 4, 12, NULL, NULL),
(31, 4, 14, NULL, NULL),
(32, 4, 19, NULL, NULL),
(33, 4, 20, NULL, NULL),
(34, 4, 24, NULL, NULL),
(35, 4, 35, NULL, NULL),
(36, 4, 38, NULL, NULL),
(37, 4, 40, NULL, NULL),
(38, 4, 44, NULL, NULL),
(39, 5, 21, NULL, NULL),
(40, 5, 29, NULL, NULL),
(41, 5, 30, NULL, NULL),
(42, 5, 31, NULL, NULL),
(43, 5, 39, NULL, NULL),
(44, 6, 25, NULL, NULL),
(45, 6, 26, NULL, NULL),
(46, 6, 36, NULL, NULL),
(47, 6, 41, NULL, NULL),
(48, 7, 32, NULL, NULL),
(49, 7, 33, NULL, NULL),
(50, 7, 34, NULL, NULL),
(51, 7, 47, NULL, NULL),
(52, 8, 33, NULL, NULL),
(53, 8, 34, NULL, NULL),
(54, 9, 37, NULL, NULL),
(55, 10, 45, NULL, NULL),
(56, 11, 46, NULL, NULL),
(57, 12, 47, NULL, NULL),
(58, 13, 47, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_pendukungs`
--

CREATE TABLE `dokumen_pendukungs` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `indikator_id` bigint UNSIGNED NOT NULL,
  `tahun` year NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dokumen_pendukungs`
--

INSERT INTO `dokumen_pendukungs` (`id`, `nama_file`, `attachment`, `user_id`, `indikator_id`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'Dokumen 1 - Tingkat Kematangan Kebijakan Internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah', 'storage/dokumen/indikator_1_1.pdf', 3, 1, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(2, 'Dokumen 2 - Tingkat Kematangan Kebijakan Internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah', 'storage/dokumen/indikator_1_2.pdf', 3, 1, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(3, 'Dokumen 1 - Tingkat Kematangan Kebijakan Internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah', 'storage/dokumen/indikator_2_1.pdf', 3, 2, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(4, 'Dokumen 2 - Tingkat Kematangan Kebijakan Internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah', 'storage/dokumen/indikator_2_2.pdf', 3, 2, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(5, 'Dokumen 3 - Tingkat Kematangan Kebijakan Internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah', 'storage/dokumen/indikator_2_3.pdf', 3, 2, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(6, 'Dokumen 1 - Tingkat Kematangan Kebijakan Internal Manajemen Data', 'storage/dokumen/indikator_3_1.pdf', 3, 3, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(7, 'Dokumen 2 - Tingkat Kematangan Kebijakan Internal Manajemen Data', 'storage/dokumen/indikator_3_2.pdf', 3, 3, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(8, 'Dokumen 3 - Tingkat Kematangan Kebijakan Internal Manajemen Data', 'storage/dokumen/indikator_3_3.pdf', 3, 3, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(9, 'Dokumen 1 - Tingkat Kematangan Kebijakan Internal Pembangunan Aplikasi SPBE', 'storage/dokumen/indikator_4_1.pdf', 3, 4, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(10, 'Dokumen 2 - Tingkat Kematangan Kebijakan Internal Pembangunan Aplikasi SPBE', 'storage/dokumen/indikator_4_2.pdf', 3, 4, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(11, 'Dokumen 3 - Tingkat Kematangan Kebijakan Internal Pembangunan Aplikasi SPBE', 'storage/dokumen/indikator_4_3.pdf', 3, 4, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(12, 'Dokumen 1 - Tingkat Kematangan Kebijakan Internal Layanan Pusat Data', 'storage/dokumen/indikator_5_1.pdf', 3, 5, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(13, 'Dokumen 1 - Tingkat Kematangan Kebijakan Internal Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah', 'storage/dokumen/indikator_6_1.pdf', 3, 6, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(14, 'Dokumen 1 - Tingkat Kematangan Kebijakan Internal Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah', 'storage/dokumen/indikator_7_1.pdf', 3, 7, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(15, 'Dokumen 2 - Tingkat Kematangan Kebijakan Internal Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah', 'storage/dokumen/indikator_7_2.pdf', 3, 7, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(16, 'Dokumen 1 - Tingkat Kematangan Kebijakan Internal Manajemen Keamanan Informasi', 'storage/dokumen/indikator_8_1.pdf', 3, 8, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(17, 'Dokumen 2 - Tingkat Kematangan Kebijakan Internal Manajemen Keamanan Informasi', 'storage/dokumen/indikator_8_2.pdf', 3, 8, '2025', '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(18, 'Dokumen 1 - Tingkat Kematangan Kebijakan Internal Audit TIK', 'storage/dokumen/indikator_9_1.pdf', 3, 9, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(19, 'Dokumen 1 - Tingkat Kematangan Kebijakan Internal Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah', 'storage/dokumen/indikator_10_1.pdf', 3, 10, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(20, 'Dokumen 2 - Tingkat Kematangan Kebijakan Internal Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah', 'storage/dokumen/indikator_10_2.pdf', 3, 10, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(21, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_11_1.pdf', 3, 11, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(22, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_11_2.pdf', 3, 11, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(23, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_12_1.pdf', 3, 12, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(24, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_12_2.pdf', 3, 12, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(25, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_13_1.pdf', 3, 13, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(26, 'Dokumen 1 - Unit Pengelola SPBE', 'storage/dokumen/indikator_14_1.pdf', 4, 14, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(27, 'Dokumen 2 - Unit Pengelola SPBE', 'storage/dokumen/indikator_14_2.pdf', 4, 14, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(28, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_15_1.pdf', 3, 15, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(29, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_16_1.pdf', 3, 16, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(30, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_17_1.pdf', 3, 17, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(31, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_17_2.pdf', 3, 17, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(32, 'Dokumen 3 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_17_3.pdf', 3, 17, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(33, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_18_1.pdf', 3, 18, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(34, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_18_2.pdf', 3, 18, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(35, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_19_1.pdf', 3, 19, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(36, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_19_2.pdf', 3, 19, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(37, 'Dokumen 3 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_19_3.pdf', 3, 19, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(38, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_20_1.pdf', 4, 20, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(39, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_21_1.pdf', 5, 21, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(40, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_21_2.pdf', 5, 21, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(41, 'Dokumen 3 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_21_3.pdf', 5, 21, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(42, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_22_1.pdf', 3, 22, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(43, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_23_1.pdf', 3, 23, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(44, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_23_2.pdf', 3, 23, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(45, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_24_1.pdf', 4, 24, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(46, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_25_1.pdf', 6, 25, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(47, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_25_2.pdf', 6, 25, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(48, 'Dokumen 3 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_25_3.pdf', 6, 25, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(49, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_26_1.pdf', 6, 26, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(50, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_26_2.pdf', 6, 26, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(51, 'Dokumen 3 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_26_3.pdf', 6, 26, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(52, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_27_1.pdf', 3, 27, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(53, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_28_1.pdf', 3, 28, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(54, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_28_2.pdf', 3, 28, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(55, 'Dokumen 3 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_28_3.pdf', 3, 28, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(56, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_29_1.pdf', 3, 29, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(57, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_29_2.pdf', 3, 29, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(58, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_30_1.pdf', 3, 30, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(59, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_30_2.pdf', 3, 30, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(60, 'Dokumen 3 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_30_3.pdf', 3, 30, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(61, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_31_1.pdf', 3, 31, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(62, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_31_2.pdf', 3, 31, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(63, 'Dokumen 3 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_31_3.pdf', 3, 31, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(64, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_32_1.pdf', 7, 32, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(65, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_33_1.pdf', 7, 33, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(66, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_33_2.pdf', 7, 33, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(67, 'Dokumen 3 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_33_3.pdf', 7, 33, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(68, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_34_1.pdf', 7, 34, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(69, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_34_2.pdf', 7, 34, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(70, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_35_1.pdf', 4, 35, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(71, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_36_1.pdf', 6, 36, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(72, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_37_1.pdf', 9, 37, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(73, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_37_2.pdf', 9, 37, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(74, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_38_1.pdf', 4, 38, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(75, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_38_2.pdf', 4, 38, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(76, 'Dokumen 3 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_38_3.pdf', 4, 38, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(77, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_39_1.pdf', 5, 39, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(78, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_39_2.pdf', 5, 39, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(79, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_40_1.pdf', 4, 40, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(80, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_40_2.pdf', 4, 40, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(81, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_41_1.pdf', 6, 41, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(82, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_41_2.pdf', 6, 41, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(83, 'Dokumen 3 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_41_3.pdf', 6, 41, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(84, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_42_1.pdf', 3, 42, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(85, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_43_1.pdf', 3, 43, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(86, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_44_1.pdf', 4, 44, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(87, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_44_2.pdf', 4, 44, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(88, 'Dokumen 3 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_44_3.pdf', 4, 44, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(89, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_45_1.pdf', 10, 45, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(90, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_45_2.pdf', 10, 45, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(91, 'Dokumen 3 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_45_3.pdf', 10, 45, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(92, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_46_1.pdf', 11, 46, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(93, 'Dokumen 1 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_47_1.pdf', 3, 47, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(94, 'Dokumen 2 - Kebijakan Internal SPBE', 'storage/dokumen/indikator_47_2.pdf', 3, 47, '2025', '2025-05-21 00:01:59', '2025-05-21 00:01:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `evaluasi_tahuns`
--

CREATE TABLE `evaluasi_tahuns` (
  `tahun` year NOT NULL,
  `indeks_akumulasi` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `evaluasi_tahuns`
--

INSERT INTO `evaluasi_tahuns` (`tahun`, `indeks_akumulasi`, `created_at`, `updated_at`) VALUES
('2023', 2.62, '2023-05-21 00:01:57', '2023-05-21 00:01:57'),
('2024', 2.62, '2024-05-21 00:01:57', '2024-05-21 00:01:57'),
('2025', 0, '2025-05-21 00:01:57', '2025-05-21 00:01:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `indikators`
--

CREATE TABLE `indikators` (
  `id` bigint UNSIGNED NOT NULL,
  `urutan_indikator` int UNSIGNED NOT NULL,
  `nama_indikator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `aspek_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `indikators`
--

INSERT INTO `indikators` (`id`, `urutan_indikator`, `nama_indikator`, `deskripsi`, `aspek_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tingkat Kematangan Kebijakan Internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah', 'Kebijakan internal terkait Arsitektur SPBE Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Pemerintah Daerah yaitu pada pasal 5 halaman 4 tentang Arsitektur SPBE yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf. Berdasarkan pasal tersebut panduan dalam pelaksanaan integrasi enam domain arsitektur SPBE yaitu terdiri atas Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE dan Keamanan SPBE untuk menghasilkan Layanan SPBE yang terpadu di Pemerintah Daerah. Pada Pasal 6 halaman 5 dijelaskan bahwa Arsitektur SPBE disusun untuk jangka waktu 5 (lima) tahun dan akan dilakukan reviu pada paruh waktu dan tahun terakhir pelaksanaan atau sewaktu-waktu sesuai dengan kebutuhan.', 1, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(2, 2, 'Tingkat Kematangan Kebijakan Internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah', 'Kebijakan internal terkait Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare Nomor 09 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada pasal 7 halaman 5 tentang Peta Rencana SPBE yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf. Berdasarkan pasal tersebut telah mengatur seluruh muatan Peta Rencana SPBE secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Audit TIK). Padal Pasal 8 menjelaskan bahwa Reviuw Peta Rencana SPBE dilakukan pada paruh waktu dan tahun terakhir pelaksanaan atau sewaktu-waktu sesuai dengan kebutuhan.', 1, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(3, 3, 'Tingkat Kematangan Kebijakan Internal Manajemen Data', 'Kebijakan internal terkait Manajemen Data Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada pasal 36 halaman 15 tentang Manajemen Data yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf. Berdasarkan pada pasal tersebut  bertujuan untuk menjamin terwujudnya Data yang akurat, mutakhir, terintegrasi dan dapat diakses sebagai dasar perencanaan, pelaksanaan, evaluasi dan pengendalian pembangunan nasional. (2) Manajemen Data dilakukan melalui proses pengelolaan arsitektur Data, Data induk, Data referensi, basis Data dan kualitas Data.', 1, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(4, 4, 'Tingkat Kematangan Kebijakan Internal Pembangunan Aplikasi SPBE', 'Kebijakan internal terkait Pembangunan Aplikasi SPBE Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada pasal 19 halaman 9 tentang Aplikasi SPBE ayat 3 yang disampaikan pada PERDA-NO.-9-THN-2023.pdf. Berdasarkan ayat tersebut Pembangunan dan pengembangan Aplikasi SPBE mengutamakan penggunaan kode sumber terbuka yang dilaksanakan berdasarkan siklus pengembangan sistem yang meliputi tahap: a.perencanaan; b.analisis; c.pembangunan dan/atau pengembangan; d.penerapan; dan e.pemeliharaan.', 1, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(5, 5, 'Tingkat Kematangan Kebijakan Internal Layanan Pusat Data', 'Kebijakan internal terkait Layanan Pusat Data Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian Ketujuh tentang Infrastruktur SPBE pasal 17 halaman 9 ayat 1 yang menjeleaskan tentang dalam menyelenggarakan Infrastruktur SPBE, Pemerintah Daerah melaksanakan fungsi layanan pusat data di Pemerintah Daerah.SPBE yang disampaikan pada PERDA-NO.-9-THN-2023.pdf.  Layanan Pusat Data yang dimaksud merupakan bagian dari Infrastruktur SPBE yang bertujuan meningkatkan efisiensi, keamanan dan kemudahan integrasi untuk memenuhi kebutuhan infrastruktur SPBE. Pada pasal 17 ayat 3 menjelaskan bahwa seluruh perangkat daerah harus memanfaatkan layanan pusat data di Pemerintah Daerah.', 1, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(6, 6, 'Tingkat Kematangan Kebijakan Internal Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah', 'Kebijakan terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah  tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian ketujuh tentang Infrastruktur SPBE pasal 15 halaman 8 ayat 1 yang menjelaskan tentang Perangkat Daerah harus menggunakan Jaringan Intra untuk menjaga keamanan pengiriman Data dan Informasi internal yang disampaikan pada file 6. PERDA-NO.-9-THN-2023.pdf.', 1, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(7, 7, 'Tingkat Kematangan Kebijakan Internal Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah', 'Kebijakan terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian Ketujuh tentang Infrastruktur SPBE pasal 16 halaman 8 ayat 2 yang menjelaskan tentang Penggunaan Sistem Penghubung Layanan pemerintah sebagaimana dimaksud pada ayat (1), Pemerintah Daerah harus memenuhi kriteria sebagai berikut: a.Terhubung dan akses Jaringan Intra Pemerintah Daerah dengan jaringan pemerintah; b.Memenuhi standar interoperabilitas antar-Layanan SPBE yang ditetapkan oleh menteri yang menyelenggarakan urusan di bidang komunikasi dan informatika; c.Mendapatkan pertimbangan kelaikan operasi dari kementerian yang menyelenggarakan urusan pemerintahan di bidang komunikasi dan informatika; dan d.Mendapatkan pertimbangan kelaikan keamanan dari lembaga yang menyelenggarakan tugas pemerintahan di bidang keamanan siber. Yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf.', 1, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(8, 8, 'Tingkat Kematangan Kebijakan Internal Manajemen Keamanan Informasi', 'Kebijakan terkait Manajemen Keamanan Informasi Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada Bagian Ketiga tentang Manajemen Keamanan Informasi pasal 35 halaman 15 yang menjelaskan bahwa Manajemen keamanan Informasi sebagaimana dimaksud dalam Pasal 33 huruf b bertujuan menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko keamanan Informasi. yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf.', 1, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(9, 9, 'Tingkat Kematangan Kebijakan Internal Audit TIK', 'Kebijakan terkait Audit TIK tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada BAB V pasal 42 halaman 17 tentang Audit Teknologi Informasi dan Komunikasi yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf. Audit Teknologi Informasi dan Komunikasi terdiri atas: a.audit Infrastruktur SPBE; b.audit Aplikasi SPBE; dan c.audit Keamanan SPBE', 1, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(10, 10, 'Tingkat Kematangan Kebijakan Internal Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah', 'Kebijakan terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah tercantum dalam Peraturan Daerah Kota Parepare No.9 Tahun 2023 Tentang Penyeleggaran Sistem Pemerintahan Berbasis elektronik di lingkungan Kota Parepare yaitu pada BAB VI pasal 44 halaman 18 tentang Penyelenggara SPBE yang disampaikan pada file PERDA-NO.-9-THN-2023.pdf. Berdasarkan pasal tersebut menjelaskan tentang fungsi penyelenggara SPBE untuk meningkatkan keterpaduan pelaksanaan Tata Kelola SPBE, Manajemen SPBE, dan Audit Teknologi Informasi dan Komunikasi, serta Pemantauan SPBE dan Evaluasi SPBE, dibentuk tim koordinasi sebagai penyelenggara SPBE di Pemerintah Daerah. Tim Koordinasi sebagaimana dimaksud terdiri atas : Ketua, Wakil Ketua, Sekretaris, Anggota yang terwakili oleh SKPD terkait.', 1, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(11, 11, 'Kebijakan Internal SPBE', 'tesmi dlu', 2, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(12, 12, 'Kebijakan Internal SPBE', 'tesmi dlu', 2, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(13, 13, 'Kebijakan Internal SPBE', 'tesmi dlu', 2, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(14, 14, 'Unit Pengelola SPBE', NULL, 2, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(15, 15, 'Kebijakan Internal SPBE', 'tesmi dlu', 3, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(16, 16, 'Kebijakan Internal SPBE', 'tesmi dlu', 3, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(17, 17, 'Kebijakan Internal SPBE', 'tesmi dlu', 3, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(18, 18, 'Kebijakan Internal SPBE', 'tesmi dlu', 3, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(19, 19, 'Kebijakan Internal SPBE', 'tesmi dlu', 4, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(20, 20, 'Kebijakan Internal SPBE', 'tesmi dlu', 4, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(21, 21, 'Kebijakan Internal SPBE', 'tesmi dlu', 5, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(22, 22, 'Kebijakan Internal SPBE', 'tesmi dlu', 5, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(23, 23, 'Kebijakan Internal SPBE', 'tesmi dlu', 5, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(24, 24, 'Kebijakan Internal SPBE', 'tesmi dlu', 5, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(25, 25, 'Kebijakan Internal SPBE', 'tesmi dlu', 5, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(26, 26, 'Kebijakan Internal SPBE', 'tesmi dlu', 5, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(27, 27, 'Kebijakan Internal SPBE', 'tesmi dlu', 5, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(28, 28, 'Kebijakan Internal SPBE', 'tesmi dlu', 5, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(29, 29, 'Kebijakan Internal SPBE', 'tesmi dlu', 6, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(30, 30, 'Kebijakan Internal SPBE', 'tesmi dlu', 6, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(31, 31, 'Kebijakan Internal SPBE', 'tesmi dlu', 6, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(32, 32, 'Kebijakan Internal SPBE', 'tesmi dlu', 7, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(33, 33, 'Kebijakan Internal SPBE', 'tesmi dlu', 7, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(34, 34, 'Kebijakan Internal SPBE', 'tesmi dlu', 7, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(35, 35, 'Kebijakan Internal SPBE', 'tesmi dlu', 7, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(36, 36, 'Kebijakan Internal SPBE', 'tesmi dlu', 7, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(37, 37, 'Kebijakan Internal SPBE', 'tesmi dlu', 7, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(38, 38, 'Kebijakan Internal SPBE', 'tesmi dlu', 7, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(39, 39, 'Kebijakan Internal SPBE', 'tesmi dlu', 7, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(40, 40, 'Kebijakan Internal SPBE', 'tesmi dlu', 7, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(41, 41, 'Kebijakan Internal SPBE', 'tesmi dlu', 7, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(42, 42, 'Kebijakan Internal SPBE', 'tesmi dlu', 8, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(43, 43, 'Kebijakan Internal SPBE', 'tesmi dlu', 8, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(44, 44, 'Kebijakan Internal SPBE', 'tesmi dlu', 8, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(45, 45, 'Kebijakan Internal SPBE', 'tesmi dlu', 8, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(46, 46, 'Kebijakan Internal SPBE', 'tesmi dlu', 8, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(47, 47, 'Kebijakan Internal SPBE', 'tesmi dlu', 8, '2025-05-21 00:01:53', '2025-05-21 00:01:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_aspeks`
--

CREATE TABLE `informasi_aspeks` (
  `id` bigint UNSIGNED NOT NULL,
  `indeks` double DEFAULT NULL,
  `tahun` year NOT NULL,
  `aspek_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informasi_aspeks`
--

INSERT INTO `informasi_aspeks` (`id`, `indeks`, `tahun`, `aspek_id`, `created_at`, `updated_at`) VALUES
(1, 2.91, '2023', 1, '2023-06-14 16:00:00', '2023-06-14 16:00:00'),
(2, 2.1, '2023', 2, '2023-06-14 16:00:00', '2023-06-14 16:00:00'),
(3, 2.37, '2023', 3, '2023-06-14 16:00:00', '2023-06-14 16:00:00'),
(4, 2.43, '2023', 4, '2023-06-14 16:00:00', '2023-06-14 16:00:00'),
(5, 1.68, '2023', 5, '2023-06-14 16:00:00', '2023-06-14 16:00:00'),
(6, 1.57, '2023', 6, '2023-06-14 16:00:00', '2023-06-14 16:00:00'),
(7, 3.45, '2023', 7, '2023-06-14 16:00:00', '2023-06-14 16:00:00'),
(8, 3.45, '2023', 8, '2023-06-14 16:00:00', '2023-06-14 16:00:00'),
(9, 3.36, '2024', 1, '2024-06-14 16:00:00', '2024-06-14 16:00:00'),
(10, 2.41, '2024', 2, '2024-06-14 16:00:00', '2024-06-14 16:00:00'),
(11, 2.75, '2024', 3, '2024-06-14 16:00:00', '2024-06-14 16:00:00'),
(12, 2.8, '2024', 4, '2024-06-14 16:00:00', '2024-06-14 16:00:00'),
(13, 1.91, '2024', 5, '2024-06-14 16:00:00', '2024-06-14 16:00:00'),
(14, 1.73, '2024', 6, '2024-06-14 16:00:00', '2024-06-14 16:00:00'),
(15, 3.77, '2024', 7, '2024-06-14 16:00:00', '2024-06-14 16:00:00'),
(16, 3.8, '2024', 8, '2024-06-14 16:00:00', '2024-06-14 16:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_indikators`
--

CREATE TABLE `informasi_indikators` (
  `id` bigint UNSIGNED NOT NULL,
  `indeks` double DEFAULT NULL,
  `tahun` year NOT NULL,
  `indikator_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `jumlah_dokumen` int NOT NULL DEFAULT '0',
  `is_updated` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informasi_indikators`
--

INSERT INTO `informasi_indikators` (`id`, `indeks`, `tahun`, `indikator_id`, `user_id`, `jumlah_dokumen`, `is_updated`, `created_at`, `updated_at`) VALUES
(1, 3, '2023', 1, 3, 2, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(2, 3, '2023', 2, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(3, 3, '2023', 3, 3, 4, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(4, 3, '2023', 4, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(5, 3, '2023', 5, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(6, 3, '2023', 6, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(7, 3, '2023', 7, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(8, 2, '2023', 8, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(9, 3, '2023', 9, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(10, 3, '2023', 10, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(11, 1, '2023', 11, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(12, 2, '2023', 12, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(13, 1, '2023', 11, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(14, 2, '2023', 12, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(15, 1, '2023', 13, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(16, 2, '2023', 14, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(17, 1, '2023', 15, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(18, 4, '2023', 16, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(19, 1, '2023', 17, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(20, 2, '2023', 18, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(21, 1, '2023', 19, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(22, 1, '2023', 19, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(23, 2, '2023', 20, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(24, 1, '2023', 21, 5, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(25, 1, '2023', 22, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(26, 1, '2023', 23, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(27, 1, '2023', 24, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(28, 1, '2023', 25, 6, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(29, 1, '2023', 26, 6, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(30, 1, '2023', 27, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(31, 1, '2023', 28, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(32, 1, '2023', 29, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(33, 1, '2023', 29, 5, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(34, 1, '2023', 30, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(35, 1, '2023', 30, 5, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(36, 1, '2023', 31, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(37, 1, '2023', 31, 5, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(38, 4, '2023', 32, 7, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(39, 4, '2023', 33, 7, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(40, 4, '2023', 33, 8, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(41, 4, '2023', 34, 7, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(42, 4, '2023', 34, 8, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(43, 4, '2023', 35, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(44, 4, '2023', 36, 6, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(45, 4, '2023', 37, 9, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(46, 3, '2023', 38, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(47, 3, '2023', 39, 5, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(48, 4, '2023', 40, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(49, 3, '2023', 41, 6, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(50, 4, '2023', 42, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(51, 3, '2023', 43, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(52, 2, '2023', 44, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(53, 4, '2023', 45, 10, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(54, 4, '2023', 46, 11, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(55, 4, '2023', 47, 12, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(56, 4, '2023', 47, 13, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(57, 4, '2023', 47, 7, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(58, 4, '2023', 47, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(59, 3, '2024', 1, 3, 2, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(60, 3, '2024', 2, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(61, 3, '2024', 3, 3, 4, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(62, 3, '2024', 4, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(63, 3, '2024', 5, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(64, 3, '2024', 6, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(65, 3, '2024', 7, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(66, 2, '2024', 8, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(67, 3, '2024', 9, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(68, 3, '2024', 10, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(69, 1, '2024', 11, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(70, 1, '2024', 12, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(71, 1, '2024', 11, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(72, 1, '2024', 12, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(73, 1, '2024', 13, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(74, 2, '2024', 14, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(75, 1, '2024', 15, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(76, 3, '2024', 16, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(77, 1, '2024', 17, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(78, 2, '2024', 18, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(79, 1, '2024', 19, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(80, 1, '2024', 19, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(81, 2, '2024', 20, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(82, 1, '2024', 21, 5, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(83, 1, '2024', 22, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(84, 1, '2024', 23, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(85, 1, '2024', 24, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(86, 1, '2024', 25, 6, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(87, 1, '2024', 26, 6, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(88, 1, '2024', 27, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(89, 1, '2024', 28, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(90, 1, '2024', 29, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(91, 1, '2024', 29, 5, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(92, 1, '2024', 30, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(93, 1, '2024', 30, 5, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(94, 1, '2024', 31, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(95, 1, '2024', 31, 5, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(96, 4, '2024', 32, 7, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(97, 4, '2024', 33, 7, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(98, 4, '2024', 33, 8, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(99, 4, '2024', 34, 7, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(100, 4, '2024', 34, 8, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(101, 4, '2024', 35, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(102, 5, '2024', 36, 6, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(103, 4, '2024', 37, 9, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(104, 3, '2024', 38, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(105, 4, '2024', 39, 5, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(106, 4, '2024', 40, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(107, 3, '2024', 41, 6, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(108, 4, '2024', 42, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(109, 4, '2024', 43, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(110, 2, '2024', 44, 4, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(111, 4, '2024', 45, 10, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(112, 3, '2024', 46, 11, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(113, 5, '2024', 47, 12, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(114, 5, '2024', 47, 13, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(115, 5, '2024', 47, 7, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(116, 5, '2024', 47, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(117, 2, '2025', 44, 4, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(118, 4, '2025', 45, 10, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(119, 3, '2025', 46, 11, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(120, 5, '2025', 47, 12, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(121, 5, '2025', 47, 13, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(122, 5, '2025', 47, 7, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(123, 5, '2025', 47, 3, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(124, 3, '2025', 6, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(125, 3, '2025', 7, 3, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(126, 2, '2025', 8, 3, 3, 1, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(127, 3, '2025', 9, 3, 3, 0, '2025-05-21 00:02:00', '2025-05-21 00:02:00'),
(128, 92, '2025', 1, 3, 2, 0, '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(129, 86, '2025', 2, 3, 3, 0, '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(130, 85, '2025', 3, 3, 3, 0, '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(131, 95, '2025', 4, 3, 3, 0, '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(132, 81, '2025', 5, 3, 1, 0, '2025-05-21 00:01:58', '2025-05-21 00:01:58'),
(133, 88, '2025', 10, 3, 2, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(134, 76, '2025', 11, 3, 2, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(135, 81, '2025', 12, 3, 2, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(136, 84, '2025', 13, 3, 1, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(137, 84, '2025', 14, 4, 2, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(138, 79, '2025', 15, 3, 1, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(139, 85, '2025', 16, 3, 1, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(140, 84, '2025', 17, 3, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(141, 76, '2025', 18, 3, 2, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(142, 79, '2025', 19, 3, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(143, 78, '2025', 20, 4, 1, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(144, 78, '2025', 21, 5, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(145, 70, '2025', 22, 3, 1, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(146, 76, '2025', 23, 3, 2, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(147, 74, '2025', 24, 4, 1, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(148, 74, '2025', 25, 6, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(149, 73, '2025', 26, 6, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(150, 73, '2025', 27, 3, 1, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(151, 78, '2025', 28, 3, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(152, 72, '2025', 29, 3, 2, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(153, 71, '2025', 30, 3, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(154, 70, '2025', 31, 3, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(155, 75, '2025', 32, 7, 1, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(156, 72, '2025', 33, 7, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(157, 68, '2025', 34, 7, 2, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(158, 67, '2025', 35, 4, 1, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(159, 66, '2025', 36, 6, 1, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(160, 75, '2025', 37, 9, 2, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(161, 73, '2025', 38, 4, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(162, 73, '2025', 39, 5, 2, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(163, 75, '2025', 40, 4, 2, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(164, 73, '2025', 41, 6, 3, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(165, 73, '2025', 42, 3, 1, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59'),
(166, 66, '2025', 43, 3, 1, 0, '2025-05-21 00:01:59', '2025-05-21 00:01:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
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
-- Struktur dari tabel `job_batches`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '0001_01_01_000003_create_aspeks_table', 1),
(5, '2025_05_03_014309_create_evaluasi_tahuns_table', 1),
(6, '2025_05_03_014407_create_indikators_table', 1),
(7, '2025_05_03_014408_create_dinas_indikators_table', 1),
(8, '2025_05_03_014417_create_informasi_indikators_table', 1),
(9, '2025_05_03_014504_create_dokumen_pendukungs_table', 1),
(10, '2025_05_03_014653_create_api_keys_table', 1),
(12, '2025_05_16_111003_create_informasi_aspeks_table', 1),
(13, '2025_05_18_125439_berita', 1),
(14, '2025_05_15_230438_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_aspek', 'web', '2025-05-21 00:02:43', '2025-05-21 00:02:43'),
(2, 'view_any_aspek', 'web', '2025-05-21 00:02:43', '2025-05-21 00:02:43'),
(3, 'create_aspek', 'web', '2025-05-21 00:02:43', '2025-05-21 00:02:43'),
(4, 'update_aspek', 'web', '2025-05-21 00:02:43', '2025-05-21 00:02:43'),
(5, 'restore_aspek', 'web', '2025-05-21 00:02:43', '2025-05-21 00:02:43'),
(6, 'restore_any_aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(7, 'replicate_aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(8, 'reorder_aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(9, 'delete_aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(10, 'delete_any_aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(11, 'force_delete_aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(12, 'force_delete_any_aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(13, 'view_berita', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(14, 'view_any_berita', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(15, 'create_berita', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(16, 'update_berita', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(17, 'restore_berita', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(18, 'restore_any_berita', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(19, 'replicate_berita', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(20, 'reorder_berita', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(21, 'delete_berita', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(22, 'delete_any_berita', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(23, 'force_delete_berita', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(24, 'force_delete_any_berita', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(25, 'view_dinas::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(26, 'view_any_dinas::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(27, 'create_dinas::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(28, 'update_dinas::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(29, 'restore_dinas::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(30, 'restore_any_dinas::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(31, 'replicate_dinas::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(32, 'reorder_dinas::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(33, 'delete_dinas::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(34, 'delete_any_dinas::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(35, 'force_delete_dinas::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(36, 'force_delete_any_dinas::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(37, 'view_dokumen::pendukung', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(38, 'view_any_dokumen::pendukung', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(39, 'create_dokumen::pendukung', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(40, 'update_dokumen::pendukung', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(41, 'restore_dokumen::pendukung', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(42, 'restore_any_dokumen::pendukung', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(43, 'replicate_dokumen::pendukung', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(44, 'reorder_dokumen::pendukung', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(45, 'delete_dokumen::pendukung', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(46, 'delete_any_dokumen::pendukung', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(47, 'force_delete_dokumen::pendukung', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(48, 'force_delete_any_dokumen::pendukung', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(49, 'view_evaluasi::tahun', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(50, 'view_any_evaluasi::tahun', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(51, 'create_evaluasi::tahun', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(52, 'update_evaluasi::tahun', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(53, 'restore_evaluasi::tahun', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(54, 'restore_any_evaluasi::tahun', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(55, 'replicate_evaluasi::tahun', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(56, 'reorder_evaluasi::tahun', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(57, 'delete_evaluasi::tahun', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(58, 'delete_any_evaluasi::tahun', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(59, 'force_delete_evaluasi::tahun', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(60, 'force_delete_any_evaluasi::tahun', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(61, 'view_indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(62, 'view_any_indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(63, 'create_indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(64, 'update_indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(65, 'restore_indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(66, 'restore_any_indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(67, 'replicate_indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(68, 'reorder_indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(69, 'delete_indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(70, 'delete_any_indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(71, 'force_delete_indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(72, 'force_delete_any_indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(73, 'view_informasi::aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(74, 'view_any_informasi::aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(75, 'create_informasi::aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(76, 'update_informasi::aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(77, 'restore_informasi::aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(78, 'restore_any_informasi::aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(79, 'replicate_informasi::aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(80, 'reorder_informasi::aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(81, 'delete_informasi::aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(82, 'delete_any_informasi::aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(83, 'force_delete_informasi::aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(84, 'force_delete_any_informasi::aspek', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(85, 'view_informasi::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(86, 'view_any_informasi::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(87, 'create_informasi::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(88, 'update_informasi::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(89, 'restore_informasi::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(90, 'restore_any_informasi::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(91, 'replicate_informasi::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(92, 'reorder_informasi::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(93, 'delete_informasi::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(94, 'delete_any_informasi::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(95, 'force_delete_informasi::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(96, 'force_delete_any_informasi::indikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(97, 'view_role', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(98, 'view_any_role', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(99, 'create_role', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(100, 'update_role', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(101, 'delete_role', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(102, 'delete_any_role', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(103, 'view_user', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(104, 'view_any_user', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(105, 'create_user', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(106, 'update_user', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(107, 'restore_user', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(108, 'restore_any_user', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(109, 'replicate_user', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(110, 'reorder_user', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(111, 'delete_user', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(112, 'delete_any_user', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(113, 'force_delete_user', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(114, 'force_delete_any_user', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(115, 'widget_StatusIndikatorAdminDinas', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(116, 'widget_NamaDinasWithTotalIndikator', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(117, 'widget_GrafikIndeksSPBE', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44'),
(118, 'widget_GrafikRataRataIndeksPerTahun', 'web', '2025-05-21 00:02:45', '2025-05-21 00:02:45'),
(119, 'widget_AspekIndeksChart', 'web', '2025-05-21 00:02:45', '2025-05-21 00:02:45'),
(120, 'widget_DistribusiIndikatorChart', 'web', '2025-05-21 00:02:45', '2025-05-21 00:02:45'),
(121, 'widget_AspekIndeksChart2', 'web', '2025-05-21 00:02:45', '2025-05-21 00:02:45'),
(122, 'widget_IndikatorIndeksChart', 'web', '2025-05-21 00:02:45', '2025-05-21 00:02:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'web', '2025-05-21 00:02:44', '2025-05-21 00:02:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
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
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('vgEsWLB9CMT6xMnDCTIBh9gHbFBY3YjazOMJnL4Z', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoibjZXaHJjWDBoQXFaNFFIRUcwMWdpZkFSVmkzM2x6V1dKaEVJTVZjaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9zaW1wYW5zZXBhcmVwYXJlLmdvLmlkL2FkbWluIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRVRG5wb3FSMEtocW12MjRJYnhJbExlOHFNamF4T3ZJaHhjaGpSRmFnOUpjZjBUQjIzM2xHRyI7czo0MDoiNDgwNDBlZjdmMjU0MmIzOWI5YmE5YTcyOTgzYjBkODhfZmlsdGVycyI7TjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1747816716);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dinas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('super_admin','operator','admin_dinas') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `nama_dinas`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pak Joko', NULL, 'admin@gmail.com', NULL, 'super_admin', '$2y$12$UDnpoqR0Khqmv24IbxIlLe8qMjaxOvIhxchjRFag9Jcf0TB233lGG', NULL, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(2, 'Pak Andri', NULL, 'andri@gmail.com', NULL, 'operator', '$2y$12$AXm4hOkfNNdov01saupucOcdyEWNgOfqhEEolCZ3SxgP3yeJ/v0im', NULL, '2025-05-21 00:01:53', '2025-05-21 00:01:53'),
(3, 'Admin Dinas Kominfo', 'Dinas Kominfo', 'diskominfo@example.com', NULL, 'admin_dinas', '$2y$12$f7TAyCN8tH/BqmRPujN/I.LYeMaM6vncScDChF3Fu9xGGPCIoZOHG', NULL, '2025-05-21 00:01:54', '2025-05-21 00:01:54'),
(4, 'Admin Dinas Setdako', 'Dinas Setdako', 'setdako@example.com', NULL, 'admin_dinas', '$2y$12$rei68/oylw/bx1Ua8JGLf.cvwa1hGUdlpT0v.J7PlpzGv1R7Hc1ji', NULL, '2025-05-21 00:01:54', '2025-05-21 00:01:54'),
(5, 'Admin Dinas Inspektorat', 'Dinas Inspektorat', 'inspektorat@example.com', NULL, 'admin_dinas', '$2y$12$51MzaSrcqQjKA2.UR9Gpk.vMIK4l4KMJgQDTAc.Jrd594tBTch.jm', NULL, '2025-05-21 00:01:54', '2025-05-21 00:01:54'),
(6, 'Admin Dinas BKPSDM', 'Dinas BKPSDM', 'bkpsdm@example.com', NULL, 'admin_dinas', '$2y$12$ih2mvwYQjUxny/v5dz4eseBGOML1FyFhVLTrhXFRj1uQ1N278qQGG', NULL, '2025-05-21 00:01:55', '2025-05-21 00:01:55'),
(7, 'Admin Dinas Bappeda', 'Dinas Bappeda', 'bappeda@example.com', NULL, 'admin_dinas', '$2y$12$gjyJ2o0J2N.GkHWI19LKQuzVM1X96ccSAjQ5B2g/Dto.B1IQuVMES', NULL, '2025-05-21 00:01:55', '2025-05-21 00:01:55'),
(8, 'Admin Dinas BKD', 'Dinas BKD', 'bkd@example.com', NULL, 'admin_dinas', '$2y$12$HAgqSirAcGdE0lwKaq4GXuT5zfQ4dx4SXkGcHL5VFExE5Wp0buVFS', NULL, '2025-05-21 00:01:56', '2025-05-21 00:01:56'),
(9, 'Admin Dinas Perpustakaan', 'Dinas Perpustakaan', 'perpustakaan@example.com', NULL, 'admin_dinas', '$2y$12$wHEvm7Nvn7nyM8FRauQ/3.QqnUvL7ImX6vSG4/o1VswAFGRLWiFQu', NULL, '2025-05-21 00:01:56', '2025-05-21 00:01:56'),
(10, 'Admin Dinas DPMPTSP', 'Dinas DPMPTSP', 'dpmptsp@example.com', NULL, 'admin_dinas', '$2y$12$6KhVUwkMfHZRjLn17bD.ZuGliuv14GrZcj16ec..HxNubce91Huo2', NULL, '2025-05-21 00:01:56', '2025-05-21 00:01:56'),
(11, 'Admin Dinas Disdukcapil', 'Dinas Dukcapil', 'disdukcapil@example.com', NULL, 'admin_dinas', '$2y$12$bv9xtLdV4sQsWZKKDD7fD.z067yHpVahxR6wYb6Vehs2PY5HAowBq', NULL, '2025-05-21 00:01:56', '2025-05-21 00:01:56'),
(12, 'Admin Dinas Kesehatan', 'Dinas Kesehatan', 'kesehatan@example.com', NULL, 'admin_dinas', '$2y$12$nTCX926IKItX4tgYMJ0ziODBuSGmwrtLnvHsZdr3Vfb98KRgro7Ma', NULL, '2025-05-21 00:01:57', '2025-05-21 00:01:57'),
(13, 'Admin Dinas Sosial', 'Dinas Sosial', 'sosial@example.com', NULL, 'admin_dinas', '$2y$12$jA6DyIDeNNGCP1EvOIzeP.n/mXh1kfOBdnAR6MxnRyt11UN6yXiCW', NULL, '2025-05-21 00:01:57', '2025-05-21 00:01:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `api_keys`
--
ALTER TABLE `api_keys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `api_keys_key_unique` (`key`);

--
-- Indeks untuk tabel `aspeks`
--
ALTER TABLE `aspeks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `beritas_slug_unique` (`slug`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `dinas_indikators`
--
ALTER TABLE `dinas_indikators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dinas_indikators_user_id_foreign` (`user_id`),
  ADD KEY `dinas_indikators_indikator_id_foreign` (`indikator_id`);

--
-- Indeks untuk tabel `dokumen_pendukungs`
--
ALTER TABLE `dokumen_pendukungs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokumen_pendukungs_user_id_foreign` (`user_id`),
  ADD KEY `dokumen_pendukungs_indikator_id_foreign` (`indikator_id`),
  ADD KEY `dokumen_pendukungs_tahun_foreign` (`tahun`);

--
-- Indeks untuk tabel `evaluasi_tahuns`
--
ALTER TABLE `evaluasi_tahuns`
  ADD PRIMARY KEY (`tahun`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `indikators`
--
ALTER TABLE `indikators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indikators_aspek_id_foreign` (`aspek_id`);

--
-- Indeks untuk tabel `informasi_aspeks`
--
ALTER TABLE `informasi_aspeks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `informasi_aspeks_tahun_foreign` (`tahun`),
  ADD KEY `informasi_aspeks_aspek_id_foreign` (`aspek_id`);

--
-- Indeks untuk tabel `informasi_indikators`
--
ALTER TABLE `informasi_indikators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `informasi_indikators_indikator_id_tahun_user_id_unique` (`indikator_id`,`tahun`,`user_id`),
  ADD KEY `informasi_indikators_tahun_foreign` (`tahun`),
  ADD KEY `informasi_indikators_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `api_keys`
--
ALTER TABLE `api_keys`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `aspeks`
--
ALTER TABLE `aspeks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `dinas_indikators`
--
ALTER TABLE `dinas_indikators`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `dokumen_pendukungs`
--
ALTER TABLE `dokumen_pendukungs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `indikators`
--
ALTER TABLE `indikators`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `informasi_aspeks`
--
ALTER TABLE `informasi_aspeks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `informasi_indikators`
--
ALTER TABLE `informasi_indikators`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dinas_indikators`
--
ALTER TABLE `dinas_indikators`
  ADD CONSTRAINT `dinas_indikators_indikator_id_foreign` FOREIGN KEY (`indikator_id`) REFERENCES `indikators` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dinas_indikators_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dokumen_pendukungs`
--
ALTER TABLE `dokumen_pendukungs`
  ADD CONSTRAINT `dokumen_pendukungs_indikator_id_foreign` FOREIGN KEY (`indikator_id`) REFERENCES `indikators` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dokumen_pendukungs_tahun_foreign` FOREIGN KEY (`tahun`) REFERENCES `evaluasi_tahuns` (`tahun`) ON DELETE CASCADE,
  ADD CONSTRAINT `dokumen_pendukungs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `indikators`
--
ALTER TABLE `indikators`
  ADD CONSTRAINT `indikators_aspek_id_foreign` FOREIGN KEY (`aspek_id`) REFERENCES `aspeks` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `informasi_aspeks`
--
ALTER TABLE `informasi_aspeks`
  ADD CONSTRAINT `informasi_aspeks_aspek_id_foreign` FOREIGN KEY (`aspek_id`) REFERENCES `aspeks` (`id`),
  ADD CONSTRAINT `informasi_aspeks_tahun_foreign` FOREIGN KEY (`tahun`) REFERENCES `evaluasi_tahuns` (`tahun`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `informasi_indikators`
--
ALTER TABLE `informasi_indikators`
  ADD CONSTRAINT `informasi_indikators_indikator_id_foreign` FOREIGN KEY (`indikator_id`) REFERENCES `indikators` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `informasi_indikators_tahun_foreign` FOREIGN KEY (`tahun`) REFERENCES `evaluasi_tahuns` (`tahun`) ON DELETE CASCADE,
  ADD CONSTRAINT `informasi_indikators_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
