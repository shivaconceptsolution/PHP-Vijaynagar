<html>
    <head>
    </head>
<body>
<form action="" method="post">
<input type="text" name="txtnum1" placeholder="Enter First Number" />
<br><br>
<input type="text" name="txtnum2" placeholder="Enter Second Number" />
<br><br>
<input type="submit" name="btnadd" value="+"  />
<br><br>
<input type="submit" name="btnsub" value="-"  />
<br><br>
<input type="submit" name="btnmulti" value="*"  />
<br><br>
<input type="submit" name="btndiv" value="/"  />
</form>
<?php
include('Operation.php');
if(isset($_POST['btnadd']))
{
addition($_POST['txtnum1'],$_POST['txtnum2']);
}
if(isset($_POST['btnsub']))
{
$r= substraction($_POST['txtnum1'],$_POST['txtnum2']);
echo $r,"<br>";
}

if(isset($_POST['btndiv']))
{
$r=division($_POST['txtnum1'],$_POST['txtnum2']);
echo $r,"<br>";
}

if(isset($_POST['btnmulti']))
{
multiplication($_POST['txtnum1'],$_POST['txtnum2']);
}

?>
</body>
</html>