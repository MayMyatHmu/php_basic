<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <?php
 session_start();
 ?>
</head>
<body>
 <?php
 //Echo session variable that were set on previous page
 echo "Favorite color is" .
  $_SESSION["favcolor"] . ".<br>";
  echo "Favorite animal is " .
  $_SESSION["favanimal"] . ".";
?>
</body>
</html>