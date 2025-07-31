<?php

    include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="left">
                <div class="content">
                    <img src="logo.gif" alt="Alpha Solar Logo" class="logo">
                    <h1>WELCOME</h1>
                    <p>Welcome to the best solar solutions platform .</p>
                    <?php
                    if(isset($_SESSION['not_login'])){
                        echo "<div class='not-login'>".$_SESSION['not_login']."</div>";
                        unset($_SESSION['not_login']);
                    }
                    if(isset($_SESSION['Authorization'])){
                        echo "<div class='not-login'>".$_SESSION['Authorization']."</div>";
                        unset($_SESSION['Authorization']);
                    }

                    ?> 
                    <br><br>
                    <form action="" method="post">

                        <input type="text" name="fname" placeholder="Enter your First Name" required autofocus>
                        <input type="text" name="lname" placeholder="Enter your Last Name" required >
                        <input type="email" name="email" placeholder="Enter your Email" required>
                        <input type="password" name="password" placeholder="Enter Your min 8 digits Password" required minlength="8">
                        <input type="password" name="cpassword" placeholder="Confirm your min 8 digits Password" required minlength="8">
                        
                        <input type="submit" name="submit" value="SignUp">
                    </form>
                    <p>Already have an account? <a href="customerLogin.php">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php

    if(isset($_POST['submit'])){

        $fname = mysqli_real_escape_string($conn,trim($_POST['fname']));
        $lname = mysqli_real_escape_string($conn,trim($_POST['lname']));
        $email = mysqli_real_escape_string($conn,trim($_POST['email']));
        $pass = mysqli_real_escape_string($conn,trim(md5($_POST['password'])));
        $cpass = mysqli_real_escape_string($conn,trim(md5($_POST['cpassword'])));
    

        if($pass === $cpass){
            $sql_email = "SELECT email from customer WHERE email ='$email';";

            $result_email = mysqli_query($conn,$sql_email);

            $count_email = $result_email->num_rows;

            if($count_email<=0 ){

            $sql_insert = "INSERT INTO customer(first_name,last_name,email,password)
                            VALUES('$fname','$lname','$email','$pass');";
            $result_insert = mysqli_query($conn,$sql_insert);

            $_SESSION['signup'] ="Sign Up Successfully";
            $_SESSION['user'] = $email;
            header('Location:'.SITEURL.'Customer/Grade.php');

            }else{
                $_SESSION['not_login'] = "<b>The User Already Exist</b>.<br>Please Try again with valid Email ." ;
                header('Location:'.SITEURL.'Customer/customerRegistration.php'); 
            }
        }else{
            $_SESSION['not_login'] = "<b>Oppss!! </b>The Password does not match .";
            header('Location:'.SITEURL.'Customer/customerRegistration.php');
        }

    }     

?>