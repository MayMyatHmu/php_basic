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
 // remove all session variables 
 session_unset();
 //destory the session
 session_destroy();

 echo "All session variables are now removed, and the session is destroyed."
 ?>
</body>
</html>