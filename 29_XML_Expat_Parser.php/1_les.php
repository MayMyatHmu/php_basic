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
 //Initialize the XML parser
 $parser=xml_parser_create();

 //Function to use at the start of an element
 function start($parser,$element_name,$element_attrs){ 
  switch($element_name) { 
   case "NOTE":
    echo "-- Note --<br>";
    break;
    case "TO":
     echo "To: ";
     break;
     case "FORM":
     echo "Form";
     break;
     case "HEADING":
     echo "Heading: ";
     break;
     case "BODY":
     echo "Message";
  }
 }
 // Function to use at the end of an element
 function stop($parser,$element_name) { 
  echo "<br>";
 }
  //function to  use when finding character data
 function char($parser,$data) { 
  echo $data;
 }

 //Specify element handler
 xml_set_element_handler($parser,"start","stop");

 //Specify element hanler
 xml_set_character_data_handler($parser,"char");

 //Open XML file
 $fp=fopen("note.xml", "r");

 //Read data
 while ($data=fread($fp,4096)) { 
  xml_parse($parser,$data,feof($fp)) or die (sprintf("XML Error: %s at line %d", xml_error_string(xml_error_string(xml_get_error_code($parser))),
  xml_get_current_line_number($parser) ));
 }

 //Free the XML parser
 xml_parser_free($parser);
 ?>
</body>
</html>