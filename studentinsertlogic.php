<?php
include_once('conn.php');
$rno= $_GET['rno'];
$name = $_GET['name'];
$branch=$_GET['branch'];
$fees = $_GET['fees'];

$query  = mysqli_query($conn,"insert into student(rno,sname,branch,fees) values($rno,'$name','$branch',$fees)");   
if(mysqli_affected_rows($conn)>0)
{
       echo "Data Inserted Successfully";
}
else
{
    echo "Problem in data insertion";
}
?>