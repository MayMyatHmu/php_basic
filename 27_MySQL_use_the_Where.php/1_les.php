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
 $servername = "loaclhost";
 $username = "username";
 $password = "password";
 $dbname = "myDB";

 // Crete connection
 $conn = new mysqli($servername, $username,$password,$dbname);
 //Check connection
 if ($conn->connect_error) { 
  die("Connection failed: " . $conn->conect_error);
 }
 $sql = "SELECT id,firstname,lastname FROM MyGuests WhERE MyGuests WHERE lastname='Doe'";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) { 
  // output data of each row
  while($row = $result->fetch_assoc()) { 
   echo "<br> id: " . $row["id"]. " - Name: ". $row["firstname"]. " " .$row["lastname"] ."<br>";
  }
 }else { 
  echo "0 results";
 }

 $conn->close();

 ?>
</body>
</html>