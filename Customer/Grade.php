
<?php
 include('header.php'); 
 include 'connect.php';
 include 'signupCheck.php';
 
  if(isset($_SESSION['signup'])){
    echo "<div id='add'>".$_SESSION['signup']."</div>";
    unset($_SESSION['signup']);
}
if(isset($_SESSION['login'])){
    echo "<div id='add'>".$_SESSION['login']."</div>";
    unset($_SESSION['login']);
}

 ?>
 
 <body class="cpbody">
    
</body>


    <?php
         if(isset($_SESSION['type'])){
                echo "<div class='error'>".$_SESSION['type']."</div>";
                unset($_SESSION['type']);
            }
            if(isset($_SESSION['grade'])){
                echo "<div class='error'>".$_SESSION['grade']."</div>";
                unset($_SESSION['grade']);
            }
            if(isset($_SESSION['size'])){
                echo "<div class='error'>".$_SESSION['size']."</div>";
                unset($_SESSION['size']);
            }
                   
    ?> 
    
    <form action="panels.php" method="POST">
        <div class="form-wrapper">
        <div id="div1"><h1 id="h1"><b>CUSTOMIZE YOUR PACKAGE</b></h1></div>

        <div class="divform">
            <legend class="l1">Select Type</legend>

            <div>
                <input type="radio" name="type" id="hybrid" value="Hybrid System">
                <label for="hybrid" class="lab1"><b>Solar Hybrid System</b></label>
            </div> 

            <br>

            <div>
                <input type="radio" name="type" id="ongrid" value="Ongrid System">
                <label for="ongrid" class="lab1"><b>Solar Ongrid System</b></label>
            </div>

        </div>

        <div class="divform">

            <legend class="l1">Select Solar System Size</legend>

            <div>
                <input type="radio" name="system-size" id="size-1kw" value="1kw">
                <label for="size-1kw">1kW</label> 
            </div>

            <br>

            <div>
                <input type="radio" name="system-size" id="size-2kw" value="2kw">
                <label for="size-2kw">2kW</label>
            </div>

            <br>

            <div>
                <input type="radio" name="system-size" id="size-3kw" value="3kw">
                <label for="size-3kw">3kW</label>
            </div>

            <br>

            <div>
                <input type="radio" name="system-size" id="size-6kw" value="6kw">
                <label for="size-6kw">6kW</label>
            </div>
            
            <br>

            <div>
                <input type="radio" name="system-size" id="size-10kw" value="10kw">
                <label for="size-10kw">10kW</label>
            </div>

            <br>

            <div>
                <input type="radio" name="system-size" id="size-15kw" value="15kw">
                <label for="size-15kw">15kW</label>
            </div>

        </div>

        <div class="divform">

            <legend class="l1">Select Product Grade</legend>

            <input type="radio" name="grade" id="grade-A" value="A">
            <label for="grade-A">A Grade</label>

            <br>
            <br>

           <input type="radio" name="grade" id="grade-B" value="B">
           <label for="grade-B">B Grade</label>

        </div><br>

        <input type="submit" name="garde" class="gradeBtt" value="Next-->">
        </div>

    </form>

        <?php include('footer.php') ?>