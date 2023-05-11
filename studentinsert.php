<!DOCTYPE html>
<html lang="en">
<?php
include('header.php');
?>
<div id="section">
    <script>
       function addstudent()
       {
          var rno = document.getElementById("txtrno").value;
          var name = document.getElementById("txtname").value;
          var branch = document.getElementById("txtbranch").value;
          var fees = document.getElementById("txtfees").value;
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange=function()
          {
            if(xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("res").innerHTML = xmlhttp.responseText;
            window.location='viewstudenttable.php';
            }
          }
          xmlhttp.open("POST","studentinsertlogic.php?rno="+rno+"&name="+name+"&branch="+branch+"&fees="+fees,true);
          xmlhttp.send();
       }
    </script>
    <br><br>

    
       <h3>Add Student Record From Here</h3>
        <input type="text" placeholder="Enter rno" id="txtrno" /> <br>
        <input type="text" placeholder="Enter name" id="txtname"  /> <br>
        <input type="text" placeholder="Enter branch" id="txtbranch"  /> <br>
        <input type="text" placeholder="Enter fees" id="txtfees"  /> <br>
        <input type="button" name="btnsubmit" value="Insert" onclick="addstudent()"  />
        <div id="res"></div>
    
    </div>
<?php
include('footer.php');
?>