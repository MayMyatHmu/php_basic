<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<title>Dynamic Function Calls</title>
<body>
 <?php 
 function sayHello(){ 
  echo "Hello<br>";
 }
 $function_holder = "sayHello";
 $function_holder();
 ?>
</body>
</html>