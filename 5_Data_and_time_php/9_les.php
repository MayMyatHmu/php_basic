<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <?php
 $d1=strtotime("July 04");
 $d2=ceil (($d1-time())/60/60/24);
 echo "There are" . $d2 ."days until 4th of July.";
 ?>
</body>
</html>