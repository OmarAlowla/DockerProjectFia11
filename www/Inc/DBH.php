<?php

$serverName = "db";
$DBUName = "root";
$DBPass = "rootpassword";
$DBName = "td";


$conn = mysqli_connect($serverName, $DBUName, $DBPass, $DBName);
if (!$conn) {
    die("ERROR: " . mysqli_connect_error());
}

