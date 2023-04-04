<?php
$arr = array(12,23,34,23,2,89,12);
for($i=0;$i<count($arr);$i++)  // 2
{
    $c=0;
    for($j=0;$j<count($arr);$j++) //
    {
        if($arr[$i]==$arr[$j] && $i!=$j)
        {
            $c=1;
            break;
        }
        
    }
    if($c==0)
    {
        echo $arr[$i],"<br>";
    }

}