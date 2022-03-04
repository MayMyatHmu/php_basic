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
 $ip = "127.0.0.1";

 if(!filter_var($ip,FILTER_VALIDATE_IP)===false){ 
  echo("$ip is a valid IP address");
 }else{ 
  echo("$ip is not a valid IP address");
 }
 ?>
</body>
</html>