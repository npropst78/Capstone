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

<link rel="stylesheet" href="assets/css/backend.css"/>
<link rel="stylesheet" href="assets/css/resetCss.css"/>

<body>

<form action="EditPost.php">
    <?php
        $selections = new Posts();

        echo $selections->EditPosts();
    ?>

</form>


</body>
</html>