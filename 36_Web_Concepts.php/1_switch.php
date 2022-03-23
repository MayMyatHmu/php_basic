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
  srand( microtime() * 1000000 );
 $num = rand( 1, 4);

 switch ( $num ) { 
  case 1: $image_file = "/php/images/logo.png";
  break;

  case 2: $image_file = "/php/images/php.jpg";
  break;
  
  case 3: $image_file = "/php/images/logo.png";
  break;

  case 4: $image_file = "/php/images/php.jpg";
  break;
 }
 echo "Random Image :<img src=1.jpg />";
 ?>
</body>
</html>