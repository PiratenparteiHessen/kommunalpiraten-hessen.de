-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_article`
-- 

-- 
-- Table `tl_member`
-- 

CREATE TABLE `tl_member` (
  `avatar` varchar(255) NOT NULL default ''
  `twitter` varchar(255) NOT NULL default ''
  `facebook` varchar(255) NOT NULL default ''
  `parlamente` text NULL,
  `about` text NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `tl_module` (
  `kopo_imageSize` varchar(64) NOT NULL default '',
  `kopo_imageMargin` varchar(128) NOT NULL default '',
  `kopo_imageFloating` varchar(32) NOT NULL default '',
  `kopo_imageFullsize` char(1) NOT NULL default '',
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `tl_kopopi_fraktionen` (
  `id` int(10) NOT NULL auto_increment,
  `tstamp` int(10) NOT NULL default '0',
  `parlament_id` int(10) NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  `avatar` varchar(255) NOT NULL default '',
  `street` varchar(255) NOT NULL default '',
  `postal` char(5) NOT NULL default '',
  `city` varchar(255) NOT NULL default '',
  `phone` varchar(255) NOT NULL default '',
  `fax` varchar(255) NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `website` varchar(255) NOT NULL default '',
  `twitter` varchar(255) NOT NULL default '',
  `facebook` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `tl_member_questions` (
  `id` int(10) NOT NULL auto_increment,
  `pid` int(10) NOT NULL default '0',
  `tstamp` int(10) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `question` text NULL,
  `answer` text NULL,
  `answer_tstamp` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `tl_kopopi_antraege` (
  `id` int(10) NOT NULL auto_increment,
  `tstamp` int(10) NOT NULL default '0',
  `member_id` int(10) NOT NULL default '0',
  `parlament_id` int(10) NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  `begruendung` text NULL,
  `antragstext` text NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
