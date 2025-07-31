<?php 
include 'connect.php';
include 'Login_check.php';

if (isset($_GET['id']) && isset($_GET['m']) && isset($_GET['b'])){
    $id = trim($_GET['id']);
    $model = trim($_GET['m']);
    $brand =  trim($_GET['b']);
    $grade = trim($_GET['grade']); 
    $price = trim($_GET['price']);
    $img = trim($_GET['img']);
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
<body id="bodyAdd">
    <button class="logoutb" ><a href="adminDashboard.php"> Home </a></button>
<div class="div1" >
        Update Product 
</div>

<form id="addForm" action="" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>Enter Details to Update the Product</legend>

        <label for="pmodel"><?php echo "Update Product of Brand : ".$brand." with Model : ".$model?></label>
       <br><br>

        <label for="pgarde">Product Grade : </label>
        <select name="pgrade" id="pgrade">
            <option value="<?php echo $grade ?>">Select Product Grade</option>
            <option value="A">Grade A</option>
            <option value="B">Grade B</option>
        </select>
        <br><br>

        <label for="pprice">Product Price : </label>
        <input type="text" name="pprice" id="pprice" placeholder="Enter Product Price"  value="<?php echo $price?>"><br><br>

        <label for="status">Product Status : </label><br><br>
        <input type="radio" name="status" id="status" value="available">Available 
        <input type="radio" name="status" id="status" value="notavailable">Not Available 
        <br><br>


        <label for="pimage">Product Image : </label>
        <input type="file" name="pimage" id="Image" placeholder="Select Product Image"><br><br>

        <input type="submit" name="submit" onclick="return confirmUpdate()" id="submit" value="Update Product">
        
    </fieldset>

    </form>
    <?php
    if(isset($_POST['submit'])){

        
        $grade = $_POST['pgrade'];
        $price = $_POST['pprice'];
        $image = empty($_FILES["pimage"]["name"])?$img:$_FILES["pimage"]["name"];
        $status = empty($_POST['status'])?$_GET['status']:$_POST['status'];

        $sql = "Update products set p_grade = '$grade',p_image = '$image' where p_id = '$id'";
        $result = mysqli_query($conn,$sql);
       
        if($result == true){
           

            $sql2 = "Update productmodel set p_price = '$price',status='$status' where p_id = '$id' and p_model='$model' ";
            $result2 = mysqli_query($conn,$sql2);
            if($result2 == true){
                $_SESSION['add'] = "Product with id ".$id." and model ".$model." is updated Successfully .";
                header("Location:".SITEURL."admin/manageproduct.php");
            }else{
                $_SESSION['error'] = "Product with id ".$id." and model ".$model." is Updated not  Successfully .";
                header("Location:".SITEURL."admin/manageproduct.php");
            }
        }
        

    }
    ?>
</body>
<script src="script.js">

</script>
    