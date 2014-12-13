<?php
/**
 * User: Nick
 * Date: 11/14/2014
 * Time: 3:04 AM
 */

require_once "lib/Posts.php";

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Post</title>
</head>

<link rel="stylesheet" href="assets/css/project.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/resetCss.css" type="text/css"/>

<body>

<div id="head">

    <h2>Adding Post...</h2>

</div>

<section class="spacer"></section>

<div id="wrap">

    <div id="posts">


        <?php

        // Create form for new post and add the functionality that needs to be behind it.
        // Needs to add new page for the functions to be passed through, add post success or something.
        // Also need to add the link to here from the Gateway page.
        // Once that is done i can focus on styling the pages and making it look better and more presentable.


        $addedPost = new Posts();

        $addedPost->AddPost();

        ?>

    </div>

</div>



</body>
</html>