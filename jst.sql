/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : jst

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2014-01-03 16:14:20
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `think_admin`
-- ----------------------------
DROP TABLE IF EXISTS `think_admin`;
CREATE TABLE `think_admin` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `contact` varchar(15) DEFAULT NULL,
  `phone` char(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `area` varchar(20) DEFAULT NULL COMMENT '区域',
  `country` varchar(20) DEFAULT NULL COMMENT '地址',
  `ip` char(15) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `regtime` int(11) NOT NULL,
  `lasttime` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `type` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_admin
-- ----------------------------
INSERT INTO `think_admin` VALUES ('1', 'admin', 'c3284d0f94606de1fd2af172aba15bf3', '管理员', '18000000000', 'admin@admin.com', '', '本机地址', '127.0.0.1', '1', '0', '1388244404');
INSERT INTO `think_admin` VALUES ('2', 'edit', 'c3284d0f94606de1fd2af172aba15bf3', '编辑', '13000000000', 'edit@edit.com', '', '本机地址', '127.0.0.1', '1', '0', '1386151595');

-- ----------------------------
-- Table structure for `think_article`
-- ----------------------------
DROP TABLE IF EXISTS `think_article`;
CREATE TABLE `think_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` char(7) DEFAULT NULL COMMENT '颜色',
  `litpic` varchar(50) DEFAULT NULL COMMENT '缩略图',
  `keywords` varchar(100) DEFAULT NULL COMMENT '关键字',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `title` varchar(90) DEFAULT NULL COMMENT '标题',
  `identifier` varchar(10) DEFAULT NULL COMMENT '标识符',
  `brieftitle` varchar(30) DEFAULT NULL COMMENT '短标题',
  `cid` smallint(6) DEFAULT '0' COMMENT '栏目ID',
  `rultype` tinyint(4) DEFAULT '0' COMMENT 'URL类型：1 跳转 , 2 普通',
  `redirecturl` varchar(255) DEFAULT NULL COMMENT 'URL跳转',
  `content` text COMMENT '内容',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  `hits` int(11) DEFAULT '0' COMMENT '点击率',
  `status` tinyint(1) DEFAULT NULL COMMENT '0',
  `uptime` int(11) DEFAULT NULL COMMENT '更新时间',
  `type` tinyint(1) DEFAULT '1' COMMENT '类型:1单篇文章,2多篇文章',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`),
  KEY `identifier` (`identifier`),
  KEY `cid` (`cid`),
  KEY `sort` (`sort`),
  KEY `hits` (`hits`),
  KEY `type` (`type`),
  KEY `uptime` (`uptime`),
  KEY `addtime` (`addtime`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_article
-- ----------------------------
INSERT INTO `think_article` VALUES ('33', '', '', '家庭视频电话市场——苹果熟了', '家庭视频电话市场——苹果熟了', '家庭视频电话市场——苹果熟了', null, '', '1', '0', '', '<p><br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;日前，新修订的《老年人权益保障法》正式施行。将“常回家看看”的精神赡养写入条文，意味着在日益进入“老龄化”的中国，“孝道入心”已经是一个重要课题。但不少老人也认为，子女工作压力大、经济不宽裕、时间紧，不能常回家实属无奈。</p><p><br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;如何破解亲情路上时间障碍、经济障碍与交通工具障碍这“三座大山”？记者昨天从相关部门获悉，目前已经有国内通信企业正式公布方便老年人使用的\r\n“家庭视频电话”，通过整合固定电话网络与互联网，有效实现亲情“一碗汤”距离，一键帮助老年人实现高清视频通话，成为全国4亿多“老少相隔”家庭随时\r\n“回家看看”的简单选择。</p><p><br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;或者这是一个信号：伴随宽带网络不断普及，和高清晰度液晶屏、高性能处理器等硬件成本的不断降低，视频电话所需的终端和网络条件日渐成熟，家庭视频电话的“苹果成熟季”就要来了。</p><p><br/></p><p class=\"news1_title\"><strong>“高清”通道：十年磨一剑</strong></p><p><br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;早于2004年5月，在经历一年半的试用后，联通将普通用户“宝视通”可视电话业务的国内资费降至每分钟2毛钱，可视电话机价格降为3000元\r\n左右。遗憾的是，“可视电话”并没有因为资费的下降走入千家万户，而“电脑＋耳麦＋摄像头”的“网络视频聊天”却成为了人们热衷的交流方式。究其原因，低\r\n清晰度视频质量、并不低廉的部署成本和复杂的使用是家庭视频电话败落的三大原因。</p><p><br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;然而十多年过去了，悄然无声中物转星移。2G光纤已经成为城市用户宽带入户的新的标准；“村村通”工程让多数农村拥有了4M以上的宽带接入，部分农村达到100M，甚至直接引入光纤。这样的基础设施为家庭视频电话由“可视”向“高清”，解决了最为关键的传输通道问题。</p><p><br/></p><p class=\"news1_title\"><strong>“简单”+“低廉”：技术突破之王道</strong></p><p><br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;iPod改变了音乐享受的方式，iPhone给予了智能手机的应用未来，家庭视频电话市场要想真正启动，还需要改变人们的使用认知。或许，这并不是联通、电信等运营商所能承载的历史使命。</p><p><br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;“在过去的十几年，包括运营商在内的产业巨头们从未放弃对家庭视频电话市场的投入，从市场需求的角度来讲，首先要解决对较低带宽环境的适应，其\r\n次要解决如何完成高清晰视频的压缩问题，最后要让这样的终端变得像使用普通家电一样简单。”青牛科技副总裁陈飚说。在他看来，这样一部电话，背后是复杂的\r\n多媒体多路分发技术和视频编解码技术，但呈现出来的则是极简的操作。陈飚说，“视频电话将迎来一个大爆发和普及的时期，市场等待的是一款好用的产品”。</p><p><br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;陈飚早年曾在中国网通负责全国市场及产品规划工作，之后又在尚阳科技移动互联网部出任总经理，当他进入青牛科技后负责公司战略和产品规划。据\r\n悉，青牛科技针对家庭视频电话市场的首款产品即将在10月份上市。陈飙透露，青牛的这款产品可在普通家庭宽带的网络条件下实现清晰流畅的视频通话，达到每\r\n秒15桢的VGA画质，并可根据网络条件进行图像和流畅度自适应调节。这款产品所配备的7英寸高清显示屏和我们常用的iPad的显示效果并无二致，通过\r\nHDMI接口将图像显示到50英寸的液晶电视时，图像也完全没有失真。最重要的是，这是一部简单到“只要会接电话”就能使用的产品，费用也称得上低廉，解\r\n决了网络视频给老年人使用的操作困扰以及费用困扰，成为“回家看看”的最方便选择。</p><p><br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;任何一个通用型产品市场，都会经历产品试用阶段、细分应用阶段、广泛普及阶段这三个过程。就家庭视频电话而言，经历了运营级巨头的黯然退场，迎\r\n来互联网基础建设的成熟和技术进步之后，不难期待随着应用展开扑面而来“苹果熟了“的美好未来。知名市场调查公司In-Stat称，2013年，全球多媒\r\n体电话终端的装机量将扩大至6000万部，如果以一部2000元人民币来计算，相当于一个1200亿元的大市场，大约占到全球平板电脑市场的1/3。</p><p><br/></p><p><br/></p>', null, '0', '1', '1388244746', '2', '1388244726');
INSERT INTO `think_article` VALUES ('34', '', null, '中国家庭视频电话技术获得实质性突破', '中国家庭视频电话技术获得实质性突破', '中国家庭视频电话技术获得实质性突破', null, '', '1', '0', '', '<p>\r\n		</p><p>自2003年初联通推出“宝视通”可视电话业务起，十多年过去了，包括运营商在内的产业巨头们从未放弃对家庭视频电话市场的投入，然而一直停留在“可视”\r\n层面的家庭视频电话并没有因为资费的下降走入千家万户。低清晰度的视频质量、并不低廉的部署成本、使用方面的复杂程度成为市场走向成熟的三座大山。</p><p>\r\n		</p><p>近日，在国内呼叫中心市场和IPTV技术占据领先地位的青牛科技正式对外公布了一款突破性的产品。在真实传输速率达到100K的网络传输环境\r\n下，这款叫做青牛家视通的产品，能够轻松完成每秒15帧的高清视频传输，和看电影并无明显差别，完全达到了国际电信联盟(ITU)最新通过的H.264通\r\n信标准，一般的宽带入户家庭均可享受。据悉这款产品将于今年十月批量上市，单机价格不会超过2000元。</p><p>\r\n		</p><p>目前2G光纤已经成为了国内城市用户宽带入户的新的标准，而自02年起开始推动的“村村通”工程已经让全国多数农村拥有了4M以上的宽带接入能\r\n力，部分农村更是达到了100M，甚至有的农村直接引入了光纤宽带。这样的基础设施，让原来依靠专用IP网络传输的视频电话，可以使用容量更大、普及面更\r\n广的家庭宽带接入，解决了最为关键的传输通道问题。</p><p>\r\n		</p><p>就如iPod的出现改变了人们获得音乐享受的路径和理念，iPhone的出现大大加速了智能电话的应用普及一样，在带宽问题得以解决，硬件问题不再困扰的\r\n背景下，青牛科技副总裁陈飚认为：“家庭视频电话将进入一个产品普及和应用爆发的阶段，市场等待的是一款革命性的产品出现，这款产品需要充分融合IPTV\r\n技术中所包含的多路分发技术，以及P2P传输过程中的视频解码技术，并要将电话当成一部“PC级”的智能终端进行研发”。在他看来，这样一款产品将真正能\r\n够改变人们心目中对电话的认识，而这一历史使命远非时下的“可视电话”所能承载。</p><p>\r\n		</p><p>记者发现，这款产品所配备的7英寸高清显示屏和我们常用的iPad的显示效果并无二致，如果通过HDMI接口将图像显示到50英寸的液晶电视时，图像完全\r\n没有失真。最重要的一点是，这是一部简单到“只要会接电话”就能使用的产品，非常应景的符合了前不久推出的“老年人保护法”所倡导的立法精神，既方便老年\r\n人使用，又很容易成为全国4亿多“老少相隔”家庭“随时看见对方”的简单选择，被业内称之为“孝子电话”。</p><p>\r\n		</p><p>伴随宽带网络的不断普及，高清晰度液晶屏和高性能处理器等相关硬件成本的不断降低，以及视频电话终端通过电脑化而变得越来越智能和简单，像人们\r\n一知所期待的那样，家庭视频电话的春天就要来了。据知名市场调查公司In-Stat称，2013年，全球视频电话的装机容量将扩大至6000万部，如果以\r\n一部2000元人民币来计算，这相当于是一个1200亿元的大市场，相当于全球平板电脑市场的1/3。</p><p>\r\n		</p><p><br/></p>', '1', '0', '1', '1388246273', '2', '1388246273');
INSERT INTO `think_article` VALUES ('35', '', '', '家庭视频电话市场之破冰关键：用户体验', '家庭视频电话市场之破冰关键：用户体验', '家庭视频电话市场之破冰关键：用户体验', null, '', '1', '0', '', '<p><br/></p><p>谁需要“视频电话”？显然不是忙于业务的精英也不是频频接到新指令的白领，对于他们来说，电话满足沟通的基本需求就好，谁又耐烦捕捉对方脸上最细微的一个表情？需要看到与被看到，需要关心与被关心……这些是漂泊在外的人们对家庭的渴望。</p><p><br/></p><p>爱人间的凝视，母子间的端详，爷孙间的嬉笑，假如没有这些存在，人生该何等的空茫。难怪无论中国联通2004年的“宝视通”，还是中国电信\r\n2011年的“魔屏mTouch”，这些可视电话都被冠以“家庭”的市场定位。然而，想要走入家庭成为大众化通讯工具，视频电话的稳定性和服务质量必须过\r\n硬。之前尝试的商家们之所以铩羽，不仅因那不算低廉的价格，更要怪那不够流畅不够清晰的画面和稍显复杂的操作，这一切留给用户非常糟糕的印象。用户体验成\r\n为横在诸商家面前最大的冰山，遥望那片广阔的“蓝海”而不可得。</p><p><br/></p><p class=\"news1_title\">往昔：多方受限</p><p><br/></p><p>精明的运营商和商家不可能嗅不到用户的抱怨，然而，他们深陷用户体验不佳的窘境达十年之久，实有“难言之隐”。</p><p><br/></p><p>一方面，之前的网络信息技术基础建设不完善。我国虽然早在2001年就正式提出了“促进电信、电视、互联网三网融合”的目标，但是直到2010\r\n年6月底，三网融合12个试点城市名单和试点方案正式公布，三网融合才终于进入实质性推进阶段。所以在电信运营商推出家庭视频电话产品时，三网融合技术并\r\n不成熟，还不能满足用户视频通讯的多种需求。</p><p><br/></p><p>另一方面，受技术和硬件设备的限制。以图像压缩技术为例，ISO制定的两个压缩标准技术JPEG和MPEG，前者图像压缩无失真，但是压缩比很\r\n小，不符合网络基础环境的现状；后者压缩空间相对较大，但会出现失真的情况，这正是过去视频中画面经常粗糙、扭曲，极大影响用户体验的原因。</p><p><br/></p><p class=\"news1_title\">当下：全面突破</p><p><br/></p><p>近年来，中国网络基础设施建设逐渐完善，2G光纤已经成为了城市用户宽带入户的新的标准。从02年起开始推动的“村村通”工程，已让全国多数农\r\n村拥有了4M以上的宽带接入能力，部分农村更是达到了100M，甚至有的农村直接引入了光纤宽带。容量更大、普及面更广的家庭宽带接入，解决了视频电话应\r\n用的一大难题。</p><p><br/></p><p>同时，高清晰度液晶屏和高性能处理器等相关硬件成本不断降低，视频电话终端通过电脑化也可变得越来越智能而易用，这也为整个家庭视频通讯行业的起航鼓起了风帆。对商家而言，提高用户体验的客观条件业已成熟，只欠信息传输技术提高与集合的东风。</p><p><br/></p><p>目前，已有企业欲重整家庭视频电话市场。据悉，中国领先的企业云服务提供商青牛科技将于不久推出一款视频电话产品。可在真实传输速率达到\r\n100KB/每秒的网络传输环境下，完成15帧的VGA高清画质传输，完全达到国际电信联盟(ITU)的H.264通信标准；同时产品配备7英寸高清显示\r\n屏，通过HDMI接口将图像显示到50英寸的液晶电视也不会失帧。这些从根本上保障了视频画面的流畅性和清晰度。</p><p><br/></p><p>更重要的是，这是一部“只要会接电话就能使用”的易用产品，用户只需在显示屏终端根据文字或者图片选择联系人，即可实现无障碍的高清视频通话，这将给家中的老人和儿童提供极大的方便。</p><p><br/></p><p class=\"news1_title\">未来：前景广阔</p><p><br/></p><p>近年来，中国网络基础设施建设逐渐完善，2G光纤已经成为了城市用户宽带入户的新的标准。从02年起开始推动的“村村通”工程，已让全国多数农\r\n村拥有了4M以上的宽带接入能力，部分农村更是达到了100M，甚至有的农村直接引入了光纤宽带。容量更大、普及面更广的家庭宽带接入，解决了视频电话应\r\n用的一大难题。</p><p><br/></p><p>据知名市场调查公司In-Stat称，2013年，全球视频电话的装机容量将扩大至6000万部，如果以一部2000元人民币来计算，这就是近1200亿元的大市场。也许，解决了用户体验问题之后的家庭视频通话市场“蓝海”，将迎来整个行业会的爆发增长。</p><p><br/></p><p><br/></p>', null, '0', '1', '1388246378', '2', '1388246304');
INSERT INTO `think_article` VALUES ('36', '', null, '“常回家看看”入法催生“孝子电话”，空巢老人不再孤独', '“常回家看看”入法催生“孝子电话”，空巢老人不再孤独', '“常回家看看”入法催生“孝子电话”，空巢老人不再孤独', null, '', '1', '0', '', '<p>\r\n		</p><p>一个可触摸的显示频，一张子女的照片，老人在家一键便可畅通无阻的和子女视频聊天。日前，新修订的《老年人权益保障法》正式施行，该法首次将\r\n“常回家看看”精神赡养写入条文。但不少人表示，现代社会工作压力大、节奏快、时间紧，实在抽不出时间回家。记者昨天从相关部门获悉，目前已经有国内通信\r\n企业正式公布即将推出方便老年人使用的“家庭视频电话”，通过整合固定电话网络、移动通讯网络与互联网三大网络资源，有效实现亲情“一碗汤”的距离,一键\r\n便可帮助老年人实现高清视频通话，成为全国70%“老少相隔”家庭“随时看见对方”的简单选择。</p><p>\r\n		</p><p>新《老年人权益保障法》实施后，不少商家看准这一市场，纷纷推出与之相关的项目。在淘宝上，代看望老人系列服务项目比比皆是，收费标准从10元\r\n到3000元不等。卖家可以为老人过生日、陪老人散步聊天等。然而这种服务并没有得到大多数人的认可，他们认为老年人精神慰藉更多是“亲情的体现”而非物\r\n质化的带看。</p><p>\r\n		</p><p>针对此情况，在国内呼叫中心市场和IPTV技术占据领先地位的青牛科技称，即将发布一款方便老年人使用的视频电话，该产品整合了固定电话网络、移动通讯网络与互联网三大网络资源，老年人只需要在显示屏终端根据文字或者图片选择联系人，即可实现无障碍的一键高清视频通话。</p><p>\r\n		</p><p>据了解，青牛科技是除中兴、华为之外中国电信及中国网通在IPTV核心网络业务的三家服务商之一，其在网络视频通话方面的技术优势也为这款家庭\r\n视频电话的研发奠定了良好的技术基础。青牛科技副总裁陈飚表示：“随着人口老龄化，老年人群蕴藏的巨大消费潜力势将日益凸显。有需求就有市场商机，这对于\r\n青牛科技来说，即是一种机遇，同样也是一种使命。电话作为老人最容易接受的通讯工具，在当今这样一个生活节奏快、亲情距离逐渐疏远的背景下，我们希望通过\r\n我们的产品让更多的家庭温馨和谐，让更多的老人不再每天因见不到子女而愁苦。”</p><p>\r\n		</p><p>其实，对新《老年人权益保障法》最为关注的要数那些离家在外打拼的儿女们，原因很简单，这些人或将成为“违法者”。相关法学专家表示，“常回家\r\n看看”属于倡导性条款。实际上，经常问候是满足老年人精神需求的主要形式。即使回不了家，打电话、发短信、写信问候也可以达到这样的效果。问题是现实生活\r\n中不少人连“经常问候老年人”都做不到。陈飚表示：“虽然视频通话不是什么新鲜的概念，但针对于老年人市场的互联网产品来说，还是经常被忽略的。对青牛科\r\n技而言，我们更加重视产品设计贴合老年用户的需求。一直为自身产品打造更便于老年人使用的特点，如操作简单、便捷通话、画面质量更清晰等等，以求在关键目\r\n标市场中赢得竞争优势。”</p><p>\r\n		</p><p>随着我国人口老龄化趋势的加快，如何为老年人构建和谐舒适的晚年生活，已成为社会关注的热点。老龄化是一个社会问题，在应对老人服务和养老方式面临的挑战上大有可为，厂商们在其他细分市场激烈竞争的同时，也不应忽视老年消费者的需求。</p><p>\r\n		</p><p><br/></p>', '3', '0', '1', '1388246328', '2', '1388246328');
INSERT INTO `think_article` VALUES ('37', '', '', '青牛科技陈飚：家庭视频电话突围需终端与专网双引擎驱动', '青牛科技陈飚：家庭视频电话突围需终端与专网双引擎驱动', '青牛科技陈飚：家庭视频电话突围需终端与专网双引擎驱动', null, '家庭视频电话突围需终端与专网双引擎驱动', '1', '0', '', '<p><br/></p><p>C114讯 8月21日早间消息（刘念）视频电话对用户来说并不陌生。不过由于网络条件的限制，其从概念提出、技术发展到市场应用，一直路途坎坷。目前为止，市场上还没有一个真正好用、普及大众的视频电话业务出现。</p><p><br/></p><p>阻碍视频电话业务发展的原因有很多，包括价格、带宽及互联互通等因素。而更重要的原因在于，此前运营商不做终端，终端厂商不做网络。如此一来，再好的终端也没有网络支持，再成熟的网络条件也没有好的终端来贴近用户。</p><p><br/></p><p>整个视频电话市场是如此，家庭视频电话的大规模推广更是遥遥无期。如今，这一市场的大量需求多由Face \r\nTime、QQ视频等或免费或廉价的应用来满足。随着新修订《老人权益保障法》所引发的社会现象讨论升级，更稳定更清晰的家庭视频通话需求开始日益强烈，\r\n包括青牛科技在内的厂商开始纷纷向这一市场发力。</p><p><br/></p><p class=\"news1_title\">步履维艰：杀手级应用无法普及</p><p><br/></p><p>视频电话概念，在很早就已诞生。这种点到点的视频通信业务，最早是通过电话线路进行图像和语音信号的传输。音视频兼备的特性使得公众对其寄予了\r\n厚望。然而视频电话从概念提出、技术发展到市场应用，一直路途坎坷。到目前为止，市场上还没有一个真正好用、普及大众的视频电话业务出现。</p><p><br/></p><p>究其原因，首先在于价格。此前视频电话4000-6000元的价格并不能为普通用户所接受。为一项可视功能而多负担几千元的费用，很多消费者并不愿意。而对于商家来讲，无利可图当然推广不积极。</p><p><br/></p><p>同时，由于传输带宽的限制，视频电话一直存在画面不够清晰且不连续的硬伤。而由于对传输协议和标准理解的偏差，不同厂家的终端设备间或终端、局端设备间的互通并不顺利。相关计费平台、资源管理和调度系统也还有待规范和完善。</p><p><br/></p><p>除此之外，电信运营商网络之前的互联互通也成为一大原因。“视频电话的打通，需要发端与力端的合作。而南北的互联互通问题，使得一个运营商网络\r\n的视频电话用户，只能与网内的用户通话。再加上运营商大多是属地化建制，异地视频通话的需求更加难以满足，由此跨网成为难题。”青牛科技副总裁陈飚表示。</p><p><br/></p><p>近几年，3G到来后，人们以为这样一个杀手级应用，终于迎来了绝佳的市场环境。然而视频电话仍然无法摆脱雷声大、雨点小的处境，大规模应用推广遥遥无期。而家庭视频电话市场的大量需求，大多由Face Time、QQ视频等或免费或廉价的应用来满足。</p><p><br/></p><p>“要突破这样的产业困境，闭环的思路必不可少。从前运营商不做终端，终端厂商不做网络。这就导致再好的终端也没有网络支持，再成熟的网络条件也\r\n没有好的终端来贴近用户。”陈飚所描述的闭环思路，在其新推家庭视频电话“家视通（Channel \r\nPhone）”中得以全面体现：不仅提供给用户视频电话终端，还提供强大的云服务网络做技术支持。</p><p><br/></p><p class=\"news1_title\">突破症结：终端+专网双引擎驱动</p><p><br/></p><p>在进入个人家庭市场之前，青牛主要从事的是通信技术开发，大部分客户来自电信运营商和保险公司两类。呼叫中心及IPTV是青牛的两大主战场。如今，青牛的云呼叫中心已在业界占据领先地位，而其IPTV技术服务已成除华为中兴以外，中国电信和中国联通的必选项。</p><p><br/></p><p>凭借着十多年在云计算市场的探索，青牛此次进军家庭视频通话市场，可以说是有备而来。其推出的家视通，与以往视频服务最大的不同就在于视频通话的背后有专网的支持。“一个好的视频通讯产品，一定不能像传统P2P方式一样没有质量保证，出现传输中断等问题。”陈飚认为。</p><p><br/></p><p>为此，青牛搭建了一个专门的网络来支持这项服务。其运用专利的编解码算法、智能选址及多路分发技术，确保了视频通信在低宽带下的高清晰度及在开\r\n放网络上的高可靠性。此种运营级的云服务网络，与传统视频实现方式利用公网形成了明显区别。没有运营商的壁垒，青牛的视频通话将会带来更稳定更清晰的体\r\n验。</p><p><br/></p><p>目前，‘家视通’已进入各项技术与设备完善阶段，预计10月份可上市销售。“虽然家庭视频通话市场的需求，大多被Face \r\nTime、QQ视频等应用满足。但这些免费的应用，并没有太好的质量保障。”陈飚认为，“假如免费与收费的应用大概比例为9：1。“90%的人愿意使用免\r\n费应用，但仍有10%的人会选择付费，体验更高质量的服务。青牛要求不高，只希望能满足这10%的人群就可以。”</p><p><br/></p><p>据知名市场调查公司In-Stat称，2013年，全球多媒体电话终端的装机量将扩大至6000万部，如果以一部2000元人民币来计算，这将是一个1200亿元的大市场。面对如此大规模的市场需求，拥有多年云服务技术优势的青牛科技，选择了以老年人市场作为突破口。</p><p><br/></p><p class=\"news1_title\">适时推进：以老人市场为突破口</p><p><br/></p><p>陈飚坦言，之所以选择老人市场作为家庭视频电话的突破口，是受到新修订《老人权益保障法》的启发。“常回家看看”被写入法律条文，虽然引发了一些争议，但却从侧面反映了如今国内的特定社会现状。</p><p><br/></p><p>随着中国城镇化的加快，大量的年轻人涌向城市，老人和孩子经常分隔两地，一般一年才能见一次，或者频率更少。据统计数据表明，中国约2亿的老年人口中，独居的空巢老人就占据了1亿左右，而这其中一半都在农村。</p><p><br/></p><p>“看见你胜过千言万语。如果亲人之间能听见能看见，在空间的融合中进行沟通和交流。那么长期的分离之苦就能得到缓解。”陈飚表示，如今整个社会的网络基础设施与十年前已经大有进步。基于这样的产业环境来进入家庭市场，具备天时地利人和之优势。</p><p><br/></p><p>由于年龄导致的接受能力弱等因素，绝大多数老人不会使用拥有复杂功能的电脑、智能手机。因此面向老人市场的产品，需要做到需极致简单易用。青牛在家视通终端上，也实现了极简的操作，老人只要会接电话就可以用：打电话只需按两个键，接电话只需拿起话筒。</p><p><br/></p><p>而除了视频通话这项核心功能，青牛更在这款终端中加入了照片分享、天气预报及生活通等附加功能，以此丰富老人的生活。尤其通过照片分享，父母可以很方便地看到孩子的近期照片。</p><p><br/></p><p>鉴于目前“家视通”还处于市场导入阶段，子女大多会以智能手机与家中的老人联系。如此一来，一款可与家视通进行视频通话的客户端就成为必备之需。陈飚介绍说，目前PC及手机版的客户端正在开发当中，之后会陆续发布出来。</p><p><br/></p><p>“老人市场之后，家视通的目标是占领整个家庭市场，替换如今的家庭电话。”陈飚说道。</p><p><br/></p><p><img src=\"/App/Modules/Admin/Tpl/Public/ueditor/php/upload/65391388246358.jpg\" alt=\"\" border=\"0\" height=\"453\" width=\"640\"/><br/>青牛家庭视频电话展示</p><p><br/></p><p><br/></p>', null, '0', '1', '1388246386', '2', '1388246366');
INSERT INTO `think_article` VALUES ('38', '', '', '实现一键高清视频通话', '实现一键高清视频通话', '实现一键高清视频通话', null, '青牛科技发布视频云电话', '1', '0', '', '<p><br/></p><p>从外观上看，只比普通电话机多了一块7英寸的高清触摸显示屏，在显示屏上通过文字或图片选择联系人，就可以。这就是青牛科技在此次国际通信展前夕发布的首款基于云计算技术的视频通话产品“家视通”。</p><p><br/></p><p>“视频通信将会是未来的一个基础服务”，青牛科技副总裁陈飚对这一市场的前景满怀信心。事实上，国内的视频通话业务由于价格高、通话品质难以保证等因素，一直没有真正打开市场，得到消费者的认可，而“家视通”产品的问世，或许能在一定程度上改变目前这种局面。</p><p><br/></p><p>基于青牛科技在云计算、智能层叠网上的技术优势，“家视通”能为消费者提供运营商级的通信网络和企业级的视频服务。这种有QoS质量保障的视频通话服务，\r\n对消费者的家庭网络环境要求并不高——只需要接入2M宽带，拥有不小于512K的上行速度即可。消费者通过注册一个新的账号，就可以在电话终端上进行视频\r\n通话，还可以在PC和手机客户端上享受同样的服务。</p><p><br/></p><p>据太阳花康复中心的老师介绍，听障儿童在听觉语言发育最佳时期尽可能多的接触、交流，康复效果会更好。然而很多医疗设备较好的康复中心都在大城\r\n市，不少贫困家庭只能勉强支持孩子一人在北京接受治疗，这样长期处于相对封闭的教学环境中，见不到自己的父母，不管从心理还是身理上，都不利于听障孩子的\r\n康复。这个角度来看，青牛科技听障儿童康复沟通交流技术试点基地的落成，为聋人孩子和父母提供的视频通讯帮助就非常必要了。</p><p><br/></p><p><br/></p>', null, '0', '1', '1388246558', '2', '1388246423');
INSERT INTO `think_article` VALUES ('39', '', null, '家庭视频通讯看重“亲情”', '家庭视频通讯看重“亲情”', '家庭视频通讯看重“亲情”', null, '', '1', '0', '', '<p>\r\n		</p><p>前几年，苹果推出了手机视频通讯系统FaceTime，试图用简单、轻松的方式诠释未来的视频通话。FaceTime方便、免费，其设计初衷是让用户可以\r\n简简单单地拿着手机而非沉重的电脑，自由而惬意地和亲人、朋友、爱人对话。把以往通过Wi-Fi的沟通变得更加轻快便捷，这大概是FaceTime最出彩\r\n的地方。</p><p>\r\n		</p><p>然而，无论FaceTime的设计多么具有科技感和人文精神，三年时间过去了，它并没有创造新的历史。有人会说，FaceTime的使用更多的是发生在家\r\n里或者稳定的Wi-Fi网络环境下。但事实是，即使在稳定的网络环境中，视频体验也不尽如人意。在缺少专用网络的环境下，稳定的网络≠稳定的服务。\r\n &nbsp; &nbsp;\r\n面对同样的问题，中国最具人气的视频通讯供应商腾讯，为了减少视频所产生的数据传输量问题，在在清晰度和流畅程度中做出了选择——抽帧。而在\r\nFaceTime身上，按网速来调整画面这种做法明显不符合苹果的气质，所以“连接丢失”的提示屡屡出现也不足为奇。这可能也是全世界最大的互联网市场与\r\n世界排名98位仅1.7兆比特每秒的互联网网速之间的落差所在。</p><p>\r\n		</p><p>也许FaceTime并不了解中国用户的情感表达习惯，多数的人认为视频通讯的需求只发生在亲密的亲人、朋友关系之间。这也就很好的解释了为什么中国联\r\n通、青牛科技等国内视频通讯巨头更多将目光聚焦于“满足家庭亲情沟通需求”这一市场定位，并以此为基础设计、研发视频通讯产品。由此来\r\n看，FaceTime在中国的普及还需要更多考虑用户的沟通特点与实际需求。</p><p>\r\n		</p><p>乔布斯当时在FaceTime的演示过程中表示，苹果正努力使得FaceTime成为一个开放标准。然而，三年之后FaceTime仍局限于苹\r\n果的设备。现在的FaceTime在中国只能算是iPhone的一项增值服务，甚至说算不上一项服务，没有专用网络、稳定营运及相关维护人员，仅存在于苹\r\n果生态圈中，苹果目前没有打算通过任何方式将其在终端释放出来，解决中国用户视频通话的需求。</p><p>\r\n		</p><p>可以说，作为一种开放的标准和普及服务，FaceTime在中国还有很长的路要走，这不仅要面对网络环境、用户习惯、商业模式等问题的阻碍，更要面对本土企业对视频通讯业务的阻击。</p><p>\r\n		</p><p>知名市场调查公司In-Stat称，2013年，全球多媒体电话终端的装机量将扩大至6000万部。主打家庭视频服务的青牛科技透露，为确保在\r\n普通宽带入户条件下即可实现高清视频通话，他们将通过运营商级别的专有网络来保障视频通讯的服务品质。事实上，这与苹果公司在美国的做法是基本相同的。随\r\n着市场的不断扩容、用户需求的不断增加，是FaceTime寒冰终究不能断流水，还是青牛科技、腾讯等巨头对市场来一次枯木也能再逢春？市场将成为从头至\r\n尾的见证者。</p><p>\r\n		</p><p><br/></p>', '5', '0', '1', '1388246445', '2', '1388246445');
INSERT INTO `think_article` VALUES ('40', '', null, '', '', '“常回家看看”中秋执行难 家庭视频电话帮子女回家探亲', null, '“家庭视频电话让子女实现“常回家看看”', '1', '0', '', '<p>\r\n		</p><p>刚过去的中秋，是老年人权益保障法将“常回家看看”入法两个月后的首个团圆节。虽然已经入法，记者采访中却发现，中秋回家陪父母团聚的子女却并没有因此增\r\n多，最新调查显示，80%在异乡年轻人仍然没有回家过中秋。虽然受《老年人权益保障法》保障，但因“忙、远、贵”等实际因素影响，“常回家看看”这一强制\r\n性法律条文仍然一定程度“悬空”。与此同时，中秋时商家推出的代为探望父母、陪聊、送礼物等服务也销售惨淡，不少消费者觉得花钱找别人孝敬父母，于情于理\r\n都有点过不去。针对上述情况，专业视频通讯服务的提供商青牛科技10份即将推出方便老年人使用的“家庭视频电话”，通过整合固定电话网络、移动通讯网络与\r\n互联网三大网络资源，一键帮助老年人实现高清视频通话，真正让“常回家看看”不再是一句口号，这或许可以成为子女们孝敬父母的另一种形式。</p><p>\r\n		</p><p>公开数据显示，至2012底，我国60岁及以上老年人口已达1.94亿，约半数老人子女不在身边。另有调查显示，近7成老人希望能够和子女们多\r\n见面，除物质补贴外，更需要子女的精神关怀。据悉，不能“常回家看看”的，一般都是在异地工作的人群，他们普遍有着工作忙、假期短、负担重等特点。加上每\r\n到大小长假，国内交通运输紧张，对很多人来说，“常回家看看”显然是心有余力不足，而对于那些在外务工且收入很低的群体来说，回一次家的成本可能更高，为\r\n了省钱，他们往往只能通过短信、电话等祝福，诸多原因造成了都市忙碌族不能回家陪父母过节，让原本该温情的团圆日更平添了一份乡愁。</p><p>\r\n		</p><p>家住四川雅安的北漂白领徐欢在采访中告诉记者 \r\n“中秋不回家，不是不想回，而是三天假期确实太短，一来一回差不多假期就完了。想要用QQ视频通话父母又不太会用，只能给父母打电话多说两句了，但不能看\r\n见爸妈终究觉得很遗憾”。为了解决像徐欢这样在异地工作，常常不能回家的问题，青牛科技特针对老年人的需求和使用习惯，推出了一款方便他们简单操作的家庭\r\n视频电话。作为国内呼叫中心市场和IPTV技术占据领先地位的企业，青牛科技整合了固定电话网络、移动通讯网络与互联网三大网络资源，老年人只需要在显示\r\n屏终端根据文字或者图片提示选择联系人，即可实现无障碍的一键高清视频通话，让不会操作现代电子产品的老年人也有了接触高科技的能力。</p><p>\r\n		</p><p>对此，青牛科技副总裁陈飚表示：随着人口老龄化、人口迁徙加快，加之“加班加点频繁”，“带薪年假难”等原因，“逢年过节回家团圆”变得越来越\r\n难。但除了回家之外，做晚辈的让长辈感觉温暖的方法却有很多。对青牛科技而言，我们做的就是提供这样一款产品，操作简单、便捷通话、画面质量更清晰，贴合\r\n老年用户的需求，让老人能够经常看看自己的孩子或孙子，让空巢老人感受到来自子女的关爱与亲情。未来，随着用户数量和需求的增加，青牛还将陆续提供电脑、\r\n智能手机的客户端，真正实现随时随地零距离享受视频带来的方便。</p><p>\r\n		</p><p>的确，现代社会对大多数人来说，工作压力大，在外打拼的年轻人多在事业上升期，“常回家看看”确有难度。但中华民族“百善孝为先”的传统美德不能丢弃。国庆长假即将来到，记者最后也提醒年轻人们，父母老了，有空还要常回家看看。</p><p>\r\n		</p><p><br/></p>', '6', '0', '1', '1388246471', '2', '1388246471');
INSERT INTO `think_article` VALUES ('41', '', null, '聆天使救助聋残儿童计划　家庭视频电话助力听障儿童康复训练', '聆天使救助聋残儿童计划　家庭视频电话助力听障儿童康复训练', '聆天使救助聋残儿童计划　家庭视频电话助力听障儿童康复训练', null, '聋哑人也能打电话 家庭视频电话让沟通零距离 ', '1', '0', '', '<p>\r\n		</p><p>9月17日下午，由中华社会救助基金会“聆天使”公益项目和青牛科技合作发起的——听障儿童康复沟通交流技术试点基地揭牌仪式在北京石景山区的太阳花听力\r\n言语康复中心举行。公开数据显示，目前我国听力语言残疾者达2780万人，居各类残疾人群之首，其中14岁以下的听障儿童近200万，如果能够在7岁前得\r\n到及时治疗，康复率能够超过90%，然而大多数贫困家庭在面对高昂的手术及康复治疗费用时望而却步，选择放弃。而本次活动就是希望通过募集社会各个方面的\r\n资源来帮助听障儿童恢复听力。包括“聆天使”负责人公泽忠、新浪微公益社会责任总监贝晓超、青牛科技副总裁陈飚以及北京卫视等数十家媒体记者共同出席了本\r\n次活动，被救助对象——太阳花听力言语康复中心的小朋友们也在现场展示了如何通过家庭视频电话跟家人交流。</p><p>\r\n		</p><p>据悉，此次活动由中华社会救助基金会和青牛科技共同发起，同时该活动也是中华社会救助基金会“聆天使”项目公益活动的一部分。发布会上，青牛科\r\n技与“聆天使”宣布合作计划，将在太阳花听力语言康复中心建立交流技术试点基地，现场捐赠家庭视频电话，希望让那些独自在康复院接受治疗的孩子能够经常通\r\n过视频的方式与父母进行沟通交流，让他们不再孤单，从而加快康复的进程。作为此次活动的参与者和见证者，新浪微公益社会责任总监贝晓超向记者表示：“聆天\r\n使”计划的这次活动对于听障孩子来说有着别样的意义，因为相比正常儿童，他们更需要父母和社会的沟通、理解和关爱。公益不仅仅等于捐钱，也需要各种技术力\r\n量的支持，我们希望更多像青牛这样的企业加入到公益事业中来，用自己的技术真正帮助到听障孩子的康复训练，让他们有机会重回有声世界。</p><p>\r\n		</p><p>聆天使计划，全称聆天使救助聋残儿童计划，是中华社会救助基金会设立的救助贫困听力障碍儿童的公益基金。旨在通过多种方式募集善款，资助贫困家庭听障儿童\r\n进行耳蜗手术、助听器佩戴及语言康复训练；资助定点康复机构相关软硬件设施配置；组织师资及家长培训；开展并通过积极宣传爱耳知识，提高民众对听力健康的\r\n认识，预防听障。而太阳花听力语言康复中心则是由北京市石景山区民政局批准，隶属于石景山区残联的民办非企业单位，是一家针对0-12岁中重度神经性听损\r\n孩子做个性化的康复训练、指导、咨询工作的专业康复中心。</p><p>\r\n		</p><p>据太阳花康复中心的老师介绍，听障儿童在听觉语言发育最佳时期尽可能多的接触、交流，康复效果会更好。然而很多医疗设备较好的康复中心都在大城\r\n市，不少贫困家庭只能勉强支持孩子一人在北京接受治疗，这样长期处于相对封闭的教学环境中，见不到自己的父母，不管从心理还是身理上，都不利于听障孩子的\r\n康复。这个角度来看，青牛科技听障儿童康复沟通交流技术试点基地的落成，为聋人孩子和父母提供的视频通讯帮助就非常必要了。</p><p>\r\n		</p><p>对此，中华社会救助基金会“聆天使”公益项目负责人公泽忠也表示，作为全国性公募基金会，中华社会救助基金会宗旨就是救助社会弱势群体，促进社会救助事业\r\n发展，我们先后开展了“百万孤老关爱行动”、“中国爱心城市公益活动”、“幸福列车”、“大爱清尘”、“微博打拐”、“让候鸟飞”等多个大型公益慈善项\r\n目，也深知一个人的力量是微小的，所以一直致力于寻找各种能够支持公益的资源并整合吸纳到各项公益事业中来，这次同青牛科技联合，借助企业的相关技术，为\r\n更多听障孩子带去希望，未来我们希望越来越多的企业发挥自身的优势加入到公益事业中来，用各自的专长、特长为公益贡献力量。</p><p>\r\n		</p><p><br/></p>', '7', '0', '1', '1388246504', '2', '1388246504');
INSERT INTO `think_article` VALUES ('42', '', null, '聆天使救助聋残儿童计划　家庭视频电话助力听障儿童康复训练 青牛科技聆天使计划捐赠仪式启动', '聆天使救助聋残儿童计划　家庭视频电话助力听障儿童康复训练\r\n青牛科技聆天使计划捐赠仪式启动', '聆天使救助聋残儿童计划　家庭视频电话助力听障儿童康复训练 青牛科技聆天使计划捐赠仪式启动', null, '家庭视频电话助力听障儿童康复训练', '1', '0', '', '<p>\r\n		</p><p>9月17日下午，由中华社会救助基金会“聆天使”公益项目和青牛科技合作发起的——听障儿童康复沟通交流技术试点基地揭牌仪式在北京石景山区的太阳花听力\r\n言语康复中心举行。包括青牛科技副总裁陈飚、“聆天使”负责人公泽忠、新浪微公益社会责任总监贝晓超、以及北京卫视等数十家媒体记者共同出席了本次活动。</p><p>\r\n		</p><p>公开数据显示，目前我国听力语言残疾者达2780万人，居各类残疾人群之首，其中14岁以下的听障儿童近200万，如果能够在7岁前得到及时治\r\n疗，康复率能够超过90%，然而大多数贫困家庭在面对高昂的手术及康复治疗费用时望而却步，选择放弃。而本次活动就是希望通过募集社会各个方面的资源来帮\r\n助听障儿童恢复听力。</p><p>\r\n		</p><p>发布会上，青牛科技与“聆天使”宣布合作计划，将在太阳花听力语言康复中心建立交流技术试点基地，现场捐赠家庭视频电话，希望让那些独自在康复院接受治疗的孩子能够经常通过视频的方式与父母进行沟通交流，让他们不再孤单，从而加快康复的进程。</p><p>\r\n		</p><p><img src=\"/App/Modules/Admin/Tpl/Public/ueditor/php/upload/50461388246548.jpg\" alt=\"\" border=\"0\" height=\"653\" width=\"980\"/></p><p>\r\n		</p><p>被救助对象——太阳花听力言语康复中心的小朋友在现场展示了如何通过家庭视频电话跟家人交流。</p><p>\r\n		</p><p><img src=\"/App/Modules/Admin/Tpl/Public/ueditor/php/upload/78201388246549.jpg\" alt=\"\" border=\"0\" height=\"653\" width=\"980\"/></p><p>\r\n		</p><p><img src=\"/App/Modules/Admin/Tpl/Public/ueditor/php/upload/62521388246549.jpg\" alt=\"\" border=\"0\" height=\"653\" width=\"980\"/></p><p>\r\n		</p><p>对此，中华社会救助基金会“聆天使”公益项目负责人公泽忠也表示，作为全国性公募基金会，中华社会救助基金会宗旨就是救助社会弱势群体，促进社会救助事业\r\n发展，我们先后开展了“百万孤老关爱行动”、“中国爱心城市公益活动”、“幸福列车”、“大爱清尘”、“微博打拐”、“让候鸟飞”等多个大型公益慈善项\r\n目，也深知一个人的力量是微小的，所以一直致力于寻找各种能够支持公益的资源并整合吸纳到各项公益事业中来，这次同青牛科技联合，借助企业的相关技术，为\r\n更多听障孩子带去希望，未来我们希望越来越多的企业发挥自身的优势加入到公益事业中来，用各自的专长、特长为公益贡献力量。</p><p>\r\n		</p><p>注：聆天使计划，全称聆天使救助聋残儿童计划，是中华社会救助基金会设立的救助贫困听力障碍儿童的公益基金。旨在通过多种方式募集善款，资助贫\r\n困家庭听障儿童进行耳蜗手术、助听器佩戴及语言康复训练；资助定点康复机构相关软硬件设施配置；组织师资及家长培训；开展并通过积极宣传爱耳知识，提高民\r\n众对听力健康的认识，预防听障。而太阳花听力语言康复中心则是由北京市石景山区民政局批准，隶属于石景山区残联的民办非企业单位，是一家针对0-12岁中\r\n重度神经性听损孩子做个性化的康复训练、指导、咨询工作的专业康复中心。</p><p>\r\n		</p><p><br/></p>', '8', '0', '1', '1388246549', '2', '1388246549');

-- ----------------------------
-- Table structure for `think_article_attr`
-- ----------------------------
DROP TABLE IF EXISTS `think_article_attr`;
CREATE TABLE `think_article_attr` (
  `aid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  KEY `aid` (`aid`),
  KEY `bid` (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_article_attr
-- ----------------------------
INSERT INTO `think_article_attr` VALUES ('18', '2');
INSERT INTO `think_article_attr` VALUES ('18', '3');
INSERT INTO `think_article_attr` VALUES ('20', '2');
INSERT INTO `think_article_attr` VALUES ('13', '2');
INSERT INTO `think_article_attr` VALUES ('20', '3');
INSERT INTO `think_article_attr` VALUES ('10', '2');
INSERT INTO `think_article_attr` VALUES ('10', '1');
INSERT INTO `think_article_attr` VALUES ('22', '1');
INSERT INTO `think_article_attr` VALUES ('22', '2');
INSERT INTO `think_article_attr` VALUES ('22', '3');
INSERT INTO `think_article_attr` VALUES ('32', '1');

-- ----------------------------
-- Table structure for `think_articlecolumn`
-- ----------------------------
DROP TABLE IF EXISTS `think_articlecolumn`;
CREATE TABLE `think_articlecolumn` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) DEFAULT '0' COMMENT '父ID',
  `name` varchar(24) DEFAULT NULL COMMENT '栏目名称',
  `isshow` tinyint(1) DEFAULT '0',
  `sort` smallint(6) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_articlecolumn
-- ----------------------------
INSERT INTO `think_articlecolumn` VALUES ('1', '0', '新闻', '1', '1', '1');

-- ----------------------------
-- Table structure for `think_auth_group`
-- ----------------------------
DROP TABLE IF EXISTS `think_auth_group`;
CREATE TABLE `think_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remark` varchar(255) DEFAULT NULL,
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_auth_group
-- ----------------------------
INSERT INTO `think_auth_group` VALUES ('1', '管理员', '1', null, '1,4,30,31,2,3');
INSERT INTO `think_auth_group` VALUES ('2', '编辑', '1', null, '1,2,3,4,30,31,32,33,34,35,36,37,55,56,57,58,59');

-- ----------------------------
-- Table structure for `think_auth_group_access`
-- ----------------------------
DROP TABLE IF EXISTS `think_auth_group_access`;
CREATE TABLE `think_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_auth_group_access
-- ----------------------------
INSERT INTO `think_auth_group_access` VALUES ('1', '1');
INSERT INTO `think_auth_group_access` VALUES ('2', '2');

-- ----------------------------
-- Table structure for `think_auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `think_auth_rule`;
CREATE TABLE `think_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_auth_rule
-- ----------------------------
INSERT INTO `think_auth_rule` VALUES ('1', 'Index-main', '后台首页', '1', '');
INSERT INTO `think_auth_rule` VALUES ('2', 'Index-index', '', '1', '');
INSERT INTO `think_auth_rule` VALUES ('3', 'Public-top', '顶部菜单', '1', '');
INSERT INTO `think_auth_rule` VALUES ('4', 'Public-left', '左边菜单', '1', '');

-- ----------------------------
-- Table structure for `think_node`
-- ----------------------------
DROP TABLE IF EXISTS `think_node`;
CREATE TABLE `think_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) unsigned NOT NULL COMMENT '父ID',
  `gid` smallint(6) DEFAULT NULL COMMENT '组ID',
  `title` varchar(50) NOT NULL COMMENT '名称',
  `level` tinyint(1) unsigned NOT NULL COMMENT '节点等级',
  `show` tinyint(1) unsigned DEFAULT '0' COMMENT '是否显示导航栏',
  `sort` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否激活 1：是 0：否',
  `group` varchar(20) DEFAULT NULL COMMENT '项目组',
  `module` varchar(20) NOT NULL COMMENT '模型',
  `action` varchar(20) DEFAULT NULL COMMENT '控制器',
  `name` varchar(50) DEFAULT NULL,
  `condition` varchar(100) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `show` (`show`),
  KEY `sort` (`sort`),
  KEY `module` (`module`),
  KEY `action` (`action`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_node
-- ----------------------------
INSERT INTO `think_node` VALUES ('1', '0', '1', '后台项目', '1', '0', '1', '1', 'Admin', '', null, 'Admin', null, '');
INSERT INTO `think_node` VALUES ('2', '1', '1', '后台', '2', '1', '1', '1', 'Admin', 'Index', '', 'Admin-Index', null, '');
INSERT INTO `think_node` VALUES ('3', '2', '1', '后台首页', '3', '1', '1', '1', 'Admin', 'Index', 'main', 'Admin-Index-main', null, '');
INSERT INTO `think_node` VALUES ('34', '4', '2', '文档栏目', '3', '1', '7', '1', 'Admin', 'Articlecolumn', 'index', 'Admin-Articlecolumn-index', null, '');
INSERT INTO `think_node` VALUES ('4', '1', '2', '文档', '2', '1', '1', '1', 'Admin', 'Article', null, 'Admin-Article', null, null);
INSERT INTO `think_node` VALUES ('7', '6', '2', '新增', '2', '0', '0', '1', 'Member', 'Member', 'add', 'Member-Member-add', null, '');
INSERT INTO `think_node` VALUES ('30', '4', '2', '文档列表', '3', '1', '3', '1', 'Admin', 'Article', 'index', 'Admin-Article-index', null, '');
INSERT INTO `think_node` VALUES ('18', '1', '3', '设置', '2', '1', '2', '1', 'Admin', 'Siteset', '', 'Admin-Siteset', null, '');
INSERT INTO `think_node` VALUES ('19', '18', '3', '节点', '3', '1', '1', '1', 'Admin', 'Node', 'index', 'Admin-Node-index', null, '');
INSERT INTO `think_node` VALUES ('20', '18', '3', '添加', '3', '0', '2', '1', 'Admin', 'Node', 'add', 'Admin-Node-add', null, '');
INSERT INTO `think_node` VALUES ('21', '18', '3', '编辑', '3', '0', '3', '1', 'Admin', 'Node', 'edit', 'Admin-Node-edit', null, '');
INSERT INTO `think_node` VALUES ('23', '18', '3', '删除', '3', '0', '4', '1', 'Admin', 'Node', 'del', 'Admin-Node-del', null, '');
INSERT INTO `think_node` VALUES ('32', '4', '2', '编辑', '3', '0', '5', '1', 'Admin', 'Article', 'edit', 'Admin-Article-edit', null, '');
INSERT INTO `think_node` VALUES ('31', '4', '2', '新增', '3', '0', '4', '1', 'Admin', 'Article', 'add', 'Admin-Article-add', null, '');
INSERT INTO `think_node` VALUES ('33', '4', '2', '删除', '3', '0', '6', '1', 'Admin', 'Article', 'del', 'Admin-Article-del', null, '');
INSERT INTO `think_node` VALUES ('35', '4', '2', '新增', '3', '0', '8', '1', 'Admin', 'Articlecolumn', 'add', 'Admin-Articlecolumn-add', null, '');
INSERT INTO `think_node` VALUES ('36', '4', '2', '编辑', '3', '0', '9', '1', 'Admin', 'Articlecolumn', 'edit', 'Admin-Articlecolumn-edit', null, '');
INSERT INTO `think_node` VALUES ('37', '4', '2', '删除', '3', '0', '10', '1', 'Admin', 'Articlecolumn', 'del', 'Admin-Articlecolumn-del', null, '');
INSERT INTO `think_node` VALUES ('39', '40', '4', '新增', '3', '0', '4', '1', 'Admin', 'Member', 'add', 'Admin-Member-add', null, '');
INSERT INTO `think_node` VALUES ('40', '1', '4', '会员', '2', '1', '5', '1', 'Admin', 'Member', '', 'Admin-Member', null, '');
INSERT INTO `think_node` VALUES ('41', '40', '4', '编辑', '3', '0', '6', '1', 'Admin', 'Member', 'edit', 'Admin-Member-edit', null, '');
INSERT INTO `think_node` VALUES ('42', '40', '4', '新增', '2', '0', '6', '1', 'Admin', 'Admin', 'add', 'Admin-Admin-add', null, '');
INSERT INTO `think_node` VALUES ('43', '40', '4', '管理员', '3', '1', '1', '1', 'Admin', 'Admin', 'index', 'Admin-Admin-index', null, '');
INSERT INTO `think_node` VALUES ('44', '40', '4', '编辑', '3', '0', '2', '1', 'Admin', 'Admin', 'edit', 'Admin-Admin-edit', null, '');
INSERT INTO `think_node` VALUES ('45', '40', '4', '删除', '3', '0', '3', '1', 'Admin', 'Admin', 'del', 'Admin-Admin-del', null, '');
INSERT INTO `think_node` VALUES ('46', '40', '4', '搜索', '3', '0', '4', '1', 'Admin', 'Admin', 'search', 'Admin-Admin-search', null, '');
INSERT INTO `think_node` VALUES ('47', '0', '4', '管理组', '3', '0', '7', '0', 'Admin', 'auth_group', 'index', 'Admin-auth_group-index', null, '');
INSERT INTO `think_node` VALUES ('48', '40', '4', '新增', '3', '0', '8', '1', 'Admin', 'auth_group', 'add', 'Admin-auth_group-add', null, '');
INSERT INTO `think_node` VALUES ('49', '40', '4', '编辑', '3', '0', '9', '1', 'Admin', 'auth_group', 'edit', 'Admin-auth_group-edit', null, '');
INSERT INTO `think_node` VALUES ('50', '40', '4', '删除', '3', '0', '10', '1', 'Admin', 'auth_group', 'del', 'Admin-auth_group-del', null, '');
INSERT INTO `think_node` VALUES ('55', '4', '2', '单篇文档', '3', '1', '10', '1', 'Admin', 'ArticleOne', 'index', 'Admin-ArticleOne-index', null, '');
INSERT INTO `think_node` VALUES ('51', '18', '3', '敏感词', '3', '0', '5', '0', 'Admin', 'Sensitive', 'index', 'Admin-Sensitive-index', null, '');
INSERT INTO `think_node` VALUES ('52', '18', '3', '新增', '3', '0', '6', '1', 'Admin', 'Sensitive', 'add', 'Admin-Sensitive-add', null, '');
INSERT INTO `think_node` VALUES ('53', '18', '3', '编辑', '3', '0', '7', '1', 'Admin', 'Sensitive', 'edit', 'Admin-Sensitive-edit', null, '');
INSERT INTO `think_node` VALUES ('54', '18', '3', '删除', '3', '0', '8', '1', 'Admin', 'Sensitive', 'del', 'Admin-Sensitive-del', null, '');
INSERT INTO `think_node` VALUES ('56', '4', '2', '新增', '3', '0', '11', '1', 'Admin', 'ArticleOne', 'add', 'Admin-ArticleOne-add', null, '');
INSERT INTO `think_node` VALUES ('57', '4', '2', '编辑', '3', '0', '12', '1', 'Admin', 'ArticleOne', 'edit', 'Admin-ArticleOne-edit', null, '');
INSERT INTO `think_node` VALUES ('58', '4', '2', '删除', '3', '0', '13', '1', 'Admin', 'ArticleOne', 'del', 'Admin-ArticleOne-del', null, '');
INSERT INTO `think_node` VALUES ('59', '4', '2', '搜索', '3', '0', '14', '1', 'Admin', 'ArticleOne', 'search', 'Admin-ArticleOne-search', null, '');
INSERT INTO `think_node` VALUES ('61', '18', '3', '站点设置', '3', '1', '9', '1', 'Admin', 'Siteset', 'index', 'Admin-Siteset-index', null, '');
INSERT INTO `think_node` VALUES ('62', '18', '3', '上传图片', '3', '1', '10', '1', 'Admin', 'UploadImage', 'index', 'Admin-UploadImage-index', null, '');
INSERT INTO `think_node` VALUES ('63', '18', '3', '新增', '3', '0', '11', '1', 'Admin', 'UploadImage', 'add', 'Admin-UploadImage-add', null, '');
INSERT INTO `think_node` VALUES ('64', '18', '3', '编辑', '3', '0', '12', '1', 'Admin', 'UploadImage', 'edit', 'Admin-UploadImage-edit', null, '');
INSERT INTO `think_node` VALUES ('65', '18', '3', '删除', '3', '0', '13', '1', 'Admin', 'UploadImage', 'del', 'Admin-UploadImage-del', null, '');
INSERT INTO `think_node` VALUES ('66', '18', '3', '搜索', '3', '0', '14', '1', 'Admin', 'UploadImage', 'search', 'Admin-UploadImage-search', null, '');
INSERT INTO `think_node` VALUES ('67', '18', '3', 'Email设置', '3', '0', '15', '0', 'Admin', 'Emailset', 'index', 'Admin-Emailset-index', null, '');
INSERT INTO `think_node` VALUES ('68', '18', '3', '发送邮件', '3', '0', '16', '1', 'Admin', 'Emailset', 'send', 'Admin-Emailset-send', null, '');
INSERT INTO `think_node` VALUES ('69', '18', '3', 'URL设置', '3', '0', '17', '0', 'Admin', 'Urlset', 'index', 'Admin-Urlset-index', null, '');
INSERT INTO `think_node` VALUES ('70', '1', '5', '商品', '2', '1', '6', '1', 'Admin', 'Shop', 'index', 'Admin-Shop-index', null, '');
INSERT INTO `think_node` VALUES ('71', '70', '5', '商品', '3', '1', '1', '1', 'Admin', 'Shop', 'index', 'Admin-Shop-index', null, '');
INSERT INTO `think_node` VALUES ('72', '70', '5', '新增', '3', '0', '2', '1', 'Admin', 'Shop', 'add', 'Admin-Shop-add', null, '');
INSERT INTO `think_node` VALUES ('73', '70', '5', '商品-编辑', '3', '0', '3', '1', 'Admin', 'Shop', 'edit', 'Admin-Shop-edit', null, '');
INSERT INTO `think_node` VALUES ('74', '70', '5', '商品-删除', '3', '0', '4', '1', 'Admin', 'Shop', 'del', 'Admin-Shop-del', null, '');
INSERT INTO `think_node` VALUES ('75', '70', '5', '商品-搜索', '3', '0', '5', '1', 'Admin', 'Shop', 'search', 'Admin-Shop-search', null, '');
INSERT INTO `think_node` VALUES ('76', '70', '5', '订单', '3', '1', '6', '1', 'Admin', 'Order', 'index', 'Admin-Order-index', null, '');
INSERT INTO `think_node` VALUES ('77', '40', '4', '会员', '3', '1', '11', '1', 'Admin', 'Member', 'index', 'Admin-Member-index', null, '');
INSERT INTO `think_node` VALUES ('78', '40', '4', '新增', '3', '0', '12', '1', 'Admin', 'Member', 'add', 'Admin-Member-add', null, '');
INSERT INTO `think_node` VALUES ('79', '40', '4', '编辑', '3', '0', '13', '1', 'Admin', 'Member', 'edit', 'Admin-Member-edit', null, '');
INSERT INTO `think_node` VALUES ('80', '40', '4', '删除', '3', '0', '14', '1', 'Admin', 'Member', 'del', 'Admin-Member-del', null, '');
INSERT INTO `think_node` VALUES ('81', '40', '4', '搜索', '3', '0', '15', '1', 'Admin', 'Member', 'search', 'Admin-Member-search', null, '');

-- ----------------------------
-- Table structure for `think_order`
-- ----------------------------
DROP TABLE IF EXISTS `think_order`;
CREATE TABLE `think_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` char(15) CHARACTER SET utf8 NOT NULL COMMENT '订单编号',
  `ordermoney` int(11) NOT NULL COMMENT '订单金额',
  `ordertime` int(11) NOT NULL COMMENT '订单时间',
  `orderinfoid` int(11) NOT NULL COMMENT '订购详情',
  `orderstatus` tinyint(4) NOT NULL DEFAULT '0' COMMENT '订单状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of think_order
-- ----------------------------

-- ----------------------------
-- Table structure for `think_orderinfo`
-- ----------------------------
DROP TABLE IF EXISTS `think_orderinfo`;
CREATE TABLE `think_orderinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oid` int(11) NOT NULL COMMENT '订单id',
  `sid` int(11) NOT NULL COMMENT '商品id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of think_orderinfo
-- ----------------------------

-- ----------------------------
-- Table structure for `think_sensitive`
-- ----------------------------
DROP TABLE IF EXISTS `think_sensitive`;
CREATE TABLE `think_sensitive` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `sensitive` varchar(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_sensitive
-- ----------------------------
INSERT INTO `think_sensitive` VALUES ('2', '编辑', '**', '1');
INSERT INTO `think_sensitive` VALUES ('4', '敏感词', '*', '1');

-- ----------------------------
-- Table structure for `think_shop`
-- ----------------------------
DROP TABLE IF EXISTS `think_shop`;
CREATE TABLE `think_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '订单编号',
  `price` int(11) NOT NULL COMMENT '订单金额',
  `image` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '订单时间',
  `hits` smallint(6) NOT NULL DEFAULT '0' COMMENT '点击',
  `content` text CHARACTER SET utf8 COMMENT '内容描述',
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '关键字',
  `status` tinyint(1) DEFAULT NULL COMMENT '0',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of think_shop
-- ----------------------------
INSERT INTO `think_shop` VALUES ('1', '家视通', '200', '', '111', '<p>内容内容内容内容内容内容内容内容内容内容内容内容</p>', '孝子电话', '“常回家看看”入法催生“孝子电话”，空巢老人不再孤独', '1', '0');

-- ----------------------------
-- Table structure for `think_upload_image`
-- ----------------------------
DROP TABLE IF EXISTS `think_upload_image`;
CREATE TABLE `think_upload_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(90) DEFAULT NULL COMMENT '标题',
  `litpic` varchar(50) DEFAULT NULL COMMENT '缩略图',
  `url` varchar(250) DEFAULT NULL COMMENT 'URL',
  `type` varchar(20) DEFAULT '1' COMMENT '类型:根据类型判断图片位置',
  `sort` smallint(11) DEFAULT '0' COMMENT '排序',
  `status` tinyint(1) DEFAULT NULL COMMENT '状态',
  `uptime` int(11) DEFAULT NULL COMMENT '更新时间',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`),
  KEY `sort` (`sort`),
  KEY `type` (`type`),
  KEY `uptime` (`uptime`),
  KEY `addtime` (`addtime`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_upload_image
-- ----------------------------
INSERT INTO `think_upload_image` VALUES ('28', '的顶顶顶顶顶的', null, null, '2', '1', '1', '1385977268', '1385977268');
INSERT INTO `think_upload_image` VALUES ('29', '的顶顶顶顶顶', null, null, '1', '2', '1', '1385977276', '1385977276');
INSERT INTO `think_upload_image` VALUES ('30', 'error', '529da2e3606d2.jpg', '', '', '3', '1', '1386062563', '1386060977');
