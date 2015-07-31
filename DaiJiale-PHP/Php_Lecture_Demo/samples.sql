-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2008 年 12 月 10 日 08:05
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `samples`
--

-- --------------------------------------------------------

--
-- 表的结构 `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) unsigned NOT NULL auto_increment,
  `category_name` varchar(30) NOT NULL default '',
  `description` varchar(255) default NULL,
  `image_name` varchar(150) default NULL,
  PRIMARY KEY  (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `categories`
--


-- --------------------------------------------------------

--
-- 表的结构 `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) unsigned NOT NULL auto_increment,
  `fname` varchar(35) NOT NULL default '',
  `lname` varchar(35) default NULL,
  `company` varchar(40) default NULL,
  `title` varchar(30) default NULL,
  `address1` varchar(60) NOT NULL default '',
  `address2` varchar(60) default NULL,
  `city` varchar(50) NOT NULL default '',
  `state_province` varchar(50) default NULL,
  `country` varchar(50) NOT NULL default '',
  `postal_code` varchar(30) NOT NULL default '',
  `phone` varchar(25) default NULL,
  `fax` varchar(25) default NULL,
  PRIMARY KEY  (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- 导出表中的数据 `customers`
--

INSERT INTO `customers` (`customer_id`, `fname`, `lname`, `company`, `title`, `address1`, `address2`, `city`, `state_province`, `country`, `postal_code`, `phone`, `fax`) VALUES
(42, 'CAO', 'PENG', 'KING OF PROGRAMMING', NULL, 'SHENNAN ROAD', 'PHOENIX BUILDING', 'SHENZHEN', 'GUANGDONG', 'PRC', '518000', '075500000000', '075500000000');

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) unsigned NOT NULL auto_increment,
  `customer_id` int(10) unsigned NOT NULL default '0',
  `order_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `shipped_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `shipper` varchar(40) NOT NULL default '',
  `total_order` float NOT NULL default '0',
  `ship_cost` float NOT NULL default '0',
  `ship_address1` varchar(60) NOT NULL default '',
  `ship_address2` varchar(60) default NULL,
  `ship_address3` varchar(60) default NULL,
  `ship_city` varchar(40) NOT NULL default '',
  `ship_state_province` varchar(40) default NULL,
  `ship_country` varchar(50) NOT NULL default '',
  `ship_postal_code` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`order_id`),
  UNIQUE KEY `invoice_id` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `orders`
--


-- --------------------------------------------------------

--
-- 表的结构 `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(10) unsigned NOT NULL default '0',
  `product_id` varchar(35) NOT NULL default '',
  `unit_price` float unsigned default NULL,
  `quantity` float unsigned default NULL,
  `discount` float unsigned NOT NULL default '0',
  PRIMARY KEY  (`order_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `order_details`
--


-- --------------------------------------------------------

--
-- 表的结构 `posts`
--

CREATE TABLE `posts` (
  `id` mediumint(9) NOT NULL auto_increment,
  `authorname` varchar(60) default NULL,
  `authoremail` varchar(60) default NULL,
  `messagebody` blob,
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 导出表中的数据 `posts`
--

INSERT INTO `posts` (`id`, `authorname`, `authoremail`, `messagebody`) VALUES
(12, 'Joe Knoll', 'jknoll@test.com', 0x54686973206973206d7920706f7374);

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `product_id` varchar(35) NOT NULL default '',
  `product_name` varchar(100) NOT NULL default '',
  `category_id` int(11) NOT NULL default '0',
  `unit_price` int(11) NOT NULL default '0',
  `in_stock` int(11) NOT NULL default '0',
  `description` varchar(255) default NULL,
  `is_active` tinyint(4) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `products`
--


-- --------------------------------------------------------

--
-- 表的结构 `tbl_users`
--

CREATE TABLE `tbl_users` (
  `iUserID` mediumint(8) unsigned NOT NULL auto_increment,
  `sFName` varchar(35) NOT NULL default '',
  `sLName` varchar(35) NOT NULL default '',
  `sAddr1` varchar(40) NOT NULL default '',
  `sAddr2` varchar(35) default NULL,
  `sCity` varchar(35) NOT NULL default '',
  `sState` varchar(35) NOT NULL default '',
  `sPCode` varchar(35) NOT NULL default '',
  `cCountryCode` char(2) NOT NULL default '',
  `sPhone` varchar(30) NOT NULL default '',
  `sEmail` varchar(80) NOT NULL default '',
  `sPassword` varchar(60) NOT NULL default '',
  `sQ1` varchar(60) default NULL,
  `sQ2` varchar(60) default NULL,
  `sQ3` varchar(60) default NULL,
  `sAccessPeriod` tinyint(4) NOT NULL default '0',
  `dtInserted` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `dtUpdated` datetime default NULL,
  PRIMARY KEY  (`iUserID`),
  UNIQUE KEY `iUserID` (`iUserID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- 导出表中的数据 `tbl_users`
--

INSERT INTO `tbl_users` (`iUserID`, `sFName`, `sLName`, `sAddr1`, `sAddr2`, `sCity`, `sState`, `sPCode`, `cCountryCode`, `sPhone`, `sEmail`, `sPassword`, `sQ1`, `sQ2`, `sQ3`, `sAccessPeriod`, `dtInserted`, `dtUpdated`) VALUES
(32, '曹', '鹏', '深南大道.', 'NULL', '深圳', '吉林省', '518000', 'US', '86-755-60000000', 'ccaopeng@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '在校学生', '大二', '足球', 15, '2008-12-10 16:04:00', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `topics`
--

CREATE TABLE `topics` (
  `id` mediumint(9) NOT NULL auto_increment,
  `subject` varchar(60) NOT NULL default '',
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `topics`
--

INSERT INTO `topics` (`id`, `subject`) VALUES
(1, 'Subject'),
(2, 'Subject'),
(3, '1'),
(4, '1222');
