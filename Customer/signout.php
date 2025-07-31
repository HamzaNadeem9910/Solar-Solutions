<?php
include 'connect.php';
session_destroy();
header('Location:'.SITEURL.'Customer/home.php');
?>