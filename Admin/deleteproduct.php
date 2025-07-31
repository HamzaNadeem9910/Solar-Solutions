<?php
include 'connect.php';
include 'Login_check.php';

if (isset($_GET['id']) && isset($_GET['m'])) {
    $id = trim($_GET['id']);
    $model = trim($_GET['m']);

    $sql_check_reference = "SELECT p_id,p_model FROM customize_package_contains WHERE p_id='$id' AND p_model='$model';";
    $result_reference = mysqli_query($conn,$sql_check_reference);
    if($result_reference->num_rows == 0){
    // Delete the specific product model
    $sql = "DELETE FROM productmodel WHERE p_id = '$id' AND p_model = '$model'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Check if there are no more models for the product
        $check_sql = "SELECT COUNT(*) AS model_count FROM productmodel WHERE p_id = '$id'";
        $check_result = mysqli_query($conn, $check_sql);
        $row = mysqli_fetch_assoc($check_result);
        
        if ($row['model_count'] == 0) {
            // If no more models, delete the product
            $delete_product_sql = "DELETE FROM products WHERE p_id = '$id'";
            $delete_product_result = mysqli_query($conn, $delete_product_sql);
            
            if ($delete_product_result) {
                $_SESSION['add'] = "Product with ID $id and model $model has been deleted successfully.";
            } else {
                $_SESSION['error'] = "Failed to delete product with ID $id: " . mysqli_error($conn);
            }
        } else {
            $_SESSION['add'] = "Product model $model for product with ID $id has been deleted successfully.";
        }
    } else {
        $_SESSION['error'] = "Failed to delete product model $model for product with ID $id: " . mysqli_error($conn);
    }
    
    }else{
        $_SESSION['error'] = "Failed to delete product model $model for product with ID $id Because its referred into customize package table. :" . mysqli_error($conn);
    }

    header("Location: " . SITEURL . "admin/manageproduct.php");
    exit();
} else {
    $_SESSION['error'] = "Invalid request. Product ID and model are required.";
    header("Location: " . SITEURL . "admin/manageproduct.php");
    exit();
}
?>
