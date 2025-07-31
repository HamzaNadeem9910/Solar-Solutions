<?php

//start session
session_start();


define('SITEURL','http://Your_Pc_IPv4_Address:8080/');

$serverName ="localhost";
$username ="root";
$pass ="";
$database = ("solar-solutions");

$conn = mysqli_connect($serverName,$username,$pass,$database) or die("Cannot connect
to database".mysqli_connect_error());


?>
