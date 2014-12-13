<?php
/**
 * User: Nick
 * Date: 12/13/2014
 * Time: 5:40 AM
 */

require_once "connect.php";

class CreateDB {

    function DatabaseCreate() {

        $con = new connect();
        $data = $con->con();

        $addPosts = "INSERT INTO `posts` (`id`, `Title`, `Author`, `Content`, `Date`) VALUES
                    (1, 'Capstone Capers.', 'Nick Propst', 'It\'s been a while since i had to program something in php especially since it has been a few months since my last PHP/MySql class.  I really do enjoy programming in PHP some people don\'t like PHP that much and look down upon it like some sort of bastard child of a C language.  I really think i want to start focusing on learning more about PHP and picking up more knowledge about JavaScript.  This is my last quarter and it has been an experience, three years ago if you had asked me what i would be doing in three years i would have said sitting on my ass playing League of Legends.  That was a pretty down point for me at that point and i have come a long way since then; not only in skill but mentally.  In the past two years i have moved four times, been through 2 jobs and my grandmother has passed away.  It\'s been a rough few years really with the many things that i never thought would have ever gone wrong have gone wrong.  I really hate my position in life and know only i can change it, and that\'s why i decided to burden myself with this debt.  This is my chance to turn it around and move on with my life and do something good for a change.', '2014-12-11'),
                    (2, 'Welcome to the Site.', 'Nick Propst', 'Welcome to my website, this is the last quarter for me and i am glad to say that i will be looking forward to working in the industry in the future.  I will be using this site to showcase some of the things i can do with programming and hopefully not my terrible grammar skills. Thanks for looking at the site and please enjoy, thanks!', '2014-12-01')";

        if (!@$data->select_db("capstone_posts")) {

            @$data->query("CREATE DATABASE IF NOT EXISTS capstone_posts");
            @$data->select_db("capstone_posts");

            @$data->query("CREATE TABLE posts (id int(55) NOT NULL PRIMARY KEY AUTO_INCREMENT, Title varchar(128) DEFAULT NULL, Author varchar(128) DEFAULT NULL, Content text NOT NULL, Date date DEFAULT NULL)");
            @$data->query("CREATE TABLE user_info (id int(55) NOT NULL PRIMARY KEY AUTO_INCREMENT, username varchar(255) NOT NULL DEFAULT '0', password varchar(255) NOT NULL DEFAULT '0')");

            @$data->query($addPosts);

            @$data->close();

        } else {

            $data->close();

        }
    }
} 