<?php
$x = array(12,23,67,89,10);
$m=$x[0];
for($i=1;$i<count($x);$i++)
{
    if($m>$x[$i])
    {
        $m=$x[$i];
    }
}

echo "Min element is ".$m;

?>