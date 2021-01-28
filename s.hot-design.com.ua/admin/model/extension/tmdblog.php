<?php
class ModelExtensionTmdBlog extends Model {
	public function install() {
	$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort_order` int(3) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `viewed` int(11) NOT NULL,
  `blogcoment` tinyint(4) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;");

$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."blogcomment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;");

$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."blog_description` (
  `blog_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
 
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;");

$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."blog_to_tmdblogcategory` (
  `blog_id` int(11) NOT NULL,
  `tmdblogcategory_id` int(11) NOT NULL,
  PRIMARY KEY (`blog_id`,`tmdblogcategory_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;");

$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."tmdblogcategory` (
  `tmdblogcategory_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `sort_order` int(3) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`tmdblogcategory_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;");

$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."tmdblogcategory_description` (
  `tmdblogcategory_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;");

$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."tmdblogcategory_path` (
  `tmdblogcategory_id` int(11) NOT NULL,
  `path_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`tmdblogcategory_id`,`path_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;");

$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."tmdblogcategory_to_store` (
  `tmdblogcategory_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  PRIMARY KEY (`tmdblogcategory_id`,`store_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;");

$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."tmdblog_url_alias` (
  `url_alias_id` int(11) NOT NULL AUTO_INCREMENT,
  `query` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  PRIMARY KEY (`url_alias_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;");
	}
	public function uninstall() {
	$this->db->query("DROP TABLE IF EXISTS `".DB_PREFIX."blog`");
	$this->db->query("DROP TABLE IF EXISTS `".DB_PREFIX."blogcomment`");
	$this->db->query("DROP TABLE IF EXISTS `".DB_PREFIX."blog_description`");
	$this->db->query("DROP TABLE IF EXISTS `".DB_PREFIX."blog_to_tmdblogcategory`");
	$this->db->query("DROP TABLE IF EXISTS `".DB_PREFIX."tmdblogcategory`");
	$this->db->query("DROP TABLE IF EXISTS `".DB_PREFIX."tmdblogcategory_description`");
	$this->db->query("DROP TABLE IF EXISTS `".DB_PREFIX."tmdblogcategory_path`");
	$this->db->query("DROP TABLE IF EXISTS `".DB_PREFIX."tmdblogcategory_to_store`");
	$this->db->query("DROP TABLE IF EXISTS `".DB_PREFIX."tmdblog_url_alias`");
    }
}