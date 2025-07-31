<?php

    if(!isset($_SESSION['userAdmin'])){

        $_SESSION['Authorization'] = "Please <b>Login First<b> To Acess Admin Panel .";
        header('Location:'.SITEURL.'admin/adminlogin.php');
    }
?>