<?php
include 'connect.php';
session_destroy();
header('Location:'.SITEURL.'admin/adminlogin.php')
?>