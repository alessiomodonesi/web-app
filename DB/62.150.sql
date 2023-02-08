# WordPress MySQL database migration
#
# Generated: Wednesday 8. February 2023 07:27 UTC
# Hostname: localhost
# Database: `wordpress`
# URL: //localhost/sandwech
# Path: /Applications/XAMPP/xamppfiles/htdocs/sandwech
# Tables: wp_commentmeta, wp_comments, wp_links, wp_options, wp_postmeta, wp_posts, wp_term_relationships, wp_term_taxonomy, wp_termmeta, wp_terms, wp_usermeta, wp_users
# Table Prefix: wp_
# Post Types: revision, page, post
# Protocol: http
# Multisite: false
# Subsite Export: false
# --------------------------------------------------------

/*!40101 SET NAMES utf8mb4 */;

SET sql_mode='NO_AUTO_VALUE_ON_ZERO';



#
# Delete any existing table `wp_commentmeta`
#

DROP TABLE IF EXISTS `wp_commentmeta`;


#
# Table structure of table `wp_commentmeta`
#

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;


#
# Data contents of table `wp_commentmeta`
#

#
# End of data contents of table `wp_commentmeta`
# --------------------------------------------------------



#
# Delete any existing table `wp_comments`
#

DROP TABLE IF EXISTS `wp_comments`;


#
# Table structure of table `wp_comments`
#

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT 0,
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT 0,
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT 0,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10))
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;


#
# Data contents of table `wp_comments`
#

#
# End of data contents of table `wp_comments`
# --------------------------------------------------------



#
# Delete any existing table `wp_links`
#

DROP TABLE IF EXISTS `wp_links`;


#
# Table structure of table `wp_links`
#

CREATE TABLE `wp_links` (
  `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) unsigned NOT NULL DEFAULT 1,
  `link_rating` int(11) NOT NULL DEFAULT 0,
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;


#
# Data contents of table `wp_links`
#

#
# End of data contents of table `wp_links`
# --------------------------------------------------------



#
# Delete any existing table `wp_options`
#

DROP TABLE IF EXISTS `wp_options`;


#
# Table structure of table `wp_options`
#

CREATE TABLE `wp_options` (
  `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`),
  KEY `autoload` (`autoload`)
) ENGINE=InnoDB AUTO_INCREMENT=2917 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;


#
# Data contents of table `wp_options`
#
INSERT INTO `wp_options` ( `option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://192.168.62.150', 'yes'),
(2, 'home', 'http://192.168.62.150', 'yes'),
(3, 'blogname', 'Sandwech', 'yes'),
(4, 'blogdescription', 'Sandwech web app', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'alessiomodo2004@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '0', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'j F Y', 'yes'),
(24, 'time_format', 'G:i', 'yes'),
(25, 'links_updated_date_format', 'j F Y G:i', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:92:{s:11:"^wp-json/?$";s:22:"index.php?rest_route=/";s:14:"^wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:21:"^index.php/wp-json/?$";s:22:"index.php?rest_route=/";s:24:"^index.php/wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:17:"^wp-sitemap\\.xml$";s:23:"index.php?sitemap=index";s:17:"^wp-sitemap\\.xsl$";s:36:"index.php?sitemap-stylesheet=sitemap";s:23:"^wp-sitemap-index\\.xsl$";s:34:"index.php?sitemap-stylesheet=index";s:48:"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$";s:75:"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]";s:34:"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$";s:47:"index.php?sitemap=$matches[1]&paged=$matches[2]";s:47:"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:42:"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:23:"category/(.+?)/embed/?$";s:46:"index.php?category_name=$matches[1]&embed=true";s:35:"category/(.+?)/page/?([0-9]{1,})/?$";s:53:"index.php?category_name=$matches[1]&paged=$matches[2]";s:17:"category/(.+?)/?$";s:35:"index.php?category_name=$matches[1]";s:44:"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:39:"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:20:"tag/([^/]+)/embed/?$";s:36:"index.php?tag=$matches[1]&embed=true";s:32:"tag/([^/]+)/page/?([0-9]{1,})/?$";s:43:"index.php?tag=$matches[1]&paged=$matches[2]";s:14:"tag/([^/]+)/?$";s:25:"index.php?tag=$matches[1]";s:45:"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:40:"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:21:"type/([^/]+)/embed/?$";s:44:"index.php?post_format=$matches[1]&embed=true";s:33:"type/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?post_format=$matches[1]&paged=$matches[2]";s:15:"type/([^/]+)/?$";s:33:"index.php?post_format=$matches[1]";s:48:".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$";s:18:"index.php?feed=old";s:20:".*wp-app\\.php(/.*)?$";s:19:"index.php?error=403";s:18:".*wp-register.php$";s:23:"index.php?register=true";s:32:"feed/(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:27:"(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:8:"embed/?$";s:21:"index.php?&embed=true";s:20:"page/?([0-9]{1,})/?$";s:28:"index.php?&paged=$matches[1]";s:27:"comment-page-([0-9]{1,})/?$";s:39:"index.php?&page_id=64&cpage=$matches[1]";s:41:"comments/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:36:"comments/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:17:"comments/embed/?$";s:21:"index.php?&embed=true";s:44:"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:39:"search/(.+)/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:20:"search/(.+)/embed/?$";s:34:"index.php?s=$matches[1]&embed=true";s:32:"search/(.+)/page/?([0-9]{1,})/?$";s:41:"index.php?s=$matches[1]&paged=$matches[2]";s:14:"search/(.+)/?$";s:23:"index.php?s=$matches[1]";s:47:"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:42:"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:23:"author/([^/]+)/embed/?$";s:44:"index.php?author_name=$matches[1]&embed=true";s:35:"author/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?author_name=$matches[1]&paged=$matches[2]";s:17:"author/([^/]+)/?$";s:33:"index.php?author_name=$matches[1]";s:69:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:45:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$";s:74:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]";s:39:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$";s:63:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]";s:56:"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:51:"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:32:"([0-9]{4})/([0-9]{1,2})/embed/?$";s:58:"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true";s:44:"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]";s:26:"([0-9]{4})/([0-9]{1,2})/?$";s:47:"index.php?year=$matches[1]&monthnum=$matches[2]";s:43:"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:38:"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:19:"([0-9]{4})/embed/?$";s:37:"index.php?year=$matches[1]&embed=true";s:31:"([0-9]{4})/page/?([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&paged=$matches[2]";s:13:"([0-9]{4})/?$";s:26:"index.php?year=$matches[1]";s:27:".?.+?/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:".?.+?/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:33:".?.+?/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:16:"(.?.+?)/embed/?$";s:41:"index.php?pagename=$matches[1]&embed=true";s:20:"(.?.+?)/trackback/?$";s:35:"index.php?pagename=$matches[1]&tb=1";s:40:"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:35:"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:28:"(.?.+?)/page/?([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&paged=$matches[2]";s:35:"(.?.+?)/comment-page-([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&cpage=$matches[2]";s:24:"(.?.+?)(?:/([0-9]+))?/?$";s:47:"index.php?pagename=$matches[1]&page=$matches[2]";s:27:"[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:"[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:"[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:"[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:"[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:33:"[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:16:"([^/]+)/embed/?$";s:37:"index.php?name=$matches[1]&embed=true";s:20:"([^/]+)/trackback/?$";s:31:"index.php?name=$matches[1]&tb=1";s:40:"([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?name=$matches[1]&feed=$matches[2]";s:35:"([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?name=$matches[1]&feed=$matches[2]";s:28:"([^/]+)/page/?([0-9]{1,})/?$";s:44:"index.php?name=$matches[1]&paged=$matches[2]";s:35:"([^/]+)/comment-page-([0-9]{1,})/?$";s:44:"index.php?name=$matches[1]&cpage=$matches[2]";s:24:"([^/]+)(?:/([0-9]+))?/?$";s:43:"index.php?name=$matches[1]&page=$matches[2]";s:16:"[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:26:"[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:46:"[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:41:"[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:41:"[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:22:"[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:1:{i:0;s:31:"wp-migrate-db/wp-migrate-db.php";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:3:{i:0;s:85:"/Applications/XAMPP/xamppfiles/htdocs/sandwech/wp-content/plugins/akismet/akismet.php";i:1;s:87:"/Applications/XAMPP/xamppfiles/htdocs/datatables/wp-content/plugins/akismet/akismet.php";i:2;s:0:"";}', 'no'),
(40, 'template', 'Sandwech', 'yes'),
(41, 'stylesheet', 'Sandwech', 'yes'),
(42, 'comment_registration', '0', 'yes'),
(43, 'html_type', 'text/html', 'yes'),
(44, 'use_trackback', '0', 'yes'),
(45, 'default_role', 'subscriber', 'yes'),
(46, 'db_version', '53496', 'yes'),
(47, 'uploads_use_yearmonth_folders', '1', 'yes'),
(48, 'upload_path', '', 'yes'),
(49, 'blog_public', '0', 'yes'),
(50, 'default_link_category', '2', 'yes'),
(51, 'show_on_front', 'page', 'yes'),
(52, 'tag_base', '', 'yes'),
(53, 'show_avatars', '1', 'yes'),
(54, 'avatar_rating', 'G', 'yes'),
(55, 'upload_url_path', '', 'yes'),
(56, 'thumbnail_size_w', '150', 'yes'),
(57, 'thumbnail_size_h', '150', 'yes'),
(58, 'thumbnail_crop', '1', 'yes'),
(59, 'medium_size_w', '300', 'yes'),
(60, 'medium_size_h', '300', 'yes'),
(61, 'avatar_default', 'mystery', 'yes'),
(62, 'large_size_w', '1024', 'yes'),
(63, 'large_size_h', '1024', 'yes'),
(64, 'image_default_link_type', 'none', 'yes'),
(65, 'image_default_size', '', 'yes'),
(66, 'image_default_align', '', 'yes'),
(67, 'close_comments_for_old_posts', '0', 'yes'),
(68, 'close_comments_days_old', '14', 'yes'),
(69, 'thread_comments', '1', 'yes'),
(70, 'thread_comments_depth', '5', 'yes'),
(71, 'page_comments', '0', 'yes'),
(72, 'comments_per_page', '50', 'yes'),
(73, 'default_comments_page', 'newest', 'yes'),
(74, 'comment_order', 'asc', 'yes'),
(75, 'sticky_posts', 'a:0:{}', 'yes'),
(76, 'widget_categories', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(77, 'widget_text', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(78, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(79, 'uninstall_plugins', 'a:0:{}', 'no'),
(80, 'timezone_string', 'Europe/Rome', 'yes'),
(81, 'page_for_posts', '0', 'yes'),
(82, 'page_on_front', '64', 'yes'),
(83, 'default_post_format', '0', 'yes'),
(84, 'link_manager_enabled', '0', 'yes'),
(85, 'finished_splitting_shared_terms', '1', 'yes'),
(86, 'site_icon', '0', 'yes'),
(87, 'medium_large_size_w', '768', 'yes'),
(88, 'medium_large_size_h', '0', 'yes'),
(89, 'wp_page_for_privacy_policy', '3', 'yes'),
(90, 'show_comments_cookies_opt_in', '1', 'yes'),
(91, 'admin_email_lifespan', '1689077178', 'yes'),
(92, 'disallowed_keys', '', 'no'),
(93, 'comment_previously_approved', '1', 'yes'),
(94, 'auto_plugin_theme_update_emails', 'a:0:{}', 'no'),
(95, 'auto_update_core_dev', 'enabled', 'yes'),
(96, 'auto_update_core_minor', 'enabled', 'yes'),
(97, 'auto_update_core_major', 'enabled', 'yes'),
(98, 'wp_force_deactivated_plugins', 'a:0:{}', 'yes'),
(99, 'initial_db_version', '53496', 'yes'),
(100, 'wp_user_roles', 'a:5:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:61:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:10:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}}', 'yes') ;
INSERT INTO `wp_options` ( `option_id`, `option_name`, `option_value`, `autoload`) VALUES
(101, 'fresh_site', '0', 'yes'),
(102, 'WPLANG', 'it_IT', 'yes'),
(103, 'user_count', '3', 'no'),
(104, 'widget_block', 'a:6:{i:2;a:1:{s:7:"content";s:19:"<!-- wp:search /-->";}i:3;a:1:{s:7:"content";s:158:"<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2>Articoli recenti</h2><!-- /wp:heading --><!-- wp:latest-posts /--></div><!-- /wp:group -->";}i:4;a:1:{s:7:"content";s:228:"<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2>Commenti recenti</h2><!-- /wp:heading --><!-- wp:latest-comments {"displayAvatar":false,"displayDate":false,"displayExcerpt":false} /--></div><!-- /wp:group -->";}i:5;a:1:{s:7:"content";s:145:"<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2>Archivi</h2><!-- /wp:heading --><!-- wp:archives /--></div><!-- /wp:group -->";}i:6;a:1:{s:7:"content";s:149:"<!-- wp:group --><div class="wp-block-group"><!-- wp:heading --><h2>Categorie</h2><!-- /wp:heading --><!-- wp:categories /--></div><!-- /wp:group -->";}s:12:"_multiwidget";i:1;}', 'yes'),
(105, 'sidebars_widgets', 'a:2:{s:19:"wp_inactive_widgets";a:5:{i:0;s:7:"block-2";i:1;s:7:"block-3";i:2;s:7:"block-4";i:3;s:7:"block-5";i:4;s:7:"block-6";}s:13:"array_version";i:3;}', 'yes'),
(106, 'cron', 'a:7:{i:1675843578;a:1:{s:34:"wp_privacy_delete_old_export_files";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:6:"hourly";s:4:"args";a:0:{}s:8:"interval";i:3600;}}}i:1675857978;a:5:{s:18:"wp_https_detection";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:32:"recovery_mode_clean_expired_keys";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1675857991;a:3:{s:21:"wp_update_user_counts";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}s:25:"delete_expired_transients";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1675857993;a:1:{s:30:"wp_scheduled_auto_draft_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1675862638;a:1:{s:21:"ai1wm_storage_cleanup";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1676030778;a:1:{s:30:"wp_site_health_scheduled_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:6:"weekly";s:4:"args";a:0:{}s:8:"interval";i:604800;}}}s:7:"version";i:2;}', 'yes'),
(107, 'widget_pages', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(108, 'widget_calendar', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(109, 'widget_archives', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(110, 'widget_media_audio', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(111, 'widget_media_image', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(112, 'widget_media_gallery', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(113, 'widget_media_video', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(114, 'widget_meta', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(115, 'widget_search', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(116, 'widget_recent-posts', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(117, 'widget_recent-comments', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(118, 'widget_tag_cloud', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(119, 'widget_nav_menu', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(120, 'widget_custom_html', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(122, 'recovery_keys', 'a:0:{}', 'yes'),
(123, 'https_detection_errors', 'a:1:{s:23:"ssl_verification_failed";a:1:{i:0;s:21:"Verifica SSL fallita.";}}', 'yes'),
(141, 'can_compress_scripts', '1', 'no'),
(154, 'theme_mods_twentytwentythree', 'a:1:{s:16:"sidebars_widgets";a:2:{s:4:"time";i:1673525219;s:4:"data";a:3:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:3:{i:0;s:7:"block-2";i:1;s:7:"block-3";i:2;s:7:"block-4";}s:9:"sidebar-2";a:2:{i:0;s:7:"block-5";i:1;s:7:"block-6";}}}}', 'yes'),
(155, 'current_theme', 'Sandwech', 'yes'),
(156, 'theme_mods_editorPHP', 'a:4:{i:0;b:0;s:18:"nav_menu_locations";a:0:{}s:18:"custom_css_post_id";i:-1;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1673531602;s:4:"data";a:1:{s:19:"wp_inactive_widgets";a:5:{i:0;s:7:"block-2";i:1;s:7:"block-3";i:2;s:7:"block-4";i:3;s:7:"block-5";i:4;s:7:"block-6";}}}}', 'yes'),
(157, 'theme_switched', '', 'yes'),
(160, 'dismissed_update_core', 'a:1:{s:11:"6.1.1|it_IT";b:1;}', 'no'),
(163, 'finished_updating_comment_type', '1', 'yes'),
(164, 'recently_activated', 'a:0:{}', 'yes'),
(171, 'auto_update_plugins', 'a:2:{i:0;s:35:"wp-fastest-cache/wpFastestCache.php";i:1;s:51:"all-in-one-wp-migration/all-in-one-wp-migration.php";}', 'no'),
(194, 'theme_mods_web-app', 'a:4:{i:0;b:0;s:18:"nav_menu_locations";a:0:{}s:18:"custom_css_post_id";i:-1;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1673532102;s:4:"data";a:1:{s:19:"wp_inactive_widgets";a:5:{i:0;s:7:"block-2";i:1;s:7:"block-3";i:2;s:7:"block-4";i:3;s:7:"block-5";i:4;s:7:"block-6";}}}}', 'yes'),
(204, 'theme_mods_Sandwech', 'a:3:{i:0;b:0;s:18:"nav_menu_locations";a:0:{}s:18:"custom_css_post_id";i:-1;}', 'yes'),
(416, 'new_admin_email', 'alessiomodo2004@gmail.com', 'yes'),
(2197, 'widget_akismet_widget', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(2376, 'WpFc_api_key', '1e445801e60621a6f9ad14a8cdfa7c30', 'yes'),
(2377, 'wpfc-group', '', 'yes'),
(2614, 'ai1wm_secret_key', '89fN0izglJME', 'yes'),
(2618, 'ai1wm_updater', 'a:0:{}', 'yes'),
(2761, 'wpmdb_usage', 'a:2:{s:6:"action";s:8:"savefile";s:4:"time";i:1675841248;}', 'no') ;

#
# End of data contents of table `wp_options`
# --------------------------------------------------------



#
# Delete any existing table `wp_postmeta`
#

DROP TABLE IF EXISTS `wp_postmeta`;


#
# Table structure of table `wp_postmeta`
#

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;


#
# Data contents of table `wp_postmeta`
#
INSERT INTO `wp_postmeta` ( `meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(59, 39, '_edit_lock', '1673864750:1'),
(64, 43, '_edit_lock', '1673556692:1'),
(65, 45, '_edit_lock', '1673556677:1'),
(66, 45, '_edit_last', '1'),
(68, 39, '_edit_last', '1'),
(69, 43, '_edit_last', '1'),
(74, 54, '_edit_lock', '1673695175:1'),
(75, 56, '_edit_lock', '1673618108:1'),
(76, 58, '_edit_lock', '1673618135:1'),
(77, 61, '_edit_lock', '1673864747:1'),
(78, 64, '_edit_lock', '1673966464:1'),
(79, 61, '_edit_last', '1'),
(80, 67, '_edit_lock', '1673878785:1'),
(81, 70, '_edit_lock', '1673884919:1'),
(83, 74, '_edit_lock', '1673966426:1'),
(84, 76, '_edit_lock', '1673907410:1'),
(85, 78, '_edit_lock', '1673907420:1'),
(86, 80, '_edit_lock', '1673907428:1'),
(87, 82, '_edit_lock', '1673907446:1'),
(88, 84, '_edit_lock', '1673907453:1'),
(89, 86, '_edit_lock', '1673907461:1'),
(90, 88, '_edit_lock', '1673907509:1'),
(91, 90, '_edit_lock', '1673907534:1'),
(92, 92, '_edit_lock', '1673907545:1'),
(93, 94, '_edit_lock', '1673907560:1'),
(94, 96, '_edit_lock', '1673907572:1'),
(95, 100, '_edit_lock', '1673953069:1'),
(99, 74, '_edit_last', '1'),
(100, 103, '_edit_lock', '1673966503:1'),
(101, 64, '_edit_last', '1'),
(109, 103, '_edit_last', '1'),
(110, 109, '_edit_lock', '1674137415:1'),
(112, 115, '_edit_lock', '1675615827:1'),
(113, 117, '_edit_lock', '1675615836:1'),
(114, 119, '_edit_lock', '1675615840:1'),
(115, 121, '_edit_lock', '1675615846:1'),
(116, 123, '_edit_lock', '1675615851:1'),
(117, 125, '_edit_lock', '1675615858:1'),
(118, 127, '_edit_lock', '1675617456:1') ;

#
# End of data contents of table `wp_postmeta`
# --------------------------------------------------------



#
# Delete any existing table `wp_posts`
#

DROP TABLE IF EXISTS `wp_posts`;


#
# Table structure of table `wp_posts`
#

CREATE TABLE `wp_posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT 0,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT 0,
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT 0,
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;


#
# Data contents of table `wp_posts`
#
INSERT INTO `wp_posts` ( `ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(39, 1, '2023-01-12 21:40:11', '2023-01-12 20:40:11', '', 'Product', '', 'publish', 'closed', 'closed', '', 'product', '', '', '2023-01-16 11:25:50', '2023-01-16 10:25:50', '', 0, 'http://localhost/datatables/?page_id=39', 0, 'page', '', 0),
(40, 1, '2023-01-12 21:40:11', '2023-01-12 20:40:11', '', 'product', '', 'inherit', 'closed', 'closed', '', '39-revision-v1', '', '', '2023-01-12 21:40:11', '2023-01-12 20:40:11', '', 39, 'http://localhost/datatables/?p=40', 0, 'revision', '', 0),
(43, 1, '2023-01-12 21:49:42', '2023-01-12 20:49:42', '', 'User', '', 'publish', 'closed', 'closed', '', 'user', '', '', '2023-01-12 21:51:32', '2023-01-12 20:51:32', '', 0, 'http://localhost/datatables/?page_id=43', 0, 'page', '', 0),
(44, 1, '2023-01-12 21:49:42', '2023-01-12 20:49:42', '', 'user', '', 'inherit', 'closed', 'closed', '', '43-revision-v1', '', '', '2023-01-12 21:49:42', '2023-01-12 20:49:42', '', 43, 'http://localhost/datatables/?p=44', 0, 'revision', '', 0),
(45, 1, '2023-01-12 21:49:52', '2023-01-12 20:49:52', '', 'Ingredient', '', 'publish', 'closed', 'closed', '', 'ingredient', '', '', '2023-01-12 21:51:17', '2023-01-12 20:51:17', '', 0, 'http://localhost/datatables/?page_id=45', 0, 'page', '', 0),
(46, 1, '2023-01-12 21:49:52', '2023-01-12 20:49:52', '', 'ingredient', '', 'inherit', 'closed', 'closed', '', '45-revision-v1', '', '', '2023-01-12 21:49:52', '2023-01-12 20:49:52', '', 45, 'http://localhost/datatables/?p=46', 0, 'revision', '', 0),
(47, 1, '2023-01-12 21:51:17', '2023-01-12 20:51:17', '', 'Ingredient', '', 'inherit', 'closed', 'closed', '', '45-revision-v1', '', '', '2023-01-12 21:51:17', '2023-01-12 20:51:17', '', 45, 'http://localhost/datatables/?p=47', 0, 'revision', '', 0),
(49, 1, '2023-01-12 21:51:28', '2023-01-12 20:51:28', '', 'Product', '', 'inherit', 'closed', 'closed', '', '39-revision-v1', '', '', '2023-01-12 21:51:28', '2023-01-12 20:51:28', '', 39, 'http://localhost/datatables/?p=49', 0, 'revision', '', 0),
(50, 1, '2023-01-12 21:51:32', '2023-01-12 20:51:32', '', 'User', '', 'inherit', 'closed', 'closed', '', '43-revision-v1', '', '', '2023-01-12 21:51:32', '2023-01-12 20:51:32', '', 43, 'http://localhost/datatables/?p=50', 0, 'revision', '', 0),
(54, 1, '2023-01-13 14:57:11', '2023-01-13 13:57:11', '', 'Class', '', 'publish', 'closed', 'closed', '', 'class', '', '', '2023-01-13 14:57:11', '2023-01-13 13:57:11', '', 0, 'http://192.168.62.150/?page_id=54', 0, 'page', '', 0),
(55, 1, '2023-01-13 14:57:11', '2023-01-13 13:57:11', '', 'Class', '', 'inherit', 'closed', 'closed', '', '54-revision-v1', '', '', '2023-01-13 14:57:11', '2023-01-13 13:57:11', '', 54, 'http://192.168.62.150/?p=55', 0, 'revision', '', 0),
(56, 1, '2023-01-13 14:57:31', '2023-01-13 13:57:31', '', 'User-Class', '', 'publish', 'closed', 'closed', '', 'user-class', '', '', '2023-01-13 14:57:31', '2023-01-13 13:57:31', '', 0, 'http://192.168.62.150/?page_id=56', 0, 'page', '', 0),
(57, 1, '2023-01-13 14:57:31', '2023-01-13 13:57:31', '', 'User-Class', '', 'inherit', 'closed', 'closed', '', '56-revision-v1', '', '', '2023-01-13 14:57:31', '2023-01-13 13:57:31', '', 56, 'http://192.168.62.150/?p=57', 0, 'revision', '', 0),
(58, 1, '2023-01-13 14:57:58', '2023-01-13 13:57:58', '', 'Product-Ingredient', '', 'publish', 'closed', 'closed', '', 'product-ingredient', '', '', '2023-01-13 14:57:58', '2023-01-13 13:57:58', '', 0, 'http://192.168.62.150/?page_id=58', 0, 'page', '', 0),
(59, 1, '2023-01-13 14:57:58', '2023-01-13 13:57:58', '', 'Product-Ingredient', '', 'inherit', 'closed', 'closed', '', '58-revision-v1', '', '', '2023-01-13 14:57:58', '2023-01-13 13:57:58', '', 58, 'http://192.168.62.150/?p=59', 0, 'revision', '', 0),
(61, 1, '2023-01-13 15:28:31', '2023-01-13 14:28:31', '', 'Login', '', 'publish', 'closed', 'closed', '', 'login', '', '', '2023-01-16 11:25:47', '2023-01-16 10:25:47', '', 0, 'http://192.168.62.150/?page_id=61', 0, 'page', '', 0),
(62, 1, '2023-01-13 15:28:31', '2023-01-13 14:28:31', '', 'Login', '', 'inherit', 'closed', 'closed', '', '61-revision-v1', '', '', '2023-01-13 15:28:31', '2023-01-13 14:28:31', '', 61, 'http://192.168.62.150/?p=62', 0, 'revision', '', 0),
(64, 1, '2023-01-13 23:56:37', '2023-01-13 22:56:37', '', 'Sandwech', '', 'publish', 'closed', 'closed', '', 'sandwech', '', '', '2023-01-17 15:41:04', '2023-01-17 14:41:04', '', 0, 'http://192.168.62.150/?page_id=64', 0, 'page', '', 0),
(65, 1, '2023-01-13 23:56:37', '2023-01-13 22:56:37', '', 'Profile', '', 'inherit', 'closed', 'closed', '', '64-revision-v1', '', '', '2023-01-13 23:56:37', '2023-01-13 22:56:37', '', 64, 'http://192.168.62.150/?p=65', 0, 'revision', '', 0),
(67, 1, '2023-01-16 15:22:09', '2023-01-16 14:22:09', '', 'Order', '', 'publish', 'closed', 'closed', '', 'order', '', '', '2023-01-16 15:22:09', '2023-01-16 14:22:09', '', 0, 'http://192.168.62.150/?page_id=67', 0, 'page', '', 0),
(68, 1, '2023-01-16 15:22:09', '2023-01-16 14:22:09', '', 'Order', '', 'inherit', 'closed', 'closed', '', '67-revision-v1', '', '', '2023-01-16 15:22:09', '2023-01-16 14:22:09', '', 67, 'http://192.168.62.150/?p=68', 0, 'revision', '', 0),
(70, 1, '2023-01-16 17:04:23', '2023-01-16 16:04:23', '', 'Product-Order', '', 'publish', 'closed', 'closed', '', 'product-order', '', '', '2023-01-16 17:04:23', '2023-01-16 16:04:23', '', 0, 'http://192.168.62.150/?page_id=70', 0, 'page', '', 0),
(71, 1, '2023-01-16 17:04:23', '2023-01-16 16:04:23', '', 'Product-Order', '', 'inherit', 'closed', 'closed', '', '70-revision-v1', '', '', '2023-01-16 17:04:23', '2023-01-16 16:04:23', '', 70, 'http://192.168.62.150/?p=71', 0, 'revision', '', 0),
(74, 1, '2023-01-16 23:01:57', '2023-01-16 22:01:57', '', 'Management', '', 'publish', 'closed', 'closed', '', 'management', '', '', '2023-01-17 15:40:26', '2023-01-17 14:40:26', '', 0, 'http://192.168.62.150/?page_id=74', 0, 'page', '', 0),
(75, 1, '2023-01-16 23:01:57', '2023-01-16 22:01:57', '', 'MNG', '', 'inherit', 'closed', 'closed', '', '74-revision-v1', '', '', '2023-01-16 23:01:57', '2023-01-16 22:01:57', '', 74, 'http://192.168.62.150/?p=75', 0, 'revision', '', 0),
(76, 1, '2023-01-16 23:19:10', '2023-01-16 22:19:10', '', 'Allergen', '', 'publish', 'closed', 'closed', '', 'allergen', '', '', '2023-01-16 23:19:10', '2023-01-16 22:19:10', '', 0, 'http://192.168.62.150/?page_id=76', 0, 'page', '', 0),
(77, 1, '2023-01-16 23:19:10', '2023-01-16 22:19:10', '', 'Allergen', '', 'inherit', 'closed', 'closed', '', '76-revision-v1', '', '', '2023-01-16 23:19:10', '2023-01-16 22:19:10', '', 76, 'http://192.168.62.150/?p=77', 0, 'revision', '', 0),
(78, 1, '2023-01-16 23:19:21', '2023-01-16 22:19:21', '', 'Break', '', 'publish', 'closed', 'closed', '', 'break', '', '', '2023-01-16 23:19:21', '2023-01-16 22:19:21', '', 0, 'http://192.168.62.150/?page_id=78', 0, 'page', '', 0),
(79, 1, '2023-01-16 23:19:21', '2023-01-16 22:19:21', '', 'Break', '', 'inherit', 'closed', 'closed', '', '78-revision-v1', '', '', '2023-01-16 23:19:21', '2023-01-16 22:19:21', '', 78, 'http://192.168.62.150/?p=79', 0, 'revision', '', 0),
(80, 1, '2023-01-16 23:19:32', '2023-01-16 22:19:32', '', 'Pickup', '', 'publish', 'closed', 'closed', '', 'pickup', '', '', '2023-01-16 23:19:32', '2023-01-16 22:19:32', '', 0, 'http://192.168.62.150/?page_id=80', 0, 'page', '', 0),
(81, 1, '2023-01-16 23:19:32', '2023-01-16 22:19:32', '', 'Pickup', '', 'inherit', 'closed', 'closed', '', '80-revision-v1', '', '', '2023-01-16 23:19:32', '2023-01-16 22:19:32', '', 80, 'http://192.168.62.150/?p=81', 0, 'revision', '', 0),
(82, 1, '2023-01-16 23:19:49', '2023-01-16 22:19:49', '', 'Pickup-Break', '', 'publish', 'closed', 'closed', '', 'pickup-break', '', '', '2023-01-16 23:19:49', '2023-01-16 22:19:49', '', 0, 'http://192.168.62.150/?page_id=82', 0, 'page', '', 0),
(83, 1, '2023-01-16 23:19:49', '2023-01-16 22:19:49', '', 'Pickup-Break', '', 'inherit', 'closed', 'closed', '', '82-revision-v1', '', '', '2023-01-16 23:19:49', '2023-01-16 22:19:49', '', 82, 'http://192.168.62.150/?p=83', 0, 'revision', '', 0),
(84, 1, '2023-01-16 23:19:56', '2023-01-16 22:19:56', '', 'Reset', '', 'publish', 'closed', 'closed', '', 'reset', '', '', '2023-01-16 23:19:56', '2023-01-16 22:19:56', '', 0, 'http://192.168.62.150/?page_id=84', 0, 'page', '', 0),
(85, 1, '2023-01-16 23:19:56', '2023-01-16 22:19:56', '', 'Reset', '', 'inherit', 'closed', 'closed', '', '84-revision-v1', '', '', '2023-01-16 23:19:56', '2023-01-16 22:19:56', '', 84, 'http://192.168.62.150/?p=85', 0, 'revision', '', 0),
(86, 1, '2023-01-16 23:20:02', '2023-01-16 22:20:02', '', 'Status', '', 'publish', 'closed', 'closed', '', 'status', '', '', '2023-01-16 23:20:02', '2023-01-16 22:20:02', '', 0, 'http://192.168.62.150/?page_id=86', 0, 'page', '', 0),
(87, 1, '2023-01-16 23:20:02', '2023-01-16 22:20:02', '', 'Status', '', 'inherit', 'closed', 'closed', '', '86-revision-v1', '', '', '2023-01-16 23:20:02', '2023-01-16 22:20:02', '', 86, 'http://192.168.62.150/?p=87', 0, 'revision', '', 0),
(88, 1, '2023-01-16 23:20:53', '2023-01-16 22:20:53', '', 'Offer', '', 'publish', 'closed', 'closed', '', 'offer', '', '', '2023-01-16 23:20:53', '2023-01-16 22:20:53', '', 0, 'http://192.168.62.150/?page_id=88', 0, 'page', '', 0),
(89, 1, '2023-01-16 23:20:53', '2023-01-16 22:20:53', '', 'Offer', '', 'inherit', 'closed', 'closed', '', '88-revision-v1', '', '', '2023-01-16 23:20:53', '2023-01-16 22:20:53', '', 88, 'http://192.168.62.150/?p=89', 0, 'revision', '', 0),
(90, 1, '2023-01-16 23:21:17', '2023-01-16 22:21:17', '', 'Product-Allergen', '', 'publish', 'closed', 'closed', '', 'product-allergen', '', '', '2023-01-16 23:21:17', '2023-01-16 22:21:17', '', 0, 'http://192.168.62.150/?page_id=90', 0, 'page', '', 0),
(91, 1, '2023-01-16 23:21:17', '2023-01-16 22:21:17', '', 'Product-Allergen', '', 'inherit', 'closed', 'closed', '', '90-revision-v1', '', '', '2023-01-16 23:21:17', '2023-01-16 22:21:17', '', 90, 'http://192.168.62.150/?p=91', 0, 'revision', '', 0),
(92, 1, '2023-01-16 23:21:29', '2023-01-16 22:21:29', '', 'Product-Offer', '', 'publish', 'closed', 'closed', '', 'product-offer', '', '', '2023-01-16 23:21:29', '2023-01-16 22:21:29', '', 0, 'http://192.168.62.150/?page_id=92', 0, 'page', '', 0),
(93, 1, '2023-01-16 23:21:29', '2023-01-16 22:21:29', '', 'Product-Offer', '', 'inherit', 'closed', 'closed', '', '92-revision-v1', '', '', '2023-01-16 23:21:29', '2023-01-16 22:21:29', '', 92, 'http://192.168.62.150/?p=93', 0, 'revision', '', 0),
(94, 1, '2023-01-16 23:21:38', '2023-01-16 22:21:38', '', 'Product-Tag', '', 'publish', 'closed', 'closed', '', 'product-tag', '', '', '2023-01-16 23:21:38', '2023-01-16 22:21:38', '', 0, 'http://192.168.62.150/?page_id=94', 0, 'page', '', 0),
(95, 1, '2023-01-16 23:21:38', '2023-01-16 22:21:38', '', 'Product-Tag', '', 'inherit', 'closed', 'closed', '', '94-revision-v1', '', '', '2023-01-16 23:21:38', '2023-01-16 22:21:38', '', 94, 'http://192.168.62.150/?p=95', 0, 'revision', '', 0),
(96, 1, '2023-01-16 23:21:49', '2023-01-16 22:21:49', '', 'Tag', '', 'publish', 'closed', 'closed', '', 'tag', '', '', '2023-01-16 23:21:49', '2023-01-16 22:21:49', '', 0, 'http://192.168.62.150/?page_id=96', 0, 'page', '', 0),
(97, 1, '2023-01-16 23:21:49', '2023-01-16 22:21:49', '', 'Tag', '', 'inherit', 'closed', 'closed', '', '96-revision-v1', '', '', '2023-01-16 23:21:49', '2023-01-16 22:21:49', '', 96, 'http://192.168.62.150/?p=97', 0, 'revision', '', 0),
(100, 1, '2023-01-17 12:00:13', '2023-01-17 11:00:13', '', 'Tag', '', 'publish', 'closed', 'closed', '', 'tag-2', '', '', '2023-01-17 12:00:13', '2023-01-17 11:00:13', '', 0, 'http://192.168.62.150/?page_id=100', 0, 'page', '', 0),
(101, 1, '2023-01-17 12:00:13', '2023-01-17 11:00:13', '', 'Tag', '', 'inherit', 'closed', 'closed', '', '100-revision-v1', '', '', '2023-01-17 12:00:13', '2023-01-17 11:00:13', '', 100, 'http://192.168.62.150/?p=101', 0, 'revision', '', 0),
(102, 1, '2023-01-17 15:39:18', '2023-01-17 14:39:18', '', 'Management', '', 'inherit', 'closed', 'closed', '', '74-revision-v1', '', '', '2023-01-17 15:39:18', '2023-01-17 14:39:18', '', 74, 'http://192.168.62.150/?p=102', 0, 'revision', '', 0),
(103, 1, '2023-01-17 15:39:46', '2023-01-17 14:39:46', '', 'Vendite', '', 'publish', 'closed', 'closed', '', 'vendite', '', '', '2023-01-17 15:41:43', '2023-01-17 14:41:43', '', 0, 'http://192.168.62.150/?page_id=103', 0, 'page', '', 0),
(104, 1, '2023-01-17 15:39:46', '2023-01-17 14:39:46', '', 'Vendite', '', 'inherit', 'closed', 'closed', '', '103-revision-v1', '', '', '2023-01-17 15:39:46', '2023-01-17 14:39:46', '', 103, 'http://192.168.62.150/?p=104', 0, 'revision', '', 0),
(105, 1, '2023-01-17 15:41:04', '2023-01-17 14:41:04', '', 'Sandwech', '', 'inherit', 'closed', 'closed', '', '64-revision-v1', '', '', '2023-01-17 15:41:04', '2023-01-17 14:41:04', '', 64, 'http://192.168.62.150/?p=105', 0, 'revision', '', 0),
(109, 1, '2023-01-19 15:12:39', '2023-01-19 14:12:39', '', 'Nutritional-Value', '', 'publish', 'closed', 'closed', '', 'nutritional-value', '', '', '2023-01-19 15:12:39', '2023-01-19 14:12:39', '', 0, 'http://192.168.62.150/?page_id=109', 0, 'page', '', 0),
(110, 1, '2023-01-19 15:12:39', '2023-01-19 14:12:39', '', 'Nutritional-Value', '', 'inherit', 'closed', 'closed', '', '109-revision-v1', '', '', '2023-01-19 15:12:39', '2023-01-19 14:12:39', '', 109, 'http://192.168.62.150/?p=110', 0, 'revision', '', 0),
(114, 1, '2023-02-05 17:45:24', '0000-00-00 00:00:00', '', 'Bozza automatica', '', 'auto-draft', 'open', 'open', '', '', '', '', '2023-02-05 17:45:24', '0000-00-00 00:00:00', '', 0, 'http://192.168.62.150/?p=114', 0, 'post', '', 0),
(115, 1, '2023-02-05 17:52:51', '2023-02-05 16:52:51', '', 'Panini', '', 'publish', 'closed', 'closed', '', 'panini', '', '', '2023-02-05 17:52:51', '2023-02-05 16:52:51', '', 0, 'http://192.168.62.150/?page_id=115', 0, 'page', '', 0),
(116, 1, '2023-02-05 17:52:51', '2023-02-05 16:52:51', '', 'Panini', '', 'inherit', 'closed', 'closed', '', '115-revision-v1', '', '', '2023-02-05 17:52:51', '2023-02-05 16:52:51', '', 115, 'http://192.168.62.150/?p=116', 0, 'revision', '', 0),
(117, 1, '2023-02-05 17:52:59', '2023-02-05 16:52:59', '', 'Piadine', '', 'publish', 'closed', 'closed', '', 'piadine', '', '', '2023-02-05 17:52:59', '2023-02-05 16:52:59', '', 0, 'http://192.168.62.150/?page_id=117', 0, 'page', '', 0),
(118, 1, '2023-02-05 17:52:59', '2023-02-05 16:52:59', '', 'Piadine', '', 'inherit', 'closed', 'closed', '', '117-revision-v1', '', '', '2023-02-05 17:52:59', '2023-02-05 16:52:59', '', 117, 'http://192.168.62.150/?p=118', 0, 'revision', '', 0),
(119, 1, '2023-02-05 17:53:05', '2023-02-05 16:53:05', '', 'Brioches', '', 'publish', 'closed', 'closed', '', 'brioches', '', '', '2023-02-05 17:53:05', '2023-02-05 16:53:05', '', 0, 'http://192.168.62.150/?page_id=119', 0, 'page', '', 0),
(120, 1, '2023-02-05 17:53:05', '2023-02-05 16:53:05', '', 'Brioches', '', 'inherit', 'closed', 'closed', '', '119-revision-v1', '', '', '2023-02-05 17:53:05', '2023-02-05 16:53:05', '', 119, 'http://192.168.62.150/?p=120', 0, 'revision', '', 0),
(121, 1, '2023-02-05 17:53:10', '2023-02-05 16:53:10', '', 'Bibite', '', 'publish', 'closed', 'closed', '', 'bibite', '', '', '2023-02-05 17:53:10', '2023-02-05 16:53:10', '', 0, 'http://192.168.62.150/?page_id=121', 0, 'page', '', 0),
(122, 1, '2023-02-05 17:53:10', '2023-02-05 16:53:10', '', 'Bibite', '', 'inherit', 'closed', 'closed', '', '121-revision-v1', '', '', '2023-02-05 17:53:10', '2023-02-05 16:53:10', '', 121, 'http://192.168.62.150/?p=122', 0, 'revision', '', 0),
(123, 1, '2023-02-05 17:53:15', '2023-02-05 16:53:15', '', 'Snack', '', 'publish', 'closed', 'closed', '', 'snack', '', '', '2023-02-05 17:53:15', '2023-02-05 16:53:15', '', 0, 'http://192.168.62.150/?page_id=123', 0, 'page', '', 0),
(124, 1, '2023-02-05 17:53:15', '2023-02-05 16:53:15', '', 'Snack', '', 'inherit', 'closed', 'closed', '', '123-revision-v1', '', '', '2023-02-05 17:53:15', '2023-02-05 16:53:15', '', 123, 'http://192.168.62.150/?p=124', 0, 'revision', '', 0),
(125, 1, '2023-02-05 17:53:20', '2023-02-05 16:53:20', '', 'Carrello', '', 'publish', 'closed', 'closed', '', 'carrello', '', '', '2023-02-05 17:53:20', '2023-02-05 16:53:20', '', 0, 'http://192.168.62.150/?page_id=125', 0, 'page', '', 0),
(126, 1, '2023-02-05 17:53:20', '2023-02-05 16:53:20', '', 'Carrello', '', 'inherit', 'closed', 'closed', '', '125-revision-v1', '', '', '2023-02-05 17:53:20', '2023-02-05 16:53:20', '', 125, 'http://192.168.62.150/?p=126', 0, 'revision', '', 0),
(127, 1, '2023-02-05 18:20:00', '2023-02-05 17:20:00', '', 'Studente', '', 'publish', 'closed', 'closed', '', 'studente', '', '', '2023-02-05 18:20:00', '2023-02-05 17:20:00', '', 0, 'http://192.168.62.150/?page_id=127', 0, 'page', '', 0),
(128, 1, '2023-02-05 18:20:00', '2023-02-05 17:20:00', '', 'Studente', '', 'inherit', 'closed', 'closed', '', '127-revision-v1', '', '', '2023-02-05 18:20:00', '2023-02-05 17:20:00', '', 127, 'http://192.168.62.150/?p=128', 0, 'revision', '', 0) ;

#
# End of data contents of table `wp_posts`
# --------------------------------------------------------



#
# Delete any existing table `wp_term_relationships`
#

DROP TABLE IF EXISTS `wp_term_relationships`;


#
# Table structure of table `wp_term_relationships`
#

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `term_order` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;


#
# Data contents of table `wp_term_relationships`
#

#
# End of data contents of table `wp_term_relationships`
# --------------------------------------------------------



#
# Delete any existing table `wp_term_taxonomy`
#

DROP TABLE IF EXISTS `wp_term_taxonomy`;


#
# Table structure of table `wp_term_taxonomy`
#

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT 0,
  `count` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;


#
# Data contents of table `wp_term_taxonomy`
#
INSERT INTO `wp_term_taxonomy` ( `term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 0) ;

#
# End of data contents of table `wp_term_taxonomy`
# --------------------------------------------------------



#
# Delete any existing table `wp_termmeta`
#

DROP TABLE IF EXISTS `wp_termmeta`;


#
# Table structure of table `wp_termmeta`
#

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`meta_id`),
  KEY `term_id` (`term_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;


#
# Data contents of table `wp_termmeta`
#

#
# End of data contents of table `wp_termmeta`
# --------------------------------------------------------



#
# Delete any existing table `wp_terms`
#

DROP TABLE IF EXISTS `wp_terms`;


#
# Table structure of table `wp_terms`
#

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT 0,
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;


#
# Data contents of table `wp_terms`
#
INSERT INTO `wp_terms` ( `term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Senza categoria', 'senza-categoria', 0) ;

#
# End of data contents of table `wp_terms`
# --------------------------------------------------------



#
# Delete any existing table `wp_usermeta`
#

DROP TABLE IF EXISTS `wp_usermeta`;


#
# Table structure of table `wp_usermeta`
#

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;


#
# Data contents of table `wp_usermeta`
#
INSERT INTO `wp_usermeta` ( `umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'Al3Modo'),
(2, 1, 'first_name', 'Alessio'),
(3, 1, 'last_name', 'Modonesi'),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'modern'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:"administrator";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'plugin_editor_notice'),
(15, 1, 'show_welcome_panel', '1'),
(16, 1, 'session_tokens', 'a:4:{s:64:"7ea0b1263bf53c22eb8af70d86da0aa9f1948ef15b618d54d59f8b3a20939724";a:4:{s:10:"expiration";i:1675667551;s:2:"ip";s:3:"::1";s:2:"ua";s:117:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36";s:5:"login";i:1674457951;}s:64:"f0d492635bfd2d25bbbf15d8e8a117643a88db2c8da88c0b57748798e7fadd56";a:4:{s:10:"expiration";i:1675669849;s:2:"ip";s:3:"::1";s:2:"ua";s:117:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36";s:5:"login";i:1674460249;}s:64:"e72242bac8fc860eda9cf0910b26e45a8996ece0b7bc259546c058878af188e9";a:4:{s:10:"expiration";i:1676825123;s:2:"ip";s:3:"::1";s:2:"ua";s:117:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36";s:5:"login";i:1675615523;}s:64:"f4a82e9710233d8e3604e12c3e114d065bfab83f8b0df91d2d154d069b2a3083";a:4:{s:10:"expiration";i:1676827192;s:2:"ip";s:3:"::1";s:2:"ua";s:117:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36";s:5:"login";i:1675617592;}}'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '114'),
(18, 1, 'wp_persisted_preferences', 'a:2:{s:14:"core/edit-post";a:4:{s:26:"isComplementaryAreaVisible";b:1;s:12:"welcomeGuide";b:0;s:10:"openPanels";a:2:{i:0;s:11:"post-status";i:1;s:16:"discussion-panel";}s:10:"editorMode";s:6:"visual";}s:9:"_modified";s:24:"2023-01-14T11:21:52.958Z";}'),
(19, 1, 'wp_user-settings', 'mfold=o'),
(20, 1, 'wp_user-settings-time', '1673553726'),
(63, 5, 'nickname', 'Vendite'),
(64, 5, 'first_name', 'Gestione'),
(65, 5, 'last_name', 'Vendite'),
(66, 5, 'description', ''),
(67, 5, 'rich_editing', 'true'),
(68, 5, 'syntax_highlighting', 'true'),
(69, 5, 'comment_shortcuts', 'false'),
(70, 5, 'admin_color', 'fresh'),
(71, 5, 'use_ssl', '0'),
(72, 5, 'show_admin_bar_front', 'true'),
(73, 5, 'locale', ''),
(74, 5, 'wp_capabilities', 'a:1:{s:6:"author";b:1;}'),
(75, 5, 'wp_user_level', '2'),
(76, 5, 'dismissed_wp_pointers', ''),
(77, 6, 'nickname', 'Management'),
(78, 6, 'first_name', 'Gestione'),
(79, 6, 'last_name', 'Management'),
(80, 6, 'description', ''),
(81, 6, 'rich_editing', 'true'),
(82, 6, 'syntax_highlighting', 'true'),
(83, 6, 'comment_shortcuts', 'false'),
(84, 6, 'admin_color', 'fresh'),
(85, 6, 'use_ssl', '0'),
(86, 6, 'show_admin_bar_front', 'true'),
(87, 6, 'locale', ''),
(88, 6, 'wp_capabilities', 'a:1:{s:6:"author";b:1;}'),
(89, 6, 'wp_user_level', '2'),
(90, 6, 'dismissed_wp_pointers', '') ;

#
# End of data contents of table `wp_usermeta`
# --------------------------------------------------------



#
# Delete any existing table `wp_users`
#

DROP TABLE IF EXISTS `wp_users`;


#
# Table structure of table `wp_users`
#

CREATE TABLE `wp_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 0,
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`),
  KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;


#
# Data contents of table `wp_users`
#
INSERT INTO `wp_users` ( `ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '$P$BP5r9u93//3NqZ8JDE/mDb2hwWaEze/', 'admin', 'alessiomodo2004@gmail.com', 'http://192.168.62.150', '2023-01-12 12:06:18', '', 0, 'Al3Modo'),
(5, 'Vendite', '$P$BL4R76knqBly.ZgxOe161IAhkrTjyp.', 'vendite', 'vendite@gmail.com', '', '2023-01-17 15:19:46', '1673968786:$P$Bv6XvZS.XR7kxeRBdTR6oKXl7grKI.0', 0, 'Gestione Vendite'),
(6, 'Management', '$P$BDnl9A0xo9JlvKouIbTLrJx.aAcjzO0', 'management', 'mng@gmail.com', '', '2023-01-17 15:20:31', '', 0, 'Gestione Management') ;

#
# End of data contents of table `wp_users`
# --------------------------------------------------------

#
# Add constraints back in and apply any alter data queries.
#

