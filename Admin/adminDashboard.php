<?php 
    include 'connect.php';
    include 'Login_check.php';
 ?>
<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="adminDashStyle.css">
    </head> 
    <body>
    <!-- <?php
    
    if(isset($_SESSION['login'])){
        echo "<div id='add'>".$_SESSION['login']."</div>";
        unset($_SESSION['login']);
    }
    
    ?> -->
    
   
<div class="maindiv">
    

        <h1 class="db">DASHBOARD</h1>

<div class="innerdiv">
    

    <div class="div1">
        <div class="products">
            <div class="pinner">
                <h1>Manage Products</h1>
                <p><b>ADD, UPDATE, REMOVE</b><br>  products' specifications</p>
            </div>
            <hr>
            <a href="manageproduct.php">manage</a>
        </div>
        
        <div class="lb_div">

            <div class="a2">

                <div class="imgdiv">
                    <img src="repair-tool.png" alt="">
                    <p>Maintenance <br> Services</p>
                </div>
                <?php
                $sql3 = "SELECT COUNT(maintenanceservice.service_id) as 'serviceCount' FROM maintenanceservice;";
                $result3 = mysqli_query($conn,$sql3);
                $row3 = $result3->fetch_assoc();
                $countrr = $row3['serviceCount'];
                ?>

                <hr class="hr2">

                <h1><?php echo $countrr; ?></h1>

            </div>

            <div class="a2">

                <div class="imgdiv">
                    <img src="multiple-users-silhouette.png" alt="">
                    <p>Registered <br> Users</p>
                    
                </div>
                <hr>
                <?php
                $sql2 = "SELECT COUNT(customer.customer_id) as 'registerCount' FROM customer;";
                $result2 = mysqli_query($conn,$sql2);
                $row2 = $result2->fetch_assoc();
                $countr = $row2['registerCount'];
                ?>

                <h1><?php echo $countr?></h1>

            </div>

        </div>

    </div>


    <div class="div2">

        <div class="greet">
        <a href="logout.php">logout</a>
        <hr>
            <p>Good Afternoon!</p>
            <h1>Hi <br>Admin</h1><br><br>
            
        </div>

        <div class="rpack">
            <div class="pinner">
                
                <h1>Manage Packages</h1>
                <p><b>ADD, UPDATE, REMOVE</b><br>  packages' specifications</p>
            </div>
            <hr>
            <a href="manageRp.php">manage</a>

            
        </div>
    </div>

</div>

    
</div>
        <script src="adash.js" async defer></script>
</html>