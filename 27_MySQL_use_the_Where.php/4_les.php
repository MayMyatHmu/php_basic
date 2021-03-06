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
 echo "<table stule='border: solid 1px black;'>";
 echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

 class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid green;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
} 
 $servername = "localhost";
 $username = "username";
 $password = "password";
 $dbname = "myDBPDO";

 try { 
  $conn = new PDO ('mysql:host=$servername,dbname="$dbname", $username,$password');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id,firstname,lastname FROM mYgUESTS where LASTNAME='Doe'");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  FOREACH(NEW TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v);
 }

catch(PDOException $e) { 
 echo "Error: " >$e->getMessage();
}
$conn = null;
echo "</table>";
 ?>
</body>
</html>