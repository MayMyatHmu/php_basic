<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<title>Writing PHP Function with Parmenters</title>
<body>
 <?php 
 function addFunction($num1, $num2) { 
  $sum = $num1 + $num2;
  echo "Sum of the two numbers is : $sum";
 }

 addFunction(10, 20);
 ?>
</body>
</html>