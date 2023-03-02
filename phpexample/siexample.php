<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="post">
       <input type="text" name="txtp" placeholder="Enter P" />
       <br>
       <br>
       <input type="text" name="txtr" placeholder="Enter R" />
       <br>
       <br>
       <input type="text" name="txtt"  placeholder="Enter T" />
       <br>
       <br>
       <input type="submit" name="btnsubmit" value="Calculate" />
   </form>

   <?php
   if(isset($_POST['btnsubmit']))
   {
      $p =$_POST['txtp'];
      $r=$_POST['txtr'];
      $t=$_POST['txtt'];
      $si =($p*$r*$t)/100;
      echo $si;
   }

   ?>
</body>
</html>