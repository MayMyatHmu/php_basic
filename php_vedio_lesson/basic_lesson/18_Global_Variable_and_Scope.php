<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Galobal Variable and Scope</title>
</head>
<body>
 <?php
 $x ="outsite";
  function scope(){ 
   global $x;
    //$x = "insite";
    echo $x;
  }
  echo $x;
  echo "<br>";
  scope();
 ?>
</body>
</html>