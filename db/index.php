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
        <input type="text" placeholder="Enter username" name="txtuid" /> <br>
        <input type="password" placeholder="Enter password" name="txtpass"  /> <br>
       
        <input type="submit" name="btnsubmit" value="Login"  />

    </form>

    <?php
          if(isset($_POST['btnsubmit']))
          {
               $uid= $_POST['txtuid'];
               $upass = $_POST['txtpass'];
               $conn = mysqli_connect('localhost','root','','schooldb');   
               $query  = mysqli_query($conn,"select * from admin where userid='$uid' and password='$upass'");   
               if(mysqli_num_rows($query)>0)
               {
                      echo "<script>window.location='viewstudenttable.php';</script>";
               }
               else
               {
                echo "<script>alert('invalid userid and password');</script>";
               }



          }




    ?>
</body>
</html>