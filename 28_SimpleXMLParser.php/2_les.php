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
 libxml_use_internal_errors(true);
 $myXMLData = 
 "<?xml version='1.0' endcoding='UTF-8'?>
 <decument>
 <user>John Doe</wronguser>
 <email>John@example.com</wrongemail>
 </decument>";

 $xml = simplexml_load_string($myXMLData);
 if ($xml === false) { 
  echo "Failed loading XML: ";
  foreach(libxml_get_errors() as $error){ 
   echo "<br>", $error->message;
  }
 }else { 
  print_r($xml);
 }
 ?>
</body>
</html>