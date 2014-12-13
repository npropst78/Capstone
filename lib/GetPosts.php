<?php
/**
 * User: Nick
 * Date: 11/14/2014
 * Time: 4:50 AM
 */

require_once "connect.php";


class GetPosts {

    // Gets the posts from the database and displays them in index
    function DefaultPost(){

        //Sets the Default Timezone for the SQL Server
        date_default_timezone_set("America/Chicago");

        $today = date("Y-m-d");


        //Default Date to grab a post from if one does not Exist.
        $defaultPost = date("2014-12-1");


        //new connection to the sql server
        $connect = new connect();
        $data = $connect->con();


        //Queries the server to grab information
        $query = $data->query("SELECT * FROM capstone_posts.posts WHERE DATE = '$today'");
        @$posts = $query->fetch_assoc();


        //Gets the first post and the newest Post, grabs the default if no new Dated Post is Active
        if ($posts['Date'] != $today){

            //Queries the server to grab information
            $query = $data->query("SELECT * FROM capstone_posts.posts WHERE DATE = '$defaultPost'");
            @$posts = $query->fetch_assoc();

            echo("<section class='hide'> <p class='title'><a href='Article.php?id=" . $posts['id'] . "'>" . $posts['Title'] . "</a></p>");
            echo("<p class='content'>" . $posts['Content'] . "</p>");
            echo("<p class='info'>" . $posts['Author'] . " - " . $posts['Date']. "</p> </section>");


        } else {

            echo("<section class='hide'> <p class='title'><a href='Article.php?id=" . $posts['id'] . "'>" . $posts['Title'] . "</a></p>");
            echo("<p class='content'>" . $posts['Content'] . "</p>");
            echo("<p class='info'>" . $posts['Author'] . " - " . $posts['Date']. "</p> </section>");
        }


        //Grabs the last three posts newest first
        $earlierPosts = $data->query("SELECT * FROM capstone_posts.posts WHERE Date != '$today' AND Date !='$defaultPost' ORDER BY id DESC LIMIT 3");


        //Loops through and outputs the posts to the page.

            while($row = $earlierPosts->fetch_assoc()){

                echo "<section class='hide'> <p class='title'><a href='Article.php?id=" . $row['id'] . "'>" . $row['Title'] . "</a></p>";
                echo "<p class='content'>" . $row['Content'] . "</p>";
                echo "<p class='info'>" . $row['Author'] . " - " . $row['Date'] ."</p> </section>";
            }

        $data->close();

    }


    //Gets the Posts to be edited
    function DatedPosts() {

        //Sets the Default Timezone for the SQL Server
        date_default_timezone_set("America/Chicago");

        echo "Anything?";


        //new connection to the sql server
        $connect = new connect();
        $data = $connect->con();

        $query = $data->query("SELECT id, Title, Content, Date FROM capstone_posts.posts");

        while($row = $query->fetch_assoc()) {

                echo "<p class='content' style='padding-top: 10px;'><input type='radio' name='clicked' value='" . $row['id'] . "'/>" . $row['Title'] . " - " . $row['Date'] . "</p>";

        }
        $data->close();
    }


    function SinglePost() {

        @$id = $_GET['id'];

        $connect = new connect();
        $data = $connect->con();

        $query = $data->query("SELECT * FROM capstone_posts.posts WHERE id = '$id'");

        @$posts = $query->fetch_assoc();

        if (!empty($id)) {

            echo("<section> <p class='title'>" . $posts['Title'] . "</a></p>");
            echo("<p class='content'>" . $posts['Content'] . "</p>");
            echo("<p class='info'>" . $posts['Author'] . " - " . $posts['Date']. "</p> </section>");

        }else {

            echo "<a href='Index.php'>Please click here to go home something went wrong........</a>";

        }



    }



} 