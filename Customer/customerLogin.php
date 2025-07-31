<?php

    include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="left">
                <div class="content">
                    <img src="logo.gif" alt="Alpha Solar Logo" class="logo">
                    <h1>WELCOME</h1>
                    <p>Welcome again to the best solar solutions platform<br> <br>Hope You are Enjoying our website.<b></p>
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
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="password" name="password" placeholder="Password" required>
                        
                        <input type="submit" name="submit" value="Login">
                    </form>
                    <p>New to the Platform? <a href="customerRegistration.php">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php

    if(isset($_POST['submit'])){

        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,md5($_POST['password']));

        $sql = "Select * from customer where email = '$email' and password = '$password'";

        $result = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($result);

        if($count == 1){
        
            $_SESSION['login'] = "Login SuccessFully .";
            $_SESSION['user'] = $email;
            header('Location:'.SITEURL.'Customer/Grade.php');


        }else{

            $_SESSION['not_login'] = "<b>Oppps!!</b> Failed to Login <br> Try Again with valid Email and Password .<br> ";
            header('Location:'.SITEURL.'Customer/CustomerLogin.php');
        }

    }


?>

