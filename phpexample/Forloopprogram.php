<?php
$num=6;
$c=0;
for($i=1;$i<=$num;$i++)
{
    if($num%$i==0)
    {
        $c++;
    }
}
if($c==2)
{
    echo "Prime";
}
else
{
    echo "not prime";
}

?>