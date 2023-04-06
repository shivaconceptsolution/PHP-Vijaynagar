<?php
echo "<h1>View Student Record </h1> <hr>";
$conn = mysqli_connect('localhost','root','','schooldb');   
$query = mysqli_query($conn,"select * from student");
while($res = mysqli_fetch_array($query))
{
    echo $res[0]," ",$res[1] ," ",$res[2]," ",$res[3], "<br>";
}




?>