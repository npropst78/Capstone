<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 11/24/2014
 * Time: 4:27 PM
 */

require_once "connect.php";

class Validate {

    function validation() {

        $username = strtolower($_POST['username']);
        $password = $_POST['password'];

        $connect = new connect();
        $data = $connect->con();

        $query = $data->query("SELECT username, password FROM user_info WHERE username = '$username'");

        $check = $query->fetch_assoc();

        //check to see if the sent data is not empty.
        if (!empty($username) && !empty($password)){

            //Checks is the username from the query isn't empty
            if (empty($check['username'])){

                echo "<p>Sorry the username doesn't exist please click <a href='./Login.php'>here</a> and re-enter your username and password.</p>";

                //Checks if the passwords are the same
            } elseif ($check['username'] == $username   && $check['password'] == $password){

                header("Location: ./Gateway.php");

            }else {

                echo "<p>Password or username is incorrect. <a href='./Login.php'>Please click here to go back to the Login page.</a></p>";

            }

        } else {

            echo "<p><a href='./Login.php'>Username or Password incorrect please re-enter them to login.</a></p>";

        }
        $data->close();
    }
}