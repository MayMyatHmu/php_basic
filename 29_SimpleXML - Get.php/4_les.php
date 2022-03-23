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
 $xml=simplexml_load_file("books.xml")
 or die("Error: Cannot create object");
 echo $xml->book[0]['category'] . "<br>";
 echo $xml->book[1]->title['lang'];
 ?>
</body>
</html>