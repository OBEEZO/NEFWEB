-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2025 at 05:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnefweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `method` varchar(255) NOT NULL,
  `proof` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `amount`, `method`, `proof`, `created_at`, `updated_at`) VALUES
(1, 100.00, 'bank', 'receipts/htpnYcwnDHXwgQmWF1dr5ngPnurKQ42Wrynqv3Xm.pdf', '2025-02-20 17:17:08', '2025-02-20 17:17:08'),
(2, 1000.00, 'bank', 'receipts/lfAzdKsC6Qp1qjxXoIYeRv2DXFdT4qzHM7482iZ9.png', '2025-02-20 17:37:04', '2025-02-20 17:37:04'),
(3, 2000.00, 'bank', 'receipts/E5vVchoqgecZWQs6azX8RFO49AJz1bQ8T20UWJ1V.pdf', '2025-02-25 07:57:44', '2025-02-25 07:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(5, '2025-03-22', 'Feeding & Clothing Drive - Nairobi County', '<p>Join us in providing <strong>meals, clean clothing, and essential supplies</strong> to homeless individuals and families in Nairobi. Be part of this mission by <strong>donating</strong>, <strong>volunteering</strong>, or <strong>spreading the word</strong> to bring hope to those in need.</p>', 'events/WypDhIEaWggygYVCWI6pC7dnz8be5JQBn6qw7hgF.jpg', '2025-02-24 17:55:57', '2025-02-24 17:55:57'),
(6, '2025-03-18', 'Orphanage Visit & Fun Day - Eldoret, St Luke Orphanage', '<p>Join us in <strong>spreading love and joy</strong> at a local orphanage. This event will feature <strong>games, mentorship, and gifts</strong> for the children. Your <strong>time, donations, and care</strong> can brighten their day and give them hope for the future.</p>', 'events/Bv4aTq0XZaqtxAk7Ohg6FCWhb6SlVpEj9TtNovgG.jpg', '2025-02-24 18:00:06', '2025-02-24 18:00:06'),
(7, '2025-03-08', 'Back to School Charity Drive - Nakuru County', '<p>Education is a right, not a privilege! This initiative provides <strong>school supplies, uniforms, and tuition support</strong> for underprivileged children. <strong>Donate books, sponsor a child, or volunteer</strong> to make a difference in a student’s life.</p>', 'events/mCPGaAaAdHm0pWYiMt79a8t5Pq1KRTifYVfTXSFe.jpg', '2025-02-24 18:01:51', '2025-02-24 18:01:51');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(24, 'gallery/CSXHwnFSrhDEj4K6F8vE5GY7Rpa3hPcLAemU0PFB.jpg', 1, '2025-02-21 09:08:14', '2025-02-21 09:08:14'),
(25, 'gallery/lJXab0UrQsMuKPfCl3wsfdqdhlOUtkocbzisMnFD.jpg', 1, '2025-02-21 09:08:14', '2025-02-21 09:08:14'),
(26, 'gallery/iummG82nCLMWgfVVxourosFCNvrp4ZVOXvccUNRo.jpg', 1, '2025-02-21 09:08:15', '2025-02-21 09:08:15'),
(27, 'gallery/ibnFNS1Mn38E7qsHgj02tAcdjqe8doLnrWxIpUBg.jpg', 1, '2025-02-21 09:08:15', '2025-02-21 09:08:15'),
(28, 'gallery/56Q6PuaeQPBLdFGvBtYcdf52vxPWvk5nvz7HMGLG.jpg', 1, '2025-02-21 09:08:15', '2025-02-21 09:08:15'),
(29, 'gallery/x6TjU5xZPBOc9RbJpb4dNy2nhDuLkuNhVKnAOnWa.jpg', 1, '2025-02-21 09:08:15', '2025-02-21 09:08:15'),
(30, 'gallery/S8G9xetZU4HtDtyjR3BdJXWGS5PXJizb3UfMI9s8.jpg', 1, '2025-02-21 09:08:15', '2025-02-21 09:08:15'),
(31, 'gallery/cyx2kWqSoT7AaxIpdo5pIkz89AhR866nHsz6Rpfl.jpg', 1, '2025-02-21 09:08:15', '2025-02-21 09:08:15'),
(32, 'gallery/oiem97fK61tW9pka7rMVC4GD9D6W7VI6lqvygBrz.jpg', 1, '2025-02-21 09:08:15', '2025-02-21 09:08:15'),
(33, 'gallery/lgNlnOUgM9iRNFChmW2ntsAzgr9Lhvi8SfnIu3Ft.jpg', 1, '2025-02-21 09:08:15', '2025-02-21 09:08:15'),
(34, 'gallery/X3J3ED7zCifE3wqXbEa71hW7Ym12KqGIlkx0F3wm.jpg', 1, '2025-02-21 09:08:53', '2025-02-21 09:08:53'),
(35, 'gallery/VMjuhpPbOtgj1VMNSAiietNYP9KYPD6gDbmvEyLa.jpg', 1, '2025-02-21 09:08:53', '2025-02-21 09:08:53'),
(36, 'gallery/tk0Q5gCk2AhBVax4jDJbt8BNMvrsCHORBPKI6LPl.jpg', 1, '2025-02-21 09:08:54', '2025-02-21 09:08:54'),
(37, 'gallery/KsSDYjrfJDe7p3HTE0ThU5VbRANBCHRrNCujfYQJ.jpg', 1, '2025-02-21 09:08:54', '2025-02-21 09:08:54'),
(38, 'gallery/6zqNBzbkp9luDJ1Q8bEaiXGy63OsRzdqhmvYEQqv.jpg', 1, '2025-02-21 09:08:54', '2025-02-21 09:08:54'),
(39, 'gallery/vuGKOBI71LO4qQNeU9G73Dg4BrG45slaOChiJ8b0.jpg', 1, '2025-02-21 09:14:01', '2025-02-21 09:14:01'),
(40, 'gallery/tJwlP7ukXmV2KazGR1RmFKy1v2HD9DJ25Rrne8ap.jpg', 1, '2025-02-21 09:14:01', '2025-02-21 09:14:01'),
(41, 'gallery/Auke6xgH1fS6WMqJWQCs0Yeq1NU7wm5kB7JKaqAV.jpg', 1, '2025-02-21 09:14:01', '2025-02-21 09:14:01'),
(42, 'gallery/IGHtcaImGVDpKwFp4YxVdaEbT1g8jxHDi2rygb35.jpg', 1, '2025-02-21 09:14:01', '2025-02-21 09:14:01'),
(43, 'gallery/c21JGxCtee3QjRD9thsURdeaG0J3Y4kPO1R6cpLI.jpg', 1, '2025-02-21 09:14:01', '2025-02-21 09:14:01'),
(44, 'gallery/2jMyzNOlxpjUo5qsgCFiukzZaRmUC3qM0T24Tcbo.jpg', 1, '2025-02-21 09:14:01', '2025-02-21 09:14:01'),
(45, 'gallery/El7Ijcdzkj9LL2TZDPbeGmu7ltNlDDUQlqsmZDG0.jpg', 1, '2025-02-21 09:14:01', '2025-02-21 09:14:01'),
(46, 'gallery/Nk4JGYScD0cEGp684r4x71Jt36YGN5020g6pZsk4.jpg', 1, '2025-02-21 09:14:02', '2025-02-21 09:14:02'),
(47, 'gallery/1UH1NFe9jyQfoyBZ7cP2nWIpPCFhcWDLp35yZTSC.jpg', 1, '2025-02-21 09:14:02', '2025-02-21 09:14:02'),
(48, 'gallery/sjbgqJX7S3EMYhCvaolNE2i4cztewiS24jZOHiZr.jpg', 1, '2025-02-21 09:14:02', '2025-02-21 09:14:02'),
(49, 'gallery/jDLe1bTJ1qEsQpUYC0SJLkUmlFPkigMvt5fB5R7F.jpg', 1, '2025-02-21 09:14:02', '2025-02-21 09:14:02'),
(50, 'gallery/H76MIDitUa74Po2rW5a5EQVNwxfebX4Exsb2sXYD.jpg', 1, '2025-02-21 09:14:02', '2025-02-21 09:14:02'),
(51, 'gallery/YrifONpCk7kwxYviWUinUMMIxsOMztXTk02Xvtm5.jpg', 1, '2025-02-21 09:14:39', '2025-02-21 09:14:39'),
(52, 'gallery/JGXFf1ENCDsY6HqDDicMS0el4zZgKprWkENjkJq4.jpg', 1, '2025-02-21 09:14:39', '2025-02-21 09:14:39'),
(53, 'gallery/3LECL3qaCQ1qqV2TD1g7XLF7DrTUpgWX3HCHAI3m.jpg', 1, '2025-02-21 09:14:39', '2025-02-21 09:14:39'),
(54, 'gallery/oRd7rkOtl3P8uj9WtgnhTchL1stgkLtNcm0VphZa.jpg', 1, '2025-02-21 09:14:39', '2025-02-21 09:14:39'),
(55, 'gallery/97VqdRU8PYhNEeT5WOZdzN5g17x5tLBkwtxbIMtn.jpg', 1, '2025-02-21 09:14:40', '2025-02-21 09:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_20_143315_create_events_table', 2),
(5, '2025_02_20_153028_create_pastevents_table', 3),
(6, '2025_02_20_200314_create_donations_table', 4),
(7, '2025_02_22_075932_create_stories_table', 5),
(8, '2025_02_22_101225_create_stories_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pastevents`
--

CREATE TABLE `pastevents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pastevents`
--

INSERT INTO `pastevents` (`id`, `date`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, '2020-05-20', 'NEF LAUNCH', '<p>This is where it all began@St.Paul\'s Primary School in Kabuku Limuru area meeting with the school\'s administration as we planned for the launch of NEF.<br><a href=\"https://web.facebook.com/hashtag/nudiempire?__eep__=6&amp;__tn__=*NK*F\"><strong>#NudiEmpire</strong></a><br><a href=\"https://web.facebook.com/hashtag/thefutureishere?__eep__=6&amp;__tn__=*NK*F\"><strong>#TheFutureIsHere</strong></a><br><a href=\"https://web.facebook.com/hashtag/godaboveall?__eep__=6&amp;__tn__=*NK*F\"><strong>#GodAboveAll</strong></a><br><a href=\"https://web.facebook.com/hashtag/teamgaa?__eep__=6&amp;__tn__=*NK*F\"><strong>#TeamGAA</strong></a></p>', 'pastevents/LXx48F5BNDtNLNCP3LFIUGAgSvF0Vzr62soCCJ7e.jpg', '2025-02-20 08:04:31', '2025-02-20 08:04:31'),
(3, '2020-11-05', 'KISUMU PROJECT', '<p><a href=\"https://web.facebook.com/hashtag/nef?__eep__=6&amp;__tn__=*NK*F\"><strong>#Nef</strong></a> in Kisumu<br>The project was a success<img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf4/1/16/2728.png\" alt=\"✨\"><br>Thank you for your support and continued prayers<img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tfc/1/16/1f44d.png\" alt=\"👍\">Mungu azidi kuwabariki.<br><a href=\"https://web.facebook.com/hashtag/godaboveall?__eep__=6&amp;__tn__=*NK*F\"><strong>#GodAboveAll</strong></a><br><a href=\"https://web.facebook.com/hashtag/gaagaagaa?__eep__=6&amp;__tn__=*NK*F\"><strong>#GAAGAAGAA</strong></a></p>', 'pastevents/dec71dU03H1zNqDuJcvejK3Lzojn7EweOpYKEML4.jpg', '2025-02-20 08:45:58', '2025-02-20 08:45:58'),
(4, '2023-03-14', 'MIA MBILI PROJECT in Mathare Nairobi', '<p>The <a href=\"https://web.facebook.com/hashtag/mia?__eep__=6&amp;__tn__=*NK*F\"><strong>#MIA</strong></a> MBILI PROJECT in Mathare Nairobi at Mathare Community Outreach School started very early in the morning and the Team was ready to hit the ground running.</p><p>—&nbsp;at <a href=\"https://web.facebook.com/Mathare-Slums-392505057481332/?__tn__=kC*F\"><strong>Mathare Slums</strong></a>.</p>', 'pastevents/ya3h6QGyHymNq9lDGf7GeLICAWWnyTjyhrYkaHUC.jpg', '2025-02-20 08:59:29', '2025-02-20 08:59:29'),
(5, '2023-09-16', 'EMBU PROJECT at St. Angela Children\'s Home', '<p>The Embu project at St. Angela Children\'s Home was a success thanks to everyone who made this possible&nbsp;</p><p>Great things happen when we come together</p><p><a href=\"https://web.facebook.com/hashtag/charity?__eep__=6&amp;__tn__=*NK*F\"><strong>#Charity</strong></a><br><a href=\"https://web.facebook.com/hashtag/servantsofgodandhumanity?__eep__=6&amp;__tn__=*NK*F\"><strong>#ServantsOfGodAndHumanity</strong></a><br><a href=\"https://web.facebook.com/hashtag/nef?__eep__=6&amp;__tn__=*NK*F\"><strong>#NEF</strong></a><br><a href=\"https://web.facebook.com/hashtag/thefutureisnow?__eep__=6&amp;__tn__=*NK*F\"><strong>#TheFutureIsNow</strong></a></p>', 'pastevents/DSoTZ4pCO5CFBoakXEkr5o4fQ7TS6OHLoQnKItM6.jpg', '2025-02-21 08:58:12', '2025-02-21 08:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Y1z8hWUBkLToMHVZuHigz0wPF5XVfdK7tP7rM7d2', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMHhPYldxeVR6SVhVVmJjSGdjUDZrdUJoRFlNV3ZSc3BzNkxadXhybiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1741085380),
('YVyv9tCWUvDoucc40OURvIAxwZL06E2qd8Cdko0j', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzczdXRaRWJqRWVZZ3I1WnJFaDZ2akc0QWhvVTg0d3ZPZk81UVpvNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1741622263);

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `name`, `story`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Amina, 19 – Nairobi, Kenya', 'Amina grew up in a struggling household where access to education seemed like an impossible dream. Through the Nudi Empire Foundation\'s scholarship program, she received financial support to continue her high school education. Today, she is enrolled in college, studying to become a social worker to give back to her community.\r\n\"This foundation changed my life. Now, I can chase my dreams and help others like me.\"', 'stories/C00JKEaFZc9mGxGhKe9mhR1QdFa4ht6Pof69hIpv.png', '2025-02-24 17:37:18', '2025-02-24 17:37:18'),
(3, 'James, 27 – Eldoret, Kenya', 'After months of searching for a job, James was losing hope. That was until he came across the Nudi Empire Foundation’s career mentorship program. Through their job listing platform, he landed a visa-sponsored opportunity abroad. Now working in the IT sector, he is financially stable and supports his younger siblings.\r\n\"This foundation didn’t just give me a job—it gave me a future.\"', 'stories/JriB1KXAajG2r50z6WxwFlgmPs728ScDdgCwaDrw.png', '2025-02-24 17:40:12', '2025-02-24 17:40:12'),
(4, 'Mama Grace, 29 – Kisumu, Kenya', 'A single mother of four, Mama Grace ran a small tailoring business but struggled due to a lack of funds and exposure. Through the Nudi Empire Foundation’s women empowerment initiative, she received a small grant and business training. Now, her shop is thriving, and she even employs two young women in her community.\r\n\"They gave me the tools to succeed, and now my children have a brighter future.\"', 'stories/k92r6vRn4OiPDsd247xrIDJd7CLhWQhVjyCi7I2z.png', '2025-02-24 17:41:40', '2025-02-24 17:41:40'),
(5, 'Janet, 24 – Kitui, Kenya', 'Janet always dreamed of becoming a teacher, but financial struggles forced her to drop out of college. Through the Nudi Empire Foundation’s women empowerment and education fund, she received a scholarship to complete her studies. Today, she is a primary school teacher, inspiring young girls to pursue education despite challenges.\r\n\"I was on the verge of giving up, but this foundation gave me hope. Now, I’m helping shape the future of other young girls.\"', 'stories/BIunuONWCjJ2uPWx42r7CcIBiOSm3QMnono4fD0y.png', '2025-02-24 17:44:04', '2025-02-24 17:44:04'),
(6, 'Kevin, 22 – Kiambu, Kenya', 'Kevin always had a passion for technology but lacked access to proper training. Through Nudi Empire Foundation’s free coding workshops, he learned valuable programming skills. Today, he is a freelance web developer, earning an income and mentoring other young tech enthusiasts.\r\n\"I never thought I could make a career out of my passion, but Nudi Empire Foundation made it possible.\"', 'stories/pksEizmMSpU6IIWOJnUtk6IrXr5tuqHNmHJMP5p9.png', '2025-02-24 17:46:24', '2025-02-24 17:46:24');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `rank` int(11) NOT NULL DEFAULT 0,
  `role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `rank`, `role`) VALUES
(1, 'Nudi Empire', 'nudiempirefoundation@gmail.com', NULL, '$2y$12$5vzcv2qFSvDC0FJhQxJCOe5QyltseAIqjsTa.nUQAyW2pUa8235G6', NULL, '2025-02-02 07:47:22', '2025-03-04 07:26:07', 0, 'admin');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_user_id_foreign` (`user_id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pastevents`
--
ALTER TABLE `pastevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
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
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pastevents`
--
ALTER TABLE `pastevents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
