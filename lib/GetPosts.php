<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 11/14/2014
 * Time: 4:50 AM
 */
require_once "connect.php";


class GetPosts {

    function DefaultPost(){

        //Sets the Default Timezone for the SQL Server
        date_default_timezone_set("America/Chicago");

        $today = date("Y-m-d");

        //Default Date to grab a post from if one does not Exist.
        $defaultPost = "2014-11-14";

        //new connection to the sql server
        $connect = new connect();
        $data = $connect->con();

        //Queries the server to grab information
        $query = $data->query("SELECT * FROM posts WHERE DATE = '$today'");
        @$posts = $query->fetch_assoc();

        //Gets the first post and the newest Post, grabs the default if no new Dated Post is Active
        if ($posts['Date'] != $today){

            //Queries the server to grab information
            $query = $data->query("SELECT * FROM posts WHERE DATE = '$defaultPost'");
            @$posts = $query->fetch_assoc();

            echo("<section> <p class='title'>" . $posts['Title'] . "</p>");
            echo("<p class='content'>" . $posts['Content'] . "</p>");
            echo("<p class='info'>" . $posts['Author'] . " - " . $posts['Date']. "</p> </section>");

        } else {

            echo("<section> <p class='title'>" . $posts['Title'] . "</p>");
            echo("<p class='content'>" . $posts['Content'] . "</p>");
            echo("<p class='info'>" . $posts['Author'] . " - " . $posts['Date']. "</p> </section>");
        }

        //Grabs the last three posts newest first
        $earlierPosts = $data->query("SELECT * FROM posts WHERE Date != '$today' ORDER BY id DESC LIMIT 3");

        //Loops through and outputs the posts to the page.
        while($row = $earlierPosts->fetch_assoc()){

            echo "<section> <p class='title'>" . $row['Title'] . "</p>";
            echo "<p class='content'>" . $row['Content'] . "</p>";
            echo "<p class='info'>" . $row['Author'] . " - " . $row['Date'] ."</p> </section>";

        }

    }




} 