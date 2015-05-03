-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-05-03 16:13:10
-- 服务器版本： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wh_svr`
--

-- --------------------------------------------------------

--
-- 表的结构 `tbdaysinfo`
--

CREATE TABLE IF NOT EXISTS `tbdaysinfo` (
`iDayID` int(10) unsigned NOT NULL COMMENT '天数id',
  `iRouteID` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '线路id',
  `iThemeID` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '主题id',
  `szDesc` varchar(1024) NOT NULL DEFAULT '' COMMENT '当天的描述',
  `iDayNum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '第N天',
  `dtDate` date NOT NULL DEFAULT '0000-00-00' COMMENT '线路投放时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='线路信息表';

-- --------------------------------------------------------

--
-- 表的结构 `tbroute`
--

CREATE TABLE IF NOT EXISTS `tbroute` (
`iRouteID` int(10) unsigned NOT NULL COMMENT '线路id',
  `iThemeID` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '主题id',
  `szName` varchar(128) NOT NULL DEFAULT '' COMMENT '线路名称',
  `szDesc` varchar(1024) NOT NULL DEFAULT '' COMMENT '线路描述',
  `iMoney` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '线路价格',
  `iDays` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '线路天数',
  `iPrority` tinyint(3) unsigned DEFAULT '0' COMMENT '优先级',
  `iStatus` tinyint(3) unsigned DEFAULT '0' COMMENT '状态 0 草稿 1正式 9 删除',
  `dtDate` date NOT NULL DEFAULT '0000-00-00' COMMENT '线路投放时间',
  `dtUpdatetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='线路信息表';

--
-- 转存表中的数据 `tbroute`
--

INSERT INTO `tbroute` (`iRouteID`, `iThemeID`, `szName`, `szDesc`, `iMoney`, `iDays`, `iPrority`, `iStatus`, `dtDate`, `dtUpdatetime`) VALUES
(1, 1001, 'rout2111', 'rout2111', 1111, 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(2, 1001, 'rout2111', 'rout2111', 1111, 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(3, 1001, 'rout222', 'rout2111', 1111, 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(4, 1001, 'rout2221', 'rout2111', 1111, 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(5, 1001, 'rout3333', 'rout2111', 1111, 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(6, 1001, 'rout33444', 'rout2111', 1111, 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(7, 1001, 'rout666', 'rout666661', 1111, 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(8, 1001, 'rou99999', 'rout99991', 2334, 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(9, 1001, 'rou77777', 'rou777771', 8877, 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(10, 1001, 'rou8888', 'rout8888881', 5555, 0, 0, 0, '0000-00-00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `tbtheme`
--

CREATE TABLE IF NOT EXISTS `tbtheme` (
`iThemeID` int(10) unsigned NOT NULL COMMENT '主题id',
  `szName` varchar(128) NOT NULL DEFAULT '' COMMENT '主题名称',
  `szDesc` varchar(1024) NOT NULL DEFAULT '' COMMENT '主题描述',
  `iRouteNum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '线路条数',
  `iPrority` tinyint(3) unsigned DEFAULT '0' COMMENT '优先级',
  `dtDate` date NOT NULL DEFAULT '0000-00-00' COMMENT '主题投放时间',
  `dtUpdatetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间'
) ENGINE=InnoDB AUTO_INCREMENT=1011 DEFAULT CHARSET=utf8 COMMENT='主题信息表';

--
-- 转存表中的数据 `tbtheme`
--

INSERT INTO `tbtheme` (`iThemeID`, `szName`, `szDesc`, `iRouteNum`, `iPrority`, `dtDate`, `dtUpdatetime`) VALUES
(1001, 'theme1', '', 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(1002, 'theme1', '', 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(1003, 'theme2', '', 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(1004, 'theme3', '', 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(1005, 'theme444', '', 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(1006, 'theme555', '', 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(1007, 'theme666', '', 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(1008, 'theme777', '', 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(1009, 'theme888', '', 0, 0, '0000-00-00', '0000-00-00 00:00:00'),
(1010, 'theme999', '', 0, 0, '0000-00-00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbdaysinfo`
--
ALTER TABLE `tbdaysinfo`
 ADD PRIMARY KEY (`iDayID`), ADD KEY `iThemeID` (`iThemeID`);

--
-- Indexes for table `tbroute`
--
ALTER TABLE `tbroute`
 ADD PRIMARY KEY (`iRouteID`), ADD KEY `iThemeID` (`iThemeID`);

--
-- Indexes for table `tbtheme`
--
ALTER TABLE `tbtheme`
 ADD PRIMARY KEY (`iThemeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbdaysinfo`
--
ALTER TABLE `tbdaysinfo`
MODIFY `iDayID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '天数id';
--
-- AUTO_INCREMENT for table `tbroute`
--
ALTER TABLE `tbroute`
MODIFY `iRouteID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '线路id',AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbtheme`
--
ALTER TABLE `tbtheme`
MODIFY `iThemeID` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主题id',AUTO_INCREMENT=1011;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
