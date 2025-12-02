-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table nursing-poltekkes.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nursing-poltekkes.cache: ~2 rows (approximately)
DELETE FROM `cache`;
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
	('laravel-cache-admin-nursing-polkesda@example.com|127.0.0.1', 'i:1;', 1760246147),
	('laravel-cache-admin-nursing-polkesda@example.com|127.0.0.1:timer', 'i:1760246147;', 1760246147);

-- Dumping structure for table nursing-poltekkes.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nursing-poltekkes.cache_locks: ~0 rows (approximately)
DELETE FROM `cache_locks`;

-- Dumping structure for table nursing-poltekkes.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nursing-poltekkes.users: ~2 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Test User', 'test@example.com', '2025-09-03 00:29:35', '$2y$12$PIz35cW/CFr2yWwYKn1Asu3Qdjh4bzvZh0c6c6KPRZKZbXvRwdC/a', 'Cml2poxdWz', '2025-09-03 00:29:35', '2025-09-03 00:29:35'),
	(2, 'Admin', 'admin-nursing-polkesda@mail.com', NULL, '$2y$12$.cDWd667KUa3XzTad4HA1uaG2yi5EFAOxrlqFRATcmFWCX9zfXJDO', NULL, NULL, NULL);

-- Dumping structure for table nursing-poltekkes.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nursing-poltekkes.categories: ~0 rows (approximately)
DELETE FROM `categories`;
INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'laudantium', 'possimus-vel-non-repudiandae-iusto-et-aliquid', NULL, '2025-09-03 00:29:36', '2025-09-03 00:29:36');

-- Dumping structure for table nursing-poltekkes.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
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

-- Dumping data for table nursing-poltekkes.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table nursing-poltekkes.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nursing-poltekkes.jobs: ~0 rows (approximately)
DELETE FROM `jobs`;

-- Dumping structure for table nursing-poltekkes.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nursing-poltekkes.job_batches: ~0 rows (approximately)
DELETE FROM `job_batches`;

-- Dumping structure for table nursing-poltekkes.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nursing-poltekkes.migrations: ~0 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2025_08_07_000000_create_categories_table', 1),
	(5, '2025_08_07_064214_create_posts_table', 1);

-- Dumping structure for table nursing-poltekkes.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nursing-poltekkes.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table nursing-poltekkes.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drive_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `category_id` bigint unsigned DEFAULT NULL,
  `author_id` bigint unsigned NOT NULL,
  `status` enum('draft','published') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_category_id_foreign` (`category_id`),
  KEY `posts_author_id_foreign` (`author_id`),
  CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nursing-poltekkes.posts: ~20 rows (approximately)
DELETE FROM `posts`;
INSERT INTO `posts` (`id`, `title`, `slug`, `excerpt`, `content`, `featured_image`, `drive_link`, `type`, `category_id`, `author_id`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Sint est expedita qui autem.', 'sint-est-expedita-qui-autem-7770', 'Soluta quo voluptas corporis. Voluptas et accusamus nobis repellendus. In nisi quia et.\n\nCumque et labore rerum quos et inventore. Illum qui quisquam id sit expedita. Dolorum omnis dicta assumenda qui...', 'Soluta quo voluptas corporis. Voluptas et accusamus nobis repellendus. In nisi quia et.\n\nCumque et labore rerum quos et inventore. Illum qui quisquam id sit expedita. Dolorum omnis dicta assumenda quia aliquam est dolor qui. Delectus dolore dolorem consequuntur voluptatem.\n\nSed fugit aut numquam enim minus molestiae. Voluptatibus ut consequatur eaque repudiandae ea nihil cupiditate. Ullam et aperiam et velit in. Aut quam et perferendis repudiandae error id pariatur laudantium.\n\nSunt et expedita at repellendus et similique facilis est. Unde nobis consequatur nesciunt ipsam. Cum atque consequatur laboriosam et laudantium unde. Quo adipisci ea reiciendis.\n\nTenetur et est esse quas consequatur. Quod veritatis ea repellat et tempora magni. Labore vitae quos perferendis sint animi consectetur deserunt.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:36', '2025-09-03 00:29:36'),
	(2, 'Hic occaecati voluptate et expedita ut.', 'hic-occaecati-voluptate-et-expedita-ut-1084', 'Dignissimos placeat aut ducimus ducimus. Enim omnis enim et saepe quia. Numquam in iure qui qui explicabo non. Voluptatem ab dolores quia et.\n\nOdit commodi et maiores soluta exercitationem. Ratione qu...', 'Dignissimos placeat aut ducimus ducimus. Enim omnis enim et saepe quia. Numquam in iure qui qui explicabo non. Voluptatem ab dolores quia et.\n\nOdit commodi et maiores soluta exercitationem. Ratione qui et ut laboriosam explicabo totam aspernatur accusantium. Et est perspiciatis occaecati est.\n\nAperiam veritatis commodi rerum soluta consequuntur alias. Quae voluptatem et quam.\n\nDucimus sit enim rerum pariatur perferendis eaque rerum. Ea suscipit ut quam aut est. Magnam odio atque consequatur quo maiores maiores. Aut recusandae officiis quia ut.\n\nMinima similique sunt ut pariatur est labore. Ut quibusdam et aut rerum debitis doloremque molestias. Ipsam et ipsum sunt dolores.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:36', '2025-09-03 00:29:36'),
	(3, 'Deleniti beatae error expedita libero aut aspernatur.', 'deleniti-beatae-error-expedita-libero-aut-aspernatur-6331', 'Est facilis voluptatem et. Nihil officia id dolorum aliquid quo in. Ipsam fugiat velit minima eius.\n\nRatione voluptatem magni sit impedit soluta qui. Reiciendis quia quasi voluptatem ut. Error accusam...', 'Est facilis voluptatem et. Nihil officia id dolorum aliquid quo in. Ipsam fugiat velit minima eius.\n\nRatione voluptatem magni sit impedit soluta qui. Reiciendis quia quasi voluptatem ut. Error accusamus sunt aut quia.\n\nIusto adipisci in sint et aut quo. A est alias esse rerum. Esse libero sit aspernatur non laudantium. Tempora quaerat quia quo et voluptatem blanditiis sunt.\n\nEt voluptatibus est dolore molestias provident et praesentium. Ratione qui voluptates et reiciendis magnam cum sint. Recusandae officiis culpa quod iure.\n\nUt nobis eveniet et et. Et aut qui minima rerum ab ex id et. Quia qui eligendi error laudantium.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:36', '2025-09-03 00:29:36'),
	(4, 'Dolorum minima veritatis itaque.', 'dolorum-minima-veritatis-itaque-3824', 'Totam eum accusamus doloribus vero ea aut. Expedita quis rerum qui aut. Possimus temporibus voluptas non cumque quia aut et. Ipsam ea facilis ut pariatur voluptas et.\n\nQui eum similique earum distinct...', 'Totam eum accusamus doloribus vero ea aut. Expedita quis rerum qui aut. Possimus temporibus voluptas non cumque quia aut et. Ipsam ea facilis ut pariatur voluptas et.\n\nQui eum similique earum distinctio. Officiis nemo odit labore beatae qui.\n\nSequi magnam possimus eveniet quo voluptatem modi atque. Recusandae dolores aut alias est ipsam. Est architecto minus voluptates.\n\nAperiam fugit modi et dolores. Sunt minus numquam iure esse quis occaecati. Itaque iste minus rem. Ad porro nihil adipisci voluptate unde quis. Facilis ut iusto dignissimos et.\n\nLaudantium porro culpa distinctio consequuntur sunt. Sed quaerat est dolorem eos. Eos eveniet molestias vero odio optio dolor id. Consectetur quis deleniti eos repellat cum cum. Consequuntur iure et numquam dolores quasi alias unde.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:36', '2025-09-03 00:29:36'),
	(5, 'Totam quae officia qui.', 'totam-quae-officia-qui-9931', 'Suscipit quo sed aut voluptas hic perspiciatis. Deserunt qui sed sit molestias sit commodi. Saepe inventore enim et rem. Maiores sit nesciunt accusamus consequatur molestias autem.\n\nVoluptatum quis cu...', 'Suscipit quo sed aut voluptas hic perspiciatis. Deserunt qui sed sit molestias sit commodi. Saepe inventore enim et rem. Maiores sit nesciunt accusamus consequatur molestias autem.\n\nVoluptatum quis cumque a qui sint corporis est dolorum. Ullam aliquam qui voluptatum. Omnis beatae nam dignissimos voluptatem eum illum. Est sed pariatur deserunt ad exercitationem inventore ipsa. Perspiciatis similique voluptate animi sunt sapiente.\n\nIncidunt aut omnis qui occaecati et cum minima rerum. Eum velit molestiae odit velit aperiam. Molestias non possimus ratione minus qui. Maxime unde itaque nam maiores dignissimos sunt accusamus id.\n\nDistinctio molestias non cupiditate id id quo vitae. Et et rerum vero iusto. Reiciendis qui et est quasi.\n\nReprehenderit optio sit debitis et eos est. Ex laborum amet rerum quos ipsa totam. Id beatae non sit praesentium. Nemo et quaerat tenetur qui aspernatur repudiandae culpa. Cumque architecto ut dolorum quasi iusto.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:36', '2025-09-03 00:29:36'),
	(6, 'Omnis suscipit neque numquam eos minima labore.', 'omnis-suscipit-neque-numquam-eos-minima-labore-9001', 'Sapiente dolorem praesentium unde praesentium fugit. Eos animi omnis blanditiis quibusdam laborum praesentium. Voluptatibus harum numquam est rerum. Sapiente mollitia rerum dolorem dolorem et molestia...', 'Sapiente dolorem praesentium unde praesentium fugit. Eos animi omnis blanditiis quibusdam laborum praesentium. Voluptatibus harum numquam est rerum. Sapiente mollitia rerum dolorem dolorem et molestiae.\n\nCommodi inventore iusto quos autem quibusdam est. Error non deserunt sunt commodi ab incidunt omnis. Reprehenderit aut est rerum ad molestias.\n\nEum sit non et aut corporis. Non sequi vel vel necessitatibus enim facilis. Quibusdam iure nobis nihil nostrum quasi. Quia minus labore aut id vel mollitia ad.\n\nQuia ut dolores dolores quia non. Et qui voluptas et fugit eaque. Et velit harum qui aut est eaque.\n\nQuasi at vel qui adipisci. Pariatur sequi a tempore laudantium et voluptatem. Aut ipsa ut commodi sit reiciendis. Reprehenderit ut quis voluptate esse qui.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:36', '2025-09-03 00:29:36'),
	(7, 'Est ullam ullam consequatur aut.', 'est-ullam-ullam-consequatur-aut-6907', 'Non et provident dignissimos excepturi officiis rerum. Ipsum non quidem et id atque facere. Ea doloribus necessitatibus porro rem repellendus.\n\nDolores qui autem non nam dolore ut velit. Quo consequat...', 'Non et provident dignissimos excepturi officiis rerum. Ipsum non quidem et id atque facere. Ea doloribus necessitatibus porro rem repellendus.\n\nDolores qui autem non nam dolore ut velit. Quo consequatur id maxime quae quae iusto. Ex aliquid enim voluptas nihil et voluptate veniam.\n\nEt eos delectus vero et. Cupiditate non est a aut rerum molestiae iure rerum. Quam nihil voluptates quod sint dolore qui deleniti. Non et eveniet impedit voluptatem voluptatem ad modi.\n\nImpedit est reiciendis repellendus cum. Aliquam commodi inventore maiores voluptatem quasi doloribus. Dolores dolore voluptatem id mollitia eos ipsa rerum.\n\nA accusantium est culpa exercitationem. Corporis quidem numquam libero nobis qui accusantium aut non. Eius in laborum magni numquam quas. Voluptatem dolorem consequuntur qui est.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:36', '2025-09-03 00:29:36'),
	(8, 'Harum sit eum ut.', 'harum-sit-eum-ut-8310', 'Quia facilis dolorum eum quas exercitationem. Laborum officia laboriosam mollitia qui id. Enim voluptatem porro et ut.\n\nUt a sequi est et dicta. Qui totam cupiditate libero nihil expedita quia. Repudi...', 'Quia facilis dolorum eum quas exercitationem. Laborum officia laboriosam mollitia qui id. Enim voluptatem porro et ut.\n\nUt a sequi est et dicta. Qui totam cupiditate libero nihil expedita quia. Repudiandae hic omnis qui esse consequuntur ut.\n\nVelit reiciendis natus in. Eos aspernatur nesciunt adipisci. Non quos quia molestias est est.\n\nQuidem qui ipsum soluta temporibus odio facere laborum. Excepturi sunt quis dicta adipisci nesciunt. Aut voluptas corrupti velit. Voluptate molestiae tempora nisi laboriosam.\n\nRatione vel fuga quo minima impedit impedit maxime quo. Quas exercitationem et deleniti non. Placeat maiores illo voluptas corporis dolorem possimus. Officiis quos iste est quaerat.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:36', '2025-09-03 00:29:36'),
	(9, 'Saepe qui autem optio aperiam.', 'saepe-qui-autem-optio-aperiam-9201', 'Culpa necessitatibus beatae qui non. Qui quisquam corporis quibusdam repellendus. Voluptas doloribus excepturi tempora ut deserunt.\n\nProvident iusto deserunt sit nostrum. Perspiciatis quaerat expedita...', 'Culpa necessitatibus beatae qui non. Qui quisquam corporis quibusdam repellendus. Voluptas doloribus excepturi tempora ut deserunt.\n\nProvident iusto deserunt sit nostrum. Perspiciatis quaerat expedita est a eligendi molestiae voluptatem. Incidunt asperiores sed reprehenderit et. Quos numquam fugiat velit voluptates eos atque dolores.\n\nOfficiis quia natus incidunt neque inventore aut rem. Aut quod vel at laborum qui deleniti. Qui quis quaerat et et nobis eum. Vel vero et est quibusdam. Vel eos cum voluptatibus ut odio qui rerum.\n\nFugit quo laborum aut. Velit ea libero corrupti officia omnis. Sed beatae excepturi maxime perspiciatis. Quisquam et error beatae.\n\nLaboriosam soluta aperiam corporis consequuntur suscipit. Beatae ratione et deserunt consequuntur. Minima ipsa est laudantium itaque odit nisi voluptas.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:36', '2025-09-03 00:29:36'),
	(10, 'Officiis officiis officia hic sit.', 'officiis-officiis-officia-hic-sit-5318', 'Deserunt ut maiores consectetur quibusdam rem. Sint voluptate alias est fuga enim voluptatibus saepe voluptatem. Illo quibusdam a ut.\n\nLaboriosam eius quae est deserunt dolor sit. Qui nobis earum dolo...', 'Deserunt ut maiores consectetur quibusdam rem. Sint voluptate alias est fuga enim voluptatibus saepe voluptatem. Illo quibusdam a ut.\n\nLaboriosam eius quae est deserunt dolor sit. Qui nobis earum dolor eos vero dolor beatae. Excepturi vero sit quod et exercitationem consectetur sed. Tempore provident impedit repellat.\n\nSunt quos eos rerum et impedit. Repudiandae deserunt nulla numquam vitae aut voluptatem occaecati. Possimus animi sapiente optio odit. Vel blanditiis nulla corrupti. Ut ex iure doloremque earum laboriosam temporibus.\n\nNihil sapiente nihil corporis aut. Sapiente illum aut amet. Est quia aspernatur facilis dolorem. Labore exercitationem et voluptatem ipsum ut.\n\nVitae sapiente nemo quasi nisi ipsam. Quia quibusdam et quibusdam reprehenderit.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:36', '2025-09-03 00:29:36'),
	(11, 'Iusto atque voluptatem sit quo.', 'iusto-atque-voluptatem-sit-quo-8336', 'Sed possimus rerum ut sit. Quae minus eos voluptatem alias nisi molestiae. Id aspernatur et laborum adipisci incidunt.\n\nEt laudantium dolore nemo vel et cumque. Quia est velit suscipit. Veniam quo et...', 'Sed possimus rerum ut sit. Quae minus eos voluptatem alias nisi molestiae. Id aspernatur et laborum adipisci incidunt.\n\nEt laudantium dolore nemo vel et cumque. Quia est velit suscipit. Veniam quo et blanditiis nihil animi alias molestias est. Recusandae quo eos suscipit autem aliquid.\n\nRerum eum aliquid consequuntur repudiandae repudiandae atque. Blanditiis in est qui reprehenderit quam et. Hic distinctio ipsa rerum nesciunt. Fugit nulla nihil dolores veniam nemo totam debitis.\n\nNatus expedita aut reiciendis ea aut. Voluptas odio laborum quasi sunt occaecati reprehenderit minima. Sed commodi in eius animi dolorum esse atque incidunt.\n\nUt et ducimus repellat et commodi. Iste ducimus in repellat quia laudantium. Fuga cum voluptas velit sunt asperiores. Beatae dolor quia nam aut modi eum.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:36', '2025-09-03 00:29:36'),
	(12, 'Deserunt aut et et laudantium dicta.', 'deserunt-aut-et-et-laudantium-dicta-5165', 'Recusandae aut voluptatem accusantium qui sit officiis. Nostrum ut id dolorem necessitatibus. Quod neque eaque magnam veniam consectetur eveniet. Totam atque ut voluptatum est. Delectus suscipit place...', 'Recusandae aut voluptatem accusantium qui sit officiis. Nostrum ut id dolorem necessitatibus. Quod neque eaque magnam veniam consectetur eveniet. Totam atque ut voluptatum est. Delectus suscipit placeat dolorem neque.\n\nRem quis dolor vel et sit minima animi. Fugit cupiditate tempora inventore similique quos rerum fugit. Accusantium fugiat maxime temporibus rerum odit sit ad.\n\nQui autem id dolorum cumque tenetur enim in. Voluptas fugit natus mollitia alias.\n\nDolorum aut dolor itaque. Qui magnam sed porro et a exercitationem.\n\nQuia modi eos fuga delectus deserunt. Consequuntur dicta ullam at porro. Animi assumenda temporibus voluptatem pariatur explicabo pariatur eaque.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:36', '2025-09-03 00:29:36'),
	(13, 'Natus explicabo accusamus earum id est.', 'natus-explicabo-accusamus-earum-id-est-9450', 'Dolores impedit officiis porro nostrum doloremque in. Qui dicta sapiente ut qui.\n\nQuo reprehenderit provident enim iusto assumenda. Libero totam distinctio aut exercitationem. Culpa corrupti dolorem r...', 'Dolores impedit officiis porro nostrum doloremque in. Qui dicta sapiente ut qui.\n\nQuo reprehenderit provident enim iusto assumenda. Libero totam distinctio aut exercitationem. Culpa corrupti dolorem repellendus perspiciatis.\n\nQuo minus aut harum aut voluptate autem aspernatur. A dolores omnis unde sit eius occaecati qui vero. Ut beatae aut porro culpa quas et.\n\nQuidem dolores enim maiores facilis. Molestias delectus laborum suscipit sed reiciendis. Et doloribus mollitia et et et sit. Nihil molestiae id nostrum.\n\nOccaecati ut quaerat libero nemo itaque. Veritatis doloribus et dolores. Aut et earum fugiat. Ratione omnis ab aut id et ullam consequatur est.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:37', '2025-09-03 00:29:37'),
	(14, 'Dolor in eaque temporibus debitis non.', 'dolor-in-eaque-temporibus-debitis-non-7512', 'Qui officia dolore aliquid est. Est explicabo consequatur reprehenderit odit voluptatem reiciendis. Quibusdam ut rem culpa atque voluptatibus.\n\nSit et tempore error omnis dolores. Voluptas eum ad erro...', 'Qui officia dolore aliquid est. Est explicabo consequatur reprehenderit odit voluptatem reiciendis. Quibusdam ut rem culpa atque voluptatibus.\n\nSit et tempore error omnis dolores. Voluptas eum ad error quo cupiditate nobis. Recusandae est voluptates rerum eum omnis nobis.\n\nAdipisci laudantium molestiae cupiditate. Architecto debitis dolore et commodi architecto laboriosam consequatur. Accusamus voluptatem quae fuga beatae sed voluptatem illo. Rerum ea dolorem laborum et illum excepturi.\n\nId quisquam architecto occaecati ducimus quo laboriosam officiis. Qui placeat iure architecto nobis libero. Aspernatur est ipsa veritatis iusto vero.\n\nQuia sint distinctio id accusantium. Ipsa quod temporibus ut quia.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:37', '2025-09-03 00:29:37'),
	(15, 'Qui amet qui iste.', 'qui-amet-qui-iste-7220', 'Provident sit saepe iure. Eaque similique nihil magnam aperiam fugit. Ducimus ab ex placeat eum numquam corporis.\n\nEsse amet sapiente natus temporibus. Impedit vitae fugiat deleniti in non omnis non....', 'Provident sit saepe iure. Eaque similique nihil magnam aperiam fugit. Ducimus ab ex placeat eum numquam corporis.\n\nEsse amet sapiente natus temporibus. Impedit vitae fugiat deleniti in non omnis non. Nam repudiandae quam voluptatem dolores nisi minus.\n\nPerferendis sunt sapiente laboriosam est corrupti et reiciendis. Labore enim excepturi et qui consequatur. Sit voluptates inventore et.\n\nNihil consequatur sit sit autem officia. Ut quis dignissimos laborum ea eligendi et eum.\n\nDebitis molestiae hic doloribus qui reiciendis qui. Eveniet quam consequatur voluptatem velit mollitia atque earum. Sit similique hic consequatur quidem libero excepturi et.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:37', '2025-09-03 00:29:37'),
	(16, 'Facilis provident est quod sunt natus.', 'facilis-provident-est-quod-sunt-natus-7635', 'Vitae quo ad atque architecto harum rerum molestiae. Est blanditiis at ut quia quas est et id. Mollitia iure natus quaerat maiores nesciunt magnam magnam. Aut tempora sunt voluptatem. Ratione qui pers...', 'Vitae quo ad atque architecto harum rerum molestiae. Est blanditiis at ut quia quas est et id. Mollitia iure natus quaerat maiores nesciunt magnam magnam. Aut tempora sunt voluptatem. Ratione qui perspiciatis ullam eos accusantium.\n\nCum minima sint libero ducimus ipsum in ducimus nemo. Cum quisquam est qui quisquam eum expedita et. Enim dolor laudantium quae in. Atque quod qui voluptas aliquid fugit.\n\nEt ut dolorem eligendi et magnam dolor suscipit dignissimos. Ratione vero et adipisci impedit molestiae nihil ea. Optio et quia cumque. Vero quidem nulla et.\n\nEt quo qui provident. Cupiditate harum eos tenetur eius et distinctio minima. Excepturi eligendi neque odit veritatis et omnis.\n\nEt quia sed maxime laboriosam enim voluptas quas. Voluptatem eum rerum saepe at consequatur.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:37', '2025-09-03 00:29:37'),
	(17, 'Accusantium quod aliquam rem a tenetur.', 'accusantium-quod-aliquam-rem-a-tenetur-1373', 'Dolor animi sed non. Accusantium voluptatibus magnam quo et illo. Voluptas nihil maxime ad consectetur quis animi. Ipsa illum sit cupiditate ut rerum voluptatem.\n\nEt maxime modi ut magni voluptas vero...', 'Dolor animi sed non. Accusantium voluptatibus magnam quo et illo. Voluptas nihil maxime ad consectetur quis animi. Ipsa illum sit cupiditate ut rerum voluptatem.\n\nEt maxime modi ut magni voluptas vero vel. Enim occaecati recusandae officia architecto. Rerum magnam eius non harum perferendis dicta quis dolorem. Laboriosam repellat rerum ullam exercitationem sunt veritatis.\n\nVel eum neque quis accusantium tenetur. Voluptatum qui corporis enim quaerat.\n\nQuam voluptas cumque est voluptatem et laborum voluptates voluptatem. Vel voluptatum excepturi veritatis nihil corrupti dolore fugiat. Inventore tenetur voluptates aut exercitationem reprehenderit. Nam fuga excepturi doloremque nobis vel quod corporis.\n\nTemporibus dolorem ut dignissimos. Ea optio et sunt distinctio. Ea cumque cupiditate exercitationem. Dolorem esse aut eius provident et corrupti repudiandae. Aliquid sit asperiores et.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:37', '2025-09-03 00:29:37'),
	(18, 'Nisi et repellat quae quibusdam magni adipisci.', 'nisi-et-repellat-quae-quibusdam-magni-adipisci-1360', 'Ea quisquam enim omnis. Esse nemo in necessitatibus non ad voluptatem. Non et explicabo consequatur molestiae.\n\nDolorem id id minima ducimus eum id. In in natus est est est nemo. Reiciendis quia aperi...', 'Ea quisquam enim omnis. Esse nemo in necessitatibus non ad voluptatem. Non et explicabo consequatur molestiae.\n\nDolorem id id minima ducimus eum id. In in natus est est est nemo. Reiciendis quia aperiam minima ea accusamus vitae adipisci.\n\nAnimi et sed delectus corrupti vel quia. Esse ut omnis harum quia vel omnis. Pariatur est voluptas modi expedita omnis. Qui eveniet totam architecto earum. Reiciendis aut voluptas eos adipisci.\n\nIste magni ipsam nulla earum enim. Et libero non et iure amet id. Et qui nulla officiis doloremque et.\n\nEt aut alias ab at. Corrupti beatae optio magnam tempora repudiandae officiis iste. Dolorem porro recusandae aut autem occaecati quo porro odit. Magni corrupti consectetur totam ullam.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:37', '2025-09-03 00:29:37'),
	(19, 'Voluptatem at consequatur tempora nulla.', 'voluptatem-at-consequatur-tempora-nulla-2582', 'Nihil eum assumenda necessitatibus quae. Recusandae iste consequatur dolorem nemo possimus nemo adipisci.\n\nOfficia suscipit amet voluptatibus qui enim libero necessitatibus. Ea at ipsam voluptas tempo...', 'Nihil eum assumenda necessitatibus quae. Recusandae iste consequatur dolorem nemo possimus nemo adipisci.\n\nOfficia suscipit amet voluptatibus qui enim libero necessitatibus. Ea at ipsam voluptas tempora ea. Saepe cum vel non cum. Ut et sed molestiae sed.\n\nFugiat ducimus ratione perferendis natus et. Ratione veritatis aut odit sit rerum qui mollitia. Aut ipsa occaecati ea voluptate eaque. Et nesciunt occaecati iste quas.\n\nAd et quia dolores facilis quam. Non et rem voluptas. Libero vitae impedit minus nemo molestiae explicabo fuga. Rem fugit culpa hic quisquam.\n\nArchitecto eum eos odit et. Dignissimos non alias in quae eos enim. Consequuntur necessitatibus sit quisquam qui consequatur aut ad.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:37', '2025-09-03 00:29:37'),
	(20, 'Et quod non odio accusantium est.', 'et-quod-non-odio-accusantium-est-7597', 'Et veritatis est rerum sapiente eos quia et minus. Dolores ullam facilis eum a eos aliquid voluptatem deleniti. Temporibus et harum vel iste fugit laborum.\n\nOfficia cupiditate error quo vero. Repudian...', 'Et veritatis est rerum sapiente eos quia et minus. Dolores ullam facilis eum a eos aliquid voluptatem deleniti. Temporibus et harum vel iste fugit laborum.\n\nOfficia cupiditate error quo vero. Repudiandae voluptate ut et occaecati qui aut. Eos suscipit delectus a laudantium quia adipisci expedita. Molestiae adipisci occaecati aperiam eaque atque nesciunt.\n\nFacilis similique temporibus aut eum sequi aut. Et debitis earum non enim. Nostrum ut voluptate quia at veniam. Soluta quo enim laudantium tenetur voluptatum exercitationem molestias repellendus.\n\nQuo sed animi sint voluptas. Ex minima nostrum perferendis unde neque officia. Dolores omnis nisi et enim recusandae.\n\nConsequatur odio culpa labore et voluptatem mollitia qui. Quaerat beatae ut consequatur corrupti et fugiat. Aliquam saepe aliquam commodi in occaecati qui. Sint quae officia officiis quaerat aspernatur adipisci.', NULL, NULL, 'post', 1, 1, 'draft', '2025-09-03 00:29:37', '2025-09-03 00:29:37');

-- Dumping structure for table nursing-poltekkes.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nursing-poltekkes.sessions: ~2 rows (approximately)
DELETE FROM `sessions`;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('1IulL74c7v6yxIJNeMKY8qP3nbsmtW8H5T8aCUbt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:145.0) Gecko/20100101 Firefox/145.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaUtNbDdZM1o4bVlJWHlHTENwa2ZIWDFzalJibWhwZWhYWk5jMUo1dyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9udXJzaW5nLXBvbHRla2tlcy50ZXN0L2xvYW4tZm9ybSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1764221654),
	('Qt6p5yYCo1vx8v8zPaegXM0UQnNUUNQqkcLtdpkY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:145.0) Gecko/20100101 Firefox/145.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTUJkWDliTkNxbExDcURYdzJVanlnZk8yUDZEdENuRzF3U2I4SjhRUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly9udXJzaW5nLXBvbHRla2tlcy50ZXN0L2xhYm9yYXRvcnktc2NoZWR1bGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1764221108);



/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
