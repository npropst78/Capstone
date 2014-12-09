<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 11/14/2014
 * Time: 4:41 AM
 */

class connect {

    function con(){

        @$mysqli = new mysqli("localhost","root","","Capstone_posts");

        if ($mysqli->connect_errno){
            echo "<p>Failed to connect: " . $mysqli->connect_errno . "</p>";
            echo "<p>Error: " . $mysqli->connect_error . "</p>";
        }

        return $mysqli;
    }

} 