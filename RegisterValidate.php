<?php
/**
 * User: Nick
 * Date: 11/25/2014
 * Time: 1:41 PM
 */

require_once "lib/Register.php";
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>

<link rel="stylesheet" href="assets/css/project.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/resetCss.css" type="text/css"/>

<body>

<div id="head">

    <h2>Login Information</h2>

</div>

<section class="spacer"></section>

<div id="wrap">


    <div id="posts" style="text-align: center;">
        <?php

        $reg = new Register();

        echo $reg->NewUser();

        ?>
    </div>
</div>
</body>
</html>