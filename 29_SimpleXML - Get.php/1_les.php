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
 $xml=simplexml_load_file("note.xml")
 or die("Error: Connot create object");
 echo $xml->to . "<br>";
 echo $xml->form . "<br>";
 echo $xml->heading . "<br>";
 echo $xml->body;
 ?>
</body>
</html>