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
 class pi { 
public static $value=3.14159;
 public function staticValue() { 
  return self::$value;
 }
 }

 //Get static property
 $pi = new pi();
 echo $pi->staticValue();
 
 ?>
</body>
</html>