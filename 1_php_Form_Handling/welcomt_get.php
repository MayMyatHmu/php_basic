 <?php 
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo $name;
    echo "<br>";
    echo $email;

    if (empty($name)) {
      echo "name is empty";
    }
    if(empty($email)) {
      echo "email is empty";
    }
  }
  ?>