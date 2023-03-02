<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculate Your Percentage and Result </h1>
    <form action="" method="post">
     <table>
      <tr><td><span>Physics</span></td><td><input type="text" name="txtphy" /></td></tr>
      <tr><td><span>Chemistry</span></td><td><input type="text" name="txtchem" /></td></tr>
      <tr><td><span>Maths</span></td><td><input type="text" name="txtmath" /></td></tr>
      <tr><td><span>English</span></td><td><input type="text" name="txteng" /></td></tr>
      <tr><td><span>Hindi</span></td><td><input type="text" name="txthin" /></td></tr>
      <tr><td><span></span></td><td><input type="submit" name="btnsubmit" value="Calculate" /></td></tr>
    </table>

    </form>

    <?php
     if(isset($_POST['btnsubmit']))
     {
        $phy = $_POST['txtphy'];
        $chem = $_POST['txtchem'];
        $math = $_POST['txtmath'];
        $eng = $_POST['txteng'];
        $hin = $_POST['txthin'];
        if(($phy>=0 && $phy<=100) && ($chem>=0 && $chem<=100) && ($math>=0 && $math<=100) && ($eng>=0 && $eng<=100) && ($hin>=0 && $hin<=100))
        {
            $count=0;
            $suppmark=0;
            $gsub="";
            $dist="";
            if($phy>=75)
            {
                $dist .= " PHYSICS ";  // $dist = $dist."PHYSICS"
            }
            if($phy>=75)
            {
                $dist .= " CHEMISTRY ";  
            }
            if($math>=75)
            {
                $dist .= " Math ";  
            }
            if($eng>=75)
            {
                $dist .= " English ";  
            }
            if($hin>=75)
            {
                $dist .= " Hindi ";  
            }
            if($phy<33)
            {
                $count++;
                $suppmark=$phy;
                $gsub="Physics";

            }
            if($chem<33)
            {
                $count++;
                $suppmark=$chem;
                $gsub="Chemistry";
            }
            if($math<33)
            {
                $count++;
                $suppmark=$math;
                $gsub="Maths";
            }
            if($eng<33)
            {
                $count++;
                $suppmark=$eng;
                $gsub="English";
            }
            if($hin<33)
            {
                $count++;
                $suppmark=$hin;
                $gsub="Hindi";
            }
            if($count==0 || ($count==1 && $suppmark>=28))
            {
                if($count==0)
                {
                    $per = ($phy + $chem + $math + $eng + $hin)/5;
                }
                else
                {
                    echo "Pass by grace with ".(33-$suppmark)." <br> Grace subject is ".$gsub."<br>";
                    $per = ($phy + $chem + $math + $eng + $hin+(33-$suppmark))/5;  
                }
                if($per>=33 && $per<45)
                {
                    echo "Pass with Third Division and Percentage is ",$per,"%";
                }
                else if($per<60)
                {
                    echo "Pass with Second Division and Percentage is ",$per,"%";
                }
                else
                {
                    echo "Pass with First Division and Percentage is ",$per,"%";
                }
               if($dist!="")
               {
                  echo "<hr> Distinction subject's ".$dist;
               }
            }
            else if($count==1)
            {
                echo "Suppl";
            }
            else
            {
                echo "Fail";
            }
           
        }
        else
        {
            echo "All subject marks should be 0 to 100<br>";
        }

     }


    ?>
</body>
</html>