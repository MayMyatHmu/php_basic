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
 $int = 0;

 if(filter_var($int,FILTER_VALIDATE_INT)=== 0 || !filter_var($int,FILTER_VALIDATE_INT)=== false) { 
  echo("Integer isvalid");
 }else{ 
  echo("Integer is not valid");
 }
 ?>
</body>
</html>