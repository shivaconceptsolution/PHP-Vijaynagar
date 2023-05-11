<select onchange="showcity(this.value)">

<option value="">Select State</option>
<?php
include('conn.php');
$cid=$_GET['cid'];
$res = mysqli_query($conn,"select * from state where cid=$cid");
while($x=mysqli_fetch_array($res))
{  ?>
   <option value="<?php echo $x[0]; ?>"><?php echo $x[1]; ?></option>
<?php } ?>
</select>