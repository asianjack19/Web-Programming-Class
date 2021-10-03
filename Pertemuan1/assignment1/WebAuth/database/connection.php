<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "dosen1";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname))
{
    die("connection failed");
}
 
?>