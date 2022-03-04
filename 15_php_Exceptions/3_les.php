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
 function divide($dividend, $divisor) { 
  if($divisor == 0) { 
   throw new Exception("Divison by zero");
  }
  return $dividend /  $divisor;
 }

 try { 
  echo divide(5,0);
 }catch(Exception $e) { 
  echo "Unable to divide .";
 }finally { 
  echo "Process complete.";
 }
 ?>
</body>
</html>