<?php

    include 'connect.php';
    include 'header.php';
    
    if(isset($_SESSION['user'])){

        $email = trim($_SESSION['user']);
        $sql8 = "SELECT * FROM customer where email='$email';";

        $result8 = mysqli_query($conn,$sql8);

        if($result8->num_rows == 1){
            $row = $result8->fetch_assoc();
            $customer_id = $row['customer_id'];
            $fname = $row['first_name'];
            $lname = $row['last_name'];
            ?>
            
            <h1 class="historyh1"><?php echo "Hi, ".$fname." ".$lname." Hope you are fine."?></h1>
            <p class="historyp">These are the Customize Packages made by you</p>
        </div>
        <div class="historyDiv">

        <?php
            
        $sql = "SELECT customize_package.c_package_type,customize_package.c_package_systemsize,
        customize_package.c_package_grade,make_customize_package.c_package_price,
        make_customize_package.c_package_description FROM customize_package 
        LEFT OUTER JOIN make_customize_package ON customize_package.c_package_id=
        make_customize_package.c_package_id WHERE make_customize_package.customer_id='$customer_id';";

        $result = mysqli_query($conn,$sql);
        if($result->num_rows>0){
            
            while($row = $result->fetch_assoc()){

                echo "<div class='historysmallDiv'>";
                    echo "<h2>{$row['c_package_type']}</h2>";
                    echo "<h1>{$row['c_package_systemsize']}</h1>";
                    echo "<div class='save'>{$row['c_package_grade']} Grade products</div>";
                    echo "<ul>";
                    $description = explode(',', $row['c_package_description']);
                    foreach ($description as $description) {
                        echo "<li>{$description}</li>";
                    }
                    echo "</ul>";
                    echo "<div class='price'>Rs {$row['c_package_price']}</div>";
                    echo "</div>";


            }//while

        }//if
        else{
            echo '<div style="color:red">No Packages Found</div>';
        }
    }//if
}//if

?>
</div>
 