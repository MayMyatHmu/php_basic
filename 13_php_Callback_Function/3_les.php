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
 function exclaim($str) { 
  echo $str . "! <br>";
 }

 function ask($str) { 
  echo $str . " ? <br>";
 }

 function printFormatted($str,$format) { 
  //Calling the $format callback function
  echo $format($str) . "<br>";
 }

 // Pass "exclaim" and "ask" as callback functions to printFormatted()
 printFormatted("Hello world", "exclaim");
 printFormatted("Hello world", "ask");
 ask("Maymyithmu");

 function sum($a, $b){
  $answer = $a + $b;
  echo $answer;
 }
 sum(23, 34);
 ?>
</body>
</html>