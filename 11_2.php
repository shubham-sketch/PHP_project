<?php
for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        $k=($i+$j+1)%2;
        echo "$k";
    }
echo "<br>";
}
?>