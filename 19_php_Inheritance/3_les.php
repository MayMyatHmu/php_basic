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
 class Fruit { 
  public $name;
  public $color;
  public function __construct($name, $color) { 
   $this->name = $name;
   $this->color = $color;
  }
  protected function intro() { 
   echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
 }
 class Strawberry extends Fruit { 
  public function message() { 
   echo "Am I a fruit or a berry?";
     // Call protected function from within derived class - OK
     $this -> intro();
  }
 }
 $strawberry = new Strawberry("Strawberry", "red");
 // OK. _construct() is public
 $strawberry->message(); // OK. message() is public and it calls intro( )(which is protected) from wthinthe derived class
 ?>
</body>
</html>