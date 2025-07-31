<?php
    if(isset($_POST['inverters'])){

        $type = $_POST['type'];
        $size = $_POST['system-size'];
        $grade = $_POST['grade'];
        $panel = $_POST['panel-image'];
        $pmodel =$_POST['Panelmodel'];
        $battery = $_POST['Battery-image'];
        $bmodel = $_POST['Batterymodel'];
        $inverter = isset($_POST['Inverter-image']) ? $_POST['Inverter-image'] : null;
        $imodel = isset($_POST['Invertermodel']) ? $_POST['Invertermodel'] : null;
   
    }
?>

<?php include('header.php')  ?>

    <form action="customizepackage.php" method="POST">

        <input type="hidden" name="grade"  value="<?php echo trim($grade); ?>" >
        <input type="hidden" name ="type" value="<?php echo trim($type); ?>" >
        <input type="hidden" name ="system-size" value="<?php echo trim($size); ?>" >
        <input type="hidden" name="panel-image"  value="<?php echo trim($panel); ?>" >
        <input type="hidden" name ="Panelmodel" value="<?php echo trim($pmodel); ?>" >
        <input type="hidden" name="Battery-image"  value="<?php echo trim($battery); ?>" >
        <input type="hidden" name ="Batterymodel" value="<?php echo trim($bmodel); ?>" >
        <input type="hidden" name="Inverter-image"  value="<?php echo trim($inverter); ?>" >
        <input type="hidden" name ="Invertermodel" value="<?php echo trim($imodel); ?>" >

        <div class="pic-wrapper">

        <div class="containerpic" id="containerpic">

    
            <input type="radio" name="tier" id="tier-1" value="Tier 1">
                <label for="tier-1">
                    <div class="acc">
                        <div class="acct">Tier1</div>
                            <h4 class="ah3">Breakers</h4>
                            <h4 class="ah3">Wires</h4>
                            <h4 class="ah3">DP</h4>
                            <h4 class="ah3">Structure(Stands)</h4>
                        </div>
                </label>
        

            <input type="radio" name="tier" id="tier-2" value="Tier 2">
                <label for="tier-2">
                    <div class="acc">
                        <div class="acct">Tier2</div>
                            <h4 class="ah3">Breakers</h4>
                            <h4 class="ah3">Wires</h4>
                            <h4 class="ah3">DP</h4>
                            <h4 class="ah3">Structure(Stands)</h4>
                        </div>
    
                    </label>

            <input type="radio" name="tier" id="tier-3" value="Tier 3">
                <label for="tier-3">
                    <div class="acc">

                        <div class="acct">Tier3</div>
                            <h4 class="ah3">Breakers</h4>
                            <h4 class="ah3">Wires</h4>
                            <h4 class="ah3">DP</h4>
                            <h4 class="ah3">Structure(Stands)</h4>
                        </div>
                    </label>

                </div>
                <input type="submit" name="calculatePrice" id="csubmit" value="Make My Customize Package"><br><br>


    </form>
</div>
</div>


<?php include('footer.php') ?>