<?php 
session_start();

if( isset($_SESSION['counter'])) { 
 $_SESSION['counter'] += 1;
}else { 
 $_SESSION['counter'] = 1;
}
$msg = "You have visited this page ". $_SESSION['counter'];
$msg .= "in this session.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<title>Setting up a PHP session</title>
<body>
 <?php 
 echo ( $msg ); 
 ?>
</body>
</html>