-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 05:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_for_video`
--

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2020_07_04_123142_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `video_id`, `excerpt`, `body`, `image`, `section`, `type`, `status`, `created_at`, `updated_at`) VALUES
(15, 'Post one', 'NiGZKrdSZkM', 'Tumi Ki Dekhecho | তুমি কি দেখেছো কভু | HD | Altaf & A.T.M. Shamsuzzaman | Etotuku Asha | Anupam', NULL, NULL, 2, 0, 1, '2020-07-05 08:34:39', '2020-07-05 08:34:39'),
(16, 'Post two', 'Mh4f9AYRCZY', 'Children interrupt BBC News interview - BBC News', NULL, NULL, 1, 0, 1, '2020-07-05 08:38:05', '2020-07-05 08:38:14'),
(17, 'Post three', 'Pc33UTvPLJc', '100 years of Hardinge Bridge হার্ডিঞ্জ ব্রিজ', NULL, NULL, 1, 0, 1, '2020-07-05 08:40:40', '2020-07-05 08:40:40'),
(18, 'Post four', '2Ut0F4a9dQk', 'This crystal can split light particles', NULL, NULL, 1, 0, 1, '2020-07-05 08:45:15', '2020-07-05 08:45:15'),
(19, 'Post five', 'bVquLXTq4bQ', 'Long hair vs. Van de Graaff generator', NULL, NULL, 1, 0, 1, '2020-07-05 08:46:58', '2020-07-05 08:46:58'),
(20, 'Post six', NULL, 'Short description for post six', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl lacus, porta nec arcu et, pulvinar pharetra libero. Pellentesque eget nunc ipsum. Phasellus rutrum consequat elit vel pretium. Nunc a est vel eros feugiat vulputate. Aenean vitae turpis porttitor, scelerisque nibh non, pellentesque felis. Quisque eu tempus leo, nec tincidunt magna. Duis ac imperdiet sem. Sed eget diam ac justo suscipit bibendum ut nec enim. Aliquam eu lacus mattis, fringilla orci et, laoreet mauris. Vestibulum eget posuere lacus. Maecenas semper mi et tortor ultrices, ut luctus lectus ornare. Integer aliquam semper ligula tincidunt hendrerit. Duis lacinia enim sit amet urna ullamcorper, non pharetra nisi sodales. Maecenas augue orci, gravida vel mi eu, luctus sollicitudin tellus.</p>\r\n\r\n<p>Nunc egestas massa at justo eleifend, at varius velit varius. Fusce eu volutpat tellus. Duis quis porta mauris. Aenean id est quis est tincidunt ultrices. Quisque vel accumsan diam, eget molestie nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Duis porttitor nisi quis lacus viverra, et consequat turpis luctus. Donec mattis dolor nisi, vitae consectetur justo congue a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Etiam nec lacus consequat, tincidunt lectus non, aliquet metus. In ornare et dui vel pharetra. In tincidunt tortor lacus, non semper turpis dapibus in. Nunc lacinia velit in nulla venenatis porta. Nunc blandit vel magna ac pharetra. Vestibulum molestie mauris et gravida venenatis. Sed massa nibh, convallis id lacus et, hendrerit sollicitudin arcu. Aenean aliquet urna molestie lectus pharetra, ut congue nunc volutpat. Pellentesque venenatis bibendum viverra.</p>\r\n\r\n<p>Mauris posuere sed lectus vitae tempor. Mauris ligula nisl, euismod eu eros sed, vulputate malesuada eros. In sagittis ex at gravida iaculis. Maecenas semper urna eu eros aliquet, et viverra ligula vehicula. Curabitur consequat justo lacus, sit amet porta sem interdum at. Morbi nec risus eleifend nulla aliquam pretium a ac sem. Aliquam non libero consequat, aliquet tellus vel, volutpat ex.</p>\r\n\r\n<p>Aliquam quis efficitur turpis, eget consequat risus. Ut imperdiet erat orci, non pharetra leo molestie non. Nunc tincidunt hendrerit ex. Curabitur sagittis euismod lectus, eu dictum ante consectetur at. In ex urna, cursus ac hendrerit at, placerat rhoncus risus. Fusce ac venenatis quam. Donec vel mi elit. Fusce volutpat, diam ac placerat laoreet, nisi ante vehicula risus, id convallis diam est sit amet tellus. Sed facilisis, nibh in tempor egestas, ipsum orci bibendum ante, id venenatis sem urna nec ligula. Mauris convallis, diam eu mollis viverra, dui ex ultricies tellus, sit amet lacinia felis neque et mi. Maecenas lacinia scelerisque mauris non congue. Donec sodales enim vel interdum blandit. Donec ut ante bibendum, semper libero accumsan, commodo quam. Donec quis faucibus felis. Pellentesque ipsum justo, semper nec arcu vitae, bibendum egestas neque. Donec vel scelerisque nunc.</p>', '6-best-vintage-clothes-shops-new-york.jpg', 2, 1, 1, '2020-07-05 08:49:18', '2020-07-05 08:49:18'),
(22, 'Post eight', NULL, 'Short description for post eight', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl lacus, porta nec arcu et, pulvinar pharetra libero. Pellentesque eget nunc ipsum. Phasellus rutrum consequat elit vel pretium. Nunc a est vel eros feugiat vulputate. Aenean vitae turpis porttitor, scelerisque nibh non, pellentesque felis. Quisque eu tempus leo, nec tincidunt magna. Duis ac imperdiet sem. Sed eget diam ac justo suscipit bibendum ut nec enim. Aliquam eu lacus mattis, fringilla orci et, laoreet mauris. Vestibulum eget posuere lacus. Maecenas semper mi et tortor ultrices, ut luctus lectus ornare. Integer aliquam semper ligula tincidunt hendrerit. Duis lacinia enim sit amet urna ullamcorper, non pharetra nisi sodales. Maecenas augue orci, gravida vel mi eu, luctus sollicitudin tellus.</p>\r\n\r\n<p>Nunc egestas massa at justo eleifend, at varius velit varius. Fusce eu volutpat tellus. Duis quis porta mauris. Aenean id est quis est tincidunt ultrices. Quisque vel accumsan diam, eget molestie nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Duis porttitor nisi quis lacus viverra, et consequat turpis luctus. Donec mattis dolor nisi, vitae consectetur justo congue a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Etiam nec lacus consequat, tincidunt lectus non, aliquet metus. In ornare et dui vel pharetra. In tincidunt tortor lacus, non semper turpis dapibus in. Nunc lacinia velit in nulla venenatis porta. Nunc blandit vel magna ac pharetra. Vestibulum molestie mauris et gravida venenatis. Sed massa nibh, convallis id lacus et, hendrerit sollicitudin arcu. Aenean aliquet urna molestie lectus pharetra, ut congue nunc volutpat. Pellentesque venenatis bibendum viverra.</p>\r\n\r\n<p>Mauris posuere sed lectus vitae tempor. Mauris ligula nisl, euismod eu eros sed, vulputate malesuada eros. In sagittis ex at gravida iaculis. Maecenas semper urna eu eros aliquet, et viverra ligula vehicula. Curabitur consequat justo lacus, sit amet porta sem interdum at. Morbi nec risus eleifend nulla aliquam pretium a ac sem. Aliquam non libero consequat, aliquet tellus vel, volutpat ex.</p>\r\n\r\n<p>Aliquam quis efficitur turpis, eget consequat risus. Ut imperdiet erat orci, non pharetra leo molestie non. Nunc tincidunt hendrerit ex. Curabitur sagittis euismod lectus, eu dictum ante consectetur at. In ex urna, cursus ac hendrerit at, placerat rhoncus risus. Fusce ac venenatis quam. Donec vel mi elit. Fusce volutpat, diam ac placerat laoreet, nisi ante vehicula risus, id convallis diam est sit amet tellus. Sed facilisis, nibh in tempor egestas, ipsum orci bibendum ante, id venenatis sem urna nec ligula. Mauris convallis, diam eu mollis viverra, dui ex ultricies tellus, sit amet lacinia felis neque et mi. Maecenas lacinia scelerisque mauris non congue. Donec sodales enim vel interdum blandit. Donec ut ante bibendum, semper libero accumsan, commodo quam. Donec quis faucibus felis. Pellentesque ipsum justo, semper nec arcu vitae, bibendum egestas neque. Donec vel scelerisque nunc.</p>', NULL, 2, 1, 1, '2020-07-05 08:53:58', '2020-07-05 08:53:58'),
(23, 'Post seven', 'oWzdgBNfhQU', 'Short description for post seven', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl lacus, porta nec arcu et, pulvinar pharetra libero. Pellentesque eget nunc ipsum. Phasellus rutrum consequat elit vel pretium. Nunc a est vel eros feugiat vulputate. Aenean vitae turpis porttitor, scelerisque nibh non, pellentesque felis. Quisque eu tempus leo, nec tincidunt magna. Duis ac imperdiet sem. Sed eget diam ac justo suscipit bibendum ut nec enim. Aliquam eu lacus mattis, fringilla orci et, laoreet mauris. Vestibulum eget posuere lacus. Maecenas semper mi et tortor ultrices, ut luctus lectus ornare. Integer aliquam semper ligula tincidunt hendrerit. Duis lacinia enim sit amet urna ullamcorper, non pharetra nisi sodales. Maecenas augue orci, gravida vel mi eu, luctus sollicitudin tellus.</p>\r\n\r\n<p>Nunc egestas massa at justo eleifend, at varius velit varius. Fusce eu volutpat tellus. Duis quis porta mauris. Aenean id est quis est tincidunt ultrices. Quisque vel accumsan diam, eget molestie nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Duis porttitor nisi quis lacus viverra, et consequat turpis luctus. Donec mattis dolor nisi, vitae consectetur justo congue a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Etiam nec lacus consequat, tincidunt lectus non, aliquet metus. In ornare et dui vel pharetra. In tincidunt tortor lacus, non semper turpis dapibus in. Nunc lacinia velit in nulla venenatis porta. Nunc blandit vel magna ac pharetra. Vestibulum molestie mauris et gravida venenatis. Sed massa nibh, convallis id lacus et, hendrerit sollicitudin arcu. Aenean aliquet urna molestie lectus pharetra, ut congue nunc volutpat. Pellentesque venenatis bibendum viverra.</p>\r\n\r\n<p>Mauris posuere sed lectus vitae tempor. Mauris ligula nisl, euismod eu eros sed, vulputate malesuada eros. In sagittis ex at gravida iaculis. Maecenas semper urna eu eros aliquet, et viverra ligula vehicula. Curabitur consequat justo lacus, sit amet porta sem interdum at. Morbi nec risus eleifend nulla aliquam pretium a ac sem. Aliquam non libero consequat, aliquet tellus vel, volutpat ex.</p>\r\n\r\n<p>Aliquam quis efficitur turpis, eget consequat risus. Ut imperdiet erat orci, non pharetra leo molestie non. Nunc tincidunt hendrerit ex. Curabitur sagittis euismod lectus, eu dictum ante consectetur at. In ex urna, cursus ac hendrerit at, placerat rhoncus risus. Fusce ac venenatis quam. Donec vel mi elit. Fusce volutpat, diam ac placerat laoreet, nisi ante vehicula risus, id convallis diam est sit amet tellus. Sed facilisis, nibh in tempor egestas, ipsum orci bibendum ante, id venenatis sem urna nec ligula. Mauris convallis, diam eu mollis viverra, dui ex ultricies tellus, sit amet lacinia felis neque et mi. Maecenas lacinia scelerisque mauris non congue. Donec sodales enim vel interdum blandit. Donec ut ante bibendum, semper libero accumsan, commodo quam. Donec quis faucibus felis. Pellentesque ipsum justo, semper nec arcu vitae, bibendum egestas neque. Donec vel scelerisque nunc.</p>', '915238_orig.png', 2, 0, 1, '2020-07-05 08:58:00', '2020-07-05 08:58:00'),
(24, 'Post nine', NULL, 'Short description for post nine', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl lacus, porta nec arcu et, pulvinar pharetra libero. Pellentesque eget nunc ipsum. Phasellus rutrum consequat elit vel pretium. Nunc a est vel eros feugiat vulputate. Aenean vitae turpis porttitor, scelerisque nibh non, pellentesque felis. Quisque eu tempus leo, nec tincidunt magna. Duis ac imperdiet sem. Sed eget diam ac justo suscipit bibendum ut nec enim. Aliquam eu lacus mattis, fringilla orci et, laoreet mauris. Vestibulum eget posuere lacus. Maecenas semper mi et tortor ultrices, ut luctus lectus ornare. Integer aliquam semper ligula tincidunt hendrerit. Duis lacinia enim sit amet urna ullamcorper, non pharetra nisi sodales. Maecenas augue orci, gravida vel mi eu, luctus sollicitudin tellus.</p>\r\n\r\n<p>Nunc egestas massa at justo eleifend, at varius velit varius. Fusce eu volutpat tellus. Duis quis porta mauris. Aenean id est quis est tincidunt ultrices. Quisque vel accumsan diam, eget molestie nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Duis porttitor nisi quis lacus viverra, et consequat turpis luctus. Donec mattis dolor nisi, vitae consectetur justo congue a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Etiam nec lacus consequat, tincidunt lectus non, aliquet metus. In ornare et dui vel pharetra. In tincidunt tortor lacus, non semper turpis dapibus in. Nunc lacinia velit in nulla venenatis porta. Nunc blandit vel magna ac pharetra. Vestibulum molestie mauris et gravida venenatis. Sed massa nibh, convallis id lacus et, hendrerit sollicitudin arcu. Aenean aliquet urna molestie lectus pharetra, ut congue nunc volutpat. Pellentesque venenatis bibendum viverra.</p>\r\n\r\n<p>Mauris posuere sed lectus vitae tempor. Mauris ligula nisl, euismod eu eros sed, vulputate malesuada eros. In sagittis ex at gravida iaculis. Maecenas semper urna eu eros aliquet, et viverra ligula vehicula. Curabitur consequat justo lacus, sit amet porta sem interdum at. Morbi nec risus eleifend nulla aliquam pretium a ac sem. Aliquam non libero consequat, aliquet tellus vel, volutpat ex.</p>\r\n\r\n<p>Aliquam quis efficitur turpis, eget consequat risus. Ut imperdiet erat orci, non pharetra leo molestie non. Nunc tincidunt hendrerit ex. Curabitur sagittis euismod lectus, eu dictum ante consectetur at. In ex urna, cursus ac hendrerit at, placerat rhoncus risus. Fusce ac venenatis quam. Donec vel mi elit. Fusce volutpat, diam ac placerat laoreet, nisi ante vehicula risus, id convallis diam est sit amet tellus. Sed facilisis, nibh in tempor egestas, ipsum orci bibendum ante, id venenatis sem urna nec ligula. Mauris convallis, diam eu mollis viverra, dui ex ultricies tellus, sit amet lacinia felis neque et mi. Maecenas lacinia scelerisque mauris non congue. Donec sodales enim vel interdum blandit. Donec ut ante bibendum, semper libero accumsan, commodo quam. Donec quis faucibus felis. Pellentesque ipsum justo, semper nec arcu vitae, bibendum egestas neque. Donec vel scelerisque nunc.</p>', 'Health-Insurance-Quotes-1920x1080.jpg', 1, 1, 1, '2020-07-05 08:59:42', '2020-07-05 08:59:42'),
(25, 'Post ten', NULL, 'Short description for post ten', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl lacus, porta nec arcu et, pulvinar pharetra libero. Pellentesque eget nunc ipsum. Phasellus rutrum consequat elit vel pretium. Nunc a est vel eros feugiat vulputate. Aenean vitae turpis porttitor, scelerisque nibh non, pellentesque felis. Quisque eu tempus leo, nec tincidunt magna. Duis ac imperdiet sem. Sed eget diam ac justo suscipit bibendum ut nec enim. Aliquam eu lacus mattis, fringilla orci et, laoreet mauris. Vestibulum eget posuere lacus. Maecenas semper mi et tortor ultrices, ut luctus lectus ornare. Integer aliquam semper ligula tincidunt hendrerit. Duis lacinia enim sit amet urna ullamcorper, non pharetra nisi sodales. Maecenas augue orci, gravida vel mi eu, luctus sollicitudin tellus.</p>\r\n\r\n<p>Nunc egestas massa at justo eleifend, at varius velit varius. Fusce eu volutpat tellus. Duis quis porta mauris. Aenean id est quis est tincidunt ultrices. Quisque vel accumsan diam, eget molestie nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Duis porttitor nisi quis lacus viverra, et consequat turpis luctus. Donec mattis dolor nisi, vitae consectetur justo congue a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Etiam nec lacus consequat, tincidunt lectus non, aliquet metus. In ornare et dui vel pharetra. In tincidunt tortor lacus, non semper turpis dapibus in. Nunc lacinia velit in nulla venenatis porta. Nunc blandit vel magna ac pharetra. Vestibulum molestie mauris et gravida venenatis. Sed massa nibh, convallis id lacus et, hendrerit sollicitudin arcu. Aenean aliquet urna molestie lectus pharetra, ut congue nunc volutpat. Pellentesque venenatis bibendum viverra.</p>\r\n\r\n<p>Mauris posuere sed lectus vitae tempor. Mauris ligula nisl, euismod eu eros sed, vulputate malesuada eros. In sagittis ex at gravida iaculis. Maecenas semper urna eu eros aliquet, et viverra ligula vehicula. Curabitur consequat justo lacus, sit amet porta sem interdum at. Morbi nec risus eleifend nulla aliquam pretium a ac sem. Aliquam non libero consequat, aliquet tellus vel, volutpat ex.</p>\r\n\r\n<p>Aliquam quis efficitur turpis, eget consequat risus. Ut imperdiet erat orci, non pharetra leo molestie non. Nunc tincidunt hendrerit ex. Curabitur sagittis euismod lectus, eu dictum ante consectetur at. In ex urna, cursus ac hendrerit at, placerat rhoncus risus. Fusce ac venenatis quam. Donec vel mi elit. Fusce volutpat, diam ac placerat laoreet, nisi ante vehicula risus, id convallis diam est sit amet tellus. Sed facilisis, nibh in tempor egestas, ipsum orci bibendum ante, id venenatis sem urna nec ligula. Mauris convallis, diam eu mollis viverra, dui ex ultricies tellus, sit amet lacinia felis neque et mi. Maecenas lacinia scelerisque mauris non congue. Donec sodales enim vel interdum blandit. Donec ut ante bibendum, semper libero accumsan, commodo quam. Donec quis faucibus felis. Pellentesque ipsum justo, semper nec arcu vitae, bibendum egestas neque. Donec vel scelerisque nunc.</p>', 'Books_HD_(8314929977).jpg', 1, 1, 1, '2020-07-05 09:00:42', '2020-07-05 09:00:42'),
(26, 'Post eleven', 's6r1tUhl1cQ', 'Electro Velvet - Still In Love With You (United Kingdom) 2015 Eurovision Song Contest', NULL, NULL, 1, 0, 1, '2020-07-05 09:08:13', '2020-07-05 09:08:13'),
(27, 'Post twelve', 'lb0dBVWozRo', 'Mary Hopkin ~ Knock Knock Who\'s There 1970', NULL, NULL, 2, 0, 1, '2020-07-05 09:09:49', '2020-07-05 09:13:41'),
(28, 'Post thirteen', 'zhPAB9R8Y6A', 'EMANI BARASHA CHHILO SEDIN Feroza Begum Katha Pranab Roy Sur Kamal Dasgupta', NULL, NULL, 1, 0, 1, '2020-07-05 09:14:28', '2020-07-05 09:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Shihab Uddin Ahmed', 'example@example.com', NULL, '$2y$10$H8p7Z4TlBANTdcGmU/yzh.TwmAoUNodpoTwYobOMz661CQuQZm9yG', NULL, '2020-07-04 06:28:43', '2020-07-04 06:28:43');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
