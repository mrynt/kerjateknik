/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 8.0.35 : Database - kerjateknik
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`kerjateknik` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `kerjateknik`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `feeds` */

DROP TABLE IF EXISTS `feeds`;

CREATE TABLE `feeds` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `user_type` enum('profesional','organisasi') DEFAULT NULL,
  `whats_on_your_mind` text,
  `type` enum('photo_video','file','link') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `link` text,
  `file` text,
  `link_metadata` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `feeds` */

insert  into `feeds`(`id`,`user_id`,`user_type`,`whats_on_your_mind`,`type`,`link`,`file`,`link_metadata`,`created_at`,`updated_at`) values (1,16,'organisasi','video keren nih','link','https://www.youtube.com/embed/TkV5709EG5M?si=zkglUpjwhjpzlfkr',NULL,'{\"site_name\":\"YouTube\",\"url\":\"https:\\/\\/www.youtube.com\\/watch?v=TkV5709EG5M&list=RDTkV5709EG5M\",\"title\":\"Bring Me The Horizon - Drown\",\"image\":\"https:\\/\\/i.ytimg.com\\/vi\\/TkV5709EG5M\\/maxresdefault.jpg\",\"image:width\":\"1280\",\"image:height\":\"720\",\"description\":\"a\\u043co - \\u0442\\u043de \\u0432rand new al\\u0432\\u03c5\\u043co\\u03c5\\u0442 now: http:\\/\\/bmthorizon.co\\/amo\\u2018Drown\\u2019 is out now and available here: https:\\/\\/bmth.co\\/ThatsTheSpirit Facebook \\u2013 https:\\/\\/www.facebo...\",\"type\":\"video.other\",\"video_url\":\"https:\\/\\/www.youtube.com\\/embed\\/TkV5709EG5M?list=RDTkV5709EG5M\",\"video:secure_url\":\"https:\\/\\/www.youtube.com\\/embed\\/TkV5709EG5M?list=RDTkV5709EG5M\",\"video:type\":\"text\\/html\",\"video:width\":\"1280\",\"video:height\":\"720\",\"video:tag\":\"RCA Records Label\"}','2024-09-01 00:00:00',NULL),(2,1,'profesional','ada lowongan nih gan','link','https://medcopower.co.id/id/career-vacancy/',NULL,'{\"viewport\":\"width=device-width, initial-scale=1\",\"description\":\"\\/*! elementor - v3.8.1 - 13-11-2022 *\\/ .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading\",\"robots\":\"index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large\",\"locale\":\"id_ID\",\"type\":\"article\",\"title\":\"VACANCY - Medco Power Indonesia\",\"url\":\"https:\\/\\/medcopower.co.id\\/id\\/career-vacancy\\/\",\"site_name\":\"Medco Power Indonesia\",\"updated_time\":\"2023-07-25T11:24:46+07:00\",\"article:published_time\":\"2022-01-05T11:13:29+07:00\",\"article:modified_time\":\"2023-07-25T11:24:46+07:00\",\"twitter:card\":\"summary_large_image\",\"twitter:title\":\"VACANCY - Medco Power Indonesia\",\"twitter:description\":\"\\/*! elementor - v3.8.1 - 13-11-2022 *\\/ .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading\",\"twitter:label1\":\"Waktunya membaca\",\"twitter:data1\":\"Kurang dari semenit\",\"generator\":\"Elementor 3.18.2; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-auto\",\"msapplication-TileImage\":\"https:\\/\\/medcopower.co.id\\/wp-content\\/uploads\\/2021\\/12\\/logo-1.png\"}',NULL,NULL);

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `organisasi_id` int DEFAULT NULL,
  `job_category_id` int DEFAULT NULL,
  `job_title` tinytext,
  `job_location` varchar(255) DEFAULT NULL,
  `job_location_national` varchar(255) DEFAULT NULL,
  `job_status` varchar(100) DEFAULT NULL,
  `job_type` varchar(100) DEFAULT NULL,
  `job_closed_apply` date DEFAULT NULL,
  `job_tags` text,
  `status` enum('publish','draft') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_12_22_135054_create_permission_tables',1);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values (1,'App\\Models\\User',1),(1,'App\\Models\\User',5),(1,'App\\Models\\User',6),(1,'App\\Models\\User',7),(1,'App\\Models\\User',8),(1,'App\\Models\\User',9),(1,'App\\Models\\User',10),(1,'App\\Models\\User',11),(2,'App\\Models\\User',15),(2,'App\\Models\\User',16),(1,'App\\Models\\User',21),(2,'App\\Models\\User',22),(1,'App\\Models\\User',23),(1,'App\\Models\\User',24);

/*Table structure for table `organisasi_profiles` */

DROP TABLE IF EXISTS `organisasi_profiles`;

CREATE TABLE `organisasi_profiles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `tipe` text,
  `nama_depan` varchar(200) DEFAULT NULL,
  `nama_belakang` varchar(200) DEFAULT NULL,
  `email_perusahaan` varchar(100) DEFAULT NULL,
  `no_telp` varchar(100) DEFAULT NULL,
  `nama_perusahaan` text,
  `alamat` text,
  `status` enum('daftar','approve','reject') DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `organisasi_profiles` */

insert  into `organisasi_profiles`(`id`,`user_id`,`tipe`,`nama_depan`,`nama_belakang`,`email_perusahaan`,`no_telp`,`nama_perusahaan`,`alamat`,`status`,`username`,`created_at`,`updated_at`) values (1,16,'association','Voluptatem dolor cul','Ullamco sit ut repu','beqokyr@mailinator.com',NULL,'Organisasi Organisasi','Facilis ullam sint a',NULL,'test','2023-12-23 19:48:07','2023-12-23 19:48:07'),(2,22,'badan_usaha','aneka','tambang','aneka@tambang.com',NULL,'PT Aneka Tambang','jalan bahari',NULL,'anekatambang','2024-01-04 21:12:39','2024-01-04 21:12:39');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values (1,'user','web',NULL,NULL),(2,'organisasi','organisasi',NULL,NULL);

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

insert  into `role_has_permissions`(`permission_id`,`role_id`) values (1,1),(2,2);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values (1,'user','web','2023-12-22 14:03:52','2023-12-22 14:03:52'),(2,'organisasi','web','2023-12-22 14:03:52','2023-12-22 14:03:52');

/*Table structure for table `user_experiences` */

DROP TABLE IF EXISTS `user_experiences`;

CREATE TABLE `user_experiences` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_profile_id` int DEFAULT NULL,
  `organisasi_id` int DEFAULT NULL,
  `jabatan` text,
  `type` enum('permanent','contract') DEFAULT NULL,
  `work_from` text,
  `work_to` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `user_experiences` */

/*Table structure for table `user_profiles` */

DROP TABLE IF EXISTS `user_profiles`;

CREATE TABLE `user_profiles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `nama_depan` varchar(200) DEFAULT NULL,
  `nama_belakang` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `no_whatsapp` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tinggi_badan` int DEFAULT NULL,
  `berat_badan` int DEFAULT NULL,
  `alamat` text,
  `negara` varchar(200) DEFAULT NULL,
  `provinsi` text,
  `kota_kabupaten` text,
  `kecamatan` text,
  `rtrw` text,
  `kodeposs` int DEFAULT NULL,
  `is_profesional_akun` bigint DEFAULT '0',
  `facebook_link` text,
  `twitter_link` text,
  `instagram_link` text,
  `youtube_link` text,
  `username` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `user_profiles` */

insert  into `user_profiles`(`id`,`user_id`,`nama_depan`,`nama_belakang`,`email`,`no_whatsapp`,`tanggal_lahir`,`tinggi_badan`,`berat_badan`,`alamat`,`negara`,`provinsi`,`kota_kabupaten`,`kecamatan`,`rtrw`,`kodeposs`,`is_profesional_akun`,`facebook_link`,`twitter_link`,`instagram_link`,`youtube_link`,`username`,`created_at`,`updated_at`) values (1,1,'Mariyanto','Mariyanto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,'mariyanto',NULL,NULL),(4,11,'Dolorem dolore neque','Non quia sunt eveni','jefixulana@mailinator.com','Delectus ex quis ut','1982-03-01',NULL,NULL,'Et est velit commod',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2023-12-22 19:12:47','2023-12-22 19:12:47'),(5,21,'Erick','Syarief','erick.syarief@gmail.com','085155277593','1992-01-08',NULL,NULL,'Jalan Pemuda No. 114',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,'erick','2023-12-26 08:41:14','2023-12-26 08:41:14'),(6,23,'eko','saputro','ekodwisaputro.dev@gmail.com','087889965430','1992-10-20',NULL,NULL,'Jl Pendow, gg Nasba RT 9 RW 5 no 130A, Limo, Depok',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2024-01-09 23:52:48','2024-01-09 23:52:48'),(7,24,'A','A','hafidz.tkj@gmail.com','094353043','2024-02-02',NULL,NULL,'Yogyakarta\r\nYogyakarta',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2024-02-02 11:05:06','2024-02-02 11:05:06');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'mariyanto','mariyanto1992@gmail.com',NULL,'$2y$10$X9wOabKwXnanPCpDQkzrAulCeGKTdT7oln7oMEufmq2.IN3EDeGPm',NULL,'2023-12-22 14:14:33','2023-12-22 14:14:33'),(11,'Dolorem dolore neque Non quia sunt eveni','jefixulana@mailinator.com',NULL,'$2y$10$X9wOabKwXnanPCpDQkzrAulCeGKTdT7oln7oMEufmq2.IN3EDeGPm',NULL,'2023-12-22 19:12:47','2023-12-22 19:12:47'),(16,'Voluptatem dolor cul Ullamco sit ut repu','beqokyr@mailinator.com',NULL,'$2y$10$X9wOabKwXnanPCpDQkzrAulCeGKTdT7oln7oMEufmq2.IN3EDeGPm',NULL,'2023-12-23 19:48:07','2023-12-23 19:48:07'),(17,'Et et velit eligend Sed est quia soluta','badafiga@mailinator.net',NULL,'$2y$10$RKH4.XtjJtU/0rJyq3H1yO.x322POKaZu4/T4c3wFnB1RwwTGUUSm',NULL,'2023-12-24 22:10:22','2023-12-24 22:10:22'),(18,'Autem voluptatibus v Et at illo reprehend','kotatyzojo@mailinator.com',NULL,'$2y$10$HuCkp2vcgAyP8PlZIkV6j.OCQ8roHs9/eOxTEIcXz3L29omRkS3X2',NULL,'2023-12-24 22:10:50','2023-12-24 22:10:50'),(19,'Tempor est adipisici Mollit aliquip quia','jileruq@mailinator.net',NULL,'$2y$10$VxtVnuBXcrjeQnXgBysPBeiPz1YTksp5R.OUmkfK6Ei8BFgm40DTe',NULL,'2023-12-24 22:14:03','2023-12-24 22:14:03'),(20,'Aliquip sit nemo se Cum non omnis sunt m','fabu@mailinator.net',NULL,'$2y$10$tsvIAilMMO59Ig39CRpVz.ZCwZGXDsKYsWppwtNvozmS4tu8zgdYG',NULL,'2023-12-24 22:15:04','2023-12-24 22:15:04'),(21,'Erick Syarief','erick.syarief@gmail.com',NULL,'$2y$10$YfVaTTEXdjSvgFzoowMo5.s4ThJL2Ld1uxIeHw6eFnWl7MS4xpp8a',NULL,'2023-12-26 08:41:14','2023-12-26 08:41:14'),(22,'aneka tambang','aneka@tambang.com',NULL,'$2y$10$dxGAfi.raxRb80oty3fW5ejQ6AOTk/e/7eYOegOyANbt7zK7.rs0W',NULL,'2024-01-04 21:12:39','2024-01-04 21:12:39'),(23,'eko saputro','ekodwisaputro.dev@gmail.com',NULL,'$2y$10$n/rylmoZrPkVCpzhinMyn.AwR06Qa4KnCbOZhKqy.nIEA/ItQhcDS',NULL,'2024-01-09 23:52:48','2024-01-09 23:52:48'),(24,'A A','hafidz.tkj@gmail.com',NULL,'$2y$10$26oAs22MRZYp6nurasx1l.H/Z0tkv/eNrQhFfF2xAmbDHtNtmbT62',NULL,'2024-02-02 11:05:06','2024-02-02 11:05:06');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
