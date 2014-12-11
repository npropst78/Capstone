<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 11/24/2014
 * Time: 6:31 PM
 */
require_once "lib/Validate.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validation</title>
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

            $validate = new Validate();

            echo $validate->validation();

        ?>
    </div>

    <div id="foot">
        <p>Developed by Nick Propst - Rasmussen College - <a href="register.php">Click here to register.</a></p>
    </div>

</div>

</body>
</html>