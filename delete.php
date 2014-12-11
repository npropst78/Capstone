<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 12/9/2014
 * Time: 4:48 PM
 */

require_once "lib/Posts.php";

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Deleted Post</title>
</head>

<link rel="stylesheet" href="assets/css/project.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/resetCss.css" type="text/css"/>

<body>

<div id="head">

    <h2>Deleted Post</h2>

</div>

<section class="spacer"></section>

<div id="wrap">

    <div id="posts">

        <!-- Placeholder for the posts inserted by the php yet to be added. -->
        <?php

        $post = new Posts();

        echo $post->DeletePost();

        ?>

    </div>

</div>



</body>
</html>