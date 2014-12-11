<?php require_once "lib/GetPosts.php"; ?>

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

    <h2>Welcome to my Site.</h2>

</div>

<div id="wrap">
    <section class="spacer"></section>

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



</body>
</html>