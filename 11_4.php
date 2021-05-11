<!DOCTYPE html>
<html>
    <head>
        <title>Store form data in text file</title>
        <style>
        body{
              background-color: rgb(191, 213, 216);
              border: 10px solid rgb(21, 114, 190);
              width: 70%;
              height: 200;
              margin: auto;
              margin-top: 2%;
              padding: 20px;
              font-size: 150%;
              font-style:inherit;
          }
          form{
            color: blue;
            text-align: justify;
        }
          input[type=text]{
            width: 50%;  
            padding: 10px;  
            margin: 5px 0 22px 0;  
            display: inline-block;  
            border: none;  
            background: #f1f1f1;  
        }  
        label.lab {
            display: inline-block;
            width: 250px;
          }
        #submit{
                background-color: #2f7385;  
                color: white;  
                padding: 16px 20px;  
                margin: 8px 0;  
                border: none;  
                width: 100%;
          }


    </style>
    </head>
    <body>
        <form method="post">

            <label class="lab">Enter Your Text Here:</label>
            <input type="text" name="textdata"><br><br>
            <input id="submit" type="submit" name="submit"> <br><br>
            <label class="lab">Your Input Text is :-</label>
        
        </form>
    </body>
</html>
<?php
              
if(isset($_POST['textdata']))
    {
        echo $_POST['textdata'];
        $data=$_POST['textdata'];
        $fp = fopen('data.txt', 'a');
        fwrite($fp, $data."\n");
        fclose($fp);
    }
?>