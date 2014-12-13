/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for capstone_posts
CREATE DATABASE IF NOT EXISTS `capstone_posts` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `capstone_posts`;


-- Dumping structure for table capstone_posts.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `Title` varchar(128) DEFAULT NULL,
  `Author` varchar(128) DEFAULT NULL,
  `Content` text NOT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table capstone_posts.posts: ~2 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `Title`, `Author`, `Content`, `Date`) VALUES
	(1, 'Capstone Capers.', 'Nick Propst', 'It\'s been a while since i had to program something in php especially since it has been a few months since my last PHP/MySql class.  I really do enjoy programming in PHP some people don\'t like PHP that much and look down upon it like some sort of bastard child of a C language.  I really think i want to start focusing on learning more about PHP and picking up more knowledge about JavaScript.  This is my last quarter and it has been an experience, three years ago if you had asked me what i would be doing in three years i would have said sitting on my ass playing League of Legends.  That was a pretty down point for me at that point and i have come a long way since then; not only in skill but mentally.  In the past two years i have moved four times, been through 2 jobs and my grandmother has passed away.  It\'s been a rough few years really with the many things that i never thought would have ever gone wrong have gone wrong.  I really hate my position in life and know only i can change it, and that\'s why i decided to burden myself with this debt.  This is my chance to turn it around and move on with my life and do something good for a change.', '2014-12-11'),
	(2, 'Welcome to the Site.', 'Nick Propst', 'Welcome to my website, this is the last quarter for me and i am glad to say that i will be looking forward to working in the industry in the future.  I will be using this site to showcase some of the things i can do with programming and hopefully not my terrible grammar skills. Thanks for looking at the site and please enjoy, thanks!', '2014-12-01');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
