-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour digital-esi-db-test
CREATE DATABASE IF NOT EXISTS `digital-esi-db-test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `digital-esi-db-test`;

-- Listage de la structure de la table digital-esi-db-test. blog_articles
CREATE TABLE IF NOT EXISTS `blog_articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titre_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume_article` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenu_article` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_publication` datetime NOT NULL,
  `img_article` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.blog_articles : ~1 rows (environ)
/*!40000 ALTER TABLE `blog_articles` DISABLE KEYS */;
INSERT INTO `blog_articles` (`id`, `titre_article`, `resume_article`, `contenu_article`, `date_publication`, `img_article`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Lancement de la plateforme officielle de communication de l\'ESI !', 'L\'Ecole formatrice d\'ingénieurs et de techniciens supérieurs dans les domaines de l\'industrie vous dévoile sa plateforme digitale.', 'L\'Ecole formatrice d\'ingénieurs et de techniciens supérieurs dans les domaines de l\'industrie vous dévoile sa plateforme digitale.', '2022-08-16 03:48:48', NULL, 1, NULL, '2022-08-16 03:48:48', NULL);
/*!40000 ALTER TABLE `blog_articles` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. blog_article_appartenir_categories
CREATE TABLE IF NOT EXISTS `blog_article_appartenir_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `id_cat_article` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.blog_article_appartenir_categories : ~0 rows (environ)
/*!40000 ALTER TABLE `blog_article_appartenir_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_article_appartenir_categories` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. categorie_blog_articles
CREATE TABLE IF NOT EXISTS `categorie_blog_articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lib_cat_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categorie_blog_articles_lib_cat_article_unique` (`lib_cat_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.categorie_blog_articles : ~0 rows (environ)
/*!40000 ALTER TABLE `categorie_blog_articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorie_blog_articles` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. classes
CREATE TABLE IF NOT EXISTS `classes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lib_classe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_filiere` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.classes : ~3 rows (environ)
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` (`id`, `lib_classe`, `id_filiere`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'STIC', 1, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(2, 'STGI', 2, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(3, 'STGP', 3, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48');
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. commentaires
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `contenu_com` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_com` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_article` int(11) DEFAULT NULL,
  `id_enquete` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.commentaires : ~0 rows (environ)
/*!40000 ALTER TABLE `commentaires` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentaires` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. enquetes
CREATE TABLE IF NOT EXISTS `enquetes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domaine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_publication` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.enquetes : ~10 rows (environ)
/*!40000 ALTER TABLE `enquetes` DISABLE KEYS */;
INSERT INTO `enquetes` (`id`, `theme`, `domaine`, `description`, `date_publication`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Mr.', 'stanton.com', 'Sint iusto modi veniam vel quia. Quia neque est minus omnis quas quia. Soluta enim necessitatibus et sed vitae.', '2020-12-02', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(2, 'Mr.', 'borer.com', 'Eos facilis vero nemo. Sapiente et et suscipit esse ut enim. Eius at magnam perspiciatis a. Odit veritatis est voluptatem laudantium molestiae.', '2008-12-02', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(3, 'Mr.', 'ward.com', 'Ipsa veritatis ipsa culpa voluptatibus saepe. In quia doloribus voluptatem at. Eveniet magnam eaque ut omnis. Quis itaque quod et eum.', '1972-06-11', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(4, 'Prof.', 'heidenreich.biz', 'Eligendi at numquam et culpa beatae culpa expedita. Quaerat sed ut autem id ipsa quis tempora. Illo sed porro natus et qui architecto nihil.', '2011-09-29', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(5, 'Dr.', 'vonrueden.net', 'Sint officiis est qui ut quis. Quis minus ex natus adipisci. Accusamus ea labore omnis molestias quo enim. Consequatur cupiditate sit est excepturi ad.', '1972-09-22', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(6, 'Mrs.', 'langosh.net', 'Quae fuga accusamus hic deserunt. Iste recusandae vero quos amet sed est rem. Ut et voluptatibus est nam.', '2020-10-10', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(7, 'Dr.', 'hagenes.com', 'Inventore atque natus labore harum. Nesciunt quos laudantium ut nesciunt. Rerum quis atque fugit molestiae hic quo natus. Cupiditate sint tenetur similique excepturi et accusantium.', '1991-01-15', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(8, 'Prof.', 'kreiger.info', 'Dolores tempore voluptate explicabo velit quia debitis. Voluptatem voluptatem quia qui eos reiciendis. Consectetur animi quos veniam sed. Cupiditate molestiae et consectetur neque.', '2014-07-30', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(9, 'Ms.', 'erdman.com', 'Sit nihil repellat ratione ipsam voluptas reiciendis. Dolorem fuga non consequatur et saepe autem. Dolores eum vel ipsam in sequi.', '1986-02-28', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(10, 'Miss', 'buckridge.com', 'Error dolorum ut sint. Id et beatae reprehenderit veniam. Ea et voluptatibus et et repudiandae. Placeat debitis minus qui eum dolore doloremque accusantium.', '1975-09-20', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48');
/*!40000 ALTER TABLE `enquetes` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. etudiants
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `matri_etud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naiss_etud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promotion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2019-2022',
  `id_user` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `est_diplome` tinyint(1) NOT NULL DEFAULT '0',
  `filiere_diplome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduated_at` timestamp NULL DEFAULT NULL,
  `cv_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.etudiants : ~6 rows (environ)
/*!40000 ALTER TABLE `etudiants` DISABLE KEYS */;
INSERT INTO `etudiants` (`id`, `matri_etud`, `date_naiss_etud`, `bio`, `promotion`, `id_user`, `id_classe`, `est_diplome`, `filiere_diplome`, `graduated_at`, `cv_path`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, '22INP4', '2022-08-16 03:48:48', 'Ceci est la biographie d\'un étudiant venu tester le système CFIT3', '2019-2022', 4, 1, 0, NULL, NULL, NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(2, '22INP5', '2022-08-16 03:48:48', 'Ceci est la biographie d\'un étudiant venu tester le système CFIT3', '2019-2022', 5, 1, 0, NULL, NULL, NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(3, '22INP6', '2022-08-16 03:48:48', 'Ceci est la biographie d\'un étudiant venu tester le système CFIT3', '2019-2022', 6, 1, 1, 'ING ILT', '2022-08-16 03:48:48', NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(4, '22INP7', '2022-08-16 03:48:48', 'Ceci est la biographie d\'un étudiant venu tester le système CFIT3', '2019-2022', 7, 1, 1, 'ING ILT', '2022-08-16 03:48:48', NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(5, '22INP8', '2022-08-16 03:48:48', 'Ceci est la biographie d\'un étudiant venu tester le système CFIT3', '2019-2022', 8, 1, 0, NULL, NULL, NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(6, '22INP9', '2022-08-16 03:48:48', 'Ceci est la biographie d\'un étudiant venu tester le système CFIT3', '2019-2022', 9, 1, 0, NULL, NULL, NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48');
/*!40000 ALTER TABLE `etudiants` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. etudiant_effectuer_stages
CREATE TABLE IF NOT EXISTS `etudiant_effectuer_stages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_etudiant` int(11) NOT NULL,
  `id_stage` int(11) NOT NULL,
  `entreprise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date DEFAULT NULL,
  `annee_scolaire` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.etudiant_effectuer_stages : ~0 rows (environ)
/*!40000 ALTER TABLE `etudiant_effectuer_stages` DISABLE KEYS */;
/*!40000 ALTER TABLE `etudiant_effectuer_stages` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. etudiant_realiser_projets
CREATE TABLE IF NOT EXISTS `etudiant_realiser_projets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `matri_etud` int(11) NOT NULL,
  `id_projet` int(11) NOT NULL,
  `date_realisation` date DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.etudiant_realiser_projets : ~0 rows (environ)
/*!40000 ALTER TABLE `etudiant_realiser_projets` DISABLE KEYS */;
/*!40000 ALTER TABLE `etudiant_realiser_projets` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. filieres
CREATE TABLE IF NOT EXISTS `filieres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lib_filiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_filiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.filieres : ~3 rows (environ)
/*!40000 ALTER TABLE `filieres` DISABLE KEYS */;
INSERT INTO `filieres` (`id`, `lib_filiere`, `description_filiere`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'STIC', 'Sciences et Technologie de l\'Information et de la Communication', NULL, NULL, NULL),
	(2, 'STGI', 'Sciences et Technologie de du Génie Industriel', NULL, NULL, NULL),
	(3, 'STGP', 'Sciences et Technologie du Génie des Procédés', NULL, NULL, NULL);
/*!40000 ALTER TABLE `filieres` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. livres
CREATE TABLE IF NOT EXISTS `livres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fichier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type_livre` int(11) NOT NULL,
  `img_couverture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.livres : ~15 rows (environ)
/*!40000 ALTER TABLE `livres` DISABLE KEYS */;
INSERT INTO `livres` (`id`, `titre`, `resume`, `auteur`, `fichier`, `id_type_livre`, `img_couverture`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Dr.', 'Est dolore dolores eligendi ut. Enim fuga et voluptatem. Voluptatibus aliquid nihil exercitationem quisquam quibusdam delectus quasi.', 'Dr. Leonor Larson II Dr. Annamae Murphy V', 'documents/bibliotheque/livre0.pdf', 5, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(2, 'Prof.', 'In enim nam rem odio. Voluptatem incidunt a modi quo. Eligendi rem dolor rerum. Facere impedit non consectetur est enim at ratione omnis.', 'Genevieve Toy Dr. Jacky Bauch PhD', 'documents/bibliotheque/livre0.pdf', 2, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(3, 'Dr.', 'Reprehenderit rem ut laboriosam eum sit occaecati. Optio nemo repellendus est maiores dolor nostrum deleniti.', 'Alejandrin Hauck Domenica Metz DDS', 'documents/bibliotheque/livre0.pdf', 1, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(4, 'Prof.', 'Provident officiis asperiores ratione. Nesciunt enim perspiciatis eos nesciunt placeat adipisci sit. Est impedit velit dolor explicabo quos quia blanditiis necessitatibus.', 'Mr. Nelson Schaden Jaydon Lind', 'documents/bibliotheque/livre0.pdf', 4, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(5, 'Prof.', 'Rerum minus laborum error maxime ullam magnam. Error hic esse aliquid ut illo reiciendis id. Minima itaque sed adipisci omnis provident labore.', 'Prof. Gunnar Lebsack Milton Romaguera II', 'documents/bibliotheque/livre0.pdf', 3, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(6, 'Mrs.', 'Omnis qui rerum non aut sed ea. Soluta sed in voluptatem non doloremque. Maxime ut quidem fugiat consequatur. Veritatis placeat voluptas laboriosam rerum.', 'Elmo Bins Cory Langworth', 'documents/bibliotheque/livre0.pdf', 4, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(7, 'Mr.', 'Non velit beatae pariatur enim in. Est iste non suscipit cum fugiat totam. Expedita consequuntur vitae aut rerum earum voluptas. Atque et vel voluptatem dolores blanditiis velit.', 'Mrs. Cecilia Christiansen II Gaston Treutel DDS', 'documents/bibliotheque/livre0.pdf', 4, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(8, 'Dr.', 'Necessitatibus optio quo ab illo. Libero dolores voluptatem quo quod autem sint fugit. Similique amet delectus saepe ab eos quas. Et recusandae suscipit quaerat.', 'Dr. Rhett Gibson Jany Ferry IV', 'documents/bibliotheque/livre0.pdf', 2, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(9, 'Dr.', 'Voluptatem nihil ipsa animi a tenetur in dolorem. Ut quam commodi nulla quisquam eveniet. Eum sit voluptate beatae porro porro aut.', 'Geraldine Rutherford Palma Nader', 'documents/bibliotheque/livre0.pdf', 5, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(10, 'Dr.', 'Necessitatibus amet illo ratione recusandae. Assumenda distinctio distinctio ea labore in.', 'Gladyce Beier Vernie Reinger I', 'documents/bibliotheque/livre0.pdf', 5, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(11, 'Dr.', 'Itaque veniam reiciendis illum maiores. Necessitatibus officia consequuntur dignissimos praesentium omnis unde. Ut id repellat a error reiciendis veniam. Velit ut soluta aperiam ratione illum et.', 'Dr. Dayton Rohan Nettie Orn', 'documents/bibliotheque/livre0.pdf', 1, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(12, 'Prof.', 'Dolor nobis minus harum nesciunt. Praesentium est magni non nam. Optio commodi mollitia sit quod repellat corporis. Error sed a dicta a.', 'Prof. Jazmyne Terry Mr. Emanuel Ratke I', 'documents/bibliotheque/livre0.pdf', 5, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(13, 'Dr.', 'Et praesentium vitae molestiae aut. Delectus veritatis id excepturi consequatur soluta quam hic. Sint ea sit a earum.', 'Prof. Lamar Gerhold II Nola McCullough DVM', 'documents/bibliotheque/livre0.pdf', 5, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(14, 'Ms.', 'Architecto soluta sunt est dolore enim. Quia id facilis nesciunt. Vel sint exercitationem dolorem dolores eius illum sit.', 'Nils Cassin DDS Naomie Harber', 'documents/bibliotheque/livre0.pdf', 1, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(15, 'Dr.', 'Veritatis labore sit provident autem eum fugiat odit est. Provident sit rerum consequatur quibusdam qui nihil. Voluptatum itaque mollitia rerum quo animi.', 'Miss Heloise Bergstrom II Mr. Miles Haley MD', 'documents/bibliotheque/livre0.pdf', 2, 'img/inp-centre.jpg', NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48');
/*!40000 ALTER TABLE `livres` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.migrations : ~23 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_01_26_154042_create_blog_articles_table', 1),
	(6, '2022_01_26_155133_create_categorie_blog_articles_table', 1),
	(7, '2022_01_26_155251_create_commentaires_table', 1),
	(8, '2022_01_26_155602_create_renseignements_table', 1),
	(9, '2022_01_26_155728_create_projets_table', 1),
	(10, '2022_01_26_155930_create_filieres_table', 1),
	(11, '2022_01_26_160004_create_specialites_table', 1),
	(12, '2022_01_26_160057_create_classes_table', 1),
	(13, '2022_01_26_160208_create_etudiant_realiser_projets_table', 1),
	(14, '2022_01_26_160420_create_user_demander_renseignements_table', 1),
	(15, '2022_01_26_164221_create_blog_article_appartenir_categories_table', 1),
	(16, '2022_01_26_165547_create_etudiants_table', 1),
	(17, '2022_03_10_114716_create_newsletters_table', 1),
	(18, '2022_08_08_231222_create_offre_emplois_table', 1),
	(19, '2022_08_09_234719_create_livres_table', 1),
	(20, '2022_08_10_163531_create_enquetes_table', 1),
	(21, '2022_08_16_020554_create_type_livres_table', 1),
	(22, '2022_08_16_033906_create_stages_table', 1),
	(23, '2022_08_16_033932_create_etudiant_effectuer_stages_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. newsletters
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.newsletters : ~0 rows (environ)
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. offre_emplois
CREATE TABLE IF NOT EXISTS `offre_emplois` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entreprise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_offre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domaine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_contrat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_publication` date NOT NULL,
  `date_limite` date DEFAULT NULL,
  `img_offre` date DEFAULT NULL,
  `img_entreprise` date DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.offre_emplois : ~10 rows (environ)
/*!40000 ALTER TABLE `offre_emplois` DISABLE KEYS */;
INSERT INTO `offre_emplois` (`id`, `titre`, `entreprise`, `type_offre`, `domaine`, `poste`, `type_contrat`, `description`, `date_publication`, `date_limite`, `img_offre`, `img_entreprise`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Ms.', 'roberts.com', 'Stage', 'brakus.com', 'Maroon', NULL, 'Voluptas eos qui sit aut reprehenderit saepe a. Nobis esse iure alias facere. Laudantium est dolor expedita laboriosam voluptates. Rerum illum aut omnis excepturi.', '2018-01-28', '1992-09-03', NULL, NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(2, 'Mr.', 'cruickshank.com', 'Emploi', 'hartmann.com', 'Chartreuse', NULL, 'Nulla facere atque cumque vel. Aliquid repudiandae ea aut. Pariatur voluptate fuga consequatur inventore itaque dolorem rerum. Qui ex fuga sit et aut sunt.', '1975-11-06', NULL, NULL, NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(3, 'Prof.', 'murray.net', 'Emploi', 'ward.com', 'OliveDrab', NULL, 'Maxime est dolore voluptates quaerat et similique. Qui labore aliquid debitis ad occaecati fuga enim consequuntur. Libero odio enim omnis eum.', '2016-01-29', '2015-10-28', NULL, NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(4, 'Mrs.', 'cummings.net', 'Stage', 'carter.org', 'MistyRose', NULL, 'Ipsam quasi incidunt numquam sit numquam itaque. In suscipit ea vel quis et ut. Ut praesentium qui eveniet enim delectus ex et. Ut est consequuntur vel dolor vero.', '2001-06-14', NULL, NULL, NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(5, 'Mrs.', 'trantow.com', 'Stage', 'halvorson.biz', 'LightGray', NULL, 'Amet et necessitatibus nesciunt modi quo labore fugiat. Quia quia impedit aut molestiae. Distinctio dolorem aliquid beatae dolor non recusandae. Quos pariatur repellat omnis eaque.', '1982-01-14', NULL, NULL, NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(6, 'Dr.', 'pagac.biz', 'Emploi', 'king.com', 'GoldenRod', NULL, 'Cum deserunt et aut ipsum. Officia perferendis sunt et laudantium. Non ab repellat aut enim aliquam porro.', '1983-11-04', '1979-04-13', NULL, NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(7, 'Mr.', 'romaguera.org', 'Emploi', 'little.com', 'CornflowerBlue', NULL, 'Temporibus nisi porro sit culpa voluptatum reiciendis. Quis doloribus corporis iste ipsam quisquam labore. Eveniet velit ab voluptate. Vero suscipit omnis minus ad ipsa deleniti.', '2012-05-01', '1984-04-07', NULL, NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(8, 'Prof.', 'hill.com', 'Stage', 'balistreri.info', 'PaleVioletRed', NULL, 'Explicabo dolores hic vero nostrum. Veritatis voluptas quia doloribus sunt.', '2011-07-12', '1991-06-01', NULL, NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(9, 'Dr.', 'gutkowski.com', 'Emploi', 'vonrueden.com', 'LawnGreen', NULL, 'Quidem quas non quam rem. Voluptates eaque dignissimos cupiditate rem voluptatem. Et quidem libero in similique qui laborum ut. Sapiente ducimus inventore quas et.', '1982-10-07', NULL, NULL, NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48'),
	(10, 'Mrs.', 'nader.com', 'Emploi', 'gleason.info', 'DarkKhaki', NULL, 'Velit optio fugiat hic qui sit quas aut. Vero ea suscipit aut ullam. Laboriosam consequatur aut inventore neque. Sunt vel et amet maxime distinctio.', '2008-02-11', NULL, NULL, NULL, NULL, '2022-08-16 03:48:48', '2022-08-16 03:48:48');
/*!40000 ALTER TABLE `offre_emplois` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.personal_access_tokens : ~0 rows (environ)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. projets
CREATE TABLE IF NOT EXISTS `projets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titre_projet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_solution_projet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domaine_projet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_projet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_projet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.projets : ~0 rows (environ)
/*!40000 ALTER TABLE `projets` DISABLE KEYS */;
/*!40000 ALTER TABLE `projets` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. renseignements
CREATE TABLE IF NOT EXISTS `renseignements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `message_rens` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.renseignements : ~0 rows (environ)
/*!40000 ALTER TABLE `renseignements` DISABLE KEYS */;
/*!40000 ALTER TABLE `renseignements` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. specialites
CREATE TABLE IF NOT EXISTS `specialites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `abrev_spec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lib_spec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_spec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_filiere` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.specialites : ~7 rows (environ)
/*!40000 ALTER TABLE `specialites` DISABLE KEYS */;
INSERT INTO `specialites` (`id`, `abrev_spec`, `lib_spec`, `description_spec`, `id_filiere`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'INFO', 'Informatique', 'Le parcours des passionnés des technologies du digital: Développement, Sécurité informatique, Conception de SI, Bases de données, Intelligence artificielle, etc.', 1, NULL, NULL, NULL),
	(2, 'EIT', 'Electronique et Informatique Industrielle', 'Formation sur les technologies embarquées, les systèmes électroniques et informatiques, les réseaux et la télécommunication.', 1, NULL, NULL, NULL),
	(3, 'PMSI', 'Production et Maintenance des Systèmes Industriels', 'Formation sur les sytèmes et outils de production de masse dans l\'industrie, les chaines de production et bien d\'autres.', 2, NULL, NULL, NULL),
	(4, 'MA', 'Mécatronique et Automobile', 'Cette spécialité a pour but de former des mecaniciens capables d\'intervenir sur des véhicules intelligents dotés de calculateurs électroniques et de systèmes informatisés.', 2, NULL, NULL, NULL),
	(5, 'EAI', 'Electrotechnique et Automatisme Industriel', 'Formation pour les intéressés des circuits éléectriques, du courant et de ses applications dans nos équipements.', 2, NULL, NULL, NULL),
	(6, 'CI', 'Chimie Industrielle', 'zazazazazazzzz', 3, NULL, NULL, NULL),
	(7, 'STA', 'Sciences et Technologies des Aliments', 'Formation aux métiers de l\'alimentation, de la nutrition et des sciences de production.', 3, NULL, NULL, NULL);
/*!40000 ALTER TABLE `specialites` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. stages
CREATE TABLE IF NOT EXISTS `stages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.stages : ~3 rows (environ)
/*!40000 ALTER TABLE `stages` DISABLE KEYS */;
INSERT INTO `stages` (`id`, `type`, `created_at`, `updated_at`) VALUES
	(1, 'Stage découverte', NULL, NULL),
	(2, 'Stage d\'application', NULL, NULL),
	(3, 'Stage de fin d\'études', NULL, NULL);
/*!40000 ALTER TABLE `stages` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. type_livres
CREATE TABLE IF NOT EXISTS `type_livres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lib_type_livre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.type_livres : ~5 rows (environ)
/*!40000 ALTER TABLE `type_livres` DISABLE KEYS */;
INSERT INTO `type_livres` (`id`, `lib_type_livre`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Rapport de stage', NULL, '2022-08-16 03:48:48', NULL),
	(2, 'Mémoire', NULL, '2022-08-16 03:48:48', NULL),
	(3, 'Rapport de projet interne', NULL, '2022-08-16 03:48:48', NULL),
	(4, 'Support de cours', NULL, '2022-08-16 03:48:48', NULL),
	(5, 'Autre', NULL, '2022-08-16 03:48:48', NULL);
/*!40000 ALTER TABLE `type_livres` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_complet_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.users : ~9 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `nom_user`, `prenom_user`, `nom_complet_user`, `tel_user`, `email`, `password`, `role_user`, `email_verified_at`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'TAHI', 'Alexandre', 'TAHI Alexandre', '0584649825', 'alexandretahi7@gmail.com', '$2y$10$p4MnWCSI1L7gjBFsT4CO7.Mf4gXbWbWoI1IxXXO/728GCxLA1b76e', 'Admin', NULL, NULL, NULL, '2022-08-16 03:48:47', NULL),
	(2, 'TANOH', 'Aka', 'TANOH Aka', NULL, 'tanohaka@esi.com', '$2y$10$a2CDmo6N6oT310GfYaC0SOVPdDZHW/PAox8Oj99J9otojpJ2W5nqa', 'Directeur', NULL, NULL, NULL, '2022-08-16 03:48:47', NULL),
	(3, 'KONE', 'Siriky', 'KONE Siriky', ' 0747260505', 'siriky.kone@inphb.ci', '$2y$10$2oTrCE1kMPnqopytVecJk.NtHIiI9o21amh9p.Ow4iJJVJCleoLmi', 'Directeur des études', NULL, NULL, NULL, '2022-08-16 03:48:47', NULL),
	(4, 'Zoza', 'Carra', 'Zoza Carra', NULL, 'zozacarra@esi.com', '$2y$10$rJKLmfoD7C3DZc8kWJPqzOlGL082Xczu8YZn10ii18VsSHWTSYGnW', 'Etudiant', NULL, NULL, NULL, '2022-08-16 03:48:47', NULL),
	(5, 'Titi', 'Lago', 'Titi Lago', NULL, 'titilago@esi.ci', '$2y$10$G84Tz0NI17vC7X3kUB6HP.jtrZaP2yBm4upnD19glYKr0Jirp1AWq', 'Etudiant', NULL, NULL, NULL, '2022-08-16 03:48:48', NULL),
	(6, 'oijoij', 'pokpok', 'oijoij pokpok', NULL, 'iuh@esi.com', '$2y$10$Kx/lDQOsVJBA5xHCQJXck.U/UAHz9nn3542m5baNFI2bvfPT1NYK2', 'Etudiant', NULL, NULL, NULL, '2022-08-16 03:48:48', NULL),
	(7, '66sef', 's5df7sd', '66sef s5df7sd', NULL, 'sfdf@esi.ci', '$2y$10$yeHVGtN5RII1sOy/HzeYceonuR03DSf897rt4HunCPJ44d4QmdVwO', 'Etudiant', NULL, NULL, NULL, '2022-08-16 03:48:48', NULL),
	(8, 'sd6f78s', 'ed5r7g', 'sd6f78s ed5r7g', NULL, 's6fd@esi.com', '$2y$10$9/abpxAWw0pBW1yewPvjdO0bzvu5iwvTDNPzUCu9ad6eDTXDzsHPu', 'Etudiant', NULL, NULL, NULL, '2022-08-16 03:48:48', NULL),
	(9, 's6ed8f4', 'sd6f4', 's6ed8f4 sd6f4', NULL, 'sd6f45@esi.ci', '$2y$10$BbT3bH3XnrRQ8SRtLI2x2.n.YDv6TUTKK3O3Jnp0UxD5wngw93xWO', 'Etudiant', NULL, NULL, NULL, '2022-08-16 03:48:48', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage de la structure de la table digital-esi-db-test. user_demander_renseignements
CREATE TABLE IF NOT EXISTS `user_demander_renseignements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_rens` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_spec` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table digital-esi-db-test.user_demander_renseignements : ~0 rows (environ)
/*!40000 ALTER TABLE `user_demander_renseignements` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_demander_renseignements` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
