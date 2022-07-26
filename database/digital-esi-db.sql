-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET NAMES utf8 */
;
/*!50503 SET NAMES utf8mb4 */
;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */
;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */
;
-- Listage de la structure de la base pour digital-esi-db
-- CREATE DATABASE IF NOT EXISTS `digital-esi-db` /*!40100 DEFAULT CHARACTER SET latin1 */;
-- USE `digital-esi-db`;
-- Listage de la structure de la table digital-esi-db. blog_articles
CREATE TABLE IF NOT EXISTS `blog_articles` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `titre_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `resume_article` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `contenu_article` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `date_publication` datetime NOT NULL,
    `image_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/blog/blog1.jpg',
    `id_user` int(11) NOT NULL,
    `deleted_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 2 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. blog_article_appartenir_categoressaiesi_site_esiies
CREATE TABLE IF NOT EXISTS `blog_article_appartenir_categories` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `id_article` int(11) NOT NULL,
    `id_cat_article` int(11) NOT NULL,
    `deleted_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. categorie_blog_articles
CREATE TABLE IF NOT EXISTS `categorie_blog_articles` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `lib_cat_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `deleted_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `categorie_blog_articles_lib_cat_article_unique` (`lib_cat_article`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. classes
CREATE TABLE IF NOT EXISTS `classes` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `lib_classe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `id_filiere` int(11) NOT NULL,
    `deleted_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. commentaires
CREATE TABLE IF NOT EXISTS `commentaires` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `contenu_com` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `date_com` datetime NOT NULL,
    `id_user` int(11) NOT NULL,
    `id_article` int(11) NOT NULL,
    `deleted_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. etudiants
CREATE TABLE IF NOT EXISTS `etudiants` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `matri_etud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `nom_etud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `prenom_etud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `date_naiss_etud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `id_classe` int(11) NOT NULL,
    `deleted_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. etudiant_realiser_projets
CREATE TABLE IF NOT EXISTS `etudiant_realiser_projets` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `matri_etud` int(11) NOT NULL,
    `id_projet` int(11) NOT NULL,
    `date_realisation` date DEFAULT NULL,
    `deleted_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. failed_jobs
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. filieres
CREATE TABLE IF NOT EXISTS `filieres` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `lib_filiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `description_filiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `deleted_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 4 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `batch` int(11) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 18 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. newsletters
CREATE TABLE IF NOT EXISTS `newsletters` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `deleted_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    KEY `password_resets_email_index` (`email`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. personal_access_tokens
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
    KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`, `tokenable_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. projets
CREATE TABLE IF NOT EXISTS `projets` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `titre_projet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `domaine_projet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `description_projet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `img_projet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `deleted_at` timestamp NULL DEFAULT NULL,
    `created_by` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. renseignements
CREATE TABLE IF NOT EXISTS `renseignements` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `message_rens` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `deleted_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. specialites
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
) ENGINE = InnoDB AUTO_INCREMENT = 8 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. users
CREATE TABLE IF NOT EXISTS `users` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `nom_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `prenom_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE = InnoDB AUTO_INCREMENT = 4 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
-- Listage de la structure de la table digital-esi-db. user_demander_renseignements
CREATE TABLE IF NOT EXISTS `user_demander_renseignements` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `id_rens` int(11) NOT NULL,
    `id_user` int(11) NOT NULL,
    `id_spec` int(11) DEFAULT NULL,
    `deleted_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- Les données exportées n'étaient pas sélectionnées.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */
;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */
;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
