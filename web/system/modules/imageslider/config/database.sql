-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************


-- --------------------------------------------------------

-- 
-- Table `tl_imageslider`
-- 

CREATE TABLE `tl_imageslider` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `sorting` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  
  `title` varchar(255) NOT NULL default '',
  `imageslider_size` varchar(255) NOT NULL default '',
  
  `rotation` char(1) NOT NULL default '',
  `rotation_interval` int(10) NOT NULL default '3000',
  `rotation_sequence` tinyint(2) NOT NULL default '1',
  
  `effect_type` varchar(255) NOT NULL default '',
  `effect_duration` int(10) NOT NULL default '1000',
  
  `effects_extended` char(1) NOT NULL default '',
  `effect_transition` varchar(64) NOT NULL default '',
  `effect_ease` varchar(64) NOT NULL default '',
  
  `controls` char(1) NOT NULL default '',
  `controls_type` tinyint(2) NOT NULL default '1',
  `controls_autoplay` char(1) NOT NULL default '',
  
  `controls_button_play` varchar(255) NOT NULL default 'Play &gt;',
  `controls_button_stop` varchar(255) NOT NULL default 'Stop', 
  `controls_button_previous` varchar(255) NOT NULL default 'Previous', 
  `controls_button_next` varchar(255) NOT NULL default 'Next',         
  
  `template_css` varchar(255) NOT NULL default 'imageslider_css',
  `template_js` varchar(255) NOT NULL default 'imageslider_js',  
  
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_imageslider_elements`
-- 

CREATE TABLE `tl_imageslider_elements` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `sorting` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  
  `alt` varchar(255) NOT NULL default '',
  `src` blob NULL,
  `img` char(1) NOT NULL default '',
  `img_size` varchar(255) NOT NULL default '',

  `url` char(1) NOT NULL default '',
  `url_link` varchar(255) NOT NULL default '',
  `url_title` varchar(255) NOT NULL default '',
  `url_window` char(1) NOT NULL default '',
  `url_fullsize` char(1) NOT NULL default '',
  
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table `tl_module`
-- 

CREATE TABLE `tl_module` (
  `imageslider` int(10) unsigned NOT NULL default '0',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
  `imageslider` int(10) unsigned NOT NULL default '0',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;