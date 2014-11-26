<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 11/26/2014
 * Time: 5:05 AM
 */
require_once "lib/GetPosts.php";
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gateway to Success!</title>
</head>

<link rel="stylesheet" href="assets/css/project.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/resetCss.css" type="text/css"/>

<body>

<div id="head">

    <h2>You Gateway to Success!</h2>

</div>

<div id="wrap">

    <div id="posts">
        <p class="title">Please select a post to edit.</p>

        <form action="EditPost.php" method="post">

            <?php
                $getPost = new GetPosts();

                echo $getPost->DatedPosts();
            ?>

            <p style="padding-top: 10px; margin-left: 10px;"><input type="submit" name="submit" value="Submit"/></p>

        </form>

    </div>

</div>



</body>
</html>