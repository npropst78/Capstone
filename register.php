<?php
/**
 * User: Nick
 * Date: 11/25/2014
 * Time: 1:27 PM
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>

<link rel="stylesheet" href="assets/css/project.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/resetCss.css" type="text/css"/>

<body>

<div id="head">

    <h2>Please Register</h2>

</div>

<section class="spacer"></section>

<div id="wrap">

    <div id="LoginForm">

        <!-- Placeholder for the posts inserted by the php yet to be added. -->
        <section>
            <form action="RegisterValidate.php" name="register" method="post" onsubmit="return regValidate();">
                <table>
                    <tr>
                        <td>Username:</td><td><input type="text" size="20" name="regUsername"/></td>
                    </tr>
                    <tr>
                        <td>Password: </td><td><input type="password" size="20" name="regPassword"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Submit"/></td>
                    </tr>
                </table>
            </form>
            <p><a href="Login.php">Click here to go to the login page.</a></p>
        </section>
    </div>

    <div id="foot">
        <p>Developed by Nick Propst - Rasmussen College - <a href="register.php">Click here to register.</a></p>
    </div>

</div>

<script src="assets/scripts/js/validate.js" type="text/javascript"></script>

</body>
</html>