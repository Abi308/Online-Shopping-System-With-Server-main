<?php

$servername = "abin.mysql.database.azure.com";
$username = "abinaya";
$password = "password@123";
$db = "aprcotstore";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
