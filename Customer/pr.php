<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="brand" id="brand" value="">
        
        <input type="radio" name="ham" id="" value="s" onclick="showModel('hamza chohan')">
        <input type="submit" name="" id="" value="submit">
       
        <?php
if(isset($_POST['brand'])){
    echo $_POST['brand'];
}else{
    echo "hamza na";
}

?>

    </form>
    <script src="script.js">

    </script>
</body>
</html>


