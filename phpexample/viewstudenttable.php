<table border='1'>
    <tr><td>rno</td><td>name</td><td>branch</td><td>fees</td></tr>
<?php
echo "<h1>View Student Record </h1> <hr>";
$conn = mysqli_connect('localhost','root','','schooldb');   
$query = mysqli_query($conn,"select * from student");
while($res = mysqli_fetch_array($query))
{ ?>
  <tr><td><?php echo $res[0]; ?></td><td><?php echo $res[1]; ?></td><td><?php echo $res[2]; ?></td><td><?php echo $res[3]; ?></td></tr>
<?php }




?>