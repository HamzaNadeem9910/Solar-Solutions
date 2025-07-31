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
        Manage Products
        <button class="logoutb" ><a href="adminDashboard.php"> Home </a></button>
    </div>
    <form id="fromSearch" action="searchproducts.php" method="post">
        <input type="text" id="search" name="search" placeholder="Search Products Here">
        <input type="submit" name="sSubmit" id="sSubmit">
    </form>
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
        
    ?>
    <br><br><br>


<button class="bt-primary"> <a href="addproduct.php">Add product</a></button><br><br>

<div class="table-div">
<table class="full-table">
        <tr>

            <th>Product Image</th>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Grade</th>
            <th>Product Price</th>
            <th>Product Model</th>
            <th>Product Brand</th>
            <th>Status</th>
            <th>Actions</th>

        </tr>

        <?php 
        $sql = "SELECT * from products LEFT OUTER JOIN productmodel on(products.p_id = productmodel.p_id) where products.p_id=productmodel.p_id";

        $result = mysqli_query($conn,$sql);
        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){ 
        
        
        ?>
        <tr>
            <td><img class="img1" src=<?php echo "../pictures/$row[p_image]"; ?> alt="please wait"></td>
            <td><?php echo"$row[p_id]";?></td>
            <td><?php echo"$row[p_name]";?></td>
            <td><?php echo"$row[p_grade]";?></td>
            <td><?php echo"$row[p_price]";?></td>
            <td><?php echo"$row[p_model]";?></td>
            <td><?php echo"$row[p_brand]";?></td>
            <td><?php echo"$row[status]";?></td>
            <td><button class="bt-secondary2"><a href="<?php echo SITEURL;?>admin/updateproduct.php?id=<?php echo"$row[p_id]"; ?> &m= <?php echo"$row[p_model]";?> &b= <?php echo"$row[p_brand]";?> &grade= <?php echo"$row[p_grade]";?> &price= <?php echo"$row[p_price]";?> &status= <?php echo"$row[status]";?> &img= <?php echo"$row[p_image]";?>">Update Product</a></button>
            <button type="submit" class="bt-secondary" ><a onclick="return confirmDelete()" href="<?php echo SITEURL;?>admin/deleteproduct.php?id=<?php echo"$row[p_id]"; ?> &m= <?php echo"$row[p_model]";?> ">Delete Product</a></button></td>
        </tr>
          

<?php

    }//while
}//if
else{

    echo "Record not Found";
   
}

?>
  </table>
  </div>
</body>
<script src="script.js">

</script>