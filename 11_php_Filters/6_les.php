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
 $email = "join.doe@example.com";

 //Remove all illegal characters from email

 $email = filter_var($email,FILTER_SANITIZE_EMAIL);

 //Validate e-mail

 if(!filter_var($email,FILTER_VALIDATE_EMAIL)=== false) { 
  echo("$email is a valid emailaddress");
 }else{ 
  echo("$email is not a valid email address");
 }
 ?>
</body>
</html>