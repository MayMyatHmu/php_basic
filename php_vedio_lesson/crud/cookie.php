<?php
 $name ="CookieName";
 $value ="500";
 $date = time() + (60 * 60 * 24 * 30);
  setcookie($name,$value,$date);

  //if(isset($_COOKIE['CookieName'])){ 
    echo  $cookievalue = $_COOKIE['CookieName'];
//  }
?>