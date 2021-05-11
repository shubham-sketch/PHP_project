<!DOCTYPE html>
<html>
<body>

<?php
$txt = file_get_contents("12_1.txt");

$arr = explode(" ",$txt);
?>
<table border=1>
    <?php
    foreach($arr as $key => $value){
        ?>
        <tr>
            <td><?php echo $value?></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>
