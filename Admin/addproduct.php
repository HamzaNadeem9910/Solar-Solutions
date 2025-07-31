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
<body id="bodyAdd">
    
<div class="div1" >
        ADD Product
        <button class="logoutb" ><a href="adminDashboard.php"> Home </a></button>

</div>

<form id="addForm" action="" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>Enter Details of the Product</legend>

        <label for="pname">Product Name : </label>
        <select name="pname" id="pname" required="">
            <option value="Panel">Panel</option>
            <option value="Battery">Battery</option>
            <option value="Inverter">Inverter</option>
        </select>
        <br><br>

        <label for="modelnum">Select number of Models : </label>
        
        <input type="number" name="modelnum" id="modelnum" oninput="addModelFields()" placeholder="Enter number of models" required min="1" max="5"><br><br>
        <div id="modelFields"></div>
        <div id="priceFields"></div>
        <div id="statusFields"></div>
        
        <br><br>

        <label for="pgarde">Product Grade : </label>
        <select name="pgrade" id="pgrade" required="">
            <option value="A">Grade A</option>
            <option value="B">Grade B</option>
        </select>
        <br><br>

        <label for="pbrand">Product Brand : </label>
        <input type="text" name="pbrand" id="pbrand" placeholder="Enter Product Brand" required=""><br><br>

        <label for="pimage">Product Image : </label>
        <input type="file" name="pimage" id="Image" placeholder="Select Product Image" required=""><br><br>

        <input type="submit" name="submit" id="submit"  value="Add Product">
        
    </fieldset>

    </form>
    </body>
<script src="script.js">

</script>

<?php

if(isset($_POST['submit'])){

    $fileName = $_FILES["pimage"]["name"];
    $pname = trim($_POST['pname']);
    $pbrand = trim($_POST['pbrand']);
    $pgrade = trim($_POST['pgrade']);
    $modelnum = $_POST['modelnum'];
    $adminId;
    $email = $_SESSION['userAdmin'];

    if(isset($_SESSION['userAdmin'])){
        $sql = "select admin_id from admin where email ='$email'";
        $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
        if($count == 1){
            while($row = $res->fetch_assoc()){
                $adminId = $row['admin_id'];
            }
        }
        
    }

    $sql1 = "insert into products(p_name,p_brand,p_grade,p_image,admin_id)
    values('$pname','$pbrand','$pgrade','$fileName','$adminId')";

    $result = mysqli_query($conn,$sql1);
    if($result == true){

        //insert models of products

        $last_id = $conn->insert_id;

        for($i=1;$i<=$_POST['modelnum'];++$i){

        $model = $_POST["pmodel$i"];
        $price = $_POST["pprice$i"];
        $status = $_POST["status$i"];

        $sql2 = "insert into productmodel(p_id,p_model,p_price,status) values('$last_id','$model','$price','$status')";
        $result2 = mysqli_query($conn,$sql2);

    }
    if($result2 == true){
       
        $_SESSION['add'] = "Product added successfully .";
        //redirect
        header("location:".SITEURL.'admin/manageproduct.php');
        exit();
        }else{
        $_SESSION['error'] = "Failed to add product !!!";
        //redirect
        header("location:".SITEURL.'admin/addproduct.php');

        }
    
    }else{
        echo"data not inseterd";

    }

}else{
    echo"Please Submit the form first .!!!!";
}

?>

    