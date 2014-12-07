<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 11/14/2014
 * Time: 3:05 AM
 */

require_once "lib/Posts.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<link rel="stylesheet" href="assets/css/project.css"/>
<link rel="stylesheet" href="assets/css/resetCss.css"/>

<body>

<div id="head">

    <h2>Edit Posts.</h2>

</div>

<div id="wrap">

    <div id="posts">

        <form action="status.php" method="post">
            <?php
                $selections = new Posts();

                echo $selections->EditPosts();
            ?>

        </form>

    </div>


</body>
</html>