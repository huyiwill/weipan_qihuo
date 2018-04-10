set charset utf8;
CREATE TABLE `wp_accountinfo` (
  `aid` int(50) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `balance` double(24,2) DEFAULT '0.00' COMMENT '账号余额',
  `frozen` double(255,0) DEFAULT NULL COMMENT '冻结金额',
  `pwd` varchar(50) DEFAULT NULL COMMENT '交易密码',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=utf8;
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('1','67','10000919165.20','','');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('93','338','670.40','','');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('94','339','1150.00','','');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('95','340','9443.20','','');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('96','341','19430.00','','');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('97','342','19358.50','','');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('98','343','10000.00','','');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('99','344','0.00','','000000');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('100','345','0.00','','000000');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('101','346','0.00','','123123');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('102','347','499999989.20','','');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('103','348','0.00','','');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('104','349','0.00','','');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('105','350','0.00','','');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('106','351','0.00','','123321');
insert into `wp_accountinfo`(`aid`,`uid`,`balance`,`frozen`,`pwd`) values('107','352','0.00','','456346');
CREATE TABLE `wp_balance` (
  `bpid` int(11) NOT NULL AUTO_INCREMENT,
  `bptype` varchar(255) DEFAULT NULL COMMENT '收支类型',
  `bptime` int(20) DEFAULT NULL COMMENT '操作时间',
  `bpprice` double DEFAULT NULL COMMENT '收支',
  `remarks` varchar(255) DEFAULT NULL COMMENT '备注',
  `uid` int(11) DEFAULT NULL,
  `isverified` int(11) DEFAULT NULL COMMENT '判断申请是否通过，0未通过，1通过',
  `cltime` int(20) DEFAULT NULL COMMENT '审核时间',
  PRIMARY KEY (`bpid`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('11','提现','1452763308','540','','64','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('12','提现','1452763512','300','','64','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('13','提现','1452763894','1000','','64','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('14','提现','1452771435','600','','64','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('15','提现','1452771712','100','','64','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('16','提现','1452772051','500','','64','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('17','提现','1452773903','100','','64','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('18','提现','1452773949','200','','64','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('19','','','','','69','','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('20','提现','1453431038','1000','','67','2','1453431181');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('21','提现','1453431422','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('22','提现','1453431567','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('23','提现','1453431596','1000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('24','提现','1453431895','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('25','提现','1453431899','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('26','提现','1453431935','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('27','提现','1453431944','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('28','提现','1453431946','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('29','提现','1453431946','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('30','提现','1453431947','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('31','提现','1453431947','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('32','提现','1453431947','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('33','提现','1453431947','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('34','提现','1453431947','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('35','提现','1453431948','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('36','提现','1453431965','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('37','提现','1453431965','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('38','提现','1453431989','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('39','提现','1453431989','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('40','提现','1453431989','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('41','提现','1453431989','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('42','提现','1453431989','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('43','提现','1453431990','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('44','提现','1453431991','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('45','提现','1453431991','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('46','提现','1453431991','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('47','提现','1453431991','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('48','提现','1453431991','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('49','提现','1453431991','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('50','提现','1453431992','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('51','提现','1453431992','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('52','提现','1453431992','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('53','提现','1453431992','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('54','提现','1453431992','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('55','提现','1453431992','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('56','提现','1453431993','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('57','提现','1453431993','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('58','提现','1453431993','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('59','提现','1453431993','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('60','提现','1453431993','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('61','提现','1453431993','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('62','提现','1453431994','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('63','提现','1453431994','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('64','提现','1453431994','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('65','提现','1453431994','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('66','提现','1453431994','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('67','提现','1453431995','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('68','提现','1453431995','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('69','提现','1453431995','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('70','提现','1453431995','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('71','提现','1453431995','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('72','提现','1453431995','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('73','提现','1453431996','50000','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('74','提现','1453432095','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('75','提现','1453432232','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('76','提现','1453432846','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('77','提现','1453432862','100','','67','0','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('78','提现','1453433168','100','','67','2','1463023194');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('79','提现','1453433173','100','','67','1','1453441341');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('80','提现','1453433234','100','','67','2','1453441331');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('81','提现','1453433237','100','1516','67','2','1453434492');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('82','提现','1453433343','100','1111','67','2','1453434167');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('83','提现','1453433361','100','122','67','1','1453434141');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('84','提现','1453433485','100','','67','2','1453433657');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('85','','','','','67','','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('86','充值','1463023126','0.01','开始充值','67','','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('87','充值','1463023128','0','开始充值','67','','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('88','充值','1463023131','0','开始充值','67','','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('89','充值','1463121160','100','开始充值','342','','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('90','充值','1463386848','0.01','开始充值','67','','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('91','充值','1465900299','0.01','开始充值','351','','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('92','充值','1465900318','0.01','开始充值','351','','');
insert into `wp_balance`(`bpid`,`bptype`,`bptime`,`bpprice`,`remarks`,`uid`,`isverified`,`cltime`) values('93','充值','1465900318','0.01','开始充值','351','','');
CREATE TABLE `wp_bankinfo` (
  `bid` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '绑定',
  `bankname` varchar(20) NOT NULL COMMENT '所属银行',
  `province` varchar(20) NOT NULL COMMENT '省份',
  `city` varchar(20) NOT NULL COMMENT '城市',
  `branch` varchar(20) NOT NULL COMMENT '支行名',
  `banknumber` varchar(20) NOT NULL COMMENT '银行卡号',
  `busername` varchar(20) NOT NULL COMMENT '姓名',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
insert into `wp_bankinfo`(`bid`,`uid`,`bankname`,`province`,`city`,`branch`,`banknumber`,`busername`) values('20','338','','','','','','');
insert into `wp_bankinfo`(`bid`,`uid`,`bankname`,`province`,`city`,`branch`,`banknumber`,`busername`) values('21','339','','','','','','');
insert into `wp_bankinfo`(`bid`,`uid`,`bankname`,`province`,`city`,`branch`,`banknumber`,`busername`) values('22','340','','','','','','');
insert into `wp_bankinfo`(`bid`,`uid`,`bankname`,`province`,`city`,`branch`,`banknumber`,`busername`) values('23','341','','','','','','');
insert into `wp_bankinfo`(`bid`,`uid`,`bankname`,`province`,`city`,`branch`,`banknumber`,`busername`) values('24','342','','','','','','');
insert into `wp_bankinfo`(`bid`,`uid`,`bankname`,`province`,`city`,`branch`,`banknumber`,`busername`) values('25','343','','','','','','');
insert into `wp_bankinfo`(`bid`,`uid`,`bankname`,`province`,`city`,`branch`,`banknumber`,`busername`) values('26','67','','','','','','');
CREATE TABLE `wp_bankrournal` (
  `bankno` varchar(255) NOT NULL COMMENT '日志编号',
  `bankname` varchar(255) DEFAULT NULL COMMENT '银行名称',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `

cardnumber` int(20) DEFAULT NULL COMMENT '银行卡号',
  `cardholder` varchar(255) DEFAULT NULL COMMENT '持卡人名称'
) ENGINE=MyISAM DEFAULT CHARSET=gbk;
CREATE TABLE `wp_bournal` (
  `bno` varchar(100) NOT NULL COMMENT '提现/充值编号',
  `btype` varchar(20) DEFAULT NULL COMMENT '银行名称',
  `btime` int(20) DEFAULT NULL COMMENT '操作时间',
  `bprice` double(20,2) DEFAULT NULL COMMENT '提现/充值金额',
  `uid` int(20) DEFAULT NULL COMMENT '持卡人名称',
  `username` varchar(20) DEFAULT NULL COMMENT '用户名',
  `isverified` int(10) DEFAULT NULL,
  `balance` double(20,2) DEFAULT '0.00' COMMENT '账户余额'
) ENGINE=MyISAM AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf8;
CREATE TABLE `wp_catproduct` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) DEFAULT NULL,
  `myat` double(11,1) DEFAULT '10.0' COMMENT '点差*',
  `myatjia` double(11,2) DEFAULT '0.00' COMMENT '点差+',
  `ask` double(11,2) DEFAULT '0.00' COMMENT '现在的价格',
  `high` double(11,2) DEFAULT '0.00' COMMENT '最高',
  `low` double(11,2) DEFAULT '0.00' COMMENT '最低',
  `open` double(11,2) DEFAULT '0.00' COMMENT '今开',
  `close` double(11,2) DEFAULT '0.00' COMMENT '昨收',
  `eidtime` int(20) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
insert into `wp_catproduct`(`cid`,`cname`,`myat`,`myatjia`,`ask`,`high`,`low`,`open`,`close`,`eidtime`) values('1','油','100.0','1500.00','239.24','241.78','238.13','240.03','238.91','1451993790');
insert into `wp_catproduct`(`cid`,`cname`,`myat`,`myatjia`,`ask`,`high`,`low`,`open`,`close`,`eidtime`) values('2','白银','1.0','1000.00','2928.00','2942.00','2899.00','2901.00','2902.00','1451993791');
insert into `wp_catproduct`(`cid`,`cname`,`myat`,`myatjia`,`ask`,`high`,`low`,`open`,`close`,`eidtime`) values('3','铜','1.0','1500.00','30375.00','30499.00','29939.00','30057.00','29965.00','1451993792');
CREATE TABLE `wp_commission` (
  `comid` int(11) NOT NULL AUTO_INCREMENT,
  `ustyle` int(11) DEFAULT '0' COMMENT '状态，0显示，1是不显示',
  `rebate` double(11,2) DEFAULT NULL COMMENT '佣金',
  `cotime` int(20) DEFAULT NULL COMMENT '提现时间',
  `uid` int(11) DEFAULT NULL COMMENT '提线人id',
  PRIMARY KEY (`comid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
insert into `wp_commission`(`comid`,`ustyle`,`rebate`,`cotime`,`uid`) values('1','0','20.00','1450538571','64');
insert into `wp_commission`(`comid`,`ustyle`,`rebate`,`cotime`,`uid`) values('2','1','100.00','1450538571','64');
insert into `wp_commission`(`comid`,`ustyle`,`rebate`,`cotime`,`uid`) values('3','1','50.00','1450538571','64');
CREATE TABLE `wp_experience` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `eprice` int(11) DEFAULT NULL,
  `limittime` int(11) DEFAULT '0' COMMENT '时限',
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
insert into `wp_experience`(`eid`,`eprice`,`limittime`) values('5','200','30');
insert into `wp_experience`(`eid`,`eprice`,`limittime`) values('6','8','60');
insert into `wp_experience`(`eid`,`eprice`,`limittime`) values('7','200','50');
insert into `wp_experience`(`eid`,`eprice`,`limittime`) values('8','5','12');
insert into `wp_experience`(`eid`,`eprice`,`limittime`) values('9','8','10');
CREATE TABLE `wp_experienceinfo` (
  `exid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `eid` int(11) DEFAULT NULL,
  `exgtime` int(20) DEFAULT NULL COMMENT '领卷时间',
  `endtime` int(30) DEFAULT NULL COMMENT '过期时间',
  `getstyle` int(11) DEFAULT NULL COMMENT '状态',
  `getway` varchar(50) DEFAULT NULL COMMENT '获得途径',
  PRIMARY KEY (`exid`)
) ENGINE=MyISAM AUTO_INCREMENT=359 DEFAULT CHARSET=utf8;
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('81','362','6','1455702248','1460886248','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('82','362','6','1455702248','1460886248','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('83','362','6','1455702248','1460886248','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('84','364','6','1455764597','1460948597','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('85','364','6','1455764597','1460948597','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('86','364','6','1455764597','1460948597','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('87','365','6','1455766824','1460950824','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('88','365','6','1455766824','1460950824','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('89','365','6','1455766824','1460950824','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('90','354','6','1455789346','1460973346','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('91','354','6','1455789346','1460973346','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('92','354','6','1455789346','1460973346','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('93','358','6','1455876271','1461060271','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('94','358','6','1455876271','1461060271','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('95','358','6','1455876271','1461060271','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('96','347','6','1456977282','1462161282','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('97','347','6','1456977282','1462161282','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('98','347','6','1456977282','1462161282','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('99','366','6','1457156458','1462340458','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('100','366','6','1457156458','1462340458','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('101','366','6','1457156458','1462340458','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('102','369','6','1457338219','1462522219','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('103','369','6','1457338219','1462522219','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('104','369','6','1457338219','1462522219','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('105','370','6','1457340670','1462524670','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('106','370','6','1457340670','1462524670','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('107','370','6','1457340670','1462524670','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('108','352','6','1457427820','1462611820','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('109','352','6','1457427820','1462611820','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('110','352','6','1457427820','1462611820','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('111','64','6','1457427954','1462611954','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('112','64','6','1457427954','1462611954','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('113','64','6','1457427954','1462611954','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('114','64','6','1457427955','1462611955','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('115','64','6','1457427955','1462611955','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('116','64','6','1457427955','1462611955','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('117','64','6','1457427966','1462611966','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('118','64','6','1457427966','1462611966','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('119','64','6','1457427966','1462611966','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('120','372','6','1457427966','1462611966','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('121','372','6','1457427966','1462611966','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('122','372','6','1457427966','1462611966','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('123','373','6','1457429030','1462613030','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('124','373','6','1457429030','1462613030','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('125','373','6','1457429030','1462613030','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('126','376','6','1458354473','1463538473','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('127','376','6','1458354473','1463538473','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('128','376','6','1458354473','1463538473','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('129','351','6','1458544181','1463728181','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('130','351','6','1458544181','1463728181','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('131','351','6','1458544181','1463728181','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('132','377','6','1458733994','1463917994','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('133','377','6','1458733994','1463917994','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('134','377','6','1458733994','1463917994','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('135','378','6','1459403509','1464587509','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('136','378','6','1459403509','1464587509','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('137','378','6','1459403509','1464587509','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('138','64','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('139','65','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('140','66','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('141','67','5','1459406331','1461998331','1','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('142','68','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('143','69','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('144','70','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('145','71','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('146','102','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('147','103','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('148','127','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('149','129','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('150','130','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('151','143','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('152','144','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('153','145','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('154','146','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('155','147','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('156','148','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('157','159','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('158','378','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('159','160','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('160','347','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('161','348','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('162','349','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('163','350','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('164','351','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('165','352','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('166','353','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('167','354','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('168','355','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('169','356','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('170','357','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('171','358','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('172','359','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('173','360','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('174','361','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('175','362','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('176','365','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('177','364','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('178','368','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('179','367','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('180','369','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('181','370','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('182','371','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('183','372','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('184','373','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('185','374','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('186','375','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('187','376','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('188','377','5','1459406331','1461998331','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('189','64','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('190','65','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('191','66','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('192','67','5','1459428937','1462020937','1','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('193','68','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('194','69','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('195','70','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('196','71','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('197','102','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('198','103','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('199','127','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('200','129','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('201','130','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('202','143','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('203','144','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('204','145','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('205','146','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('206','147','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('207','148','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('208','159','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('209','378','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('210','160','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('211','347','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('212','348','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('213','349','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('214','350','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('215','351','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('216','352','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('217','353','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('218','354','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('219','355','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('220','356','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('221','357','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('222','358','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('223','359','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('224','360','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('225','361','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('226','362','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('227','365','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('228','364','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('229','368','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('230','367','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('231','369','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('232','370','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('233','371','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('234','372','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('235','373','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('236','374','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('237','375','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('238','376','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('239','377','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('240','379','5','1459428937','1462020937','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('241','381','6','1459922919','1465106919','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('242','381','6','1459922919','1465106919','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('243','381','6','1459922919','1465106919','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('244','382','6','1459923639','1465107639','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('245','382','6','1459923639','1465107639','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('246','382','6','1459923639','1465107639','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('247','384','6','1459925374','1465109374','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('248','384','6','1459925374','1465109374','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('249','384','6','1459925374','1465109374','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('250','385','6','1459925506','1465109506','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('251','385','6','1459925506','1465109506','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('252','385','6','1459925506','1465109506','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('253','387','6','1459925810','1465109810','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('254','387','6','1459925810','1465109810','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('255','387','6','1459925810','1465109810','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('256','90','6','1459925810','1465109810','0','分享赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('257','388','6','1459926135','1465110135','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('258','388','6','1459926135','1465110135','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('259','388','6','1459926135','1465110135','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('260','350','6','1459926194','1465110194','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('261','350','6','1459926194','1465110194','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('262','350','6','1459926194','1465110194','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('263','388','6','1459926194','1465110194','0','分享赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('264','389','6','1459927704','1465111704','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('265','389','6','1459927704','1465111704','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('266','389','6','1459927704','1465111704','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('267','390','6','1459928805','1465112805','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('268','390','6','1459928805','1465112805','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('269','390','6','1459928805','1465112805','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('270','361','6','1460340420','1465524420','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('271','361','6','1460340420','1465524420','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('272','361','6','1460340420','1465524420','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('273','64','6','1460340425','1465524425','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('274','64','6','1460340425','1465524425','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('275','64','6','1460340425','1465524425','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('276','393','6','1460364807','1465548807','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('277','393','6','1460364807','1465548807','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('278','393','6','1460364807','1465548807','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('279','396','6','1460509650','1465693650','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('280','396','6','1460509650','1465693650','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('281','396','6','1460509650','1465693650','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('282','397','6','1460535355','1465719355','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('283','397','6','1460535355','1465719355','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('284','397','6','1460535355','1465719355','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('285','64','6','1460535359','1465719359','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('286','64','6','1460535359','1465719359','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('287','64','6','1460535359','1465719359','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('288','398','6','1460535382','1465719382','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('289','398','6','1460535382','1465719382','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('290','398','6','1460535382','1465719382','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('291','399','6','1460606967','1465790967','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('292','399','6','1460606967','1465790967','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('293','399','6','1460606967','1465790967','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('294','400','6','1460967642','1466151642','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('295','400','6','1460967642','1466151642','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('296','400','6','1460967642','1466151642','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('297','401','6','1461033148','1466217148','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('298','401','6','1461033148','1466217148','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('299','401','6','1461033148','1466217148','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('300','402','6','1461209909','1466393909','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('301','402','6','1461209909','1466393909','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('302','402','6','1461209909','1466393909','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('303','403','6','1461217356','1466401356','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('304','403','6','1461217356','1466401356','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('305','403','6','1461217356','1466401356','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('306','404','6','1461321462','1466505462','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('307','404','6','1461321462','1466505462','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('308','404','6','1461321462','1466505462','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('309','360','6','1461321474','1466505474','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('310','360','6','1461321474','1466505474','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('311','360','6','1461321474','1466505474','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('312','405','6','1461577079','1466761079','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('313','405','6','1461577079','1466761079','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('314','405','6','1461577079','1466761079','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('315','406','6','1461687869','1466871869','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('316','406','6','1461687869','1466871869','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('317','406','6','1461687869','1466871869','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('318','407','6','1461722356','1466906356','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('319','407','6','1461722356','1466906356','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('320','407','6','1461722356','1466906356','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('321','408','6','1461723060','1466907060','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('322','408','6','1461723060','1466907060','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('323','408','6','1461723060','1466907060','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('324','409','6','1461910621','1467094621','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('325','409','6','1461910621','1467094621','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('326','409','6','1461910621','1467094621','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('327','410','6','1461915154','1467099154','1','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('328','410','6','1461915154','1467099154','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('329','410','6','1461915154','1467099154','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('330','67','5','1462501392','1465093392','1','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('331','412','6','1462711994','1467895994','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('332','412','6','1462711994','1467895994','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('333','412','6','1462711994','1467895994','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('334','68','9','1463386456','1464250456','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('335','67','9','1463386456','1464250456','1','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('336','338','9','1463386456','1464250456','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('337','339','9','1463386456','1464250456','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('338','340','9','1463386456','1464250456','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('339','341','9','1463386456','1464250456','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('340','342','9','1463386456','1464250456','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('341','343','9','1463386456','1464250456','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('342','344','9','1463386456','1464250456','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('343','345','9','1463386456','1464250456','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('344','346','6','1463858338','1469042338','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('345','346','6','1463858338','1469042338','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('346','346','6','1463858338','1469042338','0','注册赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('347','67','6','1463858338','1469042338','1','分享赠送');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('348','68','5','1464117883','1466709883','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('349','67','5','1464117883','1466709883','1','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('350','338','5','1464117883','1466709883','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('351','339','5','1464117883','1466709883','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('352','340','5','1464117883','1466709883','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('353','341','5','1464117883','1466709883','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('354','342','5','1464117883','1466709883','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('355','343','5','1464117883','1466709883','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('356','344','5','1464117883','1466709883','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('357','345','5','1464117883','1466709883','0','后台发放');
insert into `wp_experienceinfo`(`exid`,`uid`,`eid`,`exgtime`,`endtime`,`getstyle`,`getway`) values('358','346','5','1464117883','1466709883','0','后台发放');
CREATE TABLE `wp_journal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jno` varchar(255) NOT NULL COMMENT '日志编号',
  `uid` int(11) DEFAULT NULL,
  `jtype` varchar(255) DEFAULT NULL COMMENT '操作类型，建仓，平仓',
  `jtime` int(20) DEFAULT NULL COMMENT '操作时间',
  `jincome` double(255,2) DEFAULT NULL COMMENT '收支金额',
  `number` int(11) DEFAULT NULL COMMENT '手数',
  `remarks` varchar(255) DEFAULT NULL COMMENT '备注：',
  `balance` double(255,2) DEFAULT NULL COMMENT '记录当时用户余额',
  `jstate` int(11) DEFAULT NULL COMMENT '0亏损，1盈利',
  `jusername` varchar(20) DEFAULT NULL COMMENT '用户名',
  `jostyle` int(11) DEFAULT NULL COMMENT '0涨，1跌',
  `juprice` double(11,2) DEFAULT NULL COMMENT '产品单价',
  `jfee` double(11,1) DEFAULT NULL COMMENT '手续费',
  `jbuyprice` double(11,2) DEFAULT NULL COMMENT '进仓价',
  `jsellprice` double(11,2) DEFAULT NULL COMMENT '平仓价',
  `jaccess` double(11,2) DEFAULT NULL COMMENT '出入金额',
  `jploss` double(11,2) DEFAULT NULL COMMENT '盈亏金额',
  `oid` int(10) DEFAULT NULL COMMENT '订单id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=193 DEFAULT CHARSET=utf8;
insert into `wp_journal`(`id`,`jno`,`uid`,`jtype`,`jtime`,`jincome`,`number`,`remarks`,`balance`,`jstate`,`jusername`,`jostyle`,`juprice`,`jfee`,`jbuyprice`,`jsellprice`,`jaccess`,`jploss`,`oid`) values('192','1464316301100','67','建仓','1464316301','8.00','1','0.1t油','10000919165.20','0','test1234','0','8.00','0.6','322.28','','-8.60','','365');
CREATE TABLE `wp_managerinfo` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `poid` int(11) DEFAULT NULL COMMENT '持仓人',
  `coid` int(11) DEFAULT NULL COMMENT '平仓人',
  `mname` varchar(255) DEFAULT NULL COMMENT '法人名字',
  `brokerid` varchar(255) DEFAULT NULL COMMENT '法人代表身份证',
  `photoid` varchar(255) DEFAULT NULL COMMENT '会员资质',
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('64','67','','','1631651','165416545646','2016-01-21/56a0bb4093ad5.png');
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('69','69','','','165','165','2016-01-21/56a0c4e5a5cc4.png');
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('70','338','','','wifi伴侣','440772198707132142','2016-05-16/5739690c297fe.png');
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('71','339','','','真的wifi伴侣','440772198612142261','2016-05-16/57396a7a95d99.png');
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('72','340','','','daili1','440772199821028173','2016-05-13/5735962bd27cc.png');
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('73','341','','','','44078219920814216X','');
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('74','342','','','yonghu','44078219920814216X','2016-05-13/57358b390a327.jpeg');
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('75','343','','','','44078219920814216X','');
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('76','68','','','d;fljds;jf','349087398749037','2016-05-16/573969034d34c.png');
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('77','344','','','rendaxia','32546786543245','2016-05-16/573973ce155e9.png');
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('78','348','','','','610115199009263515','');
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('79','349','','','','610115199009263515','');
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('80','350','','','','610115199009263515','');
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('81','351','','','','','');
insert into `wp_managerinfo`(`mid`,`uid`,`poid`,`coid`,`mname`,`brokerid`,`photoid`) values('82','352','','','','','');
CREATE TABLE `wp_newsclass` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fclass` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
insert into `wp_newsclass`(`fid`,`fclass`) values('1','最新资讯');
insert into `wp_newsclass`(`fid`,`fclass`) values('2','财经要闻');
insert into `wp_newsclass`(`fid`,`fclass`) values('3','系统公告');
insert into `wp_newsclass`(`fid`,`fclass`) values('4','财经早报');
CREATE TABLE `wp_newsinfo` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `ntitle` varchar(255) DEFAULT NULL COMMENT '标题',
  `ncontent` text COMMENT '内容',
  `ncover` varchar(255) DEFAULT NULL COMMENT '缩略图',
  `ncategory` int(11) DEFAULT NULL COMMENT '新闻分类id',
  `ntime` int(20) DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
insert into `wp_newsinfo`(`nid`,`ntitle`,`ncontent`,`ncover`,`ncategory`,`ntime`) values('7','铜行情走势','&lt;span&gt;　全球矿业巨擘力拓(RIO)周一(9?7? )表示，全球&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;http://futures.hexun.com/copper/index.html&quot;&gt;铜&lt;/a&gt;市可能2-3年内陷入结构性短缺，电厂相关需求将会使其成为首个走出供应过剩窘境的&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;http://jingzhi.funds.hexun.com/161715.shtml&quot;&gt;大宗商品&lt;/a&gt;。&lt;/span&gt;&lt;span&gt;　　因产出扩增以及&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;http://jingzhi.funds.hexun.com/512600.shtml&quot;&gt;主要消费&lt;/a&gt;国中国放缓程度大于预期，许多大宗商品的价格目前都接近2008-2009年金融危机期间的低点，包括&lt;a target=&quot;_blank&quot; rel=&quot;nofollow&quot; href=&quot;http://futures.hexun.com/oil/index.html&quot;&gt;石油&lt;/a&gt;、天然气、煤炭、铁矿石以及多种金属。&lt;/span&gt;　　然而，力拓铜煤事业执行长发言称，预计铜将成为首个摆脱供应过剩的大宗商品。　　他指出，“市况现在相当艰困，但铜是一个相当具有吸引力的大宗商品。在2-3年之内，可能会转为短缺。　　近两个交易日，沪铜1607跌势暂缓，下方支撑十分强劲，而接下去来的一段时间，沪铜还将延续探底之旅。','2016-05-12/57340367d4eca.jpg','1','1462982400');
CREATE TABLE `wp_order` (
  `oid` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '商品编号',
  `pid` int(11) NOT NULL COMMENT '产品ID',
  `ostyle` int(12) NOT NULL DEFAULT '0' COMMENT '0涨 1跌，',
  `buytime` int(20) DEFAULT NULL COMMENT '建仓',
  `onumber` int(20) DEFAULT NULL COMMENT '手数',
  `selltime` int(20) DEFAULT '0' COMMENT '平仓',
  `ostaus` int(11) DEFAULT NULL COMMENT '0交易，1平仓',
  `buyprice` double(20,2) DEFAULT NULL COMMENT '入仓价',
  `sellprice` double(20,2) DEFAULT '0.00' COMMENT '平仓价',
  `endprofit` int(11) DEFAULT '0' COMMENT '止盈',
  `endloss` int(11) DEFAULT '0' COMMENT '止亏',
  `fee` double(11,1) DEFAULT NULL COMMENT '手续费',
  `eid` int(11) NOT NULL COMMENT '体验卷状态',
  `orderno` varchar(40) DEFAULT NULL COMMENT '订单编号',
  `ptitle` varchar(255) DEFAULT NULL COMMENT '商品名称',
  `commission` double(255,1) DEFAULT '0.0' COMMENT '佣金',
  `ploss` double(255,1) DEFAULT '0.0' COMMENT '盈亏',
  `display` int(11) DEFAULT '0' COMMENT '0,可查询，1不可查询',
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=366 DEFAULT CHARSET=utf8;
insert into `wp_order`(`oid`,`uid`,`pid`,`ostyle`,`buytime`,`onumber`,`selltime`,`ostaus`,`buyprice`,`sellprice`,`endprofit`,`endloss`,`fee`,`eid`,`orderno`,`ptitle`,`commission`,`ploss`,`display`) values('365','67','2','0','1464316301','1','1464316555','1','322.28','','10','10','0.6','0','1464316301100','0.1t油','10000919165.2','-322.3','0');
CREATE TABLE `wp_productinfo` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `ptitle` varchar(255) DEFAULT NULL COMMENT '标题',
  `cid` int(11) DEFAULT NULL COMMENT '产品分类id',
  `uprice` double DEFAULT NULL,
  `feeprice` double DEFAULT NULL,
  `wave` double DEFAULT NULL COMMENT '产品波动',
  `company` varchar(255) DEFAULT NULL COMMENT '单位',
  `patx` double(11,0) DEFAULT '0' COMMENT '点差乘',
  `patj` double(11,0) DEFAULT '0' COMMENT '点差加',
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
insert into `wp_productinfo`(`pid`,`ptitle`,`cid`,`uprice`,`feeprice`,`wave`,`company`,`patx`,`patj`) values('1','5t油','1','200','30','0.5','5t','0','0');
insert into `wp_productinfo`(`pid`,`ptitle`,`cid`,`uprice`,`feeprice`,`wave`,`company`,`patx`,`patj`) values('2','0.1t油','1','8','0.6','1','0.1t','0','0');
insert into `wp_productinfo`(`pid`,`ptitle`,`cid`,`uprice`,`feeprice`,`wave`,`company`,`patx`,`patj`) values('3','1t油','1','80','6','0.5','1t','0','0');
insert into `wp_productinfo`(`pid`,`ptitle`,`cid`,`uprice`,`feeprice`,`wave`,`company`,`patx`,`patj`) values('4','5000g银砖','2','200','30','5','5000g','0','0');
insert into `wp_productinfo`(`pid`,`ptitle`,`cid`,`uprice`,`feeprice`,`wave`,`company`,`patx`,`patj`) values('5','1000g银砖','2','80','6','1','1000g','0','0');
insert into `wp_productinfo`(`pid`,`ptitle`,`cid`,`uprice`,`feeprice`,`wave`,`company`,`patx`,`patj`) values('6','100g银砖','2','8','0.6','0.1','100g','0','0');
insert into `wp_productinfo`(`pid`,`ptitle`,`cid`,`uprice`,`feeprice`,`wave`,`company`,`patx`,`patj`) values('7','5t铜','3','200','30','10','5t','0','0');
insert into `wp_productinfo`(`pid`,`ptitle`,`cid`,`uprice`,`feeprice`,`wave`,`company`,`patx`,`patj`) values('8','1t铜','3','80','6','2','1t','0','0');
insert into `wp_productinfo`(`pid`,`ptitle`,`cid`,`uprice`,`feeprice`,`wave`,`company`,`patx`,`patj`) values('9','0.1t铜2222','3','100','0.6','0.2','0.1t','0','0');
CREATE TABLE `wp_userinfo` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `upwd` varchar(50) DEFAULT NULL,
  `utel` varchar(50) DEFAULT NULL,
  `utime` int(20) DEFAULT NULL COMMENT '注册时间',
  `agenttype` int(20) DEFAULT '0' COMMENT '0普通客户，1申请经纪人中，2经纪人',
  `otype` int(11) NOT NULL DEFAULT '0' COMMENT '0普通会员，2会员单位，1经纪人,3超级管理员',
  `ustatus` int(11) NOT NULL DEFAULT '0' COMMENT '0正常状态，1冻结状态，',
  `oid` int(11) DEFAULT NULL COMMENT '上线字段',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `portrait` varchar(255) DEFAULT NULL COMMENT '头像',
  `lastlog` int(20) DEFAULT NULL COMMENT '最后登录时间',
  `managername` varchar(255) DEFAULT NULL COMMENT '上线用户名',
  `comname` varchar(120) DEFAULT NULL COMMENT '公司名称',
  `comqua` varchar(50) DEFAULT NULL COMMENT '公司资质',
  `rebate` varchar(11) DEFAULT NULL COMMENT '返点',
  `feerebate` varchar(11) DEFAULT NULL COMMENT '手续费返点',
  `usertype` int(11) DEFAULT '0' COMMENT '0不是微信用户。1是微信用户',
  `wxtype` int(11) DEFAULT '0' COMMENT '1表示微信还没注册，0微信已注册成会员。',
  `openid` varchar(50) NOT NULL COMMENT '存微信用户的id',
  `nickname` varchar(255) DEFAULT NULL COMMENT '用户昵称',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=358 DEFAULT CHARSET=utf8;
insert into `wp_userinfo`(`uid`,`username`,`upwd`,`utel`,`utime`,`agenttype`,`otype`,`ustatus`,`oid`,`address`,`portrait`,`lastlog`,`managername`,`comname`,`comqua`,`rebate`,`feerebate`,`usertype`,`wxtype`,`openid`,`nickname`) values('68','adminwp888','098e4ee591a3d53b6d4eb85eede737c7','15999999999','1450162830','2','3','0','','','','1450147002','','','','','','0','0','','');
insert into `wp_userinfo`(`uid`,`username`,`upwd`,`utel`,`utime`,`agenttype`,`otype`,`ustatus`,`oid`,`address`,`portrait`,`lastlog`,`managername`,`comname`,`comqua`,`rebate`,`feerebate`,`usertype`,`wxtype`,`openid`,`nickname`) values('67','test1234','08573cded012b9c07a43cfb1a1d7e69d','15999999999','1450147120','2','2','0','64','陕西省西安市','http://wx.qlogo.cn/mmopen/EKHgsM07oxBQtGYiaYwbK8LkJsw2KBwELZtJCapJHKhJ0OzQaFT2nE9aRicfrJAGe6kW8ZYGMsSnccXsn39Daniams2sogpKJsg/0','1465897522','456789','','','','','0','0','','');
insert into `wp_userinfo`(`uid`,`username`,`upwd`,`utel`,`utime`,`agenttype`,`otype`,`ustatus`,`oid`,`address`,`portrait`,`lastlog`,`managername`,`comname`,`comqua`,`rebate`,`feerebate`,`usertype`,`wxtype`,`openid`,`nickname`) values('347','wangbing','1d840762102860e4811c1b7765b6c0cc','18710719713','1464174358','0','0','0','67','','','1464223301','','','','','','0','0','','');
insert into `wp_userinfo`(`uid`,`username`,`upwd`,`utel`,`utime`,`agenttype`,`otype`,`ustatus`,`oid`,`address`,`portrait`,`lastlog`,`managername`,`comname`,`comqua`,`rebate`,`feerebate`,`usertype`,`wxtype`,`openid`,`nickname`) values('348','huiyuan','c366900e9261bf3fe9da715eb1ed81eb','18710484848','1464175666','0','2','0','68','mdomo  ','','','adminwp888','都默默都快没豆肯定怕【','飞毛士大夫','10','10','0','0','','');
insert into `wp_userinfo`(`uid`,`username`,`upwd`,`utel`,`utime`,`agenttype`,`otype`,`ustatus`,`oid`,`address`,`portrait`,`lastlog`,`managername`,`comname`,`comqua`,`rebate`,`feerebate`,`usertype`,`wxtype`,`openid`,`nickname`) values('349','wangbing1234','a9faaf34a29036b54639da98d874a419','15129242446','1464191899','0','0','0','67','1111','','','test1234','','','','','0','0','','');
insert into `wp_userinfo`(`uid`,`username`,`upwd`,`utel`,`utime`,`agenttype`,`otype`,`ustatus`,`oid`,`address`,`portrait`,`lastlog`,`managername`,`comname`,`comqua`,`rebate`,`feerebate`,`usertype`,`wxtype`,`openid`,`nickname`) values('350','lilyallen','0eaea3201fb3741c2bdffebf9f2fc2d5','18710719712','1464222264','0','1','0','67','终将失去','','','test1234','事实上身上试试','','20','20','0','0','','');
insert into `wp_userinfo`(`uid`,`username`,`upwd`,`utel`,`utime`,`agenttype`,`otype`,`ustatus`,`oid`,`address`,`portrait`,`lastlog`,`managername`,`comname`,`comqua`,`rebate`,`feerebate`,`usertype`,`wxtype`,`openid`,`nickname`) values('351','pNecg1465899746','d07668efa5b5e2ec49675b10cba57e85','','1465899757','0','0','0','','中国陕西西安','http://wx.qlogo.cn/mmopen/Cic3pshodG4Zlc62fGnQjAxdKwtibnHMicicejpxslc9DqyiakQ34150icsyia0QHcFkUSJDUHvpOO1M0WSVBEkVeazUuViakMKMgK3d/0','1465913401','','','','','','1','0','okSdzwrE5FW9r7hSZTfFPXwpNecg','网站建设，软件系统开发。');
insert into `wp_userinfo`(`uid`,`username`,`upwd`,`utel`,`utime`,`agenttype`,`otype`,`ustatus`,`oid`,`address`,`portrait`,`lastlog`,`managername`,`comname`,`comqua`,`rebate`,`feerebate`,`usertype`,`wxtype`,`openid`,`nickname`) values('352','YDOnc1465908502','699c296e24596ff4ad76f3f2dfc6fbf4','','1465908518','0','0','0','','中国浙江杭州','http://wx.qlogo.cn/mmopen/Q3auHgzwzM4rTv2r0tWBfc3nTlMT4g8PgyAqvuwibzI2jYRia9haXSOa6Jiarn8iadibWIRiaEY9gSO1j0x4H6Z5G9ic45MfVVSibibFSLPP9f0oTZ3U/0','1465977816','','','','','','1','0','okSdzwoSfrn9iG-lzozQJZjYDOnc','运筹帷幄');
insert into `wp_userinfo`(`uid`,`username`,`upwd`,`utel`,`utime`,`agenttype`,`otype`,`ustatus`,`oid`,`address`,`portrait`,`lastlog`,`managername`,`comname`,`comqua`,`rebate`,`feerebate`,`usertype`,`wxtype`,`openid`,`nickname`) values('353','Ey44E1465966513','','','','0','0','0','','中国','http://wx.qlogo.cn/mmopen/ZHupDl2pP6dkm9AtqzOwroYEhL0dXBTTGNt1xCtnthfNYlbNIyx1cyahhLhUG7BQ5iciaPpsUdAYtMvk6uGjAbs1bib4lcfmuYY/0','','','','','','','1','1','okSdzwviird_izpDsuntgcFEy44E','艾斯普利');
insert into `wp_userinfo`(`uid`,`username`,`upwd`,`utel`,`utime`,`agenttype`,`otype`,`ustatus`,`oid`,`address`,`portrait`,`lastlog`,`managername`,`comname`,`comqua`,`rebate`,`feerebate`,`usertype`,`wxtype`,`openid`,`nickname`) values('354','FVO7k1465977814','','','','0','0','0','','中国河南郑州','http://wx.qlogo.cn/mmopen/Cic3pshodG4Zlc62fGnQjAxZNGRCMYDcc02HqW2bKbduu4S8H7FtJ9SOA8Uibtuz88KrmHgjWna3rBl2O2GVVkmpT34icDfMIJV/0','','','','','','','1','1','okSdzwp77pWWB-yt3B6DZEtFVO7k','赵');
insert into `wp_userinfo`(`uid`,`username`,`upwd`,`utel`,`utime`,`agenttype`,`otype`,`ustatus`,`oid`,`address`,`portrait`,`lastlog`,`managername`,`comname`,`comqua`,`rebate`,`feerebate`,`usertype`,`wxtype`,`openid`,`nickname`) values('355','s8srI1465977853','','','','0','0','0','','中国河南郑州','http://wx.qlogo.cn/mmopen/n8sstUEChQ7poTYVS3j6XTFQpwQQibGlstkiaJpicVCdefRlVIvQvnicrPIefKPyib3QVJEewOwNiaRgG2jaTZptjnZz6Ccyw8Yotq/0','','','','','','','1','1','okSdzwrc6GkVxZ4x-QRZEA_s8srI','。。。');
insert into `wp_userinfo`(`uid`,`username`,`upwd`,`utel`,`utime`,`agenttype`,`otype`,`ustatus`,`oid`,`address`,`portrait`,`lastlog`,`managername`,`comname`,`comqua`,`rebate`,`feerebate`,`usertype`,`wxtype`,`openid`,`nickname`) values('356','eds8w1465978044','','','','0','0','0','','中国河南郑州','http://wx.qlogo.cn/mmopen/Cic3pshodG4Zlc62fGnQjAxViaYl0Pk9dEkgAiaZoX3A0ibK8cGMQeoc6wcLJICJGcNmvuUibktySeNVhvYhvXZl6DM1yU0jAeL8L/0','','','','','','','1','1','okSdzwplgGszP8IAdt98shBeds8w','与风相拥');
insert into `wp_userinfo`(`uid`,`username`,`upwd`,`utel`,`utime`,`agenttype`,`otype`,`ustatus`,`oid`,`address`,`portrait`,`lastlog`,`managername`,`comname`,`comqua`,`rebate`,`feerebate`,`usertype`,`wxtype`,`openid`,`nickname`) values('357','admin888','admin888','13800138000','1470075581','0','0','1','0','','','','','','','','','0','0','','');
CREATE TABLE `wp_webconfig` (
  `id` int(11) NOT NULL,
  `isopen` int(11) NOT NULL DEFAULT '0' COMMENT '0开启，1关闭',
  `webname` varchar(20) DEFAULT NULL COMMENT '网站名称',
  `begintime` int(20) DEFAULT NULL COMMENT '休市开始时间',
  `endtime` int(20) DEFAULT NULL COMMENT '休市结束时间',
  `notice` varchar(100) DEFAULT NULL COMMENT '公告',
  `isnotice` int(10) DEFAULT '0' COMMENT '0开启，1关闭',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
insert into `wp_webconfig`(`id`,`isopen`,`webname`,`begintime`,`endtime`,`notice`,`isnotice`) values('1','1','期货测测','','','你们好，在这里我深知这一切是我没法控制的！','0');
CREATE TABLE `wp_wechat` (
  `wcid` int(11) NOT NULL AUTO_INCREMENT,
  `appid` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'AppID(应用ID)',
  `appsecret` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'AppSecret(应用密钥)',
  `wxname` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '公众号名称',
  `wxlogin` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '微信原始账号',
  `wxurl` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'url服务器地址',
  `token` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '令牌',
  `encodingaeskey` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '消息加密解密秘钥',
  `parterid` int(11) DEFAULT NULL COMMENT '微信商户账号',
  `parterkey` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '32位密码',
  PRIMARY KEY (`wcid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;
insert into `wp_wechat`(`wcid`,`appid`,`appsecret`,`wxname`,`wxlogin`,`wxurl`,`token`,`encodingaeskey`,`parterid`,`parterkey`) values('3','wx911b7cf7b6169721','','','','','','','0','');
