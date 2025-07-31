<?php
    include 'connect.php';
    include 'Login_check.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $sql = "DELETE FROM recommended_packages WHERE rp_id='$id'";
    if ($conn->query($sql) === TRUE) {
        
        $_SESSION['add'] = "Product with id ".$id."is Deleted Successfully .";
            header("Location:".SITEURL."admin/manageRp.php");
        
        } else {
            $_SESSION['error'] = "Product with id ".$id." is not Deleted Successfully .";
            header("Location:".SITEURL."admin/manageRp.php");
        }
?>