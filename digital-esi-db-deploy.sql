-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table digital-esi-db.blog_articles
DROP TABLE IF EXISTS `blog_articles`;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table digital-esi-db.blog_articles: ~3 rows (approximately)
/*!40000 ALTER TABLE `blog_articles` DISABLE KEYS */;
INSERT INTO `blog_articles` (`id`, `titre_article`, `resume_article`, `contenu_article`, `date_publication`, `img_article`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Lancement de la plateforme officielle de communication de l\'ESI !', 'L\'Ecole formatrice d\'ingénieurs et de techniciens supérieurs dans les domaines de l\'industrie vous dévoile sa plateforme digitale.', 'L\'Ecole formatrice d\'ingénieurs et de techniciens supérieurs dans les domaines de l\'industrie vous dévoile sa plateforme digitale.', '2022-08-21 14:46:50', NULL, 1, NULL, '2022-08-21 16:46:50', NULL),
	(2, 'Meilleur bachelier 2021', 'DIAKO Yoan-Mauriel Samuel Mahougnon à été désigné comme étant le meilleur candidat au baccalauréat de l\'année 2021', 'zzz', '2022-09-03 12:48:04', 'img/articles/article_03_09_2022_12_47_23.png', 1, NULL, '2022-09-03 12:47:23', '2022-09-03 12:48:04'),
	(3, 'Situation des diplômés en 2020', 'Situation des diplômés en 2020', 'Situation des diplômés en 2020', '2022-09-03 12:50:08', 'img/articles/article_03_09_2022_12_50_08.png', 1, NULL, '2022-09-03 12:49:56', '2022-09-03 12:50:08');
/*!40000 ALTER TABLE `blog_articles` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.blog_article_appartenir_categories
DROP TABLE IF EXISTS `blog_article_appartenir_categories`;
CREATE TABLE IF NOT EXISTS `blog_article_appartenir_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `id_cat_article` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table digital-esi-db.blog_article_appartenir_categories: ~0 rows (approximately)
/*!40000 ALTER TABLE `blog_article_appartenir_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_article_appartenir_categories` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.categorie_blog_articles
DROP TABLE IF EXISTS `categorie_blog_articles`;
CREATE TABLE IF NOT EXISTS `categorie_blog_articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lib_cat_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categorie_blog_articles_lib_cat_article_unique` (`lib_cat_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table digital-esi-db.categorie_blog_articles: ~0 rows (approximately)
/*!40000 ALTER TABLE `categorie_blog_articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorie_blog_articles` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.classes
DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lib_classe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_filiere` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table digital-esi-db.classes: ~3 rows (approximately)
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` (`id`, `lib_classe`, `id_filiere`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'STIC', 1, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(2, 'STGI', 2, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(3, 'STGP', 3, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51');
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.commentaires
DROP TABLE IF EXISTS `commentaires`;
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

-- Dumping data for table digital-esi-db.commentaires: ~0 rows (approximately)
/*!40000 ALTER TABLE `commentaires` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentaires` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.enquetes
DROP TABLE IF EXISTS `enquetes`;
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

-- Dumping data for table digital-esi-db.enquetes: ~10 rows (approximately)
/*!40000 ALTER TABLE `enquetes` DISABLE KEYS */;
INSERT INTO `enquetes` (`id`, `theme`, `domaine`, `description`, `date_publication`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Prof.', 'upton.com', 'Officia similique commodi magnam dolore possimus rem. Nihil quia est numquam quia dolorum aut. Dolorum harum repellendus esse.', '2005-04-04', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(2, 'Mrs.', 'bosco.com', 'Quia optio qui laboriosam. Totam tempora quibusdam cupiditate omnis. Aut dolorum est facilis velit magnam quis. Ipsum animi atque eum qui sed nihil.', '1978-02-11', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(3, 'Dr.', 'pfeffer.net', 'Illum quo nam ullam corrupti beatae molestiae. Sunt quia quis voluptatem. Aut et vero sint accusantium nemo veritatis. Qui asperiores perspiciatis distinctio id quia enim molestiae.', '2021-02-22', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(4, 'Mrs.', 'baumbach.com', 'Eius quam deleniti nulla natus. Sed dolor quaerat harum. Minima quis quae cupiditate inventore. Voluptatem sed dolorem deleniti tempora possimus et qui expedita.', '1986-01-14', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(5, 'Mr.', 'grant.com', 'Sunt inventore eligendi cum. Rerum odio exercitationem voluptatem doloremque eos quia mollitia. Ut quasi nulla rem excepturi debitis quis.', '1980-03-29', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(6, 'Ms.', 'howe.net', 'Doloremque non ut et qui dolorem. Voluptas aut sit quis accusamus modi eaque. Incidunt minima est optio blanditiis voluptatum vitae atque maxime. Quo quas id et optio.', '1991-12-10', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(7, 'Dr.', 'pacocha.com', 'Quasi dolorem voluptatem delectus consequatur quisquam ex. Enim quasi facilis molestiae iste.', '2013-03-23', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(8, 'Dr.', 'olson.com', 'Illo illo aspernatur occaecati sit nostrum. Ut aut ex optio quae doloremque.', '1974-07-31', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(9, 'Dr.', 'grant.org', 'Aliquid omnis dolores sapiente adipisci animi nihil. Vero est eius sapiente alias quo reprehenderit cum error. Similique quos recusandae eos possimus exercitationem.', '1978-10-26', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(10, 'Dr.', 'muller.com', 'Culpa ab molestias repudiandae nostrum. Et cupiditate eveniet non eum. Provident officia perspiciatis in fugit modi qui consequatur.', '1981-07-11', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51');
/*!40000 ALTER TABLE `enquetes` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.etudiants
DROP TABLE IF EXISTS `etudiants`;
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

-- Dumping data for table digital-esi-db.etudiants: ~6 rows (approximately)
/*!40000 ALTER TABLE `etudiants` DISABLE KEYS */;
INSERT INTO `etudiants` (`id`, `matri_etud`, `date_naiss_etud`, `bio`, `promotion`, `id_user`, `id_classe`, `est_diplome`, `filiere_diplome`, `graduated_at`, `cv_path`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, '22INP4', '2022-08-21 14:46:51', 'Ceci est la biographie d\'un étudiant venu tester le système CFIT3', '2019-2022', 4, 1, 1, 'ING EIT', '2022-08-21 16:46:51', NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(2, '22INP5', '2022-08-21 14:46:51', 'Ceci est la biographie d\'un étudiant venu tester le système CFIT3', '2019-2022', 5, 1, 0, NULL, NULL, NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(3, '22INP6', '2022-08-21 14:46:51', 'Ceci est la biographie d\'un étudiant venu tester le système CFIT3', '2019-2022', 6, 1, 0, NULL, NULL, NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(4, '22INP7', '2022-08-21 14:46:51', 'Ceci est la biographie d\'un étudiant venu tester le système CFIT3', '2019-2022', 7, 1, 0, NULL, NULL, NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(5, '22INP8', '2022-08-21 14:46:51', 'Ceci est la biographie d\'un étudiant venu tester le système CFIT3', '2019-2022', 8, 1, 1, 'ING HEA', '2022-08-21 16:46:51', NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(6, '22INP9', '2022-08-21 14:46:51', 'Ceci est la biographie d\'un étudiant venu tester le système CFIT3', '2019-2022', 9, 1, 1, 'ING INFO', '2022-08-21 16:46:51', NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51');
/*!40000 ALTER TABLE `etudiants` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.etudiant_effectuer_stages
DROP TABLE IF EXISTS `etudiant_effectuer_stages`;
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

-- Dumping data for table digital-esi-db.etudiant_effectuer_stages: ~0 rows (approximately)
/*!40000 ALTER TABLE `etudiant_effectuer_stages` DISABLE KEYS */;
/*!40000 ALTER TABLE `etudiant_effectuer_stages` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.etudiant_realiser_projets
DROP TABLE IF EXISTS `etudiant_realiser_projets`;
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

-- Dumping data for table digital-esi-db.etudiant_realiser_projets: ~0 rows (approximately)
/*!40000 ALTER TABLE `etudiant_realiser_projets` DISABLE KEYS */;
/*!40000 ALTER TABLE `etudiant_realiser_projets` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
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

-- Dumping data for table digital-esi-db.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.filieres
DROP TABLE IF EXISTS `filieres`;
CREATE TABLE IF NOT EXISTS `filieres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lib_filiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_filiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table digital-esi-db.filieres: ~3 rows (approximately)
/*!40000 ALTER TABLE `filieres` DISABLE KEYS */;
INSERT INTO `filieres` (`id`, `lib_filiere`, `description_filiere`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'STIC', 'Sciences et Technologie de l\'Information et de la Communication', NULL, NULL, NULL),
	(2, 'STGI', 'Sciences et Technologie de du Génie Industriel', NULL, NULL, NULL),
	(3, 'STGP', 'Sciences et Technologie du Génie des Procédés', NULL, NULL, NULL);
/*!40000 ALTER TABLE `filieres` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.livres
DROP TABLE IF EXISTS `livres`;
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

-- Dumping data for table digital-esi-db.livres: ~15 rows (approximately)
/*!40000 ALTER TABLE `livres` DISABLE KEYS */;
INSERT INTO `livres` (`id`, `titre`, `resume`, `auteur`, `fichier`, `id_type_livre`, `img_couverture`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Prof.', 'Nihil quos voluptatibus magnam sint natus sed voluptatem. Natus voluptas alias et vel quia consequatur. Aut ducimus et consequatur incidunt natus aut. Ratione accusamus sit cumque repudiandae.', 'Modesta Romaguera Violet Corkery', 'documents/bibliotheque/livre0.pdf', 5, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(2, 'Prof.', 'Et doloribus quia aperiam iste. In ipsum dolore sit exercitationem. Accusamus minus non repellendus ex. Sit quasi quia minus non.', 'Rudolph Von Telly Bergstrom', 'documents/bibliotheque/livre0.pdf', 5, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(3, 'Mr.', 'Voluptate vitae vel in commodi odit debitis voluptatem. Animi quo enim earum.', 'Fatima Reichel Jasen Donnelly', 'documents/bibliotheque/livre0.pdf', 4, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(4, 'Mrs.', 'Commodi quos dolor ut quis et fuga atque. Aut ut consequatur tenetur enim placeat voluptatem eos. Eligendi velit similique tempora magni vero qui tempore.', 'Kaleb Dare Ed Parisian', 'documents/bibliotheque/livre0.pdf', 5, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(5, 'Prof.', 'Suscipit aut temporibus accusantium sunt et quis id. Aliquid amet fugit sed qui enim. Aut provident vero qui sint earum cum pariatur eveniet. Ratione non eum qui et voluptates fuga iste pariatur.', 'Miss Josiane Kulas PhD Mrs. Tatyana Wehner IV', 'documents/bibliotheque/livre0.pdf', 2, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(6, 'Ms.', 'Harum atque dolores officiis et. Ipsam saepe eos sit mollitia. Sequi officiis veritatis nisi sapiente ut quisquam.', 'Prof. Brady Heathcote III Palma Kub', 'documents/bibliotheque/livre0.pdf', 3, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(7, 'Mr.', 'Vero dolor sed unde repellendus veniam porro. Sed est quasi molestiae consequatur iusto eligendi culpa. Quas qui est fuga sunt velit sed commodi.', 'Prof. Linwood Casper Prof. Micaela Roob', 'documents/bibliotheque/livre0.pdf', 5, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(8, 'Prof.', 'Velit voluptas omnis exercitationem. Est explicabo atque et accusantium ducimus eaque ut. Fuga non minima eius dignissimos qui quisquam quia. Iste ipsam vel veniam est corporis animi placeat.', 'Duane Dibbert Brigitte Swaniawski MD', 'documents/bibliotheque/livre0.pdf', 3, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(9, 'Mr.', 'Eos voluptates deserunt culpa molestiae rem et ratione tenetur. Itaque distinctio rerum corporis enim quia et. Sit et eos id incidunt nihil ipsum. Nihil nihil quibusdam numquam amet.', 'Devan Reynolds Dr. Kenny Kassulke', 'documents/bibliotheque/livre0.pdf', 1, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(10, 'Dr.', 'Consectetur velit libero quasi aut aut repellendus et. Ratione quia maxime possimus sit ducimus quasi. A aut sit nostrum vero repellat occaecati. Voluptas voluptas molestias ut numquam.', 'Demarcus Ullrich Dr. Gerson Bruen', 'documents/bibliotheque/livre0.pdf', 5, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(11, 'Mrs.', 'Voluptate iste ratione ut modi occaecati. Possimus similique magnam voluptatem ut dolorem consequuntur. Accusamus id non repudiandae et saepe sint veniam.', 'Lucas Schmeler Baylee Ledner', 'documents/bibliotheque/livre0.pdf', 3, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(12, 'Prof.', 'Amet aut iusto voluptatem eveniet magni nam. Est eveniet laudantium sint odit modi saepe repudiandae. Voluptate beatae omnis autem cumque aut. Eos ut molestias tenetur voluptate et voluptatem.', 'Prof. Allie Hauck III Dr. Mossie Veum', 'documents/bibliotheque/livre0.pdf', 5, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(13, 'Prof.', 'Reiciendis magnam sed aut. Omnis nobis quod facere nam modi quos. Porro harum corporis nihil voluptatum facere repudiandae voluptatibus.', 'Raheem Greenholt Maud Padberg', 'documents/bibliotheque/livre0.pdf', 1, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(14, 'Miss', 'Corporis sint quia ipsa consequuntur officia. Accusantium hic aut dicta sed. Ea perspiciatis odit illum est. Quia ut est molestiae et vero ab molestiae.', 'Ms. Lizzie Koch Kennith Zieme', 'documents/bibliotheque/livre0.pdf', 5, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(15, 'Miss', 'Optio tempore est praesentium iure molestiae in tempore. Reiciendis laborum ad nam repellat corporis expedita. Non praesentium sed eaque quam rem fugit eos nostrum. Rem maiores ut est enim non.', 'Prof. Gregorio Casper Ernesto Hagenes', 'documents/bibliotheque/livre0.pdf', 4, 'img/inp-centre.jpg', NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51');
/*!40000 ALTER TABLE `livres` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table digital-esi-db.migrations: ~23 rows (approximately)
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

-- Dumping structure for table digital-esi-db.newsletters
DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table digital-esi-db.newsletters: ~0 rows (approximately)
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.offre_emplois
DROP TABLE IF EXISTS `offre_emplois`;
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

-- Dumping data for table digital-esi-db.offre_emplois: ~10 rows (approximately)
/*!40000 ALTER TABLE `offre_emplois` DISABLE KEYS */;
INSERT INTO `offre_emplois` (`id`, `titre`, `entreprise`, `type_offre`, `domaine`, `poste`, `type_contrat`, `description`, `date_publication`, `date_limite`, `img_offre`, `img_entreprise`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Ms.', 'mcglynn.com', 'Stage', 'zieme.info', 'LightGreen', NULL, 'Corporis neque et labore blanditiis amet commodi. Rem culpa tempora molestiae sed quidem sint occaecati. Sit aliquid doloremque dolorem repellendus quia quam fugit aut.', '1993-09-07', '1970-11-06', NULL, NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(2, 'Ms.', 'christiansen.net', 'Stage', 'padberg.com', 'MediumSlateBlue', NULL, 'Voluptas et eveniet consequatur dolore qui. Qui doloribus quo molestiae. Debitis voluptatem sed et non. Aspernatur iure culpa non. Et at nobis expedita est eum.', '1985-10-04', NULL, NULL, NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(3, 'Miss', 'wolff.com', 'Emploi', 'williamson.com', 'DarkSlateBlue', NULL, 'A suscipit quaerat ducimus atque sint totam quae. Enim recusandae et explicabo neque voluptatem impedit sint dolorem. Repellat et quia est. Totam excepturi aut qui accusantium nihil rem.', '1997-10-04', '2001-09-30', NULL, NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(4, 'Prof.', 'grady.org', 'Emploi', 'bode.org', 'DarkViolet', NULL, 'Ut omnis saepe voluptatem ipsum vero in ducimus. Ut assumenda laborum sed inventore voluptatem dignissimos. Harum quo facere perspiciatis deleniti maxime est cupiditate.', '1981-10-19', NULL, NULL, NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(5, 'Prof.', 'kiehn.com', 'Stage', 'casper.com', 'Coral', NULL, 'Consequuntur fugit non possimus numquam facilis qui vero. Corrupti expedita similique unde aut qui sint. Et blanditiis et perspiciatis nisi aut.', '2017-12-29', '1979-06-07', NULL, NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(6, 'Miss', 'ziemann.org', 'Stage', 'stoltenberg.biz', 'SeaGreen', NULL, 'Dolore aut nisi consequatur et delectus cupiditate sed. Voluptas ea quo non iure temporibus adipisci. Et quasi laborum facere sint. Nostrum similique corrupti reprehenderit est odit suscipit dolore.', '1987-09-20', NULL, NULL, NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(7, 'Prof.', 'bednar.com', 'Emploi', 'gorczany.net', 'HoneyDew', NULL, 'Tenetur laudantium tempore ut soluta. Beatae dicta id fugiat iusto maiores eaque consequuntur. Odio dicta quidem quisquam minus.', '2017-07-09', NULL, NULL, NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(8, 'Dr.', 'jerde.biz', 'Emploi', 'witting.com', 'Wheat', NULL, 'Quia quia excepturi quis ut et est. Voluptatem porro vel dolorem magni quisquam qui. Saepe aperiam in minima voluptas aut officia.', '1980-08-25', '2012-05-14', NULL, NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(9, 'Dr.', 'lind.com', 'Stage', 'huels.com', 'FloralWhite', NULL, 'Ullam eum culpa laudantium. Commodi consequatur labore illum nihil iste aut.', '1997-12-02', NULL, NULL, NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51'),
	(10, 'Dr.', 'kessler.info', 'Emploi', 'veum.com', 'MediumTurquoise', NULL, 'Ipsum possimus maxime omnis vel. Tempora atque voluptatem sunt laboriosam fuga vel deleniti. Eos nesciunt qui optio eum nostrum consequatur voluptates iste.', '2004-05-30', '1996-09-11', NULL, NULL, NULL, '2022-08-21 16:46:51', '2022-08-21 16:46:51');
/*!40000 ALTER TABLE `offre_emplois` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table digital-esi-db.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
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

-- Dumping data for table digital-esi-db.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.projets
DROP TABLE IF EXISTS `projets`;
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

-- Dumping data for table digital-esi-db.projets: ~0 rows (approximately)
/*!40000 ALTER TABLE `projets` DISABLE KEYS */;
/*!40000 ALTER TABLE `projets` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.renseignements
DROP TABLE IF EXISTS `renseignements`;
CREATE TABLE IF NOT EXISTS `renseignements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `message_rens` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table digital-esi-db.renseignements: ~0 rows (approximately)
/*!40000 ALTER TABLE `renseignements` DISABLE KEYS */;
/*!40000 ALTER TABLE `renseignements` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.specialites
DROP TABLE IF EXISTS `specialites`;
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

-- Dumping data for table digital-esi-db.specialites: ~7 rows (approximately)
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

-- Dumping structure for table digital-esi-db.stages
DROP TABLE IF EXISTS `stages`;
CREATE TABLE IF NOT EXISTS `stages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table digital-esi-db.stages: ~3 rows (approximately)
/*!40000 ALTER TABLE `stages` DISABLE KEYS */;
INSERT INTO `stages` (`id`, `type`, `created_at`, `updated_at`) VALUES
	(1, 'Stage découverte', NULL, NULL),
	(2, 'Stage d\'application', NULL, NULL),
	(3, 'Stage de fin d\'études', NULL, NULL);
/*!40000 ALTER TABLE `stages` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.type_livres
DROP TABLE IF EXISTS `type_livres`;
CREATE TABLE IF NOT EXISTS `type_livres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lib_type_livre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table digital-esi-db.type_livres: ~5 rows (approximately)
/*!40000 ALTER TABLE `type_livres` DISABLE KEYS */;
INSERT INTO `type_livres` (`id`, `lib_type_livre`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Rapport de stage', NULL, '2022-08-21 16:46:51', NULL),
	(2, 'Mémoire', NULL, '2022-08-21 16:46:51', NULL),
	(3, 'Rapport de projet interne', NULL, '2022-08-21 16:46:51', NULL),
	(4, 'Support de cours', NULL, '2022-08-21 16:46:51', NULL),
	(5, 'Autre', NULL, '2022-08-21 16:46:51', NULL);
/*!40000 ALTER TABLE `type_livres` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.users
DROP TABLE IF EXISTS `users`;
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

-- Dumping data for table digital-esi-db.users: ~9 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `nom_user`, `prenom_user`, `nom_complet_user`, `tel_user`, `email`, `password`, `role_user`, `email_verified_at`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'TAHI', 'Alexandre', 'TAHI Alexandre', '0584649825', 'alexandretahi7@gmail.com', '$2y$10$Om6I.5PfwozCd7mF/7isfuXSMQfS6jO13U72PlIIX5OZujA6/nvKq', 'Admin', NULL, NULL, NULL, '2022-08-21 16:46:50', NULL),
	(2, 'TANOH', 'Aka', 'TANOH Aka', NULL, 'tanohaka@esi.com', '$2y$10$pWUpEWq6mD5OCL.VrPf3AO0no74OFlKgiyJMVf68qPiiIBazGgKjO', 'Directeur', NULL, NULL, NULL, '2022-08-21 16:46:50', NULL),
	(3, 'KONE', 'Siriky', 'KONE Siriky', ' 0747260505', 'siriky.kone@inphb.ci', '$2y$10$FR2RIyLGIXATdeWDDF/dP.PG6tujcomXzhA6cYFDxl9Y594Fb374a', 'Directeur des études', NULL, NULL, NULL, '2022-08-21 16:46:50', NULL),
	(4, 'Zoza', 'Carra', 'Zoza Carra', NULL, 'zozacarra@esi.com', '$2y$10$5ZbZuvoLwM88ezm/W9sY4ux8JOi6.ieKu7OEECqsZ1zCQgW0L4Nj6', 'Etudiant', NULL, NULL, NULL, '2022-08-21 16:46:50', NULL),
	(5, 'Titi', 'Lago', 'Titi Lago', NULL, 'titilago@esi.ci', '$2y$10$M3whbStH6enArcfODa5fFOq8MEb1Qws2/yh0BxSyeFCtRbkj2EbNC', 'Etudiant', NULL, NULL, NULL, '2022-08-21 16:46:50', NULL),
	(6, 'oijoij', 'pokpok', 'oijoij pokpok', NULL, 'iuh@esi.com', '$2y$10$KMRC9KJcESpc6t12o4czNeg/fGUJ66nRar2jFd9lPRa2l8apJIT86', 'Etudiant', NULL, NULL, NULL, '2022-08-21 16:46:50', NULL),
	(7, '66sef', 's5df7sd', '66sef s5df7sd', NULL, 'sfdf@esi.ci', '$2y$10$nX1FClvbUnfzb8PJrym2uu9quehrJIkPDxz270GAqLKlj2UAmpYYS', 'Etudiant', NULL, NULL, NULL, '2022-08-21 16:46:50', NULL),
	(8, 'sd6f78s', 'ed5r7g', 'sd6f78s ed5r7g', NULL, 's6fd@esi.com', '$2y$10$3KoSgFEDKB5vV2ge7cNPXeJ6QG0q0UaWRDqhBuPlwIG0KRPGknmtu', 'Etudiant', NULL, NULL, NULL, '2022-08-21 16:46:50', NULL),
	(9, 's6ed8f4', 'sd6f4', 's6ed8f4 sd6f4', NULL, 'sd6f45@esi.ci', '$2y$10$eO.0toJC0wngyJiVQJslQOJOYcis8bTka.MldbppeJO67rjvllkFG', 'Etudiant', NULL, NULL, NULL, '2022-08-21 16:46:50', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table digital-esi-db.user_demander_renseignements
DROP TABLE IF EXISTS `user_demander_renseignements`;
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

-- Dumping data for table digital-esi-db.user_demander_renseignements: ~0 rows (approximately)
/*!40000 ALTER TABLE `user_demander_renseignements` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_demander_renseignements` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
