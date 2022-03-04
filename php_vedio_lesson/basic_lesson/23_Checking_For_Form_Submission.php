<?php
 if(isset($_POST['sub'])){ 
 echo "Hello May Myat Hmue Student";
 }
// echo $_POST['user name'];
 // echo $_POST['password'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 echo $username . "<br>";
 echo $password;
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Checking For Form Submission</title>
</head>
<body>
 <form action="Checking_For_Form_Submission.php" method="post">
  <input type="text"placeholder="Please Enter Your name"name="username"><br><br>;
  <input type="password"placeholder="PleasweEnter Your password"name="password"><br><br>
  <input type="submit"name="sub">
 </form>
</body>
</html>