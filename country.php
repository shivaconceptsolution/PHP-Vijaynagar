<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function showstate(id)
        {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange=function()
          {
            if(xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("res").innerHTML = xmlhttp.responseText;
            }
          }
          xmlhttp.open("POST","state.php?cid="+id,true);
          xmlhttp.send();
        }
        function showcity(id)
        {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange=function()
          {
            if(xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("res1").innerHTML = xmlhttp.responseText;
            }
          }
          xmlhttp.open("POST","city.php?cid="+id,true);
          xmlhttp.send();
        }

</script>
</head>
<body>
    <select onchange="showstate(this.value)")>

    <option value="">Select Country</option>
    <?php
    include('conn.php');
    $res = mysqli_query($conn,"select * from country");
    while($x=mysqli_fetch_array($res))
    {  ?>
       <option value="<?php echo $x[0]; ?>"><?php echo $x[1]; ?></option>
   <?php } ?>
    </select>
   <div id="res">
   <select>

<option value="">Select State</option>
    </select>
   </div>
   <div id="res1">
   <select>

<option value="">Select City</option>
    </select>

   </div>
</body>
</html>