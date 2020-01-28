-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2020 at 11:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(13, 'Actualité ', 'Actualité du monde actuelle.'),
(15, 'Développement', 'Some catégorie about the development topic.'),
(16, 'Politique', 'Topic about politics, all around the world.'),
(21, 'IoT', 'Internet of things.');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `categorie_id`, `body`, `image`, `title`, `published`, `created_at`) VALUES
(9, 24, NULL, 'This is a nice text', '1579429001 download.jpeg', 'Hello word ! ', 0, '2020-01-19 10:16:41'),
(10, 27, 16, 'La &laquo; n&eacute;gation &raquo; de l&rsquo;existence d&rsquo;Isra&euml;l comme Etat est une nouvelle forme d&rsquo;antis&eacute;mitisme. C&rsquo;est ce qu&rsquo;a d&eacute;clar&eacute; mercredi 22 janvier le pr&eacute;sident fran&ccedil;ais, Emmanuel Macron, au premier jour de sa visite &agrave; J&eacute;rusalem. ', '1579730670 9dbbdb2_uwrJpA_-27PL-gG23Qe7S5ox.webp', 'La négation de l’existence d’Israël comme Etat est un antisémitisme », affirme Macron à Jérusalem', 1, '2020-01-19 10:23:06'),
(11, 27, 16, 'Cet ancien sous-traitant de la CIA a expliqu&eacute; qu&rsquo;apr&egrave;s les attentats qui ont fait 2 976 morts il consid&eacute;rait comme un &laquo; devoir moral &raquo; de pr&eacute;venir toute nouvelle attaque.', '1579730556 9774cfb_b6f863de965046939baf2e5709901d6e-b25fd26b653e40fbba06df95343ea6be-0.webp', 'Un ex-psychologue justifie les tortures infligées par la CIA aux accusés du 11-Septembre', 1, '2020-01-19 10:23:52'),
(12, 27, 21, 'Dipl&ocirc;m&eacute;e de droit constitutionnel et de droit de l&rsquo;environnement, Ekaterini Sakellaropoulou a notamment soutenu des r&eacute;fugi&eacute;s, des minorit&eacute;s et les libert&eacute;s civiles.', '1579730619 8a08a76_ATH01_GREECE-POLITICS-PRESIDENT_0122_11.webp', 'En Grèce, une femme élue pour la première fois à la présidence de la République', 1, '2020-01-19 10:24:33'),
(13, 27, 13, 'La prison de R&eacute;au, en Seine-et-Marne, accueille une exposition organis&eacute;e par des d&eacute;tenus &laquo; commissaires &raquo; de bout en bout, du choix des &oelig;uvres &agrave; l&rsquo;&eacute;criture du livret de visite.\r\n', '1579730802 sorciere.jpg', 'Chefs-d’œuvre en prison', 1, '2020-01-19 11:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `user_name`, `email`, `password`, `created_at`) VALUES
(24, 1, 'Ludovic', 'ludovic@mail.com', '$2y$10$hUWfejJDBUO0eO4B85REoO4VV.wWysFTloT/uWxLvc3OAScKfBcSe', '2020-01-19 09:57:16'),
(25, 1, 'Sebastien', 'seb@mail.com', '$2y$10$mSxbl4bzglwbaJ0gGFRbXOJ9trPW1O/5LR1gFR9XPb5biWWajtH4K', '2020-01-19 11:36:20'),
(27, 1, 'root', 'root@mail.com', '$2y$10$oa2sehhNtRwc8XjJYggtU.cE5FO3bAZ9Bgj/0.owLMmgcv4FW2eGO', '2020-01-19 12:34:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
