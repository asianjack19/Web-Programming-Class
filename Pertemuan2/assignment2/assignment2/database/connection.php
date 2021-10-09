<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "assignmentdosen2";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname))
{
    die("connection failed");
}
 
?>