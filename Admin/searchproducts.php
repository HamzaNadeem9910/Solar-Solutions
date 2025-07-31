<?php 
    include 'connect.php';
    include 'Login_check.php';

    if(isset($_POST['sSubmit'])){
        if(!empty($_POST['search'])){

            $search = mysqli_real_escape_string($conn,$_POST['search']);
        }else{
            $search = 'Type any Input to get Result.';
        }
    }
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
    <div class="div2">
        <?php echo "Search Result For ' ".$search." '<br><br>"?>
    </div>

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
        $sql = "SELECT * from products LEFT OUTER JOIN productmodel on(products.p_id = productmodel.p_id) where p_name like '%$search%' or p_brand like '%$search%' or p_model like '%$search%' or p_price like '%$search%' or p_grade like '%$search%' or status like '%$search%'";

        $result = mysqli_query($conn,$sql);
        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
        
        
        ?>
        <tr>
            <td><img class="img1" src=<?php echo "../pictures/$row[p_image]"; ?> alt=""></td>
            <td><?php echo"$row[p_id]";?></td>
            <td><?php echo"$row[p_name]";?></td>
            <td><?php echo"$row[p_grade]";?></td>
            <td><?php echo"$row[p_price]";?></td>
            <td><?php echo"$row[p_model]";?></td>
            <td><?php echo"$row[p_brand]";?></td>
            <td><?php echo"$row[status]";?></td>
            <td><button class="bt-secondary2"><a href="<?php echo SITEURL;?>admin/updateproduct.php?id=<?php echo"$row[p_id]"; ?> &m= <?php echo"$row[p_model]";?> &b= <?php echo"$row[p_brand]";?> &grade= <?php echo"$row[p_grade]";?> &price= <?php echo"$row[p_price]";?> &status= <?php echo"$row[status]";?>">Update Product</a></button>
            <button type="submit" class="bt-secondary" ><a href="<?php echo SITEURL;?>admin/deleteproduct.php?id=<?php echo"$row[p_id]"; ?> &m= <?php echo"$row[p_model]";?>">Delete Product</a></button></td>
        </tr>

<?php

    }//while
}//if
else{

    echo "<div id='error'>Opppss!! No Result Found<br>Try Again with correct input.</div>";
   
}

?>
</body>
<script src="script.js">

</script>