<?php

function sanitizeString($var)
{
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $connection->real_escape_string($var);
}

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='day of car';
$connection = new mysqli($dbhost, $dbuser, $dbpass,$dbname );
if ($connection->connect_error) die($connection->connect_error);