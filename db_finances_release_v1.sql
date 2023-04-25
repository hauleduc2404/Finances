/*
 Navicat Premium Data Transfer

 Source Server         : finances_master
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : 103.130.218.51:3306
 Source Schema         : finances

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 28/10/2022 16:10:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admins_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (1, 'admin', 'admin', '$2y$10$P1eHGBkieeqsr.jbXlfkDOp9zx/Ut4Ymx3JF220D9XvcpBds4DxGq', '4pPqMnbPJ99shndmDzyZghSc2MKRYH0c0ORJtl38cP3XMinXwgGD01AEkDVh', NULL, NULL);

-- ----------------------------
-- Table structure for domain_names
-- ----------------------------
DROP TABLE IF EXISTS `domain_names`;
CREATE TABLE `domain_names`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of domain_names
-- ----------------------------
INSERT INTO `domain_names` VALUES (1, 'MB CREDIT', NULL, '2022-10-23 21:13:36');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for featured_posts
-- ----------------------------
DROP TABLE IF EXISTS `featured_posts`;
CREATE TABLE `featured_posts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activate` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of featured_posts
-- ----------------------------

-- ----------------------------
-- Table structure for kyc_banks
-- ----------------------------
DROP TABLE IF EXISTS `kyc_banks`;
CREATE TABLE `kyc_banks`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `card_identity_owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_placeholder_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_vendor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `verify_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kyc_banks
-- ----------------------------

-- ----------------------------
-- Table structure for kyc_identities
-- ----------------------------
DROP TABLE IF EXISTS `kyc_identities`;
CREATE TABLE `kyc_identities`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `identify_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `identify_back_side_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `identify_front_side_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `identify_portrait_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `verify_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kyc_identities
-- ----------------------------

-- ----------------------------
-- Table structure for kyc_infos
-- ----------------------------
DROP TABLE IF EXISTS `kyc_infos`;
CREATE TABLE `kyc_infos`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `trinh_do_hoc_van` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thu_nhap_ca_nhan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `muc_dich_vay` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_nha_cua_khong` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_xe_co_khong` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tien_luong_hang_thang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi_chi_tiet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_dinh_ho_ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_dinh_sdt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_dinh_moi_quan_he` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_dinh_2_ho_ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gia_dinh_2_sdt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gia_dinh_2_moi_quan_he` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `verify_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kyc_infos
-- ----------------------------

-- ----------------------------
-- Table structure for kyc_signatures
-- ----------------------------
DROP TABLE IF EXISTS `kyc_signatures`;
CREATE TABLE `kyc_signatures`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `signature` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `verify_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kyc_signatures
-- ----------------------------

-- ----------------------------
-- Table structure for landing_about_us
-- ----------------------------
DROP TABLE IF EXISTS `landing_about_us`;
CREATE TABLE `landing_about_us`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `commit_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `commit_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `commit_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `commit_4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of landing_about_us
-- ----------------------------
INSERT INTO `landing_about_us` VALUES (1, NULL, NULL, 'Công ty chúng tôi', 'Làm việc hiểu quả, nhanh chóng, chất lượng', 'Fast Loan', 'Less Paperwork', 'Less Fee', 'Less Interest', '2022-10-22 19:15:44', '2022-10-22 15:25:53');

-- ----------------------------
-- Table structure for landing_apply_loans
-- ----------------------------
DROP TABLE IF EXISTS `landing_apply_loans`;
CREATE TABLE `landing_apply_loans`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activate` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of landing_apply_loans
-- ----------------------------

-- ----------------------------
-- Table structure for landing_intros
-- ----------------------------
DROP TABLE IF EXISTS `landing_intros`;
CREATE TABLE `landing_intros`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of landing_intros
-- ----------------------------
INSERT INTO `landing_intros` VALUES (1, 'Mua bán đất', 'Hôm nay là một ngày đẹp trời, thích hợp để mua một lô đất. Thất may bên em có vài lô đất chính chủ mọi người quan tâm có thể liên hệ em', 'https://finances.iapserver.com/profile', NULL, '2022-10-22 22:02:34');
INSERT INTO `landing_intros` VALUES (2, 'Cho vay trả góp', 'Bên em  cung cấp đủ thể loại cho vay. Không cầ n thế cháp,  lãi cực thấp dành cho nhưng ai quan tâm. Đảm bảo về mặt tin cậy và nhanh chóng cho mọi nhà.', 'https://finances.iapserver.com/profile', NULL, '2022-10-22 22:02:44');

-- ----------------------------
-- Table structure for landing_loan_advisers
-- ----------------------------
DROP TABLE IF EXISTS `landing_loan_advisers`;
CREATE TABLE `landing_loan_advisers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activate` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of landing_loan_advisers
-- ----------------------------
INSERT INTO `landing_loan_advisers` VALUES (1, 'Mua bán đất', 'Có cầm cố giấy tờ tại đây', 'Hôm nay là một ngày đẹp trời, thích hợp để mua một lô đất. Thất may bên em có vài lô đất chính chủ mọi người quan tâm có thể liên hệ em', 'ABCZ', 'VanA123345@gmail.com', '0985647822', 1, NULL, NULL);

-- ----------------------------
-- Table structure for landing_loan_calculators
-- ----------------------------
DROP TABLE IF EXISTS `landing_loan_calculators`;
CREATE TABLE `landing_loan_calculators`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `interest_rate` double(8, 2) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NULL DEFAULT NULL,
  `activate` tinyint(1) NOT NULL,
  `landing_service_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of landing_loan_calculators
-- ----------------------------
INSERT INTO `landing_loan_calculators` VALUES (1, 1.00, '2022-09-26 00:00:00', '2022-10-27 00:00:00', 1, 2, NULL, NULL);

-- ----------------------------
-- Table structure for landing_our_teams
-- ----------------------------
DROP TABLE IF EXISTS `landing_our_teams`;
CREATE TABLE `landing_our_teams`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activate` tinyint(1) NOT NULL,
  `landing_service_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of landing_our_teams
-- ----------------------------

-- ----------------------------
-- Table structure for landing_practive_area_items
-- ----------------------------
DROP TABLE IF EXISTS `landing_practive_area_items`;
CREATE TABLE `landing_practive_area_items`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `activate` tinyint(1) NOT NULL,
  `landing_practive_area_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of landing_practive_area_items
-- ----------------------------

-- ----------------------------
-- Table structure for landing_practive_areas
-- ----------------------------
DROP TABLE IF EXISTS `landing_practive_areas`;
CREATE TABLE `landing_practive_areas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `activate` tinyint(1) NOT NULL,
  `landing_service_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of landing_practive_areas
-- ----------------------------

-- ----------------------------
-- Table structure for landing_processes
-- ----------------------------
DROP TABLE IF EXISTS `landing_processes`;
CREATE TABLE `landing_processes`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `activate` tinyint(1) NOT NULL,
  `landing_service_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of landing_processes
-- ----------------------------

-- ----------------------------
-- Table structure for landing_service_blocks
-- ----------------------------
DROP TABLE IF EXISTS `landing_service_blocks`;
CREATE TABLE `landing_service_blocks`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `icon` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activate` tinyint(1) NOT NULL,
  `landing_service_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of landing_service_blocks
-- ----------------------------

-- ----------------------------
-- Table structure for landing_services
-- ----------------------------
DROP TABLE IF EXISTS `landing_services`;
CREATE TABLE `landing_services`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_order` int NOT NULL,
  `activate` tinyint(1) NOT NULL,
  `service_type` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of landing_services
-- ----------------------------
INSERT INTO `landing_services` VALUES (1, 'Tiêu đề 1', 1, 1, 2, 'Nội dung 1', NULL, NULL);
INSERT INTO `landing_services` VALUES (2, 'Có Vay Có Trả', 1, 1, 1, 'Cần gì có đó chính là phương châm phục vụ khách hàng của chúng tôi.', NULL, NULL);

-- ----------------------------
-- Table structure for landing_sliders
-- ----------------------------
DROP TABLE IF EXISTS `landing_sliders`;
CREATE TABLE `landing_sliders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_order` int NOT NULL,
  `activate` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of landing_sliders
-- ----------------------------

-- ----------------------------
-- Table structure for loans
-- ----------------------------
DROP TABLE IF EXISTS `loans`;
CREATE TABLE `loans`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `loan_money` double(16, 2) NOT NULL,
  `interest_rate` double(4, 3) NOT NULL DEFAULT 0.108,
  `duration_month` int NOT NULL,
  `is_activate` tinyint(1) NOT NULL DEFAULT 1,
  `time_verify` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message_withdraw` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of loans
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (2, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (4, '2022_10_12_034126_create_admins_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_10_14_044423_create_landing_intros_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_10_14_044710_create_landing_services_table', 1);
INSERT INTO `migrations` VALUES (7, '2022_10_14_044942_create_landing_service_blocks_table', 1);
INSERT INTO `migrations` VALUES (8, '2022_10_14_100618_create_landing_about_us_table', 1);
INSERT INTO `migrations` VALUES (9, '2022_10_17_082835_create_kyc_signatures_table', 1);
INSERT INTO `migrations` VALUES (10, '2022_10_17_082846_create_kyc_banks_table', 1);
INSERT INTO `migrations` VALUES (11, '2022_10_17_082904_create_kyc_infos_table', 1);
INSERT INTO `migrations` VALUES (12, '2022_10_17_082921_create_kyc_identities_table', 1);
INSERT INTO `migrations` VALUES (13, '2022_10_17_999999_create_users_table', 1);
INSERT INTO `migrations` VALUES (14, '2022_10_19_063953_create_loans_table', 1);
INSERT INTO `migrations` VALUES (15, '2022_10_19_064103_create_payers_table', 1);
INSERT INTO `migrations` VALUES (16, '2022_10_21_175910_create_settings_table', 1);
INSERT INTO `migrations` VALUES (17, '2022_10_22_100424_create_landing_process_table', 1);
INSERT INTO `migrations` VALUES (18, '2022_10_22_100453_create_landing_practive_area_table', 1);
INSERT INTO `migrations` VALUES (19, '2022_10_22_100459_create_landing_practive_area_item_table', 1);
INSERT INTO `migrations` VALUES (20, '2022_10_22_100520_create_landing_our_team_table', 1);
INSERT INTO `migrations` VALUES (21, '2022_10_22_100541_create_landing_loan_calculator_table', 1);
INSERT INTO `migrations` VALUES (22, '2022_10_22_100554_create_landing_apply_loan_table', 1);
INSERT INTO `migrations` VALUES (23, '2022_10_22_100604_create_landing_loan_adviser_table', 1);
INSERT INTO `migrations` VALUES (24, '2022_10_22_100614_create_landing_sliders_table', 1);
INSERT INTO `migrations` VALUES (25, '2022_10_22_100750_create_featured_posts_table', 1);
INSERT INTO `migrations` VALUES (26, '2022_10_23_022348_create_domain_name_table', 2);
INSERT INTO `migrations` VALUES (27, '2022_10_24_140057_add_password_withdraw_field_to_setting_table', 3);
INSERT INTO `migrations` VALUES (28, '2022_10_24_151238_add_more_field_to_loan_table', 4);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for payers
-- ----------------------------
DROP TABLE IF EXISTS `payers`;
CREATE TABLE `payers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `loan_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `money_paid` double(16, 2) NOT NULL,
  `interest` double(8, 2) NOT NULL,
  `pay_month` int NOT NULL,
  `transaction_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of payers
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `loan_month` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3, 6, 9, 12',
  `interest_rate` double(4, 3) NOT NULL DEFAULT 0.108,
  `min_loan` double(16, 2) NOT NULL DEFAULT 0.00,
  `max_loan` double(16, 2) NOT NULL DEFAULT 0.00,
  `limit_per_switch_loan` double(16, 2) NOT NULL DEFAULT 1000.00,
  `support_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `withdraw_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '123456',
  `default_message_withdraw` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tiến độ cho vay',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, '3,6,9,12,18,24,36', 0.108, 30000000.00, 200000000.00, 10000000.00, 'https://zalo.me/', '2022-10-22 17:31:23', '2022-10-25 13:00:19', '123456', 'Tiến độ cho vay');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_phone_unique`(`phone` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
