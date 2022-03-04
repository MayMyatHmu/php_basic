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
 $url = "https//www.w3schools.com";

 ///Remove all illegal characters from a url

 $url = filter_var($url,FILTER_SANITIZE_URL);

 // Validate url

 if(!filter_var($url,FILTER_VALIDATE_URL)===false) { 
  echo("$url is valid URL");
 }else{ 
  echo("$url is not a valid URL");
 }
 ?>
</body>
</html>