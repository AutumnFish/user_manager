-- 选择使用的数据库
use test;

-- 判断是否有stars_数据表
DROP TABLE IF EXISTS `example_stars`;
CREATE TABLE `example_stars` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) NOT NULL DEFAULT '' COMMENT '明星的名字',
  `userIcon` varchar(255) NOT NULL DEFAULT '' COMMENT '图片地址 需要联网',
  `userInfo` varchar(255) NOT NULL DEFAULT '' COMMENT '明星的 描述',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='明星数据表';

-- 插入基础数据

INSERT INTO `example_stars` VALUES (1,'托尼','https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1760364373,1638194034&fm=27&gp=0.jpg','美女,今天想要做一个什么样的发型啊,'),(2,'胡歌','https://ss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=3802769585,1517263243&fm=58','帅!!!!!!!!!!!!!1'),(3,'彭于晏','https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1938160335,4156974807&fm=27&gp=0.jpg','肌肉男,阳光,帅气,演技派,老公'),(4,'仓木麻衣','https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3357100406,36287108&fm=27&gp=0.jpg','女的,明星,美美哒,歌手,很好听的声音哦'),(5,'霍建华','https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1840310577,3539019056&fm=27&gp=0.jpg','跟胡歌是好基友,但是被林心如活活拆散了 艾'),(6,'周星驰','https://ss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=2743140377,458789411&fm=58&w=121&h=140&img.JPEG&bpow=500&bpoh=725','无厘头 , 喜剧之王');
