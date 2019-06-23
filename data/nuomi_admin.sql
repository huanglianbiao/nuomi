-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2019-06-23 05:03:57
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nuomi_admin`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) NOT NULL,
  `pwd` varchar(60) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `stime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='后台登录' AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `user`, `pwd`, `photo`, `stime`) VALUES
(1, 'admin', 'ffa14ca40a77b658bb1251d89b7d5c80', '201609/20160927111134536.png', 1475571287),
(2, 'admin123', 'd48178bf10a62d052d410d7479098410', '201609/20160927111234501.jpg', 1475571278),
(31, '123', '7d03531d36525bd2da017a1563fc0b3a', '201609/20160927110418577.jpg', 1475571267),
(32, 'dev-hlb', 'e4d5065f216bdd59fa9b2c634734d697', '201906/20190623045806538.jpg', 1561258686);

-- --------------------------------------------------------

--
-- 表的结构 `ad_list`
--

CREATE TABLE IF NOT EXISTS `ad_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `about` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `price` float(8,2) NOT NULL,
  `ord` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `ad_list`
--

INSERT INTO `ad_list` (`id`, `pid`, `name`, `about`, `content`, `url`, `photo`, `price`, `ord`) VALUES
(1, 0, '轮播图', '首页轮播图', '', '', '', 0.00, 0),
(2, 1, '轮播图1', '', '', '', '201609/20160926205103744.jpg', 0.00, 5),
(3, 1, '轮播图2', '', '', '', '201609/20160926205148390.jpg', 0.00, 4),
(4, 1, '轮播图3', '', '', '', '201609/20160926211440316.jpg', 0.00, 3),
(5, 1, '轮播图4', '', '', '', '201609/20160926205249847.jpg', 0.00, 2),
(6, 1, '轮播图5', '', '', '', '201609/20160926213418913.jpg', 0.00, 0),
(7, 0, '首页轮播右侧广告图片', '', '', '', '201609/2016092920294351.jpg', 0.00, 0),
(8, 7, '右侧广告', '', '', '', '201609/20160927142546461.png', 0.00, 0),
(9, 0, '详细页右侧广告', '', '', '', '', 0.00, 0),
(10, 9, '1', '杨铭宇黄焖鸡米饭(锦城南路店)', '仅售13.9元，价值16元锦城南路店黄焖鸡米饭1份！精选原料，超值享受！专业烹饪，打造特色美食！分量', '', '201609/20160929201831595.jpg', 13.90, 0),
(11, 9, '2', '一品锅贴', '仅售7.8元，价值10元锅贴1份！', '', '201609/20160929202005560.jpg', 7.80, 0),
(12, 9, '3', '大海烧烤', '仅售188元，价值200元储值卡！免费WiFi！ ', '', '201609/20160929202154855.jpg', 188.00, 0),
(13, 9, '4', '小城大爱(国购店)', '仅售85元，价值100元代金券！免费WiFi！', '', '201609/20160929202143430.jpg', 85.00, 0),
(14, 9, '5', '猫咪爱上鱼招牌酸菜鱼连锁\r\n', '仅售85元，价值100元代金券！免费WiFi！', '', '201609/20160929202524557.jpg', 85.00, 0);

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sort_id` smallint(6) NOT NULL,
  `sort_id2` smallint(6) NOT NULL,
  `title` varchar(30) NOT NULL,
  `about` text NOT NULL,
  `content` text NOT NULL,
  `price` float(8,2) NOT NULL,
  `photos` text NOT NULL,
  `have_num` smallint(6) NOT NULL,
  `sale_num` smallint(6) NOT NULL,
  `send_time` int(10) NOT NULL,
  `select_option` text NOT NULL COMMENT ' 选项',
  `goods_code` varchar(20) NOT NULL COMMENT '标号',
  `discount` tinyint(4) NOT NULL COMMENT '打折',
  `collect_num` int(10) NOT NULL COMMENT '收藏数',
  `ping_num` int(10) NOT NULL COMMENT '评论数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='商品介绍' AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `sort_id`, `sort_id2`, `title`, `about`, `content`, `price`, `photos`, `have_num`, `sale_num`, `send_time`, `select_option`, `goods_code`, `discount`, `collect_num`, `ping_num`) VALUES
(1, 1, 10, '欢乐牧场时尚自助餐厅(国购广场店)', '仅售49.9元，价值58元单人自助晚餐1份！免费停车，免费WiFi！', '<h3><span style="font-size:20px"><strong>团单详情</strong></span></h3>\r\n\r\n<p>单人自助晚餐:</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/96dda144ad3459825a7aae0f04f431adcaef84bf.jpg" style="height:713px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/caef76094b36acafde10dd6174d98d1000e99cbf.jpg" style="height:713px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/4ec2d5628535e5dde5acee427ec6a7efcf1b62ae.jpg" style="height:579px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/2cf5e0fe9925bc3148dd4a0556df8db1ca1370ae.jpg" style="height:713px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/9358d109b3de9c82f0e5b2126481800a18d843ae.jpg" style="height:529px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/810a19d8bc3eb1351b47fc26ae1ea8d3fc1f44ae.jpg" style="height:529px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/810a19d8bc3eb1351b34fc26ae1ea8d3fc1f44bf.jpg" style="height:529px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/94cad1c8a786c9174af019a4c13d70cf3ac757bf.jpg" style="height:529px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/738b4710b912c8fc8000bd50f4039245d78821bf.jpg" style="height:529px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/aa18972bd40735faba70052496510fb30e2408ae.jpg" style="height:529px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/e7cd7b899e510fb36f993c0ad133c895d0430cae.jpg" style="height:529px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/0eb30f2442a7d933ab28afeea54bd11372f001ae.jpg" style="height:529px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/78310a55b319ebc4c1f83d048a26cffc1f1716ae.jpg" style="height:529px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/faedab64034f78f087f8d16e71310a55b2191cbf.jpg" style="height:529px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/b8014a90f603738d29b947bfbb1bb051f919ecb8.jpg" style="height:529px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/0b7b02087bf40ad1fc648c7e5f2c11dfa8ecceaf.jpg" style="height:529px; width:800px" title="图片" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/060828381f30e9242d57d7ac44086e061c95f7b8.jpg" style="height:529px; width:800px" title="图片" /></p>\r\n\r\n<p><br />\r\n<br />\r\n『图片仅供参考，具体以实物为准』</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>商家介绍</h3>\r\n\r\n	<p><img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/8cb1cb1349540923c6ee28e39a58d109b2de49a3.jpg" style="height:529px; width:800px" title="图片" /></p>\r\n	</li>\r\n	<li>\r\n	<p><br />\r\n	<span style="font-family:Arial,Helvetica,sans-serif">&ldquo;欢乐牧场&rdquo;是内蒙古小尾羊餐饮连锁股份有限公司旗下的自助品牌之一，欢乐牧场是小尾羊公司针对80、90后推出的以&ldquo;时尚快乐&rdquo;为主题的时尚自助火锅中 西餐厅。&ldquo;欢乐牧场&rdquo;在传承小尾羊火锅文化和品牌特征时，凭借自身&ldquo;个性鲜明&rdquo;&ldquo;时尚前卫&rdquo;的特质在火锅市场中脱颖而出。&ldquo;欢乐牧场&rdquo;火爆开业，一炮打 响。时尚炫酷的环境，丰富精美的涮品及烧烤，愉快的就餐体验</span>。</p>\r\n	</li>\r\n	<li>\r\n	<p><br />\r\n	<img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/bd3eb13533fa828b8ca4d67ef51f4134960a5aa3.jpg" style="height:529px; width:800px" title="图片" /><br />\r\n	<img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/d058ccbf6c81800a3c13c293b93533fa838b47bc.jpg" style="height:529px; width:800px" title="图片" /><br />\r\n	<img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/a71ea8d3fd1f4134b9b04ee32d1f95cad0c85ea3.jpg" style="height:529px; width:800px" title="图片" /><br />\r\n	<img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/b03533fa828ba61e831883b24934970a314e59bc.jpg" style="height:529px; width:800px" title="图片" /><br />\r\n	<img src="https://gss0.baidu.com/-4o3dSag_xI4khGko9WTAnF6hhy/nuomi/pic/item/7e3e6709c93d70cf027de190f0dcd100bba12ba3.jpg" style="height:529px; width:800px" title="图片" /><br />\r\n	<br />\r\n	<br />\r\n	<br />\r\n	&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', 50.00, 'a:6:{i:0;s:28:"201609/20160929193717625.jpg";i:1;s:27:"201609/2016092919371716.jpg";i:2;s:28:"201609/20160929193717658.jpg";i:3;s:28:"201609/20160929193717705.jpg";i:4;s:28:"201609/20160929193717780.jpg";i:5;s:28:"201609/20160929193717383.jpg";}', 200, 150, 1475027050, 'a:3:{s:3:"酸";s:2:"20";s:3:"甜";s:2:"25";s:3:"辣";s:2:"30";}', '147502705095410', 9, 321, 130),
(2, 1, 10, '黔妈妈', '仅售100元，价值123元4人餐！需预约！', '', 100.00, 'a:6:{i:0;s:27:"201609/2016092809521358.jpg";i:1;s:28:"201609/20160928095213347.jpg";i:2;s:28:"201609/20160928095213821.jpg";i:3;s:28:"201609/20160928095213855.jpg";i:4;s:28:"201609/20160928095213340.jpg";i:5;s:28:"201609/20160928095213159.jpg";}', 1332, 132, 1475027533, 'a:2:{s:3:"辣";s:2:"50";s:6:"加辣";s:2:"55";}', '147502753312893', 10, 434, 343),
(3, 1, 9, '胖胖烤鱼', '仅售98元，价值165元3人餐！免费WiFi！', '', 96.00, 'a:6:{i:0;s:27:"201609/2016092809552066.jpg";i:1;s:28:"201609/20160928095520615.jpg";i:2;s:28:"201609/20160928095520148.jpg";i:3;s:28:"201609/20160928095520331.jpg";i:4;s:28:"201609/20160928095520349.jpg";i:5;s:28:"201609/20160928095520230.jpg";}', 235, 210, 1475027720, 'a:3:{s:3:"辣";s:2:"98";s:6:"加辣";s:2:"99";s:6:"特辣";s:3:"100";}', '147502772075811', 9, 32, 3232),
(4, 1, 9, '琛姐小厨', '仅售260元，价值356元4-6餐！节假日通用，提供免费WiFi，请至少提前1天预约！', '', 260.00, 'a:6:{i:0;s:28:"201609/20160928095755831.jpg";i:1;s:28:"201609/20160928095755919.jpg";i:2;s:28:"201609/20160928095755365.jpg";i:3;s:28:"201609/20160928095755927.jpg";i:4;s:28:"201609/20160928095755795.jpg";i:5;s:28:"201609/20160928095755636.jpg";}', 522, 433, 1475027875, 'a:2:{s:6:"清汤";s:3:"260";s:6:"加辣";s:3:"265";}', '147502787584884', 1, 111, 11),
(5, 1, 19, '留一手特色烤鱼', '仅售88元，价值189元3-4人餐！节假日通用，免费WiFi！', '', 88.00, 'a:6:{i:0;s:28:"201609/20160928100122928.jpg";i:1;s:28:"201609/20160928100122633.jpg";i:2;s:28:"201609/20160928100122255.jpg";i:3;s:28:"201609/20160928100122271.jpg";i:4;s:28:"201609/20160928100122645.jpg";i:5;s:28:"201609/20160928100122920.jpg";}', 132, 33, 1475028082, 'a:2:{s:3:"辣";s:2:"99";s:6:"特辣";s:3:"109";}', '147502808229580', 2, 122, 12),
(6, 1, 19, '夜郎人家', '仅售88元，价值130元5人餐！免费停车，免费WiFi！', '', 99.00, 'a:6:{i:0;s:27:"201609/2016092810034248.jpg";i:1;s:27:"201609/2016092810034257.jpg";i:2;s:28:"201609/20160928100342382.jpg";i:3;s:28:"201609/20160928100342138.jpg";i:4;s:28:"201609/20160928100342689.jpg";i:5;s:28:"201609/20160928100342435.jpg";}', 432, 23, 1475028222, 'a:2:{s:3:"辣";s:2:"88";s:6:"特辣";s:2:"99";}', '147502822282272', 9, 65, 56),
(7, 2, 11, '星际迷航3：超越星辰', '导演：林诣彬\r\n\r\n主演：克里斯·派恩,扎克瑞·昆图,佐伊·索尔达娜,西蒙·佩吉,安东·尤金,卡尔·厄本,索菲亚·波多拉,约翰·赵,伊德瑞斯·艾尔巴,狄普·罗伊,约瑟夫·盖特,Polina Nikolai,Natalie Moon,Jason Matthew Smith,Sarah Yu,Ashley Edner,Adam DiMarco,Fiona Vroom,普里亚拉·贾拉特南,Melissa Roxburgh,Anthony Shim,Andrea Yu,Emy Aneke,Christian Sloan,Rebecca Husain,Jodi Haynes,Alex Rose,Jake Foy,Harry Han,Harpreet Sandhu,Jaewon Suh,Eric Banerd,Edwin Rodriguez,Ian Nsenga,Jabbz Farooqi,Nathan Jean,Thomas Cadrot,Bryce Soderberg,Jeff Reyes,Tarun Keram,Alan Yu,Justin Anthony,Thomas Dezell,Adam St,Roxanne Fernandes,Jeremy Raymond,Arlene Cerda,Rich Hill,Chuka Ekweogwu,Natasha Young,Gina Brinkman,Richard Laurence,Luka Hays,马修·麦考尔,格雷戈·格伦伯格,Jennifer Cheon,Jarod Joseph,Douglas Chapman,丹·佩恩,希亚·温汉,Jake Huang,Sara Maria Forsberg,Nicole Anthony,金·柯尔德,丹尼·普迪,Jamie Soricelli,Jennifer W. Evans,J.P. Mulcaster,Sorena Khanlou,Anita Brown,弗雷泽·爱奇森,乔·塔斯利姆,莉迪亚·威尔逊,索瑞·安达斯鲁,杰夫·贝佐斯,Anita Brown\r\n\r\n类型：动作,冒险,奇幻\r\n\r\n    国家：美国\r\n    首映：2016-09-02\r\n    片长：122分钟\r\n', '', 50.00, 'a:1:{i:0;s:28:"201609/20160928155314909.jpg";}', 76, 65, 1475028520, 'a:1:{s:0:"";s:0:"";}', '147502852074273', 6, 342, 23),
(8, 2, 11, '魔法老师', '导演：特瑞·琼斯\r\n\r\n主演：西蒙·佩吉,凯特·贝金赛尔,罗宾·威廉姆斯,特瑞·吉列姆,罗伯·里格尔,乔安娜·林莉,艾迪·伊扎德,特瑞·琼斯,约翰·克立斯,麦克·帕林,艾瑞克·爱都,艾玛·皮尔森,David Annen,James Kermack,Mojo,Jud Charlton,Gemma Rourke,Simon Coleman,Lennon Clarke,Wilson,James David Robinson,拉斯科·阿特金斯,汉娜·布拉米雷斯,Stuart Budd,豪尔赫·莱昂·马丁内斯,Gavin Scott,Marianne Oldham,Ronan Summers,朱蒂·罗,梅拉·沙尔,桑吉夫·巴哈斯卡,Ryan Oliva,布莱恩·考克斯,Robert Bathurst,亚历克萨·戴维斯,Marty McFly,Lockhart Ogilvie,Tony Pankhurst,Christian Palmer,Debbie J. Nash,Lorna Lacey,Edward Fisher,Neville Phillips,Marat Khairoullin,Samuel Timlett,Christopher Chesser,Charlie Richards,Chris Daniels,Robert Jones,Chris Weeks,Zara Sorensen,Liliana Gane,Basia Forrest,Marli Bland,John Bedford,Richard Suchet,Mairi McHaffie,Brenda Emmanus,Ellie Green,Margarita Doyle\r\n\r\n类型：喜剧,科幻\r\n\r\n    国家：英国\r\n    首映：2016-09-09\r\n    片长：85分钟\r\n', '', 32.00, 'a:1:{i:0;s:28:"201609/20160928101025820.jpg";}', 54, 34, 1475028625, 'a:1:{s:0:"";s:0:"";}', '147502862518435', 0, 435, 43),
(9, 2, 12, '大话西游3', '导演：刘镇伟\r\n\r\n主演：韩庚,唐嫣,吴京,张瑶,张超,谢楠,黄征,莫文蔚,飞儿,胡静,何炅,钟欣潼,元奎,陈嘉俊,何云伟,杜娟,吕建民,周璞,吕戛纳,彭心彤\r\n\r\n类型：喜剧,奇幻,爱情\r\n\r\n    国家：中国大陆,中国香港\r\n    首映：2016-09-14\r\n    片长：93分钟\r\n', '', 55.00, 'a:1:{i:0;s:28:"201609/20160928101149706.jpg";}', 54, 54, 1475028709, 'a:1:{s:0:"";s:0:"";}', '147502870961129', 5, 43, 43),
(10, 2, 12, '反贪风暴2', '导演：林德禄\r\n主演：古天乐,张智霖,周渝民,蔡少芬,陈静,盛君,曾国祥,林保怡,张松枝,田学维, 林家栋 ,姜皓文,欧锦棠,曾志伟,蔡洁,卢海鹏,石修', '', 36.00, 'a:1:{i:0;s:28:"201609/20160928155435232.jpg";}', 463, 342, 1475028779, 'a:1:{s:0:"";s:0:"";}', '147502877915884', 4, 433, 343),
(11, 2, 12, '七月与安生', '主演：周冬雨,马思纯,李程彬,李萍,蔡纲\r\n', '', 0.00, 'a:1:{i:0;s:28:"201609/20160928155345105.jpg";}', 54, 43, 1475028838, 'a:1:{s:0:"";s:0:"";}', '147502883811996', 7, 755, 85),
(12, 1, 17, '玉米人自助餐厅', '仅售38.8元，价值49元单人晚餐！节假日通用，提供免费停车位、免费WiFi，可叠加使用，免费停车，免费WiFi！', '', 38.80, 'a:6:{i:0;s:28:"201609/20160928155751810.jpg";i:1;s:28:"201609/20160928155751345.jpg";i:2;s:27:"201609/2016092815575193.jpg";i:3;s:28:"201609/20160928155751793.jpg";i:4;s:28:"201609/20160928155751718.jpg";i:5;s:28:"201609/20160928155751692.jpg";}', 43, 32, 1475049471, 'a:1:{s:0:"";s:0:"";}', '147504947193054', 0, 435, 4443),
(13, 1, 17, '重庆不夜城', '仅售49.9元，价值55元自助晚餐1份，免费停车，免费WiFi！', '', 49.30, 'a:6:{i:0;s:28:"201609/20160928155942869.jpg";i:1;s:28:"201609/20160928155942570.jpg";i:2;s:28:"201609/20160928155942865.jpg";i:3;s:28:"201609/20160928155942821.jpg";i:4;s:28:"201609/20160928155942693.jpg";i:5;s:28:"201609/20160928155942960.jpg";}', 0, 0, 1475049582, 'a:1:{s:0:"";s:0:"";}', '147504958258224', 0, 0, 0),
(14, 1, 20, '品安煲川味烤鱼(西林名都店)', '仅售48元，价值69元特价爱心情侣套餐！免费WiFi，需预约！', '', 48.00, 'a:4:{i:0;s:28:"201609/20160928160209107.jpg";i:1;s:28:"201609/20160928160209734.jpg";i:2;s:28:"201609/20160928160209980.jpg";i:3;s:27:"201609/2016092816020963.jpg";}', 0, 0, 1475049729, 'a:1:{s:0:"";s:0:"";}', '147504972963378', 9, 786, 45),
(15, 1, 20, '川味观(广德店)', '仅售85元，价值100元代金券！免费停车，免费WiFi！', '', 85.00, 'a:6:{i:0;s:28:"201609/20160929193831551.jpg";i:1;s:28:"201609/20160929193831574.jpg";i:2;s:28:"201609/20160929193831389.jpg";i:3;s:28:"201609/20160929193831580.jpg";i:4;s:28:"201609/20160929193831605.jpg";i:5;s:27:"201609/2016092919383184.jpg";}', 0, 0, 1475049835, 'a:1:{s:0:"";s:0:"";}', '147504983569223', 9, 35, 54);

-- --------------------------------------------------------

--
-- 表的结构 `goods_comment`
--

CREATE TABLE IF NOT EXISTS `goods_comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `score` tinyint(1) NOT NULL COMMENT '评分',
  `content` varchar(200) NOT NULL,
  `photos` text NOT NULL,
  `send_time` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='评价列表' AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `goods_comment`
--

INSERT INTO `goods_comment` (`id`, `goods_id`, `user_id`, `score`, `content`, `photos`, `send_time`, `status`) VALUES
(1, 1, 1, 5, '口味不错，服务周到，性价比高，值得买', '', 5135416, 1),
(2, 2, 2, 5, '我觉得味道还行。感觉卫生不是很到位。有待提高。', '', 0, 1),
(5, 3, 3, 34, '挺好的！已经吃过很多很多很多次了！一顿吃的饱饱的！很不错', '343', 0, 1),
(7, 4, 4, 32, '真的你知道吃了多少回了，一如既往好吃啊', '', 2345, 1),
(8, 1, 2, 5, '很好吃，比国购那里的好吃很多，暑假补课就总是在这里买，送的酸梅汁甜甜的，很喜欢!!(•''╻''• ۶)因为我不喜欢酸的，就是虽说鸡排切的大点好点，可是吃真的太大了不好吃，每次都蠢得只会一口包₍₍ (̨̡ ‾᷄ᗣ‾᷅ )̧̢ ₎₎', '', 2313133, 1),
(13, 3, 37, 0, '方法烦烦烦烦烦烦烦烦烦跟鬼鬼鬼鬼鬼鬼鬼鬼鬼鬼你你你你你你你你你你你你你你你日日日日日日日日日日日日', '', 1475587493, 0),
(14, 4, 37, 0, '涛涛涛涛涛涛涛涛涛涛涛涛涛涛噢噢噢噢噢噢噢噢噢噢噢噢哦哦哈哈哈哈哈哈哈哈哈哈哈哈哈哈喜喜喜喜喜喜喜喜', '', 1475587613, 1),
(15, 2, 37, 0, '呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵靠靠靠靠靠靠靠靠靠靠靠靠靠水水水水水水水水水水水水水水水水水水密密麻麻密密', '', 1475648920, 0);

-- --------------------------------------------------------

--
-- 表的结构 `goods_sort`
--

CREATE TABLE IF NOT EXISTS `goods_sort` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `pid` smallint(6) NOT NULL,
  `ord` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='导航分类' AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `goods_sort`
--

INSERT INTO `goods_sort` (`id`, `name`, `pid`, `ord`) VALUES
(1, '美食', 0, -1),
(2, '电影', 0, 0),
(3, '休闲娱乐', 0, 0),
(4, '一元抢宝', 0, 0),
(5, '生活服务', 0, 3),
(6, '酒店', 0, 0),
(7, '本地生活', 0, 0),
(8, '丽人', 0, 2),
(9, '火锅', 1, 1),
(10, '小吃', 1, 0),
(11, '热门影片', 2, 0),
(12, '热门影线', 2, 0),
(13, '汽车', 5, 0),
(14, '摄影', 5, 0),
(15, '美容', 8, 0),
(16, '美发', 8, 0),
(17, '自助餐', 1, 0),
(18, '海鲜', 1, 0),
(19, '烧烤烤肉', 1, 0),
(20, '干锅/香锅', 1, 0),
(21, '甜品', 1, 0),
(22, '蛋糕', 1, 0),
(23, '咖啡', 1, 0),
(24, '小龙虾', 1, 0),
(25, '酒吧', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `vip_collect`
--

CREATE TABLE IF NOT EXISTS `vip_collect` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vip_id` int(10) NOT NULL,
  `goods_id` int(10) NOT NULL,
  `send_time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vip_id` (`vip_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='收藏列表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `vip_collect`
--

INSERT INTO `vip_collect` (`id`, `vip_id`, `goods_id`, `send_time`) VALUES
(5, 37, 1, 1475569761),
(6, 37, 2, 1475569768),
(7, 42, 3, 1535023746);

-- --------------------------------------------------------

--
-- 表的结构 `vip_data`
--

CREATE TABLE IF NOT EXISTS `vip_data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `photo` varchar(30) NOT NULL,
  `user` varchar(10) NOT NULL,
  `ni_name` varchar(20) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `pwd` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户资料' AUTO_INCREMENT=43 ;

--
-- 转存表中的数据 `vip_data`
--

INSERT INTO `vip_data` (`id`, `photo`, `user`, `ni_name`, `sex`, `tel`, `pwd`, `email`, `address`) VALUES
(1, '', '罗胜', 'sb', 0, '3838438', '65f853f2a200dc3f89ccbd51f7fa4fd1', 'aaaaa', 'aaaaaaa'),
(2, '', ' 好机会', '阿塞飞', 1, '1342', '65f853f2a200dc3f89ccbd51f7fa4fd1', '2345', ''),
(3, '', '啊是打发', '阿什顿', 1, '12341', '65f853f2a200dc3f89ccbd51f7fa4fd1', '', ''),
(4, '432', '戴菲菲', '阿三', 0, '', '65f853f2a200dc3f89ccbd51f7fa4fd1', '', ''),
(5, '', '染色体', '宋德福', 1, '123', '213413412341', '', ''),
(37, '201609/20160930174246706.jpg', 'vip', '呜呜呜', 1, '15761674094', 'a7c89a7ca51c7fbbc35e083cb99416a4', '111@qq.com', '贵州省贵阳市贵阳学院'),
(38, '201609/20160930171715212.jpg', 'aaa', 'aaa333', 1, '15761679999', 'b69d507433cee0490b1c8f9fed12600b', '', ''),
(39, '201609/20160930192306704.jpg', 'qq123', 'QQ', 1, '16812457812', '55fe2eb3e030fcb306fce7417c2ca397', '', ''),
(40, '', '', '', 0, '', 'fd08dfab59fe642a128723b6f5bb8bbc', '', ''),
(41, '', 'ASD', '', 0, 'ASD', 'deee33e7c81508fb7e896a5756104a0f', '', ''),
(42, '', 'admin', '', 0, '', 'ffa14ca40a77b658bb1251d89b7d5c80', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `vip_order`
--

CREATE TABLE IF NOT EXISTS `vip_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `vip_id` int(10) NOT NULL,
  `order_num` varchar(30) NOT NULL,
  `order_list` text NOT NULL COMMENT '订单信息',
  `vip_list` text NOT NULL COMMENT '收货人信息',
  `send_time` int(10) NOT NULL,
  `all_money` float(8,2) NOT NULL,
  `state` tinyint(1) NOT NULL COMMENT '状态',
  `is_pay` tinyint(1) NOT NULL COMMENT '是否支付',
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_num` (`order_num`),
  KEY `vip_id` (`vip_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='订单列表' AUTO_INCREMENT=43 ;

--
-- 转存表中的数据 `vip_order`
--

INSERT INTO `vip_order` (`id`, `vip_id`, `order_num`, `order_list`, `vip_list`, `send_time`, `all_money`, `state`, `is_pay`) VALUES
(1, 1, '13133', '和DF士大夫UHIiuhfibhb', '', 1313, 200.00, -1, 0),
(2, 2, '3203231', 'dfsgvbsdrgsergasrgbaerhwaert', '', 30, 0.00, 3, 0),
(3, 3, '33', '33333333334', '', 324, 0.00, 3, 0),
(4, 4, '345', '4352345', '', 0, 0.00, 3, 0),
(5, 234, '234', 'wrthdfh', '', 0, 0.00, 3, 0),
(6, 0, '0', 're62346', '', 0, 0.00, 3, 0),
(35, 37, '1475587251805', 'a:2:{i:0;a:4:{s:2:"id";s:1:"9";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"3";s:1:"s";i:0;}i:1;a:4:{s:2:"id";s:1:"1";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"2";s:1:"s";i:0;}}', 'a:4:{s:4:"name";s:3:"vip";s:7:"address";s:30:"贵州省贵阳市贵阳学院";s:3:"tel";s:11:"15761674094";s:5:"email";s:10:"111@qq.com";}', 1475587251, 265.00, 0, 0),
(36, 37, '1475587353881', 'a:2:{i:0;a:4:{s:2:"id";s:1:"2";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"1";s:1:"s";i:1;}i:1;a:4:{s:2:"id";s:2:"12";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"1";s:1:"s";i:1;}}', 'a:4:{s:4:"name";s:3:"vip";s:7:"address";s:30:"贵州省贵阳市贵阳学院";s:3:"tel";s:11:"15761674094";s:5:"email";s:10:"111@qq.com";}', 1475587353, 138.80, 3, 0),
(37, 37, '1475587368406', 'a:2:{i:0;a:4:{s:2:"id";s:1:"3";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"1";s:1:"s";i:1;}i:1;a:4:{s:2:"id";s:1:"4";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"3";s:1:"s";i:1;}}', 'a:4:{s:4:"name";s:3:"vip";s:7:"address";s:30:"贵州省贵阳市贵阳学院";s:3:"tel";s:11:"15761674094";s:5:"email";s:10:"111@qq.com";}', 1475587368, 876.00, 0, 0),
(38, 37, '1475673103258', 'a:2:{i:0;a:4:{s:2:"id";s:1:"6";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"2";s:1:"s";i:0;}i:1;a:4:{s:2:"id";s:2:"13";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"2";s:1:"s";i:0;}}', 'a:4:{s:4:"name";s:3:"vip";s:7:"address";s:30:"贵州省贵阳市贵阳学院";s:3:"tel";s:11:"15761674094";s:5:"email";s:10:"111@qq.com";}', 1475673103, 296.60, 0, 0),
(39, 37, '1475673207443', 'a:2:{i:0;a:4:{s:2:"id";s:1:"3";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"2";s:1:"s";i:0;}i:1;a:4:{s:2:"id";s:1:"5";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"1";s:1:"s";i:0;}}', 'a:4:{s:4:"name";s:3:"vip";s:7:"address";s:30:"贵州省贵阳市贵阳学院";s:3:"tel";s:11:"15761674094";s:5:"email";s:10:"111@qq.com";}', 1475673207, 280.00, 0, 0),
(40, 41, '1491139982794', 'a:1:{i:0;a:4:{s:2:"id";s:1:"3";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"2";s:1:"s";i:0;}}', 'a:4:{s:4:"name";s:3:"ASD";s:7:"address";s:0:"";s:3:"tel";s:3:"ASD";s:5:"email";s:0:"";}', 1491139982, 192.00, 0, 0),
(41, 42, '1535023875677', 'a:7:{i:0;a:4:{s:2:"id";s:2:"12";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"2";s:1:"s";i:0;}i:1;a:4:{s:2:"id";s:1:"4";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"1";s:1:"s";i:0;}i:2;a:4:{s:2:"id";s:1:"3";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"2";s:1:"s";i:0;}i:3;a:4:{s:2:"id";s:1:"2";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"2";s:1:"s";i:0;}i:4;a:4:{s:2:"id";s:2:"13";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"3";s:1:"s";i:0;}i:5;a:4:{s:2:"id";s:1:"5";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"1";s:1:"s";i:0;}i:6;a:4:{s:2:"id";s:1:"1";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"1";s:1:"s";i:0;}}', 'a:4:{s:4:"name";s:5:"admin";s:7:"address";s:3:"asd";s:3:"tel";s:3:"asd";s:5:"email";s:0:"";}', 1535023875, 1015.50, 1, 0),
(42, 42, '1535023917650', 'a:7:{i:0;a:4:{s:2:"id";s:2:"12";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"2";s:1:"s";i:0;}i:1;a:4:{s:2:"id";s:1:"4";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"1";s:1:"s";i:0;}i:2;a:4:{s:2:"id";s:1:"3";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"2";s:1:"s";i:0;}i:3;a:4:{s:2:"id";s:1:"2";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"2";s:1:"s";i:0;}i:4;a:4:{s:2:"id";s:2:"13";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"3";s:1:"s";i:0;}i:5;a:4:{s:2:"id";s:1:"5";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"1";s:1:"s";i:0;}i:6;a:4:{s:2:"id";s:1:"1";s:2:"op";s:4:"xxxx";s:3:"num";s:1:"1";s:1:"s";i:0;}}', 'a:4:{s:4:"name";s:5:"admin";s:7:"address";s:3:"asd";s:3:"tel";s:3:"asd";s:5:"email";s:0:"";}', 1535023917, 1015.50, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
