<?php 
include 'connect.php';
include 'Login_check.php';

 if (isset($_GET['id'])){

    $id = trim($_GET['id']);
    $type1 = trim($_GET['type']);
    $size1 = trim($_GET['size']);
    $description1 = trim($_GET['description']);
    $savings1 = trim($_GET['savings']);
    $features1 = trim($_GET['features']);
    $price1 = trim($_GET['price']);

   
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
        Update Rcommended Package
</div>

<form id="addForm" action="" method="POST" >
    <fieldset>
        <legend>Enter Details to Update the Recommended package</legend>

        <label for="type">Package Type (e.g., REGULAR):</label><br>
        <input type="text" id="type" name="type" value="<?php echo $type1; ?>"><br><br>

        <label for="size">Size (e.g., 10kW):</label><br>
        <input type="text" id="size" name="size" value="<?php echo $size1; ?>"><br><br>

        <label for="description">Description: (e.g., Standard Home)</label><br>
        <input type="text" id="description" name="description" value="<?php echo $description1; ?>"><br><br>

        <label for="savings">Savings (e.g., Save up to Rs.650,000/year):</label><br>
        <input type="text" id="savings" name="savings" value="<?php echo $savings1; ?>"><br><br>
    
        <label for="features">Features (separate by commas):</label><br>
        <input type="text" id="features" name="features" value="<?php echo $features1; ?>"><br><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" value="<?php echo $price1; ?>"><br><br>
        <input type="submit" name="submit" onclick="return confirmUpdate()" id="submit" value="Update Package">
    </fieldset>

    </form>
     <?php
    if(isset($_POST['submit'])){

        $type = $_POST['type'];
        $size = $_POST['size'];
        $description = $_POST['description'];
        $savings = $_POST['savings'];
        $features = $_POST['features'];
        $price = $_POST['price'];

        $sql = "UPDATE recommended_packages SET TYPE='$type', size='$size', description='$description', savings='$savings', features='$features', price='$price' WHERE rp_id=$id";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION['add'] = "Package with id ".$id." is updated Successfully .";
            header("Location:".SITEURL."admin/manageRp.php");
        
        } else {
            $_SESSION['error'] = "Package with id ".$id." is not Updated  Successfully .";
            header("Location:".SITEURL."admin/manageRp.php");
        }

    }
    ?>
<script src="script.js">

</script>
    