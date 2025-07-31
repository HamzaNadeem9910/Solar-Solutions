<?php
include 'connect.php';

if(isset($_POST['brand'])){
    $brand = $_POST['brand'];
    $name = $_POST['name'];
    $sql = "SELECT * FROM products AS p 
            LEFT OUTER JOIN productmodel AS pm ON p.p_id = pm.p_id 
            WHERE p.p_brand = '$brand' AND p.p_name = '$name' AND pm.status='available'";
    $result = mysqli_query($conn, $sql);
    $models = array();

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $models[] = $row['p_model'];
        } 
    }
    echo json_encode($models);
}
?>
