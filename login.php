<?php

   include("config.php");
 session_start(); 
   require 'PHPMailerAutoload.php';

   $visit ="index.php";
if(isset($_GET['next'])){

    $next = $_GET['next'];

    if($next == "escalade"){

          $visit = "register.php?next=$next";

    }else{
  $visit = "index.php";
}

}




$state = 0;

if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["Login"])) {
     
      
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id , isActive FROM participants WHERE email = '$email' and password = '$mypassword'";

      $retval = $db->query($sql);

      $row = $retval->fetch_assoc();

      $active = $row["isActive"];
      
      $count = $retval->num_rows;

  
      // If result matched $myusername and $mypassword, table row must be 1 row
     if($count == 1 ) {
         $_SESSION['login_user'] = $email;
         
         header("location: $visit");
      }else {if($count == 1) {
        echo "Please confirm your account first.";
         
      }else{
        echo "Your Login Name or Password is invalid";
      }
    }
   }




if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["register"])){

  $state = 1;
  $name = mysqli_real_escape_string($db,$_POST['name']);
  $phone = mysqli_real_escape_string($db,$_POST['phone']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $institute = mysqli_real_escape_string($db,$_POST['institute']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
       
  if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  } 


  $sql = 'INSERT INTO participants '.'( name, email, phone, institute, password ) '.'VALUES ("' . $name . '","' . $email . '","' . $phone . '","' . $institute . '","' . $password . '")';


  if ($db->query($sql) === TRUE) {
      

   $sql = 'SELECT id  FROM participants WHERE email = "'.$email.'"';
   
   $retval = $db->query($sql);

   if ($retval->num_rows == 1) {
      while($row = $retval->fetch_assoc()) {
          $id = $row["id"];


          $confirm = "";
          for($i=0;$i<10;$i++){
            $confirm .= mt_rand(1,9);
          
            }

          
 
          


          $confirmlink = "https://techniche.org/Techniche17/confirm.php?e=$email&c=$confirm&next=";

          // $next = $_GET['next'];

          
         $sql = 'UPDATE participants SET isActive ="'.$confirm.'" , password = "'.$password.'" WHERE id = "'.$id.'"';

         if ($db->query($sql) === TRUE) {

         }else{

             echo "Email not valid or try again later.";
             exit();

          }


          $mail = new PHPMailer;

          $mail->IsSMTP();
	  $mail->Host = "smtpout.secureserver.net";	  
	  $mail->Username = "abhishek@techniche.org"; /*Substitute with your real email*/
	  $mail->Password = "techniche"; /*Substitute with your real password*/
	  $mail->SMTPAuth = true;
	  $mail->Port = 80;
          $mail->setFrom('abhishek@techniche.org', 'Techniche');
          $mail->addAddress($email, $name);     // Add a recipient
          

          $mail->Subject = 'Techniche: Confirm Account';
          $mail->Body    = 'Please click on the link to confirm your account.'. $confirmlink.' Once confirmed login with email: '.$email.'';

          if(!$mail->send()) {
              echo "$email";
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          } else {
             //echo "Confirmation is sent to your account. Confirm your account.";
            header("Location:https://techniche.org/Techniche17/confirmmationmail.html");
            exit();
          } 

          
        }

  }else {
    echo "Email Already Registered or Error in Connection. Please try Again.";
    exit();
  }}


  if($state == 2){
    echo "Account Registration failed";
    exit();
  }
  $db->close();

  exit();

}


?>






<html >
<head>
  <meta charset="UTF-8">
  <title>Techniche 17</title>
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="loginstyle.css">

  
<!-- .registerss--contentss--competitionss {
  width: 500px;
  margin: 100px auto;
} -->

</head>

<body>
  <div class="content">
	
      <div class="wrapper">
    		
        <div class="register--content">      		
      		<div class="login--button">
      		<span>If you have an   account</span>
      			<a class="btn" data-popup-open="register-popup" href="#">Login</a>
      		</div>
      		
      		 <h1>Create a new account</h1>
      		
      		

        	<form action="" method="post">        			
        		<div class="name">
        		  <input name="name" type="text" class="inputText" required/>
        		  <span class="floating-label">Your name</span>
        		</div>
        				
        		<div class="email">
        		  <input name="email" type="email" class="inputText" required/>
        		  <span class="floating-label">Your email</span>
        		</div>

        		<div class="password">
        		  <input name="password" id="password" type="password" class="inputText" required/>
        		  <span class="floating-label">Your password</span>
        		</div>
        		<div class="password">
        		  <input name="confirmpassword" id="confirm_password" type="password" class="inputText" required/>
        		  <span class="floating-label">Your password</span>
        		</div>

        		<div class="institute">
        		  <input name="institute" type="text" class="inputText" required/>
        		  <span class="floating-label">Your institute</span>
        		</div>

        		<div class="phone">
        		  <input name="phone" type="text" class="inputText" required/>
        		  <span class="floating-label">Your phone</span>
        		</div>

        		<input type="submit" class="register-buttton" value="Sign Up" name="register" onclick="return Validate()">	
        	</form>		
      	</div>	
    		
    		
      	<div class="login--content">
      		
      		<div class="login--button">
      		<span>Create a new  account</span>
      			<a class="btn-reg" data-popup-open="register-popup" href="#">Sign up</a>
      		</div>
      		<h1>Login to your account</h1>
      	
      	
      	<form action="" method="post">
      		<div class="email">
      	    	<input name="email" type="email" class="inputText form" required/>
          		<span class="floating-label">Your email</span>
      		</div>

      		<div class="password">
       	    	<input name="password" type="password" class="inputText" required/>
          		<span class="floating-label">Your password</span>
      		</div>
      		<span>Reset your pasword</span>

      		<input type="submit" class="register-buttton" value="Login" name="Login">
      		</form>		
      	</div>
    	
      </div>
    	
    	<div class="registred">
    		<h1>Great Job</h1>
    		<button class="reset">Reset</button>
    	</div>
	
	
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

    <script src="js/login.js"></script>
 <script type="text/javascript">
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}
	
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</body>
</html>
