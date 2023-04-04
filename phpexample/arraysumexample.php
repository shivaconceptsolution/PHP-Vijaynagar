<?php
$x=array(13,45,67,89,11,13,12);
$even=0;
$odd=0;
for($i=0;$i<count($x);$i++)
{
     if($x[$i]%2==0)
     {
        $even = $even + $x[$i];
     }
     else
     {
        $odd = $odd + $x[$i];
     }
}
echo "Sum of even number is ".$even,"<br>";
echo "Sum of odd number is ".$odd;

?>