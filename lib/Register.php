<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 11/25/2014
 * Time: 1:29 PM
 */

require_once "connect.php";

class Register {


    function NewUser() {

        @$username = strtolower($_POST['regUsername']);
        @$password = $_POST['regPassword'];

        $con = new connect();
        $data = $con->con();

        $query = $data->query("SELECT username, password FROM capstone_posts.user_info WHERE username = '$username'");

        $check = $query->fetch_assoc();

        //checks if the username and password are not empty
        if (!empty($username) && !empty($password)) {
            if ($username === $check['username']){
                echo "<p>Sorry that username is already in use, please choose another.</p>";
                echo "<p><a href='register.php'>Please click here to go back and register.</a></p>";
            } else {
                $data->query("INSERT INTO capstone_posts.user_info (username, password) VALUES ('$username', '$password')");
                echo "<p><a href='./Login.php'>Successful! Click here to return to the login screen</a></p>";
            }
        }

        $data->close();
    }



} 