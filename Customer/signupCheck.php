<?php

    if(!isset($_SESSION['user'])){

        $_SESSION['Authorization'] = "Please <b>Sign up First</b> To Acess Customize Package .";
        header('Location:'.SITEURL.'Customer/customerRegistration.php');
    }
?>