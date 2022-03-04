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
 $jsonobj =
 '{"Peter":35,"Ben":37,"Joe":43}';

 $arr  = json_decode($jsonobj, true);

 foreach($arr as $key => $value) { 
  echo $key ."=> " . $value ."<br>";
 }

 ?>
</body>
</html>