<?php
function swap(&$a,&$b)
{
     $temp=$a;
     $a=$b;
     $b=$temp;
     echo "After Swap a=$a and b=$b <br>";
}
$x=10;
$y=20;
swap($x,$y);
echo "After Swap x=$x and y=$y <br>";
?>
