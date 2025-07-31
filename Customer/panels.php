<?php
include 'connect.php';
include 'signupCheck.php';

if(isset($_POST['garde'])){

    if(empty($_POST['type'])){

        $_SESSION['type'] = "Please Select the System Type to Make Customize Package .<br>";
        header('Location:'.SITEURL.'Customer/Grade.php');
    }else{
      $type =  $_POST['type']; 
    }

    if(empty($_POST['system-size'])){

        $_SESSION['size'] = "Please Select the System Size to Make Customize Package .<br>";
        header('Location:'.SITEURL.'Customer/Grade.php');
    }else{
      $size =  $_POST['system-size']; 
    }
    if(empty($_POST['grade'])){
        $_SESSION['grade'] = "Please Select the Grade Type to Make Customize Package .<br>";
        header('Location:'.SITEURL.'Customer/Grade.php');
    }else{
      $grade =  $_POST['grade']; 
    }
}
?>
<?php include('header.php'); ?>

<body class="cpbody">
    <div class="divproducttext">
        <legend class="l2">Select Solar Panel</legend>
    </div>

    <form action="batteries.php" method="POST">
        <input type="hidden" name="grade" value="<?php echo empty($grade) ? null : $grade; ?>">
        <input type="hidden" name="type" value="<?php echo empty($type) ? null : $type; ?>">
        <input type="hidden" name ="system-size" value="<?php echo trim($size); ?>" >
        
        <div class="pic-wrapper">
        <div class="containerpic" id="containerpic">
            <?php
            $sql = "SELECT * FROM products WHERE p_grade = '$grade' AND p_name = 'Panel'";
            $result = mysqli_query($conn, $sql);
            if($result->num_rows > 0){
                
                for($i = 1; $row = $result->fetch_assoc(); $i++){
                    $brand = $row['p_brand'];
                    $id = $row['p_id'];

                    $sqlm = "SELECT p_model FROM productmodel WHERE p_id ='$id' and status='available';";
                    $resultm = mysqli_query($conn, $sqlm);
                    if($resultm->num_rows > 0){
            ?>
            <div class="divpic">
                <input type="radio" name="panel-image" id="<?php echo "image".$i; ?>" value="<?php echo $brand; ?>" onclick="showModel('<?php echo $brand; ?>','Panel')">
                <label for="<?php echo "image".$i; ?>">
                    <img src="<?php echo "../pictures/$row[p_image]"; ?>" alt="Please wait">
                </label>
                <div class="divtext"><h3><b><?php echo "$row[p_brand] $row[p_name]"; ?></b></h3></div>
            </div>
                    
            <?php
                    }
                }
            } 
            ?>
        </div><br>

        <div class="divmodel" id="divmodel">
            <legend class="l1">
            <img id="exit-model" onclick="closemodeldiv()" src="exit.png" alt="">    
            Select Solar Panel Model</legend>
            <div id="model-container"></div>
            <input type="submit" name="panels" class="gradeBt" value="Now Select Battery">

        </div><br>

        <input type="submit" name="panels" class="gradeBt" value="SKIP-->">
        </div>
    </form>
</body>

<?php include('footer.php'); ?>

<script src="script.js"></script>
