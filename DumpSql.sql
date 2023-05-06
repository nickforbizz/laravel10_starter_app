
USE `mkenwrqe_company`;

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint unsigned NOT NULL,
  `created_by` bigint unsigned NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_post_id_foreign` (`post_id`),
  KEY `comments_created_by_foreign` (`created_by`),
  CONSTRAINT `comments_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `comments` */

insert  into `comments`(`id`,`post_id`,`created_by`,`comment`,`deleted_at`,`created_at`,`updated_at`) values (1,9,8,'Quam est illum corporis non accusamus.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(2,8,11,'Molestiae quos corrupti in inventore.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(3,14,5,'Quo rerum perferendis veritatis quae sunt maiores suscipit.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(4,14,3,'Qui voluptates qui quae dolor error voluptatem illo minus.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(5,4,8,'Eum quas voluptatibus et nesciunt.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(6,7,11,'Autem doloremque totam consequatur ut et culpa.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(7,13,7,'Mollitia sunt necessitatibus est.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(8,14,4,'Voluptatem omnis quod voluptatem debitis accusantium.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(9,9,3,'Voluptates consectetur incidunt aut repudiandae occaecati natus.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(10,13,4,'Sapiente non possimus molestiae quasi nihil quo aut.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(11,6,10,'Quis dolor et numquam reiciendis.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(12,18,6,'Sed impedit quo nostrum autem quas mollitia voluptate.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(13,5,6,'Sequi eius nihil repellendus alias.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(14,19,7,'Fuga voluptas nam quis nisi.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(15,18,11,'Cum ut expedita sed occaecati mollitia assumenda non totam.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(16,13,7,'Qui perferendis quod corrupti sit.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(17,8,7,'Est ad quas pariatur harum quasi.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(18,8,9,'Molestiae eum mollitia sit voluptatibus vel facilis pariatur.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(19,5,1,'Amet provident ipsa sit est.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(20,13,11,'Labore vel est et ut.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(21,20,9,'Harum accusantium commodi cumque sapiente et deserunt aut.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(22,17,1,'Consequatur dolores ullam omnis praesentium sed.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(23,4,5,'Nihil eligendi et quia eos voluptate veritatis voluptate error.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(24,4,2,'Dolor a est et eum.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(25,6,5,'Architecto in est nisi officiis dolores ullam neque.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(26,5,10,'Veritatis qui dolorum qui doloribus deleniti blanditiis.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(27,14,4,'Velit similique molestiae nesciunt.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(28,7,3,'Assumenda est facere magni aut hic doloremque.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(29,6,5,'Quia cupiditate animi vel iure veniam.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(30,10,5,'Vel maiores natus cupiditate sit at at dolorem.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(31,21,10,'Eligendi consequatur deleniti officiis non voluptas quae.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(32,6,2,'Officia adipisci corrupti dignissimos ut voluptate et.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(33,11,9,'At voluptatem necessitatibus repudiandae.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(34,10,2,'In et ullam impedit aliquid animi incidunt.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(35,17,6,'Iste sed qui provident sed.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36'),(36,8,1,'Tenetur eos non ut ut sint.',NULL,'2023-04-22 06:33:36','2023-04-22 06:33:36');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `guards` */

DROP TABLE IF EXISTS `guards`;

CREATE TABLE `guards` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `guards_created_by_foreign` (`created_by`),
  CONSTRAINT `guards_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `guards` */

insert  into `guards`(`id`,`name`,`active`,`created_by`,`created_at`,`updated_at`) values (1,'web',1,4,'2023-04-09 12:01:08','2023-04-09 12:01:08');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(5,'2019_08_19_000000_create_failed_jobs_table',1),(6,'2019_12_14_000001_create_personal_access_tokens_table',1),(7,'2023_03_26_084305_create_permission_tables',1),(8,'2023_03_31_114218_create_post_categories_table',1),(9,'2023_03_31_114652_create_posts_table',1),(10,'2023_04_09_115055_create_guards_table',2),(11,'2023_04_13_153510_create_notifications_table',3),(12,'2023_04_21_103844_create_product_categories_table',4),(13,'2023_04_21_103856_create_products_table',5),(14,'2023_04_22_060907_create_comments_table',6);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values (1,'App\\Models\\User',1),(2,'App\\Models\\User',1),(3,'App\\Models\\User',1),(4,'App\\Models\\User',1),(2,'App\\Models\\User',2),(3,'App\\Models\\User',2),(4,'App\\Models\\User',2),(3,'App\\Models\\User',3),(4,'App\\Models\\User',3),(3,'App\\Models\\User',4),(6,'App\\Models\\User',4),(3,'App\\Models\\User',5),(4,'App\\Models\\User',5),(3,'App\\Models\\User',10),(4,'App\\Models\\User',11);

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `notifications` */

insert  into `notifications`(`id`,`type`,`notifiable_type`,`notifiable_id`,`data`,`read_at`,`created_at`,`updated_at`) values ('416b5b01-eb05-4af4-bd90-5498d503f6b5','App\\Notifications\\NewUserNotification','App\\Models\\User',1,'{\"name\":\" Tanner Schultz\",\"email\":\"pudep@mailinator.com\" ,\"message\":\"New user registered\"}','2023-04-14 16:44:35','2023-04-13 18:22:00','2023-04-14 16:44:35'),('faf830b1-b691-48da-841c-c7f25a2d6dde','App\\Notifications\\NewUserNotification','App\\Models\\User',2,'{\"name\":\" Tanner Schultz\",\"email\":\"pudep@mailinator.com\",\"message\":\"New user registered\"}',NULL,'2023-04-13 18:22:00','2023-04-13 18:22:00');

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int DEFAULT NULL,
  `active` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`guard_name`,`created_by`,`active`,`created_at`,`updated_at`) values (1,'create users','web',1,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(2,'edit users','web',1,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(3,'delete users','web',1,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(4,'activate users','web',1,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(5,'deactivate users','web',4,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(6,'create post categories','web',3,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(7,'edit post categories','web',2,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(8,'delete post categories','web',3,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(9,'publish post categories','web',2,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(10,'unpublish post categories','web',2,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(11,'create posts','web',3,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(12,'edit posts','web',2,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(13,'delete posts','web',1,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(14,'publish posts','web',4,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(15,'unpublish posts','web',3,1,'2023-04-09 12:17:56','2023-04-09 12:17:56'),(16,'test','web',1,1,'2023-04-09 12:36:05','2023-04-09 12:36:05'),(17,'create permissions','web',1,1,'2023-04-10 19:02:21','2023-04-10 19:02:21'),(18,'edit permissions','web',1,1,'2023-04-10 19:02:36','2023-04-10 19:02:36'),(19,'delete permissions','web',1,1,'2023-04-10 19:03:12','2023-04-10 19:03:12'),(20,'create roles','web',1,1,'2023-04-10 19:05:44','2023-04-10 19:05:44'),(21,'edit roles','web',1,1,'2023-04-10 19:06:05','2023-04-10 19:06:05'),(22,'delete roles','web',1,1,'2023-04-10 19:06:19','2023-04-10 19:06:19'),(23,'create params','web',1,1,'2023-04-11 03:19:22','2023-04-11 03:19:22'),(24,'edit params','web',1,1,'2023-04-11 03:19:33','2023-04-11 03:19:33'),(25,'delete params','web',1,1,'2023-04-11 03:19:46','2023-04-11 03:19:46');

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `post_categories` */

DROP TABLE IF EXISTS `post_categories`;

CREATE TABLE `post_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_by` bigint unsigned NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_categories_slug_unique` (`slug`),
  KEY `post_categories_created_by_foreign` (`created_by`),
  CONSTRAINT `post_categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `post_categories` */

insert  into `post_categories`(`id`,`name`,`slug`,`description`,`created_by`,`active`,`deleted_at`,`created_at`,`updated_at`) values (1,'vel','vel','Ab est ipsa non modi nemo.',4,'1',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(2,'tempora','tempora','This is a test of permissions',3,'1',NULL,'2023-04-05 10:04:40','2023-04-11 04:27:09'),(3,'excepturi','excepturi','Nihil deserunt delectus similique similique eos labore autem.',2,'1',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(4,'et','et','Eveniet minus quasi suscipit nemo.',1,'1',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(5,'neque','neque','Expedita ex explicabo dolorem.',1,'1',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(6,'porro','porro','Ab sit a inventore suscipit maiores illum repellat sint.',2,'1',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(7,'recusandae','recusandae','Nam quibusdam blanditiis suscipit similique.',2,'0',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(8,'culpa','culpa','Expedita dolores suscipit porro cum.',2,'0',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40');

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_post.png',
  `created_by` bigint unsigned NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1.)Draft 2.)Published 3.)Featured 4.)Archived',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_created_by_foreign` (`created_by`),
  KEY `posts_category_id_foreign` (`category_id`),
  CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `post_categories` (`id`),
  CONSTRAINT `posts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `posts` */

insert  into `posts`(`id`,`title`,`slug`,`content`,`featured_img`,`created_by`,`category_id`,`active`,`status`,`deleted_at`,`created_at`,`updated_at`) values (1,'Labore sequi quia dolores ut fugit deleniti aut quo.','labore-sequi-quia-dolores-ut-fugit-deleniti-aut-quo','Nisi pariatur ut qui possimus laboriosam. Qui quo rerum deleniti vel architecto eligendi omnis. Ex earum voluptas et quo optio sequi et beatae.','default_post.png',1,1,'1','1','2023-04-06 13:22:50','2023-02-05 10:04:40','2023-04-06 13:22:50'),(2,'Consequatur porro nemo vitae fugit ut ut.','consequatur-porro-nemo-vitae-fugit-ut-ut','Consequatur iste enim ea impedit dolor cumque aut ut. Ea fugit voluptatibus dolorum.','default_post.png',2,3,'1','3',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(3,'Quidem et quia et deserunt non voluptatum.','quidem-et-quia-et-deserunt-non-voluptatum','Illum impedit distinctio molestias tempora autem repellendus doloribus. Velit est omnis inventore dolores quisquam. Qui unde possimus ducimus pariatur explicabo tempora qui vero.','default_post.png',2,7,'1','1',NULL,'2023-06-05 10:04:40','2023-04-05 10:04:40'),(4,'Sit accusamus assumenda eaque nisi hic mollitia consequuntur iusto.','sit-accusamus-assumenda-eaque-nisi-hic-mollitia-consequuntur-iusto','Culpa atque dolorem at est reiciendis placeat sint. Inventore porro quis quo sint voluptatem libero vitae. Modi blanditiis cupiditate velit maxime explicabo. Ut labore maiores iste.','default_post.png',1,8,'1','3',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(5,'Delectus ipsam perferendis molestias excepturi.','delectus-ipsam-perferendis-molestias-excepturi','<p>Voluptatem voluptas qui ut earum eum consequatur sed. Quis in animi et illo velit praesentium.</p>','posts/uTrjqY3bsSePThKpD5atqOT8poyJABZ5nmIAZw3R.jpg',4,1,'1','1',NULL,'2023-04-05 10:04:40','2023-04-06 13:23:47'),(6,'Qui ipsum a excepturi.','qui-ipsum-a-excepturi','Est quo reprehenderit quas saepe animi ratione. Sed ut est excepturi ducimus hic quia. Ratione autem molestiae quo culpa praesentium in itaque. Debitis aut sed molestiae consequatur quia rerum facere.','default_post.png',3,3,'1','3',NULL,'2023-05-05 10:04:40','2023-04-05 10:04:40'),(7,'Pariatur quia vitae nisi aut alias veritatis.','pariatur-quia-vitae-nisi-aut-alias-veritatis','Sed reiciendis magni et natus dolores repellat nam atque. Rerum ut quia dolores voluptatem.','default_post.png',2,5,'1','1',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(8,'Quia perferendis assumenda nam ut voluptas aut.','quia-perferendis-assumenda-nam-ut-voluptas-aut','Quo eos quae iste veniam ducimus. Adipisci quos ipsum animi alias ullam adipisci. Velit quas est dolor excepturi aliquam.','default_post.png',2,7,'1','1',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(9,'Rerum perspiciatis enim nihil non.','rerum-perspiciatis-enim-nihil-non','Inventore est voluptatem ut ut. Eos nesciunt quibusdam in id. Ut veritatis aut et vel voluptatibus qui eius.','default_post.png',2,7,'1','3',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(10,'Et vitae sunt molestiae accusantium hic.','et-vitae-sunt-molestiae-accusantium-hic','<p>Velit error saepe voluptas qui explicabo aliquam voluptas. Nulla eos nisi alias. Iure voluptatem sit consequatur totam ut est sint.</p>','posts/PB510QNuzjPNnpm0ze1BpyqboTopMt4QFMfPVdxd.png',2,2,'1','1',NULL,'2023-04-05 10:04:40','2023-04-06 14:10:13'),(11,'Fugiat suscipit molestias quae vel rerum quod quisquam.','fugiat-suscipit-molestias-quae-vel-rerum-quod-quisquam','Cumque assumenda voluptatem voluptatum voluptatem nihil voluptas. Et dolor maiores et quam. Quibusdam aut tempora vel aut rerum iste.','default_post.png',4,2,'1','1',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(12,'Reprehenderit alias voluptatem accusantium explicabo quisquam enim quas voluptatem.','reprehenderit-alias-voluptatem-accusantium-explicabo-quisquam-enim-quas-voluptatem','Earum aliquam sint autem non error praesentium. Similique nulla consequatur et vero sed aut tempora. Magni quia libero ex nesciunt qui accusamus molestiae ab. Aut dolorem est suscipit voluptatum.','default_post.png',3,2,'0','3',NULL,'2023-09-05 10:04:40','2023-04-05 10:04:40'),(13,'Nobis impedit dolor saepe earum aut quidem modi.','nobis-impedit-dolor-saepe-earum-aut-quidem-modi','Molestiae impedit ut voluptas voluptates sequi aut non. Natus fugiat quam doloremque eum eum amet eaque. Autem voluptate minus itaque sunt amet sunt facere. Commodi dolores quo soluta eos.','default_post.png',3,6,'0','1',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(14,'Quasi qui aliquid magnam asperiores atque quia.','quasi-qui-aliquid-magnam-asperiores-atque-quia','Voluptatem mollitia necessitatibus nobis ipsum porro unde. Tenetur et amet quia qui quo voluptatem est. Amet non autem impedit debitis non.','default_post.png',1,8,'0','1',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(15,'Rerum quia ducimus ipsa id itaque est.','rerum-quia-ducimus-ipsa-id-itaque-est','Magnam at eum molestiae voluptates est est omnis quibusdam. Distinctio est odio et molestiae excepturi nam dolorem. A fugit voluptatem alias necessitatibus temporibus doloribus quidem quaerat.','default_post.png',2,2,'0','1',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(16,'Inventore sint quisquam sequi earum culpa assumenda quis.','inventore-sint-quisquam-sequi-earum-culpa-assumenda-quis','Enim ducimus ex saepe sit labore magni. Labore soluta ducimus qui modi itaque quod possimus. Rerum veniam consequuntur eveniet culpa explicabo.','default_post.png',2,8,'0','1',NULL,'2023-07-05 10:04:40','2023-04-05 10:04:40'),(17,'Alias et voluptatem esse earum totam veritatis.','alias-et-voluptatem-esse-earum-totam-veritatis','Officia ullam quod voluptas pariatur vel repudiandae at aperiam. Aut aliquid cum mollitia. Aliquam sed explicabo dolorum vel vitae dolor aut. Vel saepe sunt non voluptas sed.','default_post.png',3,7,'0','1',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(18,'Deserunt possimus enim ea delectus quibusdam velit omnis.','deserunt-possimus-enim-ea-delectus-quibusdam-velit-omnis','Necessitatibus mollitia rerum unde et. Ab voluptate eos omnis laboriosam. Necessitatibus perspiciatis quod qui itaque voluptatem.','default_post.png',1,7,'0','1',NULL,'2023-08-05 10:04:40','2023-04-05 10:04:40'),(19,'Incidunt vitae error dignissimos sunt enim voluptate.','incidunt-vitae-error-dignissimos-sunt-enim-voluptate','Sapiente et fuga hic eveniet et porro est. Iste est incidunt at placeat error modi illo. Voluptatem eos est amet autem et.','default_post.png',3,4,'0','1',NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(20,'Sint ex dolor rem et nam velit.','sint-ex-dolor-rem-et-nam-velit','Consequatur magnam illo sed. Nulla cumque nesciunt dignissimos ab. Voluptatem velit culpa temporibus deserunt autem a consequatur. At maxime eum quas ut laborum voluptas sapiente et.','default_post.png',2,4,'0','1',NULL,'2023-09-05 10:04:40','2023-04-05 10:04:40'),(21,'test we','test-we','<h1>The past tense of \"read\" is also \"read.\"</h1>\r\n<p>It\'s an irregular verb, meaning it does not follow the typical pattern of adding \"-ed\" to form the past tense. Instead, the past tense form of \"read\" is spelled the same as the present tense form. The pronunciation of \"read\" changes, however, depending on whether it\'s being used in the present or past tense. In the present tense, \"read\" is pronounced as \"reed,\" while in the past tense, it\'s pronounced as \"red.\" For example, \"I read a book yesterday\" is in the past tense, while \"I like to read books\" is in the present tense.</p>','posts/GuX5gWeVPDsmx9UZxlW5tvsaFc7cefnyeQ066D9e.png',1,4,'0','1',NULL,'2022-04-06 12:54:08','2023-04-06 13:21:58');

/*Table structure for table `product_categories` */

DROP TABLE IF EXISTS `product_categories`;

CREATE TABLE `product_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_by` bigint unsigned NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_categories_slug_unique` (`slug`),
  KEY `product_categories_created_by_foreign` (`created_by`),
  CONSTRAINT `product_categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_categories` */

insert  into `product_categories`(`id`,`name`,`slug`,`description`,`created_by`,`active`,`deleted_at`,`created_at`,`updated_at`) values (1,'doloribus','doloribus','Sint aliquam et cum.XXX',1,'1',NULL,'2023-04-21 11:22:02','2023-04-21 21:47:31'),(2,'voluptate','voluptate','Distinctio qui inventore sed magni ut dignissimos ex.',2,'1',NULL,'2023-04-21 11:22:02','2023-04-21 11:22:02'),(3,'dolore','dolore','Voluptatem autem autem totam libero dolor minima qui.',9,'1',NULL,'2023-04-21 11:22:02','2023-04-21 11:22:02'),(4,'est','est','Ut cumque nostrum est provident tempora sed dolores.',1,'1',NULL,'2023-04-21 11:22:02','2023-04-21 11:22:02');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_post.png',
  `created_by` bigint unsigned NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1.)In Stock 2.)Cooming soon 3.)Sold 4.) Returned 5.)Discounted 6.) Archived',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `products_created_by_foreign` (`created_by`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`),
  CONSTRAINT `products_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`title`,`slug`,`description`,`price`,`quantity`,`color`,`size`,`label`,`photo`,`created_by`,`category_id`,`active`,`status`,`deleted_at`,`created_at`,`updated_at`) values (1,'Placeat temporibus dolorum possimus sed impedit consectetur.XX','placeat-temporibus-dolorum-possimus-sed-impedit-consectetur','<p>Quaerat sint amet consequatur soluta ex ex deleniti. Qui dolor assumenda dicta quam. Voluptas ipsa quod quia ipsa.</p>','3614','3','AliceBlue','m','','products/9NV96Mp0W3tXChGXdCJ5zU6L2fI1c4ljUdXZ5Zwp.jpg',1,4,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 22:00:41'),(2,'Voluptatem laboriosam ea dolores quidem rerum quibusdam quia sit.','voluptatem-laboriosam-ea-dolores-quidem-rerum-quibusdam-quia-sit','Molestiae excepturi dolor reprehenderit iusto soluta aut sunt. Rem commodi voluptas dicta voluptatem ut maxime iste. Tempore iusto iste eum. Eligendi qui labore voluptatum aut aperiam quos.','288','5','LavenderBlush','xl','Discounted','default_post.png',7,2,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(3,'Pariatur doloremque et aut quia.','pariatur-doloremque-et-aut-quia','Ea doloribus ea deserunt et qui neque ratione. Ut et ut ratione alias. Est rerum sed est et id.','959','7','Orange','l','Featured','default_post.png',10,3,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(4,'In quae quia et consequatur est.','in-quae-quia-et-consequatur-est','Officia perspiciatis ut voluptate explicabo eligendi fuga laudantium aperiam. Eaque optio sed consequatur aut. Qui eius consequatur vitae in eum. Fuga qui quia architecto voluptatem maxime et aperiam.','4062','17','Coral','s','New','default_post.png',3,2,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(5,'Quia voluptatum sunt et ab.','quia-voluptatum-sunt-et-ab','Et eos aut nesciunt neque optio sed consectetur. Architecto inventore eum et molestiae ipsam aut. Et et non incidunt fugit. Voluptas magnam incidunt et nulla qui deserunt.','1605','16','Lavender','s','Featured','default_post.png',10,2,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(6,'Officia aliquid error qui aut quos.','officia-aliquid-error-qui-aut-quos','Quod eos delectus aut voluptatem vitae consequuntur minima. Quis rerum rem occaecati. Fugiat eos consectetur eligendi sint. Nihil ducimus sint accusantium eius ut qui.','330','19','Maroon','m','New','default_post.png',11,1,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(7,'Ratione architecto exercitationem maiores molestiae error itaque.','ratione-architecto-exercitationem-maiores-molestiae-error-itaque','Dicta voluptas aliquid eius totam minus. Dolor libero autem id ut sint omnis. Delectus nobis officia quia. Deserunt dolores aut et. Ratione nesciunt iste quo incidunt est nisi vel repudiandae.','2378','9','LimeGreen','xl','Featured','default_post.png',2,3,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(8,'Ipsam et aut ut quis inventore.','ipsam-et-aut-ut-quis-inventore','Odit mollitia quia atque. Sit eligendi commodi omnis placeat. Labore est autem amet cum occaecati inventore officiis. Et doloribus inventore aliquid totam distinctio molestiae.','4889','18','PeachPuff','xl','Featured','default_post.png',8,1,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(9,'Voluptatem qui voluptatum et facilis.','voluptatem-qui-voluptatum-et-facilis','Sunt porro mollitia dolorem aut quia ducimus ipsa. Voluptates nulla illo explicabo est. Et a reprehenderit minus quibusdam rem. Quos atque deserunt rem autem a qui illo. Beatae quis praesentium maiores fuga.','2497','9','MistyRose','xl','Featured','default_post.png',8,3,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(10,'Quos velit tempore quae neque.','quos-velit-tempore-quae-neque','Aut quo eos perspiciatis tempora atque. Consequatur aut unde tempora suscipit aspernatur. Ea labore aspernatur ratione alias iusto minus.','353','1','RosyBrown','xl','New','default_post.png',1,3,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(11,'Aspernatur optio dolor dolores magnam ullam quia.','aspernatur-optio-dolor-dolores-magnam-ullam-quia','Culpa voluptatum quis necessitatibus aut consequatur laborum et. Sint culpa laboriosam molestiae qui. Deserunt eum asperiores error consequatur id expedita a. Eaque vel ut ut harum sunt dolores omnis.','4549','19','Brown','xl','Discounted','default_post.png',1,1,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(12,'Ab sed dolore voluptas placeat nihil.','ab-sed-dolore-voluptas-placeat-nihil','Et tempora molestias et molestias. Tenetur illum et et id velit voluptas. Reprehenderit ut quam corporis nulla rerum.','163','19','Olive','l','Featured','default_post.png',10,2,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(13,'Consequatur ea expedita sed vitae modi nemo.','consequatur-ea-expedita-sed-vitae-modi-nemo','Ut rerum possimus non. Iure magnam consectetur non laborum at. Sapiente ab expedita dolorem dolores quo.','3495','9','Aqua','xl','New','default_post.png',10,1,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(14,'Nesciunt ea sed occaecati sunt est quis repellat.','nesciunt-ea-sed-occaecati-sunt-est-quis-repellat','Quis dignissimos minima labore. Voluptatem eaque et odit porro modi. Sit error ex dicta corrupti qui minus quis.','4700','17','Snow','xl','Discounted','default_post.png',10,1,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(15,'Est nobis aspernatur illum reprehenderit beatae sit.','est-nobis-aspernatur-illum-reprehenderit-beatae-sit','Est enim ut suscipit architecto soluta sunt excepturi. Id aut aut corrupti quo possimus velit est. Enim itaque porro ipsam quo voluptates sunt.','4646','5','MediumSlateBlue','l','Discounted','default_post.png',4,2,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(16,'Dolore esse quidem quia illum et.','dolore-esse-quidem-quia-illum-et','Qui quis earum ab repudiandae. Ut voluptatem quia deleniti quasi.','697','12','PaleTurquoise','l','','default_post.png',7,1,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(17,'Ea qui dolorem veniam aperiam vero.','ea-qui-dolorem-veniam-aperiam-vero','Et rerum molestiae error. Tempore assumenda in aliquid sunt voluptas inventore. Eaque aut vel dignissimos sunt vel et eligendi. Placeat hic sint optio qui blanditiis.','4738','9','AliceBlue','l','','default_post.png',2,3,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(18,'Sed consequatur libero amet et porro est.','sed-consequatur-libero-amet-et-porro-est','Ut enim et officia impedit velit delectus est. Est in quisquam eveniet. Et autem qui rerum vitae quis voluptatem perferendis. Itaque nulla nulla consectetur cum.','953','20','LightBlue','xl','New','default_post.png',4,2,'1','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11'),(19,'Tenetur sed adipisci rerum dolorem qui molestiae.','tenetur-sed-adipisci-rerum-dolorem-qui-molestiae','Error est et ut. Itaque corporis quis asperiores numquam odio quidem harum est. Odit fuga culpa quo rerum facilis qui. Laborum quod esse facere sapiente.','2375','6','MediumSeaGreen','m','','default_post.png',3,2,'0','1',NULL,'2023-04-21 11:23:11','2023-04-21 11:23:11');

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

insert  into `role_has_permissions`(`permission_id`,`role_id`) values (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(1,2),(2,2),(4,2),(5,2),(6,2),(7,2),(9,2),(10,2),(11,2),(12,2),(14,2),(15,2),(17,2),(23,2),(24,2);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`created_by`,`guard_name`,`active`,`created_at`,`updated_at`) values (1,'superadmin',1,'web',1,'2023-04-05 10:04:40','2023-04-07 10:56:30'),(2,'admin',1,'web',1,'2023-04-05 10:04:40','2023-04-07 10:56:39'),(3,'writer',1,'web',1,'2023-04-05 10:04:40','2023-04-07 10:56:47'),(4,'user',1,'web',1,'2023-04-05 10:04:40','2023-04-07 10:56:20'),(6,'KilaMoja',1,'web',1,'2023-04-07 10:29:28','2023-04-07 10:29:28');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `avator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_avator.png',
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`fname`,`lname`,`sname`,`name`,`email`,`email_verified_at`,`password`,`two_factor_secret`,`two_factor_recovery_codes`,`two_factor_confirmed_at`,`avator`,`active`,`remember_token`,`deleted_at`,`created_at`,`updated_at`) values (1,'Super','Admin','',' Super Admin','superadmin@admin.com','2023-04-05 10:04:40','$2y$10$iLhL7.4wUGKR897MPTTBsuL/fpgNWhstuY/Wa9V5y0JJWQ429gwey',NULL,NULL,NULL,'profiles/5ewJaQ8gCzxzI2NCG7CIlJxi8lUENDoMjAIPwoPb.jpg','1',NULL,NULL,'2023-03-05 10:04:40','2023-04-08 09:20:32'),(2,'Just','Admin','','Admin','admin@admin.com','2023-04-05 10:04:40','$2y$10$1CqgN6PzIMGEKvJePi4mce/xDMAqPuCKRF.xIzGl7Z4QAVmq5wmo2',NULL,NULL,NULL,'default_avator.png','1',NULL,NULL,'2023-04-05 10:04:40','2023-04-05 10:04:40'),(3,'Just','Writer','',' Just Writer','writer@admin.com','2023-04-05 10:04:40','$2y$10$afR3zqQw1Lu42BVXv/stjO1LWg9bf.k6LRhj2.PNK.dAMgzBWwSVS',NULL,NULL,NULL,'profiles/ST4qJ3vWjPRt9WqlgUKjznNSVjtGtlAzJnNE5CIV.png','1',NULL,NULL,'2023-06-05 10:04:40','2023-04-10 07:54:07'),(4,'Just','User.','',' Just User.','user@admin.com','2023-04-05 10:04:40','$2y$10$jUkkJUvFFmYAizYB0IDx.e.NEtIkBQIxbjp7Ra4JY6R4sOZpzesB2',NULL,NULL,NULL,'default_avator.png','1',NULL,NULL,'2023-06-05 10:04:40','2023-04-15 12:48:12'),(5,'John','Doe',NULL,' John Doe','jdoe@test.ke',NULL,'$2y$10$3094eOBY7FpQb0cA2Soi8.1WxdlDkMl7Cxm4HjuV05MK9fqNP/DAa',NULL,NULL,NULL,'profiles/rhw63g1cyW4VGLSunpOtaFtQaBIpkLZxvueCD7vO.jpg','0',NULL,NULL,'2023-09-08 08:52:39','2023-04-08 08:52:39'),(6,'Dylan','Richards',NULL,'Dylan Richards','maqosovuv@mailinator.com',NULL,'$2y$10$Ig82f1Xq2Ch7nDSBYRfffOu8kqsqPbp/z.wTBFvFvVYSUXy7xyDaG',NULL,NULL,NULL,'default_avator.png','0',NULL,NULL,'2023-04-13 16:12:34','2023-04-13 16:12:34'),(7,'Leigh','Marsh',NULL,'Leigh Marsh','pajera@mailinator.com',NULL,'$2y$10$G2T5CSLKeL.dfI7zNmFWmOOlorVTRyIrA.gHLfB..WUlGjEojY9uK',NULL,NULL,NULL,'default_avator.png','0',NULL,NULL,'2023-04-13 17:11:47','2023-04-13 17:11:47'),(8,'Laura','Leon',NULL,'Laura Leon','hozoceq@mailinator.com',NULL,'$2y$10$Ih0CflliBCxWC9n.Vo.62.4d5l5KgBo4gdTJf0/dIgx492wQbfV6C',NULL,NULL,NULL,'default_avator.png','0',NULL,NULL,'2023-04-13 17:19:48','2023-04-13 17:19:48'),(9,'Sophia','Mcknight',NULL,'Sophia Mcknight','sagudisa@mailinator.com',NULL,'$2y$10$fJyLkgt0F4hV7zaRgqCcY.PDc3Xos2BoRosYihUIay1B3bQrve56.',NULL,NULL,NULL,'default_avator.png','0',NULL,NULL,'2023-04-13 17:22:00','2023-04-13 17:22:00'),(10,'Dane','Harrison',NULL,' Dane Harrison','mogi@mailinator.com',NULL,'$2y$10$1xkHNRUBZ2tQgb5p1dDKnuZlzQE7MUirJDd.q/n5MuM5fgW026bSi',NULL,NULL,NULL,'default_avator.png','0',NULL,NULL,'2023-04-13 17:37:41','2023-04-13 17:37:41'),(11,'Tanner','Schultz',NULL,' Tanner Schultz','pudep@mailinator.com',NULL,'$2y$10$gXS7utBp3awHJ54FIuJlyOUWVBmOU2R8eumYgrBJQDaPk47HpHZZG',NULL,NULL,NULL,'default_avator.png','0',NULL,NULL,'2023-04-13 18:21:46','2023-04-13 18:21:46');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
