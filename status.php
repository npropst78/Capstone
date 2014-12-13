<?php
/**
 * User: Nick
 * Date: 12/7/2014
 * Time: 5:31 AM
 */


require_once "lib/Posts.php";

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Success or Failure!</title>
</head>

<link rel="stylesheet" href="assets/css/project.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/resetCss.css" type="text/css"/>

<body>

    <div id="head">

        <h2>Edit Posts.</h2>

    </div>

    <section class="spacer"></section>

    <div id="wrap">


        <div id="posts">

            <?php

            $insert = new Posts();

            $insert->InsertEdit();

            ?>

        </div>

    </div>



</body>
</html>