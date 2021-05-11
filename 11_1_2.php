


<html>
    <head>
    <style>
        body{
            border: 10px solid rgb(52, 133, 158);
            width: 40%;
            height: 30%;
            margin: auto;
            margin-top: 10%;
            padding: 20px;
            font-size: 150%;
            font-style:inherit;    
        }
        h2{
            text-align: center;
            color: black;
        }
        input[type=text]{
            width: 70%;  
            padding: 15px;  
            margin: 1px 0 1px 0;  
            display: inline-block;  
            border: none;  
            background: rgba(229, 235, 232, 0.815);  
        }  
        #submit{
            background-color: #2f7385;  
            color: white;  
            padding: 16px 20px;  
            margin: 8px 0;  
            border: none;  
            width: 100%;
        }
        label.lab {
            display: inline-block;
            width: 190px;
        }
    </style>
    </head>
    <body>
        <h2>Leap year</h2>
        <form action="#" method="post">
            <label class="lab">Enter Your Year</label>
            <input type="text" name="year"> <br><br>
            <input id="submit" type="submit"/>
        </form>
    </body>
</html>



<?php
if($_POST)
    {
        $year = $_POST['year'];
        if(empty($year)){
            echo '<span style="color:red"> Please Enter The Year ! </span>';
        }
        else{
            if ($year % 400 == 0) {
                echo $year." is a leap year.";
            } elseif ($year % 100 == 0) {
                echo $year." is not a leap year.";
            } elseif ($year % 4 == 0) {
                echo $year." is a leap year.";
            } else {
                echo $year." is not a leap year.";
            }
        }
    }
?>

