<?php

//start session
session_start();

define('SITEURL', 'http://192.168.56.1:8080/DBSFE/');

$serverName = "localhost";
$username = "root";
$pass = "";
$database = "solar-solutions";

$conn = mysqli_connect($serverName, $username, $pass, $database) or die("Cannot connect to database".mysqli_connect_error());

// Comment out or remove the echo statement
// echo "Connected to database Sucessfully";

?>
