<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <?Php
 $myXMLData = 
 "<?xml version='1.0' encoding='UTF-8'?>
 <note>
 <to>Tove</to>
 <form>Jani</form>
 <heading>Reminder</heading>
 <body>Don't forget me this weekend!
 </body>
 </note>";

 $xml=simplexml_load_string($myXMLData) or die("Error: Connot create object");
 print_r($xml);
 ?>
</body>
</html>