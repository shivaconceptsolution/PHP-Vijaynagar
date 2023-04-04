<?php

for($i=1;$i<=5;$i++)  //5
{
    $ch='A';
    $ch1='a';
    for($j=1;$j<=6-$i;$j++)   # 1  2 3 4 5
    {      
        if($j%2==0)
        {
           echo $ch1," ";
           $ch1++;
        }   
        else
        {                   
        echo $ch," ";
        $ch++;
        }
        
       
    }
    echo "<br>";
}

?>