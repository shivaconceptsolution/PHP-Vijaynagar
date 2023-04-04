<?php
$c=2;
for($i=1;$i<=5;$i++)
{
    if($i<=3)
    {
    for($k=2;$k>=$i;$k--)
    {
        echo "&nbsp;&nbsp;";
    }
    for($j=1;$j<=2*$i-1;$j++)
    {
        echo "*";
    }
   }
   else
   {
    for($k=2;$k>=$c;$k--)
    {
        echo "&nbsp;&nbsp;";
    }
    for($j=1;$j<=2*$c-1;$j++)
    {
        echo "*";
    }
    $c--;
   }

    echo "<br>";
}



?>