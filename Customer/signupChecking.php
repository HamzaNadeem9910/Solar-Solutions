<?php
    include 'connect.php';
    if(isset($_SESSION['user'])){
        header('Location:'.SITEURL.'Customer/Grade.php');
    }else{
        header('Location:'.SITEURL.'Customer/customerRegistration.php');
    }

?>