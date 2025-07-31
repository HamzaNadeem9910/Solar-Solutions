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
<button class="logoutb" ><a href="adminDashboard.php"> Home </a></button>
    
<div class="div1" >
        ADD Recommended Package
</div>

<form id="addForm" action="" method="POST">
    <fieldset>
        <legend>Enter Details of new Rcommended Package</legend>

        <label for="type">Package Type (e.g., REGULAR):</label><br>
        <input type="text" id="type" name="type" required><br><br>

        <label for="size">Size (e.g., 10kW):</label><br>
        <input type="text" id="size" name="size" required><br><br>

        <label for="description">Description: (e.g., Standard Home)</label><br>
        <input type="text" id="description" name="description" required><br><br>

        <label for="savings">Savings (e.g., Save up to Rs.650,000/year):</label><br>
        <textarea id="savings" name="savings" required></textarea><br><br>
    
        <label for="features">Features (separate by commas):</label><br>
        <textarea id="features" name="features" required></textarea><br><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" required><br><br>

        <input type="submit" name="submit" id="submit"  onclick="return confirmAdd()" value="Add Package">
        
    </fieldset>

    </form>
    </body>
<script src="script.js">

</script>

<?php

if(isset($_POST['submit'])){

    $type = $_POST['type'];
    $size = $_POST['size'];
    $description = $_POST['description'];
    $savings = $_POST['savings'];
    $features = $_POST['features'];
    $price = $_POST['price'];

    if(isset($_SESSION['userAdmin'])){
        $email = $_SESSION['userAdmin'];
        echo $email;
        $sql = "select admin_id from admin where email ='$email'";
        $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);
        if($count == 1){
            while($row = $res->fetch_assoc()){
                $adminId = $row['admin_id'];
                echo $adminId;
            }
        }
        
    }

    $sql = "INSERT INTO recommended_packages(type, size, description, savings, features, price,admin_id)
        VALUES ('$type', '$size', '$description', '$savings', '$features', '$price','$adminId');";

    if ($conn->query($sql) === TRUE) {
            $_SESSION['add'] = "New package added Successfully .";
            header("Location:".SITEURL."admin/manageRp.php");
        
        } else {
            $_SESSION['error'] = "Failed to add new package .";
            header("Location:".SITEURL."admin/manageRp.php");
        }
    
    }



?>

    