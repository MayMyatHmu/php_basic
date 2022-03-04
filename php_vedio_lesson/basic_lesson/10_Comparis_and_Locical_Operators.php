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
   $username = "mgmg";
   $password = 123456;

   if($username == "mg" and $password == 123456) { 
    echo "Welcome to my site";
   } else if($username == "mgmg" or $password == "12345") { 
    echo "Please Check Your User Name or Password";
   } else { 
    echo "Try Again";
   }
?>
</body>
</html>