<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $rno= $_GET['q'];
    $conn = mysqli_connect('localhost','root','','schooldb');   
    $query = mysqli_query($conn,"select * from student where rno=$rno");
    $data = mysqli_fetch_row($query);
    ?>
    <form action="" method="post">
      RNO <input type="text" name="txtrno" value="<?php echo $data[0]; ?>"  /> <br><br>
      Name <input type="text" name="txtname" value="<?php echo $data[1]; ?>" /> <br><br>
      Branch <input type="text" name="txtbranch" value="<?php echo $data[2]; ?>" /> <br><br>
      Fees <input type="text" name="txtfees"  value="<?php echo $data[3]; ?>" /> <br><br>
      <input type="submit" name="btnsubmit" value="Update" />
    </form>

    <?php
    if(isset($_POST['btnsubmit']))
    {
        $rno = $_POST['txtrno'];
        $name = $_POST['txtname'];
        $branch=$_POST['txtbranch'];
        $fees = $_POST['txtfees'];
        $query=mysqli_query($conn,"update student set sname='$name',branch='$branch',fees='$fees' where rno=$rno");
        if(mysqli_affected_rows($conn)>0)
        {
            echo "<script>window.location='viewstudenttable.php';</script>";
        }

    }
    ?>
</body>
</html>