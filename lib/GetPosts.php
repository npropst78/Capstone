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

        date_default_timezone_set("America/Chicago");

        $today = date("Y-m-d");

        $defaultPost = "2014-11-14";

        $connect = new connect();

        $data = $connect->con();

        $query = $data->query("SELECT * FROM posts WHERE DATE = '$today'");

        @$posts = $query->fetch_assoc();

        if ($posts['Date'] != $today){

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

        $earlierPosts = $data->query("SELECT * FROM posts WHERE Date != '$today' ORDER BY id DESC LIMIT 3");

        while($row = $earlierPosts->fetch_assoc()){

            echo "<section> <p class='title'>" . $row['Title'] . "</p>";
            echo "<p class='content'>" . $row['Content'] . "</p>";
            echo "<p class='info'>" . $row['Author'] . " - " . $row['Date'] ."</p> </section>";

        }




        /*foreach($row as $ePosts=>$val){

            echo "<section> <p class='title'>" . $row['Title'] . "</p>";
            echo "<p class='content'>" . $row['Content'] . "</p>";
            echo "<p class='info'>" . $row['Author'] . " - " . $row['Date'] ."</p> </section>";
        }*/


    }




} 