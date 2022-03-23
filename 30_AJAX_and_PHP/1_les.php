<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<script>
 function showHint(str) { 
  if (str.length == 0) { 
   document.getEmentById("extHint").innerHTML =  "";
   return;
  }else { 
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function() { 
    i (this.readyState == 4 && this.status == 200) { 
     document.getElementById("txtHnit").innerHTML = this.responeseText;
    }
   }
   xmlhttp.open("GET", "getthint.php?q="+str, true);
   xmlhttp.send();
  }
 }
</script>
<body>
<p><b>Start typing a name in the input field below:</b></p>
<form action="">
 <label for="fname">Firstname:</label>
 <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>