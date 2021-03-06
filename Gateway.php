<?php
/**
 * User: Nick
 * Date: 11/26/2014
 * Time: 5:05 AM
 */

require_once "lib/GetPosts.php";
require_once "lib/Posts.php";

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

<div id="login">
    <span>

        <head><a href="Index.php">Click here to go Home.</a></head>

    </span>
</div>

<div id="head">

    <h2>Your Gateway to Success!</h2>

</div>

<section class="spacer"></section>

<div id="wrap">



    <div id="posts">

        <p class="title">Add a new Post here!</p>

        <form method="post" action="AddPost.php" name="add" onsubmit="return check()">

            <table>
                <tr><td style="padding-top: 10px;">Title.</td></tr>
                <tr><td><input name="title" size="20" type="text"/></td></tr>
                <tr><td>Author.</td></tr>
                <tr><td><input name="author" size="20" type="text"/></td></tr>
                <tr><td>Content.</td></tr>
                <tr><td><textarea name="content" rows="15" cols="75"></textarea></td></tr>
                <tr><td>Date.</td></tr>
                <tr><td><input type="date" name="date" /></td></tr>
                <tr><td><input type="submit" name="submitAdd"></td></tr>
            </table>

        </form>


    </div>


    <div id="posts">
        <p class="title">Please select a post to edit.</p>

        <form action="EditPost.php" method="post" name="insert" onsubmit="return insert();">

            <?php
                $getPost = new GetPosts();

                echo $getPost->DatedPosts();
            ?>

            <p style="padding-top: 10px; margin-left: 10px;"><input type="submit" name="submit" value="Submit"/></p>

        </form>

    </div>

    <div id="posts">
        <p class="title">Please select a post to delete it.</p>

        <form method="post" action="delete.php" name="delete">

            <?php

                echo $getPost->DatedPosts();

            ?>

        <p style="padding-top: 10px; margin-left: 10px;"><input type="submit" name="submitDel" value="Submit"/></p>

        </form>

    </div>

    <div id="foot">
        <p>Developed by Nick Propst - Rasmussen College - <a href="register.php">Click here to register.</a></p>
    </div>

</div>

<script type="text/javascript" src="assets/scripts/js/precheck.js"></script>
</body>
</html>