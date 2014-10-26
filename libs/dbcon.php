<?php


/**
 * User: Nick
 * Date: 10/26/2014
 * Time: 2:11 PM
 */

$connect = @mysql_connect("localhost", 'root', '');

if (!$connect){
    die("Connection not present: " . $mysql_error());
}

