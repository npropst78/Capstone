-- Dumping database structure for capstone_posts
CREATE DATABASE IF NOT EXISTS `capstone_posts` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `capstone_posts`;


-- Dumping structure for table capstone_posts.user_info
CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
