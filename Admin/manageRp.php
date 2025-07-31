<?php 
    include 'connect.php';
    include 'Login_check.php';
 ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
<body id="body1">
    
    <div class="div1">
        Manage Recommended <br>
        Packages
        <button class="logoutb" ><a href="adminDashboard.php"> Home </a></button>

    </div>
    
    <br>

    <?php
        if(isset($_SESSION['error'])){
            echo "<div id='error'>".$_SESSION['error']."</div>";
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['add'])){
            echo "<div id='add'>".$_SESSION['add']."</div>";
            unset($_SESSION['add']);
        }
        if(isset($_SESSION['login'])){
            echo "<div id='add'>".$_SESSION['login']."</div>";
            unset($_SESSION['login']);
        }
    ?>
    <br><br><br>


<button class="bt-primary"> <a href="addRp.php">Add Package</a></button><br><br>

<table class="full-table">
        <tr>

            <th>Id</th>
            <th>Type</th>
            <th>Size</th>
            <th style="width: 200px;">Description</th>
            <th style="width: 200px;">Savings</th>
            <th style="width: 200px;">Features</th>
            <th>Price</th>
            <th>Actions</th>

        </tr>

        <?php 
        $sql = "SELECT * FROM recommended_packages";

        $result = mysqli_query($conn,$sql);
        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){ 
        
        
        ?>
        <tr>
           
            <td><?php echo"$row[rp_id]";?></td>
            <td><?php echo"$row[TYPE]";?></td>
            <td><?php echo"$row[size]";?></td>
            <td><?php echo"$row[description]";?></td>
            <td><?php echo"$row[savings]";?></td>
            <td><?php echo"$row[features]";?></td>
            <td><?php echo"$row[price]";?></td>
            <td><button class="bt-secondary2"><a href="<?php echo SITEURL;?>admin/updateRp.php?id=<?php echo"$row[rp_id]"; ?> &type=<?php echo"$row[TYPE]"; ?> &size=<?php echo"$row[size]"; ?> &description=<?php echo"$row[description]"; ?> &savings=<?php echo"$row[savings]"; ?> &features=<?php echo"$row[features]"; ?> &price=<?php echo"$row[price]"; ?>">Update Package</a></button>
            <button type="submit" class="bt-secondary" ><a onclick="return confirmDelete()" href="<?php echo SITEURL;?>admin/deleteRp.php?id=<?php echo"$row[rp_id]"; ?>">Delete Package</a></button></td>
        </tr>

<?php

    }//while
}//if
else{

    echo "Record not Found";
   
}

?>
</body>
<script src="script.js">

</script>