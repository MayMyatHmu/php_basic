<?php
$connect=mysqli_connect('localhost','root','','loginapp');
   if(!$connect){
     die('Connected Failed');
 }
 if(isset($_POST['update'])){ 
  $username=$_POST['username'];
   $password=$_POST['password'];
  $id = $_POST['id'];

  
    $query = "UPDATE users SET username='$username',password='$password' WHERE id=$id;) ";
  
    $result=mysqli_query($connect,$query);

    if(!$result){ 
      die('Query Failed'. mysqli_error());
    }
 
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <title>Insert Data</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
</head>
<body>
 <div class="container">
  <div class="row">
   <div class="col-md-8">
    <h1 class="text-center">Log in Form</h1>
    <form action="" method="post">
  <br><br>
  <input type="text" class="form-control" placeholder="Please Enter Your Name" name="username">
  <br><br>
  <input type="password" class="form-control" placeholder="Please Enter Your Password" name="password">
  <br><br>
  
  <select name="id" id="" class="form-control">
   <?php 
   $query = "SELECT id, username FROM users";
   $result = mysqli_query($connect, $query);
   while($row = mysqli_fetch_assoc($result)){
     $id = $row['id'];
     $username = $row['username'];
   }
   ?>
  <option value="<?php echo $id; ?>"><?php echo $username; ?></option>
  </select>
  <br><br>
  <input type="submit" class="btn btn-primary" name="update" value="Update">

 </div>
 </form>
   </div>
  </div>
 </div>
 

<script src="js/jquery.min.js"></script>
<script  src="js/bootstrap.min.js"></script>
</body>
</html>

