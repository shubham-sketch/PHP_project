<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prime Number</title>
    <style>
        body{
            border: 5px solid black;
            width: 40%;
            height: 200;
            margin: auto;
            margin-top: 10%;
            padding: 20px;
            font-size: 150%;
            font-style:inherit;
            
        }
        h2{
            text-align: center;
            color: red;
        }
    </style>
</head>
<body>
    <h2>Prime Number</h2>
    <form action="#" method="POST">
        <label>Enter Number :- </label>
        <input type="text" name="num1">
        <input type="submit" name="Find">
    </form>

    <?php
        function prime($n){
            $i=2;
            while($n%$i==0){
                return 0;
                $i++;
            }
            return 1;
        }
    ?>

    <?php
        $submitted = isset($_POST['num1']);
        if($submitted){
            if(prime($_POST['num1'])){
                echo "Number is Prime";
            }
            else{
                echo "Number is not Prime";
            }
        }
    ?>
</body>
</html>