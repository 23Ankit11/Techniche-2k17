<?php

    if(isset($_POST["login"])) {

    if($_POST['passkey'] == "login"){
     header("location: logindata.php");
    }
    if($_POST['passkey'] == "robotics"){
     header("location: roboticsdata.php");
    }
}

?>



<html>  
  
<head>  
    <title>Techniche 17</title>  
</head>  
  
<body>  



<form action="" method="post">     
    <h1>Database Access</h1>             
    <div class="name">
        <input name="passkey" type="text" placeholder="passkey" class="inputText" required/>          
    </div>            
    <input type="submit" class="register-buttton" value="Submit" name="login" onclick="return Validate()">  
</form>   





 </body>  
  
</html>  