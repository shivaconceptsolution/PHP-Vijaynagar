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
        <input type="text" placeholder="Enter rno" name="txtrno" /> <br>
        <input type="text" placeholder="Enter name" name="txtname"  /> <br>
        <input type="text" placeholder="Enter branch" name="txtbranch"  /> <br>
        <input type="text" placeholder="Enter fees" name="txtfees"  /> <br>
        <input type="submit" name="btnsubmit" value="Insert"  />

    </form>
    <a href="viewstudent.php">View Student Record</a>
    <?php
          if(isset($_POST['btnsubmit']))
          {
               $rno= $_POST['txtrno'];
               $name = $_POST['txtname'];
               $branch=$_POST['txtbranch'];
               $fees = $_POST['txtfees'];
               $conn = mysqli_connect('localhost','root','','schooldb');   
               $query  = mysqli_query($conn,"insert into student(rno,sname,branch,fees) values($rno,'$name','$branch',$fees)");   
               if(mysqli_affected_rows($conn)>0)
               {
                      echo "Data Inserted Successfully";
               }
               else
               {
                   echo "Problem in data insertion";
               }



          }




    ?>
</body>
</html>