<?php
 if(isset($_POST['submit'])){ 
   $usernames =['Su Myat Moe','Shwe Si Hling','May Myat Hmue',"Hnin Shwe Yee Oo",'Poe Shwe Yee Oo'];
    $username=$_POST['username'];
   $password=$_POST['password'];
   $min = 5;
   if(strlen($username) > $min){ 
    if(in_array($username,$usernames)){ 
 ?>
     <!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h1>Hello Green Hacker Online Traing Center</h1>
 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius cumque voluptatem quis, officia blanditiis cum laudantium, voluptatum deleniti eum laborum numquam, vero porro necessitatibus fuga totam consectetur? Consequatur, a voluptates!</p>
</body>
</html>
<?php
   }else{ 
    echo "Try Again";
   }
   }else{ 
    echo "Please Enter User Name more than 5 Characters";
   }
   
 }
?>
