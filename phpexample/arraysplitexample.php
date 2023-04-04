<?php
$x = array(1,2,3,4,5,6);
for($i=0;$i<3;$i++)
{
    $y[] = $x[$i];
}

for($i=3;$i<6;$i++)
{
    $z[] = $x[$i];
}

for($i=0;$i<count($y);$i++)
{
    echo $y[$i],"<br>";
}
for($i=0;$i<count($z);$i++)
{
    echo $z[$i],"<br>";
}


?>