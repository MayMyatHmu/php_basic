<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <?Php
 $i = 0;

 while( $i < 10) { 
  $i++;
  if ( $i == 3) break;
 }
 echo ("Loop stoped at i = $i");
 ?>
</body>
</html>