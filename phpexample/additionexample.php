<html>
<head>
<body bgcolor="orange">
<h1>Login Form</h1>
<form action="" method="post">
   <input type="text" name="t1" placeholder="Enter username"  />
  <br><br>
  <input type="password" name="t2"  placeholder="Enter password"  />
  <br><br>
  <input type="submit" name="btnsubmit" value="Login" />

</form>

<?php
    if(isset($_POST['btnsubmit']))
    {
    $username=$_POST['t1'];
    $password=$_POST['t2'];
    if($username=="abcd" && $password=="12345")
    {
        header('location:http://shivatutorials.com');
    }
   else
    {
       echo "login is invalid";
    }
   }
?>