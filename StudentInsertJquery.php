<!DOCTYPE html>
<html lang="en">
<?php
include('header.php');
?>
<div id="section">
<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>  
    <script>
      $(document).ready(function(){
        $("#btnsubmit").click(function(){
            var rno = $("#txtrno").val();
            var name = $("#txtname").val();
            var branch = $("#txtbranch").val();
            var fees = $("#txtfees").val();
            $.ajax({  
              
              type:"GET",  
              url:"Studentinsertlogic.php",  
              data: 'rno='+rno+"&name="+name+'&branch='+branch+'&fees='+fees,  
              success:function(data){  
                 // alert(data);  
          
                 $("#res").html(data);
                    
              }  
                
              });  

        })
      })
    </script>
    <br><br>

    
       <h3>Add Student Record From Here</h3>
        <input type="text" placeholder="Enter rno" id="txtrno" /> <br>
        <input type="text" placeholder="Enter name" id="txtname"  /> <br>
        <input type="text" placeholder="Enter branch" id="txtbranch"  /> <br>
        <input type="text" placeholder="Enter fees" id="txtfees"  /> <br>
        <input type="button" id="btnsubmit" value="Insert"   />
        <div id="res"></div>
    
    </div>
<?php
include('footer.php');
?>