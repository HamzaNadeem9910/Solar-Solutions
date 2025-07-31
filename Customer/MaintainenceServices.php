<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Process Page</title>
</head>
<body>

<?php

if (isset($_POST['bookMaintainence'])) {
    if (isset($_SESSION['user'])) {
        
        $email = trim($_SESSION['user']);
        $sql8 = "SELECT customer_id FROM customer WHERE email='$email';";
        $result8 = mysqli_query($conn, $sql8);

        if ($result8->num_rows == 1) {
            $row = $result8->fetch_assoc();
            $customer_id = $row['customer_id'];
        } else {
            echo "<script>
            alert('Oops!!!\\nUser not found.');
            window.location.href = 'http://localhost/DBSFE/Customer/home.php';
            </script>";
            exit(); // Add exit to prevent further script execution
        }

    } else {
        echo "<script>
        alert('Oops!!!\\nUser not found.');
        window.location.href = 'http://localhost/DBSFE/Customer/home.php';
        </script>";
        exit(); // Add exit to prevent further script execution
    }

    if (!empty($_POST['location']) && !empty($_POST['area']) && !empty($_POST['houseno']) && !empty($_POST['type']) && !empty($_POST['block']) && !empty($_POST['system-size']) && !empty($_POST['contact'])) {

        $city = trim($_POST['location']);
        $area = trim($_POST['area']);
        $houseno = trim($_POST['houseno']);
        $type = trim($_POST['type']);
        $block = trim($_POST['block']);
        $size = trim($_POST['system-size']);
        $contact = trim($_POST['contact']);

        $sql1 = "INSERT INTO maintenanceservice(contact, systemSize, serviceType) 
                 VALUES('$contact', '$size', '$type');";
        $result1 = mysqli_query($conn, $sql1);

        if ($result1 === true) {
            $last_id = $conn->insert_id;
            $sql2 = "INSERT INTO address(city, area, house_no, block, service_id)
                     VALUES('$city', '$area', '$houseno', '$block', '$last_id');";
            $result2 = mysqli_query($conn, $sql2);

            if ($result2 === true) {
                
                $sql3 = "INSERT INTO books_maintenaceservice(books_maintenaceservice.customer_id,books_maintenaceservice.service_id,books_maintenaceservice.currenttimedate)
                VALUES('$customer_id','$last_id',now());";
                $result9 = mysqli_query($conn, $sql3);

                echo "<script>
                        alert('Your service is booked successfully.\\nOur team will contact you in 2-3 working days.\\nTHANK YOU.');
                        window.location.href = 'http://localhost/DBSFE/Customer/home.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Error: Unable to save address information.');
                        window.location.href = 'http://localhost/DBSFE/Customer/home.php';
                      </script>";
            }
        } else {
            echo "<script>
                    alert('Error: Unable to save service information.');
                    window.location.href = 'http://localhost/DBSFE/Customer/home.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Please fill in all required fields.');
                window.location.href = 'http://localhost/DBSFE/Customer/home.php';
              </script>";
    }
}
?>

</body>
</html>
