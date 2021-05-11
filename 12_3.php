<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label>Username</label>
        <input type="text" name="name">
        <br><br>
        <label>Address</label>
        <input type="text" name="address">
        <br><br>
        <label>date of Birth</label>
        <input type="date" name="dob">
        <br><br>
        <label>pan card numbar</label>
        <input type="text" name="pan">
        <br><br>
        <label>Gender</label>
        <input type="radio" name=gen value="Male">Male
        <input type="radio" name=gen value="Female">FeMale
        <input type="radio" name=gen value="other">other
        <br><br>
        <input type="submit" name="submit" value="SignUp">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $address = $_POST['address'];
            $dob = $_POST['dob'];
            $pan = $_POST['pan'];
            $gen = $_POST['gen'];

            $result = mysqli_query($mysqli, "insert into userss values('','$name','$address',
            '$dob','$pan','$gen')");
            

            if($result){
                echo "Resistansion Successfully";
            }else{
                echo "failed";
            }
        }
    ?>
</body>
</html>