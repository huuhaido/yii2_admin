/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : yii2

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-06-11 16:53:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin_menu`
-- ----------------------------
DROP TABLE IF EXISTS `admin_menu`;
CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `rank` tinyint(4) NOT NULL DEFAULT '1',
  `properties_new` tinyint(4) NOT NULL DEFAULT '0',
  `category` varchar(64) DEFAULT NULL,
  `type` varchar(64) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link_url` varchar(64) DEFAULT NULL,
  `left_right` tinyint(4) DEFAULT '0',
  `status` tinyint(1) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_menu
-- ----------------------------
INSERT INTO `admin_menu` VALUES ('1', 'main menu', '1', '0', '', '0', '', '', '', '', '0', '1', '2015-06-11 10:51:16', null);
INSERT INTO `admin_menu` VALUES ('2', 'Dashboard', '2', '0', '1', '1', '', '', 'icon-home', '', '0', '1', '2015-06-11 10:51:16', null);
INSERT INTO `admin_menu` VALUES ('3', 'Default Dashboard', '3', '0', '', '2', '', '', 'icon-bar-chart', 'dashboard/index', '0', '1', '2015-06-11 11:01:14', null);
INSERT INTO `admin_menu` VALUES ('4', 'New Dashboard #1', '3', '0', '', '2', '', '', 'icon-bulb', 'dashboard/index_2', '0', '1', '2015-06-11 11:07:40', null);
INSERT INTO `admin_menu` VALUES ('5', 'New Dashboard #2', '3', '0', '', '2', '', '', 'icon-graph', 'dashboard/index_3', '0', '1', '2015-06-11 11:11:28', null);
INSERT INTO `admin_menu` VALUES ('6', 'eCommerce', '2', '0', '1', '1', '', '', 'icon-basket', '', '0', '1', '2015-06-11 11:17:53', null);
INSERT INTO `admin_menu` VALUES ('7', 'Dashboard', '3', '0', '', '6', '', '', 'icon-home', 'ecommerce/index', '0', '1', '2015-06-11 11:19:59', null);
INSERT INTO `admin_menu` VALUES ('8', 'Orders', '3', '0', '', '6', '', '', 'icon-basket', 'adminmenu/create', '0', '1', '2015-06-11 11:21:39', null);

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1427940808');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1427940842');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'dohuuhai', '4JdkQy5hsEbPyUtjqAShHuINMRc2s55n', '$2y$13$CCLljz6dy9DIbjBUoWq4yO7Y8Z07cYlgLvaeBnI2K/DQaAyCC3T5S', null, 'philonganhvu@yahoo.com', '10', '1427941261', '1427941261');
