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
 $channel = array('title' => "What's For Dinner", 'link' => 'http://menu.example.com/', 'description' => 'Choose what to eat tonight,');

 print"<cahnnel>\n";

 foreach ($channel as $element => $content) { 
  print " <$element>";
  print htmlentities($content);
  print "</$element>\n";
 }
 print "</channel>";
 ?>
</body>
</html>