-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.31 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for digikala.db
CREATE DATABASE IF NOT EXISTS `digikala.db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci */;
USE `digikala.db`;

-- Dumping structure for table digikala.db.addresses
CREATE TABLE IF NOT EXISTS `addresses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `tellPhone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cellPhone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `addresses_seller_id_foreign` (`seller_id`),
  KEY `addresses_province_id_foreign` (`province_id`),
  KEY `addresses_city_id_foreign` (`city_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.addressesadmin
CREATE TABLE IF NOT EXISTS `addressesadmin` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_id` int(10) unsigned DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`),
  KEY `admins_profile_id_foreign` (`profile_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.adminsfinancial
CREATE TABLE IF NOT EXISTS `adminsfinancial` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) unsigned NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `nameOfAccountHolder` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shabaNumber` varchar(26) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `adminsfinancial_admin_id_foreign` (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.adminsprofile
CREATE TABLE IF NOT EXISTS `adminsprofile` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) unsigned NOT NULL,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationalCode` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `adminsprofile_admin_id_foreign` (`admin_id`),
  KEY `adminsprofile_picture_id_foreign` (`picture_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.attributegroup_category
CREATE TABLE IF NOT EXISTS `attributegroup_category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `attributeGroup_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `attributegroup_category_category_id_foreign` (`category_id`),
  KEY `attributegroup_category_attributegroup_id_foreign` (`attributeGroup_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.attributesgroup
CREATE TABLE IF NOT EXISTS `attributesgroup` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.attributesvalue
CREATE TABLE IF NOT EXISTS `attributesvalue` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attributeGroup_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `attributesvalue_attributegroup_id_foreign` (`attributeGroup_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.attributevalue_product
CREATE TABLE IF NOT EXISTS `attributevalue_product` (
  `attributeValue_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `attributevalue_product_attributevalue_id_foreign` (`attributeValue_id`),
  KEY `attributevalue_product_product_id_foreign` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `brands_photo_id_foreign` (`photo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.calenders
CREATE TABLE IF NOT EXISTS `calenders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `seller_id` int(10) unsigned NOT NULL,
  `closingDate` date NOT NULL,
  `sttus` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ok',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `calenders_seller_id_foreign` (`seller_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `meta_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.category_product
CREATE TABLE IF NOT EXISTS `category_product` (
  `category_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  KEY `category_product_category_id_foreign` (`category_id`),
  KEY `category_product_product_id_foreign` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.cities
CREATE TABLE IF NOT EXISTS `cities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cities_province_id_foreign` (`province_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_product_id_foreign` (`product_id`),
  KEY `comments_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.contracts
CREATE TABLE IF NOT EXISTS `contracts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `seller_id` double unsigned NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'issued',
  `controctStart` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contractEnd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoiceCalculationInterval` int(11) NOT NULL DEFAULT '30',
  `billingPaymentInterval` int(11) NOT NULL DEFAULT '30',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contracts_seller_id_foreign` (`seller_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.coupons
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.documents
CREATE TABLE IF NOT EXISTS `documents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sellerCode` int(10) unsigned NOT NULL,
  `photo_id` int(10) unsigned NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'پیش فرض',
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `expired` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_sellercode_foreign` (`sellerCode`),
  KEY `documents_photo_id_foreign` (`photo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.document_photo
CREATE TABLE IF NOT EXISTS `document_photo` (
  `photo_id` int(10) unsigned DEFAULT NULL,
  `document_id` int(10) unsigned DEFAULT NULL,
  KEY `document_photo_photo_id_foreign` (`photo_id`),
  KEY `document_photo_document_id_foreign` (`document_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.favorites
CREATE TABLE IF NOT EXISTS `favorites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `favorites_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.financials
CREATE TABLE IF NOT EXISTS `financials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `seller_id` int(10) unsigned NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `nameOfAccountHolder` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shabaNumber` varchar(26) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `financials_seller_id_foreign` (`seller_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=457 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `amount` double(8,2) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.order_product
CREATE TABLE IF NOT EXISTS `order_product` (
  `order_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `qty` int(11) NOT NULL,
  KEY `order_product_order_id_foreign` (`order_id`),
  KEY `order_product_product_id_foreign` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.password_seller_reset
CREATE TABLE IF NOT EXISTS `password_seller_reset` (
  `email` varchar(250) COLLATE utf8mb4_persian_ci NOT NULL,
  `token` text COLLATE utf8mb4_persian_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.photos
CREATE TABLE IF NOT EXISTS `photos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `originalName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.photo_product
CREATE TABLE IF NOT EXISTS `photo_product` (
  `photo_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  KEY `photo_product_photo_id_foreign` (`photo_id`),
  KEY `photo_product_product_id_foreign` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `price` double(8,2) NOT NULL,
  `discount_price` double(8,2) DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(10) unsigned NOT NULL,
  `admin_id` int(10) unsigned NOT NULL,
  `seller_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_sku_unique` (`sku`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `products_brand_id_foreign` (`brand_id`),
  KEY `products_seller_id_foreign` (`seller_id`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_admin_id_foreign` (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `seller_id` double unsigned NOT NULL,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameStore` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationalCode` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VAT` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_id` int(10) unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_seller_id_foreign` (`seller_id`),
  KEY `profiles_logo_id_foreign` (`logo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.provinces
CREATE TABLE IF NOT EXISTS `provinces` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.regcopies
CREATE TABLE IF NOT EXISTS `regcopies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `seller_id` int(10) unsigned NOT NULL,
  `registerCode` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acceptCode` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `regcopies_email_unique` (`email`),
  UNIQUE KEY `regcopies_phone_unique` (`phone`),
  KEY `regcopies_seller_id_foreign` (`seller_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.sellers
CREATE TABLE IF NOT EXISTS `sellers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sellerCode` int(10) unsigned NOT NULL,
  `profile_id` int(10) unsigned DEFAULT NULL,
  `financial_id` int(10) unsigned DEFAULT NULL,
  `address_id` int(10) unsigned DEFAULT NULL,
  `contract_id` int(10) unsigned DEFAULT NULL,
  `document_id` int(10) unsigned DEFAULT NULL,
  `calender_id` int(10) unsigned DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sellers_email_unique` (`email`),
  KEY `sellers_profile_id_foreign` (`profile_id`),
  KEY `sellers_financial_id_foreign` (`financial_id`),
  KEY `sellers_address_id_foreign` (`address_id`),
  KEY `sellers_contract_id_foreign` (`contract_id`),
  KEY `sellers_document_id_foreign` (`document_id`),
  KEY `sellers_calender_id_foreign` (`calender_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table digikala.db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
