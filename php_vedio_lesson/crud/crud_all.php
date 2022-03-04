<?php
require_once "db.php";
include_once "function.php";
if(isset($_POST['submit'])){ 
  $username = $_POST['username'];
  $password = $_POST['password'];
  if($username && $password){ 
    $query ="INSERT INTO users(username,password) VALUES ('$username','$password') ";
    $result = mysqli_query($connect,$query);
    result_query($result);
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
 <title>CRUD  Operation</title>
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
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header"><h1>register form </h1></div>
          <div class="card-body">
            <form action="" method="post">
  <br><br>
  <input type="text" class="form-control" placeholder="Please Enter Your Name" name="username">
  <br><br>
  <input type="password" class="form-control" placeholder="Please Enter Your Password" name="password">
  <br><br>
  <input type="submit" class="btn btn-primary" name="submit">
 </div>
 </form>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h1>User Data</h1>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Password</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        
        <tr>
            <?php
        $query ="SELECT * FROM users";
        $result = mysqli_query($connect,$query);
        result_query($result);

        while($row = mysqli_fetch_assoc($result)){ 
          $userid = $row['id'];
          $username = $row['username'];
          $password = $row['password'];
          ?>
          <tr>
           <td><?php echo $userid;?></td>
            <td><?php echo $username;?></td>
              <td><?php echo $password;?></td>
                <td><button class="btn btn-success">Update</button></td>
                  <td><button class="btn btn-danger">Delete</button></td>
                   </tr>
                  <?php
        }
        ?>
         
       
      </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
 
 

<script src="js/jquery.min.js"></script>
<script  src="js/bootstrap.min.js"></script>
</body>
</html>