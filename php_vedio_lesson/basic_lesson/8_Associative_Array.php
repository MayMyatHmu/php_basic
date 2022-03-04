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
 $array =['ko', 'mgmg'];
 print_r($array);
 echo "<br>";
 $Associative_array=array('first_name' => 'ko', 'last_name'=>'mgmg');

  print_r($Associative_array);
echo "<br>";
  echo $Associative_array['first_name'];
 ?>
</body>
</html>