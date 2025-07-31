<?php
include 'connect.php';
include 'signupCheck.php';
if(isset($_POST['panels'])){

    $type = $_POST['type'];
    $size = $_POST['system-size'];
    $grade = $_POST['grade'];
    $pmodel = isset($_POST['Panelmodel']) ? $_POST['Panelmodel'] : null;
    $panel = isset($_POST['panel-image']) ? $_POST['panel-image'] : null;
    
}
?>
<?php include('header.php')  ?>
<body class="cpbody">

<div class="divproducttext">
            <legend class="l2">Select Battery</legend>
        
        </div>

    <form action="inverters.php" method="POST">

        <input type="hidden" name="grade"  value="<?php echo trim($grade); ?>" >
        <input type="hidden" name ="type" value="<?php echo trim($type); ?>" >
        <input type="hidden" name ="system-size" value="<?php echo trim($size); ?>" >
        <input type="hidden" name="panel-image"  value="<?php echo trim($panel); ?>" >
        <input type="hidden" name ="Panelmodel" value="<?php echo trim($pmodel); ?>" >

        <div class="pic-wrapper">

        <div class="containerpic" id="containerpic">
            <?php
            $sql = "SELECT * FROM products WHERE p_grade = '$grade' AND p_name = 'Battery'";
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
                <input type="radio" name="Battery-image" id="<?php echo "image".$i; ?>" value="<?php echo $brand; ?>" onclick="showModel('<?php echo $brand; ?>','Battery')">
                <label for="<?php echo "image".$i; ?>">
                    <img src="<?php echo "../pictures/$row[p_image]"; ?>" alt="">
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
            <input type="submit" name="batteries" class="gradeBt" value="Now Select Inverter">

        </div><br>

        <input type="submit" name="batteries" class="gradeBt" value="SKIP-->">
        </div>
    </form>
    </body>

        <?php include('footer.php') ?>

        <script src="script.js">            

        </script>
