-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2020 at 10:56 PM
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
(14, 27, 13, 'Les jours &agrave; venir pourraient &ecirc;tre d&eacute;cisifs &ndash; tant sur le plan sanitaire que politique &ndash; dans la lutte contre le coronavirus 2019-nCoV. D&rsquo;abord parce que, si l&rsquo;on en croit les chiffres officiels, le nombre de nouveaux cas commence &agrave; diminuer tant dans le Hubei que dans le reste de la Chine.\r\n\r\nDans le Hubei, la d&eacute;crue aurait commenc&eacute; le 4 f&eacute;vrier. Il y eut ce jour-l&agrave; 3 100 nouveaux cas, un chiffre qui &ndash; &agrave; part le 7 f&eacute;vrier &ndash; n&rsquo;a cess&eacute; de diminuer pour atteindre 2 147 cas le samedi 8. Dans le reste de la Chine, la d&eacute;crue aurait commenc&eacute; la veille avec 921 nouveaux cas le 3 et 506 le 8 f&eacute;vrier.\r\n\r\nIl y a de multiples raisons, &agrave; la fois politiques et pratiques, de ne pas se fier aux donn&eacute;es officielles, mais on ne peut pas non plus exclure qu&rsquo;elles refl&egrave;tent une tendance en cours. Ce serait &eacute;videmment une tr&egrave;s bonne nouvelle. Le probl&egrave;me est qu&rsquo;apr&egrave;s avoir tout fait pour retarder la reprise du travail en prolongeant les f&ecirc;tes du Nouvel an lunaire, celles-ci devraient malgr&eacute; tout prendre fin ce 9 f&eacute;vrier.\r\nUn volcan en passe de se r&eacute;veiller\r\n\r\n\r\nTant les employeurs que les salari&eacute;s ont besoin, pour des raisons &eacute;conomiques &eacute;videntes, de reprendre le travail. Du coup, les Chinois cantonn&eacute;s chez eux devraient progressivement recommencer &agrave; sortir et &agrave; voyager. Shenzhen, Canton, Shangha&iuml; et P&eacute;kin : ces quatre villes de plus de 20 millions d&rsquo;habitants chacune devraient finir par sortir de leur l&eacute;thargie actuelle. Rien qu&rsquo;&agrave; P&eacute;kin, 8 millions d&rsquo;habitants &ndash; un sur trois &ndash; partis en province pour les f&ecirc;tes seraient sur le point de rentrer.', '1581259800 FWZIV66W7SPRASFDPI7CIKFWZU.jpg', 'Coronavirus : la semaine où tout peut basculer', 1, '2020-02-09 14:42:15'),
(15, 27, 13, 'Trente-cinq d&eacute;partements de la moiti&eacute; nord de la France sont plac&eacute;s, dimanche 9 f&eacute;vrier, en alerte orange en raison de la temp&ecirc;te Ciara qui va g&eacute;n&eacute;rer de &laquo; fortes rafales &raquo; de vent, a annonc&eacute; M&eacute;t&eacute;o-France. Les vents les plus violents sont pr&eacute;vus entre dimanche matin et lundi matin, a pr&eacute;venu l&rsquo;agence m&eacute;t&eacute;orologique.\r\n\r\nLes d&eacute;partements concern&eacute;s sont l&rsquo;Aisne, les Ardennes, l&rsquo;Aube, le Calvados, les C&ocirc;tes-d&rsquo;Armor, l&rsquo;Eure, l&rsquo;Eure-et-Loir, le Finist&egrave;re, la Loire-Atlantique, le Loiret, la Manche, la Marne, la Haute-Marne, la Meurthe-et-Moselle, la Meuse, le Morbihan, la Moselle, le Nord, l&rsquo;Oise, l&rsquo;Orne, le Pas-de-Calais, le Bas-Rhin, le Haut-Rhin, Paris et petite couronne (75-92-93-94), la Seine-Maritime, la Seine-et-Marne, les Yvelines, la Somme, les Vosges, l&rsquo;Yonne, l&rsquo;Essonne et le Val-d&rsquo;Oise.\r\nLa temp&ecirc;te qui circule au nord-ouest des &icirc;les britanniques comporte aussi des risques de vagues-submersion sur le littoral. Elle va souffler de dimanche &agrave; 15 heures jusqu&rsquo;&agrave; lundi &agrave; 11 heures, selon les r&eacute;visionnistes.\r\n\r\nDes rafales &agrave; 160 km/h possibles\r\nEn fin de nuit dimanche, le temps &eacute;tait assez calme sur les d&eacute;partements concern&eacute;s mais on relevait d&eacute;j&agrave; plus de 80 km/h en rafales du Finist&egrave;re au littoral de la Manche, et jusque 100 &agrave; 104 km/h localement (Ouessant, &icirc;le de Batz, Barfleur et cap Gris-Nez).\r\n\r\nD&egrave;s la matin&eacute;e de dimanche ou le d&eacute;but d&rsquo;apr&egrave;s-midi suivant les d&eacute;partements, des rafales de 60 &agrave; 90 km/h sont attendues, avec des pointes locales avoisinant les 100 km/h. A partir de l&rsquo;apr&egrave;s-midi, elles devraient s&rsquo;intensifier et se g&eacute;n&eacute;raliser sur les r&eacute;gions du nord-ouest du pays.\r\nCes rafales atteindront 100 &agrave; 120 km/h dans l&rsquo;int&eacute;rieur, ponctuellement davantage ; 110 &agrave; 140 km/h sont attendus sur les r&eacute;gions littorales et pr&egrave;s des fronti&egrave;res nord. Ces violentes rafales de vent devraient ensuite s&rsquo;&eacute;tendre &agrave; toute une partie nord de la France, Grand-Est compris, avant la fin de nuit prochaine.\r\nSur le relief des Vosges, des rafales &agrave; 160 km/h sont possibles. \r\n\r\nPh&eacute;nom&egrave;ne aggravant : dans un contexte de sols d&eacute;tremp&eacute;s, notamment apr&egrave;s aux r&eacute;centes crues, des chutes d&rsquo;arbres sont &agrave; craindre. Le vent soufflera fort aussi pr&egrave;s des d&eacute;partements plac&eacute;s en vigilance orange, et quelques rafales &agrave; 100 km/h sont probables. Ult&eacute;rieurement, la temp&ecirc;te devrait toucher les massifs de l&rsquo;est de la France ainsi que la Corse.\r\nUne grande partie de l&rsquo;Europe du nord-ouest concern&eacute;e\r\nEn Belgique, l&rsquo;Institut royal m&eacute;t&eacute;orologique a &eacute;mis pour dimanche une alerte orange en raison des vents, avec un risque de d&eacute;g&acirc;ts &eacute;lev&eacute; sur tout le pays, et des rafales pouvant atteindre 130 km/h, voire plus. \r\n\r\nA Bruxelles, les for&ecirc;ts et parcs seront ferm&eacute;s dimanche et lundi. Des mesures similaires sont pr&eacute;vues dans d&rsquo;autres villes, comme Anvers. La Ligue de football belge a pour sa part annonc&eacute; le report des matchs du championnat pr&eacute;vus dimanche.\r\nUne soixantaine de vols au d&eacute;part ou &agrave; destination de l&rsquo;a&eacute;roport de Bruxelles ont &eacute;t&eacute; annul&eacute;s. D&rsquo;autres annulations pourraient encore &ecirc;tre d&eacute;cid&eacute;es dans la journ&eacute;e en raison de la temp&ecirc;te, qui pourrait aussi occasionner des retards.\r\n\r\nEn Grande-Bretagne, les fortes rafales et pluies ont provoqu&eacute; des annulations et des retards dans le transport a&eacute;rien, ferroviaire et maritime. Outre des perturbations dans les transports, le service m&eacute;t&eacute;orologique britannique dit s&rsquo;attendre &agrave; des d&eacute;g&acirc;ts sur les habitations, avec une possibilit&eacute; de coupures de courant et d&rsquo;inondations. La temp&ecirc;te concerne plusieurs autres pays, dont l&rsquo;Irlande, l&rsquo;Allemagne et la Suisse.', '1581259913 6cde733_kY3JujpwspSK9h5QmiJO-DK1.png', 'Tempête Ciara : 35 départements du nord de la France placés en vigilance orange', 1, '2020-02-09 14:51:53'),
(16, 27, 13, '&laquo; Baby Yoda &raquo; dans la s&eacute;rie Disney+ &laquo; The Mandalorian &raquo;, dont une deuxi&egrave;me saison est d&eacute;j&agrave; annonc&eacute;e pour octobre. DISNEY+ / VIA REUTERS\r\nThe Irishman, de Martin Scorsese ? Jojo Rabbit, de Taika Waititi ? 1917, de Sam Mendes ? Qui remportera l&rsquo;Oscar du meilleur film ? Autant que le palmar&egrave;s de la 92e remise de prix de l&rsquo;Acad&eacute;mie des arts et sciences du cin&eacute;ma, dimanche 9 f&eacute;vrier, &agrave; Hollywood (Los Angeles), l&rsquo;industrie du cin&eacute;ma ne va pas manquer d&rsquo;analyser une autre performance : celle de Netflix. Le g&eacute;ant de la t&eacute;l&eacute;vision &agrave; la demande, et producteur de The Irishman, est attaqu&eacute; par un nombre croissant de concurrents, dont Disney, qui a lanc&eacute; avec succ&egrave;s sa propre plate-forme de streaming, le 12 novembre 2019. En trois mois, Disney+ a d&eacute;j&agrave; s&eacute;duit 28 millions d&rsquo;abonn&eacute;s aux Etats-Unis, alors que Netflix, tout en gardant une sup&eacute;riorit&eacute; &eacute;crasante (167 millions de clients dans le monde, dont 61 millions aux Etats-Unis), voit sa croissance plafonner.\r\nNetflix essaie de conqu&eacute;rir Hollywood depuis des ann&eacute;es. L&rsquo;industrie, elle, lui reproche de mettre les salles de cin&eacute;ma sur la paille en contournant les circuits classiques de distribution. En 2019, la plate-forme de Reed Hastings avait obtenu quinze nominations aux Oscars (deux fois plus qu&rsquo;en 2018) et remport&eacute; trois statuettes pour Roma, dont celle de meilleur r&eacute;alisateur, d&eacute;cern&eacute;e &agrave; Alfonso Cuaron. Cette ann&eacute;e, Netflix peut se flatter d&rsquo;avoir re&ccedil;u 24 nominations, devan&ccedil;ant tous les studios hollywoodiens, et m&ecirc;me Disney (23 nominations). Elle ambitionne de remporter enfin l&rsquo;Oscar du meilleur film, pour la saga italo-irlandaise de Martin Scorsese (10 nominations).\r\nArticle r&eacute;serv&eacute; &agrave; nos abonn&eacute;s Lire aussi  Roch-Olivier Maistre, pr&eacute;sident du CSA : &laquo; Netflix, Amazon et Disney veulent s&rsquo;inscrire dans l&rsquo;&eacute;cosyst&egrave;me fran&ccedil;ais &raquo;\r\nLa plate-forme entend b&eacute;n&eacute;ficier du renouvellement de l&rsquo;Acad&eacute;mie, rajeunie, plus diverse et moins hostile au streaming. Elle esp&egrave;re que les nouveaux membres contrebalanceront l&rsquo;influence des puristes, qui consid&egrave;rent la diffusion des films &laquo; d&rsquo;abord sur l&rsquo;Internet &raquo; comme un danger existentiel (et qui lui conseillent de frapper plut&ocirc;t &agrave; la porte des Emmy Awards, les prix des professionnels de la t&eacute;l&eacute;vision). Pour pr&eacute;tendre aux Oscars, la r&egrave;gle veut qu&rsquo;un film soit pr&eacute;sent&eacute; au moins pendant sept jours, et au moins trois fois par jour, dans une salle commerciale de Los Angeles', '1581261091 b17b8c9_Ml2gqDAUegoaQ6T470FmYcoq.jpg', 'Le duel entre Netflix et Disney s’invite à la cérémonie des Oscars, à Hollywood', 1, '2020-02-09 15:11:31'),
(17, 27, 16, 'Neuf projets concouraient dans la cat&eacute;gorie du Prix SACD (Soci&eacute;t&eacute; des auteurs et compositeurs dramatiques) et Fiction Radio d&rsquo;humour. Le jury, compos&eacute; de Claire Richard, autrice, Nicole Sigal, romanci&egrave;re et autrice radio, et Zo&eacute; Tabourdiot, r&eacute;alisatrice, a r&eacute;compens&eacute; ex aequo La Brebis galeuse, de Guillaume Abgrall, adaptation d&rsquo;une pi&egrave;ce italienne d&rsquo;Ascanio Celestini, et Work Wild Web, de Mariannick Bellot et Anne-Claude Romarie, produit dans le cadre d&rsquo;un prix d&rsquo;&eacute;criture de fictions courtes organis&eacute; par Radio Nova avec la SACD.\r\nLe jury du Prix Longueur d&rsquo;ondes de la cr&eacute;ation documentaire, cat&eacute;gorie &laquo; petites ondes &raquo;, &eacute;tait compos&eacute; d&lsquo;Antoine Chao, reporter et producteur pour France Inter, Christophe Rault, r&eacute;alisateur radiophonique et cofondateur d&rsquo;Arte radio ; et de C&eacute;lia H&eacute;ron, journaliste et responsable des podcasts au quotidien suisse Le Temps.\r\n&laquo; La question du consentement &raquo;\r\nLes jur&eacute;s ont choisi de r&eacute;compenser une &oelig;uvre &laquo; qui d&eacute;range &raquo;. Tout de suite les grands mots, de Norah Benarrosh-Orsoni, r&eacute;unit &laquo; deux perspectives, celle d&rsquo;un homme et d&rsquo;une femme, sur une m&ecirc;me rencontre et &agrave; travers cet &eacute;change, touche &agrave; une question br&ucirc;lante, universelle, celle du consentement &raquo;, r&eacute;sume C&eacute;lia H&eacute;ron. Norah Benarrosh-Orsoni a &eacute;t&eacute; form&eacute;e et accompagn&eacute;e par le collectif Transmission, fond&eacute; en janvier 2018, qui se d&eacute;finit comme une &laquo; &eacute;cole libre de la narration audio &raquo;. Le collectif doit ouvrir des locaux, dans les prochaines semaines, &agrave; Aubervilliers (Seine-Saint-Denis).\r\nLe jury a attribu&eacute; une mention sp&eacute;ciale &agrave; Am&eacute;lie Abraham, pour J&rsquo;demande pas la lune, juste une maman, o&ugrave; un enfant plac&eacute; et une famille d&rsquo;accueil t&eacute;moignent de l&rsquo;exp&eacute;rience de faire famille dans des circonstances douloureuses.\r\nLe jury du Prix Longueur d&rsquo;ondes de la cr&eacute;ation documentaire, cat&eacute;gorie &laquo; grandes ondes &raquo;, compos&eacute; d&rsquo;Aur&eacute;lie Sfez, autrice de documentaire (Radio Nova), Benjamin Abitan, auteur et r&eacute;alisateur de fictions, Yves Robic, r&eacute;alisateur radio, Carole Lefran&ccedil;ois, journaliste pour T&eacute;l&eacute;rama et de la chercheuse Juliette Volcler, a distingu&eacute; parmi 35 documentaires celui de Pascale Pascariello, Un micro au tribunal, premier podcast de Mediapart, r&eacute;alis&eacute; par C&eacute;cile Laffon et Manon Houssin. &laquo; Deux ans d&rsquo;enqu&ecirc;te dans des tribunaux auxquels il n&rsquo;est normalement pas possible d&rsquo;avoir acc&egrave;s, pour livrer une parole rare, d&eacute;licate, puissante, dans les coulisses d&rsquo;une justice du quotidien, exp&eacute;ditive, qui pulv&eacute;rise les plus faibles, avec la force de l&rsquo;immersion et une r&eacute;alisation g&eacute;niale &raquo;, s&rsquo;est enthousiasm&eacute;e Aur&eacute;lie Sfez.\r\nLe jury a &eacute;galement remis une mention sp&eacute;ciale &agrave; David Collin et au Labo de la RTS pour Les ombres de Fukushima. Cette trilogie documentaire arpente les villes japonaises d&rsquo;Hiroshima et de Fukushima, en compagnie de l&rsquo;&eacute;crivain Akira Mizubayashi pour &laquo; interroger la catastrophe et ses implications &raquo;. Le jury a salu&eacute; &laquo; le travail de recherche &raquo; et la &laquo; prise de risque &raquo; de ce projet.\r\nMouna El Mokhtari', '1581261185 easternwaves.svg', 'Au festival Longueur d’ondes, la création sonore récompensée', 1, '2020-02-09 15:13:05');

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
(27, 1, 'root', 'root@mail.com', '$2y$10$oa2sehhNtRwc8XjJYggtU.cE5FO3bAZ9Bgj/0.owLMmgcv4FW2eGO', '2020-01-19 12:34:35'),
(28, 0, 'Larry', 'azerty@mail.com', '$2y$10$oABOWZK1USM85pLe9oAUL.y6zDTLO0oQROFy2GSR29UgZxZ4ZEPvi', '2020-02-05 10:51:54');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
