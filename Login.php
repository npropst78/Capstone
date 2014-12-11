<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 11/14/2014
 * Time: 3:05 AM
 */
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<link rel="stylesheet" href="assets/css/project.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/resetCss.css" type="text/css"/>

<body>

<div id="head">

    <h2>Please login</h2>

</div>

<section class="spacer"></section>

<div id="wrap">

    <div id="LoginForm">

        <!-- Placeholder for the posts inserted by the php yet to be added. -->
        <section>
        <form action="Validation.php" method="post">
            <table>
                <tr>
                    <td>Username:</td><td><input type="text" size="20" name="username"/></td>
                </tr>
                <tr>
                    <td>Password: </td><td><input type="password" size="20" name="password"/></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"/></td>
                </tr>
                <tr><td></td></tr>
            </table>
        </form>
            <p><a href="register.php">click here to register.</a></p>
        </section>
    </div>

    <div id="foot">
        <p>Developed by Nick Propst - Rasmussen College - <a href="register.php">Click here to register.</a></p>
    </div>

</div>





</body>
</html>