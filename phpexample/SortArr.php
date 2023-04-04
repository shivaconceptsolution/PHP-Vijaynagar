<?php
$x=array(13,45,67,89,11,13,12);
for($i=0;$i<count($x);$i++) //1
{
    for($j=$i+1;$j<count($x);$j++) //3
    {
        if($x[$i]>$x[$j]) // 45>13
        {
            $temp=$x[$i];
            $x[$i]=$x[$j];
            $x[$j] = $temp;
        }
    }
    echo $x[$i],"<br>";
}