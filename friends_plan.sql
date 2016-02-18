CREATE DATABASE IF NOT EXISTS friends_plan_demo;

USE friends_plan_demo;
--

CREATE TABLE IF NOT EXISTS `members` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `aboutme` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `rolecode` varchar(50) NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `module` (
  `mod_modulegroupcode` varchar(25) NOT NULL,
  `mod_modulegroupname` varchar(50) NOT NULL,
  `mod_modulecode` varchar(25) NOT NULL,
  `mod_modulename` varchar(50) NOT NULL,
  `mod_modulegrouporder` int(3) NOT NULL,
  `mod_moduleorder` int(3) NOT NULL,
  `mod_modulepagename` varchar(255) NOT NULL,
  PRIMARY KEY (`mod_modulegroupcode`,`mod_modulecode`),
  UNIQUE(`mod_modulecode`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;





INSERT INTO `module` (`mod_modulegroupcode`, `mod_modulegroupname`, 
  `mod_modulecode`, `mod_modulename`, `mod_modulegrouporder`, `mod_moduleorder, mod_modulepagename`) VALUES 
("INVT","Inventory", "PURCHASES","Purchases", 2, 1,'purchases.php'),
("INVT","Inventory", "STOCKS","Stocks", 2, 2,'stocks.php'),
("INVT","Inventory", "SALES","Sales", 2, 3,'sales.php'),
("CHECKOUT","Checkout","SHIPPING","Shipping", 3, 1,'shipping.php'),
("CHECKOUT","Checkout","PAYMENT","Payment", 3, 2,'payment.php'),
("CHECKOUT","Checkout","TAX","Tax", 3, 3,'tax.php');

--
-- Dumping data for table `members`
--
INSERT INTO `members` ( `name`, `email`, `phone`, `aboutme`, `password`,`rolecode`) VALUES
( 'yuhu', 'swadesh@gmail.com', '1234567890','aboutme: I am yuhu, from PCA , Oslo', 'aabbccdd','normaluser'),
( 'siri', 'ipsita@gmail.com', '11111111', 'aboutme: I am SIRI from NORWAY, single and interested in both men and women','aabbccdd','normaluser'),
( 'Martin', 'martin@gmail.com', '11111111', 'aboutme: I am martin from anna to know more about me? add me as your friend','aabbccdd','normaluser'),
( 'Ole', 'Ole@gmail.com', '11111111', 'aboutme: I am Ole from NORWAY, unisex','aabbccdd','normaluser'),
( 'Tomas', 'Thanh@gmail.com', '11111111', 'aboutme: I am Thanh from UK, I am not ugly n I´m not a ladyboy','aabbccdd','normaluser'),
( 'Christ', 'Christ@gmail.com', '11111111', 'aboutme: I am Christ from UK, I am not a playboy,wanna to know more about me? ','aabbccdd','normaluser'),
( 'yuhuH', 'swadesh@gmail.com', '1234567890','aboutme: I am yuhu, from PCA , Oslo', 'aabbccdd','normaluser'),
( 'siriStensberg', 'ipsita@gmail.com', '11111111', 'aboutme: I am SIRI from NORWAY,wanna to know more about me nd women','aabbccdd','normaluser'),
( 'MartinTrygve', 'martin@gmail.com', '11111111', 'aboutme: I am martin from Finland, direct','aabbccdd','normaluser'),
( 'OleNorman', 'Ole@gmail.com', '11111111', 'aboutme: I am Ole from NORWAY, unisex','aabbccdd','normaluser'),
( 'Thomas', 'Thanh@gmail.com', '11111111', 'aboutme: I am Thanh from Australia, I am not a ladyboy','aabbccdd','normaluser'),
( 'ChristianH', 'Christ@gmail.com', '11111111', 'aboutme: I am Christ from US, I am not a playboy','aabbccdd','normaluser'),
( 'yuhuS', 'swadesh@gmail.com', '1234567890','aboutme: I am yuhu, from PCA , Oslo', 'aabbccdd','normaluser'),
( 'siriStensbergH', 'ipsita@gmail.com', '11111111', 'aboutme: I am SIRI from NORWAY, single and interested in both men and women','aabbccdd','normaluser'),
( 'MartinHansen', 'martin@gmail.com', '11111111', 'aboutme: I am martin from NORWAY, direct','aabbccdd','normaluser'),
( 'OleHansen', 'Ole@gmail.com', '11111111', 'aboutme: I am Ole from NORWAY, unisex','aabbccdd','normaluser'),
( 'Thomason', 'Thanh@gmail.com', '11111111', 'aboutme: I am Thanh from NORWAY, I am not a ladyboy','aabbccdd','normaluser'),
( 'ChristianiaH', 'Christa@gmail.com', '11111111', 'aboutme: I am Christ from NORWAY, I am not a playboy','aabbccdd','normaluser');

--
-- REPLACE fuction for later use 
--

REPLACE INTO `members`
SET `uid` = '1',
`name` = 'yuhu',
`email` = 'swadesh@gmail.com',
`phone` = '12341234',
`aboutme` = 'I am yuhu after replaced',
`password` = 'aaddbbcc';

--
-- table for table `admins`
--


CREATE TABLE IF NOT EXISTS `role` (
  `role_rolecode` varchar(50) NOT NULL,
  `role_rolename` varchar(50) NOT NULL,
  PRIMARY KEY (`role_rolecode`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;
--
-- Dumping data for table `role`
--
INSERT INTO `role` (`role_rolecode`, `role_rolename`) VALUES
('normaluser', 'user'),
('admin', 'administrator');


CREATE TABLE IF NOT EXISTS `admins` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `rolecode` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`),
  FOREIGN KEY (`rolecode`) REFERENCES `role` (`role_rolecode`)  ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
--
-- Dumping data for table `admins`
--
INSERT INTO `admins` (`uname`, `email`, `password`,`rolecode`) VALUES
( 'swadesh','swadesh@gmail.com', '1234567890','admin'),
( 'swedensenips','ipsita@gmail.com', '1111111111','admin');
