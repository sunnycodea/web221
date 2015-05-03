-- CREATE DATABASE  weihang;
-- USE weihang; 
CREATE TABLE iF NOT EXISTS tbTheme (
  iThemeID int unsigned not null AUTO_INCREMENT comment '主题id',
  szName varchar(128) not null DEFAULT '' comment '主题名称',
  szDesc varchar(1024) not null DEFAULT '' comment '主题描述',
  iRouteNum int unsigned not null DEFAULT 0 comment '线路条数',
  iPrority tinyint unsigned DEFAULT 0 comment '优先级',
  dtDate date not null DEFAULT '0000-00-00' comment '主题投放时间',
  dtUpdatetime datetime not null DEFAULT '0000-00-00 00:00:00' comment '更新时间',
  PRIMARY key (iThemeID)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 comment='主题信息表';

CREATE TABLE iF NOT EXISTS tbRoute (
  iRouteID int unsigned not null AUTO_INCREMENT comment '线路id',
  iThemeID int unsigned not null DEFAULT 0 comment '主题id',
  szName varchar(128) not null DEFAULT '' comment '线路名称',
  szDesc varchar(1024) not null DEFAULT '' comment '线路描述',
  szImgUrl varchar(128) not null DEFAULT '' comment '线路图片',
  iMoney int unsigned not null DEFAULT 0 comment '线路价格',
  iDays int unsigned not null DEFAULT 0 comment '线路天数',
  iPrority tinyint unsigned DEFAULT 0 comment '优先级',
  iStatus tinyint unsigned DEFAULT 0 comment '状态 0 草稿 1正式 9 删除',
  dtDate date not null DEFAULT '0000-00-00' comment '线路投放时间',
  dtUpdatetime datetime not null DEFAULT '0000-00-00 00:00:00' comment '更新时间',
  PRIMARY key (iRouteID),
  index(iThemeID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 comment='线路信息表';

CREATE TABLE iF NOT EXISTS tbDaysInfo (
  iDayID int unsigned not null AUTO_INCREMENT comment '天数id',
  iRouteID int unsigned not null DEFAULT 0 comment '线路id',
  iThemeID int unsigned not null DEFAULT 0 comment '主题id',
  szDesc varchar(1024) not null DEFAULT '' comment '当天的描述',
  iDayNum int unsigned not null DEFAULT 0 comment '第N天',
  dtDate date not null DEFAULT '0000-00-00' comment '线路投放时间',
  PRIMARY key (iDayID),
  index(iThemeID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 comment='线路信息表';
