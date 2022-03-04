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
 $d=mktime(11, 14, 8,12, 2014);
 echo "Created date is " .date("Y-m-d h:i:sa" ,$d);
  ?>
</body>
</html>