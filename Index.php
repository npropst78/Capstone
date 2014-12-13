<?php
/**
 * User: Nick
 * Date: 11/14/2014
 * Time: 3:05 AM
 */

require_once "lib/GetPosts.php";
require_once "lib/createdb.php";

$createDB = new CreateDB();
$create = $createDB->DatabaseCreate();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<link rel="stylesheet" href="assets/css/project.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/resetCss.css" type="text/css"/>

<body>
<div id="login">

<span>

    <head><a href="Login.php">Click here to Login</a></head>

</span>

</div>

<div id="head">

    <h2 class="hide">Welcome to my Site.</h2>

</div>

<section class="spacer"></section>

<div id="wrap">

    <div id="posts">


        <!-- Placeholder for the posts inserted by the php yet to be added. -->
        <?php

            $post = new GetPosts();

            echo $post->DefaultPost();

        ?>

    </div>

    <div id="foot">
        <p>Developed by Nick Propst - Rasmussen College - <a href="register.php">Click here to register.</a></p>
    </div>

</div>

<script src="assets/scripts/JQuery/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="assets/scripts/js/hidden.js" type="text/javascript"></script>

</body>
</html>