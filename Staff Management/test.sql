/*
Navicat MySQL Data Transfer

Source Server         : 郑诚
Source Server Version : 100119
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 100119
File Encoding         : 65001

Date: 2018-11-20 21:17:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `telephone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES ('1', '123456', 'e10adc3949ba59abbe56e057f20f883e', '0.01234560.0', '3e55f625db88f1c6');
INSERT INTO `account` VALUES ('2', '666', 'fae0b27c451c728867a567e8c1bb4e53', '0.06660.0', '87d7529bf91f1ac6');
INSERT INTO `account` VALUES ('3', '333', '310dcbbf4cce62f762a2aaa148d556bd', '0.03330.0', 'a84fc896c2425ed8');
INSERT INTO `account` VALUES ('4', '444', '550a141f12de6341fba65b0ad0433500', '0.04440.0', '866b89e23f8d2673');
INSERT INTO `account` VALUES ('5', '123', '202cb962ac59075b964b07152d234b70', '0.01230.0', 'aa551cce5345cdf3');
INSERT INTO `account` VALUES ('6', '456', '250cf8b51c773f3f8dc8b4be867a9a02', '0.04560.0', '3f1c35bf67a5e371');
INSERT INTO `account` VALUES ('13', '777', 'f1c1592588411002af340cbaedd6fc33', '0.07770.0', '3c5eb6d3a2b5b60e');

-- ----------------------------
-- Table structure for activity
-- ----------------------------
DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity` (
  `activityid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `create_date` date DEFAULT NULL,
  `participants` int(11) DEFAULT NULL,
  `alreadylnvoled` int(11) DEFAULT NULL,
  PRIMARY KEY (`activityid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of activity
-- ----------------------------
INSERT INTO `activity` VALUES ('1', '社区羽毛球', '周六', '2018-10-30', '35', '6');
INSERT INTO `activity` VALUES ('2', '歌唱', '周五', '2018-10-18', '36', '20');

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL,
  `author` char(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `dateline` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------

-- ----------------------------
-- Table structure for notice
-- ----------------------------
DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `noticeid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `descripttion` varchar(50) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`noticeid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of notice
-- ----------------------------
INSERT INTO `notice` VALUES ('1', '生活费', '请要生活费', '2018-10-27', '0');
INSERT INTO `notice` VALUES ('2', '学费', '请要学费', '2018-10-19', '1');
INSERT INTO `notice` VALUES ('3', '服务费', '郑诚', '2018-10-20', '3');

-- ----------------------------
-- Table structure for tb_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `Ano` int(11) NOT NULL AUTO_INCREMENT,
  `Aadmin` varchar(255) DEFAULT NULL,
  `Apassword` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Ano`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('1', '张三', '123');
INSERT INTO `tb_admin` VALUES ('2', '李四', '123');
INSERT INTO `tb_admin` VALUES ('3', '王五', '123');
INSERT INTO `tb_admin` VALUES ('4', '赵六', '123');
INSERT INTO `tb_admin` VALUES ('5', '胡七', ' 123');

-- ----------------------------
-- Table structure for tb_dept
-- ----------------------------
DROP TABLE IF EXISTS `tb_dept`;
CREATE TABLE `tb_dept` (
  `Dno` varchar(20) NOT NULL,
  `Dname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Dno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_dept
-- ----------------------------
INSERT INTO `tb_dept` VALUES ('001', '开发部');
INSERT INTO `tb_dept` VALUES ('002', '产品部');
INSERT INTO `tb_dept` VALUES ('003', '美工部');
INSERT INTO `tb_dept` VALUES ('004', '发售部');

-- ----------------------------
-- Table structure for tb_emp
-- ----------------------------
DROP TABLE IF EXISTS `tb_emp`;
CREATE TABLE `tb_emp` (
  `Eno` int(10) NOT NULL AUTO_INCREMENT,
  `Ename` varchar(255) DEFAULT NULL,
  `Eage` int(10) DEFAULT NULL,
  `Edeptno` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Eno`),
  KEY `Edept` (`Edeptno`),
  CONSTRAINT `tb_emp_ibfk_1` FOREIGN KEY (`Edeptno`) REFERENCES `tb_dept` (`Dno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1011 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_emp
-- ----------------------------
INSERT INTO `tb_emp` VALUES ('1001', '一', '34', '001');
INSERT INTO `tb_emp` VALUES ('1002', '二', '22', '002');
INSERT INTO `tb_emp` VALUES ('1003', '三', '24', '003');
INSERT INTO `tb_emp` VALUES ('1004', '四', '29', '004');
INSERT INTO `tb_emp` VALUES ('1005', '五', '22', '001');
INSERT INTO `tb_emp` VALUES ('1006', '六', '23', '002');
INSERT INTO `tb_emp` VALUES ('1007', '七', '24', '003');
INSERT INTO `tb_emp` VALUES ('1008', '八', '25', '004');

-- ----------------------------
-- Table structure for user_activity
-- ----------------------------
DROP TABLE IF EXISTS `user_activity`;
CREATE TABLE `user_activity` (
  `userid` int(11) NOT NULL,
  `activityid` int(11) NOT NULL,
  PRIMARY KEY (`userid`,`activityid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_activity
-- ----------------------------
INSERT INTO `user_activity` VALUES ('1', '1');
INSERT INTO `user_activity` VALUES ('2', '1');
INSERT INTO `user_activity` VALUES ('2', '2');
