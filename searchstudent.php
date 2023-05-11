<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
     function searchrecord(a)
     {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange=function()
         {
            document.getElementById("res").innerHTML = xmlhttp.responseText;
         }
        xmlhttp.open("POST","searchrec.php?q="+a,true);
        xmlhttp.send();
         
     }
    </script>
</head>
<body>
    <input type="text" placeholder="Enter character to search record" onkeyup="searchrecord(this.value)"  />
    <br>
    <div id="res">
    </div>
</body>
</html>