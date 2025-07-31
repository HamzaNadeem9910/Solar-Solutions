<?php 
    include 'header.php';
    include 'connect.php'; 
?>


    <?php
    if (isset($_POST['calculatePrice'])) {

        if(empty($_POST['type'])){

            ?>
            <h1 class="hcp">Please Select The System Type to Make Customize Package!!!</h1>
            <?php

        }else{
            $type = $_POST['type'];
            
        }
        if(empty($_POST['grade'])){
            ?>
            <h1 class="hcp">Please Select The Product Grade to Make Customize Package!!!</h1>
            <?php

        }else{
            $grade = $_POST['grade'];
        }

        if(empty($_POST['system-size'])){
            ?>
            <h1 class="hcp">Please Select The System Size to Make Customize Package!!!</h1>
            <?php

        }else{
            $size = $_POST['system-size'];
        }

       
        $panel = !empty($_POST['panel-image']) ? trim($_POST['panel-image']) : 'Not-Selected';
        $pmodel = !empty($_POST['Panelmodel']) ? trim($_POST['Panelmodel']) : 'No Model Selected';
        $battery = !empty($_POST['Battery-image']) ? trim($_POST['Battery-image']) : 'Not-Selected';
        $bmodel = !empty($_POST['Batterymodel']) ? trim($_POST['Batterymodel']) : 'No Model Selected';
        $inverter = !empty($_POST['Inverter-image']) ? trim($_POST['Inverter-image']) : 'Not-Selected';
        $imodel = !empty($_POST['Invertermodel']) ? trim($_POST['Invertermodel']) : 'No Model Selected';
        $tier = !empty($_POST['tier']) ? trim($_POST['tier']) : 'Not-Selected';


        $price = 0;
        $panelQ = 0;
        $batteryQ = 0;
        $inverterQ = 0;
        $panelp = 1;
        $batteryp = 1;
        $inverterp = 1;
        $panelId;
        $batteryId;
        $inverterId;

        $sql1 = "Select p_price,products.p_id from products left outer join productmodel ON (products.p_id = productmodel.p_id) where p_brand ='$panel' and P_name = 'Panel' and p_grade='$grade' and p_model='$pmodel';";
        $result = mysqli_query($conn,$sql1);

        if($result && mysqli_num_rows($result) > 0){

            $row = $result->fetch_assoc();
            $panelp = $row['p_price'];
            $panelId = $row['p_id'];
            if($panel != 'Not-Selected'){

               
                //echo $panelId;
            }
            
        }else{
            echo "No price found for Panel model ".$pmodel;
        }

        $sql2 = "Select p_price,products.p_id from products left outer join productmodel ON (products.p_id = productmodel.p_id) where p_brand ='$battery' and P_name = 'Battery' and p_grade='$grade' and p_model='$bmodel';";
        $result2 = mysqli_query($conn,$sql2);

        if($result2 && mysqli_num_rows($result2) > 0){

            $row = $result2->fetch_assoc();
            $batteryp = $row['p_price'];
            if($battery != 'Not-Selected'){

                $batteryId = $row['p_id'];
            }
            
        }else{
            echo "No price found for Battery model ".$bmodel;
        }

        $sql3 = "Select p_price,products.p_id from products left outer join productmodel ON (products.p_id = productmodel.p_id) where p_brand ='$inverter' and P_name = 'Inverter' and p_grade='$grade' and p_model='$imodel';";
        $result3 = mysqli_query($conn,$sql3);

        if($result3 && mysqli_num_rows($result3) > 0){

            $row = $result3->fetch_assoc();
            $inverterp = $row['p_price'];
            if($inverter != 'Not-Selected'){

                $inverterId = $row['p_id'];
            }

        }else{
            echo "No price found for inverter model ".$imodel;
        }



        if($grade  === 'A' && $type === 'Ongrid System' || $type === 'Hybrid System'){

            if($size == '1kw'){

                $panelQ = 4;
                $batteryQ = 2;
                $inverterQ = 1;
    
            }else if($size == '2kw'){
    
                $panelQ = 6;
                $batteryQ = 4;
                $inverterQ = 1;
    
            }else if($size == '3kw'){
    
                $panelQ = 10;
                $batteryQ = 6;
                $inverterQ = 2;
    
            }else if($size == '6kw'){
    
                $panelQ = 20;
                $batteryQ = 12;
                $inverterQ = 3;
    
            }else if($size == '10kw'){
    
                $panelQ = 35;
                $batteryQ = 20;
                $inverterQ = 3;
    
            }else if($size == '15kw'){
    
                $panelQ = 50;
                $batteryQ = 35;
                $inverterQ = 5;
    
            }
            } 
            if($grade  === 'B' && $type === 'Ongrid System' || $type === 'Hybrid System'){
            
            if($size == '1kw'){

                $panelQ = 6;
                $batteryQ = 4;
                $inverterQ = 1;
    
            }else if($size == '2kw'){
    
                $panelQ = 8;
                $batteryQ = 6;
                $inverterQ = 1;
    
            }else if($size == '3kw'){
    
                $panelQ = 12;
                $batteryQ = 8;
                $inverterQ = 2;
    
            }else if($size == '6kw'){
    
                $panelQ = 22;
                $batteryQ = 14;
                $inverterQ = 3;
    
            }else if($size == '10kw'){
    
                $panelQ = 38;
                $batteryQ = 22;
                $inverterQ = 3;
    
            }else if($size == '15kw'){
    
                $panelQ = 55;
                $batteryQ = 40;
                $inverterQ = 6;
    
            }

        }

        $price = $panelQ*$panelp+$batteryQ*$batteryp+$inverterQ*$inverterp;

        if (!empty($type) && !empty($size) && !empty($grade)){

            $sql4 = "INSERT INTO customize_package(c_package_type,c_package_systemsize,c_package_grade)
			         VALUES('$type','$size','$grade');";
            $result4 = mysqli_query($conn,$sql4);
            
            ?>
        <body id="cbody">
            <div class="wrappercp">
            <fieldset>
                <legend>Your Package is ready.</legend>
                <table>
                    <tr>
                        <th>Solar System Type</th>
                        <th>Solar System Size</th>
                        <th>Product Grade</th>
                    </tr>
                    <tr>
                        <td><?php echo $type; ?></td>
                        <td><?php echo $size; ?></td>
                        <td><?php echo $grade; ?></td>
                    </tr>
                    <tr>
                        <th>Solar Panel</th>
                        <th>Solar Panel Model</th>
                    </tr>
                    <tr>
                        <td><?php echo $panel == 'Not-Selected' ? 'No Panel Selected' : $panelQ.' X ' . $panel; ?></td>
                        <td><?php echo $pmodel == 'No Model Selected' ? 'No Model Selected' : $pmodel; ?></td>
                    </tr>
                    <tr>
                        <th>Battery</th>
                        <th>Battery Model</th>
                    </tr>
                    <tr>
                        <td><?php echo $battery == 'Not-Selected' ? 'No Battery Selected' : $batteryQ.' X ' . $battery; ?></td>
                        <td><?php echo $bmodel == 'No Model Selected' ? 'No Model Selected' : $bmodel; ?></td>
                    </tr>
                    <tr>
                        <th>Inverter</th>
                        <th>Inverter Model</th>
                    </tr>
                    <tr>
                        <td><?php echo $inverter == 'Not-Selected' ? 'No Inverter Selected' : $inverterQ.'X ' . $inverter; ?></td>
                        <td><?php echo $imodel == 'No Model Selected' ? 'No Model Selected' : $imodel; ?></td>
                    </tr>
                    <tr>
                        <th>Accessory Type</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td><?php echo $tier == 'Not-Selected' ? 'No Accessory Selected' : $tier ?></td>
                        <td><?php echo $price; ?></td>
                    </tr>
                </table>
            </fieldset>
            
            

                <?php
                    $description = "Panel brand : ".$panel." ,Panel model : ".$pmodel." ,Panel quantity :".$panelQ.",Battery brand : ".$battery."
                     ,Battery model : ".$bmodel." ,Battery quantity :".$batteryQ.",Inverter brand: ".$inverter." ,Inverter model: ".$imodel."
                     ,Inverter qunatity :".$inverterQ.",Accessory :".$tier;


                    $last_id = $conn->insert_id;
                    
                    if(!empty($panelId) && !empty($pmodel)){

                        $sql5 = "Insert into customize_package_contains(p_id,c_package_id,p_model)
                                 values('$panelId','$last_id','$pmodel')";
                        $result5 = mysqli_query($conn,$sql5);
                        if (!$result5) {
                            echo "Error inserting panel: " . mysqli_error($conn);
                        }
                    }

                    if(!empty($batteryId) && !empty($bmodel)){

                        $sql6 = "Insert into customize_package_contains(p_id,c_package_id,p_model)
                                values('$batteryId','$last_id','$bmodel')";
                        $result6 = mysqli_query($conn,$sql6);

                        if (!$result6) {
                            echo "Error inserting battery: " . mysqli_error($conn);
                        }

                    }

                    if(!empty($inverterId) && !empty($imodel)){

                        $sql7 = "Insert into customize_package_contains(p_id,c_package_id,p_model)
                                values('$inverterId','$last_id','$imodel')";
                        $result7 = mysqli_query($conn,$sql7);

                        if (!$result7) {
                            echo "Error inserting inverter: " . mysqli_error($conn);
                        }
                    }

                    if(isset($_SESSION['user'])){

                        $email = trim($_SESSION['user']);
                        $sql8 = "SELECT customer_id FROM customer where email='$email';";
                        $result8 = mysqli_query($conn,$sql8);

                        if($result8->num_rows == 1){
                            $row = $result8->fetch_assoc();
                            $customer_id = $row['customer_id'];

                            $sql9 = "INSERT INTO make_customize_package(customer_id,c_package_id,c_package_description,c_package_price)
                                    VALUES('$customer_id','$last_id','$description','$price');";
                            $result9 = mysqli_query($conn,$sql9);

                            // if($result9) {
                            //     echo "Insertion successful!";
                            // } else {
                            //     echo "Error: " . mysqli_error($conn); // Display the error if the query fails
                            // }
                        }

                    }
            

            
                 ?>
            <button id="cpackage"><a href="Grade.php">Click Here To Make Another Customize Package .</a></button> 
            <?php
        } else {
            ?>
            <h1 class="hcp"  >Some Inputs are missing !!!!</h1>
            <button id="cpackage"><a href="Grade.php">Click Here To Select Missing Fields .</a></button> 
            <?php
        }
    }
    ?>
</div>


<div class="footercp">
<?php include('footer.php') ?>
</div>
</body>
