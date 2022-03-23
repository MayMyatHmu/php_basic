<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <style>
  table, th, td{ 
   border: 1px solid back;
  }
 </style>
</head>
<body>
 <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

//Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//Check connection
if ($conn->connect_error) { 
 die("Connectin failed: " .$conn->connect_error);
}
$sql = "SELECT id,firstname,lastname FROM MyGuests";
$result = $conn->query($sql);

if($result->num_rows > 0) { 
 echo "<table><tr><th>ID</th><th>Name</th></tr>";
 // output data of each row
 while($row = $result->fetch_assoc()) { 
  echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td></tr>";
 }
 echo "</table>";
}else{ 
 echo "0 results";
}
$conn->close();
 ?>
</body>
</html>