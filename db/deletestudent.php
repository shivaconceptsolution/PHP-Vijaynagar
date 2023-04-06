<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Are you sure to delete the record of student whose rno is <?php echo $_GET['q']; ?></h1>
    <?php
    $rno= $_GET['q'];
    $conn = mysqli_connect('localhost','root','','schooldb');   
    $query = mysqli_query($conn,"select * from student where rno=$rno");
    $data = mysqli_fetch_row($query);
    ?>
    <form action="" method="post">
      RNO: <?php echo $data[0]; ?><br><br>
      Name <?php echo $data[1]; ?> <br><br>
      Branch <?php echo $data[2]; ?><br><br>
      Fees <?php echo $data[3]; ?><br><br>
      <input type="submit" name="btnsubmit" value="Delete" />
    </form>

    <?php
    if(isset($_POST['btnsubmit']))
    {
        $rno = $_POST['txtrno'];
     
        $query=mysqli_query($conn,"delete from student where rno=$rno");
        if(mysqli_affected_rows($conn)>0)
        {
            echo "<script>window.location='viewstudenttable.php';</script>";
        }

    }
    ?>
</body>
</html>