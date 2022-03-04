<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Constant</title>
</head>
<body>
 <?php
 $constant_name = "Green Hackers";
 $second_constant = "Green Hackers IT World";
  define("HELLO", $constant_name);
  define("HELLOWorld",$second_constant);
  
   echo HELLO;
   echo "<br>";
   echo HELLOWorld;
 ?>
</body>
</html>